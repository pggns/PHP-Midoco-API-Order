<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsInitializedFor2FaRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class IsInitializedFor2FaRequest extends AbstractStructBase
{
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * Constructor method for IsInitializedFor2FaRequest
     * @uses IsInitializedFor2FaRequest::setUserId()
     * @param int $userId
     */
    public function __construct(?int $userId = null)
    {
        $this
            ->setUserId($userId);
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
     * @return \Pggns\MidocoApi\Order\StructType\IsInitializedFor2FaRequest
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
}
