<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankStatemEntryDetailDTO StructType
 * @subpackage Structs
 */
class BankStatemEntryDetailDTO extends AbstractStructBase
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
     * The amountWithoutCharges
     * @var float|null
     */
    protected ?float $amountWithoutCharges = null;
    /**
     * The creditorAccount
     * @var string|null
     */
    protected ?string $creditorAccount = null;
    /**
     * The creditorDesc
     * @var string|null
     */
    protected ?string $creditorDesc = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The debitorAccount
     * @var string|null
     */
    protected ?string $debitorAccount = null;
    /**
     * The debitorDesc
     * @var string|null
     */
    protected ?string $debitorDesc = null;
    /**
     * The endToEndId
     * @var string|null
     */
    protected ?string $endToEndId = null;
    /**
     * The entryPosition
     * @var int|null
     */
    protected ?int $entryPosition = null;
    /**
     * The msgId
     * @var string|null
     */
    protected ?string $msgId = null;
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
     * Constructor method for BankStatemEntryDetailDTO
     * @uses BankStatemEntryDetailDTO::setAccountPosition()
     * @uses BankStatemEntryDetailDTO::setAmount()
     * @uses BankStatemEntryDetailDTO::setAmountWithoutCharges()
     * @uses BankStatemEntryDetailDTO::setCreditorAccount()
     * @uses BankStatemEntryDetailDTO::setCreditorDesc()
     * @uses BankStatemEntryDetailDTO::setCurrency()
     * @uses BankStatemEntryDetailDTO::setDebitorAccount()
     * @uses BankStatemEntryDetailDTO::setDebitorDesc()
     * @uses BankStatemEntryDetailDTO::setEndToEndId()
     * @uses BankStatemEntryDetailDTO::setEntryPosition()
     * @uses BankStatemEntryDetailDTO::setMsgId()
     * @uses BankStatemEntryDetailDTO::setPos()
     * @uses BankStatemEntryDetailDTO::setStatementId()
     * @param int $accountPosition
     * @param float $amount
     * @param float $amountWithoutCharges
     * @param string $creditorAccount
     * @param string $creditorDesc
     * @param string $currency
     * @param string $debitorAccount
     * @param string $debitorDesc
     * @param string $endToEndId
     * @param int $entryPosition
     * @param string $msgId
     * @param int $pos
     * @param int $statementId
     */
    public function __construct(?int $accountPosition = null, ?float $amount = null, ?float $amountWithoutCharges = null, ?string $creditorAccount = null, ?string $creditorDesc = null, ?string $currency = null, ?string $debitorAccount = null, ?string $debitorDesc = null, ?string $endToEndId = null, ?int $entryPosition = null, ?string $msgId = null, ?int $pos = null, ?int $statementId = null)
    {
        $this
            ->setAccountPosition($accountPosition)
            ->setAmount($amount)
            ->setAmountWithoutCharges($amountWithoutCharges)
            ->setCreditorAccount($creditorAccount)
            ->setCreditorDesc($creditorDesc)
            ->setCurrency($currency)
            ->setDebitorAccount($debitorAccount)
            ->setDebitorDesc($debitorDesc)
            ->setEndToEndId($endToEndId)
            ->setEntryPosition($entryPosition)
            ->setMsgId($msgId)
            ->setPos($pos)
            ->setStatementId($statementId);
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryDetailDTO
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
     * Get amountWithoutCharges value
     * @return float|null
     */
    public function getAmountWithoutCharges(): ?float
    {
        return $this->amountWithoutCharges;
    }
    /**
     * Set amountWithoutCharges value
     * @param float $amountWithoutCharges
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryDetailDTO
     */
    public function setAmountWithoutCharges(?float $amountWithoutCharges = null): self
    {
        // validation for constraint: float
        if (!is_null($amountWithoutCharges) && !(is_float($amountWithoutCharges) || is_numeric($amountWithoutCharges))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amountWithoutCharges, true), gettype($amountWithoutCharges)), __LINE__);
        }
        $this->amountWithoutCharges = $amountWithoutCharges;
        
        return $this;
    }
    /**
     * Get creditorAccount value
     * @return string|null
     */
    public function getCreditorAccount(): ?string
    {
        return $this->creditorAccount;
    }
    /**
     * Set creditorAccount value
     * @param string $creditorAccount
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryDetailDTO
     */
    public function setCreditorAccount(?string $creditorAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorAccount) && !is_string($creditorAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorAccount, true), gettype($creditorAccount)), __LINE__);
        }
        $this->creditorAccount = $creditorAccount;
        
        return $this;
    }
    /**
     * Get creditorDesc value
     * @return string|null
     */
    public function getCreditorDesc(): ?string
    {
        return $this->creditorDesc;
    }
    /**
     * Set creditorDesc value
     * @param string $creditorDesc
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryDetailDTO
     */
    public function setCreditorDesc(?string $creditorDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorDesc) && !is_string($creditorDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorDesc, true), gettype($creditorDesc)), __LINE__);
        }
        $this->creditorDesc = $creditorDesc;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryDetailDTO
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
     * Get debitorAccount value
     * @return string|null
     */
    public function getDebitorAccount(): ?string
    {
        return $this->debitorAccount;
    }
    /**
     * Set debitorAccount value
     * @param string $debitorAccount
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryDetailDTO
     */
    public function setDebitorAccount(?string $debitorAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorAccount) && !is_string($debitorAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorAccount, true), gettype($debitorAccount)), __LINE__);
        }
        $this->debitorAccount = $debitorAccount;
        
        return $this;
    }
    /**
     * Get debitorDesc value
     * @return string|null
     */
    public function getDebitorDesc(): ?string
    {
        return $this->debitorDesc;
    }
    /**
     * Set debitorDesc value
     * @param string $debitorDesc
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryDetailDTO
     */
    public function setDebitorDesc(?string $debitorDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorDesc) && !is_string($debitorDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorDesc, true), gettype($debitorDesc)), __LINE__);
        }
        $this->debitorDesc = $debitorDesc;
        
        return $this;
    }
    /**
     * Get endToEndId value
     * @return string|null
     */
    public function getEndToEndId(): ?string
    {
        return $this->endToEndId;
    }
    /**
     * Set endToEndId value
     * @param string $endToEndId
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryDetailDTO
     */
    public function setEndToEndId(?string $endToEndId = null): self
    {
        // validation for constraint: string
        if (!is_null($endToEndId) && !is_string($endToEndId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endToEndId, true), gettype($endToEndId)), __LINE__);
        }
        $this->endToEndId = $endToEndId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryDetailDTO
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
     * Get msgId value
     * @return string|null
     */
    public function getMsgId(): ?string
    {
        return $this->msgId;
    }
    /**
     * Set msgId value
     * @param string $msgId
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryDetailDTO
     */
    public function setMsgId(?string $msgId = null): self
    {
        // validation for constraint: string
        if (!is_null($msgId) && !is_string($msgId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($msgId, true), gettype($msgId)), __LINE__);
        }
        $this->msgId = $msgId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryDetailDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatemEntryDetailDTO
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
}
