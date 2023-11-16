<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveHedgeCurrencyRatesRequest StructType
 * @subpackage Structs
 */
class SaveHedgeCurrencyRatesRequest extends AbstractStructBase
{
    /**
     * The MidocoCurrencyRateHedge
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoCurrencyRateHedge
     * @var \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO[]
     */
    protected array $MidocoCurrencyRateHedge = [];
    /**
     * Constructor method for SaveHedgeCurrencyRatesRequest
     * @uses SaveHedgeCurrencyRatesRequest::setMidocoCurrencyRateHedge()
     * @param \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO[] $midocoCurrencyRateHedge
     */
    public function __construct(array $midocoCurrencyRateHedge = [])
    {
        $this
            ->setMidocoCurrencyRateHedge($midocoCurrencyRateHedge);
    }
    /**
     * Get MidocoCurrencyRateHedge value
     * @return \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO[]
     */
    public function getMidocoCurrencyRateHedge(): array
    {
        return $this->MidocoCurrencyRateHedge;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCurrencyRateHedge method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCurrencyRateHedge method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCurrencyRateHedgeForArrayConstraintsFromSetMidocoCurrencyRateHedge(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveHedgeCurrencyRatesRequestMidocoCurrencyRateHedgeItem) {
            // validation for constraint: itemType
            if (!$saveHedgeCurrencyRatesRequestMidocoCurrencyRateHedgeItem instanceof \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO) {
                $invalidValues[] = is_object($saveHedgeCurrencyRatesRequestMidocoCurrencyRateHedgeItem) ? get_class($saveHedgeCurrencyRatesRequestMidocoCurrencyRateHedgeItem) : sprintf('%s(%s)', gettype($saveHedgeCurrencyRatesRequestMidocoCurrencyRateHedgeItem), var_export($saveHedgeCurrencyRatesRequestMidocoCurrencyRateHedgeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCurrencyRateHedge property can only contain items of type \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCurrencyRateHedge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO[] $midocoCurrencyRateHedge
     * @return \Pggns\MidocoApi\Order\StructType\SaveHedgeCurrencyRatesRequest
     */
    public function setMidocoCurrencyRateHedge(array $midocoCurrencyRateHedge = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCurrencyRateHedgeArrayErrorMessage = self::validateMidocoCurrencyRateHedgeForArrayConstraintsFromSetMidocoCurrencyRateHedge($midocoCurrencyRateHedge))) {
            throw new InvalidArgumentException($midocoCurrencyRateHedgeArrayErrorMessage, __LINE__);
        }
        $this->MidocoCurrencyRateHedge = $midocoCurrencyRateHedge;
        
        return $this;
    }
    /**
     * Add item to MidocoCurrencyRateHedge value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveHedgeCurrencyRatesRequest
     */
    public function addToMidocoCurrencyRateHedge(\Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCurrencyRateHedge property can only contain items of type \Pggns\MidocoApi\Order\StructType\CurrencyRateHedgeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCurrencyRateHedge[] = $item;
        
        return $this;
    }
}
