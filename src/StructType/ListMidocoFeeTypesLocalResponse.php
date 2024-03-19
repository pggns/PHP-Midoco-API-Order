<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListMidocoFeeTypesLocalResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: return the fee types localizations that match the criteria
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListMidocoFeeTypesLocalResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeLocal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFeeTypeLocal
     * @var \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO[]
     */
    protected ?array $MidocoFeeTypeLocal = null;
    /**
     * Constructor method for ListMidocoFeeTypesLocalResponse
     * @uses ListMidocoFeeTypesLocalResponse::setMidocoFeeTypeLocal()
     * @param \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO[] $midocoFeeTypeLocal
     */
    public function __construct(?array $midocoFeeTypeLocal = null)
    {
        $this
            ->setMidocoFeeTypeLocal($midocoFeeTypeLocal);
    }
    /**
     * Get MidocoFeeTypeLocal value
     * @return \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO[]
     */
    public function getMidocoFeeTypeLocal(): ?array
    {
        return $this->MidocoFeeTypeLocal;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFeeTypeLocal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFeeTypeLocal method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFeeTypeLocalForArrayConstraintFromSetMidocoFeeTypeLocal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listMidocoFeeTypesLocalResponseMidocoFeeTypeLocalItem) {
            // validation for constraint: itemType
            if (!$listMidocoFeeTypesLocalResponseMidocoFeeTypeLocalItem instanceof \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO) {
                $invalidValues[] = is_object($listMidocoFeeTypesLocalResponseMidocoFeeTypeLocalItem) ? get_class($listMidocoFeeTypesLocalResponseMidocoFeeTypeLocalItem) : sprintf('%s(%s)', gettype($listMidocoFeeTypesLocalResponseMidocoFeeTypeLocalItem), var_export($listMidocoFeeTypesLocalResponseMidocoFeeTypeLocalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFeeTypeLocal property can only contain items of type \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFeeTypeLocal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO[] $midocoFeeTypeLocal
     * @return \Pggns\MidocoApi\Order\StructType\ListMidocoFeeTypesLocalResponse
     */
    public function setMidocoFeeTypeLocal(?array $midocoFeeTypeLocal = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFeeTypeLocalArrayErrorMessage = self::validateMidocoFeeTypeLocalForArrayConstraintFromSetMidocoFeeTypeLocal($midocoFeeTypeLocal))) {
            throw new InvalidArgumentException($midocoFeeTypeLocalArrayErrorMessage, __LINE__);
        }
        $this->MidocoFeeTypeLocal = $midocoFeeTypeLocal;
        
        return $this;
    }
    /**
     * Add item to MidocoFeeTypeLocal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\ListMidocoFeeTypesLocalResponse
     */
    public function addToMidocoFeeTypeLocal(\Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoFeeTypeLocal property can only contain items of type \Pggns\MidocoApi\Order\StructType\FeeTypeLocalDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFeeTypeLocal[] = $item;
        
        return $this;
    }
}
