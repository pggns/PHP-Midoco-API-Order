<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUserQueryInfo StructType
 * @subpackage Structs
 */
class MidocoUserQueryInfo extends AbstractStructBase
{
    /**
     * The queryId
     * @var int|null
     */
    protected ?int $queryId = null;
    /**
     * The queryName
     * @var string|null
     */
    protected ?string $queryName = null;
    /**
     * The creationUser
     * @var string|null
     */
    protected ?string $creationUser = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The isAutomatic
     * @var bool|null
     */
    protected ?bool $isAutomatic = null;
    /**
     * The frequency
     * @var string|null
     */
    protected ?string $frequency = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The nextDate
     * @var string|null
     */
    protected ?string $nextDate = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The emailText
     * @var string|null
     */
    protected ?string $emailText = null;
    /**
     * The menuTemplate
     * @var bool|null
     */
    protected ?bool $menuTemplate = null;
    /**
     * The inheritable
     * @var bool|null
     */
    protected ?bool $inheritable = null;
    /**
     * The noticeTemplate
     * Meta information extracted from the WSDL
     * - default:
     * @var string|null
     */
    protected ?string $noticeTemplate = null;
    /**
     * The createNotices
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $createNotices = null;
    /**
     * The asTask
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $asTask = null;
    /**
     * The notice
     * Meta information extracted from the WSDL
     * - default:
     * @var string|null
     */
    protected ?string $notice = null;
    /**
     * The taskType
     * Meta information extracted from the WSDL
     * - default:
     * @var string|null
     */
    protected ?string $taskType = null;
    /**
     * The assignItemId
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $assignItemId = null;
    /**
     * The delegationQueue
     * @var string|null
     */
    protected ?string $delegationQueue = null;
    /**
     * The deadlineDate
     * @var string|null
     */
    protected ?string $deadlineDate = null;
    /**
     * The outputLocale
     * @var string|null
     */
    protected ?string $outputLocale = null;
    /**
     * The exportType
     * @var string|null
     */
    protected ?string $exportType = null;
    /**
     * The dateFormat
     * @var string|null
     */
    protected ?string $dateFormat = null;
    /**
     * The sftpCredentialName
     * @var string|null
     */
    protected ?string $sftpCredentialName = null;
    /**
     * The dateSeparator
     * @var string|null
     */
    protected ?string $dateSeparator = null;
    /**
     * The decimalSeparator
     * @var string|null
     */
    protected ?string $decimalSeparator = null;
    /**
     * The fileType
     * @var string|null
     */
    protected ?string $fileType = null;
    /**
     * Constructor method for MidocoUserQueryInfo
     * @uses MidocoUserQueryInfo::setQueryId()
     * @uses MidocoUserQueryInfo::setQueryName()
     * @uses MidocoUserQueryInfo::setCreationUser()
     * @uses MidocoUserQueryInfo::setCreationDate()
     * @uses MidocoUserQueryInfo::setIsAutomatic()
     * @uses MidocoUserQueryInfo::setFrequency()
     * @uses MidocoUserQueryInfo::setStartDate()
     * @uses MidocoUserQueryInfo::setNextDate()
     * @uses MidocoUserQueryInfo::setEmail()
     * @uses MidocoUserQueryInfo::setUnitName()
     * @uses MidocoUserQueryInfo::setEmailText()
     * @uses MidocoUserQueryInfo::setMenuTemplate()
     * @uses MidocoUserQueryInfo::setInheritable()
     * @uses MidocoUserQueryInfo::setNoticeTemplate()
     * @uses MidocoUserQueryInfo::setCreateNotices()
     * @uses MidocoUserQueryInfo::setAsTask()
     * @uses MidocoUserQueryInfo::setNotice()
     * @uses MidocoUserQueryInfo::setTaskType()
     * @uses MidocoUserQueryInfo::setAssignItemId()
     * @uses MidocoUserQueryInfo::setDelegationQueue()
     * @uses MidocoUserQueryInfo::setDeadlineDate()
     * @uses MidocoUserQueryInfo::setOutputLocale()
     * @uses MidocoUserQueryInfo::setExportType()
     * @uses MidocoUserQueryInfo::setDateFormat()
     * @uses MidocoUserQueryInfo::setSftpCredentialName()
     * @uses MidocoUserQueryInfo::setDateSeparator()
     * @uses MidocoUserQueryInfo::setDecimalSeparator()
     * @uses MidocoUserQueryInfo::setFileType()
     * @param int $queryId
     * @param string $queryName
     * @param string $creationUser
     * @param string $creationDate
     * @param bool $isAutomatic
     * @param string $frequency
     * @param string $startDate
     * @param string $nextDate
     * @param string $email
     * @param string $unitName
     * @param string $emailText
     * @param bool $menuTemplate
     * @param bool $inheritable
     * @param string $noticeTemplate
     * @param bool $createNotices
     * @param bool $asTask
     * @param string $notice
     * @param string $taskType
     * @param bool $assignItemId
     * @param string $delegationQueue
     * @param string $deadlineDate
     * @param string $outputLocale
     * @param string $exportType
     * @param string $dateFormat
     * @param string $sftpCredentialName
     * @param string $dateSeparator
     * @param string $decimalSeparator
     * @param string $fileType
     */
    public function __construct(?int $queryId = null, ?string $queryName = null, ?string $creationUser = null, ?string $creationDate = null, ?bool $isAutomatic = null, ?string $frequency = null, ?string $startDate = null, ?string $nextDate = null, ?string $email = null, ?string $unitName = null, ?string $emailText = null, ?bool $menuTemplate = null, ?bool $inheritable = null, ?string $noticeTemplate = '', ?bool $createNotices = false, ?bool $asTask = false, ?string $notice = '', ?string $taskType = '', ?bool $assignItemId = false, ?string $delegationQueue = null, ?string $deadlineDate = null, ?string $outputLocale = null, ?string $exportType = null, ?string $dateFormat = null, ?string $sftpCredentialName = null, ?string $dateSeparator = null, ?string $decimalSeparator = null, ?string $fileType = null)
    {
        $this
            ->setQueryId($queryId)
            ->setQueryName($queryName)
            ->setCreationUser($creationUser)
            ->setCreationDate($creationDate)
            ->setIsAutomatic($isAutomatic)
            ->setFrequency($frequency)
            ->setStartDate($startDate)
            ->setNextDate($nextDate)
            ->setEmail($email)
            ->setUnitName($unitName)
            ->setEmailText($emailText)
            ->setMenuTemplate($menuTemplate)
            ->setInheritable($inheritable)
            ->setNoticeTemplate($noticeTemplate)
            ->setCreateNotices($createNotices)
            ->setAsTask($asTask)
            ->setNotice($notice)
            ->setTaskType($taskType)
            ->setAssignItemId($assignItemId)
            ->setDelegationQueue($delegationQueue)
            ->setDeadlineDate($deadlineDate)
            ->setOutputLocale($outputLocale)
            ->setExportType($exportType)
            ->setDateFormat($dateFormat)
            ->setSftpCredentialName($sftpCredentialName)
            ->setDateSeparator($dateSeparator)
            ->setDecimalSeparator($decimalSeparator)
            ->setFileType($fileType);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * Get queryName value
     * @return string|null
     */
    public function getQueryName(): ?string
    {
        return $this->queryName;
    }
    /**
     * Set queryName value
     * @param string $queryName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
     */
    public function setQueryName(?string $queryName = null): self
    {
        // validation for constraint: string
        if (!is_null($queryName) && !is_string($queryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryName, true), gettype($queryName)), __LINE__);
        }
        $this->queryName = $queryName;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return string|null
     */
    public function getCreationUser(): ?string
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param string $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
     */
    public function setCreationUser(?string $creationUser = null): self
    {
        // validation for constraint: string
        if (!is_null($creationUser) && !is_string($creationUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * Get noticeTemplate value
     * @return string|null
     */
    public function getNoticeTemplate(): ?string
    {
        return $this->noticeTemplate;
    }
    /**
     * Set noticeTemplate value
     * @param string $noticeTemplate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
     */
    public function setNoticeTemplate(?string $noticeTemplate = ''): self
    {
        // validation for constraint: string
        if (!is_null($noticeTemplate) && !is_string($noticeTemplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noticeTemplate, true), gettype($noticeTemplate)), __LINE__);
        }
        $this->noticeTemplate = $noticeTemplate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
     */
    public function setCreateNotices(?bool $createNotices = false): self
    {
        // validation for constraint: boolean
        if (!is_null($createNotices) && !is_bool($createNotices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createNotices, true), gettype($createNotices)), __LINE__);
        }
        $this->createNotices = $createNotices;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
     */
    public function setAsTask(?bool $asTask = false): self
    {
        // validation for constraint: boolean
        if (!is_null($asTask) && !is_bool($asTask)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($asTask, true), gettype($asTask)), __LINE__);
        }
        $this->asTask = $asTask;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
     */
    public function setNotice(?string $notice = ''): self
    {
        // validation for constraint: string
        if (!is_null($notice) && !is_string($notice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notice, true), gettype($notice)), __LINE__);
        }
        $this->notice = $notice;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
     */
    public function setTaskType(?string $taskType = ''): self
    {
        // validation for constraint: string
        if (!is_null($taskType) && !is_string($taskType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taskType, true), gettype($taskType)), __LINE__);
        }
        $this->taskType = $taskType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
     */
    public function setAssignItemId(?bool $assignItemId = false): self
    {
        // validation for constraint: boolean
        if (!is_null($assignItemId) && !is_bool($assignItemId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($assignItemId, true), gettype($assignItemId)), __LINE__);
        }
        $this->assignItemId = $assignItemId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUserQueryInfo
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
}
