<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPaymentProviderEntriesResponse StructType
 * @subpackage Structs
 */
class SearchPaymentProviderEntriesResponse extends AbstractStructBase
{
    /**
     * The PaymentProviderEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: PaymentProviderEntry
     * @var \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType[]
     */
    protected array $PaymentProviderEntry = [];
    /**
     * Constructor method for SearchPaymentProviderEntriesResponse
     * @uses SearchPaymentProviderEntriesResponse::setPaymentProviderEntry()
     * @param \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType[] $paymentProviderEntry
     */
    public function __construct(array $paymentProviderEntry = [])
    {
        $this
            ->setPaymentProviderEntry($paymentProviderEntry);
    }
    /**
     * Get PaymentProviderEntry value
     * @return \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType[]
     */
    public function getPaymentProviderEntry(): array
    {
        return $this->PaymentProviderEntry;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentProviderEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentProviderEntry method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentProviderEntryForArrayConstraintsFromSetPaymentProviderEntry(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchPaymentProviderEntriesResponsePaymentProviderEntryItem) {
            // validation for constraint: itemType
            if (!$searchPaymentProviderEntriesResponsePaymentProviderEntryItem instanceof \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType) {
                $invalidValues[] = is_object($searchPaymentProviderEntriesResponsePaymentProviderEntryItem) ? get_class($searchPaymentProviderEntriesResponsePaymentProviderEntryItem) : sprintf('%s(%s)', gettype($searchPaymentProviderEntriesResponsePaymentProviderEntryItem), var_export($searchPaymentProviderEntriesResponsePaymentProviderEntryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PaymentProviderEntry property can only contain items of type \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PaymentProviderEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType[] $paymentProviderEntry
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesResponse
     */
    public function setPaymentProviderEntry(array $paymentProviderEntry = []): self
    {
        // validation for constraint: array
        if ('' !== ($paymentProviderEntryArrayErrorMessage = self::validatePaymentProviderEntryForArrayConstraintsFromSetPaymentProviderEntry($paymentProviderEntry))) {
            throw new InvalidArgumentException($paymentProviderEntryArrayErrorMessage, __LINE__);
        }
        $this->PaymentProviderEntry = $paymentProviderEntry;
        
        return $this;
    }
    /**
     * Add item to PaymentProviderEntry value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderEntriesResponse
     */
    public function addToPaymentProviderEntry(\Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType) {
            throw new InvalidArgumentException(sprintf('The PaymentProviderEntry property can only contain items of type \Pggns\MidocoApi\Order\StructType\PaymentProviderEntryType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PaymentProviderEntry[] = $item;
        
        return $this;
    }
}
