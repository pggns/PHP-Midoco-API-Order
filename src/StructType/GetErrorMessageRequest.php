<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetErrorMessageRequest StructType
 * @subpackage Structs
 */
class GetErrorMessageRequest extends AbstractStructBase
{
    /**
     * The error_code
     * @var string|null
     */
    protected ?string $error_code = null;
    /**
     * The error_bundle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $error_bundle = null;
    /**
     * The error_parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $error_parameters = null;
    /**
     * Constructor method for GetErrorMessageRequest
     * @uses GetErrorMessageRequest::setError_code()
     * @uses GetErrorMessageRequest::setError_bundle()
     * @uses GetErrorMessageRequest::setError_parameters()
     * @param string $error_code
     * @param string $error_bundle
     * @param string $error_parameters
     */
    public function __construct(?string $error_code = null, ?string $error_bundle = null, ?string $error_parameters = null)
    {
        $this
            ->setError_code($error_code)
            ->setError_bundle($error_bundle)
            ->setError_parameters($error_parameters);
    }
    /**
     * Get error_code value
     * @return string|null
     */
    public function getError_code(): ?string
    {
        return $this->error_code;
    }
    /**
     * Set error_code value
     * @param string $error_code
     * @return \Pggns\MidocoApi\Order\StructType\GetErrorMessageRequest
     */
    public function setError_code(?string $error_code = null): self
    {
        // validation for constraint: string
        if (!is_null($error_code) && !is_string($error_code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error_code, true), gettype($error_code)), __LINE__);
        }
        $this->error_code = $error_code;
        
        return $this;
    }
    /**
     * Get error_bundle value
     * @return string|null
     */
    public function getError_bundle(): ?string
    {
        return $this->error_bundle;
    }
    /**
     * Set error_bundle value
     * @param string $error_bundle
     * @return \Pggns\MidocoApi\Order\StructType\GetErrorMessageRequest
     */
    public function setError_bundle(?string $error_bundle = null): self
    {
        // validation for constraint: string
        if (!is_null($error_bundle) && !is_string($error_bundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error_bundle, true), gettype($error_bundle)), __LINE__);
        }
        $this->error_bundle = $error_bundle;
        
        return $this;
    }
    /**
     * Get error_parameters value
     * @return string|null
     */
    public function getError_parameters(): ?string
    {
        return $this->error_parameters;
    }
    /**
     * Set error_parameters value
     * @param string $error_parameters
     * @return \Pggns\MidocoApi\Order\StructType\GetErrorMessageRequest
     */
    public function setError_parameters(?string $error_parameters = null): self
    {
        // validation for constraint: string
        if (!is_null($error_parameters) && !is_string($error_parameters)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error_parameters, true), gettype($error_parameters)), __LINE__);
        }
        $this->error_parameters = $error_parameters;
        
        return $this;
    }
}
