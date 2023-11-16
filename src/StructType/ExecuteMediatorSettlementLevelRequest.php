<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteMediatorSettlementLevelRequest StructType
 * @subpackage Structs
 */
class ExecuteMediatorSettlementLevelRequest extends AbstractStructBase
{
    /**
     * The month
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $month;
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The accountIdNoVat
     * @var string|null
     */
    protected ?string $accountIdNoVat = null;
    /**
     * The accountIdReverseCharge
     * @var string|null
     */
    protected ?string $accountIdReverseCharge = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The useEmailForBilling
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $useEmailForBilling = null;
    /**
     * The isPreview
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $isPreview = null;
    /**
     * The allowDuplicatedSettlements
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $allowDuplicatedSettlements = null;
    /**
     * The creditPayViaStandardBank
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $creditPayViaStandardBank = null;
    /**
     * The demandedReceivablesByStandardBank
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $demandedReceivablesByStandardBank = null;
    /**
     * The isPreviewPDF
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isPreviewPDF = null;
    /**
     * The orgUnitForPDFPreview
     * @var string|null
     */
    protected ?string $orgUnitForPDFPreview = null;
    /**
     * Constructor method for ExecuteMediatorSettlementLevelRequest
     * @uses ExecuteMediatorSettlementLevelRequest::setMonth()
     * @uses ExecuteMediatorSettlementLevelRequest::setAccountId()
     * @uses ExecuteMediatorSettlementLevelRequest::setAccountIdNoVat()
     * @uses ExecuteMediatorSettlementLevelRequest::setAccountIdReverseCharge()
     * @uses ExecuteMediatorSettlementLevelRequest::setDescription()
     * @uses ExecuteMediatorSettlementLevelRequest::setMediatorId()
     * @uses ExecuteMediatorSettlementLevelRequest::setUseEmailForBilling()
     * @uses ExecuteMediatorSettlementLevelRequest::setIsPreview()
     * @uses ExecuteMediatorSettlementLevelRequest::setAllowDuplicatedSettlements()
     * @uses ExecuteMediatorSettlementLevelRequest::setCreditPayViaStandardBank()
     * @uses ExecuteMediatorSettlementLevelRequest::setDemandedReceivablesByStandardBank()
     * @uses ExecuteMediatorSettlementLevelRequest::setIsPreviewPDF()
     * @uses ExecuteMediatorSettlementLevelRequest::setOrgUnitForPDFPreview()
     * @param string $month
     * @param string $accountId
     * @param string $accountIdNoVat
     * @param string $accountIdReverseCharge
     * @param string $description
     * @param string $mediatorId
     * @param bool $useEmailForBilling
     * @param bool $isPreview
     * @param bool $allowDuplicatedSettlements
     * @param bool $creditPayViaStandardBank
     * @param bool $demandedReceivablesByStandardBank
     * @param bool $isPreviewPDF
     * @param string $orgUnitForPDFPreview
     */
    public function __construct(string $month, ?string $accountId = null, ?string $accountIdNoVat = null, ?string $accountIdReverseCharge = null, ?string $description = null, ?string $mediatorId = null, ?bool $useEmailForBilling = false, ?bool $isPreview = true, ?bool $allowDuplicatedSettlements = false, ?bool $creditPayViaStandardBank = true, ?bool $demandedReceivablesByStandardBank = true, ?bool $isPreviewPDF = false, ?string $orgUnitForPDFPreview = null)
    {
        $this
            ->setMonth($month)
            ->setAccountId($accountId)
            ->setAccountIdNoVat($accountIdNoVat)
            ->setAccountIdReverseCharge($accountIdReverseCharge)
            ->setDescription($description)
            ->setMediatorId($mediatorId)
            ->setUseEmailForBilling($useEmailForBilling)
            ->setIsPreview($isPreview)
            ->setAllowDuplicatedSettlements($allowDuplicatedSettlements)
            ->setCreditPayViaStandardBank($creditPayViaStandardBank)
            ->setDemandedReceivablesByStandardBank($demandedReceivablesByStandardBank)
            ->setIsPreviewPDF($isPreviewPDF)
            ->setOrgUnitForPDFPreview($orgUnitForPDFPreview);
    }
    /**
     * Get month value
     * @return string
     */
    public function getMonth(): string
    {
        return $this->month;
    }
    /**
     * Set month value
     * @uses \Pggns\MidocoApi\Order\EnumType\Month::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\Month::getValidValues()
     * @throws InvalidArgumentException
     * @param string $month
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest
     */
    public function setMonth(string $month): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\Month::valueIsValid($month)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\Month', is_array($month) ? implode(', ', $month) : var_export($month, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\Month::getValidValues())), __LINE__);
        }
        $this->month = $month;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest
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
     * Get accountIdNoVat value
     * @return string|null
     */
    public function getAccountIdNoVat(): ?string
    {
        return $this->accountIdNoVat;
    }
    /**
     * Set accountIdNoVat value
     * @param string $accountIdNoVat
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest
     */
    public function setAccountIdNoVat(?string $accountIdNoVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdNoVat) && !is_string($accountIdNoVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdNoVat, true), gettype($accountIdNoVat)), __LINE__);
        }
        $this->accountIdNoVat = $accountIdNoVat;
        
        return $this;
    }
    /**
     * Get accountIdReverseCharge value
     * @return string|null
     */
    public function getAccountIdReverseCharge(): ?string
    {
        return $this->accountIdReverseCharge;
    }
    /**
     * Set accountIdReverseCharge value
     * @param string $accountIdReverseCharge
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest
     */
    public function setAccountIdReverseCharge(?string $accountIdReverseCharge = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdReverseCharge) && !is_string($accountIdReverseCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdReverseCharge, true), gettype($accountIdReverseCharge)), __LINE__);
        }
        $this->accountIdReverseCharge = $accountIdReverseCharge;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest
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
     * Get useEmailForBilling value
     * @return bool|null
     */
    public function getUseEmailForBilling(): ?bool
    {
        return $this->useEmailForBilling;
    }
    /**
     * Set useEmailForBilling value
     * @param bool $useEmailForBilling
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest
     */
    public function setUseEmailForBilling(?bool $useEmailForBilling = false): self
    {
        // validation for constraint: boolean
        if (!is_null($useEmailForBilling) && !is_bool($useEmailForBilling)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useEmailForBilling, true), gettype($useEmailForBilling)), __LINE__);
        }
        $this->useEmailForBilling = $useEmailForBilling;
        
        return $this;
    }
    /**
     * Get isPreview value
     * @return bool|null
     */
    public function getIsPreview(): ?bool
    {
        return $this->isPreview;
    }
    /**
     * Set isPreview value
     * @param bool $isPreview
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest
     */
    public function setIsPreview(?bool $isPreview = true): self
    {
        // validation for constraint: boolean
        if (!is_null($isPreview) && !is_bool($isPreview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPreview, true), gettype($isPreview)), __LINE__);
        }
        $this->isPreview = $isPreview;
        
        return $this;
    }
    /**
     * Get allowDuplicatedSettlements value
     * @return bool|null
     */
    public function getAllowDuplicatedSettlements(): ?bool
    {
        return $this->allowDuplicatedSettlements;
    }
    /**
     * Set allowDuplicatedSettlements value
     * @param bool $allowDuplicatedSettlements
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest
     */
    public function setAllowDuplicatedSettlements(?bool $allowDuplicatedSettlements = false): self
    {
        // validation for constraint: boolean
        if (!is_null($allowDuplicatedSettlements) && !is_bool($allowDuplicatedSettlements)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowDuplicatedSettlements, true), gettype($allowDuplicatedSettlements)), __LINE__);
        }
        $this->allowDuplicatedSettlements = $allowDuplicatedSettlements;
        
        return $this;
    }
    /**
     * Get creditPayViaStandardBank value
     * @return bool|null
     */
    public function getCreditPayViaStandardBank(): ?bool
    {
        return $this->creditPayViaStandardBank;
    }
    /**
     * Set creditPayViaStandardBank value
     * @param bool $creditPayViaStandardBank
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest
     */
    public function setCreditPayViaStandardBank(?bool $creditPayViaStandardBank = true): self
    {
        // validation for constraint: boolean
        if (!is_null($creditPayViaStandardBank) && !is_bool($creditPayViaStandardBank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($creditPayViaStandardBank, true), gettype($creditPayViaStandardBank)), __LINE__);
        }
        $this->creditPayViaStandardBank = $creditPayViaStandardBank;
        
        return $this;
    }
    /**
     * Get demandedReceivablesByStandardBank value
     * @return bool|null
     */
    public function getDemandedReceivablesByStandardBank(): ?bool
    {
        return $this->demandedReceivablesByStandardBank;
    }
    /**
     * Set demandedReceivablesByStandardBank value
     * @param bool $demandedReceivablesByStandardBank
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest
     */
    public function setDemandedReceivablesByStandardBank(?bool $demandedReceivablesByStandardBank = true): self
    {
        // validation for constraint: boolean
        if (!is_null($demandedReceivablesByStandardBank) && !is_bool($demandedReceivablesByStandardBank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($demandedReceivablesByStandardBank, true), gettype($demandedReceivablesByStandardBank)), __LINE__);
        }
        $this->demandedReceivablesByStandardBank = $demandedReceivablesByStandardBank;
        
        return $this;
    }
    /**
     * Get isPreviewPDF value
     * @return bool|null
     */
    public function getIsPreviewPDF(): ?bool
    {
        return $this->isPreviewPDF;
    }
    /**
     * Set isPreviewPDF value
     * @param bool $isPreviewPDF
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest
     */
    public function setIsPreviewPDF(?bool $isPreviewPDF = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isPreviewPDF) && !is_bool($isPreviewPDF)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPreviewPDF, true), gettype($isPreviewPDF)), __LINE__);
        }
        $this->isPreviewPDF = $isPreviewPDF;
        
        return $this;
    }
    /**
     * Get orgUnitForPDFPreview value
     * @return string|null
     */
    public function getOrgUnitForPDFPreview(): ?string
    {
        return $this->orgUnitForPDFPreview;
    }
    /**
     * Set orgUnitForPDFPreview value
     * @param string $orgUnitForPDFPreview
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelRequest
     */
    public function setOrgUnitForPDFPreview(?string $orgUnitForPDFPreview = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnitForPDFPreview) && !is_string($orgUnitForPDFPreview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnitForPDFPreview, true), gettype($orgUnitForPDFPreview)), __LINE__);
        }
        $this->orgUnitForPDFPreview = $orgUnitForPDFPreview;
        
        return $this;
    }
}
