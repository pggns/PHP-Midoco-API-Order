<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookPaymentProviderSettlementBookingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookPaymentProviderSettlementBookingRequest extends AbstractStructBase
{
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The bookingPosition
     * @var int|null
     */
    protected ?int $bookingPosition = null;
    /**
     * The ignoreErrors
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $ignoreErrors = null;
    /**
     * Constructor method for BookPaymentProviderSettlementBookingRequest
     * @uses BookPaymentProviderSettlementBookingRequest::setSettlementId()
     * @uses BookPaymentProviderSettlementBookingRequest::setBookingPosition()
     * @uses BookPaymentProviderSettlementBookingRequest::setIgnoreErrors()
     * @param int $settlementId
     * @param int $bookingPosition
     * @param bool $ignoreErrors
     */
    public function __construct(?int $settlementId = null, ?int $bookingPosition = null, ?bool $ignoreErrors = false)
    {
        $this
            ->setSettlementId($settlementId)
            ->setBookingPosition($bookingPosition)
            ->setIgnoreErrors($ignoreErrors);
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\BookPaymentProviderSettlementBookingRequest
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get bookingPosition value
     * @return int|null
     */
    public function getBookingPosition(): ?int
    {
        return $this->bookingPosition;
    }
    /**
     * Set bookingPosition value
     * @param int $bookingPosition
     * @return \Pggns\MidocoApi\Order\StructType\BookPaymentProviderSettlementBookingRequest
     */
    public function setBookingPosition(?int $bookingPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPosition) && !(is_int($bookingPosition) || ctype_digit($bookingPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPosition, true), gettype($bookingPosition)), __LINE__);
        }
        $this->bookingPosition = $bookingPosition;
        
        return $this;
    }
    /**
     * Get ignoreErrors value
     * @return bool|null
     */
    public function getIgnoreErrors(): ?bool
    {
        return $this->ignoreErrors;
    }
    /**
     * Set ignoreErrors value
     * @param bool $ignoreErrors
     * @return \Pggns\MidocoApi\Order\StructType\BookPaymentProviderSettlementBookingRequest
     */
    public function setIgnoreErrors(?bool $ignoreErrors = false): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreErrors) && !is_bool($ignoreErrors)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreErrors, true), gettype($ignoreErrors)), __LINE__);
        }
        $this->ignoreErrors = $ignoreErrors;
        
        return $this;
    }
}
