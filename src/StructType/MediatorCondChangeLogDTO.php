<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediatorCondChangeLogDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MediatorCondChangeLogDTO extends AbstractStructBase
{
    /**
     * The amountPerBooking
     * @var float|null
     */
    protected ?float $amountPerBooking = null;
    /**
     * The amountPerPerson
     * @var float|null
     */
    protected ?float $amountPerPerson = null;
    /**
     * The changeId
     * @var int|null
     */
    protected ?int $changeId = null;
    /**
     * The provisionPercent
     * @var float|null
     */
    protected ?float $provisionPercent = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The totalPercent
     * @var float|null
     */
    protected ?float $totalPercent = null;
    /**
     * The traveltype
     * @var string|null
     */
    protected ?string $traveltype = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for MediatorCondChangeLogDTO
     * @uses MediatorCondChangeLogDTO::setAmountPerBooking()
     * @uses MediatorCondChangeLogDTO::setAmountPerPerson()
     * @uses MediatorCondChangeLogDTO::setChangeId()
     * @uses MediatorCondChangeLogDTO::setProvisionPercent()
     * @uses MediatorCondChangeLogDTO::setSupplierId()
     * @uses MediatorCondChangeLogDTO::setTimestamp()
     * @uses MediatorCondChangeLogDTO::setTotalPercent()
     * @uses MediatorCondChangeLogDTO::setTraveltype()
     * @uses MediatorCondChangeLogDTO::setTypeId()
     * @uses MediatorCondChangeLogDTO::setUserId()
     * @param float $amountPerBooking
     * @param float $amountPerPerson
     * @param int $changeId
     * @param float $provisionPercent
     * @param string $supplierId
     * @param string $timestamp
     * @param float $totalPercent
     * @param string $traveltype
     * @param string $typeId
     * @param int $userId
     */
    public function __construct(?float $amountPerBooking = null, ?float $amountPerPerson = null, ?int $changeId = null, ?float $provisionPercent = null, ?string $supplierId = null, ?string $timestamp = null, ?float $totalPercent = null, ?string $traveltype = null, ?string $typeId = null, ?int $userId = null)
    {
        $this
            ->setAmountPerBooking($amountPerBooking)
            ->setAmountPerPerson($amountPerPerson)
            ->setChangeId($changeId)
            ->setProvisionPercent($provisionPercent)
            ->setSupplierId($supplierId)
            ->setTimestamp($timestamp)
            ->setTotalPercent($totalPercent)
            ->setTraveltype($traveltype)
            ->setTypeId($typeId)
            ->setUserId($userId);
    }
    /**
     * Get amountPerBooking value
     * @return float|null
     */
    public function getAmountPerBooking(): ?float
    {
        return $this->amountPerBooking;
    }
    /**
     * Set amountPerBooking value
     * @param float $amountPerBooking
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCondChangeLogDTO
     */
    public function setAmountPerBooking(?float $amountPerBooking = null): self
    {
        // validation for constraint: float
        if (!is_null($amountPerBooking) && !(is_float($amountPerBooking) || is_numeric($amountPerBooking))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountPerBooking, true), gettype($amountPerBooking)), __LINE__);
        }
        $this->amountPerBooking = $amountPerBooking;
        
        return $this;
    }
    /**
     * Get amountPerPerson value
     * @return float|null
     */
    public function getAmountPerPerson(): ?float
    {
        return $this->amountPerPerson;
    }
    /**
     * Set amountPerPerson value
     * @param float $amountPerPerson
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCondChangeLogDTO
     */
    public function setAmountPerPerson(?float $amountPerPerson = null): self
    {
        // validation for constraint: float
        if (!is_null($amountPerPerson) && !(is_float($amountPerPerson) || is_numeric($amountPerPerson))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountPerPerson, true), gettype($amountPerPerson)), __LINE__);
        }
        $this->amountPerPerson = $amountPerPerson;
        
        return $this;
    }
    /**
     * Get changeId value
     * @return int|null
     */
    public function getChangeId(): ?int
    {
        return $this->changeId;
    }
    /**
     * Set changeId value
     * @param int $changeId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCondChangeLogDTO
     */
    public function setChangeId(?int $changeId = null): self
    {
        // validation for constraint: int
        if (!is_null($changeId) && !(is_int($changeId) || ctype_digit($changeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changeId, true), gettype($changeId)), __LINE__);
        }
        $this->changeId = $changeId;
        
        return $this;
    }
    /**
     * Get provisionPercent value
     * @return float|null
     */
    public function getProvisionPercent(): ?float
    {
        return $this->provisionPercent;
    }
    /**
     * Set provisionPercent value
     * @param float $provisionPercent
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCondChangeLogDTO
     */
    public function setProvisionPercent(?float $provisionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($provisionPercent) && !(is_float($provisionPercent) || is_numeric($provisionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provisionPercent, true), gettype($provisionPercent)), __LINE__);
        }
        $this->provisionPercent = $provisionPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCondChangeLogDTO
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
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCondChangeLogDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
        return $this;
    }
    /**
     * Get totalPercent value
     * @return float|null
     */
    public function getTotalPercent(): ?float
    {
        return $this->totalPercent;
    }
    /**
     * Set totalPercent value
     * @param float $totalPercent
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCondChangeLogDTO
     */
    public function setTotalPercent(?float $totalPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPercent) && !(is_float($totalPercent) || is_numeric($totalPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPercent, true), gettype($totalPercent)), __LINE__);
        }
        $this->totalPercent = $totalPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCondChangeLogDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCondChangeLogDTO
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
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCondChangeLogDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
