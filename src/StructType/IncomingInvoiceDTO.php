<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncomingInvoiceDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IncomingInvoiceDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The bookingNo
     * @var string|null
     */
    protected ?string $bookingNo = null;
    /**
     * The comments
     * @var string|null
     */
    protected ?string $comments = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The invoiceDate
     * @var string|null
     */
    protected ?string $invoiceDate = null;
    /**
     * The invoiceId
     * @var int|null
     */
    protected ?int $invoiceId = null;
    /**
     * The invoiceNo
     * @var string|null
     */
    protected ?string $invoiceNo = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for IncomingInvoiceDTO
     * @uses IncomingInvoiceDTO::setAmount()
     * @uses IncomingInvoiceDTO::setBookingNo()
     * @uses IncomingInvoiceDTO::setComments()
     * @uses IncomingInvoiceDTO::setCreationDate()
     * @uses IncomingInvoiceDTO::setCreationUser()
     * @uses IncomingInvoiceDTO::setInvoiceDate()
     * @uses IncomingInvoiceDTO::setInvoiceId()
     * @uses IncomingInvoiceDTO::setInvoiceNo()
     * @uses IncomingInvoiceDTO::setOrderId()
     * @uses IncomingInvoiceDTO::setSupplierId()
     * @param float $amount
     * @param string $bookingNo
     * @param string $comments
     * @param string $creationDate
     * @param int $creationUser
     * @param string $invoiceDate
     * @param int $invoiceId
     * @param string $invoiceNo
     * @param int $orderId
     * @param string $supplierId
     */
    public function __construct(?float $amount = null, ?string $bookingNo = null, ?string $comments = null, ?string $creationDate = null, ?int $creationUser = null, ?string $invoiceDate = null, ?int $invoiceId = null, ?string $invoiceNo = null, ?int $orderId = null, ?string $supplierId = null)
    {
        $this
            ->setAmount($amount)
            ->setBookingNo($bookingNo)
            ->setComments($comments)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setInvoiceDate($invoiceDate)
            ->setInvoiceId($invoiceId)
            ->setInvoiceNo($invoiceNo)
            ->setOrderId($orderId)
            ->setSupplierId($supplierId);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get bookingNo value
     * @return string|null
     */
    public function getBookingNo(): ?string
    {
        return $this->bookingNo;
    }
    /**
     * Set bookingNo value
     * @param string $bookingNo
     * @return \Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO
     */
    public function setBookingNo(?string $bookingNo = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingNo) && !is_string($bookingNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingNo, true), gettype($bookingNo)), __LINE__);
        }
        $this->bookingNo = $bookingNo;
        
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO
     */
    public function setComments(?string $comments = null): self
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO
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
     * Get invoiceDate value
     * @return string|null
     */
    public function getInvoiceDate(): ?string
    {
        return $this->invoiceDate;
    }
    /**
     * Set invoiceDate value
     * @param string $invoiceDate
     * @return \Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO
     */
    public function setInvoiceDate(?string $invoiceDate = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceDate) && !is_string($invoiceDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceDate, true), gettype($invoiceDate)), __LINE__);
        }
        $this->invoiceDate = $invoiceDate;
        
        return $this;
    }
    /**
     * Get invoiceId value
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
    /**
     * Set invoiceId value
     * @param int $invoiceId
     * @return \Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO
     */
    public function setInvoiceId(?int $invoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceId) && !(is_int($invoiceId) || ctype_digit($invoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
        return $this;
    }
    /**
     * Get invoiceNo value
     * @return string|null
     */
    public function getInvoiceNo(): ?string
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param string $invoiceNo
     * @return \Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO
     */
    public function setInvoiceNo(?string $invoiceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($invoiceNo) && !is_string($invoiceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO
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
}
