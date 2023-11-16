<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDunningLockForBillingDocumentRequest StructType
 * @subpackage Structs
 */
class SaveDunningLockForBillingDocumentRequest extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The dunningLock
     * @var bool|null
     */
    protected ?bool $dunningLock = null;
    /**
     * Constructor method for SaveDunningLockForBillingDocumentRequest
     * @uses SaveDunningLockForBillingDocumentRequest::setDocumentId()
     * @uses SaveDunningLockForBillingDocumentRequest::setDunningLock()
     * @param int $documentId
     * @param bool $dunningLock
     */
    public function __construct(?int $documentId = null, ?bool $dunningLock = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setDunningLock($dunningLock);
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveDunningLockForBillingDocumentRequest
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
     * Get dunningLock value
     * @return bool|null
     */
    public function getDunningLock(): ?bool
    {
        return $this->dunningLock;
    }
    /**
     * Set dunningLock value
     * @param bool $dunningLock
     * @return \Pggns\MidocoApi\Order\StructType\SaveDunningLockForBillingDocumentRequest
     */
    public function setDunningLock(?bool $dunningLock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($dunningLock) && !is_bool($dunningLock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dunningLock, true), gettype($dunningLock)), __LINE__);
        }
        $this->dunningLock = $dunningLock;
        
        return $this;
    }
}
