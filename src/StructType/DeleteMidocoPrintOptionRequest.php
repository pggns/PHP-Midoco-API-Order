<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoPrintOptionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoPrintOptionRequest extends AbstractStructBase
{
    /**
     * The MidocoPrintOption
     * Meta information extracted from the WSDL
     * - ref: MidocoPrintOption
     * @var \Pggns\MidocoApi\Order\StructType\PrintOptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PrintOptionDTO $MidocoPrintOption = null;
    /**
     * Constructor method for DeleteMidocoPrintOptionRequest
     * @uses DeleteMidocoPrintOptionRequest::setMidocoPrintOption()
     * @param \Pggns\MidocoApi\Order\StructType\PrintOptionDTO $midocoPrintOption
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\PrintOptionDTO $midocoPrintOption = null)
    {
        $this
            ->setMidocoPrintOption($midocoPrintOption);
    }
    /**
     * Get MidocoPrintOption value
     * @return \Pggns\MidocoApi\Order\StructType\PrintOptionDTO|null
     */
    public function getMidocoPrintOption(): ?\Pggns\MidocoApi\Order\StructType\PrintOptionDTO
    {
        return $this->MidocoPrintOption;
    }
    /**
     * Set MidocoPrintOption value
     * @param \Pggns\MidocoApi\Order\StructType\PrintOptionDTO $midocoPrintOption
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoPrintOptionRequest
     */
    public function setMidocoPrintOption(?\Pggns\MidocoApi\Order\StructType\PrintOptionDTO $midocoPrintOption = null): self
    {
        $this->MidocoPrintOption = $midocoPrintOption;
        
        return $this;
    }
}
