<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashBookDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CashBookDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The actualBalance
     * @var float|null
     */
    protected ?float $actualBalance = null;
    /**
     * The autoBalance
     * @var bool|null
     */
    protected ?bool $autoBalance = null;
    /**
     * The cashBookId
     * @var int|null
     */
    protected ?int $cashBookId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The foreignBalance
     * @var float|null
     */
    protected ?float $foreignBalance = null;
    /**
     * The foreignCurrency
     * @var string|null
     */
    protected ?string $foreignCurrency = null;
    /**
     * The foreignPrintBalance
     * @var float|null
     */
    protected ?float $foreignPrintBalance = null;
    /**
     * The isDefault
     * @var bool|null
     */
    protected ?bool $isDefault = null;
    /**
     * The locked
     * @var bool|null
     */
    protected ?bool $locked = null;
    /**
     * The nextPrintingPage
     * @var int|null
     */
    protected ?int $nextPrintingPage = null;
    /**
     * The notifyEmail
     * @var string|null
     */
    protected ?string $notifyEmail = null;
    /**
     * The printingBalance
     * @var float|null
     */
    protected ?float $printingBalance = null;
    /**
     * The receiptNoAct
     * @var int|null
     */
    protected ?int $receiptNoAct = null;
    /**
     * The receiptNoEnd
     * @var int|null
     */
    protected ?int $receiptNoEnd = null;
    /**
     * The receiptNoStart
     * @var int|null
     */
    protected ?int $receiptNoStart = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for CashBookDTO
     * @uses CashBookDTO::setAccountId()
     * @uses CashBookDTO::setActualBalance()
     * @uses CashBookDTO::setAutoBalance()
     * @uses CashBookDTO::setCashBookId()
     * @uses CashBookDTO::setDescription()
     * @uses CashBookDTO::setForeignBalance()
     * @uses CashBookDTO::setForeignCurrency()
     * @uses CashBookDTO::setForeignPrintBalance()
     * @uses CashBookDTO::setIsDefault()
     * @uses CashBookDTO::setLocked()
     * @uses CashBookDTO::setNextPrintingPage()
     * @uses CashBookDTO::setNotifyEmail()
     * @uses CashBookDTO::setPrintingBalance()
     * @uses CashBookDTO::setReceiptNoAct()
     * @uses CashBookDTO::setReceiptNoEnd()
     * @uses CashBookDTO::setReceiptNoStart()
     * @uses CashBookDTO::setUnitName()
     * @uses CashBookDTO::setUserId()
     * @param string $accountId
     * @param float $actualBalance
     * @param bool $autoBalance
     * @param int $cashBookId
     * @param string $description
     * @param float $foreignBalance
     * @param string $foreignCurrency
     * @param float $foreignPrintBalance
     * @param bool $isDefault
     * @param bool $locked
     * @param int $nextPrintingPage
     * @param string $notifyEmail
     * @param float $printingBalance
     * @param int $receiptNoAct
     * @param int $receiptNoEnd
     * @param int $receiptNoStart
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?string $accountId = null, ?float $actualBalance = null, ?bool $autoBalance = null, ?int $cashBookId = null, ?string $description = null, ?float $foreignBalance = null, ?string $foreignCurrency = null, ?float $foreignPrintBalance = null, ?bool $isDefault = null, ?bool $locked = null, ?int $nextPrintingPage = null, ?string $notifyEmail = null, ?float $printingBalance = null, ?int $receiptNoAct = null, ?int $receiptNoEnd = null, ?int $receiptNoStart = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setAccountId($accountId)
            ->setActualBalance($actualBalance)
            ->setAutoBalance($autoBalance)
            ->setCashBookId($cashBookId)
            ->setDescription($description)
            ->setForeignBalance($foreignBalance)
            ->setForeignCurrency($foreignCurrency)
            ->setForeignPrintBalance($foreignPrintBalance)
            ->setIsDefault($isDefault)
            ->setLocked($locked)
            ->setNextPrintingPage($nextPrintingPage)
            ->setNotifyEmail($notifyEmail)
            ->setPrintingBalance($printingBalance)
            ->setReceiptNoAct($receiptNoAct)
            ->setReceiptNoEnd($receiptNoEnd)
            ->setReceiptNoStart($receiptNoStart)
            ->setUnitName($unitName)
            ->setUserId($userId);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get actualBalance value
     * @return float|null
     */
    public function getActualBalance(): ?float
    {
        return $this->actualBalance;
    }
    /**
     * Set actualBalance value
     * @param float $actualBalance
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setActualBalance(?float $actualBalance = null): self
    {
        // validation for constraint: float
        if (!is_null($actualBalance) && !(is_float($actualBalance) || is_numeric($actualBalance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($actualBalance, true), gettype($actualBalance)), __LINE__);
        }
        $this->actualBalance = $actualBalance;
        
        return $this;
    }
    /**
     * Get autoBalance value
     * @return bool|null
     */
    public function getAutoBalance(): ?bool
    {
        return $this->autoBalance;
    }
    /**
     * Set autoBalance value
     * @param bool $autoBalance
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setAutoBalance(?bool $autoBalance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($autoBalance) && !is_bool($autoBalance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoBalance, true), gettype($autoBalance)), __LINE__);
        }
        $this->autoBalance = $autoBalance;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
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
     * Get foreignBalance value
     * @return float|null
     */
    public function getForeignBalance(): ?float
    {
        return $this->foreignBalance;
    }
    /**
     * Set foreignBalance value
     * @param float $foreignBalance
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setForeignBalance(?float $foreignBalance = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignBalance) && !(is_float($foreignBalance) || is_numeric($foreignBalance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignBalance, true), gettype($foreignBalance)), __LINE__);
        }
        $this->foreignBalance = $foreignBalance;
        
        return $this;
    }
    /**
     * Get foreignCurrency value
     * @return string|null
     */
    public function getForeignCurrency(): ?string
    {
        return $this->foreignCurrency;
    }
    /**
     * Set foreignCurrency value
     * @param string $foreignCurrency
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setForeignCurrency(?string $foreignCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignCurrency) && !is_string($foreignCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignCurrency, true), gettype($foreignCurrency)), __LINE__);
        }
        $this->foreignCurrency = $foreignCurrency;
        
        return $this;
    }
    /**
     * Get foreignPrintBalance value
     * @return float|null
     */
    public function getForeignPrintBalance(): ?float
    {
        return $this->foreignPrintBalance;
    }
    /**
     * Set foreignPrintBalance value
     * @param float $foreignPrintBalance
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setForeignPrintBalance(?float $foreignPrintBalance = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignPrintBalance) && !(is_float($foreignPrintBalance) || is_numeric($foreignPrintBalance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignPrintBalance, true), gettype($foreignPrintBalance)), __LINE__);
        }
        $this->foreignPrintBalance = $foreignPrintBalance;
        
        return $this;
    }
    /**
     * Get isDefault value
     * @return bool|null
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }
    /**
     * Set isDefault value
     * @param bool $isDefault
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setIsDefault(?bool $isDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefault) && !is_bool($isDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefault, true), gettype($isDefault)), __LINE__);
        }
        $this->isDefault = $isDefault;
        
        return $this;
    }
    /**
     * Get locked value
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->locked;
    }
    /**
     * Set locked value
     * @param bool $locked
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setLocked(?bool $locked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($locked) && !is_bool($locked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($locked, true), gettype($locked)), __LINE__);
        }
        $this->locked = $locked;
        
        return $this;
    }
    /**
     * Get nextPrintingPage value
     * @return int|null
     */
    public function getNextPrintingPage(): ?int
    {
        return $this->nextPrintingPage;
    }
    /**
     * Set nextPrintingPage value
     * @param int $nextPrintingPage
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setNextPrintingPage(?int $nextPrintingPage = null): self
    {
        // validation for constraint: int
        if (!is_null($nextPrintingPage) && !(is_int($nextPrintingPage) || ctype_digit($nextPrintingPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nextPrintingPage, true), gettype($nextPrintingPage)), __LINE__);
        }
        $this->nextPrintingPage = $nextPrintingPage;
        
        return $this;
    }
    /**
     * Get notifyEmail value
     * @return string|null
     */
    public function getNotifyEmail(): ?string
    {
        return $this->notifyEmail;
    }
    /**
     * Set notifyEmail value
     * @param string $notifyEmail
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setNotifyEmail(?string $notifyEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($notifyEmail) && !is_string($notifyEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notifyEmail, true), gettype($notifyEmail)), __LINE__);
        }
        $this->notifyEmail = $notifyEmail;
        
        return $this;
    }
    /**
     * Get printingBalance value
     * @return float|null
     */
    public function getPrintingBalance(): ?float
    {
        return $this->printingBalance;
    }
    /**
     * Set printingBalance value
     * @param float $printingBalance
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setPrintingBalance(?float $printingBalance = null): self
    {
        // validation for constraint: float
        if (!is_null($printingBalance) && !(is_float($printingBalance) || is_numeric($printingBalance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($printingBalance, true), gettype($printingBalance)), __LINE__);
        }
        $this->printingBalance = $printingBalance;
        
        return $this;
    }
    /**
     * Get receiptNoAct value
     * @return int|null
     */
    public function getReceiptNoAct(): ?int
    {
        return $this->receiptNoAct;
    }
    /**
     * Set receiptNoAct value
     * @param int $receiptNoAct
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setReceiptNoAct(?int $receiptNoAct = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptNoAct) && !(is_int($receiptNoAct) || ctype_digit($receiptNoAct))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptNoAct, true), gettype($receiptNoAct)), __LINE__);
        }
        $this->receiptNoAct = $receiptNoAct;
        
        return $this;
    }
    /**
     * Get receiptNoEnd value
     * @return int|null
     */
    public function getReceiptNoEnd(): ?int
    {
        return $this->receiptNoEnd;
    }
    /**
     * Set receiptNoEnd value
     * @param int $receiptNoEnd
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setReceiptNoEnd(?int $receiptNoEnd = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptNoEnd) && !(is_int($receiptNoEnd) || ctype_digit($receiptNoEnd))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptNoEnd, true), gettype($receiptNoEnd)), __LINE__);
        }
        $this->receiptNoEnd = $receiptNoEnd;
        
        return $this;
    }
    /**
     * Get receiptNoStart value
     * @return int|null
     */
    public function getReceiptNoStart(): ?int
    {
        return $this->receiptNoStart;
    }
    /**
     * Set receiptNoStart value
     * @param int $receiptNoStart
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setReceiptNoStart(?int $receiptNoStart = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptNoStart) && !(is_int($receiptNoStart) || ctype_digit($receiptNoStart))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptNoStart, true), gettype($receiptNoStart)), __LINE__);
        }
        $this->receiptNoStart = $receiptNoStart;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\CashBookDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
