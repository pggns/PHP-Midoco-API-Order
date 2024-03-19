<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierAgencyDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierAgencyDTO extends AbstractStructBase
{
    /**
     * The agencyNo
     * @var string|null
     */
    protected ?string $agencyNo = null;
    /**
     * The batchSettlement
     * @var bool|null
     */
    protected ?bool $batchSettlement = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for SupplierAgencyDTO
     * @uses SupplierAgencyDTO::setAgencyNo()
     * @uses SupplierAgencyDTO::setBatchSettlement()
     * @uses SupplierAgencyDTO::setSupplierId()
     * @uses SupplierAgencyDTO::setUnitName()
     * @param string $agencyNo
     * @param bool $batchSettlement
     * @param string $supplierId
     * @param string $unitName
     */
    public function __construct(?string $agencyNo = null, ?bool $batchSettlement = null, ?string $supplierId = null, ?string $unitName = null)
    {
        $this
            ->setAgencyNo($agencyNo)
            ->setBatchSettlement($batchSettlement)
            ->setSupplierId($supplierId)
            ->setUnitName($unitName);
    }
    /**
     * Get agencyNo value
     * @return string|null
     */
    public function getAgencyNo(): ?string
    {
        return $this->agencyNo;
    }
    /**
     * Set agencyNo value
     * @param string $agencyNo
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO
     */
    public function setAgencyNo(?string $agencyNo = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyNo) && !is_string($agencyNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyNo, true), gettype($agencyNo)), __LINE__);
        }
        $this->agencyNo = $agencyNo;
        
        return $this;
    }
    /**
     * Get batchSettlement value
     * @return bool|null
     */
    public function getBatchSettlement(): ?bool
    {
        return $this->batchSettlement;
    }
    /**
     * Set batchSettlement value
     * @param bool $batchSettlement
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO
     */
    public function setBatchSettlement(?bool $batchSettlement = null): self
    {
        // validation for constraint: boolean
        if (!is_null($batchSettlement) && !is_bool($batchSettlement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($batchSettlement, true), gettype($batchSettlement)), __LINE__);
        }
        $this->batchSettlement = $batchSettlement;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO
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
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
