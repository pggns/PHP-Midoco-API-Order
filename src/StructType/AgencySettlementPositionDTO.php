<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencySettlementPositionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AgencySettlementPositionDTO extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The commissionAgencyCurrency
     * @var float|null
     */
    protected ?float $commissionAgencyCurrency = null;
    /**
     * The commissionAmount
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The commissionBaseAmount
     * @var float|null
     */
    protected ?float $commissionBaseAmount = null;
    /**
     * The commissionInsuranceAgencyCurrency
     * @var float|null
     */
    protected ?float $commissionInsuranceAgencyCurrency = null;
    /**
     * The commissionInsuranceAmount
     * @var float|null
     */
    protected ?float $commissionInsuranceAmount = null;
    /**
     * The commissionVatAmount
     * @var float|null
     */
    protected ?float $commissionVatAmount = null;
    /**
     * The commissionVatAmountAgencyCurrency
     * @var float|null
     */
    protected ?float $commissionVatAmountAgencyCurrency = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The exported
     * @var bool|null
     */
    protected ?bool $exported = null;
    /**
     * The includedVatAmount
     * @var float|null
     */
    protected ?float $includedVatAmount = null;
    /**
     * The invoiceAmount
     * @var float|null
     */
    protected ?float $invoiceAmount = null;
    /**
     * The invoiceAmountAgencyCurrency
     * @var float|null
     */
    protected ?float $invoiceAmountAgencyCurrency = null;
    /**
     * The invoicingType
     * @var string|null
     */
    protected ?string $invoicingType = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The markedByUserId
     * @var int|null
     */
    protected ?int $markedByUserId = null;
    /**
     * The markedDate
     * @var string|null
     */
    protected ?string $markedDate = null;
    /**
     * The markedForExport
     * @var bool|null
     */
    protected ?bool $markedForExport = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderVersion
     * @var int|null
     */
    protected ?int $orderVersion = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The settlementPositionId
     * @var int|null
     */
    protected ?int $settlementPositionId = null;
    /**
     * The totalPrice
     * @var float|null
     */
    protected ?float $totalPrice = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * The voidInvoiceId
     * @var int|null
     */
    protected ?int $voidInvoiceId = null;
    /**
     * The voidPositionId
     * @var int|null
     */
    protected ?int $voidPositionId = null;
    /**
     * Constructor method for AgencySettlementPositionDTO
     * @uses AgencySettlementPositionDTO::setAgencyId()
     * @uses AgencySettlementPositionDTO::setCommissionAgencyCurrency()
     * @uses AgencySettlementPositionDTO::setCommissionAmount()
     * @uses AgencySettlementPositionDTO::setCommissionBaseAmount()
     * @uses AgencySettlementPositionDTO::setCommissionInsuranceAgencyCurrency()
     * @uses AgencySettlementPositionDTO::setCommissionInsuranceAmount()
     * @uses AgencySettlementPositionDTO::setCommissionVatAmount()
     * @uses AgencySettlementPositionDTO::setCommissionVatAmountAgencyCurrency()
     * @uses AgencySettlementPositionDTO::setDescription()
     * @uses AgencySettlementPositionDTO::setExported()
     * @uses AgencySettlementPositionDTO::setIncludedVatAmount()
     * @uses AgencySettlementPositionDTO::setInvoiceAmount()
     * @uses AgencySettlementPositionDTO::setInvoiceAmountAgencyCurrency()
     * @uses AgencySettlementPositionDTO::setInvoicingType()
     * @uses AgencySettlementPositionDTO::setItemId()
     * @uses AgencySettlementPositionDTO::setMarkedByUserId()
     * @uses AgencySettlementPositionDTO::setMarkedDate()
     * @uses AgencySettlementPositionDTO::setMarkedForExport()
     * @uses AgencySettlementPositionDTO::setOrderId()
     * @uses AgencySettlementPositionDTO::setOrderVersion()
     * @uses AgencySettlementPositionDTO::setSettlementId()
     * @uses AgencySettlementPositionDTO::setSettlementPositionId()
     * @uses AgencySettlementPositionDTO::setTotalPrice()
     * @uses AgencySettlementPositionDTO::setVatPercent()
     * @uses AgencySettlementPositionDTO::setVoidInvoiceId()
     * @uses AgencySettlementPositionDTO::setVoidPositionId()
     * @param string $agencyId
     * @param float $commissionAgencyCurrency
     * @param float $commissionAmount
     * @param float $commissionBaseAmount
     * @param float $commissionInsuranceAgencyCurrency
     * @param float $commissionInsuranceAmount
     * @param float $commissionVatAmount
     * @param float $commissionVatAmountAgencyCurrency
     * @param string $description
     * @param bool $exported
     * @param float $includedVatAmount
     * @param float $invoiceAmount
     * @param float $invoiceAmountAgencyCurrency
     * @param string $invoicingType
     * @param int $itemId
     * @param int $markedByUserId
     * @param string $markedDate
     * @param bool $markedForExport
     * @param int $orderId
     * @param int $orderVersion
     * @param int $settlementId
     * @param int $settlementPositionId
     * @param float $totalPrice
     * @param float $vatPercent
     * @param int $voidInvoiceId
     * @param int $voidPositionId
     */
    public function __construct(?string $agencyId = null, ?float $commissionAgencyCurrency = null, ?float $commissionAmount = null, ?float $commissionBaseAmount = null, ?float $commissionInsuranceAgencyCurrency = null, ?float $commissionInsuranceAmount = null, ?float $commissionVatAmount = null, ?float $commissionVatAmountAgencyCurrency = null, ?string $description = null, ?bool $exported = null, ?float $includedVatAmount = null, ?float $invoiceAmount = null, ?float $invoiceAmountAgencyCurrency = null, ?string $invoicingType = null, ?int $itemId = null, ?int $markedByUserId = null, ?string $markedDate = null, ?bool $markedForExport = null, ?int $orderId = null, ?int $orderVersion = null, ?int $settlementId = null, ?int $settlementPositionId = null, ?float $totalPrice = null, ?float $vatPercent = null, ?int $voidInvoiceId = null, ?int $voidPositionId = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setCommissionAgencyCurrency($commissionAgencyCurrency)
            ->setCommissionAmount($commissionAmount)
            ->setCommissionBaseAmount($commissionBaseAmount)
            ->setCommissionInsuranceAgencyCurrency($commissionInsuranceAgencyCurrency)
            ->setCommissionInsuranceAmount($commissionInsuranceAmount)
            ->setCommissionVatAmount($commissionVatAmount)
            ->setCommissionVatAmountAgencyCurrency($commissionVatAmountAgencyCurrency)
            ->setDescription($description)
            ->setExported($exported)
            ->setIncludedVatAmount($includedVatAmount)
            ->setInvoiceAmount($invoiceAmount)
            ->setInvoiceAmountAgencyCurrency($invoiceAmountAgencyCurrency)
            ->setInvoicingType($invoicingType)
            ->setItemId($itemId)
            ->setMarkedByUserId($markedByUserId)
            ->setMarkedDate($markedDate)
            ->setMarkedForExport($markedForExport)
            ->setOrderId($orderId)
            ->setOrderVersion($orderVersion)
            ->setSettlementId($settlementId)
            ->setSettlementPositionId($settlementPositionId)
            ->setTotalPrice($totalPrice)
            ->setVatPercent($vatPercent)
            ->setVoidInvoiceId($voidInvoiceId)
            ->setVoidPositionId($voidPositionId);
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
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
     * Get commissionAgencyCurrency value
     * @return float|null
     */
    public function getCommissionAgencyCurrency(): ?float
    {
        return $this->commissionAgencyCurrency;
    }
    /**
     * Set commissionAgencyCurrency value
     * @param float $commissionAgencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setCommissionAgencyCurrency(?float $commissionAgencyCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionAgencyCurrency) && !(is_float($commissionAgencyCurrency) || is_numeric($commissionAgencyCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionAgencyCurrency, true), gettype($commissionAgencyCurrency)), __LINE__);
        }
        $this->commissionAgencyCurrency = $commissionAgencyCurrency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
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
     * Get commissionBaseAmount value
     * @return float|null
     */
    public function getCommissionBaseAmount(): ?float
    {
        return $this->commissionBaseAmount;
    }
    /**
     * Set commissionBaseAmount value
     * @param float $commissionBaseAmount
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setCommissionBaseAmount(?float $commissionBaseAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionBaseAmount) && !(is_float($commissionBaseAmount) || is_numeric($commissionBaseAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionBaseAmount, true), gettype($commissionBaseAmount)), __LINE__);
        }
        $this->commissionBaseAmount = $commissionBaseAmount;
        
        return $this;
    }
    /**
     * Get commissionInsuranceAgencyCurrency value
     * @return float|null
     */
    public function getCommissionInsuranceAgencyCurrency(): ?float
    {
        return $this->commissionInsuranceAgencyCurrency;
    }
    /**
     * Set commissionInsuranceAgencyCurrency value
     * @param float $commissionInsuranceAgencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setCommissionInsuranceAgencyCurrency(?float $commissionInsuranceAgencyCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionInsuranceAgencyCurrency) && !(is_float($commissionInsuranceAgencyCurrency) || is_numeric($commissionInsuranceAgencyCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionInsuranceAgencyCurrency, true), gettype($commissionInsuranceAgencyCurrency)), __LINE__);
        }
        $this->commissionInsuranceAgencyCurrency = $commissionInsuranceAgencyCurrency;
        
        return $this;
    }
    /**
     * Get commissionInsuranceAmount value
     * @return float|null
     */
    public function getCommissionInsuranceAmount(): ?float
    {
        return $this->commissionInsuranceAmount;
    }
    /**
     * Set commissionInsuranceAmount value
     * @param float $commissionInsuranceAmount
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setCommissionInsuranceAmount(?float $commissionInsuranceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionInsuranceAmount) && !(is_float($commissionInsuranceAmount) || is_numeric($commissionInsuranceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionInsuranceAmount, true), gettype($commissionInsuranceAmount)), __LINE__);
        }
        $this->commissionInsuranceAmount = $commissionInsuranceAmount;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
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
     * Get commissionVatAmountAgencyCurrency value
     * @return float|null
     */
    public function getCommissionVatAmountAgencyCurrency(): ?float
    {
        return $this->commissionVatAmountAgencyCurrency;
    }
    /**
     * Set commissionVatAmountAgencyCurrency value
     * @param float $commissionVatAmountAgencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setCommissionVatAmountAgencyCurrency(?float $commissionVatAmountAgencyCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionVatAmountAgencyCurrency) && !(is_float($commissionVatAmountAgencyCurrency) || is_numeric($commissionVatAmountAgencyCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionVatAmountAgencyCurrency, true), gettype($commissionVatAmountAgencyCurrency)), __LINE__);
        }
        $this->commissionVatAmountAgencyCurrency = $commissionVatAmountAgencyCurrency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
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
     * Get exported value
     * @return bool|null
     */
    public function getExported(): ?bool
    {
        return $this->exported;
    }
    /**
     * Set exported value
     * @param bool $exported
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setExported(?bool $exported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($exported) && !is_bool($exported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exported, true), gettype($exported)), __LINE__);
        }
        $this->exported = $exported;
        
        return $this;
    }
    /**
     * Get includedVatAmount value
     * @return float|null
     */
    public function getIncludedVatAmount(): ?float
    {
        return $this->includedVatAmount;
    }
    /**
     * Set includedVatAmount value
     * @param float $includedVatAmount
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setIncludedVatAmount(?float $includedVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($includedVatAmount) && !(is_float($includedVatAmount) || is_numeric($includedVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($includedVatAmount, true), gettype($includedVatAmount)), __LINE__);
        }
        $this->includedVatAmount = $includedVatAmount;
        
        return $this;
    }
    /**
     * Get invoiceAmount value
     * @return float|null
     */
    public function getInvoiceAmount(): ?float
    {
        return $this->invoiceAmount;
    }
    /**
     * Set invoiceAmount value
     * @param float $invoiceAmount
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setInvoiceAmount(?float $invoiceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($invoiceAmount) && !(is_float($invoiceAmount) || is_numeric($invoiceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoiceAmount, true), gettype($invoiceAmount)), __LINE__);
        }
        $this->invoiceAmount = $invoiceAmount;
        
        return $this;
    }
    /**
     * Get invoiceAmountAgencyCurrency value
     * @return float|null
     */
    public function getInvoiceAmountAgencyCurrency(): ?float
    {
        return $this->invoiceAmountAgencyCurrency;
    }
    /**
     * Set invoiceAmountAgencyCurrency value
     * @param float $invoiceAmountAgencyCurrency
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setInvoiceAmountAgencyCurrency(?float $invoiceAmountAgencyCurrency = null): self
    {
        // validation for constraint: float
        if (!is_null($invoiceAmountAgencyCurrency) && !(is_float($invoiceAmountAgencyCurrency) || is_numeric($invoiceAmountAgencyCurrency))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoiceAmountAgencyCurrency, true), gettype($invoiceAmountAgencyCurrency)), __LINE__);
        }
        $this->invoiceAmountAgencyCurrency = $invoiceAmountAgencyCurrency;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
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
     * Get markedByUserId value
     * @return int|null
     */
    public function getMarkedByUserId(): ?int
    {
        return $this->markedByUserId;
    }
    /**
     * Set markedByUserId value
     * @param int $markedByUserId
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setMarkedByUserId(?int $markedByUserId = null): self
    {
        // validation for constraint: int
        if (!is_null($markedByUserId) && !(is_int($markedByUserId) || ctype_digit($markedByUserId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($markedByUserId, true), gettype($markedByUserId)), __LINE__);
        }
        $this->markedByUserId = $markedByUserId;
        
        return $this;
    }
    /**
     * Get markedDate value
     * @return string|null
     */
    public function getMarkedDate(): ?string
    {
        return $this->markedDate;
    }
    /**
     * Set markedDate value
     * @param string $markedDate
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setMarkedDate(?string $markedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($markedDate) && !is_string($markedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($markedDate, true), gettype($markedDate)), __LINE__);
        }
        $this->markedDate = $markedDate;
        
        return $this;
    }
    /**
     * Get markedForExport value
     * @return bool|null
     */
    public function getMarkedForExport(): ?bool
    {
        return $this->markedForExport;
    }
    /**
     * Set markedForExport value
     * @param bool $markedForExport
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setMarkedForExport(?bool $markedForExport = null): self
    {
        // validation for constraint: boolean
        if (!is_null($markedForExport) && !is_bool($markedForExport)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($markedForExport, true), gettype($markedForExport)), __LINE__);
        }
        $this->markedForExport = $markedForExport;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get orderVersion value
     * @return int|null
     */
    public function getOrderVersion(): ?int
    {
        return $this->orderVersion;
    }
    /**
     * Set orderVersion value
     * @param int $orderVersion
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setOrderVersion(?int $orderVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($orderVersion) && !(is_int($orderVersion) || ctype_digit($orderVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderVersion, true), gettype($orderVersion)), __LINE__);
        }
        $this->orderVersion = $orderVersion;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
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
     * Get settlementPositionId value
     * @return int|null
     */
    public function getSettlementPositionId(): ?int
    {
        return $this->settlementPositionId;
    }
    /**
     * Set settlementPositionId value
     * @param int $settlementPositionId
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setSettlementPositionId(?int $settlementPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementPositionId) && !(is_int($settlementPositionId) || ctype_digit($settlementPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementPositionId, true), gettype($settlementPositionId)), __LINE__);
        }
        $this->settlementPositionId = $settlementPositionId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
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
    /**
     * Get voidInvoiceId value
     * @return int|null
     */
    public function getVoidInvoiceId(): ?int
    {
        return $this->voidInvoiceId;
    }
    /**
     * Set voidInvoiceId value
     * @param int $voidInvoiceId
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setVoidInvoiceId(?int $voidInvoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($voidInvoiceId) && !(is_int($voidInvoiceId) || ctype_digit($voidInvoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voidInvoiceId, true), gettype($voidInvoiceId)), __LINE__);
        }
        $this->voidInvoiceId = $voidInvoiceId;
        
        return $this;
    }
    /**
     * Get voidPositionId value
     * @return int|null
     */
    public function getVoidPositionId(): ?int
    {
        return $this->voidPositionId;
    }
    /**
     * Set voidPositionId value
     * @param int $voidPositionId
     * @return \Pggns\MidocoApi\Order\StructType\AgencySettlementPositionDTO
     */
    public function setVoidPositionId(?int $voidPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($voidPositionId) && !(is_int($voidPositionId) || ctype_digit($voidPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($voidPositionId, true), gettype($voidPositionId)), __LINE__);
        }
        $this->voidPositionId = $voidPositionId;
        
        return $this;
    }
}
