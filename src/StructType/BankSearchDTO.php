<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BankSearchDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BankSearchDTO extends AbstractStructBase
{
    /**
     * The bankName
     * @var string|null
     */
    protected ?string $bankName = null;
    /**
     * The countryId
     * @var int|null
     */
    protected ?int $countryId = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * Constructor method for BankSearchDTO
     * @uses BankSearchDTO::setBankName()
     * @uses BankSearchDTO::setCountryId()
     * @uses BankSearchDTO::setCity()
     * @param string $bankName
     * @param int $countryId
     * @param string $city
     */
    public function __construct(?string $bankName = null, ?int $countryId = null, ?string $city = null)
    {
        $this
            ->setBankName($bankName)
            ->setCountryId($countryId)
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
     * @return \Pggns\MidocoApi\Order\StructType\BankSearchDTO
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
     * Get countryId value
     * @return int|null
     */
    public function getCountryId(): ?int
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param int $countryId
     * @return \Pggns\MidocoApi\Order\StructType\BankSearchDTO
     */
    public function setCountryId(?int $countryId = null): self
    {
        // validation for constraint: int
        if (!is_null($countryId) && !(is_int($countryId) || ctype_digit($countryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countryId, true), gettype($countryId)), __LINE__);
        }
        $this->countryId = $countryId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\BankSearchDTO
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
