<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerErrorDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CustomerErrorDTO extends AbstractStructBase
{
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The errorBundle
     * @var string|null
     */
    protected ?string $errorBundle = null;
    /**
     * The errorCode
     * @var string|null
     */
    protected ?string $errorCode = null;
    /**
     * The errorParameters
     * @var string|null
     */
    protected ?string $errorParameters = null;
    /**
     * Constructor method for CustomerErrorDTO
     * @uses CustomerErrorDTO::setCategory()
     * @uses CustomerErrorDTO::setCustomerId()
     * @uses CustomerErrorDTO::setErrorBundle()
     * @uses CustomerErrorDTO::setErrorCode()
     * @uses CustomerErrorDTO::setErrorParameters()
     * @param string $category
     * @param int $customerId
     * @param string $errorBundle
     * @param string $errorCode
     * @param string $errorParameters
     */
    public function __construct(?string $category = null, ?int $customerId = null, ?string $errorBundle = null, ?string $errorCode = null, ?string $errorParameters = null)
    {
        $this
            ->setCategory($category)
            ->setCustomerId($customerId)
            ->setErrorBundle($errorBundle)
            ->setErrorCode($errorCode)
            ->setErrorParameters($errorParameters);
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Order\StructType\CustomerErrorDTO
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\CustomerErrorDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get errorBundle value
     * @return string|null
     */
    public function getErrorBundle(): ?string
    {
        return $this->errorBundle;
    }
    /**
     * Set errorBundle value
     * @param string $errorBundle
     * @return \Pggns\MidocoApi\Order\StructType\CustomerErrorDTO
     */
    public function setErrorBundle(?string $errorBundle = null): self
    {
        // validation for constraint: string
        if (!is_null($errorBundle) && !is_string($errorBundle)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorBundle, true), gettype($errorBundle)), __LINE__);
        }
        $this->errorBundle = $errorBundle;
        
        return $this;
    }
    /**
     * Get errorCode value
     * @return string|null
     */
    public function getErrorCode(): ?string
    {
        return $this->errorCode;
    }
    /**
     * Set errorCode value
     * @param string $errorCode
     * @return \Pggns\MidocoApi\Order\StructType\CustomerErrorDTO
     */
    public function setErrorCode(?string $errorCode = null): self
    {
        // validation for constraint: string
        if (!is_null($errorCode) && !is_string($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->errorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get errorParameters value
     * @return string|null
     */
    public function getErrorParameters(): ?string
    {
        return $this->errorParameters;
    }
    /**
     * Set errorParameters value
     * @param string $errorParameters
     * @return \Pggns\MidocoApi\Order\StructType\CustomerErrorDTO
     */
    public function setErrorParameters(?string $errorParameters = null): self
    {
        // validation for constraint: string
        if (!is_null($errorParameters) && !is_string($errorParameters)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorParameters, true), gettype($errorParameters)), __LINE__);
        }
        $this->errorParameters = $errorParameters;
        
        return $this;
    }
}
