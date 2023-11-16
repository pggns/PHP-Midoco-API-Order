<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConnectSupplierSettlBookingRequest StructType
 * @subpackage Structs
 */
class ConnectSupplierSettlBookingRequest extends AbstractStructBase
{
    /**
     * The settlementId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $settlementId;
    /**
     * The bookingPosition
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $bookingPosition;
    /**
     * Constructor method for ConnectSupplierSettlBookingRequest
     * @uses ConnectSupplierSettlBookingRequest::setSettlementId()
     * @uses ConnectSupplierSettlBookingRequest::setBookingPosition()
     * @param int $settlementId
     * @param int $bookingPosition
     */
    public function __construct(int $settlementId, int $bookingPosition)
    {
        $this
            ->setSettlementId($settlementId)
            ->setBookingPosition($bookingPosition);
    }
    /**
     * Get settlementId value
     * @return int
     */
    public function getSettlementId(): int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\ConnectSupplierSettlBookingRequest
     */
    public function setSettlementId(int $settlementId): self
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
     * @return int
     */
    public function getBookingPosition(): int
    {
        return $this->bookingPosition;
    }
    /**
     * Set bookingPosition value
     * @param int $bookingPosition
     * @return \Pggns\MidocoApi\Order\StructType\ConnectSupplierSettlBookingRequest
     */
    public function setBookingPosition(int $bookingPosition): self
    {
        // validation for constraint: int
        if (!is_null($bookingPosition) && !(is_int($bookingPosition) || ctype_digit($bookingPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPosition, true), gettype($bookingPosition)), __LINE__);
        }
        $this->bookingPosition = $bookingPosition;
        
        return $this;
    }
}
