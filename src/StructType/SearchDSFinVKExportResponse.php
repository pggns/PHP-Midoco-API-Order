<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDSFinVKExportResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchDSFinVKExportResponse extends AbstractStructBase
{
    /**
     * The MidocoDSFinVKExport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDSFinVKExport
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport[]
     */
    protected ?array $MidocoDSFinVKExport = null;
    /**
     * Constructor method for SearchDSFinVKExportResponse
     * @uses SearchDSFinVKExportResponse::setMidocoDSFinVKExport()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport[] $midocoDSFinVKExport
     */
    public function __construct(?array $midocoDSFinVKExport = null)
    {
        $this
            ->setMidocoDSFinVKExport($midocoDSFinVKExport);
    }
    /**
     * Get MidocoDSFinVKExport value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport[]
     */
    public function getMidocoDSFinVKExport(): ?array
    {
        return $this->MidocoDSFinVKExport;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDSFinVKExport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDSFinVKExport method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDSFinVKExportForArrayConstraintFromSetMidocoDSFinVKExport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchDSFinVKExportResponseMidocoDSFinVKExportItem) {
            // validation for constraint: itemType
            if (!$searchDSFinVKExportResponseMidocoDSFinVKExportItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport) {
                $invalidValues[] = is_object($searchDSFinVKExportResponseMidocoDSFinVKExportItem) ? get_class($searchDSFinVKExportResponseMidocoDSFinVKExportItem) : sprintf('%s(%s)', gettype($searchDSFinVKExportResponseMidocoDSFinVKExportItem), var_export($searchDSFinVKExportResponseMidocoDSFinVKExportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDSFinVKExport property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDSFinVKExport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport[] $midocoDSFinVKExport
     * @return \Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportResponse
     */
    public function setMidocoDSFinVKExport(?array $midocoDSFinVKExport = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDSFinVKExportArrayErrorMessage = self::validateMidocoDSFinVKExportForArrayConstraintFromSetMidocoDSFinVKExport($midocoDSFinVKExport))) {
            throw new InvalidArgumentException($midocoDSFinVKExportArrayErrorMessage, __LINE__);
        }
        $this->MidocoDSFinVKExport = $midocoDSFinVKExport;
        
        return $this;
    }
    /**
     * Add item to MidocoDSFinVKExport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchDSFinVKExportResponse
     */
    public function addToMidocoDSFinVKExport(\Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport) {
            throw new InvalidArgumentException(sprintf('The MidocoDSFinVKExport property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDSFinVKExport[] = $item;
        
        return $this;
    }
}
