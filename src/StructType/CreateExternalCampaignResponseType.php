<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateExternalCampaignResponseType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateExternalCampaignResponseType extends ExternalCampaignDTO
{
    /**
     * The CustomerIds
     * @var \Pggns\MidocoApi\Order\StructType\CustomerIds|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CustomerIds $CustomerIds = null;
    /**
     * Constructor method for CreateExternalCampaignResponseType
     * @uses CreateExternalCampaignResponseType::setCustomerIds()
     * @param \Pggns\MidocoApi\Order\StructType\CustomerIds $customerIds
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\CustomerIds $customerIds = null)
    {
        $this
            ->setCustomerIds($customerIds);
    }
    /**
     * Get CustomerIds value
     * @return \Pggns\MidocoApi\Order\StructType\CustomerIds|null
     */
    public function getCustomerIds(): ?\Pggns\MidocoApi\Order\StructType\CustomerIds
    {
        return $this->CustomerIds;
    }
    /**
     * Set CustomerIds value
     * @param \Pggns\MidocoApi\Order\StructType\CustomerIds $customerIds
     * @return \Pggns\MidocoApi\Order\StructType\CreateExternalCampaignResponseType
     */
    public function setCustomerIds(?\Pggns\MidocoApi\Order\StructType\CustomerIds $customerIds = null): self
    {
        $this->CustomerIds = $customerIds;
        
        return $this;
    }
}
