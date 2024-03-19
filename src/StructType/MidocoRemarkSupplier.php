<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoRemarkSupplier StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoRemarkSupplier extends RemarkSupplierDTO
{
    /**
     * The cultureName
     * @var string|null
     */
    protected ?string $cultureName = null;
    /**
     * The isInheritance
     * @var bool|null
     */
    protected ?bool $isInheritance = null;
    /**
     * Constructor method for MidocoRemarkSupplier
     * @uses MidocoRemarkSupplier::setCultureName()
     * @uses MidocoRemarkSupplier::setIsInheritance()
     * @param string $cultureName
     * @param bool $isInheritance
     */
    public function __construct(?string $cultureName = null, ?bool $isInheritance = null)
    {
        $this
            ->setCultureName($cultureName)
            ->setIsInheritance($isInheritance);
    }
    /**
     * Get cultureName value
     * @return string|null
     */
    public function getCultureName(): ?string
    {
        return $this->cultureName;
    }
    /**
     * Set cultureName value
     * @param string $cultureName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier
     */
    public function setCultureName(?string $cultureName = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureName) && !is_string($cultureName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureName, true), gettype($cultureName)), __LINE__);
        }
        $this->cultureName = $cultureName;
        
        return $this;
    }
    /**
     * Get isInheritance value
     * @return bool|null
     */
    public function getIsInheritance(): ?bool
    {
        return $this->isInheritance;
    }
    /**
     * Set isInheritance value
     * @param bool $isInheritance
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkSupplier
     */
    public function setIsInheritance(?bool $isInheritance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInheritance) && !is_bool($isInheritance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInheritance, true), gettype($isInheritance)), __LINE__);
        }
        $this->isInheritance = $isInheritance;
        
        return $this;
    }
}
