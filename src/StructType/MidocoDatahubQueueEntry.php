<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDatahubQueueEntry StructType
 * Meta information extracted from the WSDL
 * - documentation: A data structure designed to coordinate imports from datahub and other systems.
 * @subpackage Structs
 */
class MidocoDatahubQueueEntry extends DatahubQueueDTO
{
    /**
     * The MidocoDatahubQueueBookingReference
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDatahubQueueBookingReference[]
     */
    protected array $MidocoDatahubQueueBookingReference = [];
    /**
     * The isProcessing
     * Meta information extracted from the WSDL
     * - documentation: Virtual field. Should be true if the processingStart field is not null and not too far in the past. E.g. an import rarely takes longer than three minutes.
     * @var bool|null
     */
    protected ?bool $isProcessing = null;
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - documentation: OrderNo of imported message. Can only be filled if import is done.
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * Constructor method for MidocoDatahubQueueEntry
     * @uses MidocoDatahubQueueEntry::setMidocoDatahubQueueBookingReference()
     * @uses MidocoDatahubQueueEntry::setIsProcessing()
     * @uses MidocoDatahubQueueEntry::setOrderNo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDatahubQueueBookingReference[] $midocoDatahubQueueBookingReference
     * @param bool $isProcessing
     * @param int $orderNo
     */
    public function __construct(array $midocoDatahubQueueBookingReference = [], ?bool $isProcessing = null, ?int $orderNo = null)
    {
        $this
            ->setMidocoDatahubQueueBookingReference($midocoDatahubQueueBookingReference)
            ->setIsProcessing($isProcessing)
            ->setOrderNo($orderNo);
    }
    /**
     * Get MidocoDatahubQueueBookingReference value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDatahubQueueBookingReference[]
     */
    public function getMidocoDatahubQueueBookingReference(): array
    {
        return $this->MidocoDatahubQueueBookingReference;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDatahubQueueBookingReference method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDatahubQueueBookingReference method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDatahubQueueBookingReferenceForArrayConstraintsFromSetMidocoDatahubQueueBookingReference(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDatahubQueueEntryMidocoDatahubQueueBookingReferenceItem) {
            // validation for constraint: itemType
            if (!$midocoDatahubQueueEntryMidocoDatahubQueueBookingReferenceItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDatahubQueueBookingReference) {
                $invalidValues[] = is_object($midocoDatahubQueueEntryMidocoDatahubQueueBookingReferenceItem) ? get_class($midocoDatahubQueueEntryMidocoDatahubQueueBookingReferenceItem) : sprintf('%s(%s)', gettype($midocoDatahubQueueEntryMidocoDatahubQueueBookingReferenceItem), var_export($midocoDatahubQueueEntryMidocoDatahubQueueBookingReferenceItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDatahubQueueBookingReference property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDatahubQueueBookingReference, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDatahubQueueBookingReference value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDatahubQueueBookingReference[] $midocoDatahubQueueBookingReference
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDatahubQueueEntry
     */
    public function setMidocoDatahubQueueBookingReference(array $midocoDatahubQueueBookingReference = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDatahubQueueBookingReferenceArrayErrorMessage = self::validateMidocoDatahubQueueBookingReferenceForArrayConstraintsFromSetMidocoDatahubQueueBookingReference($midocoDatahubQueueBookingReference))) {
            throw new InvalidArgumentException($midocoDatahubQueueBookingReferenceArrayErrorMessage, __LINE__);
        }
        $this->MidocoDatahubQueueBookingReference = $midocoDatahubQueueBookingReference;
        
        return $this;
    }
    /**
     * Add item to MidocoDatahubQueueBookingReference value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDatahubQueueBookingReference $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDatahubQueueEntry
     */
    public function addToMidocoDatahubQueueBookingReference(\Pggns\MidocoApi\Order\StructType\MidocoDatahubQueueBookingReference $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDatahubQueueBookingReference) {
            throw new InvalidArgumentException(sprintf('The MidocoDatahubQueueBookingReference property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDatahubQueueBookingReference, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDatahubQueueBookingReference[] = $item;
        
        return $this;
    }
    /**
     * Get isProcessing value
     * @return bool|null
     */
    public function getIsProcessing(): ?bool
    {
        return $this->isProcessing;
    }
    /**
     * Set isProcessing value
     * @param bool $isProcessing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDatahubQueueEntry
     */
    public function setIsProcessing(?bool $isProcessing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isProcessing) && !is_bool($isProcessing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProcessing, true), gettype($isProcessing)), __LINE__);
        }
        $this->isProcessing = $isProcessing;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDatahubQueueEntry
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
}
