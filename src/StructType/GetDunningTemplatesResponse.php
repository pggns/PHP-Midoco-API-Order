<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDunningTemplatesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDunningTemplatesResponse extends AbstractStructBase
{
    /**
     * The MidocoDunningTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDunningTemplate
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate[]
     */
    protected ?array $MidocoDunningTemplate = null;
    /**
     * Constructor method for GetDunningTemplatesResponse
     * @uses GetDunningTemplatesResponse::setMidocoDunningTemplate()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate[] $midocoDunningTemplate
     */
    public function __construct(?array $midocoDunningTemplate = null)
    {
        $this
            ->setMidocoDunningTemplate($midocoDunningTemplate);
    }
    /**
     * Get MidocoDunningTemplate value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate[]
     */
    public function getMidocoDunningTemplate(): ?array
    {
        return $this->MidocoDunningTemplate;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDunningTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDunningTemplate method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDunningTemplateForArrayConstraintFromSetMidocoDunningTemplate(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDunningTemplatesResponseMidocoDunningTemplateItem) {
            // validation for constraint: itemType
            if (!$getDunningTemplatesResponseMidocoDunningTemplateItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate) {
                $invalidValues[] = is_object($getDunningTemplatesResponseMidocoDunningTemplateItem) ? get_class($getDunningTemplatesResponseMidocoDunningTemplateItem) : sprintf('%s(%s)', gettype($getDunningTemplatesResponseMidocoDunningTemplateItem), var_export($getDunningTemplatesResponseMidocoDunningTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDunningTemplate property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDunningTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate[] $midocoDunningTemplate
     * @return \Pggns\MidocoApi\Order\StructType\GetDunningTemplatesResponse
     */
    public function setMidocoDunningTemplate(?array $midocoDunningTemplate = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDunningTemplateArrayErrorMessage = self::validateMidocoDunningTemplateForArrayConstraintFromSetMidocoDunningTemplate($midocoDunningTemplate))) {
            throw new InvalidArgumentException($midocoDunningTemplateArrayErrorMessage, __LINE__);
        }
        $this->MidocoDunningTemplate = $midocoDunningTemplate;
        
        return $this;
    }
    /**
     * Add item to MidocoDunningTemplate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $item
     * @return \Pggns\MidocoApi\Order\StructType\GetDunningTemplatesResponse
     */
    public function addToMidocoDunningTemplate(\Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate) {
            throw new InvalidArgumentException(sprintf('The MidocoDunningTemplate property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDunningTemplate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDunningTemplate[] = $item;
        
        return $this;
    }
}
