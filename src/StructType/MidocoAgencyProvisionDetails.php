<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAgencyProvisionDetails StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAgencyProvisionDetails extends AbstractStructBase
{
    /**
     * The Attribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Pggns\MidocoApi\Order\StructType\Attribute_1[]
     */
    protected ?array $Attribute = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The inkassoType
     * @var string|null
     */
    protected ?string $inkassoType = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The provisionAmount
     * @var float|null
     */
    protected ?float $provisionAmount = null;
    /**
     * The provisionVatAmount
     * @var float|null
     */
    protected ?float $provisionVatAmount = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The inkassoPrice
     * @var float|null
     */
    protected ?float $inkassoPrice = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * The provisionInsuranceAmount
     * @var float|null
     */
    protected ?float $provisionInsuranceAmount = null;
    /**
     * The isStorno
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * The extId
     * @var string|null
     */
    protected ?string $extId = null;
    /**
     * The includedVatAmount
     * @var float|null
     */
    protected ?float $includedVatAmount = null;
    /**
     * The filekey
     * @var string|null
     */
    protected ?string $filekey = null;
    /**
     * The taxPercent
     * @var float|null
     */
    protected ?float $taxPercent = null;
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The areaDescription
     * @var string|null
     */
    protected ?string $areaDescription = null;
    /**
     * The externalId
     * @var string|null
     */
    protected ?string $externalId = null;
    /**
     * The destinationCode
     * @var string|null
     */
    protected ?string $destinationCode = null;
    /**
     * The provisionBaseAmount
     * @var float|null
     */
    protected ?float $provisionBaseAmount = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for MidocoAgencyProvisionDetails
     * @uses MidocoAgencyProvisionDetails::setAttribute()
     * @uses MidocoAgencyProvisionDetails::setOrderNo()
     * @uses MidocoAgencyProvisionDetails::setCustomerName()
     * @uses MidocoAgencyProvisionDetails::setInkassoType()
     * @uses MidocoAgencyProvisionDetails::setTravelDate()
     * @uses MidocoAgencyProvisionDetails::setCreationDate()
     * @uses MidocoAgencyProvisionDetails::setProvisionAmount()
     * @uses MidocoAgencyProvisionDetails::setProvisionVatAmount()
     * @uses MidocoAgencyProvisionDetails::setTotalPrice()
     * @uses MidocoAgencyProvisionDetails::setInkassoPrice()
     * @uses MidocoAgencyProvisionDetails::setOrderId()
     * @uses MidocoAgencyProvisionDetails::setTotalAmount()
     * @uses MidocoAgencyProvisionDetails::setProvisionInsuranceAmount()
     * @uses MidocoAgencyProvisionDetails::setIsStorno()
     * @uses MidocoAgencyProvisionDetails::setBookingId()
     * @uses MidocoAgencyProvisionDetails::setDescription()
     * @uses MidocoAgencyProvisionDetails::setVatPercent()
     * @uses MidocoAgencyProvisionDetails::setExtId()
     * @uses MidocoAgencyProvisionDetails::setIncludedVatAmount()
     * @uses MidocoAgencyProvisionDetails::setFilekey()
     * @uses MidocoAgencyProvisionDetails::setTaxPercent()
     * @uses MidocoAgencyProvisionDetails::setProductType()
     * @uses MidocoAgencyProvisionDetails::setAreaDescription()
     * @uses MidocoAgencyProvisionDetails::setExternalId()
     * @uses MidocoAgencyProvisionDetails::setDestinationCode()
     * @uses MidocoAgencyProvisionDetails::setProvisionBaseAmount()
     * @uses MidocoAgencyProvisionDetails::setSupplierId()
     * @param \Pggns\MidocoApi\Order\StructType\Attribute_1[] $attribute
     * @param int $orderNo
     * @param string $customerName
     * @param string $inkassoType
     * @param string $travelDate
     * @param string $creationDate
     * @param float $provisionAmount
     * @param float $provisionVatAmount
     * @param float $totalPrice
     * @param float $inkassoPrice
     * @param int $orderId
     * @param float $totalAmount
     * @param float $provisionInsuranceAmount
     * @param bool $isStorno
     * @param string $bookingId
     * @param string $description
     * @param float $vatPercent
     * @param string $extId
     * @param float $includedVatAmount
     * @param string $filekey
     * @param float $taxPercent
     * @param string $productType
     * @param string $areaDescription
     * @param string $externalId
     * @param string $destinationCode
     * @param float $provisionBaseAmount
     * @param string $supplierId
     */
    public function __construct(?array $attribute = null, ?int $orderNo = null, ?string $customerName = null, ?string $inkassoType = null, ?string $travelDate = null, ?string $creationDate = null, ?float $provisionAmount = null, ?float $provisionVatAmount = null, ?float $totalPrice = null, ?float $inkassoPrice = null, ?int $orderId = null, ?float $totalAmount = null, ?float $provisionInsuranceAmount = null, ?bool $isStorno = null, ?string $bookingId = null, ?string $description = null, ?float $vatPercent = null, ?string $extId = null, ?float $includedVatAmount = null, ?string $filekey = null, ?float $taxPercent = null, ?string $productType = null, ?string $areaDescription = null, ?string $externalId = null, ?string $destinationCode = null, ?float $provisionBaseAmount = null, ?string $supplierId = null)
    {
        $this
            ->setAttribute($attribute)
            ->setOrderNo($orderNo)
            ->setCustomerName($customerName)
            ->setInkassoType($inkassoType)
            ->setTravelDate($travelDate)
            ->setCreationDate($creationDate)
            ->setProvisionAmount($provisionAmount)
            ->setProvisionVatAmount($provisionVatAmount)
            ->setTotalPrice($totalPrice)
            ->setInkassoPrice($inkassoPrice)
            ->setOrderId($orderId)
            ->setTotalAmount($totalAmount)
            ->setProvisionInsuranceAmount($provisionInsuranceAmount)
            ->setIsStorno($isStorno)
            ->setBookingId($bookingId)
            ->setDescription($description)
            ->setVatPercent($vatPercent)
            ->setExtId($extId)
            ->setIncludedVatAmount($includedVatAmount)
            ->setFilekey($filekey)
            ->setTaxPercent($taxPercent)
            ->setProductType($productType)
            ->setAreaDescription($areaDescription)
            ->setExternalId($externalId)
            ->setDestinationCode($destinationCode)
            ->setProvisionBaseAmount($provisionBaseAmount)
            ->setSupplierId($supplierId);
    }
    /**
     * Get Attribute value
     * @return \Pggns\MidocoApi\Order\StructType\Attribute_1[]
     */
    public function getAttribute(): ?array
    {
        return $this->Attribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttributeForArrayConstraintFromSetAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAgencyProvisionDetailsAttributeItem) {
            // validation for constraint: itemType
            if (!$midocoAgencyProvisionDetailsAttributeItem instanceof \Pggns\MidocoApi\Order\StructType\Attribute_1) {
                $invalidValues[] = is_object($midocoAgencyProvisionDetailsAttributeItem) ? get_class($midocoAgencyProvisionDetailsAttributeItem) : sprintf('%s(%s)', gettype($midocoAgencyProvisionDetailsAttributeItem), var_export($midocoAgencyProvisionDetailsAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\Attribute_1, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Attribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Attribute_1[] $attribute
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setAttribute(?array $attribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($attributeArrayErrorMessage = self::validateAttributeForArrayConstraintFromSetAttribute($attribute))) {
            throw new InvalidArgumentException($attributeArrayErrorMessage, __LINE__);
        }
        $this->Attribute = $attribute;
        
        return $this;
    }
    /**
     * Add item to Attribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Attribute_1 $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function addToAttribute(\Pggns\MidocoApi\Order\StructType\Attribute_1 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Attribute_1) {
            throw new InvalidArgumentException(sprintf('The Attribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\Attribute_1, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Attribute[] = $item;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get inkassoType value
     * @return string|null
     */
    public function getInkassoType(): ?string
    {
        return $this->inkassoType;
    }
    /**
     * Set inkassoType value
     * @param string $inkassoType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setInkassoType(?string $inkassoType = null): self
    {
        // validation for constraint: string
        if (!is_null($inkassoType) && !is_string($inkassoType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inkassoType, true), gettype($inkassoType)), __LINE__);
        }
        $this->inkassoType = $inkassoType;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
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
     * Get provisionAmount value
     * @return float|null
     */
    public function getProvisionAmount(): ?float
    {
        return $this->provisionAmount;
    }
    /**
     * Set provisionAmount value
     * @param float $provisionAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setProvisionAmount(?float $provisionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($provisionAmount) && !(is_float($provisionAmount) || is_numeric($provisionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provisionAmount, true), gettype($provisionAmount)), __LINE__);
        }
        $this->provisionAmount = $provisionAmount;
        
        return $this;
    }
    /**
     * Get provisionVatAmount value
     * @return float|null
     */
    public function getProvisionVatAmount(): ?float
    {
        return $this->provisionVatAmount;
    }
    /**
     * Set provisionVatAmount value
     * @param float $provisionVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setProvisionVatAmount(?float $provisionVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($provisionVatAmount) && !(is_float($provisionVatAmount) || is_numeric($provisionVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provisionVatAmount, true), gettype($provisionVatAmount)), __LINE__);
        }
        $this->provisionVatAmount = $provisionVatAmount;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get inkassoPrice value
     * @return float|null
     */
    public function getInkassoPrice(): ?float
    {
        return $this->inkassoPrice;
    }
    /**
     * Set inkassoPrice value
     * @param float $inkassoPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setInkassoPrice(?float $inkassoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($inkassoPrice) && !(is_float($inkassoPrice) || is_numeric($inkassoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($inkassoPrice, true), gettype($inkassoPrice)), __LINE__);
        }
        $this->inkassoPrice = $inkassoPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
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
     * Get provisionInsuranceAmount value
     * @return float|null
     */
    public function getProvisionInsuranceAmount(): ?float
    {
        return $this->provisionInsuranceAmount;
    }
    /**
     * Set provisionInsuranceAmount value
     * @param float $provisionInsuranceAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setProvisionInsuranceAmount(?float $provisionInsuranceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($provisionInsuranceAmount) && !(is_float($provisionInsuranceAmount) || is_numeric($provisionInsuranceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provisionInsuranceAmount, true), gettype($provisionInsuranceAmount)), __LINE__);
        }
        $this->provisionInsuranceAmount = $provisionInsuranceAmount;
        
        return $this;
    }
    /**
     * Get isStorno value
     * @return bool|null
     */
    public function getIsStorno(): ?bool
    {
        return $this->isStorno;
    }
    /**
     * Set isStorno value
     * @param bool $isStorno
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setIsStorno(?bool $isStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStorno) && !is_bool($isStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStorno, true), gettype($isStorno)), __LINE__);
        }
        $this->isStorno = $isStorno;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
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
     * Get extId value
     * @return string|null
     */
    public function getExtId(): ?string
    {
        return $this->extId;
    }
    /**
     * Set extId value
     * @param string $extId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setExtId(?string $extId = null): self
    {
        // validation for constraint: string
        if (!is_null($extId) && !is_string($extId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extId, true), gettype($extId)), __LINE__);
        }
        $this->extId = $extId;
        
        return $this;
    }
    /**
     * Get includedVatAmount value
     * @return float|null
     */
    public function getIncludedVatAmount(): ?float
    {
        return $this->includedVatAmount;
    }
    /**
     * Set includedVatAmount value
     * @param float $includedVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setIncludedVatAmount(?float $includedVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($includedVatAmount) && !(is_float($includedVatAmount) || is_numeric($includedVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($includedVatAmount, true), gettype($includedVatAmount)), __LINE__);
        }
        $this->includedVatAmount = $includedVatAmount;
        
        return $this;
    }
    /**
     * Get filekey value
     * @return string|null
     */
    public function getFilekey(): ?string
    {
        return $this->filekey;
    }
    /**
     * Set filekey value
     * @param string $filekey
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setFilekey(?string $filekey = null): self
    {
        // validation for constraint: string
        if (!is_null($filekey) && !is_string($filekey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filekey, true), gettype($filekey)), __LINE__);
        }
        $this->filekey = $filekey;
        
        return $this;
    }
    /**
     * Get taxPercent value
     * @return float|null
     */
    public function getTaxPercent(): ?float
    {
        return $this->taxPercent;
    }
    /**
     * Set taxPercent value
     * @param float $taxPercent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setTaxPercent(?float $taxPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($taxPercent) && !(is_float($taxPercent) || is_numeric($taxPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxPercent, true), gettype($taxPercent)), __LINE__);
        }
        $this->taxPercent = $taxPercent;
        
        return $this;
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get areaDescription value
     * @return string|null
     */
    public function getAreaDescription(): ?string
    {
        return $this->areaDescription;
    }
    /**
     * Set areaDescription value
     * @param string $areaDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setAreaDescription(?string $areaDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($areaDescription) && !is_string($areaDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($areaDescription, true), gettype($areaDescription)), __LINE__);
        }
        $this->areaDescription = $areaDescription;
        
        return $this;
    }
    /**
     * Get externalId value
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * Set externalId value
     * @param string $externalId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setExternalId(?string $externalId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalId) && !is_string($externalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalId, true), gettype($externalId)), __LINE__);
        }
        $this->externalId = $externalId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
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
     * Get provisionBaseAmount value
     * @return float|null
     */
    public function getProvisionBaseAmount(): ?float
    {
        return $this->provisionBaseAmount;
    }
    /**
     * Set provisionBaseAmount value
     * @param float $provisionBaseAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
     */
    public function setProvisionBaseAmount(?float $provisionBaseAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($provisionBaseAmount) && !(is_float($provisionBaseAmount) || is_numeric($provisionBaseAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($provisionBaseAmount, true), gettype($provisionBaseAmount)), __LINE__);
        }
        $this->provisionBaseAmount = $provisionBaseAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionDetails
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
}
