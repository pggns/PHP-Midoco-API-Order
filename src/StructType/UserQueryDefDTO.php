<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserQueryDefDTO StructType
 * @subpackage Structs
 */
class UserQueryDefDTO extends AbstractStructBase
{
    /**
     * The asTask
     * @var bool|null
     */
    protected ?bool $asTask = null;
    /**
     * The assignItemId
     * @var bool|null
     */
    protected ?bool $assignItemId = null;
    /**
     * The createNotices
     * @var bool|null
     */
    protected ?bool $createNotices = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The dateFormat
     * @var string|null
     */
    protected ?string $dateFormat = null;
    /**
     * The dateSeparator
     * @var string|null
     */
    protected ?string $dateSeparator = null;
    /**
     * The deadlineDate
     * @var string|null
     */
    protected ?string $deadlineDate = null;
    /**
     * The decimalSeparator
     * @var string|null
     */
    protected ?string $decimalSeparator = null;
    /**
     * The delegationQueue
     * @var string|null
     */
    protected ?string $delegationQueue = null;
    /**
     * The delegationRole
     * @var int|null
     */
    protected ?int $delegationRole = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The emailText
     * @var string|null
     */
    protected ?string $emailText = null;
    /**
     * The exportType
     * @var string|null
     */
    protected ?string $exportType = null;
    /**
     * The fileType
     * @var string|null
     */
    protected ?string $fileType = null;
    /**
     * The frequency
     * @var string|null
     */
    protected ?string $frequency = null;
    /**
     * The groupByFields
     * @var string|null
     */
    protected ?string $groupByFields = null;
    /**
     * The inheritable
     * @var bool|null
     */
    protected ?bool $inheritable = null;
    /**
     * The isAutomatic
     * @var bool|null
     */
    protected ?bool $isAutomatic = null;
    /**
     * The menuTemplate
     * @var bool|null
     */
    protected ?bool $menuTemplate = null;
    /**
     * The nextDate
     * @var string|null
     */
    protected ?string $nextDate = null;
    /**
     * The notice
     * @var string|null
     */
    protected ?string $notice = null;
    /**
     * The orderByFields
     * @var string|null
     */
    protected ?string $orderByFields = null;
    /**
     * The outputFields
     * @var string|null
     */
    protected ?string $outputFields = null;
    /**
     * The outputLocale
     * @var string|null
     */
    protected ?string $outputLocale = null;
    /**
     * The queryId
     * @var int|null
     */
    protected ?int $queryId = null;
    /**
     * The sftpCredentialName
     * @var string|null
     */
    protected ?string $sftpCredentialName = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The taskType
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for UserQueryDefDTO
     * @uses UserQueryDefDTO::setAsTask()
     * @uses UserQueryDefDTO::setAssignItemId()
     * @uses UserQueryDefDTO::setCreateNotices()
     * @uses UserQueryDefDTO::setCreationDate()
     * @uses UserQueryDefDTO::setDateFormat()
     * @uses UserQueryDefDTO::setDateSeparator()
     * @uses UserQueryDefDTO::setDeadlineDate()
     * @uses UserQueryDefDTO::setDecimalSeparator()
     * @uses UserQueryDefDTO::setDelegationQueue()
     * @uses UserQueryDefDTO::setDelegationRole()
     * @uses UserQueryDefDTO::setDescription()
     * @uses UserQueryDefDTO::setEmail()
     * @uses UserQueryDefDTO::setEmailText()
     * @uses UserQueryDefDTO::setExportType()
     * @uses UserQueryDefDTO::setFileType()
     * @uses UserQueryDefDTO::setFrequency()
     * @uses UserQueryDefDTO::setGroupByFields()
     * @uses UserQueryDefDTO::setInheritable()
     * @uses UserQueryDefDTO::setIsAutomatic()
     * @uses UserQueryDefDTO::setMenuTemplate()
     * @uses UserQueryDefDTO::setNextDate()
     * @uses UserQueryDefDTO::setNotice()
     * @uses UserQueryDefDTO::setOrderByFields()
     * @uses UserQueryDefDTO::setOutputFields()
     * @uses UserQueryDefDTO::setOutputLocale()
     * @uses UserQueryDefDTO::setQueryId()
     * @uses UserQueryDefDTO::setSftpCredentialName()
     * @uses UserQueryDefDTO::setStartDate()
     * @uses UserQueryDefDTO::setTaskType()
     * @uses UserQueryDefDTO::setType()
     * @uses UserQueryDefDTO::setUnitName()
     * @uses UserQueryDefDTO::setUserId()
     * @param bool $asTask
     * @param bool $assignItemId
     * @param bool $createNotices
     * @param string $creationDate
     * @param string $dateFormat
     * @param string $dateSeparator
     * @param string $deadlineDate
     * @param string $decimalSeparator
     * @param string $delegationQueue
     * @param int $delegationRole
     * @param string $description
     * @param string $email
     * @param string $emailText
     * @param string $exportType
     * @param string $fileType
     * @param string $frequency
     * @param string $groupByFields
     * @param bool $inheritable
     * @param bool $isAutomatic
     * @param bool $menuTemplate
     * @param string $nextDate
     * @param string $notice
     * @param string $orderByFields
     * @param string $outputFields
     * @param string $outputLocale
     * @param int $queryId
     * @param string $sftpCredentialName
     * @param string $startDate
     * @param string $taskType
     * @param string $type
     * @param string $unitName
     * @param int $userId
     */
    public function __construct(?bool $asTask = null, ?bool $assignItemId = null, ?bool $createNotices = null, ?string $creationDate = null, ?string $dateFormat = null, ?string $dateSeparator = null, ?string $deadlineDate = null, ?string $decimalSeparator = null, ?string $delegationQueue = null, ?int $delegationRole = null, ?string $description = null, ?string $email = null, ?string $emailText = null, ?string $exportType = null, ?string $fileType = null, ?string $frequency = null, ?string $groupByFields = null, ?bool $inheritable = null, ?bool $isAutomatic = null, ?bool $menuTemplate = null, ?string $nextDate = null, ?string $notice = null, ?string $orderByFields = null, ?string $outputFields = null, ?string $outputLocale = null, ?int $queryId = null, ?string $sftpCredentialName = null, ?string $startDate = null, ?string $taskType = null, ?string $type = null, ?string $unitName = null, ?int $userId = null)
    {
        $this
            ->setAsTask($asTask)
            ->setAssignItemId($assignItemId)
            ->setCreateNotices($createNotices)
            ->setCreationDate($creationDate)
            ->setDateFormat($dateFormat)
            ->setDateSeparator($dateSeparator)
            ->setDeadlineDate($deadlineDate)
            ->setDecimalSeparator($decimalSeparator)
            ->setDelegationQueue($delegationQueue)
            ->setDelegationRole($delegationRole)
            ->setDescription($description)
            ->setEmail($email)
            ->setEmailText($emailText)
            ->setExportType($exportType)
            ->setFileType($fileType)
            ->setFrequency($frequency)
            ->setGroupByFields($groupByFields)
            ->setInheritable($inheritable)
            ->setIsAutomatic($isAutomatic)
            ->setMenuTemplate($menuTemplate)
            ->setNextDate($nextDate)
            ->setNotice($notice)
            ->setOrderByFields($orderByFields)
            ->setOutputFields($outputFields)
            ->setOutputLocale($outputLocale)
            ->setQueryId($queryId)
            ->setSftpCredentialName($sftpCredentialName)
            ->setStartDate($startDate)
            ->setTaskType($taskType)
            ->setType($type)
            ->setUnitName($unitName)
            ->setUserId($userId);
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
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
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
     * Get assignItemId value
     * @return bool|null
     */
    public function getAssignItemId(): ?bool
    {
        return $this->assignItemId;
    }
    /**
     * Set assignItemId value
     * @param bool $assignItemId
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setAssignItemId(?bool $assignItemId = null): self
    {
        // validation for constraint: boolean
        if (!is_null($assignItemId) && !is_bool($assignItemId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($assignItemId, true), gettype($assignItemId)), __LINE__);
        }
        $this->assignItemId = $assignItemId;
        
        return $this;
    }
    /**
     * Get createNotices value
     * @return bool|null
     */
    public function getCreateNotices(): ?bool
    {
        return $this->createNotices;
    }
    /**
     * Set createNotices value
     * @param bool $createNotices
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setCreateNotices(?bool $createNotices = null): self
    {
        // validation for constraint: boolean
        if (!is_null($createNotices) && !is_bool($createNotices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createNotices, true), gettype($createNotices)), __LINE__);
        }
        $this->createNotices = $createNotices;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
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
     * Get dateFormat value
     * @return string|null
     */
    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }
    /**
     * Set dateFormat value
     * @param string $dateFormat
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setDateFormat(?string $dateFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($dateFormat) && !is_string($dateFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateFormat, true), gettype($dateFormat)), __LINE__);
        }
        $this->dateFormat = $dateFormat;
        
        return $this;
    }
    /**
     * Get dateSeparator value
     * @return string|null
     */
    public function getDateSeparator(): ?string
    {
        return $this->dateSeparator;
    }
    /**
     * Set dateSeparator value
     * @param string $dateSeparator
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setDateSeparator(?string $dateSeparator = null): self
    {
        // validation for constraint: string
        if (!is_null($dateSeparator) && !is_string($dateSeparator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateSeparator, true), gettype($dateSeparator)), __LINE__);
        }
        $this->dateSeparator = $dateSeparator;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
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
     * Get decimalSeparator value
     * @return string|null
     */
    public function getDecimalSeparator(): ?string
    {
        return $this->decimalSeparator;
    }
    /**
     * Set decimalSeparator value
     * @param string $decimalSeparator
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setDecimalSeparator(?string $decimalSeparator = null): self
    {
        // validation for constraint: string
        if (!is_null($decimalSeparator) && !is_string($decimalSeparator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($decimalSeparator, true), gettype($decimalSeparator)), __LINE__);
        }
        $this->decimalSeparator = $decimalSeparator;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
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
     * Get delegationRole value
     * @return int|null
     */
    public function getDelegationRole(): ?int
    {
        return $this->delegationRole;
    }
    /**
     * Set delegationRole value
     * @param int $delegationRole
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setDelegationRole(?int $delegationRole = null): self
    {
        // validation for constraint: int
        if (!is_null($delegationRole) && !(is_int($delegationRole) || ctype_digit($delegationRole))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($delegationRole, true), gettype($delegationRole)), __LINE__);
        }
        $this->delegationRole = $delegationRole;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
    /**
     * Get emailText value
     * @return string|null
     */
    public function getEmailText(): ?string
    {
        return $this->emailText;
    }
    /**
     * Set emailText value
     * @param string $emailText
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setEmailText(?string $emailText = null): self
    {
        // validation for constraint: string
        if (!is_null($emailText) && !is_string($emailText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailText, true), gettype($emailText)), __LINE__);
        }
        $this->emailText = $emailText;
        
        return $this;
    }
    /**
     * Get exportType value
     * @return string|null
     */
    public function getExportType(): ?string
    {
        return $this->exportType;
    }
    /**
     * Set exportType value
     * @param string $exportType
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setExportType(?string $exportType = null): self
    {
        // validation for constraint: string
        if (!is_null($exportType) && !is_string($exportType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportType, true), gettype($exportType)), __LINE__);
        }
        $this->exportType = $exportType;
        
        return $this;
    }
    /**
     * Get fileType value
     * @return string|null
     */
    public function getFileType(): ?string
    {
        return $this->fileType;
    }
    /**
     * Set fileType value
     * @param string $fileType
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setFileType(?string $fileType = null): self
    {
        // validation for constraint: string
        if (!is_null($fileType) && !is_string($fileType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileType, true), gettype($fileType)), __LINE__);
        }
        $this->fileType = $fileType;
        
        return $this;
    }
    /**
     * Get frequency value
     * @return string|null
     */
    public function getFrequency(): ?string
    {
        return $this->frequency;
    }
    /**
     * Set frequency value
     * @param string $frequency
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setFrequency(?string $frequency = null): self
    {
        // validation for constraint: string
        if (!is_null($frequency) && !is_string($frequency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($frequency, true), gettype($frequency)), __LINE__);
        }
        $this->frequency = $frequency;
        
        return $this;
    }
    /**
     * Get groupByFields value
     * @return string|null
     */
    public function getGroupByFields(): ?string
    {
        return $this->groupByFields;
    }
    /**
     * Set groupByFields value
     * @param string $groupByFields
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setGroupByFields(?string $groupByFields = null): self
    {
        // validation for constraint: string
        if (!is_null($groupByFields) && !is_string($groupByFields)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupByFields, true), gettype($groupByFields)), __LINE__);
        }
        $this->groupByFields = $groupByFields;
        
        return $this;
    }
    /**
     * Get inheritable value
     * @return bool|null
     */
    public function getInheritable(): ?bool
    {
        return $this->inheritable;
    }
    /**
     * Set inheritable value
     * @param bool $inheritable
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setInheritable(?bool $inheritable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inheritable) && !is_bool($inheritable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inheritable, true), gettype($inheritable)), __LINE__);
        }
        $this->inheritable = $inheritable;
        
        return $this;
    }
    /**
     * Get isAutomatic value
     * @return bool|null
     */
    public function getIsAutomatic(): ?bool
    {
        return $this->isAutomatic;
    }
    /**
     * Set isAutomatic value
     * @param bool $isAutomatic
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setIsAutomatic(?bool $isAutomatic = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAutomatic) && !is_bool($isAutomatic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAutomatic, true), gettype($isAutomatic)), __LINE__);
        }
        $this->isAutomatic = $isAutomatic;
        
        return $this;
    }
    /**
     * Get menuTemplate value
     * @return bool|null
     */
    public function getMenuTemplate(): ?bool
    {
        return $this->menuTemplate;
    }
    /**
     * Set menuTemplate value
     * @param bool $menuTemplate
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setMenuTemplate(?bool $menuTemplate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($menuTemplate) && !is_bool($menuTemplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($menuTemplate, true), gettype($menuTemplate)), __LINE__);
        }
        $this->menuTemplate = $menuTemplate;
        
        return $this;
    }
    /**
     * Get nextDate value
     * @return string|null
     */
    public function getNextDate(): ?string
    {
        return $this->nextDate;
    }
    /**
     * Set nextDate value
     * @param string $nextDate
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setNextDate(?string $nextDate = null): self
    {
        // validation for constraint: string
        if (!is_null($nextDate) && !is_string($nextDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nextDate, true), gettype($nextDate)), __LINE__);
        }
        $this->nextDate = $nextDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
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
     * Get orderByFields value
     * @return string|null
     */
    public function getOrderByFields(): ?string
    {
        return $this->orderByFields;
    }
    /**
     * Set orderByFields value
     * @param string $orderByFields
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setOrderByFields(?string $orderByFields = null): self
    {
        // validation for constraint: string
        if (!is_null($orderByFields) && !is_string($orderByFields)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderByFields, true), gettype($orderByFields)), __LINE__);
        }
        $this->orderByFields = $orderByFields;
        
        return $this;
    }
    /**
     * Get outputFields value
     * @return string|null
     */
    public function getOutputFields(): ?string
    {
        return $this->outputFields;
    }
    /**
     * Set outputFields value
     * @param string $outputFields
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setOutputFields(?string $outputFields = null): self
    {
        // validation for constraint: string
        if (!is_null($outputFields) && !is_string($outputFields)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputFields, true), gettype($outputFields)), __LINE__);
        }
        $this->outputFields = $outputFields;
        
        return $this;
    }
    /**
     * Get outputLocale value
     * @return string|null
     */
    public function getOutputLocale(): ?string
    {
        return $this->outputLocale;
    }
    /**
     * Set outputLocale value
     * @param string $outputLocale
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setOutputLocale(?string $outputLocale = null): self
    {
        // validation for constraint: string
        if (!is_null($outputLocale) && !is_string($outputLocale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputLocale, true), gettype($outputLocale)), __LINE__);
        }
        $this->outputLocale = $outputLocale;
        
        return $this;
    }
    /**
     * Get queryId value
     * @return int|null
     */
    public function getQueryId(): ?int
    {
        return $this->queryId;
    }
    /**
     * Set queryId value
     * @param int $queryId
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setQueryId(?int $queryId = null): self
    {
        // validation for constraint: int
        if (!is_null($queryId) && !(is_int($queryId) || ctype_digit($queryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queryId, true), gettype($queryId)), __LINE__);
        }
        $this->queryId = $queryId;
        
        return $this;
    }
    /**
     * Get sftpCredentialName value
     * @return string|null
     */
    public function getSftpCredentialName(): ?string
    {
        return $this->sftpCredentialName;
    }
    /**
     * Set sftpCredentialName value
     * @param string $sftpCredentialName
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setSftpCredentialName(?string $sftpCredentialName = null): self
    {
        // validation for constraint: string
        if (!is_null($sftpCredentialName) && !is_string($sftpCredentialName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sftpCredentialName, true), gettype($sftpCredentialName)), __LINE__);
        }
        $this->sftpCredentialName = $sftpCredentialName;
        
        return $this;
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
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
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
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
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\UserQueryDefDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
}
