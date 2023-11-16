<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentNaturesResponse StructType
 * @subpackage Structs
 */
class GetDocumentNaturesResponse extends AbstractStructBase
{
    /**
     * The MidocoDocumentNature
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDocumentNature
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureType[]
     */
    protected array $MidocoDocumentNature = [];
    /**
     * Constructor method for GetDocumentNaturesResponse
     * @uses GetDocumentNaturesResponse::setMidocoDocumentNature()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureType[] $midocoDocumentNature
     */
    public function __construct(array $midocoDocumentNature = [])
    {
        $this
            ->setMidocoDocumentNature($midocoDocumentNature);
    }
    /**
     * Get MidocoDocumentNature value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureType[]
     */
    public function getMidocoDocumentNature(): array
    {
        return $this->MidocoDocumentNature;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDocumentNature method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDocumentNature method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDocumentNatureForArrayConstraintsFromSetMidocoDocumentNature(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDocumentNaturesResponseMidocoDocumentNatureItem) {
            // validation for constraint: itemType
            if (!$getDocumentNaturesResponseMidocoDocumentNatureItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureType) {
                $invalidValues[] = is_object($getDocumentNaturesResponseMidocoDocumentNatureItem) ? get_class($getDocumentNaturesResponseMidocoDocumentNatureItem) : sprintf('%s(%s)', gettype($getDocumentNaturesResponseMidocoDocumentNatureItem), var_export($getDocumentNaturesResponseMidocoDocumentNatureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDocumentNature property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDocumentNature value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureType[] $midocoDocumentNature
     * @return \Pggns\MidocoApi\Order\StructType\GetDocumentNaturesResponse
     */
    public function setMidocoDocumentNature(array $midocoDocumentNature = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDocumentNatureArrayErrorMessage = self::validateMidocoDocumentNatureForArrayConstraintsFromSetMidocoDocumentNature($midocoDocumentNature))) {
            throw new InvalidArgumentException($midocoDocumentNatureArrayErrorMessage, __LINE__);
        }
        $this->MidocoDocumentNature = $midocoDocumentNature;
        
        return $this;
    }
    /**
     * Add item to MidocoDocumentNature value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetDocumentNaturesResponse
     */
    public function addToMidocoDocumentNature(\Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureType) {
            throw new InvalidArgumentException(sprintf('The MidocoDocumentNature property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDocumentNature[] = $item;
        
        return $this;
    }
}
