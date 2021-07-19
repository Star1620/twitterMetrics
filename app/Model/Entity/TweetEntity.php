<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Model\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class TweetEntity
 *
 * @package App\Model\Entity
 * @ORM\Table (name="tweet")
 * @ORM\Entity
 */
class TweetEntity
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column (type="integer", nullable=false)
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var int
     * @ORM\Column (type="integer", nullable=false)
     */
    private int $tweetId;

    /**
     * @var datetime
     * @ORM\Column (type="datetime", nullable=true, options={"default":"CURRENT_TIMESTAMP"})
     */
    private datetime $created;

    /**
     * @var int
     * @ORM\Column (type="integer", nullable=false)
     */
    private int $authorId;

    /**
     * @var string
     * @ORM\Column (type="string", length=60, nullable=false)
     */
    private string $source;

    /**
     * @var string
     * @ORM\Column (type="string", length=500, nullable=false)
     */
    private string $text;

    /**
     * @var string
     * @ORM\Column (type="string", length=300, nullable=false)
     */
    private string $referencedTweets;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getTweetId(): int
    {
        return $this->tweetId;
    }

    /**
     * @param int $tweetId
     * @return TweetEntity
     */
    public function setTweetId(int $tweetId): TweetEntity
    {
        $this->tweetId = $tweetId;
        return $this;
    }

    /**
     * @return datetime
     */
    public function getCreated(): datetime
    {
        return $this->created;
    }

    /**
     * @param datetime $created
     * @return TweetEntity
     */
    public function setCreated(datetime $created): TweetEntity
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return int
     */
    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    /**
     * @param int $authorId
     * @return TweetEntity
     */
    public function setAuthorId(int $authorId): TweetEntity
    {
        $this->authorId = $authorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $source
     * @return TweetEntity
     */
    public function setSource(string $source): TweetEntity
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return TweetEntity
     */
    public function setText(string $text): TweetEntity
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getReferencedTweets(): string
    {
        return $this->referencedTweets;
    }

    /**
     * @param string $referencedTweets
     * @return TweetEntity
     */
    public function setReferencedTweets(string $referencedTweets): TweetEntity
    {
        $this->referencedTweets = $referencedTweets;
        return $this;
    }


}