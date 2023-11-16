<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierCommissionDTO StructType
 * @subpackage Structs
 */
class SupplierCommissionDTO extends AbstractStructBase
{
    /**
     * The commissionId
     * @var string|null
     */
    protected ?string $commissionId = null;
    /**
     * The commissionPercent
     * @var float|null
     */
    protected ?float $commissionPercent = null;
    /**
     * The prePayment
     * @var bool|null
     */
    protected ?bool $prePayment = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for SupplierCommissionDTO
     * @uses SupplierCommissionDTO::setCommissionId()
     * @uses SupplierCommissionDTO::setCommissionPercent()
     * @uses SupplierCommissionDTO::setPrePayment()
     * @uses SupplierCommissionDTO::setSupplierId()
     * @param string $commissionId
     * @param float $commissionPercent
     * @param bool $prePayment
     * @param string $supplierId
     */
    public function __construct(?string $commissionId = null, ?float $commissionPercent = null, ?bool $prePayment = null, ?string $supplierId = null)
    {
        $this
            ->setCommissionId($commissionId)
            ->setCommissionPercent($commissionPercent)
            ->setPrePayment($prePayment)
            ->setSupplierId($supplierId);
    }
    /**
     * Get commissionId value
     * @return string|null
     */
    public function getCommissionId(): ?string
    {
        return $this->commissionId;
    }
    /**
     * Set commissionId value
     * @param string $commissionId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionDTO
     */
    public function setCommissionId(?string $commissionId = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionId) && !is_string($commissionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionId, true), gettype($commissionId)), __LINE__);
        }
        $this->commissionId = $commissionId;
        
        return $this;
    }
    /**
     * Get commissionPercent value
     * @return float|null
     */
    public function getCommissionPercent(): ?float
    {
        return $this->commissionPercent;
    }
    /**
     * Set commissionPercent value
     * @param float $commissionPercent
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionDTO
     */
    public function setCommissionPercent(?float $commissionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionPercent) && !(is_float($commissionPercent) || is_numeric($commissionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionPercent, true), gettype($commissionPercent)), __LINE__);
        }
        $this->commissionPercent = $commissionPercent;
        
        return $this;
    }
    /**
     * Get prePayment value
     * @return bool|null
     */
    public function getPrePayment(): ?bool
    {
        return $this->prePayment;
    }
    /**
     * Set prePayment value
     * @param bool $prePayment
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionDTO
     */
    public function setPrePayment(?bool $prePayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($prePayment) && !is_bool($prePayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prePayment, true), gettype($prePayment)), __LINE__);
        }
        $this->prePayment = $prePayment;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierCommissionDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
}
