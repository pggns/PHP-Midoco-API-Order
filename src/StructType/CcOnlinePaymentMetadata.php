<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CcOnlinePaymentMetadata StructType
 * @subpackage Structs
 */
class CcOnlinePaymentMetadata extends AbstractStructBase
{
    /**
     * The CcOnlineMetadataEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\CcOnlineMetadataEntry[]
     */
    protected array $CcOnlineMetadataEntry = [];
    /**
     * Constructor method for CcOnlinePaymentMetadata
     * @uses CcOnlinePaymentMetadata::setCcOnlineMetadataEntry()
     * @param \Pggns\MidocoApi\Order\StructType\CcOnlineMetadataEntry[] $ccOnlineMetadataEntry
     */
    public function __construct(array $ccOnlineMetadataEntry = [])
    {
        $this
            ->setCcOnlineMetadataEntry($ccOnlineMetadataEntry);
    }
    /**
     * Get CcOnlineMetadataEntry value
     * @return \Pggns\MidocoApi\Order\StructType\CcOnlineMetadataEntry[]
     */
    public function getCcOnlineMetadataEntry(): array
    {
        return $this->CcOnlineMetadataEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setCcOnlineMetadataEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCcOnlineMetadataEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCcOnlineMetadataEntryForArrayConstraintsFromSetCcOnlineMetadataEntry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $ccOnlinePaymentMetadataCcOnlineMetadataEntryItem) {
            // validation for constraint: itemType
            if (!$ccOnlinePaymentMetadataCcOnlineMetadataEntryItem instanceof \Pggns\MidocoApi\Order\StructType\CcOnlineMetadataEntry) {
                $invalidValues[] = is_object($ccOnlinePaymentMetadataCcOnlineMetadataEntryItem) ? get_class($ccOnlinePaymentMetadataCcOnlineMetadataEntryItem) : sprintf('%s(%s)', gettype($ccOnlinePaymentMetadataCcOnlineMetadataEntryItem), var_export($ccOnlinePaymentMetadataCcOnlineMetadataEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CcOnlineMetadataEntry property can only contain items of type \Pggns\MidocoApi\Order\StructType\CcOnlineMetadataEntry, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CcOnlineMetadataEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CcOnlineMetadataEntry[] $ccOnlineMetadataEntry
     * @return \Pggns\MidocoApi\Order\StructType\CcOnlinePaymentMetadata
     */
    public function setCcOnlineMetadataEntry(array $ccOnlineMetadataEntry = []): self
    {
        // validation for constraint: array
        if ('' !== ($ccOnlineMetadataEntryArrayErrorMessage = self::validateCcOnlineMetadataEntryForArrayConstraintsFromSetCcOnlineMetadataEntry($ccOnlineMetadataEntry))) {
            throw new InvalidArgumentException($ccOnlineMetadataEntryArrayErrorMessage, __LINE__);
        }
        $this->CcOnlineMetadataEntry = $ccOnlineMetadataEntry;
        
        return $this;
    }
    /**
     * Add item to CcOnlineMetadataEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CcOnlineMetadataEntry $item
     * @return \Pggns\MidocoApi\Order\StructType\CcOnlinePaymentMetadata
     */
    public function addToCcOnlineMetadataEntry(\Pggns\MidocoApi\Order\StructType\CcOnlineMetadataEntry $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CcOnlineMetadataEntry) {
            throw new InvalidArgumentException(sprintf('The CcOnlineMetadataEntry property can only contain items of type \Pggns\MidocoApi\Order\StructType\CcOnlineMetadataEntry, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CcOnlineMetadataEntry[] = $item;
        
        return $this;
    }
}
