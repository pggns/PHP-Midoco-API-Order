<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoEmailInfo StructType
 * @subpackage Structs
 */
class MidocoEmailInfo extends AbstractStructBase
{
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
     * The subject
     * @var string|null
     */
    protected ?string $subject = null;
    /**
     * The receiveTime
     * @var string|null
     */
    protected ?string $receiveTime = null;
    /**
     * The mailId
     * @var string|null
     */
    protected ?string $mailId = null;
    /**
     * The displayURL
     * @var string|null
     */
    protected ?string $displayURL = null;
    /**
     * Constructor method for MidocoEmailInfo
     * @uses MidocoEmailInfo::setSenderEmail()
     * @uses MidocoEmailInfo::setSenderName()
     * @uses MidocoEmailInfo::setRecipientEmail()
     * @uses MidocoEmailInfo::setRecipientName()
     * @uses MidocoEmailInfo::setSubject()
     * @uses MidocoEmailInfo::setReceiveTime()
     * @uses MidocoEmailInfo::setMailId()
     * @uses MidocoEmailInfo::setDisplayURL()
     * @param string $senderEmail
     * @param string $senderName
     * @param string $recipientEmail
     * @param string $recipientName
     * @param string $subject
     * @param string $receiveTime
     * @param string $mailId
     * @param string $displayURL
     */
    public function __construct(?string $senderEmail = null, ?string $senderName = null, ?string $recipientEmail = null, ?string $recipientName = null, ?string $subject = null, ?string $receiveTime = null, ?string $mailId = null, ?string $displayURL = null)
    {
        $this
            ->setSenderEmail($senderEmail)
            ->setSenderName($senderName)
            ->setRecipientEmail($recipientEmail)
            ->setRecipientName($recipientName)
            ->setSubject($subject)
            ->setReceiveTime($receiveTime)
            ->setMailId($mailId)
            ->setDisplayURL($displayURL);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmailInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmailInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmailInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmailInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmailInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmailInfo
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
     * Get mailId value
     * @return string|null
     */
    public function getMailId(): ?string
    {
        return $this->mailId;
    }
    /**
     * Set mailId value
     * @param string $mailId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmailInfo
     */
    public function setMailId(?string $mailId = null): self
    {
        // validation for constraint: string
        if (!is_null($mailId) && !is_string($mailId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailId, true), gettype($mailId)), __LINE__);
        }
        $this->mailId = $mailId;
        
        return $this;
    }
    /**
     * Get displayURL value
     * @return string|null
     */
    public function getDisplayURL(): ?string
    {
        return $this->displayURL;
    }
    /**
     * Set displayURL value
     * @param string $displayURL
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEmailInfo
     */
    public function setDisplayURL(?string $displayURL = null): self
    {
        // validation for constraint: string
        if (!is_null($displayURL) && !is_string($displayURL)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayURL, true), gettype($displayURL)), __LINE__);
        }
        $this->displayURL = $displayURL;
        
        return $this;
    }
}
