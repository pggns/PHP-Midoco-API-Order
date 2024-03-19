<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderRetentionPeriodResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderRetentionPeriodResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderRetentionPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderRetentionPeriod
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderRetentionPeriod[]
     */
    protected ?array $MidocoOrderRetentionPeriod = null;
    /**
     * Constructor method for GetOrderRetentionPeriodResponse
     * @uses GetOrderRetentionPeriodResponse::setMidocoOrderRetentionPeriod()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderRetentionPeriod[] $midocoOrderRetentionPeriod
     */
    public function __construct(?array $midocoOrderRetentionPeriod = null)
    {
        $this
            ->setMidocoOrderRetentionPeriod($midocoOrderRetentionPeriod);
    }
    /**
     * Get MidocoOrderRetentionPeriod value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderRetentionPeriod[]
     */
    public function getMidocoOrderRetentionPeriod(): ?array
    {
        return $this->MidocoOrderRetentionPeriod;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderRetentionPeriod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderRetentionPeriod method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderRetentionPeriodForArrayConstraintFromSetMidocoOrderRetentionPeriod(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderRetentionPeriodResponseMidocoOrderRetentionPeriodItem) {
            // validation for constraint: itemType
            if (!$getOrderRetentionPeriodResponseMidocoOrderRetentionPeriodItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderRetentionPeriod) {
                $invalidValues[] = is_object($getOrderRetentionPeriodResponseMidocoOrderRetentionPeriodItem) ? get_class($getOrderRetentionPeriodResponseMidocoOrderRetentionPeriodItem) : sprintf('%s(%s)', gettype($getOrderRetentionPeriodResponseMidocoOrderRetentionPeriodItem), var_export($getOrderRetentionPeriodResponseMidocoOrderRetentionPeriodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderRetentionPeriod property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderRetentionPeriod, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderRetentionPeriod value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderRetentionPeriod[] $midocoOrderRetentionPeriod
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderRetentionPeriodResponse
     */
    public function setMidocoOrderRetentionPeriod(?array $midocoOrderRetentionPeriod = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderRetentionPeriodArrayErrorMessage = self::validateMidocoOrderRetentionPeriodForArrayConstraintFromSetMidocoOrderRetentionPeriod($midocoOrderRetentionPeriod))) {
            throw new InvalidArgumentException($midocoOrderRetentionPeriodArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderRetentionPeriod = $midocoOrderRetentionPeriod;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderRetentionPeriod value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderRetentionPeriod $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderRetentionPeriodResponse
     */
    public function addToMidocoOrderRetentionPeriod(\Pggns\MidocoApi\Order\StructType\MidocoOrderRetentionPeriod $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderRetentionPeriod) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderRetentionPeriod property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderRetentionPeriod, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderRetentionPeriod[] = $item;
        
        return $this;
    }
}
