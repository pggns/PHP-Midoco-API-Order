<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemarkOrgunitsRequest StructType
 * @subpackage Structs
 */
class GetRemarkOrgunitsRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkOrgunit
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkOrgunit
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $MidocoRemarkOrgunit = null;
    /**
     * Constructor method for GetRemarkOrgunitsRequest
     * @uses GetRemarkOrgunitsRequest::setMidocoRemarkOrgunit()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit = null)
    {
        $this
            ->setMidocoRemarkOrgunit($midocoRemarkOrgunit);
    }
    /**
     * Get MidocoRemarkOrgunit value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit|null
     */
    public function getMidocoRemarkOrgunit(): ?\Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit
    {
        return $this->MidocoRemarkOrgunit;
    }
    /**
     * Set MidocoRemarkOrgunit value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\GetRemarkOrgunitsRequest
     */
    public function setMidocoRemarkOrgunit(?\Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit = null): self
    {
        $this->MidocoRemarkOrgunit = $midocoRemarkOrgunit;
        
        return $this;
    }
}
