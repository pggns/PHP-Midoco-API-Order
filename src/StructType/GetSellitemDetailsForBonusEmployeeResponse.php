<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSellitemDetailsForBonusEmployeeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSellitemDetailsForBonusEmployeeResponse extends AbstractStructBase
{
    /**
     * The MidocoBonusAssignmentSellitemDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: ordersd:MidocoBonusAssignmentSellitemDetails
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails[]
     */
    protected ?array $MidocoBonusAssignmentSellitemDetails = null;
    /**
     * Constructor method for GetSellitemDetailsForBonusEmployeeResponse
     * @uses GetSellitemDetailsForBonusEmployeeResponse::setMidocoBonusAssignmentSellitemDetails()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails[] $midocoBonusAssignmentSellitemDetails
     */
    public function __construct(?array $midocoBonusAssignmentSellitemDetails = null)
    {
        $this
            ->setMidocoBonusAssignmentSellitemDetails($midocoBonusAssignmentSellitemDetails);
    }
    /**
     * Get MidocoBonusAssignmentSellitemDetails value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails[]
     */
    public function getMidocoBonusAssignmentSellitemDetails(): ?array
    {
        return $this->MidocoBonusAssignmentSellitemDetails;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBonusAssignmentSellitemDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBonusAssignmentSellitemDetails method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBonusAssignmentSellitemDetailsForArrayConstraintFromSetMidocoBonusAssignmentSellitemDetails(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSellitemDetailsForBonusEmployeeResponseMidocoBonusAssignmentSellitemDetailsItem) {
            // validation for constraint: itemType
            if (!$getSellitemDetailsForBonusEmployeeResponseMidocoBonusAssignmentSellitemDetailsItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails) {
                $invalidValues[] = is_object($getSellitemDetailsForBonusEmployeeResponseMidocoBonusAssignmentSellitemDetailsItem) ? get_class($getSellitemDetailsForBonusEmployeeResponseMidocoBonusAssignmentSellitemDetailsItem) : sprintf('%s(%s)', gettype($getSellitemDetailsForBonusEmployeeResponseMidocoBonusAssignmentSellitemDetailsItem), var_export($getSellitemDetailsForBonusEmployeeResponseMidocoBonusAssignmentSellitemDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBonusAssignmentSellitemDetails property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBonusAssignmentSellitemDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails[] $midocoBonusAssignmentSellitemDetails
     * @return \Pggns\MidocoApi\Order\StructType\GetSellitemDetailsForBonusEmployeeResponse
     */
    public function setMidocoBonusAssignmentSellitemDetails(?array $midocoBonusAssignmentSellitemDetails = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBonusAssignmentSellitemDetailsArrayErrorMessage = self::validateMidocoBonusAssignmentSellitemDetailsForArrayConstraintFromSetMidocoBonusAssignmentSellitemDetails($midocoBonusAssignmentSellitemDetails))) {
            throw new InvalidArgumentException($midocoBonusAssignmentSellitemDetailsArrayErrorMessage, __LINE__);
        }
        $this->MidocoBonusAssignmentSellitemDetails = $midocoBonusAssignmentSellitemDetails;
        
        return $this;
    }
    /**
     * Add item to MidocoBonusAssignmentSellitemDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSellitemDetailsForBonusEmployeeResponse
     */
    public function addToMidocoBonusAssignmentSellitemDetails(\Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails) {
            throw new InvalidArgumentException(sprintf('The MidocoBonusAssignmentSellitemDetails property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBonusAssignmentSellitemDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBonusAssignmentSellitemDetails[] = $item;
        
        return $this;
    }
}
