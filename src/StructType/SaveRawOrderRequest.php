<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRawOrderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRawOrderRequest extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The MidocoOrderNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderNotice
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[]
     */
    protected ?array $MidocoOrderNotice = null;
    /**
     * The MidocoOrderPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderPayment
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment[]
     */
    protected ?array $MidocoOrderPayment = null;
    /**
     * Constructor method for SaveRawOrderRequest
     * @uses SaveRawOrderRequest::setMidocoOrder()
     * @uses SaveRawOrderRequest::setMidocoOrderNotice()
     * @uses SaveRawOrderRequest::setMidocoOrderPayment()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[] $midocoOrderNotice
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment[] $midocoOrderPayment
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null, ?array $midocoOrderNotice = null, ?array $midocoOrderPayment = null)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setMidocoOrderNotice($midocoOrderNotice)
            ->setMidocoOrderPayment($midocoOrderPayment);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveRawOrderRequest
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get MidocoOrderNotice value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice[]
     */
    public function getMidocoOrderNotice(): ?array
    {
        return $this->MidocoOrderNotice;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderNotice method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderNoticeForArrayConstraintFromSetMidocoOrderNotice(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveRawOrderRequestMidocoOrderNoticeItem) {
            // validation for constraint: itemType
            if (!$saveRawOrderRequestMidocoOrderNoticeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice) {
                $invalidValues[] = is_object($saveRawOrderRequestMidocoOrderNoticeItem) ? get_class($saveRawOrderRequestMidocoOrderNoticeItem) : sprintf('%s(%s)', gettype($saveRawOrderRequestMidocoOrderNoticeItem), var_export($saveRawOrderRequestMidocoOrderNoticeItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveRawOrderRequest
     */
    public function setMidocoOrderNotice(?array $midocoOrderNotice = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderNoticeArrayErrorMessage = self::validateMidocoOrderNoticeForArrayConstraintFromSetMidocoOrderNotice($midocoOrderNotice))) {
            throw new InvalidArgumentException($midocoOrderNoticeArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderNotice = $midocoOrderNotice;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderNotice value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNotice $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveRawOrderRequest
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
     * Get MidocoOrderPayment value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment[]
     */
    public function getMidocoOrderPayment(): ?array
    {
        return $this->MidocoOrderPayment;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderPayment method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderPaymentForArrayConstraintFromSetMidocoOrderPayment(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveRawOrderRequestMidocoOrderPaymentItem) {
            // validation for constraint: itemType
            if (!$saveRawOrderRequestMidocoOrderPaymentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment) {
                $invalidValues[] = is_object($saveRawOrderRequestMidocoOrderPaymentItem) ? get_class($saveRawOrderRequestMidocoOrderPaymentItem) : sprintf('%s(%s)', gettype($saveRawOrderRequestMidocoOrderPaymentItem), var_export($saveRawOrderRequestMidocoOrderPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment[] $midocoOrderPayment
     * @return \Pggns\MidocoApi\Order\StructType\SaveRawOrderRequest
     */
    public function setMidocoOrderPayment(?array $midocoOrderPayment = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderPaymentArrayErrorMessage = self::validateMidocoOrderPaymentForArrayConstraintFromSetMidocoOrderPayment($midocoOrderPayment))) {
            throw new InvalidArgumentException($midocoOrderPaymentArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderPayment = $midocoOrderPayment;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveRawOrderRequest
     */
    public function addToMidocoOrderPayment(\Pggns\MidocoApi\Order\StructType\MidocoOrderPayment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderPayment[] = $item;
        
        return $this;
    }
}
