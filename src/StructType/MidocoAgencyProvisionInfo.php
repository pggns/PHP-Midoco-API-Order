<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAgencyProvisionInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoAgencyProvisionInfo extends AbstractStructBase
{
    /**
     * The tempRepositoryId
     * @var int|null
     */
    protected ?int $tempRepositoryId = null;
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
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The totalProvisionVat
     * @var float|null
     */
    protected ?float $totalProvisionVat = null;
    /**
     * The totalProvision
     * @var float|null
     */
    protected ?float $totalProvision = null;
    /**
     * The inkassoAmount
     * @var float|null
     */
    protected ?float $inkassoAmount = null;
    /**
     * The orders
     * @var int|null
     */
    protected ?int $orders = null;
    /**
     * The containsStorno
     * @var bool|null
     */
    protected ?bool $containsStorno = null;
    /**
     * The agencyCurrency
     * @var string|null
     */
    protected ?string $agencyCurrency = null;
    /**
     * Constructor method for MidocoAgencyProvisionInfo
     * @uses MidocoAgencyProvisionInfo::setTempRepositoryId()
     * @uses MidocoAgencyProvisionInfo::setAgencyId()
     * @uses MidocoAgencyProvisionInfo::setAgencyName()
     * @uses MidocoAgencyProvisionInfo::setPaidAmount()
     * @uses MidocoAgencyProvisionInfo::setSettlementDate()
     * @uses MidocoAgencyProvisionInfo::setSettlementId()
     * @uses MidocoAgencyProvisionInfo::setTotalProvisionVat()
     * @uses MidocoAgencyProvisionInfo::setTotalProvision()
     * @uses MidocoAgencyProvisionInfo::setInkassoAmount()
     * @uses MidocoAgencyProvisionInfo::setOrders()
     * @uses MidocoAgencyProvisionInfo::setContainsStorno()
     * @uses MidocoAgencyProvisionInfo::setAgencyCurrency()
     * @param int $tempRepositoryId
     * @param string $agencyId
     * @param string $agencyName
     * @param float $paidAmount
     * @param string $settlementDate
     * @param int $settlementId
     * @param float $totalProvisionVat
     * @param float $totalProvision
     * @param float $inkassoAmount
     * @param int $orders
     * @param bool $containsStorno
     * @param string $agencyCurrency
     */
    public function __construct(?int $tempRepositoryId = null, ?string $agencyId = null, ?string $agencyName = null, ?float $paidAmount = null, ?string $settlementDate = null, ?int $settlementId = null, ?float $totalProvisionVat = null, ?float $totalProvision = null, ?float $inkassoAmount = null, ?int $orders = null, ?bool $containsStorno = null, ?string $agencyCurrency = null)
    {
        $this
            ->setTempRepositoryId($tempRepositoryId)
            ->setAgencyId($agencyId)
            ->setAgencyName($agencyName)
            ->setPaidAmount($paidAmount)
            ->setSettlementDate($settlementDate)
            ->setSettlementId($settlementId)
            ->setTotalProvisionVat($totalProvisionVat)
            ->setTotalProvision($totalProvision)
            ->setInkassoAmount($inkassoAmount)
            ->setOrders($orders)
            ->setContainsStorno($containsStorno)
            ->setAgencyCurrency($agencyCurrency);
    }
    /**
     * Get tempRepositoryId value
     * @return int|null
     */
    public function getTempRepositoryId(): ?int
    {
        return $this->tempRepositoryId;
    }
    /**
     * Set tempRepositoryId value
     * @param int $tempRepositoryId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo
     */
    public function setTempRepositoryId(?int $tempRepositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($tempRepositoryId) && !(is_int($tempRepositoryId) || ctype_digit($tempRepositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tempRepositoryId, true), gettype($tempRepositoryId)), __LINE__);
        }
        $this->tempRepositoryId = $tempRepositoryId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo
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
     * Get totalProvisionVat value
     * @return float|null
     */
    public function getTotalProvisionVat(): ?float
    {
        return $this->totalProvisionVat;
    }
    /**
     * Set totalProvisionVat value
     * @param float $totalProvisionVat
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo
     */
    public function setTotalProvisionVat(?float $totalProvisionVat = null): self
    {
        // validation for constraint: float
        if (!is_null($totalProvisionVat) && !(is_float($totalProvisionVat) || is_numeric($totalProvisionVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalProvisionVat, true), gettype($totalProvisionVat)), __LINE__);
        }
        $this->totalProvisionVat = $totalProvisionVat;
        
        return $this;
    }
    /**
     * Get totalProvision value
     * @return float|null
     */
    public function getTotalProvision(): ?float
    {
        return $this->totalProvision;
    }
    /**
     * Set totalProvision value
     * @param float $totalProvision
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo
     */
    public function setTotalProvision(?float $totalProvision = null): self
    {
        // validation for constraint: float
        if (!is_null($totalProvision) && !(is_float($totalProvision) || is_numeric($totalProvision))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalProvision, true), gettype($totalProvision)), __LINE__);
        }
        $this->totalProvision = $totalProvision;
        
        return $this;
    }
    /**
     * Get inkassoAmount value
     * @return float|null
     */
    public function getInkassoAmount(): ?float
    {
        return $this->inkassoAmount;
    }
    /**
     * Set inkassoAmount value
     * @param float $inkassoAmount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo
     */
    public function setInkassoAmount(?float $inkassoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($inkassoAmount) && !(is_float($inkassoAmount) || is_numeric($inkassoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($inkassoAmount, true), gettype($inkassoAmount)), __LINE__);
        }
        $this->inkassoAmount = $inkassoAmount;
        
        return $this;
    }
    /**
     * Get orders value
     * @return int|null
     */
    public function getOrders(): ?int
    {
        return $this->orders;
    }
    /**
     * Set orders value
     * @param int $orders
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo
     */
    public function setOrders(?int $orders = null): self
    {
        // validation for constraint: int
        if (!is_null($orders) && !(is_int($orders) || ctype_digit($orders))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orders, true), gettype($orders)), __LINE__);
        }
        $this->orders = $orders;
        
        return $this;
    }
    /**
     * Get containsStorno value
     * @return bool|null
     */
    public function getContainsStorno(): ?bool
    {
        return $this->containsStorno;
    }
    /**
     * Set containsStorno value
     * @param bool $containsStorno
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo
     */
    public function setContainsStorno(?bool $containsStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($containsStorno) && !is_bool($containsStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($containsStorno, true), gettype($containsStorno)), __LINE__);
        }
        $this->containsStorno = $containsStorno;
        
        return $this;
    }
    /**
     * Get agencyCurrency value
     * @return string|null
     */
    public function getAgencyCurrency(): ?string
    {
        return $this->agencyCurrency;
    }
    /**
     * Set agencyCurrency value
     * @param string $agencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyProvisionInfo
     */
    public function setAgencyCurrency(?string $agencyCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyCurrency) && !is_string($agencyCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyCurrency, true), gettype($agencyCurrency)), __LINE__);
        }
        $this->agencyCurrency = $agencyCurrency;
        
        return $this;
    }
}
