<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAdapterType StructType
 * @subpackage Structs
 */
class MidocoAdapterType extends AdapterDTO
{
    /**
     * The inheritedAdapterId
     * @var string|null
     */
    protected ?string $inheritedAdapterId = null;
    /**
     * The inheritableFrom
     * @var string|null
     */
    protected ?string $inheritableFrom = null;
    /**
     * Constructor method for MidocoAdapterType
     * @uses MidocoAdapterType::setInheritedAdapterId()
     * @uses MidocoAdapterType::setInheritableFrom()
     * @param string $inheritedAdapterId
     * @param string $inheritableFrom
     */
    public function __construct(?string $inheritedAdapterId = null, ?string $inheritableFrom = null)
    {
        $this
            ->setInheritedAdapterId($inheritedAdapterId)
            ->setInheritableFrom($inheritableFrom);
    }
    /**
     * Get inheritedAdapterId value
     * @return string|null
     */
    public function getInheritedAdapterId(): ?string
    {
        return $this->inheritedAdapterId;
    }
    /**
     * Set inheritedAdapterId value
     * @param string $inheritedAdapterId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdapterType
     */
    public function setInheritedAdapterId(?string $inheritedAdapterId = null): self
    {
        // validation for constraint: string
        if (!is_null($inheritedAdapterId) && !is_string($inheritedAdapterId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inheritedAdapterId, true), gettype($inheritedAdapterId)), __LINE__);
        }
        $this->inheritedAdapterId = $inheritedAdapterId;
        
        return $this;
    }
    /**
     * Get inheritableFrom value
     * @return string|null
     */
    public function getInheritableFrom(): ?string
    {
        return $this->inheritableFrom;
    }
    /**
     * Set inheritableFrom value
     * @param string $inheritableFrom
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdapterType
     */
    public function setInheritableFrom(?string $inheritableFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($inheritableFrom) && !is_string($inheritableFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inheritableFrom, true), gettype($inheritableFrom)), __LINE__);
        }
        $this->inheritableFrom = $inheritableFrom;
        
        return $this;
    }
}
