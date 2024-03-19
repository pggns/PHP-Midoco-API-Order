<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupplAgencySettlemDetDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SupplAgencySettlemDetDTO extends AbstractStructBase
{
    /**
     * The billingDate
     * @var string|null
     */
    protected ?string $billingDate = null;
    /**
     * The bookingPosition
     * @var int|null
     */
    protected ?int $bookingPosition = null;
    /**
     * The bruttoAmount
     * @var float|null
     */
    protected ?float $bruttoAmount = null;
    /**
     * The comments
     * @var string|null
     */
    protected ?string $comments = null;
    /**
     * The commissionAmount
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The commissionInsurance
     * @var float|null
     */
    protected ?float $commissionInsurance = null;
    /**
     * The commissionNoVat
     * @var float|null
     */
    protected ?float $commissionNoVat = null;
    /**
     * The commissionPercent
     * @var float|null
     */
    protected ?float $commissionPercent = null;
    /**
     * The conversionRate
     * @var float|null
     */
    protected ?float $conversionRate = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The detailPosition
     * @var int|null
     */
    protected ?int $detailPosition = null;
    /**
     * The foreignAmount
     * @var float|null
     */
    protected ?float $foreignAmount = null;
    /**
     * The foreignCurrency
     * @var string|null
     */
    protected ?string $foreignCurrency = null;
    /**
     * The inkassoMode
     * @var string|null
     */
    protected ?string $inkassoMode = null;
    /**
     * The invoicingType
     * @var string|null
     */
    protected ?string $invoicingType = null;
    /**
     * The isDeposit
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The nettoAmount
     * @var float|null
     */
    protected ?float $nettoAmount = null;
    /**
     * The originalAmount
     * @var float|null
     */
    protected ?float $originalAmount = null;
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The settlementTypeDebit
     * @var string|null
     */
    protected ?string $settlementTypeDebit = null;
    /**
     * The supplierDiAmount
     * @var float|null
     */
    protected ?float $supplierDiAmount = null;
    /**
     * The supplierInvoiceVatAmount
     * @var float|null
     */
    protected ?float $supplierInvoiceVatAmount = null;
    /**
     * The supplierInvoiceVatPercent
     * @var float|null
     */
    protected ?float $supplierInvoiceVatPercent = null;
    /**
     * The taxAmount
     * @var float|null
     */
    protected ?float $taxAmount = null;
    /**
     * The ticketAgentNo
     * @var string|null
     */
    protected ?string $ticketAgentNo = null;
    /**
     * The ticketNo
     * @var string|null
     */
    protected ?string $ticketNo = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * Constructor method for SupplAgencySettlemDetDTO
     * @uses SupplAgencySettlemDetDTO::setBillingDate()
     * @uses SupplAgencySettlemDetDTO::setBookingPosition()
     * @uses SupplAgencySettlemDetDTO::setBruttoAmount()
     * @uses SupplAgencySettlemDetDTO::setComments()
     * @uses SupplAgencySettlemDetDTO::setCommissionAmount()
     * @uses SupplAgencySettlemDetDTO::setCommissionInsurance()
     * @uses SupplAgencySettlemDetDTO::setCommissionNoVat()
     * @uses SupplAgencySettlemDetDTO::setCommissionPercent()
     * @uses SupplAgencySettlemDetDTO::setConversionRate()
     * @uses SupplAgencySettlemDetDTO::setCurrency()
     * @uses SupplAgencySettlemDetDTO::setDescription()
     * @uses SupplAgencySettlemDetDTO::setDetailPosition()
     * @uses SupplAgencySettlemDetDTO::setForeignAmount()
     * @uses SupplAgencySettlemDetDTO::setForeignCurrency()
     * @uses SupplAgencySettlemDetDTO::setInkassoMode()
     * @uses SupplAgencySettlemDetDTO::setInvoicingType()
     * @uses SupplAgencySettlemDetDTO::setIsDeposit()
     * @uses SupplAgencySettlemDetDTO::setNettoAmount()
     * @uses SupplAgencySettlemDetDTO::setOriginalAmount()
     * @uses SupplAgencySettlemDetDTO::setReceiptNo()
     * @uses SupplAgencySettlemDetDTO::setSettlementId()
     * @uses SupplAgencySettlemDetDTO::setSettlementType()
     * @uses SupplAgencySettlemDetDTO::setSettlementTypeDebit()
     * @uses SupplAgencySettlemDetDTO::setSupplierDiAmount()
     * @uses SupplAgencySettlemDetDTO::setSupplierInvoiceVatAmount()
     * @uses SupplAgencySettlemDetDTO::setSupplierInvoiceVatPercent()
     * @uses SupplAgencySettlemDetDTO::setTaxAmount()
     * @uses SupplAgencySettlemDetDTO::setTicketAgentNo()
     * @uses SupplAgencySettlemDetDTO::setTicketNo()
     * @uses SupplAgencySettlemDetDTO::setVatAmount()
     * @uses SupplAgencySettlemDetDTO::setVatPercent()
     * @param string $billingDate
     * @param int $bookingPosition
     * @param float $bruttoAmount
     * @param string $comments
     * @param float $commissionAmount
     * @param float $commissionInsurance
     * @param float $commissionNoVat
     * @param float $commissionPercent
     * @param float $conversionRate
     * @param string $currency
     * @param string $description
     * @param int $detailPosition
     * @param float $foreignAmount
     * @param string $foreignCurrency
     * @param string $inkassoMode
     * @param string $invoicingType
     * @param bool $isDeposit
     * @param float $nettoAmount
     * @param float $originalAmount
     * @param string $receiptNo
     * @param int $settlementId
     * @param string $settlementType
     * @param string $settlementTypeDebit
     * @param float $supplierDiAmount
     * @param float $supplierInvoiceVatAmount
     * @param float $supplierInvoiceVatPercent
     * @param float $taxAmount
     * @param string $ticketAgentNo
     * @param string $ticketNo
     * @param float $vatAmount
     * @param float $vatPercent
     */
    public function __construct(?string $billingDate = null, ?int $bookingPosition = null, ?float $bruttoAmount = null, ?string $comments = null, ?float $commissionAmount = null, ?float $commissionInsurance = null, ?float $commissionNoVat = null, ?float $commissionPercent = null, ?float $conversionRate = null, ?string $currency = null, ?string $description = null, ?int $detailPosition = null, ?float $foreignAmount = null, ?string $foreignCurrency = null, ?string $inkassoMode = null, ?string $invoicingType = null, ?bool $isDeposit = null, ?float $nettoAmount = null, ?float $originalAmount = null, ?string $receiptNo = null, ?int $settlementId = null, ?string $settlementType = null, ?string $settlementTypeDebit = null, ?float $supplierDiAmount = null, ?float $supplierInvoiceVatAmount = null, ?float $supplierInvoiceVatPercent = null, ?float $taxAmount = null, ?string $ticketAgentNo = null, ?string $ticketNo = null, ?float $vatAmount = null, ?float $vatPercent = null)
    {
        $this
            ->setBillingDate($billingDate)
            ->setBookingPosition($bookingPosition)
            ->setBruttoAmount($bruttoAmount)
            ->setComments($comments)
            ->setCommissionAmount($commissionAmount)
            ->setCommissionInsurance($commissionInsurance)
            ->setCommissionNoVat($commissionNoVat)
            ->setCommissionPercent($commissionPercent)
            ->setConversionRate($conversionRate)
            ->setCurrency($currency)
            ->setDescription($description)
            ->setDetailPosition($detailPosition)
            ->setForeignAmount($foreignAmount)
            ->setForeignCurrency($foreignCurrency)
            ->setInkassoMode($inkassoMode)
            ->setInvoicingType($invoicingType)
            ->setIsDeposit($isDeposit)
            ->setNettoAmount($nettoAmount)
            ->setOriginalAmount($originalAmount)
            ->setReceiptNo($receiptNo)
            ->setSettlementId($settlementId)
            ->setSettlementType($settlementType)
            ->setSettlementTypeDebit($settlementTypeDebit)
            ->setSupplierDiAmount($supplierDiAmount)
            ->setSupplierInvoiceVatAmount($supplierInvoiceVatAmount)
            ->setSupplierInvoiceVatPercent($supplierInvoiceVatPercent)
            ->setTaxAmount($taxAmount)
            ->setTicketAgentNo($ticketAgentNo)
            ->setTicketNo($ticketNo)
            ->setVatAmount($vatAmount)
            ->setVatPercent($vatPercent);
    }
    /**
     * Get billingDate value
     * @return string|null
     */
    public function getBillingDate(): ?string
    {
        return $this->billingDate;
    }
    /**
     * Set billingDate value
     * @param string $billingDate
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setBillingDate(?string $billingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($billingDate) && !is_string($billingDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingDate, true), gettype($billingDate)), __LINE__);
        }
        $this->billingDate = $billingDate;
        
        return $this;
    }
    /**
     * Get bookingPosition value
     * @return int|null
     */
    public function getBookingPosition(): ?int
    {
        return $this->bookingPosition;
    }
    /**
     * Set bookingPosition value
     * @param int $bookingPosition
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setBookingPosition(?int $bookingPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($bookingPosition) && !(is_int($bookingPosition) || ctype_digit($bookingPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bookingPosition, true), gettype($bookingPosition)), __LINE__);
        }
        $this->bookingPosition = $bookingPosition;
        
        return $this;
    }
    /**
     * Get bruttoAmount value
     * @return float|null
     */
    public function getBruttoAmount(): ?float
    {
        return $this->bruttoAmount;
    }
    /**
     * Set bruttoAmount value
     * @param float $bruttoAmount
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setBruttoAmount(?float $bruttoAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($bruttoAmount) && !(is_float($bruttoAmount) || is_numeric($bruttoAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bruttoAmount, true), gettype($bruttoAmount)), __LINE__);
        }
        $this->bruttoAmount = $bruttoAmount;
        
        return $this;
    }
    /**
     * Get comments value
     * @return string|null
     */
    public function getComments(): ?string
    {
        return $this->comments;
    }
    /**
     * Set comments value
     * @param string $comments
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setComments(?string $comments = null): self
    {
        // validation for constraint: string
        if (!is_null($comments) && !is_string($comments)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comments, true), gettype($comments)), __LINE__);
        }
        $this->comments = $comments;
        
        return $this;
    }
    /**
     * Get commissionAmount value
     * @return float|null
     */
    public function getCommissionAmount(): ?float
    {
        return $this->commissionAmount;
    }
    /**
     * Set commissionAmount value
     * @param float $commissionAmount
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setCommissionAmount(?float $commissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionAmount) && !(is_float($commissionAmount) || is_numeric($commissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionAmount, true), gettype($commissionAmount)), __LINE__);
        }
        $this->commissionAmount = $commissionAmount;
        
        return $this;
    }
    /**
     * Get commissionInsurance value
     * @return float|null
     */
    public function getCommissionInsurance(): ?float
    {
        return $this->commissionInsurance;
    }
    /**
     * Set commissionInsurance value
     * @param float $commissionInsurance
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setCommissionInsurance(?float $commissionInsurance = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionInsurance) && !(is_float($commissionInsurance) || is_numeric($commissionInsurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionInsurance, true), gettype($commissionInsurance)), __LINE__);
        }
        $this->commissionInsurance = $commissionInsurance;
        
        return $this;
    }
    /**
     * Get commissionNoVat value
     * @return float|null
     */
    public function getCommissionNoVat(): ?float
    {
        return $this->commissionNoVat;
    }
    /**
     * Set commissionNoVat value
     * @param float $commissionNoVat
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setCommissionNoVat(?float $commissionNoVat = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionNoVat) && !(is_float($commissionNoVat) || is_numeric($commissionNoVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionNoVat, true), gettype($commissionNoVat)), __LINE__);
        }
        $this->commissionNoVat = $commissionNoVat;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
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
     * Get conversionRate value
     * @return float|null
     */
    public function getConversionRate(): ?float
    {
        return $this->conversionRate;
    }
    /**
     * Set conversionRate value
     * @param float $conversionRate
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setConversionRate(?float $conversionRate = null): self
    {
        // validation for constraint: float
        if (!is_null($conversionRate) && !(is_float($conversionRate) || is_numeric($conversionRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($conversionRate, true), gettype($conversionRate)), __LINE__);
        }
        $this->conversionRate = $conversionRate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
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
     * Get detailPosition value
     * @return int|null
     */
    public function getDetailPosition(): ?int
    {
        return $this->detailPosition;
    }
    /**
     * Set detailPosition value
     * @param int $detailPosition
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setDetailPosition(?int $detailPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($detailPosition) && !(is_int($detailPosition) || ctype_digit($detailPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($detailPosition, true), gettype($detailPosition)), __LINE__);
        }
        $this->detailPosition = $detailPosition;
        
        return $this;
    }
    /**
     * Get foreignAmount value
     * @return float|null
     */
    public function getForeignAmount(): ?float
    {
        return $this->foreignAmount;
    }
    /**
     * Set foreignAmount value
     * @param float $foreignAmount
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setForeignAmount(?float $foreignAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($foreignAmount) && !(is_float($foreignAmount) || is_numeric($foreignAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($foreignAmount, true), gettype($foreignAmount)), __LINE__);
        }
        $this->foreignAmount = $foreignAmount;
        
        return $this;
    }
    /**
     * Get foreignCurrency value
     * @return string|null
     */
    public function getForeignCurrency(): ?string
    {
        return $this->foreignCurrency;
    }
    /**
     * Set foreignCurrency value
     * @param string $foreignCurrency
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setForeignCurrency(?string $foreignCurrency = null): self
    {
        // validation for constraint: string
        if (!is_null($foreignCurrency) && !is_string($foreignCurrency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foreignCurrency, true), gettype($foreignCurrency)), __LINE__);
        }
        $this->foreignCurrency = $foreignCurrency;
        
        return $this;
    }
    /**
     * Get inkassoMode value
     * @return string|null
     */
    public function getInkassoMode(): ?string
    {
        return $this->inkassoMode;
    }
    /**
     * Set inkassoMode value
     * @param string $inkassoMode
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setInkassoMode(?string $inkassoMode = null): self
    {
        // validation for constraint: string
        if (!is_null($inkassoMode) && !is_string($inkassoMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inkassoMode, true), gettype($inkassoMode)), __LINE__);
        }
        $this->inkassoMode = $inkassoMode;
        
        return $this;
    }
    /**
     * Get invoicingType value
     * @return string|null
     */
    public function getInvoicingType(): ?string
    {
        return $this->invoicingType;
    }
    /**
     * Set invoicingType value
     * @param string $invoicingType
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setInvoicingType(?string $invoicingType = null): self
    {
        // validation for constraint: string
        if (!is_null($invoicingType) && !is_string($invoicingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($invoicingType, true), gettype($invoicingType)), __LINE__);
        }
        $this->invoicingType = $invoicingType;
        
        return $this;
    }
    /**
     * Get isDeposit value
     * @return bool|null
     */
    public function getIsDeposit(): ?bool
    {
        return $this->isDeposit;
    }
    /**
     * Set isDeposit value
     * @param bool $isDeposit
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setIsDeposit(?bool $isDeposit = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeposit) && !is_bool($isDeposit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeposit, true), gettype($isDeposit)), __LINE__);
        }
        $this->isDeposit = $isDeposit;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
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
     * Get settlementType value
     * @return string|null
     */
    public function getSettlementType(): ?string
    {
        return $this->settlementType;
    }
    /**
     * Set settlementType value
     * @param string $settlementType
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setSettlementType(?string $settlementType = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementType) && !is_string($settlementType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementType, true), gettype($settlementType)), __LINE__);
        }
        $this->settlementType = $settlementType;
        
        return $this;
    }
    /**
     * Get settlementTypeDebit value
     * @return string|null
     */
    public function getSettlementTypeDebit(): ?string
    {
        return $this->settlementTypeDebit;
    }
    /**
     * Set settlementTypeDebit value
     * @param string $settlementTypeDebit
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setSettlementTypeDebit(?string $settlementTypeDebit = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementTypeDebit) && !is_string($settlementTypeDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementTypeDebit, true), gettype($settlementTypeDebit)), __LINE__);
        }
        $this->settlementTypeDebit = $settlementTypeDebit;
        
        return $this;
    }
    /**
     * Get supplierDiAmount value
     * @return float|null
     */
    public function getSupplierDiAmount(): ?float
    {
        return $this->supplierDiAmount;
    }
    /**
     * Set supplierDiAmount value
     * @param float $supplierDiAmount
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setSupplierDiAmount(?float $supplierDiAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierDiAmount) && !(is_float($supplierDiAmount) || is_numeric($supplierDiAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierDiAmount, true), gettype($supplierDiAmount)), __LINE__);
        }
        $this->supplierDiAmount = $supplierDiAmount;
        
        return $this;
    }
    /**
     * Get supplierInvoiceVatAmount value
     * @return float|null
     */
    public function getSupplierInvoiceVatAmount(): ?float
    {
        return $this->supplierInvoiceVatAmount;
    }
    /**
     * Set supplierInvoiceVatAmount value
     * @param float $supplierInvoiceVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setSupplierInvoiceVatAmount(?float $supplierInvoiceVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierInvoiceVatAmount) && !(is_float($supplierInvoiceVatAmount) || is_numeric($supplierInvoiceVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierInvoiceVatAmount, true), gettype($supplierInvoiceVatAmount)), __LINE__);
        }
        $this->supplierInvoiceVatAmount = $supplierInvoiceVatAmount;
        
        return $this;
    }
    /**
     * Get supplierInvoiceVatPercent value
     * @return float|null
     */
    public function getSupplierInvoiceVatPercent(): ?float
    {
        return $this->supplierInvoiceVatPercent;
    }
    /**
     * Set supplierInvoiceVatPercent value
     * @param float $supplierInvoiceVatPercent
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setSupplierInvoiceVatPercent(?float $supplierInvoiceVatPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierInvoiceVatPercent) && !(is_float($supplierInvoiceVatPercent) || is_numeric($supplierInvoiceVatPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierInvoiceVatPercent, true), gettype($supplierInvoiceVatPercent)), __LINE__);
        }
        $this->supplierInvoiceVatPercent = $supplierInvoiceVatPercent;
        
        return $this;
    }
    /**
     * Get taxAmount value
     * @return float|null
     */
    public function getTaxAmount(): ?float
    {
        return $this->taxAmount;
    }
    /**
     * Set taxAmount value
     * @param float $taxAmount
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setTaxAmount(?float $taxAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($taxAmount) && !(is_float($taxAmount) || is_numeric($taxAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($taxAmount, true), gettype($taxAmount)), __LINE__);
        }
        $this->taxAmount = $taxAmount;
        
        return $this;
    }
    /**
     * Get ticketAgentNo value
     * @return string|null
     */
    public function getTicketAgentNo(): ?string
    {
        return $this->ticketAgentNo;
    }
    /**
     * Set ticketAgentNo value
     * @param string $ticketAgentNo
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setTicketAgentNo(?string $ticketAgentNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketAgentNo) && !is_string($ticketAgentNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketAgentNo, true), gettype($ticketAgentNo)), __LINE__);
        }
        $this->ticketAgentNo = $ticketAgentNo;
        
        return $this;
    }
    /**
     * Get ticketNo value
     * @return string|null
     */
    public function getTicketNo(): ?string
    {
        return $this->ticketNo;
    }
    /**
     * Set ticketNo value
     * @param string $ticketNo
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
     */
    public function setTicketNo(?string $ticketNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketNo) && !is_string($ticketNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketNo, true), gettype($ticketNo)), __LINE__);
        }
        $this->ticketNo = $ticketNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemDetDTO
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
