<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for taxInformation StructType
 * @subpackage Structs
 */
class TaxInformation extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The taxType
     * @var string|null
     */
    protected ?string $taxType = null;
    /**
     * The taxAmount
     * @var float|null
     */
    protected ?float $taxAmount = null;
    /**
     * The tax_currency
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * @var string|null
     */
    protected ?string $tax_currency = null;
    /**
     * Constructor method for taxInformation
     * @uses TaxInformation::setPosition()
     * @uses TaxInformation::setTaxType()
     * @uses TaxInformation::setTaxAmount()
     * @uses TaxInformation::setTax_currency()
     * @param int $position
     * @param string $taxType
     * @param float $taxAmount
     * @param string $tax_currency
     */
    public function __construct(int $position, ?string $taxType = null, ?float $taxAmount = null, ?string $tax_currency = null)
    {
        $this
            ->setPosition($position)
            ->setTaxType($taxType)
            ->setTaxAmount($taxAmount)
            ->setTax_currency($tax_currency);
    }
    /**
     * Get position value
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\TaxInformation
     */
    public function setPosition(int $position): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get taxType value
     * @return string|null
     */
    public function getTaxType(): ?string
    {
        return $this->taxType;
    }
    /**
     * Set taxType value
     * @param string $taxType
     * @return \Pggns\MidocoApi\Order\StructType\TaxInformation
     */
    public function setTaxType(?string $taxType = null): self
    {
        // validation for constraint: string
        if (!is_null($taxType) && !is_string($taxType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxType, true), gettype($taxType)), __LINE__);
        }
        $this->taxType = $taxType;
        
        return $this;
    }
    /**
     * Get taxAmount value
     * @return float|null
     */
    public function getTaxAmount(): ?float
    {
        return $this->taxAmount;
    }
    /**
     * Set taxAmount value
     * @param float $taxAmount
     * @return \Pggns\MidocoApi\Order\StructType\TaxInformation
     */
    public function setTaxAmount(?float $taxAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($taxAmount) && !(is_float($taxAmount) || is_numeric($taxAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxAmount, true), gettype($taxAmount)), __LINE__);
        }
        $this->taxAmount = $taxAmount;
        
        return $this;
    }
    /**
     * Get tax_currency value
     * @return string|null
     */
    public function getTax_currency(): ?string
    {
        return $this->tax_currency;
    }
    /**
     * Set tax_currency value
     * @param string $tax_currency
     * @return \Pggns\MidocoApi\Order\StructType\TaxInformation
     */
    public function setTax_currency(?string $tax_currency = null): self
    {
        // validation for constraint: string
        if (!is_null($tax_currency) && !is_string($tax_currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tax_currency, true), gettype($tax_currency)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($tax_currency) && mb_strlen((string) $tax_currency) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen((string) $tax_currency)), __LINE__);
        }
        $this->tax_currency = $tax_currency;
        
        return $this;
    }
}
