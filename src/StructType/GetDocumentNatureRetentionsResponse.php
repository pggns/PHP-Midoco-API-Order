<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDocumentNatureRetentionsResponse StructType
 * @subpackage Structs
 */
class GetDocumentNatureRetentionsResponse extends AbstractStructBase
{
    /**
     * The MidocoDocumentNatureRetention
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDocumentNatureRetention
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType[]
     */
    protected array $MidocoDocumentNatureRetention = [];
    /**
     * Constructor method for GetDocumentNatureRetentionsResponse
     * @uses GetDocumentNatureRetentionsResponse::setMidocoDocumentNatureRetention()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType[] $midocoDocumentNatureRetention
     */
    public function __construct(array $midocoDocumentNatureRetention = [])
    {
        $this
            ->setMidocoDocumentNatureRetention($midocoDocumentNatureRetention);
    }
    /**
     * Get MidocoDocumentNatureRetention value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType[]
     */
    public function getMidocoDocumentNatureRetention(): array
    {
        return $this->MidocoDocumentNatureRetention;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDocumentNatureRetention method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDocumentNatureRetention method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDocumentNatureRetentionForArrayConstraintsFromSetMidocoDocumentNatureRetention(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDocumentNatureRetentionsResponseMidocoDocumentNatureRetentionItem) {
            // validation for constraint: itemType
            if (!$getDocumentNatureRetentionsResponseMidocoDocumentNatureRetentionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType) {
                $invalidValues[] = is_object($getDocumentNatureRetentionsResponseMidocoDocumentNatureRetentionItem) ? get_class($getDocumentNatureRetentionsResponseMidocoDocumentNatureRetentionItem) : sprintf('%s(%s)', gettype($getDocumentNatureRetentionsResponseMidocoDocumentNatureRetentionItem), var_export($getDocumentNatureRetentionsResponseMidocoDocumentNatureRetentionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDocumentNatureRetention property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDocumentNatureRetention value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType[] $midocoDocumentNatureRetention
     * @return \Pggns\MidocoApi\Order\StructType\GetDocumentNatureRetentionsResponse
     */
    public function setMidocoDocumentNatureRetention(array $midocoDocumentNatureRetention = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDocumentNatureRetentionArrayErrorMessage = self::validateMidocoDocumentNatureRetentionForArrayConstraintsFromSetMidocoDocumentNatureRetention($midocoDocumentNatureRetention))) {
            throw new InvalidArgumentException($midocoDocumentNatureRetentionArrayErrorMessage, __LINE__);
        }
        $this->MidocoDocumentNatureRetention = $midocoDocumentNatureRetention;
        
        return $this;
    }
    /**
     * Add item to MidocoDocumentNatureRetention value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetDocumentNatureRetentionsResponse
     */
    public function addToMidocoDocumentNatureRetention(\Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType) {
            throw new InvalidArgumentException(sprintf('The MidocoDocumentNatureRetention property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDocumentNatureRetentionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDocumentNatureRetention[] = $item;
        
        return $this;
    }
}
