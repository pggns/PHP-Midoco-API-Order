<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountSellItemCodeListRequest StructType
 * @subpackage Structs
 */
class DiscountSellItemCodeListRequest extends AbstractStructBase
{
    /**
     * The sellItemCode
     * @var string|null
     */
    protected ?string $sellItemCode = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * Constructor method for DiscountSellItemCodeListRequest
     * @uses DiscountSellItemCodeListRequest::setSellItemCode()
     * @uses DiscountSellItemCodeListRequest::setOrgUnit()
     * @param string $sellItemCode
     * @param string $orgUnit
     */
    public function __construct(?string $sellItemCode = null, ?string $orgUnit = null)
    {
        $this
            ->setSellItemCode($sellItemCode)
            ->setOrgUnit($orgUnit);
    }
    /**
     * Get sellItemCode value
     * @return string|null
     */
    public function getSellItemCode(): ?string
    {
        return $this->sellItemCode;
    }
    /**
     * Set sellItemCode value
     * @param string $sellItemCode
     * @return \Pggns\MidocoApi\Order\StructType\DiscountSellItemCodeListRequest
     */
    public function setSellItemCode(?string $sellItemCode = null): self
    {
        // validation for constraint: string
        if (!is_null($sellItemCode) && !is_string($sellItemCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellItemCode, true), gettype($sellItemCode)), __LINE__);
        }
        $this->sellItemCode = $sellItemCode;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\DiscountSellItemCodeListRequest
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
}
