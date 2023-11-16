<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderIdsForAgencyCommissionDatesResponse StructType
 * @subpackage Structs
 */
class GetOrderIdsForAgencyCommissionDatesResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderId
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderId[]
     */
    protected array $MidocoOrderId = [];
    /**
     * Constructor method for GetOrderIdsForAgencyCommissionDatesResponse
     * @uses GetOrderIdsForAgencyCommissionDatesResponse::setMidocoOrderId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderId[] $midocoOrderId
     */
    public function __construct(array $midocoOrderId = [])
    {
        $this
            ->setMidocoOrderId($midocoOrderId);
    }
    /**
     * Get MidocoOrderId value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderId[]
     */
    public function getMidocoOrderId(): array
    {
        return $this->MidocoOrderId;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrderId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderIdForArrayConstraintsFromSetMidocoOrderId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderIdsForAgencyCommissionDatesResponseMidocoOrderIdItem) {
            // validation for constraint: itemType
            if (!$getOrderIdsForAgencyCommissionDatesResponseMidocoOrderIdItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderId) {
                $invalidValues[] = is_object($getOrderIdsForAgencyCommissionDatesResponseMidocoOrderIdItem) ? get_class($getOrderIdsForAgencyCommissionDatesResponseMidocoOrderIdItem) : sprintf('%s(%s)', gettype($getOrderIdsForAgencyCommissionDatesResponseMidocoOrderIdItem), var_export($getOrderIdsForAgencyCommissionDatesResponseMidocoOrderIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderId property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderId, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderId[] $midocoOrderId
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderIdsForAgencyCommissionDatesResponse
     */
    public function setMidocoOrderId(array $midocoOrderId = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderIdArrayErrorMessage = self::validateMidocoOrderIdForArrayConstraintsFromSetMidocoOrderId($midocoOrderId))) {
            throw new InvalidArgumentException($midocoOrderIdArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderId = $midocoOrderId;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderId $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderIdsForAgencyCommissionDatesResponse
     */
    public function addToMidocoOrderId(\Pggns\MidocoApi\Order\StructType\MidocoOrderId $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderId) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderId property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderId, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderId[] = $item;
        
        return $this;
    }
}
