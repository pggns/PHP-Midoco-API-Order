<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyCooperationHistoryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AgencyCooperationHistoryDTO extends AbstractStructBase
{
    /**
     * The cooperationId
     * @var string|null
     */
    protected ?string $cooperationId = null;
    /**
     * The creatingUser
     * @var int|null
     */
    protected ?int $creatingUser = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The dateCreated
     * @var string|null
     */
    protected ?string $dateCreated = null;
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
     * Constructor method for AgencyCooperationHistoryDTO
     * @uses AgencyCooperationHistoryDTO::setCooperationId()
     * @uses AgencyCooperationHistoryDTO::setCreatingUser()
     * @uses AgencyCooperationHistoryDTO::setCustomerId()
     * @uses AgencyCooperationHistoryDTO::setDateCreated()
     * @uses AgencyCooperationHistoryDTO::setValidFrom()
     * @uses AgencyCooperationHistoryDTO::setValidUntil()
     * @param string $cooperationId
     * @param int $creatingUser
     * @param int $customerId
     * @param string $dateCreated
     * @param string $validFrom
     * @param string $validUntil
     */
    public function __construct(?string $cooperationId = null, ?int $creatingUser = null, ?int $customerId = null, ?string $dateCreated = null, ?string $validFrom = null, ?string $validUntil = null)
    {
        $this
            ->setCooperationId($cooperationId)
            ->setCreatingUser($creatingUser)
            ->setCustomerId($customerId)
            ->setDateCreated($dateCreated)
            ->setValidFrom($validFrom)
            ->setValidUntil($validUntil);
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyCooperationHistoryDTO
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
     * Get creatingUser value
     * @return int|null
     */
    public function getCreatingUser(): ?int
    {
        return $this->creatingUser;
    }
    /**
     * Set creatingUser value
     * @param int $creatingUser
     * @return \Pggns\MidocoApi\Order\StructType\AgencyCooperationHistoryDTO
     */
    public function setCreatingUser(?int $creatingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creatingUser) && !(is_int($creatingUser) || ctype_digit($creatingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creatingUser, true), gettype($creatingUser)), __LINE__);
        }
        $this->creatingUser = $creatingUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyCooperationHistoryDTO
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
     * Get dateCreated value
     * @return string|null
     */
    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }
    /**
     * Set dateCreated value
     * @param string $dateCreated
     * @return \Pggns\MidocoApi\Order\StructType\AgencyCooperationHistoryDTO
     */
    public function setDateCreated(?string $dateCreated = null): self
    {
        // validation for constraint: string
        if (!is_null($dateCreated) && !is_string($dateCreated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateCreated, true), gettype($dateCreated)), __LINE__);
        }
        $this->dateCreated = $dateCreated;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyCooperationHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyCooperationHistoryDTO
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
