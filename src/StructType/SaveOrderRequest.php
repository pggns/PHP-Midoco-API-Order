<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderRequest StructType
 * @subpackage Structs
 */
class SaveOrderRequest extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The isImport
     * Meta information extracted from the WSDL
     * - documentation: This flag is reflected in the order change history. Note that this flag can also influence the subtleties when saving the order. Default: false
     * @var bool|null
     */
    protected ?bool $isImport = null;
    /**
     * The crs
     * Meta information extracted from the WSDL
     * - documentation: The provided CRS is reflected in the order change history. Note that the CRS value may influence subtleties when saving the order. By default, this attribute is not set.
     * @var string|null
     */
    protected ?string $crs = null;
    /**
     * Constructor method for SaveOrderRequest
     * @uses SaveOrderRequest::setMidocoOrder()
     * @uses SaveOrderRequest::setIsImport()
     * @uses SaveOrderRequest::setCrs()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @param bool $isImport
     * @param string $crs
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null, ?bool $isImport = null, ?string $crs = null)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setIsImport($isImport)
            ->setCrs($crs);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderRequest
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get isImport value
     * @return bool|null
     */
    public function getIsImport(): ?bool
    {
        return $this->isImport;
    }
    /**
     * Set isImport value
     * @param bool $isImport
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderRequest
     */
    public function setIsImport(?bool $isImport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isImport) && !is_bool($isImport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isImport, true), gettype($isImport)), __LINE__);
        }
        $this->isImport = $isImport;
        
        return $this;
    }
    /**
     * Get crs value
     * @return string|null
     */
    public function getCrs(): ?string
    {
        return $this->crs;
    }
    /**
     * Set crs value
     * @param string $crs
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderRequest
     */
    public function setCrs(?string $crs = null): self
    {
        // validation for constraint: string
        if (!is_null($crs) && !is_string($crs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crs, true), gettype($crs)), __LINE__);
        }
        $this->crs = $crs;
        
        return $this;
    }
}
