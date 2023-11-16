<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierMapping StructType
 * @subpackage Structs
 */
class MidocoSupplierMapping extends SupplierMappingDTO
{
    /**
     * The isInherit
     * @var bool|null
     */
    protected ?bool $isInherit = null;
    /**
     * Constructor method for MidocoSupplierMapping
     * @uses MidocoSupplierMapping::setIsInherit()
     * @param bool $isInherit
     */
    public function __construct(?bool $isInherit = null)
    {
        $this
            ->setIsInherit($isInherit);
    }
    /**
     * Get isInherit value
     * @return bool|null
     */
    public function getIsInherit(): ?bool
    {
        return $this->isInherit;
    }
    /**
     * Set isInherit value
     * @param bool $isInherit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierMapping
     */
    public function setIsInherit(?bool $isInherit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInherit) && !is_bool($isInherit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInherit, true), gettype($isInherit)), __LINE__);
        }
        $this->isInherit = $isInherit;
        
        return $this;
    }
}
