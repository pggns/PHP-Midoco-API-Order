<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeOrderInvoiceRequest StructType
 * @subpackage Structs
 */
class MakeOrderInvoiceRequest extends AbstractStructBase
{
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $orderId;
    /**
     * The itemIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $itemIds = [];
    /**
     * The invoiceIds2Void
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $invoiceIds2Void = [];
    /**
     * The isDeposit
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The onlyVoid
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $onlyVoid = null;
    /**
     * The explVoidInvoice
     * @var bool|null
     */
    protected ?bool $explVoidInvoice = null;
    /**
     * Constructor method for MakeOrderInvoiceRequest
     * @uses MakeOrderInvoiceRequest::setOrderId()
     * @uses MakeOrderInvoiceRequest::setItemIds()
     * @uses MakeOrderInvoiceRequest::setInvoiceIds2Void()
     * @uses MakeOrderInvoiceRequest::setIsDeposit()
     * @uses MakeOrderInvoiceRequest::setOnlyVoid()
     * @uses MakeOrderInvoiceRequest::setExplVoidInvoice()
     * @param int $orderId
     * @param int[] $itemIds
     * @param int[] $invoiceIds2Void
     * @param bool $isDeposit
     * @param bool $onlyVoid
     * @param bool $explVoidInvoice
     */
    public function __construct(int $orderId, array $itemIds = [], array $invoiceIds2Void = [], ?bool $isDeposit = false, ?bool $onlyVoid = false, ?bool $explVoidInvoice = null)
    {
        $this
            ->setOrderId($orderId)
            ->setItemIds($itemIds)
            ->setInvoiceIds2Void($invoiceIds2Void)
            ->setIsDeposit($isDeposit)
            ->setOnlyVoid($onlyVoid)
            ->setExplVoidInvoice($explVoidInvoice);
    }
    /**
     * Get orderId value
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceRequest
     */
    public function setOrderId(int $orderId): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get itemIds value
     * @return int[]
     */
    public function getItemIds(): array
    {
        return $this->itemIds;
    }
    /**
     * This method is responsible for validating the values passed to the setItemIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemIdsForArrayConstraintsFromSetItemIds(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $makeOrderInvoiceRequestItemIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($makeOrderInvoiceRequestItemIdsItem) || ctype_digit($makeOrderInvoiceRequestItemIdsItem))) {
                $invalidValues[] = is_object($makeOrderInvoiceRequestItemIdsItem) ? get_class($makeOrderInvoiceRequestItemIdsItem) : sprintf('%s(%s)', gettype($makeOrderInvoiceRequestItemIdsItem), var_export($makeOrderInvoiceRequestItemIdsItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceRequest
     */
    public function setItemIds(array $itemIds = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemIdsArrayErrorMessage = self::validateItemIdsForArrayConstraintsFromSetItemIds($itemIds))) {
            throw new InvalidArgumentException($itemIdsArrayErrorMessage, __LINE__);
        }
        $this->itemIds = $itemIds;
        
        return $this;
    }
    /**
     * Add item to itemIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceRequest
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
    public function getInvoiceIds2Void(): array
    {
        return $this->invoiceIds2Void;
    }
    /**
     * This method is responsible for validating the values passed to the setInvoiceIds2Void method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvoiceIds2Void method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvoiceIds2VoidForArrayConstraintsFromSetInvoiceIds2Void(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $makeOrderInvoiceRequestInvoiceIds2VoidItem) {
            // validation for constraint: itemType
            if (!(is_int($makeOrderInvoiceRequestInvoiceIds2VoidItem) || ctype_digit($makeOrderInvoiceRequestInvoiceIds2VoidItem))) {
                $invalidValues[] = is_object($makeOrderInvoiceRequestInvoiceIds2VoidItem) ? get_class($makeOrderInvoiceRequestInvoiceIds2VoidItem) : sprintf('%s(%s)', gettype($makeOrderInvoiceRequestInvoiceIds2VoidItem), var_export($makeOrderInvoiceRequestInvoiceIds2VoidItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceRequest
     */
    public function setInvoiceIds2Void(array $invoiceIds2Void = []): self
    {
        // validation for constraint: array
        if ('' !== ($invoiceIds2VoidArrayErrorMessage = self::validateInvoiceIds2VoidForArrayConstraintsFromSetInvoiceIds2Void($invoiceIds2Void))) {
            throw new InvalidArgumentException($invoiceIds2VoidArrayErrorMessage, __LINE__);
        }
        $this->invoiceIds2Void = $invoiceIds2Void;
        
        return $this;
    }
    /**
     * Add item to invoiceIds2Void value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceRequest
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
     * Get isDeposit value
     * @return bool|null
     */
    public function getIsDeposit(): ?bool
    {
        return $this->isDeposit;
    }
    /**
     * Set isDeposit value
     * @param bool $isDeposit
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceRequest
     */
    public function setIsDeposit(?bool $isDeposit = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeposit) && !is_bool($isDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeposit, true), gettype($isDeposit)), __LINE__);
        }
        $this->isDeposit = $isDeposit;
        
        return $this;
    }
    /**
     * Get onlyVoid value
     * @return bool|null
     */
    public function getOnlyVoid(): ?bool
    {
        return $this->onlyVoid;
    }
    /**
     * Set onlyVoid value
     * @param bool $onlyVoid
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceRequest
     */
    public function setOnlyVoid(?bool $onlyVoid = false): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyVoid) && !is_bool($onlyVoid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyVoid, true), gettype($onlyVoid)), __LINE__);
        }
        $this->onlyVoid = $onlyVoid;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeOrderInvoiceRequest
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
}
