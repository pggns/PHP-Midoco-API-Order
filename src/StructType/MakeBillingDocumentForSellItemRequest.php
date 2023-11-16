<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeBillingDocumentForSellItemRequest StructType
 * @subpackage Structs
 */
class MakeBillingDocumentForSellItemRequest extends AbstractStructBase
{
    /**
     * The documentInternalVersion
     * @var int|null
     */
    protected ?int $documentInternalVersion = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The createNewDocument
     * @var bool|null
     */
    protected ?bool $createNewDocument = null;
    /**
     * The deleteExistingDocument
     * @var bool|null
     */
    protected ?bool $deleteExistingDocument = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * Constructor method for MakeBillingDocumentForSellItemRequest
     * @uses MakeBillingDocumentForSellItemRequest::setDocumentInternalVersion()
     * @uses MakeBillingDocumentForSellItemRequest::setDocumentId()
     * @uses MakeBillingDocumentForSellItemRequest::setCreateNewDocument()
     * @uses MakeBillingDocumentForSellItemRequest::setDeleteExistingDocument()
     * @uses MakeBillingDocumentForSellItemRequest::setItemId()
     * @param int $documentInternalVersion
     * @param int $documentId
     * @param bool $createNewDocument
     * @param bool $deleteExistingDocument
     * @param int $itemId
     */
    public function __construct(?int $documentInternalVersion = null, ?int $documentId = null, ?bool $createNewDocument = null, ?bool $deleteExistingDocument = null, ?int $itemId = null)
    {
        $this
            ->setDocumentInternalVersion($documentInternalVersion)
            ->setDocumentId($documentId)
            ->setCreateNewDocument($createNewDocument)
            ->setDeleteExistingDocument($deleteExistingDocument)
            ->setItemId($itemId);
    }
    /**
     * Get documentInternalVersion value
     * @return int|null
     */
    public function getDocumentInternalVersion(): ?int
    {
        return $this->documentInternalVersion;
    }
    /**
     * Set documentInternalVersion value
     * @param int $documentInternalVersion
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForSellItemRequest
     */
    public function setDocumentInternalVersion(?int $documentInternalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($documentInternalVersion) && !(is_int($documentInternalVersion) || ctype_digit($documentInternalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentInternalVersion, true), gettype($documentInternalVersion)), __LINE__);
        }
        $this->documentInternalVersion = $documentInternalVersion;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForSellItemRequest
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get createNewDocument value
     * @return bool|null
     */
    public function getCreateNewDocument(): ?bool
    {
        return $this->createNewDocument;
    }
    /**
     * Set createNewDocument value
     * @param bool $createNewDocument
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForSellItemRequest
     */
    public function setCreateNewDocument(?bool $createNewDocument = null): self
    {
        // validation for constraint: boolean
        if (!is_null($createNewDocument) && !is_bool($createNewDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createNewDocument, true), gettype($createNewDocument)), __LINE__);
        }
        $this->createNewDocument = $createNewDocument;
        
        return $this;
    }
    /**
     * Get deleteExistingDocument value
     * @return bool|null
     */
    public function getDeleteExistingDocument(): ?bool
    {
        return $this->deleteExistingDocument;
    }
    /**
     * Set deleteExistingDocument value
     * @param bool $deleteExistingDocument
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForSellItemRequest
     */
    public function setDeleteExistingDocument(?bool $deleteExistingDocument = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deleteExistingDocument) && !is_bool($deleteExistingDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deleteExistingDocument, true), gettype($deleteExistingDocument)), __LINE__);
        }
        $this->deleteExistingDocument = $deleteExistingDocument;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocumentForSellItemRequest
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
}
