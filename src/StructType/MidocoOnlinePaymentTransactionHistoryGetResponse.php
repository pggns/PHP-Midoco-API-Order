<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoOnlinePaymentTransactionHistoryGetResponse
 * StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoOnlinePaymentTransactionHistoryGetResponse extends AbstractStructBase
{
    /**
     * The MidocoOnlinePaymentTransactionHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOnlinePaymentTransactionHistory
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory[]
     */
    protected ?array $MidocoOnlinePaymentTransactionHistory = null;
    /**
     * Constructor method for MidocoOnlinePaymentTransactionHistoryGetResponse
     * @uses MidocoOnlinePaymentTransactionHistoryGetResponse::setMidocoOnlinePaymentTransactionHistory()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory[] $midocoOnlinePaymentTransactionHistory
     */
    public function __construct(?array $midocoOnlinePaymentTransactionHistory = null)
    {
        $this
            ->setMidocoOnlinePaymentTransactionHistory($midocoOnlinePaymentTransactionHistory);
    }
    /**
     * Get MidocoOnlinePaymentTransactionHistory value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory[]
     */
    public function getMidocoOnlinePaymentTransactionHistory(): ?array
    {
        return $this->MidocoOnlinePaymentTransactionHistory;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOnlinePaymentTransactionHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOnlinePaymentTransactionHistory method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOnlinePaymentTransactionHistoryForArrayConstraintFromSetMidocoOnlinePaymentTransactionHistory(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoOnlinePaymentTransactionHistoryGetResponseMidocoOnlinePaymentTransactionHistoryItem) {
            // validation for constraint: itemType
            if (!$midocoOnlinePaymentTransactionHistoryGetResponseMidocoOnlinePaymentTransactionHistoryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory) {
                $invalidValues[] = is_object($midocoOnlinePaymentTransactionHistoryGetResponseMidocoOnlinePaymentTransactionHistoryItem) ? get_class($midocoOnlinePaymentTransactionHistoryGetResponseMidocoOnlinePaymentTransactionHistoryItem) : sprintf('%s(%s)', gettype($midocoOnlinePaymentTransactionHistoryGetResponseMidocoOnlinePaymentTransactionHistoryItem), var_export($midocoOnlinePaymentTransactionHistoryGetResponseMidocoOnlinePaymentTransactionHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOnlinePaymentTransactionHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOnlinePaymentTransactionHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory[] $midocoOnlinePaymentTransactionHistory
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistoryGetResponse
     */
    public function setMidocoOnlinePaymentTransactionHistory(?array $midocoOnlinePaymentTransactionHistory = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOnlinePaymentTransactionHistoryArrayErrorMessage = self::validateMidocoOnlinePaymentTransactionHistoryForArrayConstraintFromSetMidocoOnlinePaymentTransactionHistory($midocoOnlinePaymentTransactionHistory))) {
            throw new InvalidArgumentException($midocoOnlinePaymentTransactionHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoOnlinePaymentTransactionHistory = $midocoOnlinePaymentTransactionHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoOnlinePaymentTransactionHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistoryGetResponse
     */
    public function addToMidocoOnlinePaymentTransactionHistory(\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoOnlinePaymentTransactionHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransactionHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOnlinePaymentTransactionHistory[] = $item;
        
        return $this;
    }
}
