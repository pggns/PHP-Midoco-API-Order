<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingDocumentForSellItemResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getBillingDocumentForSellItem --- used to test if a previously unprinted document already exists. GUI can use this to ask if a new document should be created or the existing document should be extended.
 * @subpackage Structs
 */
class GetBillingDocumentForSellItemResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument[]
     */
    protected array $MidocoBillingDocument = [];
    /**
     * Constructor method for GetBillingDocumentForSellItemResponse
     * @uses GetBillingDocumentForSellItemResponse::setMidocoBillingDocument()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument[] $midocoBillingDocument
     */
    public function __construct(array $midocoBillingDocument = [])
    {
        $this
            ->setMidocoBillingDocument($midocoBillingDocument);
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument[]
     */
    public function getMidocoBillingDocument(): array
    {
        return $this->MidocoBillingDocument;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingDocumentForArrayConstraintsFromSetMidocoBillingDocument(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingDocumentForSellItemResponseMidocoBillingDocumentItem) {
            // validation for constraint: itemType
            if (!$getBillingDocumentForSellItemResponseMidocoBillingDocumentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument) {
                $invalidValues[] = is_object($getBillingDocumentForSellItemResponseMidocoBillingDocumentItem) ? get_class($getBillingDocumentForSellItemResponseMidocoBillingDocumentItem) : sprintf('%s(%s)', gettype($getBillingDocumentForSellItemResponseMidocoBillingDocumentItem), var_export($getBillingDocumentForSellItemResponseMidocoBillingDocumentItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForSellItemResponse
     */
    public function setMidocoBillingDocument(array $midocoBillingDocument = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingDocumentArrayErrorMessage = self::validateMidocoBillingDocumentForArrayConstraintsFromSetMidocoBillingDocument($midocoBillingDocument))) {
            throw new InvalidArgumentException($midocoBillingDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentForSellItemResponse
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
