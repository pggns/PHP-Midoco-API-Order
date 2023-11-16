<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMarketingKeyDescriptionRequest StructType
 * @subpackage Structs
 */
class SaveMarketingKeyDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoMarketingKeyDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoMarketingKeyDescription
     * @var \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType $MidocoMarketingKeyDescription = null;
    /**
     * Constructor method for SaveMarketingKeyDescriptionRequest
     * @uses SaveMarketingKeyDescriptionRequest::setMidocoMarketingKeyDescription()
     * @param \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType $midocoMarketingKeyDescription
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType $midocoMarketingKeyDescription = null)
    {
        $this
            ->setMidocoMarketingKeyDescription($midocoMarketingKeyDescription);
    }
    /**
     * Get MidocoMarketingKeyDescription value
     * @return \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType|null
     */
    public function getMidocoMarketingKeyDescription(): ?\Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType
    {
        return $this->MidocoMarketingKeyDescription;
    }
    /**
     * Set MidocoMarketingKeyDescription value
     * @param \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType $midocoMarketingKeyDescription
     * @return \Pggns\MidocoApi\Order\StructType\SaveMarketingKeyDescriptionRequest
     */
    public function setMidocoMarketingKeyDescription(?\Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType $midocoMarketingKeyDescription = null): self
    {
        $this->MidocoMarketingKeyDescription = $midocoMarketingKeyDescription;
        
        return $this;
    }
}
