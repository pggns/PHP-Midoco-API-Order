<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDunningTemplateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDunningTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningTemplate
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $MidocoDunningTemplate = null;
    /**
     * Constructor method for DeleteDunningTemplateRequest
     * @uses DeleteDunningTemplateRequest::setMidocoDunningTemplate()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate = null)
    {
        $this
            ->setMidocoDunningTemplate($midocoDunningTemplate);
    }
    /**
     * Get MidocoDunningTemplate value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate|null
     */
    public function getMidocoDunningTemplate(): ?\Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate
    {
        return $this->MidocoDunningTemplate;
    }
    /**
     * Set MidocoDunningTemplate value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate
     * @return \Pggns\MidocoApi\Order\StructType\DeleteDunningTemplateRequest
     */
    public function setMidocoDunningTemplate(?\Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate = null): self
    {
        $this->MidocoDunningTemplate = $midocoDunningTemplate;
        
        return $this;
    }
}
