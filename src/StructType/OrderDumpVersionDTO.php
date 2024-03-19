<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderDumpVersionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderDumpVersionDTO extends AbstractStructBase
{
    /**
     * The exportTime
     * @var string|null
     */
    protected ?string $exportTime = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for OrderDumpVersionDTO
     * @uses OrderDumpVersionDTO::setExportTime()
     * @uses OrderDumpVersionDTO::setInternalVersion()
     * @uses OrderDumpVersionDTO::setOrderId()
     * @uses OrderDumpVersionDTO::setUnitName()
     * @param string $exportTime
     * @param int $internalVersion
     * @param int $orderId
     * @param string $unitName
     */
    public function __construct(?string $exportTime = null, ?int $internalVersion = null, ?int $orderId = null, ?string $unitName = null)
    {
        $this
            ->setExportTime($exportTime)
            ->setInternalVersion($internalVersion)
            ->setOrderId($orderId)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDumpVersionDTO
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
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\OrderDumpVersionDTO
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDumpVersionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\OrderDumpVersionDTO
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
