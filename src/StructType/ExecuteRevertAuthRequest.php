<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteRevertAuthRequest StructType
 * @subpackage Structs
 */
class ExecuteRevertAuthRequest extends AbstractStructBase
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
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The MidocoOnlinePaymentTransaction
     * Meta information extracted from the WSDL
     * - ref: MidocoOnlinePaymentTransaction
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $MidocoOnlinePaymentTransaction = null;
    /**
     * Constructor method for ExecuteRevertAuthRequest
     * @uses ExecuteRevertAuthRequest::setDocumentId()
     * @uses ExecuteRevertAuthRequest::setInternalVersion()
     * @uses ExecuteRevertAuthRequest::setPosition()
     * @uses ExecuteRevertAuthRequest::setMidocoOnlinePaymentTransaction()
     * @param int $documentId
     * @param int $internalVersion
     * @param int $position
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction
     */
    public function __construct(?int $documentId = null, ?int $internalVersion = null, ?int $position = null, ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setInternalVersion($internalVersion)
            ->setPosition($position)
            ->setMidocoOnlinePaymentTransaction($midocoOnlinePaymentTransaction);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteRevertAuthRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteRevertAuthRequest
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
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteRevertAuthRequest
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get MidocoOnlinePaymentTransaction value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction|null
     */
    public function getMidocoOnlinePaymentTransaction(): ?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction
    {
        return $this->MidocoOnlinePaymentTransaction;
    }
    /**
     * Set MidocoOnlinePaymentTransaction value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteRevertAuthRequest
     */
    public function setMidocoOnlinePaymentTransaction(?\Pggns\MidocoApi\Order\StructType\MidocoOnlinePaymentTransaction $midocoOnlinePaymentTransaction = null): self
    {
        $this->MidocoOnlinePaymentTransaction = $midocoOnlinePaymentTransaction;
        
        return $this;
    }
}
