<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExtendedOrderResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getExtendedOrder --- retrieve an Order response is constructed as: - one OrderDTO - SellItemList (zero or more) -
 * @subpackage Structs
 */
class GetExtendedOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The MidocoInvoiceInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoiceInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo[]
     */
    protected array $MidocoInvoiceInfo = [];
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: crm:MidocoMandate
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMandate[]
     */
    protected array $MidocoMandate = [];
    /**
     * The MidocoOrderAttributeValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAttributeType[]
     */
    protected array $MidocoOrderAttributeValue = [];
    /**
     * The MidocoOrderMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoOrderMargin
     * @var \Pggns\MidocoApi\Order\StructType\OrderMarginDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\OrderMarginDTO $MidocoOrderMargin = null;
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
     * The MidocoSellItemAttributeValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAttributeType[]
     */
    protected array $MidocoSellItemAttributeValue = [];
    /**
     * The isReadOnlyByLockPeriod
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isReadOnlyByLockPeriod = null;
    /**
     * Constructor method for GetExtendedOrderResponse
     * @uses GetExtendedOrderResponse::setMidocoOrder()
     * @uses GetExtendedOrderResponse::setMidocoInvoiceInfo()
     * @uses GetExtendedOrderResponse::setMidocoMandate()
     * @uses GetExtendedOrderResponse::setMidocoOrderAttributeValue()
     * @uses GetExtendedOrderResponse::setMidocoOrderMargin()
     * @uses GetExtendedOrderResponse::setMidocoOrderNotice()
     * @uses GetExtendedOrderResponse::setMidocoSellItemAttributeValue()
     * @uses GetExtendedOrderResponse::setIsReadOnlyByLockPeriod()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo[] $midocoInvoiceInfo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMandate[] $midocoMandate
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeType[] $midocoOrderAttributeValue
     * @param \Pggns\MidocoApi\Order\StructType\OrderMarginDTO $midocoOrderMargin
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[] $midocoOrderNotice
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeType[] $midocoSellItemAttributeValue
     * @param bool $isReadOnlyByLockPeriod
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null, array $midocoInvoiceInfo = [], array $midocoMandate = [], array $midocoOrderAttributeValue = [], ?\Pggns\MidocoApi\Order\StructType\OrderMarginDTO $midocoOrderMargin = null, array $midocoOrderNotice = [], array $midocoSellItemAttributeValue = [], ?bool $isReadOnlyByLockPeriod = false)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setMidocoInvoiceInfo($midocoInvoiceInfo)
            ->setMidocoMandate($midocoMandate)
            ->setMidocoOrderAttributeValue($midocoOrderAttributeValue)
            ->setMidocoOrderMargin($midocoOrderMargin)
            ->setMidocoOrderNotice($midocoOrderNotice)
            ->setMidocoSellItemAttributeValue($midocoSellItemAttributeValue)
            ->setIsReadOnlyByLockPeriod($isReadOnlyByLockPeriod);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderResponse
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get MidocoInvoiceInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo[]
     */
    public function getMidocoInvoiceInfo(): array
    {
        return $this->MidocoInvoiceInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoInvoiceInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoiceInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoiceInfoForArrayConstraintsFromSetMidocoInvoiceInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExtendedOrderResponseMidocoInvoiceInfoItem) {
            // validation for constraint: itemType
            if (!$getExtendedOrderResponseMidocoInvoiceInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo) {
                $invalidValues[] = is_object($getExtendedOrderResponseMidocoInvoiceInfoItem) ? get_class($getExtendedOrderResponseMidocoInvoiceInfoItem) : sprintf('%s(%s)', gettype($getExtendedOrderResponseMidocoInvoiceInfoItem), var_export($getExtendedOrderResponseMidocoInvoiceInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoiceInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoiceInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo[] $midocoInvoiceInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderResponse
     */
    public function setMidocoInvoiceInfo(array $midocoInvoiceInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoiceInfoArrayErrorMessage = self::validateMidocoInvoiceInfoForArrayConstraintsFromSetMidocoInvoiceInfo($midocoInvoiceInfo))) {
            throw new InvalidArgumentException($midocoInvoiceInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoiceInfo = $midocoInvoiceInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoiceInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderResponse
     */
    public function addToMidocoInvoiceInfo(\Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoiceInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoiceInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMandate[]
     */
    public function getMidocoMandate(): array
    {
        return $this->MidocoMandate;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMandate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMandate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMandateForArrayConstraintsFromSetMidocoMandate(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExtendedOrderResponseMidocoMandateItem) {
            // validation for constraint: itemType
            if (!$getExtendedOrderResponseMidocoMandateItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMandate) {
                $invalidValues[] = is_object($getExtendedOrderResponseMidocoMandateItem) ? get_class($getExtendedOrderResponseMidocoMandateItem) : sprintf('%s(%s)', gettype($getExtendedOrderResponseMidocoMandateItem), var_export($getExtendedOrderResponseMidocoMandateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMandate property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMandate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMandate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMandate[] $midocoMandate
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderResponse
     */
    public function setMidocoMandate(array $midocoMandate = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMandateArrayErrorMessage = self::validateMidocoMandateForArrayConstraintsFromSetMidocoMandate($midocoMandate))) {
            throw new InvalidArgumentException($midocoMandateArrayErrorMessage, __LINE__);
        }
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
    /**
     * Add item to MidocoMandate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMandate $item
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderResponse
     */
    public function addToMidocoMandate(\Pggns\MidocoApi\Order\StructType\MidocoMandate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMandate) {
            throw new InvalidArgumentException(sprintf('The MidocoMandate property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMandate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMandate[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOrderAttributeValue value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeType[]
     */
    public function getMidocoOrderAttributeValue(): array
    {
        return $this->MidocoOrderAttributeValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderAttributeValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderAttributeValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderAttributeValueForArrayConstraintsFromSetMidocoOrderAttributeValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExtendedOrderResponseMidocoOrderAttributeValueItem) {
            // validation for constraint: itemType
            if (!$getExtendedOrderResponseMidocoOrderAttributeValueItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAttributeType) {
                $invalidValues[] = is_object($getExtendedOrderResponseMidocoOrderAttributeValueItem) ? get_class($getExtendedOrderResponseMidocoOrderAttributeValueItem) : sprintf('%s(%s)', gettype($getExtendedOrderResponseMidocoOrderAttributeValueItem), var_export($getExtendedOrderResponseMidocoOrderAttributeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderAttributeValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderAttributeValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeType[] $midocoOrderAttributeValue
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderResponse
     */
    public function setMidocoOrderAttributeValue(array $midocoOrderAttributeValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderAttributeValueArrayErrorMessage = self::validateMidocoOrderAttributeValueForArrayConstraintsFromSetMidocoOrderAttributeValue($midocoOrderAttributeValue))) {
            throw new InvalidArgumentException($midocoOrderAttributeValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderAttributeValue = $midocoOrderAttributeValue;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderAttributeValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderResponse
     */
    public function addToMidocoOrderAttributeValue(\Pggns\MidocoApi\Order\StructType\MidocoAttributeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAttributeType) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderAttributeValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderAttributeValue[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOrderMargin value
     * @return \Pggns\MidocoApi\Order\StructType\OrderMarginDTO|null
     */
    public function getMidocoOrderMargin(): ?\Pggns\MidocoApi\Order\StructType\OrderMarginDTO
    {
        return $this->MidocoOrderMargin;
    }
    /**
     * Set MidocoOrderMargin value
     * @param \Pggns\MidocoApi\Order\StructType\OrderMarginDTO $midocoOrderMargin
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderResponse
     */
    public function setMidocoOrderMargin(?\Pggns\MidocoApi\Order\StructType\OrderMarginDTO $midocoOrderMargin = null): self
    {
        $this->MidocoOrderMargin = $midocoOrderMargin;
        
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
        foreach ($values as $getExtendedOrderResponseMidocoOrderNoticeItem) {
            // validation for constraint: itemType
            if (!$getExtendedOrderResponseMidocoOrderNoticeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice) {
                $invalidValues[] = is_object($getExtendedOrderResponseMidocoOrderNoticeItem) ? get_class($getExtendedOrderResponseMidocoOrderNoticeItem) : sprintf('%s(%s)', gettype($getExtendedOrderResponseMidocoOrderNoticeItem), var_export($getExtendedOrderResponseMidocoOrderNoticeItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderResponse
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
     * Get MidocoSellItemAttributeValue value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeType[]
     */
    public function getMidocoSellItemAttributeValue(): array
    {
        return $this->MidocoSellItemAttributeValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemAttributeValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemAttributeValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemAttributeValueForArrayConstraintsFromSetMidocoSellItemAttributeValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExtendedOrderResponseMidocoSellItemAttributeValueItem) {
            // validation for constraint: itemType
            if (!$getExtendedOrderResponseMidocoSellItemAttributeValueItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAttributeType) {
                $invalidValues[] = is_object($getExtendedOrderResponseMidocoSellItemAttributeValueItem) ? get_class($getExtendedOrderResponseMidocoSellItemAttributeValueItem) : sprintf('%s(%s)', gettype($getExtendedOrderResponseMidocoSellItemAttributeValueItem), var_export($getExtendedOrderResponseMidocoSellItemAttributeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemAttributeValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAttributeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemAttributeValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeType[] $midocoSellItemAttributeValue
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderResponse
     */
    public function setMidocoSellItemAttributeValue(array $midocoSellItemAttributeValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemAttributeValueArrayErrorMessage = self::validateMidocoSellItemAttributeValueForArrayConstraintsFromSetMidocoSellItemAttributeValue($midocoSellItemAttributeValue))) {
            throw new InvalidArgumentException($midocoSellItemAttributeValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemAttributeValue = $midocoSellItemAttributeValue;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemAttributeValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderResponse
     */
    public function addToMidocoSellItemAttributeValue(\Pggns\MidocoApi\Order\StructType\MidocoAttributeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAttributeType) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemAttributeValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAttributeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemAttributeValue[] = $item;
        
        return $this;
    }
    /**
     * Get isReadOnlyByLockPeriod value
     * @return bool|null
     */
    public function getIsReadOnlyByLockPeriod(): ?bool
    {
        return $this->isReadOnlyByLockPeriod;
    }
    /**
     * Set isReadOnlyByLockPeriod value
     * @param bool $isReadOnlyByLockPeriod
     * @return \Pggns\MidocoApi\Order\StructType\GetExtendedOrderResponse
     */
    public function setIsReadOnlyByLockPeriod(?bool $isReadOnlyByLockPeriod = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isReadOnlyByLockPeriod) && !is_bool($isReadOnlyByLockPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReadOnlyByLockPeriod, true), gettype($isReadOnlyByLockPeriod)), __LINE__);
        }
        $this->isReadOnlyByLockPeriod = $isReadOnlyByLockPeriod;
        
        return $this;
    }
}
