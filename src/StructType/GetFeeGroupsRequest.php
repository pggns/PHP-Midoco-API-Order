<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFeeGroupsRequest StructType
 * @subpackage Structs
 */
class GetFeeGroupsRequest extends AbstractStructBase
{
    /**
     * The groupId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $groupId = null;
    /**
     * The group
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $group = null;
    /**
     * The orgUnit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The allUnits
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $allUnits = null;
    /**
     * The description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for GetFeeGroupsRequest
     * @uses GetFeeGroupsRequest::setGroupId()
     * @uses GetFeeGroupsRequest::setGroup()
     * @uses GetFeeGroupsRequest::setOrgUnit()
     * @uses GetFeeGroupsRequest::setAllUnits()
     * @uses GetFeeGroupsRequest::setDescription()
     * @param int $groupId
     * @param string $group
     * @param string $orgUnit
     * @param bool $allUnits
     * @param string $description
     */
    public function __construct(?int $groupId = null, ?string $group = null, ?string $orgUnit = null, ?bool $allUnits = null, ?string $description = null)
    {
        $this
            ->setGroupId($groupId)
            ->setGroup($group)
            ->setOrgUnit($orgUnit)
            ->setAllUnits($allUnits)
            ->setDescription($description);
    }
    /**
     * Get groupId value
     * @return int|null
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }
    /**
     * Set groupId value
     * @param int $groupId
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeGroupsRequest
     */
    public function setGroupId(?int $groupId = null): self
    {
        // validation for constraint: int
        if (!is_null($groupId) && !(is_int($groupId) || ctype_digit($groupId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($groupId, true), gettype($groupId)), __LINE__);
        }
        $this->groupId = $groupId;
        
        return $this;
    }
    /**
     * Get group value
     * @return string|null
     */
    public function getGroup(): ?string
    {
        return $this->group;
    }
    /**
     * Set group value
     * @param string $group
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeGroupsRequest
     */
    public function setGroup(?string $group = null): self
    {
        // validation for constraint: string
        if (!is_null($group) && !is_string($group)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group, true), gettype($group)), __LINE__);
        }
        $this->group = $group;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeGroupsRequest
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get allUnits value
     * @return bool|null
     */
    public function getAllUnits(): ?bool
    {
        return $this->allUnits;
    }
    /**
     * Set allUnits value
     * @param bool $allUnits
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeGroupsRequest
     */
    public function setAllUnits(?bool $allUnits = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allUnits) && !is_bool($allUnits)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allUnits, true), gettype($allUnits)), __LINE__);
        }
        $this->allUnits = $allUnits;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeGroupsRequest
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
}
