<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteCCPaymentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: executeCCPayment --- execute a CC payment for a billing document (approval, create a new online payment transaction, create the corresponding billing position, update the billing document)
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteCCPaymentResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * The MidocoOnlinePaymentTransaction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOnlinePaymentTransaction
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $MidocoOnlinePaymentTransaction = null;
    /**
     * The MidocoBillingPosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $MidocoBillingPosition = null;
    /**
     * Constructor method for ExecuteCCPaymentResponse
     * @uses ExecuteCCPaymentResponse::setMidocoBillingDocument()
     * @uses ExecuteCCPaymentResponse::setMidocoOnlinePaymentTransaction()
     * @uses ExecuteCCPaymentResponse::setMidocoBillingPosition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null, ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction = null, ?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition = null)
    {
        $this
            ->setMidocoBillingDocument($midocoBillingDocument)
            ->setMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction)
            ->setMidocoBillingPosition($midocoBillingPosition);
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    public function getMidocoBillingDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument
    {
        return $this->MidocoBillingDocument;
    }
    /**
     * Set MidocoBillingDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCCPaymentResponse
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
    /**
     * Get MidocoOnlinePaymentTransaction value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction|null
     */
    public function getMidocoOnlinePaymentTransaction(): ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction
    {
        return $this->MidocoOnlinePaymentTransaction;
    }
    /**
     * Set MidocoOnlinePaymentTransaction value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCCPaymentResponse
     */
    public function setMidocoOnlinePaymentTransaction(?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction = null): self
    {
        $this->MidocoOnlinePaymentTransaction = $midocoOnlinePaymentTransaction;
        
        return $this;
    }
    /**
     * Get MidocoBillingPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType|null
     */
    public function getMidocoBillingPosition(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType
    {
        return $this->MidocoBillingPosition;
    }
    /**
     * Set MidocoBillingPosition value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCCPaymentResponse
     */
    public function setMidocoBillingPosition(?\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionType $midocoBillingPosition = null): self
    {
        $this->MidocoBillingPosition = $midocoBillingPosition;
        
        return $this;
    }
}
