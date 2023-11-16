<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadPaymentDataRequest StructType
 * @subpackage Structs
 */
class UploadPaymentDataRequest extends AbstractStructBase
{
    /**
     * The paymentLine
     * @var string|null
     */
    protected ?string $paymentLine = null;
    /**
     * The lineNo
     * @var int|null
     */
    protected ?int $lineNo = null;
    /**
     * The format
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * Constructor method for UploadPaymentDataRequest
     * @uses UploadPaymentDataRequest::setPaymentLine()
     * @uses UploadPaymentDataRequest::setLineNo()
     * @uses UploadPaymentDataRequest::setFormat()
     * @uses UploadPaymentDataRequest::setOrderNo()
     * @param string $paymentLine
     * @param int $lineNo
     * @param string $format
     * @param int $orderNo
     */
    public function __construct(?string $paymentLine = null, ?int $lineNo = null, ?string $format = null, ?int $orderNo = null)
    {
        $this
            ->setPaymentLine($paymentLine)
            ->setLineNo($lineNo)
            ->setFormat($format)
            ->setOrderNo($orderNo);
    }
    /**
     * Get paymentLine value
     * @return string|null
     */
    public function getPaymentLine(): ?string
    {
        return $this->paymentLine;
    }
    /**
     * Set paymentLine value
     * @param string $paymentLine
     * @return \Pggns\MidocoApi\Order\StructType\UploadPaymentDataRequest
     */
    public function setPaymentLine(?string $paymentLine = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentLine) && !is_string($paymentLine)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentLine, true), gettype($paymentLine)), __LINE__);
        }
        $this->paymentLine = $paymentLine;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\UploadPaymentDataRequest
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
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Pggns\MidocoApi\Order\StructType\UploadPaymentDataRequest
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        $this->format = $format;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\UploadPaymentDataRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
}
