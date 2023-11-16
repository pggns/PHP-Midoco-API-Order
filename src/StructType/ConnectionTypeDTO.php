<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectionTypeDTO StructType
 * @subpackage Structs
 */
class ConnectionTypeDTO extends AbstractStructBase
{
    /**
     * The connectionTypeCode
     * @var string|null
     */
    protected ?string $connectionTypeCode = null;
    /**
     * The connectionTypeId
     * @var int|null
     */
    protected ?int $connectionTypeId = null;
    /**
     * The gender
     * @var int|null
     */
    protected ?int $gender = null;
    /**
     * The reverseConTypeId
     * @var int|null
     */
    protected ?int $reverseConTypeId = null;
    /**
     * Constructor method for ConnectionTypeDTO
     * @uses ConnectionTypeDTO::setConnectionTypeCode()
     * @uses ConnectionTypeDTO::setConnectionTypeId()
     * @uses ConnectionTypeDTO::setGender()
     * @uses ConnectionTypeDTO::setReverseConTypeId()
     * @param string $connectionTypeCode
     * @param int $connectionTypeId
     * @param int $gender
     * @param int $reverseConTypeId
     */
    public function __construct(?string $connectionTypeCode = null, ?int $connectionTypeId = null, ?int $gender = null, ?int $reverseConTypeId = null)
    {
        $this
            ->setConnectionTypeCode($connectionTypeCode)
            ->setConnectionTypeId($connectionTypeId)
            ->setGender($gender)
            ->setReverseConTypeId($reverseConTypeId);
    }
    /**
     * Get connectionTypeCode value
     * @return string|null
     */
    public function getConnectionTypeCode(): ?string
    {
        return $this->connectionTypeCode;
    }
    /**
     * Set connectionTypeCode value
     * @param string $connectionTypeCode
     * @return \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO
     */
    public function setConnectionTypeCode(?string $connectionTypeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($connectionTypeCode) && !is_string($connectionTypeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($connectionTypeCode, true), gettype($connectionTypeCode)), __LINE__);
        }
        $this->connectionTypeCode = $connectionTypeCode;
        
        return $this;
    }
    /**
     * Get connectionTypeId value
     * @return int|null
     */
    public function getConnectionTypeId(): ?int
    {
        return $this->connectionTypeId;
    }
    /**
     * Set connectionTypeId value
     * @param int $connectionTypeId
     * @return \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO
     */
    public function setConnectionTypeId(?int $connectionTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($connectionTypeId) && !(is_int($connectionTypeId) || ctype_digit($connectionTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($connectionTypeId, true), gettype($connectionTypeId)), __LINE__);
        }
        $this->connectionTypeId = $connectionTypeId;
        
        return $this;
    }
    /**
     * Get gender value
     * @return int|null
     */
    public function getGender(): ?int
    {
        return $this->gender;
    }
    /**
     * Set gender value
     * @param int $gender
     * @return \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO
     */
    public function setGender(?int $gender = null): self
    {
        // validation for constraint: int
        if (!is_null($gender) && !(is_int($gender) || ctype_digit($gender))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($gender, true), gettype($gender)), __LINE__);
        }
        $this->gender = $gender;
        
        return $this;
    }
    /**
     * Get reverseConTypeId value
     * @return int|null
     */
    public function getReverseConTypeId(): ?int
    {
        return $this->reverseConTypeId;
    }
    /**
     * Set reverseConTypeId value
     * @param int $reverseConTypeId
     * @return \Pggns\MidocoApi\Order\StructType\ConnectionTypeDTO
     */
    public function setReverseConTypeId(?int $reverseConTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($reverseConTypeId) && !(is_int($reverseConTypeId) || ctype_digit($reverseConTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reverseConTypeId, true), gettype($reverseConTypeId)), __LINE__);
        }
        $this->reverseConTypeId = $reverseConTypeId;
        
        return $this;
    }
}
