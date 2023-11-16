<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingStatAttributeDTO StructType
 * @subpackage Structs
 */
class BillingStatAttributeDTO extends AbstractStructBase
{
    /**
     * The attribValue
     * @var string|null
     */
    protected ?string $attribValue = null;
    /**
     * The billingStatId
     * @var int|null
     */
    protected ?int $billingStatId = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for BillingStatAttributeDTO
     * @uses BillingStatAttributeDTO::setAttribValue()
     * @uses BillingStatAttributeDTO::setBillingStatId()
     * @uses BillingStatAttributeDTO::setTypeId()
     * @param string $attribValue
     * @param int $billingStatId
     * @param string $typeId
     */
    public function __construct(?string $attribValue = null, ?int $billingStatId = null, ?string $typeId = null)
    {
        $this
            ->setAttribValue($attribValue)
            ->setBillingStatId($billingStatId)
            ->setTypeId($typeId);
    }
    /**
     * Get attribValue value
     * @return string|null
     */
    public function getAttribValue(): ?string
    {
        return $this->attribValue;
    }
    /**
     * Set attribValue value
     * @param string $attribValue
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatAttributeDTO
     */
    public function setAttribValue(?string $attribValue = null): self
    {
        // validation for constraint: string
        if (!is_null($attribValue) && !is_string($attribValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribValue, true), gettype($attribValue)), __LINE__);
        }
        $this->attribValue = $attribValue;
        
        return $this;
    }
    /**
     * Get billingStatId value
     * @return int|null
     */
    public function getBillingStatId(): ?int
    {
        return $this->billingStatId;
    }
    /**
     * Set billingStatId value
     * @param int $billingStatId
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatAttributeDTO
     */
    public function setBillingStatId(?int $billingStatId = null): self
    {
        // validation for constraint: int
        if (!is_null($billingStatId) && !(is_int($billingStatId) || ctype_digit($billingStatId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingStatId, true), gettype($billingStatId)), __LINE__);
        }
        $this->billingStatId = $billingStatId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatAttributeDTO
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
}
