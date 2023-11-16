<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmNoticeCommentDTO StructType
 * @subpackage Structs
 */
class CrmNoticeCommentDTO extends AbstractStructBase
{
    /**
     * The baseCommentId
     * @var int|null
     */
    protected ?int $baseCommentId = null;
    /**
     * The commentId
     * @var int|null
     */
    protected ?int $commentId = null;
    /**
     * The commenttext
     * @var string|null
     */
    protected ?string $commenttext = null;
    /**
     * The creationTime
     * @var string|null
     */
    protected ?string $creationTime = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The markedVoid
     * @var bool|null
     */
    protected ?bool $markedVoid = null;
    /**
     * The modifyTime
     * @var string|null
     */
    protected ?string $modifyTime = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * Constructor method for CrmNoticeCommentDTO
     * @uses CrmNoticeCommentDTO::setBaseCommentId()
     * @uses CrmNoticeCommentDTO::setCommentId()
     * @uses CrmNoticeCommentDTO::setCommenttext()
     * @uses CrmNoticeCommentDTO::setCreationTime()
     * @uses CrmNoticeCommentDTO::setCreationUser()
     * @uses CrmNoticeCommentDTO::setCustomerId()
     * @uses CrmNoticeCommentDTO::setMarkedVoid()
     * @uses CrmNoticeCommentDTO::setModifyTime()
     * @uses CrmNoticeCommentDTO::setModifyUser()
     * @uses CrmNoticeCommentDTO::setPosition()
     * @param int $baseCommentId
     * @param int $commentId
     * @param string $commenttext
     * @param string $creationTime
     * @param int $creationUser
     * @param int $customerId
     * @param bool $markedVoid
     * @param string $modifyTime
     * @param int $modifyUser
     * @param int $position
     */
    public function __construct(?int $baseCommentId = null, ?int $commentId = null, ?string $commenttext = null, ?string $creationTime = null, ?int $creationUser = null, ?int $customerId = null, ?bool $markedVoid = null, ?string $modifyTime = null, ?int $modifyUser = null, ?int $position = null)
    {
        $this
            ->setBaseCommentId($baseCommentId)
            ->setCommentId($commentId)
            ->setCommenttext($commenttext)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setCustomerId($customerId)
            ->setMarkedVoid($markedVoid)
            ->setModifyTime($modifyTime)
            ->setModifyUser($modifyUser)
            ->setPosition($position);
    }
    /**
     * Get baseCommentId value
     * @return int|null
     */
    public function getBaseCommentId(): ?int
    {
        return $this->baseCommentId;
    }
    /**
     * Set baseCommentId value
     * @param int $baseCommentId
     * @return \Pggns\MidocoApi\Order\StructType\CrmNoticeCommentDTO
     */
    public function setBaseCommentId(?int $baseCommentId = null): self
    {
        // validation for constraint: int
        if (!is_null($baseCommentId) && !(is_int($baseCommentId) || ctype_digit($baseCommentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($baseCommentId, true), gettype($baseCommentId)), __LINE__);
        }
        $this->baseCommentId = $baseCommentId;
        
        return $this;
    }
    /**
     * Get commentId value
     * @return int|null
     */
    public function getCommentId(): ?int
    {
        return $this->commentId;
    }
    /**
     * Set commentId value
     * @param int $commentId
     * @return \Pggns\MidocoApi\Order\StructType\CrmNoticeCommentDTO
     */
    public function setCommentId(?int $commentId = null): self
    {
        // validation for constraint: int
        if (!is_null($commentId) && !(is_int($commentId) || ctype_digit($commentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commentId, true), gettype($commentId)), __LINE__);
        }
        $this->commentId = $commentId;
        
        return $this;
    }
    /**
     * Get commenttext value
     * @return string|null
     */
    public function getCommenttext(): ?string
    {
        return $this->commenttext;
    }
    /**
     * Set commenttext value
     * @param string $commenttext
     * @return \Pggns\MidocoApi\Order\StructType\CrmNoticeCommentDTO
     */
    public function setCommenttext(?string $commenttext = null): self
    {
        // validation for constraint: string
        if (!is_null($commenttext) && !is_string($commenttext)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commenttext, true), gettype($commenttext)), __LINE__);
        }
        $this->commenttext = $commenttext;
        
        return $this;
    }
    /**
     * Get creationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->creationTime;
    }
    /**
     * Set creationTime value
     * @param string $creationTime
     * @return \Pggns\MidocoApi\Order\StructType\CrmNoticeCommentDTO
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->creationTime = $creationTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmNoticeCommentDTO
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
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CrmNoticeCommentDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get markedVoid value
     * @return bool|null
     */
    public function getMarkedVoid(): ?bool
    {
        return $this->markedVoid;
    }
    /**
     * Set markedVoid value
     * @param bool $markedVoid
     * @return \Pggns\MidocoApi\Order\StructType\CrmNoticeCommentDTO
     */
    public function setMarkedVoid(?bool $markedVoid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($markedVoid) && !is_bool($markedVoid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($markedVoid, true), gettype($markedVoid)), __LINE__);
        }
        $this->markedVoid = $markedVoid;
        
        return $this;
    }
    /**
     * Get modifyTime value
     * @return string|null
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }
    /**
     * Set modifyTime value
     * @param string $modifyTime
     * @return \Pggns\MidocoApi\Order\StructType\CrmNoticeCommentDTO
     */
    public function setModifyTime(?string $modifyTime = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTime) && !is_string($modifyTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTime, true), gettype($modifyTime)), __LINE__);
        }
        $this->modifyTime = $modifyTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmNoticeCommentDTO
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
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\CrmNoticeCommentDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
}
