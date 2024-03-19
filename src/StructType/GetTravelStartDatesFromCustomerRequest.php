<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelStartDatesFromCustomerRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTravelStartDatesFromCustomerRequest extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The minDate
     * @var string|null
     */
    protected ?string $minDate = null;
    /**
     * The maxDate
     * @var string|null
     */
    protected ?string $maxDate = null;
    /**
     * The getOnlyFirstTravelStart
     * @var bool|null
     */
    protected ?bool $getOnlyFirstTravelStart = null;
    /**
     * The getOnlyLastTravelStart
     * @var bool|null
     */
    protected ?bool $getOnlyLastTravelStart = null;
    /**
     * Constructor method for GetTravelStartDatesFromCustomerRequest
     * @uses GetTravelStartDatesFromCustomerRequest::setCustomerId()
     * @uses GetTravelStartDatesFromCustomerRequest::setMinDate()
     * @uses GetTravelStartDatesFromCustomerRequest::setMaxDate()
     * @uses GetTravelStartDatesFromCustomerRequest::setGetOnlyFirstTravelStart()
     * @uses GetTravelStartDatesFromCustomerRequest::setGetOnlyLastTravelStart()
     * @param int $customerId
     * @param string $minDate
     * @param string $maxDate
     * @param bool $getOnlyFirstTravelStart
     * @param bool $getOnlyLastTravelStart
     */
    public function __construct(?int $customerId = null, ?string $minDate = null, ?string $maxDate = null, ?bool $getOnlyFirstTravelStart = null, ?bool $getOnlyLastTravelStart = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setMinDate($minDate)
            ->setMaxDate($maxDate)
            ->setGetOnlyFirstTravelStart($getOnlyFirstTravelStart)
            ->setGetOnlyLastTravelStart($getOnlyLastTravelStart);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelStartDatesFromCustomerRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get minDate value
     * @return string|null
     */
    public function getMinDate(): ?string
    {
        return $this->minDate;
    }
    /**
     * Set minDate value
     * @param string $minDate
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelStartDatesFromCustomerRequest
     */
    public function setMinDate(?string $minDate = null): self
    {
        // validation for constraint: string
        if (!is_null($minDate) && !is_string($minDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($minDate, true), gettype($minDate)), __LINE__);
        }
        $this->minDate = $minDate;
        
        return $this;
    }
    /**
     * Get maxDate value
     * @return string|null
     */
    public function getMaxDate(): ?string
    {
        return $this->maxDate;
    }
    /**
     * Set maxDate value
     * @param string $maxDate
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelStartDatesFromCustomerRequest
     */
    public function setMaxDate(?string $maxDate = null): self
    {
        // validation for constraint: string
        if (!is_null($maxDate) && !is_string($maxDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($maxDate, true), gettype($maxDate)), __LINE__);
        }
        $this->maxDate = $maxDate;
        
        return $this;
    }
    /**
     * Get getOnlyFirstTravelStart value
     * @return bool|null
     */
    public function getGetOnlyFirstTravelStart(): ?bool
    {
        return $this->getOnlyFirstTravelStart;
    }
    /**
     * Set getOnlyFirstTravelStart value
     * @param bool $getOnlyFirstTravelStart
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelStartDatesFromCustomerRequest
     */
    public function setGetOnlyFirstTravelStart(?bool $getOnlyFirstTravelStart = null): self
    {
        // validation for constraint: boolean
        if (!is_null($getOnlyFirstTravelStart) && !is_bool($getOnlyFirstTravelStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getOnlyFirstTravelStart, true), gettype($getOnlyFirstTravelStart)), __LINE__);
        }
        $this->getOnlyFirstTravelStart = $getOnlyFirstTravelStart;
        
        return $this;
    }
    /**
     * Get getOnlyLastTravelStart value
     * @return bool|null
     */
    public function getGetOnlyLastTravelStart(): ?bool
    {
        return $this->getOnlyLastTravelStart;
    }
    /**
     * Set getOnlyLastTravelStart value
     * @param bool $getOnlyLastTravelStart
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelStartDatesFromCustomerRequest
     */
    public function setGetOnlyLastTravelStart(?bool $getOnlyLastTravelStart = null): self
    {
        // validation for constraint: boolean
        if (!is_null($getOnlyLastTravelStart) && !is_bool($getOnlyLastTravelStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getOnlyLastTravelStart, true), gettype($getOnlyLastTravelStart)), __LINE__);
        }
        $this->getOnlyLastTravelStart = $getOnlyLastTravelStart;
        
        return $this;
    }
}
