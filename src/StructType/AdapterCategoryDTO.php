<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdapterCategoryDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AdapterCategoryDTO extends AbstractStructBase
{
    /**
     * The adapterType
     * @var string|null
     */
    protected ?string $adapterType = null;
    /**
     * Constructor method for AdapterCategoryDTO
     * @uses AdapterCategoryDTO::setAdapterType()
     * @param string $adapterType
     */
    public function __construct(?string $adapterType = null)
    {
        $this
            ->setAdapterType($adapterType);
    }
    /**
     * Get adapterType value
     * @return string|null
     */
    public function getAdapterType(): ?string
    {
        return $this->adapterType;
    }
    /**
     * Set adapterType value
     * @param string $adapterType
     * @return \Pggns\MidocoApi\Order\StructType\AdapterCategoryDTO
     */
    public function setAdapterType(?string $adapterType = null): self
    {
        // validation for constraint: string
        if (!is_null($adapterType) && !is_string($adapterType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($adapterType, true), gettype($adapterType)), __LINE__);
        }
        $this->adapterType = $adapterType;
        
        return $this;
    }
}
