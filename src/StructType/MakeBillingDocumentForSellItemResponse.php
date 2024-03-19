<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeBillingDocumentForSellItemResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: makeBillingDocumentForSellItem --- this method creates a new BillingDocument for a SellItem Request is constructed: - a Sell-Item - a flag indicating, that a new document should be created - a flag indication that any pre-existing
 * document should be deleted. Response is: - a BillingDocumentDTO - zero or more BillingPositionDTO The above methods will find out if any unprinted document already exists for any of the SellItems. In case this is the case, the method has to consider
 * the flag new_document: - if this is true, delete the pre-existing document in case the second flag is also set to true, and unassign the positions from the deleted record (do not delete the positions, in case they are linked to a sell-item or an
 * online-payment record), manual records should be deleted. Collect all unassigned records for the sellItems in a new document, which have their calculated printing date reached. Assign the positions to the newly created document. Fill fields
 * creation-user/date, OrgUnit, Customer fields if present, Debitor (guessed from Order or Customer). Calculate total-price as sum from all the billing-positions
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MakeBillingDocumentForSellItemResponse extends AbstractStructBase
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
    protected ?array $MidocoOnlinePaymentTransaction = null;
    /**
     * Constructor method for MakeBillingDocumentForSellItemResponse
     * @uses MakeBillingDocumentForSellItemResponse::setMidocoBillingDocument()
     * @uses MakeBillingDocumentForSellItemResponse::setMidocoOnlinePaymentTransaction()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction[] $midocoOnlinePaymentTransaction
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null, ?array $midocoOnlinePaymentTransaction = null)
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForSellItemResponse
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
    public function getMidocoOnlinePaymentTransaction(): ?array
    {
        return $this->MidocoOnlinePaymentTransaction;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOnlinePaymentTransaction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOnlinePaymentTransaction method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOnlinePaymentTransactionForArrayConstraintFromSetMidocoOnlinePaymentTransaction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $makeBillingDocumentForSellItemResponseMidocoOnlinePaymentTransactionItem) {
            // validation for constraint: itemType
            if (!$makeBillingDocumentForSellItemResponseMidocoOnlinePaymentTransactionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction) {
                $invalidValues[] = is_object($makeBillingDocumentForSellItemResponseMidocoOnlinePaymentTransactionItem) ? get_class($makeBillingDocumentForSellItemResponseMidocoOnlinePaymentTransactionItem) : sprintf('%s(%s)', gettype($makeBillingDocumentForSellItemResponseMidocoOnlinePaymentTransactionItem), var_export($makeBillingDocumentForSellItemResponseMidocoOnlinePaymentTransactionItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForSellItemResponse
     */
    public function setMidocoOnlinePaymentTransaction(?array $midocoOnlinePaymentTransaction = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOnlinePaymentTransactionArrayErrorMessage = self::validateMidocoOnlinePaymentTransactionForArrayConstraintFromSetMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction))) {
            throw new InvalidArgumentException($midocoOnlinePaymentTransactionArrayErrorMessage, __LINE__);
        }
        $this->MidocoOnlinePaymentTransaction = $midocoOnlinePaymentTransaction;
        
        return $this;
    }
    /**
     * Add item to MidocoOnlinePaymentTransaction value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $item
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForSellItemResponse
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
