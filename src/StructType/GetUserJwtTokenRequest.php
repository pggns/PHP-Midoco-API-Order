<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserJwtTokenRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUserJwtTokenRequest extends AbstractStructBase
{
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The tokenId
     * @var int|null
     */
    protected ?int $tokenId = null;
    /**
     * Constructor method for GetUserJwtTokenRequest
     * @uses GetUserJwtTokenRequest::setUserId()
     * @uses GetUserJwtTokenRequest::setTokenId()
     * @param int $userId
     * @param int $tokenId
     */
    public function __construct(?int $userId = null, ?int $tokenId = null)
    {
        $this
            ->setUserId($userId)
            ->setTokenId($tokenId);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetUserJwtTokenRequest
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
     * Get tokenId value
     * @return int|null
     */
    public function getTokenId(): ?int
    {
        return $this->tokenId;
    }
    /**
     * Set tokenId value
     * @param int $tokenId
     * @return \Pggns\MidocoApi\Order\StructType\GetUserJwtTokenRequest
     */
    public function setTokenId(?int $tokenId = null): self
    {
        // validation for constraint: int
        if (!is_null($tokenId) && !(is_int($tokenId) || ctype_digit($tokenId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tokenId, true), gettype($tokenId)), __LINE__);
        }
        $this->tokenId = $tokenId;
        
        return $this;
    }
}
