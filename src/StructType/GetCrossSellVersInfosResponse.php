<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCrossSellVersInfosResponse StructType
 * @subpackage Structs
 */
class GetCrossSellVersInfosResponse extends AbstractStructBase
{
    /**
     * The CrossSellingVersInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CrossSellingVersInfo
     * @var \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo[]
     */
    protected array $CrossSellingVersInfo = [];
    /**
     * The existsVers
     * @var bool|null
     */
    protected ?bool $existsVers = null;
    /**
     * Constructor method for GetCrossSellVersInfosResponse
     * @uses GetCrossSellVersInfosResponse::setCrossSellingVersInfo()
     * @uses GetCrossSellVersInfosResponse::setExistsVers()
     * @param \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo[] $crossSellingVersInfo
     * @param bool $existsVers
     */
    public function __construct(array $crossSellingVersInfo = [], ?bool $existsVers = null)
    {
        $this
            ->setCrossSellingVersInfo($crossSellingVersInfo)
            ->setExistsVers($existsVers);
    }
    /**
     * Get CrossSellingVersInfo value
     * @return \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo[]
     */
    public function getCrossSellingVersInfo(): array
    {
        return $this->CrossSellingVersInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setCrossSellingVersInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCrossSellingVersInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCrossSellingVersInfoForArrayConstraintsFromSetCrossSellingVersInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCrossSellVersInfosResponseCrossSellingVersInfoItem) {
            // validation for constraint: itemType
            if (!$getCrossSellVersInfosResponseCrossSellingVersInfoItem instanceof \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo) {
                $invalidValues[] = is_object($getCrossSellVersInfosResponseCrossSellingVersInfoItem) ? get_class($getCrossSellVersInfosResponseCrossSellingVersInfoItem) : sprintf('%s(%s)', gettype($getCrossSellVersInfosResponseCrossSellingVersInfoItem), var_export($getCrossSellVersInfosResponseCrossSellingVersInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CrossSellingVersInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CrossSellingVersInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo[] $crossSellingVersInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetCrossSellVersInfosResponse
     */
    public function setCrossSellingVersInfo(array $crossSellingVersInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($crossSellingVersInfoArrayErrorMessage = self::validateCrossSellingVersInfoForArrayConstraintsFromSetCrossSellingVersInfo($crossSellingVersInfo))) {
            throw new InvalidArgumentException($crossSellingVersInfoArrayErrorMessage, __LINE__);
        }
        $this->CrossSellingVersInfo = $crossSellingVersInfo;
        
        return $this;
    }
    /**
     * Add item to CrossSellingVersInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetCrossSellVersInfosResponse
     */
    public function addToCrossSellingVersInfo(\Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo) {
            throw new InvalidArgumentException(sprintf('The CrossSellingVersInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\CrossSellingVersInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CrossSellingVersInfo[] = $item;
        
        return $this;
    }
    /**
     * Get existsVers value
     * @return bool|null
     */
    public function getExistsVers(): ?bool
    {
        return $this->existsVers;
    }
    /**
     * Set existsVers value
     * @param bool $existsVers
     * @return \Pggns\MidocoApi\Order\StructType\GetCrossSellVersInfosResponse
     */
    public function setExistsVers(?bool $existsVers = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existsVers) && !is_bool($existsVers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existsVers, true), gettype($existsVers)), __LINE__);
        }
        $this->existsVers = $existsVers;
        
        return $this;
    }
}
