<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteMediatorSettlementRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: execute the mediator settlement - generates billling documents with the sum that the agency should pay for each mediator
 * @subpackage Structs
 */
class ExecuteMediatorSettlementRequest extends AbstractStructBase
{
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - base: xs:dateTime
     * - pattern: dd.MM.yyyy
     * @var string|null
     */
    protected ?string $date = null;
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
     * The templateId
     * @var string|null
     */
    protected ?string $templateId = null;
    /**
     * The isPreview
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $isPreview = null;
    /**
     * The ignoreProvision
     * @var bool|null
     */
    protected ?bool $ignoreProvision = null;
    /**
     * The useEmailForBilling
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $useEmailForBilling = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The printInvoiceAndCreditTogether
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $printInvoiceAndCreditTogether = null;
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
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * Constructor method for ExecuteMediatorSettlementRequest
     * @uses ExecuteMediatorSettlementRequest::setMidocoMailMessage()
     * @uses ExecuteMediatorSettlementRequest::setDate()
     * @uses ExecuteMediatorSettlementRequest::setAccountId()
     * @uses ExecuteMediatorSettlementRequest::setAccountIdNoVat()
     * @uses ExecuteMediatorSettlementRequest::setAccountIdReverseCharge()
     * @uses ExecuteMediatorSettlementRequest::setDescription()
     * @uses ExecuteMediatorSettlementRequest::setTemplateId()
     * @uses ExecuteMediatorSettlementRequest::setIsPreview()
     * @uses ExecuteMediatorSettlementRequest::setIgnoreProvision()
     * @uses ExecuteMediatorSettlementRequest::setUseEmailForBilling()
     * @uses ExecuteMediatorSettlementRequest::setMediatorId()
     * @uses ExecuteMediatorSettlementRequest::setPrintInvoiceAndCreditTogether()
     * @uses ExecuteMediatorSettlementRequest::setCreditPayViaStandardBank()
     * @uses ExecuteMediatorSettlementRequest::setDemandedReceivablesByStandardBank()
     * @uses ExecuteMediatorSettlementRequest::setIsPreviewPDF()
     * @uses ExecuteMediatorSettlementRequest::setOrgUnitForPDFPreview()
     * @uses ExecuteMediatorSettlementRequest::setTravelNo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @param string $date
     * @param string $accountId
     * @param string $accountIdNoVat
     * @param string $accountIdReverseCharge
     * @param string $description
     * @param string $templateId
     * @param bool $isPreview
     * @param bool $ignoreProvision
     * @param bool $useEmailForBilling
     * @param string $mediatorId
     * @param bool $printInvoiceAndCreditTogether
     * @param bool $creditPayViaStandardBank
     * @param bool $demandedReceivablesByStandardBank
     * @param bool $isPreviewPDF
     * @param string $orgUnitForPDFPreview
     * @param string $travelNo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null, ?string $date = null, ?string $accountId = null, ?string $accountIdNoVat = null, ?string $accountIdReverseCharge = null, ?string $description = null, ?string $templateId = null, ?bool $isPreview = true, ?bool $ignoreProvision = null, ?bool $useEmailForBilling = false, ?string $mediatorId = null, ?bool $printInvoiceAndCreditTogether = true, ?bool $creditPayViaStandardBank = true, ?bool $demandedReceivablesByStandardBank = true, ?bool $isPreviewPDF = false, ?string $orgUnitForPDFPreview = null, ?string $travelNo = null)
    {
        $this
            ->setMidocoMailMessage($midocoMailMessage)
            ->setDate($date)
            ->setAccountId($accountId)
            ->setAccountIdNoVat($accountIdNoVat)
            ->setAccountIdReverseCharge($accountIdReverseCharge)
            ->setDescription($description)
            ->setTemplateId($templateId)
            ->setIsPreview($isPreview)
            ->setIgnoreProvision($ignoreProvision)
            ->setUseEmailForBilling($useEmailForBilling)
            ->setMediatorId($mediatorId)
            ->setPrintInvoiceAndCreditTogether($printInvoiceAndCreditTogether)
            ->setCreditPayViaStandardBank($creditPayViaStandardBank)
            ->setDemandedReceivablesByStandardBank($demandedReceivablesByStandardBank)
            ->setIsPreviewPDF($isPreviewPDF)
            ->setOrgUnitForPDFPreview($orgUnitForPDFPreview)
            ->setTravelNo($travelNo);
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
    /**
     * Get date value
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param string $date
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        // validation for constraint: pattern(dd.MM.yyyy)
        if (!is_null($date) && !preg_match('/dd.MM.yyyy/', $date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /dd.MM.yyyy/', var_export($date, true)), __LINE__);
        }
        $this->date = $date;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
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
     * Get templateId value
     * @return string|null
     */
    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param string $templateId
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
     */
    public function setTemplateId(?string $templateId = null): self
    {
        // validation for constraint: string
        if (!is_null($templateId) && !is_string($templateId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        $this->templateId = $templateId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
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
     * Get ignoreProvision value
     * @return bool|null
     */
    public function getIgnoreProvision(): ?bool
    {
        return $this->ignoreProvision;
    }
    /**
     * Set ignoreProvision value
     * @param bool $ignoreProvision
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
     */
    public function setIgnoreProvision(?bool $ignoreProvision = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreProvision) && !is_bool($ignoreProvision)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreProvision, true), gettype($ignoreProvision)), __LINE__);
        }
        $this->ignoreProvision = $ignoreProvision;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
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
     * Get printInvoiceAndCreditTogether value
     * @return bool|null
     */
    public function getPrintInvoiceAndCreditTogether(): ?bool
    {
        return $this->printInvoiceAndCreditTogether;
    }
    /**
     * Set printInvoiceAndCreditTogether value
     * @param bool $printInvoiceAndCreditTogether
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
     */
    public function setPrintInvoiceAndCreditTogether(?bool $printInvoiceAndCreditTogether = true): self
    {
        // validation for constraint: boolean
        if (!is_null($printInvoiceAndCreditTogether) && !is_bool($printInvoiceAndCreditTogether)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printInvoiceAndCreditTogether, true), gettype($printInvoiceAndCreditTogether)), __LINE__);
        }
        $this->printInvoiceAndCreditTogether = $printInvoiceAndCreditTogether;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
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
    /**
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementRequest
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
}
