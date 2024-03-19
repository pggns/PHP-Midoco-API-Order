<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMarketingKeysLocalizedForTypeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMarketingKeysLocalizedForTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoMarketingKeyLocalized
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMarketingKeyLocalized
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMarketingKeyLocalized[]
     */
    protected ?array $MidocoMarketingKeyLocalized = null;
    /**
     * Constructor method for GetMarketingKeysLocalizedForTypeResponse
     * @uses GetMarketingKeysLocalizedForTypeResponse::setMidocoMarketingKeyLocalized()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMarketingKeyLocalized[] $midocoMarketingKeyLocalized
     */
    public function __construct(?array $midocoMarketingKeyLocalized = null)
    {
        $this
            ->setMidocoMarketingKeyLocalized($midocoMarketingKeyLocalized);
    }
    /**
     * Get MidocoMarketingKeyLocalized value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMarketingKeyLocalized[]
     */
    public function getMidocoMarketingKeyLocalized(): ?array
    {
        return $this->MidocoMarketingKeyLocalized;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMarketingKeyLocalized method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarketingKeyLocalized method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarketingKeyLocalizedForArrayConstraintFromSetMidocoMarketingKeyLocalized(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMarketingKeysLocalizedForTypeResponseMidocoMarketingKeyLocalizedItem) {
            // validation for constraint: itemType
            if (!$getMarketingKeysLocalizedForTypeResponseMidocoMarketingKeyLocalizedItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMarketingKeyLocalized) {
                $invalidValues[] = is_object($getMarketingKeysLocalizedForTypeResponseMidocoMarketingKeyLocalizedItem) ? get_class($getMarketingKeysLocalizedForTypeResponseMidocoMarketingKeyLocalizedItem) : sprintf('%s(%s)', gettype($getMarketingKeysLocalizedForTypeResponseMidocoMarketingKeyLocalizedItem), var_export($getMarketingKeysLocalizedForTypeResponseMidocoMarketingKeyLocalizedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarketingKeyLocalized property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMarketingKeyLocalized, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarketingKeyLocalized value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMarketingKeyLocalized[] $midocoMarketingKeyLocalized
     * @return \Pggns\MidocoApi\Order\StructType\GetMarketingKeysLocalizedForTypeResponse
     */
    public function setMidocoMarketingKeyLocalized(?array $midocoMarketingKeyLocalized = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarketingKeyLocalizedArrayErrorMessage = self::validateMidocoMarketingKeyLocalizedForArrayConstraintFromSetMidocoMarketingKeyLocalized($midocoMarketingKeyLocalized))) {
            throw new InvalidArgumentException($midocoMarketingKeyLocalizedArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarketingKeyLocalized = $midocoMarketingKeyLocalized;
        
        return $this;
    }
    /**
     * Add item to MidocoMarketingKeyLocalized value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMarketingKeyLocalized $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMarketingKeysLocalizedForTypeResponse
     */
    public function addToMidocoMarketingKeyLocalized(\Pggns\MidocoApi\Order\StructType\MidocoMarketingKeyLocalized $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMarketingKeyLocalized) {
            throw new InvalidArgumentException(sprintf('The MidocoMarketingKeyLocalized property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMarketingKeyLocalized, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarketingKeyLocalized[] = $item;
        
        return $this;
    }
}
