<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressTypeDescriptionDTO StructType
 * @subpackage Structs
 */
class AddressTypeDescriptionDTO extends AbstractStructBase
{
    /**
     * The addressTypeId
     * @var int|null
     */
    protected ?int $addressTypeId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The locale
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * Constructor method for AddressTypeDescriptionDTO
     * @uses AddressTypeDescriptionDTO::setAddressTypeId()
     * @uses AddressTypeDescriptionDTO::setDescription()
     * @uses AddressTypeDescriptionDTO::setLocale()
     * @param int $addressTypeId
     * @param string $description
     * @param string $locale
     */
    public function __construct(?int $addressTypeId = null, ?string $description = null, ?string $locale = null)
    {
        $this
            ->setAddressTypeId($addressTypeId)
            ->setDescription($description)
            ->setLocale($locale);
    }
    /**
     * Get addressTypeId value
     * @return int|null
     */
    public function getAddressTypeId(): ?int
    {
        return $this->addressTypeId;
    }
    /**
     * Set addressTypeId value
     * @param int $addressTypeId
     * @return \Pggns\MidocoApi\Order\StructType\AddressTypeDescriptionDTO
     */
    public function setAddressTypeId(?int $addressTypeId = null): self
    {
        // validation for constraint: int
        if (!is_null($addressTypeId) && !(is_int($addressTypeId) || ctype_digit($addressTypeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressTypeId, true), gettype($addressTypeId)), __LINE__);
        }
        $this->addressTypeId = $addressTypeId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\AddressTypeDescriptionDTO
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
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \Pggns\MidocoApi\Order\StructType\AddressTypeDescriptionDTO
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
}
