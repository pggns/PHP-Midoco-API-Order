<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderType StructType
 * @subpackage Structs
 */
class MidocoOrderType extends OrderDTO
{
    /**
     * The MidocoOnlinePayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOnlinePayment
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment $MidocoOnlinePayment = null;
    /**
     * The MidocoAdvisedPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoAdvisedPayment
     * @var \Pggns\MidocoApi\Order\StructType\AdvisedPaymentDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\AdvisedPaymentDTO $MidocoAdvisedPayment = null;
    /**
     * The MidocoDebitPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoDebitPayment
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDebitPayment|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDebitPayment $MidocoDebitPayment = null;
    /**
     * The MidocoSellItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemType[]
     */
    protected array $MidocoSellItem = [];
    /**
     * The MidocoOrderCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: 3
     * - minOccurs: 0
     * - ref: MidocoOrderCustomer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer[]
     */
    protected array $MidocoOrderCustomer = [];
    /**
     * The MidocoOrdersDbiInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdersDbiInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[]
     */
    protected array $MidocoOrdersDbiInfo = [];
    /**
     * The ExternalPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: mbm:ExternalPayment
     * @var \Pggns\MidocoApi\Order\StructType\ExternalPayment[]
     */
    protected array $ExternalPayment = [];
    /**
     * The MidocoOrderNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderNotice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[]
     */
    protected array $MidocoOrderNotice = [];
    /**
     * The calculatedMarginServices
     * @var float|null
     */
    protected ?float $calculatedMarginServices = null;
    /**
     * The unitAlias
     * @var string|null
     */
    protected ?string $unitAlias = null;
    /**
     * The mediatorPortal
     * @var string|null
     */
    protected ?string $mediatorPortal = null;
    /**
     * The isModified
     * @var bool|null
     */
    protected ?bool $isModified = null;
    /**
     * The preferredPaymentType
     * @var string|null
     */
    protected ?string $preferredPaymentType = null;
    /**
     * The paymentTypeInfo
     * @var string|null
     */
    protected ?string $paymentTypeInfo = null;
    /**
     * The existTravelPlans
     * @var bool|null
     */
    protected ?bool $existTravelPlans = null;
    /**
     * The existOrderDocuments
     * @var bool|null
     */
    protected ?bool $existOrderDocuments = null;
    /**
     * The existOrderNotices
     * @var bool|null
     */
    protected ?bool $existOrderNotices = null;
    /**
     * The existOrderRemarks
     * @var bool|null
     */
    protected ?bool $existOrderRemarks = null;
    /**
     * The existPaymentPaycodes
     * @var bool|null
     */
    protected ?bool $existPaymentPaycodes = null;
    /**
     * The existOrderBillings
     * @var bool|null
     */
    protected ?bool $existOrderBillings = null;
    /**
     * Constructor method for MidocoOrderType
     * @uses MidocoOrderType::setMidocoOnlinePayment()
     * @uses MidocoOrderType::setMidocoAdvisedPayment()
     * @uses MidocoOrderType::setMidocoDebitPayment()
     * @uses MidocoOrderType::setMidocoSellItem()
     * @uses MidocoOrderType::setMidocoOrderCustomer()
     * @uses MidocoOrderType::setMidocoOrdersDbiInfo()
     * @uses MidocoOrderType::setExternalPayment()
     * @uses MidocoOrderType::setMidocoOrderNotice()
     * @uses MidocoOrderType::setCalculatedMarginServices()
     * @uses MidocoOrderType::setUnitAlias()
     * @uses MidocoOrderType::setMediatorPortal()
     * @uses MidocoOrderType::setIsModified()
     * @uses MidocoOrderType::setPreferredPaymentType()
     * @uses MidocoOrderType::setPaymentTypeInfo()
     * @uses MidocoOrderType::setExistTravelPlans()
     * @uses MidocoOrderType::setExistOrderDocuments()
     * @uses MidocoOrderType::setExistOrderNotices()
     * @uses MidocoOrderType::setExistOrderRemarks()
     * @uses MidocoOrderType::setExistPaymentPaycodes()
     * @uses MidocoOrderType::setExistOrderBillings()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment $midocoOnlinePayment
     * @param \Pggns\MidocoApi\Order\StructType\AdvisedPaymentDTO $midocoAdvisedPayment
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDebitPayment $midocoDebitPayment
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemType[] $midocoSellItem
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer[] $midocoOrderCustomer
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[] $midocoOrdersDbiInfo
     * @param \Pggns\MidocoApi\Order\StructType\ExternalPayment[] $externalPayment
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[] $midocoOrderNotice
     * @param float $calculatedMarginServices
     * @param string $unitAlias
     * @param string $mediatorPortal
     * @param bool $isModified
     * @param string $preferredPaymentType
     * @param string $paymentTypeInfo
     * @param bool $existTravelPlans
     * @param bool $existOrderDocuments
     * @param bool $existOrderNotices
     * @param bool $existOrderRemarks
     * @param bool $existPaymentPaycodes
     * @param bool $existOrderBillings
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment $midocoOnlinePayment = null, ?\Pggns\MidocoApi\Order\StructType\AdvisedPaymentDTO $midocoAdvisedPayment = null, ?\Pggns\MidocoApi\Order\StructType\MidocoDebitPayment $midocoDebitPayment = null, array $midocoSellItem = [], array $midocoOrderCustomer = [], array $midocoOrdersDbiInfo = [], array $externalPayment = [], array $midocoOrderNotice = [], ?float $calculatedMarginServices = null, ?string $unitAlias = null, ?string $mediatorPortal = null, ?bool $isModified = null, ?string $preferredPaymentType = null, ?string $paymentTypeInfo = null, ?bool $existTravelPlans = null, ?bool $existOrderDocuments = null, ?bool $existOrderNotices = null, ?bool $existOrderRemarks = null, ?bool $existPaymentPaycodes = null, ?bool $existOrderBillings = null)
    {
        $this
            ->setMidocoOnlinePayment($midocoOnlinePayment)
            ->setMidocoAdvisedPayment($midocoAdvisedPayment)
            ->setMidocoDebitPayment($midocoDebitPayment)
            ->setMidocoSellItem($midocoSellItem)
            ->setMidocoOrderCustomer($midocoOrderCustomer)
            ->setMidocoOrdersDbiInfo($midocoOrdersDbiInfo)
            ->setExternalPayment($externalPayment)
            ->setMidocoOrderNotice($midocoOrderNotice)
            ->setCalculatedMarginServices($calculatedMarginServices)
            ->setUnitAlias($unitAlias)
            ->setMediatorPortal($mediatorPortal)
            ->setIsModified($isModified)
            ->setPreferredPaymentType($preferredPaymentType)
            ->setPaymentTypeInfo($paymentTypeInfo)
            ->setExistTravelPlans($existTravelPlans)
            ->setExistOrderDocuments($existOrderDocuments)
            ->setExistOrderNotices($existOrderNotices)
            ->setExistOrderRemarks($existOrderRemarks)
            ->setExistPaymentPaycodes($existPaymentPaycodes)
            ->setExistOrderBillings($existOrderBillings);
    }
    /**
     * Get MidocoOnlinePayment value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment|null
     */
    public function getMidocoOnlinePayment(): ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment
    {
        return $this->MidocoOnlinePayment;
    }
    /**
     * Set MidocoOnlinePayment value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment $midocoOnlinePayment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setMidocoOnlinePayment(?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePayment $midocoOnlinePayment = null): self
    {
        $this->MidocoOnlinePayment = $midocoOnlinePayment;
        
        return $this;
    }
    /**
     * Get MidocoAdvisedPayment value
     * @return \Pggns\MidocoApi\Order\StructType\AdvisedPaymentDTO|null
     */
    public function getMidocoAdvisedPayment(): ?\Pggns\MidocoApi\Order\StructType\AdvisedPaymentDTO
    {
        return $this->MidocoAdvisedPayment;
    }
    /**
     * Set MidocoAdvisedPayment value
     * @param \Pggns\MidocoApi\Order\StructType\AdvisedPaymentDTO $midocoAdvisedPayment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setMidocoAdvisedPayment(?\Pggns\MidocoApi\Order\StructType\AdvisedPaymentDTO $midocoAdvisedPayment = null): self
    {
        $this->MidocoAdvisedPayment = $midocoAdvisedPayment;
        
        return $this;
    }
    /**
     * Get MidocoDebitPayment value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitPayment|null
     */
    public function getMidocoDebitPayment(): ?\Pggns\MidocoApi\Order\StructType\MidocoDebitPayment
    {
        return $this->MidocoDebitPayment;
    }
    /**
     * Set MidocoDebitPayment value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDebitPayment $midocoDebitPayment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setMidocoDebitPayment(?\Pggns\MidocoApi\Order\StructType\MidocoDebitPayment $midocoDebitPayment = null): self
    {
        $this->MidocoDebitPayment = $midocoDebitPayment;
        
        return $this;
    }
    /**
     * Get MidocoSellItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemType[]
     */
    public function getMidocoSellItem(): array
    {
        return $this->MidocoSellItem;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemForArrayConstraintsFromSetMidocoSellItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderTypeMidocoSellItemItem) {
            // validation for constraint: itemType
            if (!$midocoOrderTypeMidocoSellItemItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemType) {
                $invalidValues[] = is_object($midocoOrderTypeMidocoSellItemItem) ? get_class($midocoOrderTypeMidocoSellItemItem) : sprintf('%s(%s)', gettype($midocoOrderTypeMidocoSellItemItem), var_export($midocoOrderTypeMidocoSellItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemType[] $midocoSellItem
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setMidocoSellItem(array $midocoSellItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemArrayErrorMessage = self::validateMidocoSellItemForArrayConstraintsFromSetMidocoSellItem($midocoSellItem))) {
            throw new InvalidArgumentException($midocoSellItemArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItem = $midocoSellItem;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItem value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function addToMidocoSellItem(\Pggns\MidocoApi\Order\StructType\MidocoSellItemType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemType) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItem property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItem[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOrderCustomer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer[]
     */
    public function getMidocoOrderCustomer(): array
    {
        return $this->MidocoOrderCustomer;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderCustomer method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderCustomerForArrayConstraintsFromSetMidocoOrderCustomer(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderTypeMidocoOrderCustomerItem) {
            // validation for constraint: itemType
            if (!$midocoOrderTypeMidocoOrderCustomerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer) {
                $invalidValues[] = is_object($midocoOrderTypeMidocoOrderCustomerItem) ? get_class($midocoOrderTypeMidocoOrderCustomerItem) : sprintf('%s(%s)', gettype($midocoOrderTypeMidocoOrderCustomerItem), var_export($midocoOrderTypeMidocoOrderCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderCustomer property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer[] $midocoOrderCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setMidocoOrderCustomer(array $midocoOrderCustomer = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderCustomerArrayErrorMessage = self::validateMidocoOrderCustomerForArrayConstraintsFromSetMidocoOrderCustomer($midocoOrderCustomer))) {
            throw new InvalidArgumentException($midocoOrderCustomerArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($midocoOrderCustomer) && count($midocoOrderCustomer) > 3) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($midocoOrderCustomer)), __LINE__);
        }
        $this->MidocoOrderCustomer = $midocoOrderCustomer;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function addToMidocoOrderCustomer(\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderCustomer property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->MidocoOrderCustomer) && count($this->MidocoOrderCustomer) >= 3) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->MidocoOrderCustomer)), __LINE__);
        }
        $this->MidocoOrderCustomer[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOrdersDbiInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[]
     */
    public function getMidocoOrdersDbiInfo(): array
    {
        return $this->MidocoOrdersDbiInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrdersDbiInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdersDbiInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdersDbiInfoForArrayConstraintsFromSetMidocoOrdersDbiInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderTypeMidocoOrdersDbiInfoItem) {
            // validation for constraint: itemType
            if (!$midocoOrderTypeMidocoOrdersDbiInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo) {
                $invalidValues[] = is_object($midocoOrderTypeMidocoOrdersDbiInfoItem) ? get_class($midocoOrderTypeMidocoOrdersDbiInfoItem) : sprintf('%s(%s)', gettype($midocoOrderTypeMidocoOrdersDbiInfoItem), var_export($midocoOrderTypeMidocoOrdersDbiInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdersDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdersDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[] $midocoOrdersDbiInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setMidocoOrdersDbiInfo(array $midocoOrdersDbiInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdersDbiInfoArrayErrorMessage = self::validateMidocoOrdersDbiInfoForArrayConstraintsFromSetMidocoOrdersDbiInfo($midocoOrdersDbiInfo))) {
            throw new InvalidArgumentException($midocoOrdersDbiInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdersDbiInfo = $midocoOrdersDbiInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdersDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function addToMidocoOrdersDbiInfo(\Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdersDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdersDbiInfo[] = $item;
        
        return $this;
    }
    /**
     * Get ExternalPayment value
     * @return \Pggns\MidocoApi\Order\StructType\ExternalPayment[]
     */
    public function getExternalPayment(): array
    {
        return $this->ExternalPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setExternalPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExternalPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExternalPaymentForArrayConstraintsFromSetExternalPayment(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderTypeExternalPaymentItem) {
            // validation for constraint: itemType
            if (!$midocoOrderTypeExternalPaymentItem instanceof \Pggns\MidocoApi\Order\StructType\ExternalPayment) {
                $invalidValues[] = is_object($midocoOrderTypeExternalPaymentItem) ? get_class($midocoOrderTypeExternalPaymentItem) : sprintf('%s(%s)', gettype($midocoOrderTypeExternalPaymentItem), var_export($midocoOrderTypeExternalPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExternalPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExternalPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExternalPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExternalPayment[] $externalPayment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setExternalPayment(array $externalPayment = []): self
    {
        // validation for constraint: array
        if ('' !== ($externalPaymentArrayErrorMessage = self::validateExternalPaymentForArrayConstraintsFromSetExternalPayment($externalPayment))) {
            throw new InvalidArgumentException($externalPaymentArrayErrorMessage, __LINE__);
        }
        $this->ExternalPayment = $externalPayment;
        
        return $this;
    }
    /**
     * Add item to ExternalPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExternalPayment $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function addToExternalPayment(\Pggns\MidocoApi\Order\StructType\ExternalPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ExternalPayment) {
            throw new InvalidArgumentException(sprintf('The ExternalPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExternalPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExternalPayment[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOrderNotice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[]
     */
    public function getMidocoOrderNotice(): array
    {
        return $this->MidocoOrderNotice;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderNotice method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderNoticeForArrayConstraintsFromSetMidocoOrderNotice(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderTypeMidocoOrderNoticeItem) {
            // validation for constraint: itemType
            if (!$midocoOrderTypeMidocoOrderNoticeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice) {
                $invalidValues[] = is_object($midocoOrderTypeMidocoOrderNoticeItem) ? get_class($midocoOrderTypeMidocoOrderNoticeItem) : sprintf('%s(%s)', gettype($midocoOrderTypeMidocoOrderNoticeItem), var_export($midocoOrderTypeMidocoOrderNoticeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderNotice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[] $midocoOrderNotice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setMidocoOrderNotice(array $midocoOrderNotice = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderNoticeArrayErrorMessage = self::validateMidocoOrderNoticeForArrayConstraintsFromSetMidocoOrderNotice($midocoOrderNotice))) {
            throw new InvalidArgumentException($midocoOrderNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderNotice = $midocoOrderNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function addToMidocoOrderNotice(\Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderNotice property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderNotice[] = $item;
        
        return $this;
    }
    /**
     * Get calculatedMarginServices value
     * @return float|null
     */
    public function getCalculatedMarginServices(): ?float
    {
        return $this->calculatedMarginServices;
    }
    /**
     * Set calculatedMarginServices value
     * @param float $calculatedMarginServices
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setCalculatedMarginServices(?float $calculatedMarginServices = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedMarginServices) && !(is_float($calculatedMarginServices) || is_numeric($calculatedMarginServices))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedMarginServices, true), gettype($calculatedMarginServices)), __LINE__);
        }
        $this->calculatedMarginServices = $calculatedMarginServices;
        
        return $this;
    }
    /**
     * Get unitAlias value
     * @return string|null
     */
    public function getUnitAlias(): ?string
    {
        return $this->unitAlias;
    }
    /**
     * Set unitAlias value
     * @param string $unitAlias
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setUnitAlias(?string $unitAlias = null): self
    {
        // validation for constraint: string
        if (!is_null($unitAlias) && !is_string($unitAlias)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitAlias, true), gettype($unitAlias)), __LINE__);
        }
        $this->unitAlias = $unitAlias;
        
        return $this;
    }
    /**
     * Get mediatorPortal value
     * @return string|null
     */
    public function getMediatorPortal(): ?string
    {
        return $this->mediatorPortal;
    }
    /**
     * Set mediatorPortal value
     * @param string $mediatorPortal
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setMediatorPortal(?string $mediatorPortal = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorPortal) && !is_string($mediatorPortal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorPortal, true), gettype($mediatorPortal)), __LINE__);
        }
        $this->mediatorPortal = $mediatorPortal;
        
        return $this;
    }
    /**
     * Get isModified value
     * @return bool|null
     */
    public function getIsModified(): ?bool
    {
        return $this->isModified;
    }
    /**
     * Set isModified value
     * @param bool $isModified
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setIsModified(?bool $isModified = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isModified) && !is_bool($isModified)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isModified, true), gettype($isModified)), __LINE__);
        }
        $this->isModified = $isModified;
        
        return $this;
    }
    /**
     * Get preferredPaymentType value
     * @return string|null
     */
    public function getPreferredPaymentType(): ?string
    {
        return $this->preferredPaymentType;
    }
    /**
     * Set preferredPaymentType value
     * @param string $preferredPaymentType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setPreferredPaymentType(?string $preferredPaymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($preferredPaymentType) && !is_string($preferredPaymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($preferredPaymentType, true), gettype($preferredPaymentType)), __LINE__);
        }
        $this->preferredPaymentType = $preferredPaymentType;
        
        return $this;
    }
    /**
     * Get paymentTypeInfo value
     * @return string|null
     */
    public function getPaymentTypeInfo(): ?string
    {
        return $this->paymentTypeInfo;
    }
    /**
     * Set paymentTypeInfo value
     * @param string $paymentTypeInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setPaymentTypeInfo(?string $paymentTypeInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentTypeInfo) && !is_string($paymentTypeInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentTypeInfo, true), gettype($paymentTypeInfo)), __LINE__);
        }
        $this->paymentTypeInfo = $paymentTypeInfo;
        
        return $this;
    }
    /**
     * Get existTravelPlans value
     * @return bool|null
     */
    public function getExistTravelPlans(): ?bool
    {
        return $this->existTravelPlans;
    }
    /**
     * Set existTravelPlans value
     * @param bool $existTravelPlans
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setExistTravelPlans(?bool $existTravelPlans = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existTravelPlans) && !is_bool($existTravelPlans)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existTravelPlans, true), gettype($existTravelPlans)), __LINE__);
        }
        $this->existTravelPlans = $existTravelPlans;
        
        return $this;
    }
    /**
     * Get existOrderDocuments value
     * @return bool|null
     */
    public function getExistOrderDocuments(): ?bool
    {
        return $this->existOrderDocuments;
    }
    /**
     * Set existOrderDocuments value
     * @param bool $existOrderDocuments
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setExistOrderDocuments(?bool $existOrderDocuments = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existOrderDocuments) && !is_bool($existOrderDocuments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existOrderDocuments, true), gettype($existOrderDocuments)), __LINE__);
        }
        $this->existOrderDocuments = $existOrderDocuments;
        
        return $this;
    }
    /**
     * Get existOrderNotices value
     * @return bool|null
     */
    public function getExistOrderNotices(): ?bool
    {
        return $this->existOrderNotices;
    }
    /**
     * Set existOrderNotices value
     * @param bool $existOrderNotices
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setExistOrderNotices(?bool $existOrderNotices = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existOrderNotices) && !is_bool($existOrderNotices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existOrderNotices, true), gettype($existOrderNotices)), __LINE__);
        }
        $this->existOrderNotices = $existOrderNotices;
        
        return $this;
    }
    /**
     * Get existOrderRemarks value
     * @return bool|null
     */
    public function getExistOrderRemarks(): ?bool
    {
        return $this->existOrderRemarks;
    }
    /**
     * Set existOrderRemarks value
     * @param bool $existOrderRemarks
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setExistOrderRemarks(?bool $existOrderRemarks = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existOrderRemarks) && !is_bool($existOrderRemarks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existOrderRemarks, true), gettype($existOrderRemarks)), __LINE__);
        }
        $this->existOrderRemarks = $existOrderRemarks;
        
        return $this;
    }
    /**
     * Get existPaymentPaycodes value
     * @return bool|null
     */
    public function getExistPaymentPaycodes(): ?bool
    {
        return $this->existPaymentPaycodes;
    }
    /**
     * Set existPaymentPaycodes value
     * @param bool $existPaymentPaycodes
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setExistPaymentPaycodes(?bool $existPaymentPaycodes = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existPaymentPaycodes) && !is_bool($existPaymentPaycodes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existPaymentPaycodes, true), gettype($existPaymentPaycodes)), __LINE__);
        }
        $this->existPaymentPaycodes = $existPaymentPaycodes;
        
        return $this;
    }
    /**
     * Get existOrderBillings value
     * @return bool|null
     */
    public function getExistOrderBillings(): ?bool
    {
        return $this->existOrderBillings;
    }
    /**
     * Set existOrderBillings value
     * @param bool $existOrderBillings
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType
     */
    public function setExistOrderBillings(?bool $existOrderBillings = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existOrderBillings) && !is_bool($existOrderBillings)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existOrderBillings, true), gettype($existOrderBillings)), __LINE__);
        }
        $this->existOrderBillings = $existOrderBillings;
        
        return $this;
    }
}
