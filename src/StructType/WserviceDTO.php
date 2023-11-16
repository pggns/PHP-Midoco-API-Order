<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WserviceDTO StructType
 * @subpackage Structs
 */
class WserviceDTO extends AbstractStructBase
{
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The wsgroup
     * @var string|null
     */
    protected ?string $wsgroup = null;
    /**
     * Constructor method for WserviceDTO
     * @uses WserviceDTO::setName()
     * @uses WserviceDTO::setWsgroup()
     * @param string $name
     * @param string $wsgroup
     */
    public function __construct(?string $name = null, ?string $wsgroup = null)
    {
        $this
            ->setName($name)
            ->setWsgroup($wsgroup);
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
     * @return \Pggns\MidocoApi\Order\StructType\WserviceDTO
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
    /**
     * Get wsgroup value
     * @return string|null
     */
    public function getWsgroup(): ?string
    {
        return $this->wsgroup;
    }
    /**
     * Set wsgroup value
     * @param string $wsgroup
     * @return \Pggns\MidocoApi\Order\StructType\WserviceDTO
     */
    public function setWsgroup(?string $wsgroup = null): self
    {
        // validation for constraint: string
        if (!is_null($wsgroup) && !is_string($wsgroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($wsgroup, true), gettype($wsgroup)), __LINE__);
        }
        $this->wsgroup = $wsgroup;
        
        return $this;
    }
}
