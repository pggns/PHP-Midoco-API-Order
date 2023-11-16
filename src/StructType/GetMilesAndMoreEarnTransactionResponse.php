<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMilesAndMoreEarnTransactionResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the requested and found Miles & More earn transactions. If none of the requested transactions can be found, an exception is thrown.
 * @subpackage Structs
 */
class GetMilesAndMoreEarnTransactionResponse extends AbstractStructBase
{
    /**
     * The MidocoMilesAndMoreEarnTransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoMilesAndMoreEarnTransaction
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction[]
     */
    protected array $MidocoMilesAndMoreEarnTransaction = [];
    /**
     * Constructor method for GetMilesAndMoreEarnTransactionResponse
     * @uses GetMilesAndMoreEarnTransactionResponse::setMidocoMilesAndMoreEarnTransaction()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction[] $midocoMilesAndMoreEarnTransaction
     */
    public function __construct(array $midocoMilesAndMoreEarnTransaction)
    {
        $this
            ->setMidocoMilesAndMoreEarnTransaction($midocoMilesAndMoreEarnTransaction);
    }
    /**
     * Get MidocoMilesAndMoreEarnTransaction value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction[]
     */
    public function getMidocoMilesAndMoreEarnTransaction(): array
    {
        return $this->MidocoMilesAndMoreEarnTransaction;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMilesAndMoreEarnTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMilesAndMoreEarnTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMilesAndMoreEarnTransactionForArrayConstraintsFromSetMidocoMilesAndMoreEarnTransaction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMilesAndMoreEarnTransactionResponseMidocoMilesAndMoreEarnTransactionItem) {
            // validation for constraint: itemType
            if (!$getMilesAndMoreEarnTransactionResponseMidocoMilesAndMoreEarnTransactionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction) {
                $invalidValues[] = is_object($getMilesAndMoreEarnTransactionResponseMidocoMilesAndMoreEarnTransactionItem) ? get_class($getMilesAndMoreEarnTransactionResponseMidocoMilesAndMoreEarnTransactionItem) : sprintf('%s(%s)', gettype($getMilesAndMoreEarnTransactionResponseMidocoMilesAndMoreEarnTransactionItem), var_export($getMilesAndMoreEarnTransactionResponseMidocoMilesAndMoreEarnTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMilesAndMoreEarnTransaction property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMilesAndMoreEarnTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction[] $midocoMilesAndMoreEarnTransaction
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreEarnTransactionResponse
     */
    public function setMidocoMilesAndMoreEarnTransaction(array $midocoMilesAndMoreEarnTransaction): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMilesAndMoreEarnTransactionArrayErrorMessage = self::validateMidocoMilesAndMoreEarnTransactionForArrayConstraintsFromSetMidocoMilesAndMoreEarnTransaction($midocoMilesAndMoreEarnTransaction))) {
            throw new InvalidArgumentException($midocoMilesAndMoreEarnTransactionArrayErrorMessage, __LINE__);
        }
        $this->MidocoMilesAndMoreEarnTransaction = $midocoMilesAndMoreEarnTransaction;
        
        return $this;
    }
    /**
     * Add item to MidocoMilesAndMoreEarnTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreEarnTransactionResponse
     */
    public function addToMidocoMilesAndMoreEarnTransaction(\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction) {
            throw new InvalidArgumentException(sprintf('The MidocoMilesAndMoreEarnTransaction property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnTransaction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMilesAndMoreEarnTransaction[] = $item;
        
        return $this;
    }
}
