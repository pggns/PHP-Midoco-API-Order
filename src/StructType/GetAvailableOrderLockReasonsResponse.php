<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableOrderLockReasonsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getLockReasons--- returns a list of available lock reason for the given lock reason with parent-entries
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAvailableOrderLockReasonsResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderLockReason
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderLockReason
     * @var \Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO[]
     */
    protected ?array $MidocoOrderLockReason = null;
    /**
     * Constructor method for GetAvailableOrderLockReasonsResponse
     * @uses GetAvailableOrderLockReasonsResponse::setMidocoOrderLockReason()
     * @param \Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO[] $midocoOrderLockReason
     */
    public function __construct(?array $midocoOrderLockReason = null)
    {
        $this
            ->setMidocoOrderLockReason($midocoOrderLockReason);
    }
    /**
     * Get MidocoOrderLockReason value
     * @return \Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO[]
     */
    public function getMidocoOrderLockReason(): ?array
    {
        return $this->MidocoOrderLockReason;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderLockReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderLockReason method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderLockReasonForArrayConstraintFromSetMidocoOrderLockReason(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableOrderLockReasonsResponseMidocoOrderLockReasonItem) {
            // validation for constraint: itemType
            if (!$getAvailableOrderLockReasonsResponseMidocoOrderLockReasonItem instanceof \Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO) {
                $invalidValues[] = is_object($getAvailableOrderLockReasonsResponseMidocoOrderLockReasonItem) ? get_class($getAvailableOrderLockReasonsResponseMidocoOrderLockReasonItem) : sprintf('%s(%s)', gettype($getAvailableOrderLockReasonsResponseMidocoOrderLockReasonItem), var_export($getAvailableOrderLockReasonsResponseMidocoOrderLockReasonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderLockReason property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderLockReason value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO[] $midocoOrderLockReason
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableOrderLockReasonsResponse
     */
    public function setMidocoOrderLockReason(?array $midocoOrderLockReason = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderLockReasonArrayErrorMessage = self::validateMidocoOrderLockReasonForArrayConstraintFromSetMidocoOrderLockReason($midocoOrderLockReason))) {
            throw new InvalidArgumentException($midocoOrderLockReasonArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderLockReason = $midocoOrderLockReason;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderLockReason value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAvailableOrderLockReasonsResponse
     */
    public function addToMidocoOrderLockReason(\Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderLockReason property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderLockReasonDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderLockReason[] = $item;
        
        return $this;
    }
}
