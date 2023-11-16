<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintBillingPrintjobRequest StructType
 * @subpackage Structs
 */
class PrintBillingPrintjobRequest extends AbstractStructBase
{
    /**
     * The CreateBillingPrintjobRequest
     * Meta information extracted from the WSDL
     * - ref: CreateBillingPrintjobRequest
     * @var \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest $CreateBillingPrintjobRequest = null;
    /**
     * The preview
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $preview = null;
    /**
     * The invokeFinishDocument
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $invokeFinishDocument = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * Constructor method for PrintBillingPrintjobRequest
     * @uses PrintBillingPrintjobRequest::setCreateBillingPrintjobRequest()
     * @uses PrintBillingPrintjobRequest::setPreview()
     * @uses PrintBillingPrintjobRequest::setInvokeFinishDocument()
     * @uses PrintBillingPrintjobRequest::setReceiptDate()
     * @param \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest $createBillingPrintjobRequest
     * @param bool $preview
     * @param bool $invokeFinishDocument
     * @param string $receiptDate
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest $createBillingPrintjobRequest = null, ?bool $preview = false, ?bool $invokeFinishDocument = false, ?string $receiptDate = null)
    {
        $this
            ->setCreateBillingPrintjobRequest($createBillingPrintjobRequest)
            ->setPreview($preview)
            ->setInvokeFinishDocument($invokeFinishDocument)
            ->setReceiptDate($receiptDate);
    }
    /**
     * Get CreateBillingPrintjobRequest value
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest|null
     */
    public function getCreateBillingPrintjobRequest(): ?\Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest
    {
        return $this->CreateBillingPrintjobRequest;
    }
    /**
     * Set CreateBillingPrintjobRequest value
     * @param \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest $createBillingPrintjobRequest
     * @return \Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobRequest
     */
    public function setCreateBillingPrintjobRequest(?\Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobRequest $createBillingPrintjobRequest = null): self
    {
        $this->CreateBillingPrintjobRequest = $createBillingPrintjobRequest;
        
        return $this;
    }
    /**
     * Get preview value
     * @return bool|null
     */
    public function getPreview(): ?bool
    {
        return $this->preview;
    }
    /**
     * Set preview value
     * @param bool $preview
     * @return \Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobRequest
     */
    public function setPreview(?bool $preview = false): self
    {
        // validation for constraint: boolean
        if (!is_null($preview) && !is_bool($preview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preview, true), gettype($preview)), __LINE__);
        }
        $this->preview = $preview;
        
        return $this;
    }
    /**
     * Get invokeFinishDocument value
     * @return bool|null
     */
    public function getInvokeFinishDocument(): ?bool
    {
        return $this->invokeFinishDocument;
    }
    /**
     * Set invokeFinishDocument value
     * @param bool $invokeFinishDocument
     * @return \Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobRequest
     */
    public function setInvokeFinishDocument(?bool $invokeFinishDocument = false): self
    {
        // validation for constraint: boolean
        if (!is_null($invokeFinishDocument) && !is_bool($invokeFinishDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($invokeFinishDocument, true), gettype($invokeFinishDocument)), __LINE__);
        }
        $this->invokeFinishDocument = $invokeFinishDocument;
        
        return $this;
    }
    /**
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobRequest
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
        return $this;
    }
}
