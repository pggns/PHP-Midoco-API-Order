<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoOrderQmRequest StructType
 * @subpackage Structs
 */
class SaveMidocoOrderQmRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderQm
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderQm
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderQm|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderQm $MidocoOrderQm = null;
    /**
     * Constructor method for SaveMidocoOrderQmRequest
     * @uses SaveMidocoOrderQmRequest::setMidocoOrderQm()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderQm $midocoOrderQm
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderQm $midocoOrderQm = null)
    {
        $this
            ->setMidocoOrderQm($midocoOrderQm);
    }
    /**
     * Get MidocoOrderQm value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderQm|null
     */
    public function getMidocoOrderQm(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderQm
    {
        return $this->MidocoOrderQm;
    }
    /**
     * Set MidocoOrderQm value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderQm $midocoOrderQm
     * @return \Pggns\MidocoApi\Order\StructType\SaveMidocoOrderQmRequest
     */
    public function setMidocoOrderQm(?\Pggns\MidocoApi\Order\StructType\MidocoOrderQm $midocoOrderQm = null): self
    {
        $this->MidocoOrderQm = $midocoOrderQm;
        
        return $this;
    }
}
