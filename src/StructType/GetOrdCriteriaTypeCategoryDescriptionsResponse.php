<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdCriteriaTypeCategoryDescriptionsResponse StructType
 * @subpackage Structs
 */
class GetOrdCriteriaTypeCategoryDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaTypeCategoryDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaTypeCategoryDescription
     * @var \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDescrDTO[]
     */
    protected array $MidocoOrdCriteriaTypeCategoryDescription = [];
    /**
     * Constructor method for GetOrdCriteriaTypeCategoryDescriptionsResponse
     * @uses GetOrdCriteriaTypeCategoryDescriptionsResponse::setMidocoOrdCriteriaTypeCategoryDescription()
     * @param \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDescrDTO[] $midocoOrdCriteriaTypeCategoryDescription
     */
    public function __construct(array $midocoOrdCriteriaTypeCategoryDescription = [])
    {
        $this
            ->setMidocoOrdCriteriaTypeCategoryDescription($midocoOrdCriteriaTypeCategoryDescription);
    }
    /**
     * Get MidocoOrdCriteriaTypeCategoryDescription value
     * @return \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDescrDTO[]
     */
    public function getMidocoOrdCriteriaTypeCategoryDescription(): array
    {
        return $this->MidocoOrdCriteriaTypeCategoryDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrdCriteriaTypeCategoryDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaTypeCategoryDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaTypeCategoryDescriptionForArrayConstraintsFromSetMidocoOrdCriteriaTypeCategoryDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdCriteriaTypeCategoryDescriptionsResponseMidocoOrdCriteriaTypeCategoryDescriptionItem) {
            // validation for constraint: itemType
            if (!$getOrdCriteriaTypeCategoryDescriptionsResponseMidocoOrdCriteriaTypeCategoryDescriptionItem instanceof \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDescrDTO) {
                $invalidValues[] = is_object($getOrdCriteriaTypeCategoryDescriptionsResponseMidocoOrdCriteriaTypeCategoryDescriptionItem) ? get_class($getOrdCriteriaTypeCategoryDescriptionsResponseMidocoOrdCriteriaTypeCategoryDescriptionItem) : sprintf('%s(%s)', gettype($getOrdCriteriaTypeCategoryDescriptionsResponseMidocoOrdCriteriaTypeCategoryDescriptionItem), var_export($getOrdCriteriaTypeCategoryDescriptionsResponseMidocoOrdCriteriaTypeCategoryDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaTypeCategoryDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDescrDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaTypeCategoryDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDescrDTO[] $midocoOrdCriteriaTypeCategoryDescription
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdCriteriaTypeCategoryDescriptionsResponse
     */
    public function setMidocoOrdCriteriaTypeCategoryDescription(array $midocoOrdCriteriaTypeCategoryDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaTypeCategoryDescriptionArrayErrorMessage = self::validateMidocoOrdCriteriaTypeCategoryDescriptionForArrayConstraintsFromSetMidocoOrdCriteriaTypeCategoryDescription($midocoOrdCriteriaTypeCategoryDescription))) {
            throw new InvalidArgumentException($midocoOrdCriteriaTypeCategoryDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaTypeCategoryDescription = $midocoOrdCriteriaTypeCategoryDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaTypeCategoryDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDescrDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdCriteriaTypeCategoryDescriptionsResponse
     */
    public function addToMidocoOrdCriteriaTypeCategoryDescription(\Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDescrDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDescrDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaTypeCategoryDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrdCritTypeCatDescrDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaTypeCategoryDescription[] = $item;
        
        return $this;
    }
}
