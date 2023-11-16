<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVouchersForOrderResponse StructType
 * @subpackage Structs
 */
class GetVouchersForOrderResponse extends AbstractStructBase
{
    /**
     * The VoucherInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: VoucherInfo
     * @var \Pggns\MidocoApi\Order\StructType\VoucherInfo[]
     */
    protected array $VoucherInfo = [];
    /**
     * Constructor method for GetVouchersForOrderResponse
     * @uses GetVouchersForOrderResponse::setVoucherInfo()
     * @param \Pggns\MidocoApi\Order\StructType\VoucherInfo[] $voucherInfo
     */
    public function __construct(array $voucherInfo = [])
    {
        $this
            ->setVoucherInfo($voucherInfo);
    }
    /**
     * Get VoucherInfo value
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo[]
     */
    public function getVoucherInfo(): array
    {
        return $this->VoucherInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setVoucherInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVoucherInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVoucherInfoForArrayConstraintsFromSetVoucherInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVouchersForOrderResponseVoucherInfoItem) {
            // validation for constraint: itemType
            if (!$getVouchersForOrderResponseVoucherInfoItem instanceof \Pggns\MidocoApi\Order\StructType\VoucherInfo) {
                $invalidValues[] = is_object($getVouchersForOrderResponseVoucherInfoItem) ? get_class($getVouchersForOrderResponseVoucherInfoItem) : sprintf('%s(%s)', gettype($getVouchersForOrderResponseVoucherInfoItem), var_export($getVouchersForOrderResponseVoucherInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VoucherInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\VoucherInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set VoucherInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VoucherInfo[] $voucherInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetVouchersForOrderResponse
     */
    public function setVoucherInfo(array $voucherInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($voucherInfoArrayErrorMessage = self::validateVoucherInfoForArrayConstraintsFromSetVoucherInfo($voucherInfo))) {
            throw new InvalidArgumentException($voucherInfoArrayErrorMessage, __LINE__);
        }
        $this->VoucherInfo = $voucherInfo;
        
        return $this;
    }
    /**
     * Add item to VoucherInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VoucherInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetVouchersForOrderResponse
     */
    public function addToVoucherInfo(\Pggns\MidocoApi\Order\StructType\VoucherInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\VoucherInfo) {
            throw new InvalidArgumentException(sprintf('The VoucherInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\VoucherInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VoucherInfo[] = $item;
        
        return $this;
    }
}
