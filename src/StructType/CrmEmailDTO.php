<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmEmailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmEmailDTO extends AbstractStructBase
{
    /**
     * The contactId
     * @var int|null
     */
    protected ?int $contactId = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The externalMailid
     * @var string|null
     */
    protected ?string $externalMailid = null;
    /**
     * The externalParameter
     * @var string|null
     */
    protected ?string $externalParameter = null;
    /**
     * The externalType
     * @var string|null
     */
    protected ?string $externalType = null;
    /**
     * The mailId
     * @var int|null
     */
    protected ?int $mailId = null;
    /**
     * The receiveTime
     * @var string|null
     */
    protected ?string $receiveTime = null;
    /**
     * The recipientEmail
     * @var string|null
     */
    protected ?string $recipientEmail = null;
    /**
     * The recipientName
     * @var string|null
     */
    protected ?string $recipientName = null;
    /**
     * The senderEmail
     * @var string|null
     */
    protected ?string $senderEmail = null;
    /**
     * The senderName
     * @var string|null
     */
    protected ?string $senderName = null;
    /**
     * The subject
     * @var string|null
     */
    protected ?string $subject = null;
    /**
     * Constructor method for CrmEmailDTO
     * @uses CrmEmailDTO::setContactId()
     * @uses CrmEmailDTO::setDocumentId()
     * @uses CrmEmailDTO::setExternalMailid()
     * @uses CrmEmailDTO::setExternalParameter()
     * @uses CrmEmailDTO::setExternalType()
     * @uses CrmEmailDTO::setMailId()
     * @uses CrmEmailDTO::setReceiveTime()
     * @uses CrmEmailDTO::setRecipientEmail()
     * @uses CrmEmailDTO::setRecipientName()
     * @uses CrmEmailDTO::setSenderEmail()
     * @uses CrmEmailDTO::setSenderName()
     * @uses CrmEmailDTO::setSubject()
     * @param int $contactId
     * @param int $documentId
     * @param string $externalMailid
     * @param string $externalParameter
     * @param string $externalType
     * @param int $mailId
     * @param string $receiveTime
     * @param string $recipientEmail
     * @param string $recipientName
     * @param string $senderEmail
     * @param string $senderName
     * @param string $subject
     */
    public function __construct(?int $contactId = null, ?int $documentId = null, ?string $externalMailid = null, ?string $externalParameter = null, ?string $externalType = null, ?int $mailId = null, ?string $receiveTime = null, ?string $recipientEmail = null, ?string $recipientName = null, ?string $senderEmail = null, ?string $senderName = null, ?string $subject = null)
    {
        $this
            ->setContactId($contactId)
            ->setDocumentId($documentId)
            ->setExternalMailid($externalMailid)
            ->setExternalParameter($externalParameter)
            ->setExternalType($externalType)
            ->setMailId($mailId)
            ->setReceiveTime($receiveTime)
            ->setRecipientEmail($recipientEmail)
            ->setRecipientName($recipientName)
            ->setSenderEmail($senderEmail)
            ->setSenderName($senderName)
            ->setSubject($subject);
    }
    /**
     * Get contactId value
     * @return int|null
     */
    public function getContactId(): ?int
    {
        return $this->contactId;
    }
    /**
     * Set contactId value
     * @param int $contactId
     * @return \Pggns\MidocoApi\Order\StructType\CrmEmailDTO
     */
    public function setContactId(?int $contactId = null): self
    {
        // validation for constraint: int
        if (!is_null($contactId) && !(is_int($contactId) || ctype_digit($contactId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($contactId, true), gettype($contactId)), __LINE__);
        }
        $this->contactId = $contactId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmEmailDTO
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
     * Get externalMailid value
     * @return string|null
     */
    public function getExternalMailid(): ?string
    {
        return $this->externalMailid;
    }
    /**
     * Set externalMailid value
     * @param string $externalMailid
     * @return \Pggns\MidocoApi\Order\StructType\CrmEmailDTO
     */
    public function setExternalMailid(?string $externalMailid = null): self
    {
        // validation for constraint: string
        if (!is_null($externalMailid) && !is_string($externalMailid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalMailid, true), gettype($externalMailid)), __LINE__);
        }
        $this->externalMailid = $externalMailid;
        
        return $this;
    }
    /**
     * Get externalParameter value
     * @return string|null
     */
    public function getExternalParameter(): ?string
    {
        return $this->externalParameter;
    }
    /**
     * Set externalParameter value
     * @param string $externalParameter
     * @return \Pggns\MidocoApi\Order\StructType\CrmEmailDTO
     */
    public function setExternalParameter(?string $externalParameter = null): self
    {
        // validation for constraint: string
        if (!is_null($externalParameter) && !is_string($externalParameter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalParameter, true), gettype($externalParameter)), __LINE__);
        }
        $this->externalParameter = $externalParameter;
        
        return $this;
    }
    /**
     * Get externalType value
     * @return string|null
     */
    public function getExternalType(): ?string
    {
        return $this->externalType;
    }
    /**
     * Set externalType value
     * @param string $externalType
     * @return \Pggns\MidocoApi\Order\StructType\CrmEmailDTO
     */
    public function setExternalType(?string $externalType = null): self
    {
        // validation for constraint: string
        if (!is_null($externalType) && !is_string($externalType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalType, true), gettype($externalType)), __LINE__);
        }
        $this->externalType = $externalType;
        
        return $this;
    }
    /**
     * Get mailId value
     * @return int|null
     */
    public function getMailId(): ?int
    {
        return $this->mailId;
    }
    /**
     * Set mailId value
     * @param int $mailId
     * @return \Pggns\MidocoApi\Order\StructType\CrmEmailDTO
     */
    public function setMailId(?int $mailId = null): self
    {
        // validation for constraint: int
        if (!is_null($mailId) && !(is_int($mailId) || ctype_digit($mailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mailId, true), gettype($mailId)), __LINE__);
        }
        $this->mailId = $mailId;
        
        return $this;
    }
    /**
     * Get receiveTime value
     * @return string|null
     */
    public function getReceiveTime(): ?string
    {
        return $this->receiveTime;
    }
    /**
     * Set receiveTime value
     * @param string $receiveTime
     * @return \Pggns\MidocoApi\Order\StructType\CrmEmailDTO
     */
    public function setReceiveTime(?string $receiveTime = null): self
    {
        // validation for constraint: string
        if (!is_null($receiveTime) && !is_string($receiveTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiveTime, true), gettype($receiveTime)), __LINE__);
        }
        $this->receiveTime = $receiveTime;
        
        return $this;
    }
    /**
     * Get recipientEmail value
     * @return string|null
     */
    public function getRecipientEmail(): ?string
    {
        return $this->recipientEmail;
    }
    /**
     * Set recipientEmail value
     * @param string $recipientEmail
     * @return \Pggns\MidocoApi\Order\StructType\CrmEmailDTO
     */
    public function setRecipientEmail(?string $recipientEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientEmail) && !is_string($recipientEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientEmail, true), gettype($recipientEmail)), __LINE__);
        }
        $this->recipientEmail = $recipientEmail;
        
        return $this;
    }
    /**
     * Get recipientName value
     * @return string|null
     */
    public function getRecipientName(): ?string
    {
        return $this->recipientName;
    }
    /**
     * Set recipientName value
     * @param string $recipientName
     * @return \Pggns\MidocoApi\Order\StructType\CrmEmailDTO
     */
    public function setRecipientName(?string $recipientName = null): self
    {
        // validation for constraint: string
        if (!is_null($recipientName) && !is_string($recipientName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recipientName, true), gettype($recipientName)), __LINE__);
        }
        $this->recipientName = $recipientName;
        
        return $this;
    }
    /**
     * Get senderEmail value
     * @return string|null
     */
    public function getSenderEmail(): ?string
    {
        return $this->senderEmail;
    }
    /**
     * Set senderEmail value
     * @param string $senderEmail
     * @return \Pggns\MidocoApi\Order\StructType\CrmEmailDTO
     */
    public function setSenderEmail(?string $senderEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($senderEmail) && !is_string($senderEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderEmail, true), gettype($senderEmail)), __LINE__);
        }
        $this->senderEmail = $senderEmail;
        
        return $this;
    }
    /**
     * Get senderName value
     * @return string|null
     */
    public function getSenderName(): ?string
    {
        return $this->senderName;
    }
    /**
     * Set senderName value
     * @param string $senderName
     * @return \Pggns\MidocoApi\Order\StructType\CrmEmailDTO
     */
    public function setSenderName(?string $senderName = null): self
    {
        // validation for constraint: string
        if (!is_null($senderName) && !is_string($senderName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senderName, true), gettype($senderName)), __LINE__);
        }
        $this->senderName = $senderName;
        
        return $this;
    }
    /**
     * Get subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }
    /**
     * Set subject value
     * @param string $subject
     * @return \Pggns\MidocoApi\Order\StructType\CrmEmailDTO
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->subject = $subject;
        
        return $this;
    }
}
