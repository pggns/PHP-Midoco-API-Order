<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBillingPrintRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteBillingPrintRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingPrint
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingPrint
     * @var \Pggns\MidocoApi\Order\StructType\BillingPrintDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\BillingPrintDTO $MidocoBillingPrint = null;
    /**
     * Constructor method for DeleteBillingPrintRequest
     * @uses DeleteBillingPrintRequest::setMidocoBillingPrint()
     * @param \Pggns\MidocoApi\Order\StructType\BillingPrintDTO $midocoBillingPrint
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\BillingPrintDTO $midocoBillingPrint = null)
    {
        $this
            ->setMidocoBillingPrint($midocoBillingPrint);
    }
    /**
     * Get MidocoBillingPrint value
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintDTO|null
     */
    public function getMidocoBillingPrint(): ?\Pggns\MidocoApi\Order\StructType\BillingPrintDTO
    {
        return $this->MidocoBillingPrint;
    }
    /**
     * Set MidocoBillingPrint value
     * @param \Pggns\MidocoApi\Order\StructType\BillingPrintDTO $midocoBillingPrint
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingPrintRequest
     */
    public function setMidocoBillingPrint(?\Pggns\MidocoApi\Order\StructType\BillingPrintDTO $midocoBillingPrint = null): self
    {
        $this->MidocoBillingPrint = $midocoBillingPrint;
        
        return $this;
    }
}
