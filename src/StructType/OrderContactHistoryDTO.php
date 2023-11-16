<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderContactHistoryDTO StructType
 * @subpackage Structs
 */
class OrderContactHistoryDTO extends AbstractStructBase
{
    /**
     * The contactId
     * @var int|null
     */
    protected ?int $contactId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The direction
     * @var string|null
     */
    protected ?string $direction = null;
    /**
     * The externalReference
     * @var string|null
     */
    protected ?string $externalReference = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The timeOfContact
     * @var string|null
     */
    protected ?string $timeOfContact = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for OrderContactHistoryDTO
     * @uses OrderContactHistoryDTO::setContactId()
     * @uses OrderContactHistoryDTO::setDescription()
     * @uses OrderContactHistoryDTO::setDirection()
     * @uses OrderContactHistoryDTO::setExternalReference()
     * @uses OrderContactHistoryDTO::setOrderId()
     * @uses OrderContactHistoryDTO::setTimeOfContact()
     * @uses OrderContactHistoryDTO::setTypeId()
     * @uses OrderContactHistoryDTO::setUnitName()
     * @uses OrderContactHistoryDTO::setUserId()
     * @param int $contactId
     * @param string $description
     * @param string $direction
     * @param string $externalReference
     * @param int $orderId
     * @param string $timeOfContact
     * @param string $typeId
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?int $contactId = null, ?string $description = null, ?string $direction = null, ?string $externalReference = null, ?int $orderId = null, ?string $timeOfContact = null, ?string $typeId = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setContactId($contactId)
            ->setDescription($description)
            ->setDirection($direction)
            ->setExternalReference($externalReference)
            ->setOrderId($orderId)
            ->setTimeOfContact($timeOfContact)
            ->setTypeId($typeId)
            ->setUnitName($unitName)
            ->setUserId($userId);
    }
    /**
     * Get contactId value
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }
    /**
     * Set contactId value
     * @param int $contactId
     * @return \Pggns\MidocoApi\Order\StructType\OrderContactHistoryDTO
     */
    public function setContactId(?int $contactId = null): self
    {
        // validation for constraint: int
        if (!is_null($contactId) && !(is_int($contactId) || ctype_digit($contactId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contactId, true), gettype($contactId)), __LINE__);
        }
        $this->contactId = $contactId;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\OrderContactHistoryDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->direction;
    }
    /**
     * Set direction value
     * @param string $direction
     * @return \Pggns\MidocoApi\Order\StructType\OrderContactHistoryDTO
     */
    public function setDirection(?string $direction = null): self
    {
        // validation for constraint: string
        if (!is_null($direction) && !is_string($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direction, true), gettype($direction)), __LINE__);
        }
        $this->direction = $direction;
        
        return $this;
    }
    /**
     * Get externalReference value
     * @return string|null
     */
    public function getExternalReference(): ?string
    {
        return $this->externalReference;
    }
    /**
     * Set externalReference value
     * @param string $externalReference
     * @return \Pggns\MidocoApi\Order\StructType\OrderContactHistoryDTO
     */
    public function setExternalReference(?string $externalReference = null): self
    {
        // validation for constraint: string
        if (!is_null($externalReference) && !is_string($externalReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalReference, true), gettype($externalReference)), __LINE__);
        }
        $this->externalReference = $externalReference;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\OrderContactHistoryDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get timeOfContact value
     * @return string|null
     */
    public function getTimeOfContact(): ?string
    {
        return $this->timeOfContact;
    }
    /**
     * Set timeOfContact value
     * @param string $timeOfContact
     * @return \Pggns\MidocoApi\Order\StructType\OrderContactHistoryDTO
     */
    public function setTimeOfContact(?string $timeOfContact = null): self
    {
        // validation for constraint: string
        if (!is_null($timeOfContact) && !is_string($timeOfContact)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeOfContact, true), gettype($timeOfContact)), __LINE__);
        }
        $this->timeOfContact = $timeOfContact;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderContactHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderContactHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderContactHistoryDTO
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
