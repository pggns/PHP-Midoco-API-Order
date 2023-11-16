<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreviewBillingDocumentRequest StructType
 * @subpackage Structs
 */
class PreviewBillingDocumentRequest extends AbstractStructBase
{
    /**
     * The documentId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $documentId;
    /**
     * The templateType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $templateType;
    /**
     * The printMedia
     * Meta information extracted from the WSDL
     * - default: P
     * @var string|null
     */
    protected ?string $printMedia = null;
    /**
     * The isDraft
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isDraft = null;
    /**
     * Constructor method for PreviewBillingDocumentRequest
     * @uses PreviewBillingDocumentRequest::setDocumentId()
     * @uses PreviewBillingDocumentRequest::setTemplateType()
     * @uses PreviewBillingDocumentRequest::setPrintMedia()
     * @uses PreviewBillingDocumentRequest::setIsDraft()
     * @param int $documentId
     * @param string $templateType
     * @param string $printMedia
     * @param bool $isDraft
     */
    public function __construct(int $documentId, string $templateType, ?string $printMedia = 'P', ?bool $isDraft = false)
    {
        $this
            ->setDocumentId($documentId)
            ->setTemplateType($templateType)
            ->setPrintMedia($printMedia)
            ->setIsDraft($isDraft);
    }
    /**
     * Get documentId value
     * @return int
     */
    public function getDocumentId(): int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\PreviewBillingDocumentRequest
     */
    public function setDocumentId(int $documentId): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get templateType value
     * @return string
     */
    public function getTemplateType(): string
    {
        return $this->templateType;
    }
    /**
     * Set templateType value
     * @param string $templateType
     * @return \Pggns\MidocoApi\Order\StructType\PreviewBillingDocumentRequest
     */
    public function setTemplateType(string $templateType): self
    {
        // validation for constraint: string
        if (!is_null($templateType) && !is_string($templateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateType, true), gettype($templateType)), __LINE__);
        }
        $this->templateType = $templateType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PreviewBillingDocumentRequest
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
    /**
     * Get isDraft value
     * @return bool|null
     */
    public function getIsDraft(): ?bool
    {
        return $this->isDraft;
    }
    /**
     * Set isDraft value
     * @param bool $isDraft
     * @return \Pggns\MidocoApi\Order\StructType\PreviewBillingDocumentRequest
     */
    public function setIsDraft(?bool $isDraft = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isDraft) && !is_bool($isDraft)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDraft, true), gettype($isDraft)), __LINE__);
        }
        $this->isDraft = $isDraft;
        
        return $this;
    }
}
