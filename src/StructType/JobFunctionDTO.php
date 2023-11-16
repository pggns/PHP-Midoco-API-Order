<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JobFunctionDTO StructType
 * @subpackage Structs
 */
class JobFunctionDTO extends AbstractStructBase
{
    /**
     * The jobFunction
     * @var string|null
     */
    protected ?string $jobFunction = null;
    /**
     * Constructor method for JobFunctionDTO
     * @uses JobFunctionDTO::setJobFunction()
     * @param string $jobFunction
     */
    public function __construct(?string $jobFunction = null)
    {
        $this
            ->setJobFunction($jobFunction);
    }
    /**
     * Get jobFunction value
     * @return string|null
     */
    public function getJobFunction(): ?string
    {
        return $this->jobFunction;
    }
    /**
     * Set jobFunction value
     * @param string $jobFunction
     * @return \Pggns\MidocoApi\Order\StructType\JobFunctionDTO
     */
    public function setJobFunction(?string $jobFunction = null): self
    {
        // validation for constraint: string
        if (!is_null($jobFunction) && !is_string($jobFunction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jobFunction, true), gettype($jobFunction)), __LINE__);
        }
        $this->jobFunction = $jobFunction;
        
        return $this;
    }
}
