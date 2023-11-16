<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoImportNotice StructType
 * @subpackage Structs
 */
class MidocoImportNotice extends AbstractStructBase
{
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The notice
     * @var string|null
     */
    protected ?string $notice = null;
    /**
     * The crationUser
     * @var string|null
     */
    protected ?string $crationUser = null;
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The asTask
     * @var bool|null
     */
    protected ?bool $asTask = null;
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * Constructor method for MidocoImportNotice
     * @uses MidocoImportNotice::setCustomerId()
     * @uses MidocoImportNotice::setNotice()
     * @uses MidocoImportNotice::setCrationUser()
     * @uses MidocoImportNotice::setCreationTime()
     * @uses MidocoImportNotice::setAsTask()
     * @uses MidocoImportNotice::setTaskType()
     * @uses MidocoImportNotice::setDueDate()
     * @param string $customerId
     * @param string $notice
     * @param string $crationUser
     * @param string $creationTime
     * @param bool $asTask
     * @param string $taskType
     * @param string $dueDate
     */
    public function __construct(?string $customerId = null, ?string $notice = null, ?string $crationUser = null, ?string $creationTime = null, ?bool $asTask = null, ?string $taskType = null, ?string $dueDate = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setNotice($notice)
            ->setCrationUser($crationUser)
            ->setCreationTime($creationTime)
            ->setAsTask($asTask)
            ->setTaskType($taskType)
            ->setDueDate($dueDate);
    }
    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportNotice
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get notice value
     * @return string|null
     */
    public function getNotice(): ?string
    {
        return $this->notice;
    }
    /**
     * Set notice value
     * @param string $notice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportNotice
     */
    public function setNotice(?string $notice = null): self
    {
        // validation for constraint: string
        if (!is_null($notice) && !is_string($notice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notice, true), gettype($notice)), __LINE__);
        }
        $this->notice = $notice;
        
        return $this;
    }
    /**
     * Get crationUser value
     * @return string|null
     */
    public function getCrationUser(): ?string
    {
        return $this->crationUser;
    }
    /**
     * Set crationUser value
     * @param string $crationUser
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportNotice
     */
    public function setCrationUser(?string $crationUser = null): self
    {
        // validation for constraint: string
        if (!is_null($crationUser) && !is_string($crationUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crationUser, true), gettype($crationUser)), __LINE__);
        }
        $this->crationUser = $crationUser;
        
        return $this;
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportNotice
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get asTask value
     * @return bool|null
     */
    public function getAsTask(): ?bool
    {
        return $this->asTask;
    }
    /**
     * Set asTask value
     * @param bool $asTask
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportNotice
     */
    public function setAsTask(?bool $asTask = null): self
    {
        // validation for constraint: boolean
        if (!is_null($asTask) && !is_bool($asTask)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($asTask, true), gettype($asTask)), __LINE__);
        }
        $this->asTask = $asTask;
        
        return $this;
    }
    /**
     * Get taskType value
     * @return string|null
     */
    public function getTaskType(): ?string
    {
        return $this->taskType;
    }
    /**
     * Set taskType value
     * @param string $taskType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportNotice
     */
    public function setTaskType(?string $taskType = null): self
    {
        // validation for constraint: string
        if (!is_null($taskType) && !is_string($taskType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskType, true), gettype($taskType)), __LINE__);
        }
        $this->taskType = $taskType;
        
        return $this;
    }
    /**
     * Get dueDate value
     * @return string|null
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }
    /**
     * Set dueDate value
     * @param string $dueDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportNotice
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;
        
        return $this;
    }
}
