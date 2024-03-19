<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingStatPurchaseAssignDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingStatPurchaseAssignDTO extends AbstractStructBase
{
    /**
     * The billingStatId
     * @var int|null
     */
    protected ?int $billingStatId = null;
    /**
     * The billingStatPurchaseId
     * @var int|null
     */
    protected ?int $billingStatPurchaseId = null;
    /**
     * The commissionAccount
     * @var string|null
     */
    protected ?string $commissionAccount = null;
    /**
     * The commissionValue
     * @var float|null
     */
    protected ?float $commissionValue = null;
    /**
     * The commissionVat
     * @var float|null
     */
    protected ?float $commissionVat = null;
    /**
     * The creditorAccount
     * @var string|null
     */
    protected ?string $creditorAccount = null;
    /**
     * The isAccrual
     * @var bool|null
     */
    protected ?bool $isAccrual = null;
    /**
     * The isVoid
     * @var bool|null
     */
    protected ?bool $isVoid = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The purchaseAccount
     * @var string|null
     */
    protected ?string $purchaseAccount = null;
    /**
     * The purchaseValue
     * @var float|null
     */
    protected ?float $purchaseValue = null;
    /**
     * The purchaseVat
     * @var float|null
     */
    protected ?float $purchaseVat = null;
    /**
     * The revenueId
     * @var int|null
     */
    protected ?int $revenueId = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The settlementTypeDebit
     * @var string|null
     */
    protected ?string $settlementTypeDebit = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for BillingStatPurchaseAssignDTO
     * @uses BillingStatPurchaseAssignDTO::setBillingStatId()
     * @uses BillingStatPurchaseAssignDTO::setBillingStatPurchaseId()
     * @uses BillingStatPurchaseAssignDTO::setCommissionAccount()
     * @uses BillingStatPurchaseAssignDTO::setCommissionValue()
     * @uses BillingStatPurchaseAssignDTO::setCommissionVat()
     * @uses BillingStatPurchaseAssignDTO::setCreditorAccount()
     * @uses BillingStatPurchaseAssignDTO::setIsAccrual()
     * @uses BillingStatPurchaseAssignDTO::setIsVoid()
     * @uses BillingStatPurchaseAssignDTO::setItemId()
     * @uses BillingStatPurchaseAssignDTO::setPurchaseAccount()
     * @uses BillingStatPurchaseAssignDTO::setPurchaseValue()
     * @uses BillingStatPurchaseAssignDTO::setPurchaseVat()
     * @uses BillingStatPurchaseAssignDTO::setRevenueId()
     * @uses BillingStatPurchaseAssignDTO::setSettlementType()
     * @uses BillingStatPurchaseAssignDTO::setSettlementTypeDebit()
     * @uses BillingStatPurchaseAssignDTO::setSupplierId()
     * @param int $billingStatId
     * @param int $billingStatPurchaseId
     * @param string $commissionAccount
     * @param float $commissionValue
     * @param float $commissionVat
     * @param string $creditorAccount
     * @param bool $isAccrual
     * @param bool $isVoid
     * @param int $itemId
     * @param string $purchaseAccount
     * @param float $purchaseValue
     * @param float $purchaseVat
     * @param int $revenueId
     * @param string $settlementType
     * @param string $settlementTypeDebit
     * @param string $supplierId
     */
    public function __construct(?int $billingStatId = null, ?int $billingStatPurchaseId = null, ?string $commissionAccount = null, ?float $commissionValue = null, ?float $commissionVat = null, ?string $creditorAccount = null, ?bool $isAccrual = null, ?bool $isVoid = null, ?int $itemId = null, ?string $purchaseAccount = null, ?float $purchaseValue = null, ?float $purchaseVat = null, ?int $revenueId = null, ?string $settlementType = null, ?string $settlementTypeDebit = null, ?string $supplierId = null)
    {
        $this
            ->setBillingStatId($billingStatId)
            ->setBillingStatPurchaseId($billingStatPurchaseId)
            ->setCommissionAccount($commissionAccount)
            ->setCommissionValue($commissionValue)
            ->setCommissionVat($commissionVat)
            ->setCreditorAccount($creditorAccount)
            ->setIsAccrual($isAccrual)
            ->setIsVoid($isVoid)
            ->setItemId($itemId)
            ->setPurchaseAccount($purchaseAccount)
            ->setPurchaseValue($purchaseValue)
            ->setPurchaseVat($purchaseVat)
            ->setRevenueId($revenueId)
            ->setSettlementType($settlementType)
            ->setSettlementTypeDebit($settlementTypeDebit)
            ->setSupplierId($supplierId);
    }
    /**
     * Get billingStatId value
     * @return int|null
     */
    public function getBillingStatId(): ?int
    {
        return $this->billingStatId;
    }
    /**
     * Set billingStatId value
     * @param int $billingStatId
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setBillingStatId(?int $billingStatId = null): self
    {
        // validation for constraint: int
        if (!is_null($billingStatId) && !(is_int($billingStatId) || ctype_digit($billingStatId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingStatId, true), gettype($billingStatId)), __LINE__);
        }
        $this->billingStatId = $billingStatId;
        
        return $this;
    }
    /**
     * Get billingStatPurchaseId value
     * @return int|null
     */
    public function getBillingStatPurchaseId(): ?int
    {
        return $this->billingStatPurchaseId;
    }
    /**
     * Set billingStatPurchaseId value
     * @param int $billingStatPurchaseId
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setBillingStatPurchaseId(?int $billingStatPurchaseId = null): self
    {
        // validation for constraint: int
        if (!is_null($billingStatPurchaseId) && !(is_int($billingStatPurchaseId) || ctype_digit($billingStatPurchaseId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($billingStatPurchaseId, true), gettype($billingStatPurchaseId)), __LINE__);
        }
        $this->billingStatPurchaseId = $billingStatPurchaseId;
        
        return $this;
    }
    /**
     * Get commissionAccount value
     * @return string|null
     */
    public function getCommissionAccount(): ?string
    {
        return $this->commissionAccount;
    }
    /**
     * Set commissionAccount value
     * @param string $commissionAccount
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setCommissionAccount(?string $commissionAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($commissionAccount) && !is_string($commissionAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($commissionAccount, true), gettype($commissionAccount)), __LINE__);
        }
        $this->commissionAccount = $commissionAccount;
        
        return $this;
    }
    /**
     * Get commissionValue value
     * @return float|null
     */
    public function getCommissionValue(): ?float
    {
        return $this->commissionValue;
    }
    /**
     * Set commissionValue value
     * @param float $commissionValue
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setCommissionValue(?float $commissionValue = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionValue) && !(is_float($commissionValue) || is_numeric($commissionValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionValue, true), gettype($commissionValue)), __LINE__);
        }
        $this->commissionValue = $commissionValue;
        
        return $this;
    }
    /**
     * Get commissionVat value
     * @return float|null
     */
    public function getCommissionVat(): ?float
    {
        return $this->commissionVat;
    }
    /**
     * Set commissionVat value
     * @param float $commissionVat
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setCommissionVat(?float $commissionVat = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionVat) && !(is_float($commissionVat) || is_numeric($commissionVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionVat, true), gettype($commissionVat)), __LINE__);
        }
        $this->commissionVat = $commissionVat;
        
        return $this;
    }
    /**
     * Get creditorAccount value
     * @return string|null
     */
    public function getCreditorAccount(): ?string
    {
        return $this->creditorAccount;
    }
    /**
     * Set creditorAccount value
     * @param string $creditorAccount
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setCreditorAccount(?string $creditorAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorAccount) && !is_string($creditorAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorAccount, true), gettype($creditorAccount)), __LINE__);
        }
        $this->creditorAccount = $creditorAccount;
        
        return $this;
    }
    /**
     * Get isAccrual value
     * @return bool|null
     */
    public function getIsAccrual(): ?bool
    {
        return $this->isAccrual;
    }
    /**
     * Set isAccrual value
     * @param bool $isAccrual
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setIsAccrual(?bool $isAccrual = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAccrual) && !is_bool($isAccrual)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAccrual, true), gettype($isAccrual)), __LINE__);
        }
        $this->isAccrual = $isAccrual;
        
        return $this;
    }
    /**
     * Get isVoid value
     * @return bool|null
     */
    public function getIsVoid(): ?bool
    {
        return $this->isVoid;
    }
    /**
     * Set isVoid value
     * @param bool $isVoid
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setIsVoid(?bool $isVoid = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isVoid) && !is_bool($isVoid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isVoid, true), gettype($isVoid)), __LINE__);
        }
        $this->isVoid = $isVoid;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get purchaseAccount value
     * @return string|null
     */
    public function getPurchaseAccount(): ?string
    {
        return $this->purchaseAccount;
    }
    /**
     * Set purchaseAccount value
     * @param string $purchaseAccount
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setPurchaseAccount(?string $purchaseAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($purchaseAccount) && !is_string($purchaseAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($purchaseAccount, true), gettype($purchaseAccount)), __LINE__);
        }
        $this->purchaseAccount = $purchaseAccount;
        
        return $this;
    }
    /**
     * Get purchaseValue value
     * @return float|null
     */
    public function getPurchaseValue(): ?float
    {
        return $this->purchaseValue;
    }
    /**
     * Set purchaseValue value
     * @param float $purchaseValue
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setPurchaseValue(?float $purchaseValue = null): self
    {
        // validation for constraint: float
        if (!is_null($purchaseValue) && !(is_float($purchaseValue) || is_numeric($purchaseValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($purchaseValue, true), gettype($purchaseValue)), __LINE__);
        }
        $this->purchaseValue = $purchaseValue;
        
        return $this;
    }
    /**
     * Get purchaseVat value
     * @return float|null
     */
    public function getPurchaseVat(): ?float
    {
        return $this->purchaseVat;
    }
    /**
     * Set purchaseVat value
     * @param float $purchaseVat
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setPurchaseVat(?float $purchaseVat = null): self
    {
        // validation for constraint: float
        if (!is_null($purchaseVat) && !(is_float($purchaseVat) || is_numeric($purchaseVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($purchaseVat, true), gettype($purchaseVat)), __LINE__);
        }
        $this->purchaseVat = $purchaseVat;
        
        return $this;
    }
    /**
     * Get revenueId value
     * @return int|null
     */
    public function getRevenueId(): ?int
    {
        return $this->revenueId;
    }
    /**
     * Set revenueId value
     * @param int $revenueId
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setRevenueId(?int $revenueId = null): self
    {
        // validation for constraint: int
        if (!is_null($revenueId) && !(is_int($revenueId) || ctype_digit($revenueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($revenueId, true), gettype($revenueId)), __LINE__);
        }
        $this->revenueId = $revenueId;
        
        return $this;
    }
    /**
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get settlementTypeDebit value
     * @return string|null
     */
    public function getSettlementTypeDebit(): ?string
    {
        return $this->settlementTypeDebit;
    }
    /**
     * Set settlementTypeDebit value
     * @param string $settlementTypeDebit
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setSettlementTypeDebit(?string $settlementTypeDebit = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementTypeDebit) && !is_string($settlementTypeDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementTypeDebit, true), gettype($settlementTypeDebit)), __LINE__);
        }
        $this->settlementTypeDebit = $settlementTypeDebit;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\BillingStatPurchaseAssignDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
}
