<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankStatementAccountDTO StructType
 * @subpackage Structs
 */
class BankStatementAccountDTO extends AbstractStructBase
{
    /**
     * The accountNo
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The accountPosition
     * @var int|null
     */
    protected ?int $accountPosition = null;
    /**
     * The bankNo
     * @var string|null
     */
    protected ?string $bankNo = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The endBalance
     * @var float|null
     */
    protected ?float $endBalance = null;
    /**
     * The pageNo
     * @var string|null
     */
    protected ?string $pageNo = null;
    /**
     * The startBalance
     * @var float|null
     */
    protected ?float $startBalance = null;
    /**
     * The statementId
     * @var int|null
     */
    protected ?int $statementId = null;
    /**
     * The statementNo
     * @var string|null
     */
    protected ?string $statementNo = null;
    /**
     * Constructor method for BankStatementAccountDTO
     * @uses BankStatementAccountDTO::setAccountNo()
     * @uses BankStatementAccountDTO::setAccountPosition()
     * @uses BankStatementAccountDTO::setBankNo()
     * @uses BankStatementAccountDTO::setBookingDate()
     * @uses BankStatementAccountDTO::setCurrency()
     * @uses BankStatementAccountDTO::setEndBalance()
     * @uses BankStatementAccountDTO::setPageNo()
     * @uses BankStatementAccountDTO::setStartBalance()
     * @uses BankStatementAccountDTO::setStatementId()
     * @uses BankStatementAccountDTO::setStatementNo()
     * @param string $accountNo
     * @param int $accountPosition
     * @param string $bankNo
     * @param string $bookingDate
     * @param string $currency
     * @param float $endBalance
     * @param string $pageNo
     * @param float $startBalance
     * @param int $statementId
     * @param string $statementNo
     */
    public function __construct(?string $accountNo = null, ?int $accountPosition = null, ?string $bankNo = null, ?string $bookingDate = null, ?string $currency = null, ?float $endBalance = null, ?string $pageNo = null, ?float $startBalance = null, ?int $statementId = null, ?string $statementNo = null)
    {
        $this
            ->setAccountNo($accountNo)
            ->setAccountPosition($accountPosition)
            ->setBankNo($bankNo)
            ->setBookingDate($bookingDate)
            ->setCurrency($currency)
            ->setEndBalance($endBalance)
            ->setPageNo($pageNo)
            ->setStartBalance($startBalance)
            ->setStatementId($statementId)
            ->setStatementNo($statementNo);
    }
    /**
     * Get accountNo value
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }
    /**
     * Set accountNo value
     * @param string $accountNo
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementAccountDTO
     */
    public function setAccountNo(?string $accountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->accountNo = $accountNo;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementAccountDTO
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
     * Get bankNo value
     * @return string|null
     */
    public function getBankNo(): ?string
    {
        return $this->bankNo;
    }
    /**
     * Set bankNo value
     * @param string $bankNo
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementAccountDTO
     */
    public function setBankNo(?string $bankNo = null): self
    {
        // validation for constraint: string
        if (!is_null($bankNo) && !is_string($bankNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankNo, true), gettype($bankNo)), __LINE__);
        }
        $this->bankNo = $bankNo;
        
        return $this;
    }
    /**
     * Get bookingDate value
     * @return string|null
     */
    public function getBookingDate(): ?string
    {
        return $this->bookingDate;
    }
    /**
     * Set bookingDate value
     * @param string $bookingDate
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementAccountDTO
     */
    public function setBookingDate(?string $bookingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDate) && !is_string($bookingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDate, true), gettype($bookingDate)), __LINE__);
        }
        $this->bookingDate = $bookingDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementAccountDTO
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
     * Get endBalance value
     * @return float|null
     */
    public function getEndBalance(): ?float
    {
        return $this->endBalance;
    }
    /**
     * Set endBalance value
     * @param float $endBalance
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementAccountDTO
     */
    public function setEndBalance(?float $endBalance = null): self
    {
        // validation for constraint: float
        if (!is_null($endBalance) && !(is_float($endBalance) || is_numeric($endBalance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($endBalance, true), gettype($endBalance)), __LINE__);
        }
        $this->endBalance = $endBalance;
        
        return $this;
    }
    /**
     * Get pageNo value
     * @return string|null
     */
    public function getPageNo(): ?string
    {
        return $this->pageNo;
    }
    /**
     * Set pageNo value
     * @param string $pageNo
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementAccountDTO
     */
    public function setPageNo(?string $pageNo = null): self
    {
        // validation for constraint: string
        if (!is_null($pageNo) && !is_string($pageNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pageNo, true), gettype($pageNo)), __LINE__);
        }
        $this->pageNo = $pageNo;
        
        return $this;
    }
    /**
     * Get startBalance value
     * @return float|null
     */
    public function getStartBalance(): ?float
    {
        return $this->startBalance;
    }
    /**
     * Set startBalance value
     * @param float $startBalance
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementAccountDTO
     */
    public function setStartBalance(?float $startBalance = null): self
    {
        // validation for constraint: float
        if (!is_null($startBalance) && !(is_float($startBalance) || is_numeric($startBalance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($startBalance, true), gettype($startBalance)), __LINE__);
        }
        $this->startBalance = $startBalance;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementAccountDTO
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
     * Get statementNo value
     * @return string|null
     */
    public function getStatementNo(): ?string
    {
        return $this->statementNo;
    }
    /**
     * Set statementNo value
     * @param string $statementNo
     * @return \Pggns\MidocoApi\Order\StructType\BankStatementAccountDTO
     */
    public function setStatementNo(?string $statementNo = null): self
    {
        // validation for constraint: string
        if (!is_null($statementNo) && !is_string($statementNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statementNo, true), gettype($statementNo)), __LINE__);
        }
        $this->statementNo = $statementNo;
        
        return $this;
    }
}
