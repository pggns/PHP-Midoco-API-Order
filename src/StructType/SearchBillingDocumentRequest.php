<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBillingDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchBillingDocumentRequest extends AbstractStructBase
{
    /**
     * The listPrinted
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $listPrinted;
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * The creationUserId
     * @var int|null
     */
    protected ?int $creationUserId = null;
    /**
     * The printingUserId
     * @var int|null
     */
    protected ?int $printingUserId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The ccReceiptNo
     * @var int|null
     */
    protected ?int $ccReceiptNo = null;
    /**
     * The ccApprovalCode
     * @var string|null
     */
    protected ?string $ccApprovalCode = null;
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The creationDateTo
     * @var string|null
     */
    protected ?string $creationDateTo = null;
    /**
     * The creationDateFrom
     * @var string|null
     */
    protected ?string $creationDateFrom = null;
    /**
     * The printingDateTo
     * @var string|null
     */
    protected ?string $printingDateTo = null;
    /**
     * The printingDateFrom
     * @var string|null
     */
    protected ?string $printingDateFrom = null;
    /**
     * The mandateReference
     * @var string|null
     */
    protected ?string $mandateReference = null;
    /**
     * The isInvoiceToEmailNeeded
     * @var bool|null
     */
    protected ?bool $isInvoiceToEmailNeeded = null;
    /**
     * Constructor method for SearchBillingDocumentRequest
     * @uses SearchBillingDocumentRequest::setListPrinted()
     * @uses SearchBillingDocumentRequest::setMidocoBillingDocument()
     * @uses SearchBillingDocumentRequest::setCreationUserId()
     * @uses SearchBillingDocumentRequest::setPrintingUserId()
     * @uses SearchBillingDocumentRequest::setOrderNo()
     * @uses SearchBillingDocumentRequest::setCcReceiptNo()
     * @uses SearchBillingDocumentRequest::setCcApprovalCode()
     * @uses SearchBillingDocumentRequest::setCcNo()
     * @uses SearchBillingDocumentRequest::setCreationDateTo()
     * @uses SearchBillingDocumentRequest::setCreationDateFrom()
     * @uses SearchBillingDocumentRequest::setPrintingDateTo()
     * @uses SearchBillingDocumentRequest::setPrintingDateFrom()
     * @uses SearchBillingDocumentRequest::setMandateReference()
     * @uses SearchBillingDocumentRequest::setIsInvoiceToEmailNeeded()
     * @param bool $listPrinted
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @param int $creationUserId
     * @param int $printingUserId
     * @param int $orderNo
     * @param int $ccReceiptNo
     * @param string $ccApprovalCode
     * @param string $ccNo
     * @param string $creationDateTo
     * @param string $creationDateFrom
     * @param string $printingDateTo
     * @param string $printingDateFrom
     * @param string $mandateReference
     * @param bool $isInvoiceToEmailNeeded
     */
    public function __construct(bool $listPrinted, ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null, ?int $creationUserId = null, ?int $printingUserId = null, ?int $orderNo = null, ?int $ccReceiptNo = null, ?string $ccApprovalCode = null, ?string $ccNo = null, ?string $creationDateTo = null, ?string $creationDateFrom = null, ?string $printingDateTo = null, ?string $printingDateFrom = null, ?string $mandateReference = null, ?bool $isInvoiceToEmailNeeded = null)
    {
        $this
            ->setListPrinted($listPrinted)
            ->setMidocoBillingDocument($midocoBillingDocument)
            ->setCreationUserId($creationUserId)
            ->setPrintingUserId($printingUserId)
            ->setOrderNo($orderNo)
            ->setCcReceiptNo($ccReceiptNo)
            ->setCcApprovalCode($ccApprovalCode)
            ->setCcNo($ccNo)
            ->setCreationDateTo($creationDateTo)
            ->setCreationDateFrom($creationDateFrom)
            ->setPrintingDateTo($printingDateTo)
            ->setPrintingDateFrom($printingDateFrom)
            ->setMandateReference($mandateReference)
            ->setIsInvoiceToEmailNeeded($isInvoiceToEmailNeeded);
    }
    /**
     * Get listPrinted value
     * @return bool
     */
    public function getListPrinted(): bool
    {
        return $this->listPrinted;
    }
    /**
     * Set listPrinted value
     * @param bool $listPrinted
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest
     */
    public function setListPrinted(bool $listPrinted): self
    {
        // validation for constraint: boolean
        if (!is_null($listPrinted) && !is_bool($listPrinted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($listPrinted, true), gettype($listPrinted)), __LINE__);
        }
        $this->listPrinted = $listPrinted;
        
        return $this;
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    public function getMidocoBillingDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument
    {
        return $this->MidocoBillingDocument;
    }
    /**
     * Set MidocoBillingDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
    /**
     * Get creationUserId value
     * @return int|null
     */
    public function getCreationUserId(): ?int
    {
        return $this->creationUserId;
    }
    /**
     * Set creationUserId value
     * @param int $creationUserId
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest
     */
    public function setCreationUserId(?int $creationUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUserId) && !(is_int($creationUserId) || ctype_digit($creationUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUserId, true), gettype($creationUserId)), __LINE__);
        }
        $this->creationUserId = $creationUserId;
        
        return $this;
    }
    /**
     * Get printingUserId value
     * @return int|null
     */
    public function getPrintingUserId(): ?int
    {
        return $this->printingUserId;
    }
    /**
     * Set printingUserId value
     * @param int $printingUserId
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest
     */
    public function setPrintingUserId(?int $printingUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($printingUserId) && !(is_int($printingUserId) || ctype_digit($printingUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printingUserId, true), gettype($printingUserId)), __LINE__);
        }
        $this->printingUserId = $printingUserId;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get ccReceiptNo value
     * @return int|null
     */
    public function getCcReceiptNo(): ?int
    {
        return $this->ccReceiptNo;
    }
    /**
     * Set ccReceiptNo value
     * @param int $ccReceiptNo
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest
     */
    public function setCcReceiptNo(?int $ccReceiptNo = null): self
    {
        // validation for constraint: int
        if (!is_null($ccReceiptNo) && !(is_int($ccReceiptNo) || ctype_digit($ccReceiptNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccReceiptNo, true), gettype($ccReceiptNo)), __LINE__);
        }
        $this->ccReceiptNo = $ccReceiptNo;
        
        return $this;
    }
    /**
     * Get ccApprovalCode value
     * @return string|null
     */
    public function getCcApprovalCode(): ?string
    {
        return $this->ccApprovalCode;
    }
    /**
     * Set ccApprovalCode value
     * @param string $ccApprovalCode
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest
     */
    public function setCcApprovalCode(?string $ccApprovalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($ccApprovalCode) && !is_string($ccApprovalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccApprovalCode, true), gettype($ccApprovalCode)), __LINE__);
        }
        $this->ccApprovalCode = $ccApprovalCode;
        
        return $this;
    }
    /**
     * Get ccNo value
     * @return string|null
     */
    public function getCcNo(): ?string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest
     */
    public function setCcNo(?string $ccNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
    /**
     * Get creationDateTo value
     * @return string|null
     */
    public function getCreationDateTo(): ?string
    {
        return $this->creationDateTo;
    }
    /**
     * Set creationDateTo value
     * @param string $creationDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest
     */
    public function setCreationDateTo(?string $creationDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTo) && !is_string($creationDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTo, true), gettype($creationDateTo)), __LINE__);
        }
        $this->creationDateTo = $creationDateTo;
        
        return $this;
    }
    /**
     * Get creationDateFrom value
     * @return string|null
     */
    public function getCreationDateFrom(): ?string
    {
        return $this->creationDateFrom;
    }
    /**
     * Set creationDateFrom value
     * @param string $creationDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest
     */
    public function setCreationDateFrom(?string $creationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateFrom) && !is_string($creationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateFrom, true), gettype($creationDateFrom)), __LINE__);
        }
        $this->creationDateFrom = $creationDateFrom;
        
        return $this;
    }
    /**
     * Get printingDateTo value
     * @return string|null
     */
    public function getPrintingDateTo(): ?string
    {
        return $this->printingDateTo;
    }
    /**
     * Set printingDateTo value
     * @param string $printingDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest
     */
    public function setPrintingDateTo(?string $printingDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($printingDateTo) && !is_string($printingDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printingDateTo, true), gettype($printingDateTo)), __LINE__);
        }
        $this->printingDateTo = $printingDateTo;
        
        return $this;
    }
    /**
     * Get printingDateFrom value
     * @return string|null
     */
    public function getPrintingDateFrom(): ?string
    {
        return $this->printingDateFrom;
    }
    /**
     * Set printingDateFrom value
     * @param string $printingDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest
     */
    public function setPrintingDateFrom(?string $printingDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($printingDateFrom) && !is_string($printingDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printingDateFrom, true), gettype($printingDateFrom)), __LINE__);
        }
        $this->printingDateFrom = $printingDateFrom;
        
        return $this;
    }
    /**
     * Get mandateReference value
     * @return string|null
     */
    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }
    /**
     * Set mandateReference value
     * @param string $mandateReference
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest
     */
    public function setMandateReference(?string $mandateReference = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateReference) && !is_string($mandateReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateReference, true), gettype($mandateReference)), __LINE__);
        }
        $this->mandateReference = $mandateReference;
        
        return $this;
    }
    /**
     * Get isInvoiceToEmailNeeded value
     * @return bool|null
     */
    public function getIsInvoiceToEmailNeeded(): ?bool
    {
        return $this->isInvoiceToEmailNeeded;
    }
    /**
     * Set isInvoiceToEmailNeeded value
     * @param bool $isInvoiceToEmailNeeded
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentRequest
     */
    public function setIsInvoiceToEmailNeeded(?bool $isInvoiceToEmailNeeded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInvoiceToEmailNeeded) && !is_bool($isInvoiceToEmailNeeded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInvoiceToEmailNeeded, true), gettype($isInvoiceToEmailNeeded)), __LINE__);
        }
        $this->isInvoiceToEmailNeeded = $isInvoiceToEmailNeeded;
        
        return $this;
    }
}
