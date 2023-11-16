<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMandate StructType
 * @subpackage Structs
 */
class MidocoMandate extends SepaMandateDTO
{
    /**
     * The connectedOrderId
     * @var int|null
     */
    protected ?int $connectedOrderId = null;
    /**
     * The connectedDocumentId
     * @var int|null
     */
    protected ?int $connectedDocumentId = null;
    /**
     * The connectedReceiptId
     * @var int|null
     */
    protected ?int $connectedReceiptId = null;
    /**
     * The referencingCustomerId
     * @var int|null
     */
    protected ?int $referencingCustomerId = null;
    /**
     * The isDefaultDebitCard
     * @var bool|null
     */
    protected ?bool $isDefaultDebitCard = null;
    /**
     * Constructor method for MidocoMandate
     * @uses MidocoMandate::setConnectedOrderId()
     * @uses MidocoMandate::setConnectedDocumentId()
     * @uses MidocoMandate::setConnectedReceiptId()
     * @uses MidocoMandate::setReferencingCustomerId()
     * @uses MidocoMandate::setIsDefaultDebitCard()
     * @param int $connectedOrderId
     * @param int $connectedDocumentId
     * @param int $connectedReceiptId
     * @param int $referencingCustomerId
     * @param bool $isDefaultDebitCard
     */
    public function __construct(?int $connectedOrderId = null, ?int $connectedDocumentId = null, ?int $connectedReceiptId = null, ?int $referencingCustomerId = null, ?bool $isDefaultDebitCard = null)
    {
        $this
            ->setConnectedOrderId($connectedOrderId)
            ->setConnectedDocumentId($connectedDocumentId)
            ->setConnectedReceiptId($connectedReceiptId)
            ->setReferencingCustomerId($referencingCustomerId)
            ->setIsDefaultDebitCard($isDefaultDebitCard);
    }
    /**
     * Get connectedOrderId value
     * @return int|null
     */
    public function getConnectedOrderId(): ?int
    {
        return $this->connectedOrderId;
    }
    /**
     * Set connectedOrderId value
     * @param int $connectedOrderId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMandate
     */
    public function setConnectedOrderId(?int $connectedOrderId = null): self
    {
        // validation for constraint: int
        if (!is_null($connectedOrderId) && !(is_int($connectedOrderId) || ctype_digit($connectedOrderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($connectedOrderId, true), gettype($connectedOrderId)), __LINE__);
        }
        $this->connectedOrderId = $connectedOrderId;
        
        return $this;
    }
    /**
     * Get connectedDocumentId value
     * @return int|null
     */
    public function getConnectedDocumentId(): ?int
    {
        return $this->connectedDocumentId;
    }
    /**
     * Set connectedDocumentId value
     * @param int $connectedDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMandate
     */
    public function setConnectedDocumentId(?int $connectedDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($connectedDocumentId) && !(is_int($connectedDocumentId) || ctype_digit($connectedDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($connectedDocumentId, true), gettype($connectedDocumentId)), __LINE__);
        }
        $this->connectedDocumentId = $connectedDocumentId;
        
        return $this;
    }
    /**
     * Get connectedReceiptId value
     * @return int|null
     */
    public function getConnectedReceiptId(): ?int
    {
        return $this->connectedReceiptId;
    }
    /**
     * Set connectedReceiptId value
     * @param int $connectedReceiptId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMandate
     */
    public function setConnectedReceiptId(?int $connectedReceiptId = null): self
    {
        // validation for constraint: int
        if (!is_null($connectedReceiptId) && !(is_int($connectedReceiptId) || ctype_digit($connectedReceiptId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($connectedReceiptId, true), gettype($connectedReceiptId)), __LINE__);
        }
        $this->connectedReceiptId = $connectedReceiptId;
        
        return $this;
    }
    /**
     * Get referencingCustomerId value
     * @return int|null
     */
    public function getReferencingCustomerId(): ?int
    {
        return $this->referencingCustomerId;
    }
    /**
     * Set referencingCustomerId value
     * @param int $referencingCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMandate
     */
    public function setReferencingCustomerId(?int $referencingCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($referencingCustomerId) && !(is_int($referencingCustomerId) || ctype_digit($referencingCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($referencingCustomerId, true), gettype($referencingCustomerId)), __LINE__);
        }
        $this->referencingCustomerId = $referencingCustomerId;
        
        return $this;
    }
    /**
     * Get isDefaultDebitCard value
     * @return bool|null
     */
    public function getIsDefaultDebitCard(): ?bool
    {
        return $this->isDefaultDebitCard;
    }
    /**
     * Set isDefaultDebitCard value
     * @param bool $isDefaultDebitCard
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMandate
     */
    public function setIsDefaultDebitCard(?bool $isDefaultDebitCard = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefaultDebitCard) && !is_bool($isDefaultDebitCard)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefaultDebitCard, true), gettype($isDefaultDebitCard)), __LINE__);
        }
        $this->isDefaultDebitCard = $isDefaultDebitCard;
        
        return $this;
    }
}
