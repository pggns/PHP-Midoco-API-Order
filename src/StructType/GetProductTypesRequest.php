<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductTypesRequest StructType
 * @subpackage Structs
 */
class GetProductTypesRequest extends AbstractStructBase
{
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The forPerson
     * @var bool|null
     */
    protected ?bool $forPerson = null;
    /**
     * The forCompany
     * @var bool|null
     */
    protected ?bool $forCompany = null;
    /**
     * Constructor method for GetProductTypesRequest
     * @uses GetProductTypesRequest::setProductType()
     * @uses GetProductTypesRequest::setForPerson()
     * @uses GetProductTypesRequest::setForCompany()
     * @param string $productType
     * @param bool $forPerson
     * @param bool $forCompany
     */
    public function __construct(?string $productType = null, ?bool $forPerson = null, ?bool $forCompany = null)
    {
        $this
            ->setProductType($productType)
            ->setForPerson($forPerson)
            ->setForCompany($forCompany);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetProductTypesRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetProductTypesRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetProductTypesRequest
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
}
