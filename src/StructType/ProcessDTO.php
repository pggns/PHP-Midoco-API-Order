<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessDTO StructType
 * @subpackage Structs
 */
class ProcessDTO extends AbstractStructBase
{
    /**
     * The isGui
     * @var bool|null
     */
    protected ?bool $isGui = null;
    /**
     * The processName
     * @var string|null
     */
    protected ?string $processName = null;
    /**
     * Constructor method for ProcessDTO
     * @uses ProcessDTO::setIsGui()
     * @uses ProcessDTO::setProcessName()
     * @param bool $isGui
     * @param string $processName
     */
    public function __construct(?bool $isGui = null, ?string $processName = null)
    {
        $this
            ->setIsGui($isGui)
            ->setProcessName($processName);
    }
    /**
     * Get isGui value
     * @return bool|null
     */
    public function getIsGui(): ?bool
    {
        return $this->isGui;
    }
    /**
     * Set isGui value
     * @param bool $isGui
     * @return \Pggns\MidocoApi\Order\StructType\ProcessDTO
     */
    public function setIsGui(?bool $isGui = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isGui) && !is_bool($isGui)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGui, true), gettype($isGui)), __LINE__);
        }
        $this->isGui = $isGui;
        
        return $this;
    }
    /**
     * Get processName value
     * @return string|null
     */
    public function getProcessName(): ?string
    {
        return $this->processName;
    }
    /**
     * Set processName value
     * @param string $processName
     * @return \Pggns\MidocoApi\Order\StructType\ProcessDTO
     */
    public function setProcessName(?string $processName = null): self
    {
        // validation for constraint: string
        if (!is_null($processName) && !is_string($processName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processName, true), gettype($processName)), __LINE__);
        }
        $this->processName = $processName;
        
        return $this;
    }
}
