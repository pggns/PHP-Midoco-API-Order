<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTravelDocsPrintJobInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTravelDocsPrintJobInfo extends AbstractStructBase
{
    /**
     * The MidocoTravelDocsPrintInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelDocsPrintInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo $MidocoTravelDocsPrintInfo = null;
    /**
     * The MidocoPrintSelect
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: system:MidocoPrintSelect
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[]
     */
    protected ?array $MidocoPrintSelect = null;
    /**
     * Constructor method for MidocoTravelDocsPrintJobInfo
     * @uses MidocoTravelDocsPrintJobInfo::setMidocoTravelDocsPrintInfo()
     * @uses MidocoTravelDocsPrintJobInfo::setMidocoPrintSelect()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo $midocoTravelDocsPrintInfo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[] $midocoPrintSelect
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo $midocoTravelDocsPrintInfo = null, ?array $midocoPrintSelect = null)
    {
        $this
            ->setMidocoTravelDocsPrintInfo($midocoTravelDocsPrintInfo)
            ->setMidocoPrintSelect($midocoPrintSelect);
    }
    /**
     * Get MidocoTravelDocsPrintInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo|null
     */
    public function getMidocoTravelDocsPrintInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo
    {
        return $this->MidocoTravelDocsPrintInfo;
    }
    /**
     * Set MidocoTravelDocsPrintInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo $midocoTravelDocsPrintInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintJobInfo
     */
    public function setMidocoTravelDocsPrintInfo(?\Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintInfo $midocoTravelDocsPrintInfo = null): self
    {
        $this->MidocoTravelDocsPrintInfo = $midocoTravelDocsPrintInfo;
        
        return $this;
    }
    /**
     * Get MidocoPrintSelect value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[]
     */
    public function getMidocoPrintSelect(): ?array
    {
        return $this->MidocoPrintSelect;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPrintSelect method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintSelect method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintSelectForArrayConstraintFromSetMidocoPrintSelect(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTravelDocsPrintJobInfoMidocoPrintSelectItem) {
            // validation for constraint: itemType
            if (!$midocoTravelDocsPrintJobInfoMidocoPrintSelectItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect) {
                $invalidValues[] = is_object($midocoTravelDocsPrintJobInfoMidocoPrintSelectItem) ? get_class($midocoTravelDocsPrintJobInfoMidocoPrintSelectItem) : sprintf('%s(%s)', gettype($midocoTravelDocsPrintJobInfoMidocoPrintSelectItem), var_export($midocoTravelDocsPrintJobInfoMidocoPrintSelectItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintSelect property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintSelect value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect[] $midocoPrintSelect
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintJobInfo
     */
    public function setMidocoPrintSelect(?array $midocoPrintSelect = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintSelectArrayErrorMessage = self::validateMidocoPrintSelectForArrayConstraintFromSetMidocoPrintSelect($midocoPrintSelect))) {
            throw new InvalidArgumentException($midocoPrintSelectArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintSelect = $midocoPrintSelect;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintSelect value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelDocsPrintJobInfo
     */
    public function addToMidocoPrintSelect(\Pggns\MidocoApi\Order\StructType\MidocoPrintSelect $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintSelect property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPrintSelect, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintSelect[] = $item;
        
        return $this;
    }
}
