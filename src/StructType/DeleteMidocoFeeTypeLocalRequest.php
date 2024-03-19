<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoFeeTypeLocalRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: remove a fee type local
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoFeeTypeLocalRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeLocal
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeTypeLocal
     * @var \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO $MidocoFeeTypeLocal = null;
    /**
     * Constructor method for DeleteMidocoFeeTypeLocalRequest
     * @uses DeleteMidocoFeeTypeLocalRequest::setMidocoFeeTypeLocal()
     * @param \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null)
    {
        $this
            ->setMidocoFeeTypeLocal($midocoFeeTypeLocal);
    }
    /**
     * Get MidocoFeeTypeLocal value
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO|null
     */
    public function getMidocoFeeTypeLocal(): ?\Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO
    {
        return $this->MidocoFeeTypeLocal;
    }
    /**
     * Set MidocoFeeTypeLocal value
     * @param \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoFeeTypeLocalRequest
     */
    public function setMidocoFeeTypeLocal(?\Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null): self
    {
        $this->MidocoFeeTypeLocal = $midocoFeeTypeLocal;
        
        return $this;
    }
}
