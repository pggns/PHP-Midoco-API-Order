<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoInvoiceConditionDTO StructType
 * @subpackage Structs
 */
class AutoInvoiceConditionDTO extends AbstractStructBase
{
    /**
     * The conditionId
     * @var int|null
     */
    protected ?int $conditionId = null;
    /**
     * The customerAttr
     * @var string|null
     */
    protected ?string $customerAttr = null;
    /**
     * The customerType
     * @var string|null
     */
    protected ?string $customerType = null;
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The isManualAllowed
     * @var bool|null
     */
    protected ?bool $isManualAllowed = null;
    /**
     * The itemPurchaseCurrencyCode
     * @var string|null
     */
    protected ?string $itemPurchaseCurrencyCode = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The settlementType
     * @var string|null
     */
    protected ?string $settlementType = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The supplierSettlementCheckStatus
     * @var string|null
     */
    protected ?string $supplierSettlementCheckStatus = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The validFrom
     * @var string|null
     */
    protected ?string $validFrom = null;
    /**
     * The validTo
     * @var string|null
     */
    protected ?string $validTo = null;
    /**
     * Constructor method for AutoInvoiceConditionDTO
     * @uses AutoInvoiceConditionDTO::setConditionId()
     * @uses AutoInvoiceConditionDTO::setCustomerAttr()
     * @uses AutoInvoiceConditionDTO::setCustomerType()
     * @uses AutoInvoiceConditionDTO::setDocumentType()
     * @uses AutoInvoiceConditionDTO::setIsManualAllowed()
     * @uses AutoInvoiceConditionDTO::setItemPurchaseCurrencyCode()
     * @uses AutoInvoiceConditionDTO::setItemType()
     * @uses AutoInvoiceConditionDTO::setSettlementType()
     * @uses AutoInvoiceConditionDTO::setSupplierId()
     * @uses AutoInvoiceConditionDTO::setSupplierSettlementCheckStatus()
     * @uses AutoInvoiceConditionDTO::setUnitName()
     * @uses AutoInvoiceConditionDTO::setValidFrom()
     * @uses AutoInvoiceConditionDTO::setValidTo()
     * @param int $conditionId
     * @param string $customerAttr
     * @param string $customerType
     * @param string $documentType
     * @param bool $isManualAllowed
     * @param string $itemPurchaseCurrencyCode
     * @param string $itemType
     * @param string $settlementType
     * @param string $supplierId
     * @param string $supplierSettlementCheckStatus
     * @param string $unitName
     * @param string $validFrom
     * @param string $validTo
     */
    public function __construct(?int $conditionId = null, ?string $customerAttr = null, ?string $customerType = null, ?string $documentType = null, ?bool $isManualAllowed = null, ?string $itemPurchaseCurrencyCode = null, ?string $itemType = null, ?string $settlementType = null, ?string $supplierId = null, ?string $supplierSettlementCheckStatus = null, ?string $unitName = null, ?string $validFrom = null, ?string $validTo = null)
    {
        $this
            ->setConditionId($conditionId)
            ->setCustomerAttr($customerAttr)
            ->setCustomerType($customerType)
            ->setDocumentType($documentType)
            ->setIsManualAllowed($isManualAllowed)
            ->setItemPurchaseCurrencyCode($itemPurchaseCurrencyCode)
            ->setItemType($itemType)
            ->setSettlementType($settlementType)
            ->setSupplierId($supplierId)
            ->setSupplierSettlementCheckStatus($supplierSettlementCheckStatus)
            ->setUnitName($unitName)
            ->setValidFrom($validFrom)
            ->setValidTo($validTo);
    }
    /**
     * Get conditionId value
     * @return int|null
     */
    public function getConditionId(): ?int
    {
        return $this->conditionId;
    }
    /**
     * Set conditionId value
     * @param int $conditionId
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO
     */
    public function setConditionId(?int $conditionId = null): self
    {
        // validation for constraint: int
        if (!is_null($conditionId) && !(is_int($conditionId) || ctype_digit($conditionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($conditionId, true), gettype($conditionId)), __LINE__);
        }
        $this->conditionId = $conditionId;
        
        return $this;
    }
    /**
     * Get customerAttr value
     * @return string|null
     */
    public function getCustomerAttr(): ?string
    {
        return $this->customerAttr;
    }
    /**
     * Set customerAttr value
     * @param string $customerAttr
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO
     */
    public function setCustomerAttr(?string $customerAttr = null): self
    {
        // validation for constraint: string
        if (!is_null($customerAttr) && !is_string($customerAttr)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAttr, true), gettype($customerAttr)), __LINE__);
        }
        $this->customerAttr = $customerAttr;
        
        return $this;
    }
    /**
     * Get customerType value
     * @return string|null
     */
    public function getCustomerType(): ?string
    {
        return $this->customerType;
    }
    /**
     * Set customerType value
     * @param string $customerType
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO
     */
    public function setCustomerType(?string $customerType = null): self
    {
        // validation for constraint: string
        if (!is_null($customerType) && !is_string($customerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerType, true), gettype($customerType)), __LINE__);
        }
        $this->customerType = $customerType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO
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
     * Get isManualAllowed value
     * @return bool|null
     */
    public function getIsManualAllowed(): ?bool
    {
        return $this->isManualAllowed;
    }
    /**
     * Set isManualAllowed value
     * @param bool $isManualAllowed
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO
     */
    public function setIsManualAllowed(?bool $isManualAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManualAllowed) && !is_bool($isManualAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManualAllowed, true), gettype($isManualAllowed)), __LINE__);
        }
        $this->isManualAllowed = $isManualAllowed;
        
        return $this;
    }
    /**
     * Get itemPurchaseCurrencyCode value
     * @return string|null
     */
    public function getItemPurchaseCurrencyCode(): ?string
    {
        return $this->itemPurchaseCurrencyCode;
    }
    /**
     * Set itemPurchaseCurrencyCode value
     * @param string $itemPurchaseCurrencyCode
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO
     */
    public function setItemPurchaseCurrencyCode(?string $itemPurchaseCurrencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($itemPurchaseCurrencyCode) && !is_string($itemPurchaseCurrencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemPurchaseCurrencyCode, true), gettype($itemPurchaseCurrencyCode)), __LINE__);
        }
        $this->itemPurchaseCurrencyCode = $itemPurchaseCurrencyCode;
        
        return $this;
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO
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
     * Get supplierSettlementCheckStatus value
     * @return string|null
     */
    public function getSupplierSettlementCheckStatus(): ?string
    {
        return $this->supplierSettlementCheckStatus;
    }
    /**
     * Set supplierSettlementCheckStatus value
     * @param string $supplierSettlementCheckStatus
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO
     */
    public function setSupplierSettlementCheckStatus(?string $supplierSettlementCheckStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierSettlementCheckStatus) && !is_string($supplierSettlementCheckStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierSettlementCheckStatus, true), gettype($supplierSettlementCheckStatus)), __LINE__);
        }
        $this->supplierSettlementCheckStatus = $supplierSettlementCheckStatus;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO
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
    /**
     * Get validTo value
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
    /**
     * Set validTo value
     * @param string $validTo
     * @return \Pggns\MidocoApi\Order\StructType\AutoInvoiceConditionDTO
     */
    public function setValidTo(?string $validTo = null): self
    {
        // validation for constraint: string
        if (!is_null($validTo) && !is_string($validTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validTo, true), gettype($validTo)), __LINE__);
        }
        $this->validTo = $validTo;
        
        return $this;
    }
}
