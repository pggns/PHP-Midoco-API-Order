<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingDocumentEmailDTO StructType
 * @subpackage Structs
 */
class BillingDocumentEmailDTO extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The emailAddress
     * @var string|null
     */
    protected ?string $emailAddress = null;
    /**
     * The emailId
     * @var int|null
     */
    protected ?int $emailId = null;
    /**
     * The emailType
     * @var string|null
     */
    protected ?string $emailType = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * Constructor method for BillingDocumentEmailDTO
     * @uses BillingDocumentEmailDTO::setDocumentId()
     * @uses BillingDocumentEmailDTO::setEmailAddress()
     * @uses BillingDocumentEmailDTO::setEmailId()
     * @uses BillingDocumentEmailDTO::setEmailType()
     * @uses BillingDocumentEmailDTO::setOrderId()
     * @param int $documentId
     * @param string $emailAddress
     * @param int $emailId
     * @param string $emailType
     * @param int $orderId
     */
    public function __construct(?int $documentId = null, ?string $emailAddress = null, ?int $emailId = null, ?string $emailType = null, ?int $orderId = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setEmailAddress($emailAddress)
            ->setEmailId($emailId)
            ->setEmailType($emailType)
            ->setOrderId($orderId);
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentEmailDTO
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
     * Get emailAddress value
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }
    /**
     * Set emailAddress value
     * @param string $emailAddress
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentEmailDTO
     */
    public function setEmailAddress(?string $emailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        $this->emailAddress = $emailAddress;
        
        return $this;
    }
    /**
     * Get emailId value
     * @return int|null
     */
    public function getEmailId(): ?int
    {
        return $this->emailId;
    }
    /**
     * Set emailId value
     * @param int $emailId
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentEmailDTO
     */
    public function setEmailId(?int $emailId = null): self
    {
        // validation for constraint: int
        if (!is_null($emailId) && !(is_int($emailId) || ctype_digit($emailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($emailId, true), gettype($emailId)), __LINE__);
        }
        $this->emailId = $emailId;
        
        return $this;
    }
    /**
     * Get emailType value
     * @return string|null
     */
    public function getEmailType(): ?string
    {
        return $this->emailType;
    }
    /**
     * Set emailType value
     * @param string $emailType
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentEmailDTO
     */
    public function setEmailType(?string $emailType = null): self
    {
        // validation for constraint: string
        if (!is_null($emailType) && !is_string($emailType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailType, true), gettype($emailType)), __LINE__);
        }
        $this->emailType = $emailType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingDocumentEmailDTO
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
}
