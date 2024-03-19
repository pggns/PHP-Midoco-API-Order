<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for package-info StructType
 * Meta information extracted from the WSDL
 * - documentation: In case of a package booking, this section contains the necessary information about the selling supplier and additional fee
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Package_info extends AbstractStructBase
{
    /**
     * The package_id
     * Meta information extracted from the WSDL
     * - documentation: The identifier (booking id) of the package, which is used in communication with the customer
     * - use: required
     * @var string
     */
    protected string $package_id;
    /**
     * The package_supplier_id
     * Meta information extracted from the WSDL
     * - documentation: the marquee which is used for presenting the package to the customer
     * - use: required
     * @var string
     */
    protected string $package_supplier_id;
    /**
     * The package_position
     * Meta information extracted from the WSDL
     * - documentation: in case of possible multiple packages, these are numbered, starting by 1
     * - use: required
     * @var int
     */
    protected int $package_position;
    /**
     * The price_ref
     * Meta information extracted from the WSDL
     * - documentation: the selling price for this package (reference to a price, see below)
     * - use: required
     * @var int
     */
    protected int $price_ref;
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
     * The configuration_ref
     * Meta information extracted from the WSDL
     * - documentation: Reference this package to a special import behaviour
     * @var int|null
     */
    protected ?int $configuration_ref = null;
    /**
     * The destination
     * Meta information extracted from the WSDL
     * - documentation: optional attribute for supplier-mode: set in case of destination based accounting. In germany the content is mostly split in EU/NONEU. The content has financial (VAT) effect and has to be adjusted with finance
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The creation_date
     * Meta information extracted from the WSDL
     * - documentation: package creation date, default is import time
     * @var string|null
     */
    protected ?string $creation_date = null;
    /**
     * The catalog
     * Meta information extracted from the WSDL
     * - documentation: optional attribute for handling catalog data (travel_type)
     * @var string|null
     */
    protected ?string $catalog = null;
    /**
     * The product_type
     * Meta information extracted from the WSDL
     * - documentation: optional attribute for handling product type data
     * @var string|null
     */
    protected ?string $product_type = null;
    /**
     * The travel_no
     * Meta information extracted from the WSDL
     * - documentation: optional attribute for handling travel number related assignments
     * @var string|null
     */
    protected ?string $travel_no = null;
    /**
     * The travel_no_description
     * Meta information extracted from the WSDL
     * - documentation: optional attribute for creating travel-nos on import. only used with travel-no-accounts functionality.
     * @var string|null
     */
    protected ?string $travel_no_description = null;
    /**
     * The selling_mode
     * @var string|null
     */
    protected ?string $selling_mode = null;
    /**
     * The confirmation_group
     * Meta information extracted from the WSDL
     * - documentation: confirmation group
     * @var string|null
     */
    protected ?string $confirmation_group = null;
    /**
     * The mobility_indicator
     * Meta information extracted from the WSDL
     * - documentation: mobility indicator
     * @var bool|null
     */
    protected ?bool $mobility_indicator = null;
    /**
     * The contract_time
     * Meta information extracted from the WSDL
     * - documentation: contract time
     * @var string|null
     */
    protected ?string $contract_time = null;
    /**
     * The reference_type
     * Meta information extracted from the WSDL
     * - documentation: set to the external system id, which has a refernce to this package item
     * @var string|null
     */
    protected ?string $reference_type = null;
    /**
     * The settlement_type
     * Meta information extracted from the WSDL
     * - documentation: settlement type for the package item
     * @var string|null
     */
    protected ?string $settlement_type = null;
    /**
     * Constructor method for package-info
     * @uses Package_info::setPackage_id()
     * @uses Package_info::setPackage_supplier_id()
     * @uses Package_info::setPackage_position()
     * @uses Package_info::setPrice_ref()
     * @uses Package_info::setPrice_calculation()
     * @uses Package_info::setPackagefee()
     * @uses Package_info::setPerson()
     * @uses Package_info::setAttribute()
     * @uses Package_info::setConfiguration_ref()
     * @uses Package_info::setDestination()
     * @uses Package_info::setCreation_date()
     * @uses Package_info::setCatalog()
     * @uses Package_info::setProduct_type()
     * @uses Package_info::setTravel_no()
     * @uses Package_info::setTravel_no_description()
     * @uses Package_info::setSelling_mode()
     * @uses Package_info::setConfirmation_group()
     * @uses Package_info::setMobility_indicator()
     * @uses Package_info::setContract_time()
     * @uses Package_info::setReference_type()
     * @uses Package_info::setSettlement_type()
     * @param string $package_id
     * @param string $package_supplier_id
     * @param int $package_position
     * @param int $price_ref
     * @param \Pggns\MidocoApi\Order\StructType\Price_calculation[] $price_calculation
     * @param \Pggns\MidocoApi\Order\StructType\Packagefee[] $packagefee
     * @param \Pggns\MidocoApi\Order\StructType\Person[] $person
     * @param \Pggns\MidocoApi\Order\StructType\Attribute[] $attribute
     * @param int $configuration_ref
     * @param string $destination
     * @param string $creation_date
     * @param string $catalog
     * @param string $product_type
     * @param string $travel_no
     * @param string $travel_no_description
     * @param string $selling_mode
     * @param string $confirmation_group
     * @param bool $mobility_indicator
     * @param string $contract_time
     * @param string $reference_type
     * @param string $settlement_type
     */
    public function __construct(string $package_id, string $package_supplier_id, int $package_position, int $price_ref, ?array $price_calculation = null, ?array $packagefee = null, ?array $person = null, ?array $attribute = null, ?int $configuration_ref = null, ?string $destination = null, ?string $creation_date = null, ?string $catalog = null, ?string $product_type = null, ?string $travel_no = null, ?string $travel_no_description = null, ?string $selling_mode = null, ?string $confirmation_group = null, ?bool $mobility_indicator = null, ?string $contract_time = null, ?string $reference_type = null, ?string $settlement_type = null)
    {
        $this
            ->setPackage_id($package_id)
            ->setPackage_supplier_id($package_supplier_id)
            ->setPackage_position($package_position)
            ->setPrice_ref($price_ref)
            ->setPrice_calculation($price_calculation)
            ->setPackagefee($packagefee)
            ->setPerson($person)
            ->setAttribute($attribute)
            ->setConfiguration_ref($configuration_ref)
            ->setDestination($destination)
            ->setCreation_date($creation_date)
            ->setCatalog($catalog)
            ->setProduct_type($product_type)
            ->setTravel_no($travel_no)
            ->setTravel_no_description($travel_no_description)
            ->setSelling_mode($selling_mode)
            ->setConfirmation_group($confirmation_group)
            ->setMobility_indicator($mobility_indicator)
            ->setContract_time($contract_time)
            ->setReference_type($reference_type)
            ->setSettlement_type($settlement_type);
    }
    /**
     * Get package_id value
     * @return string
     */
    public function getPackage_id(): string
    {
        return $this->{'package-id'};
    }
    /**
     * Set package_id value
     * @param string $package_id
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setPackage_id(string $package_id): self
    {
        // validation for constraint: string
        if (!is_null($package_id) && !is_string($package_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($package_id, true), gettype($package_id)), __LINE__);
        }
        $this->package_id = $this->{'package-id'} = $package_id;
        
        return $this;
    }
    /**
     * Get package_supplier_id value
     * @return string
     */
    public function getPackage_supplier_id(): string
    {
        return $this->{'package-supplier-id'};
    }
    /**
     * Set package_supplier_id value
     * @param string $package_supplier_id
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setPackage_supplier_id(string $package_supplier_id): self
    {
        // validation for constraint: string
        if (!is_null($package_supplier_id) && !is_string($package_supplier_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($package_supplier_id, true), gettype($package_supplier_id)), __LINE__);
        }
        $this->package_supplier_id = $this->{'package-supplier-id'} = $package_supplier_id;
        
        return $this;
    }
    /**
     * Get package_position value
     * @return int
     */
    public function getPackage_position(): int
    {
        return $this->{'package-position'};
    }
    /**
     * Set package_position value
     * @param int $package_position
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setPackage_position(int $package_position): self
    {
        // validation for constraint: int
        if (!is_null($package_position) && !(is_int($package_position) || ctype_digit($package_position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($package_position, true), gettype($package_position)), __LINE__);
        }
        $this->package_position = $this->{'package-position'} = $package_position;
        
        return $this;
    }
    /**
     * Get price_ref value
     * @return int
     */
    public function getPrice_ref(): int
    {
        return $this->{'price-ref'};
    }
    /**
     * Set price_ref value
     * @param int $price_ref
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setPrice_ref(int $price_ref): self
    {
        // validation for constraint: int
        if (!is_null($price_ref) && !(is_int($price_ref) || ctype_digit($price_ref))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($price_ref, true), gettype($price_ref)), __LINE__);
        }
        $this->price_ref = $this->{'price-ref'} = $price_ref;
        
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
        foreach ($values as $package_infoPrice_calculationItem) {
            // validation for constraint: itemType
            if (!$package_infoPrice_calculationItem instanceof \Pggns\MidocoApi\Order\StructType\Price_calculation) {
                $invalidValues[] = is_object($package_infoPrice_calculationItem) ? get_class($package_infoPrice_calculationItem) : sprintf('%s(%s)', gettype($package_infoPrice_calculationItem), var_export($package_infoPrice_calculationItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
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
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
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
        foreach ($values as $package_infoPackagefeeItem) {
            // validation for constraint: itemType
            if (!$package_infoPackagefeeItem instanceof \Pggns\MidocoApi\Order\StructType\Packagefee) {
                $invalidValues[] = is_object($package_infoPackagefeeItem) ? get_class($package_infoPackagefeeItem) : sprintf('%s(%s)', gettype($package_infoPackagefeeItem), var_export($package_infoPackagefeeItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
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
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
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
        foreach ($values as $package_infoPersonItem) {
            // validation for constraint: itemType
            if (!$package_infoPersonItem instanceof \Pggns\MidocoApi\Order\StructType\Person) {
                $invalidValues[] = is_object($package_infoPersonItem) ? get_class($package_infoPersonItem) : sprintf('%s(%s)', gettype($package_infoPersonItem), var_export($package_infoPersonItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
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
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
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
        foreach ($values as $package_infoAttributeItem) {
            // validation for constraint: itemType
            if (!$package_infoAttributeItem instanceof \Pggns\MidocoApi\Order\StructType\Attribute) {
                $invalidValues[] = is_object($package_infoAttributeItem) ? get_class($package_infoAttributeItem) : sprintf('%s(%s)', gettype($package_infoAttributeItem), var_export($package_infoAttributeItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
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
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
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
     * Get configuration_ref value
     * @return int|null
     */
    public function getConfiguration_ref(): ?int
    {
        return $this->{'configuration-ref'};
    }
    /**
     * Set configuration_ref value
     * @param int $configuration_ref
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setConfiguration_ref(?int $configuration_ref = null): self
    {
        // validation for constraint: int
        if (!is_null($configuration_ref) && !(is_int($configuration_ref) || ctype_digit($configuration_ref))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($configuration_ref, true), gettype($configuration_ref)), __LINE__);
        }
        $this->configuration_ref = $this->{'configuration-ref'} = $configuration_ref;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
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
     * Get creation_date value
     * @return string|null
     */
    public function getCreation_date(): ?string
    {
        return $this->{'creation-date'};
    }
    /**
     * Set creation_date value
     * @param string $creation_date
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setCreation_date(?string $creation_date = null): self
    {
        // validation for constraint: string
        if (!is_null($creation_date) && !is_string($creation_date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creation_date, true), gettype($creation_date)), __LINE__);
        }
        $this->creation_date = $this->{'creation-date'} = $creation_date;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
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
     * Get product_type value
     * @return string|null
     */
    public function getProduct_type(): ?string
    {
        return $this->{'product-type'};
    }
    /**
     * Set product_type value
     * @param string $product_type
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setProduct_type(?string $product_type = null): self
    {
        // validation for constraint: string
        if (!is_null($product_type) && !is_string($product_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($product_type, true), gettype($product_type)), __LINE__);
        }
        $this->product_type = $this->{'product-type'} = $product_type;
        
        return $this;
    }
    /**
     * Get travel_no value
     * @return string|null
     */
    public function getTravel_no(): ?string
    {
        return $this->{'travel-no'};
    }
    /**
     * Set travel_no value
     * @param string $travel_no
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setTravel_no(?string $travel_no = null): self
    {
        // validation for constraint: string
        if (!is_null($travel_no) && !is_string($travel_no)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travel_no, true), gettype($travel_no)), __LINE__);
        }
        $this->travel_no = $this->{'travel-no'} = $travel_no;
        
        return $this;
    }
    /**
     * Get travel_no_description value
     * @return string|null
     */
    public function getTravel_no_description(): ?string
    {
        return $this->{'travel-no-description'};
    }
    /**
     * Set travel_no_description value
     * @param string $travel_no_description
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setTravel_no_description(?string $travel_no_description = null): self
    {
        // validation for constraint: string
        if (!is_null($travel_no_description) && !is_string($travel_no_description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travel_no_description, true), gettype($travel_no_description)), __LINE__);
        }
        $this->travel_no_description = $this->{'travel-no-description'} = $travel_no_description;
        
        return $this;
    }
    /**
     * Get selling_mode value
     * @return string|null
     */
    public function getSelling_mode(): ?string
    {
        return $this->{'selling-mode'};
    }
    /**
     * Set selling_mode value
     * @uses \Pggns\MidocoApi\Order\EnumType\BookingSellingModeType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\BookingSellingModeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $selling_mode
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setSelling_mode(?string $selling_mode = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\BookingSellingModeType::valueIsValid($selling_mode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\BookingSellingModeType', is_array($selling_mode) ? implode(', ', $selling_mode) : var_export($selling_mode, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\BookingSellingModeType::getValidValues())), __LINE__);
        }
        $this->selling_mode = $this->{'selling-mode'} = $selling_mode;
        
        return $this;
    }
    /**
     * Get confirmation_group value
     * @return string|null
     */
    public function getConfirmation_group(): ?string
    {
        return $this->{'confirmation-group'};
    }
    /**
     * Set confirmation_group value
     * @param string $confirmation_group
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setConfirmation_group(?string $confirmation_group = null): self
    {
        // validation for constraint: string
        if (!is_null($confirmation_group) && !is_string($confirmation_group)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($confirmation_group, true), gettype($confirmation_group)), __LINE__);
        }
        $this->confirmation_group = $this->{'confirmation-group'} = $confirmation_group;
        
        return $this;
    }
    /**
     * Get mobility_indicator value
     * @return bool|null
     */
    public function getMobility_indicator(): ?bool
    {
        return $this->{'mobility-indicator'};
    }
    /**
     * Set mobility_indicator value
     * @param bool $mobility_indicator
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setMobility_indicator(?bool $mobility_indicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mobility_indicator) && !is_bool($mobility_indicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mobility_indicator, true), gettype($mobility_indicator)), __LINE__);
        }
        $this->mobility_indicator = $this->{'mobility-indicator'} = $mobility_indicator;
        
        return $this;
    }
    /**
     * Get contract_time value
     * @return string|null
     */
    public function getContract_time(): ?string
    {
        return $this->{'contract-time'};
    }
    /**
     * Set contract_time value
     * @param string $contract_time
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setContract_time(?string $contract_time = null): self
    {
        // validation for constraint: string
        if (!is_null($contract_time) && !is_string($contract_time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contract_time, true), gettype($contract_time)), __LINE__);
        }
        $this->contract_time = $this->{'contract-time'} = $contract_time;
        
        return $this;
    }
    /**
     * Get reference_type value
     * @return string|null
     */
    public function getReference_type(): ?string
    {
        return $this->{'reference-type'};
    }
    /**
     * Set reference_type value
     * @param string $reference_type
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setReference_type(?string $reference_type = null): self
    {
        // validation for constraint: string
        if (!is_null($reference_type) && !is_string($reference_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference_type, true), gettype($reference_type)), __LINE__);
        }
        $this->reference_type = $this->{'reference-type'} = $reference_type;
        
        return $this;
    }
    /**
     * Get settlement_type value
     * @return string|null
     */
    public function getSettlement_type(): ?string
    {
        return $this->{'settlement-type'};
    }
    /**
     * Set settlement_type value
     * @param string $settlement_type
     * @return \Pggns\MidocoApi\Order\StructType\Package_info
     */
    public function setSettlement_type(?string $settlement_type = null): self
    {
        // validation for constraint: string
        if (!is_null($settlement_type) && !is_string($settlement_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlement_type, true), gettype($settlement_type)), __LINE__);
        }
        $this->settlement_type = $this->{'settlement-type'} = $settlement_type;
        
        return $this;
    }
}
