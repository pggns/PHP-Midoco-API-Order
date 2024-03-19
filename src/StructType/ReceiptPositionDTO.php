<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiptPositionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ReceiptPositionDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The articleType
     * @var string|null
     */
    protected ?string $articleType = null;
    /**
     * The bookingText
     * @var string|null
     */
    protected ?string $bookingText = null;
    /**
     * The cashBookLine
     * @var int|null
     */
    protected ?int $cashBookLine = null;
    /**
     * The cashBookPage
     * @var int|null
     */
    protected ?int $cashBookPage = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The itemCode
     * @var string|null
     */
    protected ?string $itemCode = null;
    /**
     * The journalId
     * @var int|null
     */
    protected ?int $journalId = null;
    /**
     * The manuallyAdjustable
     * @var bool|null
     */
    protected ?bool $manuallyAdjustable = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
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
     * The originalVatAmount
     * @var float|null
     */
    protected ?float $originalVatAmount = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The receiptId
     * @var int|null
     */
    protected ?int $receiptId = null;
    /**
     * The referenceNo
     * @var string|null
     */
    protected ?string $referenceNo = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for ReceiptPositionDTO
     * @uses ReceiptPositionDTO::setAccountId()
     * @uses ReceiptPositionDTO::setAmount()
     * @uses ReceiptPositionDTO::setArticleType()
     * @uses ReceiptPositionDTO::setBookingText()
     * @uses ReceiptPositionDTO::setCashBookLine()
     * @uses ReceiptPositionDTO::setCashBookPage()
     * @uses ReceiptPositionDTO::setCostCentre()
     * @uses ReceiptPositionDTO::setCurrency()
     * @uses ReceiptPositionDTO::setItemCode()
     * @uses ReceiptPositionDTO::setJournalId()
     * @uses ReceiptPositionDTO::setManuallyAdjustable()
     * @uses ReceiptPositionDTO::setOrderId()
     * @uses ReceiptPositionDTO::setOriginalAmount()
     * @uses ReceiptPositionDTO::setOriginalCurrency()
     * @uses ReceiptPositionDTO::setOriginalVatAmount()
     * @uses ReceiptPositionDTO::setPosition()
     * @uses ReceiptPositionDTO::setReceiptId()
     * @uses ReceiptPositionDTO::setReferenceNo()
     * @uses ReceiptPositionDTO::setVatAmount()
     * @uses ReceiptPositionDTO::setVatPercent()
     * @param string $accountId
     * @param float $amount
     * @param string $articleType
     * @param string $bookingText
     * @param int $cashBookLine
     * @param int $cashBookPage
     * @param string $costCentre
     * @param string $currency
     * @param string $itemCode
     * @param int $journalId
     * @param bool $manuallyAdjustable
     * @param int $orderId
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param float $originalVatAmount
     * @param int $position
     * @param int $receiptId
     * @param string $referenceNo
     * @param float $vatAmount
     * @param float $vatPercent
     */
    public function __construct(?string $accountId = null, ?float $amount = null, ?string $articleType = null, ?string $bookingText = null, ?int $cashBookLine = null, ?int $cashBookPage = null, ?string $costCentre = null, ?string $currency = null, ?string $itemCode = null, ?int $journalId = null, ?bool $manuallyAdjustable = null, ?int $orderId = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?float $originalVatAmount = null, ?int $position = null, ?int $receiptId = null, ?string $referenceNo = null, ?float $vatAmount = null, ?float $vatPercent = null)
    {
        $this
            ->setAccountId($accountId)
            ->setAmount($amount)
            ->setArticleType($articleType)
            ->setBookingText($bookingText)
            ->setCashBookLine($cashBookLine)
            ->setCashBookPage($cashBookPage)
            ->setCostCentre($costCentre)
            ->setCurrency($currency)
            ->setItemCode($itemCode)
            ->setJournalId($journalId)
            ->setManuallyAdjustable($manuallyAdjustable)
            ->setOrderId($orderId)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setOriginalVatAmount($originalVatAmount)
            ->setPosition($position)
            ->setReceiptId($receiptId)
            ->setReferenceNo($referenceNo)
            ->setVatAmount($vatAmount)
            ->setVatPercent($vatPercent);
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
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
     * Get articleType value
     * @return string|null
     */
    public function getArticleType(): ?string
    {
        return $this->articleType;
    }
    /**
     * Set articleType value
     * @param string $articleType
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setArticleType(?string $articleType = null): self
    {
        // validation for constraint: string
        if (!is_null($articleType) && !is_string($articleType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($articleType, true), gettype($articleType)), __LINE__);
        }
        $this->articleType = $articleType;
        
        return $this;
    }
    /**
     * Get bookingText value
     * @return string|null
     */
    public function getBookingText(): ?string
    {
        return $this->bookingText;
    }
    /**
     * Set bookingText value
     * @param string $bookingText
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setBookingText(?string $bookingText = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingText) && !is_string($bookingText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingText, true), gettype($bookingText)), __LINE__);
        }
        $this->bookingText = $bookingText;
        
        return $this;
    }
    /**
     * Get cashBookLine value
     * @return int|null
     */
    public function getCashBookLine(): ?int
    {
        return $this->cashBookLine;
    }
    /**
     * Set cashBookLine value
     * @param int $cashBookLine
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setCashBookLine(?int $cashBookLine = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBookLine) && !(is_int($cashBookLine) || ctype_digit($cashBookLine))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookLine, true), gettype($cashBookLine)), __LINE__);
        }
        $this->cashBookLine = $cashBookLine;
        
        return $this;
    }
    /**
     * Get cashBookPage value
     * @return int|null
     */
    public function getCashBookPage(): ?int
    {
        return $this->cashBookPage;
    }
    /**
     * Set cashBookPage value
     * @param int $cashBookPage
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setCashBookPage(?int $cashBookPage = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBookPage) && !(is_int($cashBookPage) || ctype_digit($cashBookPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBookPage, true), gettype($cashBookPage)), __LINE__);
        }
        $this->cashBookPage = $cashBookPage;
        
        return $this;
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
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
     * Get itemCode value
     * @return string|null
     */
    public function getItemCode(): ?string
    {
        return $this->itemCode;
    }
    /**
     * Set itemCode value
     * @param string $itemCode
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setItemCode(?string $itemCode = null): self
    {
        // validation for constraint: string
        if (!is_null($itemCode) && !is_string($itemCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemCode, true), gettype($itemCode)), __LINE__);
        }
        $this->itemCode = $itemCode;
        
        return $this;
    }
    /**
     * Get journalId value
     * @return int|null
     */
    public function getJournalId(): ?int
    {
        return $this->journalId;
    }
    /**
     * Set journalId value
     * @param int $journalId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setJournalId(?int $journalId = null): self
    {
        // validation for constraint: int
        if (!is_null($journalId) && !(is_int($journalId) || ctype_digit($journalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($journalId, true), gettype($journalId)), __LINE__);
        }
        $this->journalId = $journalId;
        
        return $this;
    }
    /**
     * Get manuallyAdjustable value
     * @return bool|null
     */
    public function getManuallyAdjustable(): ?bool
    {
        return $this->manuallyAdjustable;
    }
    /**
     * Set manuallyAdjustable value
     * @param bool $manuallyAdjustable
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setManuallyAdjustable(?bool $manuallyAdjustable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($manuallyAdjustable) && !is_bool($manuallyAdjustable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manuallyAdjustable, true), gettype($manuallyAdjustable)), __LINE__);
        }
        $this->manuallyAdjustable = $manuallyAdjustable;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
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
     * Get originalVatAmount value
     * @return float|null
     */
    public function getOriginalVatAmount(): ?float
    {
        return $this->originalVatAmount;
    }
    /**
     * Set originalVatAmount value
     * @param float $originalVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setOriginalVatAmount(?float $originalVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalVatAmount) && !(is_float($originalVatAmount) || is_numeric($originalVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalVatAmount, true), gettype($originalVatAmount)), __LINE__);
        }
        $this->originalVatAmount = $originalVatAmount;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get receiptId value
     * @return int|null
     */
    public function getReceiptId(): ?int
    {
        return $this->receiptId;
    }
    /**
     * Set receiptId value
     * @param int $receiptId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setReceiptId(?int $receiptId = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptId) && !(is_int($receiptId) || ctype_digit($receiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptId, true), gettype($receiptId)), __LINE__);
        }
        $this->receiptId = $receiptId;
        
        return $this;
    }
    /**
     * Get referenceNo value
     * @return string|null
     */
    public function getReferenceNo(): ?string
    {
        return $this->referenceNo;
    }
    /**
     * Set referenceNo value
     * @param string $referenceNo
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setReferenceNo(?string $referenceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceNo) && !is_string($referenceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceNo, true), gettype($referenceNo)), __LINE__);
        }
        $this->referenceNo = $referenceNo;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositionDTO
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
        return $this;
    }
}
