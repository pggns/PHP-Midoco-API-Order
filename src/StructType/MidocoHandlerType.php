<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoHandlerType StructType
 * @subpackage Structs
 */
class MidocoHandlerType extends AbstractStructBase
{
    /**
     * The handler
     * @var string|null
     */
    protected ?string $handler = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoHandlerType
     * @uses MidocoHandlerType::setHandler()
     * @uses MidocoHandlerType::setDescription()
     * @param string $handler
     * @param string $description
     */
    public function __construct(?string $handler = null, ?string $description = null)
    {
        $this
            ->setHandler($handler)
            ->setDescription($description);
    }
    /**
     * Get handler value
     * @return string|null
     */
    public function getHandler(): ?string
    {
        return $this->handler;
    }
    /**
     * Set handler value
     * @param string $handler
     * @return \Pggns\MidocoApi\Order\StructType\MidocoHandlerType
     */
    public function setHandler(?string $handler = null): self
    {
        // validation for constraint: string
        if (!is_null($handler) && !is_string($handler)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handler, true), gettype($handler)), __LINE__);
        }
        $this->handler = $handler;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoHandlerType
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
}
