<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentNatureDescriptionsResponse StructType
 * @subpackage Structs
 */
class GetDocumentNatureDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoDocumentNatureDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDocumentNatureDescription
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureDescriptionType[]
     */
    protected array $MidocoDocumentNatureDescription = [];
    /**
     * Constructor method for GetDocumentNatureDescriptionsResponse
     * @uses GetDocumentNatureDescriptionsResponse::setMidocoDocumentNatureDescription()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureDescriptionType[] $midocoDocumentNatureDescription
     */
    public function __construct(array $midocoDocumentNatureDescription = [])
    {
        $this
            ->setMidocoDocumentNatureDescription($midocoDocumentNatureDescription);
    }
    /**
     * Get MidocoDocumentNatureDescription value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureDescriptionType[]
     */
    public function getMidocoDocumentNatureDescription(): array
    {
        return $this->MidocoDocumentNatureDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDocumentNatureDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDocumentNatureDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDocumentNatureDescriptionForArrayConstraintsFromSetMidocoDocumentNatureDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDocumentNatureDescriptionsResponseMidocoDocumentNatureDescriptionItem) {
            // validation for constraint: itemType
            if (!$getDocumentNatureDescriptionsResponseMidocoDocumentNatureDescriptionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureDescriptionType) {
                $invalidValues[] = is_object($getDocumentNatureDescriptionsResponseMidocoDocumentNatureDescriptionItem) ? get_class($getDocumentNatureDescriptionsResponseMidocoDocumentNatureDescriptionItem) : sprintf('%s(%s)', gettype($getDocumentNatureDescriptionsResponseMidocoDocumentNatureDescriptionItem), var_export($getDocumentNatureDescriptionsResponseMidocoDocumentNatureDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDocumentNatureDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureDescriptionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDocumentNatureDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureDescriptionType[] $midocoDocumentNatureDescription
     * @return \Pggns\MidocoApi\Order\StructType\GetDocumentNatureDescriptionsResponse
     */
    public function setMidocoDocumentNatureDescription(array $midocoDocumentNatureDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDocumentNatureDescriptionArrayErrorMessage = self::validateMidocoDocumentNatureDescriptionForArrayConstraintsFromSetMidocoDocumentNatureDescription($midocoDocumentNatureDescription))) {
            throw new InvalidArgumentException($midocoDocumentNatureDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoDocumentNatureDescription = $midocoDocumentNatureDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoDocumentNatureDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureDescriptionType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetDocumentNatureDescriptionsResponse
     */
    public function addToMidocoDocumentNatureDescription(\Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureDescriptionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureDescriptionType) {
            throw new InvalidArgumentException(sprintf('The MidocoDocumentNatureDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureDescriptionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDocumentNatureDescription[] = $item;
        
        return $this;
    }
}
