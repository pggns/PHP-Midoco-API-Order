<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportBillingDocumentRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: exportBillingDocument --- exports a billing document as PDF. If type='ORIGINAL' and the billing document is not finished the billing document will be finshed(a document number will be assigned) and then the document data will be
 * returned, if document was already finished the document data is returned. If type='PREVIEW' will return a preview for the billing document and will not alter the document state. If type='COPY' and the billing document is not finished an error will be
 * returned. If type='COPY' and the billing document is finished, a copy of the document will be returned (the document data contains the mark COPY).
 * @subpackage Structs
 */
class ExportBillingDocumentRequest extends AbstractStructBase
{
    /**
     * The billingDocId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $billingDocId;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - default: ORIGINAL
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The printMedia
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - default: P
     * @var string|null
     */
    protected ?string $printMedia = null;
    /**
     * Constructor method for ExportBillingDocumentRequest
     * @uses ExportBillingDocumentRequest::setBillingDocId()
     * @uses ExportBillingDocumentRequest::setType()
     * @uses ExportBillingDocumentRequest::setPrintMedia()
     * @param int $billingDocId
     * @param string $type
     * @param string $printMedia
     */
    public function __construct(int $billingDocId, ?string $type = 'ORIGINAL', ?string $printMedia = 'P')
    {
        $this
            ->setBillingDocId($billingDocId)
            ->setType($type)
            ->setPrintMedia($printMedia);
    }
    /**
     * Get billingDocId value
     * @return int
     */
    public function getBillingDocId(): int
    {
        return $this->billingDocId;
    }
    /**
     * Set billingDocId value
     * @param int $billingDocId
     * @return \Pggns\MidocoApi\Order\StructType\ExportBillingDocumentRequest
     */
    public function setBillingDocId(int $billingDocId): self
    {
        // validation for constraint: int
        if (!is_null($billingDocId) && !(is_int($billingDocId) || ctype_digit($billingDocId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingDocId, true), gettype($billingDocId)), __LINE__);
        }
        $this->billingDocId = $billingDocId;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\ExportBillingDocumentRequest
     */
    public function setType(?string $type = 'ORIGINAL'): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get printMedia value
     * @return string|null
     */
    public function getPrintMedia(): ?string
    {
        return $this->printMedia;
    }
    /**
     * Set printMedia value
     * @param string $printMedia
     * @return \Pggns\MidocoApi\Order\StructType\ExportBillingDocumentRequest
     */
    public function setPrintMedia(?string $printMedia = 'P'): self
    {
        // validation for constraint: string
        if (!is_null($printMedia) && !is_string($printMedia)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printMedia, true), gettype($printMedia)), __LINE__);
        }
        $this->printMedia = $printMedia;
        
        return $this;
    }
}
