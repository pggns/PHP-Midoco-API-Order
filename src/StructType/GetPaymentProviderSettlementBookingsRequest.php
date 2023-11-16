<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentProviderSettlementBookingsRequest StructType
 * @subpackage Structs
 */
class GetPaymentProviderSettlementBookingsRequest extends AbstractStructBase
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
     * The booked
     * @var bool|null
     */
    protected ?bool $booked = null;
    /**
     * The checked
     * @var bool|null
     */
    protected ?bool $checked = null;
    /**
     * The errors
     * @var bool|null
     */
    protected ?bool $errors = null;
    /**
     * The entryId
     * @var string|null
     */
    protected ?string $entryId = null;
    /**
     * Constructor method for GetPaymentProviderSettlementBookingsRequest
     * @uses GetPaymentProviderSettlementBookingsRequest::setSettlementId()
     * @uses GetPaymentProviderSettlementBookingsRequest::setBookingPosition()
     * @uses GetPaymentProviderSettlementBookingsRequest::setBooked()
     * @uses GetPaymentProviderSettlementBookingsRequest::setChecked()
     * @uses GetPaymentProviderSettlementBookingsRequest::setErrors()
     * @uses GetPaymentProviderSettlementBookingsRequest::setEntryId()
     * @param int $settlementId
     * @param int $bookingPosition
     * @param bool $booked
     * @param bool $checked
     * @param bool $errors
     * @param string $entryId
     */
    public function __construct(?int $settlementId = null, ?int $bookingPosition = null, ?bool $booked = null, ?bool $checked = null, ?bool $errors = null, ?string $entryId = null)
    {
        $this
            ->setSettlementId($settlementId)
            ->setBookingPosition($bookingPosition)
            ->setBooked($booked)
            ->setChecked($checked)
            ->setErrors($errors)
            ->setEntryId($entryId);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentProviderSettlementBookingsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentProviderSettlementBookingsRequest
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
     * Get booked value
     * @return bool|null
     */
    public function getBooked(): ?bool
    {
        return $this->booked;
    }
    /**
     * Set booked value
     * @param bool $booked
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentProviderSettlementBookingsRequest
     */
    public function setBooked(?bool $booked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($booked) && !is_bool($booked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($booked, true), gettype($booked)), __LINE__);
        }
        $this->booked = $booked;
        
        return $this;
    }
    /**
     * Get checked value
     * @return bool|null
     */
    public function getChecked(): ?bool
    {
        return $this->checked;
    }
    /**
     * Set checked value
     * @param bool $checked
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentProviderSettlementBookingsRequest
     */
    public function setChecked(?bool $checked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checked) && !is_bool($checked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checked, true), gettype($checked)), __LINE__);
        }
        $this->checked = $checked;
        
        return $this;
    }
    /**
     * Get errors value
     * @return bool|null
     */
    public function getErrors(): ?bool
    {
        return $this->errors;
    }
    /**
     * Set errors value
     * @param bool $errors
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentProviderSettlementBookingsRequest
     */
    public function setErrors(?bool $errors = null): self
    {
        // validation for constraint: boolean
        if (!is_null($errors) && !is_bool($errors)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($errors, true), gettype($errors)), __LINE__);
        }
        $this->errors = $errors;
        
        return $this;
    }
    /**
     * Get entryId value
     * @return string|null
     */
    public function getEntryId(): ?string
    {
        return $this->entryId;
    }
    /**
     * Set entryId value
     * @param string $entryId
     * @return \Pggns\MidocoApi\Order\StructType\GetPaymentProviderSettlementBookingsRequest
     */
    public function setEntryId(?string $entryId = null): self
    {
        // validation for constraint: string
        if (!is_null($entryId) && !is_string($entryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryId, true), gettype($entryId)), __LINE__);
        }
        $this->entryId = $entryId;
        
        return $this;
    }
}
