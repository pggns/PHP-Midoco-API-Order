<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SplitRevenueBookingVatDivsRequest StructType
 * @subpackage Structs
 */
class SplitRevenueBookingVatDivsRequest extends AbstractStructBase
{
    /**
     * The MidocoRevenueBookingVatDiv
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoRevenueBookingVatDiv
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv[]
     */
    protected array $MidocoRevenueBookingVatDiv = [];
    /**
     * The b2cPercent
     * @var float|null
     */
    protected ?float $b2cPercent = null;
    /**
     * The travelNo
     * @var string|null
     */
    protected ?string $travelNo = null;
    /**
     * Constructor method for SplitRevenueBookingVatDivsRequest
     * @uses SplitRevenueBookingVatDivsRequest::setMidocoRevenueBookingVatDiv()
     * @uses SplitRevenueBookingVatDivsRequest::setB2cPercent()
     * @uses SplitRevenueBookingVatDivsRequest::setTravelNo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv[] $midocoRevenueBookingVatDiv
     * @param float $b2cPercent
     * @param string $travelNo
     */
    public function __construct(array $midocoRevenueBookingVatDiv = [], ?float $b2cPercent = null, ?string $travelNo = null)
    {
        $this
            ->setMidocoRevenueBookingVatDiv($midocoRevenueBookingVatDiv)
            ->setB2cPercent($b2cPercent)
            ->setTravelNo($travelNo);
    }
    /**
     * Get MidocoRevenueBookingVatDiv value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv[]
     */
    public function getMidocoRevenueBookingVatDiv(): array
    {
        return $this->MidocoRevenueBookingVatDiv;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoRevenueBookingVatDiv method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRevenueBookingVatDiv method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRevenueBookingVatDivForArrayConstraintsFromSetMidocoRevenueBookingVatDiv(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $splitRevenueBookingVatDivsRequestMidocoRevenueBookingVatDivItem) {
            // validation for constraint: itemType
            if (!$splitRevenueBookingVatDivsRequestMidocoRevenueBookingVatDivItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv) {
                $invalidValues[] = is_object($splitRevenueBookingVatDivsRequestMidocoRevenueBookingVatDivItem) ? get_class($splitRevenueBookingVatDivsRequestMidocoRevenueBookingVatDivItem) : sprintf('%s(%s)', gettype($splitRevenueBookingVatDivsRequestMidocoRevenueBookingVatDivItem), var_export($splitRevenueBookingVatDivsRequestMidocoRevenueBookingVatDivItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRevenueBookingVatDiv property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRevenueBookingVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv[] $midocoRevenueBookingVatDiv
     * @return \Pggns\MidocoApi\Order\StructType\SplitRevenueBookingVatDivsRequest
     */
    public function setMidocoRevenueBookingVatDiv(array $midocoRevenueBookingVatDiv = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRevenueBookingVatDivArrayErrorMessage = self::validateMidocoRevenueBookingVatDivForArrayConstraintsFromSetMidocoRevenueBookingVatDiv($midocoRevenueBookingVatDiv))) {
            throw new InvalidArgumentException($midocoRevenueBookingVatDivArrayErrorMessage, __LINE__);
        }
        $this->MidocoRevenueBookingVatDiv = $midocoRevenueBookingVatDiv;
        
        return $this;
    }
    /**
     * Add item to MidocoRevenueBookingVatDiv value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $item
     * @return \Pggns\MidocoApi\Order\StructType\SplitRevenueBookingVatDivsRequest
     */
    public function addToMidocoRevenueBookingVatDiv(\Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv) {
            throw new InvalidArgumentException(sprintf('The MidocoRevenueBookingVatDiv property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRevenueBookingVatDiv, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRevenueBookingVatDiv[] = $item;
        
        return $this;
    }
    /**
     * Get b2cPercent value
     * @return float|null
     */
    public function getB2cPercent(): ?float
    {
        return $this->b2cPercent;
    }
    /**
     * Set b2cPercent value
     * @param float $b2cPercent
     * @return \Pggns\MidocoApi\Order\StructType\SplitRevenueBookingVatDivsRequest
     */
    public function setB2cPercent(?float $b2cPercent = null): self
    {
        // validation for constraint: float
        if (!is_null($b2cPercent) && !(is_float($b2cPercent) || is_numeric($b2cPercent))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($b2cPercent, true), gettype($b2cPercent)), __LINE__);
        }
        $this->b2cPercent = $b2cPercent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SplitRevenueBookingVatDivsRequest
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
}
