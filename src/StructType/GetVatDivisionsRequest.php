<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatDivisionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVatDivisionsRequest extends AbstractStructBase
{
    /**
     * The MidocoVatDivision
     * Meta information extracted from the WSDL
     * - ref: MidocoVatDivision
     * @var \Pggns\MidocoApi\Order\StructType\VatDivisionDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\VatDivisionDTO $MidocoVatDivision = null;
    /**
     * Constructor method for GetVatDivisionsRequest
     * @uses GetVatDivisionsRequest::setMidocoVatDivision()
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionDTO $midocoVatDivision
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\VatDivisionDTO $midocoVatDivision = null)
    {
        $this
            ->setMidocoVatDivision($midocoVatDivision);
    }
    /**
     * Get MidocoVatDivision value
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionDTO|null
     */
    public function getMidocoVatDivision(): ?\Pggns\MidocoApi\Order\StructType\VatDivisionDTO
    {
        return $this->MidocoVatDivision;
    }
    /**
     * Set MidocoVatDivision value
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionDTO $midocoVatDivision
     * @return \Pggns\MidocoApi\Order\StructType\GetVatDivisionsRequest
     */
    public function setMidocoVatDivision(?\Pggns\MidocoApi\Order\StructType\VatDivisionDTO $midocoVatDivision = null): self
    {
        $this->MidocoVatDivision = $midocoVatDivision;
        
        return $this;
    }
}
