<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplAgencySettlemJournalsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSupplAgencySettlemJournalsRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplAgencySettlemJournal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplAgencySettlemJournal
     * @var \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO[]
     */
    protected ?array $MidocoSupplAgencySettlemJournal = null;
    /**
     * Constructor method for SaveSupplAgencySettlemJournalsRequest
     * @uses SaveSupplAgencySettlemJournalsRequest::setMidocoSupplAgencySettlemJournal()
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO[] $midocoSupplAgencySettlemJournal
     */
    public function __construct(?array $midocoSupplAgencySettlemJournal = null)
    {
        $this
            ->setMidocoSupplAgencySettlemJournal($midocoSupplAgencySettlemJournal);
    }
    /**
     * Get MidocoSupplAgencySettlemJournal value
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO[]
     */
    public function getMidocoSupplAgencySettlemJournal(): ?array
    {
        return $this->MidocoSupplAgencySettlemJournal;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplAgencySettlemJournal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplAgencySettlemJournal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplAgencySettlemJournalForArrayConstraintFromSetMidocoSupplAgencySettlemJournal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveSupplAgencySettlemJournalsRequestMidocoSupplAgencySettlemJournalItem) {
            // validation for constraint: itemType
            if (!$saveSupplAgencySettlemJournalsRequestMidocoSupplAgencySettlemJournalItem instanceof \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO) {
                $invalidValues[] = is_object($saveSupplAgencySettlemJournalsRequestMidocoSupplAgencySettlemJournalItem) ? get_class($saveSupplAgencySettlemJournalsRequestMidocoSupplAgencySettlemJournalItem) : sprintf('%s(%s)', gettype($saveSupplAgencySettlemJournalsRequestMidocoSupplAgencySettlemJournalItem), var_export($saveSupplAgencySettlemJournalsRequestMidocoSupplAgencySettlemJournalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplAgencySettlemJournal property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplAgencySettlemJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO[] $midocoSupplAgencySettlemJournal
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplAgencySettlemJournalsRequest
     */
    public function setMidocoSupplAgencySettlemJournal(?array $midocoSupplAgencySettlemJournal = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplAgencySettlemJournalArrayErrorMessage = self::validateMidocoSupplAgencySettlemJournalForArrayConstraintFromSetMidocoSupplAgencySettlemJournal($midocoSupplAgencySettlemJournal))) {
            throw new InvalidArgumentException($midocoSupplAgencySettlemJournalArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplAgencySettlemJournal = $midocoSupplAgencySettlemJournal;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplAgencySettlemJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplAgencySettlemJournalsRequest
     */
    public function addToMidocoSupplAgencySettlemJournal(\Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplAgencySettlemJournal property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplAgencySettlemJournal[] = $item;
        
        return $this;
    }
}
