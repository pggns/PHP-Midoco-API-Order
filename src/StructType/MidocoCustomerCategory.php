<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerCategory StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCustomerCategory extends CustomerCategoryDTO
{
    /**
     * The isInherited
     * @var bool|null
     */
    protected ?bool $isInherited = null;
    /**
     * Constructor method for MidocoCustomerCategory
     * @uses MidocoCustomerCategory::setIsInherited()
     * @param bool $isInherited
     */
    public function __construct(?bool $isInherited = null)
    {
        $this
            ->setIsInherited($isInherited);
    }
    /**
     * Get isInherited value
     * @return bool|null
     */
    public function getIsInherited(): ?bool
    {
        return $this->isInherited;
    }
    /**
     * Set isInherited value
     * @param bool $isInherited
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerCategory
     */
    public function setIsInherited(?bool $isInherited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInherited) && !is_bool($isInherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInherited, true), gettype($isInherited)), __LINE__);
        }
        $this->isInherited = $isInherited;
        
        return $this;
    }
}
