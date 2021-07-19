<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Model\Manager;

use App\Model\Entity\UserEntity;
use Doctrine\ORM\EntityManager;

/**
 * Class UserManager
 * @package App\Model\Manager
 */
class UserManager
{
    /** @var EntityManager */
    protected $em;

    /**
     * @param string $name
     * @return array
     */
    public function getUserByName(string $name): array
    {
        return $this->em->createQueryBuilder()
            ->select('entity.name')
            ->from(UserEntity::class, 'entity')
            ->where('entity.name = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getResult();
    }
}