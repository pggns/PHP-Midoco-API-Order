<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuranceTariffDescDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class InsuranceTariffDescDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The insuranceTariffId
     * @var int|null
     */
    protected ?int $insuranceTariffId = null;
    /**
     * The languageCode
     * @var string|null
     */
    protected ?string $languageCode = null;
    /**
     * Constructor method for InsuranceTariffDescDTO
     * @uses InsuranceTariffDescDTO::setDescription()
     * @uses InsuranceTariffDescDTO::setInsuranceTariffId()
     * @uses InsuranceTariffDescDTO::setLanguageCode()
     * @param string $description
     * @param int $insuranceTariffId
     * @param string $languageCode
     */
    public function __construct(?string $description = null, ?int $insuranceTariffId = null, ?string $languageCode = null)
    {
        $this
            ->setDescription($description)
            ->setInsuranceTariffId($insuranceTariffId)
            ->setLanguageCode($languageCode);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDescDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get insuranceTariffId value
     * @return int|null
     */
    public function getInsuranceTariffId(): ?int
    {
        return $this->insuranceTariffId;
    }
    /**
     * Set insuranceTariffId value
     * @param int $insuranceTariffId
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDescDTO
     */
    public function setInsuranceTariffId(?int $insuranceTariffId = null): self
    {
        // validation for constraint: int
        if (!is_null($insuranceTariffId) && !(is_int($insuranceTariffId) || ctype_digit($insuranceTariffId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($insuranceTariffId, true), gettype($insuranceTariffId)), __LINE__);
        }
        $this->insuranceTariffId = $insuranceTariffId;
        
        return $this;
    }
    /**
     * Get languageCode value
     * @return string|null
     */
    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }
    /**
     * Set languageCode value
     * @param string $languageCode
     * @return \Pggns\MidocoApi\Order\StructType\InsuranceTariffDescDTO
     */
    public function setLanguageCode(?string $languageCode = null): self
    {
        // validation for constraint: string
        if (!is_null($languageCode) && !is_string($languageCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($languageCode, true), gettype($languageCode)), __LINE__);
        }
        $this->languageCode = $languageCode;
        
        return $this;
    }
}
