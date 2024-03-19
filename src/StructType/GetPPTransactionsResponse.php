<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPPTransactionsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPPTransactionsResponse extends AbstractStructBase
{
    /**
     * The MidocoPaypalTransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPaypalTransaction
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPaypalTransaction[]
     */
    protected ?array $MidocoPaypalTransaction = null;
    /**
     * Constructor method for GetPPTransactionsResponse
     * @uses GetPPTransactionsResponse::setMidocoPaypalTransaction()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaypalTransaction[] $midocoPaypalTransaction
     */
    public function __construct(?array $midocoPaypalTransaction = null)
    {
        $this
            ->setMidocoPaypalTransaction($midocoPaypalTransaction);
    }
    /**
     * Get MidocoPaypalTransaction value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaypalTransaction[]
     */
    public function getMidocoPaypalTransaction(): ?array
    {
        return $this->MidocoPaypalTransaction;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPaypalTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPaypalTransaction method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPaypalTransactionForArrayConstraintFromSetMidocoPaypalTransaction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPPTransactionsResponseMidocoPaypalTransactionItem) {
            // validation for constraint: itemType
            if (!$getPPTransactionsResponseMidocoPaypalTransactionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPaypalTransaction) {
                $invalidValues[] = is_object($getPPTransactionsResponseMidocoPaypalTransactionItem) ? get_class($getPPTransactionsResponseMidocoPaypalTransactionItem) : sprintf('%s(%s)', gettype($getPPTransactionsResponseMidocoPaypalTransactionItem), var_export($getPPTransactionsResponseMidocoPaypalTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPaypalTransaction property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPaypalTransaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPaypalTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaypalTransaction[] $midocoPaypalTransaction
     * @return \Pggns\MidocoApi\Order\StructType\GetPPTransactionsResponse
     */
    public function setMidocoPaypalTransaction(?array $midocoPaypalTransaction = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPaypalTransactionArrayErrorMessage = self::validateMidocoPaypalTransactionForArrayConstraintFromSetMidocoPaypalTransaction($midocoPaypalTransaction))) {
            throw new InvalidArgumentException($midocoPaypalTransactionArrayErrorMessage, __LINE__);
        }
        $this->MidocoPaypalTransaction = $midocoPaypalTransaction;
        
        return $this;
    }
    /**
     * Add item to MidocoPaypalTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaypalTransaction $item
     * @return \Pggns\MidocoApi\Order\StructType\GetPPTransactionsResponse
     */
    public function addToMidocoPaypalTransaction(\Pggns\MidocoApi\Order\StructType\MidocoPaypalTransaction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPaypalTransaction) {
            throw new InvalidArgumentException(sprintf('The MidocoPaypalTransaction property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPaypalTransaction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPaypalTransaction[] = $item;
        
        return $this;
    }
}
