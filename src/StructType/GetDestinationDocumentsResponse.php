<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDestinationDocumentsResponse StructType
 * @subpackage Structs
 */
class GetDestinationDocumentsResponse extends AbstractStructBase
{
    /**
     * The MidocoDestinationDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDestinationDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument[]
     */
    protected array $MidocoDestinationDocument = [];
    /**
     * Constructor method for GetDestinationDocumentsResponse
     * @uses GetDestinationDocumentsResponse::setMidocoDestinationDocument()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument[] $midocoDestinationDocument
     */
    public function __construct(array $midocoDestinationDocument = [])
    {
        $this
            ->setMidocoDestinationDocument($midocoDestinationDocument);
    }
    /**
     * Get MidocoDestinationDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument[]
     */
    public function getMidocoDestinationDocument(): array
    {
        return $this->MidocoDestinationDocument;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDestinationDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDestinationDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDestinationDocumentForArrayConstraintsFromSetMidocoDestinationDocument(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDestinationDocumentsResponseMidocoDestinationDocumentItem) {
            // validation for constraint: itemType
            if (!$getDestinationDocumentsResponseMidocoDestinationDocumentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument) {
                $invalidValues[] = is_object($getDestinationDocumentsResponseMidocoDestinationDocumentItem) ? get_class($getDestinationDocumentsResponseMidocoDestinationDocumentItem) : sprintf('%s(%s)', gettype($getDestinationDocumentsResponseMidocoDestinationDocumentItem), var_export($getDestinationDocumentsResponseMidocoDestinationDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDestinationDocument property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDestinationDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument[] $midocoDestinationDocument
     * @return \Pggns\MidocoApi\Order\StructType\GetDestinationDocumentsResponse
     */
    public function setMidocoDestinationDocument(array $midocoDestinationDocument = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDestinationDocumentArrayErrorMessage = self::validateMidocoDestinationDocumentForArrayConstraintsFromSetMidocoDestinationDocument($midocoDestinationDocument))) {
            throw new InvalidArgumentException($midocoDestinationDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoDestinationDocument = $midocoDestinationDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoDestinationDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument $item
     * @return \Pggns\MidocoApi\Order\StructType\GetDestinationDocumentsResponse
     */
    public function addToMidocoDestinationDocument(\Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument) {
            throw new InvalidArgumentException(sprintf('The MidocoDestinationDocument property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDestinationDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDestinationDocument[] = $item;
        
        return $this;
    }
}
