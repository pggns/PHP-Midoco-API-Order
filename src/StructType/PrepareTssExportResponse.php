<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareTssExportResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrepareTssExportResponse extends AbstractStructBase
{
    /**
     * The MidocoCashTurnoverJournal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCashTurnoverJournal
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverJournal[]
     */
    protected ?array $MidocoCashTurnoverJournal = null;
    /**
     * Constructor method for PrepareTssExportResponse
     * @uses PrepareTssExportResponse::setMidocoCashTurnoverJournal()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverJournal[] $midocoCashTurnoverJournal
     */
    public function __construct(?array $midocoCashTurnoverJournal = null)
    {
        $this
            ->setMidocoCashTurnoverJournal($midocoCashTurnoverJournal);
    }
    /**
     * Get MidocoCashTurnoverJournal value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverJournal[]
     */
    public function getMidocoCashTurnoverJournal(): ?array
    {
        return $this->MidocoCashTurnoverJournal;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoCashTurnoverJournal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCashTurnoverJournal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCashTurnoverJournalForArrayConstraintFromSetMidocoCashTurnoverJournal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $prepareTssExportResponseMidocoCashTurnoverJournalItem) {
            // validation for constraint: itemType
            if (!$prepareTssExportResponseMidocoCashTurnoverJournalItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverJournal) {
                $invalidValues[] = is_object($prepareTssExportResponseMidocoCashTurnoverJournalItem) ? get_class($prepareTssExportResponseMidocoCashTurnoverJournalItem) : sprintf('%s(%s)', gettype($prepareTssExportResponseMidocoCashTurnoverJournalItem), var_export($prepareTssExportResponseMidocoCashTurnoverJournalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCashTurnoverJournal property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverJournal, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCashTurnoverJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverJournal[] $midocoCashTurnoverJournal
     * @return \Pggns\MidocoApi\Order\StructType\PrepareTssExportResponse
     */
    public function setMidocoCashTurnoverJournal(?array $midocoCashTurnoverJournal = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCashTurnoverJournalArrayErrorMessage = self::validateMidocoCashTurnoverJournalForArrayConstraintFromSetMidocoCashTurnoverJournal($midocoCashTurnoverJournal))) {
            throw new InvalidArgumentException($midocoCashTurnoverJournalArrayErrorMessage, __LINE__);
        }
        $this->MidocoCashTurnoverJournal = $midocoCashTurnoverJournal;
        
        return $this;
    }
    /**
     * Add item to MidocoCashTurnoverJournal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverJournal $item
     * @return \Pggns\MidocoApi\Order\StructType\PrepareTssExportResponse
     */
    public function addToMidocoCashTurnoverJournal(\Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverJournal $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverJournal) {
            throw new InvalidArgumentException(sprintf('The MidocoCashTurnoverJournal property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCashTurnoverJournal, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCashTurnoverJournal[] = $item;
        
        return $this;
    }
}
