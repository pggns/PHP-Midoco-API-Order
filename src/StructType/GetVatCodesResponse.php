<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatCodesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVatCodesResponse extends AbstractStructBase
{
    /**
     * The MidocoVatCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVatCode
     * @var \Pggns\MidocoApi\Order\StructType\MidocoVatCode[]
     */
    protected ?array $MidocoVatCode = null;
    /**
     * Constructor method for GetVatCodesResponse
     * @uses GetVatCodesResponse::setMidocoVatCode()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatCode[] $midocoVatCode
     */
    public function __construct(?array $midocoVatCode = null)
    {
        $this
            ->setMidocoVatCode($midocoVatCode);
    }
    /**
     * Get MidocoVatCode value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVatCode[]
     */
    public function getMidocoVatCode(): ?array
    {
        return $this->MidocoVatCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVatCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatCodeForArrayConstraintFromSetMidocoVatCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVatCodesResponseMidocoVatCodeItem) {
            // validation for constraint: itemType
            if (!$getVatCodesResponseMidocoVatCodeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoVatCode) {
                $invalidValues[] = is_object($getVatCodesResponseMidocoVatCodeItem) ? get_class($getVatCodesResponseMidocoVatCodeItem) : sprintf('%s(%s)', gettype($getVatCodesResponseMidocoVatCodeItem), var_export($getVatCodesResponseMidocoVatCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoVatCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatCode[] $midocoVatCode
     * @return \Pggns\MidocoApi\Order\StructType\GetVatCodesResponse
     */
    public function setMidocoVatCode(?array $midocoVatCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatCodeArrayErrorMessage = self::validateMidocoVatCodeForArrayConstraintFromSetMidocoVatCode($midocoVatCode))) {
            throw new InvalidArgumentException($midocoVatCodeArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatCode = $midocoVatCode;
        
        return $this;
    }
    /**
     * Add item to MidocoVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVatCode $item
     * @return \Pggns\MidocoApi\Order\StructType\GetVatCodesResponse
     */
    public function addToMidocoVatCode(\Pggns\MidocoApi\Order\StructType\MidocoVatCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoVatCode) {
            throw new InvalidArgumentException(sprintf('The MidocoVatCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoVatCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatCode[] = $item;
        
        return $this;
    }
}
