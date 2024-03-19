<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Check2FaRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Check2FaRequest extends AbstractStructBase
{
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The authCode
     * @var string|null
     */
    protected ?string $authCode = null;
    /**
     * Constructor method for Check2FaRequest
     * @uses Check2FaRequest::setUserId()
     * @uses Check2FaRequest::setAuthCode()
     * @param int $userId
     * @param string $authCode
     */
    public function __construct(?int $userId = null, ?string $authCode = null)
    {
        $this
            ->setUserId($userId)
            ->setAuthCode($authCode);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\Check2FaRequest
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get authCode value
     * @return string|null
     */
    public function getAuthCode(): ?string
    {
        return $this->authCode;
    }
    /**
     * Set authCode value
     * @param string $authCode
     * @return \Pggns\MidocoApi\Order\StructType\Check2FaRequest
     */
    public function setAuthCode(?string $authCode = null): self
    {
        // validation for constraint: string
        if (!is_null($authCode) && !is_string($authCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($authCode, true), gettype($authCode)), __LINE__);
        }
        $this->authCode = $authCode;
        
        return $this;
    }
}
