<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommunicationHistoryDTO StructType
 * @subpackage Structs
 */
class CommunicationHistoryDTO extends AbstractStructBase
{
    /**
     * The commId
     * @var int|null
     */
    protected ?int $commId = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUserId
     * @var int|null
     */
    protected ?int $creationUserId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The deliveryType
     * @var string|null
     */
    protected ?string $deliveryType = null;
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The printTime
     * @var string|null
     */
    protected ?string $printTime = null;
    /**
     * The templateName
     * @var string|null
     */
    protected ?string $templateName = null;
    /**
     * The timePrinted
     * @var string|null
     */
    protected ?string $timePrinted = null;
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * Constructor method for CommunicationHistoryDTO
     * @uses CommunicationHistoryDTO::setCommId()
     * @uses CommunicationHistoryDTO::setCreationDate()
     * @uses CommunicationHistoryDTO::setCreationUserId()
     * @uses CommunicationHistoryDTO::setCustomerId()
     * @uses CommunicationHistoryDTO::setDeliveryType()
     * @uses CommunicationHistoryDTO::setDocumentType()
     * @uses CommunicationHistoryDTO::setMediatorId()
     * @uses CommunicationHistoryDTO::setPrintTime()
     * @uses CommunicationHistoryDTO::setTemplateName()
     * @uses CommunicationHistoryDTO::setTimePrinted()
     * @uses CommunicationHistoryDTO::setTravelNo()
     * @param int $commId
     * @param string $creationDate
     * @param int $creationUserId
     * @param int $customerId
     * @param string $deliveryType
     * @param string $documentType
     * @param string $mediatorId
     * @param string $printTime
     * @param string $templateName
     * @param string $timePrinted
     * @param string $travelNo
     */
    public function __construct(?int $commId = null, ?string $creationDate = null, ?int $creationUserId = null, ?int $customerId = null, ?string $deliveryType = null, ?string $documentType = null, ?string $mediatorId = null, ?string $printTime = null, ?string $templateName = null, ?string $timePrinted = null, ?string $travelNo = null)
    {
        $this
            ->setCommId($commId)
            ->setCreationDate($creationDate)
            ->setCreationUserId($creationUserId)
            ->setCustomerId($customerId)
            ->setDeliveryType($deliveryType)
            ->setDocumentType($documentType)
            ->setMediatorId($mediatorId)
            ->setPrintTime($printTime)
            ->setTemplateName($templateName)
            ->setTimePrinted($timePrinted)
            ->setTravelNo($travelNo);
    }
    /**
     * Get commId value
     * @return int|null
     */
    public function getCommId(): ?int
    {
        return $this->commId;
    }
    /**
     * Set commId value
     * @param int $commId
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationHistoryDTO
     */
    public function setCommId(?int $commId = null): self
    {
        // validation for constraint: int
        if (!is_null($commId) && !(is_int($commId) || ctype_digit($commId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commId, true), gettype($commId)), __LINE__);
        }
        $this->commId = $commId;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationHistoryDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get creationUserId value
     * @return int|null
     */
    public function getCreationUserId(): ?int
    {
        return $this->creationUserId;
    }
    /**
     * Set creationUserId value
     * @param int $creationUserId
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationHistoryDTO
     */
    public function setCreationUserId(?int $creationUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUserId) && !(is_int($creationUserId) || ctype_digit($creationUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUserId, true), gettype($creationUserId)), __LINE__);
        }
        $this->creationUserId = $creationUserId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationHistoryDTO
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
     * Get deliveryType value
     * @return string|null
     */
    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }
    /**
     * Set deliveryType value
     * @param string $deliveryType
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationHistoryDTO
     */
    public function setDeliveryType(?string $deliveryType = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryType) && !is_string($deliveryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryType, true), gettype($deliveryType)), __LINE__);
        }
        $this->deliveryType = $deliveryType;
        
        return $this;
    }
    /**
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @param string $documentType
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationHistoryDTO
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->documentType = $documentType;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationHistoryDTO
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get printTime value
     * @return string|null
     */
    public function getPrintTime(): ?string
    {
        return $this->printTime;
    }
    /**
     * Set printTime value
     * @param string $printTime
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationHistoryDTO
     */
    public function setPrintTime(?string $printTime = null): self
    {
        // validation for constraint: string
        if (!is_null($printTime) && !is_string($printTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printTime, true), gettype($printTime)), __LINE__);
        }
        $this->printTime = $printTime;
        
        return $this;
    }
    /**
     * Get templateName value
     * @return string|null
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }
    /**
     * Set templateName value
     * @param string $templateName
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationHistoryDTO
     */
    public function setTemplateName(?string $templateName = null): self
    {
        // validation for constraint: string
        if (!is_null($templateName) && !is_string($templateName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateName, true), gettype($templateName)), __LINE__);
        }
        $this->templateName = $templateName;
        
        return $this;
    }
    /**
     * Get timePrinted value
     * @return string|null
     */
    public function getTimePrinted(): ?string
    {
        return $this->timePrinted;
    }
    /**
     * Set timePrinted value
     * @param string $timePrinted
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationHistoryDTO
     */
    public function setTimePrinted(?string $timePrinted = null): self
    {
        // validation for constraint: string
        if (!is_null($timePrinted) && !is_string($timePrinted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timePrinted, true), gettype($timePrinted)), __LINE__);
        }
        $this->timePrinted = $timePrinted;
        
        return $this;
    }
    /**
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\CommunicationHistoryDTO
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
}
