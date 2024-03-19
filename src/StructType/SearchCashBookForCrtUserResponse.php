<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCashBookForCrtUserResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchCashBookForCrtUserResponse extends AbstractStructBase
{
    /**
     * The MidocoCashbookSummary
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCashbookSummary
     * @var \Pggns\MidocoApi\Order\StructType\CashbookSummaryType[]
     */
    protected ?array $MidocoCashbookSummary = null;
    /**
     * Constructor method for SearchCashBookForCrtUserResponse
     * @uses SearchCashBookForCrtUserResponse::setMidocoCashbookSummary()
     * @param \Pggns\MidocoApi\Order\StructType\CashbookSummaryType[] $midocoCashbookSummary
     */
    public function __construct(?array $midocoCashbookSummary = null)
    {
        $this
            ->setMidocoCashbookSummary($midocoCashbookSummary);
    }
    /**
     * Get MidocoCashbookSummary value
     * @return \Pggns\MidocoApi\Order\StructType\CashbookSummaryType[]
     */
    public function getMidocoCashbookSummary(): ?array
    {
        return $this->MidocoCashbookSummary;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCashbookSummary method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCashbookSummary method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCashbookSummaryForArrayConstraintFromSetMidocoCashbookSummary(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCashBookForCrtUserResponseMidocoCashbookSummaryItem) {
            // validation for constraint: itemType
            if (!$searchCashBookForCrtUserResponseMidocoCashbookSummaryItem instanceof \Pggns\MidocoApi\Order\StructType\CashbookSummaryType) {
                $invalidValues[] = is_object($searchCashBookForCrtUserResponseMidocoCashbookSummaryItem) ? get_class($searchCashBookForCrtUserResponseMidocoCashbookSummaryItem) : sprintf('%s(%s)', gettype($searchCashBookForCrtUserResponseMidocoCashbookSummaryItem), var_export($searchCashBookForCrtUserResponseMidocoCashbookSummaryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCashbookSummary property can only contain items of type \Pggns\MidocoApi\Order\StructType\CashbookSummaryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCashbookSummary value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CashbookSummaryType[] $midocoCashbookSummary
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserResponse
     */
    public function setMidocoCashbookSummary(?array $midocoCashbookSummary = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCashbookSummaryArrayErrorMessage = self::validateMidocoCashbookSummaryForArrayConstraintFromSetMidocoCashbookSummary($midocoCashbookSummary))) {
            throw new InvalidArgumentException($midocoCashbookSummaryArrayErrorMessage, __LINE__);
        }
        $this->MidocoCashbookSummary = $midocoCashbookSummary;
        
        return $this;
    }
    /**
     * Add item to MidocoCashbookSummary value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CashbookSummaryType $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchCashBookForCrtUserResponse
     */
    public function addToMidocoCashbookSummary(\Pggns\MidocoApi\Order\StructType\CashbookSummaryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CashbookSummaryType) {
            throw new InvalidArgumentException(sprintf('The MidocoCashbookSummary property can only contain items of type \Pggns\MidocoApi\Order\StructType\CashbookSummaryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCashbookSummary[] = $item;
        
        return $this;
    }
}
