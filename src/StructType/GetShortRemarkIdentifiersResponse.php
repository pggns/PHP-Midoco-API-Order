<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShortRemarkIdentifiersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetShortRemarkIdentifiersResponse extends AbstractStructBase
{
    /**
     * The MidocoTextRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTextRemark
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTextRemark[]
     */
    protected ?array $MidocoTextRemark = null;
    /**
     * Constructor method for GetShortRemarkIdentifiersResponse
     * @uses GetShortRemarkIdentifiersResponse::setMidocoTextRemark()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTextRemark[] $midocoTextRemark
     */
    public function __construct(?array $midocoTextRemark = null)
    {
        $this
            ->setMidocoTextRemark($midocoTextRemark);
    }
    /**
     * Get MidocoTextRemark value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark[]
     */
    public function getMidocoTextRemark(): ?array
    {
        return $this->MidocoTextRemark;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTextRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTextRemark method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTextRemarkForArrayConstraintFromSetMidocoTextRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getShortRemarkIdentifiersResponseMidocoTextRemarkItem) {
            // validation for constraint: itemType
            if (!$getShortRemarkIdentifiersResponseMidocoTextRemarkItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTextRemark) {
                $invalidValues[] = is_object($getShortRemarkIdentifiersResponseMidocoTextRemarkItem) ? get_class($getShortRemarkIdentifiersResponseMidocoTextRemarkItem) : sprintf('%s(%s)', gettype($getShortRemarkIdentifiersResponseMidocoTextRemarkItem), var_export($getShortRemarkIdentifiersResponseMidocoTextRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTextRemark property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTextRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTextRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTextRemark[] $midocoTextRemark
     * @return \Pggns\MidocoApi\Order\StructType\GetShortRemarkIdentifiersResponse
     */
    public function setMidocoTextRemark(?array $midocoTextRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTextRemarkArrayErrorMessage = self::validateMidocoTextRemarkForArrayConstraintFromSetMidocoTextRemark($midocoTextRemark))) {
            throw new InvalidArgumentException($midocoTextRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoTextRemark = $midocoTextRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoTextRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTextRemark $item
     * @return \Pggns\MidocoApi\Order\StructType\GetShortRemarkIdentifiersResponse
     */
    public function addToMidocoTextRemark(\Pggns\MidocoApi\Order\StructType\MidocoTextRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTextRemark) {
            throw new InvalidArgumentException(sprintf('The MidocoTextRemark property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTextRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTextRemark[] = $item;
        
        return $this;
    }
}
