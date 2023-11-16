<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplateSuppliersAssignType StructType
 * @subpackage Structs
 */
class TemplateSuppliersAssignType extends AbstractStructBase
{
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $unitName;
    /**
     * The templateId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $templateId;
    /**
     * The SupplierId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected array $SupplierId = [];
    /**
     * Constructor method for TemplateSuppliersAssignType
     * @uses TemplateSuppliersAssignType::setUnitName()
     * @uses TemplateSuppliersAssignType::setTemplateId()
     * @uses TemplateSuppliersAssignType::setSupplierId()
     * @param string $unitName
     * @param int $templateId
     * @param string[] $supplierId
     */
    public function __construct(string $unitName, int $templateId, array $supplierId = [])
    {
        $this
            ->setUnitName($unitName)
            ->setTemplateId($templateId)
            ->setSupplierId($supplierId);
    }
    /**
     * Get unitName value
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\TemplateSuppliersAssignType
     */
    public function setUnitName(string $unitName): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get templateId value
     * @return int
     */
    public function getTemplateId(): int
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param int $templateId
     * @return \Pggns\MidocoApi\Order\StructType\TemplateSuppliersAssignType
     */
    public function setTemplateId(int $templateId): self
    {
        // validation for constraint: int
        if (!is_null($templateId) && !(is_int($templateId) || ctype_digit($templateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        $this->templateId = $templateId;
        
        return $this;
    }
    /**
     * Get SupplierId value
     * @return string[]
     */
    public function getSupplierId(): array
    {
        return $this->SupplierId;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplierId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplierId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplierIdForArrayConstraintsFromSetSupplierId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $templateSuppliersAssignTypeSupplierIdItem) {
            // validation for constraint: itemType
            if (!is_string($templateSuppliersAssignTypeSupplierIdItem)) {
                $invalidValues[] = is_object($templateSuppliersAssignTypeSupplierIdItem) ? get_class($templateSuppliersAssignTypeSupplierIdItem) : sprintf('%s(%s)', gettype($templateSuppliersAssignTypeSupplierIdItem), var_export($templateSuppliersAssignTypeSupplierIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SupplierId property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SupplierId value
     * @throws InvalidArgumentException
     * @param string[] $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\TemplateSuppliersAssignType
     */
    public function setSupplierId(array $supplierId = []): self
    {
        // validation for constraint: array
        if ('' !== ($supplierIdArrayErrorMessage = self::validateSupplierIdForArrayConstraintsFromSetSupplierId($supplierId))) {
            throw new InvalidArgumentException($supplierIdArrayErrorMessage, __LINE__);
        }
        $this->SupplierId = $supplierId;
        
        return $this;
    }
    /**
     * Add item to SupplierId value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\TemplateSuppliersAssignType
     */
    public function addToSupplierId(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The SupplierId property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SupplierId[] = $item;
        
        return $this;
    }
}
