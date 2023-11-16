<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierDocumentsResponse StructType
 * @subpackage Structs
 */
class GetSupplierDocumentsResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierDocument[]
     */
    protected array $MidocoSupplierDocument = [];
    /**
     * Constructor method for GetSupplierDocumentsResponse
     * @uses GetSupplierDocumentsResponse::setMidocoSupplierDocument()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierDocument[] $midocoSupplierDocument
     */
    public function __construct(array $midocoSupplierDocument = [])
    {
        $this
            ->setMidocoSupplierDocument($midocoSupplierDocument);
    }
    /**
     * Get MidocoSupplierDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierDocument[]
     */
    public function getMidocoSupplierDocument(): array
    {
        return $this->MidocoSupplierDocument;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierDocumentForArrayConstraintsFromSetMidocoSupplierDocument(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierDocumentsResponseMidocoSupplierDocumentItem) {
            // validation for constraint: itemType
            if (!$getSupplierDocumentsResponseMidocoSupplierDocumentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierDocument) {
                $invalidValues[] = is_object($getSupplierDocumentsResponseMidocoSupplierDocumentItem) ? get_class($getSupplierDocumentsResponseMidocoSupplierDocumentItem) : sprintf('%s(%s)', gettype($getSupplierDocumentsResponseMidocoSupplierDocumentItem), var_export($getSupplierDocumentsResponseMidocoSupplierDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierDocument property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierDocument[] $midocoSupplierDocument
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierDocumentsResponse
     */
    public function setMidocoSupplierDocument(array $midocoSupplierDocument = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierDocumentArrayErrorMessage = self::validateMidocoSupplierDocumentForArrayConstraintsFromSetMidocoSupplierDocument($midocoSupplierDocument))) {
            throw new InvalidArgumentException($midocoSupplierDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierDocument = $midocoSupplierDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierDocument $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierDocumentsResponse
     */
    public function addToMidocoSupplierDocument(\Pggns\MidocoApi\Order\StructType\MidocoSupplierDocument $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierDocument) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierDocument property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierDocument[] = $item;
        
        return $this;
    }
}
