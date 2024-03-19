<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMediatorBillingsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchMediatorBillingsResponse extends AbstractStructBase
{
    /**
     * The MidocoMediatorBilling
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMediatorBilling
     * @var \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO[]
     */
    protected ?array $MidocoMediatorBilling = null;
    /**
     * Constructor method for SearchMediatorBillingsResponse
     * @uses SearchMediatorBillingsResponse::setMidocoMediatorBilling()
     * @param \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO[] $midocoMediatorBilling
     */
    public function __construct(?array $midocoMediatorBilling = null)
    {
        $this
            ->setMidocoMediatorBilling($midocoMediatorBilling);
    }
    /**
     * Get MidocoMediatorBilling value
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO[]
     */
    public function getMidocoMediatorBilling(): ?array
    {
        return $this->MidocoMediatorBilling;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMediatorBilling method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMediatorBilling method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMediatorBillingForArrayConstraintFromSetMidocoMediatorBilling(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchMediatorBillingsResponseMidocoMediatorBillingItem) {
            // validation for constraint: itemType
            if (!$searchMediatorBillingsResponseMidocoMediatorBillingItem instanceof \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO) {
                $invalidValues[] = is_object($searchMediatorBillingsResponseMidocoMediatorBillingItem) ? get_class($searchMediatorBillingsResponseMidocoMediatorBillingItem) : sprintf('%s(%s)', gettype($searchMediatorBillingsResponseMidocoMediatorBillingItem), var_export($searchMediatorBillingsResponseMidocoMediatorBillingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMediatorBilling property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMediatorBilling value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO[] $midocoMediatorBilling
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorBillingsResponse
     */
    public function setMidocoMediatorBilling(?array $midocoMediatorBilling = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMediatorBillingArrayErrorMessage = self::validateMidocoMediatorBillingForArrayConstraintFromSetMidocoMediatorBilling($midocoMediatorBilling))) {
            throw new InvalidArgumentException($midocoMediatorBillingArrayErrorMessage, __LINE__);
        }
        $this->MidocoMediatorBilling = $midocoMediatorBilling;
        
        return $this;
    }
    /**
     * Add item to MidocoMediatorBilling value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchMediatorBillingsResponse
     */
    public function addToMidocoMediatorBilling(\Pggns\MidocoApi\Order\StructType\MediatorBillingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMediatorBilling property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMediatorBilling[] = $item;
        
        return $this;
    }
}
