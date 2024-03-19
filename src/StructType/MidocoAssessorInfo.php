<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAssessorInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAssessorInfo extends InsurerInfoType
{
    /**
     * The insuranceCode
     * @var string|null
     */
    protected ?string $insuranceCode = null;
    /**
     * The isAssessor
     * @var bool|null
     */
    protected ?bool $isAssessor = null;
    /**
     * Constructor method for MidocoAssessorInfo
     * @uses MidocoAssessorInfo::setInsuranceCode()
     * @uses MidocoAssessorInfo::setIsAssessor()
     * @param string $insuranceCode
     * @param bool $isAssessor
     */
    public function __construct(?string $insuranceCode = null, ?bool $isAssessor = null)
    {
        $this
            ->setInsuranceCode($insuranceCode)
            ->setIsAssessor($isAssessor);
    }
    /**
     * Get insuranceCode value
     * @return string|null
     */
    public function getInsuranceCode(): ?string
    {
        return $this->insuranceCode;
    }
    /**
     * Set insuranceCode value
     * @param string $insuranceCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAssessorInfo
     */
    public function setInsuranceCode(?string $insuranceCode = null): self
    {
        // validation for constraint: string
        if (!is_null($insuranceCode) && !is_string($insuranceCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceCode, true), gettype($insuranceCode)), __LINE__);
        }
        $this->insuranceCode = $insuranceCode;
        
        return $this;
    }
    /**
     * Get isAssessor value
     * @return bool|null
     */
    public function getIsAssessor(): ?bool
    {
        return $this->isAssessor;
    }
    /**
     * Set isAssessor value
     * @param bool $isAssessor
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAssessorInfo
     */
    public function setIsAssessor(?bool $isAssessor = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAssessor) && !is_bool($isAssessor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAssessor, true), gettype($isAssessor)), __LINE__);
        }
        $this->isAssessor = $isAssessor;
        
        return $this;
    }
}
