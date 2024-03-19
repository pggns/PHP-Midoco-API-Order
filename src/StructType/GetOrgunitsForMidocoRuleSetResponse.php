<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitsForMidocoRuleSetResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgunitsForMidocoRuleSetResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgunit
     * Meta information extracted from the WSDL
     * - ref: system:MidocoOrgunit
     * @var \Pggns\MidocoApi\Order\StructType\OrgunitDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\OrgunitDTO $MidocoOrgunit = null;
    /**
     * Constructor method for GetOrgunitsForMidocoRuleSetResponse
     * @uses GetOrgunitsForMidocoRuleSetResponse::setMidocoOrgunit()
     * @param \Pggns\MidocoApi\Order\StructType\OrgunitDTO $midocoOrgunit
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\OrgunitDTO $midocoOrgunit = null)
    {
        $this
            ->setMidocoOrgunit($midocoOrgunit);
    }
    /**
     * Get MidocoOrgunit value
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitDTO|null
     */
    public function getMidocoOrgunit(): ?\Pggns\MidocoApi\Order\StructType\OrgunitDTO
    {
        return $this->MidocoOrgunit;
    }
    /**
     * Set MidocoOrgunit value
     * @param \Pggns\MidocoApi\Order\StructType\OrgunitDTO $midocoOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\GetOrgunitsForMidocoRuleSetResponse
     */
    public function setMidocoOrgunit(?\Pggns\MidocoApi\Order\StructType\OrgunitDTO $midocoOrgunit = null): self
    {
        $this->MidocoOrgunit = $midocoOrgunit;
        
        return $this;
    }
}
