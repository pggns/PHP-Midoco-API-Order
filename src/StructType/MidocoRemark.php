<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoRemark StructType
 * @subpackage Structs
 */
class MidocoRemark extends AbstractStructBase
{
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
    /**
     * The printAllowed
     * @var bool|null
     */
    protected ?bool $printAllowed = null;
    /**
     * The isAutoPrint
     * @var bool|null
     */
    protected ?bool $isAutoPrint = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The modifyTimestamp
     * @var string|null
     */
    protected ?string $modifyTimestamp = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The servicePosition
     * @var int|null
     */
    protected ?int $servicePosition = null;
    /**
     * The printMarker
     * @var string|null
     */
    protected ?string $printMarker = null;
    /**
     * The isManuallyCreated
     * @var bool|null
     */
    protected ?bool $isManuallyCreated = null;
    /**
     * Constructor method for MidocoRemark
     * @uses MidocoRemark::setItemId()
     * @uses MidocoRemark::setPositionNo()
     * @uses MidocoRemark::setPrintAllowed()
     * @uses MidocoRemark::setIsAutoPrint()
     * @uses MidocoRemark::setRemark()
     * @uses MidocoRemark::setCreationUser()
     * @uses MidocoRemark::setCreationTimestamp()
     * @uses MidocoRemark::setModifyUser()
     * @uses MidocoRemark::setModifyTimestamp()
     * @uses MidocoRemark::setPrintType()
     * @uses MidocoRemark::setServicePosition()
     * @uses MidocoRemark::setPrintMarker()
     * @uses MidocoRemark::setIsManuallyCreated()
     * @param int $itemId
     * @param int $positionNo
     * @param bool $printAllowed
     * @param bool $isAutoPrint
     * @param string $remark
     * @param int $creationUser
     * @param string $creationTimestamp
     * @param int $modifyUser
     * @param string $modifyTimestamp
     * @param string $printType
     * @param int $servicePosition
     * @param string $printMarker
     * @param bool $isManuallyCreated
     */
    public function __construct(?int $itemId = null, ?int $positionNo = null, ?bool $printAllowed = null, ?bool $isAutoPrint = null, ?string $remark = null, ?int $creationUser = null, ?string $creationTimestamp = null, ?int $modifyUser = null, ?string $modifyTimestamp = null, ?string $printType = null, ?int $servicePosition = null, ?string $printMarker = null, ?bool $isManuallyCreated = null)
    {
        $this
            ->setItemId($itemId)
            ->setPositionNo($positionNo)
            ->setPrintAllowed($printAllowed)
            ->setIsAutoPrint($isAutoPrint)
            ->setRemark($remark)
            ->setCreationUser($creationUser)
            ->setCreationTimestamp($creationTimestamp)
            ->setModifyUser($modifyUser)
            ->setModifyTimestamp($modifyTimestamp)
            ->setPrintType($printType)
            ->setServicePosition($servicePosition)
            ->setPrintMarker($printMarker)
            ->setIsManuallyCreated($isManuallyCreated);
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemark
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemark
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemark
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
     * Get isAutoPrint value
     * @return bool|null
     */
    public function getIsAutoPrint(): ?bool
    {
        return $this->isAutoPrint;
    }
    /**
     * Set isAutoPrint value
     * @param bool $isAutoPrint
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemark
     */
    public function setIsAutoPrint(?bool $isAutoPrint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAutoPrint) && !is_bool($isAutoPrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAutoPrint, true), gettype($isAutoPrint)), __LINE__);
        }
        $this->isAutoPrint = $isAutoPrint;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemark
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemark
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemark
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemark
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemark
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemark
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
     * Get servicePosition value
     * @return int|null
     */
    public function getServicePosition(): ?int
    {
        return $this->servicePosition;
    }
    /**
     * Set servicePosition value
     * @param int $servicePosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemark
     */
    public function setServicePosition(?int $servicePosition = null): self
    {
        // validation for constraint: int
        if (!is_null($servicePosition) && !(is_int($servicePosition) || ctype_digit($servicePosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($servicePosition, true), gettype($servicePosition)), __LINE__);
        }
        $this->servicePosition = $servicePosition;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemark
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemark
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
}
