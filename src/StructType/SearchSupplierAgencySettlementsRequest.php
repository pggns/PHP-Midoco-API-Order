<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSupplierAgencySettlementsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchSupplierAgencySettlementsRequest extends AbstractStructBase
{
    /**
     * The creationDateFrom
     * @var string|null
     */
    protected ?string $creationDateFrom = null;
    /**
     * The creationDateTo
     * @var string|null
     */
    protected ?string $creationDateTo = null;
    /**
     * The settlementDateFrom
     * @var string|null
     */
    protected ?string $settlementDateFrom = null;
    /**
     * The settlementDateTo
     * @var string|null
     */
    protected ?string $settlementDateTo = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The bookingId
     * @var string|null
     */
    protected ?string $bookingId = null;
    /**
     * The booked
     * @var bool|null
     */
    protected ?bool $booked = null;
    /**
     * The checked
     * @var bool|null
     */
    protected ?bool $checked = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The settlementParty
     * @var string|null
     */
    protected ?string $settlementParty = null;
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * Constructor method for SearchSupplierAgencySettlementsRequest
     * @uses SearchSupplierAgencySettlementsRequest::setCreationDateFrom()
     * @uses SearchSupplierAgencySettlementsRequest::setCreationDateTo()
     * @uses SearchSupplierAgencySettlementsRequest::setSettlementDateFrom()
     * @uses SearchSupplierAgencySettlementsRequest::setSettlementDateTo()
     * @uses SearchSupplierAgencySettlementsRequest::setSupplierId()
     * @uses SearchSupplierAgencySettlementsRequest::setBookingId()
     * @uses SearchSupplierAgencySettlementsRequest::setBooked()
     * @uses SearchSupplierAgencySettlementsRequest::setChecked()
     * @uses SearchSupplierAgencySettlementsRequest::setSettlementId()
     * @uses SearchSupplierAgencySettlementsRequest::setSettlementParty()
     * @uses SearchSupplierAgencySettlementsRequest::setReceiptNo()
     * @param string $creationDateFrom
     * @param string $creationDateTo
     * @param string $settlementDateFrom
     * @param string $settlementDateTo
     * @param string $supplierId
     * @param string $bookingId
     * @param bool $booked
     * @param bool $checked
     * @param int $settlementId
     * @param string $settlementParty
     * @param string $receiptNo
     */
    public function __construct(?string $creationDateFrom = null, ?string $creationDateTo = null, ?string $settlementDateFrom = null, ?string $settlementDateTo = null, ?string $supplierId = null, ?string $bookingId = null, ?bool $booked = null, ?bool $checked = null, ?int $settlementId = null, ?string $settlementParty = null, ?string $receiptNo = null)
    {
        $this
            ->setCreationDateFrom($creationDateFrom)
            ->setCreationDateTo($creationDateTo)
            ->setSettlementDateFrom($settlementDateFrom)
            ->setSettlementDateTo($settlementDateTo)
            ->setSupplierId($supplierId)
            ->setBookingId($bookingId)
            ->setBooked($booked)
            ->setChecked($checked)
            ->setSettlementId($settlementId)
            ->setSettlementParty($settlementParty)
            ->setReceiptNo($receiptNo);
    }
    /**
     * Get creationDateFrom value
     * @return string|null
     */
    public function getCreationDateFrom(): ?string
    {
        return $this->creationDateFrom;
    }
    /**
     * Set creationDateFrom value
     * @param string $creationDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsRequest
     */
    public function setCreationDateFrom(?string $creationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateFrom) && !is_string($creationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateFrom, true), gettype($creationDateFrom)), __LINE__);
        }
        $this->creationDateFrom = $creationDateFrom;
        
        return $this;
    }
    /**
     * Get creationDateTo value
     * @return string|null
     */
    public function getCreationDateTo(): ?string
    {
        return $this->creationDateTo;
    }
    /**
     * Set creationDateTo value
     * @param string $creationDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsRequest
     */
    public function setCreationDateTo(?string $creationDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTo) && !is_string($creationDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTo, true), gettype($creationDateTo)), __LINE__);
        }
        $this->creationDateTo = $creationDateTo;
        
        return $this;
    }
    /**
     * Get settlementDateFrom value
     * @return string|null
     */
    public function getSettlementDateFrom(): ?string
    {
        return $this->settlementDateFrom;
    }
    /**
     * Set settlementDateFrom value
     * @param string $settlementDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsRequest
     */
    public function setSettlementDateFrom(?string $settlementDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementDateFrom) && !is_string($settlementDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementDateFrom, true), gettype($settlementDateFrom)), __LINE__);
        }
        $this->settlementDateFrom = $settlementDateFrom;
        
        return $this;
    }
    /**
     * Get settlementDateTo value
     * @return string|null
     */
    public function getSettlementDateTo(): ?string
    {
        return $this->settlementDateTo;
    }
    /**
     * Set settlementDateTo value
     * @param string $settlementDateTo
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsRequest
     */
    public function setSettlementDateTo(?string $settlementDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementDateTo) && !is_string($settlementDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementDateTo, true), gettype($settlementDateTo)), __LINE__);
        }
        $this->settlementDateTo = $settlementDateTo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsRequest
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
     * Get bookingId value
     * @return string|null
     */
    public function getBookingId(): ?string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsRequest
     */
    public function setBookingId(?string $bookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get booked value
     * @return bool|null
     */
    public function getBooked(): ?bool
    {
        return $this->booked;
    }
    /**
     * Set booked value
     * @param bool $booked
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsRequest
     */
    public function setBooked(?bool $booked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($booked) && !is_bool($booked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($booked, true), gettype($booked)), __LINE__);
        }
        $this->booked = $booked;
        
        return $this;
    }
    /**
     * Get checked value
     * @return bool|null
     */
    public function getChecked(): ?bool
    {
        return $this->checked;
    }
    /**
     * Set checked value
     * @param bool $checked
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsRequest
     */
    public function setChecked(?bool $checked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($checked) && !is_bool($checked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checked, true), gettype($checked)), __LINE__);
        }
        $this->checked = $checked;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsRequest
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get settlementParty value
     * @return string|null
     */
    public function getSettlementParty(): ?string
    {
        return $this->settlementParty;
    }
    /**
     * Set settlementParty value
     * @param string $settlementParty
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsRequest
     */
    public function setSettlementParty(?string $settlementParty = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementParty) && !is_string($settlementParty)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementParty, true), gettype($settlementParty)), __LINE__);
        }
        $this->settlementParty = $settlementParty;
        
        return $this;
    }
    /**
     * Get receiptNo value
     * @return string|null
     */
    public function getReceiptNo(): ?string
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param string $receiptNo
     * @return \Pggns\MidocoApi\Order\StructType\SearchSupplierAgencySettlementsRequest
     */
    public function setReceiptNo(?string $receiptNo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptNo) && !is_string($receiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
}
