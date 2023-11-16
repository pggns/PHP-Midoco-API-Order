<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CultureDTO StructType
 * @subpackage Structs
 */
class CultureDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The isCustomerLanguage
     * @var bool|null
     */
    protected ?bool $isCustomerLanguage = null;
    /**
     * The isLoginLanguage
     * @var bool|null
     */
    protected ?bool $isLoginLanguage = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * Constructor method for CultureDTO
     * @uses CultureDTO::setCultureId()
     * @uses CultureDTO::setIsCustomerLanguage()
     * @uses CultureDTO::setIsLoginLanguage()
     * @uses CultureDTO::setName()
     * @param string $cultureId
     * @param bool $isCustomerLanguage
     * @param bool $isLoginLanguage
     * @param string $name
     */
    public function __construct(?string $cultureId = null, ?bool $isCustomerLanguage = null, ?bool $isLoginLanguage = null, ?string $name = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setIsCustomerLanguage($isCustomerLanguage)
            ->setIsLoginLanguage($isLoginLanguage)
            ->setName($name);
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\CultureDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get isCustomerLanguage value
     * @return bool|null
     */
    public function getIsCustomerLanguage(): ?bool
    {
        return $this->isCustomerLanguage;
    }
    /**
     * Set isCustomerLanguage value
     * @param bool $isCustomerLanguage
     * @return \Pggns\MidocoApi\Order\StructType\CultureDTO
     */
    public function setIsCustomerLanguage(?bool $isCustomerLanguage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCustomerLanguage) && !is_bool($isCustomerLanguage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCustomerLanguage, true), gettype($isCustomerLanguage)), __LINE__);
        }
        $this->isCustomerLanguage = $isCustomerLanguage;
        
        return $this;
    }
    /**
     * Get isLoginLanguage value
     * @return bool|null
     */
    public function getIsLoginLanguage(): ?bool
    {
        return $this->isLoginLanguage;
    }
    /**
     * Set isLoginLanguage value
     * @param bool $isLoginLanguage
     * @return \Pggns\MidocoApi\Order\StructType\CultureDTO
     */
    public function setIsLoginLanguage(?bool $isLoginLanguage = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isLoginLanguage) && !is_bool($isLoginLanguage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isLoginLanguage, true), gettype($isLoginLanguage)), __LINE__);
        }
        $this->isLoginLanguage = $isLoginLanguage;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CultureDTO
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
}
