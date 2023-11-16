<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerCommissionAssignDTO StructType
 * @subpackage Structs
 */
class CustomerCommissionAssignDTO extends AbstractStructBase
{
    /**
     * The commissionId
     * @var int|null
     */
    protected ?int $commissionId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The isPaidToCooperation
     * @var bool|null
     */
    protected ?bool $isPaidToCooperation = null;
    /**
     * The useCooperationTurnover
     * @var bool|null
     */
    protected ?bool $useCooperationTurnover = null;
    /**
     * Constructor method for CustomerCommissionAssignDTO
     * @uses CustomerCommissionAssignDTO::setCommissionId()
     * @uses CustomerCommissionAssignDTO::setCustomerId()
     * @uses CustomerCommissionAssignDTO::setIsPaidToCooperation()
     * @uses CustomerCommissionAssignDTO::setUseCooperationTurnover()
     * @param int $commissionId
     * @param int $customerId
     * @param bool $isPaidToCooperation
     * @param bool $useCooperationTurnover
     */
    public function __construct(?int $commissionId = null, ?int $customerId = null, ?bool $isPaidToCooperation = null, ?bool $useCooperationTurnover = null)
    {
        $this
            ->setCommissionId($commissionId)
            ->setCustomerId($customerId)
            ->setIsPaidToCooperation($isPaidToCooperation)
            ->setUseCooperationTurnover($useCooperationTurnover);
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerCommissionAssignDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerCommissionAssignDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerCommissionAssignDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\CustomerCommissionAssignDTO
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
