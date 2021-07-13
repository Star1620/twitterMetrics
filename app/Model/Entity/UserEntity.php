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
 * Class UserEntity
 *
 * @package App\Model\Entity
 * @ORM\Table (name="user")
 * @ORM\Entity
 */
class UserEntity
{

    const STATE_INACTIVE = 0;
    const STATE_ACTIVE = 1;
    const ADMIN_INACTIVE = 0;
    const ADMIN_ACTIVE = 1;

    /** @var array */
    const ALLOWED_STATES = [
        self::STATE_ACTIVE => "active",
        self::STATE_INACTIVE => "inactive"
    ];

    /** @var array */
    const ALLOWED_ADMIN = [
        self::ADMIN_ACTIVE => "active",
        self::ADMIN_INACTIVE => "inactive"
    ];

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column (type="integer", nullable=false)
     * @ORM\GeneratedValue
     */
    private int $id;

    /**
     * @var string
     * @ORM\Column (type="string", length=60, nullable=false)
     */
    private string $name;

    /**
     * @var string
     * @ORM\Column (type="string", length=60, nullable=false)
     */
    private string $email;

    /**
     * @var int
     * @ORM\Column (type="integer", length=1, options={"default":1})
     */
    private int $state;

    /**
     * @var int
     * @ORM\Column (type="integer", length=1, options={"default":0})
     */
    private int $admin;

    /**
     * @var datetime
     * @ORM\Column (type="datetime", nullable=true, options={"default":"CURRENT_TIMESTAMP"})
     */
    private datetime $created;

    /**
     * @var datetime
     * @ORM\Column (type="datetime", nullable=true, options={"default":"CURRENT_TIMESTAMP"})
     */
    private datetime $updated;

    /**
     * @var string
     * @ORM\Column (type="string", length=60, nullable=false)
     */
    private string $createdBy;

    /**
     * @var string
     * @ORM\Column (type="string", length=60, nullable=false)
     */
    private string $updatedBy;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return UserEntity
     */
    public function setName(string $name): UserEntity
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return UserEntity
     */
    public function setEmail(string $email): UserEntity
    {
        $this->name = $email;
        return $this;
    }

    /**
     * @return int
     */
    public function getState(): int
    {
        return $this->state;
    }

    /**
     * @param int $state
     * @return UserEntity
     */
    public function setState(int $state): UserEntity
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return int
     */
    public function getAdmin(): int
    {
        return $this->admin;
    }

    /**
     * @param int $admin
     * @return UserEntity
     */
    public function setAdmin(int $admin): UserEntity
    {
        $this->admin = $admin;
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
     * @return UserEntity
     */
    public function setCreated(datetime $created): UserEntity
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return datetime
     */
    public function getUpdated(): datetime
    {
        return $this->updated;
        return $this;
    }

    /**
     * @param datetime $updated
     * @return UserEntity
     */
    public function setUpdated(datetime $updated): UserEntity
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     * @return UserEntity
     */
    public function setCreatedBy(string $createdBy): UserEntity
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedBy(): string
    {
        return $this->updatedBy;
    }

    /**
     * @param string $updatedBy
     * @return UserEntity
     */
    public function setUpdatedBy(string $updatedBy): UserEntity
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }
}