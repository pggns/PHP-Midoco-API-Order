<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyStlmntLevelBillDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AgencyStlmntLevelBillDTO extends AbstractStructBase
{
    /**
     * The actualTurnover
     * @var float|null
     */
    protected ?float $actualTurnover = null;
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The compareFromDate
     * @var string|null
     */
    protected ?string $compareFromDate = null;
    /**
     * The compareToDate
     * @var string|null
     */
    protected ?string $compareToDate = null;
    /**
     * The cooperationId
     * @var string|null
     */
    protected ?string $cooperationId = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The fromDate
     * @var string|null
     */
    protected ?string $fromDate = null;
    /**
     * The previousTurnover
     * @var float|null
     */
    protected ?float $previousTurnover = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The toDate
     * @var string|null
     */
    protected ?string $toDate = null;
    /**
     * The totalNettoAmount
     * @var float|null
     */
    protected ?float $totalNettoAmount = null;
    /**
     * The totalVatAmount
     * @var float|null
     */
    protected ?float $totalVatAmount = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for AgencyStlmntLevelBillDTO
     * @uses AgencyStlmntLevelBillDTO::setActualTurnover()
     * @uses AgencyStlmntLevelBillDTO::setAgencyId()
     * @uses AgencyStlmntLevelBillDTO::setCompareFromDate()
     * @uses AgencyStlmntLevelBillDTO::setCompareToDate()
     * @uses AgencyStlmntLevelBillDTO::setCooperationId()
     * @uses AgencyStlmntLevelBillDTO::setCreationDate()
     * @uses AgencyStlmntLevelBillDTO::setCreationUser()
     * @uses AgencyStlmntLevelBillDTO::setDocumentId()
     * @uses AgencyStlmntLevelBillDTO::setFromDate()
     * @uses AgencyStlmntLevelBillDTO::setPreviousTurnover()
     * @uses AgencyStlmntLevelBillDTO::setSettlementId()
     * @uses AgencyStlmntLevelBillDTO::setToDate()
     * @uses AgencyStlmntLevelBillDTO::setTotalNettoAmount()
     * @uses AgencyStlmntLevelBillDTO::setTotalVatAmount()
     * @uses AgencyStlmntLevelBillDTO::setVatPercent()
     * @param float $actualTurnover
     * @param string $agencyId
     * @param string $compareFromDate
     * @param string $compareToDate
     * @param string $cooperationId
     * @param string $creationDate
     * @param int $creationUser
     * @param int $documentId
     * @param string $fromDate
     * @param float $previousTurnover
     * @param int $settlementId
     * @param string $toDate
     * @param float $totalNettoAmount
     * @param float $totalVatAmount
     * @param float $vatPercent
     */
    public function __construct(?float $actualTurnover = null, ?string $agencyId = null, ?string $compareFromDate = null, ?string $compareToDate = null, ?string $cooperationId = null, ?string $creationDate = null, ?int $creationUser = null, ?int $documentId = null, ?string $fromDate = null, ?float $previousTurnover = null, ?int $settlementId = null, ?string $toDate = null, ?float $totalNettoAmount = null, ?float $totalVatAmount = null, ?float $vatPercent = null)
    {
        $this
            ->setActualTurnover($actualTurnover)
            ->setAgencyId($agencyId)
            ->setCompareFromDate($compareFromDate)
            ->setCompareToDate($compareToDate)
            ->setCooperationId($cooperationId)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDocumentId($documentId)
            ->setFromDate($fromDate)
            ->setPreviousTurnover($previousTurnover)
            ->setSettlementId($settlementId)
            ->setToDate($toDate)
            ->setTotalNettoAmount($totalNettoAmount)
            ->setTotalVatAmount($totalVatAmount)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get actualTurnover value
     * @return float|null
     */
    public function getActualTurnover(): ?float
    {
        return $this->actualTurnover;
    }
    /**
     * Set actualTurnover value
     * @param float $actualTurnover
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
     */
    public function setActualTurnover(?float $actualTurnover = null): self
    {
        // validation for constraint: float
        if (!is_null($actualTurnover) && !(is_float($actualTurnover) || is_numeric($actualTurnover))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($actualTurnover, true), gettype($actualTurnover)), __LINE__);
        }
        $this->actualTurnover = $actualTurnover;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
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
     * Get compareFromDate value
     * @return string|null
     */
    public function getCompareFromDate(): ?string
    {
        return $this->compareFromDate;
    }
    /**
     * Set compareFromDate value
     * @param string $compareFromDate
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
     */
    public function setCompareFromDate(?string $compareFromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($compareFromDate) && !is_string($compareFromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compareFromDate, true), gettype($compareFromDate)), __LINE__);
        }
        $this->compareFromDate = $compareFromDate;
        
        return $this;
    }
    /**
     * Get compareToDate value
     * @return string|null
     */
    public function getCompareToDate(): ?string
    {
        return $this->compareToDate;
    }
    /**
     * Set compareToDate value
     * @param string $compareToDate
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
     */
    public function setCompareToDate(?string $compareToDate = null): self
    {
        // validation for constraint: string
        if (!is_null($compareToDate) && !is_string($compareToDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compareToDate, true), gettype($compareToDate)), __LINE__);
        }
        $this->compareToDate = $compareToDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
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
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get fromDate value
     * @return string|null
     */
    public function getFromDate(): ?string
    {
        return $this->fromDate;
    }
    /**
     * Set fromDate value
     * @param string $fromDate
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
     */
    public function setFromDate(?string $fromDate = null): self
    {
        // validation for constraint: string
        if (!is_null($fromDate) && !is_string($fromDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromDate, true), gettype($fromDate)), __LINE__);
        }
        $this->fromDate = $fromDate;
        
        return $this;
    }
    /**
     * Get previousTurnover value
     * @return float|null
     */
    public function getPreviousTurnover(): ?float
    {
        return $this->previousTurnover;
    }
    /**
     * Set previousTurnover value
     * @param float $previousTurnover
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
     */
    public function setPreviousTurnover(?float $previousTurnover = null): self
    {
        // validation for constraint: float
        if (!is_null($previousTurnover) && !(is_float($previousTurnover) || is_numeric($previousTurnover))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($previousTurnover, true), gettype($previousTurnover)), __LINE__);
        }
        $this->previousTurnover = $previousTurnover;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
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
     * Get toDate value
     * @return string|null
     */
    public function getToDate(): ?string
    {
        return $this->toDate;
    }
    /**
     * Set toDate value
     * @param string $toDate
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
     */
    public function setToDate(?string $toDate = null): self
    {
        // validation for constraint: string
        if (!is_null($toDate) && !is_string($toDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toDate, true), gettype($toDate)), __LINE__);
        }
        $this->toDate = $toDate;
        
        return $this;
    }
    /**
     * Get totalNettoAmount value
     * @return float|null
     */
    public function getTotalNettoAmount(): ?float
    {
        return $this->totalNettoAmount;
    }
    /**
     * Set totalNettoAmount value
     * @param float $totalNettoAmount
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
     */
    public function setTotalNettoAmount(?float $totalNettoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalNettoAmount) && !(is_float($totalNettoAmount) || is_numeric($totalNettoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalNettoAmount, true), gettype($totalNettoAmount)), __LINE__);
        }
        $this->totalNettoAmount = $totalNettoAmount;
        
        return $this;
    }
    /**
     * Get totalVatAmount value
     * @return float|null
     */
    public function getTotalVatAmount(): ?float
    {
        return $this->totalVatAmount;
    }
    /**
     * Set totalVatAmount value
     * @param float $totalVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
     */
    public function setTotalVatAmount(?float $totalVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalVatAmount) && !(is_float($totalVatAmount) || is_numeric($totalVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalVatAmount, true), gettype($totalVatAmount)), __LINE__);
        }
        $this->totalVatAmount = $totalVatAmount;
        
        return $this;
    }
    /**
     * Get vatPercent value
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vatPercent;
    }
    /**
     * Set vatPercent value
     * @param float $vatPercent
     * @return \Pggns\MidocoApi\Order\StructType\AgencyStlmntLevelBillDTO
     */
    public function setVatPercent(?float $vatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($vatPercent) && !(is_float($vatPercent) || is_numeric($vatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatPercent, true), gettype($vatPercent)), __LINE__);
        }
        $this->vatPercent = $vatPercent;
        
        return $this;
    }
}
