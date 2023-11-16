<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOrderResponse StructType
 * @subpackage Structs
 */
class SearchOrderResponse extends AbstractStructBase
{
    /**
     * The MidocoBookingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBookingInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType[]
     */
    protected array $MidocoBookingInfo = [];
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for SearchOrderResponse
     * @uses SearchOrderResponse::setMidocoBookingInfo()
     * @uses SearchOrderResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType[] $midocoBookingInfo
     * @param int $noOfResults
     */
    public function __construct(array $midocoBookingInfo = [], ?int $noOfResults = null)
    {
        $this
            ->setMidocoBookingInfo($midocoBookingInfo)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoBookingInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType[]
     */
    public function getMidocoBookingInfo(): array
    {
        return $this->MidocoBookingInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBookingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBookingInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBookingInfoForArrayConstraintsFromSetMidocoBookingInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchOrderResponseMidocoBookingInfoItem) {
            // validation for constraint: itemType
            if (!$searchOrderResponseMidocoBookingInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType) {
                $invalidValues[] = is_object($searchOrderResponseMidocoBookingInfoItem) ? get_class($searchOrderResponseMidocoBookingInfoItem) : sprintf('%s(%s)', gettype($searchOrderResponseMidocoBookingInfoItem), var_export($searchOrderResponseMidocoBookingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBookingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType[] $midocoBookingInfo
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderResponse
     */
    public function setMidocoBookingInfo(array $midocoBookingInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBookingInfoArrayErrorMessage = self::validateMidocoBookingInfoForArrayConstraintsFromSetMidocoBookingInfo($midocoBookingInfo))) {
            throw new InvalidArgumentException($midocoBookingInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoBookingInfo = $midocoBookingInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoBookingInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderResponse
     */
    public function addToMidocoBookingInfo(\Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType) {
            throw new InvalidArgumentException(sprintf('The MidocoBookingInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBookingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get noOfResults value
     * @return int|null
     */
    public function getNoOfResults(): ?int
    {
        return $this->noOfResults;
    }
    /**
     * Set noOfResults value
     * @param int $noOfResults
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderResponse
     */
    public function setNoOfResults(?int $noOfResults = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfResults) && !(is_int($noOfResults) || ctype_digit($noOfResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfResults, true), gettype($noOfResults)), __LINE__);
        }
        $this->noOfResults = $noOfResults;
        
        return $this;
    }
}
