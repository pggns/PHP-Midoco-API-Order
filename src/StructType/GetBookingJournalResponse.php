<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingJournalResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBookingJournalResponse extends AbstractStructBase
{
    /**
     * The MidocoBookingJournal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBookingJournal
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal[]
     */
    protected ?array $MidocoBookingJournal = null;
    /**
     * The MidocoBookingJournalSums
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBookingJournalSums
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBookingJournalSums[]
     */
    protected ?array $MidocoBookingJournalSums = null;
    /**
     * The totalNoOfRecords
     * @var int|null
     */
    protected ?int $totalNoOfRecords = null;
    /**
     * The sumDebitor
     * @var float|null
     */
    protected ?float $sumDebitor = null;
    /**
     * The sumCreditor
     * @var float|null
     */
    protected ?float $sumCreditor = null;
    /**
     * Constructor method for GetBookingJournalResponse
     * @uses GetBookingJournalResponse::setMidocoBookingJournal()
     * @uses GetBookingJournalResponse::setMidocoBookingJournalSums()
     * @uses GetBookingJournalResponse::setTotalNoOfRecords()
     * @uses GetBookingJournalResponse::setSumDebitor()
     * @uses GetBookingJournalResponse::setSumCreditor()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal[] $midocoBookingJournal
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingJournalSums[] $midocoBookingJournalSums
     * @param int $totalNoOfRecords
     * @param float $sumDebitor
     * @param float $sumCreditor
     */
    public function __construct(?array $midocoBookingJournal = null, ?array $midocoBookingJournalSums = null, ?int $totalNoOfRecords = null, ?float $sumDebitor = null, ?float $sumCreditor = null)
    {
        $this
            ->setMidocoBookingJournal($midocoBookingJournal)
            ->setMidocoBookingJournalSums($midocoBookingJournalSums)
            ->setTotalNoOfRecords($totalNoOfRecords)
            ->setSumDebitor($sumDebitor)
            ->setSumCreditor($sumCreditor);
    }
    /**
     * Get MidocoBookingJournal value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal[]
     */
    public function getMidocoBookingJournal(): ?array
    {
        return $this->MidocoBookingJournal;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBookingJournal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBookingJournal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBookingJournalForArrayConstraintFromSetMidocoBookingJournal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBookingJournalResponseMidocoBookingJournalItem) {
            // validation for constraint: itemType
            if (!$getBookingJournalResponseMidocoBookingJournalItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal) {
                $invalidValues[] = is_object($getBookingJournalResponseMidocoBookingJournalItem) ? get_class($getBookingJournalResponseMidocoBookingJournalItem) : sprintf('%s(%s)', gettype($getBookingJournalResponseMidocoBookingJournalItem), var_export($getBookingJournalResponseMidocoBookingJournalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBookingJournal property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBookingJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal[] $midocoBookingJournal
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalResponse
     */
    public function setMidocoBookingJournal(?array $midocoBookingJournal = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBookingJournalArrayErrorMessage = self::validateMidocoBookingJournalForArrayConstraintFromSetMidocoBookingJournal($midocoBookingJournal))) {
            throw new InvalidArgumentException($midocoBookingJournalArrayErrorMessage, __LINE__);
        }
        $this->MidocoBookingJournal = $midocoBookingJournal;
        
        return $this;
    }
    /**
     * Add item to MidocoBookingJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalResponse
     */
    public function addToMidocoBookingJournal(\Pggns\MidocoApi\Order\StructType\MidocoBookingJournal $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal) {
            throw new InvalidArgumentException(sprintf('The MidocoBookingJournal property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBookingJournal[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoBookingJournalSums value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBookingJournalSums[]
     */
    public function getMidocoBookingJournalSums(): ?array
    {
        return $this->MidocoBookingJournalSums;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBookingJournalSums method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBookingJournalSums method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBookingJournalSumsForArrayConstraintFromSetMidocoBookingJournalSums(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBookingJournalResponseMidocoBookingJournalSumsItem) {
            // validation for constraint: itemType
            if (!$getBookingJournalResponseMidocoBookingJournalSumsItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingJournalSums) {
                $invalidValues[] = is_object($getBookingJournalResponseMidocoBookingJournalSumsItem) ? get_class($getBookingJournalResponseMidocoBookingJournalSumsItem) : sprintf('%s(%s)', gettype($getBookingJournalResponseMidocoBookingJournalSumsItem), var_export($getBookingJournalResponseMidocoBookingJournalSumsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBookingJournalSums property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBookingJournalSums, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBookingJournalSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingJournalSums[] $midocoBookingJournalSums
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalResponse
     */
    public function setMidocoBookingJournalSums(?array $midocoBookingJournalSums = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBookingJournalSumsArrayErrorMessage = self::validateMidocoBookingJournalSumsForArrayConstraintFromSetMidocoBookingJournalSums($midocoBookingJournalSums))) {
            throw new InvalidArgumentException($midocoBookingJournalSumsArrayErrorMessage, __LINE__);
        }
        $this->MidocoBookingJournalSums = $midocoBookingJournalSums;
        
        return $this;
    }
    /**
     * Add item to MidocoBookingJournalSums value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingJournalSums $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalResponse
     */
    public function addToMidocoBookingJournalSums(\Pggns\MidocoApi\Order\StructType\MidocoBookingJournalSums $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingJournalSums) {
            throw new InvalidArgumentException(sprintf('The MidocoBookingJournalSums property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBookingJournalSums, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBookingJournalSums[] = $item;
        
        return $this;
    }
    /**
     * Get totalNoOfRecords value
     * @return int|null
     */
    public function getTotalNoOfRecords(): ?int
    {
        return $this->totalNoOfRecords;
    }
    /**
     * Set totalNoOfRecords value
     * @param int $totalNoOfRecords
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalResponse
     */
    public function setTotalNoOfRecords(?int $totalNoOfRecords = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNoOfRecords) && !(is_int($totalNoOfRecords) || ctype_digit($totalNoOfRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNoOfRecords, true), gettype($totalNoOfRecords)), __LINE__);
        }
        $this->totalNoOfRecords = $totalNoOfRecords;
        
        return $this;
    }
    /**
     * Get sumDebitor value
     * @return float|null
     */
    public function getSumDebitor(): ?float
    {
        return $this->sumDebitor;
    }
    /**
     * Set sumDebitor value
     * @param float $sumDebitor
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalResponse
     */
    public function setSumDebitor(?float $sumDebitor = null): self
    {
        // validation for constraint: float
        if (!is_null($sumDebitor) && !(is_float($sumDebitor) || is_numeric($sumDebitor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumDebitor, true), gettype($sumDebitor)), __LINE__);
        }
        $this->sumDebitor = $sumDebitor;
        
        return $this;
    }
    /**
     * Get sumCreditor value
     * @return float|null
     */
    public function getSumCreditor(): ?float
    {
        return $this->sumCreditor;
    }
    /**
     * Set sumCreditor value
     * @param float $sumCreditor
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalResponse
     */
    public function setSumCreditor(?float $sumCreditor = null): self
    {
        // validation for constraint: float
        if (!is_null($sumCreditor) && !(is_float($sumCreditor) || is_numeric($sumCreditor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($sumCreditor, true), gettype($sumCreditor)), __LINE__);
        }
        $this->sumCreditor = $sumCreditor;
        
        return $this;
    }
}
