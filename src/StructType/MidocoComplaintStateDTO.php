<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoComplaintStateDTO StructType
 * @subpackage Structs
 */
class MidocoComplaintStateDTO extends ComplaintStateDTO
{
    /**
     * The localizedDescription
     * @var string|null
     */
    protected ?string $localizedDescription = null;
    /**
     * Constructor method for MidocoComplaintStateDTO
     * @uses MidocoComplaintStateDTO::setLocalizedDescription()
     * @param string $localizedDescription
     */
    public function __construct(?string $localizedDescription = null)
    {
        $this
            ->setLocalizedDescription($localizedDescription);
    }
    /**
     * Get localizedDescription value
     * @return string|null
     */
    public function getLocalizedDescription(): ?string
    {
        return $this->localizedDescription;
    }
    /**
     * Set localizedDescription value
     * @param string $localizedDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoComplaintStateDTO
     */
    public function setLocalizedDescription(?string $localizedDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($localizedDescription) && !is_string($localizedDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localizedDescription, true), gettype($localizedDescription)), __LINE__);
        }
        $this->localizedDescription = $localizedDescription;
        
        return $this;
    }
}
