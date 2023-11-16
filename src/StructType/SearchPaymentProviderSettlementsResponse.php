<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchPaymentProviderSettlementsResponse StructType
 * @subpackage Structs
 */
class SearchPaymentProviderSettlementsResponse extends AbstractStructBase
{
    /**
     * The MidocoPaymentProviderSettlement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoPaymentProviderSettlement
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement[]
     */
    protected array $MidocoPaymentProviderSettlement = [];
    /**
     * Constructor method for SearchPaymentProviderSettlementsResponse
     * @uses SearchPaymentProviderSettlementsResponse::setMidocoPaymentProviderSettlement()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement[] $midocoPaymentProviderSettlement
     */
    public function __construct(array $midocoPaymentProviderSettlement = [])
    {
        $this
            ->setMidocoPaymentProviderSettlement($midocoPaymentProviderSettlement);
    }
    /**
     * Get MidocoPaymentProviderSettlement value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement[]
     */
    public function getMidocoPaymentProviderSettlement(): array
    {
        return $this->MidocoPaymentProviderSettlement;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPaymentProviderSettlement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPaymentProviderSettlement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPaymentProviderSettlementForArrayConstraintsFromSetMidocoPaymentProviderSettlement(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchPaymentProviderSettlementsResponseMidocoPaymentProviderSettlementItem) {
            // validation for constraint: itemType
            if (!$searchPaymentProviderSettlementsResponseMidocoPaymentProviderSettlementItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement) {
                $invalidValues[] = is_object($searchPaymentProviderSettlementsResponseMidocoPaymentProviderSettlementItem) ? get_class($searchPaymentProviderSettlementsResponseMidocoPaymentProviderSettlementItem) : sprintf('%s(%s)', gettype($searchPaymentProviderSettlementsResponseMidocoPaymentProviderSettlementItem), var_export($searchPaymentProviderSettlementsResponseMidocoPaymentProviderSettlementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPaymentProviderSettlement property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPaymentProviderSettlement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement[] $midocoPaymentProviderSettlement
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsResponse
     */
    public function setMidocoPaymentProviderSettlement(array $midocoPaymentProviderSettlement = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPaymentProviderSettlementArrayErrorMessage = self::validateMidocoPaymentProviderSettlementForArrayConstraintsFromSetMidocoPaymentProviderSettlement($midocoPaymentProviderSettlement))) {
            throw new InvalidArgumentException($midocoPaymentProviderSettlementArrayErrorMessage, __LINE__);
        }
        $this->MidocoPaymentProviderSettlement = $midocoPaymentProviderSettlement;
        
        return $this;
    }
    /**
     * Add item to MidocoPaymentProviderSettlement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchPaymentProviderSettlementsResponse
     */
    public function addToMidocoPaymentProviderSettlement(\Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement) {
            throw new InvalidArgumentException(sprintf('The MidocoPaymentProviderSettlement property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPaymentProviderSettlement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPaymentProviderSettlement[] = $item;
        
        return $this;
    }
}
