<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderStatus StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOrderStatus extends AbstractStructBase
{
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
     * The MidocoOrderAttribute
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderAttribute
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute[]
     */
    protected ?array $MidocoOrderAttribute = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The dunningLevel
     * @var int|null
     */
    protected ?int $dunningLevel = null;
    /**
     * The dunningDate
     * @var string|null
     */
    protected ?string $dunningDate = null;
    /**
     * The paymentDueDate
     * @var string|null
     */
    protected ?string $paymentDueDate = null;
    /**
     * Constructor method for MidocoOrderStatus
     * @uses MidocoOrderStatus::setMidocoOrderPayment()
     * @uses MidocoOrderStatus::setMidocoOrderAttribute()
     * @uses MidocoOrderStatus::setOrderId()
     * @uses MidocoOrderStatus::setOrderNo()
     * @uses MidocoOrderStatus::setDunningLevel()
     * @uses MidocoOrderStatus::setDunningDate()
     * @uses MidocoOrderStatus::setPaymentDueDate()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment[] $midocoOrderPayment
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute[] $midocoOrderAttribute
     * @param int $orderId
     * @param int $orderNo
     * @param int $dunningLevel
     * @param string $dunningDate
     * @param string $paymentDueDate
     */
    public function __construct(?array $midocoOrderPayment = null, ?array $midocoOrderAttribute = null, ?int $orderId = null, ?int $orderNo = null, ?int $dunningLevel = null, ?string $dunningDate = null, ?string $paymentDueDate = null)
    {
        $this
            ->setMidocoOrderPayment($midocoOrderPayment)
            ->setMidocoOrderAttribute($midocoOrderAttribute)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setDunningLevel($dunningLevel)
            ->setDunningDate($dunningDate)
            ->setPaymentDueDate($paymentDueDate);
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
        foreach ($values as $midocoOrderStatusMidocoOrderPaymentItem) {
            // validation for constraint: itemType
            if (!$midocoOrderStatusMidocoOrderPaymentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderPayment) {
                $invalidValues[] = is_object($midocoOrderStatusMidocoOrderPaymentItem) ? get_class($midocoOrderStatusMidocoOrderPaymentItem) : sprintf('%s(%s)', gettype($midocoOrderStatusMidocoOrderPaymentItem), var_export($midocoOrderStatusMidocoOrderPaymentItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus
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
    /**
     * Get MidocoOrderAttribute value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute[]
     */
    public function getMidocoOrderAttribute(): ?array
    {
        return $this->MidocoOrderAttribute;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderAttribute method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderAttribute method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderAttributeForArrayConstraintFromSetMidocoOrderAttribute(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderStatusMidocoOrderAttributeItem) {
            // validation for constraint: itemType
            if (!$midocoOrderStatusMidocoOrderAttributeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute) {
                $invalidValues[] = is_object($midocoOrderStatusMidocoOrderAttributeItem) ? get_class($midocoOrderStatusMidocoOrderAttributeItem) : sprintf('%s(%s)', gettype($midocoOrderStatusMidocoOrderAttributeItem), var_export($midocoOrderStatusMidocoOrderAttributeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute[] $midocoOrderAttribute
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus
     */
    public function setMidocoOrderAttribute(?array $midocoOrderAttribute = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderAttributeArrayErrorMessage = self::validateMidocoOrderAttributeForArrayConstraintFromSetMidocoOrderAttribute($midocoOrderAttribute))) {
            throw new InvalidArgumentException($midocoOrderAttributeArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderAttribute = $midocoOrderAttribute;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderAttribute value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus
     */
    public function addToMidocoOrderAttribute(\Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderAttribute property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderAttribute, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderAttribute[] = $item;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus
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
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get dunningLevel value
     * @return int|null
     */
    public function getDunningLevel(): ?int
    {
        return $this->dunningLevel;
    }
    /**
     * Set dunningLevel value
     * @param int $dunningLevel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus
     */
    public function setDunningLevel(?int $dunningLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($dunningLevel) && !(is_int($dunningLevel) || ctype_digit($dunningLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dunningLevel, true), gettype($dunningLevel)), __LINE__);
        }
        $this->dunningLevel = $dunningLevel;
        
        return $this;
    }
    /**
     * Get dunningDate value
     * @return string|null
     */
    public function getDunningDate(): ?string
    {
        return $this->dunningDate;
    }
    /**
     * Set dunningDate value
     * @param string $dunningDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus
     */
    public function setDunningDate(?string $dunningDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dunningDate) && !is_string($dunningDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dunningDate, true), gettype($dunningDate)), __LINE__);
        }
        $this->dunningDate = $dunningDate;
        
        return $this;
    }
    /**
     * Get paymentDueDate value
     * @return string|null
     */
    public function getPaymentDueDate(): ?string
    {
        return $this->paymentDueDate;
    }
    /**
     * Set paymentDueDate value
     * @param string $paymentDueDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderStatus
     */
    public function setPaymentDueDate(?string $paymentDueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentDueDate) && !is_string($paymentDueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentDueDate, true), gettype($paymentDueDate)), __LINE__);
        }
        $this->paymentDueDate = $paymentDueDate;
        
        return $this;
    }
}
