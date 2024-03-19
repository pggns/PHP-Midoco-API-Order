<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCalcItemDetailsInfo4Printing StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCalcItemDetailsInfo4Printing extends AbstractStructBase
{
    /**
     * The supplier
     * @var string|null
     */
    protected ?string $supplier = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The oldPrice
     * @var float|null
     */
    protected ?float $oldPrice = null;
    /**
     * The itemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The remarks
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $remarks = null;
    /**
     * The isReverseCharge
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isReverseCharge = null;
    /**
     * The passengerAssignment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $passengerAssignment = null;
    /**
     * The supplierVatPercent
     * @var string|null
     */
    protected ?string $supplierVatPercent = null;
    /**
     * The supplierVatAmount
     * @var float|null
     */
    protected ?float $supplierVatAmount = null;
    /**
     * The MidocoSellItemVatDivision
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemVatDivision
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[]
     */
    protected ?array $MidocoSellItemVatDivision = null;
    /**
     * The MidocoInvoicePosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoicePosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[]
     */
    protected ?array $MidocoInvoicePosition = null;
    /**
     * The MidocoInvoiceVatPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoiceVatPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[]
     */
    protected ?array $MidocoInvoiceVatPosition = null;
    /**
     * The FeeTypeLocalization
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\FeeTypeLocalization[]
     */
    protected ?array $FeeTypeLocalization = null;
    /**
     * The isSegmentMultiply
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isSegmentMultiply = null;
    /**
     * The isTravellerMultiply
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isTravellerMultiply = null;
    /**
     * The MidocoTouchedVatCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTouchedVatCode
     * @var \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType[]
     */
    protected ?array $MidocoTouchedVatCode = null;
    /**
     * The isMarginVat
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isMarginVat = null;
    /**
     * Constructor method for MidocoCalcItemDetailsInfo4Printing
     * @uses MidocoCalcItemDetailsInfo4Printing::setSupplier()
     * @uses MidocoCalcItemDetailsInfo4Printing::setCreationDate()
     * @uses MidocoCalcItemDetailsInfo4Printing::setDescription()
     * @uses MidocoCalcItemDetailsInfo4Printing::setBookingId()
     * @uses MidocoCalcItemDetailsInfo4Printing::setStatus()
     * @uses MidocoCalcItemDetailsInfo4Printing::setPrice()
     * @uses MidocoCalcItemDetailsInfo4Printing::setOldPrice()
     * @uses MidocoCalcItemDetailsInfo4Printing::setItemId()
     * @uses MidocoCalcItemDetailsInfo4Printing::setRemarks()
     * @uses MidocoCalcItemDetailsInfo4Printing::setIsReverseCharge()
     * @uses MidocoCalcItemDetailsInfo4Printing::setPassengerAssignment()
     * @uses MidocoCalcItemDetailsInfo4Printing::setSupplierVatPercent()
     * @uses MidocoCalcItemDetailsInfo4Printing::setSupplierVatAmount()
     * @uses MidocoCalcItemDetailsInfo4Printing::setMidocoSellItemVatDivision()
     * @uses MidocoCalcItemDetailsInfo4Printing::setMidocoInvoicePosition()
     * @uses MidocoCalcItemDetailsInfo4Printing::setMidocoInvoiceVatPosition()
     * @uses MidocoCalcItemDetailsInfo4Printing::setFeeTypeLocalization()
     * @uses MidocoCalcItemDetailsInfo4Printing::setIsSegmentMultiply()
     * @uses MidocoCalcItemDetailsInfo4Printing::setIsTravellerMultiply()
     * @uses MidocoCalcItemDetailsInfo4Printing::setMidocoTouchedVatCode()
     * @uses MidocoCalcItemDetailsInfo4Printing::setIsMarginVat()
     * @param string $supplier
     * @param string $creationDate
     * @param string $description
     * @param string $bookingId
     * @param string $status
     * @param float $price
     * @param float $oldPrice
     * @param int $itemId
     * @param string[] $remarks
     * @param bool $isReverseCharge
     * @param int $passengerAssignment
     * @param string $supplierVatPercent
     * @param float $supplierVatAmount
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[] $midocoSellItemVatDivision
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[] $midocoInvoicePosition
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[] $midocoInvoiceVatPosition
     * @param \Pggns\MidocoApi\Order\StructType\FeeTypeLocalization[] $feeTypeLocalization
     * @param bool $isSegmentMultiply
     * @param bool $isTravellerMultiply
     * @param \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType[] $midocoTouchedVatCode
     * @param bool $isMarginVat
     */
    public function __construct(?string $supplier = null, ?string $creationDate = null, ?string $description = null, ?string $bookingId = null, ?string $status = null, ?float $price = null, ?float $oldPrice = null, ?int $itemId = null, ?array $remarks = null, ?bool $isReverseCharge = null, ?int $passengerAssignment = null, ?string $supplierVatPercent = null, ?float $supplierVatAmount = null, ?array $midocoSellItemVatDivision = null, ?array $midocoInvoicePosition = null, ?array $midocoInvoiceVatPosition = null, ?array $feeTypeLocalization = null, ?bool $isSegmentMultiply = null, ?bool $isTravellerMultiply = null, ?array $midocoTouchedVatCode = null, ?bool $isMarginVat = false)
    {
        $this
            ->setSupplier($supplier)
            ->setCreationDate($creationDate)
            ->setDescription($description)
            ->setBookingId($bookingId)
            ->setStatus($status)
            ->setPrice($price)
            ->setOldPrice($oldPrice)
            ->setItemId($itemId)
            ->setRemarks($remarks)
            ->setIsReverseCharge($isReverseCharge)
            ->setPassengerAssignment($passengerAssignment)
            ->setSupplierVatPercent($supplierVatPercent)
            ->setSupplierVatAmount($supplierVatAmount)
            ->setMidocoSellItemVatDivision($midocoSellItemVatDivision)
            ->setMidocoInvoicePosition($midocoInvoicePosition)
            ->setMidocoInvoiceVatPosition($midocoInvoiceVatPosition)
            ->setFeeTypeLocalization($feeTypeLocalization)
            ->setIsSegmentMultiply($isSegmentMultiply)
            ->setIsTravellerMultiply($isTravellerMultiply)
            ->setMidocoTouchedVatCode($midocoTouchedVatCode)
            ->setIsMarginVat($isMarginVat);
    }
    /**
     * Get supplier value
     * @return string|null
     */
    public function getSupplier(): ?string
    {
        return $this->supplier;
    }
    /**
     * Set supplier value
     * @param string $supplier
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setSupplier(?string $supplier = null): self
    {
        // validation for constraint: string
        if (!is_null($supplier) && !is_string($supplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplier, true), gettype($supplier)), __LINE__);
        }
        $this->supplier = $supplier;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
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
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
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
     * Get oldPrice value
     * @return float|null
     */
    public function getOldPrice(): ?float
    {
        return $this->oldPrice;
    }
    /**
     * Set oldPrice value
     * @param float $oldPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setOldPrice(?float $oldPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($oldPrice) && !(is_float($oldPrice) || is_numeric($oldPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($oldPrice, true), gettype($oldPrice)), __LINE__);
        }
        $this->oldPrice = $oldPrice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
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
     * Get remarks value
     * @return string[]
     */
    public function getRemarks(): ?array
    {
        return $this->remarks;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRemarks method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRemarks method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRemarksForArrayConstraintFromSetRemarks(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCalcItemDetailsInfo4PrintingRemarksItem) {
            // validation for constraint: itemType
            if (!is_string($midocoCalcItemDetailsInfo4PrintingRemarksItem)) {
                $invalidValues[] = is_object($midocoCalcItemDetailsInfo4PrintingRemarksItem) ? get_class($midocoCalcItemDetailsInfo4PrintingRemarksItem) : sprintf('%s(%s)', gettype($midocoCalcItemDetailsInfo4PrintingRemarksItem), var_export($midocoCalcItemDetailsInfo4PrintingRemarksItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The remarks property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set remarks value
     * @throws InvalidArgumentException
     * @param string[] $remarks
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setRemarks(?array $remarks = null): self
    {
        // validation for constraint: array
        if ('' !== ($remarksArrayErrorMessage = self::validateRemarksForArrayConstraintFromSetRemarks($remarks))) {
            throw new InvalidArgumentException($remarksArrayErrorMessage, __LINE__);
        }
        $this->remarks = $remarks;
        
        return $this;
    }
    /**
     * Add item to remarks value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function addToRemarks(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The remarks property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->remarks[] = $item;
        
        return $this;
    }
    /**
     * Get isReverseCharge value
     * @return bool|null
     */
    public function getIsReverseCharge(): ?bool
    {
        return $this->isReverseCharge;
    }
    /**
     * Set isReverseCharge value
     * @param bool $isReverseCharge
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setIsReverseCharge(?bool $isReverseCharge = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReverseCharge) && !is_bool($isReverseCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReverseCharge, true), gettype($isReverseCharge)), __LINE__);
        }
        $this->isReverseCharge = $isReverseCharge;
        
        return $this;
    }
    /**
     * Get passengerAssignment value
     * @return int|null
     */
    public function getPassengerAssignment(): ?int
    {
        return $this->passengerAssignment;
    }
    /**
     * Set passengerAssignment value
     * @param int $passengerAssignment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setPassengerAssignment(?int $passengerAssignment = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerAssignment) && !(is_int($passengerAssignment) || ctype_digit($passengerAssignment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerAssignment, true), gettype($passengerAssignment)), __LINE__);
        }
        $this->passengerAssignment = $passengerAssignment;
        
        return $this;
    }
    /**
     * Get supplierVatPercent value
     * @return string|null
     */
    public function getSupplierVatPercent(): ?string
    {
        return $this->supplierVatPercent;
    }
    /**
     * Set supplierVatPercent value
     * @param string $supplierVatPercent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setSupplierVatPercent(?string $supplierVatPercent = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierVatPercent) && !is_string($supplierVatPercent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierVatPercent, true), gettype($supplierVatPercent)), __LINE__);
        }
        $this->supplierVatPercent = $supplierVatPercent;
        
        return $this;
    }
    /**
     * Get supplierVatAmount value
     * @return float|null
     */
    public function getSupplierVatAmount(): ?float
    {
        return $this->supplierVatAmount;
    }
    /**
     * Set supplierVatAmount value
     * @param float $supplierVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setSupplierVatAmount(?float $supplierVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierVatAmount) && !(is_float($supplierVatAmount) || is_numeric($supplierVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierVatAmount, true), gettype($supplierVatAmount)), __LINE__);
        }
        $this->supplierVatAmount = $supplierVatAmount;
        
        return $this;
    }
    /**
     * Get MidocoSellItemVatDivision value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[]
     */
    public function getMidocoSellItemVatDivision(): ?array
    {
        return $this->MidocoSellItemVatDivision;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSellItemVatDivision method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemVatDivision method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemVatDivisionForArrayConstraintFromSetMidocoSellItemVatDivision(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCalcItemDetailsInfo4PrintingMidocoSellItemVatDivisionItem) {
            // validation for constraint: itemType
            if (!$midocoCalcItemDetailsInfo4PrintingMidocoSellItemVatDivisionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision) {
                $invalidValues[] = is_object($midocoCalcItemDetailsInfo4PrintingMidocoSellItemVatDivisionItem) ? get_class($midocoCalcItemDetailsInfo4PrintingMidocoSellItemVatDivisionItem) : sprintf('%s(%s)', gettype($midocoCalcItemDetailsInfo4PrintingMidocoSellItemVatDivisionItem), var_export($midocoCalcItemDetailsInfo4PrintingMidocoSellItemVatDivisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[] $midocoSellItemVatDivision
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setMidocoSellItemVatDivision(?array $midocoSellItemVatDivision = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemVatDivisionArrayErrorMessage = self::validateMidocoSellItemVatDivisionForArrayConstraintFromSetMidocoSellItemVatDivision($midocoSellItemVatDivision))) {
            throw new InvalidArgumentException($midocoSellItemVatDivisionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemVatDivision = $midocoSellItemVatDivision;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function addToMidocoSellItemVatDivision(\Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemVatDivision[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoInvoicePosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[]
     */
    public function getMidocoInvoicePosition(): ?array
    {
        return $this->MidocoInvoicePosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoInvoicePosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoicePosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoicePositionForArrayConstraintFromSetMidocoInvoicePosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCalcItemDetailsInfo4PrintingMidocoInvoicePositionItem) {
            // validation for constraint: itemType
            if (!$midocoCalcItemDetailsInfo4PrintingMidocoInvoicePositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition) {
                $invalidValues[] = is_object($midocoCalcItemDetailsInfo4PrintingMidocoInvoicePositionItem) ? get_class($midocoCalcItemDetailsInfo4PrintingMidocoInvoicePositionItem) : sprintf('%s(%s)', gettype($midocoCalcItemDetailsInfo4PrintingMidocoInvoicePositionItem), var_export($midocoCalcItemDetailsInfo4PrintingMidocoInvoicePositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoicePosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoicePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[] $midocoInvoicePosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setMidocoInvoicePosition(?array $midocoInvoicePosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoicePositionArrayErrorMessage = self::validateMidocoInvoicePositionForArrayConstraintFromSetMidocoInvoicePosition($midocoInvoicePosition))) {
            throw new InvalidArgumentException($midocoInvoicePositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoicePosition = $midocoInvoicePosition;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoicePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function addToMidocoInvoicePosition(\Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoicePosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoicePosition[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoInvoiceVatPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[]
     */
    public function getMidocoInvoiceVatPosition(): ?array
    {
        return $this->MidocoInvoiceVatPosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoInvoiceVatPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoiceVatPosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoiceVatPositionForArrayConstraintFromSetMidocoInvoiceVatPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCalcItemDetailsInfo4PrintingMidocoInvoiceVatPositionItem) {
            // validation for constraint: itemType
            if (!$midocoCalcItemDetailsInfo4PrintingMidocoInvoiceVatPositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition) {
                $invalidValues[] = is_object($midocoCalcItemDetailsInfo4PrintingMidocoInvoiceVatPositionItem) ? get_class($midocoCalcItemDetailsInfo4PrintingMidocoInvoiceVatPositionItem) : sprintf('%s(%s)', gettype($midocoCalcItemDetailsInfo4PrintingMidocoInvoiceVatPositionItem), var_export($midocoCalcItemDetailsInfo4PrintingMidocoInvoiceVatPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoiceVatPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoiceVatPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[] $midocoInvoiceVatPosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setMidocoInvoiceVatPosition(?array $midocoInvoiceVatPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoiceVatPositionArrayErrorMessage = self::validateMidocoInvoiceVatPositionForArrayConstraintFromSetMidocoInvoiceVatPosition($midocoInvoiceVatPosition))) {
            throw new InvalidArgumentException($midocoInvoiceVatPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoiceVatPosition = $midocoInvoiceVatPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoiceVatPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function addToMidocoInvoiceVatPosition(\Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoiceVatPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoiceVatPosition[] = $item;
        
        return $this;
    }
    /**
     * Get FeeTypeLocalization value
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeLocalization[]
     */
    public function getFeeTypeLocalization(): ?array
    {
        return $this->FeeTypeLocalization;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFeeTypeLocalization method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFeeTypeLocalization method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFeeTypeLocalizationForArrayConstraintFromSetFeeTypeLocalization(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCalcItemDetailsInfo4PrintingFeeTypeLocalizationItem) {
            // validation for constraint: itemType
            if (!$midocoCalcItemDetailsInfo4PrintingFeeTypeLocalizationItem instanceof \Pggns\MidocoApi\Order\StructType\FeeTypeLocalization) {
                $invalidValues[] = is_object($midocoCalcItemDetailsInfo4PrintingFeeTypeLocalizationItem) ? get_class($midocoCalcItemDetailsInfo4PrintingFeeTypeLocalizationItem) : sprintf('%s(%s)', gettype($midocoCalcItemDetailsInfo4PrintingFeeTypeLocalizationItem), var_export($midocoCalcItemDetailsInfo4PrintingFeeTypeLocalizationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FeeTypeLocalization property can only contain items of type \Pggns\MidocoApi\Order\StructType\FeeTypeLocalization, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FeeTypeLocalization value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FeeTypeLocalization[] $feeTypeLocalization
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setFeeTypeLocalization(?array $feeTypeLocalization = null): self
    {
        // validation for constraint: array
        if ('' !== ($feeTypeLocalizationArrayErrorMessage = self::validateFeeTypeLocalizationForArrayConstraintFromSetFeeTypeLocalization($feeTypeLocalization))) {
            throw new InvalidArgumentException($feeTypeLocalizationArrayErrorMessage, __LINE__);
        }
        $this->FeeTypeLocalization = $feeTypeLocalization;
        
        return $this;
    }
    /**
     * Add item to FeeTypeLocalization value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FeeTypeLocalization $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function addToFeeTypeLocalization(\Pggns\MidocoApi\Order\StructType\FeeTypeLocalization $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\FeeTypeLocalization) {
            throw new InvalidArgumentException(sprintf('The FeeTypeLocalization property can only contain items of type \Pggns\MidocoApi\Order\StructType\FeeTypeLocalization, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FeeTypeLocalization[] = $item;
        
        return $this;
    }
    /**
     * Get isSegmentMultiply value
     * @return bool|null
     */
    public function getIsSegmentMultiply(): ?bool
    {
        return $this->isSegmentMultiply;
    }
    /**
     * Set isSegmentMultiply value
     * @param bool $isSegmentMultiply
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setIsSegmentMultiply(?bool $isSegmentMultiply = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSegmentMultiply) && !is_bool($isSegmentMultiply)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSegmentMultiply, true), gettype($isSegmentMultiply)), __LINE__);
        }
        $this->isSegmentMultiply = $isSegmentMultiply;
        
        return $this;
    }
    /**
     * Get isTravellerMultiply value
     * @return bool|null
     */
    public function getIsTravellerMultiply(): ?bool
    {
        return $this->isTravellerMultiply;
    }
    /**
     * Set isTravellerMultiply value
     * @param bool $isTravellerMultiply
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setIsTravellerMultiply(?bool $isTravellerMultiply = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTravellerMultiply) && !is_bool($isTravellerMultiply)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTravellerMultiply, true), gettype($isTravellerMultiply)), __LINE__);
        }
        $this->isTravellerMultiply = $isTravellerMultiply;
        
        return $this;
    }
    /**
     * Get MidocoTouchedVatCode value
     * @return \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType[]
     */
    public function getMidocoTouchedVatCode(): ?array
    {
        return $this->MidocoTouchedVatCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTouchedVatCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTouchedVatCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTouchedVatCodeForArrayConstraintFromSetMidocoTouchedVatCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCalcItemDetailsInfo4PrintingMidocoTouchedVatCodeItem) {
            // validation for constraint: itemType
            if (!$midocoCalcItemDetailsInfo4PrintingMidocoTouchedVatCodeItem instanceof \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType) {
                $invalidValues[] = is_object($midocoCalcItemDetailsInfo4PrintingMidocoTouchedVatCodeItem) ? get_class($midocoCalcItemDetailsInfo4PrintingMidocoTouchedVatCodeItem) : sprintf('%s(%s)', gettype($midocoCalcItemDetailsInfo4PrintingMidocoTouchedVatCodeItem), var_export($midocoCalcItemDetailsInfo4PrintingMidocoTouchedVatCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTouchedVatCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTouchedVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType[] $midocoTouchedVatCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setMidocoTouchedVatCode(?array $midocoTouchedVatCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTouchedVatCodeArrayErrorMessage = self::validateMidocoTouchedVatCodeForArrayConstraintFromSetMidocoTouchedVatCode($midocoTouchedVatCode))) {
            throw new InvalidArgumentException($midocoTouchedVatCodeArrayErrorMessage, __LINE__);
        }
        $this->MidocoTouchedVatCode = $midocoTouchedVatCode;
        
        return $this;
    }
    /**
     * Add item to MidocoTouchedVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function addToMidocoTouchedVatCode(\Pggns\MidocoApi\Order\StructType\TouchedVatCodeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType) {
            throw new InvalidArgumentException(sprintf('The MidocoTouchedVatCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTouchedVatCode[] = $item;
        
        return $this;
    }
    /**
     * Get isMarginVat value
     * @return bool|null
     */
    public function getIsMarginVat(): ?bool
    {
        return $this->isMarginVat;
    }
    /**
     * Set isMarginVat value
     * @param bool $isMarginVat
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCalcItemDetailsInfo4Printing
     */
    public function setIsMarginVat(?bool $isMarginVat = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isMarginVat) && !is_bool($isMarginVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMarginVat, true), gettype($isMarginVat)), __LINE__);
        }
        $this->isMarginVat = $isMarginVat;
        
        return $this;
    }
}
