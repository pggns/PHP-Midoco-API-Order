<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSellItemVatDivisionRequest StructType
 * @subpackage Structs
 */
class SaveSellItemVatDivisionRequest extends AbstractStructBase
{
    /**
     * The MidocoSellItemVatDivision
     * Meta information extracted from the WSDL
     * - ref: MidocoSellItemVatDivision
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $MidocoSellItemVatDivision = null;
    /**
     * Constructor method for SaveSellItemVatDivisionRequest
     * @uses SaveSellItemVatDivisionRequest::setMidocoSellItemVatDivision()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $midocoSellItemVatDivision
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $midocoSellItemVatDivision = null)
    {
        $this
            ->setMidocoSellItemVatDivision($midocoSellItemVatDivision);
    }
    /**
     * Get MidocoSellItemVatDivision value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision|null
     */
    public function getMidocoSellItemVatDivision(): ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision
    {
        return $this->MidocoSellItemVatDivision;
    }
    /**
     * Set MidocoSellItemVatDivision value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $midocoSellItemVatDivision
     * @return \Pggns\MidocoApi\Order\StructType\SaveSellItemVatDivisionRequest
     */
    public function setMidocoSellItemVatDivision(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $midocoSellItemVatDivision = null): self
    {
        $this->MidocoSellItemVatDivision = $midocoSellItemVatDivision;
        
        return $this;
    }
}
