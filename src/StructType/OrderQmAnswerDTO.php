<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderQmAnswerDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderQmAnswerDTO extends AbstractStructBase
{
    /**
     * The answer
     * @var string|null
     */
    protected ?string $answer = null;
    /**
     * The orderQmAnswerId
     * @var int|null
     */
    protected ?int $orderQmAnswerId = null;
    /**
     * The orderQmId
     * @var int|null
     */
    protected ?int $orderQmId = null;
    /**
     * Constructor method for OrderQmAnswerDTO
     * @uses OrderQmAnswerDTO::setAnswer()
     * @uses OrderQmAnswerDTO::setOrderQmAnswerId()
     * @uses OrderQmAnswerDTO::setOrderQmId()
     * @param string $answer
     * @param int $orderQmAnswerId
     * @param int $orderQmId
     */
    public function __construct(?string $answer = null, ?int $orderQmAnswerId = null, ?int $orderQmId = null)
    {
        $this
            ->setAnswer($answer)
            ->setOrderQmAnswerId($orderQmAnswerId)
            ->setOrderQmId($orderQmId);
    }
    /**
     * Get answer value
     * @return string|null
     */
    public function getAnswer(): ?string
    {
        return $this->answer;
    }
    /**
     * Set answer value
     * @param string $answer
     * @return \Pggns\MidocoApi\Order\StructType\OrderQmAnswerDTO
     */
    public function setAnswer(?string $answer = null): self
    {
        // validation for constraint: string
        if (!is_null($answer) && !is_string($answer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($answer, true), gettype($answer)), __LINE__);
        }
        $this->answer = $answer;
        
        return $this;
    }
    /**
     * Get orderQmAnswerId value
     * @return int|null
     */
    public function getOrderQmAnswerId(): ?int
    {
        return $this->orderQmAnswerId;
    }
    /**
     * Set orderQmAnswerId value
     * @param int $orderQmAnswerId
     * @return \Pggns\MidocoApi\Order\StructType\OrderQmAnswerDTO
     */
    public function setOrderQmAnswerId(?int $orderQmAnswerId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderQmAnswerId) && !(is_int($orderQmAnswerId) || ctype_digit($orderQmAnswerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderQmAnswerId, true), gettype($orderQmAnswerId)), __LINE__);
        }
        $this->orderQmAnswerId = $orderQmAnswerId;
        
        return $this;
    }
    /**
     * Get orderQmId value
     * @return int|null
     */
    public function getOrderQmId(): ?int
    {
        return $this->orderQmId;
    }
    /**
     * Set orderQmId value
     * @param int $orderQmId
     * @return \Pggns\MidocoApi\Order\StructType\OrderQmAnswerDTO
     */
    public function setOrderQmId(?int $orderQmId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderQmId) && !(is_int($orderQmId) || ctype_digit($orderQmId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderQmId, true), gettype($orderQmId)), __LINE__);
        }
        $this->orderQmId = $orderQmId;
        
        return $this;
    }
}
