<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSellRemarkResponse StructType
 * @subpackage Structs
 */
class SaveSellRemarkResponse extends AbstractStructBase
{
    /**
     * The MidocoSellRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoSellRemark
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellRemark|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSellRemark $MidocoSellRemark = null;
    /**
     * Constructor method for SaveSellRemarkResponse
     * @uses SaveSellRemarkResponse::setMidocoSellRemark()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellRemark $midocoSellRemark
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSellRemark $midocoSellRemark = null)
    {
        $this
            ->setMidocoSellRemark($midocoSellRemark);
    }
    /**
     * Get MidocoSellRemark value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellRemark|null
     */
    public function getMidocoSellRemark(): ?\Pggns\MidocoApi\Order\StructType\MidocoSellRemark
    {
        return $this->MidocoSellRemark;
    }
    /**
     * Set MidocoSellRemark value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellRemark $midocoSellRemark
     * @return \Pggns\MidocoApi\Order\StructType\SaveSellRemarkResponse
     */
    public function setMidocoSellRemark(?\Pggns\MidocoApi\Order\StructType\MidocoSellRemark $midocoSellRemark = null): self
    {
        $this->MidocoSellRemark = $midocoSellRemark;
        
        return $this;
    }
}
