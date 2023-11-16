<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoTemplateRequest StructType
 * @subpackage Structs
 */
class SaveMidocoTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoTemplate
     * @var \Pggns\MidocoApi\Order\StructType\TemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\TemplateDTO $MidocoTemplate = null;
    /**
     * Constructor method for SaveMidocoTemplateRequest
     * @uses SaveMidocoTemplateRequest::setMidocoTemplate()
     * @param \Pggns\MidocoApi\Order\StructType\TemplateDTO $midocoTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\TemplateDTO $midocoTemplate = null)
    {
        $this
            ->setMidocoTemplate($midocoTemplate);
    }
    /**
     * Get MidocoTemplate value
     * @return \Pggns\MidocoApi\Order\StructType\TemplateDTO|null
     */
    public function getMidocoTemplate(): ?\Pggns\MidocoApi\Order\StructType\TemplateDTO
    {
        return $this->MidocoTemplate;
    }
    /**
     * Set MidocoTemplate value
     * @param \Pggns\MidocoApi\Order\StructType\TemplateDTO $midocoTemplate
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoTemplateRequest
     */
    public function setMidocoTemplate(?\Pggns\MidocoApi\Order\StructType\TemplateDTO $midocoTemplate = null): self
    {
        $this->MidocoTemplate = $midocoTemplate;
        
        return $this;
    }
}
