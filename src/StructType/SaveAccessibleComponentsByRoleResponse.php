<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAccessibleComponentsByRoleResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Provide the unsuccessfully saved components
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAccessibleComponentsByRoleResponse extends AbstractStructBase
{
    /**
     * The success
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $success = null;
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
     * Constructor method for SaveAccessibleComponentsByRoleResponse
     * @uses SaveAccessibleComponentsByRoleResponse::setSuccess()
     * @uses SaveAccessibleComponentsByRoleResponse::setMidocoAccessibleComponentByRole()
     * @param bool $success
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType[] $midocoAccessibleComponentByRole
     */
    public function __construct(?bool $success = false, ?array $midocoAccessibleComponentByRole = null)
    {
        $this
            ->setSuccess($success)
            ->setMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole);
    }
    /**
     * Get success value
     * @return bool|null
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }
    /**
     * Set success value
     * @param bool $success
     * @return \Pggns\MidocoApi\Order\StructType\SaveAccessibleComponentsByRoleResponse
     */
    public function setSuccess(?bool $success = false): self
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->success = $success;
        
        return $this;
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
        foreach ($values as $saveAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem) {
            // validation for constraint: itemType
            if (!$saveAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAccessibleComponentByRoleType) {
                $invalidValues[] = is_object($saveAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem) ? get_class($saveAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem) : sprintf('%s(%s)', gettype($saveAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem), var_export($saveAccessibleComponentsByRoleResponseMidocoAccessibleComponentByRoleItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveAccessibleComponentsByRoleResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveAccessibleComponentsByRoleResponse
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
