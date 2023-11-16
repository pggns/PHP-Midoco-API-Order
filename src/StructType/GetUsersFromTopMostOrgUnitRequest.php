<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUsersFromTopMostOrgUnitRequest StructType
 * @subpackage Structs
 */
class GetUsersFromTopMostOrgUnitRequest extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The getOnlyIds
     * @var bool|null
     */
    protected ?bool $getOnlyIds = null;
    /**
     * Constructor method for GetUsersFromTopMostOrgUnitRequest
     * @uses GetUsersFromTopMostOrgUnitRequest::setUnitName()
     * @uses GetUsersFromTopMostOrgUnitRequest::setGetOnlyIds()
     * @param string $unitName
     * @param bool $getOnlyIds
     */
    public function __construct(?string $unitName = null, ?bool $getOnlyIds = null)
    {
        $this
            ->setUnitName($unitName)
            ->setGetOnlyIds($getOnlyIds);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetUsersFromTopMostOrgUnitRequest
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
     * Get getOnlyIds value
     * @return bool|null
     */
    public function getGetOnlyIds(): ?bool
    {
        return $this->getOnlyIds;
    }
    /**
     * Set getOnlyIds value
     * @param bool $getOnlyIds
     * @return \Pggns\MidocoApi\Order\StructType\GetUsersFromTopMostOrgUnitRequest
     */
    public function setGetOnlyIds(?bool $getOnlyIds = null): self
    {
        // validation for constraint: boolean
        if (!is_null($getOnlyIds) && !is_bool($getOnlyIds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getOnlyIds, true), gettype($getOnlyIds)), __LINE__);
        }
        $this->getOnlyIds = $getOnlyIds;
        
        return $this;
    }
}
