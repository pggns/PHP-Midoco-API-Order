<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrdersDbiInfosRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteOrdersDbiInfosRequest extends AbstractStructBase
{
    /**
     * The dbiInfoType
     * @var string|null
     */
    protected ?string $dbiInfoType = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The passengerAssignment
     * @var int|null
     */
    protected ?int $passengerAssignment = null;
    /**
     * The MidocoOrdersDbiInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdersDbiInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[]
     */
    protected ?array $MidocoOrdersDbiInfo = null;
    /**
     * Constructor method for DeleteOrdersDbiInfosRequest
     * @uses DeleteOrdersDbiInfosRequest::setDbiInfoType()
     * @uses DeleteOrdersDbiInfosRequest::setOrderId()
     * @uses DeleteOrdersDbiInfosRequest::setItemId()
     * @uses DeleteOrdersDbiInfosRequest::setPassengerAssignment()
     * @uses DeleteOrdersDbiInfosRequest::setMidocoOrdersDbiInfo()
     * @param string $dbiInfoType
     * @param int $orderId
     * @param int $itemId
     * @param int $passengerAssignment
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[] $midocoOrdersDbiInfo
     */
    public function __construct(?string $dbiInfoType = null, ?int $orderId = null, ?int $itemId = null, ?int $passengerAssignment = null, ?array $midocoOrdersDbiInfo = null)
    {
        $this
            ->setDbiInfoType($dbiInfoType)
            ->setOrderId($orderId)
            ->setItemId($itemId)
            ->setPassengerAssignment($passengerAssignment)
            ->setMidocoOrdersDbiInfo($midocoOrdersDbiInfo);
    }
    /**
     * Get dbiInfoType value
     * @return string|null
     */
    public function getDbiInfoType(): ?string
    {
        return $this->dbiInfoType;
    }
    /**
     * Set dbiInfoType value
     * @param string $dbiInfoType
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrdersDbiInfosRequest
     */
    public function setDbiInfoType(?string $dbiInfoType = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiInfoType) && !is_string($dbiInfoType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiInfoType, true), gettype($dbiInfoType)), __LINE__);
        }
        $this->dbiInfoType = $dbiInfoType;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrdersDbiInfosRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrdersDbiInfosRequest
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get passengerAssignment value
     * @return int|null
     */
    public function getPassengerAssignment(): ?int
    {
        return $this->passengerAssignment;
    }
    /**
     * Set passengerAssignment value
     * @param int $passengerAssignment
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrdersDbiInfosRequest
     */
    public function setPassengerAssignment(?int $passengerAssignment = null): self
    {
        // validation for constraint: int
        if (!is_null($passengerAssignment) && !(is_int($passengerAssignment) || ctype_digit($passengerAssignment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passengerAssignment, true), gettype($passengerAssignment)), __LINE__);
        }
        $this->passengerAssignment = $passengerAssignment;
        
        return $this;
    }
    /**
     * Get MidocoOrdersDbiInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[]
     */
    public function getMidocoOrdersDbiInfo(): ?array
    {
        return $this->MidocoOrdersDbiInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrdersDbiInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdersDbiInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdersDbiInfoForArrayConstraintFromSetMidocoOrdersDbiInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteOrdersDbiInfosRequestMidocoOrdersDbiInfoItem) {
            // validation for constraint: itemType
            if (!$deleteOrdersDbiInfosRequestMidocoOrdersDbiInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo) {
                $invalidValues[] = is_object($deleteOrdersDbiInfosRequestMidocoOrdersDbiInfoItem) ? get_class($deleteOrdersDbiInfosRequestMidocoOrdersDbiInfoItem) : sprintf('%s(%s)', gettype($deleteOrdersDbiInfosRequestMidocoOrdersDbiInfoItem), var_export($deleteOrdersDbiInfosRequestMidocoOrdersDbiInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdersDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdersDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[] $midocoOrdersDbiInfo
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrdersDbiInfosRequest
     */
    public function setMidocoOrdersDbiInfo(?array $midocoOrdersDbiInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdersDbiInfoArrayErrorMessage = self::validateMidocoOrdersDbiInfoForArrayConstraintFromSetMidocoOrdersDbiInfo($midocoOrdersDbiInfo))) {
            throw new InvalidArgumentException($midocoOrdersDbiInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdersDbiInfo = $midocoOrdersDbiInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdersDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrdersDbiInfosRequest
     */
    public function addToMidocoOrdersDbiInfo(\Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdersDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdersDbiInfo[] = $item;
        
        return $this;
    }
}
