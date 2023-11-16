<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInvoiceOrderByCustomerIdResponse StructType
 * @subpackage Structs
 */
class GetInvoiceOrderByCustomerIdResponse extends AbstractStructBase
{
    /**
     * The MidocoInvoiceInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoiceInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo[]
     */
    protected array $MidocoInvoiceInfo = [];
    /**
     * Constructor method for GetInvoiceOrderByCustomerIdResponse
     * @uses GetInvoiceOrderByCustomerIdResponse::setMidocoInvoiceInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo[] $midocoInvoiceInfo
     */
    public function __construct(array $midocoInvoiceInfo = [])
    {
        $this
            ->setMidocoInvoiceInfo($midocoInvoiceInfo);
    }
    /**
     * Get MidocoInvoiceInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo[]
     */
    public function getMidocoInvoiceInfo(): array
    {
        return $this->MidocoInvoiceInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoInvoiceInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoiceInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoiceInfoForArrayConstraintsFromSetMidocoInvoiceInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getInvoiceOrderByCustomerIdResponseMidocoInvoiceInfoItem) {
            // validation for constraint: itemType
            if (!$getInvoiceOrderByCustomerIdResponseMidocoInvoiceInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo) {
                $invalidValues[] = is_object($getInvoiceOrderByCustomerIdResponseMidocoInvoiceInfoItem) ? get_class($getInvoiceOrderByCustomerIdResponseMidocoInvoiceInfoItem) : sprintf('%s(%s)', gettype($getInvoiceOrderByCustomerIdResponseMidocoInvoiceInfoItem), var_export($getInvoiceOrderByCustomerIdResponseMidocoInvoiceInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoiceInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoiceInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo[] $midocoInvoiceInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetInvoiceOrderByCustomerIdResponse
     */
    public function setMidocoInvoiceInfo(array $midocoInvoiceInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoiceInfoArrayErrorMessage = self::validateMidocoInvoiceInfoForArrayConstraintsFromSetMidocoInvoiceInfo($midocoInvoiceInfo))) {
            throw new InvalidArgumentException($midocoInvoiceInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoiceInfo = $midocoInvoiceInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoiceInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetInvoiceOrderByCustomerIdResponse
     */
    public function addToMidocoInvoiceInfo(\Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoiceInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoiceInfo[] = $item;
        
        return $this;
    }
}
