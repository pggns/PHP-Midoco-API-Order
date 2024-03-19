<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrgunitForSupplierAgencyResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetOrgunitForSupplierAgencyResponse extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The supplierId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $supplierId = null;
    /**
     * Constructor method for GetOrgunitForSupplierAgencyResponse
     * @uses GetOrgunitForSupplierAgencyResponse::setUnitName()
     * @uses GetOrgunitForSupplierAgencyResponse::setSupplierId()
     * @param string $unitName
     * @param string[] $supplierId
     */
    public function __construct(?string $unitName = null, ?array $supplierId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setSupplierId($supplierId);
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\GetOrgunitForSupplierAgencyResponse
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string[]
     */
    public function getSupplierId(): ?array
    {
        return $this->supplierId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSupplierId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplierId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplierIdForArrayConstraintFromSetSupplierId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrgunitForSupplierAgencyResponseSupplierIdItem) {
            // validation for constraint: itemType
            if (!is_string($getOrgunitForSupplierAgencyResponseSupplierIdItem)) {
                $invalidValues[] = is_object($getOrgunitForSupplierAgencyResponseSupplierIdItem) ? get_class($getOrgunitForSupplierAgencyResponseSupplierIdItem) : sprintf('%s(%s)', gettype($getOrgunitForSupplierAgencyResponseSupplierIdItem), var_export($getOrgunitForSupplierAgencyResponseSupplierIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supplierId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set supplierId value
     * @throws InvalidArgumentException
     * @param string[] $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\GetOrgunitForSupplierAgencyResponse
     */
    public function setSupplierId(?array $supplierId = null): self
    {
        // validation for constraint: array
        if ('' !== ($supplierIdArrayErrorMessage = self::validateSupplierIdForArrayConstraintFromSetSupplierId($supplierId))) {
            throw new InvalidArgumentException($supplierIdArrayErrorMessage, __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Add item to supplierId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetOrgunitForSupplierAgencyResponse
     */
    public function addToSupplierId(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The supplierId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplierId[] = $item;
        
        return $this;
    }
}
