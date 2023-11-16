<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalSystemDTO StructType
 * @subpackage Structs
 */
class ExternalSystemDTO extends AbstractStructBase
{
    /**
     * The systemName
     * @var string|null
     */
    protected ?string $systemName = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for ExternalSystemDTO
     * @uses ExternalSystemDTO::setSystemName()
     * @uses ExternalSystemDTO::setType()
     * @param string $systemName
     * @param string $type
     */
    public function __construct(?string $systemName = null, ?string $type = null)
    {
        $this
            ->setSystemName($systemName)
            ->setType($type);
    }
    /**
     * Get systemName value
     * @return string|null
     */
    public function getSystemName(): ?string
    {
        return $this->systemName;
    }
    /**
     * Set systemName value
     * @param string $systemName
     * @return \Pggns\MidocoApi\Order\StructType\ExternalSystemDTO
     */
    public function setSystemName(?string $systemName = null): self
    {
        // validation for constraint: string
        if (!is_null($systemName) && !is_string($systemName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($systemName, true), gettype($systemName)), __LINE__);
        }
        $this->systemName = $systemName;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\ExternalSystemDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
