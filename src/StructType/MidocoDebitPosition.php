<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDebitPosition StructType
 * @subpackage Structs
 */
class MidocoDebitPosition extends MidocoDebit
{
    /**
     * The purpose
     * @var string|null
     */
    protected ?string $purpose = null;
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
     * Constructor method for MidocoDebitPosition
     * @uses MidocoDebitPosition::setPurpose()
     * @uses MidocoDebitPosition::setIban()
     * @uses MidocoDebitPosition::setSwiftBicCode()
     * @uses MidocoDebitPosition::setMandateId()
     * @uses MidocoDebitPosition::setExecutionDate()
     * @uses MidocoDebitPosition::setMandateReference()
     * @uses MidocoDebitPosition::setIsRecurrent()
     * @uses MidocoDebitPosition::setMandateType()
     * @param string $purpose
     * @param string $iban
     * @param string $swiftBicCode
     * @param int $mandateId
     * @param string $executionDate
     * @param string $mandateReference
     * @param bool $isRecurrent
     * @param string $mandateType
     */
    public function __construct(?string $purpose = null, ?string $iban = null, ?string $swiftBicCode = null, ?int $mandateId = null, ?string $executionDate = null, ?string $mandateReference = null, ?bool $isRecurrent = null, ?string $mandateType = null)
    {
        $this
            ->setPurpose($purpose)
            ->setIban($iban)
            ->setSwiftBicCode($swiftBicCode)
            ->setMandateId($mandateId)
            ->setExecutionDate($executionDate)
            ->setMandateReference($mandateReference)
            ->setIsRecurrent($isRecurrent)
            ->setMandateType($mandateType);
    }
    /**
     * Get purpose value
     * @return string|null
     */
    public function getPurpose(): ?string
    {
        return $this->purpose;
    }
    /**
     * Set purpose value
     * @param string $purpose
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitPosition
     */
    public function setPurpose(?string $purpose = null): self
    {
        // validation for constraint: string
        if (!is_null($purpose) && !is_string($purpose)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($purpose, true), gettype($purpose)), __LINE__);
        }
        $this->purpose = $purpose;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitPosition
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitPosition
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitPosition
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitPosition
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitPosition
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitPosition
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitPosition
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
}
