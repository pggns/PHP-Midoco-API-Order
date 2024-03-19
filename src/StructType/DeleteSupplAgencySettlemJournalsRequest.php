<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSupplAgencySettlemJournalsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteSupplAgencySettlemJournalsRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplAgencySettlemJournal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoSupplAgencySettlemJournal
     * @var \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO[]
     */
    protected array $MidocoSupplAgencySettlemJournal;
    /**
     * Constructor method for DeleteSupplAgencySettlemJournalsRequest
     * @uses DeleteSupplAgencySettlemJournalsRequest::setMidocoSupplAgencySettlemJournal()
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO[] $midocoSupplAgencySettlemJournal
     */
    public function __construct(array $midocoSupplAgencySettlemJournal)
    {
        $this
            ->setMidocoSupplAgencySettlemJournal($midocoSupplAgencySettlemJournal);
    }
    /**
     * Get MidocoSupplAgencySettlemJournal value
     * @return \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO[]
     */
    public function getMidocoSupplAgencySettlemJournal(): array
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
        foreach ($values as $deleteSupplAgencySettlemJournalsRequestMidocoSupplAgencySettlemJournalItem) {
            // validation for constraint: itemType
            if (!$deleteSupplAgencySettlemJournalsRequestMidocoSupplAgencySettlemJournalItem instanceof \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO) {
                $invalidValues[] = is_object($deleteSupplAgencySettlemJournalsRequestMidocoSupplAgencySettlemJournalItem) ? get_class($deleteSupplAgencySettlemJournalsRequestMidocoSupplAgencySettlemJournalItem) : sprintf('%s(%s)', gettype($deleteSupplAgencySettlemJournalsRequestMidocoSupplAgencySettlemJournalItem), var_export($deleteSupplAgencySettlemJournalsRequestMidocoSupplAgencySettlemJournalItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplAgencySettlemJournalsRequest
     */
    public function setMidocoSupplAgencySettlemJournal(array $midocoSupplAgencySettlemJournal): self
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
     * @return \Pggns\MidocoApi\Order\StructType\DeleteSupplAgencySettlemJournalsRequest
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
