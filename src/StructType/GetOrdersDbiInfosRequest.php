<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdersDbiInfosRequest StructType
 * @subpackage Structs
 */
class GetOrdersDbiInfosRequest extends AbstractStructBase
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
     * The dbiKey
     * @var string|null
     */
    protected ?string $dbiKey = null;
    /**
     * The dbiArea
     * @var string|null
     */
    protected ?string $dbiArea = null;
    /**
     * The returnEmptyMandatoryFields
     * @var bool|null
     */
    protected ?bool $returnEmptyMandatoryFields = null;
    /**
     * The returnOnlyCustomerAssigned
     * @var bool|null
     */
    protected ?bool $returnOnlyCustomerAssigned = null;
    /**
     * The validDate
     * @var string|null
     */
    protected ?string $validDate = null;
    /**
     * Constructor method for GetOrdersDbiInfosRequest
     * @uses GetOrdersDbiInfosRequest::setDbiInfoType()
     * @uses GetOrdersDbiInfosRequest::setOrderId()
     * @uses GetOrdersDbiInfosRequest::setItemId()
     * @uses GetOrdersDbiInfosRequest::setPassengerAssignment()
     * @uses GetOrdersDbiInfosRequest::setDbiKey()
     * @uses GetOrdersDbiInfosRequest::setDbiArea()
     * @uses GetOrdersDbiInfosRequest::setReturnEmptyMandatoryFields()
     * @uses GetOrdersDbiInfosRequest::setReturnOnlyCustomerAssigned()
     * @uses GetOrdersDbiInfosRequest::setValidDate()
     * @param string $dbiInfoType
     * @param int $orderId
     * @param int $itemId
     * @param int $passengerAssignment
     * @param string $dbiKey
     * @param string $dbiArea
     * @param bool $returnEmptyMandatoryFields
     * @param bool $returnOnlyCustomerAssigned
     * @param string $validDate
     */
    public function __construct(?string $dbiInfoType = null, ?int $orderId = null, ?int $itemId = null, ?int $passengerAssignment = null, ?string $dbiKey = null, ?string $dbiArea = null, ?bool $returnEmptyMandatoryFields = null, ?bool $returnOnlyCustomerAssigned = null, ?string $validDate = null)
    {
        $this
            ->setDbiInfoType($dbiInfoType)
            ->setOrderId($orderId)
            ->setItemId($itemId)
            ->setPassengerAssignment($passengerAssignment)
            ->setDbiKey($dbiKey)
            ->setDbiArea($dbiArea)
            ->setReturnEmptyMandatoryFields($returnEmptyMandatoryFields)
            ->setReturnOnlyCustomerAssigned($returnOnlyCustomerAssigned)
            ->setValidDate($validDate);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersDbiInfosRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersDbiInfosRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersDbiInfosRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersDbiInfosRequest
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
     * Get dbiKey value
     * @return string|null
     */
    public function getDbiKey(): ?string
    {
        return $this->dbiKey;
    }
    /**
     * Set dbiKey value
     * @param string $dbiKey
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersDbiInfosRequest
     */
    public function setDbiKey(?string $dbiKey = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiKey) && !is_string($dbiKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiKey, true), gettype($dbiKey)), __LINE__);
        }
        $this->dbiKey = $dbiKey;
        
        return $this;
    }
    /**
     * Get dbiArea value
     * @return string|null
     */
    public function getDbiArea(): ?string
    {
        return $this->dbiArea;
    }
    /**
     * Set dbiArea value
     * @param string $dbiArea
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersDbiInfosRequest
     */
    public function setDbiArea(?string $dbiArea = null): self
    {
        // validation for constraint: string
        if (!is_null($dbiArea) && !is_string($dbiArea)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbiArea, true), gettype($dbiArea)), __LINE__);
        }
        $this->dbiArea = $dbiArea;
        
        return $this;
    }
    /**
     * Get returnEmptyMandatoryFields value
     * @return bool|null
     */
    public function getReturnEmptyMandatoryFields(): ?bool
    {
        return $this->returnEmptyMandatoryFields;
    }
    /**
     * Set returnEmptyMandatoryFields value
     * @param bool $returnEmptyMandatoryFields
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersDbiInfosRequest
     */
    public function setReturnEmptyMandatoryFields(?bool $returnEmptyMandatoryFields = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnEmptyMandatoryFields) && !is_bool($returnEmptyMandatoryFields)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnEmptyMandatoryFields, true), gettype($returnEmptyMandatoryFields)), __LINE__);
        }
        $this->returnEmptyMandatoryFields = $returnEmptyMandatoryFields;
        
        return $this;
    }
    /**
     * Get returnOnlyCustomerAssigned value
     * @return bool|null
     */
    public function getReturnOnlyCustomerAssigned(): ?bool
    {
        return $this->returnOnlyCustomerAssigned;
    }
    /**
     * Set returnOnlyCustomerAssigned value
     * @param bool $returnOnlyCustomerAssigned
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersDbiInfosRequest
     */
    public function setReturnOnlyCustomerAssigned(?bool $returnOnlyCustomerAssigned = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnOnlyCustomerAssigned) && !is_bool($returnOnlyCustomerAssigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnOnlyCustomerAssigned, true), gettype($returnOnlyCustomerAssigned)), __LINE__);
        }
        $this->returnOnlyCustomerAssigned = $returnOnlyCustomerAssigned;
        
        return $this;
    }
    /**
     * Get validDate value
     * @return string|null
     */
    public function getValidDate(): ?string
    {
        return $this->validDate;
    }
    /**
     * Set validDate value
     * @param string $validDate
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersDbiInfosRequest
     */
    public function setValidDate(?string $validDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validDate) && !is_string($validDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validDate, true), gettype($validDate)), __LINE__);
        }
        $this->validDate = $validDate;
        
        return $this;
    }
}
