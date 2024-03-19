<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDestinationAutoRemarkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDestinationAutoRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoDestinationAutoRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoDestinationAutoRemark
     * @var \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO $MidocoDestinationAutoRemark = null;
    /**
     * Constructor method for SaveDestinationAutoRemarkRequest
     * @uses SaveDestinationAutoRemarkRequest::setMidocoDestinationAutoRemark()
     * @param \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark = null)
    {
        $this
            ->setMidocoDestinationAutoRemark($midocoDestinationAutoRemark);
    }
    /**
     * Get MidocoDestinationAutoRemark value
     * @return \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO|null
     */
    public function getMidocoDestinationAutoRemark(): ?\Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO
    {
        return $this->MidocoDestinationAutoRemark;
    }
    /**
     * Set MidocoDestinationAutoRemark value
     * @param \Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark
     * @return \Pggns\MidocoApi\Order\StructType\SaveDestinationAutoRemarkRequest
     */
    public function setMidocoDestinationAutoRemark(?\Pggns\MidocoApi\Order\StructType\DestinationAutoRemarkDTO $midocoDestinationAutoRemark = null): self
    {
        $this->MidocoDestinationAutoRemark = $midocoDestinationAutoRemark;
        
        return $this;
    }
}
