<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOrderPaymentConfirmationInfo StructType
 * @subpackage Structs
 */
class MidocoOrderPaymentConfirmationInfo extends AbstractStructBase
{
    /**
     * The PaymentConfirmationInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\PaymentConfirmationInfo[]
     */
    protected array $PaymentConfirmationInfo = [];
    /**
     * Constructor method for MidocoOrderPaymentConfirmationInfo
     * @uses MidocoOrderPaymentConfirmationInfo::setPaymentConfirmationInfo()
     * @param \Pggns\MidocoApi\Order\StructType\PaymentConfirmationInfo[] $paymentConfirmationInfo
     */
    public function __construct(array $paymentConfirmationInfo = [])
    {
        $this
            ->setPaymentConfirmationInfo($paymentConfirmationInfo);
    }
    /**
     * Get PaymentConfirmationInfo value
     * @return \Pggns\MidocoApi\Order\StructType\PaymentConfirmationInfo[]
     */
    public function getPaymentConfirmationInfo(): array
    {
        return $this->PaymentConfirmationInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentConfirmationInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentConfirmationInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentConfirmationInfoForArrayConstraintsFromSetPaymentConfirmationInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOrderPaymentConfirmationInfoPaymentConfirmationInfoItem) {
            // validation for constraint: itemType
            if (!$midocoOrderPaymentConfirmationInfoPaymentConfirmationInfoItem instanceof \Pggns\MidocoApi\Order\StructType\PaymentConfirmationInfo) {
                $invalidValues[] = is_object($midocoOrderPaymentConfirmationInfoPaymentConfirmationInfoItem) ? get_class($midocoOrderPaymentConfirmationInfoPaymentConfirmationInfoItem) : sprintf('%s(%s)', gettype($midocoOrderPaymentConfirmationInfoPaymentConfirmationInfoItem), var_export($midocoOrderPaymentConfirmationInfoPaymentConfirmationInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentConfirmationInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\PaymentConfirmationInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentConfirmationInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PaymentConfirmationInfo[] $paymentConfirmationInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderPaymentConfirmationInfo
     */
    public function setPaymentConfirmationInfo(array $paymentConfirmationInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($paymentConfirmationInfoArrayErrorMessage = self::validatePaymentConfirmationInfoForArrayConstraintsFromSetPaymentConfirmationInfo($paymentConfirmationInfo))) {
            throw new InvalidArgumentException($paymentConfirmationInfoArrayErrorMessage, __LINE__);
        }
        $this->PaymentConfirmationInfo = $paymentConfirmationInfo;
        
        return $this;
    }
    /**
     * Add item to PaymentConfirmationInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PaymentConfirmationInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderPaymentConfirmationInfo
     */
    public function addToPaymentConfirmationInfo(\Pggns\MidocoApi\Order\StructType\PaymentConfirmationInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\PaymentConfirmationInfo) {
            throw new InvalidArgumentException(sprintf('The PaymentConfirmationInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\PaymentConfirmationInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PaymentConfirmationInfo[] = $item;
        
        return $this;
    }
}
