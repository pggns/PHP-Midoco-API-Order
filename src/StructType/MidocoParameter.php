<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoParameter StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoParameter extends AbstractStructBase
{
    /**
     * The MidocoJasperReportParam
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoJasperReportParam
     * @var \Pggns\MidocoApi\Order\StructType\MidocoJasperReportParam[]
     */
    protected ?array $MidocoJasperReportParam = null;
    /**
     * Constructor method for MidocoParameter
     * @uses MidocoParameter::setMidocoJasperReportParam()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoJasperReportParam[] $midocoJasperReportParam
     */
    public function __construct(?array $midocoJasperReportParam = null)
    {
        $this
            ->setMidocoJasperReportParam($midocoJasperReportParam);
    }
    /**
     * Get MidocoJasperReportParam value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoJasperReportParam[]
     */
    public function getMidocoJasperReportParam(): ?array
    {
        return $this->MidocoJasperReportParam;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoJasperReportParam method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperReportParam method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperReportParamForArrayConstraintFromSetMidocoJasperReportParam(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoParameterMidocoJasperReportParamItem) {
            // validation for constraint: itemType
            if (!$midocoParameterMidocoJasperReportParamItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoJasperReportParam) {
                $invalidValues[] = is_object($midocoParameterMidocoJasperReportParamItem) ? get_class($midocoParameterMidocoJasperReportParamItem) : sprintf('%s(%s)', gettype($midocoParameterMidocoJasperReportParamItem), var_export($midocoParameterMidocoJasperReportParamItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReportParam property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoJasperReportParam, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReportParam value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoJasperReportParam[] $midocoJasperReportParam
     * @return \Pggns\MidocoApi\Order\StructType\MidocoParameter
     */
    public function setMidocoJasperReportParam(?array $midocoJasperReportParam = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperReportParamArrayErrorMessage = self::validateMidocoJasperReportParamForArrayConstraintFromSetMidocoJasperReportParam($midocoJasperReportParam))) {
            throw new InvalidArgumentException($midocoJasperReportParamArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperReportParam = $midocoJasperReportParam;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperReportParam value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoJasperReportParam $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoParameter
     */
    public function addToMidocoJasperReportParam(\Pggns\MidocoApi\Order\StructType\MidocoJasperReportParam $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoJasperReportParam) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReportParam property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoJasperReportParam, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReportParam[] = $item;
        
        return $this;
    }
}
