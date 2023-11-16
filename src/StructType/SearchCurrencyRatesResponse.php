<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCurrencyRatesResponse StructType
 * @subpackage Structs
 */
class SearchCurrencyRatesResponse extends AbstractStructBase
{
    /**
     * The MidocoCurrencyRate
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCurrencyRate
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate[]
     */
    protected array $MidocoCurrencyRate = [];
    /**
     * Constructor method for SearchCurrencyRatesResponse
     * @uses SearchCurrencyRatesResponse::setMidocoCurrencyRate()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate[] $midocoCurrencyRate
     */
    public function __construct(array $midocoCurrencyRate = [])
    {
        $this
            ->setMidocoCurrencyRate($midocoCurrencyRate);
    }
    /**
     * Get MidocoCurrencyRate value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate[]
     */
    public function getMidocoCurrencyRate(): array
    {
        return $this->MidocoCurrencyRate;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCurrencyRate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCurrencyRate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCurrencyRateForArrayConstraintsFromSetMidocoCurrencyRate(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchCurrencyRatesResponseMidocoCurrencyRateItem) {
            // validation for constraint: itemType
            if (!$searchCurrencyRatesResponseMidocoCurrencyRateItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate) {
                $invalidValues[] = is_object($searchCurrencyRatesResponseMidocoCurrencyRateItem) ? get_class($searchCurrencyRatesResponseMidocoCurrencyRateItem) : sprintf('%s(%s)', gettype($searchCurrencyRatesResponseMidocoCurrencyRateItem), var_export($searchCurrencyRatesResponseMidocoCurrencyRateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCurrencyRate property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCurrencyRate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate[] $midocoCurrencyRate
     * @return \Pggns\MidocoApi\Order\StructType\SearchCurrencyRatesResponse
     */
    public function setMidocoCurrencyRate(array $midocoCurrencyRate = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCurrencyRateArrayErrorMessage = self::validateMidocoCurrencyRateForArrayConstraintsFromSetMidocoCurrencyRate($midocoCurrencyRate))) {
            throw new InvalidArgumentException($midocoCurrencyRateArrayErrorMessage, __LINE__);
        }
        $this->MidocoCurrencyRate = $midocoCurrencyRate;
        
        return $this;
    }
    /**
     * Add item to MidocoCurrencyRate value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchCurrencyRatesResponse
     */
    public function addToMidocoCurrencyRate(\Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate) {
            throw new InvalidArgumentException(sprintf('The MidocoCurrencyRate property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCurrencyRate[] = $item;
        
        return $this;
    }
}
