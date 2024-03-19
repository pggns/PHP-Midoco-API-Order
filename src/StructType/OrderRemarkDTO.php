<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderRemarkDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderRemarkDTO extends AbstractStructBase
{
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The isManuallyCreated
     * @var bool|null
     */
    protected ?bool $isManuallyCreated = null;
    /**
     * The modifyTimestamp
     * @var string|null
     */
    protected ?string $modifyTimestamp = null;
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
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The printAllowed
     * @var bool|null
     */
    protected ?bool $printAllowed = null;
    /**
     * The printMarker
     * @var string|null
     */
    protected ?string $printMarker = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * Constructor method for OrderRemarkDTO
     * @uses OrderRemarkDTO::setCreationTimestamp()
     * @uses OrderRemarkDTO::setCreationUser()
     * @uses OrderRemarkDTO::setIsManuallyCreated()
     * @uses OrderRemarkDTO::setModifyTimestamp()
     * @uses OrderRemarkDTO::setModifyUser()
     * @uses OrderRemarkDTO::setOrderId()
     * @uses OrderRemarkDTO::setPosition()
     * @uses OrderRemarkDTO::setPrintAllowed()
     * @uses OrderRemarkDTO::setPrintMarker()
     * @uses OrderRemarkDTO::setPrintType()
     * @uses OrderRemarkDTO::setRemark()
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param bool $isManuallyCreated
     * @param string $modifyTimestamp
     * @param int $modifyUser
     * @param int $orderId
     * @param int $position
     * @param bool $printAllowed
     * @param string $printMarker
     * @param string $printType
     * @param string $remark
     */
    public function __construct(?string $creationTimestamp = null, ?int $creationUser = null, ?bool $isManuallyCreated = null, ?string $modifyTimestamp = null, ?int $modifyUser = null, ?int $orderId = null, ?int $position = null, ?bool $printAllowed = null, ?string $printMarker = null, ?string $printType = null, ?string $remark = null)
    {
        $this
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setIsManuallyCreated($isManuallyCreated)
            ->setModifyTimestamp($modifyTimestamp)
            ->setModifyUser($modifyUser)
            ->setOrderId($orderId)
            ->setPosition($position)
            ->setPrintAllowed($printAllowed)
            ->setPrintMarker($printMarker)
            ->setPrintType($printType)
            ->setRemark($remark);
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO
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
     * Get isManuallyCreated value
     * @return bool|null
     */
    public function getIsManuallyCreated(): ?bool
    {
        return $this->isManuallyCreated;
    }
    /**
     * Set isManuallyCreated value
     * @param bool $isManuallyCreated
     * @return \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO
     */
    public function setIsManuallyCreated(?bool $isManuallyCreated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManuallyCreated) && !is_bool($isManuallyCreated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManuallyCreated, true), gettype($isManuallyCreated)), __LINE__);
        }
        $this->isManuallyCreated = $isManuallyCreated;
        
        return $this;
    }
    /**
     * Get modifyTimestamp value
     * @return string|null
     */
    public function getModifyTimestamp(): ?string
    {
        return $this->modifyTimestamp;
    }
    /**
     * Set modifyTimestamp value
     * @param string $modifyTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO
     */
    public function setModifyTimestamp(?string $modifyTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTimestamp) && !is_string($modifyTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTimestamp, true), gettype($modifyTimestamp)), __LINE__);
        }
        $this->modifyTimestamp = $modifyTimestamp;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO
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
    /**
     * Get printAllowed value
     * @return bool|null
     */
    public function getPrintAllowed(): ?bool
    {
        return $this->printAllowed;
    }
    /**
     * Set printAllowed value
     * @param bool $printAllowed
     * @return \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO
     */
    public function setPrintAllowed(?bool $printAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printAllowed) && !is_bool($printAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printAllowed, true), gettype($printAllowed)), __LINE__);
        }
        $this->printAllowed = $printAllowed;
        
        return $this;
    }
    /**
     * Get printMarker value
     * @return string|null
     */
    public function getPrintMarker(): ?string
    {
        return $this->printMarker;
    }
    /**
     * Set printMarker value
     * @param string $printMarker
     * @return \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO
     */
    public function setPrintMarker(?string $printMarker = null): self
    {
        // validation for constraint: string
        if (!is_null($printMarker) && !is_string($printMarker)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printMarker, true), gettype($printMarker)), __LINE__);
        }
        $this->printMarker = $printMarker;
        
        return $this;
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
    /**
     * Get remark value
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }
    /**
     * Set remark value
     * @param string $remark
     * @return \Pggns\MidocoApi\Order\StructType\OrderRemarkDTO
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (!is_null($remark) && !is_string($remark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), gettype($remark)), __LINE__);
        }
        $this->remark = $remark;
        
        return $this;
    }
}
