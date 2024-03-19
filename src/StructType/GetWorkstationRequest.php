<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkstationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetWorkstationRequest extends AbstractStructBase
{
    /**
     * The workstation_id
     * @var string|null
     */
    protected ?string $workstation_id = null;
    /**
     * Constructor method for GetWorkstationRequest
     * @uses GetWorkstationRequest::setWorkstation_id()
     * @param string $workstation_id
     */
    public function __construct(?string $workstation_id = null)
    {
        $this
            ->setWorkstation_id($workstation_id);
    }
    /**
     * Get workstation_id value
     * @return string|null
     */
    public function getWorkstation_id(): ?string
    {
        return $this->workstation_id;
    }
    /**
     * Set workstation_id value
     * @param string $workstation_id
     * @return \Pggns\MidocoApi\Order\StructType\GetWorkstationRequest
     */
    public function setWorkstation_id(?string $workstation_id = null): self
    {
        // validation for constraint: string
        if (!is_null($workstation_id) && !is_string($workstation_id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workstation_id, true), gettype($workstation_id)), __LINE__);
        }
        $this->workstation_id = $workstation_id;
        
        return $this;
    }
}
