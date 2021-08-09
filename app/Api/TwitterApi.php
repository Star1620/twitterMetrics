<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Api;

use App\Exception\ApiException;
use Nette\Neon\Neon;
use Nette\PhpGenerator\Property;
use Tracy\Debugger;
use Nette\SmartObject;


/**
 * Class TwitterApi
 * @package App\Api
 * @property string $defaultApi
 */
class TwitterApi
{
    /** @property TwitterApi  */
    private $defaultApi;

    protected function getDefaultApi()
    {
        return $this->defaultApi;
    }


    public function __construct(
        array $defaultApi
    )
    {
        $this->defaultApi = $defaultApi;
    }

    /**
     * @throws ApiException
     */
    public function connectTwitter(string $search, int $number): string
    {
        try{
            $curl = curl_init();
            $header = array('Authorization: '. Neon::decode($this->defaultApi['defaultApi']));
//            $header = array('Authorization: '.$this->config );
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.twitter.com/2/tweets/search/recent?max_results=100&query='.$search.'&tweet.fields=author_id,created_at,entities,geo,in_reply_to_user_id,lang,possibly_sensitive,referenced_tweets,source',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 20,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => $header
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            return($response);

        } catch(\App\Exception $e) {
            throw new ApiException($e->getMessage(), 0, $e);
        };

    }




}