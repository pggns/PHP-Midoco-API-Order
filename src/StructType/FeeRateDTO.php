<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FeeRateDTO StructType
 * @subpackage Structs
 */
class FeeRateDTO extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The pricePerMinute
     * @var float|null
     */
    protected ?float $pricePerMinute = null;
    /**
     * Constructor method for FeeRateDTO
     * @uses FeeRateDTO::setCustomerId()
     * @uses FeeRateDTO::setName()
     * @uses FeeRateDTO::setPricePerMinute()
     * @param int $customerId
     * @param string $name
     * @param float $pricePerMinute
     */
    public function __construct(?int $customerId = null, ?string $name = null, ?float $pricePerMinute = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setName($name)
            ->setPricePerMinute($pricePerMinute);
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeRateDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\FeeRateDTO
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
     * Get pricePerMinute value
     * @return float|null
     */
    public function getPricePerMinute(): ?float
    {
        return $this->pricePerMinute;
    }
    /**
     * Set pricePerMinute value
     * @param float $pricePerMinute
     * @return \Pggns\MidocoApi\Order\StructType\FeeRateDTO
     */
    public function setPricePerMinute(?float $pricePerMinute = null): self
    {
        // validation for constraint: float
        if (!is_null($pricePerMinute) && !(is_float($pricePerMinute) || is_numeric($pricePerMinute))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($pricePerMinute, true), gettype($pricePerMinute)), __LINE__);
        }
        $this->pricePerMinute = $pricePerMinute;
        
        return $this;
    }
}
