<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetErrorMessageResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetErrorMessageResponse extends AbstractStructBase
{
    /**
     * The error_text
     * @var string|null
     */
    protected ?string $error_text = null;
    /**
     * Constructor method for GetErrorMessageResponse
     * @uses GetErrorMessageResponse::setError_text()
     * @param string $error_text
     */
    public function __construct(?string $error_text = null)
    {
        $this
            ->setError_text($error_text);
    }
    /**
     * Get error_text value
     * @return string|null
     */
    public function getError_text(): ?string
    {
        return $this->error_text;
    }
    /**
     * Set error_text value
     * @param string $error_text
     * @return \Pggns\MidocoApi\Order\StructType\GetErrorMessageResponse
     */
    public function setError_text(?string $error_text = null): self
    {
        // validation for constraint: string
        if (!is_null($error_text) && !is_string($error_text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error_text, true), gettype($error_text)), __LINE__);
        }
        $this->error_text = $error_text;
        
        return $this;
    }
}
