<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarginsSearchCriteriaType StructType
 * @subpackage Structs
 */
class MarginsSearchCriteriaType extends AbstractStructBase
{
    /**
     * The needsBooking
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    protected bool $needsBooking;
    /**
     * The preventBooking
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    protected bool $preventBooking;
    /**
     * The tentativeBooking
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    protected bool $tentativeBooking;
    /**
     * The travelNoBased
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    protected bool $travelNoBased;
    /**
     * The packageBased
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    protected bool $packageBased;
    /**
     * The itemBased
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    protected bool $itemBased;
    /**
     * The positiveMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    protected bool $positiveMargin;
    /**
     * The negativeMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var bool
     */
    protected bool $negativeMargin;
    /**
     * The marginBookingDateFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $marginBookingDateFrom = null;
    /**
     * The marginBookingDateTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $marginBookingDateTo = null;
    /**
     * The travelStartDateFrom
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelStartDateFrom = null;
    /**
     * The travelStartDateTo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelStartDateTo = null;
    /**
     * The destination
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The orderNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The incomingInvoiceComplete
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $incomingInvoiceComplete = null;
    /**
     * The unitNames
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $unitNames = [];
    /**
     * The travelNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * The packageSupplierId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $packageSupplierId = null;
    /**
     * The itemSupplierId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $itemSupplierId = null;
    /**
     * Constructor method for MarginsSearchCriteriaType
     * @uses MarginsSearchCriteriaType::setNeedsBooking()
     * @uses MarginsSearchCriteriaType::setPreventBooking()
     * @uses MarginsSearchCriteriaType::setTentativeBooking()
     * @uses MarginsSearchCriteriaType::setTravelNoBased()
     * @uses MarginsSearchCriteriaType::setPackageBased()
     * @uses MarginsSearchCriteriaType::setItemBased()
     * @uses MarginsSearchCriteriaType::setPositiveMargin()
     * @uses MarginsSearchCriteriaType::setNegativeMargin()
     * @uses MarginsSearchCriteriaType::setMarginBookingDateFrom()
     * @uses MarginsSearchCriteriaType::setMarginBookingDateTo()
     * @uses MarginsSearchCriteriaType::setTravelStartDateFrom()
     * @uses MarginsSearchCriteriaType::setTravelStartDateTo()
     * @uses MarginsSearchCriteriaType::setDestination()
     * @uses MarginsSearchCriteriaType::setOrderNo()
     * @uses MarginsSearchCriteriaType::setIncomingInvoiceComplete()
     * @uses MarginsSearchCriteriaType::setUnitNames()
     * @uses MarginsSearchCriteriaType::setTravelNo()
     * @uses MarginsSearchCriteriaType::setPackageSupplierId()
     * @uses MarginsSearchCriteriaType::setItemSupplierId()
     * @param bool $needsBooking
     * @param bool $preventBooking
     * @param bool $tentativeBooking
     * @param bool $travelNoBased
     * @param bool $packageBased
     * @param bool $itemBased
     * @param bool $positiveMargin
     * @param bool $negativeMargin
     * @param string $marginBookingDateFrom
     * @param string $marginBookingDateTo
     * @param string $travelStartDateFrom
     * @param string $travelStartDateTo
     * @param string $destination
     * @param int $orderNo
     * @param bool $incomingInvoiceComplete
     * @param string[] $unitNames
     * @param string $travelNo
     * @param string $packageSupplierId
     * @param string $itemSupplierId
     */
    public function __construct(bool $needsBooking, bool $preventBooking, bool $tentativeBooking, bool $travelNoBased, bool $packageBased, bool $itemBased, bool $positiveMargin, bool $negativeMargin, ?string $marginBookingDateFrom = null, ?string $marginBookingDateTo = null, ?string $travelStartDateFrom = null, ?string $travelStartDateTo = null, ?string $destination = null, ?int $orderNo = null, ?bool $incomingInvoiceComplete = null, array $unitNames = [], ?string $travelNo = null, ?string $packageSupplierId = null, ?string $itemSupplierId = null)
    {
        $this
            ->setNeedsBooking($needsBooking)
            ->setPreventBooking($preventBooking)
            ->setTentativeBooking($tentativeBooking)
            ->setTravelNoBased($travelNoBased)
            ->setPackageBased($packageBased)
            ->setItemBased($itemBased)
            ->setPositiveMargin($positiveMargin)
            ->setNegativeMargin($negativeMargin)
            ->setMarginBookingDateFrom($marginBookingDateFrom)
            ->setMarginBookingDateTo($marginBookingDateTo)
            ->setTravelStartDateFrom($travelStartDateFrom)
            ->setTravelStartDateTo($travelStartDateTo)
            ->setDestination($destination)
            ->setOrderNo($orderNo)
            ->setIncomingInvoiceComplete($incomingInvoiceComplete)
            ->setUnitNames($unitNames)
            ->setTravelNo($travelNo)
            ->setPackageSupplierId($packageSupplierId)
            ->setItemSupplierId($itemSupplierId);
    }
    /**
     * Get needsBooking value
     * @return bool
     */
    public function getNeedsBooking(): bool
    {
        return $this->needsBooking;
    }
    /**
     * Set needsBooking value
     * @param bool $needsBooking
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setNeedsBooking(bool $needsBooking): self
    {
        // validation for constraint: boolean
        if (!is_null($needsBooking) && !is_bool($needsBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsBooking, true), gettype($needsBooking)), __LINE__);
        }
        $this->needsBooking = $needsBooking;
        
        return $this;
    }
    /**
     * Get preventBooking value
     * @return bool
     */
    public function getPreventBooking(): bool
    {
        return $this->preventBooking;
    }
    /**
     * Set preventBooking value
     * @param bool $preventBooking
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setPreventBooking(bool $preventBooking): self
    {
        // validation for constraint: boolean
        if (!is_null($preventBooking) && !is_bool($preventBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventBooking, true), gettype($preventBooking)), __LINE__);
        }
        $this->preventBooking = $preventBooking;
        
        return $this;
    }
    /**
     * Get tentativeBooking value
     * @return bool
     */
    public function getTentativeBooking(): bool
    {
        return $this->tentativeBooking;
    }
    /**
     * Set tentativeBooking value
     * @param bool $tentativeBooking
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setTentativeBooking(bool $tentativeBooking): self
    {
        // validation for constraint: boolean
        if (!is_null($tentativeBooking) && !is_bool($tentativeBooking)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tentativeBooking, true), gettype($tentativeBooking)), __LINE__);
        }
        $this->tentativeBooking = $tentativeBooking;
        
        return $this;
    }
    /**
     * Get travelNoBased value
     * @return bool
     */
    public function getTravelNoBased(): bool
    {
        return $this->travelNoBased;
    }
    /**
     * Set travelNoBased value
     * @param bool $travelNoBased
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setTravelNoBased(bool $travelNoBased): self
    {
        // validation for constraint: boolean
        if (!is_null($travelNoBased) && !is_bool($travelNoBased)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($travelNoBased, true), gettype($travelNoBased)), __LINE__);
        }
        $this->travelNoBased = $travelNoBased;
        
        return $this;
    }
    /**
     * Get packageBased value
     * @return bool
     */
    public function getPackageBased(): bool
    {
        return $this->packageBased;
    }
    /**
     * Set packageBased value
     * @param bool $packageBased
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setPackageBased(bool $packageBased): self
    {
        // validation for constraint: boolean
        if (!is_null($packageBased) && !is_bool($packageBased)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($packageBased, true), gettype($packageBased)), __LINE__);
        }
        $this->packageBased = $packageBased;
        
        return $this;
    }
    /**
     * Get itemBased value
     * @return bool
     */
    public function getItemBased(): bool
    {
        return $this->itemBased;
    }
    /**
     * Set itemBased value
     * @param bool $itemBased
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setItemBased(bool $itemBased): self
    {
        // validation for constraint: boolean
        if (!is_null($itemBased) && !is_bool($itemBased)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($itemBased, true), gettype($itemBased)), __LINE__);
        }
        $this->itemBased = $itemBased;
        
        return $this;
    }
    /**
     * Get positiveMargin value
     * @return bool
     */
    public function getPositiveMargin(): bool
    {
        return $this->positiveMargin;
    }
    /**
     * Set positiveMargin value
     * @param bool $positiveMargin
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setPositiveMargin(bool $positiveMargin): self
    {
        // validation for constraint: boolean
        if (!is_null($positiveMargin) && !is_bool($positiveMargin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($positiveMargin, true), gettype($positiveMargin)), __LINE__);
        }
        $this->positiveMargin = $positiveMargin;
        
        return $this;
    }
    /**
     * Get negativeMargin value
     * @return bool
     */
    public function getNegativeMargin(): bool
    {
        return $this->negativeMargin;
    }
    /**
     * Set negativeMargin value
     * @param bool $negativeMargin
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setNegativeMargin(bool $negativeMargin): self
    {
        // validation for constraint: boolean
        if (!is_null($negativeMargin) && !is_bool($negativeMargin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($negativeMargin, true), gettype($negativeMargin)), __LINE__);
        }
        $this->negativeMargin = $negativeMargin;
        
        return $this;
    }
    /**
     * Get marginBookingDateFrom value
     * @return string|null
     */
    public function getMarginBookingDateFrom(): ?string
    {
        return $this->marginBookingDateFrom;
    }
    /**
     * Set marginBookingDateFrom value
     * @param string $marginBookingDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setMarginBookingDateFrom(?string $marginBookingDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($marginBookingDateFrom) && !is_string($marginBookingDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marginBookingDateFrom, true), gettype($marginBookingDateFrom)), __LINE__);
        }
        $this->marginBookingDateFrom = $marginBookingDateFrom;
        
        return $this;
    }
    /**
     * Get marginBookingDateTo value
     * @return string|null
     */
    public function getMarginBookingDateTo(): ?string
    {
        return $this->marginBookingDateTo;
    }
    /**
     * Set marginBookingDateTo value
     * @param string $marginBookingDateTo
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setMarginBookingDateTo(?string $marginBookingDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($marginBookingDateTo) && !is_string($marginBookingDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($marginBookingDateTo, true), gettype($marginBookingDateTo)), __LINE__);
        }
        $this->marginBookingDateTo = $marginBookingDateTo;
        
        return $this;
    }
    /**
     * Get travelStartDateFrom value
     * @return string|null
     */
    public function getTravelStartDateFrom(): ?string
    {
        return $this->travelStartDateFrom;
    }
    /**
     * Set travelStartDateFrom value
     * @param string $travelStartDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setTravelStartDateFrom(?string $travelStartDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($travelStartDateFrom) && !is_string($travelStartDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelStartDateFrom, true), gettype($travelStartDateFrom)), __LINE__);
        }
        $this->travelStartDateFrom = $travelStartDateFrom;
        
        return $this;
    }
    /**
     * Get travelStartDateTo value
     * @return string|null
     */
    public function getTravelStartDateTo(): ?string
    {
        return $this->travelStartDateTo;
    }
    /**
     * Set travelStartDateTo value
     * @param string $travelStartDateTo
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setTravelStartDateTo(?string $travelStartDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelStartDateTo) && !is_string($travelStartDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelStartDateTo, true), gettype($travelStartDateTo)), __LINE__);
        }
        $this->travelStartDateTo = $travelStartDateTo;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
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
     * Get incomingInvoiceComplete value
     * @return bool|null
     */
    public function getIncomingInvoiceComplete(): ?bool
    {
        return $this->incomingInvoiceComplete;
    }
    /**
     * Set incomingInvoiceComplete value
     * @param bool $incomingInvoiceComplete
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setIncomingInvoiceComplete(?bool $incomingInvoiceComplete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($incomingInvoiceComplete) && !is_bool($incomingInvoiceComplete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($incomingInvoiceComplete, true), gettype($incomingInvoiceComplete)), __LINE__);
        }
        $this->incomingInvoiceComplete = $incomingInvoiceComplete;
        
        return $this;
    }
    /**
     * Get unitNames value
     * @return string[]
     */
    public function getUnitNames(): array
    {
        return $this->unitNames;
    }
    /**
     * This method is responsible for validating the values passed to the setUnitNames method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitNames method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNamesForArrayConstraintsFromSetUnitNames(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $marginsSearchCriteriaTypeUnitNamesItem) {
            // validation for constraint: itemType
            if (!is_string($marginsSearchCriteriaTypeUnitNamesItem)) {
                $invalidValues[] = is_object($marginsSearchCriteriaTypeUnitNamesItem) ? get_class($marginsSearchCriteriaTypeUnitNamesItem) : sprintf('%s(%s)', gettype($marginsSearchCriteriaTypeUnitNamesItem), var_export($marginsSearchCriteriaTypeUnitNamesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitNames property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitNames value
     * @throws InvalidArgumentException
     * @param string[] $unitNames
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setUnitNames(array $unitNames = []): self
    {
        // validation for constraint: array
        if ('' !== ($unitNamesArrayErrorMessage = self::validateUnitNamesForArrayConstraintsFromSetUnitNames($unitNames))) {
            throw new InvalidArgumentException($unitNamesArrayErrorMessage, __LINE__);
        }
        $this->unitNames = $unitNames;
        
        return $this;
    }
    /**
     * Add item to unitNames value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function addToUnitNames(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitNames property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitNames[] = $item;
        
        return $this;
    }
    /**
     * Get travelNo value
     * @return string|null
     */
    public function getTravelNo(): ?string
    {
        return $this->travelNo;
    }
    /**
     * Set travelNo value
     * @param string $travelNo
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setTravelNo(?string $travelNo = null): self
    {
        // validation for constraint: string
        if (!is_null($travelNo) && !is_string($travelNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelNo, true), gettype($travelNo)), __LINE__);
        }
        $this->travelNo = $travelNo;
        
        return $this;
    }
    /**
     * Get packageSupplierId value
     * @return string|null
     */
    public function getPackageSupplierId(): ?string
    {
        return $this->packageSupplierId;
    }
    /**
     * Set packageSupplierId value
     * @param string $packageSupplierId
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setPackageSupplierId(?string $packageSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($packageSupplierId) && !is_string($packageSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($packageSupplierId, true), gettype($packageSupplierId)), __LINE__);
        }
        $this->packageSupplierId = $packageSupplierId;
        
        return $this;
    }
    /**
     * Get itemSupplierId value
     * @return string|null
     */
    public function getItemSupplierId(): ?string
    {
        return $this->itemSupplierId;
    }
    /**
     * Set itemSupplierId value
     * @param string $itemSupplierId
     * @return \Pggns\MidocoApi\Order\StructType\MarginsSearchCriteriaType
     */
    public function setItemSupplierId(?string $itemSupplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($itemSupplierId) && !is_string($itemSupplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemSupplierId, true), gettype($itemSupplierId)), __LINE__);
        }
        $this->itemSupplierId = $itemSupplierId;
        
        return $this;
    }
}
