<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierAccountAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierAccountAssignDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The destinationKey
     * @var string|null
     */
    protected ?string $destinationKey = null;
    /**
     * The forDi
     * @var bool|null
     */
    protected ?bool $forDi = null;
    /**
     * The forStorno
     * @var bool|null
     */
    protected ?bool $forStorno = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The ticketType
     * @var string|null
     */
    protected ?string $ticketType = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * Constructor method for SupplierAccountAssignDTO
     * @uses SupplierAccountAssignDTO::setAccountId()
     * @uses SupplierAccountAssignDTO::setDestinationKey()
     * @uses SupplierAccountAssignDTO::setForDi()
     * @uses SupplierAccountAssignDTO::setForStorno()
     * @uses SupplierAccountAssignDTO::setPlanId()
     * @uses SupplierAccountAssignDTO::setSupplierId()
     * @uses SupplierAccountAssignDTO::setTicketType()
     * @uses SupplierAccountAssignDTO::setTraveltype()
     * @uses SupplierAccountAssignDTO::setValidFrom()
     * @param string $accountId
     * @param string $destinationKey
     * @param bool $forDi
     * @param bool $forStorno
     * @param string $planId
     * @param string $supplierId
     * @param string $ticketType
     * @param string $traveltype
     * @param string $validFrom
     */
    public function __construct(?string $accountId = null, ?string $destinationKey = null, ?bool $forDi = null, ?bool $forStorno = null, ?string $planId = null, ?string $supplierId = null, ?string $ticketType = null, ?string $traveltype = null, ?string $validFrom = null)
    {
        $this
            ->setAccountId($accountId)
            ->setDestinationKey($destinationKey)
            ->setForDi($forDi)
            ->setForStorno($forStorno)
            ->setPlanId($planId)
            ->setSupplierId($supplierId)
            ->setTicketType($ticketType)
            ->setTraveltype($traveltype)
            ->setValidFrom($validFrom);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAccountAssignDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get destinationKey value
     * @return string|null
     */
    public function getDestinationKey(): ?string
    {
        return $this->destinationKey;
    }
    /**
     * Set destinationKey value
     * @param string $destinationKey
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAccountAssignDTO
     */
    public function setDestinationKey(?string $destinationKey = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationKey) && !is_string($destinationKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationKey, true), gettype($destinationKey)), __LINE__);
        }
        $this->destinationKey = $destinationKey;
        
        return $this;
    }
    /**
     * Get forDi value
     * @return bool|null
     */
    public function getForDi(): ?bool
    {
        return $this->forDi;
    }
    /**
     * Set forDi value
     * @param bool $forDi
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAccountAssignDTO
     */
    public function setForDi(?bool $forDi = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forDi) && !is_bool($forDi)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forDi, true), gettype($forDi)), __LINE__);
        }
        $this->forDi = $forDi;
        
        return $this;
    }
    /**
     * Get forStorno value
     * @return bool|null
     */
    public function getForStorno(): ?bool
    {
        return $this->forStorno;
    }
    /**
     * Set forStorno value
     * @param bool $forStorno
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAccountAssignDTO
     */
    public function setForStorno(?bool $forStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forStorno) && !is_bool($forStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forStorno, true), gettype($forStorno)), __LINE__);
        }
        $this->forStorno = $forStorno;
        
        return $this;
    }
    /**
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAccountAssignDTO
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAccountAssignDTO
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
     * Get ticketType value
     * @return string|null
     */
    public function getTicketType(): ?string
    {
        return $this->ticketType;
    }
    /**
     * Set ticketType value
     * @param string $ticketType
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAccountAssignDTO
     */
    public function setTicketType(?string $ticketType = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketType) && !is_string($ticketType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketType, true), gettype($ticketType)), __LINE__);
        }
        $this->ticketType = $ticketType;
        
        return $this;
    }
    /**
     * Get traveltype value
     * @return string|null
     */
    public function getTraveltype(): ?string
    {
        return $this->traveltype;
    }
    /**
     * Set traveltype value
     * @param string $traveltype
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAccountAssignDTO
     */
    public function setTraveltype(?string $traveltype = null): self
    {
        // validation for constraint: string
        if (!is_null($traveltype) && !is_string($traveltype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traveltype, true), gettype($traveltype)), __LINE__);
        }
        $this->traveltype = $traveltype;
        
        return $this;
    }
    /**
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAccountAssignDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
}
