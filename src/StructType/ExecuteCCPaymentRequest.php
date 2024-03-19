<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteCCPaymentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteCCPaymentRequest extends OnlinePaymentInfoType
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The manualApprovalCode
     * @var string|null
     */
    protected ?string $manualApprovalCode = null;
    /**
     * The doDirectCapture
     * @var bool|null
     */
    protected ?bool $doDirectCapture = null;
    /**
     * The isManualAuth
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isManualAuth = null;
    /**
     * Constructor method for ExecuteCCPaymentRequest
     * @uses ExecuteCCPaymentRequest::setDocumentId()
     * @uses ExecuteCCPaymentRequest::setInternalVersion()
     * @uses ExecuteCCPaymentRequest::setAmount()
     * @uses ExecuteCCPaymentRequest::setManualApprovalCode()
     * @uses ExecuteCCPaymentRequest::setDoDirectCapture()
     * @uses ExecuteCCPaymentRequest::setIsManualAuth()
     * @param int $documentId
     * @param int $internalVersion
     * @param float $amount
     * @param string $manualApprovalCode
     * @param bool $doDirectCapture
     * @param bool $isManualAuth
     */
    public function __construct(?int $documentId = null, ?int $internalVersion = null, ?float $amount = null, ?string $manualApprovalCode = null, ?bool $doDirectCapture = null, ?bool $isManualAuth = false)
    {
        $this
            ->setDocumentId($documentId)
            ->setInternalVersion($internalVersion)
            ->setAmount($amount)
            ->setManualApprovalCode($manualApprovalCode)
            ->setDoDirectCapture($doDirectCapture)
            ->setIsManualAuth($isManualAuth);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCCPaymentRequest
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
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCCPaymentRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCCPaymentRequest
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
     * Get manualApprovalCode value
     * @return string|null
     */
    public function getManualApprovalCode(): ?string
    {
        return $this->manualApprovalCode;
    }
    /**
     * Set manualApprovalCode value
     * @param string $manualApprovalCode
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCCPaymentRequest
     */
    public function setManualApprovalCode(?string $manualApprovalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($manualApprovalCode) && !is_string($manualApprovalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($manualApprovalCode, true), gettype($manualApprovalCode)), __LINE__);
        }
        $this->manualApprovalCode = $manualApprovalCode;
        
        return $this;
    }
    /**
     * Get doDirectCapture value
     * @return bool|null
     */
    public function getDoDirectCapture(): ?bool
    {
        return $this->doDirectCapture;
    }
    /**
     * Set doDirectCapture value
     * @param bool $doDirectCapture
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCCPaymentRequest
     */
    public function setDoDirectCapture(?bool $doDirectCapture = null): self
    {
        // validation for constraint: boolean
        if (!is_null($doDirectCapture) && !is_bool($doDirectCapture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doDirectCapture, true), gettype($doDirectCapture)), __LINE__);
        }
        $this->doDirectCapture = $doDirectCapture;
        
        return $this;
    }
    /**
     * Get isManualAuth value
     * @return bool|null
     */
    public function getIsManualAuth(): ?bool
    {
        return $this->isManualAuth;
    }
    /**
     * Set isManualAuth value
     * @param bool $isManualAuth
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteCCPaymentRequest
     */
    public function setIsManualAuth(?bool $isManualAuth = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isManualAuth) && !is_bool($isManualAuth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManualAuth, true), gettype($isManualAuth)), __LINE__);
        }
        $this->isManualAuth = $isManualAuth;
        
        return $this;
    }
}
