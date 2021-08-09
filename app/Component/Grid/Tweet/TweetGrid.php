<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Component\Grid\Tweet;

use App\Model\Manager\TweetManager;
use Nette\Application\UI\Control;
use Nette\Application\UI\TemplateFactory;
use Contributte\Translation\Translator;
use Tracy\Debugger;

class TweetGrid extends Control
{

    /** @var Translator */
    private $translator;

    /** @var TweetGridFactory */
    public TweetGridFactory $tweetGridFactory;

    /** @var TweetManager */
    private TweetManager $tweetManager;

    public function __construct(
        TweetManager $tweetManager,
        Translator $translator,
        TweetGridFactory $tweetGridFactory
    ) {
        $this->tweetManager = $tweetManager;
        $this->translator = $translator;
        $this->tweetGridFactory = $tweetGridFactory;
}

    /** Render */
    public function render()
    {
        $this->template->setFile("../App/Component/Grid/Tweet/Template/tweetGrid.latte");
        $this->template->data = json_decode($this->tweetManager->findTweet("pilulka"));
        $this->template->render();
    }


    protected function createComponentTweetGrid()
    {
        $this->tweetGridFactory->create();
        $this->template->data = json_decode($this->tweetManager->findTweet("pilulka"));
    }
}