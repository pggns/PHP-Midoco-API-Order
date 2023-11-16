<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryTypeDescriptionDTO StructType
 * @subpackage Structs
 */
class DeliveryTypeDescriptionDTO extends AbstractStructBase
{
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
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
     * Constructor method for DeliveryTypeDescriptionDTO
     * @uses DeliveryTypeDescriptionDTO::setCultureId()
     * @uses DeliveryTypeDescriptionDTO::setDeliveryTypeId()
     * @uses DeliveryTypeDescriptionDTO::setDescription()
     * @param string $cultureId
     * @param string $deliveryTypeId
     * @param string $description
     */
    public function __construct(?string $cultureId = null, ?string $deliveryTypeId = null, ?string $description = null)
    {
        $this
            ->setCultureId($cultureId)
            ->setDeliveryTypeId($deliveryTypeId)
            ->setDescription($description);
    }
    /**
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\DeliveryTypeDescriptionDTO
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\DeliveryTypeDescriptionDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DeliveryTypeDescriptionDTO
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
