<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeBillingDocumentForOrderResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: makeBillingDocumentForOrder --- this method creates a new BillingDocument for an Order (all the SellItems in the Order) Request: - a OrderDTO - a flag indicating that a new document should be created - a flag indication that any
 * pre-existing document should be deleted. Response is: - a BillingDocumentDTO - zero or more BillingPositionDTO
 * @subpackage Structs
 */
class MakeBillingDocumentForOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * The MidocoOnlinePaymentTransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOnlinePaymentTransaction
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction[]
     */
    protected array $MidocoOnlinePaymentTransaction = [];
    /**
     * Constructor method for MakeBillingDocumentForOrderResponse
     * @uses MakeBillingDocumentForOrderResponse::setMidocoBillingDocument()
     * @uses MakeBillingDocumentForOrderResponse::setMidocoOnlinePaymentTransaction()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction[] $midocoOnlinePaymentTransaction
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null, array $midocoOnlinePaymentTransaction = [])
    {
        $this
            ->setMidocoBillingDocument($midocoBillingDocument)
            ->setMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction);
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    public function getMidocoBillingDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument
    {
        return $this->MidocoBillingDocument;
    }
    /**
     * Set MidocoBillingDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderResponse
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
    /**
     * Get MidocoOnlinePaymentTransaction value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction[]
     */
    public function getMidocoOnlinePaymentTransaction(): array
    {
        return $this->MidocoOnlinePaymentTransaction;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOnlinePaymentTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOnlinePaymentTransaction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOnlinePaymentTransactionForArrayConstraintsFromSetMidocoOnlinePaymentTransaction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $makeBillingDocumentForOrderResponseMidocoOnlinePaymentTransactionItem) {
            // validation for constraint: itemType
            if (!$makeBillingDocumentForOrderResponseMidocoOnlinePaymentTransactionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction) {
                $invalidValues[] = is_object($makeBillingDocumentForOrderResponseMidocoOnlinePaymentTransactionItem) ? get_class($makeBillingDocumentForOrderResponseMidocoOnlinePaymentTransactionItem) : sprintf('%s(%s)', gettype($makeBillingDocumentForOrderResponseMidocoOnlinePaymentTransactionItem), var_export($makeBillingDocumentForOrderResponseMidocoOnlinePaymentTransactionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOnlinePaymentTransaction property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOnlinePaymentTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction[] $midocoOnlinePaymentTransaction
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderResponse
     */
    public function setMidocoOnlinePaymentTransaction(array $midocoOnlinePaymentTransaction = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOnlinePaymentTransactionArrayErrorMessage = self::validateMidocoOnlinePaymentTransactionForArrayConstraintsFromSetMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction))) {
            throw new InvalidArgumentException($midocoOnlinePaymentTransactionArrayErrorMessage, __LINE__);
        }
        $this->MidocoOnlinePaymentTransaction = $midocoOnlinePaymentTransaction;
        
        return $this;
    }
    /**
     * Add item to MidocoOnlinePaymentTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $item
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForOrderResponse
     */
    public function addToMidocoOnlinePaymentTransaction(\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction) {
            throw new InvalidArgumentException(sprintf('The MidocoOnlinePaymentTransaction property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOnlinePaymentTransaction[] = $item;
        
        return $this;
    }
}
