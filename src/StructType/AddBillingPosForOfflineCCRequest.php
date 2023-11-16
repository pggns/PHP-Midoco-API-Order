<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddBillingPosForOfflineCCRequest StructType
 * @subpackage Structs
 */
class AddBillingPosForOfflineCCRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The ccReceiptNo
     * @var int|null
     */
    protected ?int $ccReceiptNo = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The terminalId
     * @var string|null
     */
    protected ?string $terminalId = null;
    /**
     * The traceNumber
     * @var string|null
     */
    protected ?string $traceNumber = null;
    /**
     * Constructor method for AddBillingPosForOfflineCCRequest
     * @uses AddBillingPosForOfflineCCRequest::setMidocoBillingDocument()
     * @uses AddBillingPosForOfflineCCRequest::setCcNo()
     * @uses AddBillingPosForOfflineCCRequest::setCcReceiptNo()
     * @uses AddBillingPosForOfflineCCRequest::setCcType()
     * @uses AddBillingPosForOfflineCCRequest::setAmount()
     * @uses AddBillingPosForOfflineCCRequest::setTerminalId()
     * @uses AddBillingPosForOfflineCCRequest::setTraceNumber()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @param string $ccNo
     * @param int $ccReceiptNo
     * @param string $ccType
     * @param float $amount
     * @param string $terminalId
     * @param string $traceNumber
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null, ?string $ccNo = null, ?int $ccReceiptNo = null, ?string $ccType = null, ?float $amount = null, ?string $terminalId = null, ?string $traceNumber = null)
    {
        $this
            ->setMidocoBillingDocument($midocoBillingDocument)
            ->setCcNo($ccNo)
            ->setCcReceiptNo($ccReceiptNo)
            ->setCcType($ccType)
            ->setAmount($amount)
            ->setTerminalId($terminalId)
            ->setTraceNumber($traceNumber);
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
     * @return \Pggns\MidocoApi\Order\StructType\AddBillingPosForOfflineCCRequest
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AddBillingPosForOfflineCCRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\AddBillingPosForOfflineCCRequest
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
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Order\StructType\AddBillingPosForOfflineCCRequest
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\AddBillingPosForOfflineCCRequest
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get terminalId value
     * @return string|null
     */
    public function getTerminalId(): ?string
    {
        return $this->terminalId;
    }
    /**
     * Set terminalId value
     * @param string $terminalId
     * @return \Pggns\MidocoApi\Order\StructType\AddBillingPosForOfflineCCRequest
     */
    public function setTerminalId(?string $terminalId = null): self
    {
        // validation for constraint: string
        if (!is_null($terminalId) && !is_string($terminalId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($terminalId, true), gettype($terminalId)), __LINE__);
        }
        $this->terminalId = $terminalId;
        
        return $this;
    }
    /**
     * Get traceNumber value
     * @return string|null
     */
    public function getTraceNumber(): ?string
    {
        return $this->traceNumber;
    }
    /**
     * Set traceNumber value
     * @param string $traceNumber
     * @return \Pggns\MidocoApi\Order\StructType\AddBillingPosForOfflineCCRequest
     */
    public function setTraceNumber(?string $traceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($traceNumber) && !is_string($traceNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($traceNumber, true), gettype($traceNumber)), __LINE__);
        }
        $this->traceNumber = $traceNumber;
        
        return $this;
    }
}
