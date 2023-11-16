<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VirtualAccountDTO StructType
 * @subpackage Structs
 */
class VirtualAccountDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The usedAccount
     * @var string|null
     */
    protected ?string $usedAccount = null;
    /**
     * The virtualAccountId
     * @var int|null
     */
    protected ?int $virtualAccountId = null;
    /**
     * Constructor method for VirtualAccountDTO
     * @uses VirtualAccountDTO::setAccountId()
     * @uses VirtualAccountDTO::setPlanId()
     * @uses VirtualAccountDTO::setProductType()
     * @uses VirtualAccountDTO::setUsedAccount()
     * @uses VirtualAccountDTO::setVirtualAccountId()
     * @param string $accountId
     * @param string $planId
     * @param string $productType
     * @param string $usedAccount
     * @param int $virtualAccountId
     */
    public function __construct(?string $accountId = null, ?string $planId = null, ?string $productType = null, ?string $usedAccount = null, ?int $virtualAccountId = null)
    {
        $this
            ->setAccountId($accountId)
            ->setPlanId($planId)
            ->setProductType($productType)
            ->setUsedAccount($usedAccount)
            ->setVirtualAccountId($virtualAccountId);
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
     * @return \Pggns\MidocoApi\Order\StructType\VirtualAccountDTO
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
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Order\StructType\VirtualAccountDTO
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Pggns\MidocoApi\Order\StructType\VirtualAccountDTO
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get usedAccount value
     * @return string|null
     */
    public function getUsedAccount(): ?string
    {
        return $this->usedAccount;
    }
    /**
     * Set usedAccount value
     * @param string $usedAccount
     * @return \Pggns\MidocoApi\Order\StructType\VirtualAccountDTO
     */
    public function setUsedAccount(?string $usedAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($usedAccount) && !is_string($usedAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($usedAccount, true), gettype($usedAccount)), __LINE__);
        }
        $this->usedAccount = $usedAccount;
        
        return $this;
    }
    /**
     * Get virtualAccountId value
     * @return int|null
     */
    public function getVirtualAccountId(): ?int
    {
        return $this->virtualAccountId;
    }
    /**
     * Set virtualAccountId value
     * @param int $virtualAccountId
     * @return \Pggns\MidocoApi\Order\StructType\VirtualAccountDTO
     */
    public function setVirtualAccountId(?int $virtualAccountId = null): self
    {
        // validation for constraint: int
        if (!is_null($virtualAccountId) && !(is_int($virtualAccountId) || ctype_digit($virtualAccountId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($virtualAccountId, true), gettype($virtualAccountId)), __LINE__);
        }
        $this->virtualAccountId = $virtualAccountId;
        
        return $this;
    }
}
