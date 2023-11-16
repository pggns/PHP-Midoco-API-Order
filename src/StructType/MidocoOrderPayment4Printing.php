<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderPayment4Printing StructType
 * @subpackage Structs
 */
class MidocoOrderPayment4Printing extends AbstractStructBase
{
    /**
     * The paymentDate
     * @var string|null
     */
    protected ?string $paymentDate = null;
    /**
     * The paymentAmount
     * @var float|null
     */
    protected ?float $paymentAmount = null;
    /**
     * The paymentCurrency
     * @var string|null
     */
    protected ?string $paymentCurrency = null;
    /**
     * The inkassoType
     * @var string|null
     */
    protected ?string $inkassoType = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The ccType
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The ccTypeDesc
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ccTypeDesc = null;
    /**
     * The isExecuted
     * @var bool|null
     */
    protected ?bool $isExecuted = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The paymentMethod
     * @var string|null
     */
    protected ?string $paymentMethod = null;
    /**
     * Constructor method for MidocoOrderPayment4Printing
     * @uses MidocoOrderPayment4Printing::setPaymentDate()
     * @uses MidocoOrderPayment4Printing::setPaymentAmount()
     * @uses MidocoOrderPayment4Printing::setPaymentCurrency()
     * @uses MidocoOrderPayment4Printing::setInkassoType()
     * @uses MidocoOrderPayment4Printing::setPaymentType()
     * @uses MidocoOrderPayment4Printing::setCcType()
     * @uses MidocoOrderPayment4Printing::setCcTypeDesc()
     * @uses MidocoOrderPayment4Printing::setIsExecuted()
     * @uses MidocoOrderPayment4Printing::setItemId()
     * @uses MidocoOrderPayment4Printing::setPaymentMethod()
     * @param string $paymentDate
     * @param float $paymentAmount
     * @param string $paymentCurrency
     * @param string $inkassoType
     * @param string $paymentType
     * @param string $ccType
     * @param string $ccTypeDesc
     * @param bool $isExecuted
     * @param int $itemId
     * @param string $paymentMethod
     */
    public function __construct(?string $paymentDate = null, ?float $paymentAmount = null, ?string $paymentCurrency = null, ?string $inkassoType = null, ?string $paymentType = null, ?string $ccType = null, ?string $ccTypeDesc = null, ?bool $isExecuted = null, ?int $itemId = null, ?string $paymentMethod = null)
    {
        $this
            ->setPaymentDate($paymentDate)
            ->setPaymentAmount($paymentAmount)
            ->setPaymentCurrency($paymentCurrency)
            ->setInkassoType($inkassoType)
            ->setPaymentType($paymentType)
            ->setCcType($ccType)
            ->setCcTypeDesc($ccTypeDesc)
            ->setIsExecuted($isExecuted)
            ->setItemId($itemId)
            ->setPaymentMethod($paymentMethod);
    }
    /**
     * Get paymentDate value
     * @return string|null
     */
    public function getPaymentDate(): ?string
    {
        return $this->paymentDate;
    }
    /**
     * Set paymentDate value
     * @param string $paymentDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment4Printing
     */
    public function setPaymentDate(?string $paymentDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDate) && !is_string($paymentDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDate, true), gettype($paymentDate)), __LINE__);
        }
        $this->paymentDate = $paymentDate;
        
        return $this;
    }
    /**
     * Get paymentAmount value
     * @return float|null
     */
    public function getPaymentAmount(): ?float
    {
        return $this->paymentAmount;
    }
    /**
     * Set paymentAmount value
     * @param float $paymentAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment4Printing
     */
    public function setPaymentAmount(?float $paymentAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($paymentAmount) && !(is_float($paymentAmount) || is_numeric($paymentAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paymentAmount, true), gettype($paymentAmount)), __LINE__);
        }
        $this->paymentAmount = $paymentAmount;
        
        return $this;
    }
    /**
     * Get paymentCurrency value
     * @return string|null
     */
    public function getPaymentCurrency(): ?string
    {
        return $this->paymentCurrency;
    }
    /**
     * Set paymentCurrency value
     * @param string $paymentCurrency
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment4Printing
     */
    public function setPaymentCurrency(?string $paymentCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentCurrency) && !is_string($paymentCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentCurrency, true), gettype($paymentCurrency)), __LINE__);
        }
        $this->paymentCurrency = $paymentCurrency;
        
        return $this;
    }
    /**
     * Get inkassoType value
     * @return string|null
     */
    public function getInkassoType(): ?string
    {
        return $this->inkassoType;
    }
    /**
     * Set inkassoType value
     * @param string $inkassoType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment4Printing
     */
    public function setInkassoType(?string $inkassoType = null): self
    {
        // validation for constraint: string
        if (!is_null($inkassoType) && !is_string($inkassoType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inkassoType, true), gettype($inkassoType)), __LINE__);
        }
        $this->inkassoType = $inkassoType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment4Printing
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment4Printing
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
     * Get ccTypeDesc value
     * @return string|null
     */
    public function getCcTypeDesc(): ?string
    {
        return $this->ccTypeDesc;
    }
    /**
     * Set ccTypeDesc value
     * @param string $ccTypeDesc
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment4Printing
     */
    public function setCcTypeDesc(?string $ccTypeDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($ccTypeDesc) && !is_string($ccTypeDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccTypeDesc, true), gettype($ccTypeDesc)), __LINE__);
        }
        $this->ccTypeDesc = $ccTypeDesc;
        
        return $this;
    }
    /**
     * Get isExecuted value
     * @return bool|null
     */
    public function getIsExecuted(): ?bool
    {
        return $this->isExecuted;
    }
    /**
     * Set isExecuted value
     * @param bool $isExecuted
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment4Printing
     */
    public function setIsExecuted(?bool $isExecuted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExecuted) && !is_bool($isExecuted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExecuted, true), gettype($isExecuted)), __LINE__);
        }
        $this->isExecuted = $isExecuted;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment4Printing
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment4Printing
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
}
