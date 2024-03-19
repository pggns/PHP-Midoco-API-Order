<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceFlightTimeChangesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AnnounceFlightTimeChangesRequest extends AbstractStructBase
{
    /**
     * The bookingId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $bookingId;
    /**
     * The MidocoFlightTimeChange
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoFlightTimeChange
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange[]
     */
    protected ?array $MidocoFlightTimeChange = null;
    /**
     * The supplierId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected ?array $supplierId = null;
    /**
     * The filekey
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $filekey = null;
    /**
     * The passengerName
     * @var string|null
     */
    protected ?string $passengerName = null;
    /**
     * The passengerForename
     * @var string|null
     */
    protected ?string $passengerForename = null;
    /**
     * The containsOldInfo
     * @var bool|null
     */
    protected ?bool $containsOldInfo = null;
    /**
     * The changeDate
     * @var string|null
     */
    protected ?string $changeDate = null;
    /**
     * The containsPassengerInfo
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $containsPassengerInfo = null;
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * Constructor method for AnnounceFlightTimeChangesRequest
     * @uses AnnounceFlightTimeChangesRequest::setBookingId()
     * @uses AnnounceFlightTimeChangesRequest::setMidocoFlightTimeChange()
     * @uses AnnounceFlightTimeChangesRequest::setSupplierId()
     * @uses AnnounceFlightTimeChangesRequest::setFilekey()
     * @uses AnnounceFlightTimeChangesRequest::setPassengerName()
     * @uses AnnounceFlightTimeChangesRequest::setPassengerForename()
     * @uses AnnounceFlightTimeChangesRequest::setContainsOldInfo()
     * @uses AnnounceFlightTimeChangesRequest::setChangeDate()
     * @uses AnnounceFlightTimeChangesRequest::setContainsPassengerInfo()
     * @uses AnnounceFlightTimeChangesRequest::setStartTravel()
     * @uses AnnounceFlightTimeChangesRequest::setEndTravel()
     * @param string $bookingId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange[] $midocoFlightTimeChange
     * @param string[] $supplierId
     * @param string $filekey
     * @param string $passengerName
     * @param string $passengerForename
     * @param bool $containsOldInfo
     * @param string $changeDate
     * @param bool $containsPassengerInfo
     * @param string $startTravel
     * @param string $endTravel
     */
    public function __construct(string $bookingId, ?array $midocoFlightTimeChange = null, ?array $supplierId = null, ?string $filekey = null, ?string $passengerName = null, ?string $passengerForename = null, ?bool $containsOldInfo = null, ?string $changeDate = null, ?bool $containsPassengerInfo = true, ?string $startTravel = null, ?string $endTravel = null)
    {
        $this
            ->setBookingId($bookingId)
            ->setMidocoFlightTimeChange($midocoFlightTimeChange)
            ->setSupplierId($supplierId)
            ->setFilekey($filekey)
            ->setPassengerName($passengerName)
            ->setPassengerForename($passengerForename)
            ->setContainsOldInfo($containsOldInfo)
            ->setChangeDate($changeDate)
            ->setContainsPassengerInfo($containsPassengerInfo)
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel);
    }
    /**
     * Get bookingId value
     * @return string
     */
    public function getBookingId(): string
    {
        return $this->bookingId;
    }
    /**
     * Set bookingId value
     * @param string $bookingId
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest
     */
    public function setBookingId(string $bookingId): self
    {
        // validation for constraint: string
        if (!is_null($bookingId) && !is_string($bookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingId, true), gettype($bookingId)), __LINE__);
        }
        $this->bookingId = $bookingId;
        
        return $this;
    }
    /**
     * Get MidocoFlightTimeChange value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange[]
     */
    public function getMidocoFlightTimeChange(): ?array
    {
        return $this->MidocoFlightTimeChange;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFlightTimeChange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFlightTimeChange method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFlightTimeChangeForArrayConstraintFromSetMidocoFlightTimeChange(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $announceFlightTimeChangesRequestMidocoFlightTimeChangeItem) {
            // validation for constraint: itemType
            if (!$announceFlightTimeChangesRequestMidocoFlightTimeChangeItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange) {
                $invalidValues[] = is_object($announceFlightTimeChangesRequestMidocoFlightTimeChangeItem) ? get_class($announceFlightTimeChangesRequestMidocoFlightTimeChangeItem) : sprintf('%s(%s)', gettype($announceFlightTimeChangesRequestMidocoFlightTimeChangeItem), var_export($announceFlightTimeChangesRequestMidocoFlightTimeChangeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFlightTimeChange property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFlightTimeChange value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange[] $midocoFlightTimeChange
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest
     */
    public function setMidocoFlightTimeChange(?array $midocoFlightTimeChange = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFlightTimeChangeArrayErrorMessage = self::validateMidocoFlightTimeChangeForArrayConstraintFromSetMidocoFlightTimeChange($midocoFlightTimeChange))) {
            throw new InvalidArgumentException($midocoFlightTimeChangeArrayErrorMessage, __LINE__);
        }
        $this->MidocoFlightTimeChange = $midocoFlightTimeChange;
        
        return $this;
    }
    /**
     * Add item to MidocoFlightTimeChange value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange $item
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest
     */
    public function addToMidocoFlightTimeChange(\Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange) {
            throw new InvalidArgumentException(sprintf('The MidocoFlightTimeChange property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightTimeChange, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFlightTimeChange[] = $item;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string[]
     */
    public function getSupplierId(): ?array
    {
        return $this->supplierId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSupplierId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplierId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplierIdForArrayConstraintFromSetSupplierId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $announceFlightTimeChangesRequestSupplierIdItem) {
            // validation for constraint: itemType
            if (!is_string($announceFlightTimeChangesRequestSupplierIdItem)) {
                $invalidValues[] = is_object($announceFlightTimeChangesRequestSupplierIdItem) ? get_class($announceFlightTimeChangesRequestSupplierIdItem) : sprintf('%s(%s)', gettype($announceFlightTimeChangesRequestSupplierIdItem), var_export($announceFlightTimeChangesRequestSupplierIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supplierId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set supplierId value
     * @throws InvalidArgumentException
     * @param string[] $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest
     */
    public function setSupplierId(?array $supplierId = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplierIdArrayErrorMessage = self::validateSupplierIdForArrayConstraintFromSetSupplierId($supplierId))) {
            throw new InvalidArgumentException($supplierIdArrayErrorMessage, __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Add item to supplierId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest
     */
    public function addToSupplierId(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The supplierId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplierId[] = $item;
        
        return $this;
    }
    /**
     * Get filekey value
     * @return string|null
     */
    public function getFilekey(): ?string
    {
        return $this->filekey;
    }
    /**
     * Set filekey value
     * @param string $filekey
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest
     */
    public function setFilekey(?string $filekey = null): self
    {
        // validation for constraint: string
        if (!is_null($filekey) && !is_string($filekey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filekey, true), gettype($filekey)), __LINE__);
        }
        $this->filekey = $filekey;
        
        return $this;
    }
    /**
     * Get passengerName value
     * @return string|null
     */
    public function getPassengerName(): ?string
    {
        return $this->passengerName;
    }
    /**
     * Set passengerName value
     * @param string $passengerName
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest
     */
    public function setPassengerName(?string $passengerName = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerName) && !is_string($passengerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerName, true), gettype($passengerName)), __LINE__);
        }
        $this->passengerName = $passengerName;
        
        return $this;
    }
    /**
     * Get passengerForename value
     * @return string|null
     */
    public function getPassengerForename(): ?string
    {
        return $this->passengerForename;
    }
    /**
     * Set passengerForename value
     * @param string $passengerForename
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest
     */
    public function setPassengerForename(?string $passengerForename = null): self
    {
        // validation for constraint: string
        if (!is_null($passengerForename) && !is_string($passengerForename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passengerForename, true), gettype($passengerForename)), __LINE__);
        }
        $this->passengerForename = $passengerForename;
        
        return $this;
    }
    /**
     * Get containsOldInfo value
     * @return bool|null
     */
    public function getContainsOldInfo(): ?bool
    {
        return $this->containsOldInfo;
    }
    /**
     * Set containsOldInfo value
     * @param bool $containsOldInfo
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest
     */
    public function setContainsOldInfo(?bool $containsOldInfo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($containsOldInfo) && !is_bool($containsOldInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($containsOldInfo, true), gettype($containsOldInfo)), __LINE__);
        }
        $this->containsOldInfo = $containsOldInfo;
        
        return $this;
    }
    /**
     * Get changeDate value
     * @return string|null
     */
    public function getChangeDate(): ?string
    {
        return $this->changeDate;
    }
    /**
     * Set changeDate value
     * @param string $changeDate
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest
     */
    public function setChangeDate(?string $changeDate = null): self
    {
        // validation for constraint: string
        if (!is_null($changeDate) && !is_string($changeDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changeDate, true), gettype($changeDate)), __LINE__);
        }
        $this->changeDate = $changeDate;
        
        return $this;
    }
    /**
     * Get containsPassengerInfo value
     * @return bool|null
     */
    public function getContainsPassengerInfo(): ?bool
    {
        return $this->containsPassengerInfo;
    }
    /**
     * Set containsPassengerInfo value
     * @param bool $containsPassengerInfo
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest
     */
    public function setContainsPassengerInfo(?bool $containsPassengerInfo = true): self
    {
        // validation for constraint: boolean
        if (!is_null($containsPassengerInfo) && !is_bool($containsPassengerInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($containsPassengerInfo, true), gettype($containsPassengerInfo)), __LINE__);
        }
        $this->containsPassengerInfo = $containsPassengerInfo;
        
        return $this;
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceFlightTimeChangesRequest
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
        return $this;
    }
}
