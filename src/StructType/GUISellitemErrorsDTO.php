<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GUISellitemErrorsDTO StructType
 * @subpackage Structs
 */
class GUISellitemErrorsDTO extends AbstractStructBase
{
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The errorMessage
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * Constructor method for GUISellitemErrorsDTO
     * @uses GUISellitemErrorsDTO::setCategory()
     * @uses GUISellitemErrorsDTO::setErrorMessage()
     * @param string $category
     * @param string $errorMessage
     */
    public function __construct(?string $category = null, ?string $errorMessage = null)
    {
        $this
            ->setCategory($category)
            ->setErrorMessage($errorMessage);
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
     * @return \Pggns\MidocoApi\Order\StructType\GUISellitemErrorsDTO
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
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \Pggns\MidocoApi\Order\StructType\GUISellitemErrorsDTO
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
}
