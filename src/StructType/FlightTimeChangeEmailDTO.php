<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightTimeChangeEmailDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FlightTimeChangeEmailDTO extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The emailId
     * @var int|null
     */
    protected ?int $emailId = null;
    /**
     * The emailSender
     * @var string|null
     */
    protected ?string $emailSender = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * The receivedDate
     * @var string|null
     */
    protected ?string $receivedDate = null;
    /**
     * The status
     * @var int|null
     */
    protected ?int $status = null;
    /**
     * The subject
     * @var string|null
     */
    protected ?string $subject = null;
    /**
     * The workStartTime
     * @var string|null
     */
    protected ?string $workStartTime = null;
    /**
     * The workingUser
     * @var int|null
     */
    protected ?int $workingUser = null;
    /**
     * Constructor method for FlightTimeChangeEmailDTO
     * @uses FlightTimeChangeEmailDTO::setCreationDate()
     * @uses FlightTimeChangeEmailDTO::setEmailId()
     * @uses FlightTimeChangeEmailDTO::setEmailSender()
     * @uses FlightTimeChangeEmailDTO::setOrgunit()
     * @uses FlightTimeChangeEmailDTO::setReceivedDate()
     * @uses FlightTimeChangeEmailDTO::setStatus()
     * @uses FlightTimeChangeEmailDTO::setSubject()
     * @uses FlightTimeChangeEmailDTO::setWorkStartTime()
     * @uses FlightTimeChangeEmailDTO::setWorkingUser()
     * @param string $creationDate
     * @param int $emailId
     * @param string $emailSender
     * @param string $orgunit
     * @param string $receivedDate
     * @param int $status
     * @param string $subject
     * @param string $workStartTime
     * @param int $workingUser
     */
    public function __construct(?string $creationDate = null, ?int $emailId = null, ?string $emailSender = null, ?string $orgunit = null, ?string $receivedDate = null, ?int $status = null, ?string $subject = null, ?string $workStartTime = null, ?int $workingUser = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setEmailId($emailId)
            ->setEmailSender($emailSender)
            ->setOrgunit($orgunit)
            ->setReceivedDate($receivedDate)
            ->setStatus($status)
            ->setSubject($subject)
            ->setWorkStartTime($workStartTime)
            ->setWorkingUser($workingUser);
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDTO
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
     * Get emailSender value
     * @return string|null
     */
    public function getEmailSender(): ?string
    {
        return $this->emailSender;
    }
    /**
     * Set emailSender value
     * @param string $emailSender
     * @return \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDTO
     */
    public function setEmailSender(?string $emailSender = null): self
    {
        // validation for constraint: string
        if (!is_null($emailSender) && !is_string($emailSender)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailSender, true), gettype($emailSender)), __LINE__);
        }
        $this->emailSender = $emailSender;
        
        return $this;
    }
    /**
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDTO
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
    /**
     * Get receivedDate value
     * @return string|null
     */
    public function getReceivedDate(): ?string
    {
        return $this->receivedDate;
    }
    /**
     * Set receivedDate value
     * @param string $receivedDate
     * @return \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDTO
     */
    public function setReceivedDate(?string $receivedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receivedDate) && !is_string($receivedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receivedDate, true), gettype($receivedDate)), __LINE__);
        }
        $this->receivedDate = $receivedDate;
        
        return $this;
    }
    /**
     * Get status value
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param int $status
     * @return \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDTO
     */
    public function setStatus(?int $status = null): self
    {
        // validation for constraint: int
        if (!is_null($status) && !(is_int($status) || ctype_digit($status))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDTO
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
     * Get workStartTime value
     * @return string|null
     */
    public function getWorkStartTime(): ?string
    {
        return $this->workStartTime;
    }
    /**
     * Set workStartTime value
     * @param string $workStartTime
     * @return \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDTO
     */
    public function setWorkStartTime(?string $workStartTime = null): self
    {
        // validation for constraint: string
        if (!is_null($workStartTime) && !is_string($workStartTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workStartTime, true), gettype($workStartTime)), __LINE__);
        }
        $this->workStartTime = $workStartTime;
        
        return $this;
    }
    /**
     * Get workingUser value
     * @return int|null
     */
    public function getWorkingUser(): ?int
    {
        return $this->workingUser;
    }
    /**
     * Set workingUser value
     * @param int $workingUser
     * @return \Pggns\MidocoApi\Order\StructType\FlightTimeChangeEmailDTO
     */
    public function setWorkingUser(?int $workingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($workingUser) && !(is_int($workingUser) || ctype_digit($workingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($workingUser, true), gettype($workingUser)), __LINE__);
        }
        $this->workingUser = $workingUser;
        
        return $this;
    }
}
