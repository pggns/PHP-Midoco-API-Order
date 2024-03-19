<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrossSellCarInfosResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCrossSellCarInfosResponse extends AbstractStructBase
{
    /**
     * The CrossSellingCarInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CrossSellingCarInfo
     * @var \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo[]
     */
    protected ?array $CrossSellingCarInfo = null;
    /**
     * The existsCar
     * @var bool|null
     */
    protected ?bool $existsCar = null;
    /**
     * Constructor method for GetCrossSellCarInfosResponse
     * @uses GetCrossSellCarInfosResponse::setCrossSellingCarInfo()
     * @uses GetCrossSellCarInfosResponse::setExistsCar()
     * @param \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo[] $crossSellingCarInfo
     * @param bool $existsCar
     */
    public function __construct(?array $crossSellingCarInfo = null, ?bool $existsCar = null)
    {
        $this
            ->setCrossSellingCarInfo($crossSellingCarInfo)
            ->setExistsCar($existsCar);
    }
    /**
     * Get CrossSellingCarInfo value
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo[]
     */
    public function getCrossSellingCarInfo(): ?array
    {
        return $this->CrossSellingCarInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCrossSellingCarInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCrossSellingCarInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCrossSellingCarInfoForArrayConstraintFromSetCrossSellingCarInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCrossSellCarInfosResponseCrossSellingCarInfoItem) {
            // validation for constraint: itemType
            if (!$getCrossSellCarInfosResponseCrossSellingCarInfoItem instanceof \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo) {
                $invalidValues[] = is_object($getCrossSellCarInfosResponseCrossSellingCarInfoItem) ? get_class($getCrossSellCarInfosResponseCrossSellingCarInfoItem) : sprintf('%s(%s)', gettype($getCrossSellCarInfosResponseCrossSellingCarInfoItem), var_export($getCrossSellCarInfosResponseCrossSellingCarInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CrossSellingCarInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CrossSellingCarInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo[] $crossSellingCarInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetCrossSellCarInfosResponse
     */
    public function setCrossSellingCarInfo(?array $crossSellingCarInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($crossSellingCarInfoArrayErrorMessage = self::validateCrossSellingCarInfoForArrayConstraintFromSetCrossSellingCarInfo($crossSellingCarInfo))) {
            throw new InvalidArgumentException($crossSellingCarInfoArrayErrorMessage, __LINE__);
        }
        $this->CrossSellingCarInfo = $crossSellingCarInfo;
        
        return $this;
    }
    /**
     * Add item to CrossSellingCarInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetCrossSellCarInfosResponse
     */
    public function addToCrossSellingCarInfo(\Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo) {
            throw new InvalidArgumentException(sprintf('The CrossSellingCarInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrossSellingCarInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CrossSellingCarInfo[] = $item;
        
        return $this;
    }
    /**
     * Get existsCar value
     * @return bool|null
     */
    public function getExistsCar(): ?bool
    {
        return $this->existsCar;
    }
    /**
     * Set existsCar value
     * @param bool $existsCar
     * @return \Pggns\MidocoApi\Order\StructType\GetCrossSellCarInfosResponse
     */
    public function setExistsCar(?bool $existsCar = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existsCar) && !is_bool($existsCar)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existsCar, true), gettype($existsCar)), __LINE__);
        }
        $this->existsCar = $existsCar;
        
        return $this;
    }
}
