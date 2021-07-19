<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Component\Form\Tweet;

/**
 * Interface TweetFormFactory
 * @package App\Component\Form\Tweet
 */
interface TweetFormFactory
{
    /**
     * @param int|null $tweetId
     * @return TweetForm
     */
    public function create(int $tweetId = null): TweetForm;
}