<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMidocoAgencyProvisionInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMidocoAgencyProvisionInfo extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The agencyName
     * @var string|null
     */
    protected ?string $agencyName = null;
    /**
     * The paidAmount
     * @var float|null
     */
    protected ?float $paidAmount = null;
    /**
     * The settlementDate
     * @var string|null
     */
    protected ?string $settlementDate = null;
    /**
     * The invoiceNr
     * @var int|null
     */
    protected ?int $invoiceNr = null;
    /**
     * The invoiceId
     * @var int|null
     */
    protected ?int $invoiceId = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * Constructor method for SearchMidocoAgencyProvisionInfo
     * @uses SearchMidocoAgencyProvisionInfo::setAgencyId()
     * @uses SearchMidocoAgencyProvisionInfo::setAgencyName()
     * @uses SearchMidocoAgencyProvisionInfo::setPaidAmount()
     * @uses SearchMidocoAgencyProvisionInfo::setSettlementDate()
     * @uses SearchMidocoAgencyProvisionInfo::setInvoiceNr()
     * @uses SearchMidocoAgencyProvisionInfo::setInvoiceId()
     * @uses SearchMidocoAgencyProvisionInfo::setSettlementId()
     * @param string $agencyId
     * @param string $agencyName
     * @param float $paidAmount
     * @param string $settlementDate
     * @param int $invoiceNr
     * @param int $invoiceId
     * @param int $settlementId
     */
    public function __construct(?string $agencyId = null, ?string $agencyName = null, ?float $paidAmount = null, ?string $settlementDate = null, ?int $invoiceNr = null, ?int $invoiceId = null, ?int $settlementId = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setAgencyName($agencyName)
            ->setPaidAmount($paidAmount)
            ->setSettlementDate($settlementDate)
            ->setInvoiceNr($invoiceNr)
            ->setInvoiceId($invoiceId)
            ->setSettlementId($settlementId);
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo
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
     * Get agencyName value
     * @return string|null
     */
    public function getAgencyName(): ?string
    {
        return $this->agencyName;
    }
    /**
     * Set agencyName value
     * @param string $agencyName
     * @return \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo
     */
    public function setAgencyName(?string $agencyName = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyName) && !is_string($agencyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyName, true), gettype($agencyName)), __LINE__);
        }
        $this->agencyName = $agencyName;
        
        return $this;
    }
    /**
     * Get paidAmount value
     * @return float|null
     */
    public function getPaidAmount(): ?float
    {
        return $this->paidAmount;
    }
    /**
     * Set paidAmount value
     * @param float $paidAmount
     * @return \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo
     */
    public function setPaidAmount(?float $paidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($paidAmount) && !(is_float($paidAmount) || is_numeric($paidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($paidAmount, true), gettype($paidAmount)), __LINE__);
        }
        $this->paidAmount = $paidAmount;
        
        return $this;
    }
    /**
     * Get settlementDate value
     * @return string|null
     */
    public function getSettlementDate(): ?string
    {
        return $this->settlementDate;
    }
    /**
     * Set settlementDate value
     * @param string $settlementDate
     * @return \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo
     */
    public function setSettlementDate(?string $settlementDate = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementDate) && !is_string($settlementDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementDate, true), gettype($settlementDate)), __LINE__);
        }
        $this->settlementDate = $settlementDate;
        
        return $this;
    }
    /**
     * Get invoiceNr value
     * @return int|null
     */
    public function getInvoiceNr(): ?int
    {
        return $this->invoiceNr;
    }
    /**
     * Set invoiceNr value
     * @param int $invoiceNr
     * @return \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo
     */
    public function setInvoiceNr(?int $invoiceNr = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceNr) && !(is_int($invoiceNr) || ctype_digit($invoiceNr))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceNr, true), gettype($invoiceNr)), __LINE__);
        }
        $this->invoiceNr = $invoiceNr;
        
        return $this;
    }
    /**
     * Get invoiceId value
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
    /**
     * Set invoiceId value
     * @param int $invoiceId
     * @return \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo
     */
    public function setInvoiceId(?int $invoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceId) && !(is_int($invoiceId) || ctype_digit($invoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchMidocoAgencyProvisionInfo
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
}
