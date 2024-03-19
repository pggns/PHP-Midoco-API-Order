<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoListenerType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoListenerType extends AbstractStructBase
{
    /**
     * The listener
     * @var string|null
     */
    protected ?string $listener = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoListenerType
     * @uses MidocoListenerType::setListener()
     * @uses MidocoListenerType::setDescription()
     * @param string $listener
     * @param string $description
     */
    public function __construct(?string $listener = null, ?string $description = null)
    {
        $this
            ->setListener($listener)
            ->setDescription($description);
    }
    /**
     * Get listener value
     * @return string|null
     */
    public function getListener(): ?string
    {
        return $this->listener;
    }
    /**
     * Set listener value
     * @param string $listener
     * @return \Pggns\MidocoApi\Order\StructType\MidocoListenerType
     */
    public function setListener(?string $listener = null): self
    {
        // validation for constraint: string
        if (!is_null($listener) && !is_string($listener)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listener, true), gettype($listener)), __LINE__);
        }
        $this->listener = $listener;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoListenerType
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
