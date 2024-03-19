<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeliveriesForCultureResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getDeliveriesForCulture --- returns the delievery types descriptions translated for the given culture
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDeliveriesForCultureResponse extends AbstractStructBase
{
    /**
     * The MidocoDeliveryTypeDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDeliveryTypeDescription
     * @var \Pggns\MidocoApi\Order\StructType\DeliveryTypeDescriptionDTO[]
     */
    protected ?array $MidocoDeliveryTypeDescription = null;
    /**
     * Constructor method for GetDeliveriesForCultureResponse
     * @uses GetDeliveriesForCultureResponse::setMidocoDeliveryTypeDescription()
     * @param \Pggns\MidocoApi\Order\StructType\DeliveryTypeDescriptionDTO[] $midocoDeliveryTypeDescription
     */
    public function __construct(?array $midocoDeliveryTypeDescription = null)
    {
        $this
            ->setMidocoDeliveryTypeDescription($midocoDeliveryTypeDescription);
    }
    /**
     * Get MidocoDeliveryTypeDescription value
     * @return \Pggns\MidocoApi\Order\StructType\DeliveryTypeDescriptionDTO[]
     */
    public function getMidocoDeliveryTypeDescription(): ?array
    {
        return $this->MidocoDeliveryTypeDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDeliveryTypeDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDeliveryTypeDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDeliveryTypeDescriptionForArrayConstraintFromSetMidocoDeliveryTypeDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDeliveriesForCultureResponseMidocoDeliveryTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$getDeliveriesForCultureResponseMidocoDeliveryTypeDescriptionItem instanceof \Pggns\MidocoApi\Order\StructType\DeliveryTypeDescriptionDTO) {
                $invalidValues[] = is_object($getDeliveriesForCultureResponseMidocoDeliveryTypeDescriptionItem) ? get_class($getDeliveriesForCultureResponseMidocoDeliveryTypeDescriptionItem) : sprintf('%s(%s)', gettype($getDeliveriesForCultureResponseMidocoDeliveryTypeDescriptionItem), var_export($getDeliveriesForCultureResponseMidocoDeliveryTypeDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDeliveryTypeDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\DeliveryTypeDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDeliveryTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DeliveryTypeDescriptionDTO[] $midocoDeliveryTypeDescription
     * @return \Pggns\MidocoApi\Order\StructType\GetDeliveriesForCultureResponse
     */
    public function setMidocoDeliveryTypeDescription(?array $midocoDeliveryTypeDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDeliveryTypeDescriptionArrayErrorMessage = self::validateMidocoDeliveryTypeDescriptionForArrayConstraintFromSetMidocoDeliveryTypeDescription($midocoDeliveryTypeDescription))) {
            throw new InvalidArgumentException($midocoDeliveryTypeDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoDeliveryTypeDescription = $midocoDeliveryTypeDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoDeliveryTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DeliveryTypeDescriptionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetDeliveriesForCultureResponse
     */
    public function addToMidocoDeliveryTypeDescription(\Pggns\MidocoApi\Order\StructType\DeliveryTypeDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\DeliveryTypeDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDeliveryTypeDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\DeliveryTypeDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDeliveryTypeDescription[] = $item;
        
        return $this;
    }
}
