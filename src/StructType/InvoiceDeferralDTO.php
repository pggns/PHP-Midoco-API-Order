<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceDeferralDTO StructType
 * @subpackage Structs
 */
class InvoiceDeferralDTO extends AbstractStructBase
{
    /**
     * The accrualType
     * @var string|null
     */
    protected ?string $accrualType = null;
    /**
     * The bookingText
     * @var string|null
     */
    protected ?string $bookingText = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The creditorNo
     * @var string|null
     */
    protected ?string $creditorNo = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The deferralId
     * @var int|null
     */
    protected ?int $deferralId = null;
    /**
     * The isVoided
     * @var bool|null
     */
    protected ?bool $isVoided = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The receiptNo
     * @var int|null
     */
    protected ?int $receiptNo = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * Constructor method for InvoiceDeferralDTO
     * @uses InvoiceDeferralDTO::setAccrualType()
     * @uses InvoiceDeferralDTO::setBookingText()
     * @uses InvoiceDeferralDTO::setCreationTimestamp()
     * @uses InvoiceDeferralDTO::setCreationUser()
     * @uses InvoiceDeferralDTO::setCreditorNo()
     * @uses InvoiceDeferralDTO::setCustomerId()
     * @uses InvoiceDeferralDTO::setDebitorNo()
     * @uses InvoiceDeferralDTO::setDeferralId()
     * @uses InvoiceDeferralDTO::setIsVoided()
     * @uses InvoiceDeferralDTO::setItemId()
     * @uses InvoiceDeferralDTO::setReceiptDate()
     * @uses InvoiceDeferralDTO::setReceiptNo()
     * @uses InvoiceDeferralDTO::setTravelDate()
     * @param string $accrualType
     * @param string $bookingText
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param string $creditorNo
     * @param int $customerId
     * @param string $debitorNo
     * @param int $deferralId
     * @param bool $isVoided
     * @param int $itemId
     * @param string $receiptDate
     * @param int $receiptNo
     * @param string $travelDate
     */
    public function __construct(?string $accrualType = null, ?string $bookingText = null, ?string $creationTimestamp = null, ?int $creationUser = null, ?string $creditorNo = null, ?int $customerId = null, ?string $debitorNo = null, ?int $deferralId = null, ?bool $isVoided = null, ?int $itemId = null, ?string $receiptDate = null, ?int $receiptNo = null, ?string $travelDate = null)
    {
        $this
            ->setAccrualType($accrualType)
            ->setBookingText($bookingText)
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setCreditorNo($creditorNo)
            ->setCustomerId($customerId)
            ->setDebitorNo($debitorNo)
            ->setDeferralId($deferralId)
            ->setIsVoided($isVoided)
            ->setItemId($itemId)
            ->setReceiptDate($receiptDate)
            ->setReceiptNo($receiptNo)
            ->setTravelDate($travelDate);
    }
    /**
     * Get accrualType value
     * @return string|null
     */
    public function getAccrualType(): ?string
    {
        return $this->accrualType;
    }
    /**
     * Set accrualType value
     * @param string $accrualType
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDeferralDTO
     */
    public function setAccrualType(?string $accrualType = null): self
    {
        // validation for constraint: string
        if (!is_null($accrualType) && !is_string($accrualType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accrualType, true), gettype($accrualType)), __LINE__);
        }
        $this->accrualType = $accrualType;
        
        return $this;
    }
    /**
     * Get bookingText value
     * @return string|null
     */
    public function getBookingText(): ?string
    {
        return $this->bookingText;
    }
    /**
     * Set bookingText value
     * @param string $bookingText
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDeferralDTO
     */
    public function setBookingText(?string $bookingText = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingText) && !is_string($bookingText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingText, true), gettype($bookingText)), __LINE__);
        }
        $this->bookingText = $bookingText;
        
        return $this;
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDeferralDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDeferralDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get creditorNo value
     * @return string|null
     */
    public function getCreditorNo(): ?string
    {
        return $this->creditorNo;
    }
    /**
     * Set creditorNo value
     * @param string $creditorNo
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDeferralDTO
     */
    public function setCreditorNo(?string $creditorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorNo) && !is_string($creditorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorNo, true), gettype($creditorNo)), __LINE__);
        }
        $this->creditorNo = $creditorNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDeferralDTO
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
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDeferralDTO
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get deferralId value
     * @return int|null
     */
    public function getDeferralId(): ?int
    {
        return $this->deferralId;
    }
    /**
     * Set deferralId value
     * @param int $deferralId
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDeferralDTO
     */
    public function setDeferralId(?int $deferralId = null): self
    {
        // validation for constraint: int
        if (!is_null($deferralId) && !(is_int($deferralId) || ctype_digit($deferralId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deferralId, true), gettype($deferralId)), __LINE__);
        }
        $this->deferralId = $deferralId;
        
        return $this;
    }
    /**
     * Get isVoided value
     * @return bool|null
     */
    public function getIsVoided(): ?bool
    {
        return $this->isVoided;
    }
    /**
     * Set isVoided value
     * @param bool $isVoided
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDeferralDTO
     */
    public function setIsVoided(?bool $isVoided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoided) && !is_bool($isVoided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoided, true), gettype($isVoided)), __LINE__);
        }
        $this->isVoided = $isVoided;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDeferralDTO
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
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDeferralDTO
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
        return $this;
    }
    /**
     * Get receiptNo value
     * @return int|null
     */
    public function getReceiptNo(): ?int
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param int $receiptNo
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDeferralDTO
     */
    public function setReceiptNo(?int $receiptNo = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptNo) && !(is_int($receiptNo) || ctype_digit($receiptNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceDeferralDTO
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
}
