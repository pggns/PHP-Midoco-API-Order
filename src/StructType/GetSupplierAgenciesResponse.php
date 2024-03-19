<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierAgenciesResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSupplierAgenciesResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgency
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAgency
     * @var \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO[]
     */
    protected ?array $MidocoSupplierAgency = null;
    /**
     * Constructor method for GetSupplierAgenciesResponse
     * @uses GetSupplierAgenciesResponse::setMidocoSupplierAgency()
     * @param \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO[] $midocoSupplierAgency
     */
    public function __construct(?array $midocoSupplierAgency = null)
    {
        $this
            ->setMidocoSupplierAgency($midocoSupplierAgency);
    }
    /**
     * Get MidocoSupplierAgency value
     * @return \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO[]
     */
    public function getMidocoSupplierAgency(): ?array
    {
        return $this->MidocoSupplierAgency;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSupplierAgency method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAgency method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAgencyForArrayConstraintFromSetMidocoSupplierAgency(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierAgenciesResponseMidocoSupplierAgencyItem) {
            // validation for constraint: itemType
            if (!$getSupplierAgenciesResponseMidocoSupplierAgencyItem instanceof \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO) {
                $invalidValues[] = is_object($getSupplierAgenciesResponseMidocoSupplierAgencyItem) ? get_class($getSupplierAgenciesResponseMidocoSupplierAgencyItem) : sprintf('%s(%s)', gettype($getSupplierAgenciesResponseMidocoSupplierAgencyItem), var_export($getSupplierAgenciesResponseMidocoSupplierAgencyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAgency property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAgency value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO[] $midocoSupplierAgency
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgenciesResponse
     */
    public function setMidocoSupplierAgency(?array $midocoSupplierAgency = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAgencyArrayErrorMessage = self::validateMidocoSupplierAgencyForArrayConstraintFromSetMidocoSupplierAgency($midocoSupplierAgency))) {
            throw new InvalidArgumentException($midocoSupplierAgencyArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAgency = $midocoSupplierAgency;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAgency value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierAgenciesResponse
     */
    public function addToMidocoSupplierAgency(\Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAgency property can only contain items of type \Pggns\MidocoApi\Order\StructType\SupplierAgencyDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAgency[] = $item;
        
        return $this;
    }
}
