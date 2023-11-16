<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrdersDbiInfosRequest StructType
 * @subpackage Structs
 */
class SaveOrdersDbiInfosRequest extends AbstractStructBase
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
     * The executeWorkflow
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $executeWorkflow = null;
    /**
     * The MidocoOrdersDbiInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdersDbiInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[]
     */
    protected array $MidocoOrdersDbiInfo = [];
    /**
     * Constructor method for SaveOrdersDbiInfosRequest
     * @uses SaveOrdersDbiInfosRequest::setDbiInfoType()
     * @uses SaveOrdersDbiInfosRequest::setOrderId()
     * @uses SaveOrdersDbiInfosRequest::setItemId()
     * @uses SaveOrdersDbiInfosRequest::setPassengerAssignment()
     * @uses SaveOrdersDbiInfosRequest::setExecuteWorkflow()
     * @uses SaveOrdersDbiInfosRequest::setMidocoOrdersDbiInfo()
     * @param string $dbiInfoType
     * @param int $orderId
     * @param int $itemId
     * @param int $passengerAssignment
     * @param bool $executeWorkflow
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[] $midocoOrdersDbiInfo
     */
    public function __construct(?string $dbiInfoType = null, ?int $orderId = null, ?int $itemId = null, ?int $passengerAssignment = null, ?bool $executeWorkflow = true, array $midocoOrdersDbiInfo = [])
    {
        $this
            ->setDbiInfoType($dbiInfoType)
            ->setOrderId($orderId)
            ->setItemId($itemId)
            ->setPassengerAssignment($passengerAssignment)
            ->setExecuteWorkflow($executeWorkflow)
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrdersDbiInfosRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrdersDbiInfosRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrdersDbiInfosRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrdersDbiInfosRequest
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
     * Get executeWorkflow value
     * @return bool|null
     */
    public function getExecuteWorkflow(): ?bool
    {
        return $this->executeWorkflow;
    }
    /**
     * Set executeWorkflow value
     * @param bool $executeWorkflow
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrdersDbiInfosRequest
     */
    public function setExecuteWorkflow(?bool $executeWorkflow = true): self
    {
        // validation for constraint: boolean
        if (!is_null($executeWorkflow) && !is_bool($executeWorkflow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($executeWorkflow, true), gettype($executeWorkflow)), __LINE__);
        }
        $this->executeWorkflow = $executeWorkflow;
        
        return $this;
    }
    /**
     * Get MidocoOrdersDbiInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[]
     */
    public function getMidocoOrdersDbiInfo(): array
    {
        return $this->MidocoOrdersDbiInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrdersDbiInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdersDbiInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdersDbiInfoForArrayConstraintsFromSetMidocoOrdersDbiInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveOrdersDbiInfosRequestMidocoOrdersDbiInfoItem) {
            // validation for constraint: itemType
            if (!$saveOrdersDbiInfosRequestMidocoOrdersDbiInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo) {
                $invalidValues[] = is_object($saveOrdersDbiInfosRequestMidocoOrdersDbiInfoItem) ? get_class($saveOrdersDbiInfosRequestMidocoOrdersDbiInfoItem) : sprintf('%s(%s)', gettype($saveOrdersDbiInfosRequestMidocoOrdersDbiInfoItem), var_export($saveOrdersDbiInfosRequestMidocoOrdersDbiInfoItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrdersDbiInfosRequest
     */
    public function setMidocoOrdersDbiInfo(array $midocoOrdersDbiInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdersDbiInfoArrayErrorMessage = self::validateMidocoOrdersDbiInfoForArrayConstraintsFromSetMidocoOrdersDbiInfo($midocoOrdersDbiInfo))) {
            throw new InvalidArgumentException($midocoOrdersDbiInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdersDbiInfo = $midocoOrdersDbiInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdersDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrdersDbiInfosRequest
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
