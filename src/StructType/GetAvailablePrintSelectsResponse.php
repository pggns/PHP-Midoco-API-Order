<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailablePrintSelectsResponse StructType
 * @subpackage Structs
 */
class GetAvailablePrintSelectsResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPrintDescription
     * @var \Pggns\MidocoApi\Order\StructType\PrintDescriptionDTO[]
     */
    protected array $MidocoPrintDescription = [];
    /**
     * Constructor method for GetAvailablePrintSelectsResponse
     * @uses GetAvailablePrintSelectsResponse::setMidocoPrintDescription()
     * @param \Pggns\MidocoApi\Order\StructType\PrintDescriptionDTO[] $midocoPrintDescription
     */
    public function __construct(array $midocoPrintDescription = [])
    {
        $this
            ->setMidocoPrintDescription($midocoPrintDescription);
    }
    /**
     * Get MidocoPrintDescription value
     * @return \Pggns\MidocoApi\Order\StructType\PrintDescriptionDTO[]
     */
    public function getMidocoPrintDescription(): array
    {
        return $this->MidocoPrintDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPrintDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintDescriptionForArrayConstraintsFromSetMidocoPrintDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailablePrintSelectsResponseMidocoPrintDescriptionItem) {
            // validation for constraint: itemType
            if (!$getAvailablePrintSelectsResponseMidocoPrintDescriptionItem instanceof \Pggns\MidocoApi\Order\StructType\PrintDescriptionDTO) {
                $invalidValues[] = is_object($getAvailablePrintSelectsResponseMidocoPrintDescriptionItem) ? get_class($getAvailablePrintSelectsResponseMidocoPrintDescriptionItem) : sprintf('%s(%s)', gettype($getAvailablePrintSelectsResponseMidocoPrintDescriptionItem), var_export($getAvailablePrintSelectsResponseMidocoPrintDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\PrintDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PrintDescriptionDTO[] $midocoPrintDescription
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailablePrintSelectsResponse
     */
    public function setMidocoPrintDescription(array $midocoPrintDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintDescriptionArrayErrorMessage = self::validateMidocoPrintDescriptionForArrayConstraintsFromSetMidocoPrintDescription($midocoPrintDescription))) {
            throw new InvalidArgumentException($midocoPrintDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintDescription = $midocoPrintDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PrintDescriptionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailablePrintSelectsResponse
     */
    public function addToMidocoPrintDescription(\Pggns\MidocoApi\Order\StructType\PrintDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\PrintDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\PrintDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintDescription[] = $item;
        
        return $this;
    }
}
