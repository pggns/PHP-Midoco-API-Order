<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCostCentresRequest StructType
 * @subpackage Structs
 */
class GetCostCentresRequest extends AbstractStructBase
{
    /**
     * The MidocoCostCentre
     * Meta information extracted from the WSDL
     * - ref: MidocoCostCentre
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCostCentre|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoCostCentre $MidocoCostCentre = null;
    /**
     * Constructor method for GetCostCentresRequest
     * @uses GetCostCentresRequest::setMidocoCostCentre()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCostCentre $midocoCostCentre
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoCostCentre $midocoCostCentre = null)
    {
        $this
            ->setMidocoCostCentre($midocoCostCentre);
    }
    /**
     * Get MidocoCostCentre value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCostCentre|null
     */
    public function getMidocoCostCentre(): ?\Pggns\MidocoApi\Order\StructType\MidocoCostCentre
    {
        return $this->MidocoCostCentre;
    }
    /**
     * Set MidocoCostCentre value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCostCentre $midocoCostCentre
     * @return \Pggns\MidocoApi\Order\StructType\GetCostCentresRequest
     */
    public function setMidocoCostCentre(?\Pggns\MidocoApi\Order\StructType\MidocoCostCentre $midocoCostCentre = null): self
    {
        $this->MidocoCostCentre = $midocoCostCentre;
        
        return $this;
    }
}
