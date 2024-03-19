<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssignedMidocoMdocOUnitDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AssignedMidocoMdocOUnitDTO extends AbstractStructBase
{
    /**
     * The contractEndDate
     * @var string|null
     */
    protected ?string $contractEndDate = null;
    /**
     * The contractStartDate
     * @var string|null
     */
    protected ?string $contractStartDate = null;
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
     * The settlMdocId
     * @var int|null
     */
    protected ?int $settlMdocId = null;
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
     * Constructor method for AssignedMidocoMdocOUnitDTO
     * @uses AssignedMidocoMdocOUnitDTO::setContractEndDate()
     * @uses AssignedMidocoMdocOUnitDTO::setContractStartDate()
     * @uses AssignedMidocoMdocOUnitDTO::setCustomerId()
     * @uses AssignedMidocoMdocOUnitDTO::setIsParent()
     * @uses AssignedMidocoMdocOUnitDTO::setSettlMdocId()
     * @uses AssignedMidocoMdocOUnitDTO::setUnitName()
     * @uses AssignedMidocoMdocOUnitDTO::setUseAllUnitsFromDb()
     * @param string $contractEndDate
     * @param string $contractStartDate
     * @param int $customerId
     * @param bool $isParent
     * @param int $settlMdocId
     * @param string $unitName
     * @param bool $useAllUnitsFromDb
     */
    public function __construct(?string $contractEndDate = null, ?string $contractStartDate = null, ?int $customerId = null, ?bool $isParent = null, ?int $settlMdocId = null, ?string $unitName = null, ?bool $useAllUnitsFromDb = null)
    {
        $this
            ->setContractEndDate($contractEndDate)
            ->setContractStartDate($contractStartDate)
            ->setCustomerId($customerId)
            ->setIsParent($isParent)
            ->setSettlMdocId($settlMdocId)
            ->setUnitName($unitName)
            ->setUseAllUnitsFromDb($useAllUnitsFromDb);
    }
    /**
     * Get contractEndDate value
     * @return string|null
     */
    public function getContractEndDate(): ?string
    {
        return $this->contractEndDate;
    }
    /**
     * Set contractEndDate value
     * @param string $contractEndDate
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO
     */
    public function setContractEndDate(?string $contractEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($contractEndDate) && !is_string($contractEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractEndDate, true), gettype($contractEndDate)), __LINE__);
        }
        $this->contractEndDate = $contractEndDate;
        
        return $this;
    }
    /**
     * Get contractStartDate value
     * @return string|null
     */
    public function getContractStartDate(): ?string
    {
        return $this->contractStartDate;
    }
    /**
     * Set contractStartDate value
     * @param string $contractStartDate
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO
     */
    public function setContractStartDate(?string $contractStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($contractStartDate) && !is_string($contractStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contractStartDate, true), gettype($contractStartDate)), __LINE__);
        }
        $this->contractStartDate = $contractStartDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO
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
     * Get settlMdocId value
     * @return int|null
     */
    public function getSettlMdocId(): ?int
    {
        return $this->settlMdocId;
    }
    /**
     * Set settlMdocId value
     * @param int $settlMdocId
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO
     */
    public function setSettlMdocId(?int $settlMdocId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlMdocId) && !(is_int($settlMdocId) || ctype_digit($settlMdocId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlMdocId, true), gettype($settlMdocId)), __LINE__);
        }
        $this->settlMdocId = $settlMdocId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AssignedMidocoMdocOUnitDTO
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
