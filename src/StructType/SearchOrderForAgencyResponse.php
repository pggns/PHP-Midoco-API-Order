<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchOrderForAgencyResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchOrderForAgencyResponse extends AbstractStructBase
{
    /**
     * The MidocoBookingInfoExt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBookingInfoExt
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoExtType[]
     */
    protected ?array $MidocoBookingInfoExt = null;
    /**
     * The noOfResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for SearchOrderForAgencyResponse
     * @uses SearchOrderForAgencyResponse::setMidocoBookingInfoExt()
     * @uses SearchOrderForAgencyResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoExtType[] $midocoBookingInfoExt
     * @param int $noOfResults
     */
    public function __construct(?array $midocoBookingInfoExt = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoBookingInfoExt($midocoBookingInfoExt)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoBookingInfoExt value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoExtType[]
     */
    public function getMidocoBookingInfoExt(): ?array
    {
        return $this->MidocoBookingInfoExt;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBookingInfoExt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBookingInfoExt method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBookingInfoExtForArrayConstraintFromSetMidocoBookingInfoExt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchOrderForAgencyResponseMidocoBookingInfoExtItem) {
            // validation for constraint: itemType
            if (!$searchOrderForAgencyResponseMidocoBookingInfoExtItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoExtType) {
                $invalidValues[] = is_object($searchOrderForAgencyResponseMidocoBookingInfoExtItem) ? get_class($searchOrderForAgencyResponseMidocoBookingInfoExtItem) : sprintf('%s(%s)', gettype($searchOrderForAgencyResponseMidocoBookingInfoExtItem), var_export($searchOrderForAgencyResponseMidocoBookingInfoExtItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBookingInfoExt property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoExtType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBookingInfoExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoExtType[] $midocoBookingInfoExt
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderForAgencyResponse
     */
    public function setMidocoBookingInfoExt(?array $midocoBookingInfoExt = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBookingInfoExtArrayErrorMessage = self::validateMidocoBookingInfoExtForArrayConstraintFromSetMidocoBookingInfoExt($midocoBookingInfoExt))) {
            throw new InvalidArgumentException($midocoBookingInfoExtArrayErrorMessage, __LINE__);
        }
        $this->MidocoBookingInfoExt = $midocoBookingInfoExt;
        
        return $this;
    }
    /**
     * Add item to MidocoBookingInfoExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoExtType $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderForAgencyResponse
     */
    public function addToMidocoBookingInfoExt(\Pggns\MidocoApi\Order\StructType\MidocoBookingInfoExtType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoExtType) {
            throw new InvalidArgumentException(sprintf('The MidocoBookingInfoExt property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBookingInfoExtType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBookingInfoExt[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchOrderForAgencyResponse
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
