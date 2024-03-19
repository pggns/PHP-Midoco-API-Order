<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMarketingKeyDescriptionsForTypeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMarketingKeyDescriptionsForTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoMarketingKeyDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMarketingKeyDescription
     * @var \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType[]
     */
    protected ?array $MidocoMarketingKeyDescription = null;
    /**
     * Constructor method for GetMarketingKeyDescriptionsForTypeResponse
     * @uses GetMarketingKeyDescriptionsForTypeResponse::setMidocoMarketingKeyDescription()
     * @param \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType[] $midocoMarketingKeyDescription
     */
    public function __construct(?array $midocoMarketingKeyDescription = null)
    {
        $this
            ->setMidocoMarketingKeyDescription($midocoMarketingKeyDescription);
    }
    /**
     * Get MidocoMarketingKeyDescription value
     * @return \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType[]
     */
    public function getMidocoMarketingKeyDescription(): ?array
    {
        return $this->MidocoMarketingKeyDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMarketingKeyDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarketingKeyDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarketingKeyDescriptionForArrayConstraintFromSetMidocoMarketingKeyDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMarketingKeyDescriptionsForTypeResponseMidocoMarketingKeyDescriptionItem) {
            // validation for constraint: itemType
            if (!$getMarketingKeyDescriptionsForTypeResponseMidocoMarketingKeyDescriptionItem instanceof \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType) {
                $invalidValues[] = is_object($getMarketingKeyDescriptionsForTypeResponseMidocoMarketingKeyDescriptionItem) ? get_class($getMarketingKeyDescriptionsForTypeResponseMidocoMarketingKeyDescriptionItem) : sprintf('%s(%s)', gettype($getMarketingKeyDescriptionsForTypeResponseMidocoMarketingKeyDescriptionItem), var_export($getMarketingKeyDescriptionsForTypeResponseMidocoMarketingKeyDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarketingKeyDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarketingKeyDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType[] $midocoMarketingKeyDescription
     * @return \Pggns\MidocoApi\Order\StructType\GetMarketingKeyDescriptionsForTypeResponse
     */
    public function setMidocoMarketingKeyDescription(?array $midocoMarketingKeyDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarketingKeyDescriptionArrayErrorMessage = self::validateMidocoMarketingKeyDescriptionForArrayConstraintFromSetMidocoMarketingKeyDescription($midocoMarketingKeyDescription))) {
            throw new InvalidArgumentException($midocoMarketingKeyDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarketingKeyDescription = $midocoMarketingKeyDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoMarketingKeyDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMarketingKeyDescriptionsForTypeResponse
     */
    public function addToMidocoMarketingKeyDescription(\Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType) {
            throw new InvalidArgumentException(sprintf('The MidocoMarketingKeyDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\MarketingKeyDescriptionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarketingKeyDescription[] = $item;
        
        return $this;
    }
}
