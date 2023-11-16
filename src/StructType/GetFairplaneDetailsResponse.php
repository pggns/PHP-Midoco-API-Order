<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFairplaneDetailsResponse StructType
 * @subpackage Structs
 */
class GetFairplaneDetailsResponse extends AbstractStructBase
{
    /**
     * The MidocoFairplaneStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFairplaneStatus
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus[]
     */
    protected array $MidocoFairplaneStatus = [];
    /**
     * Constructor method for GetFairplaneDetailsResponse
     * @uses GetFairplaneDetailsResponse::setMidocoFairplaneStatus()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus[] $midocoFairplaneStatus
     */
    public function __construct(array $midocoFairplaneStatus = [])
    {
        $this
            ->setMidocoFairplaneStatus($midocoFairplaneStatus);
    }
    /**
     * Get MidocoFairplaneStatus value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus[]
     */
    public function getMidocoFairplaneStatus(): array
    {
        return $this->MidocoFairplaneStatus;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFairplaneStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFairplaneStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFairplaneStatusForArrayConstraintsFromSetMidocoFairplaneStatus(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFairplaneDetailsResponseMidocoFairplaneStatusItem) {
            // validation for constraint: itemType
            if (!$getFairplaneDetailsResponseMidocoFairplaneStatusItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus) {
                $invalidValues[] = is_object($getFairplaneDetailsResponseMidocoFairplaneStatusItem) ? get_class($getFairplaneDetailsResponseMidocoFairplaneStatusItem) : sprintf('%s(%s)', gettype($getFairplaneDetailsResponseMidocoFairplaneStatusItem), var_export($getFairplaneDetailsResponseMidocoFairplaneStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFairplaneStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFairplaneStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus[] $midocoFairplaneStatus
     * @return \Pggns\MidocoApi\Order\StructType\GetFairplaneDetailsResponse
     */
    public function setMidocoFairplaneStatus(array $midocoFairplaneStatus = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFairplaneStatusArrayErrorMessage = self::validateMidocoFairplaneStatusForArrayConstraintsFromSetMidocoFairplaneStatus($midocoFairplaneStatus))) {
            throw new InvalidArgumentException($midocoFairplaneStatusArrayErrorMessage, __LINE__);
        }
        $this->MidocoFairplaneStatus = $midocoFairplaneStatus;
        
        return $this;
    }
    /**
     * Add item to MidocoFairplaneStatus value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus $item
     * @return \Pggns\MidocoApi\Order\StructType\GetFairplaneDetailsResponse
     */
    public function addToMidocoFairplaneStatus(\Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus) {
            throw new InvalidArgumentException(sprintf('The MidocoFairplaneStatus property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFairplaneStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFairplaneStatus[] = $item;
        
        return $this;
    }
}
