<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreditCard StructType
 * @subpackage Structs
 */
class CreditCard extends AbstractStructBase
{
    /**
     * The creditCardId
     * @var int|null
     */
    protected ?int $creditCardId = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The creditCardNumber
     * @var string|null
     */
    protected ?string $creditCardNumber = null;
    /**
     * The validMonth
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 12
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $validMonth = null;
    /**
     * The validYear
     * Meta information extracted from the WSDL
     * - base: xs:integer
     * - maxInclusive: 2100
     * - minInclusive: 2016
     * @var int|null
     */
    protected ?int $validYear = null;
    /**
     * The ownerName
     * @var string|null
     */
    protected ?string $ownerName = null;
    /**
     * The tokenNumber
     * @var string|null
     */
    protected ?string $tokenNumber = null;
    /**
     * The tokenType
     * @var string|null
     */
    protected ?string $tokenType = null;
    /**
     * The approvalCode
     * @var string|null
     */
    protected ?string $approvalCode = null;
    /**
     * Constructor method for CreditCard
     * @uses CreditCard::setCreditCardId()
     * @uses CreditCard::setType()
     * @uses CreditCard::setCreditCardNumber()
     * @uses CreditCard::setValidMonth()
     * @uses CreditCard::setValidYear()
     * @uses CreditCard::setOwnerName()
     * @uses CreditCard::setTokenNumber()
     * @uses CreditCard::setTokenType()
     * @uses CreditCard::setApprovalCode()
     * @param int $creditCardId
     * @param string $type
     * @param string $creditCardNumber
     * @param int $validMonth
     * @param int $validYear
     * @param string $ownerName
     * @param string $tokenNumber
     * @param string $tokenType
     * @param string $approvalCode
     */
    public function __construct(?int $creditCardId = null, ?string $type = null, ?string $creditCardNumber = null, ?int $validMonth = null, ?int $validYear = null, ?string $ownerName = null, ?string $tokenNumber = null, ?string $tokenType = null, ?string $approvalCode = null)
    {
        $this
            ->setCreditCardId($creditCardId)
            ->setType($type)
            ->setCreditCardNumber($creditCardNumber)
            ->setValidMonth($validMonth)
            ->setValidYear($validYear)
            ->setOwnerName($ownerName)
            ->setTokenNumber($tokenNumber)
            ->setTokenType($tokenType)
            ->setApprovalCode($approvalCode);
    }
    /**
     * Get creditCardId value
     * @return int|null
     */
    public function getCreditCardId(): ?int
    {
        return $this->creditCardId;
    }
    /**
     * Set creditCardId value
     * @param int $creditCardId
     * @return \Pggns\MidocoApi\Order\StructType\CreditCard
     */
    public function setCreditCardId(?int $creditCardId = null): self
    {
        // validation for constraint: int
        if (!is_null($creditCardId) && !(is_int($creditCardId) || ctype_digit($creditCardId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creditCardId, true), gettype($creditCardId)), __LINE__);
        }
        $this->creditCardId = $creditCardId;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Pggns\MidocoApi\Order\EnumType\CreditCardType::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\CreditCardType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\CreditCard
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\CreditCardType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\CreditCardType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\CreditCardType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get creditCardNumber value
     * @return string|null
     */
    public function getCreditCardNumber(): ?string
    {
        return $this->creditCardNumber;
    }
    /**
     * Set creditCardNumber value
     * @param string $creditCardNumber
     * @return \Pggns\MidocoApi\Order\StructType\CreditCard
     */
    public function setCreditCardNumber(?string $creditCardNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($creditCardNumber) && !is_string($creditCardNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creditCardNumber, true), gettype($creditCardNumber)), __LINE__);
        }
        $this->creditCardNumber = $creditCardNumber;
        
        return $this;
    }
    /**
     * Get validMonth value
     * @return int|null
     */
    public function getValidMonth(): ?int
    {
        return $this->validMonth;
    }
    /**
     * Set validMonth value
     * @param int $validMonth
     * @return \Pggns\MidocoApi\Order\StructType\CreditCard
     */
    public function setValidMonth(?int $validMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($validMonth) && !(is_int($validMonth) || ctype_digit($validMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validMonth, true), gettype($validMonth)), __LINE__);
        }
        // validation for constraint: maxInclusive(12)
        if (!is_null($validMonth) && $validMonth > 12) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 12', var_export($validMonth, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($validMonth) && $validMonth < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($validMonth, true)), __LINE__);
        }
        $this->validMonth = $validMonth;
        
        return $this;
    }
    /**
     * Get validYear value
     * @return int|null
     */
    public function getValidYear(): ?int
    {
        return $this->validYear;
    }
    /**
     * Set validYear value
     * @param int $validYear
     * @return \Pggns\MidocoApi\Order\StructType\CreditCard
     */
    public function setValidYear(?int $validYear = null): self
    {
        // validation for constraint: int
        if (!is_null($validYear) && !(is_int($validYear) || ctype_digit($validYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validYear, true), gettype($validYear)), __LINE__);
        }
        // validation for constraint: maxInclusive(2100)
        if (!is_null($validYear) && $validYear > 2100) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 2100', var_export($validYear, true)), __LINE__);
        }
        // validation for constraint: minInclusive(2016)
        if (!is_null($validYear) && $validYear < 2016) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 2016', var_export($validYear, true)), __LINE__);
        }
        $this->validYear = $validYear;
        
        return $this;
    }
    /**
     * Get ownerName value
     * @return string|null
     */
    public function getOwnerName(): ?string
    {
        return $this->ownerName;
    }
    /**
     * Set ownerName value
     * @param string $ownerName
     * @return \Pggns\MidocoApi\Order\StructType\CreditCard
     */
    public function setOwnerName(?string $ownerName = null): self
    {
        // validation for constraint: string
        if (!is_null($ownerName) && !is_string($ownerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ownerName, true), gettype($ownerName)), __LINE__);
        }
        $this->ownerName = $ownerName;
        
        return $this;
    }
    /**
     * Get tokenNumber value
     * @return string|null
     */
    public function getTokenNumber(): ?string
    {
        return $this->tokenNumber;
    }
    /**
     * Set tokenNumber value
     * @param string $tokenNumber
     * @return \Pggns\MidocoApi\Order\StructType\CreditCard
     */
    public function setTokenNumber(?string $tokenNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenNumber) && !is_string($tokenNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenNumber, true), gettype($tokenNumber)), __LINE__);
        }
        $this->tokenNumber = $tokenNumber;
        
        return $this;
    }
    /**
     * Get tokenType value
     * @return string|null
     */
    public function getTokenType(): ?string
    {
        return $this->tokenType;
    }
    /**
     * Set tokenType value
     * @param string $tokenType
     * @return \Pggns\MidocoApi\Order\StructType\CreditCard
     */
    public function setTokenType(?string $tokenType = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenType) && !is_string($tokenType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenType, true), gettype($tokenType)), __LINE__);
        }
        $this->tokenType = $tokenType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CreditCard
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
}
