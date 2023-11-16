<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MilesAndMoreBurnTransactionBillingPositionDTO StructType
 * @subpackage Structs
 */
class MilesAndMoreBurnTransactionBillingPositionDTO extends AbstractStructBase
{
    /**
     * The billedAmount
     * @var float|null
     */
    protected ?float $billedAmount = null;
    /**
     * The billedMiles
     * @var float|null
     */
    protected ?float $billedMiles = null;
    /**
     * The isFinished
     * @var bool|null
     */
    protected ?bool $isFinished = null;
    /**
     * The isRefund
     * @var bool|null
     */
    protected ?bool $isRefund = null;
    /**
     * The positionId
     * @var int|null
     */
    protected ?int $positionId = null;
    /**
     * The transactionId
     * @var string|null
     */
    protected ?string $transactionId = null;
    /**
     * Constructor method for MilesAndMoreBurnTransactionBillingPositionDTO
     * @uses MilesAndMoreBurnTransactionBillingPositionDTO::setBilledAmount()
     * @uses MilesAndMoreBurnTransactionBillingPositionDTO::setBilledMiles()
     * @uses MilesAndMoreBurnTransactionBillingPositionDTO::setIsFinished()
     * @uses MilesAndMoreBurnTransactionBillingPositionDTO::setIsRefund()
     * @uses MilesAndMoreBurnTransactionBillingPositionDTO::setPositionId()
     * @uses MilesAndMoreBurnTransactionBillingPositionDTO::setTransactionId()
     * @param float $billedAmount
     * @param float $billedMiles
     * @param bool $isFinished
     * @param bool $isRefund
     * @param int $positionId
     * @param string $transactionId
     */
    public function __construct(?float $billedAmount = null, ?float $billedMiles = null, ?bool $isFinished = null, ?bool $isRefund = null, ?int $positionId = null, ?string $transactionId = null)
    {
        $this
            ->setBilledAmount($billedAmount)
            ->setBilledMiles($billedMiles)
            ->setIsFinished($isFinished)
            ->setIsRefund($isRefund)
            ->setPositionId($positionId)
            ->setTransactionId($transactionId);
    }
    /**
     * Get billedAmount value
     * @return float|null
     */
    public function getBilledAmount(): ?float
    {
        return $this->billedAmount;
    }
    /**
     * Set billedAmount value
     * @param float $billedAmount
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionBillingPositionDTO
     */
    public function setBilledAmount(?float $billedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($billedAmount) && !(is_float($billedAmount) || is_numeric($billedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($billedAmount, true), gettype($billedAmount)), __LINE__);
        }
        $this->billedAmount = $billedAmount;
        
        return $this;
    }
    /**
     * Get billedMiles value
     * @return float|null
     */
    public function getBilledMiles(): ?float
    {
        return $this->billedMiles;
    }
    /**
     * Set billedMiles value
     * @param float $billedMiles
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionBillingPositionDTO
     */
    public function setBilledMiles(?float $billedMiles = null): self
    {
        // validation for constraint: float
        if (!is_null($billedMiles) && !(is_float($billedMiles) || is_numeric($billedMiles))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($billedMiles, true), gettype($billedMiles)), __LINE__);
        }
        $this->billedMiles = $billedMiles;
        
        return $this;
    }
    /**
     * Get isFinished value
     * @return bool|null
     */
    public function getIsFinished(): ?bool
    {
        return $this->isFinished;
    }
    /**
     * Set isFinished value
     * @param bool $isFinished
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionBillingPositionDTO
     */
    public function setIsFinished(?bool $isFinished = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFinished) && !is_bool($isFinished)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFinished, true), gettype($isFinished)), __LINE__);
        }
        $this->isFinished = $isFinished;
        
        return $this;
    }
    /**
     * Get isRefund value
     * @return bool|null
     */
    public function getIsRefund(): ?bool
    {
        return $this->isRefund;
    }
    /**
     * Set isRefund value
     * @param bool $isRefund
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionBillingPositionDTO
     */
    public function setIsRefund(?bool $isRefund = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRefund) && !is_bool($isRefund)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRefund, true), gettype($isRefund)), __LINE__);
        }
        $this->isRefund = $isRefund;
        
        return $this;
    }
    /**
     * Get positionId value
     * @return int|null
     */
    public function getPositionId(): ?int
    {
        return $this->positionId;
    }
    /**
     * Set positionId value
     * @param int $positionId
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionBillingPositionDTO
     */
    public function setPositionId(?int $positionId = null): self
    {
        // validation for constraint: int
        if (!is_null($positionId) && !(is_int($positionId) || ctype_digit($positionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionId, true), gettype($positionId)), __LINE__);
        }
        $this->positionId = $positionId;
        
        return $this;
    }
    /**
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionBillingPositionDTO
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
}
