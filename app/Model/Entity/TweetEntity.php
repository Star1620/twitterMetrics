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

}