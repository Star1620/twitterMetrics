<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Model\Service;

use App\Model\Entity\UserEntity;
use App\Model\Manager\UserManager;
use Doctrine\ORM\QueryBuilder;
use Nette\Utils\ArrayHash;
use App\Exception\UserServiceException;

class UserService implements UserInterface
{

    /** @var UserManager */
    private $userManager;

    /**
     * UserService constructor
     *
     * @param UserManager   $userManager
     */

    public function __construct(
        UserManager $userManager
    ) {
        $this->userManager = $userManager;
    }

    /**
     * @throws UserServiceException
     */
    public function addUser(ArrayHash $values): UserEntity
    {
        $user = new UserEntity();
        try {
            $user->setName('Jmeno1');
            $user->setEmail('email');
            $user->setState(1);
            $user->setCreatedBy('Vytvořil');
            $user->setUpdatedBy('Upravil');

            $this->persist($user)->flush();
        } catch (\Exception $e) {
            throw new UserServiceException($e->getMessage(), 0, $e);
        }
        return $user;
    }

}