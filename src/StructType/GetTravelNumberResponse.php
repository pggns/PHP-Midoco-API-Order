<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTravelNumberResponse StructType
 * @subpackage Structs
 */
class GetTravelNumberResponse extends AbstractStructBase
{
    /**
     * The MidocoTravelNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelNumber
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelNumber[]
     */
    protected array $MidocoTravelNumber = [];
    /**
     * Constructor method for GetTravelNumberResponse
     * @uses GetTravelNumberResponse::setMidocoTravelNumber()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNumber[] $midocoTravelNumber
     */
    public function __construct(array $midocoTravelNumber = [])
    {
        $this
            ->setMidocoTravelNumber($midocoTravelNumber);
    }
    /**
     * Get MidocoTravelNumber value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelNumber[]
     */
    public function getMidocoTravelNumber(): array
    {
        return $this->MidocoTravelNumber;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelNumber method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelNumber method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelNumberForArrayConstraintsFromSetMidocoTravelNumber(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTravelNumberResponseMidocoTravelNumberItem) {
            // validation for constraint: itemType
            if (!$getTravelNumberResponseMidocoTravelNumberItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelNumber) {
                $invalidValues[] = is_object($getTravelNumberResponseMidocoTravelNumberItem) ? get_class($getTravelNumberResponseMidocoTravelNumberItem) : sprintf('%s(%s)', gettype($getTravelNumberResponseMidocoTravelNumberItem), var_export($getTravelNumberResponseMidocoTravelNumberItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelNumber property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelNumber, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNumber[] $midocoTravelNumber
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelNumberResponse
     */
    public function setMidocoTravelNumber(array $midocoTravelNumber = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelNumberArrayErrorMessage = self::validateMidocoTravelNumberForArrayConstraintsFromSetMidocoTravelNumber($midocoTravelNumber))) {
            throw new InvalidArgumentException($midocoTravelNumberArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelNumber = $midocoTravelNumber;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelNumber value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelNumber $item
     * @return \Pggns\MidocoApi\Order\StructType\GetTravelNumberResponse
     */
    public function addToMidocoTravelNumber(\Pggns\MidocoApi\Order\StructType\MidocoTravelNumber $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelNumber) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelNumber property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelNumber, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelNumber[] = $item;
        
        return $this;
    }
}
