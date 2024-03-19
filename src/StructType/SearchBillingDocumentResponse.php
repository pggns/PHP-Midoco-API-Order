<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBillingDocumentResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: searchBillingDocument --- search BillingDocuments Request: - a BillingDocumentDTO or - a BillingPositionDTO Response: a List of - document_id - name - forename - travel_date - document_no - type - order_no - creation_date -
 * printing_date - total price
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchBillingDocumentResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingSearchInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingSearchInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo[]
     */
    protected ?array $MidocoBillingSearchInfo = null;
    /**
     * The noOfResults
     * @var int|null
     */
    protected ?int $noOfResults = null;
    /**
     * Constructor method for SearchBillingDocumentResponse
     * @uses SearchBillingDocumentResponse::setMidocoBillingSearchInfo()
     * @uses SearchBillingDocumentResponse::setNoOfResults()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo[] $midocoBillingSearchInfo
     * @param int $noOfResults
     */
    public function __construct(?array $midocoBillingSearchInfo = null, ?int $noOfResults = null)
    {
        $this
            ->setMidocoBillingSearchInfo($midocoBillingSearchInfo)
            ->setNoOfResults($noOfResults);
    }
    /**
     * Get MidocoBillingSearchInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo[]
     */
    public function getMidocoBillingSearchInfo(): ?array
    {
        return $this->MidocoBillingSearchInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingSearchInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingSearchInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingSearchInfoForArrayConstraintFromSetMidocoBillingSearchInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchBillingDocumentResponseMidocoBillingSearchInfoItem) {
            // validation for constraint: itemType
            if (!$searchBillingDocumentResponseMidocoBillingSearchInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo) {
                $invalidValues[] = is_object($searchBillingDocumentResponseMidocoBillingSearchInfoItem) ? get_class($searchBillingDocumentResponseMidocoBillingSearchInfoItem) : sprintf('%s(%s)', gettype($searchBillingDocumentResponseMidocoBillingSearchInfoItem), var_export($searchBillingDocumentResponseMidocoBillingSearchInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingSearchInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingSearchInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo[] $midocoBillingSearchInfo
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentResponse
     */
    public function setMidocoBillingSearchInfo(?array $midocoBillingSearchInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingSearchInfoArrayErrorMessage = self::validateMidocoBillingSearchInfoForArrayConstraintFromSetMidocoBillingSearchInfo($midocoBillingSearchInfo))) {
            throw new InvalidArgumentException($midocoBillingSearchInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingSearchInfo = $midocoBillingSearchInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingSearchInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentResponse
     */
    public function addToMidocoBillingSearchInfo(\Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingSearchInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingSearchInfo[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDocumentResponse
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
