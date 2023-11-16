<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderRequest StructType
 * @subpackage Structs
 */
class GetOrderRequest extends AbstractStructBase
{
    /**
     * The IncludeOrderDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $IncludeOrderDetail = [];
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * The maskCcNo
     * @var bool|null
     */
    protected ?bool $maskCcNo = null;
    /**
     * The withDetails
     * Meta information extracted from the WSDL
     * - documentation: If true, the following fields are populated: ExistTravelPlans ExistOrderDocuments ExistOrderNotices ExistOrderRemarks ExistOrderBillings ExistPaymentPaycodes
     * @var bool|null
     */
    protected ?bool $withDetails = null;
    /**
     * Constructor method for GetOrderRequest
     * @uses GetOrderRequest::setIncludeOrderDetail()
     * @uses GetOrderRequest::setOrderNo()
     * @uses GetOrderRequest::setOrderId()
     * @uses GetOrderRequest::setInternalVersion()
     * @uses GetOrderRequest::setMaskCcNo()
     * @uses GetOrderRequest::setWithDetails()
     * @param string[] $includeOrderDetail
     * @param int $orderNo
     * @param int $orderId
     * @param int $internalVersion
     * @param bool $maskCcNo
     * @param bool $withDetails
     */
    public function __construct(array $includeOrderDetail = [], ?int $orderNo = null, ?int $orderId = null, ?int $internalVersion = null, ?bool $maskCcNo = null, ?bool $withDetails = null)
    {
        $this
            ->setIncludeOrderDetail($includeOrderDetail)
            ->setOrderNo($orderNo)
            ->setOrderId($orderId)
            ->setInternalVersion($internalVersion)
            ->setMaskCcNo($maskCcNo)
            ->setWithDetails($withDetails);
    }
    /**
     * Get IncludeOrderDetail value
     * @return string[]
     */
    public function getIncludeOrderDetail(): array
    {
        return $this->IncludeOrderDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setIncludeOrderDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIncludeOrderDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIncludeOrderDetailForArrayConstraintsFromSetIncludeOrderDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrderRequestIncludeOrderDetailItem) {
            // validation for constraint: enumeration
            if (!\Pggns\MidocoApi\Order\EnumType\GetOrderDetail::valueIsValid($getOrderRequestIncludeOrderDetailItem)) {
                $invalidValues[] = is_object($getOrderRequestIncludeOrderDetailItem) ? get_class($getOrderRequestIncludeOrderDetailItem) : sprintf('%s(%s)', gettype($getOrderRequestIncludeOrderDetailItem), var_export($getOrderRequestIncludeOrderDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\GetOrderDetail', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\GetOrderDetail::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IncludeOrderDetail value
     * @uses \Pggns\MidocoApi\Order\EnumType\GetOrderDetail::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\GetOrderDetail::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $includeOrderDetail
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderRequest
     */
    public function setIncludeOrderDetail(array $includeOrderDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($includeOrderDetailArrayErrorMessage = self::validateIncludeOrderDetailForArrayConstraintsFromSetIncludeOrderDetail($includeOrderDetail))) {
            throw new InvalidArgumentException($includeOrderDetailArrayErrorMessage, __LINE__);
        }
        $this->IncludeOrderDetail = $includeOrderDetail;
        
        return $this;
    }
    /**
     * Add item to IncludeOrderDetail value
     * @uses \Pggns\MidocoApi\Order\EnumType\GetOrderDetail::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\GetOrderDetail::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderRequest
     */
    public function addToIncludeOrderDetail(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\GetOrderDetail::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\GetOrderDetail', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\GetOrderDetail::getValidValues())), __LINE__);
        }
        $this->IncludeOrderDetail[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderRequest
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
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
    /**
     * Get maskCcNo value
     * @return bool|null
     */
    public function getMaskCcNo(): ?bool
    {
        return $this->maskCcNo;
    }
    /**
     * Set maskCcNo value
     * @param bool $maskCcNo
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderRequest
     */
    public function setMaskCcNo(?bool $maskCcNo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($maskCcNo) && !is_bool($maskCcNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($maskCcNo, true), gettype($maskCcNo)), __LINE__);
        }
        $this->maskCcNo = $maskCcNo;
        
        return $this;
    }
    /**
     * Get withDetails value
     * @return bool|null
     */
    public function getWithDetails(): ?bool
    {
        return $this->withDetails;
    }
    /**
     * Set withDetails value
     * @param bool $withDetails
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderRequest
     */
    public function setWithDetails(?bool $withDetails = null): self
    {
        // validation for constraint: boolean
        if (!is_null($withDetails) && !is_bool($withDetails)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($withDetails, true), gettype($withDetails)), __LINE__);
        }
        $this->withDetails = $withDetails;
        
        return $this;
    }
}
