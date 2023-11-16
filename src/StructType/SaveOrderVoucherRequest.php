<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderVoucherRequest StructType
 * @subpackage Structs
 */
class SaveOrderVoucherRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderVoucher
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderVoucher
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher $MidocoOrderVoucher = null;
    /**
     * Constructor method for SaveOrderVoucherRequest
     * @uses SaveOrderVoucherRequest::setMidocoOrderVoucher()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher $midocoOrderVoucher
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher $midocoOrderVoucher = null)
    {
        $this
            ->setMidocoOrderVoucher($midocoOrderVoucher);
    }
    /**
     * Get MidocoOrderVoucher value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher|null
     */
    public function getMidocoOrderVoucher(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher
    {
        return $this->MidocoOrderVoucher;
    }
    /**
     * Set MidocoOrderVoucher value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher $midocoOrderVoucher
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderVoucherRequest
     */
    public function setMidocoOrderVoucher(?\Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher $midocoOrderVoucher = null): self
    {
        $this->MidocoOrderVoucher = $midocoOrderVoucher;
        
        return $this;
    }
}
