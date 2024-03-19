<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NovomindRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class NovomindRequest extends AbstractStructBase
{
    /**
     * The accessToken
     * @var string|null
     */
    protected ?string $accessToken = null;
    /**
     * The url
     * @var string|null
     */
    protected ?string $url = null;
    /**
     * The methodType
     * @var string|null
     */
    protected ?string $methodType = null;
    /**
     * The method
     * @var string|null
     */
    protected ?string $method = null;
    /**
     * The data
     * @var string|null
     */
    protected ?string $data = null;
    /**
     * Constructor method for NovomindRequest
     * @uses NovomindRequest::setAccessToken()
     * @uses NovomindRequest::setUrl()
     * @uses NovomindRequest::setMethodType()
     * @uses NovomindRequest::setMethod()
     * @uses NovomindRequest::setData()
     * @param string $accessToken
     * @param string $url
     * @param string $methodType
     * @param string $method
     * @param string $data
     */
    public function __construct(?string $accessToken = null, ?string $url = null, ?string $methodType = null, ?string $method = null, ?string $data = null)
    {
        $this
            ->setAccessToken($accessToken)
            ->setUrl($url)
            ->setMethodType($methodType)
            ->setMethod($method)
            ->setData($data);
    }
    /**
     * Get accessToken value
     * @return string|null
     */
    public function getAccessToken(): ?string
    {
        return $this->accessToken;
    }
    /**
     * Set accessToken value
     * @param string $accessToken
     * @return \Pggns\MidocoApi\Order\StructType\NovomindRequest
     */
    public function setAccessToken(?string $accessToken = null): self
    {
        // validation for constraint: string
        if (!is_null($accessToken) && !is_string($accessToken)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessToken, true), gettype($accessToken)), __LINE__);
        }
        $this->accessToken = $accessToken;
        
        return $this;
    }
    /**
     * Get url value
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     * Set url value
     * @param string $url
     * @return \Pggns\MidocoApi\Order\StructType\NovomindRequest
     */
    public function setUrl(?string $url = null): self
    {
        // validation for constraint: string
        if (!is_null($url) && !is_string($url)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($url, true), gettype($url)), __LINE__);
        }
        $this->url = $url;
        
        return $this;
    }
    /**
     * Get methodType value
     * @return string|null
     */
    public function getMethodType(): ?string
    {
        return $this->methodType;
    }
    /**
     * Set methodType value
     * @param string $methodType
     * @return \Pggns\MidocoApi\Order\StructType\NovomindRequest
     */
    public function setMethodType(?string $methodType = null): self
    {
        // validation for constraint: string
        if (!is_null($methodType) && !is_string($methodType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($methodType, true), gettype($methodType)), __LINE__);
        }
        $this->methodType = $methodType;
        
        return $this;
    }
    /**
     * Get method value
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }
    /**
     * Set method value
     * @param string $method
     * @return \Pggns\MidocoApi\Order\StructType\NovomindRequest
     */
    public function setMethod(?string $method = null): self
    {
        // validation for constraint: string
        if (!is_null($method) && !is_string($method)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($method, true), gettype($method)), __LINE__);
        }
        $this->method = $method;
        
        return $this;
    }
    /**
     * Get data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \Pggns\MidocoApi\Order\StructType\NovomindRequest
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;
        
        return $this;
    }
}
