<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OrderLayoutOrgunitDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class OrderLayoutOrgunitDTO extends AbstractStructBase
{
    /**
     * The asNeighbor
     * @var bool|null
     */
    protected ?bool $asNeighbor = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The notAllowedUnit
     * @var string|null
     */
    protected ?string $notAllowedUnit = null;
    /**
     * Constructor method for OrderLayoutOrgunitDTO
     * @uses OrderLayoutOrgunitDTO::setAsNeighbor()
     * @uses OrderLayoutOrgunitDTO::setId()
     * @uses OrderLayoutOrgunitDTO::setNotAllowedUnit()
     * @param bool $asNeighbor
     * @param int $id
     * @param string $notAllowedUnit
     */
    public function __construct(?bool $asNeighbor = null, ?int $id = null, ?string $notAllowedUnit = null)
    {
        $this
            ->setAsNeighbor($asNeighbor)
            ->setId($id)
            ->setNotAllowedUnit($notAllowedUnit);
    }
    /**
     * Get asNeighbor value
     * @return bool|null
     */
    public function getAsNeighbor(): ?bool
    {
        return $this->asNeighbor;
    }
    /**
     * Set asNeighbor value
     * @param bool $asNeighbor
     * @return \Pggns\MidocoApi\Order\StructType\OrderLayoutOrgunitDTO
     */
    public function setAsNeighbor(?bool $asNeighbor = null): self
    {
        // validation for constraint: boolean
        if (!is_null($asNeighbor) && !is_bool($asNeighbor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($asNeighbor, true), gettype($asNeighbor)), __LINE__);
        }
        $this->asNeighbor = $asNeighbor;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\OrderLayoutOrgunitDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get notAllowedUnit value
     * @return string|null
     */
    public function getNotAllowedUnit(): ?string
    {
        return $this->notAllowedUnit;
    }
    /**
     * Set notAllowedUnit value
     * @param string $notAllowedUnit
     * @return \Pggns\MidocoApi\Order\StructType\OrderLayoutOrgunitDTO
     */
    public function setNotAllowedUnit(?string $notAllowedUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($notAllowedUnit) && !is_string($notAllowedUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notAllowedUnit, true), gettype($notAllowedUnit)), __LINE__);
        }
        $this->notAllowedUnit = $notAllowedUnit;
        
        return $this;
    }
}
