<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveFeeGroupAssignResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveFeeGroupAssignResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeGroupAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeGroupAssign
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign $MidocoFeeGroupAssign = null;
    /**
     * Constructor method for SaveFeeGroupAssignResponse
     * @uses SaveFeeGroupAssignResponse::setMidocoFeeGroupAssign()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign $midocoFeeGroupAssign
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign $midocoFeeGroupAssign = null)
    {
        $this
            ->setMidocoFeeGroupAssign($midocoFeeGroupAssign);
    }
    /**
     * Get MidocoFeeGroupAssign value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign|null
     */
    public function getMidocoFeeGroupAssign(): ?\Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign
    {
        return $this->MidocoFeeGroupAssign;
    }
    /**
     * Set MidocoFeeGroupAssign value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign $midocoFeeGroupAssign
     * @return \Pggns\MidocoApi\Order\StructType\SaveFeeGroupAssignResponse
     */
    public function setMidocoFeeGroupAssign(?\Pggns\MidocoApi\Order\StructType\MidocoFeeGroupAssign $midocoFeeGroupAssign = null): self
    {
        $this->MidocoFeeGroupAssign = $midocoFeeGroupAssign;
        
        return $this;
    }
}
