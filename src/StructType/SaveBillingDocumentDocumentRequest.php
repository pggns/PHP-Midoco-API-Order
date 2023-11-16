<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveBillingDocumentDocumentRequest StructType
 * @subpackage Structs
 */
class SaveBillingDocumentDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingDocumentDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingDocumentDocument
     * @var \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO $MidocoBillingDocumentDocument = null;
    /**
     * The documentContent
     * @var string|null
     */
    protected ?string $documentContent = null;
    /**
     * Constructor method for SaveBillingDocumentDocumentRequest
     * @uses SaveBillingDocumentDocumentRequest::setMidocoBillingDocumentDocument()
     * @uses SaveBillingDocumentDocumentRequest::setDocumentContent()
     * @param \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO $midocoBillingDocumentDocument
     * @param string $documentContent
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO $midocoBillingDocumentDocument = null, ?string $documentContent = null)
    {
        $this
            ->setMidocoBillingDocumentDocument($midocoBillingDocumentDocument)
            ->setDocumentContent($documentContent);
    }
    /**
     * Get MidocoBillingDocumentDocument value
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO|null
     */
    public function getMidocoBillingDocumentDocument(): ?\Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO
    {
        return $this->MidocoBillingDocumentDocument;
    }
    /**
     * Set MidocoBillingDocumentDocument value
     * @param \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO $midocoBillingDocumentDocument
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocumentDocumentRequest
     */
    public function setMidocoBillingDocumentDocument(?\Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO $midocoBillingDocumentDocument = null): self
    {
        $this->MidocoBillingDocumentDocument = $midocoBillingDocumentDocument;
        
        return $this;
    }
    /**
     * Get documentContent value
     * @return string|null
     */
    public function getDocumentContent(): ?string
    {
        return $this->documentContent;
    }
    /**
     * Set documentContent value
     * @param string $documentContent
     * @return \Pggns\MidocoApi\Order\StructType\SaveBillingDocumentDocumentRequest
     */
    public function setDocumentContent(?string $documentContent = null): self
    {
        // validation for constraint: string
        if (!is_null($documentContent) && !is_string($documentContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentContent, true), gettype($documentContent)), __LINE__);
        }
        $this->documentContent = $documentContent;
        
        return $this;
    }
}
