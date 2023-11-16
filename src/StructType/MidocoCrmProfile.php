<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmProfile StructType
 * @subpackage Structs
 */
class MidocoCrmProfile extends AbstractStructBase
{
    /**
     * The MidocoCrmCustomer
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmCustomer
     * @var \Pggns\MidocoApi\Order\StructType\CrmCustomerDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CrmCustomerDTO $MidocoCrmCustomer = null;
    /**
     * The ExternalProfile
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ExternalProfile
     * @var \Pggns\MidocoApi\Order\StructType\ExternalProfile[]
     */
    protected array $ExternalProfile = [];
    /**
     * The ProfileAttributes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ProfileAttributes
     * @var \Pggns\MidocoApi\Order\StructType\ProfileAttributes|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\ProfileAttributes $ProfileAttributes = null;
    /**
     * The MidocoCrmCustomerLink
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCrmCustomerLink
     * @var \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO[]
     */
    protected array $MidocoCrmCustomerLink = [];
    /**
     * The MidocoFrequentFlyerNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFrequentFlyerNumber
     * @var \Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO[]
     */
    protected array $MidocoFrequentFlyerNumber = [];
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
     * The MidocoContactEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactEntry
     * @var \Pggns\MidocoApi\Order\StructType\MidocoContactEntryType[]
     */
    protected array $MidocoContactEntry = [];
    /**
     * Constructor method for MidocoCrmProfile
     * @uses MidocoCrmProfile::setMidocoCrmCustomer()
     * @uses MidocoCrmProfile::setExternalProfile()
     * @uses MidocoCrmProfile::setProfileAttributes()
     * @uses MidocoCrmProfile::setMidocoCrmCustomerLink()
     * @uses MidocoCrmProfile::setMidocoFrequentFlyerNumber()
     * @uses MidocoCrmProfile::setMidocoCrmAddress()
     * @uses MidocoCrmProfile::setMidocoContactEntry()
     * @param \Pggns\MidocoApi\Order\StructType\CrmCustomerDTO $midocoCrmCustomer
     * @param \Pggns\MidocoApi\Order\StructType\ExternalProfile[] $externalProfile
     * @param \Pggns\MidocoApi\Order\StructType\ProfileAttributes $profileAttributes
     * @param \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO[] $midocoCrmCustomerLink
     * @param \Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO[] $midocoFrequentFlyerNumber
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCrmAddress[] $midocoCrmAddress
     * @param \Pggns\MidocoApi\Order\StructType\MidocoContactEntryType[] $midocoContactEntry
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\CrmCustomerDTO $midocoCrmCustomer = null, array $externalProfile = [], ?\Pggns\MidocoApi\Order\StructType\ProfileAttributes $profileAttributes = null, array $midocoCrmCustomerLink = [], array $midocoFrequentFlyerNumber = [], array $midocoCrmAddress = [], array $midocoContactEntry = [])
    {
        $this
            ->setMidocoCrmCustomer($midocoCrmCustomer)
            ->setExternalProfile($externalProfile)
            ->setProfileAttributes($profileAttributes)
            ->setMidocoCrmCustomerLink($midocoCrmCustomerLink)
            ->setMidocoFrequentFlyerNumber($midocoFrequentFlyerNumber)
            ->setMidocoCrmAddress($midocoCrmAddress)
            ->setMidocoContactEntry($midocoContactEntry);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmProfile
     */
    public function setMidocoCrmCustomer(?\Pggns\MidocoApi\Order\StructType\CrmCustomerDTO $midocoCrmCustomer = null): self
    {
        $this->MidocoCrmCustomer = $midocoCrmCustomer;
        
        return $this;
    }
    /**
     * Get ExternalProfile value
     * @return \Pggns\MidocoApi\Order\StructType\ExternalProfile[]
     */
    public function getExternalProfile(): array
    {
        return $this->ExternalProfile;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalProfile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalProfile method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalProfileForArrayConstraintsFromSetExternalProfile(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmProfileExternalProfileItem) {
            // validation for constraint: itemType
            if (!$midocoCrmProfileExternalProfileItem instanceof \Pggns\MidocoApi\Order\StructType\ExternalProfile) {
                $invalidValues[] = is_object($midocoCrmProfileExternalProfileItem) ? get_class($midocoCrmProfileExternalProfileItem) : sprintf('%s(%s)', gettype($midocoCrmProfileExternalProfileItem), var_export($midocoCrmProfileExternalProfileItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalProfile property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExternalProfile, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalProfile value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExternalProfile[] $externalProfile
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmProfile
     */
    public function setExternalProfile(array $externalProfile = []): self
    {
        // validation for constraint: array
        if ('' !== ($externalProfileArrayErrorMessage = self::validateExternalProfileForArrayConstraintsFromSetExternalProfile($externalProfile))) {
            throw new InvalidArgumentException($externalProfileArrayErrorMessage, __LINE__);
        }
        $this->ExternalProfile = $externalProfile;
        
        return $this;
    }
    /**
     * Add item to ExternalProfile value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExternalProfile $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmProfile
     */
    public function addToExternalProfile(\Pggns\MidocoApi\Order\StructType\ExternalProfile $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ExternalProfile) {
            throw new InvalidArgumentException(sprintf('The ExternalProfile property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExternalProfile, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalProfile[] = $item;
        
        return $this;
    }
    /**
     * Get ProfileAttributes value
     * @return \Pggns\MidocoApi\Order\StructType\ProfileAttributes|null
     */
    public function getProfileAttributes(): ?\Pggns\MidocoApi\Order\StructType\ProfileAttributes
    {
        return $this->ProfileAttributes;
    }
    /**
     * Set ProfileAttributes value
     * @param \Pggns\MidocoApi\Order\StructType\ProfileAttributes $profileAttributes
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmProfile
     */
    public function setProfileAttributes(?\Pggns\MidocoApi\Order\StructType\ProfileAttributes $profileAttributes = null): self
    {
        $this->ProfileAttributes = $profileAttributes;
        
        return $this;
    }
    /**
     * Get MidocoCrmCustomerLink value
     * @return \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO[]
     */
    public function getMidocoCrmCustomerLink(): array
    {
        return $this->MidocoCrmCustomerLink;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCrmCustomerLink method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCrmCustomerLink method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCrmCustomerLinkForArrayConstraintsFromSetMidocoCrmCustomerLink(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmProfileMidocoCrmCustomerLinkItem) {
            // validation for constraint: itemType
            if (!$midocoCrmProfileMidocoCrmCustomerLinkItem instanceof \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO) {
                $invalidValues[] = is_object($midocoCrmProfileMidocoCrmCustomerLinkItem) ? get_class($midocoCrmProfileMidocoCrmCustomerLinkItem) : sprintf('%s(%s)', gettype($midocoCrmProfileMidocoCrmCustomerLinkItem), var_export($midocoCrmProfileMidocoCrmCustomerLinkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCrmCustomerLink property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCrmCustomerLink value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO[] $midocoCrmCustomerLink
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmProfile
     */
    public function setMidocoCrmCustomerLink(array $midocoCrmCustomerLink = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCrmCustomerLinkArrayErrorMessage = self::validateMidocoCrmCustomerLinkForArrayConstraintsFromSetMidocoCrmCustomerLink($midocoCrmCustomerLink))) {
            throw new InvalidArgumentException($midocoCrmCustomerLinkArrayErrorMessage, __LINE__);
        }
        $this->MidocoCrmCustomerLink = $midocoCrmCustomerLink;
        
        return $this;
    }
    /**
     * Add item to MidocoCrmCustomerLink value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmProfile
     */
    public function addToMidocoCrmCustomerLink(\Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCrmCustomerLink property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrmCustomerLinkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCrmCustomerLink[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoFrequentFlyerNumber value
     * @return \Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO[]
     */
    public function getMidocoFrequentFlyerNumber(): array
    {
        return $this->MidocoFrequentFlyerNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFrequentFlyerNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFrequentFlyerNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFrequentFlyerNumberForArrayConstraintsFromSetMidocoFrequentFlyerNumber(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCrmProfileMidocoFrequentFlyerNumberItem) {
            // validation for constraint: itemType
            if (!$midocoCrmProfileMidocoFrequentFlyerNumberItem instanceof \Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO) {
                $invalidValues[] = is_object($midocoCrmProfileMidocoFrequentFlyerNumberItem) ? get_class($midocoCrmProfileMidocoFrequentFlyerNumberItem) : sprintf('%s(%s)', gettype($midocoCrmProfileMidocoFrequentFlyerNumberItem), var_export($midocoCrmProfileMidocoFrequentFlyerNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFrequentFlyerNumber property can only contain items of type \Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFrequentFlyerNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO[] $midocoFrequentFlyerNumber
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmProfile
     */
    public function setMidocoFrequentFlyerNumber(array $midocoFrequentFlyerNumber = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFrequentFlyerNumberArrayErrorMessage = self::validateMidocoFrequentFlyerNumberForArrayConstraintsFromSetMidocoFrequentFlyerNumber($midocoFrequentFlyerNumber))) {
            throw new InvalidArgumentException($midocoFrequentFlyerNumberArrayErrorMessage, __LINE__);
        }
        $this->MidocoFrequentFlyerNumber = $midocoFrequentFlyerNumber;
        
        return $this;
    }
    /**
     * Add item to MidocoFrequentFlyerNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmProfile
     */
    public function addToMidocoFrequentFlyerNumber(\Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoFrequentFlyerNumber property can only contain items of type \Pggns\MidocoApi\Order\StructType\FrequentFlyerNumberDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFrequentFlyerNumber[] = $item;
        
        return $this;
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
        foreach ($values as $midocoCrmProfileMidocoCrmAddressItem) {
            // validation for constraint: itemType
            if (!$midocoCrmProfileMidocoCrmAddressItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCrmAddress) {
                $invalidValues[] = is_object($midocoCrmProfileMidocoCrmAddressItem) ? get_class($midocoCrmProfileMidocoCrmAddressItem) : sprintf('%s(%s)', gettype($midocoCrmProfileMidocoCrmAddressItem), var_export($midocoCrmProfileMidocoCrmAddressItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmProfile
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmProfile
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
        foreach ($values as $midocoCrmProfileMidocoContactEntryItem) {
            // validation for constraint: itemType
            if (!$midocoCrmProfileMidocoContactEntryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoContactEntryType) {
                $invalidValues[] = is_object($midocoCrmProfileMidocoContactEntryItem) ? get_class($midocoCrmProfileMidocoContactEntryItem) : sprintf('%s(%s)', gettype($midocoCrmProfileMidocoContactEntryItem), var_export($midocoCrmProfileMidocoContactEntryItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmProfile
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmProfile
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
}
