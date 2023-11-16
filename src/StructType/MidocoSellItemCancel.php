<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSellItemCancel StructType
 * @subpackage Structs
 */
class MidocoSellItemCancel extends SupplierCancelConditionDTO
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The feeValue
     * @var float|null
     */
    protected ?float $feeValue = null;
    /**
     * Constructor method for MidocoSellItemCancel
     * @uses MidocoSellItemCancel::setDescription()
     * @uses MidocoSellItemCancel::setFeeValue()
     * @param string $description
     * @param float $feeValue
     */
    public function __construct(?string $description = null, ?float $feeValue = null)
    {
        $this
            ->setDescription($description)
            ->setFeeValue($feeValue);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemCancel
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get feeValue value
     * @return float|null
     */
    public function getFeeValue(): ?float
    {
        return $this->feeValue;
    }
    /**
     * Set feeValue value
     * @param float $feeValue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemCancel
     */
    public function setFeeValue(?float $feeValue = null): self
    {
        // validation for constraint: float
        if (!is_null($feeValue) && !(is_float($feeValue) || is_numeric($feeValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeValue, true), gettype($feeValue)), __LINE__);
        }
        $this->feeValue = $feeValue;
        
        return $this;
    }
}
