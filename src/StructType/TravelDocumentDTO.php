<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelDocumentDTO StructType
 * @subpackage Structs
 */
class TravelDocumentDTO extends AbstractStructBase
{
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The commentText
     * @var string|null
     */
    protected ?string $commentText = null;
    /**
     * The infoToCustomerDate
     * @var string|null
     */
    protected ?string $infoToCustomerDate = null;
    /**
     * The infoToCustomerDateUser
     * @var string|null
     */
    protected ?string $infoToCustomerDateUser = null;
    /**
     * The infoToCustomerType
     * @var string|null
     */
    protected ?string $infoToCustomerType = null;
    /**
     * The inputDate
     * @var string|null
     */
    protected ?string $inputDate = null;
    /**
     * The inputDateUser
     * @var string|null
     */
    protected ?string $inputDateUser = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The outputDate
     * @var string|null
     */
    protected ?string $outputDate = null;
    /**
     * The outputDateUser
     * @var string|null
     */
    protected ?string $outputDateUser = null;
    /**
     * The outputType
     * @var string|null
     */
    protected ?string $outputType = null;
    /**
     * The tdId
     * @var int|null
     */
    protected ?int $tdId = null;
    /**
     * Constructor method for TravelDocumentDTO
     * @uses TravelDocumentDTO::setBookingId()
     * @uses TravelDocumentDTO::setCommentText()
     * @uses TravelDocumentDTO::setInfoToCustomerDate()
     * @uses TravelDocumentDTO::setInfoToCustomerDateUser()
     * @uses TravelDocumentDTO::setInfoToCustomerType()
     * @uses TravelDocumentDTO::setInputDate()
     * @uses TravelDocumentDTO::setInputDateUser()
     * @uses TravelDocumentDTO::setItemId()
     * @uses TravelDocumentDTO::setOrderId()
     * @uses TravelDocumentDTO::setOutputDate()
     * @uses TravelDocumentDTO::setOutputDateUser()
     * @uses TravelDocumentDTO::setOutputType()
     * @uses TravelDocumentDTO::setTdId()
     * @param string $bookingId
     * @param string $commentText
     * @param string $infoToCustomerDate
     * @param string $infoToCustomerDateUser
     * @param string $infoToCustomerType
     * @param string $inputDate
     * @param string $inputDateUser
     * @param int $itemId
     * @param int $orderId
     * @param string $outputDate
     * @param string $outputDateUser
     * @param string $outputType
     * @param int $tdId
     */
    public function __construct(?string $bookingId = null, ?string $commentText = null, ?string $infoToCustomerDate = null, ?string $infoToCustomerDateUser = null, ?string $infoToCustomerType = null, ?string $inputDate = null, ?string $inputDateUser = null, ?int $itemId = null, ?int $orderId = null, ?string $outputDate = null, ?string $outputDateUser = null, ?string $outputType = null, ?int $tdId = null)
    {
        $this
            ->setBookingId($bookingId)
            ->setCommentText($commentText)
            ->setInfoToCustomerDate($infoToCustomerDate)
            ->setInfoToCustomerDateUser($infoToCustomerDateUser)
            ->setInfoToCustomerType($infoToCustomerType)
            ->setInputDate($inputDate)
            ->setInputDateUser($inputDateUser)
            ->setItemId($itemId)
            ->setOrderId($orderId)
            ->setOutputDate($outputDate)
            ->setOutputDateUser($outputDateUser)
            ->setOutputType($outputType)
            ->setTdId($tdId);
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\TravelDocumentDTO
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get commentText value
     * @return string|null
     */
    public function getCommentText(): ?string
    {
        return $this->commentText;
    }
    /**
     * Set commentText value
     * @param string $commentText
     * @return \Pggns\MidocoApi\Order\StructType\TravelDocumentDTO
     */
    public function setCommentText(?string $commentText = null): self
    {
        // validation for constraint: string
        if (!is_null($commentText) && !is_string($commentText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commentText, true), gettype($commentText)), __LINE__);
        }
        $this->commentText = $commentText;
        
        return $this;
    }
    /**
     * Get infoToCustomerDate value
     * @return string|null
     */
    public function getInfoToCustomerDate(): ?string
    {
        return $this->infoToCustomerDate;
    }
    /**
     * Set infoToCustomerDate value
     * @param string $infoToCustomerDate
     * @return \Pggns\MidocoApi\Order\StructType\TravelDocumentDTO
     */
    public function setInfoToCustomerDate(?string $infoToCustomerDate = null): self
    {
        // validation for constraint: string
        if (!is_null($infoToCustomerDate) && !is_string($infoToCustomerDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoToCustomerDate, true), gettype($infoToCustomerDate)), __LINE__);
        }
        $this->infoToCustomerDate = $infoToCustomerDate;
        
        return $this;
    }
    /**
     * Get infoToCustomerDateUser value
     * @return string|null
     */
    public function getInfoToCustomerDateUser(): ?string
    {
        return $this->infoToCustomerDateUser;
    }
    /**
     * Set infoToCustomerDateUser value
     * @param string $infoToCustomerDateUser
     * @return \Pggns\MidocoApi\Order\StructType\TravelDocumentDTO
     */
    public function setInfoToCustomerDateUser(?string $infoToCustomerDateUser = null): self
    {
        // validation for constraint: string
        if (!is_null($infoToCustomerDateUser) && !is_string($infoToCustomerDateUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoToCustomerDateUser, true), gettype($infoToCustomerDateUser)), __LINE__);
        }
        $this->infoToCustomerDateUser = $infoToCustomerDateUser;
        
        return $this;
    }
    /**
     * Get infoToCustomerType value
     * @return string|null
     */
    public function getInfoToCustomerType(): ?string
    {
        return $this->infoToCustomerType;
    }
    /**
     * Set infoToCustomerType value
     * @param string $infoToCustomerType
     * @return \Pggns\MidocoApi\Order\StructType\TravelDocumentDTO
     */
    public function setInfoToCustomerType(?string $infoToCustomerType = null): self
    {
        // validation for constraint: string
        if (!is_null($infoToCustomerType) && !is_string($infoToCustomerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($infoToCustomerType, true), gettype($infoToCustomerType)), __LINE__);
        }
        $this->infoToCustomerType = $infoToCustomerType;
        
        return $this;
    }
    /**
     * Get inputDate value
     * @return string|null
     */
    public function getInputDate(): ?string
    {
        return $this->inputDate;
    }
    /**
     * Set inputDate value
     * @param string $inputDate
     * @return \Pggns\MidocoApi\Order\StructType\TravelDocumentDTO
     */
    public function setInputDate(?string $inputDate = null): self
    {
        // validation for constraint: string
        if (!is_null($inputDate) && !is_string($inputDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inputDate, true), gettype($inputDate)), __LINE__);
        }
        $this->inputDate = $inputDate;
        
        return $this;
    }
    /**
     * Get inputDateUser value
     * @return string|null
     */
    public function getInputDateUser(): ?string
    {
        return $this->inputDateUser;
    }
    /**
     * Set inputDateUser value
     * @param string $inputDateUser
     * @return \Pggns\MidocoApi\Order\StructType\TravelDocumentDTO
     */
    public function setInputDateUser(?string $inputDateUser = null): self
    {
        // validation for constraint: string
        if (!is_null($inputDateUser) && !is_string($inputDateUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inputDateUser, true), gettype($inputDateUser)), __LINE__);
        }
        $this->inputDateUser = $inputDateUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelDocumentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TravelDocumentDTO
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
     * Get outputDate value
     * @return string|null
     */
    public function getOutputDate(): ?string
    {
        return $this->outputDate;
    }
    /**
     * Set outputDate value
     * @param string $outputDate
     * @return \Pggns\MidocoApi\Order\StructType\TravelDocumentDTO
     */
    public function setOutputDate(?string $outputDate = null): self
    {
        // validation for constraint: string
        if (!is_null($outputDate) && !is_string($outputDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputDate, true), gettype($outputDate)), __LINE__);
        }
        $this->outputDate = $outputDate;
        
        return $this;
    }
    /**
     * Get outputDateUser value
     * @return string|null
     */
    public function getOutputDateUser(): ?string
    {
        return $this->outputDateUser;
    }
    /**
     * Set outputDateUser value
     * @param string $outputDateUser
     * @return \Pggns\MidocoApi\Order\StructType\TravelDocumentDTO
     */
    public function setOutputDateUser(?string $outputDateUser = null): self
    {
        // validation for constraint: string
        if (!is_null($outputDateUser) && !is_string($outputDateUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputDateUser, true), gettype($outputDateUser)), __LINE__);
        }
        $this->outputDateUser = $outputDateUser;
        
        return $this;
    }
    /**
     * Get outputType value
     * @return string|null
     */
    public function getOutputType(): ?string
    {
        return $this->outputType;
    }
    /**
     * Set outputType value
     * @param string $outputType
     * @return \Pggns\MidocoApi\Order\StructType\TravelDocumentDTO
     */
    public function setOutputType(?string $outputType = null): self
    {
        // validation for constraint: string
        if (!is_null($outputType) && !is_string($outputType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputType, true), gettype($outputType)), __LINE__);
        }
        $this->outputType = $outputType;
        
        return $this;
    }
    /**
     * Get tdId value
     * @return int|null
     */
    public function getTdId(): ?int
    {
        return $this->tdId;
    }
    /**
     * Set tdId value
     * @param int $tdId
     * @return \Pggns\MidocoApi\Order\StructType\TravelDocumentDTO
     */
    public function setTdId(?int $tdId = null): self
    {
        // validation for constraint: int
        if (!is_null($tdId) && !(is_int($tdId) || ctype_digit($tdId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tdId, true), gettype($tdId)), __LINE__);
        }
        $this->tdId = $tdId;
        
        return $this;
    }
}
