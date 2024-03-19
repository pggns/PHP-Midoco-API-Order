<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoImportDebitor StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoImportDebitor extends AbstractStructBase
{
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The accountNo
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The bankNo
     * @var string|null
     */
    protected ?string $bankNo = null;
    /**
     * The useAsDefault
     * @var string|null
     */
    protected ?string $useAsDefault = null;
    /**
     * The isIban
     * @var string|null
     */
    protected ?string $isIban = null;
    /**
     * The bankName
     * @var string|null
     */
    protected ?string $bankName = null;
    /**
     * Constructor method for MidocoImportDebitor
     * @uses MidocoImportDebitor::setCustomerId()
     * @uses MidocoImportDebitor::setCountry()
     * @uses MidocoImportDebitor::setAccountNo()
     * @uses MidocoImportDebitor::setBankNo()
     * @uses MidocoImportDebitor::setUseAsDefault()
     * @uses MidocoImportDebitor::setIsIban()
     * @uses MidocoImportDebitor::setBankName()
     * @param string $customerId
     * @param string $country
     * @param string $accountNo
     * @param string $bankNo
     * @param string $useAsDefault
     * @param string $isIban
     * @param string $bankName
     */
    public function __construct(?string $customerId = null, ?string $country = null, ?string $accountNo = null, ?string $bankNo = null, ?string $useAsDefault = null, ?string $isIban = null, ?string $bankName = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setCountry($country)
            ->setAccountNo($accountNo)
            ->setBankNo($bankNo)
            ->setUseAsDefault($useAsDefault)
            ->setIsIban($isIban)
            ->setBankName($bankName);
    }
    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor
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
     * Get useAsDefault value
     * @return string|null
     */
    public function getUseAsDefault(): ?string
    {
        return $this->useAsDefault;
    }
    /**
     * Set useAsDefault value
     * @param string $useAsDefault
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor
     */
    public function setUseAsDefault(?string $useAsDefault = null): self
    {
        // validation for constraint: string
        if (!is_null($useAsDefault) && !is_string($useAsDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($useAsDefault, true), gettype($useAsDefault)), __LINE__);
        }
        $this->useAsDefault = $useAsDefault;
        
        return $this;
    }
    /**
     * Get isIban value
     * @return string|null
     */
    public function getIsIban(): ?string
    {
        return $this->isIban;
    }
    /**
     * Set isIban value
     * @param string $isIban
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor
     */
    public function setIsIban(?string $isIban = null): self
    {
        // validation for constraint: string
        if (!is_null($isIban) && !is_string($isIban)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($isIban, true), gettype($isIban)), __LINE__);
        }
        $this->isIban = $isIban;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoImportDebitor
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
}
