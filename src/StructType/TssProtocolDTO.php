<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TssProtocolDTO StructType
 * @subpackage Structs
 */
class TssProtocolDTO extends AbstractStructBase
{
    /**
     * The clientId
     * @var string|null
     */
    protected ?string $clientId = null;
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
     * The endTimestamp
     * @var string|null
     */
    protected ?string $endTimestamp = null;
    /**
     * The exportId
     * @var string|null
     */
    protected ?string $exportId = null;
    /**
     * The extUrl
     * @var string|null
     */
    protected ?string $extUrl = null;
    /**
     * The isAutomatic
     * @var bool|null
     */
    protected ?bool $isAutomatic = null;
    /**
     * The numRecords
     * @var int|null
     */
    protected ?int $numRecords = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The startTimestamp
     * @var string|null
     */
    protected ?string $startTimestamp = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The tssId
     * @var string|null
     */
    protected ?string $tssId = null;
    /**
     * The tssProtocolId
     * @var int|null
     */
    protected ?int $tssProtocolId = null;
    /**
     * The tssSystem
     * @var string|null
     */
    protected ?string $tssSystem = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for TssProtocolDTO
     * @uses TssProtocolDTO::setClientId()
     * @uses TssProtocolDTO::setCreationTimestamp()
     * @uses TssProtocolDTO::setCreationUser()
     * @uses TssProtocolDTO::setEndTimestamp()
     * @uses TssProtocolDTO::setExportId()
     * @uses TssProtocolDTO::setExtUrl()
     * @uses TssProtocolDTO::setIsAutomatic()
     * @uses TssProtocolDTO::setNumRecords()
     * @uses TssProtocolDTO::setRepositoryId()
     * @uses TssProtocolDTO::setStartTimestamp()
     * @uses TssProtocolDTO::setStatus()
     * @uses TssProtocolDTO::setTssId()
     * @uses TssProtocolDTO::setTssProtocolId()
     * @uses TssProtocolDTO::setTssSystem()
     * @uses TssProtocolDTO::setUnitName()
     * @param string $clientId
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param string $endTimestamp
     * @param string $exportId
     * @param string $extUrl
     * @param bool $isAutomatic
     * @param int $numRecords
     * @param int $repositoryId
     * @param string $startTimestamp
     * @param string $status
     * @param string $tssId
     * @param int $tssProtocolId
     * @param string $tssSystem
     * @param string $unitName
     */
    public function __construct(?string $clientId = null, ?string $creationTimestamp = null, ?int $creationUser = null, ?string $endTimestamp = null, ?string $exportId = null, ?string $extUrl = null, ?bool $isAutomatic = null, ?int $numRecords = null, ?int $repositoryId = null, ?string $startTimestamp = null, ?string $status = null, ?string $tssId = null, ?int $tssProtocolId = null, ?string $tssSystem = null, ?string $unitName = null)
    {
        $this
            ->setClientId($clientId)
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setEndTimestamp($endTimestamp)
            ->setExportId($exportId)
            ->setExtUrl($extUrl)
            ->setIsAutomatic($isAutomatic)
            ->setNumRecords($numRecords)
            ->setRepositoryId($repositoryId)
            ->setStartTimestamp($startTimestamp)
            ->setStatus($status)
            ->setTssId($tssId)
            ->setTssProtocolId($tssProtocolId)
            ->setTssSystem($tssSystem)
            ->setUnitName($unitName);
    }
    /**
     * Get clientId value
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }
    /**
     * Set clientId value
     * @param string $clientId
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
     */
    public function setClientId(?string $clientId = null): self
    {
        // validation for constraint: string
        if (!is_null($clientId) && !is_string($clientId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientId, true), gettype($clientId)), __LINE__);
        }
        $this->clientId = $clientId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
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
     * Get endTimestamp value
     * @return string|null
     */
    public function getEndTimestamp(): ?string
    {
        return $this->endTimestamp;
    }
    /**
     * Set endTimestamp value
     * @param string $endTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
     */
    public function setEndTimestamp(?string $endTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($endTimestamp) && !is_string($endTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTimestamp, true), gettype($endTimestamp)), __LINE__);
        }
        $this->endTimestamp = $endTimestamp;
        
        return $this;
    }
    /**
     * Get exportId value
     * @return string|null
     */
    public function getExportId(): ?string
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param string $exportId
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
     */
    public function setExportId(?string $exportId = null): self
    {
        // validation for constraint: string
        if (!is_null($exportId) && !is_string($exportId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
    /**
     * Get extUrl value
     * @return string|null
     */
    public function getExtUrl(): ?string
    {
        return $this->extUrl;
    }
    /**
     * Set extUrl value
     * @param string $extUrl
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
     */
    public function setExtUrl(?string $extUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($extUrl) && !is_string($extUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extUrl, true), gettype($extUrl)), __LINE__);
        }
        $this->extUrl = $extUrl;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
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
     * Get numRecords value
     * @return int|null
     */
    public function getNumRecords(): ?int
    {
        return $this->numRecords;
    }
    /**
     * Set numRecords value
     * @param int $numRecords
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
     */
    public function setNumRecords(?int $numRecords = null): self
    {
        // validation for constraint: int
        if (!is_null($numRecords) && !(is_int($numRecords) || ctype_digit($numRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numRecords, true), gettype($numRecords)), __LINE__);
        }
        $this->numRecords = $numRecords;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
    /**
     * Get startTimestamp value
     * @return string|null
     */
    public function getStartTimestamp(): ?string
    {
        return $this->startTimestamp;
    }
    /**
     * Set startTimestamp value
     * @param string $startTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
     */
    public function setStartTimestamp(?string $startTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($startTimestamp) && !is_string($startTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTimestamp, true), gettype($startTimestamp)), __LINE__);
        }
        $this->startTimestamp = $startTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
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
    /**
     * Get tssProtocolId value
     * @return int|null
     */
    public function getTssProtocolId(): ?int
    {
        return $this->tssProtocolId;
    }
    /**
     * Set tssProtocolId value
     * @param int $tssProtocolId
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
     */
    public function setTssProtocolId(?int $tssProtocolId = null): self
    {
        // validation for constraint: int
        if (!is_null($tssProtocolId) && !(is_int($tssProtocolId) || ctype_digit($tssProtocolId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tssProtocolId, true), gettype($tssProtocolId)), __LINE__);
        }
        $this->tssProtocolId = $tssProtocolId;
        
        return $this;
    }
    /**
     * Get tssSystem value
     * @return string|null
     */
    public function getTssSystem(): ?string
    {
        return $this->tssSystem;
    }
    /**
     * Set tssSystem value
     * @param string $tssSystem
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
     */
    public function setTssSystem(?string $tssSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($tssSystem) && !is_string($tssSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tssSystem, true), gettype($tssSystem)), __LINE__);
        }
        $this->tssSystem = $tssSystem;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\TssProtocolDTO
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
