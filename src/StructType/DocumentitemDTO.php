<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocumentitemDTO StructType
 * @subpackage Structs
 */
class DocumentitemDTO extends AbstractStructBase
{
    /**
     * The airlineFees
     * @var float|null
     */
    protected ?float $airlineFees = null;
    /**
     * The bspAgency
     * @var string|null
     */
    protected ?string $bspAgency = null;
    /**
     * The bspValidator
     * @var string|null
     */
    protected ?string $bspValidator = null;
    /**
     * The cancellationFee
     * @var float|null
     */
    protected ?float $cancellationFee = null;
    /**
     * The ccApprovalCode
     * @var string|null
     */
    protected ?string $ccApprovalCode = null;
    /**
     * The ccNumber
     * @var string|null
     */
    protected ?string $ccNumber = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The ccValid
     * @var string|null
     */
    protected ?string $ccValid = null;
    /**
     * The checkDigit
     * @var string|null
     */
    protected ?string $checkDigit = null;
    /**
     * The commission
     * @var float|null
     */
    protected ?float $commission = null;
    /**
     * The commissionPercent
     * @var float|null
     */
    protected ?float $commissionPercent = null;
    /**
     * The commissionVatAmount
     * @var float|null
     */
    protected ?float $commissionVatAmount = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The dateOfIssue
     * @var string|null
     */
    protected ?string $dateOfIssue = null;
    /**
     * The deletable
     * @var bool|null
     */
    protected ?bool $deletable = null;
    /**
     * The docSubtypeDescription
     * @var string|null
     */
    protected ?string $docSubtypeDescription = null;
    /**
     * The documentNo
     * @var string|null
     */
    protected ?string $documentNo = null;
    /**
     * The documentSubgroupEmd
     * @var string|null
     */
    protected ?string $documentSubgroupEmd = null;
    /**
     * The documentSubtype
     * @var string|null
     */
    protected ?string $documentSubtype = null;
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The endorsement
     * @var string|null
     */
    protected ?string $endorsement = null;
    /**
     * The exchangeInformation
     * @var string|null
     */
    protected ?string $exchangeInformation = null;
    /**
     * The exchangeRate
     * @var float|null
     */
    protected ?float $exchangeRate = null;
    /**
     * The farePrice
     * @var float|null
     */
    protected ?float $farePrice = null;
    /**
     * The fareType
     * @var string|null
     */
    protected ?string $fareType = null;
    /**
     * The feeCurrency
     * @var string|null
     */
    protected ?string $feeCurrency = null;
    /**
     * The filekey
     * @var string|null
     */
    protected ?string $filekey = null;
    /**
     * The firstImportTimestamp
     * @var string|null
     */
    protected ?string $firstImportTimestamp = null;
    /**
     * The isDomestic
     * @var bool|null
     */
    protected ?bool $isDomestic = null;
    /**
     * The isFeeReverseCharge
     * @var bool|null
     */
    protected ?bool $isFeeReverseCharge = null;
    /**
     * The isInkasso
     * @var bool|null
     */
    protected ?bool $isInkasso = null;
    /**
     * The itCode
     * @var string|null
     */
    protected ?string $itCode = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The nonCcPaidAmount
     * @var float|null
     */
    protected ?float $nonCcPaidAmount = null;
    /**
     * The originType
     * @var string|null
     */
    protected ?string $originType = null;
    /**
     * The originalAmount
     * @var float|null
     */
    protected ?float $originalAmount = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The passengerAsignment
     * @var string|null
     */
    protected ?string $passengerAsignment = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The referencedDocumentNo
     * @var string|null
     */
    protected ?string $referencedDocumentNo = null;
    /**
     * The reportIndicator
     * @var string|null
     */
    protected ?string $reportIndicator = null;
    /**
     * The segmentAssignment
     * @var string|null
     */
    protected ?string $segmentAssignment = null;
    /**
     * The segmentCountForFee
     * @var int|null
     */
    protected ?int $segmentCountForFee = null;
    /**
     * The sellPrice
     * @var int|null
     */
    protected ?int $sellPrice = null;
    /**
     * The taxInformation
     * @var string|null
     */
    protected ?string $taxInformation = null;
    /**
     * The ticketDesignator
     * @var string|null
     */
    protected ?string $ticketDesignator = null;
    /**
     * The ticketNoConj
     * @var string|null
     */
    protected ?string $ticketNoConj = null;
    /**
     * The ticketTariffType
     * @var string|null
     */
    protected ?string $ticketTariffType = null;
    /**
     * The ticketingAgent
     * @var string|null
     */
    protected ?string $ticketingAgent = null;
    /**
     * The ticketingCity
     * @var string|null
     */
    protected ?string $ticketingCity = null;
    /**
     * The ticketingPcc
     * @var string|null
     */
    protected ?string $ticketingPcc = null;
    /**
     * The tokenChecked
     * @var bool|null
     */
    protected ?bool $tokenChecked = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The totalSellPrice
     * @var float|null
     */
    protected ?float $totalSellPrice = null;
    /**
     * The totalTax
     * @var float|null
     */
    protected ?float $totalTax = null;
    /**
     * The travelDate
     * @var string|null
     */
    protected ?string $travelDate = null;
    /**
     * The udCode
     * @var int|null
     */
    protected ?int $udCode = null;
    /**
     * The vatContent
     * @var string|null
     */
    protected ?string $vatContent = null;
    /**
     * Constructor method for DocumentitemDTO
     * @uses DocumentitemDTO::setAirlineFees()
     * @uses DocumentitemDTO::setBspAgency()
     * @uses DocumentitemDTO::setBspValidator()
     * @uses DocumentitemDTO::setCancellationFee()
     * @uses DocumentitemDTO::setCcApprovalCode()
     * @uses DocumentitemDTO::setCcNumber()
     * @uses DocumentitemDTO::setCcType()
     * @uses DocumentitemDTO::setCcValid()
     * @uses DocumentitemDTO::setCheckDigit()
     * @uses DocumentitemDTO::setCommission()
     * @uses DocumentitemDTO::setCommissionPercent()
     * @uses DocumentitemDTO::setCommissionVatAmount()
     * @uses DocumentitemDTO::setCurrency()
     * @uses DocumentitemDTO::setDateOfIssue()
     * @uses DocumentitemDTO::setDeletable()
     * @uses DocumentitemDTO::setDocSubtypeDescription()
     * @uses DocumentitemDTO::setDocumentNo()
     * @uses DocumentitemDTO::setDocumentSubgroupEmd()
     * @uses DocumentitemDTO::setDocumentSubtype()
     * @uses DocumentitemDTO::setDocumentType()
     * @uses DocumentitemDTO::setEndorsement()
     * @uses DocumentitemDTO::setExchangeInformation()
     * @uses DocumentitemDTO::setExchangeRate()
     * @uses DocumentitemDTO::setFarePrice()
     * @uses DocumentitemDTO::setFareType()
     * @uses DocumentitemDTO::setFeeCurrency()
     * @uses DocumentitemDTO::setFilekey()
     * @uses DocumentitemDTO::setFirstImportTimestamp()
     * @uses DocumentitemDTO::setIsDomestic()
     * @uses DocumentitemDTO::setIsFeeReverseCharge()
     * @uses DocumentitemDTO::setIsInkasso()
     * @uses DocumentitemDTO::setItCode()
     * @uses DocumentitemDTO::setItemId()
     * @uses DocumentitemDTO::setNonCcPaidAmount()
     * @uses DocumentitemDTO::setOriginType()
     * @uses DocumentitemDTO::setOriginalAmount()
     * @uses DocumentitemDTO::setOriginalCurrency()
     * @uses DocumentitemDTO::setPassengerAsignment()
     * @uses DocumentitemDTO::setPaymentType()
     * @uses DocumentitemDTO::setPositionNo()
     * @uses DocumentitemDTO::setPrintType()
     * @uses DocumentitemDTO::setReferencedDocumentNo()
     * @uses DocumentitemDTO::setReportIndicator()
     * @uses DocumentitemDTO::setSegmentAssignment()
     * @uses DocumentitemDTO::setSegmentCountForFee()
     * @uses DocumentitemDTO::setSellPrice()
     * @uses DocumentitemDTO::setTaxInformation()
     * @uses DocumentitemDTO::setTicketDesignator()
     * @uses DocumentitemDTO::setTicketNoConj()
     * @uses DocumentitemDTO::setTicketTariffType()
     * @uses DocumentitemDTO::setTicketingAgent()
     * @uses DocumentitemDTO::setTicketingCity()
     * @uses DocumentitemDTO::setTicketingPcc()
     * @uses DocumentitemDTO::setTokenChecked()
     * @uses DocumentitemDTO::setTotalPrice()
     * @uses DocumentitemDTO::setTotalSellPrice()
     * @uses DocumentitemDTO::setTotalTax()
     * @uses DocumentitemDTO::setTravelDate()
     * @uses DocumentitemDTO::setUdCode()
     * @uses DocumentitemDTO::setVatContent()
     * @param float $airlineFees
     * @param string $bspAgency
     * @param string $bspValidator
     * @param float $cancellationFee
     * @param string $ccApprovalCode
     * @param string $ccNumber
     * @param string $ccType
     * @param string $ccValid
     * @param string $checkDigit
     * @param float $commission
     * @param float $commissionPercent
     * @param float $commissionVatAmount
     * @param string $currency
     * @param string $dateOfIssue
     * @param bool $deletable
     * @param string $docSubtypeDescription
     * @param string $documentNo
     * @param string $documentSubgroupEmd
     * @param string $documentSubtype
     * @param string $documentType
     * @param string $endorsement
     * @param string $exchangeInformation
     * @param float $exchangeRate
     * @param float $farePrice
     * @param string $fareType
     * @param string $feeCurrency
     * @param string $filekey
     * @param string $firstImportTimestamp
     * @param bool $isDomestic
     * @param bool $isFeeReverseCharge
     * @param bool $isInkasso
     * @param string $itCode
     * @param int $itemId
     * @param float $nonCcPaidAmount
     * @param string $originType
     * @param float $originalAmount
     * @param string $originalCurrency
     * @param string $passengerAsignment
     * @param string $paymentType
     * @param int $positionNo
     * @param string $printType
     * @param string $referencedDocumentNo
     * @param string $reportIndicator
     * @param string $segmentAssignment
     * @param int $segmentCountForFee
     * @param int $sellPrice
     * @param string $taxInformation
     * @param string $ticketDesignator
     * @param string $ticketNoConj
     * @param string $ticketTariffType
     * @param string $ticketingAgent
     * @param string $ticketingCity
     * @param string $ticketingPcc
     * @param bool $tokenChecked
     * @param float $totalPrice
     * @param float $totalSellPrice
     * @param float $totalTax
     * @param string $travelDate
     * @param int $udCode
     * @param string $vatContent
     */
    public function __construct(?float $airlineFees = null, ?string $bspAgency = null, ?string $bspValidator = null, ?float $cancellationFee = null, ?string $ccApprovalCode = null, ?string $ccNumber = null, ?string $ccType = null, ?string $ccValid = null, ?string $checkDigit = null, ?float $commission = null, ?float $commissionPercent = null, ?float $commissionVatAmount = null, ?string $currency = null, ?string $dateOfIssue = null, ?bool $deletable = null, ?string $docSubtypeDescription = null, ?string $documentNo = null, ?string $documentSubgroupEmd = null, ?string $documentSubtype = null, ?string $documentType = null, ?string $endorsement = null, ?string $exchangeInformation = null, ?float $exchangeRate = null, ?float $farePrice = null, ?string $fareType = null, ?string $feeCurrency = null, ?string $filekey = null, ?string $firstImportTimestamp = null, ?bool $isDomestic = null, ?bool $isFeeReverseCharge = null, ?bool $isInkasso = null, ?string $itCode = null, ?int $itemId = null, ?float $nonCcPaidAmount = null, ?string $originType = null, ?float $originalAmount = null, ?string $originalCurrency = null, ?string $passengerAsignment = null, ?string $paymentType = null, ?int $positionNo = null, ?string $printType = null, ?string $referencedDocumentNo = null, ?string $reportIndicator = null, ?string $segmentAssignment = null, ?int $segmentCountForFee = null, ?int $sellPrice = null, ?string $taxInformation = null, ?string $ticketDesignator = null, ?string $ticketNoConj = null, ?string $ticketTariffType = null, ?string $ticketingAgent = null, ?string $ticketingCity = null, ?string $ticketingPcc = null, ?bool $tokenChecked = null, ?float $totalPrice = null, ?float $totalSellPrice = null, ?float $totalTax = null, ?string $travelDate = null, ?int $udCode = null, ?string $vatContent = null)
    {
        $this
            ->setAirlineFees($airlineFees)
            ->setBspAgency($bspAgency)
            ->setBspValidator($bspValidator)
            ->setCancellationFee($cancellationFee)
            ->setCcApprovalCode($ccApprovalCode)
            ->setCcNumber($ccNumber)
            ->setCcType($ccType)
            ->setCcValid($ccValid)
            ->setCheckDigit($checkDigit)
            ->setCommission($commission)
            ->setCommissionPercent($commissionPercent)
            ->setCommissionVatAmount($commissionVatAmount)
            ->setCurrency($currency)
            ->setDateOfIssue($dateOfIssue)
            ->setDeletable($deletable)
            ->setDocSubtypeDescription($docSubtypeDescription)
            ->setDocumentNo($documentNo)
            ->setDocumentSubgroupEmd($documentSubgroupEmd)
            ->setDocumentSubtype($documentSubtype)
            ->setDocumentType($documentType)
            ->setEndorsement($endorsement)
            ->setExchangeInformation($exchangeInformation)
            ->setExchangeRate($exchangeRate)
            ->setFarePrice($farePrice)
            ->setFareType($fareType)
            ->setFeeCurrency($feeCurrency)
            ->setFilekey($filekey)
            ->setFirstImportTimestamp($firstImportTimestamp)
            ->setIsDomestic($isDomestic)
            ->setIsFeeReverseCharge($isFeeReverseCharge)
            ->setIsInkasso($isInkasso)
            ->setItCode($itCode)
            ->setItemId($itemId)
            ->setNonCcPaidAmount($nonCcPaidAmount)
            ->setOriginType($originType)
            ->setOriginalAmount($originalAmount)
            ->setOriginalCurrency($originalCurrency)
            ->setPassengerAsignment($passengerAsignment)
            ->setPaymentType($paymentType)
            ->setPositionNo($positionNo)
            ->setPrintType($printType)
            ->setReferencedDocumentNo($referencedDocumentNo)
            ->setReportIndicator($reportIndicator)
            ->setSegmentAssignment($segmentAssignment)
            ->setSegmentCountForFee($segmentCountForFee)
            ->setSellPrice($sellPrice)
            ->setTaxInformation($taxInformation)
            ->setTicketDesignator($ticketDesignator)
            ->setTicketNoConj($ticketNoConj)
            ->setTicketTariffType($ticketTariffType)
            ->setTicketingAgent($ticketingAgent)
            ->setTicketingCity($ticketingCity)
            ->setTicketingPcc($ticketingPcc)
            ->setTokenChecked($tokenChecked)
            ->setTotalPrice($totalPrice)
            ->setTotalSellPrice($totalSellPrice)
            ->setTotalTax($totalTax)
            ->setTravelDate($travelDate)
            ->setUdCode($udCode)
            ->setVatContent($vatContent);
    }
    /**
     * Get airlineFees value
     * @return float|null
     */
    public function getAirlineFees(): ?float
    {
        return $this->airlineFees;
    }
    /**
     * Set airlineFees value
     * @param float $airlineFees
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setAirlineFees(?float $airlineFees = null): self
    {
        // validation for constraint: float
        if (!is_null($airlineFees) && !(is_float($airlineFees) || is_numeric($airlineFees))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($airlineFees, true), gettype($airlineFees)), __LINE__);
        }
        $this->airlineFees = $airlineFees;
        
        return $this;
    }
    /**
     * Get bspAgency value
     * @return string|null
     */
    public function getBspAgency(): ?string
    {
        return $this->bspAgency;
    }
    /**
     * Set bspAgency value
     * @param string $bspAgency
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setBspAgency(?string $bspAgency = null): self
    {
        // validation for constraint: string
        if (!is_null($bspAgency) && !is_string($bspAgency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bspAgency, true), gettype($bspAgency)), __LINE__);
        }
        $this->bspAgency = $bspAgency;
        
        return $this;
    }
    /**
     * Get bspValidator value
     * @return string|null
     */
    public function getBspValidator(): ?string
    {
        return $this->bspValidator;
    }
    /**
     * Set bspValidator value
     * @param string $bspValidator
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setBspValidator(?string $bspValidator = null): self
    {
        // validation for constraint: string
        if (!is_null($bspValidator) && !is_string($bspValidator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bspValidator, true), gettype($bspValidator)), __LINE__);
        }
        $this->bspValidator = $bspValidator;
        
        return $this;
    }
    /**
     * Get cancellationFee value
     * @return float|null
     */
    public function getCancellationFee(): ?float
    {
        return $this->cancellationFee;
    }
    /**
     * Set cancellationFee value
     * @param float $cancellationFee
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setCancellationFee(?float $cancellationFee = null): self
    {
        // validation for constraint: float
        if (!is_null($cancellationFee) && !(is_float($cancellationFee) || is_numeric($cancellationFee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cancellationFee, true), gettype($cancellationFee)), __LINE__);
        }
        $this->cancellationFee = $cancellationFee;
        
        return $this;
    }
    /**
     * Get ccApprovalCode value
     * @return string|null
     */
    public function getCcApprovalCode(): ?string
    {
        return $this->ccApprovalCode;
    }
    /**
     * Set ccApprovalCode value
     * @param string $ccApprovalCode
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setCcApprovalCode(?string $ccApprovalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($ccApprovalCode) && !is_string($ccApprovalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccApprovalCode, true), gettype($ccApprovalCode)), __LINE__);
        }
        $this->ccApprovalCode = $ccApprovalCode;
        
        return $this;
    }
    /**
     * Get ccNumber value
     * @return string|null
     */
    public function getCcNumber(): ?string
    {
        return $this->ccNumber;
    }
    /**
     * Set ccNumber value
     * @param string $ccNumber
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setCcNumber(?string $ccNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNumber) && !is_string($ccNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNumber, true), gettype($ccNumber)), __LINE__);
        }
        $this->ccNumber = $ccNumber;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
        return $this;
    }
    /**
     * Get ccValid value
     * @return string|null
     */
    public function getCcValid(): ?string
    {
        return $this->ccValid;
    }
    /**
     * Set ccValid value
     * @param string $ccValid
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setCcValid(?string $ccValid = null): self
    {
        // validation for constraint: string
        if (!is_null($ccValid) && !is_string($ccValid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccValid, true), gettype($ccValid)), __LINE__);
        }
        $this->ccValid = $ccValid;
        
        return $this;
    }
    /**
     * Get checkDigit value
     * @return string|null
     */
    public function getCheckDigit(): ?string
    {
        return $this->checkDigit;
    }
    /**
     * Set checkDigit value
     * @param string $checkDigit
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setCheckDigit(?string $checkDigit = null): self
    {
        // validation for constraint: string
        if (!is_null($checkDigit) && !is_string($checkDigit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($checkDigit, true), gettype($checkDigit)), __LINE__);
        }
        $this->checkDigit = $checkDigit;
        
        return $this;
    }
    /**
     * Get commission value
     * @return float|null
     */
    public function getCommission(): ?float
    {
        return $this->commission;
    }
    /**
     * Set commission value
     * @param float $commission
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setCommission(?float $commission = null): self
    {
        // validation for constraint: float
        if (!is_null($commission) && !(is_float($commission) || is_numeric($commission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commission, true), gettype($commission)), __LINE__);
        }
        $this->commission = $commission;
        
        return $this;
    }
    /**
     * Get commissionPercent value
     * @return float|null
     */
    public function getCommissionPercent(): ?float
    {
        return $this->commissionPercent;
    }
    /**
     * Set commissionPercent value
     * @param float $commissionPercent
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setCommissionPercent(?float $commissionPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionPercent) && !(is_float($commissionPercent) || is_numeric($commissionPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionPercent, true), gettype($commissionPercent)), __LINE__);
        }
        $this->commissionPercent = $commissionPercent;
        
        return $this;
    }
    /**
     * Get commissionVatAmount value
     * @return float|null
     */
    public function getCommissionVatAmount(): ?float
    {
        return $this->commissionVatAmount;
    }
    /**
     * Set commissionVatAmount value
     * @param float $commissionVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setCommissionVatAmount(?float $commissionVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionVatAmount) && !(is_float($commissionVatAmount) || is_numeric($commissionVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionVatAmount, true), gettype($commissionVatAmount)), __LINE__);
        }
        $this->commissionVatAmount = $commissionVatAmount;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get dateOfIssue value
     * @return string|null
     */
    public function getDateOfIssue(): ?string
    {
        return $this->dateOfIssue;
    }
    /**
     * Set dateOfIssue value
     * @param string $dateOfIssue
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setDateOfIssue(?string $dateOfIssue = null): self
    {
        // validation for constraint: string
        if (!is_null($dateOfIssue) && !is_string($dateOfIssue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateOfIssue, true), gettype($dateOfIssue)), __LINE__);
        }
        $this->dateOfIssue = $dateOfIssue;
        
        return $this;
    }
    /**
     * Get deletable value
     * @return bool|null
     */
    public function getDeletable(): ?bool
    {
        return $this->deletable;
    }
    /**
     * Set deletable value
     * @param bool $deletable
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setDeletable(?bool $deletable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deletable) && !is_bool($deletable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deletable, true), gettype($deletable)), __LINE__);
        }
        $this->deletable = $deletable;
        
        return $this;
    }
    /**
     * Get docSubtypeDescription value
     * @return string|null
     */
    public function getDocSubtypeDescription(): ?string
    {
        return $this->docSubtypeDescription;
    }
    /**
     * Set docSubtypeDescription value
     * @param string $docSubtypeDescription
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setDocSubtypeDescription(?string $docSubtypeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($docSubtypeDescription) && !is_string($docSubtypeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($docSubtypeDescription, true), gettype($docSubtypeDescription)), __LINE__);
        }
        $this->docSubtypeDescription = $docSubtypeDescription;
        
        return $this;
    }
    /**
     * Get documentNo value
     * @return string|null
     */
    public function getDocumentNo(): ?string
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param string $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setDocumentNo(?string $documentNo = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNo) && !is_string($documentNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get documentSubgroupEmd value
     * @return string|null
     */
    public function getDocumentSubgroupEmd(): ?string
    {
        return $this->documentSubgroupEmd;
    }
    /**
     * Set documentSubgroupEmd value
     * @param string $documentSubgroupEmd
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setDocumentSubgroupEmd(?string $documentSubgroupEmd = null): self
    {
        // validation for constraint: string
        if (!is_null($documentSubgroupEmd) && !is_string($documentSubgroupEmd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentSubgroupEmd, true), gettype($documentSubgroupEmd)), __LINE__);
        }
        $this->documentSubgroupEmd = $documentSubgroupEmd;
        
        return $this;
    }
    /**
     * Get documentSubtype value
     * @return string|null
     */
    public function getDocumentSubtype(): ?string
    {
        return $this->documentSubtype;
    }
    /**
     * Set documentSubtype value
     * @param string $documentSubtype
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setDocumentSubtype(?string $documentSubtype = null): self
    {
        // validation for constraint: string
        if (!is_null($documentSubtype) && !is_string($documentSubtype)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentSubtype, true), gettype($documentSubtype)), __LINE__);
        }
        $this->documentSubtype = $documentSubtype;
        
        return $this;
    }
    /**
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @param string $documentType
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->documentType = $documentType;
        
        return $this;
    }
    /**
     * Get endorsement value
     * @return string|null
     */
    public function getEndorsement(): ?string
    {
        return $this->endorsement;
    }
    /**
     * Set endorsement value
     * @param string $endorsement
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setEndorsement(?string $endorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($endorsement) && !is_string($endorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endorsement, true), gettype($endorsement)), __LINE__);
        }
        $this->endorsement = $endorsement;
        
        return $this;
    }
    /**
     * Get exchangeInformation value
     * @return string|null
     */
    public function getExchangeInformation(): ?string
    {
        return $this->exchangeInformation;
    }
    /**
     * Set exchangeInformation value
     * @param string $exchangeInformation
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setExchangeInformation(?string $exchangeInformation = null): self
    {
        // validation for constraint: string
        if (!is_null($exchangeInformation) && !is_string($exchangeInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exchangeInformation, true), gettype($exchangeInformation)), __LINE__);
        }
        $this->exchangeInformation = $exchangeInformation;
        
        return $this;
    }
    /**
     * Get exchangeRate value
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }
    /**
     * Set exchangeRate value
     * @param float $exchangeRate
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setExchangeRate(?float $exchangeRate = null): self
    {
        // validation for constraint: float
        if (!is_null($exchangeRate) && !(is_float($exchangeRate) || is_numeric($exchangeRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($exchangeRate, true), gettype($exchangeRate)), __LINE__);
        }
        $this->exchangeRate = $exchangeRate;
        
        return $this;
    }
    /**
     * Get farePrice value
     * @return float|null
     */
    public function getFarePrice(): ?float
    {
        return $this->farePrice;
    }
    /**
     * Set farePrice value
     * @param float $farePrice
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setFarePrice(?float $farePrice = null): self
    {
        // validation for constraint: float
        if (!is_null($farePrice) && !(is_float($farePrice) || is_numeric($farePrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($farePrice, true), gettype($farePrice)), __LINE__);
        }
        $this->farePrice = $farePrice;
        
        return $this;
    }
    /**
     * Get fareType value
     * @return string|null
     */
    public function getFareType(): ?string
    {
        return $this->fareType;
    }
    /**
     * Set fareType value
     * @param string $fareType
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setFareType(?string $fareType = null): self
    {
        // validation for constraint: string
        if (!is_null($fareType) && !is_string($fareType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareType, true), gettype($fareType)), __LINE__);
        }
        $this->fareType = $fareType;
        
        return $this;
    }
    /**
     * Get feeCurrency value
     * @return string|null
     */
    public function getFeeCurrency(): ?string
    {
        return $this->feeCurrency;
    }
    /**
     * Set feeCurrency value
     * @param string $feeCurrency
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setFeeCurrency(?string $feeCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($feeCurrency) && !is_string($feeCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeCurrency, true), gettype($feeCurrency)), __LINE__);
        }
        $this->feeCurrency = $feeCurrency;
        
        return $this;
    }
    /**
     * Get filekey value
     * @return string|null
     */
    public function getFilekey(): ?string
    {
        return $this->filekey;
    }
    /**
     * Set filekey value
     * @param string $filekey
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setFilekey(?string $filekey = null): self
    {
        // validation for constraint: string
        if (!is_null($filekey) && !is_string($filekey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filekey, true), gettype($filekey)), __LINE__);
        }
        $this->filekey = $filekey;
        
        return $this;
    }
    /**
     * Get firstImportTimestamp value
     * @return string|null
     */
    public function getFirstImportTimestamp(): ?string
    {
        return $this->firstImportTimestamp;
    }
    /**
     * Set firstImportTimestamp value
     * @param string $firstImportTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setFirstImportTimestamp(?string $firstImportTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($firstImportTimestamp) && !is_string($firstImportTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstImportTimestamp, true), gettype($firstImportTimestamp)), __LINE__);
        }
        $this->firstImportTimestamp = $firstImportTimestamp;
        
        return $this;
    }
    /**
     * Get isDomestic value
     * @return bool|null
     */
    public function getIsDomestic(): ?bool
    {
        return $this->isDomestic;
    }
    /**
     * Set isDomestic value
     * @param bool $isDomestic
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setIsDomestic(?bool $isDomestic = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDomestic) && !is_bool($isDomestic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDomestic, true), gettype($isDomestic)), __LINE__);
        }
        $this->isDomestic = $isDomestic;
        
        return $this;
    }
    /**
     * Get isFeeReverseCharge value
     * @return bool|null
     */
    public function getIsFeeReverseCharge(): ?bool
    {
        return $this->isFeeReverseCharge;
    }
    /**
     * Set isFeeReverseCharge value
     * @param bool $isFeeReverseCharge
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setIsFeeReverseCharge(?bool $isFeeReverseCharge = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isFeeReverseCharge) && !is_bool($isFeeReverseCharge)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isFeeReverseCharge, true), gettype($isFeeReverseCharge)), __LINE__);
        }
        $this->isFeeReverseCharge = $isFeeReverseCharge;
        
        return $this;
    }
    /**
     * Get isInkasso value
     * @return bool|null
     */
    public function getIsInkasso(): ?bool
    {
        return $this->isInkasso;
    }
    /**
     * Set isInkasso value
     * @param bool $isInkasso
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setIsInkasso(?bool $isInkasso = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInkasso) && !is_bool($isInkasso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInkasso, true), gettype($isInkasso)), __LINE__);
        }
        $this->isInkasso = $isInkasso;
        
        return $this;
    }
    /**
     * Get itCode value
     * @return string|null
     */
    public function getItCode(): ?string
    {
        return $this->itCode;
    }
    /**
     * Set itCode value
     * @param string $itCode
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setItCode(?string $itCode = null): self
    {
        // validation for constraint: string
        if (!is_null($itCode) && !is_string($itCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itCode, true), gettype($itCode)), __LINE__);
        }
        $this->itCode = $itCode;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get nonCcPaidAmount value
     * @return float|null
     */
    public function getNonCcPaidAmount(): ?float
    {
        return $this->nonCcPaidAmount;
    }
    /**
     * Set nonCcPaidAmount value
     * @param float $nonCcPaidAmount
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setNonCcPaidAmount(?float $nonCcPaidAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($nonCcPaidAmount) && !(is_float($nonCcPaidAmount) || is_numeric($nonCcPaidAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($nonCcPaidAmount, true), gettype($nonCcPaidAmount)), __LINE__);
        }
        $this->nonCcPaidAmount = $nonCcPaidAmount;
        
        return $this;
    }
    /**
     * Get originType value
     * @return string|null
     */
    public function getOriginType(): ?string
    {
        return $this->originType;
    }
    /**
     * Set originType value
     * @param string $originType
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setOriginType(?string $originType = null): self
    {
        // validation for constraint: string
        if (!is_null($originType) && !is_string($originType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originType, true), gettype($originType)), __LINE__);
        }
        $this->originType = $originType;
        
        return $this;
    }
    /**
     * Get originalAmount value
     * @return float|null
     */
    public function getOriginalAmount(): ?float
    {
        return $this->originalAmount;
    }
    /**
     * Set originalAmount value
     * @param float $originalAmount
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setOriginalAmount(?float $originalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($originalAmount) && !(is_float($originalAmount) || is_numeric($originalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalAmount, true), gettype($originalAmount)), __LINE__);
        }
        $this->originalAmount = $originalAmount;
        
        return $this;
    }
    /**
     * Get originalCurrency value
     * @return string|null
     */
    public function getOriginalCurrency(): ?string
    {
        return $this->originalCurrency;
    }
    /**
     * Set originalCurrency value
     * @param string $originalCurrency
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setOriginalCurrency(?string $originalCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($originalCurrency) && !is_string($originalCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalCurrency, true), gettype($originalCurrency)), __LINE__);
        }
        $this->originalCurrency = $originalCurrency;
        
        return $this;
    }
    /**
     * Get passengerAsignment value
     * @return string|null
     */
    public function getPassengerAsignment(): ?string
    {
        return $this->passengerAsignment;
    }
    /**
     * Set passengerAsignment value
     * @param string $passengerAsignment
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setPassengerAsignment(?string $passengerAsignment = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerAsignment) && !is_string($passengerAsignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerAsignment, true), gettype($passengerAsignment)), __LINE__);
        }
        $this->passengerAsignment = $passengerAsignment;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
    /**
     * Get positionNo value
     * @return int|null
     */
    public function getPositionNo(): ?int
    {
        return $this->positionNo;
    }
    /**
     * Set positionNo value
     * @param int $positionNo
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setPositionNo(?int $positionNo = null): self
    {
        // validation for constraint: int
        if (!is_null($positionNo) && !(is_int($positionNo) || ctype_digit($positionNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionNo, true), gettype($positionNo)), __LINE__);
        }
        $this->positionNo = $positionNo;
        
        return $this;
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
    /**
     * Get referencedDocumentNo value
     * @return string|null
     */
    public function getReferencedDocumentNo(): ?string
    {
        return $this->referencedDocumentNo;
    }
    /**
     * Set referencedDocumentNo value
     * @param string $referencedDocumentNo
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setReferencedDocumentNo(?string $referencedDocumentNo = null): self
    {
        // validation for constraint: string
        if (!is_null($referencedDocumentNo) && !is_string($referencedDocumentNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencedDocumentNo, true), gettype($referencedDocumentNo)), __LINE__);
        }
        $this->referencedDocumentNo = $referencedDocumentNo;
        
        return $this;
    }
    /**
     * Get reportIndicator value
     * @return string|null
     */
    public function getReportIndicator(): ?string
    {
        return $this->reportIndicator;
    }
    /**
     * Set reportIndicator value
     * @param string $reportIndicator
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setReportIndicator(?string $reportIndicator = null): self
    {
        // validation for constraint: string
        if (!is_null($reportIndicator) && !is_string($reportIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reportIndicator, true), gettype($reportIndicator)), __LINE__);
        }
        $this->reportIndicator = $reportIndicator;
        
        return $this;
    }
    /**
     * Get segmentAssignment value
     * @return string|null
     */
    public function getSegmentAssignment(): ?string
    {
        return $this->segmentAssignment;
    }
    /**
     * Set segmentAssignment value
     * @param string $segmentAssignment
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setSegmentAssignment(?string $segmentAssignment = null): self
    {
        // validation for constraint: string
        if (!is_null($segmentAssignment) && !is_string($segmentAssignment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($segmentAssignment, true), gettype($segmentAssignment)), __LINE__);
        }
        $this->segmentAssignment = $segmentAssignment;
        
        return $this;
    }
    /**
     * Get segmentCountForFee value
     * @return int|null
     */
    public function getSegmentCountForFee(): ?int
    {
        return $this->segmentCountForFee;
    }
    /**
     * Set segmentCountForFee value
     * @param int $segmentCountForFee
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setSegmentCountForFee(?int $segmentCountForFee = null): self
    {
        // validation for constraint: int
        if (!is_null($segmentCountForFee) && !(is_int($segmentCountForFee) || ctype_digit($segmentCountForFee))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($segmentCountForFee, true), gettype($segmentCountForFee)), __LINE__);
        }
        $this->segmentCountForFee = $segmentCountForFee;
        
        return $this;
    }
    /**
     * Get sellPrice value
     * @return int|null
     */
    public function getSellPrice(): ?int
    {
        return $this->sellPrice;
    }
    /**
     * Set sellPrice value
     * @param int $sellPrice
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setSellPrice(?int $sellPrice = null): self
    {
        // validation for constraint: int
        if (!is_null($sellPrice) && !(is_int($sellPrice) || ctype_digit($sellPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellPrice, true), gettype($sellPrice)), __LINE__);
        }
        $this->sellPrice = $sellPrice;
        
        return $this;
    }
    /**
     * Get taxInformation value
     * @return string|null
     */
    public function getTaxInformation(): ?string
    {
        return $this->taxInformation;
    }
    /**
     * Set taxInformation value
     * @param string $taxInformation
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setTaxInformation(?string $taxInformation = null): self
    {
        // validation for constraint: string
        if (!is_null($taxInformation) && !is_string($taxInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxInformation, true), gettype($taxInformation)), __LINE__);
        }
        $this->taxInformation = $taxInformation;
        
        return $this;
    }
    /**
     * Get ticketDesignator value
     * @return string|null
     */
    public function getTicketDesignator(): ?string
    {
        return $this->ticketDesignator;
    }
    /**
     * Set ticketDesignator value
     * @param string $ticketDesignator
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setTicketDesignator(?string $ticketDesignator = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketDesignator) && !is_string($ticketDesignator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketDesignator, true), gettype($ticketDesignator)), __LINE__);
        }
        $this->ticketDesignator = $ticketDesignator;
        
        return $this;
    }
    /**
     * Get ticketNoConj value
     * @return string|null
     */
    public function getTicketNoConj(): ?string
    {
        return $this->ticketNoConj;
    }
    /**
     * Set ticketNoConj value
     * @param string $ticketNoConj
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setTicketNoConj(?string $ticketNoConj = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNoConj) && !is_string($ticketNoConj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNoConj, true), gettype($ticketNoConj)), __LINE__);
        }
        $this->ticketNoConj = $ticketNoConj;
        
        return $this;
    }
    /**
     * Get ticketTariffType value
     * @return string|null
     */
    public function getTicketTariffType(): ?string
    {
        return $this->ticketTariffType;
    }
    /**
     * Set ticketTariffType value
     * @param string $ticketTariffType
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setTicketTariffType(?string $ticketTariffType = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketTariffType) && !is_string($ticketTariffType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketTariffType, true), gettype($ticketTariffType)), __LINE__);
        }
        $this->ticketTariffType = $ticketTariffType;
        
        return $this;
    }
    /**
     * Get ticketingAgent value
     * @return string|null
     */
    public function getTicketingAgent(): ?string
    {
        return $this->ticketingAgent;
    }
    /**
     * Set ticketingAgent value
     * @param string $ticketingAgent
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setTicketingAgent(?string $ticketingAgent = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingAgent) && !is_string($ticketingAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingAgent, true), gettype($ticketingAgent)), __LINE__);
        }
        $this->ticketingAgent = $ticketingAgent;
        
        return $this;
    }
    /**
     * Get ticketingCity value
     * @return string|null
     */
    public function getTicketingCity(): ?string
    {
        return $this->ticketingCity;
    }
    /**
     * Set ticketingCity value
     * @param string $ticketingCity
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setTicketingCity(?string $ticketingCity = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingCity) && !is_string($ticketingCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingCity, true), gettype($ticketingCity)), __LINE__);
        }
        $this->ticketingCity = $ticketingCity;
        
        return $this;
    }
    /**
     * Get ticketingPcc value
     * @return string|null
     */
    public function getTicketingPcc(): ?string
    {
        return $this->ticketingPcc;
    }
    /**
     * Set ticketingPcc value
     * @param string $ticketingPcc
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setTicketingPcc(?string $ticketingPcc = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingPcc) && !is_string($ticketingPcc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingPcc, true), gettype($ticketingPcc)), __LINE__);
        }
        $this->ticketingPcc = $ticketingPcc;
        
        return $this;
    }
    /**
     * Get tokenChecked value
     * @return bool|null
     */
    public function getTokenChecked(): ?bool
    {
        return $this->tokenChecked;
    }
    /**
     * Set tokenChecked value
     * @param bool $tokenChecked
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setTokenChecked(?bool $tokenChecked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($tokenChecked) && !is_bool($tokenChecked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tokenChecked, true), gettype($tokenChecked)), __LINE__);
        }
        $this->tokenChecked = $tokenChecked;
        
        return $this;
    }
    /**
     * Get totalPrice value
     * @return float|null
     */
    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }
    /**
     * Set totalPrice value
     * @param float $totalPrice
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setTotalPrice(?float $totalPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPrice) && !(is_float($totalPrice) || is_numeric($totalPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->totalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get totalSellPrice value
     * @return float|null
     */
    public function getTotalSellPrice(): ?float
    {
        return $this->totalSellPrice;
    }
    /**
     * Set totalSellPrice value
     * @param float $totalSellPrice
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setTotalSellPrice(?float $totalSellPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($totalSellPrice) && !(is_float($totalSellPrice) || is_numeric($totalSellPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalSellPrice, true), gettype($totalSellPrice)), __LINE__);
        }
        $this->totalSellPrice = $totalSellPrice;
        
        return $this;
    }
    /**
     * Get totalTax value
     * @return float|null
     */
    public function getTotalTax(): ?float
    {
        return $this->totalTax;
    }
    /**
     * Set totalTax value
     * @param float $totalTax
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setTotalTax(?float $totalTax = null): self
    {
        // validation for constraint: float
        if (!is_null($totalTax) && !(is_float($totalTax) || is_numeric($totalTax))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalTax, true), gettype($totalTax)), __LINE__);
        }
        $this->totalTax = $totalTax;
        
        return $this;
    }
    /**
     * Get travelDate value
     * @return string|null
     */
    public function getTravelDate(): ?string
    {
        return $this->travelDate;
    }
    /**
     * Set travelDate value
     * @param string $travelDate
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setTravelDate(?string $travelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($travelDate) && !is_string($travelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelDate, true), gettype($travelDate)), __LINE__);
        }
        $this->travelDate = $travelDate;
        
        return $this;
    }
    /**
     * Get udCode value
     * @return int|null
     */
    public function getUdCode(): ?int
    {
        return $this->udCode;
    }
    /**
     * Set udCode value
     * @param int $udCode
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setUdCode(?int $udCode = null): self
    {
        // validation for constraint: int
        if (!is_null($udCode) && !(is_int($udCode) || ctype_digit($udCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($udCode, true), gettype($udCode)), __LINE__);
        }
        $this->udCode = $udCode;
        
        return $this;
    }
    /**
     * Get vatContent value
     * @return string|null
     */
    public function getVatContent(): ?string
    {
        return $this->vatContent;
    }
    /**
     * Set vatContent value
     * @param string $vatContent
     * @return \Pggns\MidocoApi\Order\StructType\DocumentitemDTO
     */
    public function setVatContent(?string $vatContent = null): self
    {
        // validation for constraint: string
        if (!is_null($vatContent) && !is_string($vatContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatContent, true), gettype($vatContent)), __LINE__);
        }
        $this->vatContent = $vatContent;
        
        return $this;
    }
}
