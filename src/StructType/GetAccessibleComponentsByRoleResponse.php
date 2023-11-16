<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessibleComponentsByRoleResponse StructType
 * @subpackage Structs
 */
class GetAccessibleComponentsByRoleResponse extends AbstractStructBase
{
    /**
     * The MidocoAccessibleComponentByRole
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAccessibleComponentByRole
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType[]
     */
    protected array $MidocoAccessibleComponentByRole = [];
    /**
     * Constructor method for GetAccessibleComponentsByRoleResponse
     * @uses GetAccessibleComponentsByRoleResponse::setMidocoAccessibleComponentByRole()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType[] $midocoAccessibleComponentByRole
     */
    public function __construct(array $midocoAccessibleComponentByRole = [])
    {
        $this
            ->setMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole);
    }
    /**
     * Get MidocoAccessibleComponentByRole value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType[]
     */
    public function getMidocoAccessibleComponentByRole(): array
    {
        return $this->MidocoAccessibleComponentByRole;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAccessibleComponentByRole method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAccessibleComponentByRole method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAccessibleComponentByRoleForArrayConstraintsFromSetMidocoAccessibleComponentByRole(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem) {
            // validation for constraint: itemType
            if (!$getAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType) {
                $invalidValues[] = is_object($getAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem) ? get_class($getAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem) : sprintf('%s(%s)', gettype($getAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem), var_export($getAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetAccessibleComponentsByRoleResponse
     */
    public function setMidocoAccessibleComponentByRole(array $midocoAccessibleComponentByRole = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAccessibleComponentByRoleArrayErrorMessage = self::validateMidocoAccessibleComponentByRoleForArrayConstraintsFromSetMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole))) {
            throw new InvalidArgumentException($midocoAccessibleComponentByRoleArrayErrorMessage, __LINE__);
        }
        $this->MidocoAccessibleComponentByRole = $midocoAccessibleComponentByRole;
        
        return $this;
    }
    /**
     * Add item to MidocoAccessibleComponentByRole value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAccessibleComponentsByRoleResponse
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
}
