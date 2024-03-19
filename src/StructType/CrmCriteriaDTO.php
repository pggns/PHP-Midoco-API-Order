<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmCriteriaDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmCriteriaDTO extends AbstractStructBase
{
    /**
     * The criteriaId
     * @var int|null
     */
    protected ?int $criteriaId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The value
     * @var string|null
     */
    protected ?string $value = null;
    /**
     * Constructor method for CrmCriteriaDTO
     * @uses CrmCriteriaDTO::setCriteriaId()
     * @uses CrmCriteriaDTO::setCustomerId()
     * @uses CrmCriteriaDTO::setTypeId()
     * @uses CrmCriteriaDTO::setValue()
     * @param int $criteriaId
     * @param int $customerId
     * @param string $typeId
     * @param string $value
     */
    public function __construct(?int $criteriaId = null, ?int $customerId = null, ?string $typeId = null, ?string $value = null)
    {
        $this
            ->setCriteriaId($criteriaId)
            ->setCustomerId($customerId)
            ->setTypeId($typeId)
            ->setValue($value);
    }
    /**
     * Get criteriaId value
     * @return int|null
     */
    public function getCriteriaId(): ?int
    {
        return $this->criteriaId;
    }
    /**
     * Set criteriaId value
     * @param int $criteriaId
     * @return \Pggns\MidocoApi\Order\StructType\CrmCriteriaDTO
     */
    public function setCriteriaId(?int $criteriaId = null): self
    {
        // validation for constraint: int
        if (!is_null($criteriaId) && !(is_int($criteriaId) || ctype_digit($criteriaId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($criteriaId, true), gettype($criteriaId)), __LINE__);
        }
        $this->criteriaId = $criteriaId;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CrmCriteriaDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\CrmCriteriaDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
    /**
     * Get value value
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param string $value
     * @return \Pggns\MidocoApi\Order\StructType\CrmCriteriaDTO
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
