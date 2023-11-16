<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBonusEmployee StructType
 * @subpackage Structs
 */
class MidocoBonusEmployee extends BonusEmployeeDTO
{
    /**
     * The totalBonus
     * @var float|null
     */
    protected ?float $totalBonus = null;
    /**
     * The lineCounter
     * @var int|null
     */
    protected ?int $lineCounter = null;
    /**
     * The userName
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * Constructor method for MidocoBonusEmployee
     * @uses MidocoBonusEmployee::setTotalBonus()
     * @uses MidocoBonusEmployee::setLineCounter()
     * @uses MidocoBonusEmployee::setUserName()
     * @param float $totalBonus
     * @param int $lineCounter
     * @param string $userName
     */
    public function __construct(?float $totalBonus = null, ?int $lineCounter = null, ?string $userName = null)
    {
        $this
            ->setTotalBonus($totalBonus)
            ->setLineCounter($lineCounter)
            ->setUserName($userName);
    }
    /**
     * Get totalBonus value
     * @return float|null
     */
    public function getTotalBonus(): ?float
    {
        return $this->totalBonus;
    }
    /**
     * Set totalBonus value
     * @param float $totalBonus
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee
     */
    public function setTotalBonus(?float $totalBonus = null): self
    {
        // validation for constraint: float
        if (!is_null($totalBonus) && !(is_float($totalBonus) || is_numeric($totalBonus))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalBonus, true), gettype($totalBonus)), __LINE__);
        }
        $this->totalBonus = $totalBonus;
        
        return $this;
    }
    /**
     * Get lineCounter value
     * @return int|null
     */
    public function getLineCounter(): ?int
    {
        return $this->lineCounter;
    }
    /**
     * Set lineCounter value
     * @param int $lineCounter
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee
     */
    public function setLineCounter(?int $lineCounter = null): self
    {
        // validation for constraint: int
        if (!is_null($lineCounter) && !(is_int($lineCounter) || ctype_digit($lineCounter))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lineCounter, true), gettype($lineCounter)), __LINE__);
        }
        $this->lineCounter = $lineCounter;
        
        return $this;
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusEmployee
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        
        return $this;
    }
}
