<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutoSplitTravelnoPurchaseAssignmentsRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Automatically split the amount of the specified supplier invoice to the sale item(s) which are assigned
 * @subpackage Structs
 */
class AutoSplitTravelnoPurchaseAssignmentsRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelnoPurchaseAssignment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTravelnoPurchaseAssignment
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment[]
     */
    protected array $MidocoTravelnoPurchaseAssignment = [];
    /**
     * Constructor method for AutoSplitTravelnoPurchaseAssignmentsRequest
     * @uses AutoSplitTravelnoPurchaseAssignmentsRequest::setMidocoTravelnoPurchaseAssignment()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment[] $midocoTravelnoPurchaseAssignment
     */
    public function __construct(array $midocoTravelnoPurchaseAssignment = [])
    {
        $this
            ->setMidocoTravelnoPurchaseAssignment($midocoTravelnoPurchaseAssignment);
    }
    /**
     * Get MidocoTravelnoPurchaseAssignment value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment[]
     */
    public function getMidocoTravelnoPurchaseAssignment(): array
    {
        return $this->MidocoTravelnoPurchaseAssignment;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTravelnoPurchaseAssignment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTravelnoPurchaseAssignment method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTravelnoPurchaseAssignmentForArrayConstraintsFromSetMidocoTravelnoPurchaseAssignment(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $autoSplitTravelnoPurchaseAssignmentsRequestMidocoTravelnoPurchaseAssignmentItem) {
            // validation for constraint: itemType
            if (!$autoSplitTravelnoPurchaseAssignmentsRequestMidocoTravelnoPurchaseAssignmentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment) {
                $invalidValues[] = is_object($autoSplitTravelnoPurchaseAssignmentsRequestMidocoTravelnoPurchaseAssignmentItem) ? get_class($autoSplitTravelnoPurchaseAssignmentsRequestMidocoTravelnoPurchaseAssignmentItem) : sprintf('%s(%s)', gettype($autoSplitTravelnoPurchaseAssignmentsRequestMidocoTravelnoPurchaseAssignmentItem), var_export($autoSplitTravelnoPurchaseAssignmentsRequestMidocoTravelnoPurchaseAssignmentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTravelnoPurchaseAssignment property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTravelnoPurchaseAssignment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment[] $midocoTravelnoPurchaseAssignment
     * @return \Pggns\MidocoApi\Order\StructType\AutoSplitTravelnoPurchaseAssignmentsRequest
     */
    public function setMidocoTravelnoPurchaseAssignment(array $midocoTravelnoPurchaseAssignment = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTravelnoPurchaseAssignmentArrayErrorMessage = self::validateMidocoTravelnoPurchaseAssignmentForArrayConstraintsFromSetMidocoTravelnoPurchaseAssignment($midocoTravelnoPurchaseAssignment))) {
            throw new InvalidArgumentException($midocoTravelnoPurchaseAssignmentArrayErrorMessage, __LINE__);
        }
        $this->MidocoTravelnoPurchaseAssignment = $midocoTravelnoPurchaseAssignment;
        
        return $this;
    }
    /**
     * Add item to MidocoTravelnoPurchaseAssignment value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment $item
     * @return \Pggns\MidocoApi\Order\StructType\AutoSplitTravelnoPurchaseAssignmentsRequest
     */
    public function addToMidocoTravelnoPurchaseAssignment(\Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment) {
            throw new InvalidArgumentException(sprintf('The MidocoTravelnoPurchaseAssignment property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTravelnoPurchaseAssignment[] = $item;
        
        return $this;
    }
}
