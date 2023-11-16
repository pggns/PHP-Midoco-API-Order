<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierSettlPaymentCondition StructType
 * @subpackage Structs
 */
class MidocoSupplierSettlPaymentCondition extends SupplierSettlPaymentCondDTO
{
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
     * The isHistorical
     * @var bool|null
     */
    protected ?bool $isHistorical = null;
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * The validCreationTravel
     * @var string|null
     */
    protected ?string $validCreationTravel = null;
    /**
     * Constructor method for MidocoSupplierSettlPaymentCondition
     * @uses MidocoSupplierSettlPaymentCondition::setIsInheritance()
     * @uses MidocoSupplierSettlPaymentCondition::setOrgunit()
     * @uses MidocoSupplierSettlPaymentCondition::setIsHistorical()
     * @uses MidocoSupplierSettlPaymentCondition::setValidDate()
     * @uses MidocoSupplierSettlPaymentCondition::setValidCreationTravel()
     * @param bool $isInheritance
     * @param string $orgunit
     * @param bool $isHistorical
     * @param string $validDate
     * @param string $validCreationTravel
     */
    public function __construct(?bool $isInheritance = null, ?string $orgunit = null, ?bool $isHistorical = null, ?string $validDate = null, ?string $validCreationTravel = null)
    {
        $this
            ->setIsInheritance($isInheritance)
            ->setOrgunit($orgunit)
            ->setIsHistorical($isHistorical)
            ->setValidDate($validDate)
            ->setValidCreationTravel($validCreationTravel);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition
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
    /**
     * Get isHistorical value
     * @return bool|null
     */
    public function getIsHistorical(): ?bool
    {
        return $this->isHistorical;
    }
    /**
     * Set isHistorical value
     * @param bool $isHistorical
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition
     */
    public function setIsHistorical(?bool $isHistorical = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isHistorical) && !is_bool($isHistorical)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isHistorical, true), gettype($isHistorical)), __LINE__);
        }
        $this->isHistorical = $isHistorical;
        
        return $this;
    }
    /**
     * Get validDate value
     * @return string|null
     */
    public function getValidDate(): ?string
    {
        return $this->validDate;
    }
    /**
     * Set validDate value
     * @param string $validDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition
     */
    public function setValidDate(?string $validDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validDate) && !is_string($validDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validDate, true), gettype($validDate)), __LINE__);
        }
        $this->validDate = $validDate;
        
        return $this;
    }
    /**
     * Get validCreationTravel value
     * @return string|null
     */
    public function getValidCreationTravel(): ?string
    {
        return $this->validCreationTravel;
    }
    /**
     * Set validCreationTravel value
     * @param string $validCreationTravel
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierSettlPaymentCondition
     */
    public function setValidCreationTravel(?string $validCreationTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($validCreationTravel) && !is_string($validCreationTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validCreationTravel, true), gettype($validCreationTravel)), __LINE__);
        }
        $this->validCreationTravel = $validCreationTravel;
        
        return $this;
    }
}
