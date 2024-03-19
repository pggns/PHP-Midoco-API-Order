<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFeeType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoFeeType extends FeeDescriptorType
{
    /**
     * The isBonusAsIntegerForSearch
     * @var int|null
     */
    protected ?int $isBonusAsIntegerForSearch = null;
    /**
     * The timeBasedAsIntegerForSearch
     * @var int|null
     */
    protected ?int $timeBasedAsIntegerForSearch = null;
    /**
     * The constraintOrgunitAsInteger
     * @var int|null
     */
    protected ?int $constraintOrgunitAsInteger = null;
    /**
     * The isInheritance
     * @var bool|null
     */
    protected ?bool $isInheritance = null;
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * Constructor method for MidocoFeeType
     * @uses MidocoFeeType::setIsBonusAsIntegerForSearch()
     * @uses MidocoFeeType::setTimeBasedAsIntegerForSearch()
     * @uses MidocoFeeType::setConstraintOrgunitAsInteger()
     * @uses MidocoFeeType::setIsInheritance()
     * @uses MidocoFeeType::setOrgunit()
     * @param int $isBonusAsIntegerForSearch
     * @param int $timeBasedAsIntegerForSearch
     * @param int $constraintOrgunitAsInteger
     * @param bool $isInheritance
     * @param string $orgunit
     */
    public function __construct(?int $isBonusAsIntegerForSearch = null, ?int $timeBasedAsIntegerForSearch = null, ?int $constraintOrgunitAsInteger = null, ?bool $isInheritance = null, ?string $orgunit = null)
    {
        $this
            ->setIsBonusAsIntegerForSearch($isBonusAsIntegerForSearch)
            ->setTimeBasedAsIntegerForSearch($timeBasedAsIntegerForSearch)
            ->setConstraintOrgunitAsInteger($constraintOrgunitAsInteger)
            ->setIsInheritance($isInheritance)
            ->setOrgunit($orgunit);
    }
    /**
     * Get isBonusAsIntegerForSearch value
     * @return int|null
     */
    public function getIsBonusAsIntegerForSearch(): ?int
    {
        return $this->isBonusAsIntegerForSearch;
    }
    /**
     * Set isBonusAsIntegerForSearch value
     * @param int $isBonusAsIntegerForSearch
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeType
     */
    public function setIsBonusAsIntegerForSearch(?int $isBonusAsIntegerForSearch = null): self
    {
        // validation for constraint: int
        if (!is_null($isBonusAsIntegerForSearch) && !(is_int($isBonusAsIntegerForSearch) || ctype_digit($isBonusAsIntegerForSearch))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($isBonusAsIntegerForSearch, true), gettype($isBonusAsIntegerForSearch)), __LINE__);
        }
        $this->isBonusAsIntegerForSearch = $isBonusAsIntegerForSearch;
        
        return $this;
    }
    /**
     * Get timeBasedAsIntegerForSearch value
     * @return int|null
     */
    public function getTimeBasedAsIntegerForSearch(): ?int
    {
        return $this->timeBasedAsIntegerForSearch;
    }
    /**
     * Set timeBasedAsIntegerForSearch value
     * @param int $timeBasedAsIntegerForSearch
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeType
     */
    public function setTimeBasedAsIntegerForSearch(?int $timeBasedAsIntegerForSearch = null): self
    {
        // validation for constraint: int
        if (!is_null($timeBasedAsIntegerForSearch) && !(is_int($timeBasedAsIntegerForSearch) || ctype_digit($timeBasedAsIntegerForSearch))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeBasedAsIntegerForSearch, true), gettype($timeBasedAsIntegerForSearch)), __LINE__);
        }
        $this->timeBasedAsIntegerForSearch = $timeBasedAsIntegerForSearch;
        
        return $this;
    }
    /**
     * Get constraintOrgunitAsInteger value
     * @return int|null
     */
    public function getConstraintOrgunitAsInteger(): ?int
    {
        return $this->constraintOrgunitAsInteger;
    }
    /**
     * Set constraintOrgunitAsInteger value
     * @param int $constraintOrgunitAsInteger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeType
     */
    public function setConstraintOrgunitAsInteger(?int $constraintOrgunitAsInteger = null): self
    {
        // validation for constraint: int
        if (!is_null($constraintOrgunitAsInteger) && !(is_int($constraintOrgunitAsInteger) || ctype_digit($constraintOrgunitAsInteger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($constraintOrgunitAsInteger, true), gettype($constraintOrgunitAsInteger)), __LINE__);
        }
        $this->constraintOrgunitAsInteger = $constraintOrgunitAsInteger;
        
        return $this;
    }
    /**
     * Get isInheritance value
     * @return bool|null
     */
    public function getIsInheritance(): ?bool
    {
        return $this->isInheritance;
    }
    /**
     * Set isInheritance value
     * @param bool $isInheritance
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeType
     */
    public function setIsInheritance(?bool $isInheritance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInheritance) && !is_bool($isInheritance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInheritance, true), gettype($isInheritance)), __LINE__);
        }
        $this->isInheritance = $isInheritance;
        
        return $this;
    }
    /**
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFeeType
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
}
