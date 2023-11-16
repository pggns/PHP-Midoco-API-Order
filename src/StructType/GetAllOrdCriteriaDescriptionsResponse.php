<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllOrdCriteriaDescriptionsResponse StructType
 * @subpackage Structs
 */
class GetAllOrdCriteriaDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaDescription
     * @var \Pggns\MidocoApi\Order\StructType\OrdCriteriaDescriptionDTO[]
     */
    protected array $MidocoOrdCriteriaDescription = [];
    /**
     * Constructor method for GetAllOrdCriteriaDescriptionsResponse
     * @uses GetAllOrdCriteriaDescriptionsResponse::setMidocoOrdCriteriaDescription()
     * @param \Pggns\MidocoApi\Order\StructType\OrdCriteriaDescriptionDTO[] $midocoOrdCriteriaDescription
     */
    public function __construct(array $midocoOrdCriteriaDescription = [])
    {
        $this
            ->setMidocoOrdCriteriaDescription($midocoOrdCriteriaDescription);
    }
    /**
     * Get MidocoOrdCriteriaDescription value
     * @return \Pggns\MidocoApi\Order\StructType\OrdCriteriaDescriptionDTO[]
     */
    public function getMidocoOrdCriteriaDescription(): array
    {
        return $this->MidocoOrdCriteriaDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrdCriteriaDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaDescriptionForArrayConstraintsFromSetMidocoOrdCriteriaDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllOrdCriteriaDescriptionsResponseMidocoOrdCriteriaDescriptionItem) {
            // validation for constraint: itemType
            if (!$getAllOrdCriteriaDescriptionsResponseMidocoOrdCriteriaDescriptionItem instanceof \Pggns\MidocoApi\Order\StructType\OrdCriteriaDescriptionDTO) {
                $invalidValues[] = is_object($getAllOrdCriteriaDescriptionsResponseMidocoOrdCriteriaDescriptionItem) ? get_class($getAllOrdCriteriaDescriptionsResponseMidocoOrdCriteriaDescriptionItem) : sprintf('%s(%s)', gettype($getAllOrdCriteriaDescriptionsResponseMidocoOrdCriteriaDescriptionItem), var_export($getAllOrdCriteriaDescriptionsResponseMidocoOrdCriteriaDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrdCriteriaDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrdCriteriaDescriptionDTO[] $midocoOrdCriteriaDescription
     * @return \Pggns\MidocoApi\Order\StructType\GetAllOrdCriteriaDescriptionsResponse
     */
    public function setMidocoOrdCriteriaDescription(array $midocoOrdCriteriaDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaDescriptionArrayErrorMessage = self::validateMidocoOrdCriteriaDescriptionForArrayConstraintsFromSetMidocoOrdCriteriaDescription($midocoOrdCriteriaDescription))) {
            throw new InvalidArgumentException($midocoOrdCriteriaDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaDescription = $midocoOrdCriteriaDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrdCriteriaDescriptionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAllOrdCriteriaDescriptionsResponse
     */
    public function addToMidocoOrdCriteriaDescription(\Pggns\MidocoApi\Order\StructType\OrdCriteriaDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\OrdCriteriaDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrdCriteriaDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaDescription[] = $item;
        
        return $this;
    }
}
