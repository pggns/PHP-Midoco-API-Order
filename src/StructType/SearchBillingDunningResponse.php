<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBillingDunningResponse StructType
 * @subpackage Structs
 */
class SearchBillingDunningResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingDunning
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingDunning
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning[]
     */
    protected array $MidocoBillingDunning = [];
    /**
     * Constructor method for SearchBillingDunningResponse
     * @uses SearchBillingDunningResponse::setMidocoBillingDunning()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning[] $midocoBillingDunning
     */
    public function __construct(array $midocoBillingDunning = [])
    {
        $this
            ->setMidocoBillingDunning($midocoBillingDunning);
    }
    /**
     * Get MidocoBillingDunning value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning[]
     */
    public function getMidocoBillingDunning(): array
    {
        return $this->MidocoBillingDunning;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingDunning method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingDunning method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingDunningForArrayConstraintsFromSetMidocoBillingDunning(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchBillingDunningResponseMidocoBillingDunningItem) {
            // validation for constraint: itemType
            if (!$searchBillingDunningResponseMidocoBillingDunningItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning) {
                $invalidValues[] = is_object($searchBillingDunningResponseMidocoBillingDunningItem) ? get_class($searchBillingDunningResponseMidocoBillingDunningItem) : sprintf('%s(%s)', gettype($searchBillingDunningResponseMidocoBillingDunningItem), var_export($searchBillingDunningResponseMidocoBillingDunningItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingDunning property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingDunning value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning[] $midocoBillingDunning
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDunningResponse
     */
    public function setMidocoBillingDunning(array $midocoBillingDunning = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingDunningArrayErrorMessage = self::validateMidocoBillingDunningForArrayConstraintsFromSetMidocoBillingDunning($midocoBillingDunning))) {
            throw new InvalidArgumentException($midocoBillingDunningArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingDunning = $midocoBillingDunning;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingDunning value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchBillingDunningResponse
     */
    public function addToMidocoBillingDunning(\Pggns\MidocoApi\Order\StructType\MidocoBillingDunning $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingDunning property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingDunning, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingDunning[] = $item;
        
        return $this;
    }
}
