<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Presenters;

use Nette;
use Nette\Http;
use App\Api\TwitterApi;
use App\Model\Manager\TweetManager;


class HomepagePresenter extends Nette\Application\UI\Presenter
{

    /** @var TwitterApi */
    private $apiData;

    /** @var TweetManager */
    private $tweetManager;

    static protected $search = 'pilulka';

    public function __construct(
//        TwitterApi $apiData,
        TweetManager $tweetManager
    )
    {
//        $this->apiData = $apiData;
        $this->tweetManager = $tweetManager;
    }

    public function renderDefault()
    {
        $this->template->data = json_decode($this->tweetManager->findTweet("pilulka"));
//        $this->template->data = 'Test';
//        $this->template->render();
    }


    public function actionDotaz($search)
    {

    }

}
