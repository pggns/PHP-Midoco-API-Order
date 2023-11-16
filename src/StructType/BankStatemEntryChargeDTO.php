<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankStatemEntryChargeDTO StructType
 * @subpackage Structs
 */
class BankStatemEntryChargeDTO extends AbstractStructBase
{
    /**
     * The accountPosition
     * @var int|null
     */
    protected ?int $accountPosition = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The entryPosition
     * @var int|null
     */
    protected ?int $entryPosition = null;
    /**
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The issuer
     * @var string|null
     */
    protected ?string $issuer = null;
    /**
     * The originalAmount
     * @var float|null
     */
    protected ?float $originalAmount = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The pos
     * @var int|null
     */
    protected ?int $pos = null;
    /**
     * The statementId
     * @var int|null
     */
    protected ?int $statementId = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for BankStatemEntryChargeDTO
     * @uses BankStatemEntryChargeDTO::setAccountPosition()
     * @uses BankStatemEntryChargeDTO::setAmount()
     * @uses BankStatemEntryChargeDTO::setCurrency()
     * @uses BankStatemEntryChargeDTO::setDescription()
     * @uses BankStatemEntryChargeDTO::setEntryPosition()
     * @uses BankStatemEntryChargeDTO::setExchangeRate()
     * @uses BankStatemEntryChargeDTO::setIssuer()
     * @uses BankStatemEntryChargeDTO::setOriginalAmount()
     * @uses BankStatemEntryChargeDTO::setOriginalCurrency()
     * @uses BankStatemEntryChargeDTO::setPos()
     * @uses BankStatemEntryChargeDTO::setStatementId()
     * @uses BankStatemEntryChargeDTO::setType()
     * @param int $accountPosition
     * @param float $amount
     * @param string $currency
     * @param string $description
     * @param int $entryPosition
     * @param float $exchangeRate
     * @param string $issuer
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param int $pos
     * @param int $statementId
     * @param string $type
     */
    public function __construct(?int $accountPosition = null, ?float $amount = null, ?string $currency = null, ?string $description = null, ?int $entryPosition = null, ?float $exchangeRate = null, ?string $issuer = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?int $pos = null, ?int $statementId = null, ?string $type = null)
    {
        $this
            ->setAccountPosition($accountPosition)
            ->setAmount($amount)
            ->setCurrency($currency)
            ->setDescription($description)
            ->setEntryPosition($entryPosition)
            ->setExchangeRate($exchangeRate)
            ->setIssuer($issuer)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setPos($pos)
            ->setStatementId($statementId)
            ->setType($type);
    }
    /**
     * Get accountPosition value
     * @return int|null
     */
    public function getAccountPosition(): ?int
    {
        return $this->accountPosition;
    }
    /**
     * Set accountPosition value
     * @param int $accountPosition
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryChargeDTO
     */
    public function setAccountPosition(?int $accountPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($accountPosition) && !(is_int($accountPosition) || ctype_digit($accountPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accountPosition, true), gettype($accountPosition)), __LINE__);
        }
        $this->accountPosition = $accountPosition;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryChargeDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryChargeDTO
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
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryChargeDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get entryPosition value
     * @return int|null
     */
    public function getEntryPosition(): ?int
    {
        return $this->entryPosition;
    }
    /**
     * Set entryPosition value
     * @param int $entryPosition
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryChargeDTO
     */
    public function setEntryPosition(?int $entryPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($entryPosition) && !(is_int($entryPosition) || ctype_digit($entryPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($entryPosition, true), gettype($entryPosition)), __LINE__);
        }
        $this->entryPosition = $entryPosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryChargeDTO
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
     * Get issuer value
     * @return string|null
     */
    public function getIssuer(): ?string
    {
        return $this->issuer;
    }
    /**
     * Set issuer value
     * @param string $issuer
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryChargeDTO
     */
    public function setIssuer(?string $issuer = null): self
    {
        // validation for constraint: string
        if (!is_null($issuer) && !is_string($issuer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuer, true), gettype($issuer)), __LINE__);
        }
        $this->issuer = $issuer;
        
        return $this;
    }
    /**
     * Get originalAmount value
     * @return float|null
     */
    public function getOriginalAmount(): ?float
    {
        return $this->originalAmount;
    }
    /**
     * Set originalAmount value
     * @param float $originalAmount
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryChargeDTO
     */
    public function setOriginalAmount(?float $originalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalAmount) && !(is_float($originalAmount) || is_numeric($originalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalAmount, true), gettype($originalAmount)), __LINE__);
        }
        $this->originalAmount = $originalAmount;
        
        return $this;
    }
    /**
     * Get originalCurrency value
     * @return string|null
     */
    public function getOriginalCurrency(): ?string
    {
        return $this->originalCurrency;
    }
    /**
     * Set originalCurrency value
     * @param string $originalCurrency
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryChargeDTO
     */
    public function setOriginalCurrency(?string $originalCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($originalCurrency) && !is_string($originalCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalCurrency, true), gettype($originalCurrency)), __LINE__);
        }
        $this->originalCurrency = $originalCurrency;
        
        return $this;
    }
    /**
     * Get pos value
     * @return int|null
     */
    public function getPos(): ?int
    {
        return $this->pos;
    }
    /**
     * Set pos value
     * @param int $pos
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryChargeDTO
     */
    public function setPos(?int $pos = null): self
    {
        // validation for constraint: int
        if (!is_null($pos) && !(is_int($pos) || ctype_digit($pos))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pos, true), gettype($pos)), __LINE__);
        }
        $this->pos = $pos;
        
        return $this;
    }
    /**
     * Get statementId value
     * @return int|null
     */
    public function getStatementId(): ?int
    {
        return $this->statementId;
    }
    /**
     * Set statementId value
     * @param int $statementId
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryChargeDTO
     */
    public function setStatementId(?int $statementId = null): self
    {
        // validation for constraint: int
        if (!is_null($statementId) && !(is_int($statementId) || ctype_digit($statementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($statementId, true), gettype($statementId)), __LINE__);
        }
        $this->statementId = $statementId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryChargeDTO
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
