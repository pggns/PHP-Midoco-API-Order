<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoTemplatesResponse StructType
 * @subpackage Structs
 */
class GetMidocoTemplatesResponse extends AbstractStructBase
{
    /**
     * The MidocoTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTemplate
     * @var \Pggns\MidocoApi\Order\StructType\TemplateDTO[]
     */
    protected array $MidocoTemplate = [];
    /**
     * Constructor method for GetMidocoTemplatesResponse
     * @uses GetMidocoTemplatesResponse::setMidocoTemplate()
     * @param \Pggns\MidocoApi\Order\StructType\TemplateDTO[] $midocoTemplate
     */
    public function __construct(array $midocoTemplate = [])
    {
        $this
            ->setMidocoTemplate($midocoTemplate);
    }
    /**
     * Get MidocoTemplate value
     * @return \Pggns\MidocoApi\Order\StructType\TemplateDTO[]
     */
    public function getMidocoTemplate(): array
    {
        return $this->MidocoTemplate;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTemplate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTemplateForArrayConstraintsFromSetMidocoTemplate(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoTemplatesResponseMidocoTemplateItem) {
            // validation for constraint: itemType
            if (!$getMidocoTemplatesResponseMidocoTemplateItem instanceof \Pggns\MidocoApi\Order\StructType\TemplateDTO) {
                $invalidValues[] = is_object($getMidocoTemplatesResponseMidocoTemplateItem) ? get_class($getMidocoTemplatesResponseMidocoTemplateItem) : sprintf('%s(%s)', gettype($getMidocoTemplatesResponseMidocoTemplateItem), var_export($getMidocoTemplatesResponseMidocoTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTemplate property can only contain items of type \Pggns\MidocoApi\Order\StructType\TemplateDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TemplateDTO[] $midocoTemplate
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoTemplatesResponse
     */
    public function setMidocoTemplate(array $midocoTemplate = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTemplateArrayErrorMessage = self::validateMidocoTemplateForArrayConstraintsFromSetMidocoTemplate($midocoTemplate))) {
            throw new InvalidArgumentException($midocoTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoTemplate = $midocoTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TemplateDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoTemplatesResponse
     */
    public function addToMidocoTemplate(\Pggns\MidocoApi\Order\StructType\TemplateDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TemplateDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTemplate property can only contain items of type \Pggns\MidocoApi\Order\StructType\TemplateDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTemplate[] = $item;
        
        return $this;
    }
}
