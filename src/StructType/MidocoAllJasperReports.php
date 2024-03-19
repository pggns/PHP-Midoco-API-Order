<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAllJasperReports StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAllJasperReports extends AbstractStructBase
{
    /**
     * The MidocoJasperReport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoJasperReport
     * @var \Pggns\MidocoApi\Order\StructType\MidocoJasperReport[]
     */
    protected ?array $MidocoJasperReport = null;
    /**
     * Constructor method for MidocoAllJasperReports
     * @uses MidocoAllJasperReports::setMidocoJasperReport()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoJasperReport[] $midocoJasperReport
     */
    public function __construct(?array $midocoJasperReport = null)
    {
        $this
            ->setMidocoJasperReport($midocoJasperReport);
    }
    /**
     * Get MidocoJasperReport value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoJasperReport[]
     */
    public function getMidocoJasperReport(): ?array
    {
        return $this->MidocoJasperReport;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoJasperReport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperReport method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperReportForArrayConstraintFromSetMidocoJasperReport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoAllJasperReportsMidocoJasperReportItem) {
            // validation for constraint: itemType
            if (!$midocoAllJasperReportsMidocoJasperReportItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoJasperReport) {
                $invalidValues[] = is_object($midocoAllJasperReportsMidocoJasperReportItem) ? get_class($midocoAllJasperReportsMidocoJasperReportItem) : sprintf('%s(%s)', gettype($midocoAllJasperReportsMidocoJasperReportItem), var_export($midocoAllJasperReportsMidocoJasperReportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReport property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoJasperReport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoJasperReport[] $midocoJasperReport
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAllJasperReports
     */
    public function setMidocoJasperReport(?array $midocoJasperReport = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperReportArrayErrorMessage = self::validateMidocoJasperReportForArrayConstraintFromSetMidocoJasperReport($midocoJasperReport))) {
            throw new InvalidArgumentException($midocoJasperReportArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperReport = $midocoJasperReport;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperReport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoJasperReport $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAllJasperReports
     */
    public function addToMidocoJasperReport(\Pggns\MidocoApi\Order\StructType\MidocoJasperReport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoJasperReport) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReport property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoJasperReport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReport[] = $item;
        
        return $this;
    }
}
