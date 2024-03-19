<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerCommission StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCustomerCommission extends CommissionDefinitionDTO
{
    /**
     * The isPaidToCooperation
     * @var bool|null
     */
    protected ?bool $isPaidToCooperation = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The isInherited
     * @var bool|null
     */
    protected ?bool $isInherited = null;
    /**
     * The useCooperationTurnover
     * @var bool|null
     */
    protected ?bool $useCooperationTurnover = null;
    /**
     * Constructor method for MidocoCustomerCommission
     * @uses MidocoCustomerCommission::setIsPaidToCooperation()
     * @uses MidocoCustomerCommission::setCustomerId()
     * @uses MidocoCustomerCommission::setIsInherited()
     * @uses MidocoCustomerCommission::setUseCooperationTurnover()
     * @param bool $isPaidToCooperation
     * @param int $customerId
     * @param bool $isInherited
     * @param bool $useCooperationTurnover
     */
    public function __construct(?bool $isPaidToCooperation = null, ?int $customerId = null, ?bool $isInherited = null, ?bool $useCooperationTurnover = null)
    {
        $this
            ->setIsPaidToCooperation($isPaidToCooperation)
            ->setCustomerId($customerId)
            ->setIsInherited($isInherited)
            ->setUseCooperationTurnover($useCooperationTurnover);
    }
    /**
     * Get isPaidToCooperation value
     * @return bool|null
     */
    public function getIsPaidToCooperation(): ?bool
    {
        return $this->isPaidToCooperation;
    }
    /**
     * Set isPaidToCooperation value
     * @param bool $isPaidToCooperation
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerCommission
     */
    public function setIsPaidToCooperation(?bool $isPaidToCooperation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPaidToCooperation) && !is_bool($isPaidToCooperation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPaidToCooperation, true), gettype($isPaidToCooperation)), __LINE__);
        }
        $this->isPaidToCooperation = $isPaidToCooperation;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerCommission
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get isInherited value
     * @return bool|null
     */
    public function getIsInherited(): ?bool
    {
        return $this->isInherited;
    }
    /**
     * Set isInherited value
     * @param bool $isInherited
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerCommission
     */
    public function setIsInherited(?bool $isInherited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInherited) && !is_bool($isInherited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInherited, true), gettype($isInherited)), __LINE__);
        }
        $this->isInherited = $isInherited;
        
        return $this;
    }
    /**
     * Get useCooperationTurnover value
     * @return bool|null
     */
    public function getUseCooperationTurnover(): ?bool
    {
        return $this->useCooperationTurnover;
    }
    /**
     * Set useCooperationTurnover value
     * @param bool $useCooperationTurnover
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCustomerCommission
     */
    public function setUseCooperationTurnover(?bool $useCooperationTurnover = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useCooperationTurnover) && !is_bool($useCooperationTurnover)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useCooperationTurnover, true), gettype($useCooperationTurnover)), __LINE__);
        }
        $this->useCooperationTurnover = $useCooperationTurnover;
        
        return $this;
    }
}
