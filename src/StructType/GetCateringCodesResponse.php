<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCateringCodesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCateringCodesResponse extends AbstractStructBase
{
    /**
     * The MidocoCateringCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCateringCode
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCateringCode[]
     */
    protected ?array $MidocoCateringCode = null;
    /**
     * Constructor method for GetCateringCodesResponse
     * @uses GetCateringCodesResponse::setMidocoCateringCode()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCateringCode[] $midocoCateringCode
     */
    public function __construct(?array $midocoCateringCode = null)
    {
        $this
            ->setMidocoCateringCode($midocoCateringCode);
    }
    /**
     * Get MidocoCateringCode value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCateringCode[]
     */
    public function getMidocoCateringCode(): ?array
    {
        return $this->MidocoCateringCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCateringCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCateringCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCateringCodeForArrayConstraintFromSetMidocoCateringCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCateringCodesResponseMidocoCateringCodeItem) {
            // validation for constraint: itemType
            if (!$getCateringCodesResponseMidocoCateringCodeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCateringCode) {
                $invalidValues[] = is_object($getCateringCodesResponseMidocoCateringCodeItem) ? get_class($getCateringCodesResponseMidocoCateringCodeItem) : sprintf('%s(%s)', gettype($getCateringCodesResponseMidocoCateringCodeItem), var_export($getCateringCodesResponseMidocoCateringCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCateringCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCateringCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCateringCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCateringCode[] $midocoCateringCode
     * @return \Pggns\MidocoApi\Order\StructType\GetCateringCodesResponse
     */
    public function setMidocoCateringCode(?array $midocoCateringCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCateringCodeArrayErrorMessage = self::validateMidocoCateringCodeForArrayConstraintFromSetMidocoCateringCode($midocoCateringCode))) {
            throw new InvalidArgumentException($midocoCateringCodeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCateringCode = $midocoCateringCode;
        
        return $this;
    }
    /**
     * Add item to MidocoCateringCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCateringCode $item
     * @return \Pggns\MidocoApi\Order\StructType\GetCateringCodesResponse
     */
    public function addToMidocoCateringCode(\Pggns\MidocoApi\Order\StructType\MidocoCateringCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCateringCode) {
            throw new InvalidArgumentException(sprintf('The MidocoCateringCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCateringCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCateringCode[] = $item;
        
        return $this;
    }
}
