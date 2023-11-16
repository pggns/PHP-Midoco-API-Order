<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderQmDTO StructType
 * @subpackage Structs
 */
class OrderQmDTO extends AbstractStructBase
{
    /**
     * The comment
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The enabled
     * @var bool|null
     */
    protected ?bool $enabled = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderQmId
     * @var int|null
     */
    protected ?int $orderQmId = null;
    /**
     * The questionId
     * @var int|null
     */
    protected ?int $questionId = null;
    /**
     * Constructor method for OrderQmDTO
     * @uses OrderQmDTO::setComment()
     * @uses OrderQmDTO::setCreationDate()
     * @uses OrderQmDTO::setCreationUser()
     * @uses OrderQmDTO::setEnabled()
     * @uses OrderQmDTO::setModifyDate()
     * @uses OrderQmDTO::setModifyUser()
     * @uses OrderQmDTO::setOrderId()
     * @uses OrderQmDTO::setOrderQmId()
     * @uses OrderQmDTO::setQuestionId()
     * @param string $comment
     * @param string $creationDate
     * @param int $creationUser
     * @param bool $enabled
     * @param string $modifyDate
     * @param int $modifyUser
     * @param int $orderId
     * @param int $orderQmId
     * @param int $questionId
     */
    public function __construct(?string $comment = null, ?string $creationDate = null, ?int $creationUser = null, ?bool $enabled = null, ?string $modifyDate = null, ?int $modifyUser = null, ?int $orderId = null, ?int $orderQmId = null, ?int $questionId = null)
    {
        $this
            ->setComment($comment)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setEnabled($enabled)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setOrderId($orderId)
            ->setOrderQmId($orderQmId)
            ->setQuestionId($questionId);
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Pggns\MidocoApi\Order\StructType\OrderQmDTO
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderQmDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderQmDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get enabled value
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }
    /**
     * Set enabled value
     * @param bool $enabled
     * @return \Pggns\MidocoApi\Order\StructType\OrderQmDTO
     */
    public function setEnabled(?bool $enabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($enabled) && !is_bool($enabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enabled, true), gettype($enabled)), __LINE__);
        }
        $this->enabled = $enabled;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\OrderQmDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\OrderQmDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\OrderQmDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderQmDTO
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
    /**
     * Get questionId value
     * @return int|null
     */
    public function getQuestionId(): ?int
    {
        return $this->questionId;
    }
    /**
     * Set questionId value
     * @param int $questionId
     * @return \Pggns\MidocoApi\Order\StructType\OrderQmDTO
     */
    public function setQuestionId(?int $questionId = null): self
    {
        // validation for constraint: int
        if (!is_null($questionId) && !(is_int($questionId) || ctype_digit($questionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($questionId, true), gettype($questionId)), __LINE__);
        }
        $this->questionId = $questionId;
        
        return $this;
    }
}
