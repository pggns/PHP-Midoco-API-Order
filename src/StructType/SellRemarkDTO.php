<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellRemarkDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SellRemarkDTO extends AbstractStructBase
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
     * The importHashvalue
     * @var int|null
     */
    protected ?int $importHashvalue = null;
    /**
     * The isAutoPrint
     * @var bool|null
     */
    protected ?bool $isAutoPrint = null;
    /**
     * The isManuallyCreated
     * @var bool|null
     */
    protected ?bool $isManuallyCreated = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
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
     * The notifyDate
     * @var string|null
     */
    protected ?string $notifyDate = null;
    /**
     * The notifyUnit
     * @var string|null
     */
    protected ?string $notifyUnit = null;
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
     * The servicePosition
     * @var int|null
     */
    protected ?int $servicePosition = null;
    /**
     * The tokenChecked
     * @var bool|null
     */
    protected ?bool $tokenChecked = null;
    /**
     * Constructor method for SellRemarkDTO
     * @uses SellRemarkDTO::setCreationTimestamp()
     * @uses SellRemarkDTO::setCreationUser()
     * @uses SellRemarkDTO::setImportHashvalue()
     * @uses SellRemarkDTO::setIsAutoPrint()
     * @uses SellRemarkDTO::setIsManuallyCreated()
     * @uses SellRemarkDTO::setItemId()
     * @uses SellRemarkDTO::setModifyTimestamp()
     * @uses SellRemarkDTO::setModifyUser()
     * @uses SellRemarkDTO::setNotifyDate()
     * @uses SellRemarkDTO::setNotifyUnit()
     * @uses SellRemarkDTO::setPositionNo()
     * @uses SellRemarkDTO::setPrintAllowed()
     * @uses SellRemarkDTO::setPrintMarker()
     * @uses SellRemarkDTO::setPrintType()
     * @uses SellRemarkDTO::setRemark()
     * @uses SellRemarkDTO::setServicePosition()
     * @uses SellRemarkDTO::setTokenChecked()
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param int $importHashvalue
     * @param bool $isAutoPrint
     * @param bool $isManuallyCreated
     * @param int $itemId
     * @param string $modifyTimestamp
     * @param int $modifyUser
     * @param string $notifyDate
     * @param string $notifyUnit
     * @param int $positionNo
     * @param bool $printAllowed
     * @param string $printMarker
     * @param string $printType
     * @param string $remark
     * @param int $servicePosition
     * @param bool $tokenChecked
     */
    public function __construct(?string $creationTimestamp = null, ?int $creationUser = null, ?int $importHashvalue = null, ?bool $isAutoPrint = null, ?bool $isManuallyCreated = null, ?int $itemId = null, ?string $modifyTimestamp = null, ?int $modifyUser = null, ?string $notifyDate = null, ?string $notifyUnit = null, ?int $positionNo = null, ?bool $printAllowed = null, ?string $printMarker = null, ?string $printType = null, ?string $remark = null, ?int $servicePosition = null, ?bool $tokenChecked = null)
    {
        $this
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setImportHashvalue($importHashvalue)
            ->setIsAutoPrint($isAutoPrint)
            ->setIsManuallyCreated($isManuallyCreated)
            ->setItemId($itemId)
            ->setModifyTimestamp($modifyTimestamp)
            ->setModifyUser($modifyUser)
            ->setNotifyDate($notifyDate)
            ->setNotifyUnit($notifyUnit)
            ->setPositionNo($positionNo)
            ->setPrintAllowed($printAllowed)
            ->setPrintMarker($printMarker)
            ->setPrintType($printType)
            ->setRemark($remark)
            ->setServicePosition($servicePosition)
            ->setTokenChecked($tokenChecked);
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
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
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
     * Get importHashvalue value
     * @return int|null
     */
    public function getImportHashvalue(): ?int
    {
        return $this->importHashvalue;
    }
    /**
     * Set importHashvalue value
     * @param int $importHashvalue
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
     */
    public function setImportHashvalue(?int $importHashvalue = null): self
    {
        // validation for constraint: int
        if (!is_null($importHashvalue) && !(is_int($importHashvalue) || ctype_digit($importHashvalue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($importHashvalue, true), gettype($importHashvalue)), __LINE__);
        }
        $this->importHashvalue = $importHashvalue;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
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
     * Get notifyDate value
     * @return string|null
     */
    public function getNotifyDate(): ?string
    {
        return $this->notifyDate;
    }
    /**
     * Set notifyDate value
     * @param string $notifyDate
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
     */
    public function setNotifyDate(?string $notifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($notifyDate) && !is_string($notifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notifyDate, true), gettype($notifyDate)), __LINE__);
        }
        $this->notifyDate = $notifyDate;
        
        return $this;
    }
    /**
     * Get notifyUnit value
     * @return string|null
     */
    public function getNotifyUnit(): ?string
    {
        return $this->notifyUnit;
    }
    /**
     * Set notifyUnit value
     * @param string $notifyUnit
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
     */
    public function setNotifyUnit(?string $notifyUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($notifyUnit) && !is_string($notifyUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notifyUnit, true), gettype($notifyUnit)), __LINE__);
        }
        $this->notifyUnit = $notifyUnit;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
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
     * Get tokenChecked value
     * @return bool|null
     */
    public function getTokenChecked(): ?bool
    {
        return $this->tokenChecked;
    }
    /**
     * Set tokenChecked value
     * @param bool $tokenChecked
     * @return \Pggns\MidocoApi\Order\StructType\SellRemarkDTO
     */
    public function setTokenChecked(?bool $tokenChecked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tokenChecked) && !is_bool($tokenChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tokenChecked, true), gettype($tokenChecked)), __LINE__);
        }
        $this->tokenChecked = $tokenChecked;
        
        return $this;
    }
}
