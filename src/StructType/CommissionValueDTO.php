<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommissionValueDTO StructType
 * @subpackage Structs
 */
class CommissionValueDTO extends AbstractStructBase
{
    /**
     * The commissionId
     * @var string|null
     */
    protected ?string $commissionId = null;
    /**
     * The fix
     * @var float|null
     */
    protected ?float $fix = null;
    /**
     * The levelId
     * @var string|null
     */
    protected ?string $levelId = null;
    /**
     * The multiplyPax
     * @var bool|null
     */
    protected ?bool $multiplyPax = null;
    /**
     * The passbackPercent
     * @var float|null
     */
    protected ?float $passbackPercent = null;
    /**
     * The percent
     * @var float|null
     */
    protected ?float $percent = null;
    /**
     * Constructor method for CommissionValueDTO
     * @uses CommissionValueDTO::setCommissionId()
     * @uses CommissionValueDTO::setFix()
     * @uses CommissionValueDTO::setLevelId()
     * @uses CommissionValueDTO::setMultiplyPax()
     * @uses CommissionValueDTO::setPassbackPercent()
     * @uses CommissionValueDTO::setPercent()
     * @param string $commissionId
     * @param float $fix
     * @param string $levelId
     * @param bool $multiplyPax
     * @param float $passbackPercent
     * @param float $percent
     */
    public function __construct(?string $commissionId = null, ?float $fix = null, ?string $levelId = null, ?bool $multiplyPax = null, ?float $passbackPercent = null, ?float $percent = null)
    {
        $this
            ->setCommissionId($commissionId)
            ->setFix($fix)
            ->setLevelId($levelId)
            ->setMultiplyPax($multiplyPax)
            ->setPassbackPercent($passbackPercent)
            ->setPercent($percent);
    }
    /**
     * Get commissionId value
     * @return string|null
     */
    public function getCommissionId(): ?string
    {
        return $this->commissionId;
    }
    /**
     * Set commissionId value
     * @param string $commissionId
     * @return \Pggns\MidocoApi\Order\StructType\CommissionValueDTO
     */
    public function setCommissionId(?string $commissionId = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionId) && !is_string($commissionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionId, true), gettype($commissionId)), __LINE__);
        }
        $this->commissionId = $commissionId;
        
        return $this;
    }
    /**
     * Get fix value
     * @return float|null
     */
    public function getFix(): ?float
    {
        return $this->fix;
    }
    /**
     * Set fix value
     * @param float $fix
     * @return \Pggns\MidocoApi\Order\StructType\CommissionValueDTO
     */
    public function setFix(?float $fix = null): self
    {
        // validation for constraint: float
        if (!is_null($fix) && !(is_float($fix) || is_numeric($fix))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fix, true), gettype($fix)), __LINE__);
        }
        $this->fix = $fix;
        
        return $this;
    }
    /**
     * Get levelId value
     * @return string|null
     */
    public function getLevelId(): ?string
    {
        return $this->levelId;
    }
    /**
     * Set levelId value
     * @param string $levelId
     * @return \Pggns\MidocoApi\Order\StructType\CommissionValueDTO
     */
    public function setLevelId(?string $levelId = null): self
    {
        // validation for constraint: string
        if (!is_null($levelId) && !is_string($levelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($levelId, true), gettype($levelId)), __LINE__);
        }
        $this->levelId = $levelId;
        
        return $this;
    }
    /**
     * Get multiplyPax value
     * @return bool|null
     */
    public function getMultiplyPax(): ?bool
    {
        return $this->multiplyPax;
    }
    /**
     * Set multiplyPax value
     * @param bool $multiplyPax
     * @return \Pggns\MidocoApi\Order\StructType\CommissionValueDTO
     */
    public function setMultiplyPax(?bool $multiplyPax = null): self
    {
        // validation for constraint: boolean
        if (!is_null($multiplyPax) && !is_bool($multiplyPax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($multiplyPax, true), gettype($multiplyPax)), __LINE__);
        }
        $this->multiplyPax = $multiplyPax;
        
        return $this;
    }
    /**
     * Get passbackPercent value
     * @return float|null
     */
    public function getPassbackPercent(): ?float
    {
        return $this->passbackPercent;
    }
    /**
     * Set passbackPercent value
     * @param float $passbackPercent
     * @return \Pggns\MidocoApi\Order\StructType\CommissionValueDTO
     */
    public function setPassbackPercent(?float $passbackPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($passbackPercent) && !(is_float($passbackPercent) || is_numeric($passbackPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($passbackPercent, true), gettype($passbackPercent)), __LINE__);
        }
        $this->passbackPercent = $passbackPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CommissionValueDTO
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
}
