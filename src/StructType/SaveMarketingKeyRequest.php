<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMarketingKeyRequest StructType
 * @subpackage Structs
 */
class SaveMarketingKeyRequest extends AbstractStructBase
{
    /**
     * The MidocoMarketingKey
     * Meta information extracted from the WSDL
     * - ref: MidocoMarketingKey
     * @var \Pggns\MidocoApi\Order\StructType\MarketingKeyDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MarketingKeyDTO $MidocoMarketingKey = null;
    /**
     * Constructor method for SaveMarketingKeyRequest
     * @uses SaveMarketingKeyRequest::setMidocoMarketingKey()
     * @param \Pggns\MidocoApi\Order\StructType\MarketingKeyDTO $midocoMarketingKey
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MarketingKeyDTO $midocoMarketingKey = null)
    {
        $this
            ->setMidocoMarketingKey($midocoMarketingKey);
    }
    /**
     * Get MidocoMarketingKey value
     * @return \Pggns\MidocoApi\Order\StructType\MarketingKeyDTO|null
     */
    public function getMidocoMarketingKey(): ?\Pggns\MidocoApi\Order\StructType\MarketingKeyDTO
    {
        return $this->MidocoMarketingKey;
    }
    /**
     * Set MidocoMarketingKey value
     * @param \Pggns\MidocoApi\Order\StructType\MarketingKeyDTO $midocoMarketingKey
     * @return \Pggns\MidocoApi\Order\StructType\SaveMarketingKeyRequest
     */
    public function setMidocoMarketingKey(?\Pggns\MidocoApi\Order\StructType\MarketingKeyDTO $midocoMarketingKey = null): self
    {
        $this->MidocoMarketingKey = $midocoMarketingKey;
        
        return $this;
    }
}
