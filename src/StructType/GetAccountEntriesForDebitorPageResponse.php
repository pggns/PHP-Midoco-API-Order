<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountEntriesForDebitorPageResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAccountEntriesForDebitorPageResponse extends AbstractStructBase
{
    /**
     * The MidocoDebitorAccountEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType[]
     */
    protected ?array $MidocoDebitorAccountEntry = null;
    /**
     * Constructor method for GetAccountEntriesForDebitorPageResponse
     * @uses GetAccountEntriesForDebitorPageResponse::setMidocoDebitorAccountEntry()
     * @param \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType[] $midocoDebitorAccountEntry
     */
    public function __construct(?array $midocoDebitorAccountEntry = null)
    {
        $this
            ->setMidocoDebitorAccountEntry($midocoDebitorAccountEntry);
    }
    /**
     * Get MidocoDebitorAccountEntry value
     * @return \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType[]
     */
    public function getMidocoDebitorAccountEntry(): ?array
    {
        return $this->MidocoDebitorAccountEntry;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDebitorAccountEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDebitorAccountEntry method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDebitorAccountEntryForArrayConstraintFromSetMidocoDebitorAccountEntry(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAccountEntriesForDebitorPageResponseMidocoDebitorAccountEntryItem) {
            // validation for constraint: itemType
            if (!$getAccountEntriesForDebitorPageResponseMidocoDebitorAccountEntryItem instanceof \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType) {
                $invalidValues[] = is_object($getAccountEntriesForDebitorPageResponseMidocoDebitorAccountEntryItem) ? get_class($getAccountEntriesForDebitorPageResponseMidocoDebitorAccountEntryItem) : sprintf('%s(%s)', gettype($getAccountEntriesForDebitorPageResponseMidocoDebitorAccountEntryItem), var_export($getAccountEntriesForDebitorPageResponseMidocoDebitorAccountEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDebitorAccountEntry property can only contain items of type \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDebitorAccountEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType[] $midocoDebitorAccountEntry
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorPageResponse
     */
    public function setMidocoDebitorAccountEntry(?array $midocoDebitorAccountEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDebitorAccountEntryArrayErrorMessage = self::validateMidocoDebitorAccountEntryForArrayConstraintFromSetMidocoDebitorAccountEntry($midocoDebitorAccountEntry))) {
            throw new InvalidArgumentException($midocoDebitorAccountEntryArrayErrorMessage, __LINE__);
        }
        $this->MidocoDebitorAccountEntry = $midocoDebitorAccountEntry;
        
        return $this;
    }
    /**
     * Add item to MidocoDebitorAccountEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType $item
     * @return \Pggns\MidocoApi\Order\StructType\GetAccountEntriesForDebitorPageResponse
     */
    public function addToMidocoDebitorAccountEntry(\Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType) {
            throw new InvalidArgumentException(sprintf('The MidocoDebitorAccountEntry property can only contain items of type \Pggns\MidocoApi\Order\StructType\DebitorAccountEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDebitorAccountEntry[] = $item;
        
        return $this;
    }
}
