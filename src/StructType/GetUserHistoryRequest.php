<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserHistoryRequest StructType
 * @subpackage Structs
 */
class GetUserHistoryRequest extends AbstractStructBase
{
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The isProcessed
     * @var bool|null
     */
    protected ?bool $isProcessed = null;
    /**
     * Constructor method for GetUserHistoryRequest
     * @uses GetUserHistoryRequest::setUserId()
     * @uses GetUserHistoryRequest::setIsProcessed()
     * @param int $userId
     * @param bool $isProcessed
     */
    public function __construct(?int $userId = null, ?bool $isProcessed = null)
    {
        $this
            ->setUserId($userId)
            ->setIsProcessed($isProcessed);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetUserHistoryRequest
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
     * Get isProcessed value
     * @return bool|null
     */
    public function getIsProcessed(): ?bool
    {
        return $this->isProcessed;
    }
    /**
     * Set isProcessed value
     * @param bool $isProcessed
     * @return \Pggns\MidocoApi\Order\StructType\GetUserHistoryRequest
     */
    public function setIsProcessed(?bool $isProcessed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isProcessed) && !is_bool($isProcessed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProcessed, true), gettype($isProcessed)), __LINE__);
        }
        $this->isProcessed = $isProcessed;
        
        return $this;
    }
}
