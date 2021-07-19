<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Component\Grid\Tweet;

/**
 * Interface TweetGridFactory
 *
 * @package IIS\App\Component\Grid\Divisions
 */
interface TweetGridFactory
{
    /**
     * @return TweetGrid
     */
    public function create(): TweetGrid;
}