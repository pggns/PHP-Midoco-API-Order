<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tax-information StructType
 * @subpackage Structs
 */
class Tax_information extends AbstractStructBase
{
    /**
     * The position
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $position;
    /**
     * The tax_type
     * @var string|null
     */
    protected ?string $tax_type = null;
    /**
     * The tax_amount
     * @var float|null
     */
    protected ?float $tax_amount = null;
    /**
     * The tax_currency
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * @var string|null
     */
    protected ?string $tax_currency = null;
    /**
     * Constructor method for tax-information
     * @uses Tax_information::setPosition()
     * @uses Tax_information::setTax_type()
     * @uses Tax_information::setTax_amount()
     * @uses Tax_information::setTax_currency()
     * @param int $position
     * @param string $tax_type
     * @param float $tax_amount
     * @param string $tax_currency
     */
    public function __construct(int $position, ?string $tax_type = null, ?float $tax_amount = null, ?string $tax_currency = null)
    {
        $this
            ->setPosition($position)
            ->setTax_type($tax_type)
            ->setTax_amount($tax_amount)
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
     * @return \Pggns\MidocoApi\Order\StructType\Tax_information
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
     * Get tax_type value
     * @return string|null
     */
    public function getTax_type(): ?string
    {
        return $this->{'tax-type'};
    }
    /**
     * Set tax_type value
     * @param string $tax_type
     * @return \Pggns\MidocoApi\Order\StructType\Tax_information
     */
    public function setTax_type(?string $tax_type = null): self
    {
        // validation for constraint: string
        if (!is_null($tax_type) && !is_string($tax_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tax_type, true), gettype($tax_type)), __LINE__);
        }
        $this->tax_type = $this->{'tax-type'} = $tax_type;
        
        return $this;
    }
    /**
     * Get tax_amount value
     * @return float|null
     */
    public function getTax_amount(): ?float
    {
        return $this->{'tax-amount'};
    }
    /**
     * Set tax_amount value
     * @param float $tax_amount
     * @return \Pggns\MidocoApi\Order\StructType\Tax_information
     */
    public function setTax_amount(?float $tax_amount = null): self
    {
        // validation for constraint: float
        if (!is_null($tax_amount) && !(is_float($tax_amount) || is_numeric($tax_amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($tax_amount, true), gettype($tax_amount)), __LINE__);
        }
        $this->tax_amount = $this->{'tax-amount'} = $tax_amount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Tax_information
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
