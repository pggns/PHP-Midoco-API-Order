<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOnlinePaymentTransaction4CreditReceiptResponse
 * StructType
 * @subpackage Structs
 */
class GetOnlinePaymentTransaction4CreditReceiptResponse extends AbstractStructBase
{
    /**
     * The MidocoCreditPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCreditPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCreditPosition[]
     */
    protected array $MidocoCreditPosition = [];
    /**
     * Constructor method for GetOnlinePaymentTransaction4CreditReceiptResponse
     * @uses GetOnlinePaymentTransaction4CreditReceiptResponse::setMidocoCreditPosition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCreditPosition[] $midocoCreditPosition
     */
    public function __construct(array $midocoCreditPosition = [])
    {
        $this
            ->setMidocoCreditPosition($midocoCreditPosition);
    }
    /**
     * Get MidocoCreditPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCreditPosition[]
     */
    public function getMidocoCreditPosition(): array
    {
        return $this->MidocoCreditPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCreditPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCreditPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCreditPositionForArrayConstraintsFromSetMidocoCreditPosition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOnlinePaymentTransaction4CreditReceiptResponseMidocoCreditPositionItem) {
            // validation for constraint: itemType
            if (!$getOnlinePaymentTransaction4CreditReceiptResponseMidocoCreditPositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCreditPosition) {
                $invalidValues[] = is_object($getOnlinePaymentTransaction4CreditReceiptResponseMidocoCreditPositionItem) ? get_class($getOnlinePaymentTransaction4CreditReceiptResponseMidocoCreditPositionItem) : sprintf('%s(%s)', gettype($getOnlinePaymentTransaction4CreditReceiptResponseMidocoCreditPositionItem), var_export($getOnlinePaymentTransaction4CreditReceiptResponseMidocoCreditPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCreditPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCreditPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCreditPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCreditPosition[] $midocoCreditPosition
     * @return \Pggns\MidocoApi\Order\StructType\GetOnlinePaymentTransaction4CreditReceiptResponse
     */
    public function setMidocoCreditPosition(array $midocoCreditPosition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCreditPositionArrayErrorMessage = self::validateMidocoCreditPositionForArrayConstraintsFromSetMidocoCreditPosition($midocoCreditPosition))) {
            throw new InvalidArgumentException($midocoCreditPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoCreditPosition = $midocoCreditPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoCreditPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCreditPosition $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOnlinePaymentTransaction4CreditReceiptResponse
     */
    public function addToMidocoCreditPosition(\Pggns\MidocoApi\Order\StructType\MidocoCreditPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCreditPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoCreditPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCreditPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCreditPosition[] = $item;
        
        return $this;
    }
}
