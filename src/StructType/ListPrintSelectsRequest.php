<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListPrintSelectsRequest StructType
 * @subpackage Structs
 */
class ListPrintSelectsRequest extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The templateType
     * Meta information extracted from the WSDL
     * - default: FOOTER
     * @var string|null
     */
    protected ?string $templateType = null;
    /**
     * Constructor method for ListPrintSelectsRequest
     * @uses ListPrintSelectsRequest::setCultureId()
     * @uses ListPrintSelectsRequest::setTemplateType()
     * @param string $cultureId
     * @param string $templateType
     */
    public function __construct(?string $cultureId = null, ?string $templateType = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setTemplateType($templateType);
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\ListPrintSelectsRequest
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ListPrintSelectsRequest
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
