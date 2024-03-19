<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ComplaintDocumentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ComplaintDocumentDTO extends AbstractStructBase
{
    /**
     * The MidocoCrmDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmDocument
     * @var \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CrmDocumentDTO $MidocoCrmDocument = null;
    /**
     * The MidocoComplaintId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoComplaintId
     * @var \Pggns\MidocoApi\Order\StructType\MidocoComplaintIdDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoComplaintIdDTO $MidocoComplaintId = null;
    /**
     * Constructor method for ComplaintDocumentDTO
     * @uses ComplaintDocumentDTO::setMidocoCrmDocument()
     * @uses ComplaintDocumentDTO::setMidocoComplaintId()
     * @param \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO $midocoCrmDocument
     * @param \Pggns\MidocoApi\Order\StructType\MidocoComplaintIdDTO $midocoComplaintId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\CrmDocumentDTO $midocoCrmDocument = null, ?\Pggns\MidocoApi\Order\StructType\MidocoComplaintIdDTO $midocoComplaintId = null)
    {
        $this
            ->setMidocoCrmDocument($midocoCrmDocument)
            ->setMidocoComplaintId($midocoComplaintId);
    }
    /**
     * Get MidocoCrmDocument value
     * @return \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO|null
     */
    public function getMidocoCrmDocument(): ?\Pggns\MidocoApi\Order\StructType\CrmDocumentDTO
    {
        return $this->MidocoCrmDocument;
    }
    /**
     * Set MidocoCrmDocument value
     * @param \Pggns\MidocoApi\Order\StructType\CrmDocumentDTO $midocoCrmDocument
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintDocumentDTO
     */
    public function setMidocoCrmDocument(?\Pggns\MidocoApi\Order\StructType\CrmDocumentDTO $midocoCrmDocument = null): self
    {
        $this->MidocoCrmDocument = $midocoCrmDocument;
        
        return $this;
    }
    /**
     * Get MidocoComplaintId value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoComplaintIdDTO|null
     */
    public function getMidocoComplaintId(): ?\Pggns\MidocoApi\Order\StructType\MidocoComplaintIdDTO
    {
        return $this->MidocoComplaintId;
    }
    /**
     * Set MidocoComplaintId value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoComplaintIdDTO $midocoComplaintId
     * @return \Pggns\MidocoApi\Order\StructType\ComplaintDocumentDTO
     */
    public function setMidocoComplaintId(?\Pggns\MidocoApi\Order\StructType\MidocoComplaintIdDTO $midocoComplaintId = null): self
    {
        $this->MidocoComplaintId = $midocoComplaintId;
        
        return $this;
    }
}
