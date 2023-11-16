<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareAdviceInfoResponse StructType
 * @subpackage Structs
 */
class PrepareAdviceInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoAdviceSettlement
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdviceSettlement
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement[]
     */
    protected array $MidocoAdviceSettlement = [];
    /**
     * Constructor method for PrepareAdviceInfoResponse
     * @uses PrepareAdviceInfoResponse::setMidocoAdviceSettlement()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement[] $midocoAdviceSettlement
     */
    public function __construct(array $midocoAdviceSettlement = [])
    {
        $this
            ->setMidocoAdviceSettlement($midocoAdviceSettlement);
    }
    /**
     * Get MidocoAdviceSettlement value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement[]
     */
    public function getMidocoAdviceSettlement(): array
    {
        return $this->MidocoAdviceSettlement;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAdviceSettlement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdviceSettlement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdviceSettlementForArrayConstraintsFromSetMidocoAdviceSettlement(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $prepareAdviceInfoResponseMidocoAdviceSettlementItem) {
            // validation for constraint: itemType
            if (!$prepareAdviceInfoResponseMidocoAdviceSettlementItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement) {
                $invalidValues[] = is_object($prepareAdviceInfoResponseMidocoAdviceSettlementItem) ? get_class($prepareAdviceInfoResponseMidocoAdviceSettlementItem) : sprintf('%s(%s)', gettype($prepareAdviceInfoResponseMidocoAdviceSettlementItem), var_export($prepareAdviceInfoResponseMidocoAdviceSettlementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdviceSettlement property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdviceSettlement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement[] $midocoAdviceSettlement
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceInfoResponse
     */
    public function setMidocoAdviceSettlement(array $midocoAdviceSettlement = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdviceSettlementArrayErrorMessage = self::validateMidocoAdviceSettlementForArrayConstraintsFromSetMidocoAdviceSettlement($midocoAdviceSettlement))) {
            throw new InvalidArgumentException($midocoAdviceSettlementArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdviceSettlement = $midocoAdviceSettlement;
        
        return $this;
    }
    /**
     * Add item to MidocoAdviceSettlement value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement $item
     * @return \Pggns\MidocoApi\Order\StructType\PrepareAdviceInfoResponse
     */
    public function addToMidocoAdviceSettlement(\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement) {
            throw new InvalidArgumentException(sprintf('The MidocoAdviceSettlement property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlement, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdviceSettlement[] = $item;
        
        return $this;
    }
}
