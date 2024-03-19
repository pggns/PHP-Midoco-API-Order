<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatAccountAssignsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetVatAccountAssignsResponse extends AbstractStructBase
{
    /**
     * The MidocoVatAccountAssign
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVatAccountAssign
     * @var \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO[]
     */
    protected ?array $MidocoVatAccountAssign = null;
    /**
     * Constructor method for GetVatAccountAssignsResponse
     * @uses GetVatAccountAssignsResponse::setMidocoVatAccountAssign()
     * @param \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO[] $midocoVatAccountAssign
     */
    public function __construct(?array $midocoVatAccountAssign = null)
    {
        $this
            ->setMidocoVatAccountAssign($midocoVatAccountAssign);
    }
    /**
     * Get MidocoVatAccountAssign value
     * @return \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO[]
     */
    public function getMidocoVatAccountAssign(): ?array
    {
        return $this->MidocoVatAccountAssign;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVatAccountAssign method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatAccountAssign method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatAccountAssignForArrayConstraintFromSetMidocoVatAccountAssign(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVatAccountAssignsResponseMidocoVatAccountAssignItem) {
            // validation for constraint: itemType
            if (!$getVatAccountAssignsResponseMidocoVatAccountAssignItem instanceof \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO) {
                $invalidValues[] = is_object($getVatAccountAssignsResponseMidocoVatAccountAssignItem) ? get_class($getVatAccountAssignsResponseMidocoVatAccountAssignItem) : sprintf('%s(%s)', gettype($getVatAccountAssignsResponseMidocoVatAccountAssignItem), var_export($getVatAccountAssignsResponseMidocoVatAccountAssignItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatAccountAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatAccountAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO[] $midocoVatAccountAssign
     * @return \Pggns\MidocoApi\Order\StructType\GetVatAccountAssignsResponse
     */
    public function setMidocoVatAccountAssign(?array $midocoVatAccountAssign = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatAccountAssignArrayErrorMessage = self::validateMidocoVatAccountAssignForArrayConstraintFromSetMidocoVatAccountAssign($midocoVatAccountAssign))) {
            throw new InvalidArgumentException($midocoVatAccountAssignArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatAccountAssign = $midocoVatAccountAssign;
        
        return $this;
    }
    /**
     * Add item to MidocoVatAccountAssign value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetVatAccountAssignsResponse
     */
    public function addToMidocoVatAccountAssign(\Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoVatAccountAssign property can only contain items of type \Pggns\MidocoApi\Order\StructType\VatAccountAssignDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatAccountAssign[] = $item;
        
        return $this;
    }
}
