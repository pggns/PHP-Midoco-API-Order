<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAccessibleComponentByRoleType StructType
 * Meta information extracted from the WSDL
 * - documentation: Children accessible components for a parent component
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAccessibleComponentByRoleType extends AccessibleComponentDTO
{
    /**
     * The MidocoAccessibleComponentByRole
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAccessibleComponentByRole
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType[]
     */
    protected ?array $MidocoAccessibleComponentByRole = null;
    /**
     * The roleId
     * @var int|null
     */
    protected ?int $roleId = null;
    /**
     * The accessState
     * @var int|null
     */
    protected ?int $accessState = null;
    /**
     * Constructor method for MidocoAccessibleComponentByRoleType
     * @uses MidocoAccessibleComponentByRoleType::setMidocoAccessibleComponentByRole()
     * @uses MidocoAccessibleComponentByRoleType::setRoleId()
     * @uses MidocoAccessibleComponentByRoleType::setAccessState()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType[] $midocoAccessibleComponentByRole
     * @param int $roleId
     * @param int $accessState
     */
    public function __construct(?array $midocoAccessibleComponentByRole = null, ?int $roleId = null, ?int $accessState = null)
    {
        $this
            ->setMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole)
            ->setRoleId($roleId)
            ->setAccessState($accessState);
    }
    /**
     * Get MidocoAccessibleComponentByRole value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType[]
     */
    public function getMidocoAccessibleComponentByRole(): ?array
    {
        return $this->MidocoAccessibleComponentByRole;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAccessibleComponentByRole method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAccessibleComponentByRole method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAccessibleComponentByRoleForArrayConstraintFromSetMidocoAccessibleComponentByRole(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAccessibleComponentByRoleTypeMidocoAccessibleComponentByRoleItem) {
            // validation for constraint: itemType
            if (!$midocoAccessibleComponentByRoleTypeMidocoAccessibleComponentByRoleItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType) {
                $invalidValues[] = is_object($midocoAccessibleComponentByRoleTypeMidocoAccessibleComponentByRoleItem) ? get_class($midocoAccessibleComponentByRoleTypeMidocoAccessibleComponentByRoleItem) : sprintf('%s(%s)', gettype($midocoAccessibleComponentByRoleTypeMidocoAccessibleComponentByRoleItem), var_export($midocoAccessibleComponentByRoleTypeMidocoAccessibleComponentByRoleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAccessibleComponentByRole property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAccessibleComponentByRole value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType[] $midocoAccessibleComponentByRole
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType
     */
    public function setMidocoAccessibleComponentByRole(?array $midocoAccessibleComponentByRole = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAccessibleComponentByRoleArrayErrorMessage = self::validateMidocoAccessibleComponentByRoleForArrayConstraintFromSetMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole))) {
            throw new InvalidArgumentException($midocoAccessibleComponentByRoleArrayErrorMessage, __LINE__);
        }
        $this->MidocoAccessibleComponentByRole = $midocoAccessibleComponentByRole;
        
        return $this;
    }
    /**
     * Add item to MidocoAccessibleComponentByRole value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType
     */
    public function addToMidocoAccessibleComponentByRole(\Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType) {
            throw new InvalidArgumentException(sprintf('The MidocoAccessibleComponentByRole property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAccessibleComponentByRole[] = $item;
        
        return $this;
    }
    /**
     * Get roleId value
     * @return int|null
     */
    public function getRoleId(): ?int
    {
        return $this->roleId;
    }
    /**
     * Set roleId value
     * @param int $roleId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType
     */
    public function setRoleId(?int $roleId = null): self
    {
        // validation for constraint: int
        if (!is_null($roleId) && !(is_int($roleId) || ctype_digit($roleId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($roleId, true), gettype($roleId)), __LINE__);
        }
        $this->roleId = $roleId;
        
        return $this;
    }
    /**
     * Get accessState value
     * @return int|null
     */
    public function getAccessState(): ?int
    {
        return $this->accessState;
    }
    /**
     * Set accessState value
     * @param int $accessState
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType
     */
    public function setAccessState(?int $accessState = null): self
    {
        // validation for constraint: int
        if (!is_null($accessState) && !(is_int($accessState) || ctype_digit($accessState))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($accessState, true), gettype($accessState)), __LINE__);
        }
        $this->accessState = $accessState;
        
        return $this;
    }
}
