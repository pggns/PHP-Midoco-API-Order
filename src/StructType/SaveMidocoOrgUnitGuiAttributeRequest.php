<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoOrgUnitGuiAttributeRequest StructType
 * @subpackage Structs
 */
class SaveMidocoOrgUnitGuiAttributeRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitGuiAttribute
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgunitGuiAttribute
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute $MidocoOrgunitGuiAttribute = null;
    /**
     * Constructor method for SaveMidocoOrgUnitGuiAttributeRequest
     * @uses SaveMidocoOrgUnitGuiAttributeRequest::setMidocoOrgunitGuiAttribute()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute = null)
    {
        $this
            ->setMidocoOrgunitGuiAttribute($midocoOrgunitGuiAttribute);
    }
    /**
     * Get MidocoOrgunitGuiAttribute value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute|null
     */
    public function getMidocoOrgunitGuiAttribute(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute
    {
        return $this->MidocoOrgunitGuiAttribute;
    }
    /**
     * Set MidocoOrgunitGuiAttribute value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoOrgUnitGuiAttributeRequest
     */
    public function setMidocoOrgunitGuiAttribute(?\Pggns\MidocoApi\Order\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute = null): self
    {
        $this->MidocoOrgunitGuiAttribute = $midocoOrgunitGuiAttribute;
        
        return $this;
    }
}
