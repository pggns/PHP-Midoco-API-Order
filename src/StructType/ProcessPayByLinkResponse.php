<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessPayByLinkResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProcessPayByLinkResponse extends AbstractStructBase
{
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The argsAsString
     * @var string|null
     */
    protected ?string $argsAsString = null;
    /**
     * The errorBundle
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * Constructor method for ProcessPayByLinkResponse
     * @uses ProcessPayByLinkResponse::setStatus()
     * @uses ProcessPayByLinkResponse::setErrorCode()
     * @uses ProcessPayByLinkResponse::setArgsAsString()
     * @uses ProcessPayByLinkResponse::setErrorBundle()
     * @param string $status
     * @param string $errorCode
     * @param string $argsAsString
     * @param string $errorBundle
     */
    public function __construct(?string $status = null, ?string $errorCode = null, ?string $argsAsString = null, ?string $errorBundle = null)
    {
        $this
            ->setStatus($status)
            ->setErrorCode($errorCode)
            ->setArgsAsString($argsAsString)
            ->setErrorBundle($errorBundle);
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
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkResponse
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
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkResponse
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get argsAsString value
     * @return string|null
     */
    public function getArgsAsString(): ?string
    {
        return $this->argsAsString;
    }
    /**
     * Set argsAsString value
     * @param string $argsAsString
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkResponse
     */
    public function setArgsAsString(?string $argsAsString = null): self
    {
        // validation for constraint: string
        if (!is_null($argsAsString) && !is_string($argsAsString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($argsAsString, true), gettype($argsAsString)), __LINE__);
        }
        $this->argsAsString = $argsAsString;
        
        return $this;
    }
    /**
     * Get errorBundle value
     * @return string|null
     */
    public function getErrorBundle(): ?string
    {
        return $this->errorBundle;
    }
    /**
     * Set errorBundle value
     * @param string $errorBundle
     * @return \Pggns\MidocoApi\Order\StructType\ProcessPayByLinkResponse
     */
    public function setErrorBundle(?string $errorBundle = null): self
    {
        // validation for constraint: string
        if (!is_null($errorBundle) && !is_string($errorBundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorBundle, true), gettype($errorBundle)), __LINE__);
        }
        $this->errorBundle = $errorBundle;
        
        return $this;
    }
}
