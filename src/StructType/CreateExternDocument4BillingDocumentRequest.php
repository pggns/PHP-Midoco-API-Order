<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateExternDocument4BillingDocumentRequest StructType
 * @subpackage Structs
 */
class CreateExternDocument4BillingDocumentRequest extends AbstractStructBase
{
    /**
     * The documentId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $documentId = [];
    /**
     * Constructor method for CreateExternDocument4BillingDocumentRequest
     * @uses CreateExternDocument4BillingDocumentRequest::setDocumentId()
     * @param int[] $documentId
     */
    public function __construct(array $documentId = [])
    {
        $this
            ->setDocumentId($documentId);
    }
    /**
     * Get documentId value
     * @return int[]
     */
    public function getDocumentId(): array
    {
        return $this->documentId;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentIdForArrayConstraintsFromSetDocumentId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $createExternDocument4BillingDocumentRequestDocumentIdItem) {
            // validation for constraint: itemType
            if (!(is_int($createExternDocument4BillingDocumentRequestDocumentIdItem) || ctype_digit($createExternDocument4BillingDocumentRequestDocumentIdItem))) {
                $invalidValues[] = is_object($createExternDocument4BillingDocumentRequestDocumentIdItem) ? get_class($createExternDocument4BillingDocumentRequestDocumentIdItem) : sprintf('%s(%s)', gettype($createExternDocument4BillingDocumentRequestDocumentIdItem), var_export($createExternDocument4BillingDocumentRequestDocumentIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The documentId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set documentId value
     * @throws InvalidArgumentException
     * @param int[] $documentId
     * @return \Pggns\MidocoApi\Order\StructType\CreateExternDocument4BillingDocumentRequest
     */
    public function setDocumentId(array $documentId = []): self
    {
        // validation for constraint: array
        if ('' !== ($documentIdArrayErrorMessage = self::validateDocumentIdForArrayConstraintsFromSetDocumentId($documentId))) {
            throw new InvalidArgumentException($documentIdArrayErrorMessage, __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Add item to documentId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\CreateExternDocument4BillingDocumentRequest
     */
    public function addToDocumentId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The documentId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->documentId[] = $item;
        
        return $this;
    }
}
