<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MilesAndMoreBurnTransactionDeltaDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MilesAndMoreBurnTransactionDeltaDTO extends AbstractStructBase
{
    /**
     * The deltaFunds
     * @var float|null
     */
    protected ?float $deltaFunds = null;
    /**
     * The deltaId
     * @var string|null
     */
    protected ?string $deltaId = null;
    /**
     * The deltaMiles
     * @var float|null
     */
    protected ?float $deltaMiles = null;
    /**
     * The timestamp
     * @var string|null
     */
    protected ?string $timestamp = null;
    /**
     * The transactionId
     * @var string|null
     */
    protected ?string $transactionId = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for MilesAndMoreBurnTransactionDeltaDTO
     * @uses MilesAndMoreBurnTransactionDeltaDTO::setDeltaFunds()
     * @uses MilesAndMoreBurnTransactionDeltaDTO::setDeltaId()
     * @uses MilesAndMoreBurnTransactionDeltaDTO::setDeltaMiles()
     * @uses MilesAndMoreBurnTransactionDeltaDTO::setTimestamp()
     * @uses MilesAndMoreBurnTransactionDeltaDTO::setTransactionId()
     * @uses MilesAndMoreBurnTransactionDeltaDTO::setType()
     * @param float $deltaFunds
     * @param string $deltaId
     * @param float $deltaMiles
     * @param string $timestamp
     * @param string $transactionId
     * @param string $type
     */
    public function __construct(?float $deltaFunds = null, ?string $deltaId = null, ?float $deltaMiles = null, ?string $timestamp = null, ?string $transactionId = null, ?string $type = null)
    {
        $this
            ->setDeltaFunds($deltaFunds)
            ->setDeltaId($deltaId)
            ->setDeltaMiles($deltaMiles)
            ->setTimestamp($timestamp)
            ->setTransactionId($transactionId)
            ->setType($type);
    }
    /**
     * Get deltaFunds value
     * @return float|null
     */
    public function getDeltaFunds(): ?float
    {
        return $this->deltaFunds;
    }
    /**
     * Set deltaFunds value
     * @param float $deltaFunds
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO
     */
    public function setDeltaFunds(?float $deltaFunds = null): self
    {
        // validation for constraint: float
        if (!is_null($deltaFunds) && !(is_float($deltaFunds) || is_numeric($deltaFunds))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($deltaFunds, true), gettype($deltaFunds)), __LINE__);
        }
        $this->deltaFunds = $deltaFunds;
        
        return $this;
    }
    /**
     * Get deltaId value
     * @return string|null
     */
    public function getDeltaId(): ?string
    {
        return $this->deltaId;
    }
    /**
     * Set deltaId value
     * @param string $deltaId
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO
     */
    public function setDeltaId(?string $deltaId = null): self
    {
        // validation for constraint: string
        if (!is_null($deltaId) && !is_string($deltaId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deltaId, true), gettype($deltaId)), __LINE__);
        }
        $this->deltaId = $deltaId;
        
        return $this;
    }
    /**
     * Get deltaMiles value
     * @return float|null
     */
    public function getDeltaMiles(): ?float
    {
        return $this->deltaMiles;
    }
    /**
     * Set deltaMiles value
     * @param float $deltaMiles
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO
     */
    public function setDeltaMiles(?float $deltaMiles = null): self
    {
        // validation for constraint: float
        if (!is_null($deltaMiles) && !(is_float($deltaMiles) || is_numeric($deltaMiles))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($deltaMiles, true), gettype($deltaMiles)), __LINE__);
        }
        $this->deltaMiles = $deltaMiles;
        
        return $this;
    }
    /**
     * Get timestamp value
     * @return string|null
     */
    public function getTimestamp(): ?string
    {
        return $this->timestamp;
    }
    /**
     * Set timestamp value
     * @param string $timestamp
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO
     */
    public function setTimestamp(?string $timestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestamp, true), gettype($timestamp)), __LINE__);
        }
        $this->timestamp = $timestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO
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
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreBurnTransactionDeltaDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
