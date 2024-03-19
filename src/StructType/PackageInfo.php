<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for packageInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: In case of a package booking, this section contains the necessary information about the selling supplier and additional fee
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PackageInfo extends AbstractStructBase
{
    /**
     * The packageId
     * Meta information extracted from the WSDL
     * - documentation: The identifier (booking id) of the package, which is used in communication with the customer
     * - use: required
     * @var string
     */
    protected string $packageId;
    /**
     * The packageSupplierId
     * Meta information extracted from the WSDL
     * - documentation: the marquee which is used for presenting the package to the customer
     * - use: required
     * @var string
     */
    protected string $packageSupplierId;
    /**
     * The packagePosition
     * Meta information extracted from the WSDL
     * - documentation: in case of possible multiple packages, these are numbered, starting by 1
     * - use: required
     * @var int
     */
    protected int $packagePosition;
    /**
     * The priceRef
     * Meta information extracted from the WSDL
     * - documentation: the selling price for this package (reference to a price, see below)
     * - use: required
     * @var int
     */
    protected int $priceRef;
    /**
     * The price_calculation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Price_calculation[]
     */
    protected ?array $price_calculation = null;
    /**
     * The packagefee
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Packagefee[]
     */
    protected ?array $packagefee = null;
    /**
     * The person
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: person
     * @var \Pggns\MidocoApi\Order\StructType\Person[]
     */
    protected ?array $person = null;
    /**
     * The attribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Attribute[]
     */
    protected ?array $attribute = null;
    /**
     * The configurationRef
     * Meta information extracted from the WSDL
     * - documentation: Reference this package to a special import behaviour
     * @var int|null
     */
    protected ?int $configurationRef = null;
    /**
     * The destination
     * Meta information extracted from the WSDL
     * - documentation: optional attribute for supplierMode: set in case of destination based accounting. In germany the content is mostly split in EU/NONEU. The content has financial (VAT) effect and has to be adjusted with finance
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The creationDate
     * Meta information extracted from the WSDL
     * - documentation: package creation date, default is import time
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The catalog
     * Meta information extracted from the WSDL
     * - documentation: optional attribute for handling catalog data (travel_type)
     * @var string|null
     */
    protected ?string $catalog = null;
    /**
     * The productType
     * Meta information extracted from the WSDL
     * - documentation: optional attribute for handling product type data
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The travelNo
     * Meta information extracted from the WSDL
     * - documentation: optional attribute for handling travel number related assignments
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * The travelNoDescription
     * Meta information extracted from the WSDL
     * - documentation: optional attribute for creating travelNos on import. only used with travelNoAccounts functionality.
     * @var string|null
     */
    protected ?string $travelNoDescription = null;
    /**
     * The sellingMode
     * @var string|null
     */
    protected ?string $sellingMode = null;
    /**
     * The confirmationGroup
     * Meta information extracted from the WSDL
     * - documentation: confirmation group
     * @var string|null
     */
    protected ?string $confirmationGroup = null;
    /**
     * The mobilityIndicator
     * Meta information extracted from the WSDL
     * - documentation: mobility indicator
     * @var bool|null
     */
    protected ?bool $mobilityIndicator = null;
    /**
     * The contractTime
     * Meta information extracted from the WSDL
     * - documentation: contract time
     * @var string|null
     */
    protected ?string $contractTime = null;
    /**
     * The referenceType
     * Meta information extracted from the WSDL
     * - documentation: set to the external system id, which has a refernce to this package item
     * @var string|null
     */
    protected ?string $referenceType = null;
    /**
     * The settlementType
     * Meta information extracted from the WSDL
     * - documentation: settlement type for the package item
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * Constructor method for packageInfo
     * @uses PackageInfo::setPackageId()
     * @uses PackageInfo::setPackageSupplierId()
     * @uses PackageInfo::setPackagePosition()
     * @uses PackageInfo::setPriceRef()
     * @uses PackageInfo::setPrice_calculation()
     * @uses PackageInfo::setPackagefee()
     * @uses PackageInfo::setPerson()
     * @uses PackageInfo::setAttribute()
     * @uses PackageInfo::setConfigurationRef()
     * @uses PackageInfo::setDestination()
     * @uses PackageInfo::setCreationDate()
     * @uses PackageInfo::setCatalog()
     * @uses PackageInfo::setProductType()
     * @uses PackageInfo::setTravelNo()
     * @uses PackageInfo::setTravelNoDescription()
     * @uses PackageInfo::setSellingMode()
     * @uses PackageInfo::setConfirmationGroup()
     * @uses PackageInfo::setMobilityIndicator()
     * @uses PackageInfo::setContractTime()
     * @uses PackageInfo::setReferenceType()
     * @uses PackageInfo::setSettlementType()
     * @param string $packageId
     * @param string $packageSupplierId
     * @param int $packagePosition
     * @param int $priceRef
     * @param \Pggns\MidocoApi\Order\StructType\Price_calculation[] $price_calculation
     * @param \Pggns\MidocoApi\Order\StructType\Packagefee[] $packagefee
     * @param \Pggns\MidocoApi\Order\StructType\Person[] $person
     * @param \Pggns\MidocoApi\Order\StructType\Attribute[] $attribute
     * @param int $configurationRef
     * @param string $destination
     * @param string $creationDate
     * @param string $catalog
     * @param string $productType
     * @param string $travelNo
     * @param string $travelNoDescription
     * @param string $sellingMode
     * @param string $confirmationGroup
     * @param bool $mobilityIndicator
     * @param string $contractTime
     * @param string $referenceType
     * @param string $settlementType
     */
    public function __construct(string $packageId, string $packageSupplierId, int $packagePosition, int $priceRef, ?array $price_calculation = null, ?array $packagefee = null, ?array $person = null, ?array $attribute = null, ?int $configurationRef = null, ?string $destination = null, ?string $creationDate = null, ?string $catalog = null, ?string $productType = null, ?string $travelNo = null, ?string $travelNoDescription = null, ?string $sellingMode = null, ?string $confirmationGroup = null, ?bool $mobilityIndicator = null, ?string $contractTime = null, ?string $referenceType = null, ?string $settlementType = null)
    {
        $this
            ->setPackageId($packageId)
            ->setPackageSupplierId($packageSupplierId)
            ->setPackagePosition($packagePosition)
            ->setPriceRef($priceRef)
            ->setPrice_calculation($price_calculation)
            ->setPackagefee($packagefee)
            ->setPerson($person)
            ->setAttribute($attribute)
            ->setConfigurationRef($configurationRef)
            ->setDestination($destination)
            ->setCreationDate($creationDate)
            ->setCatalog($catalog)
            ->setProductType($productType)
            ->setTravelNo($travelNo)
            ->setTravelNoDescription($travelNoDescription)
            ->setSellingMode($sellingMode)
            ->setConfirmationGroup($confirmationGroup)
            ->setMobilityIndicator($mobilityIndicator)
            ->setContractTime($contractTime)
            ->setReferenceType($referenceType)
            ->setSettlementType($settlementType);
    }
    /**
     * Get packageId value
     * @return string
     */
    public function getPackageId(): string
    {
        return $this->packageId;
    }
    /**
     * Set packageId value
     * @param string $packageId
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setPackageId(string $packageId): self
    {
        // validation for constraint: string
        if (!is_null($packageId) && !is_string($packageId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageId, true), gettype($packageId)), __LINE__);
        }
        $this->packageId = $packageId;
        
        return $this;
    }
    /**
     * Get packageSupplierId value
     * @return string
     */
    public function getPackageSupplierId(): string
    {
        return $this->packageSupplierId;
    }
    /**
     * Set packageSupplierId value
     * @param string $packageSupplierId
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setPackageSupplierId(string $packageSupplierId): self
    {
        // validation for constraint: string
        if (!is_null($packageSupplierId) && !is_string($packageSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageSupplierId, true), gettype($packageSupplierId)), __LINE__);
        }
        $this->packageSupplierId = $packageSupplierId;
        
        return $this;
    }
    /**
     * Get packagePosition value
     * @return int
     */
    public function getPackagePosition(): int
    {
        return $this->packagePosition;
    }
    /**
     * Set packagePosition value
     * @param int $packagePosition
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setPackagePosition(int $packagePosition): self
    {
        // validation for constraint: int
        if (!is_null($packagePosition) && !(is_int($packagePosition) || ctype_digit($packagePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($packagePosition, true), gettype($packagePosition)), __LINE__);
        }
        $this->packagePosition = $packagePosition;
        
        return $this;
    }
    /**
     * Get priceRef value
     * @return int
     */
    public function getPriceRef(): int
    {
        return $this->priceRef;
    }
    /**
     * Set priceRef value
     * @param int $priceRef
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setPriceRef(int $priceRef): self
    {
        // validation for constraint: int
        if (!is_null($priceRef) && !(is_int($priceRef) || ctype_digit($priceRef))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priceRef, true), gettype($priceRef)), __LINE__);
        }
        $this->priceRef = $priceRef;
        
        return $this;
    }
    /**
     * Get price_calculation value
     * @return \Pggns\MidocoApi\Order\StructType\Price_calculation[]
     */
    public function getPrice_calculation(): ?array
    {
        return $this->price_calculation;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrice_calculation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrice_calculation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrice_calculationForArrayConstraintFromSetPrice_calculation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $packageInfoPrice_calculationItem) {
            // validation for constraint: itemType
            if (!$packageInfoPrice_calculationItem instanceof \Pggns\MidocoApi\Order\StructType\Price_calculation) {
                $invalidValues[] = is_object($packageInfoPrice_calculationItem) ? get_class($packageInfoPrice_calculationItem) : sprintf('%s(%s)', gettype($packageInfoPrice_calculationItem), var_export($packageInfoPrice_calculationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The price_calculation property can only contain items of type \Pggns\MidocoApi\Order\StructType\Price_calculation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set price_calculation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Price_calculation[] $price_calculation
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setPrice_calculation(?array $price_calculation = null): self
    {
        // validation for constraint: array
        if ('' !== ($price_calculationArrayErrorMessage = self::validatePrice_calculationForArrayConstraintFromSetPrice_calculation($price_calculation))) {
            throw new InvalidArgumentException($price_calculationArrayErrorMessage, __LINE__);
        }
        $this->price_calculation = $price_calculation;
        
        return $this;
    }
    /**
     * Add item to price_calculation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Price_calculation $item
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function addToPrice_calculation(\Pggns\MidocoApi\Order\StructType\Price_calculation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Price_calculation) {
            throw new InvalidArgumentException(sprintf('The price_calculation property can only contain items of type \Pggns\MidocoApi\Order\StructType\Price_calculation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->price_calculation[] = $item;
        
        return $this;
    }
    /**
     * Get packagefee value
     * @return \Pggns\MidocoApi\Order\StructType\Packagefee[]
     */
    public function getPackagefee(): ?array
    {
        return $this->packagefee;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPackagefee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPackagefee method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePackagefeeForArrayConstraintFromSetPackagefee(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $packageInfoPackagefeeItem) {
            // validation for constraint: itemType
            if (!$packageInfoPackagefeeItem instanceof \Pggns\MidocoApi\Order\StructType\Packagefee) {
                $invalidValues[] = is_object($packageInfoPackagefeeItem) ? get_class($packageInfoPackagefeeItem) : sprintf('%s(%s)', gettype($packageInfoPackagefeeItem), var_export($packageInfoPackagefeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The packagefee property can only contain items of type \Pggns\MidocoApi\Order\StructType\Packagefee, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set packagefee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Packagefee[] $packagefee
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setPackagefee(?array $packagefee = null): self
    {
        // validation for constraint: array
        if ('' !== ($packagefeeArrayErrorMessage = self::validatePackagefeeForArrayConstraintFromSetPackagefee($packagefee))) {
            throw new InvalidArgumentException($packagefeeArrayErrorMessage, __LINE__);
        }
        $this->packagefee = $packagefee;
        
        return $this;
    }
    /**
     * Add item to packagefee value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Packagefee $item
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function addToPackagefee(\Pggns\MidocoApi\Order\StructType\Packagefee $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Packagefee) {
            throw new InvalidArgumentException(sprintf('The packagefee property can only contain items of type \Pggns\MidocoApi\Order\StructType\Packagefee, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->packagefee[] = $item;
        
        return $this;
    }
    /**
     * Get person value
     * @return \Pggns\MidocoApi\Order\StructType\Person[]
     */
    public function getPerson(): ?array
    {
        return $this->person;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPerson method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPerson method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePersonForArrayConstraintFromSetPerson(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $packageInfoPersonItem) {
            // validation for constraint: itemType
            if (!$packageInfoPersonItem instanceof \Pggns\MidocoApi\Order\StructType\Person) {
                $invalidValues[] = is_object($packageInfoPersonItem) ? get_class($packageInfoPersonItem) : sprintf('%s(%s)', gettype($packageInfoPersonItem), var_export($packageInfoPersonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The person property can only contain items of type \Pggns\MidocoApi\Order\StructType\Person, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set person value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Person[] $person
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setPerson(?array $person = null): self
    {
        // validation for constraint: array
        if ('' !== ($personArrayErrorMessage = self::validatePersonForArrayConstraintFromSetPerson($person))) {
            throw new InvalidArgumentException($personArrayErrorMessage, __LINE__);
        }
        $this->person = $person;
        
        return $this;
    }
    /**
     * Add item to person value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Person $item
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function addToPerson(\Pggns\MidocoApi\Order\StructType\Person $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Person) {
            throw new InvalidArgumentException(sprintf('The person property can only contain items of type \Pggns\MidocoApi\Order\StructType\Person, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->person[] = $item;
        
        return $this;
    }
    /**
     * Get attribute value
     * @return \Pggns\MidocoApi\Order\StructType\Attribute[]
     */
    public function getAttribute(): ?array
    {
        return $this->attribute;
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
        foreach ($values as $packageInfoAttributeItem) {
            // validation for constraint: itemType
            if (!$packageInfoAttributeItem instanceof \Pggns\MidocoApi\Order\StructType\Attribute) {
                $invalidValues[] = is_object($packageInfoAttributeItem) ? get_class($packageInfoAttributeItem) : sprintf('%s(%s)', gettype($packageInfoAttributeItem), var_export($packageInfoAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The attribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\Attribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set attribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Attribute[] $attribute
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setAttribute(?array $attribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($attributeArrayErrorMessage = self::validateAttributeForArrayConstraintFromSetAttribute($attribute))) {
            throw new InvalidArgumentException($attributeArrayErrorMessage, __LINE__);
        }
        $this->attribute = $attribute;
        
        return $this;
    }
    /**
     * Add item to attribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Attribute $item
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function addToAttribute(\Pggns\MidocoApi\Order\StructType\Attribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Attribute) {
            throw new InvalidArgumentException(sprintf('The attribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\Attribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->attribute[] = $item;
        
        return $this;
    }
    /**
     * Get configurationRef value
     * @return int|null
     */
    public function getConfigurationRef(): ?int
    {
        return $this->configurationRef;
    }
    /**
     * Set configurationRef value
     * @param int $configurationRef
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setConfigurationRef(?int $configurationRef = null): self
    {
        // validation for constraint: int
        if (!is_null($configurationRef) && !(is_int($configurationRef) || ctype_digit($configurationRef))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($configurationRef, true), gettype($configurationRef)), __LINE__);
        }
        $this->configurationRef = $configurationRef;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
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
     * Get catalog value
     * @return string|null
     */
    public function getCatalog(): ?string
    {
        return $this->catalog;
    }
    /**
     * Set catalog value
     * @param string $catalog
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setCatalog(?string $catalog = null): self
    {
        // validation for constraint: string
        if (!is_null($catalog) && !is_string($catalog)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($catalog, true), gettype($catalog)), __LINE__);
        }
        $this->catalog = $catalog;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
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
     * Get travelNoDescription value
     * @return string|null
     */
    public function getTravelNoDescription(): ?string
    {
        return $this->travelNoDescription;
    }
    /**
     * Set travelNoDescription value
     * @param string $travelNoDescription
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setTravelNoDescription(?string $travelNoDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNoDescription) && !is_string($travelNoDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNoDescription, true), gettype($travelNoDescription)), __LINE__);
        }
        $this->travelNoDescription = $travelNoDescription;
        
        return $this;
    }
    /**
     * Get sellingMode value
     * @return string|null
     */
    public function getSellingMode(): ?string
    {
        return $this->sellingMode;
    }
    /**
     * Set sellingMode value
     * @uses \Pggns\MidocoApi\Order\EnumType\BookingSellingModeType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\BookingSellingModeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sellingMode
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setSellingMode(?string $sellingMode = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\BookingSellingModeType::valueIsValid($sellingMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\BookingSellingModeType', is_array($sellingMode) ? implode(', ', $sellingMode) : var_export($sellingMode, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\BookingSellingModeType::getValidValues())), __LINE__);
        }
        $this->sellingMode = $sellingMode;
        
        return $this;
    }
    /**
     * Get confirmationGroup value
     * @return string|null
     */
    public function getConfirmationGroup(): ?string
    {
        return $this->confirmationGroup;
    }
    /**
     * Set confirmationGroup value
     * @param string $confirmationGroup
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setConfirmationGroup(?string $confirmationGroup = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmationGroup) && !is_string($confirmationGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmationGroup, true), gettype($confirmationGroup)), __LINE__);
        }
        $this->confirmationGroup = $confirmationGroup;
        
        return $this;
    }
    /**
     * Get mobilityIndicator value
     * @return bool|null
     */
    public function getMobilityIndicator(): ?bool
    {
        return $this->mobilityIndicator;
    }
    /**
     * Set mobilityIndicator value
     * @param bool $mobilityIndicator
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setMobilityIndicator(?bool $mobilityIndicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mobilityIndicator) && !is_bool($mobilityIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mobilityIndicator, true), gettype($mobilityIndicator)), __LINE__);
        }
        $this->mobilityIndicator = $mobilityIndicator;
        
        return $this;
    }
    /**
     * Get contractTime value
     * @return string|null
     */
    public function getContractTime(): ?string
    {
        return $this->contractTime;
    }
    /**
     * Set contractTime value
     * @param string $contractTime
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setContractTime(?string $contractTime = null): self
    {
        // validation for constraint: string
        if (!is_null($contractTime) && !is_string($contractTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractTime, true), gettype($contractTime)), __LINE__);
        }
        $this->contractTime = $contractTime;
        
        return $this;
    }
    /**
     * Get referenceType value
     * @return string|null
     */
    public function getReferenceType(): ?string
    {
        return $this->referenceType;
    }
    /**
     * Set referenceType value
     * @param string $referenceType
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setReferenceType(?string $referenceType = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceType) && !is_string($referenceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceType, true), gettype($referenceType)), __LINE__);
        }
        $this->referenceType = $referenceType;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\PackageInfo
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
}
