<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TssApiErrorConveyingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class TssApiErrorConveyingResponse extends AbstractStructBase
{
    /**
     * The errorBundle
     * Meta information extracted from the WSDL
     * - documentation: The Midoco Error Message Bundle
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The errorCode
     * Meta information extracted from the WSDL
     * - documentation: The Midoco Error Message Id
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The apiErrorCode
     * Meta information extracted from the WSDL
     * - documentation: The API Error Code
     * @var string|null
     */
    protected ?string $apiErrorCode = null;
    /**
     * The apiErrorMessage
     * Meta information extracted from the WSDL
     * - documentation: The API Error Message
     * @var string|null
     */
    protected ?string $apiErrorMessage = null;
    /**
     * The apiStatusCode
     * Meta information extracted from the WSDL
     * - documentation: The APIs HTTP Status Code
     * @var int|null
     */
    protected ?int $apiStatusCode = null;
    /**
     * The apiStatusText
     * Meta information extracted from the WSDL
     * - documentation: The APIs HTTP Status Text
     * @var string|null
     */
    protected ?string $apiStatusText = null;
    /**
     * Constructor method for TssApiErrorConveyingResponse
     * @uses TssApiErrorConveyingResponse::setErrorBundle()
     * @uses TssApiErrorConveyingResponse::setErrorCode()
     * @uses TssApiErrorConveyingResponse::setApiErrorCode()
     * @uses TssApiErrorConveyingResponse::setApiErrorMessage()
     * @uses TssApiErrorConveyingResponse::setApiStatusCode()
     * @uses TssApiErrorConveyingResponse::setApiStatusText()
     * @param string $errorBundle
     * @param string $errorCode
     * @param string $apiErrorCode
     * @param string $apiErrorMessage
     * @param int $apiStatusCode
     * @param string $apiStatusText
     */
    public function __construct(?string $errorBundle = null, ?string $errorCode = null, ?string $apiErrorCode = null, ?string $apiErrorMessage = null, ?int $apiStatusCode = null, ?string $apiStatusText = null)
    {
        $this
            ->setErrorBundle($errorBundle)
            ->setErrorCode($errorCode)
            ->setApiErrorCode($apiErrorCode)
            ->setApiErrorMessage($apiErrorMessage)
            ->setApiStatusCode($apiStatusCode)
            ->setApiStatusText($apiStatusText);
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
     * @return \Pggns\MidocoApi\Order\StructType\TssApiErrorConveyingResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\TssApiErrorConveyingResponse
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
     * Get apiErrorCode value
     * @return string|null
     */
    public function getApiErrorCode(): ?string
    {
        return $this->apiErrorCode;
    }
    /**
     * Set apiErrorCode value
     * @param string $apiErrorCode
     * @return \Pggns\MidocoApi\Order\StructType\TssApiErrorConveyingResponse
     */
    public function setApiErrorCode(?string $apiErrorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($apiErrorCode) && !is_string($apiErrorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiErrorCode, true), gettype($apiErrorCode)), __LINE__);
        }
        $this->apiErrorCode = $apiErrorCode;
        
        return $this;
    }
    /**
     * Get apiErrorMessage value
     * @return string|null
     */
    public function getApiErrorMessage(): ?string
    {
        return $this->apiErrorMessage;
    }
    /**
     * Set apiErrorMessage value
     * @param string $apiErrorMessage
     * @return \Pggns\MidocoApi\Order\StructType\TssApiErrorConveyingResponse
     */
    public function setApiErrorMessage(?string $apiErrorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($apiErrorMessage) && !is_string($apiErrorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiErrorMessage, true), gettype($apiErrorMessage)), __LINE__);
        }
        $this->apiErrorMessage = $apiErrorMessage;
        
        return $this;
    }
    /**
     * Get apiStatusCode value
     * @return int|null
     */
    public function getApiStatusCode(): ?int
    {
        return $this->apiStatusCode;
    }
    /**
     * Set apiStatusCode value
     * @param int $apiStatusCode
     * @return \Pggns\MidocoApi\Order\StructType\TssApiErrorConveyingResponse
     */
    public function setApiStatusCode(?int $apiStatusCode = null): self
    {
        // validation for constraint: int
        if (!is_null($apiStatusCode) && !(is_int($apiStatusCode) || ctype_digit($apiStatusCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($apiStatusCode, true), gettype($apiStatusCode)), __LINE__);
        }
        $this->apiStatusCode = $apiStatusCode;
        
        return $this;
    }
    /**
     * Get apiStatusText value
     * @return string|null
     */
    public function getApiStatusText(): ?string
    {
        return $this->apiStatusText;
    }
    /**
     * Set apiStatusText value
     * @param string $apiStatusText
     * @return \Pggns\MidocoApi\Order\StructType\TssApiErrorConveyingResponse
     */
    public function setApiStatusText(?string $apiStatusText = null): self
    {
        // validation for constraint: string
        if (!is_null($apiStatusText) && !is_string($apiStatusText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($apiStatusText, true), gettype($apiStatusText)), __LINE__);
        }
        $this->apiStatusText = $apiStatusText;
        
        return $this;
    }
}
