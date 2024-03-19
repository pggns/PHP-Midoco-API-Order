<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountEntriesSearchCriteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AccountEntriesSearchCriteria extends AbstractStructBase
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
     * The accountIds
     * @var string|null
     */
    protected ?string $accountIds = null;
    /**
     * The accountType
     * @var string|null
     */
    protected ?string $accountType = null;
    /**
     * The dueDateFrom
     * @var string|null
     */
    protected ?string $dueDateFrom = null;
    /**
     * The dueDateTo
     * @var string|null
     */
    protected ?string $dueDateTo = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The entryId
     * @var string|null
     */
    protected ?string $entryId = null;
    /**
     * The exportIdFrom
     * @var string|null
     */
    protected ?string $exportIdFrom = null;
    /**
     * The exportIdTo
     * @var string|null
     */
    protected ?string $exportIdTo = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The isLimitExceeded
     * @var bool|null
     */
    protected ?bool $isLimitExceeded = null;
    /**
     * The receiptDateFrom
     * @var string|null
     */
    protected ?string $receiptDateFrom = null;
    /**
     * The receiptDateTo
     * @var string|null
     */
    protected ?string $receiptDateTo = null;
    /**
     * The bookingDateFrom
     * @var string|null
     */
    protected ?string $bookingDateFrom = null;
    /**
     * The bookingDateTo
     * @var string|null
     */
    protected ?string $bookingDateTo = null;
    /**
     * The balanceMode
     * Meta information extracted from the WSDL
     * - default: 0
     * @var int|null
     */
    protected ?int $balanceMode = null;
    /**
     * The bookingPeriodFrom
     * @var int|null
     */
    protected ?int $bookingPeriodFrom = null;
    /**
     * The bookingPeriodTo
     * @var int|null
     */
    protected ?int $bookingPeriodTo = null;
    /**
     * The bookingYearFrom
     * @var int|null
     */
    protected ?int $bookingYearFrom = null;
    /**
     * The bookingYearTo
     * @var int|null
     */
    protected ?int $bookingYearTo = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The processingLock
     * @var bool|null
     */
    protected ?bool $processingLock = null;
    /**
     * Constructor method for AccountEntriesSearchCriteria
     * @uses AccountEntriesSearchCriteria::setAccountFrom()
     * @uses AccountEntriesSearchCriteria::setAccountTo()
     * @uses AccountEntriesSearchCriteria::setAccountIds()
     * @uses AccountEntriesSearchCriteria::setAccountType()
     * @uses AccountEntriesSearchCriteria::setDueDateFrom()
     * @uses AccountEntriesSearchCriteria::setDueDateTo()
     * @uses AccountEntriesSearchCriteria::setCustomerId()
     * @uses AccountEntriesSearchCriteria::setAgencyId()
     * @uses AccountEntriesSearchCriteria::setEntryId()
     * @uses AccountEntriesSearchCriteria::setExportIdFrom()
     * @uses AccountEntriesSearchCriteria::setExportIdTo()
     * @uses AccountEntriesSearchCriteria::setIsExported()
     * @uses AccountEntriesSearchCriteria::setIsLimitExceeded()
     * @uses AccountEntriesSearchCriteria::setReceiptDateFrom()
     * @uses AccountEntriesSearchCriteria::setReceiptDateTo()
     * @uses AccountEntriesSearchCriteria::setBookingDateFrom()
     * @uses AccountEntriesSearchCriteria::setBookingDateTo()
     * @uses AccountEntriesSearchCriteria::setBalanceMode()
     * @uses AccountEntriesSearchCriteria::setBookingPeriodFrom()
     * @uses AccountEntriesSearchCriteria::setBookingPeriodTo()
     * @uses AccountEntriesSearchCriteria::setBookingYearFrom()
     * @uses AccountEntriesSearchCriteria::setBookingYearTo()
     * @uses AccountEntriesSearchCriteria::setCurrency()
     * @uses AccountEntriesSearchCriteria::setOriginalCurrency()
     * @uses AccountEntriesSearchCriteria::setProcessingLock()
     * @param string $accountFrom
     * @param string $accountTo
     * @param string $accountIds
     * @param string $accountType
     * @param string $dueDateFrom
     * @param string $dueDateTo
     * @param int $customerId
     * @param string $agencyId
     * @param string $entryId
     * @param string $exportIdFrom
     * @param string $exportIdTo
     * @param bool $isExported
     * @param bool $isLimitExceeded
     * @param string $receiptDateFrom
     * @param string $receiptDateTo
     * @param string $bookingDateFrom
     * @param string $bookingDateTo
     * @param int $balanceMode
     * @param int $bookingPeriodFrom
     * @param int $bookingPeriodTo
     * @param int $bookingYearFrom
     * @param int $bookingYearTo
     * @param string $currency
     * @param string $originalCurrency
     * @param bool $processingLock
     */
    public function __construct(?string $accountFrom = null, ?string $accountTo = null, ?string $accountIds = null, ?string $accountType = null, ?string $dueDateFrom = null, ?string $dueDateTo = null, ?int $customerId = null, ?string $agencyId = null, ?string $entryId = null, ?string $exportIdFrom = null, ?string $exportIdTo = null, ?bool $isExported = null, ?bool $isLimitExceeded = null, ?string $receiptDateFrom = null, ?string $receiptDateTo = null, ?string $bookingDateFrom = null, ?string $bookingDateTo = null, ?int $balanceMode = 0, ?int $bookingPeriodFrom = null, ?int $bookingPeriodTo = null, ?int $bookingYearFrom = null, ?int $bookingYearTo = null, ?string $currency = null, ?string $originalCurrency = null, ?bool $processingLock = null)
    {
        $this
            ->setAccountFrom($accountFrom)
            ->setAccountTo($accountTo)
            ->setAccountIds($accountIds)
            ->setAccountType($accountType)
            ->setDueDateFrom($dueDateFrom)
            ->setDueDateTo($dueDateTo)
            ->setCustomerId($customerId)
            ->setAgencyId($agencyId)
            ->setEntryId($entryId)
            ->setExportIdFrom($exportIdFrom)
            ->setExportIdTo($exportIdTo)
            ->setIsExported($isExported)
            ->setIsLimitExceeded($isLimitExceeded)
            ->setReceiptDateFrom($receiptDateFrom)
            ->setReceiptDateTo($receiptDateTo)
            ->setBookingDateFrom($bookingDateFrom)
            ->setBookingDateTo($bookingDateTo)
            ->setBalanceMode($balanceMode)
            ->setBookingPeriodFrom($bookingPeriodFrom)
            ->setBookingPeriodTo($bookingPeriodTo)
            ->setBookingYearFrom($bookingYearFrom)
            ->setBookingYearTo($bookingYearTo)
            ->setCurrency($currency)
            ->setOriginalCurrency($originalCurrency)
            ->setProcessingLock($processingLock);
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
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
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
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
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
     * Get accountIds value
     * @return string|null
     */
    public function getAccountIds(): ?string
    {
        return $this->accountIds;
    }
    /**
     * Set accountIds value
     * @param string $accountIds
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setAccountIds(?string $accountIds = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIds) && !is_string($accountIds)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIds, true), gettype($accountIds)), __LINE__);
        }
        $this->accountIds = $accountIds;
        
        return $this;
    }
    /**
     * Get accountType value
     * @return string|null
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }
    /**
     * Set accountType value
     * @param string $accountType
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setAccountType(?string $accountType = null): self
    {
        // validation for constraint: string
        if (!is_null($accountType) && !is_string($accountType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountType, true), gettype($accountType)), __LINE__);
        }
        $this->accountType = $accountType;
        
        return $this;
    }
    /**
     * Get dueDateFrom value
     * @return string|null
     */
    public function getDueDateFrom(): ?string
    {
        return $this->dueDateFrom;
    }
    /**
     * Set dueDateFrom value
     * @param string $dueDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setDueDateFrom(?string $dueDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDateFrom) && !is_string($dueDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDateFrom, true), gettype($dueDateFrom)), __LINE__);
        }
        $this->dueDateFrom = $dueDateFrom;
        
        return $this;
    }
    /**
     * Get dueDateTo value
     * @return string|null
     */
    public function getDueDateTo(): ?string
    {
        return $this->dueDateTo;
    }
    /**
     * Set dueDateTo value
     * @param string $dueDateTo
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setDueDateTo(?string $dueDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDateTo) && !is_string($dueDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDateTo, true), gettype($dueDateTo)), __LINE__);
        }
        $this->dueDateTo = $dueDateTo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
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
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get entryId value
     * @return string|null
     */
    public function getEntryId(): ?string
    {
        return $this->entryId;
    }
    /**
     * Set entryId value
     * @param string $entryId
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setEntryId(?string $entryId = null): self
    {
        // validation for constraint: string
        if (!is_null($entryId) && !is_string($entryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($entryId, true), gettype($entryId)), __LINE__);
        }
        $this->entryId = $entryId;
        
        return $this;
    }
    /**
     * Get exportIdFrom value
     * @return string|null
     */
    public function getExportIdFrom(): ?string
    {
        return $this->exportIdFrom;
    }
    /**
     * Set exportIdFrom value
     * @param string $exportIdFrom
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setExportIdFrom(?string $exportIdFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($exportIdFrom) && !is_string($exportIdFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportIdFrom, true), gettype($exportIdFrom)), __LINE__);
        }
        $this->exportIdFrom = $exportIdFrom;
        
        return $this;
    }
    /**
     * Get exportIdTo value
     * @return string|null
     */
    public function getExportIdTo(): ?string
    {
        return $this->exportIdTo;
    }
    /**
     * Set exportIdTo value
     * @param string $exportIdTo
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setExportIdTo(?string $exportIdTo = null): self
    {
        // validation for constraint: string
        if (!is_null($exportIdTo) && !is_string($exportIdTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportIdTo, true), gettype($exportIdTo)), __LINE__);
        }
        $this->exportIdTo = $exportIdTo;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get isLimitExceeded value
     * @return bool|null
     */
    public function getIsLimitExceeded(): ?bool
    {
        return $this->isLimitExceeded;
    }
    /**
     * Set isLimitExceeded value
     * @param bool $isLimitExceeded
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setIsLimitExceeded(?bool $isLimitExceeded = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLimitExceeded) && !is_bool($isLimitExceeded)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLimitExceeded, true), gettype($isLimitExceeded)), __LINE__);
        }
        $this->isLimitExceeded = $isLimitExceeded;
        
        return $this;
    }
    /**
     * Get receiptDateFrom value
     * @return string|null
     */
    public function getReceiptDateFrom(): ?string
    {
        return $this->receiptDateFrom;
    }
    /**
     * Set receiptDateFrom value
     * @param string $receiptDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setReceiptDateFrom(?string $receiptDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDateFrom) && !is_string($receiptDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDateFrom, true), gettype($receiptDateFrom)), __LINE__);
        }
        $this->receiptDateFrom = $receiptDateFrom;
        
        return $this;
    }
    /**
     * Get receiptDateTo value
     * @return string|null
     */
    public function getReceiptDateTo(): ?string
    {
        return $this->receiptDateTo;
    }
    /**
     * Set receiptDateTo value
     * @param string $receiptDateTo
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setReceiptDateTo(?string $receiptDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDateTo) && !is_string($receiptDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDateTo, true), gettype($receiptDateTo)), __LINE__);
        }
        $this->receiptDateTo = $receiptDateTo;
        
        return $this;
    }
    /**
     * Get bookingDateFrom value
     * @return string|null
     */
    public function getBookingDateFrom(): ?string
    {
        return $this->bookingDateFrom;
    }
    /**
     * Set bookingDateFrom value
     * @param string $bookingDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setBookingDateFrom(?string $bookingDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDateFrom) && !is_string($bookingDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDateFrom, true), gettype($bookingDateFrom)), __LINE__);
        }
        $this->bookingDateFrom = $bookingDateFrom;
        
        return $this;
    }
    /**
     * Get bookingDateTo value
     * @return string|null
     */
    public function getBookingDateTo(): ?string
    {
        return $this->bookingDateTo;
    }
    /**
     * Set bookingDateTo value
     * @param string $bookingDateTo
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setBookingDateTo(?string $bookingDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingDateTo) && !is_string($bookingDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingDateTo, true), gettype($bookingDateTo)), __LINE__);
        }
        $this->bookingDateTo = $bookingDateTo;
        
        return $this;
    }
    /**
     * Get balanceMode value
     * @return int|null
     */
    public function getBalanceMode(): ?int
    {
        return $this->balanceMode;
    }
    /**
     * Set balanceMode value
     * @param int $balanceMode
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setBalanceMode(?int $balanceMode = 0): self
    {
        // validation for constraint: int
        if (!is_null($balanceMode) && !(is_int($balanceMode) || ctype_digit($balanceMode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($balanceMode, true), gettype($balanceMode)), __LINE__);
        }
        $this->balanceMode = $balanceMode;
        
        return $this;
    }
    /**
     * Get bookingPeriodFrom value
     * @return int|null
     */
    public function getBookingPeriodFrom(): ?int
    {
        return $this->bookingPeriodFrom;
    }
    /**
     * Set bookingPeriodFrom value
     * @param int $bookingPeriodFrom
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setBookingPeriodFrom(?int $bookingPeriodFrom = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPeriodFrom) && !(is_int($bookingPeriodFrom) || ctype_digit($bookingPeriodFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPeriodFrom, true), gettype($bookingPeriodFrom)), __LINE__);
        }
        $this->bookingPeriodFrom = $bookingPeriodFrom;
        
        return $this;
    }
    /**
     * Get bookingPeriodTo value
     * @return int|null
     */
    public function getBookingPeriodTo(): ?int
    {
        return $this->bookingPeriodTo;
    }
    /**
     * Set bookingPeriodTo value
     * @param int $bookingPeriodTo
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setBookingPeriodTo(?int $bookingPeriodTo = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPeriodTo) && !(is_int($bookingPeriodTo) || ctype_digit($bookingPeriodTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPeriodTo, true), gettype($bookingPeriodTo)), __LINE__);
        }
        $this->bookingPeriodTo = $bookingPeriodTo;
        
        return $this;
    }
    /**
     * Get bookingYearFrom value
     * @return int|null
     */
    public function getBookingYearFrom(): ?int
    {
        return $this->bookingYearFrom;
    }
    /**
     * Set bookingYearFrom value
     * @param int $bookingYearFrom
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setBookingYearFrom(?int $bookingYearFrom = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingYearFrom) && !(is_int($bookingYearFrom) || ctype_digit($bookingYearFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingYearFrom, true), gettype($bookingYearFrom)), __LINE__);
        }
        $this->bookingYearFrom = $bookingYearFrom;
        
        return $this;
    }
    /**
     * Get bookingYearTo value
     * @return int|null
     */
    public function getBookingYearTo(): ?int
    {
        return $this->bookingYearTo;
    }
    /**
     * Set bookingYearTo value
     * @param int $bookingYearTo
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setBookingYearTo(?int $bookingYearTo = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingYearTo) && !(is_int($bookingYearTo) || ctype_digit($bookingYearTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingYearTo, true), gettype($bookingYearTo)), __LINE__);
        }
        $this->bookingYearTo = $bookingYearTo;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get originalCurrency value
     * @return string|null
     */
    public function getOriginalCurrency(): ?string
    {
        return $this->originalCurrency;
    }
    /**
     * Set originalCurrency value
     * @param string $originalCurrency
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setOriginalCurrency(?string $originalCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($originalCurrency) && !is_string($originalCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalCurrency, true), gettype($originalCurrency)), __LINE__);
        }
        $this->originalCurrency = $originalCurrency;
        
        return $this;
    }
    /**
     * Get processingLock value
     * @return bool|null
     */
    public function getProcessingLock(): ?bool
    {
        return $this->processingLock;
    }
    /**
     * Set processingLock value
     * @param bool $processingLock
     * @return \Pggns\MidocoApi\Order\StructType\AccountEntriesSearchCriteria
     */
    public function setProcessingLock(?bool $processingLock = null): self
    {
        // validation for constraint: boolean
        if (!is_null($processingLock) && !is_bool($processingLock)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($processingLock, true), gettype($processingLock)), __LINE__);
        }
        $this->processingLock = $processingLock;
        
        return $this;
    }
}
