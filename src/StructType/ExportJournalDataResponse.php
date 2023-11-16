<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportJournalDataResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: A response which contains exported journal data. At the moment, midoco supports only one cost centre booking per journal record, no split available. Also, only one entry booking for main account and one for opposite account (if
 * opposite account is a special entry account) is supported, no split entry records. Each debtor/creditor booking will have an entry record. Cost centre bookings apply only to cost accounts
 * @subpackage Structs
 */
class ExportJournalDataResponse extends AbstractStructBase
{
    /**
     * The JournalDataRecord
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\JournalDataRecord[]
     */
    protected array $JournalDataRecord = [];
    /**
     * The numRecords
     * @var int|null
     */
    protected ?int $numRecords = null;
    /**
     * The exportId
     * @var int|null
     */
    protected ?int $exportId = null;
    /**
     * The checkSum
     * @var int|null
     */
    protected ?int $checkSum = null;
    /**
     * Constructor method for ExportJournalDataResponse
     * @uses ExportJournalDataResponse::setJournalDataRecord()
     * @uses ExportJournalDataResponse::setNumRecords()
     * @uses ExportJournalDataResponse::setExportId()
     * @uses ExportJournalDataResponse::setCheckSum()
     * @param \Pggns\MidocoApi\Order\StructType\JournalDataRecord[] $journalDataRecord
     * @param int $numRecords
     * @param int $exportId
     * @param int $checkSum
     */
    public function __construct(array $journalDataRecord = [], ?int $numRecords = null, ?int $exportId = null, ?int $checkSum = null)
    {
        $this
            ->setJournalDataRecord($journalDataRecord)
            ->setNumRecords($numRecords)
            ->setExportId($exportId)
            ->setCheckSum($checkSum);
    }
    /**
     * Get JournalDataRecord value
     * @return \Pggns\MidocoApi\Order\StructType\JournalDataRecord[]
     */
    public function getJournalDataRecord(): array
    {
        return $this->JournalDataRecord;
    }
    /**
     * This method is responsible for validating the values passed to the setJournalDataRecord method
     * This method is willingly generated in order to preserve the one-line inline validation within the setJournalDataRecord method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateJournalDataRecordForArrayConstraintsFromSetJournalDataRecord(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $exportJournalDataResponseJournalDataRecordItem) {
            // validation for constraint: itemType
            if (!$exportJournalDataResponseJournalDataRecordItem instanceof \Pggns\MidocoApi\Order\StructType\JournalDataRecord) {
                $invalidValues[] = is_object($exportJournalDataResponseJournalDataRecordItem) ? get_class($exportJournalDataResponseJournalDataRecordItem) : sprintf('%s(%s)', gettype($exportJournalDataResponseJournalDataRecordItem), var_export($exportJournalDataResponseJournalDataRecordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The JournalDataRecord property can only contain items of type \Pggns\MidocoApi\Order\StructType\JournalDataRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set JournalDataRecord value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\JournalDataRecord[] $journalDataRecord
     * @return \Pggns\MidocoApi\Order\StructType\ExportJournalDataResponse
     */
    public function setJournalDataRecord(array $journalDataRecord = []): self
    {
        // validation for constraint: array
        if ('' !== ($journalDataRecordArrayErrorMessage = self::validateJournalDataRecordForArrayConstraintsFromSetJournalDataRecord($journalDataRecord))) {
            throw new InvalidArgumentException($journalDataRecordArrayErrorMessage, __LINE__);
        }
        $this->JournalDataRecord = $journalDataRecord;
        
        return $this;
    }
    /**
     * Add item to JournalDataRecord value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\JournalDataRecord $item
     * @return \Pggns\MidocoApi\Order\StructType\ExportJournalDataResponse
     */
    public function addToJournalDataRecord(\Pggns\MidocoApi\Order\StructType\JournalDataRecord $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\JournalDataRecord) {
            throw new InvalidArgumentException(sprintf('The JournalDataRecord property can only contain items of type \Pggns\MidocoApi\Order\StructType\JournalDataRecord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->JournalDataRecord[] = $item;
        
        return $this;
    }
    /**
     * Get numRecords value
     * @return int|null
     */
    public function getNumRecords(): ?int
    {
        return $this->numRecords;
    }
    /**
     * Set numRecords value
     * @param int $numRecords
     * @return \Pggns\MidocoApi\Order\StructType\ExportJournalDataResponse
     */
    public function setNumRecords(?int $numRecords = null): self
    {
        // validation for constraint: int
        if (!is_null($numRecords) && !(is_int($numRecords) || ctype_digit($numRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numRecords, true), gettype($numRecords)), __LINE__);
        }
        $this->numRecords = $numRecords;
        
        return $this;
    }
    /**
     * Get exportId value
     * @return int|null
     */
    public function getExportId(): ?int
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param int $exportId
     * @return \Pggns\MidocoApi\Order\StructType\ExportJournalDataResponse
     */
    public function setExportId(?int $exportId = null): self
    {
        // validation for constraint: int
        if (!is_null($exportId) && !(is_int($exportId) || ctype_digit($exportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
    /**
     * Get checkSum value
     * @return int|null
     */
    public function getCheckSum(): ?int
    {
        return $this->checkSum;
    }
    /**
     * Set checkSum value
     * @param int $checkSum
     * @return \Pggns\MidocoApi\Order\StructType\ExportJournalDataResponse
     */
    public function setCheckSum(?int $checkSum = null): self
    {
        // validation for constraint: int
        if (!is_null($checkSum) && !(is_int($checkSum) || ctype_digit($checkSum))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($checkSum, true), gettype($checkSum)), __LINE__);
        }
        $this->checkSum = $checkSum;
        
        return $this;
    }
}
