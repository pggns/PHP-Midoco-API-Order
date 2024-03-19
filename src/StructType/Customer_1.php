<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Customer StructType
 * Meta information extracted from the WSDL
 * - documentation: Customer information, describing the person or company who is to be registered as paying or getting the paperwork for the booked travel (2 entries possible)
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Customer_1 extends AbstractStructBase
{
    /**
     * The PrivateData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\PrivateData_1|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PrivateData_1 $PrivateData = null;
    /**
     * The CompanyData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\CompanyData_1|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CompanyData_1 $CompanyData = null;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: Address
     * @var \Pggns\MidocoApi\Order\StructType\Address|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Address $Address = null;
    /**
     * The Communication
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Communication_1[]
     */
    protected ?array $Communication = null;
    /**
     * The CreditCardRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CreditCardRefId
     * @var int[]
     */
    protected ?array $CreditCardRefId = null;
    /**
     * The BankAccountRefId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: BankAccountRefId
     * @var int[]
     */
    protected ?array $BankAccountRefId = null;
    /**
     * The midocoCustomerId
     * Meta information extracted from the WSDL
     * - documentation: In case the external system has knowledge of an existing customer record in the midoco CRM, the id should be set here to enable automatic assignment.
     * @var int|null
     */
    protected ?int $midocoCustomerId = null;
    /**
     * The referenceCustomerId
     * Meta information extracted from the WSDL
     * - documentation: This field should contain an external customer id (from an external customer database).
     * @var string|null
     */
    protected ?string $referenceCustomerId = null;
    /**
     * The referenceSystem
     * Meta information extracted from the WSDL
     * - documentation: In this field the external system for the external customer id is named by an known ID)
     * @var string|null
     */
    protected ?string $referenceSystem = null;
    /**
     * The referenceUrl
     * Meta information extracted from the WSDL
     * - documentation: THis field can contain an URL descriptor to be executed in order to show the external customer in the external system
     * @var string|null
     */
    protected ?string $referenceUrl = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - default: INVOICE
     * - use: optional
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The overrideExistingOrderCustomer
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $overrideExistingOrderCustomer = null;
    /**
     * Constructor method for Customer
     * @uses Customer_1::setPrivateData()
     * @uses Customer_1::setCompanyData()
     * @uses Customer_1::setAddress()
     * @uses Customer_1::setCommunication()
     * @uses Customer_1::setCreditCardRefId()
     * @uses Customer_1::setBankAccountRefId()
     * @uses Customer_1::setMidocoCustomerId()
     * @uses Customer_1::setReferenceCustomerId()
     * @uses Customer_1::setReferenceSystem()
     * @uses Customer_1::setReferenceUrl()
     * @uses Customer_1::setType()
     * @uses Customer_1::setOverrideExistingOrderCustomer()
     * @param \Pggns\MidocoApi\Order\StructType\PrivateData_1 $privateData
     * @param \Pggns\MidocoApi\Order\StructType\CompanyData_1 $companyData
     * @param \Pggns\MidocoApi\Order\StructType\Address $address
     * @param \Pggns\MidocoApi\Order\StructType\Communication_1[] $communication
     * @param int[] $creditCardRefId
     * @param int[] $bankAccountRefId
     * @param int $midocoCustomerId
     * @param string $referenceCustomerId
     * @param string $referenceSystem
     * @param string $referenceUrl
     * @param string $type
     * @param bool $overrideExistingOrderCustomer
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\PrivateData_1 $privateData = null, ?\Pggns\MidocoApi\Order\StructType\CompanyData_1 $companyData = null, ?\Pggns\MidocoApi\Order\StructType\Address $address = null, ?array $communication = null, ?array $creditCardRefId = null, ?array $bankAccountRefId = null, ?int $midocoCustomerId = null, ?string $referenceCustomerId = null, ?string $referenceSystem = null, ?string $referenceUrl = null, ?string $type = 'INVOICE', ?bool $overrideExistingOrderCustomer = false)
    {
        $this
            ->setPrivateData($privateData)
            ->setCompanyData($companyData)
            ->setAddress($address)
            ->setCommunication($communication)
            ->setCreditCardRefId($creditCardRefId)
            ->setBankAccountRefId($bankAccountRefId)
            ->setMidocoCustomerId($midocoCustomerId)
            ->setReferenceCustomerId($referenceCustomerId)
            ->setReferenceSystem($referenceSystem)
            ->setReferenceUrl($referenceUrl)
            ->setType($type)
            ->setOverrideExistingOrderCustomer($overrideExistingOrderCustomer);
    }
    /**
     * Get PrivateData value
     * @return \Pggns\MidocoApi\Order\StructType\PrivateData_1|null
     */
    public function getPrivateData(): ?\Pggns\MidocoApi\Order\StructType\PrivateData_1
    {
        return $this->PrivateData;
    }
    /**
     * Set PrivateData value
     * @param \Pggns\MidocoApi\Order\StructType\PrivateData_1 $privateData
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function setPrivateData(?\Pggns\MidocoApi\Order\StructType\PrivateData_1 $privateData = null): self
    {
        $this->PrivateData = $privateData;
        
        return $this;
    }
    /**
     * Get CompanyData value
     * @return \Pggns\MidocoApi\Order\StructType\CompanyData_1|null
     */
    public function getCompanyData(): ?\Pggns\MidocoApi\Order\StructType\CompanyData_1
    {
        return $this->CompanyData;
    }
    /**
     * Set CompanyData value
     * @param \Pggns\MidocoApi\Order\StructType\CompanyData_1 $companyData
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function setCompanyData(?\Pggns\MidocoApi\Order\StructType\CompanyData_1 $companyData = null): self
    {
        $this->CompanyData = $companyData;
        
        return $this;
    }
    /**
     * Get Address value
     * @return \Pggns\MidocoApi\Order\StructType\Address|null
     */
    public function getAddress(): ?\Pggns\MidocoApi\Order\StructType\Address
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \Pggns\MidocoApi\Order\StructType\Address $address
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function setAddress(?\Pggns\MidocoApi\Order\StructType\Address $address = null): self
    {
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get Communication value
     * @return \Pggns\MidocoApi\Order\StructType\Communication_1[]
     */
    public function getCommunication(): ?array
    {
        return $this->Communication;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCommunication method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCommunication method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCommunicationForArrayConstraintFromSetCommunication(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCommunicationItem) {
            // validation for constraint: itemType
            if (!$customerCommunicationItem instanceof \Pggns\MidocoApi\Order\StructType\Communication_1) {
                $invalidValues[] = is_object($customerCommunicationItem) ? get_class($customerCommunicationItem) : sprintf('%s(%s)', gettype($customerCommunicationItem), var_export($customerCommunicationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Communication property can only contain items of type \Pggns\MidocoApi\Order\StructType\Communication_1, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Communication value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Communication_1[] $communication
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function setCommunication(?array $communication = null): self
    {
        // validation for constraint: array
        if ('' !== ($communicationArrayErrorMessage = self::validateCommunicationForArrayConstraintFromSetCommunication($communication))) {
            throw new InvalidArgumentException($communicationArrayErrorMessage, __LINE__);
        }
        $this->Communication = $communication;
        
        return $this;
    }
    /**
     * Add item to Communication value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Communication_1 $item
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function addToCommunication(\Pggns\MidocoApi\Order\StructType\Communication_1 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Communication_1) {
            throw new InvalidArgumentException(sprintf('The Communication property can only contain items of type \Pggns\MidocoApi\Order\StructType\Communication_1, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Communication[] = $item;
        
        return $this;
    }
    /**
     * Get CreditCardRefId value
     * @return int[]
     */
    public function getCreditCardRefId(): ?array
    {
        return $this->CreditCardRefId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCreditCardRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreditCardRefId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreditCardRefIdForArrayConstraintFromSetCreditCardRefId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerCreditCardRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($customerCreditCardRefIdItem) || ctype_digit($customerCreditCardRefIdItem))) {
                $invalidValues[] = is_object($customerCreditCardRefIdItem) ? get_class($customerCreditCardRefIdItem) : sprintf('%s(%s)', gettype($customerCreditCardRefIdItem), var_export($customerCreditCardRefIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CreditCardRefId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CreditCardRefId value
     * @throws InvalidArgumentException
     * @param int[] $creditCardRefId
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function setCreditCardRefId(?array $creditCardRefId = null): self
    {
        // validation for constraint: array
        if ('' !== ($creditCardRefIdArrayErrorMessage = self::validateCreditCardRefIdForArrayConstraintFromSetCreditCardRefId($creditCardRefId))) {
            throw new InvalidArgumentException($creditCardRefIdArrayErrorMessage, __LINE__);
        }
        $this->CreditCardRefId = $creditCardRefId;
        
        return $this;
    }
    /**
     * Add item to CreditCardRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function addToCreditCardRefId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The CreditCardRefId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CreditCardRefId[] = $item;
        
        return $this;
    }
    /**
     * Get BankAccountRefId value
     * @return int[]
     */
    public function getBankAccountRefId(): ?array
    {
        return $this->BankAccountRefId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setBankAccountRefId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBankAccountRefId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBankAccountRefIdForArrayConstraintFromSetBankAccountRefId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $customerBankAccountRefIdItem) {
            // validation for constraint: itemType
            if (!(is_int($customerBankAccountRefIdItem) || ctype_digit($customerBankAccountRefIdItem))) {
                $invalidValues[] = is_object($customerBankAccountRefIdItem) ? get_class($customerBankAccountRefIdItem) : sprintf('%s(%s)', gettype($customerBankAccountRefIdItem), var_export($customerBankAccountRefIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BankAccountRefId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BankAccountRefId value
     * @throws InvalidArgumentException
     * @param int[] $bankAccountRefId
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function setBankAccountRefId(?array $bankAccountRefId = null): self
    {
        // validation for constraint: array
        if ('' !== ($bankAccountRefIdArrayErrorMessage = self::validateBankAccountRefIdForArrayConstraintFromSetBankAccountRefId($bankAccountRefId))) {
            throw new InvalidArgumentException($bankAccountRefIdArrayErrorMessage, __LINE__);
        }
        $this->BankAccountRefId = $bankAccountRefId;
        
        return $this;
    }
    /**
     * Add item to BankAccountRefId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function addToBankAccountRefId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The BankAccountRefId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->BankAccountRefId[] = $item;
        
        return $this;
    }
    /**
     * Get midocoCustomerId value
     * @return int|null
     */
    public function getMidocoCustomerId(): ?int
    {
        return $this->midocoCustomerId;
    }
    /**
     * Set midocoCustomerId value
     * @param int $midocoCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function setMidocoCustomerId(?int $midocoCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($midocoCustomerId) && !(is_int($midocoCustomerId) || ctype_digit($midocoCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($midocoCustomerId, true), gettype($midocoCustomerId)), __LINE__);
        }
        $this->midocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
    /**
     * Get referenceCustomerId value
     * @return string|null
     */
    public function getReferenceCustomerId(): ?string
    {
        return $this->referenceCustomerId;
    }
    /**
     * Set referenceCustomerId value
     * @param string $referenceCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function setReferenceCustomerId(?string $referenceCustomerId = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceCustomerId) && !is_string($referenceCustomerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceCustomerId, true), gettype($referenceCustomerId)), __LINE__);
        }
        $this->referenceCustomerId = $referenceCustomerId;
        
        return $this;
    }
    /**
     * Get referenceSystem value
     * @return string|null
     */
    public function getReferenceSystem(): ?string
    {
        return $this->referenceSystem;
    }
    /**
     * Set referenceSystem value
     * @param string $referenceSystem
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function setReferenceSystem(?string $referenceSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceSystem) && !is_string($referenceSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceSystem, true), gettype($referenceSystem)), __LINE__);
        }
        $this->referenceSystem = $referenceSystem;
        
        return $this;
    }
    /**
     * Get referenceUrl value
     * @return string|null
     */
    public function getReferenceUrl(): ?string
    {
        return $this->referenceUrl;
    }
    /**
     * Set referenceUrl value
     * @param string $referenceUrl
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function setReferenceUrl(?string $referenceUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceUrl) && !is_string($referenceUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceUrl, true), gettype($referenceUrl)), __LINE__);
        }
        $this->referenceUrl = $referenceUrl;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function setType(?string $type = 'INVOICE'): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get overrideExistingOrderCustomer value
     * @return bool|null
     */
    public function getOverrideExistingOrderCustomer(): ?bool
    {
        return $this->overrideExistingOrderCustomer;
    }
    /**
     * Set overrideExistingOrderCustomer value
     * @param bool $overrideExistingOrderCustomer
     * @return \Pggns\MidocoApi\Order\StructType\Customer_1
     */
    public function setOverrideExistingOrderCustomer(?bool $overrideExistingOrderCustomer = false): self
    {
        // validation for constraint: boolean
        if (!is_null($overrideExistingOrderCustomer) && !is_bool($overrideExistingOrderCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overrideExistingOrderCustomer, true), gettype($overrideExistingOrderCustomer)), __LINE__);
        }
        $this->overrideExistingOrderCustomer = $overrideExistingOrderCustomer;
        
        return $this;
    }
}
