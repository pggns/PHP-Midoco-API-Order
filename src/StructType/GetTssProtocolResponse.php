<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTssProtocolResponse StructType
 * @subpackage Structs
 */
class GetTssProtocolResponse extends AbstractStructBase
{
    /**
     * The MidocoTssProtocol
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: system:MidocoTssProtocol
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTssProtocol|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTssProtocol $MidocoTssProtocol = null;
    /**
     * Constructor method for GetTssProtocolResponse
     * @uses GetTssProtocolResponse::setMidocoTssProtocol()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssProtocol $midocoTssProtocol
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoTssProtocol $midocoTssProtocol = null)
    {
        $this
            ->setMidocoTssProtocol($midocoTssProtocol);
    }
    /**
     * Get MidocoTssProtocol value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTssProtocol|null
     */
    public function getMidocoTssProtocol(): ?\Pggns\MidocoApi\Order\StructType\MidocoTssProtocol
    {
        return $this->MidocoTssProtocol;
    }
    /**
     * Set MidocoTssProtocol value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssProtocol $midocoTssProtocol
     * @return \Pggns\MidocoApi\Order\StructType\GetTssProtocolResponse
     */
    public function setMidocoTssProtocol(?\Pggns\MidocoApi\Order\StructType\MidocoTssProtocol $midocoTssProtocol = null): self
    {
        $this->MidocoTssProtocol = $midocoTssProtocol;
        
        return $this;
    }
}
