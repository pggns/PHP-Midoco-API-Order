<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintAdviceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintAdviceRequest extends AbstractStructBase
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
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The docType
     * @var string|null
     */
    protected ?string $docType = null;
    /**
     * The isCollective
     * @var bool|null
     */
    protected ?bool $isCollective = null;
    /**
     * The isVoid
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isVoid = null;
    /**
     * Constructor method for PrintAdviceRequest
     * @uses PrintAdviceRequest::setSettlementId()
     * @uses PrintAdviceRequest::setTemplateName()
     * @uses PrintAdviceRequest::setPrintType()
     * @uses PrintAdviceRequest::setDocType()
     * @uses PrintAdviceRequest::setIsCollective()
     * @uses PrintAdviceRequest::setIsVoid()
     * @param int $settlementId
     * @param string $templateName
     * @param string $printType
     * @param string $docType
     * @param bool $isCollective
     * @param bool $isVoid
     */
    public function __construct(?int $settlementId = null, ?string $templateName = null, ?string $printType = null, ?string $docType = null, ?bool $isCollective = null, ?bool $isVoid = false)
    {
        $this
            ->setSettlementId($settlementId)
            ->setTemplateName($templateName)
            ->setPrintType($printType)
            ->setDocType($docType)
            ->setIsCollective($isCollective)
            ->setIsVoid($isVoid);
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceRequest
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
    /**
     * Get isCollective value
     * @return bool|null
     */
    public function getIsCollective(): ?bool
    {
        return $this->isCollective;
    }
    /**
     * Set isCollective value
     * @param bool $isCollective
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceRequest
     */
    public function setIsCollective(?bool $isCollective = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCollective) && !is_bool($isCollective)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCollective, true), gettype($isCollective)), __LINE__);
        }
        $this->isCollective = $isCollective;
        
        return $this;
    }
    /**
     * Get isVoid value
     * @return bool|null
     */
    public function getIsVoid(): ?bool
    {
        return $this->isVoid;
    }
    /**
     * Set isVoid value
     * @param bool $isVoid
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceRequest
     */
    public function setIsVoid(?bool $isVoid = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoid) && !is_bool($isVoid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoid, true), gettype($isVoid)), __LINE__);
        }
        $this->isVoid = $isVoid;
        
        return $this;
    }
}
