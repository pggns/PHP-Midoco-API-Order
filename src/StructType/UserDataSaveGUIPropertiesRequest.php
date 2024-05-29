<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserDataSaveGUIPropertiesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UserDataSaveGUIPropertiesRequest extends AbstractStructBase
{
    /**
     * The UserDataGUIProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: UserDataGUIProperty
     * @var \Pggns\MidocoApi\Order\StructType\UserDataGUIProperty[]
     */
    protected ?array $UserDataGUIProperty = null;
    /**
     * Constructor method for UserDataSaveGUIPropertiesRequest
     * @uses UserDataSaveGUIPropertiesRequest::setUserDataGUIProperty()
     * @param \Pggns\MidocoApi\Order\StructType\UserDataGUIProperty[] $userDataGUIProperty
     */
    public function __construct(?array $userDataGUIProperty = null)
    {
        $this
            ->setUserDataGUIProperty($userDataGUIProperty);
    }
    /**
     * Get UserDataGUIProperty value
     * @return \Pggns\MidocoApi\Order\StructType\UserDataGUIProperty[]
     */
    public function getUserDataGUIProperty(): ?array
    {
        return $this->UserDataGUIProperty;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUserDataGUIProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserDataGUIProperty method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUserDataGUIPropertyForArrayConstraintFromSetUserDataGUIProperty(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $userDataSaveGUIPropertiesRequestUserDataGUIPropertyItem) {
            // validation for constraint: itemType
            if (!$userDataSaveGUIPropertiesRequestUserDataGUIPropertyItem instanceof \Pggns\MidocoApi\Order\StructType\UserDataGUIProperty) {
                $invalidValues[] = is_object($userDataSaveGUIPropertiesRequestUserDataGUIPropertyItem) ? get_class($userDataSaveGUIPropertiesRequestUserDataGUIPropertyItem) : sprintf('%s(%s)', gettype($userDataSaveGUIPropertiesRequestUserDataGUIPropertyItem), var_export($userDataSaveGUIPropertiesRequestUserDataGUIPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UserDataGUIProperty property can only contain items of type \Pggns\MidocoApi\Order\StructType\UserDataGUIProperty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UserDataGUIProperty value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\UserDataGUIProperty[] $userDataGUIProperty
     * @return \Pggns\MidocoApi\Order\StructType\UserDataSaveGUIPropertiesRequest
     */
    public function setUserDataGUIProperty(?array $userDataGUIProperty = null): self
    {
        // validation for constraint: array
        if ('' !== ($userDataGUIPropertyArrayErrorMessage = self::validateUserDataGUIPropertyForArrayConstraintFromSetUserDataGUIProperty($userDataGUIProperty))) {
            throw new InvalidArgumentException($userDataGUIPropertyArrayErrorMessage, __LINE__);
        }
        $this->UserDataGUIProperty = $userDataGUIProperty;
        
        return $this;
    }
    /**
     * Add item to UserDataGUIProperty value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\UserDataGUIProperty $item
     * @return \Pggns\MidocoApi\Order\StructType\UserDataSaveGUIPropertiesRequest
     */
    public function addToUserDataGUIProperty(\Pggns\MidocoApi\Order\StructType\UserDataGUIProperty $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\UserDataGUIProperty) {
            throw new InvalidArgumentException(sprintf('The UserDataGUIProperty property can only contain items of type \Pggns\MidocoApi\Order\StructType\UserDataGUIProperty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UserDataGUIProperty[] = $item;
        
        return $this;
    }
}
