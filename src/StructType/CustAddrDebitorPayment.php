<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustAddrDebitorPayment StructType
 * @subpackage Structs
 */
class CustAddrDebitorPayment extends AbstractStructBase
{
    /**
     * The MidocoCrmAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmAddress
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCrmAddress[]
     */
    protected array $MidocoCrmAddress = [];
    /**
     * The MidocoDebitor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDebitor
     * @var \Pggns\MidocoApi\Order\StructType\DebitorDTO[]
     */
    protected array $MidocoDebitor = [];
    /**
     * The MidocoCustomerPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCustomerPayment
     * @var \Pggns\MidocoApi\Order\StructType\CrmCustomerPaymentDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CrmCustomerPaymentDTO $MidocoCustomerPayment = null;
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
     * The MidocoCrmCcCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCcCard
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard[]
     */
    protected array $MidocoCrmCcCard = [];
    /**
     * The MidocoCrmDebitCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmDebitCard
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCrmDebitCard[]
     */
    protected array $MidocoCrmDebitCard = [];
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
     * The MidocoCrmCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCrmCriteria[]
     */
    protected array $MidocoCrmCriteria = [];
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Order\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * The custOrder
     * @var int|null
     */
    protected ?int $custOrder = null;
    /**
     * Constructor method for CustAddrDebitorPayment
     * @uses CustAddrDebitorPayment::setMidocoCrmAddress()
     * @uses CustAddrDebitorPayment::setMidocoDebitor()
     * @uses CustAddrDebitorPayment::setMidocoCustomerPayment()
     * @uses CustAddrDebitorPayment::setMidocoContactEntry()
     * @uses CustAddrDebitorPayment::setMidocoCrmCcCard()
     * @uses CustAddrDebitorPayment::setMidocoCrmDebitCard()
     * @uses CustAddrDebitorPayment::setMidocoCrmBonusCard()
     * @uses CustAddrDebitorPayment::setMidocoCrmCriteria()
     * @uses CustAddrDebitorPayment::setMidocoCrmCustomer()
     * @uses CustAddrDebitorPayment::setCustOrder()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @param \Pggns\MidocoApi\Order\StructType\DebitorDTO[] $midocoDebitor
     * @param \Pggns\MidocoApi\Order\StructType\CrmCustomerPaymentDTO $midocoCustomerPayment
     * @param \Pggns\MidocoApi\Order\StructType\MidocoContactEntryType[] $midocoContactEntry
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard[] $midocoCrmCcCard
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmBonusCard[] $midocoCrmBonusCard
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmCriteria[] $midocoCrmCriteria
     * @param \Pggns\MidocoApi\Order\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param int $custOrder
     */
    public function __construct(array $midocoCrmAddress = [], array $midocoDebitor = [], ?\Pggns\MidocoApi\Order\StructType\CrmCustomerPaymentDTO $midocoCustomerPayment = null, array $midocoContactEntry = [], array $midocoCrmCcCard = [], array $midocoCrmDebitCard = [], array $midocoCrmBonusCard = [], array $midocoCrmCriteria = [], ?\Pggns\MidocoApi\Order\StructType\CrmCustomerDTO $midocoCrmCustomer = null, ?int $custOrder = null)
    {
        $this
            ->setMidocoCrmAddress($midocoCrmAddress)
            ->setMidocoDebitor($midocoDebitor)
            ->setMidocoCustomerPayment($midocoCustomerPayment)
            ->setMidocoContactEntry($midocoContactEntry)
            ->setMidocoCrmCcCard($midocoCrmCcCard)
            ->setMidocoCrmDebitCard($midocoCrmDebitCard)
            ->setMidocoCrmBonusCard($midocoCrmBonusCard)
            ->setMidocoCrmCriteria($midocoCrmCriteria)
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setCustOrder($custOrder);
    }
    /**
     * Get MidocoCrmAddress value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmAddress[]
     */
    public function getMidocoCrmAddress(): array
    {
        return $this->MidocoCrmAddress;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmAddressForArrayConstraintsFromSetMidocoCrmAddress(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $custAddrDebitorPaymentMidocoCrmAddressItem) {
            // validation for constraint: itemType
            if (!$custAddrDebitorPaymentMidocoCrmAddressItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmAddress) {
                $invalidValues[] = is_object($custAddrDebitorPaymentMidocoCrmAddressItem) ? get_class($custAddrDebitorPaymentMidocoCrmAddressItem) : sprintf('%s(%s)', gettype($custAddrDebitorPaymentMidocoCrmAddressItem), var_export($custAddrDebitorPaymentMidocoCrmAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrmAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
     */
    public function setMidocoCrmAddress(array $midocoCrmAddress = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmAddressArrayErrorMessage = self::validateMidocoCrmAddressForArrayConstraintsFromSetMidocoCrmAddress($midocoCrmAddress))) {
            throw new InvalidArgumentException($midocoCrmAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmAddress = $midocoCrmAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmAddress $item
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
     */
    public function addToMidocoCrmAddress(\Pggns\MidocoApi\Order\StructType\MidocoCrmAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmAddress property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrmAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmAddress[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDebitor value
     * @return \Pggns\MidocoApi\Order\StructType\DebitorDTO[]
     */
    public function getMidocoDebitor(): array
    {
        return $this->MidocoDebitor;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDebitor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDebitor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDebitorForArrayConstraintsFromSetMidocoDebitor(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $custAddrDebitorPaymentMidocoDebitorItem) {
            // validation for constraint: itemType
            if (!$custAddrDebitorPaymentMidocoDebitorItem instanceof \Pggns\MidocoApi\Order\StructType\DebitorDTO) {
                $invalidValues[] = is_object($custAddrDebitorPaymentMidocoDebitorItem) ? get_class($custAddrDebitorPaymentMidocoDebitorItem) : sprintf('%s(%s)', gettype($custAddrDebitorPaymentMidocoDebitorItem), var_export($custAddrDebitorPaymentMidocoDebitorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDebitor property can only contain items of type \Pggns\MidocoApi\Order\StructType\DebitorDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DebitorDTO[] $midocoDebitor
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
     */
    public function setMidocoDebitor(array $midocoDebitor = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDebitorArrayErrorMessage = self::validateMidocoDebitorForArrayConstraintsFromSetMidocoDebitor($midocoDebitor))) {
            throw new InvalidArgumentException($midocoDebitorArrayErrorMessage, __LINE__);
        }
        $this->MidocoDebitor = $midocoDebitor;
        
        return $this;
    }
    /**
     * Add item to MidocoDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DebitorDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
     */
    public function addToMidocoDebitor(\Pggns\MidocoApi\Order\StructType\DebitorDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\DebitorDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDebitor property can only contain items of type \Pggns\MidocoApi\Order\StructType\DebitorDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDebitor[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoCustomerPayment value
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerPaymentDTO|null
     */
    public function getMidocoCustomerPayment(): ?\Pggns\MidocoApi\Order\StructType\CrmCustomerPaymentDTO
    {
        return $this->MidocoCustomerPayment;
    }
    /**
     * Set MidocoCustomerPayment value
     * @param \Pggns\MidocoApi\Order\StructType\CrmCustomerPaymentDTO $midocoCustomerPayment
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
     */
    public function setMidocoCustomerPayment(?\Pggns\MidocoApi\Order\StructType\CrmCustomerPaymentDTO $midocoCustomerPayment = null): self
    {
        $this->MidocoCustomerPayment = $midocoCustomerPayment;
        
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
        foreach ($values as $custAddrDebitorPaymentMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$custAddrDebitorPaymentMidocoContactEntryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($custAddrDebitorPaymentMidocoContactEntryItem) ? get_class($custAddrDebitorPaymentMidocoContactEntryItem) : sprintf('%s(%s)', gettype($custAddrDebitorPaymentMidocoContactEntryItem), var_export($custAddrDebitorPaymentMidocoContactEntryItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
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
        foreach ($values as $custAddrDebitorPaymentMidocoCrmCcCardItem) {
            // validation for constraint: itemType
            if (!$custAddrDebitorPaymentMidocoCrmCcCardItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmCcCard) {
                $invalidValues[] = is_object($custAddrDebitorPaymentMidocoCrmCcCardItem) ? get_class($custAddrDebitorPaymentMidocoCrmCcCardItem) : sprintf('%s(%s)', gettype($custAddrDebitorPaymentMidocoCrmCcCardItem), var_export($custAddrDebitorPaymentMidocoCrmCcCardItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
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
    /**
     * Get MidocoCrmDebitCard value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmDebitCard[]
     */
    public function getMidocoCrmDebitCard(): array
    {
        return $this->MidocoCrmDebitCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmDebitCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmDebitCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmDebitCardForArrayConstraintsFromSetMidocoCrmDebitCard(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $custAddrDebitorPaymentMidocoCrmDebitCardItem) {
            // validation for constraint: itemType
            if (!$custAddrDebitorPaymentMidocoCrmDebitCardItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmDebitCard) {
                $invalidValues[] = is_object($custAddrDebitorPaymentMidocoCrmDebitCardItem) ? get_class($custAddrDebitorPaymentMidocoCrmDebitCardItem) : sprintf('%s(%s)', gettype($custAddrDebitorPaymentMidocoCrmDebitCardItem), var_export($custAddrDebitorPaymentMidocoCrmDebitCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrmDebitCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmDebitCard[] $midocoCrmDebitCard
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
     */
    public function setMidocoCrmDebitCard(array $midocoCrmDebitCard = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmDebitCardArrayErrorMessage = self::validateMidocoCrmDebitCardForArrayConstraintsFromSetMidocoCrmDebitCard($midocoCrmDebitCard))) {
            throw new InvalidArgumentException($midocoCrmDebitCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmDebitCard = $midocoCrmDebitCard;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmDebitCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmDebitCard $item
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
     */
    public function addToMidocoCrmDebitCard(\Pggns\MidocoApi\Order\StructType\MidocoCrmDebitCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmDebitCard) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmDebitCard property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCrmDebitCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmDebitCard[] = $item;
        
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
        foreach ($values as $custAddrDebitorPaymentMidocoCrmBonusCardItem) {
            // validation for constraint: itemType
            if (!$custAddrDebitorPaymentMidocoCrmBonusCardItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmBonusCard) {
                $invalidValues[] = is_object($custAddrDebitorPaymentMidocoCrmBonusCardItem) ? get_class($custAddrDebitorPaymentMidocoCrmBonusCardItem) : sprintf('%s(%s)', gettype($custAddrDebitorPaymentMidocoCrmBonusCardItem), var_export($custAddrDebitorPaymentMidocoCrmBonusCardItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
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
        foreach ($values as $custAddrDebitorPaymentMidocoCrmCriteriaItem) {
            // validation for constraint: itemType
            if (!$custAddrDebitorPaymentMidocoCrmCriteriaItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmCriteria) {
                $invalidValues[] = is_object($custAddrDebitorPaymentMidocoCrmCriteriaItem) ? get_class($custAddrDebitorPaymentMidocoCrmCriteriaItem) : sprintf('%s(%s)', gettype($custAddrDebitorPaymentMidocoCrmCriteriaItem), var_export($custAddrDebitorPaymentMidocoCrmCriteriaItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
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
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Order\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get custOrder value
     * @return int|null
     */
    public function getCustOrder(): ?int
    {
        return $this->custOrder;
    }
    /**
     * Set custOrder value
     * @param int $custOrder
     * @return \Pggns\MidocoApi\Order\StructType\CustAddrDebitorPayment
     */
    public function setCustOrder(?int $custOrder = null): self
    {
        // validation for constraint: int
        if (!is_null($custOrder) && !(is_int($custOrder) || ctype_digit($custOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($custOrder, true), gettype($custOrder)), __LINE__);
        }
        $this->custOrder = $custOrder;
        
        return $this;
    }
}
