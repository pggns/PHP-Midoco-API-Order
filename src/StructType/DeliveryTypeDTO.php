<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryTypeDTO StructType
 * @subpackage Structs
 */
class DeliveryTypeDTO extends AbstractStructBase
{
    /**
     * The deliveryTypeId
     * @var string|null
     */
    protected ?string $deliveryTypeId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for DeliveryTypeDTO
     * @uses DeliveryTypeDTO::setDeliveryTypeId()
     * @uses DeliveryTypeDTO::setDescription()
     * @param string $deliveryTypeId
     * @param string $description
     */
    public function __construct(?string $deliveryTypeId = null, ?string $description = null)
    {
        $this
            ->setDeliveryTypeId($deliveryTypeId)
            ->setDescription($description);
    }
    /**
     * Get deliveryTypeId value
     * @return string|null
     */
    public function getDeliveryTypeId(): ?string
    {
        return $this->deliveryTypeId;
    }
    /**
     * Set deliveryTypeId value
     * @param string $deliveryTypeId
     * @return \Pggns\MidocoApi\Order\StructType\DeliveryTypeDTO
     */
    public function setDeliveryTypeId(?string $deliveryTypeId = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryTypeId) && !is_string($deliveryTypeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryTypeId, true), gettype($deliveryTypeId)), __LINE__);
        }
        $this->deliveryTypeId = $deliveryTypeId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DeliveryTypeDTO
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
