<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExportMessages4OrderResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExportMessages4OrderResponse extends AbstractStructBase
{
    /**
     * The MidocoExportMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoExportMessage
     * @var \Pggns\MidocoApi\Order\StructType\ExportMessageDTO[]
     */
    protected ?array $MidocoExportMessage = null;
    /**
     * Constructor method for GetExportMessages4OrderResponse
     * @uses GetExportMessages4OrderResponse::setMidocoExportMessage()
     * @param \Pggns\MidocoApi\Order\StructType\ExportMessageDTO[] $midocoExportMessage
     */
    public function __construct(?array $midocoExportMessage = null)
    {
        $this
            ->setMidocoExportMessage($midocoExportMessage);
    }
    /**
     * Get MidocoExportMessage value
     * @return \Pggns\MidocoApi\Order\StructType\ExportMessageDTO[]
     */
    public function getMidocoExportMessage(): ?array
    {
        return $this->MidocoExportMessage;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoExportMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExportMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExportMessageForArrayConstraintFromSetMidocoExportMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExportMessages4OrderResponseMidocoExportMessageItem) {
            // validation for constraint: itemType
            if (!$getExportMessages4OrderResponseMidocoExportMessageItem instanceof \Pggns\MidocoApi\Order\StructType\ExportMessageDTO) {
                $invalidValues[] = is_object($getExportMessages4OrderResponseMidocoExportMessageItem) ? get_class($getExportMessages4OrderResponseMidocoExportMessageItem) : sprintf('%s(%s)', gettype($getExportMessages4OrderResponseMidocoExportMessageItem), var_export($getExportMessages4OrderResponseMidocoExportMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoExportMessage property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExportMessageDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoExportMessage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExportMessageDTO[] $midocoExportMessage
     * @return \Pggns\MidocoApi\Order\StructType\GetExportMessages4OrderResponse
     */
    public function setMidocoExportMessage(?array $midocoExportMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExportMessageArrayErrorMessage = self::validateMidocoExportMessageForArrayConstraintFromSetMidocoExportMessage($midocoExportMessage))) {
            throw new InvalidArgumentException($midocoExportMessageArrayErrorMessage, __LINE__);
        }
        $this->MidocoExportMessage = $midocoExportMessage;
        
        return $this;
    }
    /**
     * Add item to MidocoExportMessage value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\ExportMessageDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetExportMessages4OrderResponse
     */
    public function addToMidocoExportMessage(\Pggns\MidocoApi\Order\StructType\ExportMessageDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\ExportMessageDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoExportMessage property can only contain items of type \Pggns\MidocoApi\Order\StructType\ExportMessageDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoExportMessage[] = $item;
        
        return $this;
    }
}
