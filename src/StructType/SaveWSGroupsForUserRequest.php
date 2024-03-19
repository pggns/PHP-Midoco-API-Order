<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveWSGroupsForUserRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveWSGroupsForUserRequest extends AbstractStructBase
{
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The groupsToSave
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $groupsToSave = null;
    /**
     * The groupsToRemove
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $groupsToRemove = null;
    /**
     * Constructor method for SaveWSGroupsForUserRequest
     * @uses SaveWSGroupsForUserRequest::setUserId()
     * @uses SaveWSGroupsForUserRequest::setGroupsToSave()
     * @uses SaveWSGroupsForUserRequest::setGroupsToRemove()
     * @param int $userId
     * @param string[] $groupsToSave
     * @param string[] $groupsToRemove
     */
    public function __construct(?int $userId = null, ?array $groupsToSave = null, ?array $groupsToRemove = null)
    {
        $this
            ->setUserId($userId)
            ->setGroupsToSave($groupsToSave)
            ->setGroupsToRemove($groupsToRemove);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\SaveWSGroupsForUserRequest
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get groupsToSave value
     * @return string[]
     */
    public function getGroupsToSave(): ?array
    {
        return $this->groupsToSave;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGroupsToSave method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupsToSave method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupsToSaveForArrayConstraintFromSetGroupsToSave(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveWSGroupsForUserRequestGroupsToSaveItem) {
            // validation for constraint: itemType
            if (!is_string($saveWSGroupsForUserRequestGroupsToSaveItem)) {
                $invalidValues[] = is_object($saveWSGroupsForUserRequestGroupsToSaveItem) ? get_class($saveWSGroupsForUserRequestGroupsToSaveItem) : sprintf('%s(%s)', gettype($saveWSGroupsForUserRequestGroupsToSaveItem), var_export($saveWSGroupsForUserRequestGroupsToSaveItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The groupsToSave property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set groupsToSave value
     * @throws InvalidArgumentException
     * @param string[] $groupsToSave
     * @return \Pggns\MidocoApi\Order\StructType\SaveWSGroupsForUserRequest
     */
    public function setGroupsToSave(?array $groupsToSave = null): self
    {
        // validation for constraint: array
        if ('' !== ($groupsToSaveArrayErrorMessage = self::validateGroupsToSaveForArrayConstraintFromSetGroupsToSave($groupsToSave))) {
            throw new InvalidArgumentException($groupsToSaveArrayErrorMessage, __LINE__);
        }
        $this->groupsToSave = $groupsToSave;
        
        return $this;
    }
    /**
     * Add item to groupsToSave value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveWSGroupsForUserRequest
     */
    public function addToGroupsToSave(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The groupsToSave property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->groupsToSave[] = $item;
        
        return $this;
    }
    /**
     * Get groupsToRemove value
     * @return string[]
     */
    public function getGroupsToRemove(): ?array
    {
        return $this->groupsToRemove;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setGroupsToRemove method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupsToRemove method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupsToRemoveForArrayConstraintFromSetGroupsToRemove(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveWSGroupsForUserRequestGroupsToRemoveItem) {
            // validation for constraint: itemType
            if (!is_string($saveWSGroupsForUserRequestGroupsToRemoveItem)) {
                $invalidValues[] = is_object($saveWSGroupsForUserRequestGroupsToRemoveItem) ? get_class($saveWSGroupsForUserRequestGroupsToRemoveItem) : sprintf('%s(%s)', gettype($saveWSGroupsForUserRequestGroupsToRemoveItem), var_export($saveWSGroupsForUserRequestGroupsToRemoveItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The groupsToRemove property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set groupsToRemove value
     * @throws InvalidArgumentException
     * @param string[] $groupsToRemove
     * @return \Pggns\MidocoApi\Order\StructType\SaveWSGroupsForUserRequest
     */
    public function setGroupsToRemove(?array $groupsToRemove = null): self
    {
        // validation for constraint: array
        if ('' !== ($groupsToRemoveArrayErrorMessage = self::validateGroupsToRemoveForArrayConstraintFromSetGroupsToRemove($groupsToRemove))) {
            throw new InvalidArgumentException($groupsToRemoveArrayErrorMessage, __LINE__);
        }
        $this->groupsToRemove = $groupsToRemove;
        
        return $this;
    }
    /**
     * Add item to groupsToRemove value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveWSGroupsForUserRequest
     */
    public function addToGroupsToRemove(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The groupsToRemove property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->groupsToRemove[] = $item;
        
        return $this;
    }
}
