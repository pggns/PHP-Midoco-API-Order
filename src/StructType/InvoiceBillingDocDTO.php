<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InvoiceBillingDocDTO StructType
 * @subpackage Structs
 */
class InvoiceBillingDocDTO extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The invoiceId
     * @var int|null
     */
    protected ?int $invoiceId = null;
    /**
     * The isVoided
     * @var bool|null
     */
    protected ?bool $isVoided = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The voidedDocumentId
     * @var int|null
     */
    protected ?int $voidedDocumentId = null;
    /**
     * Constructor method for InvoiceBillingDocDTO
     * @uses InvoiceBillingDocDTO::setDocumentId()
     * @uses InvoiceBillingDocDTO::setDueDate()
     * @uses InvoiceBillingDocDTO::setInvoiceId()
     * @uses InvoiceBillingDocDTO::setIsVoided()
     * @uses InvoiceBillingDocDTO::setType()
     * @uses InvoiceBillingDocDTO::setVoidedDocumentId()
     * @param int $documentId
     * @param string $dueDate
     * @param int $invoiceId
     * @param bool $isVoided
     * @param string $type
     * @param int $voidedDocumentId
     */
    public function __construct(?int $documentId = null, ?string $dueDate = null, ?int $invoiceId = null, ?bool $isVoided = null, ?string $type = null, ?int $voidedDocumentId = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setDueDate($dueDate)
            ->setInvoiceId($invoiceId)
            ->setIsVoided($isVoided)
            ->setType($type)
            ->setVoidedDocumentId($voidedDocumentId);
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
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceBillingDocDTO
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
     * Get dueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceBillingDocDTO
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        
        return $this;
    }
    /**
     * Get invoiceId value
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
    /**
     * Set invoiceId value
     * @param int $invoiceId
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceBillingDocDTO
     */
    public function setInvoiceId(?int $invoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceId) && !(is_int($invoiceId) || ctype_digit($invoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
        return $this;
    }
    /**
     * Get isVoided value
     * @return bool|null
     */
    public function getIsVoided(): ?bool
    {
        return $this->isVoided;
    }
    /**
     * Set isVoided value
     * @param bool $isVoided
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceBillingDocDTO
     */
    public function setIsVoided(?bool $isVoided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoided) && !is_bool($isVoided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoided, true), gettype($isVoided)), __LINE__);
        }
        $this->isVoided = $isVoided;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceBillingDocDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get voidedDocumentId value
     * @return int|null
     */
    public function getVoidedDocumentId(): ?int
    {
        return $this->voidedDocumentId;
    }
    /**
     * Set voidedDocumentId value
     * @param int $voidedDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceBillingDocDTO
     */
    public function setVoidedDocumentId(?int $voidedDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($voidedDocumentId) && !(is_int($voidedDocumentId) || ctype_digit($voidedDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voidedDocumentId, true), gettype($voidedDocumentId)), __LINE__);
        }
        $this->voidedDocumentId = $voidedDocumentId;
        
        return $this;
    }
}
