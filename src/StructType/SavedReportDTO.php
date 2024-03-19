<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavedReportDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SavedReportDTO extends AbstractStructBase
{
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The crtOrgUnit
     * @var string|null
     */
    protected ?string $crtOrgUnit = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The frequency
     * @var string|null
     */
    protected ?string $frequency = null;
    /**
     * The inherited
     * @var bool|null
     */
    protected ?bool $inherited = null;
    /**
     * The isAutomatic
     * @var bool|null
     */
    protected ?bool $isAutomatic = null;
    /**
     * The isOriginalReport
     * @var bool|null
     */
    protected ?bool $isOriginalReport = null;
    /**
     * The needsFtp
     * @var bool|null
     */
    protected ?bool $needsFtp = null;
    /**
     * The nextDate
     * @var string|null
     */
    protected ?string $nextDate = null;
    /**
     * The outputFormat
     * @var string|null
     */
    protected ?string $outputFormat = null;
    /**
     * The reportComment
     * @var string|null
     */
    protected ?string $reportComment = null;
    /**
     * The reportId
     * @var int|null
     */
    protected ?int $reportId = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The versionId
     * @var int|null
     */
    protected ?int $versionId = null;
    /**
     * Constructor method for SavedReportDTO
     * @uses SavedReportDTO::setCreationDate()
     * @uses SavedReportDTO::setCreationUser()
     * @uses SavedReportDTO::setCrtOrgUnit()
     * @uses SavedReportDTO::setEmail()
     * @uses SavedReportDTO::setFrequency()
     * @uses SavedReportDTO::setInherited()
     * @uses SavedReportDTO::setIsAutomatic()
     * @uses SavedReportDTO::setIsOriginalReport()
     * @uses SavedReportDTO::setNeedsFtp()
     * @uses SavedReportDTO::setNextDate()
     * @uses SavedReportDTO::setOutputFormat()
     * @uses SavedReportDTO::setReportComment()
     * @uses SavedReportDTO::setReportId()
     * @uses SavedReportDTO::setStartDate()
     * @uses SavedReportDTO::setVersionId()
     * @param string $creationDate
     * @param int $creationUser
     * @param string $crtOrgUnit
     * @param string $email
     * @param string $frequency
     * @param bool $inherited
     * @param bool $isAutomatic
     * @param bool $isOriginalReport
     * @param bool $needsFtp
     * @param string $nextDate
     * @param string $outputFormat
     * @param string $reportComment
     * @param int $reportId
     * @param string $startDate
     * @param int $versionId
     */
    public function __construct(?string $creationDate = null, ?int $creationUser = null, ?string $crtOrgUnit = null, ?string $email = null, ?string $frequency = null, ?bool $inherited = null, ?bool $isAutomatic = null, ?bool $isOriginalReport = null, ?bool $needsFtp = null, ?string $nextDate = null, ?string $outputFormat = null, ?string $reportComment = null, ?int $reportId = null, ?string $startDate = null, ?int $versionId = null)
    {
        $this
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setCrtOrgUnit($crtOrgUnit)
            ->setEmail($email)
            ->setFrequency($frequency)
            ->setInherited($inherited)
            ->setIsAutomatic($isAutomatic)
            ->setIsOriginalReport($isOriginalReport)
            ->setNeedsFtp($needsFtp)
            ->setNextDate($nextDate)
            ->setOutputFormat($outputFormat)
            ->setReportComment($reportComment)
            ->setReportId($reportId)
            ->setStartDate($startDate)
            ->setVersionId($versionId);
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
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
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
     * Get crtOrgUnit value
     * @return string|null
     */
    public function getCrtOrgUnit(): ?string
    {
        return $this->crtOrgUnit;
    }
    /**
     * Set crtOrgUnit value
     * @param string $crtOrgUnit
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
     */
    public function setCrtOrgUnit(?string $crtOrgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($crtOrgUnit) && !is_string($crtOrgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crtOrgUnit, true), gettype($crtOrgUnit)), __LINE__);
        }
        $this->crtOrgUnit = $crtOrgUnit;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
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
     * Get inherited value
     * @return bool|null
     */
    public function getInherited(): ?bool
    {
        return $this->inherited;
    }
    /**
     * Set inherited value
     * @param bool $inherited
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
     */
    public function setInherited(?bool $inherited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($inherited) && !is_bool($inherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inherited, true), gettype($inherited)), __LINE__);
        }
        $this->inherited = $inherited;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
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
     * Get isOriginalReport value
     * @return bool|null
     */
    public function getIsOriginalReport(): ?bool
    {
        return $this->isOriginalReport;
    }
    /**
     * Set isOriginalReport value
     * @param bool $isOriginalReport
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
     */
    public function setIsOriginalReport(?bool $isOriginalReport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOriginalReport) && !is_bool($isOriginalReport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOriginalReport, true), gettype($isOriginalReport)), __LINE__);
        }
        $this->isOriginalReport = $isOriginalReport;
        
        return $this;
    }
    /**
     * Get needsFtp value
     * @return bool|null
     */
    public function getNeedsFtp(): ?bool
    {
        return $this->needsFtp;
    }
    /**
     * Set needsFtp value
     * @param bool $needsFtp
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
     */
    public function setNeedsFtp(?bool $needsFtp = null): self
    {
        // validation for constraint: boolean
        if (!is_null($needsFtp) && !is_bool($needsFtp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsFtp, true), gettype($needsFtp)), __LINE__);
        }
        $this->needsFtp = $needsFtp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
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
     * Get outputFormat value
     * @return string|null
     */
    public function getOutputFormat(): ?string
    {
        return $this->outputFormat;
    }
    /**
     * Set outputFormat value
     * @param string $outputFormat
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
     */
    public function setOutputFormat(?string $outputFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($outputFormat) && !is_string($outputFormat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputFormat, true), gettype($outputFormat)), __LINE__);
        }
        $this->outputFormat = $outputFormat;
        
        return $this;
    }
    /**
     * Get reportComment value
     * @return string|null
     */
    public function getReportComment(): ?string
    {
        return $this->reportComment;
    }
    /**
     * Set reportComment value
     * @param string $reportComment
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
     */
    public function setReportComment(?string $reportComment = null): self
    {
        // validation for constraint: string
        if (!is_null($reportComment) && !is_string($reportComment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportComment, true), gettype($reportComment)), __LINE__);
        }
        $this->reportComment = $reportComment;
        
        return $this;
    }
    /**
     * Get reportId value
     * @return int|null
     */
    public function getReportId(): ?int
    {
        return $this->reportId;
    }
    /**
     * Set reportId value
     * @param int $reportId
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
     */
    public function setReportId(?int $reportId = null): self
    {
        // validation for constraint: int
        if (!is_null($reportId) && !(is_int($reportId) || ctype_digit($reportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($reportId, true), gettype($reportId)), __LINE__);
        }
        $this->reportId = $reportId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
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
     * Get versionId value
     * @return int|null
     */
    public function getVersionId(): ?int
    {
        return $this->versionId;
    }
    /**
     * Set versionId value
     * @param int $versionId
     * @return \Pggns\MidocoApi\Order\StructType\SavedReportDTO
     */
    public function setVersionId(?int $versionId = null): self
    {
        // validation for constraint: int
        if (!is_null($versionId) && !(is_int($versionId) || ctype_digit($versionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($versionId, true), gettype($versionId)), __LINE__);
        }
        $this->versionId = $versionId;
        
        return $this;
    }
}
