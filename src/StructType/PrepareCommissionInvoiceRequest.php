<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareCommissionInvoiceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrepareCommissionInvoiceRequest extends PrepareAdviceInfoRequest
{
    /**
     * The accountFrom
     * @var string|null
     */
    protected ?string $accountFrom = null;
    /**
     * The accountTo
     * @var string|null
     */
    protected ?string $accountTo = null;
    /**
     * The groupByAccount
     * @var bool|null
     */
    protected ?bool $groupByAccount = null;
    /**
     * The debitSettlementType
     * @var string|null
     */
    protected ?string $debitSettlementType = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The ignoreSettledItems
     * @var bool|null
     */
    protected ?bool $ignoreSettledItems = null;
    /**
     * The showInvoicedItems
     * @var bool|null
     */
    protected ?bool $showInvoicedItems = null;
    /**
     * Constructor method for PrepareCommissionInvoiceRequest
     * @uses PrepareCommissionInvoiceRequest::setAccountFrom()
     * @uses PrepareCommissionInvoiceRequest::setAccountTo()
     * @uses PrepareCommissionInvoiceRequest::setGroupByAccount()
     * @uses PrepareCommissionInvoiceRequest::setDebitSettlementType()
     * @uses PrepareCommissionInvoiceRequest::setCustomerId()
     * @uses PrepareCommissionInvoiceRequest::setIgnoreSettledItems()
     * @uses PrepareCommissionInvoiceRequest::setShowInvoicedItems()
     * @param string $accountFrom
     * @param string $accountTo
     * @param bool $groupByAccount
     * @param string $debitSettlementType
     * @param int $customerId
     * @param bool $ignoreSettledItems
     * @param bool $showInvoicedItems
     */
    public function __construct(?string $accountFrom = null, ?string $accountTo = null, ?bool $groupByAccount = null, ?string $debitSettlementType = null, ?int $customerId = null, ?bool $ignoreSettledItems = null, ?bool $showInvoicedItems = null)
    {
        $this
            ->setAccountFrom($accountFrom)
            ->setAccountTo($accountTo)
            ->setGroupByAccount($groupByAccount)
            ->setDebitSettlementType($debitSettlementType)
            ->setCustomerId($customerId)
            ->setIgnoreSettledItems($ignoreSettledItems)
            ->setShowInvoicedItems($showInvoicedItems);
    }
    /**
     * Get accountFrom value
     * @return string|null
     */
    public function getAccountFrom(): ?string
    {
        return $this->accountFrom;
    }
    /**
     * Set accountFrom value
     * @param string $accountFrom
     * @return \Pggns\MidocoApi\Order\StructType\PrepareCommissionInvoiceRequest
     */
    public function setAccountFrom(?string $accountFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($accountFrom) && !is_string($accountFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountFrom, true), gettype($accountFrom)), __LINE__);
        }
        $this->accountFrom = $accountFrom;
        
        return $this;
    }
    /**
     * Get accountTo value
     * @return string|null
     */
    public function getAccountTo(): ?string
    {
        return $this->accountTo;
    }
    /**
     * Set accountTo value
     * @param string $accountTo
     * @return \Pggns\MidocoApi\Order\StructType\PrepareCommissionInvoiceRequest
     */
    public function setAccountTo(?string $accountTo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountTo) && !is_string($accountTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountTo, true), gettype($accountTo)), __LINE__);
        }
        $this->accountTo = $accountTo;
        
        return $this;
    }
    /**
     * Get groupByAccount value
     * @return bool|null
     */
    public function getGroupByAccount(): ?bool
    {
        return $this->groupByAccount;
    }
    /**
     * Set groupByAccount value
     * @param bool $groupByAccount
     * @return \Pggns\MidocoApi\Order\StructType\PrepareCommissionInvoiceRequest
     */
    public function setGroupByAccount(?bool $groupByAccount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($groupByAccount) && !is_bool($groupByAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($groupByAccount, true), gettype($groupByAccount)), __LINE__);
        }
        $this->groupByAccount = $groupByAccount;
        
        return $this;
    }
    /**
     * Get debitSettlementType value
     * @return string|null
     */
    public function getDebitSettlementType(): ?string
    {
        return $this->debitSettlementType;
    }
    /**
     * Set debitSettlementType value
     * @param string $debitSettlementType
     * @return \Pggns\MidocoApi\Order\StructType\PrepareCommissionInvoiceRequest
     */
    public function setDebitSettlementType(?string $debitSettlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($debitSettlementType) && !is_string($debitSettlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitSettlementType, true), gettype($debitSettlementType)), __LINE__);
        }
        $this->debitSettlementType = $debitSettlementType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PrepareCommissionInvoiceRequest
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
     * Get ignoreSettledItems value
     * @return bool|null
     */
    public function getIgnoreSettledItems(): ?bool
    {
        return $this->ignoreSettledItems;
    }
    /**
     * Set ignoreSettledItems value
     * @param bool $ignoreSettledItems
     * @return \Pggns\MidocoApi\Order\StructType\PrepareCommissionInvoiceRequest
     */
    public function setIgnoreSettledItems(?bool $ignoreSettledItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreSettledItems) && !is_bool($ignoreSettledItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreSettledItems, true), gettype($ignoreSettledItems)), __LINE__);
        }
        $this->ignoreSettledItems = $ignoreSettledItems;
        
        return $this;
    }
    /**
     * Get showInvoicedItems value
     * @return bool|null
     */
    public function getShowInvoicedItems(): ?bool
    {
        return $this->showInvoicedItems;
    }
    /**
     * Set showInvoicedItems value
     * @param bool $showInvoicedItems
     * @return \Pggns\MidocoApi\Order\StructType\PrepareCommissionInvoiceRequest
     */
    public function setShowInvoicedItems(?bool $showInvoicedItems = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showInvoicedItems) && !is_bool($showInvoicedItems)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showInvoicedItems, true), gettype($showInvoicedItems)), __LINE__);
        }
        $this->showInvoicedItems = $showInvoicedItems;
        
        return $this;
    }
}
