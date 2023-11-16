<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDestinationDocumentRequest StructType
 * @subpackage Structs
 */
class DeleteDestinationDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoDestinationDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoDestinationDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument $MidocoDestinationDocument = null;
    /**
     * Constructor method for DeleteDestinationDocumentRequest
     * @uses DeleteDestinationDocumentRequest::setMidocoDestinationDocument()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument $midocoDestinationDocument
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument $midocoDestinationDocument = null)
    {
        $this
            ->setMidocoDestinationDocument($midocoDestinationDocument);
    }
    /**
     * Get MidocoDestinationDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument|null
     */
    public function getMidocoDestinationDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument
    {
        return $this->MidocoDestinationDocument;
    }
    /**
     * Set MidocoDestinationDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument $midocoDestinationDocument
     * @return \Pggns\MidocoApi\Order\StructType\DeleteDestinationDocumentRequest
     */
    public function setMidocoDestinationDocument(?\Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument $midocoDestinationDocument = null): self
    {
        $this->MidocoDestinationDocument = $midocoDestinationDocument;
        
        return $this;
    }
}
