<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoFlightDetailsInfo4Printing StructType
 * @subpackage Structs
 */
class MidocoFlightDetailsInfo4Printing extends FlightDetailDTO
{
    /**
     * The MidocoFlightSegmentDetails4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFlightSegmentDetails4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing[]
     */
    protected array $MidocoFlightSegmentDetails4Printing = [];
    /**
     * The MidocoFlightDuration
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoFlightDuration
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFlightDuration|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoFlightDuration $MidocoFlightDuration = null;
    /**
     * The MidocoRemarks
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[]
     */
    protected array $MidocoRemarks = [];
    /**
     * The carrierName
     * @var string|null
     */
    protected ?string $carrierName = null;
    /**
     * The carrierVatId
     * @var string|null
     */
    protected ?string $carrierVatId = null;
    /**
     * The carrierAddress
     * @var string|null
     */
    protected ?string $carrierAddress = null;
    /**
     * The days
     * @var string|null
     */
    protected ?string $days = null;
    /**
     * The operatingCarrierName
     * @var string|null
     */
    protected ?string $operatingCarrierName = null;
    /**
     * The operatingCarrierVatId
     * @var string|null
     */
    protected ?string $operatingCarrierVatId = null;
    /**
     * The operatingCarrierAddress
     * @var string|null
     */
    protected ?string $operatingCarrierAddress = null;
    /**
     * Constructor method for MidocoFlightDetailsInfo4Printing
     * @uses MidocoFlightDetailsInfo4Printing::setMidocoFlightSegmentDetails4Printing()
     * @uses MidocoFlightDetailsInfo4Printing::setMidocoFlightDuration()
     * @uses MidocoFlightDetailsInfo4Printing::setMidocoRemarks()
     * @uses MidocoFlightDetailsInfo4Printing::setCarrierName()
     * @uses MidocoFlightDetailsInfo4Printing::setCarrierVatId()
     * @uses MidocoFlightDetailsInfo4Printing::setCarrierAddress()
     * @uses MidocoFlightDetailsInfo4Printing::setDays()
     * @uses MidocoFlightDetailsInfo4Printing::setOperatingCarrierName()
     * @uses MidocoFlightDetailsInfo4Printing::setOperatingCarrierVatId()
     * @uses MidocoFlightDetailsInfo4Printing::setOperatingCarrierAddress()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing[] $midocoFlightSegmentDetails4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightDuration $midocoFlightDuration
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[] $midocoRemarks
     * @param string $carrierName
     * @param string $carrierVatId
     * @param string $carrierAddress
     * @param string $days
     * @param string $operatingCarrierName
     * @param string $operatingCarrierVatId
     * @param string $operatingCarrierAddress
     */
    public function __construct(array $midocoFlightSegmentDetails4Printing = [], ?\Pggns\MidocoApi\Order\StructType\MidocoFlightDuration $midocoFlightDuration = null, array $midocoRemarks = [], ?string $carrierName = null, ?string $carrierVatId = null, ?string $carrierAddress = null, ?string $days = null, ?string $operatingCarrierName = null, ?string $operatingCarrierVatId = null, ?string $operatingCarrierAddress = null)
    {
        $this
            ->setMidocoFlightSegmentDetails4Printing($midocoFlightSegmentDetails4Printing)
            ->setMidocoFlightDuration($midocoFlightDuration)
            ->setMidocoRemarks($midocoRemarks)
            ->setCarrierName($carrierName)
            ->setCarrierVatId($carrierVatId)
            ->setCarrierAddress($carrierAddress)
            ->setDays($days)
            ->setOperatingCarrierName($operatingCarrierName)
            ->setOperatingCarrierVatId($operatingCarrierVatId)
            ->setOperatingCarrierAddress($operatingCarrierAddress);
    }
    /**
     * Get MidocoFlightSegmentDetails4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing[]
     */
    public function getMidocoFlightSegmentDetails4Printing(): array
    {
        return $this->MidocoFlightSegmentDetails4Printing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFlightSegmentDetails4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFlightSegmentDetails4Printing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFlightSegmentDetails4PrintingForArrayConstraintsFromSetMidocoFlightSegmentDetails4Printing(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoFlightDetailsInfo4PrintingMidocoFlightSegmentDetails4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoFlightDetailsInfo4PrintingMidocoFlightSegmentDetails4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing) {
                $invalidValues[] = is_object($midocoFlightDetailsInfo4PrintingMidocoFlightSegmentDetails4PrintingItem) ? get_class($midocoFlightDetailsInfo4PrintingMidocoFlightSegmentDetails4PrintingItem) : sprintf('%s(%s)', gettype($midocoFlightDetailsInfo4PrintingMidocoFlightSegmentDetails4PrintingItem), var_export($midocoFlightDetailsInfo4PrintingMidocoFlightSegmentDetails4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFlightSegmentDetails4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFlightSegmentDetails4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing[] $midocoFlightSegmentDetails4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing
     */
    public function setMidocoFlightSegmentDetails4Printing(array $midocoFlightSegmentDetails4Printing = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFlightSegmentDetails4PrintingArrayErrorMessage = self::validateMidocoFlightSegmentDetails4PrintingForArrayConstraintsFromSetMidocoFlightSegmentDetails4Printing($midocoFlightSegmentDetails4Printing))) {
            throw new InvalidArgumentException($midocoFlightSegmentDetails4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoFlightSegmentDetails4Printing = $midocoFlightSegmentDetails4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoFlightSegmentDetails4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing
     */
    public function addToMidocoFlightSegmentDetails4Printing(\Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoFlightSegmentDetails4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightSegmentDetails4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFlightSegmentDetails4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoFlightDuration value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDuration|null
     */
    public function getMidocoFlightDuration(): ?\Pggns\MidocoApi\Order\StructType\MidocoFlightDuration
    {
        return $this->MidocoFlightDuration;
    }
    /**
     * Set MidocoFlightDuration value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightDuration $midocoFlightDuration
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing
     */
    public function setMidocoFlightDuration(?\Pggns\MidocoApi\Order\StructType\MidocoFlightDuration $midocoFlightDuration = null): self
    {
        $this->MidocoFlightDuration = $midocoFlightDuration;
        
        return $this;
    }
    /**
     * Get MidocoRemarks value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[]
     */
    public function getMidocoRemarks(): array
    {
        return $this->MidocoRemarks;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRemarks method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRemarks method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRemarksForArrayConstraintsFromSetMidocoRemarks(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoFlightDetailsInfo4PrintingMidocoRemarksItem) {
            // validation for constraint: itemType
            if (!$midocoFlightDetailsInfo4PrintingMidocoRemarksItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkType) {
                $invalidValues[] = is_object($midocoFlightDetailsInfo4PrintingMidocoRemarksItem) ? get_class($midocoFlightDetailsInfo4PrintingMidocoRemarksItem) : sprintf('%s(%s)', gettype($midocoFlightDetailsInfo4PrintingMidocoRemarksItem), var_export($midocoFlightDetailsInfo4PrintingMidocoRemarksItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRemarks property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRemarks value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[] $midocoRemarks
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing
     */
    public function setMidocoRemarks(array $midocoRemarks = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRemarksArrayErrorMessage = self::validateMidocoRemarksForArrayConstraintsFromSetMidocoRemarks($midocoRemarks))) {
            throw new InvalidArgumentException($midocoRemarksArrayErrorMessage, __LINE__);
        }
        $this->MidocoRemarks = $midocoRemarks;
        
        return $this;
    }
    /**
     * Add item to MidocoRemarks value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing
     */
    public function addToMidocoRemarks(\Pggns\MidocoApi\Order\StructType\MidocoRemarkType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkType) {
            throw new InvalidArgumentException(sprintf('The MidocoRemarks property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRemarks[] = $item;
        
        return $this;
    }
    /**
     * Get carrierName value
     * @return string|null
     */
    public function getCarrierName(): ?string
    {
        return $this->carrierName;
    }
    /**
     * Set carrierName value
     * @param string $carrierName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing
     */
    public function setCarrierName(?string $carrierName = null): self
    {
        // validation for constraint: string
        if (!is_null($carrierName) && !is_string($carrierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrierName, true), gettype($carrierName)), __LINE__);
        }
        $this->carrierName = $carrierName;
        
        return $this;
    }
    /**
     * Get carrierVatId value
     * @return string|null
     */
    public function getCarrierVatId(): ?string
    {
        return $this->carrierVatId;
    }
    /**
     * Set carrierVatId value
     * @param string $carrierVatId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing
     */
    public function setCarrierVatId(?string $carrierVatId = null): self
    {
        // validation for constraint: string
        if (!is_null($carrierVatId) && !is_string($carrierVatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrierVatId, true), gettype($carrierVatId)), __LINE__);
        }
        $this->carrierVatId = $carrierVatId;
        
        return $this;
    }
    /**
     * Get carrierAddress value
     * @return string|null
     */
    public function getCarrierAddress(): ?string
    {
        return $this->carrierAddress;
    }
    /**
     * Set carrierAddress value
     * @param string $carrierAddress
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing
     */
    public function setCarrierAddress(?string $carrierAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($carrierAddress) && !is_string($carrierAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrierAddress, true), gettype($carrierAddress)), __LINE__);
        }
        $this->carrierAddress = $carrierAddress;
        
        return $this;
    }
    /**
     * Get days value
     * @return string|null
     */
    public function getDays(): ?string
    {
        return $this->days;
    }
    /**
     * Set days value
     * @param string $days
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing
     */
    public function setDays(?string $days = null): self
    {
        // validation for constraint: string
        if (!is_null($days) && !is_string($days)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($days, true), gettype($days)), __LINE__);
        }
        $this->days = $days;
        
        return $this;
    }
    /**
     * Get operatingCarrierName value
     * @return string|null
     */
    public function getOperatingCarrierName(): ?string
    {
        return $this->operatingCarrierName;
    }
    /**
     * Set operatingCarrierName value
     * @param string $operatingCarrierName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing
     */
    public function setOperatingCarrierName(?string $operatingCarrierName = null): self
    {
        // validation for constraint: string
        if (!is_null($operatingCarrierName) && !is_string($operatingCarrierName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatingCarrierName, true), gettype($operatingCarrierName)), __LINE__);
        }
        $this->operatingCarrierName = $operatingCarrierName;
        
        return $this;
    }
    /**
     * Get operatingCarrierVatId value
     * @return string|null
     */
    public function getOperatingCarrierVatId(): ?string
    {
        return $this->operatingCarrierVatId;
    }
    /**
     * Set operatingCarrierVatId value
     * @param string $operatingCarrierVatId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing
     */
    public function setOperatingCarrierVatId(?string $operatingCarrierVatId = null): self
    {
        // validation for constraint: string
        if (!is_null($operatingCarrierVatId) && !is_string($operatingCarrierVatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatingCarrierVatId, true), gettype($operatingCarrierVatId)), __LINE__);
        }
        $this->operatingCarrierVatId = $operatingCarrierVatId;
        
        return $this;
    }
    /**
     * Get operatingCarrierAddress value
     * @return string|null
     */
    public function getOperatingCarrierAddress(): ?string
    {
        return $this->operatingCarrierAddress;
    }
    /**
     * Set operatingCarrierAddress value
     * @param string $operatingCarrierAddress
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing
     */
    public function setOperatingCarrierAddress(?string $operatingCarrierAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($operatingCarrierAddress) && !is_string($operatingCarrierAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($operatingCarrierAddress, true), gettype($operatingCarrierAddress)), __LINE__);
        }
        $this->operatingCarrierAddress = $operatingCarrierAddress;
        
        return $this;
    }
}
