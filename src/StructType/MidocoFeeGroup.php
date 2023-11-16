<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFeeGroup StructType
 * @subpackage Structs
 */
class MidocoFeeGroup extends FeeGroupDTO
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The isHierarchical
     * @var bool|null
     */
    protected ?bool $isHierarchical = null;
    /**
     * Constructor method for MidocoFeeGroup
     * @uses MidocoFeeGroup::setUnitName()
     * @uses MidocoFeeGroup::setIsHierarchical()
     * @param string $unitName
     * @param bool $isHierarchical
     */
    public function __construct(?string $unitName = null, ?bool $isHierarchical = null)
    {
        $this
            ->setUnitName($unitName)
            ->setIsHierarchical($isHierarchical);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup
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
     * Get isHierarchical value
     * @return bool|null
     */
    public function getIsHierarchical(): ?bool
    {
        return $this->isHierarchical;
    }
    /**
     * Set isHierarchical value
     * @param bool $isHierarchical
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeGroup
     */
    public function setIsHierarchical(?bool $isHierarchical = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isHierarchical) && !is_bool($isHierarchical)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isHierarchical, true), gettype($isHierarchical)), __LINE__);
        }
        $this->isHierarchical = $isHierarchical;
        
        return $this;
    }
}
