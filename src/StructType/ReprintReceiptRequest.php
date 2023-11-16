<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReprintReceiptRequest StructType
 * @subpackage Structs
 */
class ReprintReceiptRequest extends AbstractStructBase
{
    /**
     * The MidocoReceipt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoReceipt
     * @var \Pggns\MidocoApi\Order\StructType\MidocoReceipt|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoReceipt $MidocoReceipt = null;
    /**
     * The asCopy
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $asCopy = null;
    /**
     * The saveDocument
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $saveDocument = null;
    /**
     * The saveAsTravelPlan
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $saveAsTravelPlan = null;
    /**
     * The printJob
     * @var string|null
     */
    protected ?string $printJob = null;
    /**
     * The receiptId
     * @var int|null
     */
    protected ?int $receiptId = null;
    /**
     * Constructor method for ReprintReceiptRequest
     * @uses ReprintReceiptRequest::setMidocoReceipt()
     * @uses ReprintReceiptRequest::setAsCopy()
     * @uses ReprintReceiptRequest::setSaveDocument()
     * @uses ReprintReceiptRequest::setSaveAsTravelPlan()
     * @uses ReprintReceiptRequest::setPrintJob()
     * @uses ReprintReceiptRequest::setReceiptId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoReceipt $midocoReceipt
     * @param bool $asCopy
     * @param bool $saveDocument
     * @param bool $saveAsTravelPlan
     * @param string $printJob
     * @param int $receiptId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoReceipt $midocoReceipt = null, ?bool $asCopy = true, ?bool $saveDocument = false, ?bool $saveAsTravelPlan = false, ?string $printJob = null, ?int $receiptId = null)
    {
        $this
            ->setMidocoReceipt($midocoReceipt)
            ->setAsCopy($asCopy)
            ->setSaveDocument($saveDocument)
            ->setSaveAsTravelPlan($saveAsTravelPlan)
            ->setPrintJob($printJob)
            ->setReceiptId($receiptId);
    }
    /**
     * Get MidocoReceipt value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceipt|null
     */
    public function getMidocoReceipt(): ?\Pggns\MidocoApi\Order\StructType\MidocoReceipt
    {
        return $this->MidocoReceipt;
    }
    /**
     * Set MidocoReceipt value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoReceipt $midocoReceipt
     * @return \Pggns\MidocoApi\Order\StructType\ReprintReceiptRequest
     */
    public function setMidocoReceipt(?\Pggns\MidocoApi\Order\StructType\MidocoReceipt $midocoReceipt = null): self
    {
        $this->MidocoReceipt = $midocoReceipt;
        
        return $this;
    }
    /**
     * Get asCopy value
     * @return bool|null
     */
    public function getAsCopy(): ?bool
    {
        return $this->asCopy;
    }
    /**
     * Set asCopy value
     * @param bool $asCopy
     * @return \Pggns\MidocoApi\Order\StructType\ReprintReceiptRequest
     */
    public function setAsCopy(?bool $asCopy = true): self
    {
        // validation for constraint: boolean
        if (!is_null($asCopy) && !is_bool($asCopy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($asCopy, true), gettype($asCopy)), __LINE__);
        }
        $this->asCopy = $asCopy;
        
        return $this;
    }
    /**
     * Get saveDocument value
     * @return bool|null
     */
    public function getSaveDocument(): ?bool
    {
        return $this->saveDocument;
    }
    /**
     * Set saveDocument value
     * @param bool $saveDocument
     * @return \Pggns\MidocoApi\Order\StructType\ReprintReceiptRequest
     */
    public function setSaveDocument(?bool $saveDocument = false): self
    {
        // validation for constraint: boolean
        if (!is_null($saveDocument) && !is_bool($saveDocument)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saveDocument, true), gettype($saveDocument)), __LINE__);
        }
        $this->saveDocument = $saveDocument;
        
        return $this;
    }
    /**
     * Get saveAsTravelPlan value
     * @return bool|null
     */
    public function getSaveAsTravelPlan(): ?bool
    {
        return $this->saveAsTravelPlan;
    }
    /**
     * Set saveAsTravelPlan value
     * @param bool $saveAsTravelPlan
     * @return \Pggns\MidocoApi\Order\StructType\ReprintReceiptRequest
     */
    public function setSaveAsTravelPlan(?bool $saveAsTravelPlan = false): self
    {
        // validation for constraint: boolean
        if (!is_null($saveAsTravelPlan) && !is_bool($saveAsTravelPlan)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($saveAsTravelPlan, true), gettype($saveAsTravelPlan)), __LINE__);
        }
        $this->saveAsTravelPlan = $saveAsTravelPlan;
        
        return $this;
    }
    /**
     * Get printJob value
     * @return string|null
     */
    public function getPrintJob(): ?string
    {
        return $this->printJob;
    }
    /**
     * Set printJob value
     * @param string $printJob
     * @return \Pggns\MidocoApi\Order\StructType\ReprintReceiptRequest
     */
    public function setPrintJob(?string $printJob = null): self
    {
        // validation for constraint: string
        if (!is_null($printJob) && !is_string($printJob)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printJob, true), gettype($printJob)), __LINE__);
        }
        $this->printJob = $printJob;
        
        return $this;
    }
    /**
     * Get receiptId value
     * @return int|null
     */
    public function getReceiptId(): ?int
    {
        return $this->receiptId;
    }
    /**
     * Set receiptId value
     * @param int $receiptId
     * @return \Pggns\MidocoApi\Order\StructType\ReprintReceiptRequest
     */
    public function setReceiptId(?int $receiptId = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptId) && !(is_int($receiptId) || ctype_digit($receiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptId, true), gettype($receiptId)), __LINE__);
        }
        $this->receiptId = $receiptId;
        
        return $this;
    }
}
