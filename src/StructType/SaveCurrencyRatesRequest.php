<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCurrencyRatesRequest StructType
 * @subpackage Structs
 */
class SaveCurrencyRatesRequest extends AbstractStructBase
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
     * Constructor method for SaveCurrencyRatesRequest
     * @uses SaveCurrencyRatesRequest::setMidocoCurrencyRate()
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
        foreach ($values as $saveCurrencyRatesRequestMidocoCurrencyRateItem) {
            // validation for constraint: itemType
            if (!$saveCurrencyRatesRequestMidocoCurrencyRateItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCurrencyRate) {
                $invalidValues[] = is_object($saveCurrencyRatesRequestMidocoCurrencyRateItem) ? get_class($saveCurrencyRatesRequestMidocoCurrencyRateItem) : sprintf('%s(%s)', gettype($saveCurrencyRatesRequestMidocoCurrencyRateItem), var_export($saveCurrencyRatesRequestMidocoCurrencyRateItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveCurrencyRatesRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\SaveCurrencyRatesRequest
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
