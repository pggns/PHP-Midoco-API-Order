<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatDivisionTemplatesResponse StructType
 * @subpackage Structs
 */
class GetVatDivisionTemplatesResponse extends AbstractStructBase
{
    /**
     * The MidocoVatDivisionTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVatDivisionTemplate
     * @var \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType[]
     */
    protected array $MidocoVatDivisionTemplate = [];
    /**
     * Constructor method for GetVatDivisionTemplatesResponse
     * @uses GetVatDivisionTemplatesResponse::setMidocoVatDivisionTemplate()
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType[] $midocoVatDivisionTemplate
     */
    public function __construct(array $midocoVatDivisionTemplate = [])
    {
        $this
            ->setMidocoVatDivisionTemplate($midocoVatDivisionTemplate);
    }
    /**
     * Get MidocoVatDivisionTemplate value
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType[]
     */
    public function getMidocoVatDivisionTemplate(): array
    {
        return $this->MidocoVatDivisionTemplate;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVatDivisionTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatDivisionTemplate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatDivisionTemplateForArrayConstraintsFromSetMidocoVatDivisionTemplate(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVatDivisionTemplatesResponseMidocoVatDivisionTemplateItem) {
            // validation for constraint: itemType
            if (!$getVatDivisionTemplatesResponseMidocoVatDivisionTemplateItem instanceof \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType) {
                $invalidValues[] = is_object($getVatDivisionTemplatesResponseMidocoVatDivisionTemplateItem) ? get_class($getVatDivisionTemplatesResponseMidocoVatDivisionTemplateItem) : sprintf('%s(%s)', gettype($getVatDivisionTemplatesResponseMidocoVatDivisionTemplateItem), var_export($getVatDivisionTemplatesResponseMidocoVatDivisionTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatDivisionTemplate property can only contain items of type \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatDivisionTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType[] $midocoVatDivisionTemplate
     * @return \Pggns\MidocoApi\Order\StructType\GetVatDivisionTemplatesResponse
     */
    public function setMidocoVatDivisionTemplate(array $midocoVatDivisionTemplate = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatDivisionTemplateArrayErrorMessage = self::validateMidocoVatDivisionTemplateForArrayConstraintsFromSetMidocoVatDivisionTemplate($midocoVatDivisionTemplate))) {
            throw new InvalidArgumentException($midocoVatDivisionTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatDivisionTemplate = $midocoVatDivisionTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoVatDivisionTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetVatDivisionTemplatesResponse
     */
    public function addToMidocoVatDivisionTemplate(\Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType) {
            throw new InvalidArgumentException(sprintf('The MidocoVatDivisionTemplate property can only contain items of type \Pggns\MidocoApi\Order\StructType\VatDivisionTemplateType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatDivisionTemplate[] = $item;
        
        return $this;
    }
}
