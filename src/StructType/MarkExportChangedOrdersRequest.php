<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkExportChangedOrdersRequest StructType
 * @subpackage Structs
 */
class MarkExportChangedOrdersRequest extends AbstractStructBase
{
    /**
     * The MidocoExportChangedOrdersLog
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoExportChangedOrdersLog
     * @var \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO[]
     */
    protected array $MidocoExportChangedOrdersLog = [];
    /**
     * Constructor method for MarkExportChangedOrdersRequest
     * @uses MarkExportChangedOrdersRequest::setMidocoExportChangedOrdersLog()
     * @param \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO[] $midocoExportChangedOrdersLog
     */
    public function __construct(array $midocoExportChangedOrdersLog)
    {
        $this
            ->setMidocoExportChangedOrdersLog($midocoExportChangedOrdersLog);
    }
    /**
     * Get MidocoExportChangedOrdersLog value
     * @return \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO[]
     */
    public function getMidocoExportChangedOrdersLog(): array
    {
        return $this->MidocoExportChangedOrdersLog;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoExportChangedOrdersLog method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExportChangedOrdersLog method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExportChangedOrdersLogForArrayConstraintsFromSetMidocoExportChangedOrdersLog(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $markExportChangedOrdersRequestMidocoExportChangedOrdersLogItem) {
            // validation for constraint: itemType
            if (!$markExportChangedOrdersRequestMidocoExportChangedOrdersLogItem instanceof \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO) {
                $invalidValues[] = is_object($markExportChangedOrdersRequestMidocoExportChangedOrdersLogItem) ? get_class($markExportChangedOrdersRequestMidocoExportChangedOrdersLogItem) : sprintf('%s(%s)', gettype($markExportChangedOrdersRequestMidocoExportChangedOrdersLogItem), var_export($markExportChangedOrdersRequestMidocoExportChangedOrdersLogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoExportChangedOrdersLog property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoExportChangedOrdersLog value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO[] $midocoExportChangedOrdersLog
     * @return \Pggns\MidocoApi\Order\StructType\MarkExportChangedOrdersRequest
     */
    public function setMidocoExportChangedOrdersLog(array $midocoExportChangedOrdersLog): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExportChangedOrdersLogArrayErrorMessage = self::validateMidocoExportChangedOrdersLogForArrayConstraintsFromSetMidocoExportChangedOrdersLog($midocoExportChangedOrdersLog))) {
            throw new InvalidArgumentException($midocoExportChangedOrdersLogArrayErrorMessage, __LINE__);
        }
        $this->MidocoExportChangedOrdersLog = $midocoExportChangedOrdersLog;
        
        return $this;
    }
    /**
     * Add item to MidocoExportChangedOrdersLog value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MarkExportChangedOrdersRequest
     */
    public function addToMidocoExportChangedOrdersLog(\Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoExportChangedOrdersLog property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExportChangedOrdersLogDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoExportChangedOrdersLog[] = $item;
        
        return $this;
    }
}
