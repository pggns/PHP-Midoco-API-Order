<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSavedReportAndParamValue StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSavedReportAndParamValue extends AbstractStructBase
{
    /**
     * The MidocoJasperReportParamValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoJasperReportParamValue
     * @var \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO[]
     */
    protected ?array $MidocoJasperReportParamValue = null;
    /**
     * The MidocoSavedReport
     * Meta information extracted from the WSDL
     * - ref: MidocoSavedReport
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSavedReport|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSavedReport $MidocoSavedReport = null;
    /**
     * Constructor method for MidocoSavedReportAndParamValue
     * @uses MidocoSavedReportAndParamValue::setMidocoJasperReportParamValue()
     * @uses MidocoSavedReportAndParamValue::setMidocoSavedReport()
     * @param \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO[] $midocoJasperReportParamValue
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSavedReport $midocoSavedReport
     */
    public function __construct(?array $midocoJasperReportParamValue = null, ?\Pggns\MidocoApi\Order\StructType\MidocoSavedReport $midocoSavedReport = null)
    {
        $this
            ->setMidocoJasperReportParamValue($midocoJasperReportParamValue)
            ->setMidocoSavedReport($midocoSavedReport);
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
        foreach ($values as $midocoSavedReportAndParamValueMidocoJasperReportParamValueItem) {
            // validation for constraint: itemType
            if (!$midocoSavedReportAndParamValueMidocoJasperReportParamValueItem instanceof \Pggns\MidocoApi\Order\StructType\JasperReportParamValueDTO) {
                $invalidValues[] = is_object($midocoSavedReportAndParamValueMidocoJasperReportParamValueItem) ? get_class($midocoSavedReportAndParamValueMidocoJasperReportParamValueItem) : sprintf('%s(%s)', gettype($midocoSavedReportAndParamValueMidocoJasperReportParamValueItem), var_export($midocoSavedReportAndParamValueMidocoJasperReportParamValueItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSavedReportAndParamValue
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSavedReportAndParamValue
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
    /**
     * Get MidocoSavedReport value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSavedReport|null
     */
    public function getMidocoSavedReport(): ?\Pggns\MidocoApi\Order\StructType\MidocoSavedReport
    {
        return $this->MidocoSavedReport;
    }
    /**
     * Set MidocoSavedReport value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSavedReport $midocoSavedReport
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSavedReportAndParamValue
     */
    public function setMidocoSavedReport(?\Pggns\MidocoApi\Order\StructType\MidocoSavedReport $midocoSavedReport = null): self
    {
        $this->MidocoSavedReport = $midocoSavedReport;
        
        return $this;
    }
}
