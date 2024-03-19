<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnprintedOrderIDsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUnprintedOrderIDsResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderNo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderNo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderNo[]
     */
    protected ?array $MidocoOrderNo = null;
    /**
     * Constructor method for GetUnprintedOrderIDsResponse
     * @uses GetUnprintedOrderIDsResponse::setMidocoOrderNo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNo[] $midocoOrderNo
     */
    public function __construct(?array $midocoOrderNo = null)
    {
        $this
            ->setMidocoOrderNo($midocoOrderNo);
    }
    /**
     * Get MidocoOrderNo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderNo[]
     */
    public function getMidocoOrderNo(): ?array
    {
        return $this->MidocoOrderNo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderNo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderNo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderNoForArrayConstraintFromSetMidocoOrderNo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUnprintedOrderIDsResponseMidocoOrderNoItem) {
            // validation for constraint: itemType
            if (!$getUnprintedOrderIDsResponseMidocoOrderNoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderNo) {
                $invalidValues[] = is_object($getUnprintedOrderIDsResponseMidocoOrderNoItem) ? get_class($getUnprintedOrderIDsResponseMidocoOrderNoItem) : sprintf('%s(%s)', gettype($getUnprintedOrderIDsResponseMidocoOrderNoItem), var_export($getUnprintedOrderIDsResponseMidocoOrderNoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderNo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderNo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderNo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNo[] $midocoOrderNo
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsResponse
     */
    public function setMidocoOrderNo(?array $midocoOrderNo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderNoArrayErrorMessage = self::validateMidocoOrderNoForArrayConstraintFromSetMidocoOrderNo($midocoOrderNo))) {
            throw new InvalidArgumentException($midocoOrderNoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderNo = $midocoOrderNo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderNo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderNo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetUnprintedOrderIDsResponse
     */
    public function addToMidocoOrderNo(\Pggns\MidocoApi\Order\StructType\MidocoOrderNo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderNo) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderNo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderNo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderNo[] = $item;
        
        return $this;
    }
}
