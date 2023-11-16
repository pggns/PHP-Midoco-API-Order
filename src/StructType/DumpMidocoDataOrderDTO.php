<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DumpMidocoDataOrderDTO StructType
 * @subpackage Structs
 */
class DumpMidocoDataOrderDTO extends AbstractStructBase
{
    /**
     * The lastExport
     * @var string|null
     */
    protected ?string $lastExport = null;
    /**
     * Constructor method for DumpMidocoDataOrderDTO
     * @uses DumpMidocoDataOrderDTO::setLastExport()
     * @param string $lastExport
     */
    public function __construct(?string $lastExport = null)
    {
        $this
            ->setLastExport($lastExport);
    }
    /**
     * Get lastExport value
     * @return string|null
     */
    public function getLastExport(): ?string
    {
        return $this->lastExport;
    }
    /**
     * Set lastExport value
     * @param string $lastExport
     * @return \Pggns\MidocoApi\Order\StructType\DumpMidocoDataOrderDTO
     */
    public function setLastExport(?string $lastExport = null): self
    {
        // validation for constraint: string
        if (!is_null($lastExport) && !is_string($lastExport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastExport, true), gettype($lastExport)), __LINE__);
        }
        $this->lastExport = $lastExport;
        
        return $this;
    }
}
