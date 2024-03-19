<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderVoucherResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderVoucherResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderVoucher
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderVoucher
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher[]
     */
    protected ?array $MidocoOrderVoucher = null;
    /**
     * Constructor method for GetOrderVoucherResponse
     * @uses GetOrderVoucherResponse::setMidocoOrderVoucher()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher[] $midocoOrderVoucher
     */
    public function __construct(?array $midocoOrderVoucher = null)
    {
        $this
            ->setMidocoOrderVoucher($midocoOrderVoucher);
    }
    /**
     * Get MidocoOrderVoucher value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher[]
     */
    public function getMidocoOrderVoucher(): ?array
    {
        return $this->MidocoOrderVoucher;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderVoucher method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderVoucher method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderVoucherForArrayConstraintFromSetMidocoOrderVoucher(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderVoucherResponseMidocoOrderVoucherItem) {
            // validation for constraint: itemType
            if (!$getOrderVoucherResponseMidocoOrderVoucherItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher) {
                $invalidValues[] = is_object($getOrderVoucherResponseMidocoOrderVoucherItem) ? get_class($getOrderVoucherResponseMidocoOrderVoucherItem) : sprintf('%s(%s)', gettype($getOrderVoucherResponseMidocoOrderVoucherItem), var_export($getOrderVoucherResponseMidocoOrderVoucherItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderVoucher property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderVoucher value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher[] $midocoOrderVoucher
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderVoucherResponse
     */
    public function setMidocoOrderVoucher(?array $midocoOrderVoucher = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderVoucherArrayErrorMessage = self::validateMidocoOrderVoucherForArrayConstraintFromSetMidocoOrderVoucher($midocoOrderVoucher))) {
            throw new InvalidArgumentException($midocoOrderVoucherArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderVoucher = $midocoOrderVoucher;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderVoucher value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderVoucherResponse
     */
    public function addToMidocoOrderVoucher(\Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderVoucher property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderVoucher, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderVoucher[] = $item;
        
        return $this;
    }
}
