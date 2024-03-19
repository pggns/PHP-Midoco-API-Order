<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierAddressListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierAddressListResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAddress
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress[]
     */
    protected ?array $MidocoSupplierAddress = null;
    /**
     * Constructor method for GetSupplierAddressListResponse
     * @uses GetSupplierAddressListResponse::setMidocoSupplierAddress()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress[] $midocoSupplierAddress
     */
    public function __construct(?array $midocoSupplierAddress = null)
    {
        $this
            ->setMidocoSupplierAddress($midocoSupplierAddress);
    }
    /**
     * Get MidocoSupplierAddress value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress[]
     */
    public function getMidocoSupplierAddress(): ?array
    {
        return $this->MidocoSupplierAddress;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAddressForArrayConstraintFromSetMidocoSupplierAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierAddressListResponseMidocoSupplierAddressItem) {
            // validation for constraint: itemType
            if (!$getSupplierAddressListResponseMidocoSupplierAddressItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress) {
                $invalidValues[] = is_object($getSupplierAddressListResponseMidocoSupplierAddressItem) ? get_class($getSupplierAddressListResponseMidocoSupplierAddressItem) : sprintf('%s(%s)', gettype($getSupplierAddressListResponseMidocoSupplierAddressItem), var_export($getSupplierAddressListResponseMidocoSupplierAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAddress property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress[] $midocoSupplierAddress
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAddressListResponse
     */
    public function setMidocoSupplierAddress(?array $midocoSupplierAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAddressArrayErrorMessage = self::validateMidocoSupplierAddressForArrayConstraintFromSetMidocoSupplierAddress($midocoSupplierAddress))) {
            throw new InvalidArgumentException($midocoSupplierAddressArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAddress = $midocoSupplierAddress;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAddress value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAddressListResponse
     */
    public function addToMidocoSupplierAddress(\Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAddress property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAddress[] = $item;
        
        return $this;
    }
}
