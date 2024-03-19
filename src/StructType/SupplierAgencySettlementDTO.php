<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierAgencySettlementDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplierAgencySettlementDTO extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The settlementHash
     * @var string|null
     */
    protected ?string $settlementHash = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The settlementMonth
     * @var string|null
     */
    protected ?string $settlementMonth = null;
    /**
     * The settlementSystem
     * @var string|null
     */
    protected ?string $settlementSystem = null;
    /**
     * Constructor method for SupplierAgencySettlementDTO
     * @uses SupplierAgencySettlementDTO::setCreationDate()
     * @uses SupplierAgencySettlementDTO::setCurrency()
     * @uses SupplierAgencySettlementDTO::setDueDate()
     * @uses SupplierAgencySettlementDTO::setExchangeRate()
     * @uses SupplierAgencySettlementDTO::setReceiptNo()
     * @uses SupplierAgencySettlementDTO::setSettlementHash()
     * @uses SupplierAgencySettlementDTO::setSettlementId()
     * @uses SupplierAgencySettlementDTO::setSettlementMonth()
     * @uses SupplierAgencySettlementDTO::setSettlementSystem()
     * @param string $creationDate
     * @param string $currency
     * @param string $dueDate
     * @param float $exchangeRate
     * @param string $receiptNo
     * @param string $settlementHash
     * @param int $settlementId
     * @param string $settlementMonth
     * @param string $settlementSystem
     */
    public function __construct(?string $creationDate = null, ?string $currency = null, ?string $dueDate = null, ?float $exchangeRate = null, ?string $receiptNo = null, ?string $settlementHash = null, ?int $settlementId = null, ?string $settlementMonth = null, ?string $settlementSystem = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setCurrency($currency)
            ->setDueDate($dueDate)
            ->setExchangeRate($exchangeRate)
            ->setReceiptNo($receiptNo)
            ->setSettlementHash($settlementHash)
            ->setSettlementId($settlementId)
            ->setSettlementMonth($settlementMonth)
            ->setSettlementSystem($settlementSystem);
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencySettlementDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencySettlementDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get dueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencySettlementDTO
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        
        return $this;
    }
    /**
     * Get exchangeRate value
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }
    /**
     * Set exchangeRate value
     * @param float $exchangeRate
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencySettlementDTO
     */
    public function setExchangeRate(?float $exchangeRate = null): self
    {
        // validation for constraint: float
        if (!is_null($exchangeRate) && !(is_float($exchangeRate) || is_numeric($exchangeRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($exchangeRate, true), gettype($exchangeRate)), __LINE__);
        }
        $this->exchangeRate = $exchangeRate;
        
        return $this;
    }
    /**
     * Get receiptNo value
     * @return string|null
     */
    public function getReceiptNo(): ?string
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param string $receiptNo
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencySettlementDTO
     */
    public function setReceiptNo(?string $receiptNo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptNo) && !is_string($receiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get settlementHash value
     * @return string|null
     */
    public function getSettlementHash(): ?string
    {
        return $this->settlementHash;
    }
    /**
     * Set settlementHash value
     * @param string $settlementHash
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencySettlementDTO
     */
    public function setSettlementHash(?string $settlementHash = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementHash) && !is_string($settlementHash)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementHash, true), gettype($settlementHash)), __LINE__);
        }
        $this->settlementHash = $settlementHash;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencySettlementDTO
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
     * Get settlementMonth value
     * @return string|null
     */
    public function getSettlementMonth(): ?string
    {
        return $this->settlementMonth;
    }
    /**
     * Set settlementMonth value
     * @param string $settlementMonth
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencySettlementDTO
     */
    public function setSettlementMonth(?string $settlementMonth = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementMonth) && !is_string($settlementMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementMonth, true), gettype($settlementMonth)), __LINE__);
        }
        $this->settlementMonth = $settlementMonth;
        
        return $this;
    }
    /**
     * Get settlementSystem value
     * @return string|null
     */
    public function getSettlementSystem(): ?string
    {
        return $this->settlementSystem;
    }
    /**
     * Set settlementSystem value
     * @param string $settlementSystem
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencySettlementDTO
     */
    public function setSettlementSystem(?string $settlementSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementSystem) && !is_string($settlementSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementSystem, true), gettype($settlementSystem)), __LINE__);
        }
        $this->settlementSystem = $settlementSystem;
        
        return $this;
    }
}
