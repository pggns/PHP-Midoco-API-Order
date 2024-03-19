<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthNovomindResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AuthNovomindResponse extends AbstractStructBase
{
    /**
     * The result
     * @var bool|null
     */
    protected ?bool $result = null;
    /**
     * The accessToken
     * @var string|null
     */
    protected ?string $accessToken = null;
    /**
     * Constructor method for AuthNovomindResponse
     * @uses AuthNovomindResponse::setResult()
     * @uses AuthNovomindResponse::setAccessToken()
     * @param bool $result
     * @param string $accessToken
     */
    public function __construct(?bool $result = null, ?string $accessToken = null)
    {
        $this
            ->setResult($result)
            ->setAccessToken($accessToken);
    }
    /**
     * Get result value
     * @return bool|null
     */
    public function getResult(): ?bool
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param bool $result
     * @return \Pggns\MidocoApi\Order\StructType\AuthNovomindResponse
     */
    public function setResult(?bool $result = null): self
    {
        // validation for constraint: boolean
        if (!is_null($result) && !is_bool($result)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        $this->result = $result;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\AuthNovomindResponse
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
}
