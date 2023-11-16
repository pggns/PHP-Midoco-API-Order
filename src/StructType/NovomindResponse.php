<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NovomindResponse StructType
 * @subpackage Structs
 */
class NovomindResponse extends AbstractStructBase
{
    /**
     * The result
     * @var int|null
     */
    protected ?int $result = null;
    /**
     * The accessToken
     * @var string|null
     */
    protected ?string $accessToken = null;
    /**
     * Constructor method for NovomindResponse
     * @uses NovomindResponse::setResult()
     * @uses NovomindResponse::setAccessToken()
     * @param int $result
     * @param string $accessToken
     */
    public function __construct(?int $result = null, ?string $accessToken = null)
    {
        $this
            ->setResult($result)
            ->setAccessToken($accessToken);
    }
    /**
     * Get result value
     * @return int|null
     */
    public function getResult(): ?int
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param int $result
     * @return \Pggns\MidocoApi\Order\StructType\NovomindResponse
     */
    public function setResult(?int $result = null): self
    {
        // validation for constraint: int
        if (!is_null($result) && !(is_int($result) || ctype_digit($result))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($result, true), gettype($result)), __LINE__);
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
     * @return \Pggns\MidocoApi\Order\StructType\NovomindResponse
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
