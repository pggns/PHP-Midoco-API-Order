<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFilteredBillingDocumentsForOrderResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getFilteredBillingDocumentsForOrder --- returns the list of billing documents corresponding to the given order id and filter ('a'=all, 'p'=printed, 'o'=opened )
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetFilteredBillingDocumentsForOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument[]
     */
    protected ?array $MidocoBillingDocument = null;
    /**
     * Constructor method for GetFilteredBillingDocumentsForOrderResponse
     * @uses GetFilteredBillingDocumentsForOrderResponse::setMidocoBillingDocument()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument[] $midocoBillingDocument
     */
    public function __construct(?array $midocoBillingDocument = null)
    {
        $this
            ->setMidocoBillingDocument($midocoBillingDocument);
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument[]
     */
    public function getMidocoBillingDocument(): ?array
    {
        return $this->MidocoBillingDocument;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingDocument method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingDocumentForArrayConstraintFromSetMidocoBillingDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFilteredBillingDocumentsForOrderResponseMidocoBillingDocumentItem) {
            // validation for constraint: itemType
            if (!$getFilteredBillingDocumentsForOrderResponseMidocoBillingDocumentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument) {
                $invalidValues[] = is_object($getFilteredBillingDocumentsForOrderResponseMidocoBillingDocumentItem) ? get_class($getFilteredBillingDocumentsForOrderResponseMidocoBillingDocumentItem) : sprintf('%s(%s)', gettype($getFilteredBillingDocumentsForOrderResponseMidocoBillingDocumentItem), var_export($getFilteredBillingDocumentsForOrderResponseMidocoBillingDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingDocument property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument[] $midocoBillingDocument
     * @return \Pggns\MidocoApi\Order\StructType\GetFilteredBillingDocumentsForOrderResponse
     */
    public function setMidocoBillingDocument(?array $midocoBillingDocument = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingDocumentArrayErrorMessage = self::validateMidocoBillingDocumentForArrayConstraintFromSetMidocoBillingDocument($midocoBillingDocument))) {
            throw new InvalidArgumentException($midocoBillingDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $item
     * @return \Pggns\MidocoApi\Order\StructType\GetFilteredBillingDocumentsForOrderResponse
     */
    public function addToMidocoBillingDocument(\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingDocument property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingDocument[] = $item;
        
        return $this;
    }
}
