<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplAgencySettlemJournalRequest StructType
 * @subpackage Structs
 */
class GetSupplAgencySettlemJournalRequest extends AbstractStructBase
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
     * The journalPosition
     * @var int|null
     */
    protected ?int $journalPosition = null;
    /**
     * Constructor method for GetSupplAgencySettlemJournalRequest
     * @uses GetSupplAgencySettlemJournalRequest::setSettlementId()
     * @uses GetSupplAgencySettlemJournalRequest::setBookingPosition()
     * @uses GetSupplAgencySettlemJournalRequest::setJournalPosition()
     * @param int $settlementId
     * @param int $bookingPosition
     * @param int $journalPosition
     */
    public function __construct(?int $settlementId = null, ?int $bookingPosition = null, ?int $journalPosition = null)
    {
        $this
            ->setSettlementId($settlementId)
            ->setBookingPosition($bookingPosition)
            ->setJournalPosition($journalPosition);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplAgencySettlemJournalRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplAgencySettlemJournalRequest
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
     * Get journalPosition value
     * @return int|null
     */
    public function getJournalPosition(): ?int
    {
        return $this->journalPosition;
    }
    /**
     * Set journalPosition value
     * @param int $journalPosition
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplAgencySettlemJournalRequest
     */
    public function setJournalPosition(?int $journalPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($journalPosition) && !(is_int($journalPosition) || ctype_digit($journalPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journalPosition, true), gettype($journalPosition)), __LINE__);
        }
        $this->journalPosition = $journalPosition;
        
        return $this;
    }
}
