<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserWsgroupDTO StructType
 * @subpackage Structs
 */
class UserWsgroupDTO extends AbstractStructBase
{
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The wsgroup
     * @var string|null
     */
    protected ?string $wsgroup = null;
    /**
     * Constructor method for UserWsgroupDTO
     * @uses UserWsgroupDTO::setUserId()
     * @uses UserWsgroupDTO::setWsgroup()
     * @param int $userId
     * @param string $wsgroup
     */
    public function __construct(?int $userId = null, ?string $wsgroup = null)
    {
        $this
            ->setUserId($userId)
            ->setWsgroup($wsgroup);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\UserWsgroupDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get wsgroup value
     * @return string|null
     */
    public function getWsgroup(): ?string
    {
        return $this->wsgroup;
    }
    /**
     * Set wsgroup value
     * @param string $wsgroup
     * @return \Pggns\MidocoApi\Order\StructType\UserWsgroupDTO
     */
    public function setWsgroup(?string $wsgroup = null): self
    {
        // validation for constraint: string
        if (!is_null($wsgroup) && !is_string($wsgroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wsgroup, true), gettype($wsgroup)), __LINE__);
        }
        $this->wsgroup = $wsgroup;
        
        return $this;
    }
}
