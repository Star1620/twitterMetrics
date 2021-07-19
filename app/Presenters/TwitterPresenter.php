<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Presenters;

use App\Component\Form\Tweet\TweetForm;
use App\Component\Form\Tweet\TweetFormFactory;
use App\Component\Grid\Tweet\TweetGrid;
use App\Component\Grid\Tweet\TweetGridFactory;
use Nette;
use Nette\Http;
use GuzzleHttp\Client;

/**
 * Class TwitterPresenter
 * @package Presenters
 */
class TwitterPresenter extends Nette\Application\UI\Presenter
{

    /** @var Client */
    private $client;

    /** @var TweetGridFactory */
    public TweetGridFactory $tweetGridFactory;

    /** @var TweetFormFactory */
    private TweetFormFactory $tweetFormFactory;


    /**
     * @param TweetGridFactory $tweetGridFactory
     * @param TweetFormFactory $tweetFormFactory
     */
    public function injectDependencies(
        TweetGridFactory $tweetGridFactory,
        TweetFormFactory $tweetFormFactory
    ) {
        $this->tweetGridFactory = $tweetGridFactory;
        $this->tweetFormFactory = $tweetFormFactory;
    }


    /**
     * @return TweetGrid
     */
    protected function createComponentTweetGrid(): TweetGrid
    {
        return $this->tweetGridFactory->create();
    }

    /**
     * @return TweetForm
     */
    protected function createComponentTweetForm(): TweetForm
    {
        return $this->tweetFormFactory->create();
    }



}