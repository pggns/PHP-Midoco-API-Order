<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierTemplateDTO StructType
 * @subpackage Structs
 */
class SupplierTemplateDTO extends AbstractStructBase
{
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The templateText
     * @var string|null
     */
    protected ?string $templateText = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for SupplierTemplateDTO
     * @uses SupplierTemplateDTO::setSupplierId()
     * @uses SupplierTemplateDTO::setTemplateText()
     * @uses SupplierTemplateDTO::setType()
     * @param string $supplierId
     * @param string $templateText
     * @param string $type
     */
    public function __construct(?string $supplierId = null, ?string $templateText = null, ?string $type = null)
    {
        $this
            ->setSupplierId($supplierId)
            ->setTemplateText($templateText)
            ->setType($type);
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierTemplateDTO
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
     * Get templateText value
     * @return string|null
     */
    public function getTemplateText(): ?string
    {
        return $this->templateText;
    }
    /**
     * Set templateText value
     * @param string $templateText
     * @return \Pggns\MidocoApi\Order\StructType\SupplierTemplateDTO
     */
    public function setTemplateText(?string $templateText = null): self
    {
        // validation for constraint: string
        if (!is_null($templateText) && !is_string($templateText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateText, true), gettype($templateText)), __LINE__);
        }
        $this->templateText = $templateText;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierTemplateDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
