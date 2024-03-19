<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingNoticeCommentDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingNoticeCommentDTO extends AbstractStructBase
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
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
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
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
    /**
     * Constructor method for BillingNoticeCommentDTO
     * @uses BillingNoticeCommentDTO::setBaseCommentId()
     * @uses BillingNoticeCommentDTO::setCommentId()
     * @uses BillingNoticeCommentDTO::setCommenttext()
     * @uses BillingNoticeCommentDTO::setCreationTime()
     * @uses BillingNoticeCommentDTO::setCreationUser()
     * @uses BillingNoticeCommentDTO::setDocumentId()
     * @uses BillingNoticeCommentDTO::setMarkedVoid()
     * @uses BillingNoticeCommentDTO::setModifyTime()
     * @uses BillingNoticeCommentDTO::setModifyUser()
     * @uses BillingNoticeCommentDTO::setPositionNo()
     * @param int $baseCommentId
     * @param int $commentId
     * @param string $commenttext
     * @param string $creationTime
     * @param int $creationUser
     * @param int $documentId
     * @param bool $markedVoid
     * @param string $modifyTime
     * @param int $modifyUser
     * @param int $positionNo
     */
    public function __construct(?int $baseCommentId = null, ?int $commentId = null, ?string $commenttext = null, ?string $creationTime = null, ?int $creationUser = null, ?int $documentId = null, ?bool $markedVoid = null, ?string $modifyTime = null, ?int $modifyUser = null, ?int $positionNo = null)
    {
        $this
            ->setBaseCommentId($baseCommentId)
            ->setCommentId($commentId)
            ->setCommenttext($commenttext)
            ->setCreationTime($creationTime)
            ->setCreationUser($creationUser)
            ->setDocumentId($documentId)
            ->setMarkedVoid($markedVoid)
            ->setModifyTime($modifyTime)
            ->setModifyUser($modifyUser)
            ->setPositionNo($positionNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO
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
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO
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
     * Get positionNo value
     * @return int|null
     */
    public function getPositionNo(): ?int
    {
        return $this->positionNo;
    }
    /**
     * Set positionNo value
     * @param int $positionNo
     * @return \Pggns\MidocoApi\Order\StructType\BillingNoticeCommentDTO
     */
    public function setPositionNo(?int $positionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($positionNo) && !(is_int($positionNo) || ctype_digit($positionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionNo, true), gettype($positionNo)), __LINE__);
        }
        $this->positionNo = $positionNo;
        
        return $this;
    }
}
