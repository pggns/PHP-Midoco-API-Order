<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderWithSellItemExportLogResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getOrderWithSellItemExportLog -- retrieve Order and sell item info for current and previous call response is constructed as: - one OrderDTO - SellItemList (zero or more) - SellItemExportDTO (current, zero or more) - SellItemExportDTO
 * (previous, zero or more)
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrderWithSellItemExportLogResponse extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The currentSellItemExport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\SellItemExportDTO[]
     */
    protected ?array $currentSellItemExport = null;
    /**
     * The previousSellItemExport
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\SellItemExportDTO[]
     */
    protected ?array $previousSellItemExport = null;
    /**
     * The isReadOnlyByLockPeriod
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isReadOnlyByLockPeriod = null;
    /**
     * Constructor method for GetOrderWithSellItemExportLogResponse
     * @uses GetOrderWithSellItemExportLogResponse::setMidocoOrder()
     * @uses GetOrderWithSellItemExportLogResponse::setCurrentSellItemExport()
     * @uses GetOrderWithSellItemExportLogResponse::setPreviousSellItemExport()
     * @uses GetOrderWithSellItemExportLogResponse::setIsReadOnlyByLockPeriod()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @param \Pggns\MidocoApi\Order\StructType\SellItemExportDTO[] $currentSellItemExport
     * @param \Pggns\MidocoApi\Order\StructType\SellItemExportDTO[] $previousSellItemExport
     * @param bool $isReadOnlyByLockPeriod
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null, ?array $currentSellItemExport = null, ?array $previousSellItemExport = null, ?bool $isReadOnlyByLockPeriod = false)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setCurrentSellItemExport($currentSellItemExport)
            ->setPreviousSellItemExport($previousSellItemExport)
            ->setIsReadOnlyByLockPeriod($isReadOnlyByLockPeriod);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderWithSellItemExportLogResponse
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get currentSellItemExport value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO[]
     */
    public function getCurrentSellItemExport(): ?array
    {
        return $this->currentSellItemExport;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCurrentSellItemExport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCurrentSellItemExport method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCurrentSellItemExportForArrayConstraintFromSetCurrentSellItemExport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderWithSellItemExportLogResponseCurrentSellItemExportItem) {
            // validation for constraint: itemType
            if (!$getOrderWithSellItemExportLogResponseCurrentSellItemExportItem instanceof \Pggns\MidocoApi\Order\StructType\SellItemExportDTO) {
                $invalidValues[] = is_object($getOrderWithSellItemExportLogResponseCurrentSellItemExportItem) ? get_class($getOrderWithSellItemExportLogResponseCurrentSellItemExportItem) : sprintf('%s(%s)', gettype($getOrderWithSellItemExportLogResponseCurrentSellItemExportItem), var_export($getOrderWithSellItemExportLogResponseCurrentSellItemExportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The currentSellItemExport property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemExportDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set currentSellItemExport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemExportDTO[] $currentSellItemExport
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderWithSellItemExportLogResponse
     */
    public function setCurrentSellItemExport(?array $currentSellItemExport = null): self
    {
        // validation for constraint: array
        if ('' !== ($currentSellItemExportArrayErrorMessage = self::validateCurrentSellItemExportForArrayConstraintFromSetCurrentSellItemExport($currentSellItemExport))) {
            throw new InvalidArgumentException($currentSellItemExportArrayErrorMessage, __LINE__);
        }
        $this->currentSellItemExport = $currentSellItemExport;
        
        return $this;
    }
    /**
     * Add item to currentSellItemExport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemExportDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderWithSellItemExportLogResponse
     */
    public function addToCurrentSellItemExport(\Pggns\MidocoApi\Order\StructType\SellItemExportDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SellItemExportDTO) {
            throw new InvalidArgumentException(sprintf('The currentSellItemExport property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemExportDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->currentSellItemExport[] = $item;
        
        return $this;
    }
    /**
     * Get previousSellItemExport value
     * @return \Pggns\MidocoApi\Order\StructType\SellItemExportDTO[]
     */
    public function getPreviousSellItemExport(): ?array
    {
        return $this->previousSellItemExport;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPreviousSellItemExport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPreviousSellItemExport method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePreviousSellItemExportForArrayConstraintFromSetPreviousSellItemExport(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderWithSellItemExportLogResponsePreviousSellItemExportItem) {
            // validation for constraint: itemType
            if (!$getOrderWithSellItemExportLogResponsePreviousSellItemExportItem instanceof \Pggns\MidocoApi\Order\StructType\SellItemExportDTO) {
                $invalidValues[] = is_object($getOrderWithSellItemExportLogResponsePreviousSellItemExportItem) ? get_class($getOrderWithSellItemExportLogResponsePreviousSellItemExportItem) : sprintf('%s(%s)', gettype($getOrderWithSellItemExportLogResponsePreviousSellItemExportItem), var_export($getOrderWithSellItemExportLogResponsePreviousSellItemExportItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The previousSellItemExport property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemExportDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set previousSellItemExport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemExportDTO[] $previousSellItemExport
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderWithSellItemExportLogResponse
     */
    public function setPreviousSellItemExport(?array $previousSellItemExport = null): self
    {
        // validation for constraint: array
        if ('' !== ($previousSellItemExportArrayErrorMessage = self::validatePreviousSellItemExportForArrayConstraintFromSetPreviousSellItemExport($previousSellItemExport))) {
            throw new InvalidArgumentException($previousSellItemExportArrayErrorMessage, __LINE__);
        }
        $this->previousSellItemExport = $previousSellItemExport;
        
        return $this;
    }
    /**
     * Add item to previousSellItemExport value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SellItemExportDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderWithSellItemExportLogResponse
     */
    public function addToPreviousSellItemExport(\Pggns\MidocoApi\Order\StructType\SellItemExportDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SellItemExportDTO) {
            throw new InvalidArgumentException(sprintf('The previousSellItemExport property can only contain items of type \Pggns\MidocoApi\Order\StructType\SellItemExportDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->previousSellItemExport[] = $item;
        
        return $this;
    }
    /**
     * Get isReadOnlyByLockPeriod value
     * @return bool|null
     */
    public function getIsReadOnlyByLockPeriod(): ?bool
    {
        return $this->isReadOnlyByLockPeriod;
    }
    /**
     * Set isReadOnlyByLockPeriod value
     * @param bool $isReadOnlyByLockPeriod
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderWithSellItemExportLogResponse
     */
    public function setIsReadOnlyByLockPeriod(?bool $isReadOnlyByLockPeriod = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isReadOnlyByLockPeriod) && !is_bool($isReadOnlyByLockPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReadOnlyByLockPeriod, true), gettype($isReadOnlyByLockPeriod)), __LINE__);
        }
        $this->isReadOnlyByLockPeriod = $isReadOnlyByLockPeriod;
        
        return $this;
    }
}
