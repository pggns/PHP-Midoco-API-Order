<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVerkDataPrintListResponse StructType
 * @subpackage Structs
 */
class GetVerkDataPrintListResponse extends AbstractStructBase
{
    /**
     * The MidocoVerkDataPrint
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVerkDataPrint
     * @var \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO[]
     */
    protected array $MidocoVerkDataPrint = [];
    /**
     * Constructor method for GetVerkDataPrintListResponse
     * @uses GetVerkDataPrintListResponse::setMidocoVerkDataPrint()
     * @param \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO[] $midocoVerkDataPrint
     */
    public function __construct(array $midocoVerkDataPrint = [])
    {
        $this
            ->setMidocoVerkDataPrint($midocoVerkDataPrint);
    }
    /**
     * Get MidocoVerkDataPrint value
     * @return \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO[]
     */
    public function getMidocoVerkDataPrint(): array
    {
        return $this->MidocoVerkDataPrint;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVerkDataPrint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVerkDataPrint method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVerkDataPrintForArrayConstraintsFromSetMidocoVerkDataPrint(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVerkDataPrintListResponseMidocoVerkDataPrintItem) {
            // validation for constraint: itemType
            if (!$getVerkDataPrintListResponseMidocoVerkDataPrintItem instanceof \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO) {
                $invalidValues[] = is_object($getVerkDataPrintListResponseMidocoVerkDataPrintItem) ? get_class($getVerkDataPrintListResponseMidocoVerkDataPrintItem) : sprintf('%s(%s)', gettype($getVerkDataPrintListResponseMidocoVerkDataPrintItem), var_export($getVerkDataPrintListResponseMidocoVerkDataPrintItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVerkDataPrint property can only contain items of type \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVerkDataPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO[] $midocoVerkDataPrint
     * @return \Pggns\MidocoApi\Order\StructType\GetVerkDataPrintListResponse
     */
    public function setMidocoVerkDataPrint(array $midocoVerkDataPrint = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVerkDataPrintArrayErrorMessage = self::validateMidocoVerkDataPrintForArrayConstraintsFromSetMidocoVerkDataPrint($midocoVerkDataPrint))) {
            throw new InvalidArgumentException($midocoVerkDataPrintArrayErrorMessage, __LINE__);
        }
        $this->MidocoVerkDataPrint = $midocoVerkDataPrint;
        
        return $this;
    }
    /**
     * Add item to MidocoVerkDataPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetVerkDataPrintListResponse
     */
    public function addToMidocoVerkDataPrint(\Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoVerkDataPrint property can only contain items of type \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVerkDataPrint[] = $item;
        
        return $this;
    }
}
