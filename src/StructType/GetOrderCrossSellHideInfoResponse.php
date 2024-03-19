<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderCrossSellHideInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderCrossSellHideInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderCrossSell
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderCrossSell
     * @var \Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO[]
     */
    protected ?array $MidocoOrderCrossSell = null;
    /**
     * Constructor method for GetOrderCrossSellHideInfoResponse
     * @uses GetOrderCrossSellHideInfoResponse::setMidocoOrderCrossSell()
     * @param \Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO[] $midocoOrderCrossSell
     */
    public function __construct(?array $midocoOrderCrossSell = null)
    {
        $this
            ->setMidocoOrderCrossSell($midocoOrderCrossSell);
    }
    /**
     * Get MidocoOrderCrossSell value
     * @return \Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO[]
     */
    public function getMidocoOrderCrossSell(): ?array
    {
        return $this->MidocoOrderCrossSell;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderCrossSell method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderCrossSell method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderCrossSellForArrayConstraintFromSetMidocoOrderCrossSell(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderCrossSellHideInfoResponseMidocoOrderCrossSellItem) {
            // validation for constraint: itemType
            if (!$getOrderCrossSellHideInfoResponseMidocoOrderCrossSellItem instanceof \Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO) {
                $invalidValues[] = is_object($getOrderCrossSellHideInfoResponseMidocoOrderCrossSellItem) ? get_class($getOrderCrossSellHideInfoResponseMidocoOrderCrossSellItem) : sprintf('%s(%s)', gettype($getOrderCrossSellHideInfoResponseMidocoOrderCrossSellItem), var_export($getOrderCrossSellHideInfoResponseMidocoOrderCrossSellItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderCrossSell property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderCrossSell value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO[] $midocoOrderCrossSell
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderCrossSellHideInfoResponse
     */
    public function setMidocoOrderCrossSell(?array $midocoOrderCrossSell = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderCrossSellArrayErrorMessage = self::validateMidocoOrderCrossSellForArrayConstraintFromSetMidocoOrderCrossSell($midocoOrderCrossSell))) {
            throw new InvalidArgumentException($midocoOrderCrossSellArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderCrossSell = $midocoOrderCrossSell;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderCrossSell value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderCrossSellHideInfoResponse
     */
    public function addToMidocoOrderCrossSell(\Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderCrossSell property can only contain items of type \Pggns\MidocoApi\Order\StructType\OrderCrossSellDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderCrossSell[] = $item;
        
        return $this;
    }
}
