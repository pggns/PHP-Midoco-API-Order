<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemarkIdentifiersSearchCriteria StructType
 * @subpackage Structs
 */
class RemarkIdentifiersSearchCriteria extends AbstractStructBase
{
    /**
     * The supplierIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $supplierIds = [];
    /**
     * The orgunit
     * @var string|null
     */
    protected ?string $orgunit = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The cultureID
     * @var string|null
     */
    protected ?string $cultureID = null;
    /**
     * Constructor method for RemarkIdentifiersSearchCriteria
     * @uses RemarkIdentifiersSearchCriteria::setSupplierIds()
     * @uses RemarkIdentifiersSearchCriteria::setOrgunit()
     * @uses RemarkIdentifiersSearchCriteria::setType()
     * @uses RemarkIdentifiersSearchCriteria::setCultureID()
     * @param string[] $supplierIds
     * @param string $orgunit
     * @param string $type
     * @param string $cultureID
     */
    public function __construct(array $supplierIds = [], ?string $orgunit = null, ?string $type = null, ?string $cultureID = null)
    {
        $this
            ->setSupplierIds($supplierIds)
            ->setOrgunit($orgunit)
            ->setType($type)
            ->setCultureID($cultureID);
    }
    /**
     * Get supplierIds value
     * @return string[]
     */
    public function getSupplierIds(): array
    {
        return $this->supplierIds;
    }
    /**
     * This method is responsible for validating the values passed to the setSupplierIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupplierIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupplierIdsForArrayConstraintsFromSetSupplierIds(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $remarkIdentifiersSearchCriteriaSupplierIdsItem) {
            // validation for constraint: itemType
            if (!is_string($remarkIdentifiersSearchCriteriaSupplierIdsItem)) {
                $invalidValues[] = is_object($remarkIdentifiersSearchCriteriaSupplierIdsItem) ? get_class($remarkIdentifiersSearchCriteriaSupplierIdsItem) : sprintf('%s(%s)', gettype($remarkIdentifiersSearchCriteriaSupplierIdsItem), var_export($remarkIdentifiersSearchCriteriaSupplierIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The supplierIds property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set supplierIds value
     * @throws InvalidArgumentException
     * @param string[] $supplierIds
     * @return \Pggns\MidocoApi\Order\StructType\RemarkIdentifiersSearchCriteria
     */
    public function setSupplierIds(array $supplierIds = []): self
    {
        // validation for constraint: array
        if ('' !== ($supplierIdsArrayErrorMessage = self::validateSupplierIdsForArrayConstraintsFromSetSupplierIds($supplierIds))) {
            throw new InvalidArgumentException($supplierIdsArrayErrorMessage, __LINE__);
        }
        $this->supplierIds = $supplierIds;
        
        return $this;
    }
    /**
     * Add item to supplierIds value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\RemarkIdentifiersSearchCriteria
     */
    public function addToSupplierIds(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The supplierIds property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->supplierIds[] = $item;
        
        return $this;
    }
    /**
     * Get orgunit value
     * @return string|null
     */
    public function getOrgunit(): ?string
    {
        return $this->orgunit;
    }
    /**
     * Set orgunit value
     * @param string $orgunit
     * @return \Pggns\MidocoApi\Order\StructType\RemarkIdentifiersSearchCriteria
     */
    public function setOrgunit(?string $orgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgunit) && !is_string($orgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgunit, true), gettype($orgunit)), __LINE__);
        }
        $this->orgunit = $orgunit;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Order\StructType\RemarkIdentifiersSearchCriteria
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get cultureID value
     * @return string|null
     */
    public function getCultureID(): ?string
    {
        return $this->cultureID;
    }
    /**
     * Set cultureID value
     * @param string $cultureID
     * @return \Pggns\MidocoApi\Order\StructType\RemarkIdentifiersSearchCriteria
     */
    public function setCultureID(?string $cultureID = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureID) && !is_string($cultureID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureID, true), gettype($cultureID)), __LINE__);
        }
        $this->cultureID = $cultureID;
        
        return $this;
    }
}
