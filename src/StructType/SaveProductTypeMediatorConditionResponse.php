<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveProductTypeMediatorConditionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveProductTypeMediatorConditionResponse extends AbstractStructBase
{
    /**
     * The MidocoProductTypeMediatorCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoProductTypeMediatorCondition
     * @var \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO $MidocoProductTypeMediatorCondition = null;
    /**
     * Constructor method for SaveProductTypeMediatorConditionResponse
     * @uses SaveProductTypeMediatorConditionResponse::setMidocoProductTypeMediatorCondition()
     * @param \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition = null)
    {
        $this
            ->setMidocoProductTypeMediatorCondition($midocoProductTypeMediatorCondition);
    }
    /**
     * Get MidocoProductTypeMediatorCondition value
     * @return \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO|null
     */
    public function getMidocoProductTypeMediatorCondition(): ?\Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO
    {
        return $this->MidocoProductTypeMediatorCondition;
    }
    /**
     * Set MidocoProductTypeMediatorCondition value
     * @param \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition
     * @return \Pggns\MidocoApi\Order\StructType\SaveProductTypeMediatorConditionResponse
     */
    public function setMidocoProductTypeMediatorCondition(?\Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition = null): self
    {
        $this->MidocoProductTypeMediatorCondition = $midocoProductTypeMediatorCondition;
        
        return $this;
    }
}
