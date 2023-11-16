<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCollectiveInvoicePrintPreselectionResponse StructType
 * @subpackage Structs
 */
class GetCollectiveInvoicePrintPreselectionResponse extends AbstractStructBase
{
    /**
     * The MidocoCollectiveInvoicePrintPreselectionData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCollectiveInvoicePrintPreselectionData
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData[]
     */
    protected array $MidocoCollectiveInvoicePrintPreselectionData = [];
    /**
     * Constructor method for GetCollectiveInvoicePrintPreselectionResponse
     * @uses GetCollectiveInvoicePrintPreselectionResponse::setMidocoCollectiveInvoicePrintPreselectionData()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData[] $midocoCollectiveInvoicePrintPreselectionData
     */
    public function __construct(array $midocoCollectiveInvoicePrintPreselectionData = [])
    {
        $this
            ->setMidocoCollectiveInvoicePrintPreselectionData($midocoCollectiveInvoicePrintPreselectionData);
    }
    /**
     * Get MidocoCollectiveInvoicePrintPreselectionData value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData[]
     */
    public function getMidocoCollectiveInvoicePrintPreselectionData(): array
    {
        return $this->MidocoCollectiveInvoicePrintPreselectionData;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCollectiveInvoicePrintPreselectionData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCollectiveInvoicePrintPreselectionData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCollectiveInvoicePrintPreselectionDataForArrayConstraintsFromSetMidocoCollectiveInvoicePrintPreselectionData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCollectiveInvoicePrintPreselectionResponseMidocoCollectiveInvoicePrintPreselectionDataItem) {
            // validation for constraint: itemType
            if (!$getCollectiveInvoicePrintPreselectionResponseMidocoCollectiveInvoicePrintPreselectionDataItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData) {
                $invalidValues[] = is_object($getCollectiveInvoicePrintPreselectionResponseMidocoCollectiveInvoicePrintPreselectionDataItem) ? get_class($getCollectiveInvoicePrintPreselectionResponseMidocoCollectiveInvoicePrintPreselectionDataItem) : sprintf('%s(%s)', gettype($getCollectiveInvoicePrintPreselectionResponseMidocoCollectiveInvoicePrintPreselectionDataItem), var_export($getCollectiveInvoicePrintPreselectionResponseMidocoCollectiveInvoicePrintPreselectionDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCollectiveInvoicePrintPreselectionData property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCollectiveInvoicePrintPreselectionData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData[] $midocoCollectiveInvoicePrintPreselectionData
     * @return \Pggns\MidocoApi\Order\StructType\GetCollectiveInvoicePrintPreselectionResponse
     */
    public function setMidocoCollectiveInvoicePrintPreselectionData(array $midocoCollectiveInvoicePrintPreselectionData = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCollectiveInvoicePrintPreselectionDataArrayErrorMessage = self::validateMidocoCollectiveInvoicePrintPreselectionDataForArrayConstraintsFromSetMidocoCollectiveInvoicePrintPreselectionData($midocoCollectiveInvoicePrintPreselectionData))) {
            throw new InvalidArgumentException($midocoCollectiveInvoicePrintPreselectionDataArrayErrorMessage, __LINE__);
        }
        $this->MidocoCollectiveInvoicePrintPreselectionData = $midocoCollectiveInvoicePrintPreselectionData;
        
        return $this;
    }
    /**
     * Add item to MidocoCollectiveInvoicePrintPreselectionData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData $item
     * @return \Pggns\MidocoApi\Order\StructType\GetCollectiveInvoicePrintPreselectionResponse
     */
    public function addToMidocoCollectiveInvoicePrintPreselectionData(\Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData) {
            throw new InvalidArgumentException(sprintf('The MidocoCollectiveInvoicePrintPreselectionData property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCollectiveInvoicePrintPreselectionData[] = $item;
        
        return $this;
    }
}
