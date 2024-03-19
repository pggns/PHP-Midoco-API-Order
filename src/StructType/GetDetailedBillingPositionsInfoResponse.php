<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDetailedBillingPositionsInfoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetDetailedBillingPositionsInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoDetailedBillingPositionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDetailedBillingPositionInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo[]
     */
    protected ?array $MidocoDetailedBillingPositionInfo = null;
    /**
     * The MidocoSellPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellPassenger
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[]
     */
    protected ?array $MidocoSellPassenger = null;
    /**
     * The orderInternalVersion
     * @var int|null
     */
    protected ?int $orderInternalVersion = null;
    /**
     * The allowCollectiveInvoice
     * @var bool|null
     */
    protected ?bool $allowCollectiveInvoice = null;
    /**
     * Constructor method for GetDetailedBillingPositionsInfoResponse
     * @uses GetDetailedBillingPositionsInfoResponse::setMidocoDetailedBillingPositionInfo()
     * @uses GetDetailedBillingPositionsInfoResponse::setMidocoSellPassenger()
     * @uses GetDetailedBillingPositionsInfoResponse::setOrderInternalVersion()
     * @uses GetDetailedBillingPositionsInfoResponse::setAllowCollectiveInvoice()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo[] $midocoDetailedBillingPositionInfo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @param int $orderInternalVersion
     * @param bool $allowCollectiveInvoice
     */
    public function __construct(?array $midocoDetailedBillingPositionInfo = null, ?array $midocoSellPassenger = null, ?int $orderInternalVersion = null, ?bool $allowCollectiveInvoice = null)
    {
        $this
            ->setMidocoDetailedBillingPositionInfo($midocoDetailedBillingPositionInfo)
            ->setMidocoSellPassenger($midocoSellPassenger)
            ->setOrderInternalVersion($orderInternalVersion)
            ->setAllowCollectiveInvoice($allowCollectiveInvoice);
    }
    /**
     * Get MidocoDetailedBillingPositionInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo[]
     */
    public function getMidocoDetailedBillingPositionInfo(): ?array
    {
        return $this->MidocoDetailedBillingPositionInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDetailedBillingPositionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDetailedBillingPositionInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDetailedBillingPositionInfoForArrayConstraintFromSetMidocoDetailedBillingPositionInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDetailedBillingPositionsInfoResponseMidocoDetailedBillingPositionInfoItem) {
            // validation for constraint: itemType
            if (!$getDetailedBillingPositionsInfoResponseMidocoDetailedBillingPositionInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo) {
                $invalidValues[] = is_object($getDetailedBillingPositionsInfoResponseMidocoDetailedBillingPositionInfoItem) ? get_class($getDetailedBillingPositionsInfoResponseMidocoDetailedBillingPositionInfoItem) : sprintf('%s(%s)', gettype($getDetailedBillingPositionsInfoResponseMidocoDetailedBillingPositionInfoItem), var_export($getDetailedBillingPositionsInfoResponseMidocoDetailedBillingPositionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDetailedBillingPositionInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDetailedBillingPositionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo[] $midocoDetailedBillingPositionInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetDetailedBillingPositionsInfoResponse
     */
    public function setMidocoDetailedBillingPositionInfo(?array $midocoDetailedBillingPositionInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDetailedBillingPositionInfoArrayErrorMessage = self::validateMidocoDetailedBillingPositionInfoForArrayConstraintFromSetMidocoDetailedBillingPositionInfo($midocoDetailedBillingPositionInfo))) {
            throw new InvalidArgumentException($midocoDetailedBillingPositionInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoDetailedBillingPositionInfo = $midocoDetailedBillingPositionInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoDetailedBillingPositionInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\GetDetailedBillingPositionsInfoResponse
     */
    public function addToMidocoDetailedBillingPositionInfo(\Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoDetailedBillingPositionInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDetailedBillingPositionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDetailedBillingPositionInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSellPassenger value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[]
     */
    public function getMidocoSellPassenger(): ?array
    {
        return $this->MidocoSellPassenger;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSellPassenger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellPassenger method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellPassengerForArrayConstraintFromSetMidocoSellPassenger(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDetailedBillingPositionsInfoResponseMidocoSellPassengerItem) {
            // validation for constraint: itemType
            if (!$getDetailedBillingPositionsInfoResponseMidocoSellPassengerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger) {
                $invalidValues[] = is_object($getDetailedBillingPositionsInfoResponseMidocoSellPassengerItem) ? get_class($getDetailedBillingPositionsInfoResponseMidocoSellPassengerItem) : sprintf('%s(%s)', gettype($getDetailedBillingPositionsInfoResponseMidocoSellPassengerItem), var_export($getDetailedBillingPositionsInfoResponseMidocoSellPassengerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @return \Pggns\MidocoApi\Order\StructType\GetDetailedBillingPositionsInfoResponse
     */
    public function setMidocoSellPassenger(?array $midocoSellPassenger = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellPassengerArrayErrorMessage = self::validateMidocoSellPassengerForArrayConstraintFromSetMidocoSellPassenger($midocoSellPassenger))) {
            throw new InvalidArgumentException($midocoSellPassengerArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellPassenger = $midocoSellPassenger;
        
        return $this;
    }
    /**
     * Add item to MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger $item
     * @return \Pggns\MidocoApi\Order\StructType\GetDetailedBillingPositionsInfoResponse
     */
    public function addToMidocoSellPassenger(\Pggns\MidocoApi\Order\StructType\MidocoSellPassenger $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger) {
            throw new InvalidArgumentException(sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellPassenger[] = $item;
        
        return $this;
    }
    /**
     * Get orderInternalVersion value
     * @return int|null
     */
    public function getOrderInternalVersion(): ?int
    {
        return $this->orderInternalVersion;
    }
    /**
     * Set orderInternalVersion value
     * @param int $orderInternalVersion
     * @return \Pggns\MidocoApi\Order\StructType\GetDetailedBillingPositionsInfoResponse
     */
    public function setOrderInternalVersion(?int $orderInternalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($orderInternalVersion) && !(is_int($orderInternalVersion) || ctype_digit($orderInternalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderInternalVersion, true), gettype($orderInternalVersion)), __LINE__);
        }
        $this->orderInternalVersion = $orderInternalVersion;
        
        return $this;
    }
    /**
     * Get allowCollectiveInvoice value
     * @return bool|null
     */
    public function getAllowCollectiveInvoice(): ?bool
    {
        return $this->allowCollectiveInvoice;
    }
    /**
     * Set allowCollectiveInvoice value
     * @param bool $allowCollectiveInvoice
     * @return \Pggns\MidocoApi\Order\StructType\GetDetailedBillingPositionsInfoResponse
     */
    public function setAllowCollectiveInvoice(?bool $allowCollectiveInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($allowCollectiveInvoice) && !is_bool($allowCollectiveInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowCollectiveInvoice, true), gettype($allowCollectiveInvoice)), __LINE__);
        }
        $this->allowCollectiveInvoice = $allowCollectiveInvoice;
        
        return $this;
    }
}
