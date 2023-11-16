<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDirectDebitPosition StructType
 * @subpackage Structs
 */
class MidocoDirectDebitPosition extends MidocoOnlinePaymentTransactionPosition
{
    /**
     * The accountNo
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The accountBlz
     * @var string|null
     */
    protected ?string $accountBlz = null;
    /**
     * The accountName
     * @var string|null
     */
    protected ?string $accountName = null;
    /**
     * The accountOwner
     * @var string|null
     */
    protected ?string $accountOwner = null;
    /**
     * The accountCountry
     * @var string|null
     */
    protected ?string $accountCountry = null;
    /**
     * The transactionType
     * @var string|null
     */
    protected ?string $transactionType = null;
    /**
     * The iban
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The swiftBicCode
     * @var string|null
     */
    protected ?string $swiftBicCode = null;
    /**
     * The mandateId
     * @var int|null
     */
    protected ?int $mandateId = null;
    /**
     * The executionDate
     * @var string|null
     */
    protected ?string $executionDate = null;
    /**
     * The mandateReference
     * @var string|null
     */
    protected ?string $mandateReference = null;
    /**
     * The isRecurrent
     * @var bool|null
     */
    protected ?bool $isRecurrent = null;
    /**
     * The mandateType
     * @var string|null
     */
    protected ?string $mandateType = null;
    /**
     * The MidocoPaymentOrdersInfos
     * Meta information extracted from the WSDL
     * - ref: MidocoPaymentOrdersInfos
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $MidocoPaymentOrdersInfos = null;
    /**
     * The bankTransferCollective
     * @var bool|null
     */
    protected ?bool $bankTransferCollective = null;
    /**
     * The isSepa
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isSepa = null;
    /**
     * The extReference
     * @var string|null
     */
    protected ?string $extReference = null;
    /**
     * The approvalCode
     * @var string|null
     */
    protected ?string $approvalCode = null;
    /**
     * The selected
     * @var bool|null
     */
    protected ?bool $selected = null;
    /**
     * Constructor method for MidocoDirectDebitPosition
     * @uses MidocoDirectDebitPosition::setAccountNo()
     * @uses MidocoDirectDebitPosition::setAccountBlz()
     * @uses MidocoDirectDebitPosition::setAccountName()
     * @uses MidocoDirectDebitPosition::setAccountOwner()
     * @uses MidocoDirectDebitPosition::setAccountCountry()
     * @uses MidocoDirectDebitPosition::setTransactionType()
     * @uses MidocoDirectDebitPosition::setIban()
     * @uses MidocoDirectDebitPosition::setSwiftBicCode()
     * @uses MidocoDirectDebitPosition::setMandateId()
     * @uses MidocoDirectDebitPosition::setExecutionDate()
     * @uses MidocoDirectDebitPosition::setMandateReference()
     * @uses MidocoDirectDebitPosition::setIsRecurrent()
     * @uses MidocoDirectDebitPosition::setMandateType()
     * @uses MidocoDirectDebitPosition::setMidocoPaymentOrdersInfos()
     * @uses MidocoDirectDebitPosition::setBankTransferCollective()
     * @uses MidocoDirectDebitPosition::setIsSepa()
     * @uses MidocoDirectDebitPosition::setExtReference()
     * @uses MidocoDirectDebitPosition::setApprovalCode()
     * @uses MidocoDirectDebitPosition::setSelected()
     * @param string $accountNo
     * @param string $accountBlz
     * @param string $accountName
     * @param string $accountOwner
     * @param string $accountCountry
     * @param string $transactionType
     * @param string $iban
     * @param string $swiftBicCode
     * @param int $mandateId
     * @param string $executionDate
     * @param string $mandateReference
     * @param bool $isRecurrent
     * @param string $mandateType
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $midocoPaymentOrdersInfos
     * @param bool $bankTransferCollective
     * @param bool $isSepa
     * @param string $extReference
     * @param string $approvalCode
     * @param bool $selected
     */
    public function __construct(?string $accountNo = null, ?string $accountBlz = null, ?string $accountName = null, ?string $accountOwner = null, ?string $accountCountry = null, ?string $transactionType = null, ?string $iban = null, ?string $swiftBicCode = null, ?int $mandateId = null, ?string $executionDate = null, ?string $mandateReference = null, ?bool $isRecurrent = null, ?string $mandateType = null, ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $midocoPaymentOrdersInfos = null, ?bool $bankTransferCollective = null, ?bool $isSepa = false, ?string $extReference = null, ?string $approvalCode = null, ?bool $selected = null)
    {
        $this
            ->setAccountNo($accountNo)
            ->setAccountBlz($accountBlz)
            ->setAccountName($accountName)
            ->setAccountOwner($accountOwner)
            ->setAccountCountry($accountCountry)
            ->setTransactionType($transactionType)
            ->setIban($iban)
            ->setSwiftBicCode($swiftBicCode)
            ->setMandateId($mandateId)
            ->setExecutionDate($executionDate)
            ->setMandateReference($mandateReference)
            ->setIsRecurrent($isRecurrent)
            ->setMandateType($mandateType)
            ->setMidocoPaymentOrdersInfos($midocoPaymentOrdersInfos)
            ->setBankTransferCollective($bankTransferCollective)
            ->setIsSepa($isSepa)
            ->setExtReference($extReference)
            ->setApprovalCode($approvalCode)
            ->setSelected($selected);
    }
    /**
     * Get accountNo value
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }
    /**
     * Set accountNo value
     * @param string $accountNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setAccountNo(?string $accountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->accountNo = $accountNo;
        
        return $this;
    }
    /**
     * Get accountBlz value
     * @return string|null
     */
    public function getAccountBlz(): ?string
    {
        return $this->accountBlz;
    }
    /**
     * Set accountBlz value
     * @param string $accountBlz
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setAccountBlz(?string $accountBlz = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBlz) && !is_string($accountBlz)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBlz, true), gettype($accountBlz)), __LINE__);
        }
        $this->accountBlz = $accountBlz;
        
        return $this;
    }
    /**
     * Get accountName value
     * @return string|null
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }
    /**
     * Set accountName value
     * @param string $accountName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setAccountName(?string $accountName = null): self
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountName, true), gettype($accountName)), __LINE__);
        }
        $this->accountName = $accountName;
        
        return $this;
    }
    /**
     * Get accountOwner value
     * @return string|null
     */
    public function getAccountOwner(): ?string
    {
        return $this->accountOwner;
    }
    /**
     * Set accountOwner value
     * @param string $accountOwner
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setAccountOwner(?string $accountOwner = null): self
    {
        // validation for constraint: string
        if (!is_null($accountOwner) && !is_string($accountOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountOwner, true), gettype($accountOwner)), __LINE__);
        }
        $this->accountOwner = $accountOwner;
        
        return $this;
    }
    /**
     * Get accountCountry value
     * @return string|null
     */
    public function getAccountCountry(): ?string
    {
        return $this->accountCountry;
    }
    /**
     * Set accountCountry value
     * @param string $accountCountry
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setAccountCountry(?string $accountCountry = null): self
    {
        // validation for constraint: string
        if (!is_null($accountCountry) && !is_string($accountCountry)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountCountry, true), gettype($accountCountry)), __LINE__);
        }
        $this->accountCountry = $accountCountry;
        
        return $this;
    }
    /**
     * Get transactionType value
     * @return string|null
     */
    public function getTransactionType(): ?string
    {
        return $this->transactionType;
    }
    /**
     * Set transactionType value
     * @param string $transactionType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setTransactionType(?string $transactionType = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionType) && !is_string($transactionType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionType, true), gettype($transactionType)), __LINE__);
        }
        $this->transactionType = $transactionType;
        
        return $this;
    }
    /**
     * Get iban value
     * @return string|null
     */
    public function getIban(): ?string
    {
        return $this->iban;
    }
    /**
     * Set iban value
     * @param string $iban
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setIban(?string $iban = null): self
    {
        // validation for constraint: string
        if (!is_null($iban) && !is_string($iban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iban, true), gettype($iban)), __LINE__);
        }
        $this->iban = $iban;
        
        return $this;
    }
    /**
     * Get swiftBicCode value
     * @return string|null
     */
    public function getSwiftBicCode(): ?string
    {
        return $this->swiftBicCode;
    }
    /**
     * Set swiftBicCode value
     * @param string $swiftBicCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setSwiftBicCode(?string $swiftBicCode = null): self
    {
        // validation for constraint: string
        if (!is_null($swiftBicCode) && !is_string($swiftBicCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swiftBicCode, true), gettype($swiftBicCode)), __LINE__);
        }
        $this->swiftBicCode = $swiftBicCode;
        
        return $this;
    }
    /**
     * Get mandateId value
     * @return int|null
     */
    public function getMandateId(): ?int
    {
        return $this->mandateId;
    }
    /**
     * Set mandateId value
     * @param int $mandateId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setMandateId(?int $mandateId = null): self
    {
        // validation for constraint: int
        if (!is_null($mandateId) && !(is_int($mandateId) || ctype_digit($mandateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mandateId, true), gettype($mandateId)), __LINE__);
        }
        $this->mandateId = $mandateId;
        
        return $this;
    }
    /**
     * Get executionDate value
     * @return string|null
     */
    public function getExecutionDate(): ?string
    {
        return $this->executionDate;
    }
    /**
     * Set executionDate value
     * @param string $executionDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setExecutionDate(?string $executionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($executionDate) && !is_string($executionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($executionDate, true), gettype($executionDate)), __LINE__);
        }
        $this->executionDate = $executionDate;
        
        return $this;
    }
    /**
     * Get mandateReference value
     * @return string|null
     */
    public function getMandateReference(): ?string
    {
        return $this->mandateReference;
    }
    /**
     * Set mandateReference value
     * @param string $mandateReference
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setMandateReference(?string $mandateReference = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateReference) && !is_string($mandateReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateReference, true), gettype($mandateReference)), __LINE__);
        }
        $this->mandateReference = $mandateReference;
        
        return $this;
    }
    /**
     * Get isRecurrent value
     * @return bool|null
     */
    public function getIsRecurrent(): ?bool
    {
        return $this->isRecurrent;
    }
    /**
     * Set isRecurrent value
     * @param bool $isRecurrent
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setIsRecurrent(?bool $isRecurrent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRecurrent) && !is_bool($isRecurrent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRecurrent, true), gettype($isRecurrent)), __LINE__);
        }
        $this->isRecurrent = $isRecurrent;
        
        return $this;
    }
    /**
     * Get mandateType value
     * @return string|null
     */
    public function getMandateType(): ?string
    {
        return $this->mandateType;
    }
    /**
     * Set mandateType value
     * @param string $mandateType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setMandateType(?string $mandateType = null): self
    {
        // validation for constraint: string
        if (!is_null($mandateType) && !is_string($mandateType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mandateType, true), gettype($mandateType)), __LINE__);
        }
        $this->mandateType = $mandateType;
        
        return $this;
    }
    /**
     * Get MidocoPaymentOrdersInfos value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos|null
     */
    public function getMidocoPaymentOrdersInfos(): ?\Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos
    {
        return $this->MidocoPaymentOrdersInfos;
    }
    /**
     * Set MidocoPaymentOrdersInfos value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $midocoPaymentOrdersInfos
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setMidocoPaymentOrdersInfos(?\Pggns\MidocoApi\Order\StructType\MidocoPaymentOrdersInfos $midocoPaymentOrdersInfos = null): self
    {
        $this->MidocoPaymentOrdersInfos = $midocoPaymentOrdersInfos;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
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
    /**
     * Get isSepa value
     * @return bool|null
     */
    public function getIsSepa(): ?bool
    {
        return $this->isSepa;
    }
    /**
     * Set isSepa value
     * @param bool $isSepa
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setIsSepa(?bool $isSepa = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isSepa) && !is_bool($isSepa)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSepa, true), gettype($isSepa)), __LINE__);
        }
        $this->isSepa = $isSepa;
        
        return $this;
    }
    /**
     * Get extReference value
     * @return string|null
     */
    public function getExtReference(): ?string
    {
        return $this->extReference;
    }
    /**
     * Set extReference value
     * @param string $extReference
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setExtReference(?string $extReference = null): self
    {
        // validation for constraint: string
        if (!is_null($extReference) && !is_string($extReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extReference, true), gettype($extReference)), __LINE__);
        }
        $this->extReference = $extReference;
        
        return $this;
    }
    /**
     * Get approvalCode value
     * @return string|null
     */
    public function getApprovalCode(): ?string
    {
        return $this->approvalCode;
    }
    /**
     * Set approvalCode value
     * @param string $approvalCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setApprovalCode(?string $approvalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($approvalCode) && !is_string($approvalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approvalCode, true), gettype($approvalCode)), __LINE__);
        }
        $this->approvalCode = $approvalCode;
        
        return $this;
    }
    /**
     * Get selected value
     * @return bool|null
     */
    public function getSelected(): ?bool
    {
        return $this->selected;
    }
    /**
     * Set selected value
     * @param bool $selected
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitPosition
     */
    public function setSelected(?bool $selected = null): self
    {
        // validation for constraint: boolean
        if (!is_null($selected) && !is_bool($selected)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($selected, true), gettype($selected)), __LINE__);
        }
        $this->selected = $selected;
        
        return $this;
    }
}
