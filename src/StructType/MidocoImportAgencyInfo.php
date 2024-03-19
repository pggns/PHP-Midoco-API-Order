<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoImportAgencyInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoImportAgencyInfo extends AbstractStructBase
{
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The inkassoMode
     * @var string|null
     */
    protected ?string $inkassoMode = null;
    /**
     * The cooperationId
     * @var string|null
     */
    protected ?string $cooperationId = null;
    /**
     * The cooperationValidFrom
     * @var string|null
     */
    protected ?string $cooperationValidFrom = null;
    /**
     * The cooperationValidTo
     * @var string|null
     */
    protected ?string $cooperationValidTo = null;
    /**
     * The commissionTravelDateFrom
     * @var string|null
     */
    protected ?string $commissionTravelDateFrom = null;
    /**
     * The commissionTravelDateTo
     * @var string|null
     */
    protected ?string $commissionTravelDateTo = null;
    /**
     * The commissionBookedUntil
     * @var string|null
     */
    protected ?string $commissionBookedUntil = null;
    /**
     * The agencyCommissionLevel
     * @var string|null
     */
    protected ?string $agencyCommissionLevel = null;
    /**
     * The customerCommissionId
     * @var string|null
     */
    protected ?string $customerCommissionId = null;
    /**
     * Constructor method for MidocoImportAgencyInfo
     * @uses MidocoImportAgencyInfo::setCustomerId()
     * @uses MidocoImportAgencyInfo::setAgencyId()
     * @uses MidocoImportAgencyInfo::setInkassoMode()
     * @uses MidocoImportAgencyInfo::setCooperationId()
     * @uses MidocoImportAgencyInfo::setCooperationValidFrom()
     * @uses MidocoImportAgencyInfo::setCooperationValidTo()
     * @uses MidocoImportAgencyInfo::setCommissionTravelDateFrom()
     * @uses MidocoImportAgencyInfo::setCommissionTravelDateTo()
     * @uses MidocoImportAgencyInfo::setCommissionBookedUntil()
     * @uses MidocoImportAgencyInfo::setAgencyCommissionLevel()
     * @uses MidocoImportAgencyInfo::setCustomerCommissionId()
     * @param string $customerId
     * @param string $agencyId
     * @param string $inkassoMode
     * @param string $cooperationId
     * @param string $cooperationValidFrom
     * @param string $cooperationValidTo
     * @param string $commissionTravelDateFrom
     * @param string $commissionTravelDateTo
     * @param string $commissionBookedUntil
     * @param string $agencyCommissionLevel
     * @param string $customerCommissionId
     */
    public function __construct(?string $customerId = null, ?string $agencyId = null, ?string $inkassoMode = null, ?string $cooperationId = null, ?string $cooperationValidFrom = null, ?string $cooperationValidTo = null, ?string $commissionTravelDateFrom = null, ?string $commissionTravelDateTo = null, ?string $commissionBookedUntil = null, ?string $agencyCommissionLevel = null, ?string $customerCommissionId = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setAgencyId($agencyId)
            ->setInkassoMode($inkassoMode)
            ->setCooperationId($cooperationId)
            ->setCooperationValidFrom($cooperationValidFrom)
            ->setCooperationValidTo($cooperationValidTo)
            ->setCommissionTravelDateFrom($commissionTravelDateFrom)
            ->setCommissionTravelDateTo($commissionTravelDateTo)
            ->setCommissionBookedUntil($commissionBookedUntil)
            ->setAgencyCommissionLevel($agencyCommissionLevel)
            ->setCustomerCommissionId($customerCommissionId);
    }
    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get inkassoMode value
     * @return string|null
     */
    public function getInkassoMode(): ?string
    {
        return $this->inkassoMode;
    }
    /**
     * Set inkassoMode value
     * @param string $inkassoMode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo
     */
    public function setInkassoMode(?string $inkassoMode = null): self
    {
        // validation for constraint: string
        if (!is_null($inkassoMode) && !is_string($inkassoMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inkassoMode, true), gettype($inkassoMode)), __LINE__);
        }
        $this->inkassoMode = $inkassoMode;
        
        return $this;
    }
    /**
     * Get cooperationId value
     * @return string|null
     */
    public function getCooperationId(): ?string
    {
        return $this->cooperationId;
    }
    /**
     * Set cooperationId value
     * @param string $cooperationId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo
     */
    public function setCooperationId(?string $cooperationId = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationId) && !is_string($cooperationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationId, true), gettype($cooperationId)), __LINE__);
        }
        $this->cooperationId = $cooperationId;
        
        return $this;
    }
    /**
     * Get cooperationValidFrom value
     * @return string|null
     */
    public function getCooperationValidFrom(): ?string
    {
        return $this->cooperationValidFrom;
    }
    /**
     * Set cooperationValidFrom value
     * @param string $cooperationValidFrom
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo
     */
    public function setCooperationValidFrom(?string $cooperationValidFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationValidFrom) && !is_string($cooperationValidFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationValidFrom, true), gettype($cooperationValidFrom)), __LINE__);
        }
        $this->cooperationValidFrom = $cooperationValidFrom;
        
        return $this;
    }
    /**
     * Get cooperationValidTo value
     * @return string|null
     */
    public function getCooperationValidTo(): ?string
    {
        return $this->cooperationValidTo;
    }
    /**
     * Set cooperationValidTo value
     * @param string $cooperationValidTo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo
     */
    public function setCooperationValidTo(?string $cooperationValidTo = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationValidTo) && !is_string($cooperationValidTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationValidTo, true), gettype($cooperationValidTo)), __LINE__);
        }
        $this->cooperationValidTo = $cooperationValidTo;
        
        return $this;
    }
    /**
     * Get commissionTravelDateFrom value
     * @return string|null
     */
    public function getCommissionTravelDateFrom(): ?string
    {
        return $this->commissionTravelDateFrom;
    }
    /**
     * Set commissionTravelDateFrom value
     * @param string $commissionTravelDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo
     */
    public function setCommissionTravelDateFrom(?string $commissionTravelDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionTravelDateFrom) && !is_string($commissionTravelDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionTravelDateFrom, true), gettype($commissionTravelDateFrom)), __LINE__);
        }
        $this->commissionTravelDateFrom = $commissionTravelDateFrom;
        
        return $this;
    }
    /**
     * Get commissionTravelDateTo value
     * @return string|null
     */
    public function getCommissionTravelDateTo(): ?string
    {
        return $this->commissionTravelDateTo;
    }
    /**
     * Set commissionTravelDateTo value
     * @param string $commissionTravelDateTo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo
     */
    public function setCommissionTravelDateTo(?string $commissionTravelDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionTravelDateTo) && !is_string($commissionTravelDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionTravelDateTo, true), gettype($commissionTravelDateTo)), __LINE__);
        }
        $this->commissionTravelDateTo = $commissionTravelDateTo;
        
        return $this;
    }
    /**
     * Get commissionBookedUntil value
     * @return string|null
     */
    public function getCommissionBookedUntil(): ?string
    {
        return $this->commissionBookedUntil;
    }
    /**
     * Set commissionBookedUntil value
     * @param string $commissionBookedUntil
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo
     */
    public function setCommissionBookedUntil(?string $commissionBookedUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionBookedUntil) && !is_string($commissionBookedUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionBookedUntil, true), gettype($commissionBookedUntil)), __LINE__);
        }
        $this->commissionBookedUntil = $commissionBookedUntil;
        
        return $this;
    }
    /**
     * Get agencyCommissionLevel value
     * @return string|null
     */
    public function getAgencyCommissionLevel(): ?string
    {
        return $this->agencyCommissionLevel;
    }
    /**
     * Set agencyCommissionLevel value
     * @param string $agencyCommissionLevel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo
     */
    public function setAgencyCommissionLevel(?string $agencyCommissionLevel = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyCommissionLevel) && !is_string($agencyCommissionLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyCommissionLevel, true), gettype($agencyCommissionLevel)), __LINE__);
        }
        $this->agencyCommissionLevel = $agencyCommissionLevel;
        
        return $this;
    }
    /**
     * Get customerCommissionId value
     * @return string|null
     */
    public function getCustomerCommissionId(): ?string
    {
        return $this->customerCommissionId;
    }
    /**
     * Set customerCommissionId value
     * @param string $customerCommissionId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo
     */
    public function setCustomerCommissionId(?string $customerCommissionId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCommissionId) && !is_string($customerCommissionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCommissionId, true), gettype($customerCommissionId)), __LINE__);
        }
        $this->customerCommissionId = $customerCommissionId;
        
        return $this;
    }
}
