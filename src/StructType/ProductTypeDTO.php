<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProductTypeDTO extends AbstractStructBase
{
    /**
     * The accountIdNoVat
     * @var string|null
     */
    protected ?string $accountIdNoVat = null;
    /**
     * The accountIdVat
     * @var string|null
     */
    protected ?string $accountIdVat = null;
    /**
     * The forCompany
     * @var bool|null
     */
    protected ?bool $forCompany = null;
    /**
     * The forPerson
     * @var bool|null
     */
    protected ?bool $forPerson = null;
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The vatDivTemplIdIn
     * @var int|null
     */
    protected ?int $vatDivTemplIdIn = null;
    /**
     * The vatDivTemplIdOut
     * @var int|null
     */
    protected ?int $vatDivTemplIdOut = null;
    /**
     * The vatDivisionInRequired
     * @var bool|null
     */
    protected ?bool $vatDivisionInRequired = null;
    /**
     * The vatDivisionOutRequired
     * @var bool|null
     */
    protected ?bool $vatDivisionOutRequired = null;
    /**
     * The vatSchemaId
     * @var int|null
     */
    protected ?int $vatSchemaId = null;
    /**
     * Constructor method for ProductTypeDTO
     * @uses ProductTypeDTO::setAccountIdNoVat()
     * @uses ProductTypeDTO::setAccountIdVat()
     * @uses ProductTypeDTO::setForCompany()
     * @uses ProductTypeDTO::setForPerson()
     * @uses ProductTypeDTO::setProductType()
     * @uses ProductTypeDTO::setVatDivTemplIdIn()
     * @uses ProductTypeDTO::setVatDivTemplIdOut()
     * @uses ProductTypeDTO::setVatDivisionInRequired()
     * @uses ProductTypeDTO::setVatDivisionOutRequired()
     * @uses ProductTypeDTO::setVatSchemaId()
     * @param string $accountIdNoVat
     * @param string $accountIdVat
     * @param bool $forCompany
     * @param bool $forPerson
     * @param string $productType
     * @param int $vatDivTemplIdIn
     * @param int $vatDivTemplIdOut
     * @param bool $vatDivisionInRequired
     * @param bool $vatDivisionOutRequired
     * @param int $vatSchemaId
     */
    public function __construct(?string $accountIdNoVat = null, ?string $accountIdVat = null, ?bool $forCompany = null, ?bool $forPerson = null, ?string $productType = null, ?int $vatDivTemplIdIn = null, ?int $vatDivTemplIdOut = null, ?bool $vatDivisionInRequired = null, ?bool $vatDivisionOutRequired = null, ?int $vatSchemaId = null)
    {
        $this
            ->setAccountIdNoVat($accountIdNoVat)
            ->setAccountIdVat($accountIdVat)
            ->setForCompany($forCompany)
            ->setForPerson($forPerson)
            ->setProductType($productType)
            ->setVatDivTemplIdIn($vatDivTemplIdIn)
            ->setVatDivTemplIdOut($vatDivTemplIdOut)
            ->setVatDivisionInRequired($vatDivisionInRequired)
            ->setVatDivisionOutRequired($vatDivisionOutRequired)
            ->setVatSchemaId($vatSchemaId);
    }
    /**
     * Get accountIdNoVat value
     * @return string|null
     */
    public function getAccountIdNoVat(): ?string
    {
        return $this->accountIdNoVat;
    }
    /**
     * Set accountIdNoVat value
     * @param string $accountIdNoVat
     * @return \Pggns\MidocoApi\Order\StructType\ProductTypeDTO
     */
    public function setAccountIdNoVat(?string $accountIdNoVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdNoVat) && !is_string($accountIdNoVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdNoVat, true), gettype($accountIdNoVat)), __LINE__);
        }
        $this->accountIdNoVat = $accountIdNoVat;
        
        return $this;
    }
    /**
     * Get accountIdVat value
     * @return string|null
     */
    public function getAccountIdVat(): ?string
    {
        return $this->accountIdVat;
    }
    /**
     * Set accountIdVat value
     * @param string $accountIdVat
     * @return \Pggns\MidocoApi\Order\StructType\ProductTypeDTO
     */
    public function setAccountIdVat(?string $accountIdVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdVat) && !is_string($accountIdVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdVat, true), gettype($accountIdVat)), __LINE__);
        }
        $this->accountIdVat = $accountIdVat;
        
        return $this;
    }
    /**
     * Get forCompany value
     * @return bool|null
     */
    public function getForCompany(): ?bool
    {
        return $this->forCompany;
    }
    /**
     * Set forCompany value
     * @param bool $forCompany
     * @return \Pggns\MidocoApi\Order\StructType\ProductTypeDTO
     */
    public function setForCompany(?bool $forCompany = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forCompany) && !is_bool($forCompany)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forCompany, true), gettype($forCompany)), __LINE__);
        }
        $this->forCompany = $forCompany;
        
        return $this;
    }
    /**
     * Get forPerson value
     * @return bool|null
     */
    public function getForPerson(): ?bool
    {
        return $this->forPerson;
    }
    /**
     * Set forPerson value
     * @param bool $forPerson
     * @return \Pggns\MidocoApi\Order\StructType\ProductTypeDTO
     */
    public function setForPerson(?bool $forPerson = null): self
    {
        // validation for constraint: boolean
        if (!is_null($forPerson) && !is_bool($forPerson)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($forPerson, true), gettype($forPerson)), __LINE__);
        }
        $this->forPerson = $forPerson;
        
        return $this;
    }
    /**
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Pggns\MidocoApi\Order\StructType\ProductTypeDTO
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get vatDivTemplIdIn value
     * @return int|null
     */
    public function getVatDivTemplIdIn(): ?int
    {
        return $this->vatDivTemplIdIn;
    }
    /**
     * Set vatDivTemplIdIn value
     * @param int $vatDivTemplIdIn
     * @return \Pggns\MidocoApi\Order\StructType\ProductTypeDTO
     */
    public function setVatDivTemplIdIn(?int $vatDivTemplIdIn = null): self
    {
        // validation for constraint: int
        if (!is_null($vatDivTemplIdIn) && !(is_int($vatDivTemplIdIn) || ctype_digit($vatDivTemplIdIn))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatDivTemplIdIn, true), gettype($vatDivTemplIdIn)), __LINE__);
        }
        $this->vatDivTemplIdIn = $vatDivTemplIdIn;
        
        return $this;
    }
    /**
     * Get vatDivTemplIdOut value
     * @return int|null
     */
    public function getVatDivTemplIdOut(): ?int
    {
        return $this->vatDivTemplIdOut;
    }
    /**
     * Set vatDivTemplIdOut value
     * @param int $vatDivTemplIdOut
     * @return \Pggns\MidocoApi\Order\StructType\ProductTypeDTO
     */
    public function setVatDivTemplIdOut(?int $vatDivTemplIdOut = null): self
    {
        // validation for constraint: int
        if (!is_null($vatDivTemplIdOut) && !(is_int($vatDivTemplIdOut) || ctype_digit($vatDivTemplIdOut))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatDivTemplIdOut, true), gettype($vatDivTemplIdOut)), __LINE__);
        }
        $this->vatDivTemplIdOut = $vatDivTemplIdOut;
        
        return $this;
    }
    /**
     * Get vatDivisionInRequired value
     * @return bool|null
     */
    public function getVatDivisionInRequired(): ?bool
    {
        return $this->vatDivisionInRequired;
    }
    /**
     * Set vatDivisionInRequired value
     * @param bool $vatDivisionInRequired
     * @return \Pggns\MidocoApi\Order\StructType\ProductTypeDTO
     */
    public function setVatDivisionInRequired(?bool $vatDivisionInRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vatDivisionInRequired) && !is_bool($vatDivisionInRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatDivisionInRequired, true), gettype($vatDivisionInRequired)), __LINE__);
        }
        $this->vatDivisionInRequired = $vatDivisionInRequired;
        
        return $this;
    }
    /**
     * Get vatDivisionOutRequired value
     * @return bool|null
     */
    public function getVatDivisionOutRequired(): ?bool
    {
        return $this->vatDivisionOutRequired;
    }
    /**
     * Set vatDivisionOutRequired value
     * @param bool $vatDivisionOutRequired
     * @return \Pggns\MidocoApi\Order\StructType\ProductTypeDTO
     */
    public function setVatDivisionOutRequired(?bool $vatDivisionOutRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($vatDivisionOutRequired) && !is_bool($vatDivisionOutRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vatDivisionOutRequired, true), gettype($vatDivisionOutRequired)), __LINE__);
        }
        $this->vatDivisionOutRequired = $vatDivisionOutRequired;
        
        return $this;
    }
    /**
     * Get vatSchemaId value
     * @return int|null
     */
    public function getVatSchemaId(): ?int
    {
        return $this->vatSchemaId;
    }
    /**
     * Set vatSchemaId value
     * @param int $vatSchemaId
     * @return \Pggns\MidocoApi\Order\StructType\ProductTypeDTO
     */
    public function setVatSchemaId(?int $vatSchemaId = null): self
    {
        // validation for constraint: int
        if (!is_null($vatSchemaId) && !(is_int($vatSchemaId) || ctype_digit($vatSchemaId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($vatSchemaId, true), gettype($vatSchemaId)), __LINE__);
        }
        $this->vatSchemaId = $vatSchemaId;
        
        return $this;
    }
}
