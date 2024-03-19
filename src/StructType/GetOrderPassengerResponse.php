<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderPassengerResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderPassengerResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderPassenger
     * @var \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO[]
     */
    protected ?array $MidocoOrderPassenger = null;
    /**
     * Constructor method for GetOrderPassengerResponse
     * @uses GetOrderPassengerResponse::setMidocoOrderPassenger()
     * @param \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO[] $midocoOrderPassenger
     */
    public function __construct(?array $midocoOrderPassenger = null)
    {
        $this
            ->setMidocoOrderPassenger($midocoOrderPassenger);
    }
    /**
     * Get MidocoOrderPassenger value
     * @return \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO[]
     */
    public function getMidocoOrderPassenger(): ?array
    {
        return $this->MidocoOrderPassenger;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderPassenger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderPassenger method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderPassengerForArrayConstraintFromSetMidocoOrderPassenger(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderPassengerResponseMidocoOrderPassengerItem) {
            // validation for constraint: itemType
            if (!$getOrderPassengerResponseMidocoOrderPassengerItem instanceof \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO) {
                $invalidValues[] = is_object($getOrderPassengerResponseMidocoOrderPassengerItem) ? get_class($getOrderPassengerResponseMidocoOrderPassengerItem) : sprintf('%s(%s)', gettype($getOrderPassengerResponseMidocoOrderPassengerItem), var_export($getOrderPassengerResponseMidocoOrderPassengerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderPassenger property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO[] $midocoOrderPassenger
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPassengerResponse
     */
    public function setMidocoOrderPassenger(?array $midocoOrderPassenger = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderPassengerArrayErrorMessage = self::validateMidocoOrderPassengerForArrayConstraintFromSetMidocoOrderPassenger($midocoOrderPassenger))) {
            throw new InvalidArgumentException($midocoOrderPassengerArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderPassenger = $midocoOrderPassenger;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPassengerResponse
     */
    public function addToMidocoOrderPassenger(\Pggns\MidocoApi\Order\StructType\OrderPassengerDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderPassenger property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderPassengerDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderPassenger[] = $item;
        
        return $this;
    }
}
