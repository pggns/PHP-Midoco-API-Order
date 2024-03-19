<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareMilesAndMoreMailMessageRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Creates a MidocoMailMessage with sender, recipient, subject and text, that contains a link to approve the Miles & More BURN-transaction.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrepareMilesAndMoreMailMessageRequest extends AbstractStructBase
{
    /**
     * The MidocoMilesAndMoreBurnTransaction
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoMilesAndMoreBurnTransaction
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $MidocoMilesAndMoreBurnTransaction = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * Constructor method for PrepareMilesAndMoreMailMessageRequest
     * @uses PrepareMilesAndMoreMailMessageRequest::setMidocoMilesAndMoreBurnTransaction()
     * @uses PrepareMilesAndMoreMailMessageRequest::setDocumentId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $midocoMilesAndMoreBurnTransaction
     * @param int $documentId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $midocoMilesAndMoreBurnTransaction = null, ?int $documentId = null)
    {
        $this
            ->setMidocoMilesAndMoreBurnTransaction($midocoMilesAndMoreBurnTransaction)
            ->setDocumentId($documentId);
    }
    /**
     * Get MidocoMilesAndMoreBurnTransaction value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType|null
     */
    public function getMidocoMilesAndMoreBurnTransaction(): ?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType
    {
        return $this->MidocoMilesAndMoreBurnTransaction;
    }
    /**
     * Set MidocoMilesAndMoreBurnTransaction value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $midocoMilesAndMoreBurnTransaction
     * @return \Pggns\MidocoApi\Order\StructType\PrepareMilesAndMoreMailMessageRequest
     */
    public function setMidocoMilesAndMoreBurnTransaction(?\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreBurnTransactionType $midocoMilesAndMoreBurnTransaction = null): self
    {
        $this->MidocoMilesAndMoreBurnTransaction = $midocoMilesAndMoreBurnTransaction;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PrepareMilesAndMoreMailMessageRequest
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
}
