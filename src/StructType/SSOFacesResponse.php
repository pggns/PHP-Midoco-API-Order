<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SSOFacesResponse StructType
 * @subpackage Structs
 */
class SSOFacesResponse extends AbstractStructBase
{
    /**
     * The targetUrl
     * @var string|null
     */
    protected ?string $targetUrl = null;
    /**
     * The sessionId
     * @var string|null
     */
    protected ?string $sessionId = null;
    /**
     * The samlResponseInBase64
     * @var string|null
     */
    protected ?string $samlResponseInBase64 = null;
    /**
     * The samlDeflatedSamlResponseWithinHTTPGET
     * @var string|null
     */
    protected ?string $samlDeflatedSamlResponseWithinHTTPGET = null;
    /**
     * Constructor method for SSOFacesResponse
     * @uses SSOFacesResponse::setTargetUrl()
     * @uses SSOFacesResponse::setSessionId()
     * @uses SSOFacesResponse::setSamlResponseInBase64()
     * @uses SSOFacesResponse::setSamlDeflatedSamlResponseWithinHTTPGET()
     * @param string $targetUrl
     * @param string $sessionId
     * @param string $samlResponseInBase64
     * @param string $samlDeflatedSamlResponseWithinHTTPGET
     */
    public function __construct(?string $targetUrl = null, ?string $sessionId = null, ?string $samlResponseInBase64 = null, ?string $samlDeflatedSamlResponseWithinHTTPGET = null)
    {
        $this
            ->setTargetUrl($targetUrl)
            ->setSessionId($sessionId)
            ->setSamlResponseInBase64($samlResponseInBase64)
            ->setSamlDeflatedSamlResponseWithinHTTPGET($samlDeflatedSamlResponseWithinHTTPGET);
    }
    /**
     * Get targetUrl value
     * @return string|null
     */
    public function getTargetUrl(): ?string
    {
        return $this->targetUrl;
    }
    /**
     * Set targetUrl value
     * @param string $targetUrl
     * @return \Pggns\MidocoApi\Order\StructType\SSOFacesResponse
     */
    public function setTargetUrl(?string $targetUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($targetUrl) && !is_string($targetUrl)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetUrl, true), gettype($targetUrl)), __LINE__);
        }
        $this->targetUrl = $targetUrl;
        
        return $this;
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId(): ?string
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $sessionId
     * @return \Pggns\MidocoApi\Order\StructType\SSOFacesResponse
     */
    public function setSessionId(?string $sessionId = null): self
    {
        // validation for constraint: string
        if (!is_null($sessionId) && !is_string($sessionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sessionId, true), gettype($sessionId)), __LINE__);
        }
        $this->sessionId = $sessionId;
        
        return $this;
    }
    /**
     * Get samlResponseInBase64 value
     * @return string|null
     */
    public function getSamlResponseInBase64(): ?string
    {
        return $this->samlResponseInBase64;
    }
    /**
     * Set samlResponseInBase64 value
     * @param string $samlResponseInBase64
     * @return \Pggns\MidocoApi\Order\StructType\SSOFacesResponse
     */
    public function setSamlResponseInBase64(?string $samlResponseInBase64 = null): self
    {
        // validation for constraint: string
        if (!is_null($samlResponseInBase64) && !is_string($samlResponseInBase64)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($samlResponseInBase64, true), gettype($samlResponseInBase64)), __LINE__);
        }
        $this->samlResponseInBase64 = $samlResponseInBase64;
        
        return $this;
    }
    /**
     * Get samlDeflatedSamlResponseWithinHTTPGET value
     * @return string|null
     */
    public function getSamlDeflatedSamlResponseWithinHTTPGET(): ?string
    {
        return $this->samlDeflatedSamlResponseWithinHTTPGET;
    }
    /**
     * Set samlDeflatedSamlResponseWithinHTTPGET value
     * @param string $samlDeflatedSamlResponseWithinHTTPGET
     * @return \Pggns\MidocoApi\Order\StructType\SSOFacesResponse
     */
    public function setSamlDeflatedSamlResponseWithinHTTPGET(?string $samlDeflatedSamlResponseWithinHTTPGET = null): self
    {
        // validation for constraint: string
        if (!is_null($samlDeflatedSamlResponseWithinHTTPGET) && !is_string($samlDeflatedSamlResponseWithinHTTPGET)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($samlDeflatedSamlResponseWithinHTTPGET, true), gettype($samlDeflatedSamlResponseWithinHTTPGET)), __LINE__);
        }
        $this->samlDeflatedSamlResponseWithinHTTPGET = $samlDeflatedSamlResponseWithinHTTPGET;
        
        return $this;
    }
}
