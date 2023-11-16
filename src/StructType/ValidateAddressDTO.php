<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateAddressDTO StructType
 * @subpackage Structs
 */
class ValidateAddressDTO extends CrmAddressDTO
{
    /**
     * The validationId
     * @var string|null
     */
    protected ?string $validationId = null;
    /**
     * Constructor method for ValidateAddressDTO
     * @uses ValidateAddressDTO::setValidationId()
     * @param string $validationId
     */
    public function __construct(?string $validationId = null)
    {
        $this
            ->setValidationId($validationId);
    }
    /**
     * Get validationId value
     * @return string|null
     */
    public function getValidationId(): ?string
    {
        return $this->validationId;
    }
    /**
     * Set validationId value
     * @param string $validationId
     * @return \Pggns\MidocoApi\Order\StructType\ValidateAddressDTO
     */
    public function setValidationId(?string $validationId = null): self
    {
        // validation for constraint: string
        if (!is_null($validationId) && !is_string($validationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validationId, true), gettype($validationId)), __LINE__);
        }
        $this->validationId = $validationId;
        
        return $this;
    }
}
