<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOrderLayoutRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchOrderLayoutRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderLayout
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderLayout
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderLayout $MidocoOrderLayout = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for SearchOrderLayoutRequest
     * @uses SearchOrderLayoutRequest::setMidocoOrderLayout()
     * @uses SearchOrderLayoutRequest::setUnitName()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout $midocoOrderLayout
     * @param string $unitName
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderLayout $midocoOrderLayout = null, ?string $unitName = null)
    {
        $this
            ->setMidocoOrderLayout($midocoOrderLayout)
            ->setUnitName($unitName);
    }
    /**
     * Get MidocoOrderLayout value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout|null
     */
    public function getMidocoOrderLayout(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderLayout
    {
        return $this->MidocoOrderLayout;
    }
    /**
     * Set MidocoOrderLayout value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderLayout $midocoOrderLayout
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderLayoutRequest
     */
    public function setMidocoOrderLayout(?\Pggns\MidocoApi\Order\StructType\MidocoOrderLayout $midocoOrderLayout = null): self
    {
        $this->MidocoOrderLayout = $midocoOrderLayout;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderLayoutRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
