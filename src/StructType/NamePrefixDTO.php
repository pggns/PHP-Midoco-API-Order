<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NamePrefixDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class NamePrefixDTO extends AbstractStructBase
{
    /**
     * The namePrefix
     * @var string|null
     */
    protected ?string $namePrefix = null;
    /**
     * Constructor method for NamePrefixDTO
     * @uses NamePrefixDTO::setNamePrefix()
     * @param string $namePrefix
     */
    public function __construct(?string $namePrefix = null)
    {
        $this
            ->setNamePrefix($namePrefix);
    }
    /**
     * Get namePrefix value
     * @return string|null
     */
    public function getNamePrefix(): ?string
    {
        return $this->namePrefix;
    }
    /**
     * Set namePrefix value
     * @param string $namePrefix
     * @return \Pggns\MidocoApi\Order\StructType\NamePrefixDTO
     */
    public function setNamePrefix(?string $namePrefix = null): self
    {
        // validation for constraint: string
        if (!is_null($namePrefix) && !is_string($namePrefix)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($namePrefix, true), gettype($namePrefix)), __LINE__);
        }
        $this->namePrefix = $namePrefix;
        
        return $this;
    }
}
