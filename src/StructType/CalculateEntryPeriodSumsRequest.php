<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateEntryPeriodSumsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateEntryPeriodSumsRequest extends AbstractStructBase
{
    /**
     * The bookingPeriodFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $bookingPeriodFrom = null;
    /**
     * The bookingPeriodTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $bookingPeriodTo = null;
    /**
     * The bookingYear
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $bookingYear = null;
    /**
     * The reopened
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $reopened = null;
    /**
     * Constructor method for CalculateEntryPeriodSumsRequest
     * @uses CalculateEntryPeriodSumsRequest::setBookingPeriodFrom()
     * @uses CalculateEntryPeriodSumsRequest::setBookingPeriodTo()
     * @uses CalculateEntryPeriodSumsRequest::setBookingYear()
     * @uses CalculateEntryPeriodSumsRequest::setReopened()
     * @param int $bookingPeriodFrom
     * @param int $bookingPeriodTo
     * @param int $bookingYear
     * @param bool $reopened
     */
    public function __construct(?int $bookingPeriodFrom = null, ?int $bookingPeriodTo = null, ?int $bookingYear = null, ?bool $reopened = false)
    {
        $this
            ->setBookingPeriodFrom($bookingPeriodFrom)
            ->setBookingPeriodTo($bookingPeriodTo)
            ->setBookingYear($bookingYear)
            ->setReopened($reopened);
    }
    /**
     * Get bookingPeriodFrom value
     * @return int|null
     */
    public function getBookingPeriodFrom(): ?int
    {
        return $this->bookingPeriodFrom;
    }
    /**
     * Set bookingPeriodFrom value
     * @param int $bookingPeriodFrom
     * @return \Pggns\MidocoApi\Order\StructType\CalculateEntryPeriodSumsRequest
     */
    public function setBookingPeriodFrom(?int $bookingPeriodFrom = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPeriodFrom) && !(is_int($bookingPeriodFrom) || ctype_digit($bookingPeriodFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPeriodFrom, true), gettype($bookingPeriodFrom)), __LINE__);
        }
        $this->bookingPeriodFrom = $bookingPeriodFrom;
        
        return $this;
    }
    /**
     * Get bookingPeriodTo value
     * @return int|null
     */
    public function getBookingPeriodTo(): ?int
    {
        return $this->bookingPeriodTo;
    }
    /**
     * Set bookingPeriodTo value
     * @param int $bookingPeriodTo
     * @return \Pggns\MidocoApi\Order\StructType\CalculateEntryPeriodSumsRequest
     */
    public function setBookingPeriodTo(?int $bookingPeriodTo = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPeriodTo) && !(is_int($bookingPeriodTo) || ctype_digit($bookingPeriodTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPeriodTo, true), gettype($bookingPeriodTo)), __LINE__);
        }
        $this->bookingPeriodTo = $bookingPeriodTo;
        
        return $this;
    }
    /**
     * Get bookingYear value
     * @return int|null
     */
    public function getBookingYear(): ?int
    {
        return $this->bookingYear;
    }
    /**
     * Set bookingYear value
     * @param int $bookingYear
     * @return \Pggns\MidocoApi\Order\StructType\CalculateEntryPeriodSumsRequest
     */
    public function setBookingYear(?int $bookingYear = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingYear) && !(is_int($bookingYear) || ctype_digit($bookingYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingYear, true), gettype($bookingYear)), __LINE__);
        }
        $this->bookingYear = $bookingYear;
        
        return $this;
    }
    /**
     * Get reopened value
     * @return bool|null
     */
    public function getReopened(): ?bool
    {
        return $this->reopened;
    }
    /**
     * Set reopened value
     * @param bool $reopened
     * @return \Pggns\MidocoApi\Order\StructType\CalculateEntryPeriodSumsRequest
     */
    public function setReopened(?bool $reopened = false): self
    {
        // validation for constraint: boolean
        if (!is_null($reopened) && !is_bool($reopened)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reopened, true), gettype($reopened)), __LINE__);
        }
        $this->reopened = $reopened;
        
        return $this;
    }
}
