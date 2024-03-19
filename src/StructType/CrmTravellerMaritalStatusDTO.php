<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmTravellerMaritalStatusDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmTravellerMaritalStatusDTO extends AbstractStructBase
{
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for CrmTravellerMaritalStatusDTO
     * @uses CrmTravellerMaritalStatusDTO::setStatus()
     * @param string $status
     */
    public function __construct(?string $status = null)
    {
        $this
            ->setStatus($status);
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\CrmTravellerMaritalStatusDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
