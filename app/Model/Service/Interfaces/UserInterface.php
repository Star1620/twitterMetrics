<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Model\Service\Interfaces;

use App\Model\Entity\UserEntity;
use App\Exception\UserServiceException;

/**
 * Interface UserInterface
 * @package App\Model\Service\Interfaces
 */
interface UserInterface
{

    /**
     * @param arrayHash $values
     * @return UserEntity
     * @throws UserServiceException
     */
    public function addUser(arrayHash $values): UserEntity;
}