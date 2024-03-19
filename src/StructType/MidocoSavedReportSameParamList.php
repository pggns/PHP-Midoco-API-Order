<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSavedReportSameParamList StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSavedReportSameParamList extends AbstractStructBase
{
    /**
     * The MidocoJasperReportExt
     * Meta information extracted from the WSDL
     * - ref: MidocoJasperReportExt
     * @var \Pggns\MidocoApi\Order\StructType\MidocoJasperReportExt|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoJasperReportExt $MidocoJasperReportExt = null;
    /**
     * The MidocoJasperReportParamValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoJasperReportParamValue
     * @var \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO[]
     */
    protected ?array $MidocoJasperReportParamValue = null;
    /**
     * Constructor method for MidocoSavedReportSameParamList
     * @uses MidocoSavedReportSameParamList::setMidocoJasperReportExt()
     * @uses MidocoSavedReportSameParamList::setMidocoJasperReportParamValue()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoJasperReportExt $midocoJasperReportExt
     * @param \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO[] $midocoJasperReportParamValue
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoJasperReportExt $midocoJasperReportExt = null, ?array $midocoJasperReportParamValue = null)
    {
        $this
            ->setMidocoJasperReportExt($midocoJasperReportExt)
            ->setMidocoJasperReportParamValue($midocoJasperReportParamValue);
    }
    /**
     * Get MidocoJasperReportExt value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoJasperReportExt|null
     */
    public function getMidocoJasperReportExt(): ?\Pggns\MidocoApi\Order\StructType\MidocoJasperReportExt
    {
        return $this->MidocoJasperReportExt;
    }
    /**
     * Set MidocoJasperReportExt value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoJasperReportExt $midocoJasperReportExt
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSavedReportSameParamList
     */
    public function setMidocoJasperReportExt(?\Pggns\MidocoApi\Order\StructType\MidocoJasperReportExt $midocoJasperReportExt = null): self
    {
        $this->MidocoJasperReportExt = $midocoJasperReportExt;
        
        return $this;
    }
    /**
     * Get MidocoJasperReportParamValue value
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO[]
     */
    public function getMidocoJasperReportParamValue(): ?array
    {
        return $this->MidocoJasperReportParamValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoJasperReportParamValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperReportParamValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperReportParamValueForArrayConstraintFromSetMidocoJasperReportParamValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSavedReportSameParamListMidocoJasperReportParamValueItem) {
            // validation for constraint: itemType
            if (!$midocoSavedReportSameParamListMidocoJasperReportParamValueItem instanceof \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO) {
                $invalidValues[] = is_object($midocoSavedReportSameParamListMidocoJasperReportParamValueItem) ? get_class($midocoSavedReportSameParamListMidocoJasperReportParamValueItem) : sprintf('%s(%s)', gettype($midocoSavedReportSameParamListMidocoJasperReportParamValueItem), var_export($midocoSavedReportSameParamListMidocoJasperReportParamValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReportParamValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReportParamValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO[] $midocoJasperReportParamValue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSavedReportSameParamList
     */
    public function setMidocoJasperReportParamValue(?array $midocoJasperReportParamValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperReportParamValueArrayErrorMessage = self::validateMidocoJasperReportParamValueForArrayConstraintFromSetMidocoJasperReportParamValue($midocoJasperReportParamValue))) {
            throw new InvalidArgumentException($midocoJasperReportParamValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperReportParamValue = $midocoJasperReportParamValue;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperReportParamValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSavedReportSameParamList
     */
    public function addToMidocoJasperReportParamValue(\Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReportParamValue property can only contain items of type \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReportParamValue[] = $item;
        
        return $this;
    }
}
