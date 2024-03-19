<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoRemarkType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoRemarkType extends AbstractStructBase
{
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * The printAllowed
     * @var bool|null
     */
    protected ?bool $printAllowed = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The servicePosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $servicePosition = null;
    /**
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
    /**
     * Constructor method for MidocoRemarkType
     * @uses MidocoRemarkType::setRemark()
     * @uses MidocoRemarkType::setPrintAllowed()
     * @uses MidocoRemarkType::setPrintType()
     * @uses MidocoRemarkType::setServicePosition()
     * @uses MidocoRemarkType::setPositionNo()
     * @param string $remark
     * @param bool $printAllowed
     * @param string $printType
     * @param int $servicePosition
     * @param int $positionNo
     */
    public function __construct(?string $remark = null, ?bool $printAllowed = null, ?string $printType = null, ?int $servicePosition = null, ?int $positionNo = null)
    {
        $this
            ->setRemark($remark)
            ->setPrintAllowed($printAllowed)
            ->setPrintType($printType)
            ->setServicePosition($servicePosition)
            ->setPositionNo($positionNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkType
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkType
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
