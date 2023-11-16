<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerkDataPrintDTO StructType
 * @subpackage Structs
 */
class VerkDataPrintDTO extends AbstractStructBase
{
    /**
     * The dbiKey
     * @var string|null
     */
    protected ?string $dbiKey = null;
    /**
     * The hideInPrint
     * @var bool|null
     */
    protected ?bool $hideInPrint = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for VerkDataPrintDTO
     * @uses VerkDataPrintDTO::setDbiKey()
     * @uses VerkDataPrintDTO::setHideInPrint()
     * @uses VerkDataPrintDTO::setUnitName()
     * @param string $dbiKey
     * @param bool $hideInPrint
     * @param string $unitName
     */
    public function __construct(?string $dbiKey = null, ?bool $hideInPrint = null, ?string $unitName = null)
    {
        $this
            ->setDbiKey($dbiKey)
            ->setHideInPrint($hideInPrint)
            ->setUnitName($unitName);
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
     * @return \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO
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
     * Get hideInPrint value
     * @return bool|null
     */
    public function getHideInPrint(): ?bool
    {
        return $this->hideInPrint;
    }
    /**
     * Set hideInPrint value
     * @param bool $hideInPrint
     * @return \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO
     */
    public function setHideInPrint(?bool $hideInPrint = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hideInPrint) && !is_bool($hideInPrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hideInPrint, true), gettype($hideInPrint)), __LINE__);
        }
        $this->hideInPrint = $hideInPrint;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VerkDataPrintDTO
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
