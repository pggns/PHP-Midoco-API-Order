<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSwissQrInvoiceInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSwissQrInvoiceInfoResponse extends AbstractStructBase
{
    /**
     * The SwissQrInvoiceInfo
     * Meta information extracted from the WSDL
     * - ref: SwissQrInvoiceInfo
     * @var \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo $SwissQrInvoiceInfo = null;
    /**
     * Constructor method for GetSwissQrInvoiceInfoResponse
     * @uses GetSwissQrInvoiceInfoResponse::setSwissQrInvoiceInfo()
     * @param \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo $swissQrInvoiceInfo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo $swissQrInvoiceInfo = null)
    {
        $this
            ->setSwissQrInvoiceInfo($swissQrInvoiceInfo);
    }
    /**
     * Get SwissQrInvoiceInfo value
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo|null
     */
    public function getSwissQrInvoiceInfo(): ?\Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
    {
        return $this->SwissQrInvoiceInfo;
    }
    /**
     * Set SwissQrInvoiceInfo value
     * @param \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo $swissQrInvoiceInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetSwissQrInvoiceInfoResponse
     */
    public function setSwissQrInvoiceInfo(?\Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo $swissQrInvoiceInfo = null): self
    {
        $this->SwissQrInvoiceInfo = $swissQrInvoiceInfo;
        
        return $this;
    }
}
