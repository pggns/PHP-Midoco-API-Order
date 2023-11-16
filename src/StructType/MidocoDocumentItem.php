<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDocumentItem StructType
 * @subpackage Structs
 */
class MidocoDocumentItem extends DocumentitemDTO
{
    /**
     * The MidocoDocumentTax
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDocumentTax
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDocumentTaxType[]
     */
    protected array $MidocoDocumentTax = [];
    /**
     * The MidocoDocFlightDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDocFlightDetail
     * @var \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO[]
     */
    protected array $MidocoDocFlightDetail = [];
    /**
     * Constructor method for MidocoDocumentItem
     * @uses MidocoDocumentItem::setMidocoDocumentTax()
     * @uses MidocoDocumentItem::setMidocoDocFlightDetail()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentTaxType[] $midocoDocumentTax
     * @param \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO[] $midocoDocFlightDetail
     */
    public function __construct(array $midocoDocumentTax = [], array $midocoDocFlightDetail = [])
    {
        $this
            ->setMidocoDocumentTax($midocoDocumentTax)
            ->setMidocoDocFlightDetail($midocoDocFlightDetail);
    }
    /**
     * Get MidocoDocumentTax value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentTaxType[]
     */
    public function getMidocoDocumentTax(): array
    {
        return $this->MidocoDocumentTax;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDocumentTax method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDocumentTax method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDocumentTaxForArrayConstraintsFromSetMidocoDocumentTax(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDocumentItemMidocoDocumentTaxItem) {
            // validation for constraint: itemType
            if (!$midocoDocumentItemMidocoDocumentTaxItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoDocumentTaxType) {
                $invalidValues[] = is_object($midocoDocumentItemMidocoDocumentTaxItem) ? get_class($midocoDocumentItemMidocoDocumentTaxItem) : sprintf('%s(%s)', gettype($midocoDocumentItemMidocoDocumentTaxItem), var_export($midocoDocumentItemMidocoDocumentTaxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDocumentTax property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDocumentTaxType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDocumentTax value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentTaxType[] $midocoDocumentTax
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem
     */
    public function setMidocoDocumentTax(array $midocoDocumentTax = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDocumentTaxArrayErrorMessage = self::validateMidocoDocumentTaxForArrayConstraintsFromSetMidocoDocumentTax($midocoDocumentTax))) {
            throw new InvalidArgumentException($midocoDocumentTaxArrayErrorMessage, __LINE__);
        }
        $this->MidocoDocumentTax = $midocoDocumentTax;
        
        return $this;
    }
    /**
     * Add item to MidocoDocumentTax value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentTaxType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem
     */
    public function addToMidocoDocumentTax(\Pggns\MidocoApi\Order\StructType\MidocoDocumentTaxType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoDocumentTaxType) {
            throw new InvalidArgumentException(sprintf('The MidocoDocumentTax property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoDocumentTaxType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDocumentTax[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoDocFlightDetail value
     * @return \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO[]
     */
    public function getMidocoDocFlightDetail(): array
    {
        return $this->MidocoDocFlightDetail;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoDocFlightDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDocFlightDetail method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDocFlightDetailForArrayConstraintsFromSetMidocoDocFlightDetail(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDocumentItemMidocoDocFlightDetailItem) {
            // validation for constraint: itemType
            if (!$midocoDocumentItemMidocoDocFlightDetailItem instanceof \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO) {
                $invalidValues[] = is_object($midocoDocumentItemMidocoDocFlightDetailItem) ? get_class($midocoDocumentItemMidocoDocFlightDetailItem) : sprintf('%s(%s)', gettype($midocoDocumentItemMidocoDocFlightDetailItem), var_export($midocoDocumentItemMidocoDocFlightDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDocFlightDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDocFlightDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO[] $midocoDocFlightDetail
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem
     */
    public function setMidocoDocFlightDetail(array $midocoDocFlightDetail = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDocFlightDetailArrayErrorMessage = self::validateMidocoDocFlightDetailForArrayConstraintsFromSetMidocoDocFlightDetail($midocoDocFlightDetail))) {
            throw new InvalidArgumentException($midocoDocFlightDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoDocFlightDetail = $midocoDocFlightDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoDocFlightDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem
     */
    public function addToMidocoDocFlightDetail(\Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDocFlightDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\DocFlightDetailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDocFlightDetail[] = $item;
        
        return $this;
    }
}
