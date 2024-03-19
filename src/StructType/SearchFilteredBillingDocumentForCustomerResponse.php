<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchFilteredBillingDocumentForCustomerResponse
 * StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchFilteredBillingDocumentForCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingSearchInfoExt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingSearchInfoExt
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType[]
     */
    protected ?array $MidocoBillingSearchInfoExt = null;
    /**
     * Constructor method for SearchFilteredBillingDocumentForCustomerResponse
     * @uses SearchFilteredBillingDocumentForCustomerResponse::setMidocoBillingSearchInfoExt()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType[] $midocoBillingSearchInfoExt
     */
    public function __construct(?array $midocoBillingSearchInfoExt = null)
    {
        $this
            ->setMidocoBillingSearchInfoExt($midocoBillingSearchInfoExt);
    }
    /**
     * Get MidocoBillingSearchInfoExt value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType[]
     */
    public function getMidocoBillingSearchInfoExt(): ?array
    {
        return $this->MidocoBillingSearchInfoExt;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingSearchInfoExt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingSearchInfoExt method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingSearchInfoExtForArrayConstraintFromSetMidocoBillingSearchInfoExt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchFilteredBillingDocumentForCustomerResponseMidocoBillingSearchInfoExtItem) {
            // validation for constraint: itemType
            if (!$searchFilteredBillingDocumentForCustomerResponseMidocoBillingSearchInfoExtItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType) {
                $invalidValues[] = is_object($searchFilteredBillingDocumentForCustomerResponseMidocoBillingSearchInfoExtItem) ? get_class($searchFilteredBillingDocumentForCustomerResponseMidocoBillingSearchInfoExtItem) : sprintf('%s(%s)', gettype($searchFilteredBillingDocumentForCustomerResponseMidocoBillingSearchInfoExtItem), var_export($searchFilteredBillingDocumentForCustomerResponseMidocoBillingSearchInfoExtItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingSearchInfoExt property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingSearchInfoExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType[] $midocoBillingSearchInfoExt
     * @return \Pggns\MidocoApi\Order\StructType\SearchFilteredBillingDocumentForCustomerResponse
     */
    public function setMidocoBillingSearchInfoExt(?array $midocoBillingSearchInfoExt = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingSearchInfoExtArrayErrorMessage = self::validateMidocoBillingSearchInfoExtForArrayConstraintFromSetMidocoBillingSearchInfoExt($midocoBillingSearchInfoExt))) {
            throw new InvalidArgumentException($midocoBillingSearchInfoExtArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingSearchInfoExt = $midocoBillingSearchInfoExt;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingSearchInfoExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchFilteredBillingDocumentForCustomerResponse
     */
    public function addToMidocoBillingSearchInfoExt(\Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingSearchInfoExt property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingSearchInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingSearchInfoExt[] = $item;
        
        return $this;
    }
}
