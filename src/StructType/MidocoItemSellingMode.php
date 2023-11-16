<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoItemSellingMode StructType
 * @subpackage Structs
 */
class MidocoItemSellingMode extends MidocoItemSellingModeType
{
    /**
     * The atolIndex
     * @var int|null
     */
    protected ?int $atolIndex = null;
    /**
     * The atolPeriod
     * @var string|null
     */
    protected ?string $atolPeriod = null;
    /**
     * Constructor method for MidocoItemSellingMode
     * @uses MidocoItemSellingMode::setAtolIndex()
     * @uses MidocoItemSellingMode::setAtolPeriod()
     * @param int $atolIndex
     * @param string $atolPeriod
     */
    public function __construct(?int $atolIndex = null, ?string $atolPeriod = null)
    {
        $this
            ->setAtolIndex($atolIndex)
            ->setAtolPeriod($atolPeriod);
    }
    /**
     * Get atolIndex value
     * @return int|null
     */
    public function getAtolIndex(): ?int
    {
        return $this->atolIndex;
    }
    /**
     * Set atolIndex value
     * @param int $atolIndex
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode
     */
    public function setAtolIndex(?int $atolIndex = null): self
    {
        // validation for constraint: int
        if (!is_null($atolIndex) && !(is_int($atolIndex) || ctype_digit($atolIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($atolIndex, true), gettype($atolIndex)), __LINE__);
        }
        $this->atolIndex = $atolIndex;
        
        return $this;
    }
    /**
     * Get atolPeriod value
     * @return string|null
     */
    public function getAtolPeriod(): ?string
    {
        return $this->atolPeriod;
    }
    /**
     * Set atolPeriod value
     * @param string $atolPeriod
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingMode
     */
    public function setAtolPeriod(?string $atolPeriod = null): self
    {
        // validation for constraint: string
        if (!is_null($atolPeriod) && !is_string($atolPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($atolPeriod, true), gettype($atolPeriod)), __LINE__);
        }
        $this->atolPeriod = $atolPeriod;
        
        return $this;
    }
}
