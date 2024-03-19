<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplaintReasonTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ComplaintReasonTypeDTO extends AbstractStructBase
{
    /**
     * The reasonId
     * @var string|null
     */
    protected ?string $reasonId = null;
    /**
     * The supplierReason
     * @var bool|null
     */
    protected ?bool $supplierReason = null;
    /**
     * Constructor method for ComplaintReasonTypeDTO
     * @uses ComplaintReasonTypeDTO::setReasonId()
     * @uses ComplaintReasonTypeDTO::setSupplierReason()
     * @param string $reasonId
     * @param bool $supplierReason
     */
    public function __construct(?string $reasonId = null, ?bool $supplierReason = null)
    {
        $this
            ->setReasonId($reasonId)
            ->setSupplierReason($supplierReason);
    }
    /**
     * Get reasonId value
     * @return string|null
     */
    public function getReasonId(): ?string
    {
        return $this->reasonId;
    }
    /**
     * Set reasonId value
     * @param string $reasonId
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintReasonTypeDTO
     */
    public function setReasonId(?string $reasonId = null): self
    {
        // validation for constraint: string
        if (!is_null($reasonId) && !is_string($reasonId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reasonId, true), gettype($reasonId)), __LINE__);
        }
        $this->reasonId = $reasonId;
        
        return $this;
    }
    /**
     * Get supplierReason value
     * @return bool|null
     */
    public function getSupplierReason(): ?bool
    {
        return $this->supplierReason;
    }
    /**
     * Set supplierReason value
     * @param bool $supplierReason
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintReasonTypeDTO
     */
    public function setSupplierReason(?bool $supplierReason = null): self
    {
        // validation for constraint: boolean
        if (!is_null($supplierReason) && !is_bool($supplierReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($supplierReason, true), gettype($supplierReason)), __LINE__);
        }
        $this->supplierReason = $supplierReason;
        
        return $this;
    }
}
