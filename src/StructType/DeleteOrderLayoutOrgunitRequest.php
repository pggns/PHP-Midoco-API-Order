<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrderLayoutOrgunitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteOrderLayoutOrgunitRequest extends AbstractStructBase
{
    /**
     * The layoutId
     * @var int|null
     */
    protected ?int $layoutId = null;
    /**
     * The notAllowedUnits
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $notAllowedUnits = null;
    /**
     * Constructor method for DeleteOrderLayoutOrgunitRequest
     * @uses DeleteOrderLayoutOrgunitRequest::setLayoutId()
     * @uses DeleteOrderLayoutOrgunitRequest::setNotAllowedUnits()
     * @param int $layoutId
     * @param string[] $notAllowedUnits
     */
    public function __construct(?int $layoutId = null, ?array $notAllowedUnits = null)
    {
        $this
            ->setLayoutId($layoutId)
            ->setNotAllowedUnits($notAllowedUnits);
    }
    /**
     * Get layoutId value
     * @return int|null
     */
    public function getLayoutId(): ?int
    {
        return $this->layoutId;
    }
    /**
     * Set layoutId value
     * @param int $layoutId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderLayoutOrgunitRequest
     */
    public function setLayoutId(?int $layoutId = null): self
    {
        // validation for constraint: int
        if (!is_null($layoutId) && !(is_int($layoutId) || ctype_digit($layoutId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($layoutId, true), gettype($layoutId)), __LINE__);
        }
        $this->layoutId = $layoutId;
        
        return $this;
    }
    /**
     * Get notAllowedUnits value
     * @return string[]
     */
    public function getNotAllowedUnits(): ?array
    {
        return $this->notAllowedUnits;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setNotAllowedUnits method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotAllowedUnits method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotAllowedUnitsForArrayConstraintFromSetNotAllowedUnits(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteOrderLayoutOrgunitRequestNotAllowedUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($deleteOrderLayoutOrgunitRequestNotAllowedUnitsItem)) {
                $invalidValues[] = is_object($deleteOrderLayoutOrgunitRequestNotAllowedUnitsItem) ? get_class($deleteOrderLayoutOrgunitRequestNotAllowedUnitsItem) : sprintf('%s(%s)', gettype($deleteOrderLayoutOrgunitRequestNotAllowedUnitsItem), var_export($deleteOrderLayoutOrgunitRequestNotAllowedUnitsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The notAllowedUnits property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set notAllowedUnits value
     * @throws InvalidArgumentException
     * @param string[] $notAllowedUnits
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderLayoutOrgunitRequest
     */
    public function setNotAllowedUnits(?array $notAllowedUnits = null): self
    {
        // validation for constraint: array
        if ('' !== ($notAllowedUnitsArrayErrorMessage = self::validateNotAllowedUnitsForArrayConstraintFromSetNotAllowedUnits($notAllowedUnits))) {
            throw new InvalidArgumentException($notAllowedUnitsArrayErrorMessage, __LINE__);
        }
        $this->notAllowedUnits = $notAllowedUnits;
        
        return $this;
    }
    /**
     * Add item to notAllowedUnits value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderLayoutOrgunitRequest
     */
    public function addToNotAllowedUnits(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The notAllowedUnits property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->notAllowedUnits[] = $item;
        
        return $this;
    }
}
