<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentUploadError StructType
 * @subpackage Structs
 */
class PaymentUploadError extends AbstractStructBase
{
    /**
     * The lineNo
     * @var int|null
     */
    protected ?int $lineNo = null;
    /**
     * The transId
     * @var string|null
     */
    protected ?string $transId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The text
     * @var string|null
     */
    protected ?string $text = null;
    /**
     * Constructor method for PaymentUploadError
     * @uses PaymentUploadError::setLineNo()
     * @uses PaymentUploadError::setTransId()
     * @uses PaymentUploadError::setBookingId()
     * @uses PaymentUploadError::setName()
     * @uses PaymentUploadError::setAmount()
     * @uses PaymentUploadError::setText()
     * @param int $lineNo
     * @param string $transId
     * @param string $bookingId
     * @param string $name
     * @param float $amount
     * @param string $text
     */
    public function __construct(?int $lineNo = null, ?string $transId = null, ?string $bookingId = null, ?string $name = null, ?float $amount = null, ?string $text = null)
    {
        $this
            ->setLineNo($lineNo)
            ->setTransId($transId)
            ->setBookingId($bookingId)
            ->setName($name)
            ->setAmount($amount)
            ->setText($text);
    }
    /**
     * Get lineNo value
     * @return int|null
     */
    public function getLineNo(): ?int
    {
        return $this->lineNo;
    }
    /**
     * Set lineNo value
     * @param int $lineNo
     * @return \Pggns\MidocoApi\Order\StructType\PaymentUploadError
     */
    public function setLineNo(?int $lineNo = null): self
    {
        // validation for constraint: int
        if (!is_null($lineNo) && !(is_int($lineNo) || ctype_digit($lineNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lineNo, true), gettype($lineNo)), __LINE__);
        }
        $this->lineNo = $lineNo;
        
        return $this;
    }
    /**
     * Get transId value
     * @return string|null
     */
    public function getTransId(): ?string
    {
        return $this->transId;
    }
    /**
     * Set transId value
     * @param string $transId
     * @return \Pggns\MidocoApi\Order\StructType\PaymentUploadError
     */
    public function setTransId(?string $transId = null): self
    {
        // validation for constraint: string
        if (!is_null($transId) && !is_string($transId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transId, true), gettype($transId)), __LINE__);
        }
        $this->transId = $transId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentUploadError
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
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\PaymentUploadError
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\PaymentUploadError
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
     * Get text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $text
     * @return \Pggns\MidocoApi\Order\StructType\PaymentUploadError
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->text = $text;
        
        return $this;
    }
}
