<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyCommissionDTO StructType
 * @subpackage Structs
 */
class AgencyCommissionDTO extends AbstractStructBase
{
    /**
     * The agencyCommissionId
     * @var int|null
     */
    protected ?int $agencyCommissionId = null;
    /**
     * The bookedUntil
     * @var string|null
     */
    protected ?string $bookedUntil = null;
    /**
     * The commissionLevelId
     * @var string|null
     */
    protected ?string $commissionLevelId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validUntil
     * @var string|null
     */
    protected ?string $validUntil = null;
    /**
     * Constructor method for AgencyCommissionDTO
     * @uses AgencyCommissionDTO::setAgencyCommissionId()
     * @uses AgencyCommissionDTO::setBookedUntil()
     * @uses AgencyCommissionDTO::setCommissionLevelId()
     * @uses AgencyCommissionDTO::setCustomerId()
     * @uses AgencyCommissionDTO::setValidFrom()
     * @uses AgencyCommissionDTO::setValidUntil()
     * @param int $agencyCommissionId
     * @param string $bookedUntil
     * @param string $commissionLevelId
     * @param int $customerId
     * @param string $validFrom
     * @param string $validUntil
     */
    public function __construct(?int $agencyCommissionId = null, ?string $bookedUntil = null, ?string $commissionLevelId = null, ?int $customerId = null, ?string $validFrom = null, ?string $validUntil = null)
    {
        $this
            ->setAgencyCommissionId($agencyCommissionId)
            ->setBookedUntil($bookedUntil)
            ->setCommissionLevelId($commissionLevelId)
            ->setCustomerId($customerId)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil);
    }
    /**
     * Get agencyCommissionId value
     * @return int|null
     */
    public function getAgencyCommissionId(): ?int
    {
        return $this->agencyCommissionId;
    }
    /**
     * Set agencyCommissionId value
     * @param int $agencyCommissionId
     * @return \Pggns\MidocoApi\Order\StructType\AgencyCommissionDTO
     */
    public function setAgencyCommissionId(?int $agencyCommissionId = null): self
    {
        // validation for constraint: int
        if (!is_null($agencyCommissionId) && !(is_int($agencyCommissionId) || ctype_digit($agencyCommissionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($agencyCommissionId, true), gettype($agencyCommissionId)), __LINE__);
        }
        $this->agencyCommissionId = $agencyCommissionId;
        
        return $this;
    }
    /**
     * Get bookedUntil value
     * @return string|null
     */
    public function getBookedUntil(): ?string
    {
        return $this->bookedUntil;
    }
    /**
     * Set bookedUntil value
     * @param string $bookedUntil
     * @return \Pggns\MidocoApi\Order\StructType\AgencyCommissionDTO
     */
    public function setBookedUntil(?string $bookedUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($bookedUntil) && !is_string($bookedUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookedUntil, true), gettype($bookedUntil)), __LINE__);
        }
        $this->bookedUntil = $bookedUntil;
        
        return $this;
    }
    /**
     * Get commissionLevelId value
     * @return string|null
     */
    public function getCommissionLevelId(): ?string
    {
        return $this->commissionLevelId;
    }
    /**
     * Set commissionLevelId value
     * @param string $commissionLevelId
     * @return \Pggns\MidocoApi\Order\StructType\AgencyCommissionDTO
     */
    public function setCommissionLevelId(?string $commissionLevelId = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionLevelId) && !is_string($commissionLevelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionLevelId, true), gettype($commissionLevelId)), __LINE__);
        }
        $this->commissionLevelId = $commissionLevelId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyCommissionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyCommissionDTO
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
    /**
     * Get validUntil value
     * @return string|null
     */
    public function getValidUntil(): ?string
    {
        return $this->validUntil;
    }
    /**
     * Set validUntil value
     * @param string $validUntil
     * @return \Pggns\MidocoApi\Order\StructType\AgencyCommissionDTO
     */
    public function setValidUntil(?string $validUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validUntil, true), gettype($validUntil)), __LINE__);
        }
        $this->validUntil = $validUntil;
        
        return $this;
    }
}
