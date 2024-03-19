<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiPrintRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MultiPrintRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The MidocoPrintSelect
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: system:MidocoPrintSelect
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[]
     */
    protected ?array $MidocoPrintSelect = null;
    /**
     * The printContext
     * @var string|null
     */
    protected ?string $printContext = null;
    /**
     * The collectivePrint
     * @var bool|null
     */
    protected ?bool $collectivePrint = null;
    /**
     * The explVoidInvoice
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $explVoidInvoice = null;
    /**
     * The manualPrint
     * Meta information extracted from the WSDL
     * - default: true
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $manualPrint = null;
    /**
     * The queueId
     * @var int|null
     */
    protected ?int $queueId = null;
    /**
     * The MidocoInset
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: mail:MidocoInset
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInset[]
     */
    protected ?array $MidocoInset = null;
    /**
     * The partialInvoiceAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $partialInvoiceAmount = null;
    /**
     * The MidocoOrderCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderCustomer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $MidocoOrderCustomer = null;
    /**
     * The MidocoMultiPrintProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMultiPrintProperty
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMultiPrintProperty[]
     */
    protected ?array $MidocoMultiPrintProperty = null;
    /**
     * The itemIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $itemIds = null;
    /**
     * The invoiceIds2Void
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $invoiceIds2Void = null;
    /**
     * The OrderPrintRestriction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: OrderPrintRestriction
     * @var \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\OrderPrintRestriction $OrderPrintRestriction = null;
    /**
     * The collectiveInvoice
     * Meta information extracted from the WSDL
     * - default: false
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $collectiveInvoice = null;
    /**
     * Constructor method for MultiPrintRequest
     * @uses MultiPrintRequest::setOrderId()
     * @uses MultiPrintRequest::setMedia()
     * @uses MultiPrintRequest::setMidocoPrintSelect()
     * @uses MultiPrintRequest::setPrintContext()
     * @uses MultiPrintRequest::setCollectivePrint()
     * @uses MultiPrintRequest::setExplVoidInvoice()
     * @uses MultiPrintRequest::setManualPrint()
     * @uses MultiPrintRequest::setQueueId()
     * @uses MultiPrintRequest::setMidocoInset()
     * @uses MultiPrintRequest::setPartialInvoiceAmount()
     * @uses MultiPrintRequest::setMidocoOrderCustomer()
     * @uses MultiPrintRequest::setMidocoMultiPrintProperty()
     * @uses MultiPrintRequest::setItemIds()
     * @uses MultiPrintRequest::setInvoiceIds2Void()
     * @uses MultiPrintRequest::setOrderPrintRestriction()
     * @uses MultiPrintRequest::setCollectiveInvoice()
     * @param int $orderId
     * @param string $media
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[] $midocoPrintSelect
     * @param string $printContext
     * @param bool $collectivePrint
     * @param bool $explVoidInvoice
     * @param bool $manualPrint
     * @param int $queueId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInset[] $midocoInset
     * @param float $partialInvoiceAmount
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMultiPrintProperty[] $midocoMultiPrintProperty
     * @param int[] $itemIds
     * @param int[] $invoiceIds2Void
     * @param \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction $orderPrintRestriction
     * @param bool $collectiveInvoice
     */
    public function __construct(?int $orderId = null, ?string $media = null, ?array $midocoPrintSelect = null, ?string $printContext = null, ?bool $collectivePrint = null, ?bool $explVoidInvoice = null, ?bool $manualPrint = true, ?int $queueId = null, ?array $midocoInset = null, ?float $partialInvoiceAmount = null, ?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer = null, ?array $midocoMultiPrintProperty = null, ?array $itemIds = null, ?array $invoiceIds2Void = null, ?\Pggns\MidocoApi\Order\StructType\OrderPrintRestriction $orderPrintRestriction = null, ?bool $collectiveInvoice = false)
    {
        $this
            ->setOrderId($orderId)
            ->setMedia($media)
            ->setMidocoPrintSelect($midocoPrintSelect)
            ->setPrintContext($printContext)
            ->setCollectivePrint($collectivePrint)
            ->setExplVoidInvoice($explVoidInvoice)
            ->setManualPrint($manualPrint)
            ->setQueueId($queueId)
            ->setMidocoInset($midocoInset)
            ->setPartialInvoiceAmount($partialInvoiceAmount)
            ->setMidocoOrderCustomer($midocoOrderCustomer)
            ->setMidocoMultiPrintProperty($midocoMultiPrintProperty)
            ->setItemIds($itemIds)
            ->setInvoiceIds2Void($invoiceIds2Void)
            ->setOrderPrintRestriction($orderPrintRestriction)
            ->setCollectiveInvoice($collectiveInvoice);
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get media value
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }
    /**
     * Set media value
     * @param string $media
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        $this->media = $media;
        
        return $this;
    }
    /**
     * Get MidocoPrintSelect value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[]
     */
    public function getMidocoPrintSelect(): ?array
    {
        return $this->MidocoPrintSelect;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPrintSelect method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintSelect method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintSelectForArrayConstraintFromSetMidocoPrintSelect(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintRequestMidocoPrintSelectItem) {
            // validation for constraint: itemType
            if (!$multiPrintRequestMidocoPrintSelectItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect) {
                $invalidValues[] = is_object($multiPrintRequestMidocoPrintSelectItem) ? get_class($multiPrintRequestMidocoPrintSelectItem) : sprintf('%s(%s)', gettype($multiPrintRequestMidocoPrintSelectItem), var_export($multiPrintRequestMidocoPrintSelectItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintSelect property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintSelect value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[] $midocoPrintSelect
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setMidocoPrintSelect(?array $midocoPrintSelect = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintSelectArrayErrorMessage = self::validateMidocoPrintSelectForArrayConstraintFromSetMidocoPrintSelect($midocoPrintSelect))) {
            throw new InvalidArgumentException($midocoPrintSelectArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintSelect = $midocoPrintSelect;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintSelect value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect $item
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function addToMidocoPrintSelect(\Pggns\MidocoApi\Order\StructType\MidocoPrintSelect $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintSelect property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintSelect[] = $item;
        
        return $this;
    }
    /**
     * Get printContext value
     * @return string|null
     */
    public function getPrintContext(): ?string
    {
        return $this->printContext;
    }
    /**
     * Set printContext value
     * @param string $printContext
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setPrintContext(?string $printContext = null): self
    {
        // validation for constraint: string
        if (!is_null($printContext) && !is_string($printContext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printContext, true), gettype($printContext)), __LINE__);
        }
        $this->printContext = $printContext;
        
        return $this;
    }
    /**
     * Get collectivePrint value
     * @return bool|null
     */
    public function getCollectivePrint(): ?bool
    {
        return $this->collectivePrint;
    }
    /**
     * Set collectivePrint value
     * @param bool $collectivePrint
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setCollectivePrint(?bool $collectivePrint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($collectivePrint) && !is_bool($collectivePrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectivePrint, true), gettype($collectivePrint)), __LINE__);
        }
        $this->collectivePrint = $collectivePrint;
        
        return $this;
    }
    /**
     * Get explVoidInvoice value
     * @return bool|null
     */
    public function getExplVoidInvoice(): ?bool
    {
        return $this->explVoidInvoice;
    }
    /**
     * Set explVoidInvoice value
     * @param bool $explVoidInvoice
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setExplVoidInvoice(?bool $explVoidInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($explVoidInvoice) && !is_bool($explVoidInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($explVoidInvoice, true), gettype($explVoidInvoice)), __LINE__);
        }
        $this->explVoidInvoice = $explVoidInvoice;
        
        return $this;
    }
    /**
     * Get manualPrint value
     * @return bool|null
     */
    public function getManualPrint(): ?bool
    {
        return $this->manualPrint;
    }
    /**
     * Set manualPrint value
     * @param bool $manualPrint
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setManualPrint(?bool $manualPrint = true): self
    {
        // validation for constraint: boolean
        if (!is_null($manualPrint) && !is_bool($manualPrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($manualPrint, true), gettype($manualPrint)), __LINE__);
        }
        $this->manualPrint = $manualPrint;
        
        return $this;
    }
    /**
     * Get queueId value
     * @return int|null
     */
    public function getQueueId(): ?int
    {
        return $this->queueId;
    }
    /**
     * Set queueId value
     * @param int $queueId
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setQueueId(?int $queueId = null): self
    {
        // validation for constraint: int
        if (!is_null($queueId) && !(is_int($queueId) || ctype_digit($queueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queueId, true), gettype($queueId)), __LINE__);
        }
        $this->queueId = $queueId;
        
        return $this;
    }
    /**
     * Get MidocoInset value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInset[]
     */
    public function getMidocoInset(): ?array
    {
        return $this->MidocoInset;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoInset method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInset method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInsetForArrayConstraintFromSetMidocoInset(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintRequestMidocoInsetItem) {
            // validation for constraint: itemType
            if (!$multiPrintRequestMidocoInsetItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInset) {
                $invalidValues[] = is_object($multiPrintRequestMidocoInsetItem) ? get_class($multiPrintRequestMidocoInsetItem) : sprintf('%s(%s)', gettype($multiPrintRequestMidocoInsetItem), var_export($multiPrintRequestMidocoInsetItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInset property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInset, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInset value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInset[] $midocoInset
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setMidocoInset(?array $midocoInset = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInsetArrayErrorMessage = self::validateMidocoInsetForArrayConstraintFromSetMidocoInset($midocoInset))) {
            throw new InvalidArgumentException($midocoInsetArrayErrorMessage, __LINE__);
        }
        $this->MidocoInset = $midocoInset;
        
        return $this;
    }
    /**
     * Add item to MidocoInset value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInset $item
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function addToMidocoInset(\Pggns\MidocoApi\Order\StructType\MidocoInset $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInset) {
            throw new InvalidArgumentException(sprintf('The MidocoInset property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInset, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInset[] = $item;
        
        return $this;
    }
    /**
     * Get partialInvoiceAmount value
     * @return float|null
     */
    public function getPartialInvoiceAmount(): ?float
    {
        return $this->partialInvoiceAmount;
    }
    /**
     * Set partialInvoiceAmount value
     * @param float $partialInvoiceAmount
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setPartialInvoiceAmount(?float $partialInvoiceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($partialInvoiceAmount) && !(is_float($partialInvoiceAmount) || is_numeric($partialInvoiceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($partialInvoiceAmount, true), gettype($partialInvoiceAmount)), __LINE__);
        }
        $this->partialInvoiceAmount = $partialInvoiceAmount;
        
        return $this;
    }
    /**
     * Get MidocoOrderCustomer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer|null
     */
    public function getMidocoOrderCustomer(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer
    {
        return $this->MidocoOrderCustomer;
    }
    /**
     * Set MidocoOrderCustomer value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setMidocoOrderCustomer(?\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $midocoOrderCustomer = null): self
    {
        $this->MidocoOrderCustomer = $midocoOrderCustomer;
        
        return $this;
    }
    /**
     * Get MidocoMultiPrintProperty value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMultiPrintProperty[]
     */
    public function getMidocoMultiPrintProperty(): ?array
    {
        return $this->MidocoMultiPrintProperty;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMultiPrintProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMultiPrintProperty method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMultiPrintPropertyForArrayConstraintFromSetMidocoMultiPrintProperty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintRequestMidocoMultiPrintPropertyItem) {
            // validation for constraint: itemType
            if (!$multiPrintRequestMidocoMultiPrintPropertyItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMultiPrintProperty) {
                $invalidValues[] = is_object($multiPrintRequestMidocoMultiPrintPropertyItem) ? get_class($multiPrintRequestMidocoMultiPrintPropertyItem) : sprintf('%s(%s)', gettype($multiPrintRequestMidocoMultiPrintPropertyItem), var_export($multiPrintRequestMidocoMultiPrintPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMultiPrintProperty property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMultiPrintProperty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMultiPrintProperty value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMultiPrintProperty[] $midocoMultiPrintProperty
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setMidocoMultiPrintProperty(?array $midocoMultiPrintProperty = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMultiPrintPropertyArrayErrorMessage = self::validateMidocoMultiPrintPropertyForArrayConstraintFromSetMidocoMultiPrintProperty($midocoMultiPrintProperty))) {
            throw new InvalidArgumentException($midocoMultiPrintPropertyArrayErrorMessage, __LINE__);
        }
        $this->MidocoMultiPrintProperty = $midocoMultiPrintProperty;
        
        return $this;
    }
    /**
     * Add item to MidocoMultiPrintProperty value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMultiPrintProperty $item
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function addToMidocoMultiPrintProperty(\Pggns\MidocoApi\Order\StructType\MidocoMultiPrintProperty $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMultiPrintProperty) {
            throw new InvalidArgumentException(sprintf('The MidocoMultiPrintProperty property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMultiPrintProperty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMultiPrintProperty[] = $item;
        
        return $this;
    }
    /**
     * Get itemIds value
     * @return int[]
     */
    public function getItemIds(): ?array
    {
        return $this->itemIds;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setItemIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemIds method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemIdsForArrayConstraintFromSetItemIds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintRequestItemIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($multiPrintRequestItemIdsItem) || ctype_digit($multiPrintRequestItemIdsItem))) {
                $invalidValues[] = is_object($multiPrintRequestItemIdsItem) ? get_class($multiPrintRequestItemIdsItem) : sprintf('%s(%s)', gettype($multiPrintRequestItemIdsItem), var_export($multiPrintRequestItemIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The itemIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set itemIds value
     * @throws InvalidArgumentException
     * @param int[] $itemIds
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setItemIds(?array $itemIds = null): self
    {
        // validation for constraint: array
        if ('' !== ($itemIdsArrayErrorMessage = self::validateItemIdsForArrayConstraintFromSetItemIds($itemIds))) {
            throw new InvalidArgumentException($itemIdsArrayErrorMessage, __LINE__);
        }
        $this->itemIds = $itemIds;
        
        return $this;
    }
    /**
     * Add item to itemIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function addToItemIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The itemIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->itemIds[] = $item;
        
        return $this;
    }
    /**
     * Get invoiceIds2Void value
     * @return int[]
     */
    public function getInvoiceIds2Void(): ?array
    {
        return $this->invoiceIds2Void;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setInvoiceIds2Void method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvoiceIds2Void method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvoiceIds2VoidForArrayConstraintFromSetInvoiceIds2Void(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintRequestInvoiceIds2VoidItem) {
            // validation for constraint: itemType
            if (!(is_int($multiPrintRequestInvoiceIds2VoidItem) || ctype_digit($multiPrintRequestInvoiceIds2VoidItem))) {
                $invalidValues[] = is_object($multiPrintRequestInvoiceIds2VoidItem) ? get_class($multiPrintRequestInvoiceIds2VoidItem) : sprintf('%s(%s)', gettype($multiPrintRequestInvoiceIds2VoidItem), var_export($multiPrintRequestInvoiceIds2VoidItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The invoiceIds2Void property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set invoiceIds2Void value
     * @throws InvalidArgumentException
     * @param int[] $invoiceIds2Void
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setInvoiceIds2Void(?array $invoiceIds2Void = null): self
    {
        // validation for constraint: array
        if ('' !== ($invoiceIds2VoidArrayErrorMessage = self::validateInvoiceIds2VoidForArrayConstraintFromSetInvoiceIds2Void($invoiceIds2Void))) {
            throw new InvalidArgumentException($invoiceIds2VoidArrayErrorMessage, __LINE__);
        }
        $this->invoiceIds2Void = $invoiceIds2Void;
        
        return $this;
    }
    /**
     * Add item to invoiceIds2Void value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function addToInvoiceIds2Void(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The invoiceIds2Void property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->invoiceIds2Void[] = $item;
        
        return $this;
    }
    /**
     * Get OrderPrintRestriction value
     * @return \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction|null
     */
    public function getOrderPrintRestriction(): ?\Pggns\MidocoApi\Order\StructType\OrderPrintRestriction
    {
        return $this->OrderPrintRestriction;
    }
    /**
     * Set OrderPrintRestriction value
     * @param \Pggns\MidocoApi\Order\StructType\OrderPrintRestriction $orderPrintRestriction
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setOrderPrintRestriction(?\Pggns\MidocoApi\Order\StructType\OrderPrintRestriction $orderPrintRestriction = null): self
    {
        $this->OrderPrintRestriction = $orderPrintRestriction;
        
        return $this;
    }
    /**
     * Get collectiveInvoice value
     * @return bool|null
     */
    public function getCollectiveInvoice(): ?bool
    {
        return $this->collectiveInvoice;
    }
    /**
     * Set collectiveInvoice value
     * @param bool $collectiveInvoice
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintRequest
     */
    public function setCollectiveInvoice(?bool $collectiveInvoice = false): self
    {
        // validation for constraint: boolean
        if (!is_null($collectiveInvoice) && !is_bool($collectiveInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectiveInvoice, true), gettype($collectiveInvoice)), __LINE__);
        }
        $this->collectiveInvoice = $collectiveInvoice;
        
        return $this;
    }
}
