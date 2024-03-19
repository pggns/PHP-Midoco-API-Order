<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDebitInfoForReceiptRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveDebitInfoForReceiptRequest extends AbstractStructBase
{
    /**
     * The MidocoDebitInfoForReceipt
     * Meta information extracted from the WSDL
     * - ref: MidocoDebitInfoForReceipt
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt $MidocoDebitInfoForReceipt = null;
    /**
     * Constructor method for SaveDebitInfoForReceiptRequest
     * @uses SaveDebitInfoForReceiptRequest::setMidocoDebitInfoForReceipt()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt $midocoDebitInfoForReceipt
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt $midocoDebitInfoForReceipt = null)
    {
        $this
            ->setMidocoDebitInfoForReceipt($midocoDebitInfoForReceipt);
    }
    /**
     * Get MidocoDebitInfoForReceipt value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt|null
     */
    public function getMidocoDebitInfoForReceipt(): ?\Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt
    {
        return $this->MidocoDebitInfoForReceipt;
    }
    /**
     * Set MidocoDebitInfoForReceipt value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt $midocoDebitInfoForReceipt
     * @return \Pggns\MidocoApi\Order\StructType\SaveDebitInfoForReceiptRequest
     */
    public function setMidocoDebitInfoForReceipt(?\Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt $midocoDebitInfoForReceipt = null): self
    {
        $this->MidocoDebitInfoForReceipt = $midocoDebitInfoForReceipt;
        
        return $this;
    }
}
