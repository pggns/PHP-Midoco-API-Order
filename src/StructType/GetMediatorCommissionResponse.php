<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorCommissionResponse StructType
 * @subpackage Structs
 */
class GetMediatorCommissionResponse extends AbstractStructBase
{
    /**
     * The MediatorCommision
     * @var \Pggns\MidocoApi\Order\StructType\MediatorCommision|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MediatorCommision $MediatorCommision = null;
    /**
     * Constructor method for GetMediatorCommissionResponse
     * @uses GetMediatorCommissionResponse::setMediatorCommision()
     * @param \Pggns\MidocoApi\Order\StructType\MediatorCommision $mediatorCommision
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MediatorCommision $mediatorCommision = null)
    {
        $this
            ->setMediatorCommision($mediatorCommision);
    }
    /**
     * Get MediatorCommision value
     * @return \Pggns\MidocoApi\Order\StructType\MediatorCommision|null
     */
    public function getMediatorCommision(): ?\Pggns\MidocoApi\Order\StructType\MediatorCommision
    {
        return $this->MediatorCommision;
    }
    /**
     * Set MediatorCommision value
     * @param \Pggns\MidocoApi\Order\StructType\MediatorCommision $mediatorCommision
     * @return \Pggns\MidocoApi\Order\StructType\GetMediatorCommissionResponse
     */
    public function setMediatorCommision(?\Pggns\MidocoApi\Order\StructType\MediatorCommision $mediatorCommision = null): self
    {
        $this->MediatorCommision = $mediatorCommision;
        
        return $this;
    }
}
