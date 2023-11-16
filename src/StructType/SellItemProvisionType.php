<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellItemProvisionType StructType
 * @subpackage Structs
 */
class SellItemProvisionType extends SellItemProvisionDTO
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
     * The needsVatDivision
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $needsVatDivision = null;
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * The travelNoHandling
     * @var string|null
     */
    protected ?string $travelNoHandling = null;
    /**
     * The travelNoB2cPercent
     * @var float|null
     */
    protected ?float $travelNoB2cPercent = null;
    /**
     * The commissionVatFreeRc
     * @var bool|null
     */
    protected ?bool $commissionVatFreeRc = null;
    /**
     * The settlmAccountsSupplier
     * @var string|null
     */
    protected ?string $settlmAccountsSupplier = null;
    /**
     * The preventPaymentForEntry
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $preventPaymentForEntry = null;
    /**
     * The supplierInvoiceVatCode
     * @var string|null
     */
    protected ?string $supplierInvoiceVatCode = null;
    /**
     * The isStorno
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isStorno = null;
    /**
     * The stornoDate
     * @var string|null
     */
    protected ?string $stornoDate = null;
    /**
     * The baseBuyingPrice
     * @var float|null
     */
    protected ?float $baseBuyingPrice = null;
    /**
     * The supplierBuyingPrice
     * @var float|null
     */
    protected ?float $supplierBuyingPrice = null;
    /**
     * The originalSupplierInvoiceAmount
     * @var float|null
     */
    protected ?float $originalSupplierInvoiceAmount = null;
    /**
     * Constructor method for SellItemProvisionType
     * @uses SellItemProvisionType::setMidocoRevenueBookingVatDiv()
     * @uses SellItemProvisionType::setMidocoTravelnoPurchaseAssignment()
     * @uses SellItemProvisionType::setNeedsVatDivision()
     * @uses SellItemProvisionType::setTravelNo()
     * @uses SellItemProvisionType::setTravelNoHandling()
     * @uses SellItemProvisionType::setTravelNoB2cPercent()
     * @uses SellItemProvisionType::setCommissionVatFreeRc()
     * @uses SellItemProvisionType::setSettlmAccountsSupplier()
     * @uses SellItemProvisionType::setPreventPaymentForEntry()
     * @uses SellItemProvisionType::setSupplierInvoiceVatCode()
     * @uses SellItemProvisionType::setIsStorno()
     * @uses SellItemProvisionType::setStornoDate()
     * @uses SellItemProvisionType::setBaseBuyingPrice()
     * @uses SellItemProvisionType::setSupplierBuyingPrice()
     * @uses SellItemProvisionType::setOriginalSupplierInvoiceAmount()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv[] $midocoRevenueBookingVatDiv
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment[] $midocoTravelnoPurchaseAssignment
     * @param bool $needsVatDivision
     * @param string $travelNo
     * @param string $travelNoHandling
     * @param float $travelNoB2cPercent
     * @param bool $commissionVatFreeRc
     * @param string $settlmAccountsSupplier
     * @param bool $preventPaymentForEntry
     * @param string $supplierInvoiceVatCode
     * @param bool $isStorno
     * @param string $stornoDate
     * @param float $baseBuyingPrice
     * @param float $supplierBuyingPrice
     * @param float $originalSupplierInvoiceAmount
     */
    public function __construct(array $midocoRevenueBookingVatDiv = [], array $midocoTravelnoPurchaseAssignment = [], ?bool $needsVatDivision = false, ?string $travelNo = null, ?string $travelNoHandling = null, ?float $travelNoB2cPercent = null, ?bool $commissionVatFreeRc = null, ?string $settlmAccountsSupplier = null, ?bool $preventPaymentForEntry = false, ?string $supplierInvoiceVatCode = null, ?bool $isStorno = false, ?string $stornoDate = null, ?float $baseBuyingPrice = null, ?float $supplierBuyingPrice = null, ?float $originalSupplierInvoiceAmount = null)
    {
        $this
            ->setMidocoRevenueBookingVatDiv($midocoRevenueBookingVatDiv)
            ->setMidocoTravelnoPurchaseAssignment($midocoTravelnoPurchaseAssignment)
            ->setNeedsVatDivision($needsVatDivision)
            ->setTravelNo($travelNo)
            ->setTravelNoHandling($travelNoHandling)
            ->setTravelNoB2cPercent($travelNoB2cPercent)
            ->setCommissionVatFreeRc($commissionVatFreeRc)
            ->setSettlmAccountsSupplier($settlmAccountsSupplier)
            ->setPreventPaymentForEntry($preventPaymentForEntry)
            ->setSupplierInvoiceVatCode($supplierInvoiceVatCode)
            ->setIsStorno($isStorno)
            ->setStornoDate($stornoDate)
            ->setBaseBuyingPrice($baseBuyingPrice)
            ->setSupplierBuyingPrice($supplierBuyingPrice)
            ->setOriginalSupplierInvoiceAmount($originalSupplierInvoiceAmount);
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
        foreach ($values as $sellItemProvisionTypeMidocoRevenueBookingVatDivItem) {
            // validation for constraint: itemType
            if (!$sellItemProvisionTypeMidocoRevenueBookingVatDivItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv) {
                $invalidValues[] = is_object($sellItemProvisionTypeMidocoRevenueBookingVatDivItem) ? get_class($sellItemProvisionTypeMidocoRevenueBookingVatDivItem) : sprintf('%s(%s)', gettype($sellItemProvisionTypeMidocoRevenueBookingVatDivItem), var_export($sellItemProvisionTypeMidocoRevenueBookingVatDivItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
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
        foreach ($values as $sellItemProvisionTypeMidocoTravelnoPurchaseAssignmentItem) {
            // validation for constraint: itemType
            if (!$sellItemProvisionTypeMidocoTravelnoPurchaseAssignmentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment) {
                $invalidValues[] = is_object($sellItemProvisionTypeMidocoTravelnoPurchaseAssignmentItem) ? get_class($sellItemProvisionTypeMidocoTravelnoPurchaseAssignmentItem) : sprintf('%s(%s)', gettype($sellItemProvisionTypeMidocoTravelnoPurchaseAssignmentItem), var_export($sellItemProvisionTypeMidocoTravelnoPurchaseAssignmentItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
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
     * Get needsVatDivision value
     * @return bool|null
     */
    public function getNeedsVatDivision(): ?bool
    {
        return $this->needsVatDivision;
    }
    /**
     * Set needsVatDivision value
     * @param bool $needsVatDivision
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
     */
    public function setNeedsVatDivision(?bool $needsVatDivision = false): self
    {
        // validation for constraint: boolean
        if (!is_null($needsVatDivision) && !is_bool($needsVatDivision)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsVatDivision, true), gettype($needsVatDivision)), __LINE__);
        }
        $this->needsVatDivision = $needsVatDivision;
        
        return $this;
    }
    /**
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
    /**
     * Get travelNoHandling value
     * @return string|null
     */
    public function getTravelNoHandling(): ?string
    {
        return $this->travelNoHandling;
    }
    /**
     * Set travelNoHandling value
     * @param string $travelNoHandling
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
     */
    public function setTravelNoHandling(?string $travelNoHandling = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNoHandling) && !is_string($travelNoHandling)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNoHandling, true), gettype($travelNoHandling)), __LINE__);
        }
        $this->travelNoHandling = $travelNoHandling;
        
        return $this;
    }
    /**
     * Get travelNoB2cPercent value
     * @return float|null
     */
    public function getTravelNoB2cPercent(): ?float
    {
        return $this->travelNoB2cPercent;
    }
    /**
     * Set travelNoB2cPercent value
     * @param float $travelNoB2cPercent
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
     */
    public function setTravelNoB2cPercent(?float $travelNoB2cPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($travelNoB2cPercent) && !(is_float($travelNoB2cPercent) || is_numeric($travelNoB2cPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($travelNoB2cPercent, true), gettype($travelNoB2cPercent)), __LINE__);
        }
        $this->travelNoB2cPercent = $travelNoB2cPercent;
        
        return $this;
    }
    /**
     * Get commissionVatFreeRc value
     * @return bool|null
     */
    public function getCommissionVatFreeRc(): ?bool
    {
        return $this->commissionVatFreeRc;
    }
    /**
     * Set commissionVatFreeRc value
     * @param bool $commissionVatFreeRc
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
     */
    public function setCommissionVatFreeRc(?bool $commissionVatFreeRc = null): self
    {
        // validation for constraint: boolean
        if (!is_null($commissionVatFreeRc) && !is_bool($commissionVatFreeRc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($commissionVatFreeRc, true), gettype($commissionVatFreeRc)), __LINE__);
        }
        $this->commissionVatFreeRc = $commissionVatFreeRc;
        
        return $this;
    }
    /**
     * Get settlmAccountsSupplier value
     * @return string|null
     */
    public function getSettlmAccountsSupplier(): ?string
    {
        return $this->settlmAccountsSupplier;
    }
    /**
     * Set settlmAccountsSupplier value
     * @param string $settlmAccountsSupplier
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
     */
    public function setSettlmAccountsSupplier(?string $settlmAccountsSupplier = null): self
    {
        // validation for constraint: string
        if (!is_null($settlmAccountsSupplier) && !is_string($settlmAccountsSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlmAccountsSupplier, true), gettype($settlmAccountsSupplier)), __LINE__);
        }
        $this->settlmAccountsSupplier = $settlmAccountsSupplier;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
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
     * Get supplierInvoiceVatCode value
     * @return string|null
     */
    public function getSupplierInvoiceVatCode(): ?string
    {
        return $this->supplierInvoiceVatCode;
    }
    /**
     * Set supplierInvoiceVatCode value
     * @param string $supplierInvoiceVatCode
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
     */
    public function setSupplierInvoiceVatCode(?string $supplierInvoiceVatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierInvoiceVatCode) && !is_string($supplierInvoiceVatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierInvoiceVatCode, true), gettype($supplierInvoiceVatCode)), __LINE__);
        }
        $this->supplierInvoiceVatCode = $supplierInvoiceVatCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
     */
    public function setIsStorno(?bool $isStorno = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isStorno) && !is_bool($isStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStorno, true), gettype($isStorno)), __LINE__);
        }
        $this->isStorno = $isStorno;
        
        return $this;
    }
    /**
     * Get stornoDate value
     * @return string|null
     */
    public function getStornoDate(): ?string
    {
        return $this->stornoDate;
    }
    /**
     * Set stornoDate value
     * @param string $stornoDate
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
     */
    public function setStornoDate(?string $stornoDate = null): self
    {
        // validation for constraint: string
        if (!is_null($stornoDate) && !is_string($stornoDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stornoDate, true), gettype($stornoDate)), __LINE__);
        }
        $this->stornoDate = $stornoDate;
        
        return $this;
    }
    /**
     * Get baseBuyingPrice value
     * @return float|null
     */
    public function getBaseBuyingPrice(): ?float
    {
        return $this->baseBuyingPrice;
    }
    /**
     * Set baseBuyingPrice value
     * @param float $baseBuyingPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
     */
    public function setBaseBuyingPrice(?float $baseBuyingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($baseBuyingPrice) && !(is_float($baseBuyingPrice) || is_numeric($baseBuyingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($baseBuyingPrice, true), gettype($baseBuyingPrice)), __LINE__);
        }
        $this->baseBuyingPrice = $baseBuyingPrice;
        
        return $this;
    }
    /**
     * Get supplierBuyingPrice value
     * @return float|null
     */
    public function getSupplierBuyingPrice(): ?float
    {
        return $this->supplierBuyingPrice;
    }
    /**
     * Set supplierBuyingPrice value
     * @param float $supplierBuyingPrice
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
     */
    public function setSupplierBuyingPrice(?float $supplierBuyingPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierBuyingPrice) && !(is_float($supplierBuyingPrice) || is_numeric($supplierBuyingPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierBuyingPrice, true), gettype($supplierBuyingPrice)), __LINE__);
        }
        $this->supplierBuyingPrice = $supplierBuyingPrice;
        
        return $this;
    }
    /**
     * Get originalSupplierInvoiceAmount value
     * @return float|null
     */
    public function getOriginalSupplierInvoiceAmount(): ?float
    {
        return $this->originalSupplierInvoiceAmount;
    }
    /**
     * Set originalSupplierInvoiceAmount value
     * @param float $originalSupplierInvoiceAmount
     * @return \Pggns\MidocoApi\Order\StructType\SellItemProvisionType
     */
    public function setOriginalSupplierInvoiceAmount(?float $originalSupplierInvoiceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalSupplierInvoiceAmount) && !(is_float($originalSupplierInvoiceAmount) || is_numeric($originalSupplierInvoiceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalSupplierInvoiceAmount, true), gettype($originalSupplierInvoiceAmount)), __LINE__);
        }
        $this->originalSupplierInvoiceAmount = $originalSupplierInvoiceAmount;
        
        return $this;
    }
}
