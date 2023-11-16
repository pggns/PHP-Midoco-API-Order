<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUserQueryRequest StructType
 * @subpackage Structs
 */
class SaveUserQueryRequest extends AbstractStructBase
{
    /**
     * The queryDescription
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $queryDescription;
    /**
     * The MidocoQuery
     * Meta information extracted from the WSDL
     * - ref: MidocoQuery
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQuery|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoQuery $MidocoQuery = null;
    /**
     * The queryType
     * Meta information extracted from the WSDL
     * - default: B
     * @var string|null
     */
    protected ?string $queryType = null;
    /**
     * The queryIsAutomatic
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $queryIsAutomatic = null;
    /**
     * The queryFreqency
     * Meta information extracted from the WSDL
     * - default:
     * @var string|null
     */
    protected ?string $queryFreqency = null;
    /**
     * The queryStartDate
     * @var string|null
     */
    protected ?string $queryStartDate = null;
    /**
     * The queryNextDate
     * @var string|null
     */
    protected ?string $queryNextDate = null;
    /**
     * The queryEmail
     * Meta information extracted from the WSDL
     * - default:
     * @var string|null
     */
    protected ?string $queryEmail = null;
    /**
     * The IsAddMode
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $IsAddMode = null;
    /**
     * The queryEmailText
     * Meta information extracted from the WSDL
     * - default:
     * @var string|null
     */
    protected ?string $queryEmailText = null;
    /**
     * The queryInheritable
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $queryInheritable = null;
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
     * Constructor method for SaveUserQueryRequest
     * @uses SaveUserQueryRequest::setQueryDescription()
     * @uses SaveUserQueryRequest::setMidocoQuery()
     * @uses SaveUserQueryRequest::setQueryType()
     * @uses SaveUserQueryRequest::setQueryIsAutomatic()
     * @uses SaveUserQueryRequest::setQueryFreqency()
     * @uses SaveUserQueryRequest::setQueryStartDate()
     * @uses SaveUserQueryRequest::setQueryNextDate()
     * @uses SaveUserQueryRequest::setQueryEmail()
     * @uses SaveUserQueryRequest::setIsAddMode()
     * @uses SaveUserQueryRequest::setQueryEmailText()
     * @uses SaveUserQueryRequest::setQueryInheritable()
     * @uses SaveUserQueryRequest::setCreateNotices()
     * @uses SaveUserQueryRequest::setAsTask()
     * @uses SaveUserQueryRequest::setNotice()
     * @uses SaveUserQueryRequest::setTaskType()
     * @uses SaveUserQueryRequest::setAssignItemId()
     * @uses SaveUserQueryRequest::setDelegationQueue()
     * @uses SaveUserQueryRequest::setDeadlineDate()
     * @uses SaveUserQueryRequest::setOutputLocale()
     * @uses SaveUserQueryRequest::setExportType()
     * @uses SaveUserQueryRequest::setDateFormat()
     * @uses SaveUserQueryRequest::setSftpCredentialName()
     * @uses SaveUserQueryRequest::setDateSeparator()
     * @uses SaveUserQueryRequest::setDecimalSeparator()
     * @uses SaveUserQueryRequest::setFileType()
     * @param string $queryDescription
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQuery $midocoQuery
     * @param string $queryType
     * @param bool $queryIsAutomatic
     * @param string $queryFreqency
     * @param string $queryStartDate
     * @param string $queryNextDate
     * @param string $queryEmail
     * @param bool $isAddMode
     * @param string $queryEmailText
     * @param bool $queryInheritable
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
    public function __construct(string $queryDescription, ?\Pggns\MidocoApi\Order\StructType\MidocoQuery $midocoQuery = null, ?string $queryType = 'B', ?bool $queryIsAutomatic = false, ?string $queryFreqency = '', ?string $queryStartDate = null, ?string $queryNextDate = null, ?string $queryEmail = '', ?bool $isAddMode = false, ?string $queryEmailText = '', ?bool $queryInheritable = false, ?bool $createNotices = false, ?bool $asTask = false, ?string $notice = '', ?string $taskType = '', ?bool $assignItemId = false, ?string $delegationQueue = null, ?string $deadlineDate = null, ?string $outputLocale = null, ?string $exportType = null, ?string $dateFormat = null, ?string $sftpCredentialName = null, ?string $dateSeparator = null, ?string $decimalSeparator = null, ?string $fileType = null)
    {
        $this
            ->setQueryDescription($queryDescription)
            ->setMidocoQuery($midocoQuery)
            ->setQueryType($queryType)
            ->setQueryIsAutomatic($queryIsAutomatic)
            ->setQueryFreqency($queryFreqency)
            ->setQueryStartDate($queryStartDate)
            ->setQueryNextDate($queryNextDate)
            ->setQueryEmail($queryEmail)
            ->setIsAddMode($isAddMode)
            ->setQueryEmailText($queryEmailText)
            ->setQueryInheritable($queryInheritable)
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
     * Get queryDescription value
     * @return string
     */
    public function getQueryDescription(): string
    {
        return $this->queryDescription;
    }
    /**
     * Set queryDescription value
     * @param string $queryDescription
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
     */
    public function setQueryDescription(string $queryDescription): self
    {
        // validation for constraint: string
        if (!is_null($queryDescription) && !is_string($queryDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryDescription, true), gettype($queryDescription)), __LINE__);
        }
        $this->queryDescription = $queryDescription;
        
        return $this;
    }
    /**
     * Get MidocoQuery value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery|null
     */
    public function getMidocoQuery(): ?\Pggns\MidocoApi\Order\StructType\MidocoQuery
    {
        return $this->MidocoQuery;
    }
    /**
     * Set MidocoQuery value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQuery $midocoQuery
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
     */
    public function setMidocoQuery(?\Pggns\MidocoApi\Order\StructType\MidocoQuery $midocoQuery = null): self
    {
        $this->MidocoQuery = $midocoQuery;
        
        return $this;
    }
    /**
     * Get queryType value
     * @return string|null
     */
    public function getQueryType(): ?string
    {
        return $this->queryType;
    }
    /**
     * Set queryType value
     * @param string $queryType
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
     */
    public function setQueryType(?string $queryType = 'B'): self
    {
        // validation for constraint: string
        if (!is_null($queryType) && !is_string($queryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryType, true), gettype($queryType)), __LINE__);
        }
        $this->queryType = $queryType;
        
        return $this;
    }
    /**
     * Get queryIsAutomatic value
     * @return bool|null
     */
    public function getQueryIsAutomatic(): ?bool
    {
        return $this->queryIsAutomatic;
    }
    /**
     * Set queryIsAutomatic value
     * @param bool $queryIsAutomatic
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
     */
    public function setQueryIsAutomatic(?bool $queryIsAutomatic = false): self
    {
        // validation for constraint: boolean
        if (!is_null($queryIsAutomatic) && !is_bool($queryIsAutomatic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($queryIsAutomatic, true), gettype($queryIsAutomatic)), __LINE__);
        }
        $this->queryIsAutomatic = $queryIsAutomatic;
        
        return $this;
    }
    /**
     * Get queryFreqency value
     * @return string|null
     */
    public function getQueryFreqency(): ?string
    {
        return $this->queryFreqency;
    }
    /**
     * Set queryFreqency value
     * @param string $queryFreqency
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
     */
    public function setQueryFreqency(?string $queryFreqency = ''): self
    {
        // validation for constraint: string
        if (!is_null($queryFreqency) && !is_string($queryFreqency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryFreqency, true), gettype($queryFreqency)), __LINE__);
        }
        $this->queryFreqency = $queryFreqency;
        
        return $this;
    }
    /**
     * Get queryStartDate value
     * @return string|null
     */
    public function getQueryStartDate(): ?string
    {
        return $this->queryStartDate;
    }
    /**
     * Set queryStartDate value
     * @param string $queryStartDate
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
     */
    public function setQueryStartDate(?string $queryStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($queryStartDate) && !is_string($queryStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryStartDate, true), gettype($queryStartDate)), __LINE__);
        }
        $this->queryStartDate = $queryStartDate;
        
        return $this;
    }
    /**
     * Get queryNextDate value
     * @return string|null
     */
    public function getQueryNextDate(): ?string
    {
        return $this->queryNextDate;
    }
    /**
     * Set queryNextDate value
     * @param string $queryNextDate
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
     */
    public function setQueryNextDate(?string $queryNextDate = null): self
    {
        // validation for constraint: string
        if (!is_null($queryNextDate) && !is_string($queryNextDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryNextDate, true), gettype($queryNextDate)), __LINE__);
        }
        $this->queryNextDate = $queryNextDate;
        
        return $this;
    }
    /**
     * Get queryEmail value
     * @return string|null
     */
    public function getQueryEmail(): ?string
    {
        return $this->queryEmail;
    }
    /**
     * Set queryEmail value
     * @param string $queryEmail
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
     */
    public function setQueryEmail(?string $queryEmail = ''): self
    {
        // validation for constraint: string
        if (!is_null($queryEmail) && !is_string($queryEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryEmail, true), gettype($queryEmail)), __LINE__);
        }
        $this->queryEmail = $queryEmail;
        
        return $this;
    }
    /**
     * Get IsAddMode value
     * @return bool|null
     */
    public function getIsAddMode(): ?bool
    {
        return $this->IsAddMode;
    }
    /**
     * Set IsAddMode value
     * @param bool $isAddMode
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
     */
    public function setIsAddMode(?bool $isAddMode = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isAddMode) && !is_bool($isAddMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAddMode, true), gettype($isAddMode)), __LINE__);
        }
        $this->IsAddMode = $isAddMode;
        
        return $this;
    }
    /**
     * Get queryEmailText value
     * @return string|null
     */
    public function getQueryEmailText(): ?string
    {
        return $this->queryEmailText;
    }
    /**
     * Set queryEmailText value
     * @param string $queryEmailText
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
     */
    public function setQueryEmailText(?string $queryEmailText = ''): self
    {
        // validation for constraint: string
        if (!is_null($queryEmailText) && !is_string($queryEmailText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryEmailText, true), gettype($queryEmailText)), __LINE__);
        }
        $this->queryEmailText = $queryEmailText;
        
        return $this;
    }
    /**
     * Get queryInheritable value
     * @return bool|null
     */
    public function getQueryInheritable(): ?bool
    {
        return $this->queryInheritable;
    }
    /**
     * Set queryInheritable value
     * @param bool $queryInheritable
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
     */
    public function setQueryInheritable(?bool $queryInheritable = false): self
    {
        // validation for constraint: boolean
        if (!is_null($queryInheritable) && !is_bool($queryInheritable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($queryInheritable, true), gettype($queryInheritable)), __LINE__);
        }
        $this->queryInheritable = $queryInheritable;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveUserQueryRequest
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
