<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDebitorForOrgunitResponse StructType
 * @subpackage Structs
 */
class GetDebitorForOrgunitResponse extends AbstractStructBase
{
    /**
     * The debitor
     * @var string|null
     */
    protected ?string $debitor = null;
    /**
     * Constructor method for GetDebitorForOrgunitResponse
     * @uses GetDebitorForOrgunitResponse::setDebitor()
     * @param string $debitor
     */
    public function __construct(?string $debitor = null)
    {
        $this
            ->setDebitor($debitor);
    }
    /**
     * Get debitor value
     * @return string|null
     */
    public function getDebitor(): ?string
    {
        return $this->debitor;
    }
    /**
     * Set debitor value
     * @param string $debitor
     * @return \Pggns\MidocoApi\Order\StructType\GetDebitorForOrgunitResponse
     */
    public function setDebitor(?string $debitor = null): self
    {
        // validation for constraint: string
        if (!is_null($debitor) && !is_string($debitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitor, true), gettype($debitor)), __LINE__);
        }
        $this->debitor = $debitor;
        
        return $this;
    }
}
