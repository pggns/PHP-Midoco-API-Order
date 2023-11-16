<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierTemplateRequest StructType
 * @subpackage Structs
 */
class GetMidocoSupplierTemplateRequest extends AbstractStructBase
{
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $unitName;
    /**
     * The supplierId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $supplierId;
    /**
     * The templateType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $templateType;
    /**
     * The subType
     * @var string|null
     */
    protected ?string $subType = null;
    /**
     * Constructor method for GetMidocoSupplierTemplateRequest
     * @uses GetMidocoSupplierTemplateRequest::setUnitName()
     * @uses GetMidocoSupplierTemplateRequest::setSupplierId()
     * @uses GetMidocoSupplierTemplateRequest::setTemplateType()
     * @uses GetMidocoSupplierTemplateRequest::setSubType()
     * @param string $unitName
     * @param string $supplierId
     * @param string $templateType
     * @param string $subType
     */
    public function __construct(string $unitName, string $supplierId, string $templateType, ?string $subType = null)
    {
        $this
            ->setUnitName($unitName)
            ->setSupplierId($supplierId)
            ->setTemplateType($templateType)
            ->setSubType($subType);
    }
    /**
     * Get unitName value
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoSupplierTemplateRequest
     */
    public function setUnitName(string $unitName): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string
     */
    public function getSupplierId(): string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoSupplierTemplateRequest
     */
    public function setSupplierId(string $supplierId): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoSupplierTemplateRequest
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
     * Get subType value
     * @return string|null
     */
    public function getSubType(): ?string
    {
        return $this->subType;
    }
    /**
     * Set subType value
     * @param string $subType
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoSupplierTemplateRequest
     */
    public function setSubType(?string $subType = null): self
    {
        // validation for constraint: string
        if (!is_null($subType) && !is_string($subType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subType, true), gettype($subType)), __LINE__);
        }
        $this->subType = $subType;
        
        return $this;
    }
}
