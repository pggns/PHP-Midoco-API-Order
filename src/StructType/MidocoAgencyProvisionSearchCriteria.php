<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAgencyProvisionSearchCriteria StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAgencyProvisionSearchCriteria extends AbstractStructBase
{
    /**
     * The startDate
     * @var string|null
     */
    protected ?string $startDate = null;
    /**
     * The endDate
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The cooperationId
     * @var string|null
     */
    protected ?string $cooperationId = null;
    /**
     * The orderSupplierId
     * @var string|null
     */
    protected ?string $orderSupplierId = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The onlyPaid
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $onlyPaid = null;
    /**
     * The onlyDepositPaid
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $onlyDepositPaid = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The domesticInternational
     * Meta information extracted from the WSDL
     * - default: ALL
     * @var string|null
     */
    protected ?string $domesticInternational = null;
    /**
     * The invoicingType
     * Meta information extracted from the WSDL
     * - default: ALL
     * @var string|null
     */
    protected ?string $invoicingType = null;
    /**
     * The creationFromDate
     * @var string|null
     */
    protected ?string $creationFromDate = null;
    /**
     * The creationToDate
     * @var string|null
     */
    protected ?string $creationToDate = null;
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
     * Constructor method for MidocoAgencyProvisionSearchCriteria
     * @uses MidocoAgencyProvisionSearchCriteria::setStartDate()
     * @uses MidocoAgencyProvisionSearchCriteria::setEndDate()
     * @uses MidocoAgencyProvisionSearchCriteria::setAgencyId()
     * @uses MidocoAgencyProvisionSearchCriteria::setCooperationId()
     * @uses MidocoAgencyProvisionSearchCriteria::setOrderSupplierId()
     * @uses MidocoAgencyProvisionSearchCriteria::setReceiptDate()
     * @uses MidocoAgencyProvisionSearchCriteria::setOnlyPaid()
     * @uses MidocoAgencyProvisionSearchCriteria::setOnlyDepositPaid()
     * @uses MidocoAgencyProvisionSearchCriteria::setOrderId()
     * @uses MidocoAgencyProvisionSearchCriteria::setDomesticInternational()
     * @uses MidocoAgencyProvisionSearchCriteria::setInvoicingType()
     * @uses MidocoAgencyProvisionSearchCriteria::setCreationFromDate()
     * @uses MidocoAgencyProvisionSearchCriteria::setCreationToDate()
     * @uses MidocoAgencyProvisionSearchCriteria::setBookingDateFrom()
     * @uses MidocoAgencyProvisionSearchCriteria::setBookingDateTo()
     * @param string $startDate
     * @param string $endDate
     * @param string $agencyId
     * @param string $cooperationId
     * @param string $orderSupplierId
     * @param string $receiptDate
     * @param bool $onlyPaid
     * @param bool $onlyDepositPaid
     * @param int $orderId
     * @param string $domesticInternational
     * @param string $invoicingType
     * @param string $creationFromDate
     * @param string $creationToDate
     * @param string $bookingDateFrom
     * @param string $bookingDateTo
     */
    public function __construct(?string $startDate = null, ?string $endDate = null, ?string $agencyId = null, ?string $cooperationId = null, ?string $orderSupplierId = null, ?string $receiptDate = null, ?bool $onlyPaid = false, ?bool $onlyDepositPaid = false, ?int $orderId = null, ?string $domesticInternational = 'ALL', ?string $invoicingType = 'ALL', ?string $creationFromDate = null, ?string $creationToDate = null, ?string $bookingDateFrom = null, ?string $bookingDateTo = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setAgencyId($agencyId)
            ->setCooperationId($cooperationId)
            ->setOrderSupplierId($orderSupplierId)
            ->setReceiptDate($receiptDate)
            ->setOnlyPaid($onlyPaid)
            ->setOnlyDepositPaid($onlyDepositPaid)
            ->setOrderId($orderId)
            ->setDomesticInternational($domesticInternational)
            ->setInvoicingType($invoicingType)
            ->setCreationFromDate($creationFromDate)
            ->setCreationToDate($creationToDate)
            ->setBookingDateFrom($bookingDateFrom)
            ->setBookingDateTo($bookingDateTo);
    }
    /**
     * Get startDate value
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     * Set startDate value
     * @param string $startDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
     */
    public function setStartDate(?string $startDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->startDate = $startDate;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
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
     * Get cooperationId value
     * @return string|null
     */
    public function getCooperationId(): ?string
    {
        return $this->cooperationId;
    }
    /**
     * Set cooperationId value
     * @param string $cooperationId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
     */
    public function setCooperationId(?string $cooperationId = null): self
    {
        // validation for constraint: string
        if (!is_null($cooperationId) && !is_string($cooperationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cooperationId, true), gettype($cooperationId)), __LINE__);
        }
        $this->cooperationId = $cooperationId;
        
        return $this;
    }
    /**
     * Get orderSupplierId value
     * @return string|null
     */
    public function getOrderSupplierId(): ?string
    {
        return $this->orderSupplierId;
    }
    /**
     * Set orderSupplierId value
     * @param string $orderSupplierId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
     */
    public function setOrderSupplierId(?string $orderSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($orderSupplierId) && !is_string($orderSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderSupplierId, true), gettype($orderSupplierId)), __LINE__);
        }
        $this->orderSupplierId = $orderSupplierId;
        
        return $this;
    }
    /**
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
        return $this;
    }
    /**
     * Get onlyPaid value
     * @return bool|null
     */
    public function getOnlyPaid(): ?bool
    {
        return $this->onlyPaid;
    }
    /**
     * Set onlyPaid value
     * @param bool $onlyPaid
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
     */
    public function setOnlyPaid(?bool $onlyPaid = false): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyPaid) && !is_bool($onlyPaid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyPaid, true), gettype($onlyPaid)), __LINE__);
        }
        $this->onlyPaid = $onlyPaid;
        
        return $this;
    }
    /**
     * Get onlyDepositPaid value
     * @return bool|null
     */
    public function getOnlyDepositPaid(): ?bool
    {
        return $this->onlyDepositPaid;
    }
    /**
     * Set onlyDepositPaid value
     * @param bool $onlyDepositPaid
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
     */
    public function setOnlyDepositPaid(?bool $onlyDepositPaid = false): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyDepositPaid) && !is_bool($onlyDepositPaid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyDepositPaid, true), gettype($onlyDepositPaid)), __LINE__);
        }
        $this->onlyDepositPaid = $onlyDepositPaid;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get domesticInternational value
     * @return string|null
     */
    public function getDomesticInternational(): ?string
    {
        return $this->domesticInternational;
    }
    /**
     * Set domesticInternational value
     * @param string $domesticInternational
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
     */
    public function setDomesticInternational(?string $domesticInternational = 'ALL'): self
    {
        // validation for constraint: string
        if (!is_null($domesticInternational) && !is_string($domesticInternational)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domesticInternational, true), gettype($domesticInternational)), __LINE__);
        }
        $this->domesticInternational = $domesticInternational;
        
        return $this;
    }
    /**
     * Get invoicingType value
     * @return string|null
     */
    public function getInvoicingType(): ?string
    {
        return $this->invoicingType;
    }
    /**
     * Set invoicingType value
     * @param string $invoicingType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
     */
    public function setInvoicingType(?string $invoicingType = 'ALL'): self
    {
        // validation for constraint: string
        if (!is_null($invoicingType) && !is_string($invoicingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoicingType, true), gettype($invoicingType)), __LINE__);
        }
        $this->invoicingType = $invoicingType;
        
        return $this;
    }
    /**
     * Get creationFromDate value
     * @return string|null
     */
    public function getCreationFromDate(): ?string
    {
        return $this->creationFromDate;
    }
    /**
     * Set creationFromDate value
     * @param string $creationFromDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
     */
    public function setCreationFromDate(?string $creationFromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationFromDate) && !is_string($creationFromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationFromDate, true), gettype($creationFromDate)), __LINE__);
        }
        $this->creationFromDate = $creationFromDate;
        
        return $this;
    }
    /**
     * Get creationToDate value
     * @return string|null
     */
    public function getCreationToDate(): ?string
    {
        return $this->creationToDate;
    }
    /**
     * Set creationToDate value
     * @param string $creationToDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
     */
    public function setCreationToDate(?string $creationToDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationToDate) && !is_string($creationToDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationToDate, true), gettype($creationToDate)), __LINE__);
        }
        $this->creationToDate = $creationToDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionSearchCriteria
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
}
