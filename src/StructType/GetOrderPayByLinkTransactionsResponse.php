<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderPayByLinkTransactionsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderPayByLinkTransactionsResponse extends AbstractStructBase
{
    /**
     * The MidocoPayByLinkTransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPayByLinkTransaction
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPayByLinkTransaction[]
     */
    protected ?array $MidocoPayByLinkTransaction = null;
    /**
     * Constructor method for GetOrderPayByLinkTransactionsResponse
     * @uses GetOrderPayByLinkTransactionsResponse::setMidocoPayByLinkTransaction()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPayByLinkTransaction[] $midocoPayByLinkTransaction
     */
    public function __construct(?array $midocoPayByLinkTransaction = null)
    {
        $this
            ->setMidocoPayByLinkTransaction($midocoPayByLinkTransaction);
    }
    /**
     * Get MidocoPayByLinkTransaction value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPayByLinkTransaction[]
     */
    public function getMidocoPayByLinkTransaction(): ?array
    {
        return $this->MidocoPayByLinkTransaction;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPayByLinkTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPayByLinkTransaction method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPayByLinkTransactionForArrayConstraintFromSetMidocoPayByLinkTransaction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderPayByLinkTransactionsResponseMidocoPayByLinkTransactionItem) {
            // validation for constraint: itemType
            if (!$getOrderPayByLinkTransactionsResponseMidocoPayByLinkTransactionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPayByLinkTransaction) {
                $invalidValues[] = is_object($getOrderPayByLinkTransactionsResponseMidocoPayByLinkTransactionItem) ? get_class($getOrderPayByLinkTransactionsResponseMidocoPayByLinkTransactionItem) : sprintf('%s(%s)', gettype($getOrderPayByLinkTransactionsResponseMidocoPayByLinkTransactionItem), var_export($getOrderPayByLinkTransactionsResponseMidocoPayByLinkTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPayByLinkTransaction property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPayByLinkTransaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPayByLinkTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPayByLinkTransaction[] $midocoPayByLinkTransaction
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPayByLinkTransactionsResponse
     */
    public function setMidocoPayByLinkTransaction(?array $midocoPayByLinkTransaction = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPayByLinkTransactionArrayErrorMessage = self::validateMidocoPayByLinkTransactionForArrayConstraintFromSetMidocoPayByLinkTransaction($midocoPayByLinkTransaction))) {
            throw new InvalidArgumentException($midocoPayByLinkTransactionArrayErrorMessage, __LINE__);
        }
        $this->MidocoPayByLinkTransaction = $midocoPayByLinkTransaction;
        
        return $this;
    }
    /**
     * Add item to MidocoPayByLinkTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPayByLinkTransaction $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderPayByLinkTransactionsResponse
     */
    public function addToMidocoPayByLinkTransaction(\Pggns\MidocoApi\Order\StructType\MidocoPayByLinkTransaction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPayByLinkTransaction) {
            throw new InvalidArgumentException(sprintf('The MidocoPayByLinkTransaction property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPayByLinkTransaction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPayByLinkTransaction[] = $item;
        
        return $this;
    }
}
