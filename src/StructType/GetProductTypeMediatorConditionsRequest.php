<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProductTypeMediatorConditionsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetProductTypeMediatorConditionsRequest extends AbstractStructBase
{
    /**
     * The productType
     * @var string|null
     */
    protected ?string $productType = null;
    /**
     * The mediatorType
     * @var string|null
     */
    protected ?string $mediatorType = null;
    /**
     * Constructor method for GetProductTypeMediatorConditionsRequest
     * @uses GetProductTypeMediatorConditionsRequest::setProductType()
     * @uses GetProductTypeMediatorConditionsRequest::setMediatorType()
     * @param string $productType
     * @param string $mediatorType
     */
    public function __construct(?string $productType = null, ?string $mediatorType = null)
    {
        $this
            ->setProductType($productType)
            ->setMediatorType($mediatorType);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetProductTypeMediatorConditionsRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetProductTypeMediatorConditionsRequest
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
}
