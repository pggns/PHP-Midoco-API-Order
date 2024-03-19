<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellItemDocumentsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSellItemDocumentsResponse extends AbstractStructBase
{
    /**
     * The MidocoSellItemDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellItemDocument
     * @var \Pggns\MidocoApi\Order\StructType\SellItemDocumentDTO[]
     */
    protected ?array $MidocoSellItemDocument = null;
    /**
     * Constructor method for GetSellItemDocumentsResponse
     * @uses GetSellItemDocumentsResponse::setMidocoSellItemDocument()
     * @param \Pggns\MidocoApi\Order\StructType\SellItemDocumentDTO[] $midocoSellItemDocument
     */
    public function __construct(?array $midocoSellItemDocument = null)
    {
        $this
            ->setMidocoSellItemDocument($midocoSellItemDocument);
    }
    /**
     * Get MidocoSellItemDocument value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemDocumentDTO[]
     */
    public function getMidocoSellItemDocument(): ?array
    {
        return $this->MidocoSellItemDocument;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSellItemDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemDocument method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemDocumentForArrayConstraintFromSetMidocoSellItemDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellItemDocumentsResponseMidocoSellItemDocumentItem) {
            // validation for constraint: itemType
            if (!$getSellItemDocumentsResponseMidocoSellItemDocumentItem instanceof \Pggns\MidocoApi\Order\StructType\SellItemDocumentDTO) {
                $invalidValues[] = is_object($getSellItemDocumentsResponseMidocoSellItemDocumentItem) ? get_class($getSellItemDocumentsResponseMidocoSellItemDocumentItem) : sprintf('%s(%s)', gettype($getSellItemDocumentsResponseMidocoSellItemDocumentItem), var_export($getSellItemDocumentsResponseMidocoSellItemDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemDocument property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemDocumentDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemDocumentDTO[] $midocoSellItemDocument
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemDocumentsResponse
     */
    public function setMidocoSellItemDocument(?array $midocoSellItemDocument = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemDocumentArrayErrorMessage = self::validateMidocoSellItemDocumentForArrayConstraintFromSetMidocoSellItemDocument($midocoSellItemDocument))) {
            throw new InvalidArgumentException($midocoSellItemDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemDocument = $midocoSellItemDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemDocumentDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSellItemDocumentsResponse
     */
    public function addToMidocoSellItemDocument(\Pggns\MidocoApi\Order\StructType\SellItemDocumentDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SellItemDocumentDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemDocument property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemDocumentDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemDocument[] = $item;
        
        return $this;
    }
}
