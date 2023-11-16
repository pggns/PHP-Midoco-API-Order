<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReceiptRecordLineitemDTO StructType
 * @subpackage Structs
 */
class ReceiptRecordLineitemDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The linkedSupplier
     * @var string|null
     */
    protected ?string $linkedSupplier = null;
    /**
     * The positionNo
     * @var int|null
     */
    protected ?int $positionNo = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The receiptRecordId
     * @var int|null
     */
    protected ?int $receiptRecordId = null;
    /**
     * The reference
     * @var string|null
     */
    protected ?string $reference = null;
    /**
     * The saleType
     * @var string|null
     */
    protected ?string $saleType = null;
    /**
     * The vat2Amount
     * @var float|null
     */
    protected ?float $vat2Amount = null;
    /**
     * The vat2Base
     * @var float|null
     */
    protected ?float $vat2Base = null;
    /**
     * The vat2Code
     * @var string|null
     */
    protected ?string $vat2Code = null;
    /**
     * The vat2Percent
     * @var float|null
     */
    protected ?float $vat2Percent = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The vatBase
     * @var float|null
     */
    protected ?float $vatBase = null;
    /**
     * The vatCode
     * @var string|null
     */
    protected ?string $vatCode = null;
    /**
     * The vatPercent
     * @var float|null
     */
    protected ?float $vatPercent = null;
    /**
     * The voucherNo
     * @var string|null
     */
    protected ?string $voucherNo = null;
    /**
     * Constructor method for ReceiptRecordLineitemDTO
     * @uses ReceiptRecordLineitemDTO::setDescription()
     * @uses ReceiptRecordLineitemDTO::setLinkedSupplier()
     * @uses ReceiptRecordLineitemDTO::setPositionNo()
     * @uses ReceiptRecordLineitemDTO::setPrice()
     * @uses ReceiptRecordLineitemDTO::setReceiptRecordId()
     * @uses ReceiptRecordLineitemDTO::setReference()
     * @uses ReceiptRecordLineitemDTO::setSaleType()
     * @uses ReceiptRecordLineitemDTO::setVat2Amount()
     * @uses ReceiptRecordLineitemDTO::setVat2Base()
     * @uses ReceiptRecordLineitemDTO::setVat2Code()
     * @uses ReceiptRecordLineitemDTO::setVat2Percent()
     * @uses ReceiptRecordLineitemDTO::setVatAmount()
     * @uses ReceiptRecordLineitemDTO::setVatBase()
     * @uses ReceiptRecordLineitemDTO::setVatCode()
     * @uses ReceiptRecordLineitemDTO::setVatPercent()
     * @uses ReceiptRecordLineitemDTO::setVoucherNo()
     * @param string $description
     * @param string $linkedSupplier
     * @param int $positionNo
     * @param float $price
     * @param int $receiptRecordId
     * @param string $reference
     * @param string $saleType
     * @param float $vat2Amount
     * @param float $vat2Base
     * @param string $vat2Code
     * @param float $vat2Percent
     * @param float $vatAmount
     * @param float $vatBase
     * @param string $vatCode
     * @param float $vatPercent
     * @param string $voucherNo
     */
    public function __construct(?string $description = null, ?string $linkedSupplier = null, ?int $positionNo = null, ?float $price = null, ?int $receiptRecordId = null, ?string $reference = null, ?string $saleType = null, ?float $vat2Amount = null, ?float $vat2Base = null, ?string $vat2Code = null, ?float $vat2Percent = null, ?float $vatAmount = null, ?float $vatBase = null, ?string $vatCode = null, ?float $vatPercent = null, ?string $voucherNo = null)
    {
        $this
            ->setDescription($description)
            ->setLinkedSupplier($linkedSupplier)
            ->setPositionNo($positionNo)
            ->setPrice($price)
            ->setReceiptRecordId($receiptRecordId)
            ->setReference($reference)
            ->setSaleType($saleType)
            ->setVat2Amount($vat2Amount)
            ->setVat2Base($vat2Base)
            ->setVat2Code($vat2Code)
            ->setVat2Percent($vat2Percent)
            ->setVatAmount($vatAmount)
            ->setVatBase($vatBase)
            ->setVatCode($vatCode)
            ->setVatPercent($vatPercent)
            ->setVoucherNo($voucherNo);
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
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
     * Get linkedSupplier value
     * @return string|null
     */
    public function getLinkedSupplier(): ?string
    {
        return $this->linkedSupplier;
    }
    /**
     * Set linkedSupplier value
     * @param string $linkedSupplier
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
     */
    public function setLinkedSupplier(?string $linkedSupplier = null): self
    {
        // validation for constraint: string
        if (!is_null($linkedSupplier) && !is_string($linkedSupplier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkedSupplier, true), gettype($linkedSupplier)), __LINE__);
        }
        $this->linkedSupplier = $linkedSupplier;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
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
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get receiptRecordId value
     * @return int|null
     */
    public function getReceiptRecordId(): ?int
    {
        return $this->receiptRecordId;
    }
    /**
     * Set receiptRecordId value
     * @param int $receiptRecordId
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
     */
    public function setReceiptRecordId(?int $receiptRecordId = null): self
    {
        // validation for constraint: int
        if (!is_null($receiptRecordId) && !(is_int($receiptRecordId) || ctype_digit($receiptRecordId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiptRecordId, true), gettype($receiptRecordId)), __LINE__);
        }
        $this->receiptRecordId = $receiptRecordId;
        
        return $this;
    }
    /**
     * Get reference value
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }
    /**
     * Set reference value
     * @param string $reference
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
     */
    public function setReference(?string $reference = null): self
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        $this->reference = $reference;
        
        return $this;
    }
    /**
     * Get saleType value
     * @return string|null
     */
    public function getSaleType(): ?string
    {
        return $this->saleType;
    }
    /**
     * Set saleType value
     * @param string $saleType
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
     */
    public function setSaleType(?string $saleType = null): self
    {
        // validation for constraint: string
        if (!is_null($saleType) && !is_string($saleType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleType, true), gettype($saleType)), __LINE__);
        }
        $this->saleType = $saleType;
        
        return $this;
    }
    /**
     * Get vat2Amount value
     * @return float|null
     */
    public function getVat2Amount(): ?float
    {
        return $this->vat2Amount;
    }
    /**
     * Set vat2Amount value
     * @param float $vat2Amount
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
     */
    public function setVat2Amount(?float $vat2Amount = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2Amount) && !(is_float($vat2Amount) || is_numeric($vat2Amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2Amount, true), gettype($vat2Amount)), __LINE__);
        }
        $this->vat2Amount = $vat2Amount;
        
        return $this;
    }
    /**
     * Get vat2Base value
     * @return float|null
     */
    public function getVat2Base(): ?float
    {
        return $this->vat2Base;
    }
    /**
     * Set vat2Base value
     * @param float $vat2Base
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
     */
    public function setVat2Base(?float $vat2Base = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2Base) && !(is_float($vat2Base) || is_numeric($vat2Base))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2Base, true), gettype($vat2Base)), __LINE__);
        }
        $this->vat2Base = $vat2Base;
        
        return $this;
    }
    /**
     * Get vat2Code value
     * @return string|null
     */
    public function getVat2Code(): ?string
    {
        return $this->vat2Code;
    }
    /**
     * Set vat2Code value
     * @param string $vat2Code
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
     */
    public function setVat2Code(?string $vat2Code = null): self
    {
        // validation for constraint: string
        if (!is_null($vat2Code) && !is_string($vat2Code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vat2Code, true), gettype($vat2Code)), __LINE__);
        }
        $this->vat2Code = $vat2Code;
        
        return $this;
    }
    /**
     * Get vat2Percent value
     * @return float|null
     */
    public function getVat2Percent(): ?float
    {
        return $this->vat2Percent;
    }
    /**
     * Set vat2Percent value
     * @param float $vat2Percent
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
     */
    public function setVat2Percent(?float $vat2Percent = null): self
    {
        // validation for constraint: float
        if (!is_null($vat2Percent) && !(is_float($vat2Percent) || is_numeric($vat2Percent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vat2Percent, true), gettype($vat2Percent)), __LINE__);
        }
        $this->vat2Percent = $vat2Percent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
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
     * Get vatBase value
     * @return float|null
     */
    public function getVatBase(): ?float
    {
        return $this->vatBase;
    }
    /**
     * Set vatBase value
     * @param float $vatBase
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
     */
    public function setVatBase(?float $vatBase = null): self
    {
        // validation for constraint: float
        if (!is_null($vatBase) && !(is_float($vatBase) || is_numeric($vatBase))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatBase, true), gettype($vatBase)), __LINE__);
        }
        $this->vatBase = $vatBase;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\ReceiptRecordLineitemDTO
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
}
