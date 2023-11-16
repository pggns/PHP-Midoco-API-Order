<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSupplAgencySettlemJournalsResponse StructType
 * @subpackage Structs
 */
class SaveSupplAgencySettlemJournalsResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplAgencySettlemJournal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplAgencySettlemJournal
     * @var \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO[]
     */
    protected array $MidocoSupplAgencySettlemJournal = [];
    /**
     * Constructor method for SaveSupplAgencySettlemJournalsResponse
     * @uses SaveSupplAgencySettlemJournalsResponse::setMidocoSupplAgencySettlemJournal()
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO[] $midocoSupplAgencySettlemJournal
     */
    public function __construct(array $midocoSupplAgencySettlemJournal = [])
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
     * This method is responsible for validating the values passed to the setMidocoSupplAgencySettlemJournal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplAgencySettlemJournal method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplAgencySettlemJournalForArrayConstraintsFromSetMidocoSupplAgencySettlemJournal(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveSupplAgencySettlemJournalsResponseMidocoSupplAgencySettlemJournalItem) {
            // validation for constraint: itemType
            if (!$saveSupplAgencySettlemJournalsResponseMidocoSupplAgencySettlemJournalItem instanceof \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO) {
                $invalidValues[] = is_object($saveSupplAgencySettlemJournalsResponseMidocoSupplAgencySettlemJournalItem) ? get_class($saveSupplAgencySettlemJournalsResponseMidocoSupplAgencySettlemJournalItem) : sprintf('%s(%s)', gettype($saveSupplAgencySettlemJournalsResponseMidocoSupplAgencySettlemJournalItem), var_export($saveSupplAgencySettlemJournalsResponseMidocoSupplAgencySettlemJournalItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplAgencySettlemJournalsResponse
     */
    public function setMidocoSupplAgencySettlemJournal(array $midocoSupplAgencySettlemJournal = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplAgencySettlemJournalArrayErrorMessage = self::validateMidocoSupplAgencySettlemJournalForArrayConstraintsFromSetMidocoSupplAgencySettlemJournal($midocoSupplAgencySettlemJournal))) {
            throw new InvalidArgumentException($midocoSupplAgencySettlemJournalArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplAgencySettlemJournal = $midocoSupplAgencySettlemJournal;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplAgencySettlemJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplAgencySettlemJournalDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveSupplAgencySettlemJournalsResponse
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
