<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserDataDTO StructType
 * @subpackage Structs
 */
class UserDataDTO extends AbstractStructBase
{
    /**
     * The dataKey
     * @var string|null
     */
    protected ?string $dataKey = null;
    /**
     * The dataValue
     * @var string|null
     */
    protected ?string $dataValue = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for UserDataDTO
     * @uses UserDataDTO::setDataKey()
     * @uses UserDataDTO::setDataValue()
     * @uses UserDataDTO::setUserId()
     * @param string $dataKey
     * @param string $dataValue
     * @param int $userId
     */
    public function __construct(?string $dataKey = null, ?string $dataValue = null, ?int $userId = null)
    {
        $this
            ->setDataKey($dataKey)
            ->setDataValue($dataValue)
            ->setUserId($userId);
    }
    /**
     * Get dataKey value
     * @return string|null
     */
    public function getDataKey(): ?string
    {
        return $this->dataKey;
    }
    /**
     * Set dataKey value
     * @param string $dataKey
     * @return \Pggns\MidocoApi\Order\StructType\UserDataDTO
     */
    public function setDataKey(?string $dataKey = null): self
    {
        // validation for constraint: string
        if (!is_null($dataKey) && !is_string($dataKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataKey, true), gettype($dataKey)), __LINE__);
        }
        $this->dataKey = $dataKey;
        
        return $this;
    }
    /**
     * Get dataValue value
     * @return string|null
     */
    public function getDataValue(): ?string
    {
        return $this->dataValue;
    }
    /**
     * Set dataValue value
     * @param string $dataValue
     * @return \Pggns\MidocoApi\Order\StructType\UserDataDTO
     */
    public function setDataValue(?string $dataValue = null): self
    {
        // validation for constraint: string
        if (!is_null($dataValue) && !is_string($dataValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataValue, true), gettype($dataValue)), __LINE__);
        }
        $this->dataValue = $dataValue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UserDataDTO
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
