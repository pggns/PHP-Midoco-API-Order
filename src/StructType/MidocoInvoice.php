<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoInvoice StructType
 * @subpackage Structs
 */
class MidocoInvoice extends InvoiceDTO
{
    /**
     * The MidocoInvoicePosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoicePosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[]
     */
    protected array $MidocoInvoicePosition = [];
    /**
     * The MidocoInvoiceVatPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoiceVatPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[]
     */
    protected array $MidocoInvoiceVatPosition = [];
    /**
     * The MidocoInvoiceVatCalculation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoiceVatCalculation
     * @var \Pggns\MidocoApi\Order\StructType\InvoiceVatCalculationDTO[]
     */
    protected array $MidocoInvoiceVatCalculation = [];
    /**
     * Constructor method for MidocoInvoice
     * @uses MidocoInvoice::setMidocoInvoicePosition()
     * @uses MidocoInvoice::setMidocoInvoiceVatPosition()
     * @uses MidocoInvoice::setMidocoInvoiceVatCalculation()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[] $midocoInvoicePosition
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[] $midocoInvoiceVatPosition
     * @param \Pggns\MidocoApi\Order\StructType\InvoiceVatCalculationDTO[] $midocoInvoiceVatCalculation
     */
    public function __construct(array $midocoInvoicePosition = [], array $midocoInvoiceVatPosition = [], array $midocoInvoiceVatCalculation = [])
    {
        $this
            ->setMidocoInvoicePosition($midocoInvoicePosition)
            ->setMidocoInvoiceVatPosition($midocoInvoiceVatPosition)
            ->setMidocoInvoiceVatCalculation($midocoInvoiceVatCalculation);
    }
    /**
     * Get MidocoInvoicePosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[]
     */
    public function getMidocoInvoicePosition(): array
    {
        return $this->MidocoInvoicePosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoInvoicePosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoicePosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoicePositionForArrayConstraintsFromSetMidocoInvoicePosition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoInvoiceMidocoInvoicePositionItem) {
            // validation for constraint: itemType
            if (!$midocoInvoiceMidocoInvoicePositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition) {
                $invalidValues[] = is_object($midocoInvoiceMidocoInvoicePositionItem) ? get_class($midocoInvoiceMidocoInvoicePositionItem) : sprintf('%s(%s)', gettype($midocoInvoiceMidocoInvoicePositionItem), var_export($midocoInvoiceMidocoInvoicePositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoicePosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoicePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[] $midocoInvoicePosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoice
     */
    public function setMidocoInvoicePosition(array $midocoInvoicePosition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoicePositionArrayErrorMessage = self::validateMidocoInvoicePositionForArrayConstraintsFromSetMidocoInvoicePosition($midocoInvoicePosition))) {
            throw new InvalidArgumentException($midocoInvoicePositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoicePosition = $midocoInvoicePosition;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoicePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoice
     */
    public function addToMidocoInvoicePosition(\Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoicePosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoicePosition[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoInvoiceVatPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[]
     */
    public function getMidocoInvoiceVatPosition(): array
    {
        return $this->MidocoInvoiceVatPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoInvoiceVatPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoiceVatPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoiceVatPositionForArrayConstraintsFromSetMidocoInvoiceVatPosition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoInvoiceMidocoInvoiceVatPositionItem) {
            // validation for constraint: itemType
            if (!$midocoInvoiceMidocoInvoiceVatPositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition) {
                $invalidValues[] = is_object($midocoInvoiceMidocoInvoiceVatPositionItem) ? get_class($midocoInvoiceMidocoInvoiceVatPositionItem) : sprintf('%s(%s)', gettype($midocoInvoiceMidocoInvoiceVatPositionItem), var_export($midocoInvoiceMidocoInvoiceVatPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoiceVatPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoiceVatPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[] $midocoInvoiceVatPosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoice
     */
    public function setMidocoInvoiceVatPosition(array $midocoInvoiceVatPosition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoiceVatPositionArrayErrorMessage = self::validateMidocoInvoiceVatPositionForArrayConstraintsFromSetMidocoInvoiceVatPosition($midocoInvoiceVatPosition))) {
            throw new InvalidArgumentException($midocoInvoiceVatPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoiceVatPosition = $midocoInvoiceVatPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoiceVatPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoice
     */
    public function addToMidocoInvoiceVatPosition(\Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoiceVatPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoiceVatPosition[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoInvoiceVatCalculation value
     * @return \Pggns\MidocoApi\Order\StructType\InvoiceVatCalculationDTO[]
     */
    public function getMidocoInvoiceVatCalculation(): array
    {
        return $this->MidocoInvoiceVatCalculation;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoInvoiceVatCalculation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoiceVatCalculation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoiceVatCalculationForArrayConstraintsFromSetMidocoInvoiceVatCalculation(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoInvoiceMidocoInvoiceVatCalculationItem) {
            // validation for constraint: itemType
            if (!$midocoInvoiceMidocoInvoiceVatCalculationItem instanceof \Pggns\MidocoApi\Order\StructType\InvoiceVatCalculationDTO) {
                $invalidValues[] = is_object($midocoInvoiceMidocoInvoiceVatCalculationItem) ? get_class($midocoInvoiceMidocoInvoiceVatCalculationItem) : sprintf('%s(%s)', gettype($midocoInvoiceMidocoInvoiceVatCalculationItem), var_export($midocoInvoiceMidocoInvoiceVatCalculationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoiceVatCalculation property can only contain items of type \Pggns\MidocoApi\Order\StructType\InvoiceVatCalculationDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoiceVatCalculation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\InvoiceVatCalculationDTO[] $midocoInvoiceVatCalculation
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoice
     */
    public function setMidocoInvoiceVatCalculation(array $midocoInvoiceVatCalculation = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoiceVatCalculationArrayErrorMessage = self::validateMidocoInvoiceVatCalculationForArrayConstraintsFromSetMidocoInvoiceVatCalculation($midocoInvoiceVatCalculation))) {
            throw new InvalidArgumentException($midocoInvoiceVatCalculationArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoiceVatCalculation = $midocoInvoiceVatCalculation;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoiceVatCalculation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\InvoiceVatCalculationDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoice
     */
    public function addToMidocoInvoiceVatCalculation(\Pggns\MidocoApi\Order\StructType\InvoiceVatCalculationDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\InvoiceVatCalculationDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoiceVatCalculation property can only contain items of type \Pggns\MidocoApi\Order\StructType\InvoiceVatCalculationDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoiceVatCalculation[] = $item;
        
        return $this;
    }
}
