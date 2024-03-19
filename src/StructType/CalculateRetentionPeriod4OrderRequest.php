<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateRetentionPeriod4OrderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CalculateRetentionPeriod4OrderRequest extends AbstractStructBase
{
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - choice: orderId | orderNo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - choice: orderId | orderNo
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * Constructor method for CalculateRetentionPeriod4OrderRequest
     * @uses CalculateRetentionPeriod4OrderRequest::setUnitName()
     * @uses CalculateRetentionPeriod4OrderRequest::setOrderId()
     * @uses CalculateRetentionPeriod4OrderRequest::setOrderNo()
     * @param string $unitName
     * @param int $orderId
     * @param int $orderNo
     */
    public function __construct(?string $unitName = null, ?int $orderId = null, ?int $orderNo = null)
    {
        $this
            ->setUnitName($unitName)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\CalculateRetentionPeriod4OrderRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrderId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateOrderIdForChoiceConstraintFromSetOrderId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'orderNo',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property orderId can\'t be set as the property %s is already set. Only one property must be set among these properties: orderId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set orderId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\CalculateRetentionPeriod4OrderRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        // validation for constraint: choice(orderId, orderNo)
        if ('' !== ($orderIdChoiceErrorMessage = self::validateOrderIdForChoiceConstraintFromSetOrderId($orderId))) {
            throw new InvalidArgumentException($orderIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($orderId) || (is_array($orderId) && empty($orderId))) {
            unset($this->orderId);
        } else {
            $this->orderId = $orderId;
        }
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setOrderNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrderNo method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateOrderNoForChoiceConstraintFromSetOrderNo($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'orderId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property orderNo can\'t be set as the property %s is already set. Only one property must be set among these properties: orderNo, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set orderNo value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\CalculateRetentionPeriod4OrderRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        // validation for constraint: choice(orderId, orderNo)
        if ('' !== ($orderNoChoiceErrorMessage = self::validateOrderNoForChoiceConstraintFromSetOrderNo($orderNo))) {
            throw new InvalidArgumentException($orderNoChoiceErrorMessage, __LINE__);
        }
        if (is_null($orderNo) || (is_array($orderNo) && empty($orderNo))) {
            unset($this->orderNo);
        } else {
            $this->orderNo = $orderNo;
        }
        
        return $this;
    }
}
