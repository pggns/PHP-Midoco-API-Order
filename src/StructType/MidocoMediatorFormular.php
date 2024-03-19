<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMediatorFormular StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMediatorFormular extends AbstractStructBase
{
    /**
     * The sellPassengerName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $sellPassengerName = null;
    /**
     * The sellPassengerFirstName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $sellPassengerFirstName = null;
    /**
     * The sellPassengerSalutation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $sellPassengerSalutation = null;
    /**
     * The sellPassengerTitle
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $sellPassengerTitle = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The customerFirstName
     * @var string|null
     */
    protected ?string $customerFirstName = null;
    /**
     * The customerStreetAndNumber
     * @var string|null
     */
    protected ?string $customerStreetAndNumber = null;
    /**
     * The customerPostalCode
     * @var string|null
     */
    protected ?string $customerPostalCode = null;
    /**
     * The customerCity
     * @var string|null
     */
    protected ?string $customerCity = null;
    /**
     * The customerPhone
     * @var string|null
     */
    protected ?string $customerPhone = null;
    /**
     * The itemPrice
     * @var float|null
     */
    protected ?float $itemPrice = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The inkassoMode
     * @var string|null
     */
    protected ?string $inkassoMode = null;
    /**
     * The remarks
     * @var string|null
     */
    protected ?string $remarks = null;
    /**
     * The donationToStreetChildren
     * @var int|null
     */
    protected ?int $donationToStreetChildren = null;
    /**
     * The agencyNumber
     * @var string|null
     */
    protected ?string $agencyNumber = null;
    /**
     * The supplierCategory
     * @var string|null
     */
    protected ?string $supplierCategory = null;
    /**
     * The bookingDate
     * @var string|null
     */
    protected ?string $bookingDate = null;
    /**
     * The leistung
     * @var string|null
     */
    protected ?string $leistung = null;
    /**
     * The belegung
     * @var string|null
     */
    protected ?string $belegung = null;
    /**
     * The hoteldaten
     * @var string|null
     */
    protected ?string $hoteldaten = null;
    /**
     * The abflughafen
     * @var string|null
     */
    protected ?string $abflughafen = null;
    /**
     * The verpflegung
     * @var string|null
     */
    protected ?string $verpflegung = null;
    /**
     * The bonusCurrentMonth
     * @var string|null
     */
    protected ?string $bonusCurrentMonth = null;
    /**
     * The competitiveBooking
     * @var string|null
     */
    protected ?string $competitiveBooking = null;
    /**
     * The additionalText
     * @var string|null
     */
    protected ?string $additionalText = null;
    /**
     * The otherRemarks
     * @var string|null
     */
    protected ?string $otherRemarks = null;
    /**
     * The worldOfTUI
     * @var string|null
     */
    protected ?string $worldOfTUI = null;
    /**
     * The ccEmail
     * @var string|null
     */
    protected ?string $ccEmail = null;
    /**
     * The bookingChange
     * @var bool|null
     */
    protected ?bool $bookingChange = null;
    /**
     * The bookingCancel
     * @var bool|null
     */
    protected ?bool $bookingCancel = null;
    /**
     * The externalDocumentRepoId
     * @var int|null
     */
    protected ?int $externalDocumentRepoId = null;
    /**
     * The externalDocumentFilename
     * @var string|null
     */
    protected ?string $externalDocumentFilename = null;
    /**
     * Constructor method for MidocoMediatorFormular
     * @uses MidocoMediatorFormular::setSellPassengerName()
     * @uses MidocoMediatorFormular::setSellPassengerFirstName()
     * @uses MidocoMediatorFormular::setSellPassengerSalutation()
     * @uses MidocoMediatorFormular::setSellPassengerTitle()
     * @uses MidocoMediatorFormular::setCustomerId()
     * @uses MidocoMediatorFormular::setMediatorId()
     * @uses MidocoMediatorFormular::setBookingId()
     * @uses MidocoMediatorFormular::setSupplierId()
     * @uses MidocoMediatorFormular::setCustomerName()
     * @uses MidocoMediatorFormular::setCustomerFirstName()
     * @uses MidocoMediatorFormular::setCustomerStreetAndNumber()
     * @uses MidocoMediatorFormular::setCustomerPostalCode()
     * @uses MidocoMediatorFormular::setCustomerCity()
     * @uses MidocoMediatorFormular::setCustomerPhone()
     * @uses MidocoMediatorFormular::setItemPrice()
     * @uses MidocoMediatorFormular::setStartTravel()
     * @uses MidocoMediatorFormular::setEndTravel()
     * @uses MidocoMediatorFormular::setInkassoMode()
     * @uses MidocoMediatorFormular::setRemarks()
     * @uses MidocoMediatorFormular::setDonationToStreetChildren()
     * @uses MidocoMediatorFormular::setAgencyNumber()
     * @uses MidocoMediatorFormular::setSupplierCategory()
     * @uses MidocoMediatorFormular::setBookingDate()
     * @uses MidocoMediatorFormular::setLeistung()
     * @uses MidocoMediatorFormular::setBelegung()
     * @uses MidocoMediatorFormular::setHoteldaten()
     * @uses MidocoMediatorFormular::setAbflughafen()
     * @uses MidocoMediatorFormular::setVerpflegung()
     * @uses MidocoMediatorFormular::setBonusCurrentMonth()
     * @uses MidocoMediatorFormular::setCompetitiveBooking()
     * @uses MidocoMediatorFormular::setAdditionalText()
     * @uses MidocoMediatorFormular::setOtherRemarks()
     * @uses MidocoMediatorFormular::setWorldOfTUI()
     * @uses MidocoMediatorFormular::setCcEmail()
     * @uses MidocoMediatorFormular::setBookingChange()
     * @uses MidocoMediatorFormular::setBookingCancel()
     * @uses MidocoMediatorFormular::setExternalDocumentRepoId()
     * @uses MidocoMediatorFormular::setExternalDocumentFilename()
     * @param string[] $sellPassengerName
     * @param string[] $sellPassengerFirstName
     * @param string[] $sellPassengerSalutation
     * @param string[] $sellPassengerTitle
     * @param int $customerId
     * @param string $mediatorId
     * @param string $bookingId
     * @param string $supplierId
     * @param string $customerName
     * @param string $customerFirstName
     * @param string $customerStreetAndNumber
     * @param string $customerPostalCode
     * @param string $customerCity
     * @param string $customerPhone
     * @param float $itemPrice
     * @param string $startTravel
     * @param string $endTravel
     * @param string $inkassoMode
     * @param string $remarks
     * @param int $donationToStreetChildren
     * @param string $agencyNumber
     * @param string $supplierCategory
     * @param string $bookingDate
     * @param string $leistung
     * @param string $belegung
     * @param string $hoteldaten
     * @param string $abflughafen
     * @param string $verpflegung
     * @param string $bonusCurrentMonth
     * @param string $competitiveBooking
     * @param string $additionalText
     * @param string $otherRemarks
     * @param string $worldOfTUI
     * @param string $ccEmail
     * @param bool $bookingChange
     * @param bool $bookingCancel
     * @param int $externalDocumentRepoId
     * @param string $externalDocumentFilename
     */
    public function __construct(?array $sellPassengerName = null, ?array $sellPassengerFirstName = null, ?array $sellPassengerSalutation = null, ?array $sellPassengerTitle = null, ?int $customerId = null, ?string $mediatorId = null, ?string $bookingId = null, ?string $supplierId = null, ?string $customerName = null, ?string $customerFirstName = null, ?string $customerStreetAndNumber = null, ?string $customerPostalCode = null, ?string $customerCity = null, ?string $customerPhone = null, ?float $itemPrice = null, ?string $startTravel = null, ?string $endTravel = null, ?string $inkassoMode = null, ?string $remarks = null, ?int $donationToStreetChildren = null, ?string $agencyNumber = null, ?string $supplierCategory = null, ?string $bookingDate = null, ?string $leistung = null, ?string $belegung = null, ?string $hoteldaten = null, ?string $abflughafen = null, ?string $verpflegung = null, ?string $bonusCurrentMonth = null, ?string $competitiveBooking = null, ?string $additionalText = null, ?string $otherRemarks = null, ?string $worldOfTUI = null, ?string $ccEmail = null, ?bool $bookingChange = null, ?bool $bookingCancel = null, ?int $externalDocumentRepoId = null, ?string $externalDocumentFilename = null)
    {
        $this
            ->setSellPassengerName($sellPassengerName)
            ->setSellPassengerFirstName($sellPassengerFirstName)
            ->setSellPassengerSalutation($sellPassengerSalutation)
            ->setSellPassengerTitle($sellPassengerTitle)
            ->setCustomerId($customerId)
            ->setMediatorId($mediatorId)
            ->setBookingId($bookingId)
            ->setSupplierId($supplierId)
            ->setCustomerName($customerName)
            ->setCustomerFirstName($customerFirstName)
            ->setCustomerStreetAndNumber($customerStreetAndNumber)
            ->setCustomerPostalCode($customerPostalCode)
            ->setCustomerCity($customerCity)
            ->setCustomerPhone($customerPhone)
            ->setItemPrice($itemPrice)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setInkassoMode($inkassoMode)
            ->setRemarks($remarks)
            ->setDonationToStreetChildren($donationToStreetChildren)
            ->setAgencyNumber($agencyNumber)
            ->setSupplierCategory($supplierCategory)
            ->setBookingDate($bookingDate)
            ->setLeistung($leistung)
            ->setBelegung($belegung)
            ->setHoteldaten($hoteldaten)
            ->setAbflughafen($abflughafen)
            ->setVerpflegung($verpflegung)
            ->setBonusCurrentMonth($bonusCurrentMonth)
            ->setCompetitiveBooking($competitiveBooking)
            ->setAdditionalText($additionalText)
            ->setOtherRemarks($otherRemarks)
            ->setWorldOfTUI($worldOfTUI)
            ->setCcEmail($ccEmail)
            ->setBookingChange($bookingChange)
            ->setBookingCancel($bookingCancel)
            ->setExternalDocumentRepoId($externalDocumentRepoId)
            ->setExternalDocumentFilename($externalDocumentFilename);
    }
    /**
     * Get sellPassengerName value
     * @return string[]
     */
    public function getSellPassengerName(): ?array
    {
        return $this->sellPassengerName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSellPassengerName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellPassengerName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellPassengerNameForArrayConstraintFromSetSellPassengerName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMediatorFormularSellPassengerNameItem) {
            // validation for constraint: itemType
            if (!is_string($midocoMediatorFormularSellPassengerNameItem)) {
                $invalidValues[] = is_object($midocoMediatorFormularSellPassengerNameItem) ? get_class($midocoMediatorFormularSellPassengerNameItem) : sprintf('%s(%s)', gettype($midocoMediatorFormularSellPassengerNameItem), var_export($midocoMediatorFormularSellPassengerNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sellPassengerName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set sellPassengerName value
     * @throws InvalidArgumentException
     * @param string[] $sellPassengerName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setSellPassengerName(?array $sellPassengerName = null): self
    {
        // validation for constraint: array
        if ('' !== ($sellPassengerNameArrayErrorMessage = self::validateSellPassengerNameForArrayConstraintFromSetSellPassengerName($sellPassengerName))) {
            throw new InvalidArgumentException($sellPassengerNameArrayErrorMessage, __LINE__);
        }
        $this->sellPassengerName = $sellPassengerName;
        
        return $this;
    }
    /**
     * Add item to sellPassengerName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function addToSellPassengerName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The sellPassengerName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sellPassengerName[] = $item;
        
        return $this;
    }
    /**
     * Get sellPassengerFirstName value
     * @return string[]
     */
    public function getSellPassengerFirstName(): ?array
    {
        return $this->sellPassengerFirstName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSellPassengerFirstName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellPassengerFirstName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellPassengerFirstNameForArrayConstraintFromSetSellPassengerFirstName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMediatorFormularSellPassengerFirstNameItem) {
            // validation for constraint: itemType
            if (!is_string($midocoMediatorFormularSellPassengerFirstNameItem)) {
                $invalidValues[] = is_object($midocoMediatorFormularSellPassengerFirstNameItem) ? get_class($midocoMediatorFormularSellPassengerFirstNameItem) : sprintf('%s(%s)', gettype($midocoMediatorFormularSellPassengerFirstNameItem), var_export($midocoMediatorFormularSellPassengerFirstNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sellPassengerFirstName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set sellPassengerFirstName value
     * @throws InvalidArgumentException
     * @param string[] $sellPassengerFirstName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setSellPassengerFirstName(?array $sellPassengerFirstName = null): self
    {
        // validation for constraint: array
        if ('' !== ($sellPassengerFirstNameArrayErrorMessage = self::validateSellPassengerFirstNameForArrayConstraintFromSetSellPassengerFirstName($sellPassengerFirstName))) {
            throw new InvalidArgumentException($sellPassengerFirstNameArrayErrorMessage, __LINE__);
        }
        $this->sellPassengerFirstName = $sellPassengerFirstName;
        
        return $this;
    }
    /**
     * Add item to sellPassengerFirstName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function addToSellPassengerFirstName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The sellPassengerFirstName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sellPassengerFirstName[] = $item;
        
        return $this;
    }
    /**
     * Get sellPassengerSalutation value
     * @return string[]
     */
    public function getSellPassengerSalutation(): ?array
    {
        return $this->sellPassengerSalutation;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSellPassengerSalutation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellPassengerSalutation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellPassengerSalutationForArrayConstraintFromSetSellPassengerSalutation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMediatorFormularSellPassengerSalutationItem) {
            // validation for constraint: itemType
            if (!is_string($midocoMediatorFormularSellPassengerSalutationItem)) {
                $invalidValues[] = is_object($midocoMediatorFormularSellPassengerSalutationItem) ? get_class($midocoMediatorFormularSellPassengerSalutationItem) : sprintf('%s(%s)', gettype($midocoMediatorFormularSellPassengerSalutationItem), var_export($midocoMediatorFormularSellPassengerSalutationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sellPassengerSalutation property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set sellPassengerSalutation value
     * @throws InvalidArgumentException
     * @param string[] $sellPassengerSalutation
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setSellPassengerSalutation(?array $sellPassengerSalutation = null): self
    {
        // validation for constraint: array
        if ('' !== ($sellPassengerSalutationArrayErrorMessage = self::validateSellPassengerSalutationForArrayConstraintFromSetSellPassengerSalutation($sellPassengerSalutation))) {
            throw new InvalidArgumentException($sellPassengerSalutationArrayErrorMessage, __LINE__);
        }
        $this->sellPassengerSalutation = $sellPassengerSalutation;
        
        return $this;
    }
    /**
     * Add item to sellPassengerSalutation value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function addToSellPassengerSalutation(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The sellPassengerSalutation property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sellPassengerSalutation[] = $item;
        
        return $this;
    }
    /**
     * Get sellPassengerTitle value
     * @return string[]
     */
    public function getSellPassengerTitle(): ?array
    {
        return $this->sellPassengerTitle;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSellPassengerTitle method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSellPassengerTitle method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSellPassengerTitleForArrayConstraintFromSetSellPassengerTitle(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoMediatorFormularSellPassengerTitleItem) {
            // validation for constraint: itemType
            if (!is_string($midocoMediatorFormularSellPassengerTitleItem)) {
                $invalidValues[] = is_object($midocoMediatorFormularSellPassengerTitleItem) ? get_class($midocoMediatorFormularSellPassengerTitleItem) : sprintf('%s(%s)', gettype($midocoMediatorFormularSellPassengerTitleItem), var_export($midocoMediatorFormularSellPassengerTitleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The sellPassengerTitle property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set sellPassengerTitle value
     * @throws InvalidArgumentException
     * @param string[] $sellPassengerTitle
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setSellPassengerTitle(?array $sellPassengerTitle = null): self
    {
        // validation for constraint: array
        if ('' !== ($sellPassengerTitleArrayErrorMessage = self::validateSellPassengerTitleForArrayConstraintFromSetSellPassengerTitle($sellPassengerTitle))) {
            throw new InvalidArgumentException($sellPassengerTitleArrayErrorMessage, __LINE__);
        }
        $this->sellPassengerTitle = $sellPassengerTitle;
        
        return $this;
    }
    /**
     * Add item to sellPassengerTitle value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function addToSellPassengerTitle(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The sellPassengerTitle property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->sellPassengerTitle[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
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
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
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
     * Get customerFirstName value
     * @return string|null
     */
    public function getCustomerFirstName(): ?string
    {
        return $this->customerFirstName;
    }
    /**
     * Set customerFirstName value
     * @param string $customerFirstName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setCustomerFirstName(?string $customerFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerFirstName) && !is_string($customerFirstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerFirstName, true), gettype($customerFirstName)), __LINE__);
        }
        $this->customerFirstName = $customerFirstName;
        
        return $this;
    }
    /**
     * Get customerStreetAndNumber value
     * @return string|null
     */
    public function getCustomerStreetAndNumber(): ?string
    {
        return $this->customerStreetAndNumber;
    }
    /**
     * Set customerStreetAndNumber value
     * @param string $customerStreetAndNumber
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setCustomerStreetAndNumber(?string $customerStreetAndNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($customerStreetAndNumber) && !is_string($customerStreetAndNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerStreetAndNumber, true), gettype($customerStreetAndNumber)), __LINE__);
        }
        $this->customerStreetAndNumber = $customerStreetAndNumber;
        
        return $this;
    }
    /**
     * Get customerPostalCode value
     * @return string|null
     */
    public function getCustomerPostalCode(): ?string
    {
        return $this->customerPostalCode;
    }
    /**
     * Set customerPostalCode value
     * @param string $customerPostalCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setCustomerPostalCode(?string $customerPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($customerPostalCode) && !is_string($customerPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerPostalCode, true), gettype($customerPostalCode)), __LINE__);
        }
        $this->customerPostalCode = $customerPostalCode;
        
        return $this;
    }
    /**
     * Get customerCity value
     * @return string|null
     */
    public function getCustomerCity(): ?string
    {
        return $this->customerCity;
    }
    /**
     * Set customerCity value
     * @param string $customerCity
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setCustomerCity(?string $customerCity = null): self
    {
        // validation for constraint: string
        if (!is_null($customerCity) && !is_string($customerCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerCity, true), gettype($customerCity)), __LINE__);
        }
        $this->customerCity = $customerCity;
        
        return $this;
    }
    /**
     * Get customerPhone value
     * @return string|null
     */
    public function getCustomerPhone(): ?string
    {
        return $this->customerPhone;
    }
    /**
     * Set customerPhone value
     * @param string $customerPhone
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setCustomerPhone(?string $customerPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($customerPhone) && !is_string($customerPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerPhone, true), gettype($customerPhone)), __LINE__);
        }
        $this->customerPhone = $customerPhone;
        
        return $this;
    }
    /**
     * Get itemPrice value
     * @return float|null
     */
    public function getItemPrice(): ?float
    {
        return $this->itemPrice;
    }
    /**
     * Set itemPrice value
     * @param float $itemPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setItemPrice(?float $itemPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($itemPrice) && !(is_float($itemPrice) || is_numeric($itemPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($itemPrice, true), gettype($itemPrice)), __LINE__);
        }
        $this->itemPrice = $itemPrice;
        
        return $this;
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
        return $this;
    }
    /**
     * Get inkassoMode value
     * @return string|null
     */
    public function getInkassoMode(): ?string
    {
        return $this->inkassoMode;
    }
    /**
     * Set inkassoMode value
     * @param string $inkassoMode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setInkassoMode(?string $inkassoMode = null): self
    {
        // validation for constraint: string
        if (!is_null($inkassoMode) && !is_string($inkassoMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inkassoMode, true), gettype($inkassoMode)), __LINE__);
        }
        $this->inkassoMode = $inkassoMode;
        
        return $this;
    }
    /**
     * Get remarks value
     * @return string|null
     */
    public function getRemarks(): ?string
    {
        return $this->remarks;
    }
    /**
     * Set remarks value
     * @param string $remarks
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setRemarks(?string $remarks = null): self
    {
        // validation for constraint: string
        if (!is_null($remarks) && !is_string($remarks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remarks, true), gettype($remarks)), __LINE__);
        }
        $this->remarks = $remarks;
        
        return $this;
    }
    /**
     * Get donationToStreetChildren value
     * @return int|null
     */
    public function getDonationToStreetChildren(): ?int
    {
        return $this->donationToStreetChildren;
    }
    /**
     * Set donationToStreetChildren value
     * @param int $donationToStreetChildren
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setDonationToStreetChildren(?int $donationToStreetChildren = null): self
    {
        // validation for constraint: int
        if (!is_null($donationToStreetChildren) && !(is_int($donationToStreetChildren) || ctype_digit($donationToStreetChildren))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($donationToStreetChildren, true), gettype($donationToStreetChildren)), __LINE__);
        }
        $this->donationToStreetChildren = $donationToStreetChildren;
        
        return $this;
    }
    /**
     * Get agencyNumber value
     * @return string|null
     */
    public function getAgencyNumber(): ?string
    {
        return $this->agencyNumber;
    }
    /**
     * Set agencyNumber value
     * @param string $agencyNumber
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setAgencyNumber(?string $agencyNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyNumber) && !is_string($agencyNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyNumber, true), gettype($agencyNumber)), __LINE__);
        }
        $this->agencyNumber = $agencyNumber;
        
        return $this;
    }
    /**
     * Get supplierCategory value
     * @return string|null
     */
    public function getSupplierCategory(): ?string
    {
        return $this->supplierCategory;
    }
    /**
     * Set supplierCategory value
     * @param string $supplierCategory
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setSupplierCategory(?string $supplierCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierCategory) && !is_string($supplierCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCategory, true), gettype($supplierCategory)), __LINE__);
        }
        $this->supplierCategory = $supplierCategory;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
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
     * Get leistung value
     * @return string|null
     */
    public function getLeistung(): ?string
    {
        return $this->leistung;
    }
    /**
     * Set leistung value
     * @param string $leistung
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setLeistung(?string $leistung = null): self
    {
        // validation for constraint: string
        if (!is_null($leistung) && !is_string($leistung)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($leistung, true), gettype($leistung)), __LINE__);
        }
        $this->leistung = $leistung;
        
        return $this;
    }
    /**
     * Get belegung value
     * @return string|null
     */
    public function getBelegung(): ?string
    {
        return $this->belegung;
    }
    /**
     * Set belegung value
     * @param string $belegung
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setBelegung(?string $belegung = null): self
    {
        // validation for constraint: string
        if (!is_null($belegung) && !is_string($belegung)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($belegung, true), gettype($belegung)), __LINE__);
        }
        $this->belegung = $belegung;
        
        return $this;
    }
    /**
     * Get hoteldaten value
     * @return string|null
     */
    public function getHoteldaten(): ?string
    {
        return $this->hoteldaten;
    }
    /**
     * Set hoteldaten value
     * @param string $hoteldaten
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setHoteldaten(?string $hoteldaten = null): self
    {
        // validation for constraint: string
        if (!is_null($hoteldaten) && !is_string($hoteldaten)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hoteldaten, true), gettype($hoteldaten)), __LINE__);
        }
        $this->hoteldaten = $hoteldaten;
        
        return $this;
    }
    /**
     * Get abflughafen value
     * @return string|null
     */
    public function getAbflughafen(): ?string
    {
        return $this->abflughafen;
    }
    /**
     * Set abflughafen value
     * @param string $abflughafen
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setAbflughafen(?string $abflughafen = null): self
    {
        // validation for constraint: string
        if (!is_null($abflughafen) && !is_string($abflughafen)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($abflughafen, true), gettype($abflughafen)), __LINE__);
        }
        $this->abflughafen = $abflughafen;
        
        return $this;
    }
    /**
     * Get verpflegung value
     * @return string|null
     */
    public function getVerpflegung(): ?string
    {
        return $this->verpflegung;
    }
    /**
     * Set verpflegung value
     * @param string $verpflegung
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setVerpflegung(?string $verpflegung = null): self
    {
        // validation for constraint: string
        if (!is_null($verpflegung) && !is_string($verpflegung)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verpflegung, true), gettype($verpflegung)), __LINE__);
        }
        $this->verpflegung = $verpflegung;
        
        return $this;
    }
    /**
     * Get bonusCurrentMonth value
     * @return string|null
     */
    public function getBonusCurrentMonth(): ?string
    {
        return $this->bonusCurrentMonth;
    }
    /**
     * Set bonusCurrentMonth value
     * @param string $bonusCurrentMonth
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setBonusCurrentMonth(?string $bonusCurrentMonth = null): self
    {
        // validation for constraint: string
        if (!is_null($bonusCurrentMonth) && !is_string($bonusCurrentMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bonusCurrentMonth, true), gettype($bonusCurrentMonth)), __LINE__);
        }
        $this->bonusCurrentMonth = $bonusCurrentMonth;
        
        return $this;
    }
    /**
     * Get competitiveBooking value
     * @return string|null
     */
    public function getCompetitiveBooking(): ?string
    {
        return $this->competitiveBooking;
    }
    /**
     * Set competitiveBooking value
     * @param string $competitiveBooking
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setCompetitiveBooking(?string $competitiveBooking = null): self
    {
        // validation for constraint: string
        if (!is_null($competitiveBooking) && !is_string($competitiveBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($competitiveBooking, true), gettype($competitiveBooking)), __LINE__);
        }
        $this->competitiveBooking = $competitiveBooking;
        
        return $this;
    }
    /**
     * Get additionalText value
     * @return string|null
     */
    public function getAdditionalText(): ?string
    {
        return $this->additionalText;
    }
    /**
     * Set additionalText value
     * @param string $additionalText
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setAdditionalText(?string $additionalText = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalText) && !is_string($additionalText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalText, true), gettype($additionalText)), __LINE__);
        }
        $this->additionalText = $additionalText;
        
        return $this;
    }
    /**
     * Get otherRemarks value
     * @return string|null
     */
    public function getOtherRemarks(): ?string
    {
        return $this->otherRemarks;
    }
    /**
     * Set otherRemarks value
     * @param string $otherRemarks
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setOtherRemarks(?string $otherRemarks = null): self
    {
        // validation for constraint: string
        if (!is_null($otherRemarks) && !is_string($otherRemarks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($otherRemarks, true), gettype($otherRemarks)), __LINE__);
        }
        $this->otherRemarks = $otherRemarks;
        
        return $this;
    }
    /**
     * Get worldOfTUI value
     * @return string|null
     */
    public function getWorldOfTUI(): ?string
    {
        return $this->worldOfTUI;
    }
    /**
     * Set worldOfTUI value
     * @param string $worldOfTUI
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setWorldOfTUI(?string $worldOfTUI = null): self
    {
        // validation for constraint: string
        if (!is_null($worldOfTUI) && !is_string($worldOfTUI)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($worldOfTUI, true), gettype($worldOfTUI)), __LINE__);
        }
        $this->worldOfTUI = $worldOfTUI;
        
        return $this;
    }
    /**
     * Get ccEmail value
     * @return string|null
     */
    public function getCcEmail(): ?string
    {
        return $this->ccEmail;
    }
    /**
     * Set ccEmail value
     * @param string $ccEmail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setCcEmail(?string $ccEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($ccEmail) && !is_string($ccEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccEmail, true), gettype($ccEmail)), __LINE__);
        }
        $this->ccEmail = $ccEmail;
        
        return $this;
    }
    /**
     * Get bookingChange value
     * @return bool|null
     */
    public function getBookingChange(): ?bool
    {
        return $this->bookingChange;
    }
    /**
     * Set bookingChange value
     * @param bool $bookingChange
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setBookingChange(?bool $bookingChange = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bookingChange) && !is_bool($bookingChange)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bookingChange, true), gettype($bookingChange)), __LINE__);
        }
        $this->bookingChange = $bookingChange;
        
        return $this;
    }
    /**
     * Get bookingCancel value
     * @return bool|null
     */
    public function getBookingCancel(): ?bool
    {
        return $this->bookingCancel;
    }
    /**
     * Set bookingCancel value
     * @param bool $bookingCancel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setBookingCancel(?bool $bookingCancel = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bookingCancel) && !is_bool($bookingCancel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bookingCancel, true), gettype($bookingCancel)), __LINE__);
        }
        $this->bookingCancel = $bookingCancel;
        
        return $this;
    }
    /**
     * Get externalDocumentRepoId value
     * @return int|null
     */
    public function getExternalDocumentRepoId(): ?int
    {
        return $this->externalDocumentRepoId;
    }
    /**
     * Set externalDocumentRepoId value
     * @param int $externalDocumentRepoId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setExternalDocumentRepoId(?int $externalDocumentRepoId = null): self
    {
        // validation for constraint: int
        if (!is_null($externalDocumentRepoId) && !(is_int($externalDocumentRepoId) || ctype_digit($externalDocumentRepoId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($externalDocumentRepoId, true), gettype($externalDocumentRepoId)), __LINE__);
        }
        $this->externalDocumentRepoId = $externalDocumentRepoId;
        
        return $this;
    }
    /**
     * Get externalDocumentFilename value
     * @return string|null
     */
    public function getExternalDocumentFilename(): ?string
    {
        return $this->externalDocumentFilename;
    }
    /**
     * Set externalDocumentFilename value
     * @param string $externalDocumentFilename
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
     */
    public function setExternalDocumentFilename(?string $externalDocumentFilename = null): self
    {
        // validation for constraint: string
        if (!is_null($externalDocumentFilename) && !is_string($externalDocumentFilename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalDocumentFilename, true), gettype($externalDocumentFilename)), __LINE__);
        }
        $this->externalDocumentFilename = $externalDocumentFilename;
        
        return $this;
    }
}
