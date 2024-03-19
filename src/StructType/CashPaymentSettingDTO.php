<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashPaymentSettingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CashPaymentSettingDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The hint
     * @var string|null
     */
    protected ?string $hint = null;
    /**
     * The isActive
     * @var bool|null
     */
    protected ?bool $isActive = null;
    /**
     * The isRightNeeded
     * @var bool|null
     */
    protected ?bool $isRightNeeded = null;
    /**
     * The refNoNeeded
     * @var bool|null
     */
    protected ?bool $refNoNeeded = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for CashPaymentSettingDTO
     * @uses CashPaymentSettingDTO::setAccountId()
     * @uses CashPaymentSettingDTO::setHint()
     * @uses CashPaymentSettingDTO::setIsActive()
     * @uses CashPaymentSettingDTO::setIsRightNeeded()
     * @uses CashPaymentSettingDTO::setRefNoNeeded()
     * @uses CashPaymentSettingDTO::setTypeId()
     * @param string $accountId
     * @param string $hint
     * @param bool $isActive
     * @param bool $isRightNeeded
     * @param bool $refNoNeeded
     * @param string $typeId
     */
    public function __construct(?string $accountId = null, ?string $hint = null, ?bool $isActive = null, ?bool $isRightNeeded = null, ?bool $refNoNeeded = null, ?string $typeId = null)
    {
        $this
            ->setAccountId($accountId)
            ->setHint($hint)
            ->setIsActive($isActive)
            ->setIsRightNeeded($isRightNeeded)
            ->setRefNoNeeded($refNoNeeded)
            ->setTypeId($typeId);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get hint value
     * @return string|null
     */
    public function getHint(): ?string
    {
        return $this->hint;
    }
    /**
     * Set hint value
     * @param string $hint
     * @return \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO
     */
    public function setHint(?string $hint = null): self
    {
        // validation for constraint: string
        if (!is_null($hint) && !is_string($hint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hint, true), gettype($hint)), __LINE__);
        }
        $this->hint = $hint;
        
        return $this;
    }
    /**
     * Get isActive value
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }
    /**
     * Set isActive value
     * @param bool $isActive
     * @return \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO
     */
    public function setIsActive(?bool $isActive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isActive) && !is_bool($isActive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isActive, true), gettype($isActive)), __LINE__);
        }
        $this->isActive = $isActive;
        
        return $this;
    }
    /**
     * Get isRightNeeded value
     * @return bool|null
     */
    public function getIsRightNeeded(): ?bool
    {
        return $this->isRightNeeded;
    }
    /**
     * Set isRightNeeded value
     * @param bool $isRightNeeded
     * @return \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO
     */
    public function setIsRightNeeded(?bool $isRightNeeded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRightNeeded) && !is_bool($isRightNeeded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRightNeeded, true), gettype($isRightNeeded)), __LINE__);
        }
        $this->isRightNeeded = $isRightNeeded;
        
        return $this;
    }
    /**
     * Get refNoNeeded value
     * @return bool|null
     */
    public function getRefNoNeeded(): ?bool
    {
        return $this->refNoNeeded;
    }
    /**
     * Set refNoNeeded value
     * @param bool $refNoNeeded
     * @return \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO
     */
    public function setRefNoNeeded(?bool $refNoNeeded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($refNoNeeded) && !is_bool($refNoNeeded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refNoNeeded, true), gettype($refNoNeeded)), __LINE__);
        }
        $this->refNoNeeded = $refNoNeeded;
        
        return $this;
    }
    /**
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\CashPaymentSettingDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}
