<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTravelnoPurchaseAssignmentRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Saves the assignment of the sale item to a specific supplier invoice of the purchase order defined in the travel number context
 * @subpackage Structs
 */
class SaveTravelnoPurchaseAssignmentRequest extends AbstractStructBase
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
     * The revenueId
     * @var int|null
     */
    protected ?int $revenueId = null;
    /**
     * Constructor method for SaveTravelnoPurchaseAssignmentRequest
     * @uses SaveTravelnoPurchaseAssignmentRequest::setMidocoTravelnoPurchaseAssignment()
     * @uses SaveTravelnoPurchaseAssignmentRequest::setRevenueId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment[] $midocoTravelnoPurchaseAssignment
     * @param int $revenueId
     */
    public function __construct(array $midocoTravelnoPurchaseAssignment = [], ?int $revenueId = null)
    {
        $this
            ->setMidocoTravelnoPurchaseAssignment($midocoTravelnoPurchaseAssignment)
            ->setRevenueId($revenueId);
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
        foreach ($values as $saveTravelnoPurchaseAssignmentRequestMidocoTravelnoPurchaseAssignmentItem) {
            // validation for constraint: itemType
            if (!$saveTravelnoPurchaseAssignmentRequestMidocoTravelnoPurchaseAssignmentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTravelnoPurchaseAssignment) {
                $invalidValues[] = is_object($saveTravelnoPurchaseAssignmentRequestMidocoTravelnoPurchaseAssignmentItem) ? get_class($saveTravelnoPurchaseAssignmentRequestMidocoTravelnoPurchaseAssignmentItem) : sprintf('%s(%s)', gettype($saveTravelnoPurchaseAssignmentRequestMidocoTravelnoPurchaseAssignmentItem), var_export($saveTravelnoPurchaseAssignmentRequestMidocoTravelnoPurchaseAssignmentItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveTravelnoPurchaseAssignmentRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveTravelnoPurchaseAssignmentRequest
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
    /**
     * Get revenueId value
     * @return int|null
     */
    public function getRevenueId(): ?int
    {
        return $this->revenueId;
    }
    /**
     * Set revenueId value
     * @param int $revenueId
     * @return \Pggns\MidocoApi\Order\StructType\SaveTravelnoPurchaseAssignmentRequest
     */
    public function setRevenueId(?int $revenueId = null): self
    {
        // validation for constraint: int
        if (!is_null($revenueId) && !(is_int($revenueId) || ctype_digit($revenueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($revenueId, true), gettype($revenueId)), __LINE__);
        }
        $this->revenueId = $revenueId;
        
        return $this;
    }
}
