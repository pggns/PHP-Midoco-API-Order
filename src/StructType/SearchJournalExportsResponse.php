<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchJournalExportsResponse StructType
 * @subpackage Structs
 */
class SearchJournalExportsResponse extends AbstractStructBase
{
    /**
     * The MidocoJournalExport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoJournalExport
     * @var \Pggns\MidocoApi\Order\StructType\MidocoJournalExport[]
     */
    protected array $MidocoJournalExport = [];
    /**
     * Constructor method for SearchJournalExportsResponse
     * @uses SearchJournalExportsResponse::setMidocoJournalExport()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoJournalExport[] $midocoJournalExport
     */
    public function __construct(array $midocoJournalExport = [])
    {
        $this
            ->setMidocoJournalExport($midocoJournalExport);
    }
    /**
     * Get MidocoJournalExport value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoJournalExport[]
     */
    public function getMidocoJournalExport(): array
    {
        return $this->MidocoJournalExport;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoJournalExport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJournalExport method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJournalExportForArrayConstraintsFromSetMidocoJournalExport(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchJournalExportsResponseMidocoJournalExportItem) {
            // validation for constraint: itemType
            if (!$searchJournalExportsResponseMidocoJournalExportItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoJournalExport) {
                $invalidValues[] = is_object($searchJournalExportsResponseMidocoJournalExportItem) ? get_class($searchJournalExportsResponseMidocoJournalExportItem) : sprintf('%s(%s)', gettype($searchJournalExportsResponseMidocoJournalExportItem), var_export($searchJournalExportsResponseMidocoJournalExportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJournalExport property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoJournalExport, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJournalExport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoJournalExport[] $midocoJournalExport
     * @return \Pggns\MidocoApi\Order\StructType\SearchJournalExportsResponse
     */
    public function setMidocoJournalExport(array $midocoJournalExport = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJournalExportArrayErrorMessage = self::validateMidocoJournalExportForArrayConstraintsFromSetMidocoJournalExport($midocoJournalExport))) {
            throw new InvalidArgumentException($midocoJournalExportArrayErrorMessage, __LINE__);
        }
        $this->MidocoJournalExport = $midocoJournalExport;
        
        return $this;
    }
    /**
     * Add item to MidocoJournalExport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoJournalExport $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchJournalExportsResponse
     */
    public function addToMidocoJournalExport(\Pggns\MidocoApi\Order\StructType\MidocoJournalExport $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoJournalExport) {
            throw new InvalidArgumentException(sprintf('The MidocoJournalExport property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoJournalExport, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJournalExport[] = $item;
        
        return $this;
    }
}
