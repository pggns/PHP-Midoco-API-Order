<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemarks4OrgunitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetRemarks4OrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkOrgunit
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkOrgunit
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $MidocoRemarkOrgunit = null;
    /**
     * The MidocoTextRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoTextRemark
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTextRemark|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTextRemark $MidocoTextRemark = null;
    /**
     * Constructor method for GetRemarks4OrgunitRequest
     * @uses GetRemarks4OrgunitRequest::setMidocoRemarkOrgunit()
     * @uses GetRemarks4OrgunitRequest::setMidocoTextRemark()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTextRemark $midocoTextRemark
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit = null, ?\Pggns\MidocoApi\Order\StructType\MidocoTextRemark $midocoTextRemark = null)
    {
        $this
            ->setMidocoRemarkOrgunit($midocoRemarkOrgunit)
            ->setMidocoTextRemark($midocoTextRemark);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetRemarks4OrgunitRequest
     */
    public function setMidocoRemarkOrgunit(?\Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit = null): self
    {
        $this->MidocoRemarkOrgunit = $midocoRemarkOrgunit;
        
        return $this;
    }
    /**
     * Get MidocoTextRemark value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark|null
     */
    public function getMidocoTextRemark(): ?\Pggns\MidocoApi\Order\StructType\MidocoTextRemark
    {
        return $this->MidocoTextRemark;
    }
    /**
     * Set MidocoTextRemark value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTextRemark $midocoTextRemark
     * @return \Pggns\MidocoApi\Order\StructType\GetRemarks4OrgunitRequest
     */
    public function setMidocoTextRemark(?\Pggns\MidocoApi\Order\StructType\MidocoTextRemark $midocoTextRemark = null): self
    {
        $this->MidocoTextRemark = $midocoTextRemark;
        
        return $this;
    }
}
