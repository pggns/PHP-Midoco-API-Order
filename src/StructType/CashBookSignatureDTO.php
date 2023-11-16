<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashBookSignatureDTO StructType
 * @subpackage Structs
 */
class CashBookSignatureDTO extends AbstractStructBase
{
    /**
     * The actualTurnover
     * @var float|null
     */
    protected ?float $actualTurnover = null;
    /**
     * The cashBookId
     * @var int|null
     */
    protected ?int $cashBookId = null;
    /**
     * The cashBoxId
     * @var string|null
     */
    protected ?string $cashBoxId = null;
    /**
     * The closedMonth
     * @var int|null
     */
    protected ?int $closedMonth = null;
    /**
     * The closedYear
     * @var int|null
     */
    protected ?int $closedYear = null;
    /**
     * The encryptionKey
     * @var string|null
     */
    protected ?string $encryptionKey = null;
    /**
     * The encryptionKeyChecksum
     * @var string|null
     */
    protected ?string $encryptionKeyChecksum = null;
    /**
     * The lastReceiptCounter
     * @var int|null
     */
    protected ?int $lastReceiptCounter = null;
    /**
     * The lastTurnoverId
     * @var int|null
     */
    protected ?int $lastTurnoverId = null;
    /**
     * The state
     * @var string|null
     */
    protected ?string $state = null;
    /**
     * The turnoverIdLastMonth
     * @var int|null
     */
    protected ?int $turnoverIdLastMonth = null;
    /**
     * The turnoverIdLastYear
     * @var int|null
     */
    protected ?int $turnoverIdLastYear = null;
    /**
     * Constructor method for CashBookSignatureDTO
     * @uses CashBookSignatureDTO::setActualTurnover()
     * @uses CashBookSignatureDTO::setCashBookId()
     * @uses CashBookSignatureDTO::setCashBoxId()
     * @uses CashBookSignatureDTO::setClosedMonth()
     * @uses CashBookSignatureDTO::setClosedYear()
     * @uses CashBookSignatureDTO::setEncryptionKey()
     * @uses CashBookSignatureDTO::setEncryptionKeyChecksum()
     * @uses CashBookSignatureDTO::setLastReceiptCounter()
     * @uses CashBookSignatureDTO::setLastTurnoverId()
     * @uses CashBookSignatureDTO::setState()
     * @uses CashBookSignatureDTO::setTurnoverIdLastMonth()
     * @uses CashBookSignatureDTO::setTurnoverIdLastYear()
     * @param float $actualTurnover
     * @param int $cashBookId
     * @param string $cashBoxId
     * @param int $closedMonth
     * @param int $closedYear
     * @param string $encryptionKey
     * @param string $encryptionKeyChecksum
     * @param int $lastReceiptCounter
     * @param int $lastTurnoverId
     * @param string $state
     * @param int $turnoverIdLastMonth
     * @param int $turnoverIdLastYear
     */
    public function __construct(?float $actualTurnover = null, ?int $cashBookId = null, ?string $cashBoxId = null, ?int $closedMonth = null, ?int $closedYear = null, ?string $encryptionKey = null, ?string $encryptionKeyChecksum = null, ?int $lastReceiptCounter = null, ?int $lastTurnoverId = null, ?string $state = null, ?int $turnoverIdLastMonth = null, ?int $turnoverIdLastYear = null)
    {
        $this
            ->setActualTurnover($actualTurnover)
            ->setCashBookId($cashBookId)
            ->setCashBoxId($cashBoxId)
            ->setClosedMonth($closedMonth)
            ->setClosedYear($closedYear)
            ->setEncryptionKey($encryptionKey)
            ->setEncryptionKeyChecksum($encryptionKeyChecksum)
            ->setLastReceiptCounter($lastReceiptCounter)
            ->setLastTurnoverId($lastTurnoverId)
            ->setState($state)
            ->setTurnoverIdLastMonth($turnoverIdLastMonth)
            ->setTurnoverIdLastYear($turnoverIdLastYear);
    }
    /**
     * Get actualTurnover value
     * @return float|null
     */
    public function getActualTurnover(): ?float
    {
        return $this->actualTurnover;
    }
    /**
     * Set actualTurnover value
     * @param float $actualTurnover
     * @return \Pggns\MidocoApi\Order\StructType\CashBookSignatureDTO
     */
    public function setActualTurnover(?float $actualTurnover = null): self
    {
        // validation for constraint: float
        if (!is_null($actualTurnover) && !(is_float($actualTurnover) || is_numeric($actualTurnover))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($actualTurnover, true), gettype($actualTurnover)), __LINE__);
        }
        $this->actualTurnover = $actualTurnover;
        
        return $this;
    }
    /**
     * Get cashBookId value
     * @return int|null
     */
    public function getCashBookId(): ?int
    {
        return $this->cashBookId;
    }
    /**
     * Set cashBookId value
     * @param int $cashBookId
     * @return \Pggns\MidocoApi\Order\StructType\CashBookSignatureDTO
     */
    public function setCashBookId(?int $cashBookId = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBookId) && !(is_int($cashBookId) || ctype_digit($cashBookId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookId, true), gettype($cashBookId)), __LINE__);
        }
        $this->cashBookId = $cashBookId;
        
        return $this;
    }
    /**
     * Get cashBoxId value
     * @return string|null
     */
    public function getCashBoxId(): ?string
    {
        return $this->cashBoxId;
    }
    /**
     * Set cashBoxId value
     * @param string $cashBoxId
     * @return \Pggns\MidocoApi\Order\StructType\CashBookSignatureDTO
     */
    public function setCashBoxId(?string $cashBoxId = null): self
    {
        // validation for constraint: string
        if (!is_null($cashBoxId) && !is_string($cashBoxId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cashBoxId, true), gettype($cashBoxId)), __LINE__);
        }
        $this->cashBoxId = $cashBoxId;
        
        return $this;
    }
    /**
     * Get closedMonth value
     * @return int|null
     */
    public function getClosedMonth(): ?int
    {
        return $this->closedMonth;
    }
    /**
     * Set closedMonth value
     * @param int $closedMonth
     * @return \Pggns\MidocoApi\Order\StructType\CashBookSignatureDTO
     */
    public function setClosedMonth(?int $closedMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($closedMonth) && !(is_int($closedMonth) || ctype_digit($closedMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($closedMonth, true), gettype($closedMonth)), __LINE__);
        }
        $this->closedMonth = $closedMonth;
        
        return $this;
    }
    /**
     * Get closedYear value
     * @return int|null
     */
    public function getClosedYear(): ?int
    {
        return $this->closedYear;
    }
    /**
     * Set closedYear value
     * @param int $closedYear
     * @return \Pggns\MidocoApi\Order\StructType\CashBookSignatureDTO
     */
    public function setClosedYear(?int $closedYear = null): self
    {
        // validation for constraint: int
        if (!is_null($closedYear) && !(is_int($closedYear) || ctype_digit($closedYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($closedYear, true), gettype($closedYear)), __LINE__);
        }
        $this->closedYear = $closedYear;
        
        return $this;
    }
    /**
     * Get encryptionKey value
     * @return string|null
     */
    public function getEncryptionKey(): ?string
    {
        return $this->encryptionKey;
    }
    /**
     * Set encryptionKey value
     * @param string $encryptionKey
     * @return \Pggns\MidocoApi\Order\StructType\CashBookSignatureDTO
     */
    public function setEncryptionKey(?string $encryptionKey = null): self
    {
        // validation for constraint: string
        if (!is_null($encryptionKey) && !is_string($encryptionKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encryptionKey, true), gettype($encryptionKey)), __LINE__);
        }
        $this->encryptionKey = $encryptionKey;
        
        return $this;
    }
    /**
     * Get encryptionKeyChecksum value
     * @return string|null
     */
    public function getEncryptionKeyChecksum(): ?string
    {
        return $this->encryptionKeyChecksum;
    }
    /**
     * Set encryptionKeyChecksum value
     * @param string $encryptionKeyChecksum
     * @return \Pggns\MidocoApi\Order\StructType\CashBookSignatureDTO
     */
    public function setEncryptionKeyChecksum(?string $encryptionKeyChecksum = null): self
    {
        // validation for constraint: string
        if (!is_null($encryptionKeyChecksum) && !is_string($encryptionKeyChecksum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($encryptionKeyChecksum, true), gettype($encryptionKeyChecksum)), __LINE__);
        }
        $this->encryptionKeyChecksum = $encryptionKeyChecksum;
        
        return $this;
    }
    /**
     * Get lastReceiptCounter value
     * @return int|null
     */
    public function getLastReceiptCounter(): ?int
    {
        return $this->lastReceiptCounter;
    }
    /**
     * Set lastReceiptCounter value
     * @param int $lastReceiptCounter
     * @return \Pggns\MidocoApi\Order\StructType\CashBookSignatureDTO
     */
    public function setLastReceiptCounter(?int $lastReceiptCounter = null): self
    {
        // validation for constraint: int
        if (!is_null($lastReceiptCounter) && !(is_int($lastReceiptCounter) || ctype_digit($lastReceiptCounter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastReceiptCounter, true), gettype($lastReceiptCounter)), __LINE__);
        }
        $this->lastReceiptCounter = $lastReceiptCounter;
        
        return $this;
    }
    /**
     * Get lastTurnoverId value
     * @return int|null
     */
    public function getLastTurnoverId(): ?int
    {
        return $this->lastTurnoverId;
    }
    /**
     * Set lastTurnoverId value
     * @param int $lastTurnoverId
     * @return \Pggns\MidocoApi\Order\StructType\CashBookSignatureDTO
     */
    public function setLastTurnoverId(?int $lastTurnoverId = null): self
    {
        // validation for constraint: int
        if (!is_null($lastTurnoverId) && !(is_int($lastTurnoverId) || ctype_digit($lastTurnoverId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastTurnoverId, true), gettype($lastTurnoverId)), __LINE__);
        }
        $this->lastTurnoverId = $lastTurnoverId;
        
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Pggns\MidocoApi\Order\StructType\CashBookSignatureDTO
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
        return $this;
    }
    /**
     * Get turnoverIdLastMonth value
     * @return int|null
     */
    public function getTurnoverIdLastMonth(): ?int
    {
        return $this->turnoverIdLastMonth;
    }
    /**
     * Set turnoverIdLastMonth value
     * @param int $turnoverIdLastMonth
     * @return \Pggns\MidocoApi\Order\StructType\CashBookSignatureDTO
     */
    public function setTurnoverIdLastMonth(?int $turnoverIdLastMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($turnoverIdLastMonth) && !(is_int($turnoverIdLastMonth) || ctype_digit($turnoverIdLastMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($turnoverIdLastMonth, true), gettype($turnoverIdLastMonth)), __LINE__);
        }
        $this->turnoverIdLastMonth = $turnoverIdLastMonth;
        
        return $this;
    }
    /**
     * Get turnoverIdLastYear value
     * @return int|null
     */
    public function getTurnoverIdLastYear(): ?int
    {
        return $this->turnoverIdLastYear;
    }
    /**
     * Set turnoverIdLastYear value
     * @param int $turnoverIdLastYear
     * @return \Pggns\MidocoApi\Order\StructType\CashBookSignatureDTO
     */
    public function setTurnoverIdLastYear(?int $turnoverIdLastYear = null): self
    {
        // validation for constraint: int
        if (!is_null($turnoverIdLastYear) && !(is_int($turnoverIdLastYear) || ctype_digit($turnoverIdLastYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($turnoverIdLastYear, true), gettype($turnoverIdLastYear)), __LINE__);
        }
        $this->turnoverIdLastYear = $turnoverIdLastYear;
        
        return $this;
    }
}
