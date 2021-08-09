<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Presenters;

use App\Component\Grid\Tweet\TweetGrid;
use App\Component\Grid\Tweet\TweetGridFactory;
use Nette;
use Nette\Http;
use App\Api\TwitterApi;
use App\Model\Manager\TweetManager;
use Tracy\Debugger;

class TweetPresenter extends Nette\Application\UI\Presenter
{

    /** @var TwitterApi */
    private $apiData;

    /** @var TweetManager */
    private $tweetManager;

    static protected $search = 'pilulka';

    /** @var TweetGridFactory */
    public TweetGridFactory $tweetGridFactory;



    public function __construct(
//        TwitterApi $apiData,
        TweetManager $tweetManager,
        TweetGridFactory $tweetGridFactory
    )
    {
//        $this->apiData = $apiData;
        $this->tweetManager = $tweetManager;
        $this->tweetGridFactory = $tweetGridFactory;
    }

    public function renderDefault()
    {

//        $this->template->data = json_decode($this->tweetManager->findTweet("pilulka"));
//        Debugger::barDump($this->template->data, 'Template Data');

        //        $this->template->data = 'Test';
//        $this->template->render();
    }

    /**
     * @return TweetGrid
     */
    public function createComponentTweetGrid(): TweetGrid
    {
        return $this->tweetGridFactory->create();
    }

    public function actionDotaz($search)
    {
        // TODO
    }

}
