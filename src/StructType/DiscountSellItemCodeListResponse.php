<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountSellItemCodeListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DiscountSellItemCodeListResponse extends AbstractStructBase
{
    /**
     * The discountSellItemCodesWithTax
     * @var string|null
     */
    protected ?string $discountSellItemCodesWithTax = null;
    /**
     * The discountSellItemCodesNoTax
     * @var string|null
     */
    protected ?string $discountSellItemCodesNoTax = null;
    /**
     * Constructor method for DiscountSellItemCodeListResponse
     * @uses DiscountSellItemCodeListResponse::setDiscountSellItemCodesWithTax()
     * @uses DiscountSellItemCodeListResponse::setDiscountSellItemCodesNoTax()
     * @param string $discountSellItemCodesWithTax
     * @param string $discountSellItemCodesNoTax
     */
    public function __construct(?string $discountSellItemCodesWithTax = null, ?string $discountSellItemCodesNoTax = null)
    {
        $this
            ->setDiscountSellItemCodesWithTax($discountSellItemCodesWithTax)
            ->setDiscountSellItemCodesNoTax($discountSellItemCodesNoTax);
    }
    /**
     * Get discountSellItemCodesWithTax value
     * @return string|null
     */
    public function getDiscountSellItemCodesWithTax(): ?string
    {
        return $this->discountSellItemCodesWithTax;
    }
    /**
     * Set discountSellItemCodesWithTax value
     * @param string $discountSellItemCodesWithTax
     * @return \Pggns\MidocoApi\Order\StructType\DiscountSellItemCodeListResponse
     */
    public function setDiscountSellItemCodesWithTax(?string $discountSellItemCodesWithTax = null): self
    {
        // validation for constraint: string
        if (!is_null($discountSellItemCodesWithTax) && !is_string($discountSellItemCodesWithTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountSellItemCodesWithTax, true), gettype($discountSellItemCodesWithTax)), __LINE__);
        }
        $this->discountSellItemCodesWithTax = $discountSellItemCodesWithTax;
        
        return $this;
    }
    /**
     * Get discountSellItemCodesNoTax value
     * @return string|null
     */
    public function getDiscountSellItemCodesNoTax(): ?string
    {
        return $this->discountSellItemCodesNoTax;
    }
    /**
     * Set discountSellItemCodesNoTax value
     * @param string $discountSellItemCodesNoTax
     * @return \Pggns\MidocoApi\Order\StructType\DiscountSellItemCodeListResponse
     */
    public function setDiscountSellItemCodesNoTax(?string $discountSellItemCodesNoTax = null): self
    {
        // validation for constraint: string
        if (!is_null($discountSellItemCodesNoTax) && !is_string($discountSellItemCodesNoTax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($discountSellItemCodesNoTax, true), gettype($discountSellItemCodesNoTax)), __LINE__);
        }
        $this->discountSellItemCodesNoTax = $discountSellItemCodesNoTax;
        
        return $this;
    }
}
