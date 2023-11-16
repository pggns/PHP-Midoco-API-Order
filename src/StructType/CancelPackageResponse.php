<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPackageResponse StructType
 * @subpackage Structs
 */
class CancelPackageResponse extends AbstractStructBase
{
    /**
     * The MidocoSellItemCancel
     * Meta information extracted from the WSDL
     * - ref: MidocoSellItemCancel
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemCancel|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemCancel $MidocoSellItemCancel = null;
    /**
     * Constructor method for CancelPackageResponse
     * @uses CancelPackageResponse::setMidocoSellItemCancel()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemCancel $midocoSellItemCancel
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemCancel $midocoSellItemCancel = null)
    {
        $this
            ->setMidocoSellItemCancel($midocoSellItemCancel);
    }
    /**
     * Get MidocoSellItemCancel value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemCancel|null
     */
    public function getMidocoSellItemCancel(): ?\Pggns\MidocoApi\Order\StructType\MidocoSellItemCancel
    {
        return $this->MidocoSellItemCancel;
    }
    /**
     * Set MidocoSellItemCancel value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemCancel $midocoSellItemCancel
     * @return \Pggns\MidocoApi\Order\StructType\CancelPackageResponse
     */
    public function setMidocoSellItemCancel(?\Pggns\MidocoApi\Order\StructType\MidocoSellItemCancel $midocoSellItemCancel = null): self
    {
        $this->MidocoSellItemCancel = $midocoSellItemCancel;
        
        return $this;
    }
}
