<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreparedRevenueBookingDTO StructType
 * @subpackage Structs
 */
class PreparedRevenueBookingDTO extends AbstractStructBase
{
    /**
     * The adviceDetailId
     * @var int|null
     */
    protected ?int $adviceDetailId = null;
    /**
     * The bookingAmount
     * @var float|null
     */
    protected ?float $bookingAmount = null;
    /**
     * The bruttoPrice
     * @var float|null
     */
    protected ?float $bruttoPrice = null;
    /**
     * The creationType
     * @var string|null
     */
    protected ?string $creationType = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The isDeposit
     * @var bool|null
     */
    protected ?bool $isDeposit = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The originalCurrency
     * @var string|null
     */
    protected ?string $originalCurrency = null;
    /**
     * The originalRevenueInclVat
     * @var float|null
     */
    protected ?float $originalRevenueInclVat = null;
    /**
     * The originalRevenueInsurance
     * @var float|null
     */
    protected ?float $originalRevenueInsurance = null;
    /**
     * The originalRevenueVatFree
     * @var float|null
     */
    protected ?float $originalRevenueVatFree = null;
    /**
     * The preparedRevenueId
     * @var int|null
     */
    protected ?int $preparedRevenueId = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The revenueInclVat
     * @var float|null
     */
    protected ?float $revenueInclVat = null;
    /**
     * The revenueInsurance
     * @var float|null
     */
    protected ?float $revenueInsurance = null;
    /**
     * The revenueVatFree
     * @var float|null
     */
    protected ?float $revenueVatFree = null;
    /**
     * The stornoAccounts
     * @var bool|null
     */
    protected ?bool $stornoAccounts = null;
    /**
     * The suppSettlemId
     * @var int|null
     */
    protected ?int $suppSettlemId = null;
    /**
     * The suppSettlemPos
     * @var int|null
     */
    protected ?int $suppSettlemPos = null;
    /**
     * The supplierDiAmount
     * @var float|null
     */
    protected ?float $supplierDiAmount = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The supplierInvoiceAmount
     * @var float|null
     */
    protected ?float $supplierInvoiceAmount = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * Constructor method for PreparedRevenueBookingDTO
     * @uses PreparedRevenueBookingDTO::setAdviceDetailId()
     * @uses PreparedRevenueBookingDTO::setBookingAmount()
     * @uses PreparedRevenueBookingDTO::setBruttoPrice()
     * @uses PreparedRevenueBookingDTO::setCreationType()
     * @uses PreparedRevenueBookingDTO::setDestination()
     * @uses PreparedRevenueBookingDTO::setIsDeposit()
     * @uses PreparedRevenueBookingDTO::setItemId()
     * @uses PreparedRevenueBookingDTO::setOriginalCurrency()
     * @uses PreparedRevenueBookingDTO::setOriginalRevenueInclVat()
     * @uses PreparedRevenueBookingDTO::setOriginalRevenueInsurance()
     * @uses PreparedRevenueBookingDTO::setOriginalRevenueVatFree()
     * @uses PreparedRevenueBookingDTO::setPreparedRevenueId()
     * @uses PreparedRevenueBookingDTO::setReceiptDate()
     * @uses PreparedRevenueBookingDTO::setReceiptNo()
     * @uses PreparedRevenueBookingDTO::setRevenueInclVat()
     * @uses PreparedRevenueBookingDTO::setRevenueInsurance()
     * @uses PreparedRevenueBookingDTO::setRevenueVatFree()
     * @uses PreparedRevenueBookingDTO::setStornoAccounts()
     * @uses PreparedRevenueBookingDTO::setSuppSettlemId()
     * @uses PreparedRevenueBookingDTO::setSuppSettlemPos()
     * @uses PreparedRevenueBookingDTO::setSupplierDiAmount()
     * @uses PreparedRevenueBookingDTO::setSupplierId()
     * @uses PreparedRevenueBookingDTO::setSupplierInvoiceAmount()
     * @uses PreparedRevenueBookingDTO::setTravelType()
     * @param int $adviceDetailId
     * @param float $bookingAmount
     * @param float $bruttoPrice
     * @param string $creationType
     * @param string $destination
     * @param bool $isDeposit
     * @param int $itemId
     * @param string $originalCurrency
     * @param float $originalRevenueInclVat
     * @param float $originalRevenueInsurance
     * @param float $originalRevenueVatFree
     * @param int $preparedRevenueId
     * @param string $receiptDate
     * @param string $receiptNo
     * @param float $revenueInclVat
     * @param float $revenueInsurance
     * @param float $revenueVatFree
     * @param bool $stornoAccounts
     * @param int $suppSettlemId
     * @param int $suppSettlemPos
     * @param float $supplierDiAmount
     * @param string $supplierId
     * @param float $supplierInvoiceAmount
     * @param string $travelType
     */
    public function __construct(?int $adviceDetailId = null, ?float $bookingAmount = null, ?float $bruttoPrice = null, ?string $creationType = null, ?string $destination = null, ?bool $isDeposit = null, ?int $itemId = null, ?string $originalCurrency = null, ?float $originalRevenueInclVat = null, ?float $originalRevenueInsurance = null, ?float $originalRevenueVatFree = null, ?int $preparedRevenueId = null, ?string $receiptDate = null, ?string $receiptNo = null, ?float $revenueInclVat = null, ?float $revenueInsurance = null, ?float $revenueVatFree = null, ?bool $stornoAccounts = null, ?int $suppSettlemId = null, ?int $suppSettlemPos = null, ?float $supplierDiAmount = null, ?string $supplierId = null, ?float $supplierInvoiceAmount = null, ?string $travelType = null)
    {
        $this
            ->setAdviceDetailId($adviceDetailId)
            ->setBookingAmount($bookingAmount)
            ->setBruttoPrice($bruttoPrice)
            ->setCreationType($creationType)
            ->setDestination($destination)
            ->setIsDeposit($isDeposit)
            ->setItemId($itemId)
            ->setOriginalCurrency($originalCurrency)
            ->setOriginalRevenueInclVat($originalRevenueInclVat)
            ->setOriginalRevenueInsurance($originalRevenueInsurance)
            ->setOriginalRevenueVatFree($originalRevenueVatFree)
            ->setPreparedRevenueId($preparedRevenueId)
            ->setReceiptDate($receiptDate)
            ->setReceiptNo($receiptNo)
            ->setRevenueInclVat($revenueInclVat)
            ->setRevenueInsurance($revenueInsurance)
            ->setRevenueVatFree($revenueVatFree)
            ->setStornoAccounts($stornoAccounts)
            ->setSuppSettlemId($suppSettlemId)
            ->setSuppSettlemPos($suppSettlemPos)
            ->setSupplierDiAmount($supplierDiAmount)
            ->setSupplierId($supplierId)
            ->setSupplierInvoiceAmount($supplierInvoiceAmount)
            ->setTravelType($travelType);
    }
    /**
     * Get adviceDetailId value
     * @return int|null
     */
    public function getAdviceDetailId(): ?int
    {
        return $this->adviceDetailId;
    }
    /**
     * Set adviceDetailId value
     * @param int $adviceDetailId
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setAdviceDetailId(?int $adviceDetailId = null): self
    {
        // validation for constraint: int
        if (!is_null($adviceDetailId) && !(is_int($adviceDetailId) || ctype_digit($adviceDetailId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($adviceDetailId, true), gettype($adviceDetailId)), __LINE__);
        }
        $this->adviceDetailId = $adviceDetailId;
        
        return $this;
    }
    /**
     * Get bookingAmount value
     * @return float|null
     */
    public function getBookingAmount(): ?float
    {
        return $this->bookingAmount;
    }
    /**
     * Set bookingAmount value
     * @param float $bookingAmount
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setBookingAmount(?float $bookingAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($bookingAmount) && !(is_float($bookingAmount) || is_numeric($bookingAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bookingAmount, true), gettype($bookingAmount)), __LINE__);
        }
        $this->bookingAmount = $bookingAmount;
        
        return $this;
    }
    /**
     * Get bruttoPrice value
     * @return float|null
     */
    public function getBruttoPrice(): ?float
    {
        return $this->bruttoPrice;
    }
    /**
     * Set bruttoPrice value
     * @param float $bruttoPrice
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setBruttoPrice(?float $bruttoPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($bruttoPrice) && !(is_float($bruttoPrice) || is_numeric($bruttoPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($bruttoPrice, true), gettype($bruttoPrice)), __LINE__);
        }
        $this->bruttoPrice = $bruttoPrice;
        
        return $this;
    }
    /**
     * Get creationType value
     * @return string|null
     */
    public function getCreationType(): ?string
    {
        return $this->creationType;
    }
    /**
     * Set creationType value
     * @param string $creationType
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setCreationType(?string $creationType = null): self
    {
        // validation for constraint: string
        if (!is_null($creationType) && !is_string($creationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationType, true), gettype($creationType)), __LINE__);
        }
        $this->creationType = $creationType;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
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
     * Get originalRevenueInclVat value
     * @return float|null
     */
    public function getOriginalRevenueInclVat(): ?float
    {
        return $this->originalRevenueInclVat;
    }
    /**
     * Set originalRevenueInclVat value
     * @param float $originalRevenueInclVat
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setOriginalRevenueInclVat(?float $originalRevenueInclVat = null): self
    {
        // validation for constraint: float
        if (!is_null($originalRevenueInclVat) && !(is_float($originalRevenueInclVat) || is_numeric($originalRevenueInclVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalRevenueInclVat, true), gettype($originalRevenueInclVat)), __LINE__);
        }
        $this->originalRevenueInclVat = $originalRevenueInclVat;
        
        return $this;
    }
    /**
     * Get originalRevenueInsurance value
     * @return float|null
     */
    public function getOriginalRevenueInsurance(): ?float
    {
        return $this->originalRevenueInsurance;
    }
    /**
     * Set originalRevenueInsurance value
     * @param float $originalRevenueInsurance
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setOriginalRevenueInsurance(?float $originalRevenueInsurance = null): self
    {
        // validation for constraint: float
        if (!is_null($originalRevenueInsurance) && !(is_float($originalRevenueInsurance) || is_numeric($originalRevenueInsurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalRevenueInsurance, true), gettype($originalRevenueInsurance)), __LINE__);
        }
        $this->originalRevenueInsurance = $originalRevenueInsurance;
        
        return $this;
    }
    /**
     * Get originalRevenueVatFree value
     * @return float|null
     */
    public function getOriginalRevenueVatFree(): ?float
    {
        return $this->originalRevenueVatFree;
    }
    /**
     * Set originalRevenueVatFree value
     * @param float $originalRevenueVatFree
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setOriginalRevenueVatFree(?float $originalRevenueVatFree = null): self
    {
        // validation for constraint: float
        if (!is_null($originalRevenueVatFree) && !(is_float($originalRevenueVatFree) || is_numeric($originalRevenueVatFree))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalRevenueVatFree, true), gettype($originalRevenueVatFree)), __LINE__);
        }
        $this->originalRevenueVatFree = $originalRevenueVatFree;
        
        return $this;
    }
    /**
     * Get preparedRevenueId value
     * @return int|null
     */
    public function getPreparedRevenueId(): ?int
    {
        return $this->preparedRevenueId;
    }
    /**
     * Set preparedRevenueId value
     * @param int $preparedRevenueId
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setPreparedRevenueId(?int $preparedRevenueId = null): self
    {
        // validation for constraint: int
        if (!is_null($preparedRevenueId) && !(is_int($preparedRevenueId) || ctype_digit($preparedRevenueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($preparedRevenueId, true), gettype($preparedRevenueId)), __LINE__);
        }
        $this->preparedRevenueId = $preparedRevenueId;
        
        return $this;
    }
    /**
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
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
     * Get revenueInclVat value
     * @return float|null
     */
    public function getRevenueInclVat(): ?float
    {
        return $this->revenueInclVat;
    }
    /**
     * Set revenueInclVat value
     * @param float $revenueInclVat
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setRevenueInclVat(?float $revenueInclVat = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueInclVat) && !(is_float($revenueInclVat) || is_numeric($revenueInclVat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueInclVat, true), gettype($revenueInclVat)), __LINE__);
        }
        $this->revenueInclVat = $revenueInclVat;
        
        return $this;
    }
    /**
     * Get revenueInsurance value
     * @return float|null
     */
    public function getRevenueInsurance(): ?float
    {
        return $this->revenueInsurance;
    }
    /**
     * Set revenueInsurance value
     * @param float $revenueInsurance
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setRevenueInsurance(?float $revenueInsurance = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueInsurance) && !(is_float($revenueInsurance) || is_numeric($revenueInsurance))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueInsurance, true), gettype($revenueInsurance)), __LINE__);
        }
        $this->revenueInsurance = $revenueInsurance;
        
        return $this;
    }
    /**
     * Get revenueVatFree value
     * @return float|null
     */
    public function getRevenueVatFree(): ?float
    {
        return $this->revenueVatFree;
    }
    /**
     * Set revenueVatFree value
     * @param float $revenueVatFree
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setRevenueVatFree(?float $revenueVatFree = null): self
    {
        // validation for constraint: float
        if (!is_null($revenueVatFree) && !(is_float($revenueVatFree) || is_numeric($revenueVatFree))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenueVatFree, true), gettype($revenueVatFree)), __LINE__);
        }
        $this->revenueVatFree = $revenueVatFree;
        
        return $this;
    }
    /**
     * Get stornoAccounts value
     * @return bool|null
     */
    public function getStornoAccounts(): ?bool
    {
        return $this->stornoAccounts;
    }
    /**
     * Set stornoAccounts value
     * @param bool $stornoAccounts
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setStornoAccounts(?bool $stornoAccounts = null): self
    {
        // validation for constraint: boolean
        if (!is_null($stornoAccounts) && !is_bool($stornoAccounts)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($stornoAccounts, true), gettype($stornoAccounts)), __LINE__);
        }
        $this->stornoAccounts = $stornoAccounts;
        
        return $this;
    }
    /**
     * Get suppSettlemId value
     * @return int|null
     */
    public function getSuppSettlemId(): ?int
    {
        return $this->suppSettlemId;
    }
    /**
     * Set suppSettlemId value
     * @param int $suppSettlemId
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setSuppSettlemId(?int $suppSettlemId = null): self
    {
        // validation for constraint: int
        if (!is_null($suppSettlemId) && !(is_int($suppSettlemId) || ctype_digit($suppSettlemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($suppSettlemId, true), gettype($suppSettlemId)), __LINE__);
        }
        $this->suppSettlemId = $suppSettlemId;
        
        return $this;
    }
    /**
     * Get suppSettlemPos value
     * @return int|null
     */
    public function getSuppSettlemPos(): ?int
    {
        return $this->suppSettlemPos;
    }
    /**
     * Set suppSettlemPos value
     * @param int $suppSettlemPos
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setSuppSettlemPos(?int $suppSettlemPos = null): self
    {
        // validation for constraint: int
        if (!is_null($suppSettlemPos) && !(is_int($suppSettlemPos) || ctype_digit($suppSettlemPos))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($suppSettlemPos, true), gettype($suppSettlemPos)), __LINE__);
        }
        $this->suppSettlemPos = $suppSettlemPos;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
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
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get supplierInvoiceAmount value
     * @return float|null
     */
    public function getSupplierInvoiceAmount(): ?float
    {
        return $this->supplierInvoiceAmount;
    }
    /**
     * Set supplierInvoiceAmount value
     * @param float $supplierInvoiceAmount
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setSupplierInvoiceAmount(?float $supplierInvoiceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($supplierInvoiceAmount) && !(is_float($supplierInvoiceAmount) || is_numeric($supplierInvoiceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($supplierInvoiceAmount, true), gettype($supplierInvoiceAmount)), __LINE__);
        }
        $this->supplierInvoiceAmount = $supplierInvoiceAmount;
        
        return $this;
    }
    /**
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Order\StructType\PreparedRevenueBookingDTO
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
}
