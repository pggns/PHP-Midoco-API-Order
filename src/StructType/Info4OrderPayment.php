<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Info4OrderPayment StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Info4OrderPayment extends AbstractStructBase
{
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The paymentMethod
     * @var string|null
     */
    protected ?string $paymentMethod = null;
    /**
     * The voucherNo
     * @var string|null
     */
    protected ?string $voucherNo = null;
    /**
     * Constructor method for Info4OrderPayment
     * @uses Info4OrderPayment::setCcType()
     * @uses Info4OrderPayment::setPaymentType()
     * @uses Info4OrderPayment::setPaymentMethod()
     * @uses Info4OrderPayment::setVoucherNo()
     * @param string $ccType
     * @param string $paymentType
     * @param string $paymentMethod
     * @param string $voucherNo
     */
    public function __construct(?string $ccType = null, ?string $paymentType = null, ?string $paymentMethod = null, ?string $voucherNo = null)
    {
        $this
            ->setCcType($ccType)
            ->setPaymentType($paymentType)
            ->setPaymentMethod($paymentMethod)
            ->setVoucherNo($voucherNo);
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Order\StructType\Info4OrderPayment
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Order\StructType\Info4OrderPayment
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get paymentMethod value
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }
    /**
     * Set paymentMethod value
     * @param string $paymentMethod
     * @return \Pggns\MidocoApi\Order\StructType\Info4OrderPayment
     */
    public function setPaymentMethod(?string $paymentMethod = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentMethod) && !is_string($paymentMethod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentMethod, true), gettype($paymentMethod)), __LINE__);
        }
        $this->paymentMethod = $paymentMethod;
        
        return $this;
    }
    /**
     * Get voucherNo value
     * @return string|null
     */
    public function getVoucherNo(): ?string
    {
        return $this->voucherNo;
    }
    /**
     * Set voucherNo value
     * @param string $voucherNo
     * @return \Pggns\MidocoApi\Order\StructType\Info4OrderPayment
     */
    public function setVoucherNo(?string $voucherNo = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherNo) && !is_string($voucherNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherNo, true), gettype($voucherNo)), __LINE__);
        }
        $this->voucherNo = $voucherNo;
        
        return $this;
    }
}
