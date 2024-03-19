<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TouchedVatCodeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TouchedVatCodeType extends AbstractStructBase
{
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * The isReverseCharge
     * @var bool|null
     */
    protected ?bool $isReverseCharge = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatBase
     * @var float|null
     */
    protected ?float $vatBase = null;
    /**
     * Constructor method for TouchedVatCodeType
     * @uses TouchedVatCodeType::setVatCode()
     * @uses TouchedVatCodeType::setVatPercent()
     * @uses TouchedVatCodeType::setIsReverseCharge()
     * @uses TouchedVatCodeType::setVatAmount()
     * @uses TouchedVatCodeType::setVatBase()
     * @param string $vatCode
     * @param float $vatPercent
     * @param bool $isReverseCharge
     * @param float $vatAmount
     * @param float $vatBase
     */
    public function __construct(?string $vatCode = null, ?float $vatPercent = null, ?bool $isReverseCharge = null, ?float $vatAmount = null, ?float $vatBase = null)
    {
        $this
            ->setVatCode($vatCode)
            ->setVatPercent($vatPercent)
            ->setIsReverseCharge($isReverseCharge)
            ->setVatAmount($vatAmount)
            ->setVatBase($vatBase);
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
        return $this;
    }
    /**
     * Get isReverseCharge value
     * @return bool|null
     */
    public function getIsReverseCharge(): ?bool
    {
        return $this->isReverseCharge;
    }
    /**
     * Set isReverseCharge value
     * @param bool $isReverseCharge
     * @return \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType
     */
    public function setIsReverseCharge(?bool $isReverseCharge = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReverseCharge) && !is_bool($isReverseCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReverseCharge, true), gettype($isReverseCharge)), __LINE__);
        }
        $this->isReverseCharge = $isReverseCharge;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get vatBase value
     * @return float|null
     */
    public function getVatBase(): ?float
    {
        return $this->vatBase;
    }
    /**
     * Set vatBase value
     * @param float $vatBase
     * @return \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType
     */
    public function setVatBase(?float $vatBase = null): self
    {
        // validation for constraint: float
        if (!is_null($vatBase) && !(is_float($vatBase) || is_numeric($vatBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatBase, true), gettype($vatBase)), __LINE__);
        }
        $this->vatBase = $vatBase;
        
        return $this;
    }
}
