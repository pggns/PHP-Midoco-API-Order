<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionDefinitionLevelDTO StructType
 * @subpackage Structs
 */
class CommissionDefinitionLevelDTO extends AbstractStructBase
{
    /**
     * The commissionId
     * @var int|null
     */
    protected ?int $commissionId = null;
    /**
     * The leftMargin
     * @var float|null
     */
    protected ?float $leftMargin = null;
    /**
     * The percent
     * @var float|null
     */
    protected ?float $percent = null;
    /**
     * The rightMargin
     * @var float|null
     */
    protected ?float $rightMargin = null;
    /**
     * Constructor method for CommissionDefinitionLevelDTO
     * @uses CommissionDefinitionLevelDTO::setCommissionId()
     * @uses CommissionDefinitionLevelDTO::setLeftMargin()
     * @uses CommissionDefinitionLevelDTO::setPercent()
     * @uses CommissionDefinitionLevelDTO::setRightMargin()
     * @param int $commissionId
     * @param float $leftMargin
     * @param float $percent
     * @param float $rightMargin
     */
    public function __construct(?int $commissionId = null, ?float $leftMargin = null, ?float $percent = null, ?float $rightMargin = null)
    {
        $this
            ->setCommissionId($commissionId)
            ->setLeftMargin($leftMargin)
            ->setPercent($percent)
            ->setRightMargin($rightMargin);
    }
    /**
     * Get commissionId value
     * @return int|null
     */
    public function getCommissionId(): ?int
    {
        return $this->commissionId;
    }
    /**
     * Set commissionId value
     * @param int $commissionId
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDefinitionLevelDTO
     */
    public function setCommissionId(?int $commissionId = null): self
    {
        // validation for constraint: int
        if (!is_null($commissionId) && !(is_int($commissionId) || ctype_digit($commissionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($commissionId, true), gettype($commissionId)), __LINE__);
        }
        $this->commissionId = $commissionId;
        
        return $this;
    }
    /**
     * Get leftMargin value
     * @return float|null
     */
    public function getLeftMargin(): ?float
    {
        return $this->leftMargin;
    }
    /**
     * Set leftMargin value
     * @param float $leftMargin
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDefinitionLevelDTO
     */
    public function setLeftMargin(?float $leftMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($leftMargin) && !(is_float($leftMargin) || is_numeric($leftMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($leftMargin, true), gettype($leftMargin)), __LINE__);
        }
        $this->leftMargin = $leftMargin;
        
        return $this;
    }
    /**
     * Get percent value
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }
    /**
     * Set percent value
     * @param float $percent
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDefinitionLevelDTO
     */
    public function setPercent(?float $percent = null): self
    {
        // validation for constraint: float
        if (!is_null($percent) && !(is_float($percent) || is_numeric($percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        $this->percent = $percent;
        
        return $this;
    }
    /**
     * Get rightMargin value
     * @return float|null
     */
    public function getRightMargin(): ?float
    {
        return $this->rightMargin;
    }
    /**
     * Set rightMargin value
     * @param float $rightMargin
     * @return \Pggns\MidocoApi\Order\StructType\CommissionDefinitionLevelDTO
     */
    public function setRightMargin(?float $rightMargin = null): self
    {
        // validation for constraint: float
        if (!is_null($rightMargin) && !(is_float($rightMargin) || is_numeric($rightMargin))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rightMargin, true), gettype($rightMargin)), __LINE__);
        }
        $this->rightMargin = $rightMargin;
        
        return $this;
    }
}
