<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyTssClientResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModifyTssClientResponse extends TssApiErrorConveyingResponse
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for ModifyTssClientResponse
     * @uses ModifyTssClientResponse::setMidocoTssClient()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssClient $midocoTssClient
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoTssClient $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\Order\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\Order\StructType\ModifyTssClientResponse
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\Order\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}
