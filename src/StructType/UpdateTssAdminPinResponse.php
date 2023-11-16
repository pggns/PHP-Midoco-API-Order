<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateTssAdminPinResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: The updated MidocoTssClient.
 * @subpackage Structs
 */
class UpdateTssAdminPinResponse extends AbstractStructBase
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for UpdateTssAdminPinResponse
     * @uses UpdateTssAdminPinResponse::setMidocoTssClient()
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
     * @return \Pggns\MidocoApi\Order\StructType\UpdateTssAdminPinResponse
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\Order\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}
