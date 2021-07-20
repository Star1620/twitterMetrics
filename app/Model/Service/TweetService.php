<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Model\Service;

use App\Exception\TweetServiceException;
use App\Model\Entity\TweetEntity;
use App\Model\Entity\UserEntity;
use App\Model\Manager\TweetManager;
use App\Model\Service\Interfaces\TweetInterface;
use Nette\Utils\DateTime;

class TweetService implements TweetInterface
{

    /** @var TweetManager */
    private TweetManager $tweetManager;

    /**
     * TweetManager Constructor.
     *
     * @param TweetManager   $tweetManager
     */
    public function __construct(
        TweetManager $tweetManager
    ) {
        $this->tweetManager = $tweetManager;
    }

    /**
     * @param int $tweetId
     * @param DateTime $created
     * @param int $authorId
     * @param string $source
     * @param string $text
     * @param string $referencedTweets
     * @return TweetEntity|null
     * @throws TweetServiceException
     */
    public function createTweet(
        int $tweetId,
        datetime $created,
        int $authorId,
        string $source,
        string $text,
        string $referencedTweets
    ): ?TweetEntity {
        try {
            $newTweet = new TweetEntity();
            $newTweet->setTweetId($tweetId)
                ->setCreated($created)
                ->setAuthorId($authorId)
                ->setSource($source)
                ->setText($text)
                ->setReferencedTweets($referencedTweets);
            $this->tweetManager->persist($newTweet);
            $this->tweetManager->flush($newTweet);
        } catch (\Exception $e) {
            throw new TweetServiceException($e->getMessage(), 0, $e);
        }
    return $newTweet;
    }

}