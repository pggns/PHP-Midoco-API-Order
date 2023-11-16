<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVoucherPaymentsResponse StructType
 * @subpackage Structs
 */
class GetVoucherPaymentsResponse extends AbstractStructBase
{
    /**
     * The MidocoVoucherPayment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVoucherPayment
     * @var \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO[]
     */
    protected array $MidocoVoucherPayment = [];
    /**
     * Constructor method for GetVoucherPaymentsResponse
     * @uses GetVoucherPaymentsResponse::setMidocoVoucherPayment()
     * @param \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO[] $midocoVoucherPayment
     */
    public function __construct(array $midocoVoucherPayment = [])
    {
        $this
            ->setMidocoVoucherPayment($midocoVoucherPayment);
    }
    /**
     * Get MidocoVoucherPayment value
     * @return \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO[]
     */
    public function getMidocoVoucherPayment(): array
    {
        return $this->MidocoVoucherPayment;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVoucherPayment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVoucherPayment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVoucherPaymentForArrayConstraintsFromSetMidocoVoucherPayment(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVoucherPaymentsResponseMidocoVoucherPaymentItem) {
            // validation for constraint: itemType
            if (!$getVoucherPaymentsResponseMidocoVoucherPaymentItem instanceof \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO) {
                $invalidValues[] = is_object($getVoucherPaymentsResponseMidocoVoucherPaymentItem) ? get_class($getVoucherPaymentsResponseMidocoVoucherPaymentItem) : sprintf('%s(%s)', gettype($getVoucherPaymentsResponseMidocoVoucherPaymentItem), var_export($getVoucherPaymentsResponseMidocoVoucherPaymentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVoucherPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVoucherPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO[] $midocoVoucherPayment
     * @return \Pggns\MidocoApi\Order\StructType\GetVoucherPaymentsResponse
     */
    public function setMidocoVoucherPayment(array $midocoVoucherPayment = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVoucherPaymentArrayErrorMessage = self::validateMidocoVoucherPaymentForArrayConstraintsFromSetMidocoVoucherPayment($midocoVoucherPayment))) {
            throw new InvalidArgumentException($midocoVoucherPaymentArrayErrorMessage, __LINE__);
        }
        $this->MidocoVoucherPayment = $midocoVoucherPayment;
        
        return $this;
    }
    /**
     * Add item to MidocoVoucherPayment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetVoucherPaymentsResponse
     */
    public function addToMidocoVoucherPayment(\Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoVoucherPayment property can only contain items of type \Pggns\MidocoApi\Order\StructType\VoucherPaymentDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVoucherPayment[] = $item;
        
        return $this;
    }
}
