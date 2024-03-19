<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserHistoryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UserHistoryDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The historyId
     * @var int|null
     */
    protected ?int $historyId = null;
    /**
     * The historyRefId
     * @var string|null
     */
    protected ?string $historyRefId = null;
    /**
     * The isImported
     * @var bool|null
     */
    protected ?bool $isImported = null;
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
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * The subType
     * @var string|null
     */
    protected ?string $subType = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for UserHistoryDTO
     * @uses UserHistoryDTO::setDescription()
     * @uses UserHistoryDTO::setHistoryId()
     * @uses UserHistoryDTO::setHistoryRefId()
     * @uses UserHistoryDTO::setIsImported()
     * @uses UserHistoryDTO::setModifyTimestamp()
     * @uses UserHistoryDTO::setModifyUser()
     * @uses UserHistoryDTO::setRepositoryId()
     * @uses UserHistoryDTO::setSubType()
     * @uses UserHistoryDTO::setType()
     * @uses UserHistoryDTO::setUserId()
     * @param string $description
     * @param int $historyId
     * @param string $historyRefId
     * @param bool $isImported
     * @param string $modifyTimestamp
     * @param int $modifyUser
     * @param int $repositoryId
     * @param string $subType
     * @param string $type
     * @param int $userId
     */
    public function __construct(?string $description = null, ?int $historyId = null, ?string $historyRefId = null, ?bool $isImported = null, ?string $modifyTimestamp = null, ?int $modifyUser = null, ?int $repositoryId = null, ?string $subType = null, ?string $type = null, ?int $userId = null)
    {
        $this
            ->setDescription($description)
            ->setHistoryId($historyId)
            ->setHistoryRefId($historyRefId)
            ->setIsImported($isImported)
            ->setModifyTimestamp($modifyTimestamp)
            ->setModifyUser($modifyUser)
            ->setRepositoryId($repositoryId)
            ->setSubType($subType)
            ->setType($type)
            ->setUserId($userId);
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
     * @return \Pggns\MidocoApi\Order\StructType\UserHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UserHistoryDTO
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
     * Get historyRefId value
     * @return string|null
     */
    public function getHistoryRefId(): ?string
    {
        return $this->historyRefId;
    }
    /**
     * Set historyRefId value
     * @param string $historyRefId
     * @return \Pggns\MidocoApi\Order\StructType\UserHistoryDTO
     */
    public function setHistoryRefId(?string $historyRefId = null): self
    {
        // validation for constraint: string
        if (!is_null($historyRefId) && !is_string($historyRefId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($historyRefId, true), gettype($historyRefId)), __LINE__);
        }
        $this->historyRefId = $historyRefId;
        
        return $this;
    }
    /**
     * Get isImported value
     * @return bool|null
     */
    public function getIsImported(): ?bool
    {
        return $this->isImported;
    }
    /**
     * Set isImported value
     * @param bool $isImported
     * @return \Pggns\MidocoApi\Order\StructType\UserHistoryDTO
     */
    public function setIsImported(?bool $isImported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isImported) && !is_bool($isImported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isImported, true), gettype($isImported)), __LINE__);
        }
        $this->isImported = $isImported;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UserHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UserHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UserHistoryDTO
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
     * Get subType value
     * @return string|null
     */
    public function getSubType(): ?string
    {
        return $this->subType;
    }
    /**
     * Set subType value
     * @param string $subType
     * @return \Pggns\MidocoApi\Order\StructType\UserHistoryDTO
     */
    public function setSubType(?string $subType = null): self
    {
        // validation for constraint: string
        if (!is_null($subType) && !is_string($subType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subType, true), gettype($subType)), __LINE__);
        }
        $this->subType = $subType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UserHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UserHistoryDTO
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
