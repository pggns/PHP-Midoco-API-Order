<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoBaggageAllowanceResponse StructType
 * @subpackage Structs
 */
class GetMidocoBaggageAllowanceResponse extends AbstractStructBase
{
    /**
     * The MidocoBaggageAllowance
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBaggageAllowance
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBaggageAllowance[]
     */
    protected array $MidocoBaggageAllowance = [];
    /**
     * Constructor method for GetMidocoBaggageAllowanceResponse
     * @uses GetMidocoBaggageAllowanceResponse::setMidocoBaggageAllowance()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBaggageAllowance[] $midocoBaggageAllowance
     */
    public function __construct(array $midocoBaggageAllowance = [])
    {
        $this
            ->setMidocoBaggageAllowance($midocoBaggageAllowance);
    }
    /**
     * Get MidocoBaggageAllowance value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBaggageAllowance[]
     */
    public function getMidocoBaggageAllowance(): array
    {
        return $this->MidocoBaggageAllowance;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBaggageAllowance method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBaggageAllowance method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBaggageAllowanceForArrayConstraintsFromSetMidocoBaggageAllowance(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoBaggageAllowanceResponseMidocoBaggageAllowanceItem) {
            // validation for constraint: itemType
            if (!$getMidocoBaggageAllowanceResponseMidocoBaggageAllowanceItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBaggageAllowance) {
                $invalidValues[] = is_object($getMidocoBaggageAllowanceResponseMidocoBaggageAllowanceItem) ? get_class($getMidocoBaggageAllowanceResponseMidocoBaggageAllowanceItem) : sprintf('%s(%s)', gettype($getMidocoBaggageAllowanceResponseMidocoBaggageAllowanceItem), var_export($getMidocoBaggageAllowanceResponseMidocoBaggageAllowanceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBaggageAllowance property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBaggageAllowance, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBaggageAllowance value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBaggageAllowance[] $midocoBaggageAllowance
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoBaggageAllowanceResponse
     */
    public function setMidocoBaggageAllowance(array $midocoBaggageAllowance = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBaggageAllowanceArrayErrorMessage = self::validateMidocoBaggageAllowanceForArrayConstraintsFromSetMidocoBaggageAllowance($midocoBaggageAllowance))) {
            throw new InvalidArgumentException($midocoBaggageAllowanceArrayErrorMessage, __LINE__);
        }
        $this->MidocoBaggageAllowance = $midocoBaggageAllowance;
        
        return $this;
    }
    /**
     * Add item to MidocoBaggageAllowance value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBaggageAllowance $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoBaggageAllowanceResponse
     */
    public function addToMidocoBaggageAllowance(\Pggns\MidocoApi\Order\StructType\MidocoBaggageAllowance $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBaggageAllowance) {
            throw new InvalidArgumentException(sprintf('The MidocoBaggageAllowance property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBaggageAllowance, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBaggageAllowance[] = $item;
        
        return $this;
    }
}
