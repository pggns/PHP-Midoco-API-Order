<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQueryCriteriaOpNamesResponse StructType
 * @subpackage Structs
 */
class GetQueryCriteriaOpNamesResponse extends AbstractStructBase
{
    /**
     * The CriteriaOpName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $CriteriaOpName = [];
    /**
     * Constructor method for GetQueryCriteriaOpNamesResponse
     * @uses GetQueryCriteriaOpNamesResponse::setCriteriaOpName()
     * @param string[] $criteriaOpName
     */
    public function __construct(array $criteriaOpName = [])
    {
        $this
            ->setCriteriaOpName($criteriaOpName);
    }
    /**
     * Get CriteriaOpName value
     * @return string[]
     */
    public function getCriteriaOpName(): array
    {
        return $this->CriteriaOpName;
    }
    /**
     * This method is responsible for validating the values passed to the setCriteriaOpName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCriteriaOpName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCriteriaOpNameForArrayConstraintsFromSetCriteriaOpName(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getQueryCriteriaOpNamesResponseCriteriaOpNameItem) {
            // validation for constraint: itemType
            if (!is_string($getQueryCriteriaOpNamesResponseCriteriaOpNameItem)) {
                $invalidValues[] = is_object($getQueryCriteriaOpNamesResponseCriteriaOpNameItem) ? get_class($getQueryCriteriaOpNamesResponseCriteriaOpNameItem) : sprintf('%s(%s)', gettype($getQueryCriteriaOpNamesResponseCriteriaOpNameItem), var_export($getQueryCriteriaOpNamesResponseCriteriaOpNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CriteriaOpName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CriteriaOpName value
     * @throws InvalidArgumentException
     * @param string[] $criteriaOpName
     * @return \Pggns\MidocoApi\Order\StructType\GetQueryCriteriaOpNamesResponse
     */
    public function setCriteriaOpName(array $criteriaOpName = []): self
    {
        // validation for constraint: array
        if ('' !== ($criteriaOpNameArrayErrorMessage = self::validateCriteriaOpNameForArrayConstraintsFromSetCriteriaOpName($criteriaOpName))) {
            throw new InvalidArgumentException($criteriaOpNameArrayErrorMessage, __LINE__);
        }
        $this->CriteriaOpName = $criteriaOpName;
        
        return $this;
    }
    /**
     * Add item to CriteriaOpName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetQueryCriteriaOpNamesResponse
     */
    public function addToCriteriaOpName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The CriteriaOpName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CriteriaOpName[] = $item;
        
        return $this;
    }
}
