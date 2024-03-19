<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AddressTypeDTO extends AbstractStructBase
{
    /**
     * The addressTypeId
     * @var int|null
     */
    protected ?int $addressTypeId = null;
    /**
     * Constructor method for AddressTypeDTO
     * @uses AddressTypeDTO::setAddressTypeId()
     * @param int $addressTypeId
     */
    public function __construct(?int $addressTypeId = null)
    {
        $this
            ->setAddressTypeId($addressTypeId);
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
     * @return \Pggns\MidocoApi\Order\StructType\AddressTypeDTO
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
}
