<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOrderLayoutOrgunitResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchOrderLayoutOrgunitResponse extends AbstractStructBase
{
    /**
     * The notAllowedUnits
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $notAllowedUnits = null;
    /**
     * The asNeighbor
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var bool[]
     */
    protected ?array $asNeighbor = null;
    /**
     * Constructor method for SearchOrderLayoutOrgunitResponse
     * @uses SearchOrderLayoutOrgunitResponse::setNotAllowedUnits()
     * @uses SearchOrderLayoutOrgunitResponse::setAsNeighbor()
     * @param string[] $notAllowedUnits
     * @param bool[] $asNeighbor
     */
    public function __construct(?array $notAllowedUnits = null, ?array $asNeighbor = null)
    {
        $this
            ->setNotAllowedUnits($notAllowedUnits)
            ->setAsNeighbor($asNeighbor);
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
        foreach ($values as $searchOrderLayoutOrgunitResponseNotAllowedUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($searchOrderLayoutOrgunitResponseNotAllowedUnitsItem)) {
                $invalidValues[] = is_object($searchOrderLayoutOrgunitResponseNotAllowedUnitsItem) ? get_class($searchOrderLayoutOrgunitResponseNotAllowedUnitsItem) : sprintf('%s(%s)', gettype($searchOrderLayoutOrgunitResponseNotAllowedUnitsItem), var_export($searchOrderLayoutOrgunitResponseNotAllowedUnitsItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderLayoutOrgunitResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderLayoutOrgunitResponse
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
    /**
     * Get asNeighbor value
     * @return bool[]
     */
    public function getAsNeighbor(): ?array
    {
        return $this->asNeighbor;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAsNeighbor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAsNeighbor method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAsNeighborForArrayConstraintFromSetAsNeighbor(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchOrderLayoutOrgunitResponseAsNeighborItem) {
            // validation for constraint: itemType
            if (!is_bool($searchOrderLayoutOrgunitResponseAsNeighborItem)) {
                $invalidValues[] = is_object($searchOrderLayoutOrgunitResponseAsNeighborItem) ? get_class($searchOrderLayoutOrgunitResponseAsNeighborItem) : sprintf('%s(%s)', gettype($searchOrderLayoutOrgunitResponseAsNeighborItem), var_export($searchOrderLayoutOrgunitResponseAsNeighborItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The asNeighbor property can only contain items of type bool, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set asNeighbor value
     * @throws InvalidArgumentException
     * @param bool[] $asNeighbor
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderLayoutOrgunitResponse
     */
    public function setAsNeighbor(?array $asNeighbor = null): self
    {
        // validation for constraint: array
        if ('' !== ($asNeighborArrayErrorMessage = self::validateAsNeighborForArrayConstraintFromSetAsNeighbor($asNeighbor))) {
            throw new InvalidArgumentException($asNeighborArrayErrorMessage, __LINE__);
        }
        $this->asNeighbor = $asNeighbor;
        
        return $this;
    }
    /**
     * Add item to asNeighbor value
     * @throws InvalidArgumentException
     * @param bool $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderLayoutOrgunitResponse
     */
    public function addToAsNeighbor(bool $item): self
    {
        // validation for constraint: itemType
        if (!is_bool($item)) {
            throw new InvalidArgumentException(sprintf('The asNeighbor property can only contain items of type bool, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->asNeighbor[] = $item;
        
        return $this;
    }
}
