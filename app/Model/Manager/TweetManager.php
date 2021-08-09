<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Model\Manager;

use App\Exception\ApiException;
use App\Exception\TweetManagerException;
use App\Model\Entity\TweetEntity;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Decorator\EntityManagerDecorator;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\Mapping;
use App\Api\TwitterApi;

/**
 * Class TweetManager
 * @package App\Model\Manager
 */
class TweetManager
{
    /** @var TwitterApi */
    private TwitterApi $twitterApi;

    /** @var EntityManagerDecorator */
    private EntityManagerDecorator $em;

//    /** @var EntityRepository */
//    private EntityRepository $repository;

    /** @var string */
    private string $entity;

    /** @var string|null */
    private ?string $criteria = null;

    public function __construct(
        EntityManagerDecorator $em,
        TwitterApi $twitterApi
    )
    {
        $this->em = $em;
        $this->twitterApi = $twitterApi;
    }

    /**
     * @param $entity
     * @throws TweetManagerException
     */
    public function persist($entity)
    {
        try {
            $this->em->persist($entity);
        } catch (\Exception $e) {
            throw new TweetManagerException($e);
        }
    }

    /**
     * @param $entity
     * @throws TweetManagerException
     */
    public function flush($entity = null)
    {
        try {
            $this->em->flush($entity);
        } catch (\Exception $e) {
            throw new TweetManagerException('Unexpected database fail', '0', $e);
        }
    }

    /**
     * @param string|null $criteria
     * @param array|null $orderBy
     * @param null $limit
     * @param null $offset
     * @return String
     * @throws ApiException
     */
    public function findTweet(?string $criteria, ?array $orderBy = null, $limit = null, $offset = null): String
    {
        return $this->twitterApi->connectTwitter($criteria, 100);
    }
}