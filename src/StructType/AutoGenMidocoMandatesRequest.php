<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoGenMidocoMandatesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AutoGenMidocoMandatesRequest extends AbstractStructBase
{
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * Constructor method for AutoGenMidocoMandatesRequest
     * @uses AutoGenMidocoMandatesRequest::setStartTravel()
     * @param string $startTravel
     */
    public function __construct(?string $startTravel = null)
    {
        $this
            ->setStartTravel($startTravel);
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\AutoGenMidocoMandatesRequest
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
}
