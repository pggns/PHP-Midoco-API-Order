<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EditEntryRequest StructType
 * @subpackage Structs
 */
class EditEntryRequest extends AbstractStructBase
{
    /**
     * The MidocoEntryDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoEntryDetails
     * @var \Pggns\MidocoApi\Order\StructType\MidocoEntryDetails[]
     */
    protected array $MidocoEntryDetails = [];
    /**
     * The MidocoEntryHistory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoEntryHistory
     * @var \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory[]
     */
    protected array $MidocoEntryHistory = [];
    /**
     * The comment
     * @var string|null
     */
    protected ?string $comment = null;
    /**
     * Constructor method for EditEntryRequest
     * @uses EditEntryRequest::setMidocoEntryDetails()
     * @uses EditEntryRequest::setMidocoEntryHistory()
     * @uses EditEntryRequest::setComment()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEntryDetails[] $midocoEntryDetails
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory[] $midocoEntryHistory
     * @param string $comment
     */
    public function __construct(array $midocoEntryDetails = [], array $midocoEntryHistory = [], ?string $comment = null)
    {
        $this
            ->setMidocoEntryDetails($midocoEntryDetails)
            ->setMidocoEntryHistory($midocoEntryHistory)
            ->setComment($comment);
    }
    /**
     * Get MidocoEntryDetails value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEntryDetails[]
     */
    public function getMidocoEntryDetails(): array
    {
        return $this->MidocoEntryDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoEntryDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoEntryDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoEntryDetailsForArrayConstraintsFromSetMidocoEntryDetails(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $editEntryRequestMidocoEntryDetailsItem) {
            // validation for constraint: itemType
            if (!$editEntryRequestMidocoEntryDetailsItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoEntryDetails) {
                $invalidValues[] = is_object($editEntryRequestMidocoEntryDetailsItem) ? get_class($editEntryRequestMidocoEntryDetailsItem) : sprintf('%s(%s)', gettype($editEntryRequestMidocoEntryDetailsItem), var_export($editEntryRequestMidocoEntryDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoEntryDetails property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoEntryDetails, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoEntryDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEntryDetails[] $midocoEntryDetails
     * @return \Pggns\MidocoApi\Order\StructType\EditEntryRequest
     */
    public function setMidocoEntryDetails(array $midocoEntryDetails = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoEntryDetailsArrayErrorMessage = self::validateMidocoEntryDetailsForArrayConstraintsFromSetMidocoEntryDetails($midocoEntryDetails))) {
            throw new InvalidArgumentException($midocoEntryDetailsArrayErrorMessage, __LINE__);
        }
        $this->MidocoEntryDetails = $midocoEntryDetails;
        
        return $this;
    }
    /**
     * Add item to MidocoEntryDetails value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEntryDetails $item
     * @return \Pggns\MidocoApi\Order\StructType\EditEntryRequest
     */
    public function addToMidocoEntryDetails(\Pggns\MidocoApi\Order\StructType\MidocoEntryDetails $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoEntryDetails) {
            throw new InvalidArgumentException(sprintf('The MidocoEntryDetails property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoEntryDetails, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoEntryDetails[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoEntryHistory value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory[]
     */
    public function getMidocoEntryHistory(): array
    {
        return $this->MidocoEntryHistory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoEntryHistory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoEntryHistory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoEntryHistoryForArrayConstraintsFromSetMidocoEntryHistory(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $editEntryRequestMidocoEntryHistoryItem) {
            // validation for constraint: itemType
            if (!$editEntryRequestMidocoEntryHistoryItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory) {
                $invalidValues[] = is_object($editEntryRequestMidocoEntryHistoryItem) ? get_class($editEntryRequestMidocoEntryHistoryItem) : sprintf('%s(%s)', gettype($editEntryRequestMidocoEntryHistoryItem), var_export($editEntryRequestMidocoEntryHistoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoEntryHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoEntryHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory[] $midocoEntryHistory
     * @return \Pggns\MidocoApi\Order\StructType\EditEntryRequest
     */
    public function setMidocoEntryHistory(array $midocoEntryHistory = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoEntryHistoryArrayErrorMessage = self::validateMidocoEntryHistoryForArrayConstraintsFromSetMidocoEntryHistory($midocoEntryHistory))) {
            throw new InvalidArgumentException($midocoEntryHistoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoEntryHistory = $midocoEntryHistory;
        
        return $this;
    }
    /**
     * Add item to MidocoEntryHistory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory $item
     * @return \Pggns\MidocoApi\Order\StructType\EditEntryRequest
     */
    public function addToMidocoEntryHistory(\Pggns\MidocoApi\Order\StructType\MidocoEntryHistory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory) {
            throw new InvalidArgumentException(sprintf('The MidocoEntryHistory property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoEntryHistory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoEntryHistory[] = $item;
        
        return $this;
    }
    /**
     * Get comment value
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     * Set comment value
     * @param string $comment
     * @return \Pggns\MidocoApi\Order\StructType\EditEntryRequest
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;
        
        return $this;
    }
}
