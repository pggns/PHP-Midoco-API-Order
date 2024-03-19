<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrderNoticeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteOrderNoticeRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderNotice
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderNotice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $MidocoOrderNotice = null;
    /**
     * Constructor method for DeleteOrderNoticeRequest
     * @uses DeleteOrderNoticeRequest::setMidocoOrderNotice()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $midocoOrderNotice
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $midocoOrderNotice = null)
    {
        $this
            ->setMidocoOrderNotice($midocoOrderNotice);
    }
    /**
     * Get MidocoOrderNotice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice|null
     */
    public function getMidocoOrderNotice(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderNotice
    {
        return $this->MidocoOrderNotice;
    }
    /**
     * Set MidocoOrderNotice value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $midocoOrderNotice
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderNoticeRequest
     */
    public function setMidocoOrderNotice(?\Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $midocoOrderNotice = null): self
    {
        $this->MidocoOrderNotice = $midocoOrderNotice;
        
        return $this;
    }
}
