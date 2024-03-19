<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCostCentersFromTopMostOrgUnitResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCostCentersFromTopMostOrgUnitResponse extends AbstractStructBase
{
    /**
     * The costCentre
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $costCentre = null;
    /**
     * Constructor method for GetCostCentersFromTopMostOrgUnitResponse
     * @uses GetCostCentersFromTopMostOrgUnitResponse::setCostCentre()
     * @param string[] $costCentre
     */
    public function __construct(?array $costCentre = null)
    {
        $this
            ->setCostCentre($costCentre);
    }
    /**
     * Get costCentre value
     * @return string[]
     */
    public function getCostCentre(): ?array
    {
        return $this->costCentre;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCostCentre method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCostCentre method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCostCentreForArrayConstraintFromSetCostCentre(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCostCentersFromTopMostOrgUnitResponseCostCentreItem) {
            // validation for constraint: itemType
            if (!is_string($getCostCentersFromTopMostOrgUnitResponseCostCentreItem)) {
                $invalidValues[] = is_object($getCostCentersFromTopMostOrgUnitResponseCostCentreItem) ? get_class($getCostCentersFromTopMostOrgUnitResponseCostCentreItem) : sprintf('%s(%s)', gettype($getCostCentersFromTopMostOrgUnitResponseCostCentreItem), var_export($getCostCentersFromTopMostOrgUnitResponseCostCentreItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The costCentre property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set costCentre value
     * @throws InvalidArgumentException
     * @param string[] $costCentre
     * @return \Pggns\MidocoApi\Order\StructType\GetCostCentersFromTopMostOrgUnitResponse
     */
    public function setCostCentre(?array $costCentre = null): self
    {
        // validation for constraint: array
        if ('' !== ($costCentreArrayErrorMessage = self::validateCostCentreForArrayConstraintFromSetCostCentre($costCentre))) {
            throw new InvalidArgumentException($costCentreArrayErrorMessage, __LINE__);
        }
        $this->costCentre = $costCentre;
        
        return $this;
    }
    /**
     * Add item to costCentre value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetCostCentersFromTopMostOrgUnitResponse
     */
    public function addToCostCentre(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The costCentre property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->costCentre[] = $item;
        
        return $this;
    }
}
