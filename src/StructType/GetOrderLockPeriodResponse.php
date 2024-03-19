<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderLockPeriodResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderLockPeriodResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderLockPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderLockPeriod
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderLockPeriod[]
     */
    protected ?array $MidocoOrderLockPeriod = null;
    /**
     * Constructor method for GetOrderLockPeriodResponse
     * @uses GetOrderLockPeriodResponse::setMidocoOrderLockPeriod()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderLockPeriod[] $midocoOrderLockPeriod
     */
    public function __construct(?array $midocoOrderLockPeriod = null)
    {
        $this
            ->setMidocoOrderLockPeriod($midocoOrderLockPeriod);
    }
    /**
     * Get MidocoOrderLockPeriod value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderLockPeriod[]
     */
    public function getMidocoOrderLockPeriod(): ?array
    {
        return $this->MidocoOrderLockPeriod;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderLockPeriod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderLockPeriod method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderLockPeriodForArrayConstraintFromSetMidocoOrderLockPeriod(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderLockPeriodResponseMidocoOrderLockPeriodItem) {
            // validation for constraint: itemType
            if (!$getOrderLockPeriodResponseMidocoOrderLockPeriodItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderLockPeriod) {
                $invalidValues[] = is_object($getOrderLockPeriodResponseMidocoOrderLockPeriodItem) ? get_class($getOrderLockPeriodResponseMidocoOrderLockPeriodItem) : sprintf('%s(%s)', gettype($getOrderLockPeriodResponseMidocoOrderLockPeriodItem), var_export($getOrderLockPeriodResponseMidocoOrderLockPeriodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderLockPeriod property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderLockPeriod, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderLockPeriod value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderLockPeriod[] $midocoOrderLockPeriod
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderLockPeriodResponse
     */
    public function setMidocoOrderLockPeriod(?array $midocoOrderLockPeriod = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderLockPeriodArrayErrorMessage = self::validateMidocoOrderLockPeriodForArrayConstraintFromSetMidocoOrderLockPeriod($midocoOrderLockPeriod))) {
            throw new InvalidArgumentException($midocoOrderLockPeriodArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderLockPeriod = $midocoOrderLockPeriod;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderLockPeriod value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderLockPeriod $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderLockPeriodResponse
     */
    public function addToMidocoOrderLockPeriod(\Pggns\MidocoApi\Order\StructType\MidocoOrderLockPeriod $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderLockPeriod) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderLockPeriod property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderLockPeriod, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderLockPeriod[] = $item;
        
        return $this;
    }
}
