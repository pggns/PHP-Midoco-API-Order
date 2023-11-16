<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VoucherInfo StructType
 * @subpackage Structs
 */
class VoucherInfo extends AbstractStructBase
{
    /**
     * The voucherId
     * @var string|null
     */
    protected ?string $voucherId = null;
    /**
     * The securityCode
     * @var string|null
     */
    protected ?string $securityCode = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The expiryDate
     * @var string|null
     */
    protected ?string $expiryDate = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The voucherNo
     * @var string|null
     */
    protected ?string $voucherNo = null;
    /**
     * The voucherType
     * @var string|null
     */
    protected ?string $voucherType = null;
    /**
     * The validUntil
     * @var string|null
     */
    protected ?string $validUntil = null;
    /**
     * The redeemed
     * @var bool|null
     */
    protected ?bool $redeemed = null;
    /**
     * The originalValue
     * @var float|null
     */
    protected ?float $originalValue = null;
    /**
     * The value
     * @var float|null
     */
    protected ?float $value = null;
    /**
     * Constructor method for VoucherInfo
     * @uses VoucherInfo::setVoucherId()
     * @uses VoucherInfo::setSecurityCode()
     * @uses VoucherInfo::setSupplierId()
     * @uses VoucherInfo::setExpiryDate()
     * @uses VoucherInfo::setOrderId()
     * @uses VoucherInfo::setOrderNo()
     * @uses VoucherInfo::setItemId()
     * @uses VoucherInfo::setVoucherNo()
     * @uses VoucherInfo::setVoucherType()
     * @uses VoucherInfo::setValidUntil()
     * @uses VoucherInfo::setRedeemed()
     * @uses VoucherInfo::setOriginalValue()
     * @uses VoucherInfo::setValue()
     * @param string $voucherId
     * @param string $securityCode
     * @param string $supplierId
     * @param string $expiryDate
     * @param int $orderId
     * @param int $orderNo
     * @param int $itemId
     * @param string $voucherNo
     * @param string $voucherType
     * @param string $validUntil
     * @param bool $redeemed
     * @param float $originalValue
     * @param float $value
     */
    public function __construct(?string $voucherId = null, ?string $securityCode = null, ?string $supplierId = null, ?string $expiryDate = null, ?int $orderId = null, ?int $orderNo = null, ?int $itemId = null, ?string $voucherNo = null, ?string $voucherType = null, ?string $validUntil = null, ?bool $redeemed = null, ?float $originalValue = null, ?float $value = null)
    {
        $this
            ->setVoucherId($voucherId)
            ->setSecurityCode($securityCode)
            ->setSupplierId($supplierId)
            ->setExpiryDate($expiryDate)
            ->setOrderId($orderId)
            ->setOrderNo($orderNo)
            ->setItemId($itemId)
            ->setVoucherNo($voucherNo)
            ->setVoucherType($voucherType)
            ->setValidUntil($validUntil)
            ->setRedeemed($redeemed)
            ->setOriginalValue($originalValue)
            ->setValue($value);
    }
    /**
     * Get voucherId value
     * @return string|null
     */
    public function getVoucherId(): ?string
    {
        return $this->voucherId;
    }
    /**
     * Set voucherId value
     * @param string $voucherId
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo
     */
    public function setVoucherId(?string $voucherId = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherId) && !is_string($voucherId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherId, true), gettype($voucherId)), __LINE__);
        }
        $this->voucherId = $voucherId;
        
        return $this;
    }
    /**
     * Get securityCode value
     * @return string|null
     */
    public function getSecurityCode(): ?string
    {
        return $this->securityCode;
    }
    /**
     * Set securityCode value
     * @param string $securityCode
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo
     */
    public function setSecurityCode(?string $securityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($securityCode) && !is_string($securityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($securityCode, true), gettype($securityCode)), __LINE__);
        }
        $this->securityCode = $securityCode;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo
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
     * Get expiryDate value
     * @return string|null
     */
    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }
    /**
     * Set expiryDate value
     * @param string $expiryDate
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo
     */
    public function setExpiryDate(?string $expiryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryDate, true), gettype($expiryDate)), __LINE__);
        }
        $this->expiryDate = $expiryDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo
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
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo
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
     * Get voucherNo value
     * @return string|null
     */
    public function getVoucherNo(): ?string
    {
        return $this->voucherNo;
    }
    /**
     * Set voucherNo value
     * @param string $voucherNo
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo
     */
    public function setVoucherNo(?string $voucherNo = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherNo) && !is_string($voucherNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherNo, true), gettype($voucherNo)), __LINE__);
        }
        $this->voucherNo = $voucherNo;
        
        return $this;
    }
    /**
     * Get voucherType value
     * @return string|null
     */
    public function getVoucherType(): ?string
    {
        return $this->voucherType;
    }
    /**
     * Set voucherType value
     * @param string $voucherType
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo
     */
    public function setVoucherType(?string $voucherType = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherType) && !is_string($voucherType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherType, true), gettype($voucherType)), __LINE__);
        }
        $this->voucherType = $voucherType;
        
        return $this;
    }
    /**
     * Get validUntil value
     * @return string|null
     */
    public function getValidUntil(): ?string
    {
        return $this->validUntil;
    }
    /**
     * Set validUntil value
     * @param string $validUntil
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo
     */
    public function setValidUntil(?string $validUntil = null): self
    {
        // validation for constraint: string
        if (!is_null($validUntil) && !is_string($validUntil)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validUntil, true), gettype($validUntil)), __LINE__);
        }
        $this->validUntil = $validUntil;
        
        return $this;
    }
    /**
     * Get redeemed value
     * @return bool|null
     */
    public function getRedeemed(): ?bool
    {
        return $this->redeemed;
    }
    /**
     * Set redeemed value
     * @param bool $redeemed
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo
     */
    public function setRedeemed(?bool $redeemed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($redeemed) && !is_bool($redeemed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($redeemed, true), gettype($redeemed)), __LINE__);
        }
        $this->redeemed = $redeemed;
        
        return $this;
    }
    /**
     * Get originalValue value
     * @return float|null
     */
    public function getOriginalValue(): ?float
    {
        return $this->originalValue;
    }
    /**
     * Set originalValue value
     * @param float $originalValue
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo
     */
    public function setOriginalValue(?float $originalValue = null): self
    {
        // validation for constraint: float
        if (!is_null($originalValue) && !(is_float($originalValue) || is_numeric($originalValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($originalValue, true), gettype($originalValue)), __LINE__);
        }
        $this->originalValue = $originalValue;
        
        return $this;
    }
    /**
     * Get value value
     * @return float|null
     */
    public function getValue(): ?float
    {
        return $this->value;
    }
    /**
     * Set value value
     * @param float $value
     * @return \Pggns\MidocoApi\Order\StructType\VoucherInfo
     */
    public function setValue(?float $value = null): self
    {
        // validation for constraint: float
        if (!is_null($value) && !(is_float($value) || is_numeric($value))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->value = $value;
        
        return $this;
    }
}
