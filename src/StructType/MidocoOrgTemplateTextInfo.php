<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrgTemplateTextInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrgTemplateTextInfo extends AbstractStructBase
{
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The printTypes
     * @var string|null
     */
    protected ?string $printTypes = null;
    /**
     * The templateType
     * Meta information extracted from the WSDL
     * - default: FOOTER
     * @var string|null
     */
    protected ?string $templateType = null;
    /**
     * Constructor method for MidocoOrgTemplateTextInfo
     * @uses MidocoOrgTemplateTextInfo::setId()
     * @uses MidocoOrgTemplateTextInfo::setPrintTypes()
     * @uses MidocoOrgTemplateTextInfo::setTemplateType()
     * @param int $id
     * @param string $printTypes
     * @param string $templateType
     */
    public function __construct(?int $id = null, ?string $printTypes = null, ?string $templateType = null)
    {
        $this
            ->setId($id)
            ->setPrintTypes($printTypes)
            ->setTemplateType($templateType);
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgTemplateTextInfo
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get printTypes value
     * @return string|null
     */
    public function getPrintTypes(): ?string
    {
        return $this->printTypes;
    }
    /**
     * Set printTypes value
     * @param string $printTypes
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgTemplateTextInfo
     */
    public function setPrintTypes(?string $printTypes = null): self
    {
        // validation for constraint: string
        if (!is_null($printTypes) && !is_string($printTypes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printTypes, true), gettype($printTypes)), __LINE__);
        }
        $this->printTypes = $printTypes;
        
        return $this;
    }
    /**
     * Get templateType value
     * @return string|null
     */
    public function getTemplateType(): ?string
    {
        return $this->templateType;
    }
    /**
     * Set templateType value
     * @uses \Pggns\MidocoApi\Order\EnumType\MidocoOrgTemplateTextType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\MidocoOrgTemplateTextType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $templateType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrgTemplateTextInfo
     */
    public function setTemplateType(?string $templateType = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\MidocoOrgTemplateTextType::valueIsValid($templateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\MidocoOrgTemplateTextType', is_array($templateType) ? implode(', ', $templateType) : var_export($templateType, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\MidocoOrgTemplateTextType::getValidValues())), __LINE__);
        }
        $this->templateType = $templateType;
        
        return $this;
    }
}
