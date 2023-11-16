<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProdTypesMediatorCondDTO StructType
 * @subpackage Structs
 */
class ProdTypesMediatorCondDTO extends AbstractStructBase
{
    /**
     * The isRevenueFromMargin
     * @var bool|null
     */
    protected ?bool $isRevenueFromMargin = null;
    /**
     * The mediatorType
     * @var string|null
     */
    protected ?string $mediatorType = null;
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The revenuePercent
     * @var float|null
     */
    protected ?float $revenuePercent = null;
    /**
     * Constructor method for ProdTypesMediatorCondDTO
     * @uses ProdTypesMediatorCondDTO::setIsRevenueFromMargin()
     * @uses ProdTypesMediatorCondDTO::setMediatorType()
     * @uses ProdTypesMediatorCondDTO::setProductType()
     * @uses ProdTypesMediatorCondDTO::setRevenuePercent()
     * @param bool $isRevenueFromMargin
     * @param string $mediatorType
     * @param string $productType
     * @param float $revenuePercent
     */
    public function __construct(?bool $isRevenueFromMargin = null, ?string $mediatorType = null, ?string $productType = null, ?float $revenuePercent = null)
    {
        $this
            ->setIsRevenueFromMargin($isRevenueFromMargin)
            ->setMediatorType($mediatorType)
            ->setProductType($productType)
            ->setRevenuePercent($revenuePercent);
    }
    /**
     * Get isRevenueFromMargin value
     * @return bool|null
     */
    public function getIsRevenueFromMargin(): ?bool
    {
        return $this->isRevenueFromMargin;
    }
    /**
     * Set isRevenueFromMargin value
     * @param bool $isRevenueFromMargin
     * @return \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO
     */
    public function setIsRevenueFromMargin(?bool $isRevenueFromMargin = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isRevenueFromMargin) && !is_bool($isRevenueFromMargin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRevenueFromMargin, true), gettype($isRevenueFromMargin)), __LINE__);
        }
        $this->isRevenueFromMargin = $isRevenueFromMargin;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO
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
     * Get productType value
     * @return string|null
     */
    public function getProductType(): ?string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
    /**
     * Get revenuePercent value
     * @return float|null
     */
    public function getRevenuePercent(): ?float
    {
        return $this->revenuePercent;
    }
    /**
     * Set revenuePercent value
     * @param float $revenuePercent
     * @return \Pggns\MidocoApi\Order\StructType\ProdTypesMediatorCondDTO
     */
    public function setRevenuePercent(?float $revenuePercent = null): self
    {
        // validation for constraint: float
        if (!is_null($revenuePercent) && !(is_float($revenuePercent) || is_numeric($revenuePercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($revenuePercent, true), gettype($revenuePercent)), __LINE__);
        }
        $this->revenuePercent = $revenuePercent;
        
        return $this;
    }
}
