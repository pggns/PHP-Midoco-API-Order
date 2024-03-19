<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccomodationCodesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAccomodationCodesResponse extends AbstractStructBase
{
    /**
     * The MidocoAccomodationCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAccomodationCode
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode[]
     */
    protected ?array $MidocoAccomodationCode = null;
    /**
     * Constructor method for GetAccomodationCodesResponse
     * @uses GetAccomodationCodesResponse::setMidocoAccomodationCode()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode[] $midocoAccomodationCode
     */
    public function __construct(?array $midocoAccomodationCode = null)
    {
        $this
            ->setMidocoAccomodationCode($midocoAccomodationCode);
    }
    /**
     * Get MidocoAccomodationCode value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode[]
     */
    public function getMidocoAccomodationCode(): ?array
    {
        return $this->MidocoAccomodationCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAccomodationCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAccomodationCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAccomodationCodeForArrayConstraintFromSetMidocoAccomodationCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAccomodationCodesResponseMidocoAccomodationCodeItem) {
            // validation for constraint: itemType
            if (!$getAccomodationCodesResponseMidocoAccomodationCodeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode) {
                $invalidValues[] = is_object($getAccomodationCodesResponseMidocoAccomodationCodeItem) ? get_class($getAccomodationCodesResponseMidocoAccomodationCodeItem) : sprintf('%s(%s)', gettype($getAccomodationCodesResponseMidocoAccomodationCodeItem), var_export($getAccomodationCodesResponseMidocoAccomodationCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAccomodationCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAccomodationCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode[] $midocoAccomodationCode
     * @return \Pggns\MidocoApi\Order\StructType\GetAccomodationCodesResponse
     */
    public function setMidocoAccomodationCode(?array $midocoAccomodationCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAccomodationCodeArrayErrorMessage = self::validateMidocoAccomodationCodeForArrayConstraintFromSetMidocoAccomodationCode($midocoAccomodationCode))) {
            throw new InvalidArgumentException($midocoAccomodationCodeArrayErrorMessage, __LINE__);
        }
        $this->MidocoAccomodationCode = $midocoAccomodationCode;
        
        return $this;
    }
    /**
     * Add item to MidocoAccomodationCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAccomodationCodesResponse
     */
    public function addToMidocoAccomodationCode(\Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode) {
            throw new InvalidArgumentException(sprintf('The MidocoAccomodationCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAccomodationCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAccomodationCode[] = $item;
        
        return $this;
    }
}
