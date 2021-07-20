<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Component\Form\Tweet;

use App\Exception\ApiException;
use App\Exception\TweetServiceException;
use App\Model\Manager\TweetManager;
use App\Model\Service\Interfaces\TweetInterface;
use Nette\Application\AbortException;
use Nette\Application\UI\Form;
use Nette\Application\UI\TemplateFactory;
use Nette\ComponentModel\Component;
use Nette\Forms\FormFactory;
use Nette\Application\UI\Presenter;
use Nette\Utils\ArrayHash;

/**
 * Class TweetForm
 * @package App\Component\Form\Tweet
 */
class TweetForm extends Presenter
{

    /** @var TweetManager */
    private TweetManager $tweetManager;

    /** @var TweetInterface */
    private $tweetInterface;

    /** @var int|null $tweetId */
    private $tweetId;

    /** @var TemplateFactory */
    private $templateFactory;

    private mixed $formFactory;

    /**
     * TweetForm constructor.
     *
     * @param int|null              $tweetId
     * @param FormFactory           $formFactory
     * @param TweetManager          $tweetManager
     * @param TweetInterface        $tweetInterface
     */
    public function __construct(
        int|null $tweetId,
        FormFactory $formFactory,
        TweetManager $tweetManager,
        TweetInterface $tweetInterface,
        TemplateFactory $templateFactory
    ) {
        parent::__construct($formFactory);
        $this->tweetId = intval($tweetId);
        $this->tweetManager = $tweetManager;
        $this->tweetInterface = $tweetInterface;
    }

    /** Render search. */
    public function renderSearchTweet()
    {
        $this->setTemplateFactory(TemplateFactory::class );
        $this->template->render();
    }

    protected function createComponentSearchTweetForm()
    {
        $form = $this->formFactory->create();

        $today = new \DateTime();
        $form->addText('name', 'Name')->setRequired();
        $form->addSelect('number', 'No. of records', ['1'=>'100','0'=>'10', '2'=>'50']);

        $form->addSubmit('submit', 'Save')->setHtmlAttribute('class', 'btn btn-success btn-sm');

        $form->onSuccess[] = [$this, 'searchTweetFormOnSuccess'];
        $form->onError[] = [$this, 'searchTweetFormOnError'];

        return $form;
    }

    /**
     * @throws ApiException
     * @throws AbortException
     */
    public function searchTweetFormOnSuccess(Form $form, ArrayHash $values)
    {
        try {
            $this->tweetManager->findTweet($values->name, $values->number);
            $this->flashMessage('success', 'success');
            $this->redirect('Twitter:default');
        } catch (ApiException $e) {
            throw new ApiException($e->getMessage(), 0, $e);
        } catch (AbortException $e) {
            throw new AbortException($e->getMessage(), 0, $e);
        }
    }

    /**
     * @param Form $form
     */
    public function searchTweetFormOnError(Form $form)
    {
        $form->addError('Sorry, not success.');
    }

}