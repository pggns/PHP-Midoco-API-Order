<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoCacheTimeStampResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoCacheTimeStampResponse extends AbstractStructBase
{
    /**
     * The timeStamp
     * @var string|null
     */
    protected ?string $timeStamp = null;
    /**
     * Constructor method for GetMidocoCacheTimeStampResponse
     * @uses GetMidocoCacheTimeStampResponse::setTimeStamp()
     * @param string $timeStamp
     */
    public function __construct(?string $timeStamp = null)
    {
        $this
            ->setTimeStamp($timeStamp);
    }
    /**
     * Get timeStamp value
     * @return string|null
     */
    public function getTimeStamp(): ?string
    {
        return $this->timeStamp;
    }
    /**
     * Set timeStamp value
     * @param string $timeStamp
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoCacheTimeStampResponse
     */
    public function setTimeStamp(?string $timeStamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timeStamp) && !is_string($timeStamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeStamp, true), gettype($timeStamp)), __LINE__);
        }
        $this->timeStamp = $timeStamp;
        
        return $this;
    }
}
