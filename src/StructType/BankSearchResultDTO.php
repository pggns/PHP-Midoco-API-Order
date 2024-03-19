<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankSearchResultDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BankSearchResultDTO extends AbstractStructBase
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
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * Constructor method for BankSearchResultDTO
     * @uses BankSearchResultDTO::setBankName()
     * @uses BankSearchResultDTO::setBankNumber()
     * @uses BankSearchResultDTO::setCity()
     * @param string $bankName
     * @param string $bankNumber
     * @param string $city
     */
    public function __construct(?string $bankName = null, ?string $bankNumber = null, ?string $city = null)
    {
        $this
            ->setBankName($bankName)
            ->setBankNumber($bankNumber)
            ->setCity($city);
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
     * @return \Pggns\MidocoApi\Order\StructType\BankSearchResultDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\BankSearchResultDTO
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
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Order\StructType\BankSearchResultDTO
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
}
