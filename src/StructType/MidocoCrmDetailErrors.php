<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmDetailErrors StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmDetailErrors extends AbstractStructBase
{
    /**
     * The customerId
     * @var string|null
     */
    protected ?string $customerId = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * Constructor method for MidocoCrmDetailErrors
     * @uses MidocoCrmDetailErrors::setCustomerId()
     * @uses MidocoCrmDetailErrors::setDescription()
     * @param string $customerId
     * @param string $description
     */
    public function __construct(?string $customerId = null, ?string $description = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setDescription($description);
    }
    /**
     * Get customerId value
     * @return string|null
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param string $customerId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmDetailErrors
     */
    public function setCustomerId(?string $customerId = null): self
    {
        // validation for constraint: string
        if (!is_null($customerId) && !is_string($customerId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmDetailErrors
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
