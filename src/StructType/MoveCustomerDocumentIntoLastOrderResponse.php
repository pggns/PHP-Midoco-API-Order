<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveCustomerDocumentIntoLastOrderResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: move a customer document into the last order of the customer
 * @subpackage Structs
 */
class MoveCustomerDocumentIntoLastOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $MidocoOrderDocument = null;
    /**
     * Constructor method for MoveCustomerDocumentIntoLastOrderResponse
     * @uses MoveCustomerDocumentIntoLastOrderResponse::setMidocoOrderDocument()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument = null)
    {
        $this
            ->setMidocoOrderDocument($midocoOrderDocument);
    }
    /**
     * Get MidocoOrderDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument|null
     */
    public function getMidocoOrderDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument
    {
        return $this->MidocoOrderDocument;
    }
    /**
     * Set MidocoOrderDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument
     * @return \Pggns\MidocoApi\Order\StructType\MoveCustomerDocumentIntoLastOrderResponse
     */
    public function setMidocoOrderDocument(?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument = null): self
    {
        $this->MidocoOrderDocument = $midocoOrderDocument;
        
        return $this;
    }
}
