<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateBillingPrintjobRequest StructType
 * @subpackage Structs
 */
class CreateBillingPrintjobRequest extends AbstractStructBase
{
    /**
     * The BillingDocumentId
     * @var int|null
     */
    protected ?int $BillingDocumentId = null;
    /**
     * The TemplateType
     * @var string|null
     */
    protected ?string $TemplateType = null;
    /**
     * The Media
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - default: PRINT
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Media = null;
    /**
     * The Recipient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Recipient = null;
    /**
     * The IsOriginal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsOriginal = null;
    /**
     * The doMailPrepare
     * @var bool|null
     */
    protected ?bool $doMailPrepare = null;
    /**
     * The export2Archive
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $export2Archive = null;
    /**
     * The createPrintCopies
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $createPrintCopies = null;
    /**
     * The isDraft
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isDraft = null;
    /**
     * Constructor method for CreateBillingPrintjobRequest
     * @uses CreateBillingPrintjobRequest::setBillingDocumentId()
     * @uses CreateBillingPrintjobRequest::setTemplateType()
     * @uses CreateBillingPrintjobRequest::setMedia()
     * @uses CreateBillingPrintjobRequest::setRecipient()
     * @uses CreateBillingPrintjobRequest::setIsOriginal()
     * @uses CreateBillingPrintjobRequest::setDoMailPrepare()
     * @uses CreateBillingPrintjobRequest::setExport2Archive()
     * @uses CreateBillingPrintjobRequest::setCreatePrintCopies()
     * @uses CreateBillingPrintjobRequest::setIsDraft()
     * @param int $billingDocumentId
     * @param string $templateType
     * @param string $media
     * @param string $recipient
     * @param bool $isOriginal
     * @param bool $doMailPrepare
     * @param bool $export2Archive
     * @param bool $createPrintCopies
     * @param bool $isDraft
     */
    public function __construct(?int $billingDocumentId = null, ?string $templateType = null, ?string $media = 'PRINT', ?string $recipient = null, ?bool $isOriginal = null, ?bool $doMailPrepare = null, ?bool $export2Archive = true, ?bool $createPrintCopies = false, ?bool $isDraft = false)
    {
        $this
            ->setBillingDocumentId($billingDocumentId)
            ->setTemplateType($templateType)
            ->setMedia($media)
            ->setRecipient($recipient)
            ->setIsOriginal($isOriginal)
            ->setDoMailPrepare($doMailPrepare)
            ->setExport2Archive($export2Archive)
            ->setCreatePrintCopies($createPrintCopies)
            ->setIsDraft($isDraft);
    }
    /**
     * Get BillingDocumentId value
     * @return int|null
     */
    public function getBillingDocumentId(): ?int
    {
        return $this->BillingDocumentId;
    }
    /**
     * Set BillingDocumentId value
     * @param int $billingDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest
     */
    public function setBillingDocumentId(?int $billingDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($billingDocumentId) && !(is_int($billingDocumentId) || ctype_digit($billingDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingDocumentId, true), gettype($billingDocumentId)), __LINE__);
        }
        $this->BillingDocumentId = $billingDocumentId;
        
        return $this;
    }
    /**
     * Get TemplateType value
     * @return string|null
     */
    public function getTemplateType(): ?string
    {
        return $this->TemplateType;
    }
    /**
     * Set TemplateType value
     * @param string $templateType
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest
     */
    public function setTemplateType(?string $templateType = null): self
    {
        // validation for constraint: string
        if (!is_null($templateType) && !is_string($templateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateType, true), gettype($templateType)), __LINE__);
        }
        $this->TemplateType = $templateType;
        
        return $this;
    }
    /**
     * Get Media value
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->Media;
    }
    /**
     * Set Media value
     * @param string $media
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest
     */
    public function setMedia(?string $media = 'PRINT'): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        $this->Media = $media;
        
        return $this;
    }
    /**
     * Get Recipient value
     * @return string|null
     */
    public function getRecipient(): ?string
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param string $recipient
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest
     */
    public function setRecipient(?string $recipient = null): self
    {
        // validation for constraint: string
        if (!is_null($recipient) && !is_string($recipient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipient, true), gettype($recipient)), __LINE__);
        }
        $this->Recipient = $recipient;
        
        return $this;
    }
    /**
     * Get IsOriginal value
     * @return bool|null
     */
    public function getIsOriginal(): ?bool
    {
        return $this->IsOriginal;
    }
    /**
     * Set IsOriginal value
     * @param bool $isOriginal
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest
     */
    public function setIsOriginal(?bool $isOriginal = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOriginal) && !is_bool($isOriginal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOriginal, true), gettype($isOriginal)), __LINE__);
        }
        $this->IsOriginal = $isOriginal;
        
        return $this;
    }
    /**
     * Get doMailPrepare value
     * @return bool|null
     */
    public function getDoMailPrepare(): ?bool
    {
        return $this->doMailPrepare;
    }
    /**
     * Set doMailPrepare value
     * @param bool $doMailPrepare
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest
     */
    public function setDoMailPrepare(?bool $doMailPrepare = null): self
    {
        // validation for constraint: boolean
        if (!is_null($doMailPrepare) && !is_bool($doMailPrepare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doMailPrepare, true), gettype($doMailPrepare)), __LINE__);
        }
        $this->doMailPrepare = $doMailPrepare;
        
        return $this;
    }
    /**
     * Get export2Archive value
     * @return bool|null
     */
    public function getExport2Archive(): ?bool
    {
        return $this->export2Archive;
    }
    /**
     * Set export2Archive value
     * @param bool $export2Archive
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest
     */
    public function setExport2Archive(?bool $export2Archive = true): self
    {
        // validation for constraint: boolean
        if (!is_null($export2Archive) && !is_bool($export2Archive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($export2Archive, true), gettype($export2Archive)), __LINE__);
        }
        $this->export2Archive = $export2Archive;
        
        return $this;
    }
    /**
     * Get createPrintCopies value
     * @return bool|null
     */
    public function getCreatePrintCopies(): ?bool
    {
        return $this->createPrintCopies;
    }
    /**
     * Set createPrintCopies value
     * @param bool $createPrintCopies
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest
     */
    public function setCreatePrintCopies(?bool $createPrintCopies = false): self
    {
        // validation for constraint: boolean
        if (!is_null($createPrintCopies) && !is_bool($createPrintCopies)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createPrintCopies, true), gettype($createPrintCopies)), __LINE__);
        }
        $this->createPrintCopies = $createPrintCopies;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest
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
