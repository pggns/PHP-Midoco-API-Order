<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediatorSettlementLevelDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MediatorSettlementLevelDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The percent
     * @var float|null
     */
    protected ?float $percent = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * Constructor method for MediatorSettlementLevelDTO
     * @uses MediatorSettlementLevelDTO::setCustomerId()
     * @uses MediatorSettlementLevelDTO::setPercent()
     * @uses MediatorSettlementLevelDTO::setStartDate()
     * @param int $customerId
     * @param float $percent
     * @param string $startDate
     */
    public function __construct(?int $customerId = null, ?float $percent = null, ?string $startDate = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setPercent($percent)
            ->setStartDate($startDate);
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementLevelDTO
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
     * Get percent value
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }
    /**
     * Set percent value
     * @param float $percent
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementLevelDTO
     */
    public function setPercent(?float $percent = null): self
    {
        // validation for constraint: float
        if (!is_null($percent) && !(is_float($percent) || is_numeric($percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        $this->percent = $percent;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\MediatorSettlementLevelDTO
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
}
