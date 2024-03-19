<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeBillingDocumentForCustomerResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MakeBillingDocumentForCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoCollectiveBilling
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCollectiveBilling
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling $MidocoCollectiveBilling = null;
    /**
     * The hasMorePositions
     * @var bool|null
     */
    protected ?bool $hasMorePositions = null;
    /**
     * Constructor method for MakeBillingDocumentForCustomerResponse
     * @uses MakeBillingDocumentForCustomerResponse::setMidocoCollectiveBilling()
     * @uses MakeBillingDocumentForCustomerResponse::setHasMorePositions()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling $midocoCollectiveBilling
     * @param bool $hasMorePositions
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling $midocoCollectiveBilling = null, ?bool $hasMorePositions = null)
    {
        $this
            ->setMidocoCollectiveBilling($midocoCollectiveBilling)
            ->setHasMorePositions($hasMorePositions);
    }
    /**
     * Get MidocoCollectiveBilling value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling|null
     */
    public function getMidocoCollectiveBilling(): ?\Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling
    {
        return $this->MidocoCollectiveBilling;
    }
    /**
     * Set MidocoCollectiveBilling value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling $midocoCollectiveBilling
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerResponse
     */
    public function setMidocoCollectiveBilling(?\Pggns\MidocoApi\Order\StructType\MidocoCollectiveBilling $midocoCollectiveBilling = null): self
    {
        $this->MidocoCollectiveBilling = $midocoCollectiveBilling;
        
        return $this;
    }
    /**
     * Get hasMorePositions value
     * @return bool|null
     */
    public function getHasMorePositions(): ?bool
    {
        return $this->hasMorePositions;
    }
    /**
     * Set hasMorePositions value
     * @param bool $hasMorePositions
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForCustomerResponse
     */
    public function setHasMorePositions(?bool $hasMorePositions = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasMorePositions) && !is_bool($hasMorePositions)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMorePositions, true), gettype($hasMorePositions)), __LINE__);
        }
        $this->hasMorePositions = $hasMorePositions;
        
        return $this;
    }
}
