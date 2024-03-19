<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOrderLayoutOrgunitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchOrderLayoutOrgunitRequest extends AbstractStructBase
{
    /**
     * The layoutId
     * @var int|null
     */
    protected ?int $layoutId = null;
    /**
     * The notAllowedUnit
     * @var string|null
     */
    protected ?string $notAllowedUnit = null;
    /**
     * The asNeighbor
     * @var bool|null
     */
    protected ?bool $asNeighbor = null;
    /**
     * Constructor method for SearchOrderLayoutOrgunitRequest
     * @uses SearchOrderLayoutOrgunitRequest::setLayoutId()
     * @uses SearchOrderLayoutOrgunitRequest::setNotAllowedUnit()
     * @uses SearchOrderLayoutOrgunitRequest::setAsNeighbor()
     * @param int $layoutId
     * @param string $notAllowedUnit
     * @param bool $asNeighbor
     */
    public function __construct(?int $layoutId = null, ?string $notAllowedUnit = null, ?bool $asNeighbor = null)
    {
        $this
            ->setLayoutId($layoutId)
            ->setNotAllowedUnit($notAllowedUnit)
            ->setAsNeighbor($asNeighbor);
    }
    /**
     * Get layoutId value
     * @return int|null
     */
    public function getLayoutId(): ?int
    {
        return $this->layoutId;
    }
    /**
     * Set layoutId value
     * @param int $layoutId
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderLayoutOrgunitRequest
     */
    public function setLayoutId(?int $layoutId = null): self
    {
        // validation for constraint: int
        if (!is_null($layoutId) && !(is_int($layoutId) || ctype_digit($layoutId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($layoutId, true), gettype($layoutId)), __LINE__);
        }
        $this->layoutId = $layoutId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderLayoutOrgunitRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderLayoutOrgunitRequest
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
}
