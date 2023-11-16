<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMilesAndMoreRefundDataRequest StructType
 * @subpackage Structs
 */
class GetMilesAndMoreRefundDataRequest extends AbstractStructBase
{
    /**
     * The documentId
     * Meta information extracted from the WSDL
     * - documentation: The billing document id, for which to calculate the refund data for Miles and More transactions. - Provide either documentId OR orderId. orderId takes precedence.
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The orderId
     * Meta information extracted from the WSDL
     * - documentation: The order id, for which to calculate the refund data for Miles and More transactions. - Provide either documentId OR orderId. orderId takes precedence.
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The transactionId
     * Meta information extracted from the WSDL
     * - documentation: Provide a transactionId, if you are only interested in the refund data for a specific transaction.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $transactionId = null;
    /**
     * Constructor method for GetMilesAndMoreRefundDataRequest
     * @uses GetMilesAndMoreRefundDataRequest::setDocumentId()
     * @uses GetMilesAndMoreRefundDataRequest::setOrderId()
     * @uses GetMilesAndMoreRefundDataRequest::setTransactionId()
     * @param int $documentId
     * @param int $orderId
     * @param string $transactionId
     */
    public function __construct(?int $documentId = null, ?int $orderId = null, ?string $transactionId = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setOrderId($orderId)
            ->setTransactionId($transactionId);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreRefundDataRequest
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
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreRefundDataRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMoreRefundDataRequest
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
        return $this;
    }
}
