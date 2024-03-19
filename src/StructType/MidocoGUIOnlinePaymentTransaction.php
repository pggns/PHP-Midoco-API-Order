<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoGUIOnlinePaymentTransaction StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoGUIOnlinePaymentTransaction extends OnlinePaymentTransactionDTO
{
    /**
     * The errorArgs
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $errorArgs = null;
    /**
     * The processor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $processor = null;
    /**
     * Constructor method for MidocoGUIOnlinePaymentTransaction
     * @uses MidocoGUIOnlinePaymentTransaction::setErrorArgs()
     * @uses MidocoGUIOnlinePaymentTransaction::setProcessor()
     * @param string[] $errorArgs
     * @param string[] $processor
     */
    public function __construct(?array $errorArgs = null, ?array $processor = null)
    {
        $this
            ->setErrorArgs($errorArgs)
            ->setProcessor($processor);
    }
    /**
     * Get errorArgs value
     * @return string[]
     */
    public function getErrorArgs(): ?array
    {
        return $this->errorArgs;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setErrorArgs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErrorArgs method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorArgsForArrayConstraintFromSetErrorArgs(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGUIOnlinePaymentTransactionErrorArgsItem) {
            // validation for constraint: itemType
            if (!is_string($midocoGUIOnlinePaymentTransactionErrorArgsItem)) {
                $invalidValues[] = is_object($midocoGUIOnlinePaymentTransactionErrorArgsItem) ? get_class($midocoGUIOnlinePaymentTransactionErrorArgsItem) : sprintf('%s(%s)', gettype($midocoGUIOnlinePaymentTransactionErrorArgsItem), var_export($midocoGUIOnlinePaymentTransactionErrorArgsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The errorArgs property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set errorArgs value
     * @throws InvalidArgumentException
     * @param string[] $errorArgs
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGUIOnlinePaymentTransaction
     */
    public function setErrorArgs(?array $errorArgs = null): self
    {
        // validation for constraint: array
        if ('' !== ($errorArgsArrayErrorMessage = self::validateErrorArgsForArrayConstraintFromSetErrorArgs($errorArgs))) {
            throw new InvalidArgumentException($errorArgsArrayErrorMessage, __LINE__);
        }
        $this->errorArgs = $errorArgs;
        
        return $this;
    }
    /**
     * Add item to errorArgs value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGUIOnlinePaymentTransaction
     */
    public function addToErrorArgs(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The errorArgs property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->errorArgs[] = $item;
        
        return $this;
    }
    /**
     * Get processor value
     * @return string[]
     */
    public function getProcessor(): ?array
    {
        return $this->processor;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setProcessor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProcessor method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProcessorForArrayConstraintFromSetProcessor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoGUIOnlinePaymentTransactionProcessorItem) {
            // validation for constraint: itemType
            if (!is_string($midocoGUIOnlinePaymentTransactionProcessorItem)) {
                $invalidValues[] = is_object($midocoGUIOnlinePaymentTransactionProcessorItem) ? get_class($midocoGUIOnlinePaymentTransactionProcessorItem) : sprintf('%s(%s)', gettype($midocoGUIOnlinePaymentTransactionProcessorItem), var_export($midocoGUIOnlinePaymentTransactionProcessorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The processor property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set processor value
     * @throws InvalidArgumentException
     * @param string[] $processor
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGUIOnlinePaymentTransaction
     */
    public function setProcessor(?array $processor = null): self
    {
        // validation for constraint: array
        if ('' !== ($processorArrayErrorMessage = self::validateProcessorForArrayConstraintFromSetProcessor($processor))) {
            throw new InvalidArgumentException($processorArrayErrorMessage, __LINE__);
        }
        $this->processor = $processor;
        
        return $this;
    }
    /**
     * Add item to processor value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGUIOnlinePaymentTransaction
     */
    public function addToProcessor(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The processor property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->processor[] = $item;
        
        return $this;
    }
}
