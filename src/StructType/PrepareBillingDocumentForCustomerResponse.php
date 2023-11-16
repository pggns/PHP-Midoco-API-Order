<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrepareBillingDocumentForCustomerResponse StructType
 * @subpackage Structs
 */
class PrepareBillingDocumentForCustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoPreparedCollectiveBilling
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPreparedCollectiveBilling
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPreparedCollectiveBilling[]
     */
    protected array $MidocoPreparedCollectiveBilling = [];
    /**
     * Constructor method for PrepareBillingDocumentForCustomerResponse
     * @uses PrepareBillingDocumentForCustomerResponse::setMidocoPreparedCollectiveBilling()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPreparedCollectiveBilling[] $midocoPreparedCollectiveBilling
     */
    public function __construct(array $midocoPreparedCollectiveBilling = [])
    {
        $this
            ->setMidocoPreparedCollectiveBilling($midocoPreparedCollectiveBilling);
    }
    /**
     * Get MidocoPreparedCollectiveBilling value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPreparedCollectiveBilling[]
     */
    public function getMidocoPreparedCollectiveBilling(): array
    {
        return $this->MidocoPreparedCollectiveBilling;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPreparedCollectiveBilling method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPreparedCollectiveBilling method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPreparedCollectiveBillingForArrayConstraintsFromSetMidocoPreparedCollectiveBilling(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $prepareBillingDocumentForCustomerResponseMidocoPreparedCollectiveBillingItem) {
            // validation for constraint: itemType
            if (!$prepareBillingDocumentForCustomerResponseMidocoPreparedCollectiveBillingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoPreparedCollectiveBilling) {
                $invalidValues[] = is_object($prepareBillingDocumentForCustomerResponseMidocoPreparedCollectiveBillingItem) ? get_class($prepareBillingDocumentForCustomerResponseMidocoPreparedCollectiveBillingItem) : sprintf('%s(%s)', gettype($prepareBillingDocumentForCustomerResponseMidocoPreparedCollectiveBillingItem), var_export($prepareBillingDocumentForCustomerResponseMidocoPreparedCollectiveBillingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPreparedCollectiveBilling property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPreparedCollectiveBilling, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPreparedCollectiveBilling value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPreparedCollectiveBilling[] $midocoPreparedCollectiveBilling
     * @return \Pggns\MidocoApi\Order\StructType\PrepareBillingDocumentForCustomerResponse
     */
    public function setMidocoPreparedCollectiveBilling(array $midocoPreparedCollectiveBilling = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPreparedCollectiveBillingArrayErrorMessage = self::validateMidocoPreparedCollectiveBillingForArrayConstraintsFromSetMidocoPreparedCollectiveBilling($midocoPreparedCollectiveBilling))) {
            throw new InvalidArgumentException($midocoPreparedCollectiveBillingArrayErrorMessage, __LINE__);
        }
        $this->MidocoPreparedCollectiveBilling = $midocoPreparedCollectiveBilling;
        
        return $this;
    }
    /**
     * Add item to MidocoPreparedCollectiveBilling value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPreparedCollectiveBilling $item
     * @return \Pggns\MidocoApi\Order\StructType\PrepareBillingDocumentForCustomerResponse
     */
    public function addToMidocoPreparedCollectiveBilling(\Pggns\MidocoApi\Order\StructType\MidocoPreparedCollectiveBilling $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoPreparedCollectiveBilling) {
            throw new InvalidArgumentException(sprintf('The MidocoPreparedCollectiveBilling property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoPreparedCollectiveBilling, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPreparedCollectiveBilling[] = $item;
        
        return $this;
    }
}
