<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMilesAndMoreEarnTransactionRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: This action can be used to retrieve any Miles & More earn transaction. E.g. to display more than just the most recent transaction in the GUI.
 * @subpackage Structs
 */
class GetMilesAndMoreEarnTransactionRequest extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: The database id
     * - choice: id | TransactionId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var int[]
     */
    protected array $id = [];
    /**
     * The TransactionId
     * Meta information extracted from the WSDL
     * - documentation: The transaction Id
     * - choice: id | TransactionId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var string[]
     */
    protected array $TransactionId = [];
    /**
     * Constructor method for GetMilesAndMoreEarnTransactionRequest
     * @uses GetMilesAndMoreEarnTransactionRequest::setId()
     * @uses GetMilesAndMoreEarnTransactionRequest::setTransactionId()
     * @param int[] $id
     * @param string[] $transactionId
     */
    public function __construct(array $id, array $transactionId)
    {
        $this
            ->setId($id)
            ->setTransactionId($transactionId);
    }
    /**
     * Get id value
     * @return int[]
     */
    public function getId(): array
    {
        return isset($this->id) ? $this->id : null;
    }
    /**
     * This method is responsible for validating the values passed to the setId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIdForArrayConstraintsFromSetId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMilesAndMoreEarnTransactionRequestIdItem) {
            // validation for constraint: itemType
            if (!(is_int($getMilesAndMoreEarnTransactionRequestIdItem) || ctype_digit($getMilesAndMoreEarnTransactionRequestIdItem))) {
                $invalidValues[] = is_object($getMilesAndMoreEarnTransactionRequestIdItem) ? get_class($getMilesAndMoreEarnTransactionRequestIdItem) : sprintf('%s(%s)', gettype($getMilesAndMoreEarnTransactionRequestIdItem), var_export($getMilesAndMoreEarnTransactionRequestIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The id property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateIdForChoiceConstraintsFromSetId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TransactionId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property id can\'t be set as the property %s is already set. Only one property must be set among these properties: id, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set id value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param int[] $id
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreEarnTransactionRequest
     */
    public function setId(array $id): self
    {
        // validation for constraint: array
        if ('' !== ($idArrayErrorMessage = self::validateIdForArrayConstraintsFromSetId($id))) {
            throw new InvalidArgumentException($idArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(id, TransactionId)
        if ('' !== ($idChoiceErrorMessage = self::validateIdForChoiceConstraintsFromSetId($id))) {
            throw new InvalidArgumentException($idChoiceErrorMessage, __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToId method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'TransactionId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property id can\'t be set as the property %s is already set. Only one property must be set among these properties: id, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to id value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreEarnTransactionRequest
     */
    public function addToId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The id property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(id, TransactionId)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToId($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        $this->id[] = $item;
        
        return $this;
    }
    /**
     * Get TransactionId value
     * @return string[]
     */
    public function getTransactionId(): array
    {
        return isset($this->TransactionId) ? $this->TransactionId : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTransactionId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransactionId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTransactionIdForArrayConstraintsFromSetTransactionId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMilesAndMoreEarnTransactionRequestTransactionIdItem) {
            // validation for constraint: itemType
            if (!is_string($getMilesAndMoreEarnTransactionRequestTransactionIdItem)) {
                $invalidValues[] = is_object($getMilesAndMoreEarnTransactionRequestTransactionIdItem) ? get_class($getMilesAndMoreEarnTransactionRequestTransactionIdItem) : sprintf('%s(%s)', gettype($getMilesAndMoreEarnTransactionRequestTransactionIdItem), var_export($getMilesAndMoreEarnTransactionRequestTransactionIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TransactionId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setTransactionId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTransactionId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTransactionIdForChoiceConstraintsFromSetTransactionId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'id',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TransactionId can\'t be set as the property %s is already set. Only one property must be set among these properties: TransactionId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set TransactionId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param string[] $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreEarnTransactionRequest
     */
    public function setTransactionId(array $transactionId): self
    {
        // validation for constraint: array
        if ('' !== ($transactionIdArrayErrorMessage = self::validateTransactionIdForArrayConstraintsFromSetTransactionId($transactionId))) {
            throw new InvalidArgumentException($transactionIdArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(id, TransactionId)
        if ('' !== ($transactionIdChoiceErrorMessage = self::validateTransactionIdForChoiceConstraintsFromSetTransactionId($transactionId))) {
            throw new InvalidArgumentException($transactionIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($transactionId) || (is_array($transactionId) && empty($transactionId))) {
            unset($this->TransactionId);
        } else {
            $this->TransactionId = $transactionId;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToTransactionId method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToTransactionId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToTransactionId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'id',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property TransactionId can\'t be set as the property %s is already set. Only one property must be set among these properties: TransactionId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to TransactionId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreEarnTransactionRequest
     */
    public function addToTransactionId(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The TransactionId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(id, TransactionId)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToTransactionId($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        $this->TransactionId[] = $item;
        
        return $this;
    }
}
