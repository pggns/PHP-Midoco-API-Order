<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactHistoryDTO StructType
 * @subpackage Structs
 */
class ContactHistoryDTO extends AbstractStructBase
{
    /**
     * The campaignId
     * @var int|null
     */
    protected ?int $campaignId = null;
    /**
     * The contactId
     * @var int|null
     */
    protected ?int $contactId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
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
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The noticePosition
     * @var int|null
     */
    protected ?int $noticePosition = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The origin
     * @var string|null
     */
    protected ?string $origin = null;
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
     * The typeOfTask
     * @var int|null
     */
    protected ?int $typeOfTask = null;
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
     * Constructor method for ContactHistoryDTO
     * @uses ContactHistoryDTO::setCampaignId()
     * @uses ContactHistoryDTO::setContactId()
     * @uses ContactHistoryDTO::setCustomerId()
     * @uses ContactHistoryDTO::setDescription()
     * @uses ContactHistoryDTO::setDirection()
     * @uses ContactHistoryDTO::setExternalReference()
     * @uses ContactHistoryDTO::setItemId()
     * @uses ContactHistoryDTO::setNoticePosition()
     * @uses ContactHistoryDTO::setOrderId()
     * @uses ContactHistoryDTO::setOrigin()
     * @uses ContactHistoryDTO::setTimeOfContact()
     * @uses ContactHistoryDTO::setTypeId()
     * @uses ContactHistoryDTO::setTypeOfTask()
     * @uses ContactHistoryDTO::setUnitName()
     * @uses ContactHistoryDTO::setUserId()
     * @param int $campaignId
     * @param int $contactId
     * @param int $customerId
     * @param string $description
     * @param string $direction
     * @param string $externalReference
     * @param int $itemId
     * @param int $noticePosition
     * @param int $orderId
     * @param string $origin
     * @param string $timeOfContact
     * @param string $typeId
     * @param int $typeOfTask
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?int $campaignId = null, ?int $contactId = null, ?int $customerId = null, ?string $description = null, ?string $direction = null, ?string $externalReference = null, ?int $itemId = null, ?int $noticePosition = null, ?int $orderId = null, ?string $origin = null, ?string $timeOfContact = null, ?string $typeId = null, ?int $typeOfTask = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setCampaignId($campaignId)
            ->setContactId($contactId)
            ->setCustomerId($customerId)
            ->setDescription($description)
            ->setDirection($direction)
            ->setExternalReference($externalReference)
            ->setItemId($itemId)
            ->setNoticePosition($noticePosition)
            ->setOrderId($orderId)
            ->setOrigin($origin)
            ->setTimeOfContact($timeOfContact)
            ->setTypeId($typeId)
            ->setTypeOfTask($typeOfTask)
            ->setUnitName($unitName)
            ->setUserId($userId);
    }
    /**
     * Get campaignId value
     * @return int|null
     */
    public function getCampaignId(): ?int
    {
        return $this->campaignId;
    }
    /**
     * Set campaignId value
     * @param int $campaignId
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
     */
    public function setCampaignId(?int $campaignId = null): self
    {
        // validation for constraint: int
        if (!is_null($campaignId) && !(is_int($campaignId) || ctype_digit($campaignId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignId, true), gettype($campaignId)), __LINE__);
        }
        $this->campaignId = $campaignId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
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
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get noticePosition value
     * @return int|null
     */
    public function getNoticePosition(): ?int
    {
        return $this->noticePosition;
    }
    /**
     * Set noticePosition value
     * @param int $noticePosition
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
     */
    public function setNoticePosition(?int $noticePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($noticePosition) && !(is_int($noticePosition) || ctype_digit($noticePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noticePosition, true), gettype($noticePosition)), __LINE__);
        }
        $this->noticePosition = $noticePosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
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
     * Get origin value
     * @return string|null
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }
    /**
     * Set origin value
     * @param string $origin
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
     */
    public function setOrigin(?string $origin = null): self
    {
        // validation for constraint: string
        if (!is_null($origin) && !is_string($origin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        $this->origin = $origin;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
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
     * Get typeOfTask value
     * @return int|null
     */
    public function getTypeOfTask(): ?int
    {
        return $this->typeOfTask;
    }
    /**
     * Set typeOfTask value
     * @param int $typeOfTask
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
     */
    public function setTypeOfTask(?int $typeOfTask = null): self
    {
        // validation for constraint: int
        if (!is_null($typeOfTask) && !(is_int($typeOfTask) || ctype_digit($typeOfTask))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeOfTask, true), gettype($typeOfTask)), __LINE__);
        }
        $this->typeOfTask = $typeOfTask;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ContactHistoryDTO
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
