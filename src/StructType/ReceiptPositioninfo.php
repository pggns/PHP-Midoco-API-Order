<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiptPositioninfo StructType
 * @subpackage Structs
 */
class ReceiptPositioninfo extends AbstractStructBase
{
    /**
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
    /**
     * The itemCode
     * @var string|null
     */
    protected ?string $itemCode = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
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
     * The bookingText
     * @var string|null
     */
    protected ?string $bookingText = null;
    /**
     * The referenceNo
     * @var string|null
     */
    protected ?string $referenceNo = null;
    /**
     * The orderid
     * @var int|null
     */
    protected ?int $orderid = null;
    /**
     * The manuallyAdjustable
     * @var bool|null
     */
    protected ?bool $manuallyAdjustable = null;
    /**
     * The isExpense
     * @var bool|null
     */
    protected ?bool $isExpense = null;
    /**
     * The originalAmount
     * @var float|null
     */
    protected ?float $originalAmount = null;
    /**
     * The originalVatAmount
     * @var float|null
     */
    protected ?float $originalVatAmount = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The articleType
     * @var string|null
     */
    protected ?string $articleType = null;
    /**
     * The generateVoucher
     * @var bool|null
     */
    protected ?bool $generateVoucher = null;
    /**
     * Constructor method for ReceiptPositioninfo
     * @uses ReceiptPositioninfo::setPositionNo()
     * @uses ReceiptPositioninfo::setItemCode()
     * @uses ReceiptPositioninfo::setAmount()
     * @uses ReceiptPositioninfo::setAccountId()
     * @uses ReceiptPositioninfo::setVatCode()
     * @uses ReceiptPositioninfo::setVatAmount()
     * @uses ReceiptPositioninfo::setVatPercent()
     * @uses ReceiptPositioninfo::setBookingText()
     * @uses ReceiptPositioninfo::setReferenceNo()
     * @uses ReceiptPositioninfo::setOrderid()
     * @uses ReceiptPositioninfo::setManuallyAdjustable()
     * @uses ReceiptPositioninfo::setIsExpense()
     * @uses ReceiptPositioninfo::setOriginalAmount()
     * @uses ReceiptPositioninfo::setOriginalVatAmount()
     * @uses ReceiptPositioninfo::setOriginalCurrency()
     * @uses ReceiptPositioninfo::setArticleType()
     * @uses ReceiptPositioninfo::setGenerateVoucher()
     * @param int $positionNo
     * @param string $itemCode
     * @param float $amount
     * @param string $accountId
     * @param string $vatCode
     * @param float $vatAmount
     * @param float $vatPercent
     * @param string $bookingText
     * @param string $referenceNo
     * @param int $orderid
     * @param bool $manuallyAdjustable
     * @param bool $isExpense
     * @param float $originalAmount
     * @param float $originalVatAmount
     * @param string $originalCurrency
     * @param string $articleType
     * @param bool $generateVoucher
     */
    public function __construct(?int $positionNo = null, ?string $itemCode = null, ?float $amount = null, ?string $accountId = null, ?string $vatCode = null, ?float $vatAmount = null, ?float $vatPercent = null, ?string $bookingText = null, ?string $referenceNo = null, ?int $orderid = null, ?bool $manuallyAdjustable = null, ?bool $isExpense = null, ?float $originalAmount = null, ?float $originalVatAmount = null, ?string $originalCurrency = null, ?string $articleType = null, ?bool $generateVoucher = null)
    {
        $this
            ->setPositionNo($positionNo)
            ->setItemCode($itemCode)
            ->setAmount($amount)
            ->setAccountId($accountId)
            ->setVatCode($vatCode)
            ->setVatAmount($vatAmount)
            ->setVatPercent($vatPercent)
            ->setBookingText($bookingText)
            ->setReferenceNo($referenceNo)
            ->setOrderid($orderid)
            ->setManuallyAdjustable($manuallyAdjustable)
            ->setIsExpense($isExpense)
            ->setOriginalAmount($originalAmount)
            ->setOriginalVatAmount($originalVatAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setArticleType($articleType)
            ->setGenerateVoucher($generateVoucher);
    }
    /**
     * Get positionNo value
     * @return int|null
     */
    public function getPositionNo(): ?int
    {
        return $this->positionNo;
    }
    /**
     * Set positionNo value
     * @param int $positionNo
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
     */
    public function setPositionNo(?int $positionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($positionNo) && !(is_int($positionNo) || ctype_digit($positionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionNo, true), gettype($positionNo)), __LINE__);
        }
        $this->positionNo = $positionNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
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
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
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
     * Get orderid value
     * @return int|null
     */
    public function getOrderid(): ?int
    {
        return $this->orderid;
    }
    /**
     * Set orderid value
     * @param int $orderid
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
     */
    public function setOrderid(?int $orderid = null): self
    {
        // validation for constraint: int
        if (!is_null($orderid) && !(is_int($orderid) || ctype_digit($orderid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderid, true), gettype($orderid)), __LINE__);
        }
        $this->orderid = $orderid;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
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
     * Get isExpense value
     * @return bool|null
     */
    public function getIsExpense(): ?bool
    {
        return $this->isExpense;
    }
    /**
     * Set isExpense value
     * @param bool $isExpense
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
     */
    public function setIsExpense(?bool $isExpense = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExpense) && !is_bool($isExpense)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExpense, true), gettype($isExpense)), __LINE__);
        }
        $this->isExpense = $isExpense;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
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
     * Get generateVoucher value
     * @return bool|null
     */
    public function getGenerateVoucher(): ?bool
    {
        return $this->generateVoucher;
    }
    /**
     * Set generateVoucher value
     * @param bool $generateVoucher
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo
     */
    public function setGenerateVoucher(?bool $generateVoucher = null): self
    {
        // validation for constraint: boolean
        if (!is_null($generateVoucher) && !is_bool($generateVoucher)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($generateVoucher, true), gettype($generateVoucher)), __LINE__);
        }
        $this->generateVoucher = $generateVoucher;
        
        return $this;
    }
}
