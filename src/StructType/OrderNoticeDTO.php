<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderNoticeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderNoticeDTO extends AbstractStructBase
{
    /**
     * The asTask
     * @var bool|null
     */
    protected ?bool $asTask = null;
    /**
     * The creationOrgunit
     * @var string|null
     */
    protected ?string $creationOrgunit = null;
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
     * The deadlineDate
     * @var string|null
     */
    protected ?string $deadlineDate = null;
    /**
     * The delegationOrgunit
     * @var string|null
     */
    protected ?string $delegationOrgunit = null;
    /**
     * The delegationQueue
     * @var string|null
     */
    protected ?string $delegationQueue = null;
    /**
     * The delegationUser
     * @var int|null
     */
    protected ?int $delegationUser = null;
    /**
     * The dueDate
     * @var string|null
     */
    protected ?string $dueDate = null;
    /**
     * The finishTimestamp
     * @var string|null
     */
    protected ?string $finishTimestamp = null;
    /**
     * The finishUser
     * @var int|null
     */
    protected ?int $finishUser = null;
    /**
     * The finished
     * @var bool|null
     */
    protected ?bool $finished = null;
    /**
     * The isSpecialCustomer
     * @var bool|null
     */
    protected ?bool $isSpecialCustomer = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The modifyTimestamp
     * @var string|null
     */
    protected ?string $modifyTimestamp = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The notice
     * @var string|null
     */
    protected ?string $notice = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The origin
     * @var int|null
     */
    protected ?int $origin = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The printAllowed
     * @var bool|null
     */
    protected ?bool $printAllowed = null;
    /**
     * The priority
     * @var int|null
     */
    protected ?int $priority = null;
    /**
     * The ruleDefinitionId
     * @var int|null
     */
    protected ?int $ruleDefinitionId = null;
    /**
     * The startTime
     * @var string|null
     */
    protected ?string $startTime = null;
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * Constructor method for OrderNoticeDTO
     * @uses OrderNoticeDTO::setAsTask()
     * @uses OrderNoticeDTO::setCreationOrgunit()
     * @uses OrderNoticeDTO::setCreationTimestamp()
     * @uses OrderNoticeDTO::setCreationUser()
     * @uses OrderNoticeDTO::setDeadlineDate()
     * @uses OrderNoticeDTO::setDelegationOrgunit()
     * @uses OrderNoticeDTO::setDelegationQueue()
     * @uses OrderNoticeDTO::setDelegationUser()
     * @uses OrderNoticeDTO::setDueDate()
     * @uses OrderNoticeDTO::setFinishTimestamp()
     * @uses OrderNoticeDTO::setFinishUser()
     * @uses OrderNoticeDTO::setFinished()
     * @uses OrderNoticeDTO::setIsSpecialCustomer()
     * @uses OrderNoticeDTO::setItemId()
     * @uses OrderNoticeDTO::setModifyTimestamp()
     * @uses OrderNoticeDTO::setModifyUser()
     * @uses OrderNoticeDTO::setNotice()
     * @uses OrderNoticeDTO::setOrderId()
     * @uses OrderNoticeDTO::setOrigin()
     * @uses OrderNoticeDTO::setPosition()
     * @uses OrderNoticeDTO::setPrintAllowed()
     * @uses OrderNoticeDTO::setPriority()
     * @uses OrderNoticeDTO::setRuleDefinitionId()
     * @uses OrderNoticeDTO::setStartTime()
     * @uses OrderNoticeDTO::setTaskType()
     * @param bool $asTask
     * @param string $creationOrgunit
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param string $deadlineDate
     * @param string $delegationOrgunit
     * @param string $delegationQueue
     * @param int $delegationUser
     * @param string $dueDate
     * @param string $finishTimestamp
     * @param int $finishUser
     * @param bool $finished
     * @param bool $isSpecialCustomer
     * @param int $itemId
     * @param string $modifyTimestamp
     * @param int $modifyUser
     * @param string $notice
     * @param int $orderId
     * @param int $origin
     * @param int $position
     * @param bool $printAllowed
     * @param int $priority
     * @param int $ruleDefinitionId
     * @param string $startTime
     * @param string $taskType
     */
    public function __construct(?bool $asTask = null, ?string $creationOrgunit = null, ?string $creationTimestamp = null, ?int $creationUser = null, ?string $deadlineDate = null, ?string $delegationOrgunit = null, ?string $delegationQueue = null, ?int $delegationUser = null, ?string $dueDate = null, ?string $finishTimestamp = null, ?int $finishUser = null, ?bool $finished = null, ?bool $isSpecialCustomer = null, ?int $itemId = null, ?string $modifyTimestamp = null, ?int $modifyUser = null, ?string $notice = null, ?int $orderId = null, ?int $origin = null, ?int $position = null, ?bool $printAllowed = null, ?int $priority = null, ?int $ruleDefinitionId = null, ?string $startTime = null, ?string $taskType = null)
    {
        $this
            ->setAsTask($asTask)
            ->setCreationOrgunit($creationOrgunit)
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setDeadlineDate($deadlineDate)
            ->setDelegationOrgunit($delegationOrgunit)
            ->setDelegationQueue($delegationQueue)
            ->setDelegationUser($delegationUser)
            ->setDueDate($dueDate)
            ->setFinishTimestamp($finishTimestamp)
            ->setFinishUser($finishUser)
            ->setFinished($finished)
            ->setIsSpecialCustomer($isSpecialCustomer)
            ->setItemId($itemId)
            ->setModifyTimestamp($modifyTimestamp)
            ->setModifyUser($modifyUser)
            ->setNotice($notice)
            ->setOrderId($orderId)
            ->setOrigin($origin)
            ->setPosition($position)
            ->setPrintAllowed($printAllowed)
            ->setPriority($priority)
            ->setRuleDefinitionId($ruleDefinitionId)
            ->setStartTime($startTime)
            ->setTaskType($taskType);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
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
     * Get creationOrgunit value
     * @return string|null
     */
    public function getCreationOrgunit(): ?string
    {
        return $this->creationOrgunit;
    }
    /**
     * Set creationOrgunit value
     * @param string $creationOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setCreationOrgunit(?string $creationOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($creationOrgunit) && !is_string($creationOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationOrgunit, true), gettype($creationOrgunit)), __LINE__);
        }
        $this->creationOrgunit = $creationOrgunit;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
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
     * Get deadlineDate value
     * @return string|null
     */
    public function getDeadlineDate(): ?string
    {
        return $this->deadlineDate;
    }
    /**
     * Set deadlineDate value
     * @param string $deadlineDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setDeadlineDate(?string $deadlineDate = null): self
    {
        // validation for constraint: string
        if (!is_null($deadlineDate) && !is_string($deadlineDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deadlineDate, true), gettype($deadlineDate)), __LINE__);
        }
        $this->deadlineDate = $deadlineDate;
        
        return $this;
    }
    /**
     * Get delegationOrgunit value
     * @return string|null
     */
    public function getDelegationOrgunit(): ?string
    {
        return $this->delegationOrgunit;
    }
    /**
     * Set delegationOrgunit value
     * @param string $delegationOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setDelegationOrgunit(?string $delegationOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($delegationOrgunit) && !is_string($delegationOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegationOrgunit, true), gettype($delegationOrgunit)), __LINE__);
        }
        $this->delegationOrgunit = $delegationOrgunit;
        
        return $this;
    }
    /**
     * Get delegationQueue value
     * @return string|null
     */
    public function getDelegationQueue(): ?string
    {
        return $this->delegationQueue;
    }
    /**
     * Set delegationQueue value
     * @param string $delegationQueue
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setDelegationQueue(?string $delegationQueue = null): self
    {
        // validation for constraint: string
        if (!is_null($delegationQueue) && !is_string($delegationQueue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($delegationQueue, true), gettype($delegationQueue)), __LINE__);
        }
        $this->delegationQueue = $delegationQueue;
        
        return $this;
    }
    /**
     * Get delegationUser value
     * @return int|null
     */
    public function getDelegationUser(): ?int
    {
        return $this->delegationUser;
    }
    /**
     * Set delegationUser value
     * @param int $delegationUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setDelegationUser(?int $delegationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($delegationUser) && !(is_int($delegationUser) || ctype_digit($delegationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($delegationUser, true), gettype($delegationUser)), __LINE__);
        }
        $this->delegationUser = $delegationUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
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
    /**
     * Get finishTimestamp value
     * @return string|null
     */
    public function getFinishTimestamp(): ?string
    {
        return $this->finishTimestamp;
    }
    /**
     * Set finishTimestamp value
     * @param string $finishTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setFinishTimestamp(?string $finishTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($finishTimestamp) && !is_string($finishTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finishTimestamp, true), gettype($finishTimestamp)), __LINE__);
        }
        $this->finishTimestamp = $finishTimestamp;
        
        return $this;
    }
    /**
     * Get finishUser value
     * @return int|null
     */
    public function getFinishUser(): ?int
    {
        return $this->finishUser;
    }
    /**
     * Set finishUser value
     * @param int $finishUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setFinishUser(?int $finishUser = null): self
    {
        // validation for constraint: int
        if (!is_null($finishUser) && !(is_int($finishUser) || ctype_digit($finishUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($finishUser, true), gettype($finishUser)), __LINE__);
        }
        $this->finishUser = $finishUser;
        
        return $this;
    }
    /**
     * Get finished value
     * @return bool|null
     */
    public function getFinished(): ?bool
    {
        return $this->finished;
    }
    /**
     * Set finished value
     * @param bool $finished
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setFinished(?bool $finished = null): self
    {
        // validation for constraint: boolean
        if (!is_null($finished) && !is_bool($finished)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($finished, true), gettype($finished)), __LINE__);
        }
        $this->finished = $finished;
        
        return $this;
    }
    /**
     * Get isSpecialCustomer value
     * @return bool|null
     */
    public function getIsSpecialCustomer(): ?bool
    {
        return $this->isSpecialCustomer;
    }
    /**
     * Set isSpecialCustomer value
     * @param bool $isSpecialCustomer
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setIsSpecialCustomer(?bool $isSpecialCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSpecialCustomer) && !is_bool($isSpecialCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSpecialCustomer, true), gettype($isSpecialCustomer)), __LINE__);
        }
        $this->isSpecialCustomer = $isSpecialCustomer;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get modifyTimestamp value
     * @return string|null
     */
    public function getModifyTimestamp(): ?string
    {
        return $this->modifyTimestamp;
    }
    /**
     * Set modifyTimestamp value
     * @param string $modifyTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setModifyTimestamp(?string $modifyTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTimestamp) && !is_string($modifyTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTimestamp, true), gettype($modifyTimestamp)), __LINE__);
        }
        $this->modifyTimestamp = $modifyTimestamp;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
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
    /**
     * Get origin value
     * @return int|null
     */
    public function getOrigin(): ?int
    {
        return $this->origin;
    }
    /**
     * Set origin value
     * @param int $origin
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setOrigin(?int $origin = null): self
    {
        // validation for constraint: int
        if (!is_null($origin) && !(is_int($origin) || ctype_digit($origin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($origin, true), gettype($origin)), __LINE__);
        }
        $this->origin = $origin;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
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
     * Get printAllowed value
     * @return bool|null
     */
    public function getPrintAllowed(): ?bool
    {
        return $this->printAllowed;
    }
    /**
     * Set printAllowed value
     * @param bool $printAllowed
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setPrintAllowed(?bool $printAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printAllowed) && !is_bool($printAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printAllowed, true), gettype($printAllowed)), __LINE__);
        }
        $this->printAllowed = $printAllowed;
        
        return $this;
    }
    /**
     * Get priority value
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }
    /**
     * Set priority value
     * @param int $priority
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setPriority(?int $priority = null): self
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->priority = $priority;
        
        return $this;
    }
    /**
     * Get ruleDefinitionId value
     * @return int|null
     */
    public function getRuleDefinitionId(): ?int
    {
        return $this->ruleDefinitionId;
    }
    /**
     * Set ruleDefinitionId value
     * @param int $ruleDefinitionId
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setRuleDefinitionId(?int $ruleDefinitionId = null): self
    {
        // validation for constraint: int
        if (!is_null($ruleDefinitionId) && !(is_int($ruleDefinitionId) || ctype_digit($ruleDefinitionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ruleDefinitionId, true), gettype($ruleDefinitionId)), __LINE__);
        }
        $this->ruleDefinitionId = $ruleDefinitionId;
        
        return $this;
    }
    /**
     * Get startTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }
    /**
     * Set startTime value
     * @param string $startTime
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->startTime = $startTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderNoticeDTO
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
}
