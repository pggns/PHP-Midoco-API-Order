<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoReceiptInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoReceiptInfo extends AbstractStructBase
{
    /**
     * The ReceiptPositioninfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo[]
     */
    protected ?array $ReceiptPositioninfo = null;
    /**
     * The ReceiptOnlinePaymentInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ReceiptOnlinePaymentInfo
     * @var \Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo $ReceiptOnlinePaymentInfo = null;
    /**
     * The MidocoDebitInfoForReceipt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoDebitInfoForReceipt
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt $MidocoDebitInfoForReceipt = null;
    /**
     * The MidocoAdditionalInfoForReceipt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdditionalInfoForReceipt
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAdditionalInfoForReceipt[]
     */
    protected ?array $MidocoAdditionalInfoForReceipt = null;
    /**
     * The cashBookId
     * @var int|null
     */
    protected ?int $cashBookId = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The streetNo
     * @var string|null
     */
    protected ?string $streetNo = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * The originalTotalAmount
     * @var float|null
     */
    protected ?float $originalTotalAmount = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The voucherNo
     * @var string|null
     */
    protected ?string $voucherNo = null;
    /**
     * The voucherItemCode
     * @var string|null
     */
    protected ?string $voucherItemCode = null;
    /**
     * The miscPaymentAccountID
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $miscPaymentAccountID = null;
    /**
     * The miscPaymentRefNo
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $miscPaymentRefNo = null;
    /**
     * Constructor method for MidocoReceiptInfo
     * @uses MidocoReceiptInfo::setReceiptPositioninfo()
     * @uses MidocoReceiptInfo::setReceiptOnlinePaymentInfo()
     * @uses MidocoReceiptInfo::setMidocoDebitInfoForReceipt()
     * @uses MidocoReceiptInfo::setMidocoAdditionalInfoForReceipt()
     * @uses MidocoReceiptInfo::setCashBookId()
     * @uses MidocoReceiptInfo::setPaymentType()
     * @uses MidocoReceiptInfo::setCustomerId()
     * @uses MidocoReceiptInfo::setForename()
     * @uses MidocoReceiptInfo::setName()
     * @uses MidocoReceiptInfo::setStreet()
     * @uses MidocoReceiptInfo::setStreetNo()
     * @uses MidocoReceiptInfo::setCountry()
     * @uses MidocoReceiptInfo::setPostalCode()
     * @uses MidocoReceiptInfo::setCity()
     * @uses MidocoReceiptInfo::setTotalAmount()
     * @uses MidocoReceiptInfo::setOriginalTotalAmount()
     * @uses MidocoReceiptInfo::setOriginalCurrency()
     * @uses MidocoReceiptInfo::setReceiptDate()
     * @uses MidocoReceiptInfo::setVoucherNo()
     * @uses MidocoReceiptInfo::setVoucherItemCode()
     * @uses MidocoReceiptInfo::setMiscPaymentAccountID()
     * @uses MidocoReceiptInfo::setMiscPaymentRefNo()
     * @param \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo[] $receiptPositioninfo
     * @param \Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo $receiptOnlinePaymentInfo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt $midocoDebitInfoForReceipt
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdditionalInfoForReceipt[] $midocoAdditionalInfoForReceipt
     * @param int $cashBookId
     * @param string $paymentType
     * @param int $customerId
     * @param string $forename
     * @param string $name
     * @param string $street
     * @param string $streetNo
     * @param string $country
     * @param string $postalCode
     * @param string $city
     * @param float $totalAmount
     * @param float $originalTotalAmount
     * @param string $originalCurrency
     * @param string $receiptDate
     * @param string $voucherNo
     * @param string $voucherItemCode
     * @param string $miscPaymentAccountID
     * @param string $miscPaymentRefNo
     */
    public function __construct(?array $receiptPositioninfo = null, ?\Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo $receiptOnlinePaymentInfo = null, ?\Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt $midocoDebitInfoForReceipt = null, ?array $midocoAdditionalInfoForReceipt = null, ?int $cashBookId = null, ?string $paymentType = null, ?int $customerId = null, ?string $forename = null, ?string $name = null, ?string $street = null, ?string $streetNo = null, ?string $country = null, ?string $postalCode = null, ?string $city = null, ?float $totalAmount = null, ?float $originalTotalAmount = null, ?string $originalCurrency = null, ?string $receiptDate = null, ?string $voucherNo = null, ?string $voucherItemCode = null, ?string $miscPaymentAccountID = null, ?string $miscPaymentRefNo = null)
    {
        $this
            ->setReceiptPositioninfo($receiptPositioninfo)
            ->setReceiptOnlinePaymentInfo($receiptOnlinePaymentInfo)
            ->setMidocoDebitInfoForReceipt($midocoDebitInfoForReceipt)
            ->setMidocoAdditionalInfoForReceipt($midocoAdditionalInfoForReceipt)
            ->setCashBookId($cashBookId)
            ->setPaymentType($paymentType)
            ->setCustomerId($customerId)
            ->setForename($forename)
            ->setName($name)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setCountry($country)
            ->setPostalCode($postalCode)
            ->setCity($city)
            ->setTotalAmount($totalAmount)
            ->setOriginalTotalAmount($originalTotalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setReceiptDate($receiptDate)
            ->setVoucherNo($voucherNo)
            ->setVoucherItemCode($voucherItemCode)
            ->setMiscPaymentAccountID($miscPaymentAccountID)
            ->setMiscPaymentRefNo($miscPaymentRefNo);
    }
    /**
     * Get ReceiptPositioninfo value
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo[]
     */
    public function getReceiptPositioninfo(): ?array
    {
        return $this->ReceiptPositioninfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setReceiptPositioninfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReceiptPositioninfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReceiptPositioninfoForArrayConstraintFromSetReceiptPositioninfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoReceiptInfoReceiptPositioninfoItem) {
            // validation for constraint: itemType
            if (!$midocoReceiptInfoReceiptPositioninfoItem instanceof \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo) {
                $invalidValues[] = is_object($midocoReceiptInfoReceiptPositioninfoItem) ? get_class($midocoReceiptInfoReceiptPositioninfoItem) : sprintf('%s(%s)', gettype($midocoReceiptInfoReceiptPositioninfoItem), var_export($midocoReceiptInfoReceiptPositioninfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReceiptPositioninfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReceiptPositioninfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo[] $receiptPositioninfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setReceiptPositioninfo(?array $receiptPositioninfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($receiptPositioninfoArrayErrorMessage = self::validateReceiptPositioninfoForArrayConstraintFromSetReceiptPositioninfo($receiptPositioninfo))) {
            throw new InvalidArgumentException($receiptPositioninfoArrayErrorMessage, __LINE__);
        }
        $this->ReceiptPositioninfo = $receiptPositioninfo;
        
        return $this;
    }
    /**
     * Add item to ReceiptPositioninfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function addToReceiptPositioninfo(\Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo) {
            throw new InvalidArgumentException(sprintf('The ReceiptPositioninfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\ReceiptPositioninfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ReceiptPositioninfo[] = $item;
        
        return $this;
    }
    /**
     * Get ReceiptOnlinePaymentInfo value
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo|null
     */
    public function getReceiptOnlinePaymentInfo(): ?\Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo
    {
        return $this->ReceiptOnlinePaymentInfo;
    }
    /**
     * Set ReceiptOnlinePaymentInfo value
     * @param \Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo $receiptOnlinePaymentInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setReceiptOnlinePaymentInfo(?\Pggns\MidocoApi\Order\StructType\ReceiptOnlinePaymentInfo $receiptOnlinePaymentInfo = null): self
    {
        $this->ReceiptOnlinePaymentInfo = $receiptOnlinePaymentInfo;
        
        return $this;
    }
    /**
     * Get MidocoDebitInfoForReceipt value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt|null
     */
    public function getMidocoDebitInfoForReceipt(): ?\Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt
    {
        return $this->MidocoDebitInfoForReceipt;
    }
    /**
     * Set MidocoDebitInfoForReceipt value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt $midocoDebitInfoForReceipt
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setMidocoDebitInfoForReceipt(?\Pggns\MidocoApi\Order\StructType\MidocoDebitInfoForReceipt $midocoDebitInfoForReceipt = null): self
    {
        $this->MidocoDebitInfoForReceipt = $midocoDebitInfoForReceipt;
        
        return $this;
    }
    /**
     * Get MidocoAdditionalInfoForReceipt value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdditionalInfoForReceipt[]
     */
    public function getMidocoAdditionalInfoForReceipt(): ?array
    {
        return $this->MidocoAdditionalInfoForReceipt;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAdditionalInfoForReceipt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdditionalInfoForReceipt method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdditionalInfoForReceiptForArrayConstraintFromSetMidocoAdditionalInfoForReceipt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoReceiptInfoMidocoAdditionalInfoForReceiptItem) {
            // validation for constraint: itemType
            if (!$midocoReceiptInfoMidocoAdditionalInfoForReceiptItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdditionalInfoForReceipt) {
                $invalidValues[] = is_object($midocoReceiptInfoMidocoAdditionalInfoForReceiptItem) ? get_class($midocoReceiptInfoMidocoAdditionalInfoForReceiptItem) : sprintf('%s(%s)', gettype($midocoReceiptInfoMidocoAdditionalInfoForReceiptItem), var_export($midocoReceiptInfoMidocoAdditionalInfoForReceiptItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdditionalInfoForReceipt property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdditionalInfoForReceipt, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdditionalInfoForReceipt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdditionalInfoForReceipt[] $midocoAdditionalInfoForReceipt
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setMidocoAdditionalInfoForReceipt(?array $midocoAdditionalInfoForReceipt = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdditionalInfoForReceiptArrayErrorMessage = self::validateMidocoAdditionalInfoForReceiptForArrayConstraintFromSetMidocoAdditionalInfoForReceipt($midocoAdditionalInfoForReceipt))) {
            throw new InvalidArgumentException($midocoAdditionalInfoForReceiptArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdditionalInfoForReceipt = $midocoAdditionalInfoForReceipt;
        
        return $this;
    }
    /**
     * Add item to MidocoAdditionalInfoForReceipt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdditionalInfoForReceipt $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function addToMidocoAdditionalInfoForReceipt(\Pggns\MidocoApi\Order\StructType\MidocoAdditionalInfoForReceipt $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdditionalInfoForReceipt) {
            throw new InvalidArgumentException(sprintf('The MidocoAdditionalInfoForReceipt property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdditionalInfoForReceipt, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdditionalInfoForReceipt[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
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
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get streetNo value
     * @return string|null
     */
    public function getStreetNo(): ?string
    {
        return $this->streetNo;
    }
    /**
     * Set streetNo value
     * @param string $streetNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setStreetNo(?string $streetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNo) && !is_string($streetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNo, true), gettype($streetNo)), __LINE__);
        }
        $this->streetNo = $streetNo;
        
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
    /**
     * Get originalTotalAmount value
     * @return float|null
     */
    public function getOriginalTotalAmount(): ?float
    {
        return $this->originalTotalAmount;
    }
    /**
     * Set originalTotalAmount value
     * @param float $originalTotalAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setOriginalTotalAmount(?float $originalTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalTotalAmount) && !(is_float($originalTotalAmount) || is_numeric($originalTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalTotalAmount, true), gettype($originalTotalAmount)), __LINE__);
        }
        $this->originalTotalAmount = $originalTotalAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
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
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
        return $this;
    }
    /**
     * Get voucherNo value
     * @return string|null
     */
    public function getVoucherNo(): ?string
    {
        return $this->voucherNo;
    }
    /**
     * Set voucherNo value
     * @param string $voucherNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setVoucherNo(?string $voucherNo = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherNo) && !is_string($voucherNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherNo, true), gettype($voucherNo)), __LINE__);
        }
        $this->voucherNo = $voucherNo;
        
        return $this;
    }
    /**
     * Get voucherItemCode value
     * @return string|null
     */
    public function getVoucherItemCode(): ?string
    {
        return $this->voucherItemCode;
    }
    /**
     * Set voucherItemCode value
     * @param string $voucherItemCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setVoucherItemCode(?string $voucherItemCode = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherItemCode) && !is_string($voucherItemCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherItemCode, true), gettype($voucherItemCode)), __LINE__);
        }
        $this->voucherItemCode = $voucherItemCode;
        
        return $this;
    }
    /**
     * Get miscPaymentAccountID value
     * @return string|null
     */
    public function getMiscPaymentAccountID(): ?string
    {
        return $this->miscPaymentAccountID;
    }
    /**
     * Set miscPaymentAccountID value
     * @param string $miscPaymentAccountID
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setMiscPaymentAccountID(?string $miscPaymentAccountID = null): self
    {
        // validation for constraint: string
        if (!is_null($miscPaymentAccountID) && !is_string($miscPaymentAccountID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miscPaymentAccountID, true), gettype($miscPaymentAccountID)), __LINE__);
        }
        $this->miscPaymentAccountID = $miscPaymentAccountID;
        
        return $this;
    }
    /**
     * Get miscPaymentRefNo value
     * @return string|null
     */
    public function getMiscPaymentRefNo(): ?string
    {
        return $this->miscPaymentRefNo;
    }
    /**
     * Set miscPaymentRefNo value
     * @param string $miscPaymentRefNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptInfo
     */
    public function setMiscPaymentRefNo(?string $miscPaymentRefNo = null): self
    {
        // validation for constraint: string
        if (!is_null($miscPaymentRefNo) && !is_string($miscPaymentRefNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($miscPaymentRefNo, true), gettype($miscPaymentRefNo)), __LINE__);
        }
        $this->miscPaymentRefNo = $miscPaymentRefNo;
        
        return $this;
    }
}
