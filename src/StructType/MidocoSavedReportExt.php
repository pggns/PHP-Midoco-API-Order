<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSavedReportExt StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoSavedReportExt extends JasperReportDTO
{
    /**
     * The JasperReportType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: JasperReportType
     * @var \Pggns\MidocoApi\Order\StructType\JasperReportType[]
     */
    protected ?array $JasperReportType = null;
    /**
     * Constructor method for MidocoSavedReportExt
     * @uses MidocoSavedReportExt::setJasperReportType()
     * @param \Pggns\MidocoApi\Order\StructType\JasperReportType[] $jasperReportType
     */
    public function __construct(?array $jasperReportType = null)
    {
        $this
            ->setJasperReportType($jasperReportType);
    }
    /**
     * Get JasperReportType value
     * @return \Pggns\MidocoApi\Order\StructType\JasperReportType[]
     */
    public function getJasperReportType(): ?array
    {
        return $this->JasperReportType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setJasperReportType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJasperReportType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJasperReportTypeForArrayConstraintFromSetJasperReportType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSavedReportExtJasperReportTypeItem) {
            // validation for constraint: itemType
            if (!$midocoSavedReportExtJasperReportTypeItem instanceof \Pggns\MidocoApi\Order\StructType\JasperReportType) {
                $invalidValues[] = is_object($midocoSavedReportExtJasperReportTypeItem) ? get_class($midocoSavedReportExtJasperReportTypeItem) : sprintf('%s(%s)', gettype($midocoSavedReportExtJasperReportTypeItem), var_export($midocoSavedReportExtJasperReportTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The JasperReportType property can only contain items of type \Pggns\MidocoApi\Order\StructType\JasperReportType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set JasperReportType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\JasperReportType[] $jasperReportType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSavedReportExt
     */
    public function setJasperReportType(?array $jasperReportType = null): self
    {
        // validation for constraint: array
        if ('' !== ($jasperReportTypeArrayErrorMessage = self::validateJasperReportTypeForArrayConstraintFromSetJasperReportType($jasperReportType))) {
            throw new InvalidArgumentException($jasperReportTypeArrayErrorMessage, __LINE__);
        }
        $this->JasperReportType = $jasperReportType;
        
        return $this;
    }
    /**
     * Add item to JasperReportType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\JasperReportType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSavedReportExt
     */
    public function addToJasperReportType(\Pggns\MidocoApi\Order\StructType\JasperReportType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\JasperReportType) {
            throw new InvalidArgumentException(sprintf('The JasperReportType property can only contain items of type \Pggns\MidocoApi\Order\StructType\JasperReportType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->JasperReportType[] = $item;
        
        return $this;
    }
}
