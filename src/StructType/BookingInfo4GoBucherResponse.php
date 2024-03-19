<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingInfo4GoBucherResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookingInfo4GoBucherResponse extends AbstractStructBase
{
    /**
     * The result
     * @var string|null
     */
    protected ?string $result = null;
    /**
     * Constructor method for BookingInfo4GoBucherResponse
     * @uses BookingInfo4GoBucherResponse::setResult()
     * @param string $result
     */
    public function __construct(?string $result = null)
    {
        $this
            ->setResult($result);
    }
    /**
     * Get result value
     * @return string|null
     */
    public function getResult(): ?string
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param string $result
     * @return \Pggns\MidocoApi\Order\StructType\BookingInfo4GoBucherResponse
     */
    public function setResult(?string $result = null): self
    {
        // validation for constraint: string
        if (!is_null($result) && !is_string($result)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;
        
        return $this;
    }
}
