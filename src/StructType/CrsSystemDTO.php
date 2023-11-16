<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrsSystemDTO StructType
 * @subpackage Structs
 */
class CrsSystemDTO extends AbstractStructBase
{
    /**
     * The crsName
     * @var string|null
     */
    protected ?string $crsName = null;
    /**
     * Constructor method for CrsSystemDTO
     * @uses CrsSystemDTO::setCrsName()
     * @param string $crsName
     */
    public function __construct(?string $crsName = null)
    {
        $this
            ->setCrsName($crsName);
    }
    /**
     * Get crsName value
     * @return string|null
     */
    public function getCrsName(): ?string
    {
        return $this->crsName;
    }
    /**
     * Set crsName value
     * @param string $crsName
     * @return \Pggns\MidocoApi\Order\StructType\CrsSystemDTO
     */
    public function setCrsName(?string $crsName = null): self
    {
        // validation for constraint: string
        if (!is_null($crsName) && !is_string($crsName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($crsName, true), gettype($crsName)), __LINE__);
        }
        $this->crsName = $crsName;
        
        return $this;
    }
}
