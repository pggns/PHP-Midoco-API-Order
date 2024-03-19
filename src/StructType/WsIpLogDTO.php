<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WsIpLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class WsIpLogDTO extends AbstractStructBase
{
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The ipAddress
     * @var string|null
     */
    protected ?string $ipAddress = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for WsIpLogDTO
     * @uses WsIpLogDTO::setId()
     * @uses WsIpLogDTO::setIpAddress()
     * @uses WsIpLogDTO::setUserId()
     * @param int $id
     * @param string $ipAddress
     * @param int $userId
     */
    public function __construct(?int $id = null, ?string $ipAddress = null, ?int $userId = null)
    {
        $this
            ->setId($id)
            ->setIpAddress($ipAddress)
            ->setUserId($userId);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\WsIpLogDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get ipAddress value
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }
    /**
     * Set ipAddress value
     * @param string $ipAddress
     * @return \Pggns\MidocoApi\Order\StructType\WsIpLogDTO
     */
    public function setIpAddress(?string $ipAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($ipAddress) && !is_string($ipAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ipAddress, true), gettype($ipAddress)), __LINE__);
        }
        $this->ipAddress = $ipAddress;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\WsIpLogDTO
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
}
