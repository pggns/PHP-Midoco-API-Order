<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankNumberDTO StructType
 * @subpackage Structs
 */
class BankNumberDTO extends AbstractStructBase
{
    /**
     * The bankName
     * @var string|null
     */
    protected ?string $bankName = null;
    /**
     * The bankNumber
     * @var string|null
     */
    protected ?string $bankNumber = null;
    /**
     * The countryId
     * @var string|null
     */
    protected ?string $countryId = null;
    /**
     * The swiftCode
     * @var string|null
     */
    protected ?string $swiftCode = null;
    /**
     * The testAlgorithm
     * @var string|null
     */
    protected ?string $testAlgorithm = null;
    /**
     * Constructor method for BankNumberDTO
     * @uses BankNumberDTO::setBankName()
     * @uses BankNumberDTO::setBankNumber()
     * @uses BankNumberDTO::setCountryId()
     * @uses BankNumberDTO::setSwiftCode()
     * @uses BankNumberDTO::setTestAlgorithm()
     * @param string $bankName
     * @param string $bankNumber
     * @param string $countryId
     * @param string $swiftCode
     * @param string $testAlgorithm
     */
    public function __construct(?string $bankName = null, ?string $bankNumber = null, ?string $countryId = null, ?string $swiftCode = null, ?string $testAlgorithm = null)
    {
        $this
            ->setBankName($bankName)
            ->setBankNumber($bankNumber)
            ->setCountryId($countryId)
            ->setSwiftCode($swiftCode)
            ->setTestAlgorithm($testAlgorithm);
    }
    /**
     * Get bankName value
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }
    /**
     * Set bankName value
     * @param string $bankName
     * @return \Pggns\MidocoApi\Order\StructType\BankNumberDTO
     */
    public function setBankName(?string $bankName = null): self
    {
        // validation for constraint: string
        if (!is_null($bankName) && !is_string($bankName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankName, true), gettype($bankName)), __LINE__);
        }
        $this->bankName = $bankName;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankNumberDTO
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
     * Get countryId value
     * @return string|null
     */
    public function getCountryId(): ?string
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param string $countryId
     * @return \Pggns\MidocoApi\Order\StructType\BankNumberDTO
     */
    public function setCountryId(?string $countryId = null): self
    {
        // validation for constraint: string
        if (!is_null($countryId) && !is_string($countryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryId, true), gettype($countryId)), __LINE__);
        }
        $this->countryId = $countryId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankNumberDTO
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
    /**
     * Get testAlgorithm value
     * @return string|null
     */
    public function getTestAlgorithm(): ?string
    {
        return $this->testAlgorithm;
    }
    /**
     * Set testAlgorithm value
     * @param string $testAlgorithm
     * @return \Pggns\MidocoApi\Order\StructType\BankNumberDTO
     */
    public function setTestAlgorithm(?string $testAlgorithm = null): self
    {
        // validation for constraint: string
        if (!is_null($testAlgorithm) && !is_string($testAlgorithm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($testAlgorithm, true), gettype($testAlgorithm)), __LINE__);
        }
        $this->testAlgorithm = $testAlgorithm;
        
        return $this;
    }
}
