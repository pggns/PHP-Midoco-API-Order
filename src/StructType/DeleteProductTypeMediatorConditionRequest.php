<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteProductTypeMediatorConditionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteProductTypeMediatorConditionRequest extends AbstractStructBase
{
    /**
     * The mediatorType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $mediatorType;
    /**
     * The productType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $productType;
    /**
     * Constructor method for DeleteProductTypeMediatorConditionRequest
     * @uses DeleteProductTypeMediatorConditionRequest::setMediatorType()
     * @uses DeleteProductTypeMediatorConditionRequest::setProductType()
     * @param string $mediatorType
     * @param string $productType
     */
    public function __construct(string $mediatorType, string $productType)
    {
        $this
            ->setMediatorType($mediatorType)
            ->setProductType($productType);
    }
    /**
     * Get mediatorType value
     * @return string
     */
    public function getMediatorType(): string
    {
        return $this->mediatorType;
    }
    /**
     * Set mediatorType value
     * @param string $mediatorType
     * @return \Pggns\MidocoApi\Order\StructType\DeleteProductTypeMediatorConditionRequest
     */
    public function setMediatorType(string $mediatorType): self
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
     * @return string
     */
    public function getProductType(): string
    {
        return $this->productType;
    }
    /**
     * Set productType value
     * @param string $productType
     * @return \Pggns\MidocoApi\Order\StructType\DeleteProductTypeMediatorConditionRequest
     */
    public function setProductType(string $productType): self
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), gettype($productType)), __LINE__);
        }
        $this->productType = $productType;
        
        return $this;
    }
}
