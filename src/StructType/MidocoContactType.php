<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoContactType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoContactType extends ContactTypeDTO
{
    /**
     * The isLocallyDefined
     * @var bool|null
     */
    protected ?bool $isLocallyDefined = null;
    /**
     * Constructor method for MidocoContactType
     * @uses MidocoContactType::setIsLocallyDefined()
     * @param bool $isLocallyDefined
     */
    public function __construct(?bool $isLocallyDefined = null)
    {
        $this
            ->setIsLocallyDefined($isLocallyDefined);
    }
    /**
     * Get isLocallyDefined value
     * @return bool|null
     */
    public function getIsLocallyDefined(): ?bool
    {
        return $this->isLocallyDefined;
    }
    /**
     * Set isLocallyDefined value
     * @param bool $isLocallyDefined
     * @return \Pggns\MidocoApi\Order\StructType\MidocoContactType
     */
    public function setIsLocallyDefined(?bool $isLocallyDefined = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLocallyDefined) && !is_bool($isLocallyDefined)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLocallyDefined, true), gettype($isLocallyDefined)), __LINE__);
        }
        $this->isLocallyDefined = $isLocallyDefined;
        
        return $this;
    }
}
