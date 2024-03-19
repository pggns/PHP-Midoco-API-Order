<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CrmMidocoSettlementDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CrmMidocoSettlementDTO extends AbstractStructBase
{
    /**
     * The bussinesYearStart
     * @var int|null
     */
    protected ?int $bussinesYearStart = null;
    /**
     * The chargesInvoiceSeparately
     * @var bool|null
     */
    protected ?bool $chargesInvoiceSeparately = null;
    /**
     * The cumulated
     * @var bool|null
     */
    protected ?bool $cumulated = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The excludedSuppliers
     * @var string|null
     */
    protected ?string $excludedSuppliers = null;
    /**
     * The factor
     * @var int|null
     */
    protected ?int $factor = null;
    /**
     * The fixedAmount
     * @var float|null
     */
    protected ?float $fixedAmount = null;
    /**
     * The fixedAmountDescription
     * @var string|null
     */
    protected ?string $fixedAmountDescription = null;
    /**
     * The fixedAmountPerOrgunit
     * @var float|null
     */
    protected ?float $fixedAmountPerOrgunit = null;
    /**
     * The invoiceSeparately
     * @var bool|null
     */
    protected ?bool $invoiceSeparately = null;
    /**
     * The isLevelProYear
     * @var bool|null
     */
    protected ?bool $isLevelProYear = null;
    /**
     * The isPercent
     * @var bool|null
     */
    protected ?bool $isPercent = null;
    /**
     * The levelType
     * @var int|null
     */
    protected ?int $levelType = null;
    /**
     * The mdocInvoiceSeparately
     * @var bool|null
     */
    protected ?bool $mdocInvoiceSeparately = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The startSettlementDate
     * @var string|null
     */
    protected ?string $startSettlementDate = null;
    /**
     * The summateLevels
     * @var bool|null
     */
    protected ?bool $summateLevels = null;
    /**
     * The topPaidAmount
     * @var float|null
     */
    protected ?float $topPaidAmount = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * Constructor method for CrmMidocoSettlementDTO
     * @uses CrmMidocoSettlementDTO::setBussinesYearStart()
     * @uses CrmMidocoSettlementDTO::setChargesInvoiceSeparately()
     * @uses CrmMidocoSettlementDTO::setCumulated()
     * @uses CrmMidocoSettlementDTO::setCustomerId()
     * @uses CrmMidocoSettlementDTO::setExcludedSuppliers()
     * @uses CrmMidocoSettlementDTO::setFactor()
     * @uses CrmMidocoSettlementDTO::setFixedAmount()
     * @uses CrmMidocoSettlementDTO::setFixedAmountDescription()
     * @uses CrmMidocoSettlementDTO::setFixedAmountPerOrgunit()
     * @uses CrmMidocoSettlementDTO::setInvoiceSeparately()
     * @uses CrmMidocoSettlementDTO::setIsLevelProYear()
     * @uses CrmMidocoSettlementDTO::setIsPercent()
     * @uses CrmMidocoSettlementDTO::setLevelType()
     * @uses CrmMidocoSettlementDTO::setMdocInvoiceSeparately()
     * @uses CrmMidocoSettlementDTO::setSettlementId()
     * @uses CrmMidocoSettlementDTO::setStartSettlementDate()
     * @uses CrmMidocoSettlementDTO::setSummateLevels()
     * @uses CrmMidocoSettlementDTO::setTopPaidAmount()
     * @uses CrmMidocoSettlementDTO::setValidFrom()
     * @param int $bussinesYearStart
     * @param bool $chargesInvoiceSeparately
     * @param bool $cumulated
     * @param int $customerId
     * @param string $excludedSuppliers
     * @param int $factor
     * @param float $fixedAmount
     * @param string $fixedAmountDescription
     * @param float $fixedAmountPerOrgunit
     * @param bool $invoiceSeparately
     * @param bool $isLevelProYear
     * @param bool $isPercent
     * @param int $levelType
     * @param bool $mdocInvoiceSeparately
     * @param int $settlementId
     * @param string $startSettlementDate
     * @param bool $summateLevels
     * @param float $topPaidAmount
     * @param string $validFrom
     */
    public function __construct(?int $bussinesYearStart = null, ?bool $chargesInvoiceSeparately = null, ?bool $cumulated = null, ?int $customerId = null, ?string $excludedSuppliers = null, ?int $factor = null, ?float $fixedAmount = null, ?string $fixedAmountDescription = null, ?float $fixedAmountPerOrgunit = null, ?bool $invoiceSeparately = null, ?bool $isLevelProYear = null, ?bool $isPercent = null, ?int $levelType = null, ?bool $mdocInvoiceSeparately = null, ?int $settlementId = null, ?string $startSettlementDate = null, ?bool $summateLevels = null, ?float $topPaidAmount = null, ?string $validFrom = null)
    {
        $this
            ->setBussinesYearStart($bussinesYearStart)
            ->setChargesInvoiceSeparately($chargesInvoiceSeparately)
            ->setCumulated($cumulated)
            ->setCustomerId($customerId)
            ->setExcludedSuppliers($excludedSuppliers)
            ->setFactor($factor)
            ->setFixedAmount($fixedAmount)
            ->setFixedAmountDescription($fixedAmountDescription)
            ->setFixedAmountPerOrgunit($fixedAmountPerOrgunit)
            ->setInvoiceSeparately($invoiceSeparately)
            ->setIsLevelProYear($isLevelProYear)
            ->setIsPercent($isPercent)
            ->setLevelType($levelType)
            ->setMdocInvoiceSeparately($mdocInvoiceSeparately)
            ->setSettlementId($settlementId)
            ->setStartSettlementDate($startSettlementDate)
            ->setSummateLevels($summateLevels)
            ->setTopPaidAmount($topPaidAmount)
            ->setValidFrom($validFrom);
    }
    /**
     * Get bussinesYearStart value
     * @return int|null
     */
    public function getBussinesYearStart(): ?int
    {
        return $this->bussinesYearStart;
    }
    /**
     * Set bussinesYearStart value
     * @param int $bussinesYearStart
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setBussinesYearStart(?int $bussinesYearStart = null): self
    {
        // validation for constraint: int
        if (!is_null($bussinesYearStart) && !(is_int($bussinesYearStart) || ctype_digit($bussinesYearStart))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bussinesYearStart, true), gettype($bussinesYearStart)), __LINE__);
        }
        $this->bussinesYearStart = $bussinesYearStart;
        
        return $this;
    }
    /**
     * Get chargesInvoiceSeparately value
     * @return bool|null
     */
    public function getChargesInvoiceSeparately(): ?bool
    {
        return $this->chargesInvoiceSeparately;
    }
    /**
     * Set chargesInvoiceSeparately value
     * @param bool $chargesInvoiceSeparately
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setChargesInvoiceSeparately(?bool $chargesInvoiceSeparately = null): self
    {
        // validation for constraint: boolean
        if (!is_null($chargesInvoiceSeparately) && !is_bool($chargesInvoiceSeparately)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($chargesInvoiceSeparately, true), gettype($chargesInvoiceSeparately)), __LINE__);
        }
        $this->chargesInvoiceSeparately = $chargesInvoiceSeparately;
        
        return $this;
    }
    /**
     * Get cumulated value
     * @return bool|null
     */
    public function getCumulated(): ?bool
    {
        return $this->cumulated;
    }
    /**
     * Set cumulated value
     * @param bool $cumulated
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setCumulated(?bool $cumulated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($cumulated) && !is_bool($cumulated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cumulated, true), gettype($cumulated)), __LINE__);
        }
        $this->cumulated = $cumulated;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
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
     * Get excludedSuppliers value
     * @return string|null
     */
    public function getExcludedSuppliers(): ?string
    {
        return $this->excludedSuppliers;
    }
    /**
     * Set excludedSuppliers value
     * @param string $excludedSuppliers
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setExcludedSuppliers(?string $excludedSuppliers = null): self
    {
        // validation for constraint: string
        if (!is_null($excludedSuppliers) && !is_string($excludedSuppliers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($excludedSuppliers, true), gettype($excludedSuppliers)), __LINE__);
        }
        $this->excludedSuppliers = $excludedSuppliers;
        
        return $this;
    }
    /**
     * Get factor value
     * @return int|null
     */
    public function getFactor(): ?int
    {
        return $this->factor;
    }
    /**
     * Set factor value
     * @param int $factor
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setFactor(?int $factor = null): self
    {
        // validation for constraint: int
        if (!is_null($factor) && !(is_int($factor) || ctype_digit($factor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($factor, true), gettype($factor)), __LINE__);
        }
        $this->factor = $factor;
        
        return $this;
    }
    /**
     * Get fixedAmount value
     * @return float|null
     */
    public function getFixedAmount(): ?float
    {
        return $this->fixedAmount;
    }
    /**
     * Set fixedAmount value
     * @param float $fixedAmount
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setFixedAmount(?float $fixedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($fixedAmount) && !(is_float($fixedAmount) || is_numeric($fixedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fixedAmount, true), gettype($fixedAmount)), __LINE__);
        }
        $this->fixedAmount = $fixedAmount;
        
        return $this;
    }
    /**
     * Get fixedAmountDescription value
     * @return string|null
     */
    public function getFixedAmountDescription(): ?string
    {
        return $this->fixedAmountDescription;
    }
    /**
     * Set fixedAmountDescription value
     * @param string $fixedAmountDescription
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setFixedAmountDescription(?string $fixedAmountDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($fixedAmountDescription) && !is_string($fixedAmountDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fixedAmountDescription, true), gettype($fixedAmountDescription)), __LINE__);
        }
        $this->fixedAmountDescription = $fixedAmountDescription;
        
        return $this;
    }
    /**
     * Get fixedAmountPerOrgunit value
     * @return float|null
     */
    public function getFixedAmountPerOrgunit(): ?float
    {
        return $this->fixedAmountPerOrgunit;
    }
    /**
     * Set fixedAmountPerOrgunit value
     * @param float $fixedAmountPerOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setFixedAmountPerOrgunit(?float $fixedAmountPerOrgunit = null): self
    {
        // validation for constraint: float
        if (!is_null($fixedAmountPerOrgunit) && !(is_float($fixedAmountPerOrgunit) || is_numeric($fixedAmountPerOrgunit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($fixedAmountPerOrgunit, true), gettype($fixedAmountPerOrgunit)), __LINE__);
        }
        $this->fixedAmountPerOrgunit = $fixedAmountPerOrgunit;
        
        return $this;
    }
    /**
     * Get invoiceSeparately value
     * @return bool|null
     */
    public function getInvoiceSeparately(): ?bool
    {
        return $this->invoiceSeparately;
    }
    /**
     * Set invoiceSeparately value
     * @param bool $invoiceSeparately
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setInvoiceSeparately(?bool $invoiceSeparately = null): self
    {
        // validation for constraint: boolean
        if (!is_null($invoiceSeparately) && !is_bool($invoiceSeparately)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($invoiceSeparately, true), gettype($invoiceSeparately)), __LINE__);
        }
        $this->invoiceSeparately = $invoiceSeparately;
        
        return $this;
    }
    /**
     * Get isLevelProYear value
     * @return bool|null
     */
    public function getIsLevelProYear(): ?bool
    {
        return $this->isLevelProYear;
    }
    /**
     * Set isLevelProYear value
     * @param bool $isLevelProYear
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setIsLevelProYear(?bool $isLevelProYear = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLevelProYear) && !is_bool($isLevelProYear)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLevelProYear, true), gettype($isLevelProYear)), __LINE__);
        }
        $this->isLevelProYear = $isLevelProYear;
        
        return $this;
    }
    /**
     * Get isPercent value
     * @return bool|null
     */
    public function getIsPercent(): ?bool
    {
        return $this->isPercent;
    }
    /**
     * Set isPercent value
     * @param bool $isPercent
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setIsPercent(?bool $isPercent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPercent) && !is_bool($isPercent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPercent, true), gettype($isPercent)), __LINE__);
        }
        $this->isPercent = $isPercent;
        
        return $this;
    }
    /**
     * Get levelType value
     * @return int|null
     */
    public function getLevelType(): ?int
    {
        return $this->levelType;
    }
    /**
     * Set levelType value
     * @param int $levelType
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setLevelType(?int $levelType = null): self
    {
        // validation for constraint: int
        if (!is_null($levelType) && !(is_int($levelType) || ctype_digit($levelType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($levelType, true), gettype($levelType)), __LINE__);
        }
        $this->levelType = $levelType;
        
        return $this;
    }
    /**
     * Get mdocInvoiceSeparately value
     * @return bool|null
     */
    public function getMdocInvoiceSeparately(): ?bool
    {
        return $this->mdocInvoiceSeparately;
    }
    /**
     * Set mdocInvoiceSeparately value
     * @param bool $mdocInvoiceSeparately
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setMdocInvoiceSeparately(?bool $mdocInvoiceSeparately = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mdocInvoiceSeparately) && !is_bool($mdocInvoiceSeparately)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mdocInvoiceSeparately, true), gettype($mdocInvoiceSeparately)), __LINE__);
        }
        $this->mdocInvoiceSeparately = $mdocInvoiceSeparately;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
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
     * Get startSettlementDate value
     * @return string|null
     */
    public function getStartSettlementDate(): ?string
    {
        return $this->startSettlementDate;
    }
    /**
     * Set startSettlementDate value
     * @param string $startSettlementDate
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setStartSettlementDate(?string $startSettlementDate = null): self
    {
        // validation for constraint: string
        if (!is_null($startSettlementDate) && !is_string($startSettlementDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startSettlementDate, true), gettype($startSettlementDate)), __LINE__);
        }
        $this->startSettlementDate = $startSettlementDate;
        
        return $this;
    }
    /**
     * Get summateLevels value
     * @return bool|null
     */
    public function getSummateLevels(): ?bool
    {
        return $this->summateLevels;
    }
    /**
     * Set summateLevels value
     * @param bool $summateLevels
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setSummateLevels(?bool $summateLevels = null): self
    {
        // validation for constraint: boolean
        if (!is_null($summateLevels) && !is_bool($summateLevels)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($summateLevels, true), gettype($summateLevels)), __LINE__);
        }
        $this->summateLevels = $summateLevels;
        
        return $this;
    }
    /**
     * Get topPaidAmount value
     * @return float|null
     */
    public function getTopPaidAmount(): ?float
    {
        return $this->topPaidAmount;
    }
    /**
     * Set topPaidAmount value
     * @param float $topPaidAmount
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
     */
    public function setTopPaidAmount(?float $topPaidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($topPaidAmount) && !(is_float($topPaidAmount) || is_numeric($topPaidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($topPaidAmount, true), gettype($topPaidAmount)), __LINE__);
        }
        $this->topPaidAmount = $topPaidAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CrmMidocoSettlementDTO
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
