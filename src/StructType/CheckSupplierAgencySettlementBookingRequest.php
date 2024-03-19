<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckSupplierAgencySettlementBookingRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CheckSupplierAgencySettlementBookingRequest extends AbstractStructBase
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
     * The sellItemId
     * @var int|null
     */
    protected ?int $sellItemId = null;
    /**
     * The provPercent
     * @var float|null
     */
    protected ?float $provPercent = null;
    /**
     * The backupData
     * @var string|null
     */
    protected ?string $backupData = null;
    /**
     * Constructor method for CheckSupplierAgencySettlementBookingRequest
     * @uses CheckSupplierAgencySettlementBookingRequest::setSettlementId()
     * @uses CheckSupplierAgencySettlementBookingRequest::setBookingPosition()
     * @uses CheckSupplierAgencySettlementBookingRequest::setSellItemId()
     * @uses CheckSupplierAgencySettlementBookingRequest::setProvPercent()
     * @uses CheckSupplierAgencySettlementBookingRequest::setBackupData()
     * @param int $settlementId
     * @param int $bookingPosition
     * @param int $sellItemId
     * @param float $provPercent
     * @param string $backupData
     */
    public function __construct(?int $settlementId = null, ?int $bookingPosition = null, ?int $sellItemId = null, ?float $provPercent = null, ?string $backupData = null)
    {
        $this
            ->setSettlementId($settlementId)
            ->setBookingPosition($bookingPosition)
            ->setSellItemId($sellItemId)
            ->setProvPercent($provPercent)
            ->setBackupData($backupData);
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
     * @return \Pggns\MidocoApi\Order\StructType\CheckSupplierAgencySettlementBookingRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\CheckSupplierAgencySettlementBookingRequest
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
     * Get sellItemId value
     * @return int|null
     */
    public function getSellItemId(): ?int
    {
        return $this->sellItemId;
    }
    /**
     * Set sellItemId value
     * @param int $sellItemId
     * @return \Pggns\MidocoApi\Order\StructType\CheckSupplierAgencySettlementBookingRequest
     */
    public function setSellItemId(?int $sellItemId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellItemId) && !(is_int($sellItemId) || ctype_digit($sellItemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellItemId, true), gettype($sellItemId)), __LINE__);
        }
        $this->sellItemId = $sellItemId;
        
        return $this;
    }
    /**
     * Get provPercent value
     * @return float|null
     */
    public function getProvPercent(): ?float
    {
        return $this->provPercent;
    }
    /**
     * Set provPercent value
     * @param float $provPercent
     * @return \Pggns\MidocoApi\Order\StructType\CheckSupplierAgencySettlementBookingRequest
     */
    public function setProvPercent(?float $provPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($provPercent) && !(is_float($provPercent) || is_numeric($provPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provPercent, true), gettype($provPercent)), __LINE__);
        }
        $this->provPercent = $provPercent;
        
        return $this;
    }
    /**
     * Get backupData value
     * @return string|null
     */
    public function getBackupData(): ?string
    {
        return $this->backupData;
    }
    /**
     * Set backupData value
     * @param string $backupData
     * @return \Pggns\MidocoApi\Order\StructType\CheckSupplierAgencySettlementBookingRequest
     */
    public function setBackupData(?string $backupData = null): self
    {
        // validation for constraint: string
        if (!is_null($backupData) && !is_string($backupData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($backupData, true), gettype($backupData)), __LINE__);
        }
        $this->backupData = $backupData;
        
        return $this;
    }
}
