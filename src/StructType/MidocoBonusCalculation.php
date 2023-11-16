<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBonusCalculation StructType
 * @subpackage Structs
 */
class MidocoBonusCalculation extends BonusCalculationDTO
{
    /**
     * The bonusEmployee
     * @var int|null
     */
    protected ?int $bonusEmployee = null;
    /**
     * Constructor method for MidocoBonusCalculation
     * @uses MidocoBonusCalculation::setBonusEmployee()
     * @param int $bonusEmployee
     */
    public function __construct(?int $bonusEmployee = null)
    {
        $this
            ->setBonusEmployee($bonusEmployee);
    }
    /**
     * Get bonusEmployee value
     * @return int|null
     */
    public function getBonusEmployee(): ?int
    {
        return $this->bonusEmployee;
    }
    /**
     * Set bonusEmployee value
     * @param int $bonusEmployee
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusCalculation
     */
    public function setBonusEmployee(?int $bonusEmployee = null): self
    {
        // validation for constraint: int
        if (!is_null($bonusEmployee) && !(is_int($bonusEmployee) || ctype_digit($bonusEmployee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bonusEmployee, true), gettype($bonusEmployee)), __LINE__);
        }
        $this->bonusEmployee = $bonusEmployee;
        
        return $this;
    }
}
