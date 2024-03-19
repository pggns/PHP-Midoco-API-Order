<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportHandlerResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response is only filled in the test system to show the testers where to find the order.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ImportHandlerResponseType extends AbstractStructBase
{
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - documentation: The ID that was assigned to the imported order.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - documentation: The order number that was assigned to the imported order.
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - documentation: The name of the org unit to which the order was imported.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The result
     * Meta information extracted from the WSDL
     * - documentation: A forwarded response from an import handler.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $result = null;
    /**
     * The error
     * Meta information extracted from the WSDL
     * - documentation: An error message or the reason the import was ignored. @deprecated Use ImportHandlerResponseMessage elements instead.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * The ImportHandlerResponseMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ImportHandlerResponseMessage
     * @var \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage[]
     */
    protected ?array $ImportHandlerResponseMessage = null;
    /**
     * Constructor method for ImportHandlerResponseType
     * @uses ImportHandlerResponseType::setOrderId()
     * @uses ImportHandlerResponseType::setOrderNo()
     * @uses ImportHandlerResponseType::setUnitName()
     * @uses ImportHandlerResponseType::setResult()
     * @uses ImportHandlerResponseType::setError()
     * @uses ImportHandlerResponseType::setImportHandlerResponseMessage()
     * @param int $orderId
     * @param int $orderNo
     * @param string $unitName
     * @param string $result
     * @param string $error
     * @param \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage[] $importHandlerResponseMessage
     */
    public function __construct(?int $orderId = null, ?int $orderNo = null, ?string $unitName = null, ?string $result = null, ?string $error = null, ?array $importHandlerResponseMessage = null)
    {
        $this
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setUnitName($unitName)
            ->setResult($result)
            ->setError($error)
            ->setImportHandlerResponseMessage($importHandlerResponseMessage);
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType
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
     * Get result value
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param string $result
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType
     */
    public function setResult(?string $result = null): self
    {
        // validation for constraint: string
        if (!is_null($result) && !is_string($result)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;
        
        return $this;
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $error
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
    /**
     * Get ImportHandlerResponseMessage value
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage[]
     */
    public function getImportHandlerResponseMessage(): ?array
    {
        return $this->ImportHandlerResponseMessage;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setImportHandlerResponseMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImportHandlerResponseMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImportHandlerResponseMessageForArrayConstraintFromSetImportHandlerResponseMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $importHandlerResponseTypeImportHandlerResponseMessageItem) {
            // validation for constraint: itemType
            if (!$importHandlerResponseTypeImportHandlerResponseMessageItem instanceof \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage) {
                $invalidValues[] = is_object($importHandlerResponseTypeImportHandlerResponseMessageItem) ? get_class($importHandlerResponseTypeImportHandlerResponseMessageItem) : sprintf('%s(%s)', gettype($importHandlerResponseTypeImportHandlerResponseMessageItem), var_export($importHandlerResponseTypeImportHandlerResponseMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ImportHandlerResponseMessage property can only contain items of type \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ImportHandlerResponseMessage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage[] $importHandlerResponseMessage
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType
     */
    public function setImportHandlerResponseMessage(?array $importHandlerResponseMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($importHandlerResponseMessageArrayErrorMessage = self::validateImportHandlerResponseMessageForArrayConstraintFromSetImportHandlerResponseMessage($importHandlerResponseMessage))) {
            throw new InvalidArgumentException($importHandlerResponseMessageArrayErrorMessage, __LINE__);
        }
        $this->ImportHandlerResponseMessage = $importHandlerResponseMessage;
        
        return $this;
    }
    /**
     * Add item to ImportHandlerResponseMessage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage $item
     * @return \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseType
     */
    public function addToImportHandlerResponseMessage(\Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage) {
            throw new InvalidArgumentException(sprintf('The ImportHandlerResponseMessage property can only contain items of type \Pggns\MidocoApi\Order\StructType\ImportHandlerResponseMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ImportHandlerResponseMessage[] = $item;
        
        return $this;
    }
}
