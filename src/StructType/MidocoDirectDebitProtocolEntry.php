<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDirectDebitProtocolEntry StructType
 * @subpackage Structs
 */
class MidocoDirectDebitProtocolEntry extends AbstractStructBase
{
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $message = null;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The bankNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bankNo = null;
    /**
     * The accountNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The amount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The usage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $usage = null;
    /**
     * The comment
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * The count
     * @var string|null
     */
    protected ?string $count = null;
    /**
     * The iban
     * @var string|null
     */
    protected ?string $iban = null;
    /**
     * The bic
     * @var string|null
     */
    protected ?string $bic = null;
    /**
     * Constructor method for MidocoDirectDebitProtocolEntry
     * @uses MidocoDirectDebitProtocolEntry::setStatus()
     * @uses MidocoDirectDebitProtocolEntry::setMessage()
     * @uses MidocoDirectDebitProtocolEntry::setName()
     * @uses MidocoDirectDebitProtocolEntry::setBankNo()
     * @uses MidocoDirectDebitProtocolEntry::setAccountNo()
     * @uses MidocoDirectDebitProtocolEntry::setAmount()
     * @uses MidocoDirectDebitProtocolEntry::setUsage()
     * @uses MidocoDirectDebitProtocolEntry::setComment()
     * @uses MidocoDirectDebitProtocolEntry::setCount()
     * @uses MidocoDirectDebitProtocolEntry::setIban()
     * @uses MidocoDirectDebitProtocolEntry::setBic()
     * @param string $status
     * @param string $message
     * @param string $name
     * @param string $bankNo
     * @param string $accountNo
     * @param float $amount
     * @param string $usage
     * @param string $comment
     * @param string $count
     * @param string $iban
     * @param string $bic
     */
    public function __construct(?string $status = null, ?string $message = null, ?string $name = null, ?string $bankNo = null, ?string $accountNo = null, ?float $amount = null, ?string $usage = null, ?string $comment = null, ?string $count = null, ?string $iban = null, ?string $bic = null)
    {
        $this
            ->setStatus($status)
            ->setMessage($message)
            ->setName($name)
            ->setBankNo($bankNo)
            ->setAccountNo($accountNo)
            ->setAmount($amount)
            ->setUsage($usage)
            ->setComment($comment)
            ->setCount($count)
            ->setIban($iban)
            ->setBic($bic);
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocolEntry
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $message
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocolEntry
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocolEntry
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get bankNo value
     * @return string|null
     */
    public function getBankNo(): ?string
    {
        return $this->bankNo;
    }
    /**
     * Set bankNo value
     * @param string $bankNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocolEntry
     */
    public function setBankNo(?string $bankNo = null): self
    {
        // validation for constraint: string
        if (!is_null($bankNo) && !is_string($bankNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankNo, true), gettype($bankNo)), __LINE__);
        }
        $this->bankNo = $bankNo;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocolEntry
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
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocolEntry
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get usage value
     * @return string|null
     */
    public function getUsage(): ?string
    {
        return $this->usage;
    }
    /**
     * Set usage value
     * @param string $usage
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocolEntry
     */
    public function setUsage(?string $usage = null): self
    {
        // validation for constraint: string
        if (!is_null($usage) && !is_string($usage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($usage, true), gettype($usage)), __LINE__);
        }
        $this->usage = $usage;
        
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocolEntry
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        
        return $this;
    }
    /**
     * Get count value
     * @return string|null
     */
    public function getCount(): ?string
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param string $count
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocolEntry
     */
    public function setCount(?string $count = null): self
    {
        // validation for constraint: string
        if (!is_null($count) && !is_string($count)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->count = $count;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocolEntry
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
     * Get bic value
     * @return string|null
     */
    public function getBic(): ?string
    {
        return $this->bic;
    }
    /**
     * Set bic value
     * @param string $bic
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDirectDebitProtocolEntry
     */
    public function setBic(?string $bic = null): self
    {
        // validation for constraint: string
        if (!is_null($bic) && !is_string($bic)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bic, true), gettype($bic)), __LINE__);
        }
        $this->bic = $bic;
        
        return $this;
    }
}
