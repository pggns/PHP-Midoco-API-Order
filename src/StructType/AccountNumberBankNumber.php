<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountNumberBankNumber StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AccountNumberBankNumber extends AbstractStructBase
{
    /**
     * The accountNumber
     * @var string|null
     */
    protected ?string $accountNumber = null;
    /**
     * The bankNumber
     * @var string|null
     */
    protected ?string $bankNumber = null;
    /**
     * The swiftCode
     * @var string|null
     */
    protected ?string $swiftCode = null;
    /**
     * Constructor method for AccountNumberBankNumber
     * @uses AccountNumberBankNumber::setAccountNumber()
     * @uses AccountNumberBankNumber::setBankNumber()
     * @uses AccountNumberBankNumber::setSwiftCode()
     * @param string $accountNumber
     * @param string $bankNumber
     * @param string $swiftCode
     */
    public function __construct(?string $accountNumber = null, ?string $bankNumber = null, ?string $swiftCode = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setBankNumber($bankNumber)
            ->setSwiftCode($swiftCode);
    }
    /**
     * Get accountNumber value
     * @return string|null
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }
    /**
     * Set accountNumber value
     * @param string $accountNumber
     * @return \Pggns\MidocoApi\Order\StructType\AccountNumberBankNumber
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;
        
        return $this;
    }
    /**
     * Get bankNumber value
     * @return string|null
     */
    public function getBankNumber(): ?string
    {
        return $this->bankNumber;
    }
    /**
     * Set bankNumber value
     * @param string $bankNumber
     * @return \Pggns\MidocoApi\Order\StructType\AccountNumberBankNumber
     */
    public function setBankNumber(?string $bankNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($bankNumber) && !is_string($bankNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankNumber, true), gettype($bankNumber)), __LINE__);
        }
        $this->bankNumber = $bankNumber;
        
        return $this;
    }
    /**
     * Get swiftCode value
     * @return string|null
     */
    public function getSwiftCode(): ?string
    {
        return $this->swiftCode;
    }
    /**
     * Set swiftCode value
     * @param string $swiftCode
     * @return \Pggns\MidocoApi\Order\StructType\AccountNumberBankNumber
     */
    public function setSwiftCode(?string $swiftCode = null): self
    {
        // validation for constraint: string
        if (!is_null($swiftCode) && !is_string($swiftCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($swiftCode, true), gettype($swiftCode)), __LINE__);
        }
        $this->swiftCode = $swiftCode;
        
        return $this;
    }
}
