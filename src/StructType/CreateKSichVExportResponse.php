<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateKSichVExportResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateKSichVExportResponse extends AbstractStructBase
{
    /**
     * The MidocoTssExport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $MidocoTssExport = null;
    /**
     * Constructor method for CreateKSichVExportResponse
     * @uses CreateKSichVExportResponse::setMidocoTssExport()
     * @param string[] $midocoTssExport
     */
    public function __construct(?array $midocoTssExport = null)
    {
        $this
            ->setMidocoTssExport($midocoTssExport);
    }
    /**
     * Get MidocoTssExport value
     * @return string[]
     */
    public function getMidocoTssExport(): ?array
    {
        return $this->MidocoTssExport;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTssExport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTssExport method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTssExportForArrayConstraintFromSetMidocoTssExport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createKSichVExportResponseMidocoTssExportItem) {
            // validation for constraint: itemType
            if (!is_string($createKSichVExportResponseMidocoTssExportItem)) {
                $invalidValues[] = is_object($createKSichVExportResponseMidocoTssExportItem) ? get_class($createKSichVExportResponseMidocoTssExportItem) : sprintf('%s(%s)', gettype($createKSichVExportResponseMidocoTssExportItem), var_export($createKSichVExportResponseMidocoTssExportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTssExport property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTssExport value
     * @throws InvalidArgumentException
     * @param string[] $midocoTssExport
     * @return \Pggns\MidocoApi\Order\StructType\CreateKSichVExportResponse
     */
    public function setMidocoTssExport(?array $midocoTssExport = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTssExportArrayErrorMessage = self::validateMidocoTssExportForArrayConstraintFromSetMidocoTssExport($midocoTssExport))) {
            throw new InvalidArgumentException($midocoTssExportArrayErrorMessage, __LINE__);
        }
        $this->MidocoTssExport = $midocoTssExport;
        
        return $this;
    }
    /**
     * Add item to MidocoTssExport value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\CreateKSichVExportResponse
     */
    public function addToMidocoTssExport(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The MidocoTssExport property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTssExport[] = $item;
        
        return $this;
    }
}
