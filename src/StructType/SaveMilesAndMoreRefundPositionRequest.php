<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMilesAndMoreRefundPositionRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Creates or updates a Miles and More refund position. An update can only succeed if the refund is not finished yet. If the refundAmount is not in accord with certain rules, a MidocoException will be thrown. Either positionId
 * (preferred) or documentId and transactionId must be provided alongside the refundAmount.
 * @subpackage Structs
 */
class SaveMilesAndMoreRefundPositionRequest extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The transactionId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}
     * @var string|null
     */
    protected ?string $transactionId = null;
    /**
     * The positionId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $positionId = null;
    /**
     * The refundAmount
     * @var float|null
     */
    protected ?float $refundAmount = null;
    /**
     * Constructor method for SaveMilesAndMoreRefundPositionRequest
     * @uses SaveMilesAndMoreRefundPositionRequest::setDocumentId()
     * @uses SaveMilesAndMoreRefundPositionRequest::setTransactionId()
     * @uses SaveMilesAndMoreRefundPositionRequest::setPositionId()
     * @uses SaveMilesAndMoreRefundPositionRequest::setRefundAmount()
     * @param int $documentId
     * @param string $transactionId
     * @param int $positionId
     * @param float $refundAmount
     */
    public function __construct(?int $documentId = null, ?string $transactionId = null, ?int $positionId = null, ?float $refundAmount = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setTransactionId($transactionId)
            ->setPositionId($positionId)
            ->setRefundAmount($refundAmount);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveMilesAndMoreRefundPositionRequest
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
     * Get transactionId value
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param string $transactionId
     * @return \Pggns\MidocoApi\Order\StructType\SaveMilesAndMoreRefundPositionRequest
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        // validation for constraint: pattern([0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12})
        if (!is_null($transactionId) && !preg_match('/[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', $transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}/', var_export($transactionId, true)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get positionId value
     * @return int|null
     */
    public function getPositionId(): ?int
    {
        return $this->positionId;
    }
    /**
     * Set positionId value
     * @param int $positionId
     * @return \Pggns\MidocoApi\Order\StructType\SaveMilesAndMoreRefundPositionRequest
     */
    public function setPositionId(?int $positionId = null): self
    {
        // validation for constraint: int
        if (!is_null($positionId) && !(is_int($positionId) || ctype_digit($positionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionId, true), gettype($positionId)), __LINE__);
        }
        $this->positionId = $positionId;
        
        return $this;
    }
    /**
     * Get refundAmount value
     * @return float|null
     */
    public function getRefundAmount(): ?float
    {
        return $this->refundAmount;
    }
    /**
     * Set refundAmount value
     * @param float $refundAmount
     * @return \Pggns\MidocoApi\Order\StructType\SaveMilesAndMoreRefundPositionRequest
     */
    public function setRefundAmount(?float $refundAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($refundAmount) && !(is_float($refundAmount) || is_numeric($refundAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($refundAmount, true), gettype($refundAmount)), __LINE__);
        }
        $this->refundAmount = $refundAmount;
        
        return $this;
    }
}
