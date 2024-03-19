<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmAddress StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmAddress extends CrmAddressDTO
{
    /**
     * The default
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $default = null;
    /**
     * Constructor method for MidocoCrmAddress
     * @uses MidocoCrmAddress::setDefault()
     * @param bool $default
     */
    public function __construct(?bool $default = false)
    {
        $this
            ->setDefault($default);
    }
    /**
     * Get default value
     * @return bool|null
     */
    public function getDefault(): ?bool
    {
        return $this->default;
    }
    /**
     * Set default value
     * @param bool $default
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmAddress
     */
    public function setDefault(?bool $default = false): self
    {
        // validation for constraint: boolean
        if (!is_null($default) && !is_bool($default)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($default, true), gettype($default)), __LINE__);
        }
        $this->default = $default;
        
        return $this;
    }
}
