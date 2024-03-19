<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingJournalForRevenueResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBookingJournalForRevenueResponse extends AbstractStructBase
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
     * Constructor method for GetBookingJournalForRevenueResponse
     * @uses GetBookingJournalForRevenueResponse::setMidocoBookingJournal()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal[] $midocoBookingJournal
     */
    public function __construct(?array $midocoBookingJournal = null)
    {
        $this
            ->setMidocoBookingJournal($midocoBookingJournal);
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
        foreach ($values as $getBookingJournalForRevenueResponseMidocoBookingJournalItem) {
            // validation for constraint: itemType
            if (!$getBookingJournalForRevenueResponseMidocoBookingJournalItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBookingJournal) {
                $invalidValues[] = is_object($getBookingJournalForRevenueResponseMidocoBookingJournalItem) ? get_class($getBookingJournalForRevenueResponseMidocoBookingJournalItem) : sprintf('%s(%s)', gettype($getBookingJournalForRevenueResponseMidocoBookingJournalItem), var_export($getBookingJournalForRevenueResponseMidocoBookingJournalItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalForRevenueResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\GetBookingJournalForRevenueResponse
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
}
