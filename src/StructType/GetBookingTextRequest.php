<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingTextRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBookingTextRequest extends AbstractStructBase
{
    /**
     * The SellItemProvision
     * Meta information extracted from the WSDL
     * - ref: SellItemProvision
     * @var \Pggns\MidocoApi\Order\StructType\SellItemProvisionType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SellItemProvisionType $SellItemProvision = null;
    /**
     * The inkassoMode
     * @var int|null
     */
    protected ?int $inkassoMode = null;
    /**
     * The supplierName
     * @var string|null
     */
    protected ?string $supplierName = null;
    /**
     * Constructor method for GetBookingTextRequest
     * @uses GetBookingTextRequest::setSellItemProvision()
     * @uses GetBookingTextRequest::setInkassoMode()
     * @uses GetBookingTextRequest::setSupplierName()
     * @param \Pggns\MidocoApi\Order\StructType\SellItemProvisionType $sellItemProvision
     * @param int $inkassoMode
     * @param string $supplierName
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SellItemProvisionType $sellItemProvision = null, ?int $inkassoMode = null, ?string $supplierName = null)
    {
        $this
            ->setSellItemProvision($sellItemProvision)
            ->setInkassoMode($inkassoMode)
            ->setSupplierName($supplierName);
    }
    /**
     * Get SellItemProvision value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType|null
     */
    public function getSellItemProvision(): ?\Pggns\MidocoApi\Order\StructType\SellItemProvisionType
    {
        return $this->SellItemProvision;
    }
    /**
     * Set SellItemProvision value
     * @param \Pggns\MidocoApi\Order\StructType\SellItemProvisionType $sellItemProvision
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingTextRequest
     */
    public function setSellItemProvision(?\Pggns\MidocoApi\Order\StructType\SellItemProvisionType $sellItemProvision = null): self
    {
        $this->SellItemProvision = $sellItemProvision;
        
        return $this;
    }
    /**
     * Get inkassoMode value
     * @return int|null
     */
    public function getInkassoMode(): ?int
    {
        return $this->inkassoMode;
    }
    /**
     * Set inkassoMode value
     * @param int $inkassoMode
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingTextRequest
     */
    public function setInkassoMode(?int $inkassoMode = null): self
    {
        // validation for constraint: int
        if (!is_null($inkassoMode) && !(is_int($inkassoMode) || ctype_digit($inkassoMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($inkassoMode, true), gettype($inkassoMode)), __LINE__);
        }
        $this->inkassoMode = $inkassoMode;
        
        return $this;
    }
    /**
     * Get supplierName value
     * @return string|null
     */
    public function getSupplierName(): ?string
    {
        return $this->supplierName;
    }
    /**
     * Set supplierName value
     * @param string $supplierName
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingTextRequest
     */
    public function setSupplierName(?string $supplierName = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierName) && !is_string($supplierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierName, true), gettype($supplierName)), __LINE__);
        }
        $this->supplierName = $supplierName;
        
        return $this;
    }
}
