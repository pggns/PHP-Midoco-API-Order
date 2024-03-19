<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignedMidocoSettlOUnitDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AssignedMidocoSettlOUnitDTO extends AbstractStructBase
{
    /**
     * The assignedCustomerId
     * @var int|null
     */
    protected ?int $assignedCustomerId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The isParent
     * @var bool|null
     */
    protected ?bool $isParent = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The useAllUnitsFromDb
     * @var bool|null
     */
    protected ?bool $useAllUnitsFromDb = null;
    /**
     * Constructor method for AssignedMidocoSettlOUnitDTO
     * @uses AssignedMidocoSettlOUnitDTO::setAssignedCustomerId()
     * @uses AssignedMidocoSettlOUnitDTO::setCustomerId()
     * @uses AssignedMidocoSettlOUnitDTO::setIsParent()
     * @uses AssignedMidocoSettlOUnitDTO::setSettlementId()
     * @uses AssignedMidocoSettlOUnitDTO::setUnitName()
     * @uses AssignedMidocoSettlOUnitDTO::setUseAllUnitsFromDb()
     * @param int $assignedCustomerId
     * @param int $customerId
     * @param bool $isParent
     * @param int $settlementId
     * @param string $unitName
     * @param bool $useAllUnitsFromDb
     */
    public function __construct(?int $assignedCustomerId = null, ?int $customerId = null, ?bool $isParent = null, ?int $settlementId = null, ?string $unitName = null, ?bool $useAllUnitsFromDb = null)
    {
        $this
            ->setAssignedCustomerId($assignedCustomerId)
            ->setCustomerId($customerId)
            ->setIsParent($isParent)
            ->setSettlementId($settlementId)
            ->setUnitName($unitName)
            ->setUseAllUnitsFromDb($useAllUnitsFromDb);
    }
    /**
     * Get assignedCustomerId value
     * @return int|null
     */
    public function getAssignedCustomerId(): ?int
    {
        return $this->assignedCustomerId;
    }
    /**
     * Set assignedCustomerId value
     * @param int $assignedCustomerId
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoSettlOUnitDTO
     */
    public function setAssignedCustomerId(?int $assignedCustomerId = null): self
    {
        // validation for constraint: int
        if (!is_null($assignedCustomerId) && !(is_int($assignedCustomerId) || ctype_digit($assignedCustomerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($assignedCustomerId, true), gettype($assignedCustomerId)), __LINE__);
        }
        $this->assignedCustomerId = $assignedCustomerId;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoSettlOUnitDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get isParent value
     * @return bool|null
     */
    public function getIsParent(): ?bool
    {
        return $this->isParent;
    }
    /**
     * Set isParent value
     * @param bool $isParent
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoSettlOUnitDTO
     */
    public function setIsParent(?bool $isParent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isParent) && !is_bool($isParent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isParent, true), gettype($isParent)), __LINE__);
        }
        $this->isParent = $isParent;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoSettlOUnitDTO
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoSettlOUnitDTO
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
     * Get useAllUnitsFromDb value
     * @return bool|null
     */
    public function getUseAllUnitsFromDb(): ?bool
    {
        return $this->useAllUnitsFromDb;
    }
    /**
     * Set useAllUnitsFromDb value
     * @param bool $useAllUnitsFromDb
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoSettlOUnitDTO
     */
    public function setUseAllUnitsFromDb(?bool $useAllUnitsFromDb = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useAllUnitsFromDb) && !is_bool($useAllUnitsFromDb)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useAllUnitsFromDb, true), gettype($useAllUnitsFromDb)), __LINE__);
        }
        $this->useAllUnitsFromDb = $useAllUnitsFromDb;
        
        return $this;
    }
}
