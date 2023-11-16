<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebitorHistoryDTO StructType
 * @subpackage Structs
 */
class DebitorHistoryDTO extends AbstractStructBase
{
    /**
     * The agent
     * @var string|null
     */
    protected ?string $agent = null;
    /**
     * The branch
     * @var string|null
     */
    protected ?string $branch = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The historyId
     * @var int|null
     */
    protected ?int $historyId = null;
    /**
     * The isImport
     * @var bool|null
     */
    protected ?bool $isImport = null;
    /**
     * The version
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * Constructor method for DebitorHistoryDTO
     * @uses DebitorHistoryDTO::setAgent()
     * @uses DebitorHistoryDTO::setBranch()
     * @uses DebitorHistoryDTO::setCreationTimestamp()
     * @uses DebitorHistoryDTO::setDebitorNo()
     * @uses DebitorHistoryDTO::setHistoryId()
     * @uses DebitorHistoryDTO::setIsImport()
     * @uses DebitorHistoryDTO::setVersion()
     * @param string $agent
     * @param string $branch
     * @param string $creationTimestamp
     * @param string $debitorNo
     * @param int $historyId
     * @param bool $isImport
     * @param string $version
     */
    public function __construct(?string $agent = null, ?string $branch = null, ?string $creationTimestamp = null, ?string $debitorNo = null, ?int $historyId = null, ?bool $isImport = null, ?string $version = null)
    {
        $this
            ->setAgent($agent)
            ->setBranch($branch)
            ->setCreationTimestamp($creationTimestamp)
            ->setDebitorNo($debitorNo)
            ->setHistoryId($historyId)
            ->setIsImport($isImport)
            ->setVersion($version);
    }
    /**
     * Get agent value
     * @return string|null
     */
    public function getAgent(): ?string
    {
        return $this->agent;
    }
    /**
     * Set agent value
     * @param string $agent
     * @return \Pggns\MidocoApi\Order\StructType\DebitorHistoryDTO
     */
    public function setAgent(?string $agent = null): self
    {
        // validation for constraint: string
        if (!is_null($agent) && !is_string($agent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agent, true), gettype($agent)), __LINE__);
        }
        $this->agent = $agent;
        
        return $this;
    }
    /**
     * Get branch value
     * @return string|null
     */
    public function getBranch(): ?string
    {
        return $this->branch;
    }
    /**
     * Set branch value
     * @param string $branch
     * @return \Pggns\MidocoApi\Order\StructType\DebitorHistoryDTO
     */
    public function setBranch(?string $branch = null): self
    {
        // validation for constraint: string
        if (!is_null($branch) && !is_string($branch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($branch, true), gettype($branch)), __LINE__);
        }
        $this->branch = $branch;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorHistoryDTO
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
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Order\StructType\DebitorHistoryDTO
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get historyId value
     * @return int|null
     */
    public function getHistoryId(): ?int
    {
        return $this->historyId;
    }
    /**
     * Set historyId value
     * @param int $historyId
     * @return \Pggns\MidocoApi\Order\StructType\DebitorHistoryDTO
     */
    public function setHistoryId(?int $historyId = null): self
    {
        // validation for constraint: int
        if (!is_null($historyId) && !(is_int($historyId) || ctype_digit($historyId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($historyId, true), gettype($historyId)), __LINE__);
        }
        $this->historyId = $historyId;
        
        return $this;
    }
    /**
     * Get isImport value
     * @return bool|null
     */
    public function getIsImport(): ?bool
    {
        return $this->isImport;
    }
    /**
     * Set isImport value
     * @param bool $isImport
     * @return \Pggns\MidocoApi\Order\StructType\DebitorHistoryDTO
     */
    public function setIsImport(?bool $isImport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isImport) && !is_bool($isImport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isImport, true), gettype($isImport)), __LINE__);
        }
        $this->isImport = $isImport;
        
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Pggns\MidocoApi\Order\StructType\DebitorHistoryDTO
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
}
