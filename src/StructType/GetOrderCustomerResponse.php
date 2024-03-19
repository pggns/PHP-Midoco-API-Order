<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderCustomerResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoOrderCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrderCustomer
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer[]
     */
    protected ?array $MidocoOrderCustomer = null;
    /**
     * Constructor method for GetOrderCustomerResponse
     * @uses GetOrderCustomerResponse::setMidocoOrderCustomer()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer[] $midocoOrderCustomer
     */
    public function __construct(?array $midocoOrderCustomer = null)
    {
        $this
            ->setMidocoOrderCustomer($midocoOrderCustomer);
    }
    /**
     * Get MidocoOrderCustomer value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer[]
     */
    public function getMidocoOrderCustomer(): ?array
    {
        return $this->MidocoOrderCustomer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrderCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrderCustomer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrderCustomerForArrayConstraintFromSetMidocoOrderCustomer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderCustomerResponseMidocoOrderCustomerItem) {
            // validation for constraint: itemType
            if (!$getOrderCustomerResponseMidocoOrderCustomerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer) {
                $invalidValues[] = is_object($getOrderCustomerResponseMidocoOrderCustomerItem) ? get_class($getOrderCustomerResponseMidocoOrderCustomerItem) : sprintf('%s(%s)', gettype($getOrderCustomerResponseMidocoOrderCustomerItem), var_export($getOrderCustomerResponseMidocoOrderCustomerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrderCustomer property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrderCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer[] $midocoOrderCustomer
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderCustomerResponse
     */
    public function setMidocoOrderCustomer(?array $midocoOrderCustomer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrderCustomerArrayErrorMessage = self::validateMidocoOrderCustomerForArrayConstraintFromSetMidocoOrderCustomer($midocoOrderCustomer))) {
            throw new InvalidArgumentException($midocoOrderCustomerArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrderCustomer = $midocoOrderCustomer;
        
        return $this;
    }
    /**
     * Add item to MidocoOrderCustomer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderCustomerResponse
     */
    public function addToMidocoOrderCustomer(\Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer) {
            throw new InvalidArgumentException(sprintf('The MidocoOrderCustomer property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrderCustomer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrderCustomer[] = $item;
        
        return $this;
    }
}
