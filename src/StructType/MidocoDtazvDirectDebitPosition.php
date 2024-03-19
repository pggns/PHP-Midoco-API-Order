<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDtazvDirectDebitPosition StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDtazvDirectDebitPosition extends MidocoOnlinePaymentTransactionPosition
{
    /**
     * The MidocoDtazvTransactionInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoDtazvTransactionInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo $MidocoDtazvTransactionInfo = null;
    /**
     * The customerBankStreet
     * @var string|null
     */
    protected ?string $customerBankStreet = null;
    /**
     * The customerBankCity
     * @var string|null
     */
    protected ?string $customerBankCity = null;
    /**
     * The customerBankCountry
     * @var string|null
     */
    protected ?string $customerBankCountry = null;
    /**
     * The customerAddressCity
     * @var string|null
     */
    protected ?string $customerAddressCity = null;
    /**
     * The customerAddressStreet
     * @var string|null
     */
    protected ?string $customerAddressStreet = null;
    /**
     * The customerAddressCountry
     * @var string|null
     */
    protected ?string $customerAddressCountry = null;
    /**
     * The customerBankAccountNo
     * @var string|null
     */
    protected ?string $customerBankAccountNo = null;
    /**
     * The customerBankNo
     * @var string|null
     */
    protected ?string $customerBankNo = null;
    /**
     * The customerOwnerName
     * @var string|null
     */
    protected ?string $customerOwnerName = null;
    /**
     * The customerBankName
     * @var string|null
     */
    protected ?string $customerBankName = null;
    /**
     * The bankTransferCollective
     * @var bool|null
     */
    protected ?bool $bankTransferCollective = null;
    /**
     * Constructor method for MidocoDtazvDirectDebitPosition
     * @uses MidocoDtazvDirectDebitPosition::setMidocoDtazvTransactionInfo()
     * @uses MidocoDtazvDirectDebitPosition::setCustomerBankStreet()
     * @uses MidocoDtazvDirectDebitPosition::setCustomerBankCity()
     * @uses MidocoDtazvDirectDebitPosition::setCustomerBankCountry()
     * @uses MidocoDtazvDirectDebitPosition::setCustomerAddressCity()
     * @uses MidocoDtazvDirectDebitPosition::setCustomerAddressStreet()
     * @uses MidocoDtazvDirectDebitPosition::setCustomerAddressCountry()
     * @uses MidocoDtazvDirectDebitPosition::setCustomerBankAccountNo()
     * @uses MidocoDtazvDirectDebitPosition::setCustomerBankNo()
     * @uses MidocoDtazvDirectDebitPosition::setCustomerOwnerName()
     * @uses MidocoDtazvDirectDebitPosition::setCustomerBankName()
     * @uses MidocoDtazvDirectDebitPosition::setBankTransferCollective()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo $midocoDtazvTransactionInfo
     * @param string $customerBankStreet
     * @param string $customerBankCity
     * @param string $customerBankCountry
     * @param string $customerAddressCity
     * @param string $customerAddressStreet
     * @param string $customerAddressCountry
     * @param string $customerBankAccountNo
     * @param string $customerBankNo
     * @param string $customerOwnerName
     * @param string $customerBankName
     * @param bool $bankTransferCollective
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo $midocoDtazvTransactionInfo = null, ?string $customerBankStreet = null, ?string $customerBankCity = null, ?string $customerBankCountry = null, ?string $customerAddressCity = null, ?string $customerAddressStreet = null, ?string $customerAddressCountry = null, ?string $customerBankAccountNo = null, ?string $customerBankNo = null, ?string $customerOwnerName = null, ?string $customerBankName = null, ?bool $bankTransferCollective = null)
    {
        $this
            ->setMidocoDtazvTransactionInfo($midocoDtazvTransactionInfo)
            ->setCustomerBankStreet($customerBankStreet)
            ->setCustomerBankCity($customerBankCity)
            ->setCustomerBankCountry($customerBankCountry)
            ->setCustomerAddressCity($customerAddressCity)
            ->setCustomerAddressStreet($customerAddressStreet)
            ->setCustomerAddressCountry($customerAddressCountry)
            ->setCustomerBankAccountNo($customerBankAccountNo)
            ->setCustomerBankNo($customerBankNo)
            ->setCustomerOwnerName($customerOwnerName)
            ->setCustomerBankName($customerBankName)
            ->setBankTransferCollective($bankTransferCollective);
    }
    /**
     * Get MidocoDtazvTransactionInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo|null
     */
    public function getMidocoDtazvTransactionInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo
    {
        return $this->MidocoDtazvTransactionInfo;
    }
    /**
     * Set MidocoDtazvTransactionInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo $midocoDtazvTransactionInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvDirectDebitPosition
     */
    public function setMidocoDtazvTransactionInfo(?\Pggns\MidocoApi\Order\StructType\MidocoDtazvTransactionInfo $midocoDtazvTransactionInfo = null): self
    {
        $this->MidocoDtazvTransactionInfo = $midocoDtazvTransactionInfo;
        
        return $this;
    }
    /**
     * Get customerBankStreet value
     * @return string|null
     */
    public function getCustomerBankStreet(): ?string
    {
        return $this->customerBankStreet;
    }
    /**
     * Set customerBankStreet value
     * @param string $customerBankStreet
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvDirectDebitPosition
     */
    public function setCustomerBankStreet(?string $customerBankStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($customerBankStreet) && !is_string($customerBankStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerBankStreet, true), gettype($customerBankStreet)), __LINE__);
        }
        $this->customerBankStreet = $customerBankStreet;
        
        return $this;
    }
    /**
     * Get customerBankCity value
     * @return string|null
     */
    public function getCustomerBankCity(): ?string
    {
        return $this->customerBankCity;
    }
    /**
     * Set customerBankCity value
     * @param string $customerBankCity
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvDirectDebitPosition
     */
    public function setCustomerBankCity(?string $customerBankCity = null): self
    {
        // validation for constraint: string
        if (!is_null($customerBankCity) && !is_string($customerBankCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerBankCity, true), gettype($customerBankCity)), __LINE__);
        }
        $this->customerBankCity = $customerBankCity;
        
        return $this;
    }
    /**
     * Get customerBankCountry value
     * @return string|null
     */
    public function getCustomerBankCountry(): ?string
    {
        return $this->customerBankCountry;
    }
    /**
     * Set customerBankCountry value
     * @param string $customerBankCountry
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvDirectDebitPosition
     */
    public function setCustomerBankCountry(?string $customerBankCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($customerBankCountry) && !is_string($customerBankCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerBankCountry, true), gettype($customerBankCountry)), __LINE__);
        }
        $this->customerBankCountry = $customerBankCountry;
        
        return $this;
    }
    /**
     * Get customerAddressCity value
     * @return string|null
     */
    public function getCustomerAddressCity(): ?string
    {
        return $this->customerAddressCity;
    }
    /**
     * Set customerAddressCity value
     * @param string $customerAddressCity
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvDirectDebitPosition
     */
    public function setCustomerAddressCity(?string $customerAddressCity = null): self
    {
        // validation for constraint: string
        if (!is_null($customerAddressCity) && !is_string($customerAddressCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAddressCity, true), gettype($customerAddressCity)), __LINE__);
        }
        $this->customerAddressCity = $customerAddressCity;
        
        return $this;
    }
    /**
     * Get customerAddressStreet value
     * @return string|null
     */
    public function getCustomerAddressStreet(): ?string
    {
        return $this->customerAddressStreet;
    }
    /**
     * Set customerAddressStreet value
     * @param string $customerAddressStreet
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvDirectDebitPosition
     */
    public function setCustomerAddressStreet(?string $customerAddressStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($customerAddressStreet) && !is_string($customerAddressStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAddressStreet, true), gettype($customerAddressStreet)), __LINE__);
        }
        $this->customerAddressStreet = $customerAddressStreet;
        
        return $this;
    }
    /**
     * Get customerAddressCountry value
     * @return string|null
     */
    public function getCustomerAddressCountry(): ?string
    {
        return $this->customerAddressCountry;
    }
    /**
     * Set customerAddressCountry value
     * @param string $customerAddressCountry
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvDirectDebitPosition
     */
    public function setCustomerAddressCountry(?string $customerAddressCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($customerAddressCountry) && !is_string($customerAddressCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAddressCountry, true), gettype($customerAddressCountry)), __LINE__);
        }
        $this->customerAddressCountry = $customerAddressCountry;
        
        return $this;
    }
    /**
     * Get customerBankAccountNo value
     * @return string|null
     */
    public function getCustomerBankAccountNo(): ?string
    {
        return $this->customerBankAccountNo;
    }
    /**
     * Set customerBankAccountNo value
     * @param string $customerBankAccountNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvDirectDebitPosition
     */
    public function setCustomerBankAccountNo(?string $customerBankAccountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($customerBankAccountNo) && !is_string($customerBankAccountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerBankAccountNo, true), gettype($customerBankAccountNo)), __LINE__);
        }
        $this->customerBankAccountNo = $customerBankAccountNo;
        
        return $this;
    }
    /**
     * Get customerBankNo value
     * @return string|null
     */
    public function getCustomerBankNo(): ?string
    {
        return $this->customerBankNo;
    }
    /**
     * Set customerBankNo value
     * @param string $customerBankNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvDirectDebitPosition
     */
    public function setCustomerBankNo(?string $customerBankNo = null): self
    {
        // validation for constraint: string
        if (!is_null($customerBankNo) && !is_string($customerBankNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerBankNo, true), gettype($customerBankNo)), __LINE__);
        }
        $this->customerBankNo = $customerBankNo;
        
        return $this;
    }
    /**
     * Get customerOwnerName value
     * @return string|null
     */
    public function getCustomerOwnerName(): ?string
    {
        return $this->customerOwnerName;
    }
    /**
     * Set customerOwnerName value
     * @param string $customerOwnerName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvDirectDebitPosition
     */
    public function setCustomerOwnerName(?string $customerOwnerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerOwnerName) && !is_string($customerOwnerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerOwnerName, true), gettype($customerOwnerName)), __LINE__);
        }
        $this->customerOwnerName = $customerOwnerName;
        
        return $this;
    }
    /**
     * Get customerBankName value
     * @return string|null
     */
    public function getCustomerBankName(): ?string
    {
        return $this->customerBankName;
    }
    /**
     * Set customerBankName value
     * @param string $customerBankName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvDirectDebitPosition
     */
    public function setCustomerBankName(?string $customerBankName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerBankName) && !is_string($customerBankName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerBankName, true), gettype($customerBankName)), __LINE__);
        }
        $this->customerBankName = $customerBankName;
        
        return $this;
    }
    /**
     * Get bankTransferCollective value
     * @return bool|null
     */
    public function getBankTransferCollective(): ?bool
    {
        return $this->bankTransferCollective;
    }
    /**
     * Set bankTransferCollective value
     * @param bool $bankTransferCollective
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDtazvDirectDebitPosition
     */
    public function setBankTransferCollective(?bool $bankTransferCollective = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bankTransferCollective) && !is_bool($bankTransferCollective)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bankTransferCollective, true), gettype($bankTransferCollective)), __LINE__);
        }
        $this->bankTransferCollective = $bankTransferCollective;
        
        return $this;
    }
}
