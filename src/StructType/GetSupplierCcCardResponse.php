<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierCcCardResponse StructType
 * @subpackage Structs
 */
class GetSupplierCcCardResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierCcCard
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierCcCard
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard[]
     */
    protected array $MidocoSupplierCcCard = [];
    /**
     * Constructor method for GetSupplierCcCardResponse
     * @uses GetSupplierCcCardResponse::setMidocoSupplierCcCard()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard[] $midocoSupplierCcCard
     */
    public function __construct(array $midocoSupplierCcCard = [])
    {
        $this
            ->setMidocoSupplierCcCard($midocoSupplierCcCard);
    }
    /**
     * Get MidocoSupplierCcCard value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard[]
     */
    public function getMidocoSupplierCcCard(): array
    {
        return $this->MidocoSupplierCcCard;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierCcCard method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierCcCard method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierCcCardForArrayConstraintsFromSetMidocoSupplierCcCard(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierCcCardResponseMidocoSupplierCcCardItem) {
            // validation for constraint: itemType
            if (!$getSupplierCcCardResponseMidocoSupplierCcCardItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard) {
                $invalidValues[] = is_object($getSupplierCcCardResponseMidocoSupplierCcCardItem) ? get_class($getSupplierCcCardResponseMidocoSupplierCcCardItem) : sprintf('%s(%s)', gettype($getSupplierCcCardResponseMidocoSupplierCcCardItem), var_export($getSupplierCcCardResponseMidocoSupplierCcCardItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierCcCard property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard[] $midocoSupplierCcCard
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierCcCardResponse
     */
    public function setMidocoSupplierCcCard(array $midocoSupplierCcCard = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierCcCardArrayErrorMessage = self::validateMidocoSupplierCcCardForArrayConstraintsFromSetMidocoSupplierCcCard($midocoSupplierCcCard))) {
            throw new InvalidArgumentException($midocoSupplierCcCardArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierCcCard = $midocoSupplierCcCard;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierCcCard value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard $item
     * @return \Pggns\MidocoApi\Order\StructType\GetSupplierCcCardResponse
     */
    public function addToMidocoSupplierCcCard(\Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierCcCard property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSupplierCcCard, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierCcCard[] = $item;
        
        return $this;
    }
}
