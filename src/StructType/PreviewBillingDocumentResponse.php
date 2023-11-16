<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreviewBillingDocumentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: previewBillingDocument - the Printjob should be a preview on the screen. Only allowed if the document_no is not filled.
 * @subpackage Structs
 */
class PreviewBillingDocumentResponse extends AbstractStructBase
{
    /**
     * The FOPBillingDocument
     * @var string|null
     */
    protected ?string $FOPBillingDocument = null;
    /**
     * Constructor method for PreviewBillingDocumentResponse
     * @uses PreviewBillingDocumentResponse::setFOPBillingDocument()
     * @param string $fOPBillingDocument
     */
    public function __construct(?string $fOPBillingDocument = null)
    {
        $this
            ->setFOPBillingDocument($fOPBillingDocument);
    }
    /**
     * Get FOPBillingDocument value
     * @return string|null
     */
    public function getFOPBillingDocument(): ?string
    {
        return $this->FOPBillingDocument;
    }
    /**
     * Set FOPBillingDocument value
     * @param string $fOPBillingDocument
     * @return \Pggns\MidocoApi\Order\StructType\PreviewBillingDocumentResponse
     */
    public function setFOPBillingDocument(?string $fOPBillingDocument = null): self
    {
        // validation for constraint: string
        if (!is_null($fOPBillingDocument) && !is_string($fOPBillingDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fOPBillingDocument, true), gettype($fOPBillingDocument)), __LINE__);
        }
        $this->FOPBillingDocument = $fOPBillingDocument;
        
        return $this;
    }
}
