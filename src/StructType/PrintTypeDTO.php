<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintTypeDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintTypeDTO extends AbstractStructBase
{
    /**
     * The channel
     * @var int|null
     */
    protected ?int $channel = null;
    /**
     * The handler
     * @var string|null
     */
    protected ?string $handler = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The typeId
     * @var string|null
     */
    protected ?string $typeId = null;
    /**
     * Constructor method for PrintTypeDTO
     * @uses PrintTypeDTO::setChannel()
     * @uses PrintTypeDTO::setHandler()
     * @uses PrintTypeDTO::setName()
     * @uses PrintTypeDTO::setTypeId()
     * @param int $channel
     * @param string $handler
     * @param string $name
     * @param string $typeId
     */
    public function __construct(?int $channel = null, ?string $handler = null, ?string $name = null, ?string $typeId = null)
    {
        $this
            ->setChannel($channel)
            ->setHandler($handler)
            ->setName($name)
            ->setTypeId($typeId);
    }
    /**
     * Get channel value
     * @return int|null
     */
    public function getChannel(): ?int
    {
        return $this->channel;
    }
    /**
     * Set channel value
     * @param int $channel
     * @return \Pggns\MidocoApi\Order\StructType\PrintTypeDTO
     */
    public function setChannel(?int $channel = null): self
    {
        // validation for constraint: int
        if (!is_null($channel) && !(is_int($channel) || ctype_digit($channel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($channel, true), gettype($channel)), __LINE__);
        }
        $this->channel = $channel;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintTypeDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintTypeDTO
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
     * Get typeId value
     * @return string|null
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param string $typeId
     * @return \Pggns\MidocoApi\Order\StructType\PrintTypeDTO
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;
        
        return $this;
    }
}
