<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPaymentProviderSettlementError StructType
 * @subpackage Structs
 */
class MidocoPaymentProviderSettlementError extends AbstractStructBase
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
     * The errorText
     * @var string|null
     */
    protected ?string $errorText = null;
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * Constructor method for MidocoPaymentProviderSettlementError
     * @uses MidocoPaymentProviderSettlementError::setSettlementId()
     * @uses MidocoPaymentProviderSettlementError::setBookingPosition()
     * @uses MidocoPaymentProviderSettlementError::setErrorText()
     * @uses MidocoPaymentProviderSettlementError::setCode()
     * @param int $settlementId
     * @param int $bookingPosition
     * @param string $errorText
     * @param string $code
     */
    public function __construct(?int $settlementId = null, ?int $bookingPosition = null, ?string $errorText = null, ?string $code = null)
    {
        $this
            ->setSettlementId($settlementId)
            ->setBookingPosition($bookingPosition)
            ->setErrorText($errorText)
            ->setCode($code);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlementError
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlementError
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
     * Get errorText value
     * @return string|null
     */
    public function getErrorText(): ?string
    {
        return $this->errorText;
    }
    /**
     * Set errorText value
     * @param string $errorText
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlementError
     */
    public function setErrorText(?string $errorText = null): self
    {
        // validation for constraint: string
        if (!is_null($errorText) && !is_string($errorText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorText, true), gettype($errorText)), __LINE__);
        }
        $this->errorText = $errorText;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlementError
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
}
