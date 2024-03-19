<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDunningTemplateAssignRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteDunningTemplateAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningTemplateAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningTemplateAssign
     * @var \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO $MidocoDunningTemplateAssign = null;
    /**
     * Constructor method for DeleteDunningTemplateAssignRequest
     * @uses DeleteDunningTemplateAssignRequest::setMidocoDunningTemplateAssign()
     * @param \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign = null)
    {
        $this
            ->setMidocoDunningTemplateAssign($midocoDunningTemplateAssign);
    }
    /**
     * Get MidocoDunningTemplateAssign value
     * @return \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO|null
     */
    public function getMidocoDunningTemplateAssign(): ?\Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO
    {
        return $this->MidocoDunningTemplateAssign;
    }
    /**
     * Set MidocoDunningTemplateAssign value
     * @param \Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign
     * @return \Pggns\MidocoApi\Order\StructType\DeleteDunningTemplateAssignRequest
     */
    public function setMidocoDunningTemplateAssign(?\Pggns\MidocoApi\Order\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign = null): self
    {
        $this->MidocoDunningTemplateAssign = $midocoDunningTemplateAssign;
        
        return $this;
    }
}
