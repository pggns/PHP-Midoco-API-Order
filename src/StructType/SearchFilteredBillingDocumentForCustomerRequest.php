<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchFilteredBillingDocumentForCustomerRequest StructType
 * @subpackage Structs
 */
class SearchFilteredBillingDocumentForCustomerRequest extends AbstractStructBase
{
    /**
     * The MidocoCollectiveBillingCriteria
     * @var mixed|null
     */
    protected ?mixed $MidocoCollectiveBillingCriteria = null;
    /**
     * Constructor method for SearchFilteredBillingDocumentForCustomerRequest
     * @uses SearchFilteredBillingDocumentForCustomerRequest::setMidocoCollectiveBillingCriteria()
     * @param mixed $midocoCollectiveBillingCriteria
     */
    public function __construct(?mixed $midocoCollectiveBillingCriteria = null)
    {
        $this
            ->setMidocoCollectiveBillingCriteria($midocoCollectiveBillingCriteria);
    }
    /**
     * Get MidocoCollectiveBillingCriteria value
     * @return mixed|null
     */
    public function getMidocoCollectiveBillingCriteria(): ?mixed
    {
        return $this->MidocoCollectiveBillingCriteria;
    }
    /**
     * Set MidocoCollectiveBillingCriteria value
     * @param mixed $midocoCollectiveBillingCriteria
     * @return \Pggns\MidocoApi\Order\StructType\SearchFilteredBillingDocumentForCustomerRequest
     */
    public function setMidocoCollectiveBillingCriteria(?mixed $midocoCollectiveBillingCriteria = null): self
    {
        $this->MidocoCollectiveBillingCriteria = $midocoCollectiveBillingCriteria;
        
        return $this;
    }
}
