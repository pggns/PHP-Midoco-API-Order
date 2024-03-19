<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteFeeTypeForOrgunitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteFeeTypeForOrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeOrgUnit
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeTypeOrgUnit
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit $MidocoFeeTypeOrgUnit = null;
    /**
     * Constructor method for DeleteFeeTypeForOrgunitRequest
     * @uses DeleteFeeTypeForOrgunitRequest::setMidocoFeeTypeOrgUnit()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit = null)
    {
        $this
            ->setMidocoFeeTypeOrgUnit($midocoFeeTypeOrgUnit);
    }
    /**
     * Get MidocoFeeTypeOrgUnit value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit|null
     */
    public function getMidocoFeeTypeOrgUnit(): ?\Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit
    {
        return $this->MidocoFeeTypeOrgUnit;
    }
    /**
     * Set MidocoFeeTypeOrgUnit value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit
     * @return \Pggns\MidocoApi\Order\StructType\DeleteFeeTypeForOrgunitRequest
     */
    public function setMidocoFeeTypeOrgUnit(?\Pggns\MidocoApi\Order\StructType\MidocoFeeTypeOrgUnit $midocoFeeTypeOrgUnit = null): self
    {
        $this->MidocoFeeTypeOrgUnit = $midocoFeeTypeOrgUnit;
        
        return $this;
    }
}
