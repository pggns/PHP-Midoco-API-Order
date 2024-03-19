<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintSelectsForOrderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintSelectsForOrderRequest extends AbstractStructBase
{
    /**
     * The handler
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $handler = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The cultureId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * Constructor method for GetPrintSelectsForOrderRequest
     * @uses GetPrintSelectsForOrderRequest::setHandler()
     * @uses GetPrintSelectsForOrderRequest::setUnitName()
     * @uses GetPrintSelectsForOrderRequest::setCultureId()
     * @uses GetPrintSelectsForOrderRequest::setOrderId()
     * @param string[] $handler
     * @param string $unitName
     * @param string $cultureId
     * @param int $orderId
     */
    public function __construct(?array $handler = null, ?string $unitName = null, ?string $cultureId = null, ?int $orderId = null)
    {
        $this
            ->setHandler($handler)
            ->setUnitName($unitName)
            ->setCultureId($cultureId)
            ->setOrderId($orderId);
    }
    /**
     * Get handler value
     * @return string[]
     */
    public function getHandler(): ?array
    {
        return $this->handler;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHandler method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHandler method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHandlerForArrayConstraintFromSetHandler(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintSelectsForOrderRequestHandlerItem) {
            // validation for constraint: itemType
            if (!is_string($getPrintSelectsForOrderRequestHandlerItem)) {
                $invalidValues[] = is_object($getPrintSelectsForOrderRequestHandlerItem) ? get_class($getPrintSelectsForOrderRequestHandlerItem) : sprintf('%s(%s)', gettype($getPrintSelectsForOrderRequestHandlerItem), var_export($getPrintSelectsForOrderRequestHandlerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The handler property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set handler value
     * @throws InvalidArgumentException
     * @param string[] $handler
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsForOrderRequest
     */
    public function setHandler(?array $handler = null): self
    {
        // validation for constraint: array
        if ('' !== ($handlerArrayErrorMessage = self::validateHandlerForArrayConstraintFromSetHandler($handler))) {
            throw new InvalidArgumentException($handlerArrayErrorMessage, __LINE__);
        }
        $this->handler = $handler;
        
        return $this;
    }
    /**
     * Add item to handler value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsForOrderRequest
     */
    public function addToHandler(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The handler property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->handler[] = $item;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsForOrderRequest
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
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsForOrderRequest
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintSelectsForOrderRequest
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
}
