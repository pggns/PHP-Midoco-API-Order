<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CcproxyHandlerDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CcproxyHandlerDTO extends AbstractStructBase
{
    /**
     * The handlerId
     * @var string|null
     */
    protected ?string $handlerId = null;
    /**
     * The handlerType
     * @var string|null
     */
    protected ?string $handlerType = null;
    /**
     * Constructor method for CcproxyHandlerDTO
     * @uses CcproxyHandlerDTO::setHandlerId()
     * @uses CcproxyHandlerDTO::setHandlerType()
     * @param string $handlerId
     * @param string $handlerType
     */
    public function __construct(?string $handlerId = null, ?string $handlerType = null)
    {
        $this
            ->setHandlerId($handlerId)
            ->setHandlerType($handlerType);
    }
    /**
     * Get handlerId value
     * @return string|null
     */
    public function getHandlerId(): ?string
    {
        return $this->handlerId;
    }
    /**
     * Set handlerId value
     * @param string $handlerId
     * @return \Pggns\MidocoApi\Order\StructType\CcproxyHandlerDTO
     */
    public function setHandlerId(?string $handlerId = null): self
    {
        // validation for constraint: string
        if (!is_null($handlerId) && !is_string($handlerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handlerId, true), gettype($handlerId)), __LINE__);
        }
        $this->handlerId = $handlerId;
        
        return $this;
    }
    /**
     * Get handlerType value
     * @return string|null
     */
    public function getHandlerType(): ?string
    {
        return $this->handlerType;
    }
    /**
     * Set handlerType value
     * @param string $handlerType
     * @return \Pggns\MidocoApi\Order\StructType\CcproxyHandlerDTO
     */
    public function setHandlerType(?string $handlerType = null): self
    {
        // validation for constraint: string
        if (!is_null($handlerType) && !is_string($handlerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($handlerType, true), gettype($handlerType)), __LINE__);
        }
        $this->handlerType = $handlerType;
        
        return $this;
    }
}
