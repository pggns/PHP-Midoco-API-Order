<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCostCentre StructType
 * @subpackage Structs
 */
class MidocoCostCentre extends CostCentreDTO
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The isOrgunitCostCentre
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isOrgunitCostCentre = null;
    /**
     * Constructor method for MidocoCostCentre
     * @uses MidocoCostCentre::setUnitName()
     * @uses MidocoCostCentre::setIsOrgunitCostCentre()
     * @param string $unitName
     * @param bool $isOrgunitCostCentre
     */
    public function __construct(?string $unitName = null, ?bool $isOrgunitCostCentre = false)
    {
        $this
            ->setUnitName($unitName)
            ->setIsOrgunitCostCentre($isOrgunitCostCentre);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCostCentre
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
     * Get isOrgunitCostCentre value
     * @return bool|null
     */
    public function getIsOrgunitCostCentre(): ?bool
    {
        return $this->isOrgunitCostCentre;
    }
    /**
     * Set isOrgunitCostCentre value
     * @param bool $isOrgunitCostCentre
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCostCentre
     */
    public function setIsOrgunitCostCentre(?bool $isOrgunitCostCentre = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isOrgunitCostCentre) && !is_bool($isOrgunitCostCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOrgunitCostCentre, true), gettype($isOrgunitCostCentre)), __LINE__);
        }
        $this->isOrgunitCostCentre = $isOrgunitCostCentre;
        
        return $this;
    }
}
