<?php
declare(strict_types=1);
/**
 * This file is part of application TwitterMetrics
 * @copyright (c) 2021 Lenoch (www.lenoch.cz)
 * @author        Milan Lysak <mlysak@email.cz>
 */

namespace App\Exception;

use Doctrine\DBAL\Exception;

class Exceptions
{

}

class UserServiceException extends Exception
{

}

class TweetServiceException extends Exception
{

}

class TweetManagerException extends Exception
{

}

class UserManagerException extends Exception
{

}

class ApiException extends Exception
{

}