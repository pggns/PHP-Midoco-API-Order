<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingPositionInfoType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoBillingPositionInfoType extends AbstractStructBase
{
    /**
     * The MidocoOnlinePaymentTransaction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOnlinePaymentTransaction
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $MidocoOnlinePaymentTransaction = null;
    /**
     * The MidocoMilesAndMoreBurnTransaction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMilesAndMoreBurnTransaction
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $MidocoMilesAndMoreBurnTransaction = null;
    /**
     * The ccError
     * @var int|null
     */
    protected ?int $ccError = null;
    /**
     * The positionId
     * @var int|null
     */
    protected ?int $positionId = null;
    /**
     * The transactionId
     * @var int|null
     */
    protected ?int $transactionId = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The voidPositionId
     * @var int|null
     */
    protected ?int $voidPositionId = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The referenceNo
     * @var string|null
     */
    protected ?string $referenceNo = null;
    /**
     * The noOfItems
     * @var int|null
     */
    protected ?int $noOfItems = null;
    /**
     * The singlePrice
     * @var float|null
     */
    protected ?float $singlePrice = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The originalPrice
     * @var float|null
     */
    protected ?float $originalPrice = null;
    /**
     * The isPackage
     * @var bool|null
     */
    protected ?bool $isPackage = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The orderNo
     * @var string|null
     */
    protected ?string $orderNo = null;
    /**
     * The documentCode
     * @var string|null
     */
    protected ?string $documentCode = null;
    /**
     * The commissionPercent
     * @var float|null
     */
    protected ?float $commissionPercent = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The originalVatAmount
     * @var float|null
     */
    protected ?float $originalVatAmount = null;
    /**
     * The vat2percent
     * @var float|null
     */
    protected ?float $vat2percent = null;
    /**
     * The vat2base
     * @var float|null
     */
    protected ?float $vat2base = null;
    /**
     * The vat2amount
     * @var float|null
     */
    protected ?float $vat2amount = null;
    /**
     * The originalVat2amount
     * @var float|null
     */
    protected ?float $originalVat2amount = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The documentNo
     * @var int|null
     */
    protected ?int $documentNo = null;
    /**
     * The packageCode
     * @var string|null
     */
    protected ?string $packageCode = null;
    /**
     * The calculatedPrintDate
     * @var string|null
     */
    protected ?string $calculatedPrintDate = null;
    /**
     * The isPayment
     * @var bool|null
     */
    protected ?bool $isPayment = null;
    /**
     * The paymentPositionId
     * @var int|null
     */
    protected ?int $paymentPositionId = null;
    /**
     * Constructor method for MidocoBillingPositionInfoType
     * @uses MidocoBillingPositionInfoType::setMidocoOnlinePaymentTransaction()
     * @uses MidocoBillingPositionInfoType::setMidocoMilesAndMoreBurnTransaction()
     * @uses MidocoBillingPositionInfoType::setCcError()
     * @uses MidocoBillingPositionInfoType::setPositionId()
     * @uses MidocoBillingPositionInfoType::setTransactionId()
     * @uses MidocoBillingPositionInfoType::setDocumentId()
     * @uses MidocoBillingPositionInfoType::setItemId()
     * @uses MidocoBillingPositionInfoType::setVoidPositionId()
     * @uses MidocoBillingPositionInfoType::setPosition()
     * @uses MidocoBillingPositionInfoType::setAccountId()
     * @uses MidocoBillingPositionInfoType::setDescription()
     * @uses MidocoBillingPositionInfoType::setReferenceNo()
     * @uses MidocoBillingPositionInfoType::setNoOfItems()
     * @uses MidocoBillingPositionInfoType::setSinglePrice()
     * @uses MidocoBillingPositionInfoType::setCurrency()
     * @uses MidocoBillingPositionInfoType::setOriginalCurrency()
     * @uses MidocoBillingPositionInfoType::setPrice()
     * @uses MidocoBillingPositionInfoType::setOriginalPrice()
     * @uses MidocoBillingPositionInfoType::setIsPackage()
     * @uses MidocoBillingPositionInfoType::setDestinationCode()
     * @uses MidocoBillingPositionInfoType::setCostCentre()
     * @uses MidocoBillingPositionInfoType::setOrderNo()
     * @uses MidocoBillingPositionInfoType::setDocumentCode()
     * @uses MidocoBillingPositionInfoType::setCommissionPercent()
     * @uses MidocoBillingPositionInfoType::setVatPercent()
     * @uses MidocoBillingPositionInfoType::setVatAmount()
     * @uses MidocoBillingPositionInfoType::setOriginalVatAmount()
     * @uses MidocoBillingPositionInfoType::setVat2percent()
     * @uses MidocoBillingPositionInfoType::setVat2base()
     * @uses MidocoBillingPositionInfoType::setVat2amount()
     * @uses MidocoBillingPositionInfoType::setOriginalVat2amount()
     * @uses MidocoBillingPositionInfoType::setOrderId()
     * @uses MidocoBillingPositionInfoType::setSupplierId()
     * @uses MidocoBillingPositionInfoType::setBookingId()
     * @uses MidocoBillingPositionInfoType::setDocumentNo()
     * @uses MidocoBillingPositionInfoType::setPackageCode()
     * @uses MidocoBillingPositionInfoType::setCalculatedPrintDate()
     * @uses MidocoBillingPositionInfoType::setIsPayment()
     * @uses MidocoBillingPositionInfoType::setPaymentPositionId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $midocoMilesAndMoreBurnTransaction
     * @param int $ccError
     * @param int $positionId
     * @param int $transactionId
     * @param int $documentId
     * @param int $itemId
     * @param int $voidPositionId
     * @param int $position
     * @param string $accountId
     * @param string $description
     * @param string $referenceNo
     * @param int $noOfItems
     * @param float $singlePrice
     * @param string $currency
     * @param string $originalCurrency
     * @param float $price
     * @param float $originalPrice
     * @param bool $isPackage
     * @param string $destinationCode
     * @param string $costCentre
     * @param string $orderNo
     * @param string $documentCode
     * @param float $commissionPercent
     * @param float $vatPercent
     * @param float $vatAmount
     * @param float $originalVatAmount
     * @param float $vat2percent
     * @param float $vat2base
     * @param float $vat2amount
     * @param float $originalVat2amount
     * @param int $orderId
     * @param string $supplierId
     * @param string $bookingId
     * @param int $documentNo
     * @param string $packageCode
     * @param string $calculatedPrintDate
     * @param bool $isPayment
     * @param int $paymentPositionId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction = null, ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $midocoMilesAndMoreBurnTransaction = null, ?int $ccError = null, ?int $positionId = null, ?int $transactionId = null, ?int $documentId = null, ?int $itemId = null, ?int $voidPositionId = null, ?int $position = null, ?string $accountId = null, ?string $description = null, ?string $referenceNo = null, ?int $noOfItems = null, ?float $singlePrice = null, ?string $currency = null, ?string $originalCurrency = null, ?float $price = null, ?float $originalPrice = null, ?bool $isPackage = null, ?string $destinationCode = null, ?string $costCentre = null, ?string $orderNo = null, ?string $documentCode = null, ?float $commissionPercent = null, ?float $vatPercent = null, ?float $vatAmount = null, ?float $originalVatAmount = null, ?float $vat2percent = null, ?float $vat2base = null, ?float $vat2amount = null, ?float $originalVat2amount = null, ?int $orderId = null, ?string $supplierId = null, ?string $bookingId = null, ?int $documentNo = null, ?string $packageCode = null, ?string $calculatedPrintDate = null, ?bool $isPayment = null, ?int $paymentPositionId = null)
    {
        $this
            ->setMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction)
            ->setMidocoMilesAndMoreBurnTransaction($midocoMilesAndMoreBurnTransaction)
            ->setCcError($ccError)
            ->setPositionId($positionId)
            ->setTransactionId($transactionId)
            ->setDocumentId($documentId)
            ->setItemId($itemId)
            ->setVoidPositionId($voidPositionId)
            ->setPosition($position)
            ->setAccountId($accountId)
            ->setDescription($description)
            ->setReferenceNo($referenceNo)
            ->setNoOfItems($noOfItems)
            ->setSinglePrice($singlePrice)
            ->setCurrency($currency)
            ->setOriginalCurrency($originalCurrency)
            ->setPrice($price)
            ->setOriginalPrice($originalPrice)
            ->setIsPackage($isPackage)
            ->setDestinationCode($destinationCode)
            ->setCostCentre($costCentre)
            ->setOrderNo($orderNo)
            ->setDocumentCode($documentCode)
            ->setCommissionPercent($commissionPercent)
            ->setVatPercent($vatPercent)
            ->setVatAmount($vatAmount)
            ->setOriginalVatAmount($originalVatAmount)
            ->setVat2percent($vat2percent)
            ->setVat2base($vat2base)
            ->setVat2amount($vat2amount)
            ->setOriginalVat2amount($originalVat2amount)
            ->setOrderId($orderId)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setDocumentNo($documentNo)
            ->setPackageCode($packageCode)
            ->setCalculatedPrintDate($calculatedPrintDate)
            ->setIsPayment($isPayment)
            ->setPaymentPositionId($paymentPositionId);
    }
    /**
     * Get MidocoOnlinePaymentTransaction value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction|null
     */
    public function getMidocoOnlinePaymentTransaction(): ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction
    {
        return $this->MidocoOnlinePaymentTransaction;
    }
    /**
     * Set MidocoOnlinePaymentTransaction value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setMidocoOnlinePaymentTransaction(?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction = null): self
    {
        $this->MidocoOnlinePaymentTransaction = $midocoOnlinePaymentTransaction;
        
        return $this;
    }
    /**
     * Get MidocoMilesAndMoreBurnTransaction value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType|null
     */
    public function getMidocoMilesAndMoreBurnTransaction(): ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType
    {
        return $this->MidocoMilesAndMoreBurnTransaction;
    }
    /**
     * Set MidocoMilesAndMoreBurnTransaction value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $midocoMilesAndMoreBurnTransaction
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setMidocoMilesAndMoreBurnTransaction(?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $midocoMilesAndMoreBurnTransaction = null): self
    {
        $this->MidocoMilesAndMoreBurnTransaction = $midocoMilesAndMoreBurnTransaction;
        
        return $this;
    }
    /**
     * Get ccError value
     * @return int|null
     */
    public function getCcError(): ?int
    {
        return $this->ccError;
    }
    /**
     * Set ccError value
     * @param int $ccError
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setCcError(?int $ccError = null): self
    {
        // validation for constraint: int
        if (!is_null($ccError) && !(is_int($ccError) || ctype_digit($ccError))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccError, true), gettype($ccError)), __LINE__);
        }
        $this->ccError = $ccError;
        
        return $this;
    }
    /**
     * Get positionId value
     * @return int|null
     */
    public function getPositionId(): ?int
    {
        return $this->positionId;
    }
    /**
     * Set positionId value
     * @param int $positionId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setPositionId(?int $positionId = null): self
    {
        // validation for constraint: int
        if (!is_null($positionId) && !(is_int($positionId) || ctype_digit($positionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionId, true), gettype($positionId)), __LINE__);
        }
        $this->positionId = $positionId;
        
        return $this;
    }
    /**
     * Get transactionId value
     * @return int|null
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param int $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setTransactionId(?int $transactionId = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionId) && !(is_int($transactionId) || ctype_digit($transactionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get voidPositionId value
     * @return int|null
     */
    public function getVoidPositionId(): ?int
    {
        return $this->voidPositionId;
    }
    /**
     * Set voidPositionId value
     * @param int $voidPositionId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setVoidPositionId(?int $voidPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($voidPositionId) && !(is_int($voidPositionId) || ctype_digit($voidPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voidPositionId, true), gettype($voidPositionId)), __LINE__);
        }
        $this->voidPositionId = $voidPositionId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
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
     * Get noOfItems value
     * @return int|null
     */
    public function getNoOfItems(): ?int
    {
        return $this->noOfItems;
    }
    /**
     * Set noOfItems value
     * @param int $noOfItems
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setNoOfItems(?int $noOfItems = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfItems) && !(is_int($noOfItems) || ctype_digit($noOfItems))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfItems, true), gettype($noOfItems)), __LINE__);
        }
        $this->noOfItems = $noOfItems;
        
        return $this;
    }
    /**
     * Get singlePrice value
     * @return float|null
     */
    public function getSinglePrice(): ?float
    {
        return $this->singlePrice;
    }
    /**
     * Set singlePrice value
     * @param float $singlePrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setSinglePrice(?float $singlePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($singlePrice) && !(is_float($singlePrice) || is_numeric($singlePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($singlePrice, true), gettype($singlePrice)), __LINE__);
        }
        $this->singlePrice = $singlePrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
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
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get originalPrice value
     * @return float|null
     */
    public function getOriginalPrice(): ?float
    {
        return $this->originalPrice;
    }
    /**
     * Set originalPrice value
     * @param float $originalPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setOriginalPrice(?float $originalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($originalPrice) && !(is_float($originalPrice) || is_numeric($originalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalPrice, true), gettype($originalPrice)), __LINE__);
        }
        $this->originalPrice = $originalPrice;
        
        return $this;
    }
    /**
     * Get isPackage value
     * @return bool|null
     */
    public function getIsPackage(): ?bool
    {
        return $this->isPackage;
    }
    /**
     * Set isPackage value
     * @param bool $isPackage
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setIsPackage(?bool $isPackage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPackage) && !is_bool($isPackage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPackage, true), gettype($isPackage)), __LINE__);
        }
        $this->isPackage = $isPackage;
        
        return $this;
    }
    /**
     * Get destinationCode value
     * @return string|null
     */
    public function getDestinationCode(): ?string
    {
        return $this->destinationCode;
    }
    /**
     * Set destinationCode value
     * @param string $destinationCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setDestinationCode(?string $destinationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationCode) && !is_string($destinationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationCode, true), gettype($destinationCode)), __LINE__);
        }
        $this->destinationCode = $destinationCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
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
     * Get orderNo value
     * @return string|null
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param string $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setOrderNo(?string $orderNo = null): self
    {
        // validation for constraint: string
        if (!is_null($orderNo) && !is_string($orderNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get documentCode value
     * @return string|null
     */
    public function getDocumentCode(): ?string
    {
        return $this->documentCode;
    }
    /**
     * Set documentCode value
     * @param string $documentCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setDocumentCode(?string $documentCode = null): self
    {
        // validation for constraint: string
        if (!is_null($documentCode) && !is_string($documentCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentCode, true), gettype($documentCode)), __LINE__);
        }
        $this->documentCode = $documentCode;
        
        return $this;
    }
    /**
     * Get commissionPercent value
     * @return float|null
     */
    public function getCommissionPercent(): ?float
    {
        return $this->commissionPercent;
    }
    /**
     * Set commissionPercent value
     * @param float $commissionPercent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setCommissionPercent(?float $commissionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionPercent) && !(is_float($commissionPercent) || is_numeric($commissionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionPercent, true), gettype($commissionPercent)), __LINE__);
        }
        $this->commissionPercent = $commissionPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
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
     * Get vat2percent value
     * @return float|null
     */
    public function getVat2percent(): ?float
    {
        return $this->vat2percent;
    }
    /**
     * Set vat2percent value
     * @param float $vat2percent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setVat2percent(?float $vat2percent = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2percent) && !(is_float($vat2percent) || is_numeric($vat2percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2percent, true), gettype($vat2percent)), __LINE__);
        }
        $this->vat2percent = $vat2percent;
        
        return $this;
    }
    /**
     * Get vat2base value
     * @return float|null
     */
    public function getVat2base(): ?float
    {
        return $this->vat2base;
    }
    /**
     * Set vat2base value
     * @param float $vat2base
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setVat2base(?float $vat2base = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2base) && !(is_float($vat2base) || is_numeric($vat2base))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2base, true), gettype($vat2base)), __LINE__);
        }
        $this->vat2base = $vat2base;
        
        return $this;
    }
    /**
     * Get vat2amount value
     * @return float|null
     */
    public function getVat2amount(): ?float
    {
        return $this->vat2amount;
    }
    /**
     * Set vat2amount value
     * @param float $vat2amount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setVat2amount(?float $vat2amount = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2amount) && !(is_float($vat2amount) || is_numeric($vat2amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2amount, true), gettype($vat2amount)), __LINE__);
        }
        $this->vat2amount = $vat2amount;
        
        return $this;
    }
    /**
     * Get originalVat2amount value
     * @return float|null
     */
    public function getOriginalVat2amount(): ?float
    {
        return $this->originalVat2amount;
    }
    /**
     * Set originalVat2amount value
     * @param float $originalVat2amount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setOriginalVat2amount(?float $originalVat2amount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalVat2amount) && !(is_float($originalVat2amount) || is_numeric($originalVat2amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalVat2amount, true), gettype($originalVat2amount)), __LINE__);
        }
        $this->originalVat2amount = $originalVat2amount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
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
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get documentNo value
     * @return int|null
     */
    public function getDocumentNo(): ?int
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param int $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setDocumentNo(?int $documentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($documentNo) && !(is_int($documentNo) || ctype_digit($documentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get packageCode value
     * @return string|null
     */
    public function getPackageCode(): ?string
    {
        return $this->packageCode;
    }
    /**
     * Set packageCode value
     * @param string $packageCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setPackageCode(?string $packageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($packageCode) && !is_string($packageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageCode, true), gettype($packageCode)), __LINE__);
        }
        $this->packageCode = $packageCode;
        
        return $this;
    }
    /**
     * Get calculatedPrintDate value
     * @return string|null
     */
    public function getCalculatedPrintDate(): ?string
    {
        return $this->calculatedPrintDate;
    }
    /**
     * Set calculatedPrintDate value
     * @param string $calculatedPrintDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setCalculatedPrintDate(?string $calculatedPrintDate = null): self
    {
        // validation for constraint: string
        if (!is_null($calculatedPrintDate) && !is_string($calculatedPrintDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calculatedPrintDate, true), gettype($calculatedPrintDate)), __LINE__);
        }
        $this->calculatedPrintDate = $calculatedPrintDate;
        
        return $this;
    }
    /**
     * Get isPayment value
     * @return bool|null
     */
    public function getIsPayment(): ?bool
    {
        return $this->isPayment;
    }
    /**
     * Set isPayment value
     * @param bool $isPayment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setIsPayment(?bool $isPayment = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPayment) && !is_bool($isPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPayment, true), gettype($isPayment)), __LINE__);
        }
        $this->isPayment = $isPayment;
        
        return $this;
    }
    /**
     * Get paymentPositionId value
     * @return int|null
     */
    public function getPaymentPositionId(): ?int
    {
        return $this->paymentPositionId;
    }
    /**
     * Set paymentPositionId value
     * @param int $paymentPositionId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionInfoType
     */
    public function setPaymentPositionId(?int $paymentPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($paymentPositionId) && !(is_int($paymentPositionId) || ctype_digit($paymentPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($paymentPositionId, true), gettype($paymentPositionId)), __LINE__);
        }
        $this->paymentPositionId = $paymentPositionId;
        
        return $this;
    }
}
