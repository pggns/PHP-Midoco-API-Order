<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDuplicateSupplierInfo StructType
 * @subpackage Structs
 */
class MidocoDuplicateSupplierInfo extends AbstractStructBase
{
    /**
     * The srcSupplierId
     * @var string|null
     */
    protected ?string $srcSupplierId = null;
    /**
     * The destSupplierId
     * @var string|null
     */
    protected ?string $destSupplierId = null;
    /**
     * The destSupplierName
     * @var string|null
     */
    protected ?string $destSupplierName = null;
    /**
     * The duplicateInfo
     * @var bool|null
     */
    protected ?bool $duplicateInfo = null;
    /**
     * The duplicateAddress
     * @var bool|null
     */
    protected ?bool $duplicateAddress = null;
    /**
     * The duplicatePayment
     * @var bool|null
     */
    protected ?bool $duplicatePayment = null;
    /**
     * The duplicateAccounts
     * @var bool|null
     */
    protected ?bool $duplicateAccounts = null;
    /**
     * The duplicateMediator
     * @var bool|null
     */
    protected ?bool $duplicateMediator = null;
    /**
     * The duplicateAgenciesCommission
     * @var bool|null
     */
    protected ?bool $duplicateAgenciesCommission = null;
    /**
     * The duplicateSettlementAccounts
     * @var bool|null
     */
    protected ?bool $duplicateSettlementAccounts = null;
    /**
     * The duplicateAgencies
     * @var bool|null
     */
    protected ?bool $duplicateAgencies = null;
    /**
     * The duplicateAutoRemarks
     * @var bool|null
     */
    protected ?bool $duplicateAutoRemarks = null;
    /**
     * The duplicateStorno
     * @var bool|null
     */
    protected ?bool $duplicateStorno = null;
    /**
     * The duplicateDisabledItemTypes
     * @var bool|null
     */
    protected ?bool $duplicateDisabledItemTypes = null;
    /**
     * The duplicateSelectAll
     * @var bool|null
     */
    protected ?bool $duplicateSelectAll = null;
    /**
     * Constructor method for MidocoDuplicateSupplierInfo
     * @uses MidocoDuplicateSupplierInfo::setSrcSupplierId()
     * @uses MidocoDuplicateSupplierInfo::setDestSupplierId()
     * @uses MidocoDuplicateSupplierInfo::setDestSupplierName()
     * @uses MidocoDuplicateSupplierInfo::setDuplicateInfo()
     * @uses MidocoDuplicateSupplierInfo::setDuplicateAddress()
     * @uses MidocoDuplicateSupplierInfo::setDuplicatePayment()
     * @uses MidocoDuplicateSupplierInfo::setDuplicateAccounts()
     * @uses MidocoDuplicateSupplierInfo::setDuplicateMediator()
     * @uses MidocoDuplicateSupplierInfo::setDuplicateAgenciesCommission()
     * @uses MidocoDuplicateSupplierInfo::setDuplicateSettlementAccounts()
     * @uses MidocoDuplicateSupplierInfo::setDuplicateAgencies()
     * @uses MidocoDuplicateSupplierInfo::setDuplicateAutoRemarks()
     * @uses MidocoDuplicateSupplierInfo::setDuplicateStorno()
     * @uses MidocoDuplicateSupplierInfo::setDuplicateDisabledItemTypes()
     * @uses MidocoDuplicateSupplierInfo::setDuplicateSelectAll()
     * @param string $srcSupplierId
     * @param string $destSupplierId
     * @param string $destSupplierName
     * @param bool $duplicateInfo
     * @param bool $duplicateAddress
     * @param bool $duplicatePayment
     * @param bool $duplicateAccounts
     * @param bool $duplicateMediator
     * @param bool $duplicateAgenciesCommission
     * @param bool $duplicateSettlementAccounts
     * @param bool $duplicateAgencies
     * @param bool $duplicateAutoRemarks
     * @param bool $duplicateStorno
     * @param bool $duplicateDisabledItemTypes
     * @param bool $duplicateSelectAll
     */
    public function __construct(?string $srcSupplierId = null, ?string $destSupplierId = null, ?string $destSupplierName = null, ?bool $duplicateInfo = null, ?bool $duplicateAddress = null, ?bool $duplicatePayment = null, ?bool $duplicateAccounts = null, ?bool $duplicateMediator = null, ?bool $duplicateAgenciesCommission = null, ?bool $duplicateSettlementAccounts = null, ?bool $duplicateAgencies = null, ?bool $duplicateAutoRemarks = null, ?bool $duplicateStorno = null, ?bool $duplicateDisabledItemTypes = null, ?bool $duplicateSelectAll = null)
    {
        $this
            ->setSrcSupplierId($srcSupplierId)
            ->setDestSupplierId($destSupplierId)
            ->setDestSupplierName($destSupplierName)
            ->setDuplicateInfo($duplicateInfo)
            ->setDuplicateAddress($duplicateAddress)
            ->setDuplicatePayment($duplicatePayment)
            ->setDuplicateAccounts($duplicateAccounts)
            ->setDuplicateMediator($duplicateMediator)
            ->setDuplicateAgenciesCommission($duplicateAgenciesCommission)
            ->setDuplicateSettlementAccounts($duplicateSettlementAccounts)
            ->setDuplicateAgencies($duplicateAgencies)
            ->setDuplicateAutoRemarks($duplicateAutoRemarks)
            ->setDuplicateStorno($duplicateStorno)
            ->setDuplicateDisabledItemTypes($duplicateDisabledItemTypes)
            ->setDuplicateSelectAll($duplicateSelectAll);
    }
    /**
     * Get srcSupplierId value
     * @return string|null
     */
    public function getSrcSupplierId(): ?string
    {
        return $this->srcSupplierId;
    }
    /**
     * Set srcSupplierId value
     * @param string $srcSupplierId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setSrcSupplierId(?string $srcSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($srcSupplierId) && !is_string($srcSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($srcSupplierId, true), gettype($srcSupplierId)), __LINE__);
        }
        $this->srcSupplierId = $srcSupplierId;
        
        return $this;
    }
    /**
     * Get destSupplierId value
     * @return string|null
     */
    public function getDestSupplierId(): ?string
    {
        return $this->destSupplierId;
    }
    /**
     * Set destSupplierId value
     * @param string $destSupplierId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setDestSupplierId(?string $destSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($destSupplierId) && !is_string($destSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destSupplierId, true), gettype($destSupplierId)), __LINE__);
        }
        $this->destSupplierId = $destSupplierId;
        
        return $this;
    }
    /**
     * Get destSupplierName value
     * @return string|null
     */
    public function getDestSupplierName(): ?string
    {
        return $this->destSupplierName;
    }
    /**
     * Set destSupplierName value
     * @param string $destSupplierName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setDestSupplierName(?string $destSupplierName = null): self
    {
        // validation for constraint: string
        if (!is_null($destSupplierName) && !is_string($destSupplierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destSupplierName, true), gettype($destSupplierName)), __LINE__);
        }
        $this->destSupplierName = $destSupplierName;
        
        return $this;
    }
    /**
     * Get duplicateInfo value
     * @return bool|null
     */
    public function getDuplicateInfo(): ?bool
    {
        return $this->duplicateInfo;
    }
    /**
     * Set duplicateInfo value
     * @param bool $duplicateInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setDuplicateInfo(?bool $duplicateInfo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicateInfo) && !is_bool($duplicateInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicateInfo, true), gettype($duplicateInfo)), __LINE__);
        }
        $this->duplicateInfo = $duplicateInfo;
        
        return $this;
    }
    /**
     * Get duplicateAddress value
     * @return bool|null
     */
    public function getDuplicateAddress(): ?bool
    {
        return $this->duplicateAddress;
    }
    /**
     * Set duplicateAddress value
     * @param bool $duplicateAddress
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setDuplicateAddress(?bool $duplicateAddress = null): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicateAddress) && !is_bool($duplicateAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicateAddress, true), gettype($duplicateAddress)), __LINE__);
        }
        $this->duplicateAddress = $duplicateAddress;
        
        return $this;
    }
    /**
     * Get duplicatePayment value
     * @return bool|null
     */
    public function getDuplicatePayment(): ?bool
    {
        return $this->duplicatePayment;
    }
    /**
     * Set duplicatePayment value
     * @param bool $duplicatePayment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setDuplicatePayment(?bool $duplicatePayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicatePayment) && !is_bool($duplicatePayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicatePayment, true), gettype($duplicatePayment)), __LINE__);
        }
        $this->duplicatePayment = $duplicatePayment;
        
        return $this;
    }
    /**
     * Get duplicateAccounts value
     * @return bool|null
     */
    public function getDuplicateAccounts(): ?bool
    {
        return $this->duplicateAccounts;
    }
    /**
     * Set duplicateAccounts value
     * @param bool $duplicateAccounts
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setDuplicateAccounts(?bool $duplicateAccounts = null): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicateAccounts) && !is_bool($duplicateAccounts)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicateAccounts, true), gettype($duplicateAccounts)), __LINE__);
        }
        $this->duplicateAccounts = $duplicateAccounts;
        
        return $this;
    }
    /**
     * Get duplicateMediator value
     * @return bool|null
     */
    public function getDuplicateMediator(): ?bool
    {
        return $this->duplicateMediator;
    }
    /**
     * Set duplicateMediator value
     * @param bool $duplicateMediator
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setDuplicateMediator(?bool $duplicateMediator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicateMediator) && !is_bool($duplicateMediator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicateMediator, true), gettype($duplicateMediator)), __LINE__);
        }
        $this->duplicateMediator = $duplicateMediator;
        
        return $this;
    }
    /**
     * Get duplicateAgenciesCommission value
     * @return bool|null
     */
    public function getDuplicateAgenciesCommission(): ?bool
    {
        return $this->duplicateAgenciesCommission;
    }
    /**
     * Set duplicateAgenciesCommission value
     * @param bool $duplicateAgenciesCommission
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setDuplicateAgenciesCommission(?bool $duplicateAgenciesCommission = null): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicateAgenciesCommission) && !is_bool($duplicateAgenciesCommission)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicateAgenciesCommission, true), gettype($duplicateAgenciesCommission)), __LINE__);
        }
        $this->duplicateAgenciesCommission = $duplicateAgenciesCommission;
        
        return $this;
    }
    /**
     * Get duplicateSettlementAccounts value
     * @return bool|null
     */
    public function getDuplicateSettlementAccounts(): ?bool
    {
        return $this->duplicateSettlementAccounts;
    }
    /**
     * Set duplicateSettlementAccounts value
     * @param bool $duplicateSettlementAccounts
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setDuplicateSettlementAccounts(?bool $duplicateSettlementAccounts = null): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicateSettlementAccounts) && !is_bool($duplicateSettlementAccounts)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicateSettlementAccounts, true), gettype($duplicateSettlementAccounts)), __LINE__);
        }
        $this->duplicateSettlementAccounts = $duplicateSettlementAccounts;
        
        return $this;
    }
    /**
     * Get duplicateAgencies value
     * @return bool|null
     */
    public function getDuplicateAgencies(): ?bool
    {
        return $this->duplicateAgencies;
    }
    /**
     * Set duplicateAgencies value
     * @param bool $duplicateAgencies
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setDuplicateAgencies(?bool $duplicateAgencies = null): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicateAgencies) && !is_bool($duplicateAgencies)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicateAgencies, true), gettype($duplicateAgencies)), __LINE__);
        }
        $this->duplicateAgencies = $duplicateAgencies;
        
        return $this;
    }
    /**
     * Get duplicateAutoRemarks value
     * @return bool|null
     */
    public function getDuplicateAutoRemarks(): ?bool
    {
        return $this->duplicateAutoRemarks;
    }
    /**
     * Set duplicateAutoRemarks value
     * @param bool $duplicateAutoRemarks
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setDuplicateAutoRemarks(?bool $duplicateAutoRemarks = null): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicateAutoRemarks) && !is_bool($duplicateAutoRemarks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicateAutoRemarks, true), gettype($duplicateAutoRemarks)), __LINE__);
        }
        $this->duplicateAutoRemarks = $duplicateAutoRemarks;
        
        return $this;
    }
    /**
     * Get duplicateStorno value
     * @return bool|null
     */
    public function getDuplicateStorno(): ?bool
    {
        return $this->duplicateStorno;
    }
    /**
     * Set duplicateStorno value
     * @param bool $duplicateStorno
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setDuplicateStorno(?bool $duplicateStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicateStorno) && !is_bool($duplicateStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicateStorno, true), gettype($duplicateStorno)), __LINE__);
        }
        $this->duplicateStorno = $duplicateStorno;
        
        return $this;
    }
    /**
     * Get duplicateDisabledItemTypes value
     * @return bool|null
     */
    public function getDuplicateDisabledItemTypes(): ?bool
    {
        return $this->duplicateDisabledItemTypes;
    }
    /**
     * Set duplicateDisabledItemTypes value
     * @param bool $duplicateDisabledItemTypes
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setDuplicateDisabledItemTypes(?bool $duplicateDisabledItemTypes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicateDisabledItemTypes) && !is_bool($duplicateDisabledItemTypes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicateDisabledItemTypes, true), gettype($duplicateDisabledItemTypes)), __LINE__);
        }
        $this->duplicateDisabledItemTypes = $duplicateDisabledItemTypes;
        
        return $this;
    }
    /**
     * Get duplicateSelectAll value
     * @return bool|null
     */
    public function getDuplicateSelectAll(): ?bool
    {
        return $this->duplicateSelectAll;
    }
    /**
     * Set duplicateSelectAll value
     * @param bool $duplicateSelectAll
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDuplicateSupplierInfo
     */
    public function setDuplicateSelectAll(?bool $duplicateSelectAll = null): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicateSelectAll) && !is_bool($duplicateSelectAll)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicateSelectAll, true), gettype($duplicateSelectAll)), __LINE__);
        }
        $this->duplicateSelectAll = $duplicateSelectAll;
        
        return $this;
    }
}
