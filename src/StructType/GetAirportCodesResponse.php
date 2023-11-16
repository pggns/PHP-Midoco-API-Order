<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAirportCodesResponse StructType
 * @subpackage Structs
 */
class GetAirportCodesResponse extends AbstractStructBase
{
    /**
     * The MidocoAirportCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAirportCode
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAirportCode[]
     */
    protected array $MidocoAirportCode = [];
    /**
     * Constructor method for GetAirportCodesResponse
     * @uses GetAirportCodesResponse::setMidocoAirportCode()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAirportCode[] $midocoAirportCode
     */
    public function __construct(array $midocoAirportCode = [])
    {
        $this
            ->setMidocoAirportCode($midocoAirportCode);
    }
    /**
     * Get MidocoAirportCode value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAirportCode[]
     */
    public function getMidocoAirportCode(): array
    {
        return $this->MidocoAirportCode;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAirportCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAirportCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAirportCodeForArrayConstraintsFromSetMidocoAirportCode(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAirportCodesResponseMidocoAirportCodeItem) {
            // validation for constraint: itemType
            if (!$getAirportCodesResponseMidocoAirportCodeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAirportCode) {
                $invalidValues[] = is_object($getAirportCodesResponseMidocoAirportCodeItem) ? get_class($getAirportCodesResponseMidocoAirportCodeItem) : sprintf('%s(%s)', gettype($getAirportCodesResponseMidocoAirportCodeItem), var_export($getAirportCodesResponseMidocoAirportCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAirportCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAirportCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAirportCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAirportCode[] $midocoAirportCode
     * @return \Pggns\MidocoApi\Order\StructType\GetAirportCodesResponse
     */
    public function setMidocoAirportCode(array $midocoAirportCode = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAirportCodeArrayErrorMessage = self::validateMidocoAirportCodeForArrayConstraintsFromSetMidocoAirportCode($midocoAirportCode))) {
            throw new InvalidArgumentException($midocoAirportCodeArrayErrorMessage, __LINE__);
        }
        $this->MidocoAirportCode = $midocoAirportCode;
        
        return $this;
    }
    /**
     * Add item to MidocoAirportCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAirportCode $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAirportCodesResponse
     */
    public function addToMidocoAirportCode(\Pggns\MidocoApi\Order\StructType\MidocoAirportCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAirportCode) {
            throw new InvalidArgumentException(sprintf('The MidocoAirportCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAirportCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAirportCode[] = $item;
        
        return $this;
    }
}
