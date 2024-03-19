<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoMediatorDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoMediatorDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The mediatorType
     * @var string|null
     */
    protected ?string $mediatorType = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoMediatorDTO
     * @uses MidocoMediatorDTO::setCustomerId()
     * @uses MidocoMediatorDTO::setMediatorId()
     * @uses MidocoMediatorDTO::setMediatorType()
     * @uses MidocoMediatorDTO::setDescription()
     * @param int $customerId
     * @param string $mediatorId
     * @param string $mediatorType
     * @param string $description
     */
    public function __construct(?int $customerId = null, ?string $mediatorId = null, ?string $mediatorType = null, ?string $description = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setMediatorId($mediatorId)
            ->setMediatorType($mediatorType)
            ->setDescription($description);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorDTO
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get mediatorType value
     * @return string|null
     */
    public function getMediatorType(): ?string
    {
        return $this->mediatorType;
    }
    /**
     * Set mediatorType value
     * @param string $mediatorType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorDTO
     */
    public function setMediatorType(?string $mediatorType = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorType) && !is_string($mediatorType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorType, true), gettype($mediatorType)), __LINE__);
        }
        $this->mediatorType = $mediatorType;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorDTO
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
