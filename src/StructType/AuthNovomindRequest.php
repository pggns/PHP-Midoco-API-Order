<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthNovomindRequest StructType
 * @subpackage Structs
 */
class AuthNovomindRequest extends AbstractStructBase
{
    /**
     * The userName
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * The userPwd
     * @var string|null
     */
    protected ?string $userPwd = null;
    /**
     * The restUri
     * @var string|null
     */
    protected ?string $restUri = null;
    /**
     * The authServerUri
     * @var string|null
     */
    protected ?string $authServerUri = null;
    /**
     * The clientId
     * @var string|null
     */
    protected ?string $clientId = null;
    /**
     * The clientSecret
     * @var string|null
     */
    protected ?string $clientSecret = null;
    /**
     * Constructor method for AuthNovomindRequest
     * @uses AuthNovomindRequest::setUserName()
     * @uses AuthNovomindRequest::setUserPwd()
     * @uses AuthNovomindRequest::setRestUri()
     * @uses AuthNovomindRequest::setAuthServerUri()
     * @uses AuthNovomindRequest::setClientId()
     * @uses AuthNovomindRequest::setClientSecret()
     * @param string $userName
     * @param string $userPwd
     * @param string $restUri
     * @param string $authServerUri
     * @param string $clientId
     * @param string $clientSecret
     */
    public function __construct(?string $userName = null, ?string $userPwd = null, ?string $restUri = null, ?string $authServerUri = null, ?string $clientId = null, ?string $clientSecret = null)
    {
        $this
            ->setUserName($userName)
            ->setUserPwd($userPwd)
            ->setRestUri($restUri)
            ->setAuthServerUri($authServerUri)
            ->setClientId($clientId)
            ->setClientSecret($clientSecret);
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \Pggns\MidocoApi\Order\StructType\AuthNovomindRequest
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        
        return $this;
    }
    /**
     * Get userPwd value
     * @return string|null
     */
    public function getUserPwd(): ?string
    {
        return $this->userPwd;
    }
    /**
     * Set userPwd value
     * @param string $userPwd
     * @return \Pggns\MidocoApi\Order\StructType\AuthNovomindRequest
     */
    public function setUserPwd(?string $userPwd = null): self
    {
        // validation for constraint: string
        if (!is_null($userPwd) && !is_string($userPwd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userPwd, true), gettype($userPwd)), __LINE__);
        }
        $this->userPwd = $userPwd;
        
        return $this;
    }
    /**
     * Get restUri value
     * @return string|null
     */
    public function getRestUri(): ?string
    {
        return $this->restUri;
    }
    /**
     * Set restUri value
     * @param string $restUri
     * @return \Pggns\MidocoApi\Order\StructType\AuthNovomindRequest
     */
    public function setRestUri(?string $restUri = null): self
    {
        // validation for constraint: string
        if (!is_null($restUri) && !is_string($restUri)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($restUri, true), gettype($restUri)), __LINE__);
        }
        $this->restUri = $restUri;
        
        return $this;
    }
    /**
     * Get authServerUri value
     * @return string|null
     */
    public function getAuthServerUri(): ?string
    {
        return $this->authServerUri;
    }
    /**
     * Set authServerUri value
     * @param string $authServerUri
     * @return \Pggns\MidocoApi\Order\StructType\AuthNovomindRequest
     */
    public function setAuthServerUri(?string $authServerUri = null): self
    {
        // validation for constraint: string
        if (!is_null($authServerUri) && !is_string($authServerUri)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authServerUri, true), gettype($authServerUri)), __LINE__);
        }
        $this->authServerUri = $authServerUri;
        
        return $this;
    }
    /**
     * Get clientId value
     * @return string|null
     */
    public function getClientId(): ?string
    {
        return $this->clientId;
    }
    /**
     * Set clientId value
     * @param string $clientId
     * @return \Pggns\MidocoApi\Order\StructType\AuthNovomindRequest
     */
    public function setClientId(?string $clientId = null): self
    {
        // validation for constraint: string
        if (!is_null($clientId) && !is_string($clientId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientId, true), gettype($clientId)), __LINE__);
        }
        $this->clientId = $clientId;
        
        return $this;
    }
    /**
     * Get clientSecret value
     * @return string|null
     */
    public function getClientSecret(): ?string
    {
        return $this->clientSecret;
    }
    /**
     * Set clientSecret value
     * @param string $clientSecret
     * @return \Pggns\MidocoApi\Order\StructType\AuthNovomindRequest
     */
    public function setClientSecret(?string $clientSecret = null): self
    {
        // validation for constraint: string
        if (!is_null($clientSecret) && !is_string($clientSecret)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientSecret, true), gettype($clientSecret)), __LINE__);
        }
        $this->clientSecret = $clientSecret;
        
        return $this;
    }
}
