<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplierSettlemAccountsHistoricDTO StructType
 * @subpackage Structs
 */
class SupplierSettlemAccountsHistoricDTO extends AbstractStructBase
{
    /**
     * The accountDiPayment
     * @var string|null
     */
    protected ?string $accountDiPayment = null;
    /**
     * The accountExpenseInvoice
     * @var string|null
     */
    protected ?string $accountExpenseInvoice = null;
    /**
     * The accountProvisionInsurance
     * @var string|null
     */
    protected ?string $accountProvisionInsurance = null;
    /**
     * The accountProvisionNovat
     * @var string|null
     */
    protected ?string $accountProvisionNovat = null;
    /**
     * The accountProvisionReceivable
     * @var string|null
     */
    protected ?string $accountProvisionReceivable = null;
    /**
     * The accountProvisionVat
     * @var string|null
     */
    protected ?string $accountProvisionVat = null;
    /**
     * The accountRevenueOwnService
     * @var string|null
     */
    protected ?string $accountRevenueOwnService = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The forStorno
     * @var bool|null
     */
    protected ?bool $forStorno = null;
    /**
     * The interimAccount
     * @var string|null
     */
    protected ?string $interimAccount = null;
    /**
     * The marginAccount
     * @var string|null
     */
    protected ?string $marginAccount = null;
    /**
     * The marginAccountNegative
     * @var string|null
     */
    protected ?string $marginAccountNegative = null;
    /**
     * The packageAccount
     * @var string|null
     */
    protected ?string $packageAccount = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The ssaId
     * @var int|null
     */
    protected ?int $ssaId = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * The validCreationTravel
     * @var string|null
     */
    protected ?string $validCreationTravel = null;
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * Constructor method for SupplierSettlemAccountsHistoricDTO
     * @uses SupplierSettlemAccountsHistoricDTO::setAccountDiPayment()
     * @uses SupplierSettlemAccountsHistoricDTO::setAccountExpenseInvoice()
     * @uses SupplierSettlemAccountsHistoricDTO::setAccountProvisionInsurance()
     * @uses SupplierSettlemAccountsHistoricDTO::setAccountProvisionNovat()
     * @uses SupplierSettlemAccountsHistoricDTO::setAccountProvisionReceivable()
     * @uses SupplierSettlemAccountsHistoricDTO::setAccountProvisionVat()
     * @uses SupplierSettlemAccountsHistoricDTO::setAccountRevenueOwnService()
     * @uses SupplierSettlemAccountsHistoricDTO::setDestination()
     * @uses SupplierSettlemAccountsHistoricDTO::setForStorno()
     * @uses SupplierSettlemAccountsHistoricDTO::setInterimAccount()
     * @uses SupplierSettlemAccountsHistoricDTO::setMarginAccount()
     * @uses SupplierSettlemAccountsHistoricDTO::setMarginAccountNegative()
     * @uses SupplierSettlemAccountsHistoricDTO::setPackageAccount()
     * @uses SupplierSettlemAccountsHistoricDTO::setSettlementType()
     * @uses SupplierSettlemAccountsHistoricDTO::setSsaId()
     * @uses SupplierSettlemAccountsHistoricDTO::setSupplierId()
     * @uses SupplierSettlemAccountsHistoricDTO::setTravelType()
     * @uses SupplierSettlemAccountsHistoricDTO::setValidCreationTravel()
     * @uses SupplierSettlemAccountsHistoricDTO::setValidDate()
     * @uses SupplierSettlemAccountsHistoricDTO::setValidFrom()
     * @param string $accountDiPayment
     * @param string $accountExpenseInvoice
     * @param string $accountProvisionInsurance
     * @param string $accountProvisionNovat
     * @param string $accountProvisionReceivable
     * @param string $accountProvisionVat
     * @param string $accountRevenueOwnService
     * @param string $destination
     * @param bool $forStorno
     * @param string $interimAccount
     * @param string $marginAccount
     * @param string $marginAccountNegative
     * @param string $packageAccount
     * @param string $settlementType
     * @param int $ssaId
     * @param string $supplierId
     * @param string $travelType
     * @param string $validCreationTravel
     * @param string $validDate
     * @param string $validFrom
     */
    public function __construct(?string $accountDiPayment = null, ?string $accountExpenseInvoice = null, ?string $accountProvisionInsurance = null, ?string $accountProvisionNovat = null, ?string $accountProvisionReceivable = null, ?string $accountProvisionVat = null, ?string $accountRevenueOwnService = null, ?string $destination = null, ?bool $forStorno = null, ?string $interimAccount = null, ?string $marginAccount = null, ?string $marginAccountNegative = null, ?string $packageAccount = null, ?string $settlementType = null, ?int $ssaId = null, ?string $supplierId = null, ?string $travelType = null, ?string $validCreationTravel = null, ?string $validDate = null, ?string $validFrom = null)
    {
        $this
            ->setAccountDiPayment($accountDiPayment)
            ->setAccountExpenseInvoice($accountExpenseInvoice)
            ->setAccountProvisionInsurance($accountProvisionInsurance)
            ->setAccountProvisionNovat($accountProvisionNovat)
            ->setAccountProvisionReceivable($accountProvisionReceivable)
            ->setAccountProvisionVat($accountProvisionVat)
            ->setAccountRevenueOwnService($accountRevenueOwnService)
            ->setDestination($destination)
            ->setForStorno($forStorno)
            ->setInterimAccount($interimAccount)
            ->setMarginAccount($marginAccount)
            ->setMarginAccountNegative($marginAccountNegative)
            ->setPackageAccount($packageAccount)
            ->setSettlementType($settlementType)
            ->setSsaId($ssaId)
            ->setSupplierId($supplierId)
            ->setTravelType($travelType)
            ->setValidCreationTravel($validCreationTravel)
            ->setValidDate($validDate)
            ->setValidFrom($validFrom);
    }
    /**
     * Get accountDiPayment value
     * @return string|null
     */
    public function getAccountDiPayment(): ?string
    {
        return $this->accountDiPayment;
    }
    /**
     * Set accountDiPayment value
     * @param string $accountDiPayment
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setAccountDiPayment(?string $accountDiPayment = null): self
    {
        // validation for constraint: string
        if (!is_null($accountDiPayment) && !is_string($accountDiPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountDiPayment, true), gettype($accountDiPayment)), __LINE__);
        }
        $this->accountDiPayment = $accountDiPayment;
        
        return $this;
    }
    /**
     * Get accountExpenseInvoice value
     * @return string|null
     */
    public function getAccountExpenseInvoice(): ?string
    {
        return $this->accountExpenseInvoice;
    }
    /**
     * Set accountExpenseInvoice value
     * @param string $accountExpenseInvoice
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setAccountExpenseInvoice(?string $accountExpenseInvoice = null): self
    {
        // validation for constraint: string
        if (!is_null($accountExpenseInvoice) && !is_string($accountExpenseInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountExpenseInvoice, true), gettype($accountExpenseInvoice)), __LINE__);
        }
        $this->accountExpenseInvoice = $accountExpenseInvoice;
        
        return $this;
    }
    /**
     * Get accountProvisionInsurance value
     * @return string|null
     */
    public function getAccountProvisionInsurance(): ?string
    {
        return $this->accountProvisionInsurance;
    }
    /**
     * Set accountProvisionInsurance value
     * @param string $accountProvisionInsurance
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setAccountProvisionInsurance(?string $accountProvisionInsurance = null): self
    {
        // validation for constraint: string
        if (!is_null($accountProvisionInsurance) && !is_string($accountProvisionInsurance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountProvisionInsurance, true), gettype($accountProvisionInsurance)), __LINE__);
        }
        $this->accountProvisionInsurance = $accountProvisionInsurance;
        
        return $this;
    }
    /**
     * Get accountProvisionNovat value
     * @return string|null
     */
    public function getAccountProvisionNovat(): ?string
    {
        return $this->accountProvisionNovat;
    }
    /**
     * Set accountProvisionNovat value
     * @param string $accountProvisionNovat
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setAccountProvisionNovat(?string $accountProvisionNovat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountProvisionNovat) && !is_string($accountProvisionNovat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountProvisionNovat, true), gettype($accountProvisionNovat)), __LINE__);
        }
        $this->accountProvisionNovat = $accountProvisionNovat;
        
        return $this;
    }
    /**
     * Get accountProvisionReceivable value
     * @return string|null
     */
    public function getAccountProvisionReceivable(): ?string
    {
        return $this->accountProvisionReceivable;
    }
    /**
     * Set accountProvisionReceivable value
     * @param string $accountProvisionReceivable
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setAccountProvisionReceivable(?string $accountProvisionReceivable = null): self
    {
        // validation for constraint: string
        if (!is_null($accountProvisionReceivable) && !is_string($accountProvisionReceivable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountProvisionReceivable, true), gettype($accountProvisionReceivable)), __LINE__);
        }
        $this->accountProvisionReceivable = $accountProvisionReceivable;
        
        return $this;
    }
    /**
     * Get accountProvisionVat value
     * @return string|null
     */
    public function getAccountProvisionVat(): ?string
    {
        return $this->accountProvisionVat;
    }
    /**
     * Set accountProvisionVat value
     * @param string $accountProvisionVat
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setAccountProvisionVat(?string $accountProvisionVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountProvisionVat) && !is_string($accountProvisionVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountProvisionVat, true), gettype($accountProvisionVat)), __LINE__);
        }
        $this->accountProvisionVat = $accountProvisionVat;
        
        return $this;
    }
    /**
     * Get accountRevenueOwnService value
     * @return string|null
     */
    public function getAccountRevenueOwnService(): ?string
    {
        return $this->accountRevenueOwnService;
    }
    /**
     * Set accountRevenueOwnService value
     * @param string $accountRevenueOwnService
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setAccountRevenueOwnService(?string $accountRevenueOwnService = null): self
    {
        // validation for constraint: string
        if (!is_null($accountRevenueOwnService) && !is_string($accountRevenueOwnService)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountRevenueOwnService, true), gettype($accountRevenueOwnService)), __LINE__);
        }
        $this->accountRevenueOwnService = $accountRevenueOwnService;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * Get forStorno value
     * @return bool|null
     */
    public function getForStorno(): ?bool
    {
        return $this->forStorno;
    }
    /**
     * Set forStorno value
     * @param bool $forStorno
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setForStorno(?bool $forStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forStorno) && !is_bool($forStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forStorno, true), gettype($forStorno)), __LINE__);
        }
        $this->forStorno = $forStorno;
        
        return $this;
    }
    /**
     * Get interimAccount value
     * @return string|null
     */
    public function getInterimAccount(): ?string
    {
        return $this->interimAccount;
    }
    /**
     * Set interimAccount value
     * @param string $interimAccount
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setInterimAccount(?string $interimAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($interimAccount) && !is_string($interimAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($interimAccount, true), gettype($interimAccount)), __LINE__);
        }
        $this->interimAccount = $interimAccount;
        
        return $this;
    }
    /**
     * Get marginAccount value
     * @return string|null
     */
    public function getMarginAccount(): ?string
    {
        return $this->marginAccount;
    }
    /**
     * Set marginAccount value
     * @param string $marginAccount
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setMarginAccount(?string $marginAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($marginAccount) && !is_string($marginAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marginAccount, true), gettype($marginAccount)), __LINE__);
        }
        $this->marginAccount = $marginAccount;
        
        return $this;
    }
    /**
     * Get marginAccountNegative value
     * @return string|null
     */
    public function getMarginAccountNegative(): ?string
    {
        return $this->marginAccountNegative;
    }
    /**
     * Set marginAccountNegative value
     * @param string $marginAccountNegative
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setMarginAccountNegative(?string $marginAccountNegative = null): self
    {
        // validation for constraint: string
        if (!is_null($marginAccountNegative) && !is_string($marginAccountNegative)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marginAccountNegative, true), gettype($marginAccountNegative)), __LINE__);
        }
        $this->marginAccountNegative = $marginAccountNegative;
        
        return $this;
    }
    /**
     * Get packageAccount value
     * @return string|null
     */
    public function getPackageAccount(): ?string
    {
        return $this->packageAccount;
    }
    /**
     * Set packageAccount value
     * @param string $packageAccount
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setPackageAccount(?string $packageAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($packageAccount) && !is_string($packageAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageAccount, true), gettype($packageAccount)), __LINE__);
        }
        $this->packageAccount = $packageAccount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
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
     * Get ssaId value
     * @return int|null
     */
    public function getSsaId(): ?int
    {
        return $this->ssaId;
    }
    /**
     * Set ssaId value
     * @param int $ssaId
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setSsaId(?int $ssaId = null): self
    {
        // validation for constraint: int
        if (!is_null($ssaId) && !(is_int($ssaId) || ctype_digit($ssaId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ssaId, true), gettype($ssaId)), __LINE__);
        }
        $this->ssaId = $ssaId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
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
    /**
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
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
     * Get validFrom value
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
     * Set validFrom value
     * @param string $validFrom
     * @return \Pggns\MidocoApi\Order\StructType\SupplierSettlemAccountsHistoricDTO
     */
    public function setValidFrom(?string $validFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($validFrom) && !is_string($validFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validFrom, true), gettype($validFrom)), __LINE__);
        }
        $this->validFrom = $validFrom;
        
        return $this;
    }
}
