<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Model\Service\Interfaces;

use App\Model\Entity\TweetEntity;
use Nette\Utils\DateTime;

/**
 * Interface TweetInterface
 * @package App\Model\Service\Interfaces
 */
interface TweetInterface
{
    /**
     * @param int $tweetId
     * @param DateTime $created
     * @param int $authorId
     * @param string $source
     * @param string $text
     * @param string $referencedTweets
     * @return TweetEntity|null
     */
    public function createTweet(
        int $tweetId,
        datetime $created,
        int $authorId,
        string $source,
        string $text,
        string $referencedTweets
    ): ?TweetEntity;

}