<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCRMImportDTOs StructType
 * @subpackage Structs
 */
class MidocoCRMImportDTOs extends AbstractStructBase
{
    /**
     * The MidocoImportCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportCustomer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoImportCustomer[]
     */
    protected array $MidocoImportCustomer = [];
    /**
     * The MidocoImportCCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportCCard
     * @var \Pggns\MidocoApi\Order\StructType\MidocoImportCCard[]
     */
    protected array $MidocoImportCCard = [];
    /**
     * The MidocoImportAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportAttribute
     * @var \Pggns\MidocoApi\Order\StructType\MidocoImportAttribute[]
     */
    protected array $MidocoImportAttribute = [];
    /**
     * The MidocoImportNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportNotice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoImportNotice[]
     */
    protected array $MidocoImportNotice = [];
    /**
     * The MidocoImportDebitor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportDebitor
     * @var \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor[]
     */
    protected array $MidocoImportDebitor = [];
    /**
     * The MidocoImportHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportHistory
     * @var \Pggns\MidocoApi\Order\StructType\MidocoImportHistory[]
     */
    protected array $MidocoImportHistory = [];
    /**
     * The MidocoImportContactHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportContactHistory
     * @var \Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory[]
     */
    protected array $MidocoImportContactHistory = [];
    /**
     * The MidocoImportAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportAddress
     * @var \Pggns\MidocoApi\Order\StructType\MidocoImportAddress[]
     */
    protected array $MidocoImportAddress = [];
    /**
     * The MidocoImportContactType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportContactType
     * @var \Pggns\MidocoApi\Order\StructType\MidocoImportContactType[]
     */
    protected array $MidocoImportContactType = [];
    /**
     * The MidocoImportAgencyInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportAgencyInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo[]
     */
    protected array $MidocoImportAgencyInfo = [];
    /**
     * Constructor method for MidocoCRMImportDTOs
     * @uses MidocoCRMImportDTOs::setMidocoImportCustomer()
     * @uses MidocoCRMImportDTOs::setMidocoImportCCard()
     * @uses MidocoCRMImportDTOs::setMidocoImportAttribute()
     * @uses MidocoCRMImportDTOs::setMidocoImportNotice()
     * @uses MidocoCRMImportDTOs::setMidocoImportDebitor()
     * @uses MidocoCRMImportDTOs::setMidocoImportHistory()
     * @uses MidocoCRMImportDTOs::setMidocoImportContactHistory()
     * @uses MidocoCRMImportDTOs::setMidocoImportAddress()
     * @uses MidocoCRMImportDTOs::setMidocoImportContactType()
     * @uses MidocoCRMImportDTOs::setMidocoImportAgencyInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportCustomer[] $midocoImportCustomer
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportCCard[] $midocoImportCCard
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportAttribute[] $midocoImportAttribute
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportNotice[] $midocoImportNotice
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor[] $midocoImportDebitor
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportHistory[] $midocoImportHistory
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory[] $midocoImportContactHistory
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportAddress[] $midocoImportAddress
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportContactType[] $midocoImportContactType
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo[] $midocoImportAgencyInfo
     */
    public function __construct(array $midocoImportCustomer = [], array $midocoImportCCard = [], array $midocoImportAttribute = [], array $midocoImportNotice = [], array $midocoImportDebitor = [], array $midocoImportHistory = [], array $midocoImportContactHistory = [], array $midocoImportAddress = [], array $midocoImportContactType = [], array $midocoImportAgencyInfo = [])
    {
        $this
            ->setMidocoImportCustomer($midocoImportCustomer)
            ->setMidocoImportCCard($midocoImportCCard)
            ->setMidocoImportAttribute($midocoImportAttribute)
            ->setMidocoImportNotice($midocoImportNotice)
            ->setMidocoImportDebitor($midocoImportDebitor)
            ->setMidocoImportHistory($midocoImportHistory)
            ->setMidocoImportContactHistory($midocoImportContactHistory)
            ->setMidocoImportAddress($midocoImportAddress)
            ->setMidocoImportContactType($midocoImportContactType)
            ->setMidocoImportAgencyInfo($midocoImportAgencyInfo);
    }
    /**
     * Get MidocoImportCustomer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCustomer[]
     */
    public function getMidocoImportCustomer(): array
    {
        return $this->MidocoImportCustomer;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportCustomer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportCustomerForArrayConstraintsFromSetMidocoImportCustomer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportCustomerItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportCustomerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportCustomer) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportCustomerItem) ? get_class($midocoCRMImportDTOsMidocoImportCustomerItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportCustomerItem), var_export($midocoCRMImportDTOsMidocoImportCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportCustomer property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportCustomer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportCustomer[] $midocoImportCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportCustomer(array $midocoImportCustomer = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportCustomerArrayErrorMessage = self::validateMidocoImportCustomerForArrayConstraintsFromSetMidocoImportCustomer($midocoImportCustomer))) {
            throw new InvalidArgumentException($midocoImportCustomerArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportCustomer = $midocoImportCustomer;
        
        return $this;
    }
    /**
     * Add item to MidocoImportCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportCustomer $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportCustomer(\Pggns\MidocoApi\Order\StructType\MidocoImportCustomer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportCustomer) {
            throw new InvalidArgumentException(sprintf('The MidocoImportCustomer property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportCustomer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportCustomer[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportCCard value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportCCard[]
     */
    public function getMidocoImportCCard(): array
    {
        return $this->MidocoImportCCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportCCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportCCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportCCardForArrayConstraintsFromSetMidocoImportCCard(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportCCardItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportCCardItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportCCard) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportCCardItem) ? get_class($midocoCRMImportDTOsMidocoImportCCardItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportCCardItem), var_export($midocoCRMImportDTOsMidocoImportCCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportCCard property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportCCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportCCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportCCard[] $midocoImportCCard
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportCCard(array $midocoImportCCard = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportCCardArrayErrorMessage = self::validateMidocoImportCCardForArrayConstraintsFromSetMidocoImportCCard($midocoImportCCard))) {
            throw new InvalidArgumentException($midocoImportCCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportCCard = $midocoImportCCard;
        
        return $this;
    }
    /**
     * Add item to MidocoImportCCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportCCard $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportCCard(\Pggns\MidocoApi\Order\StructType\MidocoImportCCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportCCard) {
            throw new InvalidArgumentException(sprintf('The MidocoImportCCard property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportCCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportCCard[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportAttribute value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAttribute[]
     */
    public function getMidocoImportAttribute(): array
    {
        return $this->MidocoImportAttribute;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportAttribute method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportAttributeForArrayConstraintsFromSetMidocoImportAttribute(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportAttributeItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportAttributeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportAttribute) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportAttributeItem) ? get_class($midocoCRMImportDTOsMidocoImportAttributeItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportAttributeItem), var_export($midocoCRMImportDTOsMidocoImportAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportAttribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportAttribute[] $midocoImportAttribute
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportAttribute(array $midocoImportAttribute = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportAttributeArrayErrorMessage = self::validateMidocoImportAttributeForArrayConstraintsFromSetMidocoImportAttribute($midocoImportAttribute))) {
            throw new InvalidArgumentException($midocoImportAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportAttribute = $midocoImportAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoImportAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportAttribute $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportAttribute(\Pggns\MidocoApi\Order\StructType\MidocoImportAttribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportAttribute) {
            throw new InvalidArgumentException(sprintf('The MidocoImportAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportAttribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportAttribute[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportNotice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportNotice[]
     */
    public function getMidocoImportNotice(): array
    {
        return $this->MidocoImportNotice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportNotice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportNoticeForArrayConstraintsFromSetMidocoImportNotice(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportNoticeItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportNoticeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportNotice) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportNoticeItem) ? get_class($midocoCRMImportDTOsMidocoImportNoticeItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportNoticeItem), var_export($midocoCRMImportDTOsMidocoImportNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportNotice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportNotice[] $midocoImportNotice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportNotice(array $midocoImportNotice = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportNoticeArrayErrorMessage = self::validateMidocoImportNoticeForArrayConstraintsFromSetMidocoImportNotice($midocoImportNotice))) {
            throw new InvalidArgumentException($midocoImportNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportNotice = $midocoImportNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoImportNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportNotice $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportNotice(\Pggns\MidocoApi\Order\StructType\MidocoImportNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoImportNotice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportNotice[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportDebitor value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor[]
     */
    public function getMidocoImportDebitor(): array
    {
        return $this->MidocoImportDebitor;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportDebitor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportDebitor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportDebitorForArrayConstraintsFromSetMidocoImportDebitor(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportDebitorItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportDebitorItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportDebitorItem) ? get_class($midocoCRMImportDTOsMidocoImportDebitorItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportDebitorItem), var_export($midocoCRMImportDTOsMidocoImportDebitorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportDebitor property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor[] $midocoImportDebitor
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportDebitor(array $midocoImportDebitor = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportDebitorArrayErrorMessage = self::validateMidocoImportDebitorForArrayConstraintsFromSetMidocoImportDebitor($midocoImportDebitor))) {
            throw new InvalidArgumentException($midocoImportDebitorArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportDebitor = $midocoImportDebitor;
        
        return $this;
    }
    /**
     * Add item to MidocoImportDebitor value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportDebitor(\Pggns\MidocoApi\Order\StructType\MidocoImportDebitor $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor) {
            throw new InvalidArgumentException(sprintf('The MidocoImportDebitor property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportDebitor[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportHistory value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportHistory[]
     */
    public function getMidocoImportHistory(): array
    {
        return $this->MidocoImportHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportHistoryForArrayConstraintsFromSetMidocoImportHistory(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportHistoryItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportHistoryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportHistory) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportHistoryItem) ? get_class($midocoCRMImportDTOsMidocoImportHistoryItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportHistoryItem), var_export($midocoCRMImportDTOsMidocoImportHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportHistory[] $midocoImportHistory
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportHistory(array $midocoImportHistory = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportHistoryArrayErrorMessage = self::validateMidocoImportHistoryForArrayConstraintsFromSetMidocoImportHistory($midocoImportHistory))) {
            throw new InvalidArgumentException($midocoImportHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportHistory = $midocoImportHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoImportHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportHistory $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportHistory(\Pggns\MidocoApi\Order\StructType\MidocoImportHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoImportHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportHistory[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportContactHistory value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory[]
     */
    public function getMidocoImportContactHistory(): array
    {
        return $this->MidocoImportContactHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportContactHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportContactHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportContactHistoryForArrayConstraintsFromSetMidocoImportContactHistory(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportContactHistoryItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportContactHistoryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportContactHistoryItem) ? get_class($midocoCRMImportDTOsMidocoImportContactHistoryItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportContactHistoryItem), var_export($midocoCRMImportDTOsMidocoImportContactHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportContactHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory[] $midocoImportContactHistory
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportContactHistory(array $midocoImportContactHistory = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportContactHistoryArrayErrorMessage = self::validateMidocoImportContactHistoryForArrayConstraintsFromSetMidocoImportContactHistory($midocoImportContactHistory))) {
            throw new InvalidArgumentException($midocoImportContactHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportContactHistory = $midocoImportContactHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoImportContactHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportContactHistory(\Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoImportContactHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportContactHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportContactHistory[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportAddress value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAddress[]
     */
    public function getMidocoImportAddress(): array
    {
        return $this->MidocoImportAddress;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportAddressForArrayConstraintsFromSetMidocoImportAddress(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportAddressItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportAddressItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportAddress) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportAddressItem) ? get_class($midocoCRMImportDTOsMidocoImportAddressItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportAddressItem), var_export($midocoCRMImportDTOsMidocoImportAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportAddress property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportAddress[] $midocoImportAddress
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportAddress(array $midocoImportAddress = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportAddressArrayErrorMessage = self::validateMidocoImportAddressForArrayConstraintsFromSetMidocoImportAddress($midocoImportAddress))) {
            throw new InvalidArgumentException($midocoImportAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportAddress = $midocoImportAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoImportAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportAddress $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportAddress(\Pggns\MidocoApi\Order\StructType\MidocoImportAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoImportAddress property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportAddress[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportContactType value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportContactType[]
     */
    public function getMidocoImportContactType(): array
    {
        return $this->MidocoImportContactType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportContactType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportContactType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportContactTypeForArrayConstraintsFromSetMidocoImportContactType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportContactTypeItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportContactTypeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportContactType) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportContactTypeItem) ? get_class($midocoCRMImportDTOsMidocoImportContactTypeItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportContactTypeItem), var_export($midocoCRMImportDTOsMidocoImportContactTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportContactType property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportContactType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportContactType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportContactType[] $midocoImportContactType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportContactType(array $midocoImportContactType = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportContactTypeArrayErrorMessage = self::validateMidocoImportContactTypeForArrayConstraintsFromSetMidocoImportContactType($midocoImportContactType))) {
            throw new InvalidArgumentException($midocoImportContactTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportContactType = $midocoImportContactType;
        
        return $this;
    }
    /**
     * Add item to MidocoImportContactType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportContactType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportContactType(\Pggns\MidocoApi\Order\StructType\MidocoImportContactType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportContactType) {
            throw new InvalidArgumentException(sprintf('The MidocoImportContactType property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportContactType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportContactType[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoImportAgencyInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo[]
     */
    public function getMidocoImportAgencyInfo(): array
    {
        return $this->MidocoImportAgencyInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportAgencyInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportAgencyInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportAgencyInfoForArrayConstraintsFromSetMidocoImportAgencyInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoCRMImportDTOsMidocoImportAgencyInfoItem) {
            // validation for constraint: itemType
            if (!$midocoCRMImportDTOsMidocoImportAgencyInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo) {
                $invalidValues[] = is_object($midocoCRMImportDTOsMidocoImportAgencyInfoItem) ? get_class($midocoCRMImportDTOsMidocoImportAgencyInfoItem) : sprintf('%s(%s)', gettype($midocoCRMImportDTOsMidocoImportAgencyInfoItem), var_export($midocoCRMImportDTOsMidocoImportAgencyInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportAgencyInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportAgencyInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo[] $midocoImportAgencyInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function setMidocoImportAgencyInfo(array $midocoImportAgencyInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportAgencyInfoArrayErrorMessage = self::validateMidocoImportAgencyInfoForArrayConstraintsFromSetMidocoImportAgencyInfo($midocoImportAgencyInfo))) {
            throw new InvalidArgumentException($midocoImportAgencyInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportAgencyInfo = $midocoImportAgencyInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoImportAgencyInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCRMImportDTOs
     */
    public function addToMidocoImportAgencyInfo(\Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoImportAgencyInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoImportAgencyInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportAgencyInfo[] = $item;
        
        return $this;
    }
}
