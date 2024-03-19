<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTravelDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveTravelDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTravelDocument $MidocoTravelDocument = null;
    /**
     * Constructor method for SaveTravelDocumentRequest
     * @uses SaveTravelDocumentRequest::setMidocoTravelDocument()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelDocument $midocoTravelDocument
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoTravelDocument $midocoTravelDocument = null)
    {
        $this
            ->setMidocoTravelDocument($midocoTravelDocument);
    }
    /**
     * Get MidocoTravelDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelDocument|null
     */
    public function getMidocoTravelDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoTravelDocument
    {
        return $this->MidocoTravelDocument;
    }
    /**
     * Set MidocoTravelDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelDocument $midocoTravelDocument
     * @return \Pggns\MidocoApi\Order\StructType\SaveTravelDocumentRequest
     */
    public function setMidocoTravelDocument(?\Pggns\MidocoApi\Order\StructType\MidocoTravelDocument $midocoTravelDocument = null): self
    {
        $this->MidocoTravelDocument = $midocoTravelDocument;
        
        return $this;
    }
}
