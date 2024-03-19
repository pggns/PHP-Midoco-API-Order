<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteTssExportRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteTssExportRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The isAutomatic
     * @var bool|null
     */
    protected ?bool $isAutomatic = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The transactionNo
     * @var int|null
     */
    protected ?int $transactionNo = null;
    /**
     * The transactionNoFrom
     * @var int|null
     */
    protected ?int $transactionNoFrom = null;
    /**
     * The transactionNoTo
     * @var int|null
     */
    protected ?int $transactionNoTo = null;
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The exportAfterCancel
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $exportAfterCancel = null;
    /**
     * The tssId
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * Constructor method for ExecuteTssExportRequest
     * @uses ExecuteTssExportRequest::setUnitName()
     * @uses ExecuteTssExportRequest::setIsAutomatic()
     * @uses ExecuteTssExportRequest::setCreationUser()
     * @uses ExecuteTssExportRequest::setTransactionNo()
     * @uses ExecuteTssExportRequest::setTransactionNoFrom()
     * @uses ExecuteTssExportRequest::setTransactionNoTo()
     * @uses ExecuteTssExportRequest::setStartDate()
     * @uses ExecuteTssExportRequest::setEndDate()
     * @uses ExecuteTssExportRequest::setExportAfterCancel()
     * @uses ExecuteTssExportRequest::setTssId()
     * @param string $unitName
     * @param bool $isAutomatic
     * @param int $creationUser
     * @param int $transactionNo
     * @param int $transactionNoFrom
     * @param int $transactionNoTo
     * @param string $startDate
     * @param string $endDate
     * @param bool $exportAfterCancel
     * @param string $tssId
     */
    public function __construct(?string $unitName = null, ?bool $isAutomatic = null, ?int $creationUser = null, ?int $transactionNo = null, ?int $transactionNoFrom = null, ?int $transactionNoTo = null, ?string $startDate = null, ?string $endDate = null, ?bool $exportAfterCancel = false, ?string $tssId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setIsAutomatic($isAutomatic)
            ->setCreationUser($creationUser)
            ->setTransactionNo($transactionNo)
            ->setTransactionNoFrom($transactionNoFrom)
            ->setTransactionNoTo($transactionNoTo)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setExportAfterCancel($exportAfterCancel)
            ->setTssId($tssId);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteTssExportRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteTssExportRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteTssExportRequest
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
     * Get transactionNo value
     * @return int|null
     */
    public function getTransactionNo(): ?int
    {
        return $this->transactionNo;
    }
    /**
     * Set transactionNo value
     * @param int $transactionNo
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteTssExportRequest
     */
    public function setTransactionNo(?int $transactionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionNo) && !(is_int($transactionNo) || ctype_digit($transactionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionNo, true), gettype($transactionNo)), __LINE__);
        }
        $this->transactionNo = $transactionNo;
        
        return $this;
    }
    /**
     * Get transactionNoFrom value
     * @return int|null
     */
    public function getTransactionNoFrom(): ?int
    {
        return $this->transactionNoFrom;
    }
    /**
     * Set transactionNoFrom value
     * @param int $transactionNoFrom
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteTssExportRequest
     */
    public function setTransactionNoFrom(?int $transactionNoFrom = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionNoFrom) && !(is_int($transactionNoFrom) || ctype_digit($transactionNoFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionNoFrom, true), gettype($transactionNoFrom)), __LINE__);
        }
        $this->transactionNoFrom = $transactionNoFrom;
        
        return $this;
    }
    /**
     * Get transactionNoTo value
     * @return int|null
     */
    public function getTransactionNoTo(): ?int
    {
        return $this->transactionNoTo;
    }
    /**
     * Set transactionNoTo value
     * @param int $transactionNoTo
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteTssExportRequest
     */
    public function setTransactionNoTo(?int $transactionNoTo = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionNoTo) && !(is_int($transactionNoTo) || ctype_digit($transactionNoTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionNoTo, true), gettype($transactionNoTo)), __LINE__);
        }
        $this->transactionNoTo = $transactionNoTo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteTssExportRequest
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
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteTssExportRequest
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
    /**
     * Get exportAfterCancel value
     * @return bool|null
     */
    public function getExportAfterCancel(): ?bool
    {
        return $this->exportAfterCancel;
    }
    /**
     * Set exportAfterCancel value
     * @param bool $exportAfterCancel
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteTssExportRequest
     */
    public function setExportAfterCancel(?bool $exportAfterCancel = false): self
    {
        // validation for constraint: boolean
        if (!is_null($exportAfterCancel) && !is_bool($exportAfterCancel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportAfterCancel, true), gettype($exportAfterCancel)), __LINE__);
        }
        $this->exportAfterCancel = $exportAfterCancel;
        
        return $this;
    }
    /**
     * Get tssId value
     * @return string|null
     */
    public function getTssId(): ?string
    {
        return $this->tssId;
    }
    /**
     * Set tssId value
     * @param string $tssId
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteTssExportRequest
     */
    public function setTssId(?string $tssId = null): self
    {
        // validation for constraint: string
        if (!is_null($tssId) && !is_string($tssId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssId, true), gettype($tssId)), __LINE__);
        }
        $this->tssId = $tssId;
        
        return $this;
    }
}
