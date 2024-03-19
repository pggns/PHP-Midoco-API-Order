<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListMidocoFeeTypesLocalRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: list the fee types localizations after a criteria
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListMidocoFeeTypesLocalRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeLocal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoFeeTypeLocal
     * @var \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO $MidocoFeeTypeLocal = null;
    /**
     * Constructor method for ListMidocoFeeTypesLocalRequest
     * @uses ListMidocoFeeTypesLocalRequest::setMidocoFeeTypeLocal()
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
     * @return \Pggns\MidocoApi\Order\StructType\ListMidocoFeeTypesLocalRequest
     */
    public function setMidocoFeeTypeLocal(?\Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO $midocoFeeTypeLocal = null): self
    {
        $this->MidocoFeeTypeLocal = $midocoFeeTypeLocal;
        
        return $this;
    }
}
