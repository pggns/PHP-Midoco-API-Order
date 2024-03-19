<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrgunitClosingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrgunitClosingDTO extends AbstractStructBase
{
    /**
     * The closureDate
     * @var string|null
     */
    protected ?string $closureDate = null;
    /**
     * The closureId
     * @var int|null
     */
    protected ?int $closureId = null;
    /**
     * The codeForClosure
     * @var string|null
     */
    protected ?string $codeForClosure = null;
    /**
     * The crmExportRequired
     * @var bool|null
     */
    protected ?bool $crmExportRequired = null;
    /**
     * The duplicateFeeSettings
     * @var bool|null
     */
    protected ?bool $duplicateFeeSettings = null;
    /**
     * The onlyOrdersAfterDate
     * @var bool|null
     */
    protected ?bool $onlyOrdersAfterDate = null;
    /**
     * The preExecution
     * @var bool|null
     */
    protected ?bool $preExecution = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The unitnameFrom
     * @var string|null
     */
    protected ?string $unitnameFrom = null;
    /**
     * The unitnameTo
     * @var string|null
     */
    protected ?string $unitnameTo = null;
    /**
     * Constructor method for OrgunitClosingDTO
     * @uses OrgunitClosingDTO::setClosureDate()
     * @uses OrgunitClosingDTO::setClosureId()
     * @uses OrgunitClosingDTO::setCodeForClosure()
     * @uses OrgunitClosingDTO::setCrmExportRequired()
     * @uses OrgunitClosingDTO::setDuplicateFeeSettings()
     * @uses OrgunitClosingDTO::setOnlyOrdersAfterDate()
     * @uses OrgunitClosingDTO::setPreExecution()
     * @uses OrgunitClosingDTO::setStatus()
     * @uses OrgunitClosingDTO::setUnitnameFrom()
     * @uses OrgunitClosingDTO::setUnitnameTo()
     * @param string $closureDate
     * @param int $closureId
     * @param string $codeForClosure
     * @param bool $crmExportRequired
     * @param bool $duplicateFeeSettings
     * @param bool $onlyOrdersAfterDate
     * @param bool $preExecution
     * @param string $status
     * @param string $unitnameFrom
     * @param string $unitnameTo
     */
    public function __construct(?string $closureDate = null, ?int $closureId = null, ?string $codeForClosure = null, ?bool $crmExportRequired = null, ?bool $duplicateFeeSettings = null, ?bool $onlyOrdersAfterDate = null, ?bool $preExecution = null, ?string $status = null, ?string $unitnameFrom = null, ?string $unitnameTo = null)
    {
        $this
            ->setClosureDate($closureDate)
            ->setClosureId($closureId)
            ->setCodeForClosure($codeForClosure)
            ->setCrmExportRequired($crmExportRequired)
            ->setDuplicateFeeSettings($duplicateFeeSettings)
            ->setOnlyOrdersAfterDate($onlyOrdersAfterDate)
            ->setPreExecution($preExecution)
            ->setStatus($status)
            ->setUnitnameFrom($unitnameFrom)
            ->setUnitnameTo($unitnameTo);
    }
    /**
     * Get closureDate value
     * @return string|null
     */
    public function getClosureDate(): ?string
    {
        return $this->closureDate;
    }
    /**
     * Set closureDate value
     * @param string $closureDate
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO
     */
    public function setClosureDate(?string $closureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($closureDate) && !is_string($closureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closureDate, true), gettype($closureDate)), __LINE__);
        }
        $this->closureDate = $closureDate;
        
        return $this;
    }
    /**
     * Get closureId value
     * @return int|null
     */
    public function getClosureId(): ?int
    {
        return $this->closureId;
    }
    /**
     * Set closureId value
     * @param int $closureId
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO
     */
    public function setClosureId(?int $closureId = null): self
    {
        // validation for constraint: int
        if (!is_null($closureId) && !(is_int($closureId) || ctype_digit($closureId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($closureId, true), gettype($closureId)), __LINE__);
        }
        $this->closureId = $closureId;
        
        return $this;
    }
    /**
     * Get codeForClosure value
     * @return string|null
     */
    public function getCodeForClosure(): ?string
    {
        return $this->codeForClosure;
    }
    /**
     * Set codeForClosure value
     * @param string $codeForClosure
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO
     */
    public function setCodeForClosure(?string $codeForClosure = null): self
    {
        // validation for constraint: string
        if (!is_null($codeForClosure) && !is_string($codeForClosure)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeForClosure, true), gettype($codeForClosure)), __LINE__);
        }
        $this->codeForClosure = $codeForClosure;
        
        return $this;
    }
    /**
     * Get crmExportRequired value
     * @return bool|null
     */
    public function getCrmExportRequired(): ?bool
    {
        return $this->crmExportRequired;
    }
    /**
     * Set crmExportRequired value
     * @param bool $crmExportRequired
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO
     */
    public function setCrmExportRequired(?bool $crmExportRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($crmExportRequired) && !is_bool($crmExportRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($crmExportRequired, true), gettype($crmExportRequired)), __LINE__);
        }
        $this->crmExportRequired = $crmExportRequired;
        
        return $this;
    }
    /**
     * Get duplicateFeeSettings value
     * @return bool|null
     */
    public function getDuplicateFeeSettings(): ?bool
    {
        return $this->duplicateFeeSettings;
    }
    /**
     * Set duplicateFeeSettings value
     * @param bool $duplicateFeeSettings
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO
     */
    public function setDuplicateFeeSettings(?bool $duplicateFeeSettings = null): self
    {
        // validation for constraint: boolean
        if (!is_null($duplicateFeeSettings) && !is_bool($duplicateFeeSettings)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($duplicateFeeSettings, true), gettype($duplicateFeeSettings)), __LINE__);
        }
        $this->duplicateFeeSettings = $duplicateFeeSettings;
        
        return $this;
    }
    /**
     * Get onlyOrdersAfterDate value
     * @return bool|null
     */
    public function getOnlyOrdersAfterDate(): ?bool
    {
        return $this->onlyOrdersAfterDate;
    }
    /**
     * Set onlyOrdersAfterDate value
     * @param bool $onlyOrdersAfterDate
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO
     */
    public function setOnlyOrdersAfterDate(?bool $onlyOrdersAfterDate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyOrdersAfterDate) && !is_bool($onlyOrdersAfterDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyOrdersAfterDate, true), gettype($onlyOrdersAfterDate)), __LINE__);
        }
        $this->onlyOrdersAfterDate = $onlyOrdersAfterDate;
        
        return $this;
    }
    /**
     * Get preExecution value
     * @return bool|null
     */
    public function getPreExecution(): ?bool
    {
        return $this->preExecution;
    }
    /**
     * Set preExecution value
     * @param bool $preExecution
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO
     */
    public function setPreExecution(?bool $preExecution = null): self
    {
        // validation for constraint: boolean
        if (!is_null($preExecution) && !is_bool($preExecution)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preExecution, true), gettype($preExecution)), __LINE__);
        }
        $this->preExecution = $preExecution;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get unitnameFrom value
     * @return string|null
     */
    public function getUnitnameFrom(): ?string
    {
        return $this->unitnameFrom;
    }
    /**
     * Set unitnameFrom value
     * @param string $unitnameFrom
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO
     */
    public function setUnitnameFrom(?string $unitnameFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($unitnameFrom) && !is_string($unitnameFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitnameFrom, true), gettype($unitnameFrom)), __LINE__);
        }
        $this->unitnameFrom = $unitnameFrom;
        
        return $this;
    }
    /**
     * Get unitnameTo value
     * @return string|null
     */
    public function getUnitnameTo(): ?string
    {
        return $this->unitnameTo;
    }
    /**
     * Set unitnameTo value
     * @param string $unitnameTo
     * @return \Pggns\MidocoApi\Order\StructType\OrgunitClosingDTO
     */
    public function setUnitnameTo(?string $unitnameTo = null): self
    {
        // validation for constraint: string
        if (!is_null($unitnameTo) && !is_string($unitnameTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitnameTo, true), gettype($unitnameTo)), __LINE__);
        }
        $this->unitnameTo = $unitnameTo;
        
        return $this;
    }
}
