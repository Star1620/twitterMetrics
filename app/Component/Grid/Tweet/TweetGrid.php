<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Component\Grid\Tweet;

use App\Model\Manager\TweetManager;
use Nette\Application\UI\Presenter;
use Nette\Application\UI\Template as Template;
use Nette\Application\UI\TemplateFactory;
use Contributte\Translation\Translator;

class TweetGrid extends Presenter
{
    /** @var TweetManager */
    private $tweetManager;

    /** @var TemplateFactory */
    private $templateFactory;

    /** @var Translator */
    private $translator;

    public function __construct(
        TweetManager $tweetManager,
        Translator $translator,
        TemplateFactory $templateFactory
    ) {
        parent::__construct();
        $this->tweetManager = $tweetManager;
        $this->translator = $translator;
        $this->templateFactory = $templateFactory;
}

    /** Render */
    public function render(): void
    {
//    $this->setTemplateFactory($this->templateFactory);
//    $this->template->setFile('tweetGrid.latte');
//    $this->template->setTranslator($this->translator);
//    $this->template->render();
    }


    protected function createComponentTweetGrid()
    {


    }

}