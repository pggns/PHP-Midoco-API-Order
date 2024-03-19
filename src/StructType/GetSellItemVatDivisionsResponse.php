<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemVatDivisionsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSellItemVatDivisionsResponse extends AbstractStructBase
{
    /**
     * The MidocoSellItemVatDivision
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemVatDivision
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[]
     */
    protected ?array $MidocoSellItemVatDivision = null;
    /**
     * Constructor method for GetSellItemVatDivisionsResponse
     * @uses GetSellItemVatDivisionsResponse::setMidocoSellItemVatDivision()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[] $midocoSellItemVatDivision
     */
    public function __construct(?array $midocoSellItemVatDivision = null)
    {
        $this
            ->setMidocoSellItemVatDivision($midocoSellItemVatDivision);
    }
    /**
     * Get MidocoSellItemVatDivision value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[]
     */
    public function getMidocoSellItemVatDivision(): ?array
    {
        return $this->MidocoSellItemVatDivision;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSellItemVatDivision method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemVatDivision method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemVatDivisionForArrayConstraintFromSetMidocoSellItemVatDivision(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellItemVatDivisionsResponseMidocoSellItemVatDivisionItem) {
            // validation for constraint: itemType
            if (!$getSellItemVatDivisionsResponseMidocoSellItemVatDivisionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision) {
                $invalidValues[] = is_object($getSellItemVatDivisionsResponseMidocoSellItemVatDivisionItem) ? get_class($getSellItemVatDivisionsResponseMidocoSellItemVatDivisionItem) : sprintf('%s(%s)', gettype($getSellItemVatDivisionsResponseMidocoSellItemVatDivisionItem), var_export($getSellItemVatDivisionsResponseMidocoSellItemVatDivisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision[] $midocoSellItemVatDivision
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemVatDivisionsResponse
     */
    public function setMidocoSellItemVatDivision(?array $midocoSellItemVatDivision = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemVatDivisionArrayErrorMessage = self::validateMidocoSellItemVatDivisionForArrayConstraintFromSetMidocoSellItemVatDivision($midocoSellItemVatDivision))) {
            throw new InvalidArgumentException($midocoSellItemVatDivisionArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemVatDivision = $midocoSellItemVatDivision;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemVatDivisionsResponse
     */
    public function addToMidocoSellItemVatDivision(\Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemVatDivision, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemVatDivision[] = $item;
        
        return $this;
    }
}
