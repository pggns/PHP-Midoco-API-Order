<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MediatorBillingDTO StructType
 * @subpackage Structs
 */
class MediatorBillingDTO extends AbstractStructBase
{
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The addlDocumentId
     * @var int|null
     */
    protected ?int $addlDocumentId = null;
    /**
     * The calculatedSum
     * @var float|null
     */
    protected ?float $calculatedSum = null;
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
     * The debtAmount
     * @var float|null
     */
    protected ?float $debtAmount = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The feeAmount
     * @var float|null
     */
    protected ?float $feeAmount = null;
    /**
     * The feeDebtAmount
     * @var float|null
     */
    protected ?float $feeDebtAmount = null;
    /**
     * The mediatorBillingId
     * @var int|null
     */
    protected ?int $mediatorBillingId = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The nettoAmount
     * @var float|null
     */
    protected ?float $nettoAmount = null;
    /**
     * The paidAmount
     * @var float|null
     */
    protected ?float $paidAmount = null;
    /**
     * The percent
     * @var float|null
     */
    protected ?float $percent = null;
    /**
     * The planId
     * @var string|null
     */
    protected ?string $planId = null;
    /**
     * The settlementMonth
     * @var string|null
     */
    protected ?string $settlementMonth = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * Constructor method for MediatorBillingDTO
     * @uses MediatorBillingDTO::setAccountId()
     * @uses MediatorBillingDTO::setAddlDocumentId()
     * @uses MediatorBillingDTO::setCalculatedSum()
     * @uses MediatorBillingDTO::setCreationDate()
     * @uses MediatorBillingDTO::setCreationUser()
     * @uses MediatorBillingDTO::setDebtAmount()
     * @uses MediatorBillingDTO::setDescription()
     * @uses MediatorBillingDTO::setDocumentId()
     * @uses MediatorBillingDTO::setFeeAmount()
     * @uses MediatorBillingDTO::setFeeDebtAmount()
     * @uses MediatorBillingDTO::setMediatorBillingId()
     * @uses MediatorBillingDTO::setMediatorId()
     * @uses MediatorBillingDTO::setNettoAmount()
     * @uses MediatorBillingDTO::setPaidAmount()
     * @uses MediatorBillingDTO::setPercent()
     * @uses MediatorBillingDTO::setPlanId()
     * @uses MediatorBillingDTO::setSettlementMonth()
     * @uses MediatorBillingDTO::setUnitName()
     * @uses MediatorBillingDTO::setVatAmount()
     * @uses MediatorBillingDTO::setVatCode()
     * @param string $accountId
     * @param int $addlDocumentId
     * @param float $calculatedSum
     * @param string $creationDate
     * @param int $creationUser
     * @param float $debtAmount
     * @param string $description
     * @param int $documentId
     * @param float $feeAmount
     * @param float $feeDebtAmount
     * @param int $mediatorBillingId
     * @param string $mediatorId
     * @param float $nettoAmount
     * @param float $paidAmount
     * @param float $percent
     * @param string $planId
     * @param string $settlementMonth
     * @param string $unitName
     * @param float $vatAmount
     * @param string $vatCode
     */
    public function __construct(?string $accountId = null, ?int $addlDocumentId = null, ?float $calculatedSum = null, ?string $creationDate = null, ?int $creationUser = null, ?float $debtAmount = null, ?string $description = null, ?int $documentId = null, ?float $feeAmount = null, ?float $feeDebtAmount = null, ?int $mediatorBillingId = null, ?string $mediatorId = null, ?float $nettoAmount = null, ?float $paidAmount = null, ?float $percent = null, ?string $planId = null, ?string $settlementMonth = null, ?string $unitName = null, ?float $vatAmount = null, ?string $vatCode = null)
    {
        $this
            ->setAccountId($accountId)
            ->setAddlDocumentId($addlDocumentId)
            ->setCalculatedSum($calculatedSum)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setDebtAmount($debtAmount)
            ->setDescription($description)
            ->setDocumentId($documentId)
            ->setFeeAmount($feeAmount)
            ->setFeeDebtAmount($feeDebtAmount)
            ->setMediatorBillingId($mediatorBillingId)
            ->setMediatorId($mediatorId)
            ->setNettoAmount($nettoAmount)
            ->setPaidAmount($paidAmount)
            ->setPercent($percent)
            ->setPlanId($planId)
            ->setSettlementMonth($settlementMonth)
            ->setUnitName($unitName)
            ->setVatAmount($vatAmount)
            ->setVatCode($vatCode);
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get addlDocumentId value
     * @return int|null
     */
    public function getAddlDocumentId(): ?int
    {
        return $this->addlDocumentId;
    }
    /**
     * Set addlDocumentId value
     * @param int $addlDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setAddlDocumentId(?int $addlDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($addlDocumentId) && !(is_int($addlDocumentId) || ctype_digit($addlDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addlDocumentId, true), gettype($addlDocumentId)), __LINE__);
        }
        $this->addlDocumentId = $addlDocumentId;
        
        return $this;
    }
    /**
     * Get calculatedSum value
     * @return float|null
     */
    public function getCalculatedSum(): ?float
    {
        return $this->calculatedSum;
    }
    /**
     * Set calculatedSum value
     * @param float $calculatedSum
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setCalculatedSum(?float $calculatedSum = null): self
    {
        // validation for constraint: float
        if (!is_null($calculatedSum) && !(is_float($calculatedSum) || is_numeric($calculatedSum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($calculatedSum, true), gettype($calculatedSum)), __LINE__);
        }
        $this->calculatedSum = $calculatedSum;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
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
     * Get debtAmount value
     * @return float|null
     */
    public function getDebtAmount(): ?float
    {
        return $this->debtAmount;
    }
    /**
     * Set debtAmount value
     * @param float $debtAmount
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setDebtAmount(?float $debtAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($debtAmount) && !(is_float($debtAmount) || is_numeric($debtAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($debtAmount, true), gettype($debtAmount)), __LINE__);
        }
        $this->debtAmount = $debtAmount;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
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
     * Get feeAmount value
     * @return float|null
     */
    public function getFeeAmount(): ?float
    {
        return $this->feeAmount;
    }
    /**
     * Set feeAmount value
     * @param float $feeAmount
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setFeeAmount(?float $feeAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($feeAmount) && !(is_float($feeAmount) || is_numeric($feeAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeAmount, true), gettype($feeAmount)), __LINE__);
        }
        $this->feeAmount = $feeAmount;
        
        return $this;
    }
    /**
     * Get feeDebtAmount value
     * @return float|null
     */
    public function getFeeDebtAmount(): ?float
    {
        return $this->feeDebtAmount;
    }
    /**
     * Set feeDebtAmount value
     * @param float $feeDebtAmount
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setFeeDebtAmount(?float $feeDebtAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($feeDebtAmount) && !(is_float($feeDebtAmount) || is_numeric($feeDebtAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($feeDebtAmount, true), gettype($feeDebtAmount)), __LINE__);
        }
        $this->feeDebtAmount = $feeDebtAmount;
        
        return $this;
    }
    /**
     * Get mediatorBillingId value
     * @return int|null
     */
    public function getMediatorBillingId(): ?int
    {
        return $this->mediatorBillingId;
    }
    /**
     * Set mediatorBillingId value
     * @param int $mediatorBillingId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setMediatorBillingId(?int $mediatorBillingId = null): self
    {
        // validation for constraint: int
        if (!is_null($mediatorBillingId) && !(is_int($mediatorBillingId) || ctype_digit($mediatorBillingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mediatorBillingId, true), gettype($mediatorBillingId)), __LINE__);
        }
        $this->mediatorBillingId = $mediatorBillingId;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get nettoAmount value
     * @return float|null
     */
    public function getNettoAmount(): ?float
    {
        return $this->nettoAmount;
    }
    /**
     * Set nettoAmount value
     * @param float $nettoAmount
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setNettoAmount(?float $nettoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($nettoAmount) && !(is_float($nettoAmount) || is_numeric($nettoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nettoAmount, true), gettype($nettoAmount)), __LINE__);
        }
        $this->nettoAmount = $nettoAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
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
     * Get percent value
     * @return float|null
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }
    /**
     * Set percent value
     * @param float $percent
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setPercent(?float $percent = null): self
    {
        // validation for constraint: float
        if (!is_null($percent) && !(is_float($percent) || is_numeric($percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        $this->percent = $percent;
        
        return $this;
    }
    /**
     * Get planId value
     * @return string|null
     */
    public function getPlanId(): ?string
    {
        return $this->planId;
    }
    /**
     * Set planId value
     * @param string $planId
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setPlanId(?string $planId = null): self
    {
        // validation for constraint: string
        if (!is_null($planId) && !is_string($planId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($planId, true), gettype($planId)), __LINE__);
        }
        $this->planId = $planId;
        
        return $this;
    }
    /**
     * Get settlementMonth value
     * @return string|null
     */
    public function getSettlementMonth(): ?string
    {
        return $this->settlementMonth;
    }
    /**
     * Set settlementMonth value
     * @param string $settlementMonth
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setSettlementMonth(?string $settlementMonth = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementMonth) && !is_string($settlementMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementMonth, true), gettype($settlementMonth)), __LINE__);
        }
        $this->settlementMonth = $settlementMonth;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get vatCode value
     * @return string|null
     */
    public function getVatCode(): ?string
    {
        return $this->vatCode;
    }
    /**
     * Set vatCode value
     * @param string $vatCode
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO
     */
    public function setVatCode(?string $vatCode = null): self
    {
        // validation for constraint: string
        if (!is_null($vatCode) && !is_string($vatCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatCode, true), gettype($vatCode)), __LINE__);
        }
        $this->vatCode = $vatCode;
        
        return $this;
    }
}
