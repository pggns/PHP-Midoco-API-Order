<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MigrateFiskalyTssResponse StructType
 * @subpackage Structs
 */
class MigrateFiskalyTssResponse extends AbstractStructBase
{
    /**
     * The Migration_Summary
     * @var \Pggns\MidocoApi\Order\StructType\Tss_Migration_Summary|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Tss_Migration_Summary $Migration_Summary = null;
    /**
     * The Migration_Log
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log[]
     */
    protected array $Migration_Log = [];
    /**
     * The Unprocessed_Units
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Unprocessed_Units|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\Unprocessed_Units $Unprocessed_Units = null;
    /**
     * Constructor method for MigrateFiskalyTssResponse
     * @uses MigrateFiskalyTssResponse::setMigration_Summary()
     * @uses MigrateFiskalyTssResponse::setMigration_Log()
     * @uses MigrateFiskalyTssResponse::setUnprocessed_Units()
     * @param \Pggns\MidocoApi\Order\StructType\Tss_Migration_Summary $migration_Summary
     * @param \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log[] $migration_Log
     * @param \Pggns\MidocoApi\Order\StructType\Unprocessed_Units $unprocessed_Units
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\Tss_Migration_Summary $migration_Summary = null, array $migration_Log = [], ?\Pggns\MidocoApi\Order\StructType\Unprocessed_Units $unprocessed_Units = null)
    {
        $this
            ->setMigration_Summary($migration_Summary)
            ->setMigration_Log($migration_Log)
            ->setUnprocessed_Units($unprocessed_Units);
    }
    /**
     * Get Migration_Summary value
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Summary|null
     */
    public function getMigration_Summary(): ?\Pggns\MidocoApi\Order\StructType\Tss_Migration_Summary
    {
        return $this->{'Migration-Summary'};
    }
    /**
     * Set Migration_Summary value
     * @param \Pggns\MidocoApi\Order\StructType\Tss_Migration_Summary $migration_Summary
     * @return \Pggns\MidocoApi\Order\StructType\MigrateFiskalyTssResponse
     */
    public function setMigration_Summary(?\Pggns\MidocoApi\Order\StructType\Tss_Migration_Summary $migration_Summary = null): self
    {
        $this->Migration_Summary = $this->{'Migration-Summary'} = $migration_Summary;
        
        return $this;
    }
    /**
     * Get Migration_Log value
     * @return \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log[]
     */
    public function getMigration_Log(): array
    {
        return $this->{'Migration-Log'};
    }
    /**
     * This method is responsible for validating the values passed to the setMigration_Log method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMigration_Log method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMigration_LogForArrayConstraintsFromSetMigration_Log(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $migrateFiskalyTssResponseMigration_LogItem) {
            // validation for constraint: itemType
            if (!$migrateFiskalyTssResponseMigration_LogItem instanceof \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log) {
                $invalidValues[] = is_object($migrateFiskalyTssResponseMigration_LogItem) ? get_class($migrateFiskalyTssResponseMigration_LogItem) : sprintf('%s(%s)', gettype($migrateFiskalyTssResponseMigration_LogItem), var_export($migrateFiskalyTssResponseMigration_LogItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Migration_Log property can only contain items of type \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Migration_Log value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log[] $migration_Log
     * @return \Pggns\MidocoApi\Order\StructType\MigrateFiskalyTssResponse
     */
    public function setMigration_Log(array $migration_Log = []): self
    {
        // validation for constraint: array
        if ('' !== ($migration_LogArrayErrorMessage = self::validateMigration_LogForArrayConstraintsFromSetMigration_Log($migration_Log))) {
            throw new InvalidArgumentException($migration_LogArrayErrorMessage, __LINE__);
        }
        $this->Migration_Log = $this->{'Migration-Log'} = $migration_Log;
        
        return $this;
    }
    /**
     * Add item to Migration_Log value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log $item
     * @return \Pggns\MidocoApi\Order\StructType\MigrateFiskalyTssResponse
     */
    public function addToMigration_Log(\Pggns\MidocoApi\Order\StructType\Tss_Migration_Log $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log) {
            throw new InvalidArgumentException(sprintf('The Migration_Log property can only contain items of type \Pggns\MidocoApi\Order\StructType\Tss_Migration_Log, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Migration_Log[] = $this->{'Migration-Log'}[] = $item;
        
        return $this;
    }
    /**
     * Get Unprocessed_Units value
     * @return \Pggns\MidocoApi\Order\StructType\Unprocessed_Units|null
     */
    public function getUnprocessed_Units(): ?\Pggns\MidocoApi\Order\StructType\Unprocessed_Units
    {
        return $this->{'Unprocessed-Units'};
    }
    /**
     * Set Unprocessed_Units value
     * @param \Pggns\MidocoApi\Order\StructType\Unprocessed_Units $unprocessed_Units
     * @return \Pggns\MidocoApi\Order\StructType\MigrateFiskalyTssResponse
     */
    public function setUnprocessed_Units(?\Pggns\MidocoApi\Order\StructType\Unprocessed_Units $unprocessed_Units = null): self
    {
        $this->Unprocessed_Units = $this->{'Unprocessed-Units'} = $unprocessed_Units;
        
        return $this;
    }
}
