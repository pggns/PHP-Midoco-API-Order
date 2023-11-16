<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmImport StructType
 * @subpackage Structs
 */
class MidocoCrmImport extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Order\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * The MidocoSaveAddress
     * Meta information extracted from the WSDL
     * - ref: MidocoSaveAddress
     * @var \Pggns\MidocoApi\Order\StructType\SaveAddressDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\SaveAddressDTO $MidocoSaveAddress = null;
    /**
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\Order\StructType\MidocoContactEntryType[]
     */
    protected array $MidocoContactEntry = [];
    /**
     * The MidocoCrmCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCrmCriteria[]
     */
    protected array $MidocoCrmCriteria = [];
    /**
     * The MidocoCustomerTravel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerTravel
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCustomerTravelType[]
     */
    protected array $MidocoCustomerTravel = [];
    /**
     * The MidocoContactHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactHistory
     * @var \Pggns\MidocoApi\Order\StructType\MidocoContactHistory[]
     */
    protected array $MidocoContactHistory = [];
    /**
     * The MidocoCrmPersonTraveller
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmPersonTraveller
     * @var \Pggns\MidocoApi\Order\StructType\CrmPersonTravellerDTO[]
     */
    protected array $MidocoCrmPersonTraveller = [];
    /**
     * The MidocoCrmNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmNotice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCrmNotice[]
     */
    protected array $MidocoCrmNotice = [];
    /**
     * The MidocoCrmBonusCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmBonusCard
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCrmBonusCard[]
     */
    protected array $MidocoCrmBonusCard = [];
    /**
     * The MidocoCrmCcCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCcCard
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard[]
     */
    protected array $MidocoCrmCcCard = [];
    /**
     * Constructor method for MidocoCrmImport
     * @uses MidocoCrmImport::setMidocoCrmCustomer()
     * @uses MidocoCrmImport::setMidocoSaveAddress()
     * @uses MidocoCrmImport::setMidocoContactEntry()
     * @uses MidocoCrmImport::setMidocoCrmCriteria()
     * @uses MidocoCrmImport::setMidocoCustomerTravel()
     * @uses MidocoCrmImport::setMidocoContactHistory()
     * @uses MidocoCrmImport::setMidocoCrmPersonTraveller()
     * @uses MidocoCrmImport::setMidocoCrmNotice()
     * @uses MidocoCrmImport::setMidocoCrmBonusCard()
     * @uses MidocoCrmImport::setMidocoCrmCcCard()
     * @param \Pggns\MidocoApi\Order\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Order\StructType\SaveAddressDTO $midocoSaveAddress
     * @param \Pggns\MidocoApi\Order\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     * @param \Pggns\MidocoApi\Order\StructType\MidocoContactHistory[] $midocoContactHistory
     * @param \Pggns\MidocoApi\Order\StructType\CrmPersonTravellerDTO[] $midocoCrmPersonTraveller
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmBonusCard[] $midocoCrmBonusCard
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\CrmCustomerDTO $midocoCrmCustomer = null, ?\Pggns\MidocoApi\Order\StructType\SaveAddressDTO $midocoSaveAddress = null, array $midocoContactEntry = [], array $midocoCrmCriteria = [], array $midocoCustomerTravel = [], array $midocoContactHistory = [], array $midocoCrmPersonTraveller = [], array $midocoCrmNotice = [], array $midocoCrmBonusCard = [], array $midocoCrmCcCard = [])
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setMidocoSaveAddress($midocoSaveAddress)
            ->setMidocoContactEntry($midocoContactEntry)
            ->setMidocoCrmCriteria($midocoCrmCriteria)
            ->setMidocoCustomerTravel($midocoCustomerTravel)
            ->setMidocoContactHistory($midocoContactHistory)
            ->setMidocoCrmPersonTraveller($midocoCrmPersonTraveller)
            ->setMidocoCrmNotice($midocoCrmNotice)
            ->setMidocoCrmBonusCard($midocoCrmBonusCard)
            ->setMidocoCrmCcCard($midocoCrmCcCard);
    }
    /**
     * Get MidocoCrmCustomer value
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerDTO|null
     */
    public function getMidocoCrmCustomer(): ?\Pggns\MidocoApi\Order\StructType\CrmCustomerDTO
    {
        return $this->MidocoCrmCustomer;
    }
    /**
     * Set MidocoCrmCustomer value
     * @param \Pggns\MidocoApi\Order\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Order\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get MidocoSaveAddress value
     * @return \Pggns\MidocoApi\Order\StructType\SaveAddressDTO|null
     */
    public function getMidocoSaveAddress(): ?\Pggns\MidocoApi\Order\StructType\SaveAddressDTO
    {
        return $this->MidocoSaveAddress;
    }
    /**
     * Set MidocoSaveAddress value
     * @param \Pggns\MidocoApi\Order\StructType\SaveAddressDTO $midocoSaveAddress
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function setMidocoSaveAddress(?\Pggns\MidocoApi\Order\StructType\SaveAddressDTO $midocoSaveAddress = null): self
    {
        $this->MidocoSaveAddress = $midocoSaveAddress;
        
        return $this;
    }
    /**
     * Get MidocoContactEntry value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoContactEntryType[]
     */
    public function getMidocoContactEntry(): array
    {
        return $this->MidocoContactEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoContactEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactEntryForArrayConstraintsFromSetMidocoContactEntry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoContactEntryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($midocoCrmImportMidocoContactEntryItem) ? get_class($midocoCrmImportMidocoContactEntryItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoContactEntryItem), var_export($midocoCrmImportMidocoContactEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoContactEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function setMidocoContactEntry(array $midocoContactEntry = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactEntryArrayErrorMessage = self::validateMidocoContactEntryForArrayConstraintsFromSetMidocoContactEntry($midocoContactEntry))) {
            throw new InvalidArgumentException($midocoContactEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactEntry = $midocoContactEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoContactEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoContactEntryType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function addToMidocoContactEntry(\Pggns\MidocoApi\Order\StructType\MidocoContactEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoContactEntryType) {
            throw new InvalidArgumentException(sprintf('The MidocoContactEntry property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoContactEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactEntry[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCriteria[]
     */
    public function getMidocoCrmCriteria(): array
    {
        return $this->MidocoCrmCriteria;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCriteria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCriteriaForArrayConstraintsFromSetMidocoCrmCriteria(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoCrmCriteriaItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoCrmCriteriaItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmCriteria) {
                $invalidValues[] = is_object($midocoCrmImportMidocoCrmCriteriaItem) ? get_class($midocoCrmImportMidocoCrmCriteriaItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoCrmCriteriaItem), var_export($midocoCrmImportMidocoCrmCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrmCriteria, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function setMidocoCrmCriteria(array $midocoCrmCriteria = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCriteriaArrayErrorMessage = self::validateMidocoCrmCriteriaForArrayConstraintsFromSetMidocoCrmCriteria($midocoCrmCriteria))) {
            throw new InvalidArgumentException($midocoCrmCriteriaArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCriteria = $midocoCrmCriteria;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmCriteria $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function addToMidocoCrmCriteria(\Pggns\MidocoApi\Order\StructType\MidocoCrmCriteria $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmCriteria) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCriteria property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrmCriteria, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCriteria[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCustomerTravel value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerTravelType[]
     */
    public function getMidocoCustomerTravel(): array
    {
        return $this->MidocoCustomerTravel;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerTravel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerTravel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerTravelForArrayConstraintsFromSetMidocoCustomerTravel(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoCustomerTravelItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoCustomerTravelItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCustomerTravelType) {
                $invalidValues[] = is_object($midocoCrmImportMidocoCustomerTravelItem) ? get_class($midocoCrmImportMidocoCustomerTravelItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoCustomerTravelItem), var_export($midocoCrmImportMidocoCustomerTravelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCustomerTravelType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCustomerTravelType[] $midocoCustomerTravel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function setMidocoCustomerTravel(array $midocoCustomerTravel = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerTravelArrayErrorMessage = self::validateMidocoCustomerTravelForArrayConstraintsFromSetMidocoCustomerTravel($midocoCustomerTravel))) {
            throw new InvalidArgumentException($midocoCustomerTravelArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerTravel = $midocoCustomerTravel;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerTravel value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCustomerTravelType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function addToMidocoCustomerTravel(\Pggns\MidocoApi\Order\StructType\MidocoCustomerTravelType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCustomerTravelType) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerTravel property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCustomerTravelType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerTravel[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoContactHistory value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoContactHistory[]
     */
    public function getMidocoContactHistory(): array
    {
        return $this->MidocoContactHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoContactHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactHistoryForArrayConstraintsFromSetMidocoContactHistory(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoContactHistoryItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoContactHistoryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoContactHistory) {
                $invalidValues[] = is_object($midocoCrmImportMidocoContactHistoryItem) ? get_class($midocoCrmImportMidocoContactHistoryItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoContactHistoryItem), var_export($midocoCrmImportMidocoContactHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoContactHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoContactHistory[] $midocoContactHistory
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function setMidocoContactHistory(array $midocoContactHistory = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactHistoryArrayErrorMessage = self::validateMidocoContactHistoryForArrayConstraintsFromSetMidocoContactHistory($midocoContactHistory))) {
            throw new InvalidArgumentException($midocoContactHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactHistory = $midocoContactHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoContactHistory $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function addToMidocoContactHistory(\Pggns\MidocoApi\Order\StructType\MidocoContactHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoContactHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoContactHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoContactHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactHistory[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmPersonTraveller value
     * @return \Pggns\MidocoApi\Order\StructType\CrmPersonTravellerDTO[]
     */
    public function getMidocoCrmPersonTraveller(): array
    {
        return $this->MidocoCrmPersonTraveller;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmPersonTraveller method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmPersonTraveller method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmPersonTravellerForArrayConstraintsFromSetMidocoCrmPersonTraveller(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoCrmPersonTravellerItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoCrmPersonTravellerItem instanceof \Pggns\MidocoApi\Order\StructType\CrmPersonTravellerDTO) {
                $invalidValues[] = is_object($midocoCrmImportMidocoCrmPersonTravellerItem) ? get_class($midocoCrmImportMidocoCrmPersonTravellerItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoCrmPersonTravellerItem), var_export($midocoCrmImportMidocoCrmPersonTravellerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrmPersonTravellerDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrmPersonTravellerDTO[] $midocoCrmPersonTraveller
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function setMidocoCrmPersonTraveller(array $midocoCrmPersonTraveller = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmPersonTravellerArrayErrorMessage = self::validateMidocoCrmPersonTravellerForArrayConstraintsFromSetMidocoCrmPersonTraveller($midocoCrmPersonTraveller))) {
            throw new InvalidArgumentException($midocoCrmPersonTravellerArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmPersonTraveller = $midocoCrmPersonTraveller;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmPersonTraveller value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrmPersonTravellerDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function addToMidocoCrmPersonTraveller(\Pggns\MidocoApi\Order\StructType\CrmPersonTravellerDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CrmPersonTravellerDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmPersonTraveller property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrmPersonTravellerDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmPersonTraveller[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmNotice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmNotice[]
     */
    public function getMidocoCrmNotice(): array
    {
        return $this->MidocoCrmNotice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmNotice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmNoticeForArrayConstraintsFromSetMidocoCrmNotice(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoCrmNoticeItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoCrmNoticeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmNotice) {
                $invalidValues[] = is_object($midocoCrmImportMidocoCrmNoticeItem) ? get_class($midocoCrmImportMidocoCrmNoticeItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoCrmNoticeItem), var_export($midocoCrmImportMidocoCrmNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmNotice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrmNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmNotice[] $midocoCrmNotice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function setMidocoCrmNotice(array $midocoCrmNotice = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmNoticeArrayErrorMessage = self::validateMidocoCrmNoticeForArrayConstraintsFromSetMidocoCrmNotice($midocoCrmNotice))) {
            throw new InvalidArgumentException($midocoCrmNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmNotice = $midocoCrmNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmNotice $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function addToMidocoCrmNotice(\Pggns\MidocoApi\Order\StructType\MidocoCrmNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmNotice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrmNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmNotice[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmBonusCard value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmBonusCard[]
     */
    public function getMidocoCrmBonusCard(): array
    {
        return $this->MidocoCrmBonusCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmBonusCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmBonusCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmBonusCardForArrayConstraintsFromSetMidocoCrmBonusCard(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoCrmBonusCardItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoCrmBonusCardItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmBonusCard) {
                $invalidValues[] = is_object($midocoCrmImportMidocoCrmBonusCardItem) ? get_class($midocoCrmImportMidocoCrmBonusCardItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoCrmBonusCardItem), var_export($midocoCrmImportMidocoCrmBonusCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmBonusCard property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrmBonusCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmBonusCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmBonusCard[] $midocoCrmBonusCard
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function setMidocoCrmBonusCard(array $midocoCrmBonusCard = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmBonusCardArrayErrorMessage = self::validateMidocoCrmBonusCardForArrayConstraintsFromSetMidocoCrmBonusCard($midocoCrmBonusCard))) {
            throw new InvalidArgumentException($midocoCrmBonusCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmBonusCard = $midocoCrmBonusCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmBonusCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmBonusCard $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function addToMidocoCrmBonusCard(\Pggns\MidocoApi\Order\StructType\MidocoCrmBonusCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmBonusCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmBonusCard property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrmBonusCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmBonusCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCrmCcCard value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard[]
     */
    public function getMidocoCrmCcCard(): array
    {
        return $this->MidocoCrmCcCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmCcCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCcCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCcCardForArrayConstraintsFromSetMidocoCrmCcCard(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmImportMidocoCrmCcCardItem) {
            // validation for constraint: itemType
            if (!$midocoCrmImportMidocoCrmCcCardItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard) {
                $invalidValues[] = is_object($midocoCrmImportMidocoCrmCcCardItem) ? get_class($midocoCrmImportMidocoCrmCcCardItem) : sprintf('%s(%s)', gettype($midocoCrmImportMidocoCrmCcCardItem), var_export($midocoCrmImportMidocoCrmCcCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCcCard property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function setMidocoCrmCcCard(array $midocoCrmCcCard = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCcCardArrayErrorMessage = self::validateMidocoCrmCcCardForArrayConstraintsFromSetMidocoCrmCcCard($midocoCrmCcCard))) {
            throw new InvalidArgumentException($midocoCrmCcCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCcCard = $midocoCrmCcCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmImport
     */
    public function addToMidocoCrmCcCard(\Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCcCard property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCcCard[] = $item;
        
        return $this;
    }
}
