<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SwissQrInvoiceInfo StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SwissQrInvoiceInfo extends AbstractStructBase
{
    /**
     * The account
     * @var string|null
     */
    protected ?string $account = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The restDepositPayment
     * @var float|null
     */
    protected ?float $restDepositPayment = null;
    /**
     * The restFinalPayment
     * @var float|null
     */
    protected ?float $restFinalPayment = null;
    /**
     * The refNum4DepositPayment
     * @var string|null
     */
    protected ?string $refNum4DepositPayment = null;
    /**
     * The refNum4FinalPayment
     * @var string|null
     */
    protected ?string $refNum4FinalPayment = null;
    /**
     * The depositUnstructuredMessage
     * @var string|null
     */
    protected ?string $depositUnstructuredMessage = null;
    /**
     * The finalUnstructuredMessage
     * @var string|null
     */
    protected ?string $finalUnstructuredMessage = null;
    /**
     * The debitorName
     * @var string|null
     */
    protected ?string $debitorName = null;
    /**
     * The debitorAddressLine1
     * @var string|null
     */
    protected ?string $debitorAddressLine1 = null;
    /**
     * The debitorAddressLine2
     * @var string|null
     */
    protected ?string $debitorAddressLine2 = null;
    /**
     * The debitorCountryCode
     * @var string|null
     */
    protected ?string $debitorCountryCode = null;
    /**
     * The creditorName
     * @var string|null
     */
    protected ?string $creditorName = null;
    /**
     * The creditorAddressLine1
     * @var string|null
     */
    protected ?string $creditorAddressLine1 = null;
    /**
     * The creditorAddressLine2
     * @var string|null
     */
    protected ?string $creditorAddressLine2 = null;
    /**
     * The creditorCountryCode
     * @var string|null
     */
    protected ?string $creditorCountryCode = null;
    /**
     * The depositBillInformation
     * @var string|null
     */
    protected ?string $depositBillInformation = null;
    /**
     * The finalBillInformation
     * @var string|null
     */
    protected ?string $finalBillInformation = null;
    /**
     * Constructor method for SwissQrInvoiceInfo
     * @uses SwissQrInvoiceInfo::setAccount()
     * @uses SwissQrInvoiceInfo::setCurrency()
     * @uses SwissQrInvoiceInfo::setRestDepositPayment()
     * @uses SwissQrInvoiceInfo::setRestFinalPayment()
     * @uses SwissQrInvoiceInfo::setRefNum4DepositPayment()
     * @uses SwissQrInvoiceInfo::setRefNum4FinalPayment()
     * @uses SwissQrInvoiceInfo::setDepositUnstructuredMessage()
     * @uses SwissQrInvoiceInfo::setFinalUnstructuredMessage()
     * @uses SwissQrInvoiceInfo::setDebitorName()
     * @uses SwissQrInvoiceInfo::setDebitorAddressLine1()
     * @uses SwissQrInvoiceInfo::setDebitorAddressLine2()
     * @uses SwissQrInvoiceInfo::setDebitorCountryCode()
     * @uses SwissQrInvoiceInfo::setCreditorName()
     * @uses SwissQrInvoiceInfo::setCreditorAddressLine1()
     * @uses SwissQrInvoiceInfo::setCreditorAddressLine2()
     * @uses SwissQrInvoiceInfo::setCreditorCountryCode()
     * @uses SwissQrInvoiceInfo::setDepositBillInformation()
     * @uses SwissQrInvoiceInfo::setFinalBillInformation()
     * @param string $account
     * @param string $currency
     * @param float $restDepositPayment
     * @param float $restFinalPayment
     * @param string $refNum4DepositPayment
     * @param string $refNum4FinalPayment
     * @param string $depositUnstructuredMessage
     * @param string $finalUnstructuredMessage
     * @param string $debitorName
     * @param string $debitorAddressLine1
     * @param string $debitorAddressLine2
     * @param string $debitorCountryCode
     * @param string $creditorName
     * @param string $creditorAddressLine1
     * @param string $creditorAddressLine2
     * @param string $creditorCountryCode
     * @param string $depositBillInformation
     * @param string $finalBillInformation
     */
    public function __construct(?string $account = null, ?string $currency = null, ?float $restDepositPayment = null, ?float $restFinalPayment = null, ?string $refNum4DepositPayment = null, ?string $refNum4FinalPayment = null, ?string $depositUnstructuredMessage = null, ?string $finalUnstructuredMessage = null, ?string $debitorName = null, ?string $debitorAddressLine1 = null, ?string $debitorAddressLine2 = null, ?string $debitorCountryCode = null, ?string $creditorName = null, ?string $creditorAddressLine1 = null, ?string $creditorAddressLine2 = null, ?string $creditorCountryCode = null, ?string $depositBillInformation = null, ?string $finalBillInformation = null)
    {
        $this
            ->setAccount($account)
            ->setCurrency($currency)
            ->setRestDepositPayment($restDepositPayment)
            ->setRestFinalPayment($restFinalPayment)
            ->setRefNum4DepositPayment($refNum4DepositPayment)
            ->setRefNum4FinalPayment($refNum4FinalPayment)
            ->setDepositUnstructuredMessage($depositUnstructuredMessage)
            ->setFinalUnstructuredMessage($finalUnstructuredMessage)
            ->setDebitorName($debitorName)
            ->setDebitorAddressLine1($debitorAddressLine1)
            ->setDebitorAddressLine2($debitorAddressLine2)
            ->setDebitorCountryCode($debitorCountryCode)
            ->setCreditorName($creditorName)
            ->setCreditorAddressLine1($creditorAddressLine1)
            ->setCreditorAddressLine2($creditorAddressLine2)
            ->setCreditorCountryCode($creditorCountryCode)
            ->setDepositBillInformation($depositBillInformation)
            ->setFinalBillInformation($finalBillInformation);
    }
    /**
     * Get account value
     * @return string|null
     */
    public function getAccount(): ?string
    {
        return $this->account;
    }
    /**
     * Set account value
     * @param string $account
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setAccount(?string $account = null): self
    {
        // validation for constraint: string
        if (!is_null($account) && !is_string($account)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($account, true), gettype($account)), __LINE__);
        }
        $this->account = $account;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
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
     * Get restDepositPayment value
     * @return float|null
     */
    public function getRestDepositPayment(): ?float
    {
        return $this->restDepositPayment;
    }
    /**
     * Set restDepositPayment value
     * @param float $restDepositPayment
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setRestDepositPayment(?float $restDepositPayment = null): self
    {
        // validation for constraint: float
        if (!is_null($restDepositPayment) && !(is_float($restDepositPayment) || is_numeric($restDepositPayment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($restDepositPayment, true), gettype($restDepositPayment)), __LINE__);
        }
        $this->restDepositPayment = $restDepositPayment;
        
        return $this;
    }
    /**
     * Get restFinalPayment value
     * @return float|null
     */
    public function getRestFinalPayment(): ?float
    {
        return $this->restFinalPayment;
    }
    /**
     * Set restFinalPayment value
     * @param float $restFinalPayment
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setRestFinalPayment(?float $restFinalPayment = null): self
    {
        // validation for constraint: float
        if (!is_null($restFinalPayment) && !(is_float($restFinalPayment) || is_numeric($restFinalPayment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($restFinalPayment, true), gettype($restFinalPayment)), __LINE__);
        }
        $this->restFinalPayment = $restFinalPayment;
        
        return $this;
    }
    /**
     * Get refNum4DepositPayment value
     * @return string|null
     */
    public function getRefNum4DepositPayment(): ?string
    {
        return $this->refNum4DepositPayment;
    }
    /**
     * Set refNum4DepositPayment value
     * @param string $refNum4DepositPayment
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setRefNum4DepositPayment(?string $refNum4DepositPayment = null): self
    {
        // validation for constraint: string
        if (!is_null($refNum4DepositPayment) && !is_string($refNum4DepositPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refNum4DepositPayment, true), gettype($refNum4DepositPayment)), __LINE__);
        }
        $this->refNum4DepositPayment = $refNum4DepositPayment;
        
        return $this;
    }
    /**
     * Get refNum4FinalPayment value
     * @return string|null
     */
    public function getRefNum4FinalPayment(): ?string
    {
        return $this->refNum4FinalPayment;
    }
    /**
     * Set refNum4FinalPayment value
     * @param string $refNum4FinalPayment
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setRefNum4FinalPayment(?string $refNum4FinalPayment = null): self
    {
        // validation for constraint: string
        if (!is_null($refNum4FinalPayment) && !is_string($refNum4FinalPayment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refNum4FinalPayment, true), gettype($refNum4FinalPayment)), __LINE__);
        }
        $this->refNum4FinalPayment = $refNum4FinalPayment;
        
        return $this;
    }
    /**
     * Get depositUnstructuredMessage value
     * @return string|null
     */
    public function getDepositUnstructuredMessage(): ?string
    {
        return $this->depositUnstructuredMessage;
    }
    /**
     * Set depositUnstructuredMessage value
     * @param string $depositUnstructuredMessage
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setDepositUnstructuredMessage(?string $depositUnstructuredMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($depositUnstructuredMessage) && !is_string($depositUnstructuredMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositUnstructuredMessage, true), gettype($depositUnstructuredMessage)), __LINE__);
        }
        $this->depositUnstructuredMessage = $depositUnstructuredMessage;
        
        return $this;
    }
    /**
     * Get finalUnstructuredMessage value
     * @return string|null
     */
    public function getFinalUnstructuredMessage(): ?string
    {
        return $this->finalUnstructuredMessage;
    }
    /**
     * Set finalUnstructuredMessage value
     * @param string $finalUnstructuredMessage
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setFinalUnstructuredMessage(?string $finalUnstructuredMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($finalUnstructuredMessage) && !is_string($finalUnstructuredMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalUnstructuredMessage, true), gettype($finalUnstructuredMessage)), __LINE__);
        }
        $this->finalUnstructuredMessage = $finalUnstructuredMessage;
        
        return $this;
    }
    /**
     * Get debitorName value
     * @return string|null
     */
    public function getDebitorName(): ?string
    {
        return $this->debitorName;
    }
    /**
     * Set debitorName value
     * @param string $debitorName
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setDebitorName(?string $debitorName = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorName) && !is_string($debitorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorName, true), gettype($debitorName)), __LINE__);
        }
        $this->debitorName = $debitorName;
        
        return $this;
    }
    /**
     * Get debitorAddressLine1 value
     * @return string|null
     */
    public function getDebitorAddressLine1(): ?string
    {
        return $this->debitorAddressLine1;
    }
    /**
     * Set debitorAddressLine1 value
     * @param string $debitorAddressLine1
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setDebitorAddressLine1(?string $debitorAddressLine1 = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorAddressLine1) && !is_string($debitorAddressLine1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorAddressLine1, true), gettype($debitorAddressLine1)), __LINE__);
        }
        $this->debitorAddressLine1 = $debitorAddressLine1;
        
        return $this;
    }
    /**
     * Get debitorAddressLine2 value
     * @return string|null
     */
    public function getDebitorAddressLine2(): ?string
    {
        return $this->debitorAddressLine2;
    }
    /**
     * Set debitorAddressLine2 value
     * @param string $debitorAddressLine2
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setDebitorAddressLine2(?string $debitorAddressLine2 = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorAddressLine2) && !is_string($debitorAddressLine2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorAddressLine2, true), gettype($debitorAddressLine2)), __LINE__);
        }
        $this->debitorAddressLine2 = $debitorAddressLine2;
        
        return $this;
    }
    /**
     * Get debitorCountryCode value
     * @return string|null
     */
    public function getDebitorCountryCode(): ?string
    {
        return $this->debitorCountryCode;
    }
    /**
     * Set debitorCountryCode value
     * @param string $debitorCountryCode
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setDebitorCountryCode(?string $debitorCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorCountryCode) && !is_string($debitorCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorCountryCode, true), gettype($debitorCountryCode)), __LINE__);
        }
        $this->debitorCountryCode = $debitorCountryCode;
        
        return $this;
    }
    /**
     * Get creditorName value
     * @return string|null
     */
    public function getCreditorName(): ?string
    {
        return $this->creditorName;
    }
    /**
     * Set creditorName value
     * @param string $creditorName
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setCreditorName(?string $creditorName = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorName) && !is_string($creditorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorName, true), gettype($creditorName)), __LINE__);
        }
        $this->creditorName = $creditorName;
        
        return $this;
    }
    /**
     * Get creditorAddressLine1 value
     * @return string|null
     */
    public function getCreditorAddressLine1(): ?string
    {
        return $this->creditorAddressLine1;
    }
    /**
     * Set creditorAddressLine1 value
     * @param string $creditorAddressLine1
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setCreditorAddressLine1(?string $creditorAddressLine1 = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorAddressLine1) && !is_string($creditorAddressLine1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorAddressLine1, true), gettype($creditorAddressLine1)), __LINE__);
        }
        $this->creditorAddressLine1 = $creditorAddressLine1;
        
        return $this;
    }
    /**
     * Get creditorAddressLine2 value
     * @return string|null
     */
    public function getCreditorAddressLine2(): ?string
    {
        return $this->creditorAddressLine2;
    }
    /**
     * Set creditorAddressLine2 value
     * @param string $creditorAddressLine2
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setCreditorAddressLine2(?string $creditorAddressLine2 = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorAddressLine2) && !is_string($creditorAddressLine2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorAddressLine2, true), gettype($creditorAddressLine2)), __LINE__);
        }
        $this->creditorAddressLine2 = $creditorAddressLine2;
        
        return $this;
    }
    /**
     * Get creditorCountryCode value
     * @return string|null
     */
    public function getCreditorCountryCode(): ?string
    {
        return $this->creditorCountryCode;
    }
    /**
     * Set creditorCountryCode value
     * @param string $creditorCountryCode
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setCreditorCountryCode(?string $creditorCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($creditorCountryCode) && !is_string($creditorCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditorCountryCode, true), gettype($creditorCountryCode)), __LINE__);
        }
        $this->creditorCountryCode = $creditorCountryCode;
        
        return $this;
    }
    /**
     * Get depositBillInformation value
     * @return string|null
     */
    public function getDepositBillInformation(): ?string
    {
        return $this->depositBillInformation;
    }
    /**
     * Set depositBillInformation value
     * @param string $depositBillInformation
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setDepositBillInformation(?string $depositBillInformation = null): self
    {
        // validation for constraint: string
        if (!is_null($depositBillInformation) && !is_string($depositBillInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depositBillInformation, true), gettype($depositBillInformation)), __LINE__);
        }
        $this->depositBillInformation = $depositBillInformation;
        
        return $this;
    }
    /**
     * Get finalBillInformation value
     * @return string|null
     */
    public function getFinalBillInformation(): ?string
    {
        return $this->finalBillInformation;
    }
    /**
     * Set finalBillInformation value
     * @param string $finalBillInformation
     * @return \Pggns\MidocoApi\Order\StructType\SwissQrInvoiceInfo
     */
    public function setFinalBillInformation(?string $finalBillInformation = null): self
    {
        // validation for constraint: string
        if (!is_null($finalBillInformation) && !is_string($finalBillInformation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finalBillInformation, true), gettype($finalBillInformation)), __LINE__);
        }
        $this->finalBillInformation = $finalBillInformation;
        
        return $this;
    }
}
