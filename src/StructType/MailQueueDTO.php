<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailQueueDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MailQueueDTO extends AbstractStructBase
{
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The lastTryTimestamp
     * @var string|null
     */
    protected ?string $lastTryTimestamp = null;
    /**
     * The mailId
     * @var int|null
     */
    protected ?int $mailId = null;
    /**
     * The mailMessage
     * @var string|null
     */
    protected ?string $mailMessage = null;
    /**
     * The noOfTries
     * @var int|null
     */
    protected ?int $noOfTries = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for MailQueueDTO
     * @uses MailQueueDTO::setCreationTimestamp()
     * @uses MailQueueDTO::setCreationUser()
     * @uses MailQueueDTO::setLastTryTimestamp()
     * @uses MailQueueDTO::setMailId()
     * @uses MailQueueDTO::setMailMessage()
     * @uses MailQueueDTO::setNoOfTries()
     * @uses MailQueueDTO::setUnitName()
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param string $lastTryTimestamp
     * @param int $mailId
     * @param string $mailMessage
     * @param int $noOfTries
     * @param string $unitName
     */
    public function __construct(?string $creationTimestamp = null, ?int $creationUser = null, ?string $lastTryTimestamp = null, ?int $mailId = null, ?string $mailMessage = null, ?int $noOfTries = null, ?string $unitName = null)
    {
        $this
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setLastTryTimestamp($lastTryTimestamp)
            ->setMailId($mailId)
            ->setMailMessage($mailMessage)
            ->setNoOfTries($noOfTries)
            ->setUnitName($unitName);
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\MailQueueDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\MailQueueDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get lastTryTimestamp value
     * @return string|null
     */
    public function getLastTryTimestamp(): ?string
    {
        return $this->lastTryTimestamp;
    }
    /**
     * Set lastTryTimestamp value
     * @param string $lastTryTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\MailQueueDTO
     */
    public function setLastTryTimestamp(?string $lastTryTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($lastTryTimestamp) && !is_string($lastTryTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastTryTimestamp, true), gettype($lastTryTimestamp)), __LINE__);
        }
        $this->lastTryTimestamp = $lastTryTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MailQueueDTO
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
     * Get mailMessage value
     * @return string|null
     */
    public function getMailMessage(): ?string
    {
        return $this->mailMessage;
    }
    /**
     * Set mailMessage value
     * @param string $mailMessage
     * @return \Pggns\MidocoApi\Order\StructType\MailQueueDTO
     */
    public function setMailMessage(?string $mailMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($mailMessage) && !is_string($mailMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailMessage, true), gettype($mailMessage)), __LINE__);
        }
        $this->mailMessage = $mailMessage;
        
        return $this;
    }
    /**
     * Get noOfTries value
     * @return int|null
     */
    public function getNoOfTries(): ?int
    {
        return $this->noOfTries;
    }
    /**
     * Set noOfTries value
     * @param int $noOfTries
     * @return \Pggns\MidocoApi\Order\StructType\MailQueueDTO
     */
    public function setNoOfTries(?int $noOfTries = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfTries) && !(is_int($noOfTries) || ctype_digit($noOfTries))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfTries, true), gettype($noOfTries)), __LINE__);
        }
        $this->noOfTries = $noOfTries;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\MailQueueDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
