<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeOrderDiffInvoiceResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MakeOrderDiffInvoiceResponse extends AbstractStructBase
{
    /**
     * The MidocoInvoice
     * Meta information extracted from the WSDL
     * - ref: MidocoInvoice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoice|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoInvoice $MidocoInvoice = null;
    /**
     * The VoidInvoice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoInvoiceType $VoidInvoice = null;
    /**
     * Constructor method for MakeOrderDiffInvoiceResponse
     * @uses MakeOrderDiffInvoiceResponse::setMidocoInvoice()
     * @uses MakeOrderDiffInvoiceResponse::setVoidInvoice()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoice $midocoInvoice
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType $voidInvoice
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoInvoice $midocoInvoice = null, ?\Pggns\MidocoApi\Order\StructType\MidocoInvoiceType $voidInvoice = null)
    {
        $this
            ->setMidocoInvoice($midocoInvoice)
            ->setVoidInvoice($voidInvoice);
    }
    /**
     * Get MidocoInvoice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoice|null
     */
    public function getMidocoInvoice(): ?\Pggns\MidocoApi\Order\StructType\MidocoInvoice
    {
        return $this->MidocoInvoice;
    }
    /**
     * Set MidocoInvoice value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoice $midocoInvoice
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderDiffInvoiceResponse
     */
    public function setMidocoInvoice(?\Pggns\MidocoApi\Order\StructType\MidocoInvoice $midocoInvoice = null): self
    {
        $this->MidocoInvoice = $midocoInvoice;
        
        return $this;
    }
    /**
     * Get VoidInvoice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType|null
     */
    public function getVoidInvoice(): ?\Pggns\MidocoApi\Order\StructType\MidocoInvoiceType
    {
        return $this->VoidInvoice;
    }
    /**
     * Set VoidInvoice value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceType $voidInvoice
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderDiffInvoiceResponse
     */
    public function setVoidInvoice(?\Pggns\MidocoApi\Order\StructType\MidocoInvoiceType $voidInvoice = null): self
    {
        $this->VoidInvoice = $voidInvoice;
        
        return $this;
    }
}
