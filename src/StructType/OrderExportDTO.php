<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderExportDTO StructType
 * @subpackage Structs
 */
class OrderExportDTO extends AbstractStructBase
{
    /**
     * The exportSystem
     * @var string|null
     */
    protected ?string $exportSystem = null;
    /**
     * The exportTime
     * @var string|null
     */
    protected ?string $exportTime = null;
    /**
     * The markedForExport
     * @var bool|null
     */
    protected ?bool $markedForExport = null;
    /**
     * The markedForExportTime
     * @var string|null
     */
    protected ?string $markedForExportTime = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for OrderExportDTO
     * @uses OrderExportDTO::setExportSystem()
     * @uses OrderExportDTO::setExportTime()
     * @uses OrderExportDTO::setMarkedForExport()
     * @uses OrderExportDTO::setMarkedForExportTime()
     * @uses OrderExportDTO::setOrderId()
     * @uses OrderExportDTO::setOrderNo()
     * @uses OrderExportDTO::setUnitName()
     * @param string $exportSystem
     * @param string $exportTime
     * @param bool $markedForExport
     * @param string $markedForExportTime
     * @param int $orderId
     * @param int $orderNo
     * @param string $unitName
     */
    public function __construct(?string $exportSystem = null, ?string $exportTime = null, ?bool $markedForExport = null, ?string $markedForExportTime = null, ?int $orderId = null, ?int $orderNo = null, ?string $unitName = null)
    {
        $this
            ->setExportSystem($exportSystem)
            ->setExportTime($exportTime)
            ->setMarkedForExport($markedForExport)
            ->setMarkedForExportTime($markedForExportTime)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setUnitName($unitName);
    }
    /**
     * Get exportSystem value
     * @return string|null
     */
    public function getExportSystem(): ?string
    {
        return $this->exportSystem;
    }
    /**
     * Set exportSystem value
     * @param string $exportSystem
     * @return \Pggns\MidocoApi\Order\StructType\OrderExportDTO
     */
    public function setExportSystem(?string $exportSystem = null): self
    {
        // validation for constraint: string
        if (!is_null($exportSystem) && !is_string($exportSystem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportSystem, true), gettype($exportSystem)), __LINE__);
        }
        $this->exportSystem = $exportSystem;
        
        return $this;
    }
    /**
     * Get exportTime value
     * @return string|null
     */
    public function getExportTime(): ?string
    {
        return $this->exportTime;
    }
    /**
     * Set exportTime value
     * @param string $exportTime
     * @return \Pggns\MidocoApi\Order\StructType\OrderExportDTO
     */
    public function setExportTime(?string $exportTime = null): self
    {
        // validation for constraint: string
        if (!is_null($exportTime) && !is_string($exportTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportTime, true), gettype($exportTime)), __LINE__);
        }
        $this->exportTime = $exportTime;
        
        return $this;
    }
    /**
     * Get markedForExport value
     * @return bool|null
     */
    public function getMarkedForExport(): ?bool
    {
        return $this->markedForExport;
    }
    /**
     * Set markedForExport value
     * @param bool $markedForExport
     * @return \Pggns\MidocoApi\Order\StructType\OrderExportDTO
     */
    public function setMarkedForExport(?bool $markedForExport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($markedForExport) && !is_bool($markedForExport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($markedForExport, true), gettype($markedForExport)), __LINE__);
        }
        $this->markedForExport = $markedForExport;
        
        return $this;
    }
    /**
     * Get markedForExportTime value
     * @return string|null
     */
    public function getMarkedForExportTime(): ?string
    {
        return $this->markedForExportTime;
    }
    /**
     * Set markedForExportTime value
     * @param string $markedForExportTime
     * @return \Pggns\MidocoApi\Order\StructType\OrderExportDTO
     */
    public function setMarkedForExportTime(?string $markedForExportTime = null): self
    {
        // validation for constraint: string
        if (!is_null($markedForExportTime) && !is_string($markedForExportTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($markedForExportTime, true), gettype($markedForExportTime)), __LINE__);
        }
        $this->markedForExportTime = $markedForExportTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderExportDTO
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
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\OrderExportDTO
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\OrderExportDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
