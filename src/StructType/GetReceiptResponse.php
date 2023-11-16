<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReceiptResponse StructType
 * @subpackage Structs
 */
class GetReceiptResponse extends AbstractStructBase
{
    /**
     * The MidocoReceipt
     * Meta information extracted from the WSDL
     * - ref: MidocoReceipt
     * @var \Pggns\MidocoApi\Order\StructType\MidocoReceipt|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoReceipt $MidocoReceipt = null;
    /**
     * Constructor method for GetReceiptResponse
     * @uses GetReceiptResponse::setMidocoReceipt()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoReceipt $midocoReceipt
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoReceipt $midocoReceipt = null)
    {
        $this
            ->setMidocoReceipt($midocoReceipt);
    }
    /**
     * Get MidocoReceipt value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceipt|null
     */
    public function getMidocoReceipt(): ?\Pggns\MidocoApi\Order\StructType\MidocoReceipt
    {
        return $this->MidocoReceipt;
    }
    /**
     * Set MidocoReceipt value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoReceipt $midocoReceipt
     * @return \Pggns\MidocoApi\Order\StructType\GetReceiptResponse
     */
    public function setMidocoReceipt(?\Pggns\MidocoApi\Order\StructType\MidocoReceipt $midocoReceipt = null): self
    {
        $this->MidocoReceipt = $midocoReceipt;
        
        return $this;
    }
}
