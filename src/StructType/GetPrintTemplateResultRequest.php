<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintTemplateResultRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintTemplateResultRequest extends AbstractStructBase
{
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The templateName
     * @var string|null
     */
    protected ?string $templateName = null;
    /**
     * The contentType
     * @var string|null
     */
    protected ?string $contentType = null;
    /**
     * The sequenceName
     * @var string|null
     */
    protected ?string $sequenceName = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The docType
     * @var string|null
     */
    protected ?string $docType = null;
    /**
     * Constructor method for GetPrintTemplateResultRequest
     * @uses GetPrintTemplateResultRequest::setSettlementId()
     * @uses GetPrintTemplateResultRequest::setTemplateName()
     * @uses GetPrintTemplateResultRequest::setContentType()
     * @uses GetPrintTemplateResultRequest::setSequenceName()
     * @uses GetPrintTemplateResultRequest::setPrintType()
     * @uses GetPrintTemplateResultRequest::setSupplierId()
     * @uses GetPrintTemplateResultRequest::setDocType()
     * @param int $settlementId
     * @param string $templateName
     * @param string $contentType
     * @param string $sequenceName
     * @param string $printType
     * @param string $supplierId
     * @param string $docType
     */
    public function __construct(?int $settlementId = null, ?string $templateName = null, ?string $contentType = null, ?string $sequenceName = null, ?string $printType = null, ?string $supplierId = null, ?string $docType = null)
    {
        $this
            ->setSettlementId($settlementId)
            ->setTemplateName($templateName)
            ->setContentType($contentType)
            ->setSequenceName($sequenceName)
            ->setPrintType($printType)
            ->setSupplierId($supplierId)
            ->setDocType($docType);
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintTemplateResultRequest
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get templateName value
     * @return string|null
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }
    /**
     * Set templateName value
     * @param string $templateName
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintTemplateResultRequest
     */
    public function setTemplateName(?string $templateName = null): self
    {
        // validation for constraint: string
        if (!is_null($templateName) && !is_string($templateName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateName, true), gettype($templateName)), __LINE__);
        }
        $this->templateName = $templateName;
        
        return $this;
    }
    /**
     * Get contentType value
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->contentType;
    }
    /**
     * Set contentType value
     * @param string $contentType
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintTemplateResultRequest
     */
    public function setContentType(?string $contentType = null): self
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentType, true), gettype($contentType)), __LINE__);
        }
        $this->contentType = $contentType;
        
        return $this;
    }
    /**
     * Get sequenceName value
     * @return string|null
     */
    public function getSequenceName(): ?string
    {
        return $this->sequenceName;
    }
    /**
     * Set sequenceName value
     * @param string $sequenceName
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintTemplateResultRequest
     */
    public function setSequenceName(?string $sequenceName = null): self
    {
        // validation for constraint: string
        if (!is_null($sequenceName) && !is_string($sequenceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sequenceName, true), gettype($sequenceName)), __LINE__);
        }
        $this->sequenceName = $sequenceName;
        
        return $this;
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintTemplateResultRequest
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintTemplateResultRequest
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get docType value
     * @return string|null
     */
    public function getDocType(): ?string
    {
        return $this->docType;
    }
    /**
     * Set docType value
     * @param string $docType
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintTemplateResultRequest
     */
    public function setDocType(?string $docType = null): self
    {
        // validation for constraint: string
        if (!is_null($docType) && !is_string($docType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($docType, true), gettype($docType)), __LINE__);
        }
        $this->docType = $docType;
        
        return $this;
    }
}
