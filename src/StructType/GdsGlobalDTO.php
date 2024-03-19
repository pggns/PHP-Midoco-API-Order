<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GdsGlobalDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GdsGlobalDTO extends AbstractStructBase
{
    /**
     * The gdsId
     * @var string|null
     */
    protected ?string $gdsId = null;
    /**
     * Constructor method for GdsGlobalDTO
     * @uses GdsGlobalDTO::setGdsId()
     * @param string $gdsId
     */
    public function __construct(?string $gdsId = null)
    {
        $this
            ->setGdsId($gdsId);
    }
    /**
     * Get gdsId value
     * @return string|null
     */
    public function getGdsId(): ?string
    {
        return $this->gdsId;
    }
    /**
     * Set gdsId value
     * @param string $gdsId
     * @return \Pggns\MidocoApi\Order\StructType\GdsGlobalDTO
     */
    public function setGdsId(?string $gdsId = null): self
    {
        // validation for constraint: string
        if (!is_null($gdsId) && !is_string($gdsId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($gdsId, true), gettype($gdsId)), __LINE__);
        }
        $this->gdsId = $gdsId;
        
        return $this;
    }
}
