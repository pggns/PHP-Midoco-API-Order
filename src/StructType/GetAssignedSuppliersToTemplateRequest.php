<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAssignedSuppliersToTemplateRequest StructType
 * @subpackage Structs
 */
class GetAssignedSuppliersToTemplateRequest extends AbstractStructBase
{
    /**
     * The templateId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $templateId;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for GetAssignedSuppliersToTemplateRequest
     * @uses GetAssignedSuppliersToTemplateRequest::setTemplateId()
     * @uses GetAssignedSuppliersToTemplateRequest::setUnitName()
     * @param int $templateId
     * @param string $unitName
     */
    public function __construct(int $templateId, ?string $unitName = null)
    {
        $this
            ->setTemplateId($templateId)
            ->setUnitName($unitName);
    }
    /**
     * Get templateId value
     * @return int
     */
    public function getTemplateId(): int
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param int $templateId
     * @return \Pggns\MidocoApi\Order\StructType\GetAssignedSuppliersToTemplateRequest
     */
    public function setTemplateId(int $templateId): self
    {
        // validation for constraint: int
        if (!is_null($templateId) && !(is_int($templateId) || ctype_digit($templateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        $this->templateId = $templateId;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetAssignedSuppliersToTemplateRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
