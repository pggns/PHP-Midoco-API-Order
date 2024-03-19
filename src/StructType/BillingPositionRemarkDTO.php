<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingPositionRemarkDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingPositionRemarkDTO extends AbstractStructBase
{
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The positionId
     * @var int|null
     */
    protected ?int $positionId = null;
    /**
     * The printRemark
     * @var bool|null
     */
    protected ?bool $printRemark = null;
    /**
     * The remark
     * @var string|null
     */
    protected ?string $remark = null;
    /**
     * Constructor method for BillingPositionRemarkDTO
     * @uses BillingPositionRemarkDTO::setPosition()
     * @uses BillingPositionRemarkDTO::setPositionId()
     * @uses BillingPositionRemarkDTO::setPrintRemark()
     * @uses BillingPositionRemarkDTO::setRemark()
     * @param int $position
     * @param int $positionId
     * @param bool $printRemark
     * @param string $remark
     */
    public function __construct(?int $position = null, ?int $positionId = null, ?bool $printRemark = null, ?string $remark = null)
    {
        $this
            ->setPosition($position)
            ->setPositionId($positionId)
            ->setPrintRemark($printRemark)
            ->setRemark($remark);
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionRemarkDTO
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
     * Get positionId value
     * @return int|null
     */
    public function getPositionId(): ?int
    {
        return $this->positionId;
    }
    /**
     * Set positionId value
     * @param int $positionId
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionRemarkDTO
     */
    public function setPositionId(?int $positionId = null): self
    {
        // validation for constraint: int
        if (!is_null($positionId) && !(is_int($positionId) || ctype_digit($positionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionId, true), gettype($positionId)), __LINE__);
        }
        $this->positionId = $positionId;
        
        return $this;
    }
    /**
     * Get printRemark value
     * @return bool|null
     */
    public function getPrintRemark(): ?bool
    {
        return $this->printRemark;
    }
    /**
     * Set printRemark value
     * @param bool $printRemark
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionRemarkDTO
     */
    public function setPrintRemark(?bool $printRemark = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printRemark) && !is_bool($printRemark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printRemark, true), gettype($printRemark)), __LINE__);
        }
        $this->printRemark = $printRemark;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionRemarkDTO
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
