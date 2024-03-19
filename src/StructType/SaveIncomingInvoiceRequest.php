<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveIncomingInvoiceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveIncomingInvoiceRequest extends AbstractStructBase
{
    /**
     * The MidocoIncomingInvoice
     * Meta information extracted from the WSDL
     * - ref: MidocoIncomingInvoice
     * @var \Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO $MidocoIncomingInvoice = null;
    /**
     * Constructor method for SaveIncomingInvoiceRequest
     * @uses SaveIncomingInvoiceRequest::setMidocoIncomingInvoice()
     * @param \Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO $midocoIncomingInvoice
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO $midocoIncomingInvoice = null)
    {
        $this
            ->setMidocoIncomingInvoice($midocoIncomingInvoice);
    }
    /**
     * Get MidocoIncomingInvoice value
     * @return \Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO|null
     */
    public function getMidocoIncomingInvoice(): ?\Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO
    {
        return $this->MidocoIncomingInvoice;
    }
    /**
     * Set MidocoIncomingInvoice value
     * @param \Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO $midocoIncomingInvoice
     * @return \Pggns\MidocoApi\Order\StructType\SaveIncomingInvoiceRequest
     */
    public function setMidocoIncomingInvoice(?\Pggns\MidocoApi\Order\StructType\IncomingInvoiceDTO $midocoIncomingInvoice = null): self
    {
        $this->MidocoIncomingInvoice = $midocoIncomingInvoice;
        
        return $this;
    }
}
