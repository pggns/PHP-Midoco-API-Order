<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendMediatorFormularResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SendMediatorFormularResponse extends AbstractStructBase
{
    /**
     * The error
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * Constructor method for SendMediatorFormularResponse
     * @uses SendMediatorFormularResponse::setError()
     * @param string $error
     */
    public function __construct(?string $error = null)
    {
        $this
            ->setError($error);
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $error
     * @return \Pggns\MidocoApi\Order\StructType\SendMediatorFormularResponse
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
}
