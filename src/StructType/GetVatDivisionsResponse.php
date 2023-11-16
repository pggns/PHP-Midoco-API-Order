<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVatDivisionsResponse StructType
 * @subpackage Structs
 */
class GetVatDivisionsResponse extends AbstractStructBase
{
    /**
     * The MidocoVatDivision
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVatDivision
     * @var \Pggns\MidocoApi\Order\StructType\VatDivisionDTO[]
     */
    protected array $MidocoVatDivision = [];
    /**
     * Constructor method for GetVatDivisionsResponse
     * @uses GetVatDivisionsResponse::setMidocoVatDivision()
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionDTO[] $midocoVatDivision
     */
    public function __construct(array $midocoVatDivision = [])
    {
        $this
            ->setMidocoVatDivision($midocoVatDivision);
    }
    /**
     * Get MidocoVatDivision value
     * @return \Pggns\MidocoApi\Order\StructType\VatDivisionDTO[]
     */
    public function getMidocoVatDivision(): array
    {
        return $this->MidocoVatDivision;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVatDivision method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVatDivision method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVatDivisionForArrayConstraintsFromSetMidocoVatDivision(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getVatDivisionsResponseMidocoVatDivisionItem) {
            // validation for constraint: itemType
            if (!$getVatDivisionsResponseMidocoVatDivisionItem instanceof \Pggns\MidocoApi\Order\StructType\VatDivisionDTO) {
                $invalidValues[] = is_object($getVatDivisionsResponseMidocoVatDivisionItem) ? get_class($getVatDivisionsResponseMidocoVatDivisionItem) : sprintf('%s(%s)', gettype($getVatDivisionsResponseMidocoVatDivisionItem), var_export($getVatDivisionsResponseMidocoVatDivisionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\VatDivisionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionDTO[] $midocoVatDivision
     * @return \Pggns\MidocoApi\Order\StructType\GetVatDivisionsResponse
     */
    public function setMidocoVatDivision(array $midocoVatDivision = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVatDivisionArrayErrorMessage = self::validateMidocoVatDivisionForArrayConstraintsFromSetMidocoVatDivision($midocoVatDivision))) {
            throw new InvalidArgumentException($midocoVatDivisionArrayErrorMessage, __LINE__);
        }
        $this->MidocoVatDivision = $midocoVatDivision;
        
        return $this;
    }
    /**
     * Add item to MidocoVatDivision value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\VatDivisionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetVatDivisionsResponse
     */
    public function addToMidocoVatDivision(\Pggns\MidocoApi\Order\StructType\VatDivisionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\VatDivisionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoVatDivision property can only contain items of type \Pggns\MidocoApi\Order\StructType\VatDivisionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVatDivision[] = $item;
        
        return $this;
    }
}
