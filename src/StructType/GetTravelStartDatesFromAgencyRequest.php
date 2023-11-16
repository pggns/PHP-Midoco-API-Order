<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelStartDatesFromAgencyRequest StructType
 * @subpackage Structs
 */
class GetTravelStartDatesFromAgencyRequest extends AbstractStructBase
{
    /**
     * The agencyCustomerId
     * @var int|null
     */
    protected ?int $agencyCustomerId = null;
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
     * Constructor method for GetTravelStartDatesFromAgencyRequest
     * @uses GetTravelStartDatesFromAgencyRequest::setAgencyCustomerId()
     * @uses GetTravelStartDatesFromAgencyRequest::setMinDate()
     * @uses GetTravelStartDatesFromAgencyRequest::setMaxDate()
     * @uses GetTravelStartDatesFromAgencyRequest::setGetOnlyFirstTravelStart()
     * @uses GetTravelStartDatesFromAgencyRequest::setGetOnlyLastTravelStart()
     * @param int $agencyCustomerId
     * @param string $minDate
     * @param string $maxDate
     * @param bool $getOnlyFirstTravelStart
     * @param bool $getOnlyLastTravelStart
     */
    public function __construct(?int $agencyCustomerId = null, ?string $minDate = null, ?string $maxDate = null, ?bool $getOnlyFirstTravelStart = null, ?bool $getOnlyLastTravelStart = null)
    {
        $this
            ->setAgencyCustomerId($agencyCustomerId)
            ->setMinDate($minDate)
            ->setMaxDate($maxDate)
            ->setGetOnlyFirstTravelStart($getOnlyFirstTravelStart)
            ->setGetOnlyLastTravelStart($getOnlyLastTravelStart);
    }
    /**
     * Get agencyCustomerId value
     * @return int|null
     */
    public function getAgencyCustomerId(): ?int
    {
        return $this->agencyCustomerId;
    }
    /**
     * Set agencyCustomerId value
     * @param int $agencyCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelStartDatesFromAgencyRequest
     */
    public function setAgencyCustomerId(?int $agencyCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($agencyCustomerId) && !(is_int($agencyCustomerId) || ctype_digit($agencyCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($agencyCustomerId, true), gettype($agencyCustomerId)), __LINE__);
        }
        $this->agencyCustomerId = $agencyCustomerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelStartDatesFromAgencyRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelStartDatesFromAgencyRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelStartDatesFromAgencyRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelStartDatesFromAgencyRequest
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
