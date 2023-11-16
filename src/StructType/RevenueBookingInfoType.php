<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RevenueBookingInfoType StructType
 * @subpackage Structs
 */
class RevenueBookingInfoType extends RevenueBookingDTO
{
    /**
     * The MidocoRevenueBookingVatDiv
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRevenueBookingVatDiv
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv[]
     */
    protected array $MidocoRevenueBookingVatDiv = [];
    /**
     * The MidocoTravelnoPurchaseAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelnoPurchaseAssignment
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment[]
     */
    protected array $MidocoTravelnoPurchaseAssignment = [];
    /**
     * The newTotalAmount
     * @var float|null
     */
    protected ?float $newTotalAmount = null;
    /**
     * The bookedSupplierInvoiceAmount
     * @var float|null
     */
    protected ?float $bookedSupplierInvoiceAmount = null;
    /**
     * The bookedOriginalSupplierInvoiceAmount
     * @var float|null
     */
    protected ?float $bookedOriginalSupplierInvoiceAmount = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The entryRestAsProv
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $entryRestAsProv = null;
    /**
     * The foreignCurrencyExchangeRate
     * @var float|null
     */
    protected ?float $foreignCurrencyExchangeRate = null;
    /**
     * The preventPaymentForEntry
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $preventPaymentForEntry = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * Constructor method for RevenueBookingInfoType
     * @uses RevenueBookingInfoType::setMidocoRevenueBookingVatDiv()
     * @uses RevenueBookingInfoType::setMidocoTravelnoPurchaseAssignment()
     * @uses RevenueBookingInfoType::setNewTotalAmount()
     * @uses RevenueBookingInfoType::setBookedSupplierInvoiceAmount()
     * @uses RevenueBookingInfoType::setBookedOriginalSupplierInvoiceAmount()
     * @uses RevenueBookingInfoType::setCostCentre()
     * @uses RevenueBookingInfoType::setEntryRestAsProv()
     * @uses RevenueBookingInfoType::setForeignCurrencyExchangeRate()
     * @uses RevenueBookingInfoType::setPreventPaymentForEntry()
     * @uses RevenueBookingInfoType::setCustomerId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv[] $midocoRevenueBookingVatDiv
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment[] $midocoTravelnoPurchaseAssignment
     * @param float $newTotalAmount
     * @param float $bookedSupplierInvoiceAmount
     * @param float $bookedOriginalSupplierInvoiceAmount
     * @param string $costCentre
     * @param bool $entryRestAsProv
     * @param float $foreignCurrencyExchangeRate
     * @param bool $preventPaymentForEntry
     * @param int $customerId
     */
    public function __construct(array $midocoRevenueBookingVatDiv = [], array $midocoTravelnoPurchaseAssignment = [], ?float $newTotalAmount = null, ?float $bookedSupplierInvoiceAmount = null, ?float $bookedOriginalSupplierInvoiceAmount = null, ?string $costCentre = null, ?bool $entryRestAsProv = false, ?float $foreignCurrencyExchangeRate = null, ?bool $preventPaymentForEntry = false, ?int $customerId = null)
    {
        $this
            ->setMidocoRevenueBookingVatDiv($midocoRevenueBookingVatDiv)
            ->setMidocoTravelnoPurchaseAssignment($midocoTravelnoPurchaseAssignment)
            ->setNewTotalAmount($newTotalAmount)
            ->setBookedSupplierInvoiceAmount($bookedSupplierInvoiceAmount)
            ->setBookedOriginalSupplierInvoiceAmount($bookedOriginalSupplierInvoiceAmount)
            ->setCostCentre($costCentre)
            ->setEntryRestAsProv($entryRestAsProv)
            ->setForeignCurrencyExchangeRate($foreignCurrencyExchangeRate)
            ->setPreventPaymentForEntry($preventPaymentForEntry)
            ->setCustomerId($customerId);
    }
    /**
     * Get MidocoRevenueBookingVatDiv value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv[]
     */
    public function getMidocoRevenueBookingVatDiv(): array
    {
        return $this->MidocoRevenueBookingVatDiv;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRevenueBookingVatDiv method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRevenueBookingVatDiv method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRevenueBookingVatDivForArrayConstraintsFromSetMidocoRevenueBookingVatDiv(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $revenueBookingInfoTypeMidocoRevenueBookingVatDivItem) {
            // validation for constraint: itemType
            if (!$revenueBookingInfoTypeMidocoRevenueBookingVatDivItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv) {
                $invalidValues[] = is_object($revenueBookingInfoTypeMidocoRevenueBookingVatDivItem) ? get_class($revenueBookingInfoTypeMidocoRevenueBookingVatDivItem) : sprintf('%s(%s)', gettype($revenueBookingInfoTypeMidocoRevenueBookingVatDivItem), var_export($revenueBookingInfoTypeMidocoRevenueBookingVatDivItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRevenueBookingVatDiv property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRevenueBookingVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv[] $midocoRevenueBookingVatDiv
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
     */
    public function setMidocoRevenueBookingVatDiv(array $midocoRevenueBookingVatDiv = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRevenueBookingVatDivArrayErrorMessage = self::validateMidocoRevenueBookingVatDivForArrayConstraintsFromSetMidocoRevenueBookingVatDiv($midocoRevenueBookingVatDiv))) {
            throw new InvalidArgumentException($midocoRevenueBookingVatDivArrayErrorMessage, __LINE__);
        }
        $this->MidocoRevenueBookingVatDiv = $midocoRevenueBookingVatDiv;
        
        return $this;
    }
    /**
     * Add item to MidocoRevenueBookingVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $item
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
     */
    public function addToMidocoRevenueBookingVatDiv(\Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv) {
            throw new InvalidArgumentException(sprintf('The MidocoRevenueBookingVatDiv property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRevenueBookingVatDiv[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoTravelnoPurchaseAssignment value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment[]
     */
    public function getMidocoTravelnoPurchaseAssignment(): array
    {
        return $this->MidocoTravelnoPurchaseAssignment;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelnoPurchaseAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelnoPurchaseAssignment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelnoPurchaseAssignmentForArrayConstraintsFromSetMidocoTravelnoPurchaseAssignment(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $revenueBookingInfoTypeMidocoTravelnoPurchaseAssignmentItem) {
            // validation for constraint: itemType
            if (!$revenueBookingInfoTypeMidocoTravelnoPurchaseAssignmentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment) {
                $invalidValues[] = is_object($revenueBookingInfoTypeMidocoTravelnoPurchaseAssignmentItem) ? get_class($revenueBookingInfoTypeMidocoTravelnoPurchaseAssignmentItem) : sprintf('%s(%s)', gettype($revenueBookingInfoTypeMidocoTravelnoPurchaseAssignmentItem), var_export($revenueBookingInfoTypeMidocoTravelnoPurchaseAssignmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelnoPurchaseAssignment property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelnoPurchaseAssignment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment[] $midocoTravelnoPurchaseAssignment
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
     */
    public function setMidocoTravelnoPurchaseAssignment(array $midocoTravelnoPurchaseAssignment = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelnoPurchaseAssignmentArrayErrorMessage = self::validateMidocoTravelnoPurchaseAssignmentForArrayConstraintsFromSetMidocoTravelnoPurchaseAssignment($midocoTravelnoPurchaseAssignment))) {
            throw new InvalidArgumentException($midocoTravelnoPurchaseAssignmentArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelnoPurchaseAssignment = $midocoTravelnoPurchaseAssignment;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelnoPurchaseAssignment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment $item
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
     */
    public function addToMidocoTravelnoPurchaseAssignment(\Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelnoPurchaseAssignment property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelnoPurchaseAssignment[] = $item;
        
        return $this;
    }
    /**
     * Get newTotalAmount value
     * @return float|null
     */
    public function getNewTotalAmount(): ?float
    {
        return $this->newTotalAmount;
    }
    /**
     * Set newTotalAmount value
     * @param float $newTotalAmount
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
     */
    public function setNewTotalAmount(?float $newTotalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($newTotalAmount) && !(is_float($newTotalAmount) || is_numeric($newTotalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($newTotalAmount, true), gettype($newTotalAmount)), __LINE__);
        }
        $this->newTotalAmount = $newTotalAmount;
        
        return $this;
    }
    /**
     * Get bookedSupplierInvoiceAmount value
     * @return float|null
     */
    public function getBookedSupplierInvoiceAmount(): ?float
    {
        return $this->bookedSupplierInvoiceAmount;
    }
    /**
     * Set bookedSupplierInvoiceAmount value
     * @param float $bookedSupplierInvoiceAmount
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
     */
    public function setBookedSupplierInvoiceAmount(?float $bookedSupplierInvoiceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($bookedSupplierInvoiceAmount) && !(is_float($bookedSupplierInvoiceAmount) || is_numeric($bookedSupplierInvoiceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookedSupplierInvoiceAmount, true), gettype($bookedSupplierInvoiceAmount)), __LINE__);
        }
        $this->bookedSupplierInvoiceAmount = $bookedSupplierInvoiceAmount;
        
        return $this;
    }
    /**
     * Get bookedOriginalSupplierInvoiceAmount value
     * @return float|null
     */
    public function getBookedOriginalSupplierInvoiceAmount(): ?float
    {
        return $this->bookedOriginalSupplierInvoiceAmount;
    }
    /**
     * Set bookedOriginalSupplierInvoiceAmount value
     * @param float $bookedOriginalSupplierInvoiceAmount
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
     */
    public function setBookedOriginalSupplierInvoiceAmount(?float $bookedOriginalSupplierInvoiceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($bookedOriginalSupplierInvoiceAmount) && !(is_float($bookedOriginalSupplierInvoiceAmount) || is_numeric($bookedOriginalSupplierInvoiceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookedOriginalSupplierInvoiceAmount, true), gettype($bookedOriginalSupplierInvoiceAmount)), __LINE__);
        }
        $this->bookedOriginalSupplierInvoiceAmount = $bookedOriginalSupplierInvoiceAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
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
     * Get entryRestAsProv value
     * @return bool|null
     */
    public function getEntryRestAsProv(): ?bool
    {
        return $this->entryRestAsProv;
    }
    /**
     * Set entryRestAsProv value
     * @param bool $entryRestAsProv
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
     */
    public function setEntryRestAsProv(?bool $entryRestAsProv = false): self
    {
        // validation for constraint: boolean
        if (!is_null($entryRestAsProv) && !is_bool($entryRestAsProv)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($entryRestAsProv, true), gettype($entryRestAsProv)), __LINE__);
        }
        $this->entryRestAsProv = $entryRestAsProv;
        
        return $this;
    }
    /**
     * Get foreignCurrencyExchangeRate value
     * @return float|null
     */
    public function getForeignCurrencyExchangeRate(): ?float
    {
        return $this->foreignCurrencyExchangeRate;
    }
    /**
     * Set foreignCurrencyExchangeRate value
     * @param float $foreignCurrencyExchangeRate
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
     */
    public function setForeignCurrencyExchangeRate(?float $foreignCurrencyExchangeRate = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignCurrencyExchangeRate) && !(is_float($foreignCurrencyExchangeRate) || is_numeric($foreignCurrencyExchangeRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignCurrencyExchangeRate, true), gettype($foreignCurrencyExchangeRate)), __LINE__);
        }
        $this->foreignCurrencyExchangeRate = $foreignCurrencyExchangeRate;
        
        return $this;
    }
    /**
     * Get preventPaymentForEntry value
     * @return bool|null
     */
    public function getPreventPaymentForEntry(): ?bool
    {
        return $this->preventPaymentForEntry;
    }
    /**
     * Set preventPaymentForEntry value
     * @param bool $preventPaymentForEntry
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
     */
    public function setPreventPaymentForEntry(?bool $preventPaymentForEntry = false): self
    {
        // validation for constraint: boolean
        if (!is_null($preventPaymentForEntry) && !is_bool($preventPaymentForEntry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventPaymentForEntry, true), gettype($preventPaymentForEntry)), __LINE__);
        }
        $this->preventPaymentForEntry = $preventPaymentForEntry;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\RevenueBookingInfoType
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
}
