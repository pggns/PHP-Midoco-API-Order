<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebitorAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DebitorAssignDTO extends AbstractStructBase
{
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The forCompany
     * @var bool|null
     */
    protected ?bool $forCompany = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for DebitorAssignDTO
     * @uses DebitorAssignDTO::setDebitorNo()
     * @uses DebitorAssignDTO::setForCompany()
     * @uses DebitorAssignDTO::setUnitName()
     * @param string $debitorNo
     * @param bool $forCompany
     * @param string $unitName
     */
    public function __construct(?string $debitorNo = null, ?bool $forCompany = null, ?string $unitName = null)
    {
        $this
            ->setDebitorNo($debitorNo)
            ->setForCompany($forCompany)
            ->setUnitName($unitName);
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAssignDTO
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get forCompany value
     * @return bool|null
     */
    public function getForCompany(): ?bool
    {
        return $this->forCompany;
    }
    /**
     * Set forCompany value
     * @param bool $forCompany
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAssignDTO
     */
    public function setForCompany(?bool $forCompany = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forCompany) && !is_bool($forCompany)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forCompany, true), gettype($forCompany)), __LINE__);
        }
        $this->forCompany = $forCompany;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAssignDTO
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
