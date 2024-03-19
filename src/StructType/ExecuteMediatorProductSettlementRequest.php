<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteMediatorProductSettlementRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteMediatorProductSettlementRequest extends AbstractStructBase
{
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The settlementDate
     * @var string|null
     */
    protected ?string $settlementDate = null;
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
     * The useEmailForBilling
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $useEmailForBilling = null;
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
     * Constructor method for ExecuteMediatorProductSettlementRequest
     * @uses ExecuteMediatorProductSettlementRequest::setMediatorId()
     * @uses ExecuteMediatorProductSettlementRequest::setDescription()
     * @uses ExecuteMediatorProductSettlementRequest::setSettlementDate()
     * @uses ExecuteMediatorProductSettlementRequest::setTemplateId()
     * @uses ExecuteMediatorProductSettlementRequest::setIsPreview()
     * @uses ExecuteMediatorProductSettlementRequest::setUseEmailForBilling()
     * @uses ExecuteMediatorProductSettlementRequest::setPrintInvoiceAndCreditTogether()
     * @uses ExecuteMediatorProductSettlementRequest::setCreditPayViaStandardBank()
     * @uses ExecuteMediatorProductSettlementRequest::setDemandedReceivablesByStandardBank()
     * @uses ExecuteMediatorProductSettlementRequest::setIsPreviewPDF()
     * @uses ExecuteMediatorProductSettlementRequest::setOrgUnitForPDFPreview()
     * @param string $mediatorId
     * @param string $description
     * @param string $settlementDate
     * @param string $templateId
     * @param bool $isPreview
     * @param bool $useEmailForBilling
     * @param bool $printInvoiceAndCreditTogether
     * @param bool $creditPayViaStandardBank
     * @param bool $demandedReceivablesByStandardBank
     * @param bool $isPreviewPDF
     * @param string $orgUnitForPDFPreview
     */
    public function __construct(?string $mediatorId = null, ?string $description = null, ?string $settlementDate = null, ?string $templateId = null, ?bool $isPreview = true, ?bool $useEmailForBilling = false, ?bool $printInvoiceAndCreditTogether = true, ?bool $creditPayViaStandardBank = true, ?bool $demandedReceivablesByStandardBank = true, ?bool $isPreviewPDF = false, ?string $orgUnitForPDFPreview = null)
    {
        $this
            ->setMediatorId($mediatorId)
            ->setDescription($description)
            ->setSettlementDate($settlementDate)
            ->setTemplateId($templateId)
            ->setIsPreview($isPreview)
            ->setUseEmailForBilling($useEmailForBilling)
            ->setPrintInvoiceAndCreditTogether($printInvoiceAndCreditTogether)
            ->setCreditPayViaStandardBank($creditPayViaStandardBank)
            ->setDemandedReceivablesByStandardBank($demandedReceivablesByStandardBank)
            ->setIsPreviewPDF($isPreviewPDF)
            ->setOrgUnitForPDFPreview($orgUnitForPDFPreview);
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementRequest
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
