<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyOrderWorkflowRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ModifyOrderWorkflowRequest extends AbstractStructBase
{
    /**
     * The start_travel
     * @var string|null
     */
    protected ?string $start_travel = null;
    /**
     * Constructor method for ModifyOrderWorkflowRequest
     * @uses ModifyOrderWorkflowRequest::setStart_travel()
     * @param string $start_travel
     */
    public function __construct(?string $start_travel = null)
    {
        $this
            ->setStart_travel($start_travel);
    }
    /**
     * Get start_travel value
     * @return string|null
     */
    public function getStart_travel(): ?string
    {
        return $this->start_travel;
    }
    /**
     * Set start_travel value
     * @param string $start_travel
     * @return \Pggns\MidocoApi\Order\StructType\ModifyOrderWorkflowRequest
     */
    public function setStart_travel(?string $start_travel = null): self
    {
        // validation for constraint: string
        if (!is_null($start_travel) && !is_string($start_travel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start_travel, true), gettype($start_travel)), __LINE__);
        }
        $this->start_travel = $start_travel;
        
        return $this;
    }
}
