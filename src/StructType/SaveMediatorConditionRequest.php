<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMediatorConditionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMediatorConditionRequest extends AbstractStructBase
{
    /**
     * The MediatorConditionInfo
     * Meta information extracted from the WSDL
     * - ref: MediatorConditionInfo
     * @var \Pggns\MidocoApi\Order\StructType\MediatorConditionInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MediatorConditionInfo $MediatorConditionInfo = null;
    /**
     * Constructor method for SaveMediatorConditionRequest
     * @uses SaveMediatorConditionRequest::setMediatorConditionInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MediatorConditionInfo $mediatorConditionInfo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MediatorConditionInfo $mediatorConditionInfo = null)
    {
        $this
            ->setMediatorConditionInfo($mediatorConditionInfo);
    }
    /**
     * Get MediatorConditionInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MediatorConditionInfo|null
     */
    public function getMediatorConditionInfo(): ?\Pggns\MidocoApi\Order\StructType\MediatorConditionInfo
    {
        return $this->MediatorConditionInfo;
    }
    /**
     * Set MediatorConditionInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MediatorConditionInfo $mediatorConditionInfo
     * @return \Pggns\MidocoApi\Order\StructType\SaveMediatorConditionRequest
     */
    public function setMediatorConditionInfo(?\Pggns\MidocoApi\Order\StructType\MediatorConditionInfo $mediatorConditionInfo = null): self
    {
        $this->MediatorConditionInfo = $mediatorConditionInfo;
        
        return $this;
    }
}
