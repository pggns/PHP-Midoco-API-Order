<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDtazvTransactionInfo StructType
 * @subpackage Structs
 */
class MidocoDtazvTransactionInfo extends AbstractStructBase
{
    /**
     * The nationalBankNotification
     * @var bool|null
     */
    protected ?bool $nationalBankNotification = null;
    /**
     * The firmCode
     * @var string|null
     */
    protected ?string $firmCode = null;
    /**
     * The phone
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * The nationalBankKey
     * @var string|null
     */
    protected ?string $nationalBankKey = null;
    /**
     * The bankNotificationCode
     * @var string|null
     */
    protected ?string $bankNotificationCode = null;
    /**
     * The bankNotificationInvoiceType
     * @var string|null
     */
    protected ?string $bankNotificationInvoiceType = null;
    /**
     * The bankNotificationPurposeText
     * @var string|null
     */
    protected ?string $bankNotificationPurposeText = null;
    /**
     * The bankTransferType
     * @var string|null
     */
    protected ?string $bankTransferType = null;
    /**
     * The bankTransferFees
     * @var string|null
     */
    protected ?string $bankTransferFees = null;
    /**
     * The bankTransferInstrKey1
     * @var string|null
     */
    protected ?string $bankTransferInstrKey1 = null;
    /**
     * The bankTransferInstrKey2
     * @var string|null
     */
    protected ?string $bankTransferInstrKey2 = null;
    /**
     * The bankTransferInstrKey3
     * @var string|null
     */
    protected ?string $bankTransferInstrKey3 = null;
    /**
     * The bankTransferInstrKey4
     * @var string|null
     */
    protected ?string $bankTransferInstrKey4 = null;
    /**
     * Constructor method for MidocoDtazvTransactionInfo
     * @uses MidocoDtazvTransactionInfo::setNationalBankNotification()
     * @uses MidocoDtazvTransactionInfo::setFirmCode()
     * @uses MidocoDtazvTransactionInfo::setPhone()
     * @uses MidocoDtazvTransactionInfo::setNationalBankKey()
     * @uses MidocoDtazvTransactionInfo::setBankNotificationCode()
     * @uses MidocoDtazvTransactionInfo::setBankNotificationInvoiceType()
     * @uses MidocoDtazvTransactionInfo::setBankNotificationPurposeText()
     * @uses MidocoDtazvTransactionInfo::setBankTransferType()
     * @uses MidocoDtazvTransactionInfo::setBankTransferFees()
     * @uses MidocoDtazvTransactionInfo::setBankTransferInstrKey1()
     * @uses MidocoDtazvTransactionInfo::setBankTransferInstrKey2()
     * @uses MidocoDtazvTransactionInfo::setBankTransferInstrKey3()
     * @uses MidocoDtazvTransactionInfo::setBankTransferInstrKey4()
     * @param bool $nationalBankNotification
     * @param string $firmCode
     * @param string $phone
     * @param string $nationalBankKey
     * @param string $bankNotificationCode
     * @param string $bankNotificationInvoiceType
     * @param string $bankNotificationPurposeText
     * @param string $bankTransferType
     * @param string $bankTransferFees
     * @param string $bankTransferInstrKey1
     * @param string $bankTransferInstrKey2
     * @param string $bankTransferInstrKey3
     * @param string $bankTransferInstrKey4
     */
    public function __construct(?bool $nationalBankNotification = null, ?string $firmCode = null, ?string $phone = null, ?string $nationalBankKey = null, ?string $bankNotificationCode = null, ?string $bankNotificationInvoiceType = null, ?string $bankNotificationPurposeText = null, ?string $bankTransferType = null, ?string $bankTransferFees = null, ?string $bankTransferInstrKey1 = null, ?string $bankTransferInstrKey2 = null, ?string $bankTransferInstrKey3 = null, ?string $bankTransferInstrKey4 = null)
    {
        $this
            ->setNationalBankNotification($nationalBankNotification)
            ->setFirmCode($firmCode)
            ->setPhone($phone)
            ->setNationalBankKey($nationalBankKey)
            ->setBankNotificationCode($bankNotificationCode)
            ->setBankNotificationInvoiceType($bankNotificationInvoiceType)
            ->setBankNotificationPurposeText($bankNotificationPurposeText)
            ->setBankTransferType($bankTransferType)
            ->setBankTransferFees($bankTransferFees)
            ->setBankTransferInstrKey1($bankTransferInstrKey1)
            ->setBankTransferInstrKey2($bankTransferInstrKey2)
            ->setBankTransferInstrKey3($bankTransferInstrKey3)
            ->setBankTransferInstrKey4($bankTransferInstrKey4);
    }
    /**
     * Get nationalBankNotification value
     * @return bool|null
     */
    public function getNationalBankNotification(): ?bool
    {
        return $this->nationalBankNotification;
    }
    /**
     * Set nationalBankNotification value
     * @param bool $nationalBankNotification
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
     */
    public function setNationalBankNotification(?bool $nationalBankNotification = null): self
    {
        // validation for constraint: boolean
        if (!is_null($nationalBankNotification) && !is_bool($nationalBankNotification)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($nationalBankNotification, true), gettype($nationalBankNotification)), __LINE__);
        }
        $this->nationalBankNotification = $nationalBankNotification;
        
        return $this;
    }
    /**
     * Get firmCode value
     * @return string|null
     */
    public function getFirmCode(): ?string
    {
        return $this->firmCode;
    }
    /**
     * Set firmCode value
     * @param string $firmCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
     */
    public function setFirmCode(?string $firmCode = null): self
    {
        // validation for constraint: string
        if (!is_null($firmCode) && !is_string($firmCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firmCode, true), gettype($firmCode)), __LINE__);
        }
        $this->firmCode = $firmCode;
        
        return $this;
    }
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        
        return $this;
    }
    /**
     * Get nationalBankKey value
     * @return string|null
     */
    public function getNationalBankKey(): ?string
    {
        return $this->nationalBankKey;
    }
    /**
     * Set nationalBankKey value
     * @param string $nationalBankKey
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
     */
    public function setNationalBankKey(?string $nationalBankKey = null): self
    {
        // validation for constraint: string
        if (!is_null($nationalBankKey) && !is_string($nationalBankKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationalBankKey, true), gettype($nationalBankKey)), __LINE__);
        }
        $this->nationalBankKey = $nationalBankKey;
        
        return $this;
    }
    /**
     * Get bankNotificationCode value
     * @return string|null
     */
    public function getBankNotificationCode(): ?string
    {
        return $this->bankNotificationCode;
    }
    /**
     * Set bankNotificationCode value
     * @param string $bankNotificationCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
     */
    public function setBankNotificationCode(?string $bankNotificationCode = null): self
    {
        // validation for constraint: string
        if (!is_null($bankNotificationCode) && !is_string($bankNotificationCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankNotificationCode, true), gettype($bankNotificationCode)), __LINE__);
        }
        $this->bankNotificationCode = $bankNotificationCode;
        
        return $this;
    }
    /**
     * Get bankNotificationInvoiceType value
     * @return string|null
     */
    public function getBankNotificationInvoiceType(): ?string
    {
        return $this->bankNotificationInvoiceType;
    }
    /**
     * Set bankNotificationInvoiceType value
     * @param string $bankNotificationInvoiceType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
     */
    public function setBankNotificationInvoiceType(?string $bankNotificationInvoiceType = null): self
    {
        // validation for constraint: string
        if (!is_null($bankNotificationInvoiceType) && !is_string($bankNotificationInvoiceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankNotificationInvoiceType, true), gettype($bankNotificationInvoiceType)), __LINE__);
        }
        $this->bankNotificationInvoiceType = $bankNotificationInvoiceType;
        
        return $this;
    }
    /**
     * Get bankNotificationPurposeText value
     * @return string|null
     */
    public function getBankNotificationPurposeText(): ?string
    {
        return $this->bankNotificationPurposeText;
    }
    /**
     * Set bankNotificationPurposeText value
     * @param string $bankNotificationPurposeText
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
     */
    public function setBankNotificationPurposeText(?string $bankNotificationPurposeText = null): self
    {
        // validation for constraint: string
        if (!is_null($bankNotificationPurposeText) && !is_string($bankNotificationPurposeText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankNotificationPurposeText, true), gettype($bankNotificationPurposeText)), __LINE__);
        }
        $this->bankNotificationPurposeText = $bankNotificationPurposeText;
        
        return $this;
    }
    /**
     * Get bankTransferType value
     * @return string|null
     */
    public function getBankTransferType(): ?string
    {
        return $this->bankTransferType;
    }
    /**
     * Set bankTransferType value
     * @param string $bankTransferType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
     */
    public function setBankTransferType(?string $bankTransferType = null): self
    {
        // validation for constraint: string
        if (!is_null($bankTransferType) && !is_string($bankTransferType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankTransferType, true), gettype($bankTransferType)), __LINE__);
        }
        $this->bankTransferType = $bankTransferType;
        
        return $this;
    }
    /**
     * Get bankTransferFees value
     * @return string|null
     */
    public function getBankTransferFees(): ?string
    {
        return $this->bankTransferFees;
    }
    /**
     * Set bankTransferFees value
     * @param string $bankTransferFees
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
     */
    public function setBankTransferFees(?string $bankTransferFees = null): self
    {
        // validation for constraint: string
        if (!is_null($bankTransferFees) && !is_string($bankTransferFees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankTransferFees, true), gettype($bankTransferFees)), __LINE__);
        }
        $this->bankTransferFees = $bankTransferFees;
        
        return $this;
    }
    /**
     * Get bankTransferInstrKey1 value
     * @return string|null
     */
    public function getBankTransferInstrKey1(): ?string
    {
        return $this->bankTransferInstrKey1;
    }
    /**
     * Set bankTransferInstrKey1 value
     * @param string $bankTransferInstrKey1
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
     */
    public function setBankTransferInstrKey1(?string $bankTransferInstrKey1 = null): self
    {
        // validation for constraint: string
        if (!is_null($bankTransferInstrKey1) && !is_string($bankTransferInstrKey1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankTransferInstrKey1, true), gettype($bankTransferInstrKey1)), __LINE__);
        }
        $this->bankTransferInstrKey1 = $bankTransferInstrKey1;
        
        return $this;
    }
    /**
     * Get bankTransferInstrKey2 value
     * @return string|null
     */
    public function getBankTransferInstrKey2(): ?string
    {
        return $this->bankTransferInstrKey2;
    }
    /**
     * Set bankTransferInstrKey2 value
     * @param string $bankTransferInstrKey2
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
     */
    public function setBankTransferInstrKey2(?string $bankTransferInstrKey2 = null): self
    {
        // validation for constraint: string
        if (!is_null($bankTransferInstrKey2) && !is_string($bankTransferInstrKey2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankTransferInstrKey2, true), gettype($bankTransferInstrKey2)), __LINE__);
        }
        $this->bankTransferInstrKey2 = $bankTransferInstrKey2;
        
        return $this;
    }
    /**
     * Get bankTransferInstrKey3 value
     * @return string|null
     */
    public function getBankTransferInstrKey3(): ?string
    {
        return $this->bankTransferInstrKey3;
    }
    /**
     * Set bankTransferInstrKey3 value
     * @param string $bankTransferInstrKey3
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
     */
    public function setBankTransferInstrKey3(?string $bankTransferInstrKey3 = null): self
    {
        // validation for constraint: string
        if (!is_null($bankTransferInstrKey3) && !is_string($bankTransferInstrKey3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankTransferInstrKey3, true), gettype($bankTransferInstrKey3)), __LINE__);
        }
        $this->bankTransferInstrKey3 = $bankTransferInstrKey3;
        
        return $this;
    }
    /**
     * Get bankTransferInstrKey4 value
     * @return string|null
     */
    public function getBankTransferInstrKey4(): ?string
    {
        return $this->bankTransferInstrKey4;
    }
    /**
     * Set bankTransferInstrKey4 value
     * @param string $bankTransferInstrKey4
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
     */
    public function setBankTransferInstrKey4(?string $bankTransferInstrKey4 = null): self
    {
        // validation for constraint: string
        if (!is_null($bankTransferInstrKey4) && !is_string($bankTransferInstrKey4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankTransferInstrKey4, true), gettype($bankTransferInstrKey4)), __LINE__);
        }
        $this->bankTransferInstrKey4 = $bankTransferInstrKey4;
        
        return $this;
    }
}
