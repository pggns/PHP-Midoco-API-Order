<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchFilteredBillingDocumentForCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchFilteredBillingDocumentForCustomerRequest extends AbstractStructBase
{
    /**
     * The MidocoCollectiveBillingCriteria
     * @var string|null
     */
    protected ?string $MidocoCollectiveBillingCriteria = null;
    /**
     * Constructor method for SearchFilteredBillingDocumentForCustomerRequest
     * @uses SearchFilteredBillingDocumentForCustomerRequest::setMidocoCollectiveBillingCriteria()
     * @param string $midocoCollectiveBillingCriteria
     */
    public function __construct(?string $midocoCollectiveBillingCriteria = null)
    {
        $this
            ->setMidocoCollectiveBillingCriteria($midocoCollectiveBillingCriteria);
    }
    /**
     * Get MidocoCollectiveBillingCriteria value
     * @return string|null
     */
    public function getMidocoCollectiveBillingCriteria(): ?string
    {
        return $this->MidocoCollectiveBillingCriteria;
    }
    /**
     * Set MidocoCollectiveBillingCriteria value
     * @param string $midocoCollectiveBillingCriteria
     * @return \Pggns\MidocoApi\Order\StructType\SearchFilteredBillingDocumentForCustomerRequest
     */
    public function setMidocoCollectiveBillingCriteria(?string $midocoCollectiveBillingCriteria = null): self
    {
        // validation for constraint: string
        if (!is_null($midocoCollectiveBillingCriteria) && !is_string($midocoCollectiveBillingCriteria)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($midocoCollectiveBillingCriteria, true), gettype($midocoCollectiveBillingCriteria)), __LINE__);
        }
        $this->MidocoCollectiveBillingCriteria = $midocoCollectiveBillingCriteria;
        
        return $this;
    }
}
