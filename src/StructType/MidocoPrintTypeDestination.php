<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoPrintTypeDestination StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoPrintTypeDestination extends AbstractStructBase
{
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * Constructor method for MidocoPrintTypeDestination
     * @uses MidocoPrintTypeDestination::setPrintType()
     * @param string $printType
     */
    public function __construct(?string $printType = null)
    {
        $this
            ->setPrintType($printType);
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPrintTypeDestination
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
}
