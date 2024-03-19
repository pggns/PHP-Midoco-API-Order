<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveVatDivisionTemplateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveVatDivisionTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoVatDivisionTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoVatDivisionTemplate
     * @var \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType $MidocoVatDivisionTemplate = null;
    /**
     * Constructor method for SaveVatDivisionTemplateRequest
     * @uses SaveVatDivisionTemplateRequest::setMidocoVatDivisionTemplate()
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType $midocoVatDivisionTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType $midocoVatDivisionTemplate = null)
    {
        $this
            ->setMidocoVatDivisionTemplate($midocoVatDivisionTemplate);
    }
    /**
     * Get MidocoVatDivisionTemplate value
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType|null
     */
    public function getMidocoVatDivisionTemplate(): ?\Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType
    {
        return $this->MidocoVatDivisionTemplate;
    }
    /**
     * Set MidocoVatDivisionTemplate value
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType $midocoVatDivisionTemplate
     * @return \Pggns\MidocoApi\Order\StructType\SaveVatDivisionTemplateRequest
     */
    public function setMidocoVatDivisionTemplate(?\Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType $midocoVatDivisionTemplate = null): self
    {
        $this->MidocoVatDivisionTemplate = $midocoVatDivisionTemplate;
        
        return $this;
    }
}
