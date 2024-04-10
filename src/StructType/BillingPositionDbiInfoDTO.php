<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingPositionDbiInfoDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingPositionDbiInfoDTO extends AbstractStructBase
{
    /**
     * The dbiInfo
     * @var string|null
     */
    protected ?string $dbiInfo = null;
    /**
     * The dbiKey
     * @var string|null
     */
    protected ?string $dbiKey = null;
    /**
     * The isManual
     * @var bool|null
     */
    protected ?bool $isManual = null;
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
     * The printingLabel
     * @var string|null
     */
    protected ?string $printingLabel = null;
    /**
     * Constructor method for BillingPositionDbiInfoDTO
     * @uses BillingPositionDbiInfoDTO::setDbiInfo()
     * @uses BillingPositionDbiInfoDTO::setDbiKey()
     * @uses BillingPositionDbiInfoDTO::setIsManual()
     * @uses BillingPositionDbiInfoDTO::setPosition()
     * @uses BillingPositionDbiInfoDTO::setPositionId()
     * @uses BillingPositionDbiInfoDTO::setPrintingLabel()
     * @param string $dbiInfo
     * @param string $dbiKey
     * @param bool $isManual
     * @param int $position
     * @param int $positionId
     * @param string $printingLabel
     */
    public function __construct(?string $dbiInfo = null, ?string $dbiKey = null, ?bool $isManual = null, ?int $position = null, ?int $positionId = null, ?string $printingLabel = null)
    {
        $this
            ->setDbiInfo($dbiInfo)
            ->setDbiKey($dbiKey)
            ->setIsManual($isManual)
            ->setPosition($position)
            ->setPositionId($positionId)
            ->setPrintingLabel($printingLabel);
    }
    /**
     * Get dbiInfo value
     * @return string|null
     */
    public function getDbiInfo(): ?string
    {
        return $this->dbiInfo;
    }
    /**
     * Set dbiInfo value
     * @param string $dbiInfo
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDbiInfoDTO
     */
    public function setDbiInfo(?string $dbiInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiInfo) && !is_string($dbiInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiInfo, true), gettype($dbiInfo)), __LINE__);
        }
        $this->dbiInfo = $dbiInfo;
        
        return $this;
    }
    /**
     * Get dbiKey value
     * @return string|null
     */
    public function getDbiKey(): ?string
    {
        return $this->dbiKey;
    }
    /**
     * Set dbiKey value
     * @param string $dbiKey
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDbiInfoDTO
     */
    public function setDbiKey(?string $dbiKey = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiKey) && !is_string($dbiKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiKey, true), gettype($dbiKey)), __LINE__);
        }
        $this->dbiKey = $dbiKey;
        
        return $this;
    }
    /**
     * Get isManual value
     * @return bool|null
     */
    public function getIsManual(): ?bool
    {
        return $this->isManual;
    }
    /**
     * Set isManual value
     * @param bool $isManual
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDbiInfoDTO
     */
    public function setIsManual(?bool $isManual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManual) && !is_bool($isManual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManual, true), gettype($isManual)), __LINE__);
        }
        $this->isManual = $isManual;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDbiInfoDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDbiInfoDTO
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
     * Get printingLabel value
     * @return string|null
     */
    public function getPrintingLabel(): ?string
    {
        return $this->printingLabel;
    }
    /**
     * Set printingLabel value
     * @param string $printingLabel
     * @return \Pggns\MidocoApi\Order\StructType\BillingPositionDbiInfoDTO
     */
    public function setPrintingLabel(?string $printingLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($printingLabel) && !is_string($printingLabel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printingLabel, true), gettype($printingLabel)), __LINE__);
        }
        $this->printingLabel = $printingLabel;
        
        return $this;
    }
}
