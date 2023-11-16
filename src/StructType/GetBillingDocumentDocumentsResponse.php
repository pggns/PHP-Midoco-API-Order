<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingDocumentDocumentsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getBillingDocumentDocuments --- returns the list of documents corresponding to a BillingDocument having the id BillingDocumentId
 * @subpackage Structs
 */
class GetBillingDocumentDocumentsResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDocumentDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingDocumentDocument
     * @var \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO[]
     */
    protected array $MidocoBillingDocumentDocument = [];
    /**
     * Constructor method for GetBillingDocumentDocumentsResponse
     * @uses GetBillingDocumentDocumentsResponse::setMidocoBillingDocumentDocument()
     * @param \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO[] $midocoBillingDocumentDocument
     */
    public function __construct(array $midocoBillingDocumentDocument = [])
    {
        $this
            ->setMidocoBillingDocumentDocument($midocoBillingDocumentDocument);
    }
    /**
     * Get MidocoBillingDocumentDocument value
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO[]
     */
    public function getMidocoBillingDocumentDocument(): array
    {
        return $this->MidocoBillingDocumentDocument;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingDocumentDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingDocumentDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingDocumentDocumentForArrayConstraintsFromSetMidocoBillingDocumentDocument(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingDocumentDocumentsResponseMidocoBillingDocumentDocumentItem) {
            // validation for constraint: itemType
            if (!$getBillingDocumentDocumentsResponseMidocoBillingDocumentDocumentItem instanceof \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO) {
                $invalidValues[] = is_object($getBillingDocumentDocumentsResponseMidocoBillingDocumentDocumentItem) ? get_class($getBillingDocumentDocumentsResponseMidocoBillingDocumentDocumentItem) : sprintf('%s(%s)', gettype($getBillingDocumentDocumentsResponseMidocoBillingDocumentDocumentItem), var_export($getBillingDocumentDocumentsResponseMidocoBillingDocumentDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingDocumentDocument property can only contain items of type \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingDocumentDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO[] $midocoBillingDocumentDocument
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentDocumentsResponse
     */
    public function setMidocoBillingDocumentDocument(array $midocoBillingDocumentDocument = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingDocumentDocumentArrayErrorMessage = self::validateMidocoBillingDocumentDocumentForArrayConstraintsFromSetMidocoBillingDocumentDocument($midocoBillingDocumentDocument))) {
            throw new InvalidArgumentException($midocoBillingDocumentDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingDocumentDocument = $midocoBillingDocumentDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingDocumentDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingDocumentDocumentsResponse
     */
    public function addToMidocoBillingDocumentDocument(\Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingDocumentDocument property can only contain items of type \Pggns\MidocoApi\Order\StructType\BillingDocumentDocumentDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingDocumentDocument[] = $item;
        
        return $this;
    }
}
