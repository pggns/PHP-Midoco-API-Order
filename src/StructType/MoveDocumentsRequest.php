<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveDocumentsRequest StructType
 * @subpackage Structs
 */
class MoveDocumentsRequest extends AbstractStructBase
{
    /**
     * The MidocoSellItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoSellItemId
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellItemId[]
     */
    protected array $MidocoSellItemId = [];
    /**
     * The destinationOrderId
     * @var int|null
     */
    protected ?int $destinationOrderId = null;
    /**
     * The destinationBookingId
     * @var string|null
     */
    protected ?string $destinationBookingId = null;
    /**
     * Constructor method for MoveDocumentsRequest
     * @uses MoveDocumentsRequest::setMidocoSellItemId()
     * @uses MoveDocumentsRequest::setDestinationOrderId()
     * @uses MoveDocumentsRequest::setDestinationBookingId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemId[] $midocoSellItemId
     * @param int $destinationOrderId
     * @param string $destinationBookingId
     */
    public function __construct(array $midocoSellItemId = [], ?int $destinationOrderId = null, ?string $destinationBookingId = null)
    {
        $this
            ->setMidocoSellItemId($midocoSellItemId)
            ->setDestinationOrderId($destinationOrderId)
            ->setDestinationBookingId($destinationBookingId);
    }
    /**
     * Get MidocoSellItemId value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellItemId[]
     */
    public function getMidocoSellItemId(): array
    {
        return $this->MidocoSellItemId;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSellItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellItemId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellItemIdForArrayConstraintsFromSetMidocoSellItemId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $moveDocumentsRequestMidocoSellItemIdItem) {
            // validation for constraint: itemType
            if (!$moveDocumentsRequestMidocoSellItemIdItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemId) {
                $invalidValues[] = is_object($moveDocumentsRequestMidocoSellItemIdItem) ? get_class($moveDocumentsRequestMidocoSellItemIdItem) : sprintf('%s(%s)', gettype($moveDocumentsRequestMidocoSellItemIdItem), var_export($moveDocumentsRequestMidocoSellItemIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellItemId property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemId, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellItemId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemId[] $midocoSellItemId
     * @return \Pggns\MidocoApi\Order\StructType\MoveDocumentsRequest
     */
    public function setMidocoSellItemId(array $midocoSellItemId = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellItemIdArrayErrorMessage = self::validateMidocoSellItemIdForArrayConstraintsFromSetMidocoSellItemId($midocoSellItemId))) {
            throw new InvalidArgumentException($midocoSellItemIdArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellItemId = $midocoSellItemId;
        
        return $this;
    }
    /**
     * Add item to MidocoSellItemId value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellItemId $item
     * @return \Pggns\MidocoApi\Order\StructType\MoveDocumentsRequest
     */
    public function addToMidocoSellItemId(\Pggns\MidocoApi\Order\StructType\MidocoSellItemId $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellItemId) {
            throw new InvalidArgumentException(sprintf('The MidocoSellItemId property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellItemId, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellItemId[] = $item;
        
        return $this;
    }
    /**
     * Get destinationOrderId value
     * @return int|null
     */
    public function getDestinationOrderId(): ?int
    {
        return $this->destinationOrderId;
    }
    /**
     * Set destinationOrderId value
     * @param int $destinationOrderId
     * @return \Pggns\MidocoApi\Order\StructType\MoveDocumentsRequest
     */
    public function setDestinationOrderId(?int $destinationOrderId = null): self
    {
        // validation for constraint: int
        if (!is_null($destinationOrderId) && !(is_int($destinationOrderId) || ctype_digit($destinationOrderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($destinationOrderId, true), gettype($destinationOrderId)), __LINE__);
        }
        $this->destinationOrderId = $destinationOrderId;
        
        return $this;
    }
    /**
     * Get destinationBookingId value
     * @return string|null
     */
    public function getDestinationBookingId(): ?string
    {
        return $this->destinationBookingId;
    }
    /**
     * Set destinationBookingId value
     * @param string $destinationBookingId
     * @return \Pggns\MidocoApi\Order\StructType\MoveDocumentsRequest
     */
    public function setDestinationBookingId(?string $destinationBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($destinationBookingId) && !is_string($destinationBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationBookingId, true), gettype($destinationBookingId)), __LINE__);
        }
        $this->destinationBookingId = $destinationBookingId;
        
        return $this;
    }
}
