<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashBookPageInfo4Printing StructType
 * @subpackage Structs
 */
class CashBookPageInfo4Printing extends AbstractStructBase
{
    /**
     * The pageNo
     * @var string|null
     */
    protected ?string $pageNo = null;
    /**
     * The pageCounter
     * @var int|null
     */
    protected ?int $pageCounter = null;
    /**
     * The balanceStart
     * @var float|null
     */
    protected ?float $balanceStart = null;
    /**
     * The balanceEnd
     * @var float|null
     */
    protected ?float $balanceEnd = null;
    /**
     * The paymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The CashBookLineInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CashBookLineInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing[]
     */
    protected array $CashBookLineInfo4Printing = [];
    /**
     * The CashBookReceiptPosition4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CashBookReceiptPosition4Printing
     * @var \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing[]
     */
    protected array $CashBookReceiptPosition4Printing = [];
    /**
     * The cashBalanceStart
     * @var float|null
     */
    protected ?float $cashBalanceStart = null;
    /**
     * The cashBalanceEnd
     * @var float|null
     */
    protected ?float $cashBalanceEnd = null;
    /**
     * The sumExpenses
     * @var float|null
     */
    protected ?float $sumExpenses = null;
    /**
     * The sumReceipts
     * @var float|null
     */
    protected ?float $sumReceipts = null;
    /**
     * The printSum
     * @var bool|null
     */
    protected ?bool $printSum = null;
    /**
     * The currency
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * Constructor method for CashBookPageInfo4Printing
     * @uses CashBookPageInfo4Printing::setPageNo()
     * @uses CashBookPageInfo4Printing::setPageCounter()
     * @uses CashBookPageInfo4Printing::setBalanceStart()
     * @uses CashBookPageInfo4Printing::setBalanceEnd()
     * @uses CashBookPageInfo4Printing::setPaymentType()
     * @uses CashBookPageInfo4Printing::setCashBookLineInfo4Printing()
     * @uses CashBookPageInfo4Printing::setCashBookReceiptPosition4Printing()
     * @uses CashBookPageInfo4Printing::setCashBalanceStart()
     * @uses CashBookPageInfo4Printing::setCashBalanceEnd()
     * @uses CashBookPageInfo4Printing::setSumExpenses()
     * @uses CashBookPageInfo4Printing::setSumReceipts()
     * @uses CashBookPageInfo4Printing::setPrintSum()
     * @uses CashBookPageInfo4Printing::setCurrency()
     * @param string $pageNo
     * @param int $pageCounter
     * @param float $balanceStart
     * @param float $balanceEnd
     * @param string $paymentType
     * @param \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing[] $cashBookLineInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing[] $cashBookReceiptPosition4Printing
     * @param float $cashBalanceStart
     * @param float $cashBalanceEnd
     * @param float $sumExpenses
     * @param float $sumReceipts
     * @param bool $printSum
     * @param string $currency
     */
    public function __construct(?string $pageNo = null, ?int $pageCounter = null, ?float $balanceStart = null, ?float $balanceEnd = null, ?string $paymentType = null, array $cashBookLineInfo4Printing = [], array $cashBookReceiptPosition4Printing = [], ?float $cashBalanceStart = null, ?float $cashBalanceEnd = null, ?float $sumExpenses = null, ?float $sumReceipts = null, ?bool $printSum = null, ?string $currency = null)
    {
        $this
            ->setPageNo($pageNo)
            ->setPageCounter($pageCounter)
            ->setBalanceStart($balanceStart)
            ->setBalanceEnd($balanceEnd)
            ->setPaymentType($paymentType)
            ->setCashBookLineInfo4Printing($cashBookLineInfo4Printing)
            ->setCashBookReceiptPosition4Printing($cashBookReceiptPosition4Printing)
            ->setCashBalanceStart($cashBalanceStart)
            ->setCashBalanceEnd($cashBalanceEnd)
            ->setSumExpenses($sumExpenses)
            ->setSumReceipts($sumReceipts)
            ->setPrintSum($printSum)
            ->setCurrency($currency);
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
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
     * Get pageCounter value
     * @return int|null
     */
    public function getPageCounter(): ?int
    {
        return $this->pageCounter;
    }
    /**
     * Set pageCounter value
     * @param int $pageCounter
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
     */
    public function setPageCounter(?int $pageCounter = null): self
    {
        // validation for constraint: int
        if (!is_null($pageCounter) && !(is_int($pageCounter) || ctype_digit($pageCounter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageCounter, true), gettype($pageCounter)), __LINE__);
        }
        $this->pageCounter = $pageCounter;
        
        return $this;
    }
    /**
     * Get balanceStart value
     * @return float|null
     */
    public function getBalanceStart(): ?float
    {
        return $this->balanceStart;
    }
    /**
     * Set balanceStart value
     * @param float $balanceStart
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
     */
    public function setBalanceStart(?float $balanceStart = null): self
    {
        // validation for constraint: float
        if (!is_null($balanceStart) && !(is_float($balanceStart) || is_numeric($balanceStart))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($balanceStart, true), gettype($balanceStart)), __LINE__);
        }
        $this->balanceStart = $balanceStart;
        
        return $this;
    }
    /**
     * Get balanceEnd value
     * @return float|null
     */
    public function getBalanceEnd(): ?float
    {
        return $this->balanceEnd;
    }
    /**
     * Set balanceEnd value
     * @param float $balanceEnd
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
     */
    public function setBalanceEnd(?float $balanceEnd = null): self
    {
        // validation for constraint: float
        if (!is_null($balanceEnd) && !(is_float($balanceEnd) || is_numeric($balanceEnd))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($balanceEnd, true), gettype($balanceEnd)), __LINE__);
        }
        $this->balanceEnd = $balanceEnd;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get CashBookLineInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing[]
     */
    public function getCashBookLineInfo4Printing(): array
    {
        return $this->CashBookLineInfo4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setCashBookLineInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCashBookLineInfo4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCashBookLineInfo4PrintingForArrayConstraintsFromSetCashBookLineInfo4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cashBookPageInfo4PrintingCashBookLineInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$cashBookPageInfo4PrintingCashBookLineInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing) {
                $invalidValues[] = is_object($cashBookPageInfo4PrintingCashBookLineInfo4PrintingItem) ? get_class($cashBookPageInfo4PrintingCashBookLineInfo4PrintingItem) : sprintf('%s(%s)', gettype($cashBookPageInfo4PrintingCashBookLineInfo4PrintingItem), var_export($cashBookPageInfo4PrintingCashBookLineInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CashBookLineInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CashBookLineInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing[] $cashBookLineInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
     */
    public function setCashBookLineInfo4Printing(array $cashBookLineInfo4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($cashBookLineInfo4PrintingArrayErrorMessage = self::validateCashBookLineInfo4PrintingForArrayConstraintsFromSetCashBookLineInfo4Printing($cashBookLineInfo4Printing))) {
            throw new InvalidArgumentException($cashBookLineInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->CashBookLineInfo4Printing = $cashBookLineInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to CashBookLineInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
     */
    public function addToCashBookLineInfo4Printing(\Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing) {
            throw new InvalidArgumentException(sprintf('The CashBookLineInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\CashBookLineInfo4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CashBookLineInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get CashBookReceiptPosition4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing[]
     */
    public function getCashBookReceiptPosition4Printing(): array
    {
        return $this->CashBookReceiptPosition4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setCashBookReceiptPosition4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCashBookReceiptPosition4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCashBookReceiptPosition4PrintingForArrayConstraintsFromSetCashBookReceiptPosition4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cashBookPageInfo4PrintingCashBookReceiptPosition4PrintingItem) {
            // validation for constraint: itemType
            if (!$cashBookPageInfo4PrintingCashBookReceiptPosition4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing) {
                $invalidValues[] = is_object($cashBookPageInfo4PrintingCashBookReceiptPosition4PrintingItem) ? get_class($cashBookPageInfo4PrintingCashBookReceiptPosition4PrintingItem) : sprintf('%s(%s)', gettype($cashBookPageInfo4PrintingCashBookReceiptPosition4PrintingItem), var_export($cashBookPageInfo4PrintingCashBookReceiptPosition4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CashBookReceiptPosition4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CashBookReceiptPosition4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing[] $cashBookReceiptPosition4Printing
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
     */
    public function setCashBookReceiptPosition4Printing(array $cashBookReceiptPosition4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($cashBookReceiptPosition4PrintingArrayErrorMessage = self::validateCashBookReceiptPosition4PrintingForArrayConstraintsFromSetCashBookReceiptPosition4Printing($cashBookReceiptPosition4Printing))) {
            throw new InvalidArgumentException($cashBookReceiptPosition4PrintingArrayErrorMessage, __LINE__);
        }
        $this->CashBookReceiptPosition4Printing = $cashBookReceiptPosition4Printing;
        
        return $this;
    }
    /**
     * Add item to CashBookReceiptPosition4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
     */
    public function addToCashBookReceiptPosition4Printing(\Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing) {
            throw new InvalidArgumentException(sprintf('The CashBookReceiptPosition4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\CashBookReceiptPosition4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CashBookReceiptPosition4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get cashBalanceStart value
     * @return float|null
     */
    public function getCashBalanceStart(): ?float
    {
        return $this->cashBalanceStart;
    }
    /**
     * Set cashBalanceStart value
     * @param float $cashBalanceStart
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
     */
    public function setCashBalanceStart(?float $cashBalanceStart = null): self
    {
        // validation for constraint: float
        if (!is_null($cashBalanceStart) && !(is_float($cashBalanceStart) || is_numeric($cashBalanceStart))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cashBalanceStart, true), gettype($cashBalanceStart)), __LINE__);
        }
        $this->cashBalanceStart = $cashBalanceStart;
        
        return $this;
    }
    /**
     * Get cashBalanceEnd value
     * @return float|null
     */
    public function getCashBalanceEnd(): ?float
    {
        return $this->cashBalanceEnd;
    }
    /**
     * Set cashBalanceEnd value
     * @param float $cashBalanceEnd
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
     */
    public function setCashBalanceEnd(?float $cashBalanceEnd = null): self
    {
        // validation for constraint: float
        if (!is_null($cashBalanceEnd) && !(is_float($cashBalanceEnd) || is_numeric($cashBalanceEnd))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cashBalanceEnd, true), gettype($cashBalanceEnd)), __LINE__);
        }
        $this->cashBalanceEnd = $cashBalanceEnd;
        
        return $this;
    }
    /**
     * Get sumExpenses value
     * @return float|null
     */
    public function getSumExpenses(): ?float
    {
        return $this->sumExpenses;
    }
    /**
     * Set sumExpenses value
     * @param float $sumExpenses
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
     */
    public function setSumExpenses(?float $sumExpenses = null): self
    {
        // validation for constraint: float
        if (!is_null($sumExpenses) && !(is_float($sumExpenses) || is_numeric($sumExpenses))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumExpenses, true), gettype($sumExpenses)), __LINE__);
        }
        $this->sumExpenses = $sumExpenses;
        
        return $this;
    }
    /**
     * Get sumReceipts value
     * @return float|null
     */
    public function getSumReceipts(): ?float
    {
        return $this->sumReceipts;
    }
    /**
     * Set sumReceipts value
     * @param float $sumReceipts
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
     */
    public function setSumReceipts(?float $sumReceipts = null): self
    {
        // validation for constraint: float
        if (!is_null($sumReceipts) && !(is_float($sumReceipts) || is_numeric($sumReceipts))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumReceipts, true), gettype($sumReceipts)), __LINE__);
        }
        $this->sumReceipts = $sumReceipts;
        
        return $this;
    }
    /**
     * Get printSum value
     * @return bool|null
     */
    public function getPrintSum(): ?bool
    {
        return $this->printSum;
    }
    /**
     * Set printSum value
     * @param bool $printSum
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
     */
    public function setPrintSum(?bool $printSum = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printSum) && !is_bool($printSum)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printSum, true), gettype($printSum)), __LINE__);
        }
        $this->printSum = $printSum;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CashBookPageInfo4Printing
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
}
