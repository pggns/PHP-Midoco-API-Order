<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoTemplateTypesResponse StructType
 * @subpackage Structs
 */
class GetMidocoTemplateTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoTemplateType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTemplateType
     * @var \Pggns\MidocoApi\Order\StructType\TemplateTypeDTO[]
     */
    protected array $MidocoTemplateType = [];
    /**
     * Constructor method for GetMidocoTemplateTypesResponse
     * @uses GetMidocoTemplateTypesResponse::setMidocoTemplateType()
     * @param \Pggns\MidocoApi\Order\StructType\TemplateTypeDTO[] $midocoTemplateType
     */
    public function __construct(array $midocoTemplateType = [])
    {
        $this
            ->setMidocoTemplateType($midocoTemplateType);
    }
    /**
     * Get MidocoTemplateType value
     * @return \Pggns\MidocoApi\Order\StructType\TemplateTypeDTO[]
     */
    public function getMidocoTemplateType(): array
    {
        return $this->MidocoTemplateType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTemplateType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTemplateType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTemplateTypeForArrayConstraintsFromSetMidocoTemplateType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoTemplateTypesResponseMidocoTemplateTypeItem) {
            // validation for constraint: itemType
            if (!$getMidocoTemplateTypesResponseMidocoTemplateTypeItem instanceof \Pggns\MidocoApi\Order\StructType\TemplateTypeDTO) {
                $invalidValues[] = is_object($getMidocoTemplateTypesResponseMidocoTemplateTypeItem) ? get_class($getMidocoTemplateTypesResponseMidocoTemplateTypeItem) : sprintf('%s(%s)', gettype($getMidocoTemplateTypesResponseMidocoTemplateTypeItem), var_export($getMidocoTemplateTypesResponseMidocoTemplateTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTemplateType property can only contain items of type \Pggns\MidocoApi\Order\StructType\TemplateTypeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTemplateType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TemplateTypeDTO[] $midocoTemplateType
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoTemplateTypesResponse
     */
    public function setMidocoTemplateType(array $midocoTemplateType = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTemplateTypeArrayErrorMessage = self::validateMidocoTemplateTypeForArrayConstraintsFromSetMidocoTemplateType($midocoTemplateType))) {
            throw new InvalidArgumentException($midocoTemplateTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoTemplateType = $midocoTemplateType;
        
        return $this;
    }
    /**
     * Add item to MidocoTemplateType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TemplateTypeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoTemplateTypesResponse
     */
    public function addToMidocoTemplateType(\Pggns\MidocoApi\Order\StructType\TemplateTypeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TemplateTypeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTemplateType property can only contain items of type \Pggns\MidocoApi\Order\StructType\TemplateTypeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTemplateType[] = $item;
        
        return $this;
    }
}
