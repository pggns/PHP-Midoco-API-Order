<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderHistoryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderHistoryDTO extends AbstractStructBase
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
     * The importSystem
     * @var string|null
     */
    protected ?string $importSystem = null;
    /**
     * The isimported
     * @var bool|null
     */
    protected ?bool $isimported = null;
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
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
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
     * Constructor method for OrderHistoryDTO
     * @uses OrderHistoryDTO::setDescription()
     * @uses OrderHistoryDTO::setHistoryId()
     * @uses OrderHistoryDTO::setHistoryRefId()
     * @uses OrderHistoryDTO::setImportSystem()
     * @uses OrderHistoryDTO::setIsimported()
     * @uses OrderHistoryDTO::setModifyTimestamp()
     * @uses OrderHistoryDTO::setModifyUser()
     * @uses OrderHistoryDTO::setOrderId()
     * @uses OrderHistoryDTO::setRepositoryId()
     * @uses OrderHistoryDTO::setSubType()
     * @uses OrderHistoryDTO::setType()
     * @param string $description
     * @param int $historyId
     * @param string $historyRefId
     * @param string $importSystem
     * @param bool $isimported
     * @param string $modifyTimestamp
     * @param int $modifyUser
     * @param int $orderId
     * @param int $repositoryId
     * @param string $subType
     * @param string $type
     */
    public function __construct(?string $description = null, ?int $historyId = null, ?string $historyRefId = null, ?string $importSystem = null, ?bool $isimported = null, ?string $modifyTimestamp = null, ?int $modifyUser = null, ?int $orderId = null, ?int $repositoryId = null, ?string $subType = null, ?string $type = null)
    {
        $this
            ->setDescription($description)
            ->setHistoryId($historyId)
            ->setHistoryRefId($historyRefId)
            ->setImportSystem($importSystem)
            ->setIsimported($isimported)
            ->setModifyTimestamp($modifyTimestamp)
            ->setModifyUser($modifyUser)
            ->setOrderId($orderId)
            ->setRepositoryId($repositoryId)
            ->setSubType($subType)
            ->setType($type);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderHistoryDTO
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
     * Get importSystem value
     * @return string|null
     */
    public function getImportSystem(): ?string
    {
        return $this->importSystem;
    }
    /**
     * Set importSystem value
     * @param string $importSystem
     * @return \Pggns\MidocoApi\Order\StructType\OrderHistoryDTO
     */
    public function setImportSystem(?string $importSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($importSystem) && !is_string($importSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importSystem, true), gettype($importSystem)), __LINE__);
        }
        $this->importSystem = $importSystem;
        
        return $this;
    }
    /**
     * Get isimported value
     * @return bool|null
     */
    public function getIsimported(): ?bool
    {
        return $this->isimported;
    }
    /**
     * Set isimported value
     * @param bool $isimported
     * @return \Pggns\MidocoApi\Order\StructType\OrderHistoryDTO
     */
    public function setIsimported(?bool $isimported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isimported) && !is_bool($isimported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isimported, true), gettype($isimported)), __LINE__);
        }
        $this->isimported = $isimported;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderHistoryDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderHistoryDTO
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
}
