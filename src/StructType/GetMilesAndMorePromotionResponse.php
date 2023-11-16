<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMilesAndMorePromotionResponse StructType
 * @subpackage Structs
 */
class GetMilesAndMorePromotionResponse extends AbstractStructBase
{
    /**
     * The MidocoMilesAndMorePromotion
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMilesAndMorePromotion
     * @var \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO[]
     */
    protected array $MidocoMilesAndMorePromotion = [];
    /**
     * Constructor method for GetMilesAndMorePromotionResponse
     * @uses GetMilesAndMorePromotionResponse::setMidocoMilesAndMorePromotion()
     * @param \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO[] $midocoMilesAndMorePromotion
     */
    public function __construct(array $midocoMilesAndMorePromotion = [])
    {
        $this
            ->setMidocoMilesAndMorePromotion($midocoMilesAndMorePromotion);
    }
    /**
     * Get MidocoMilesAndMorePromotion value
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO[]
     */
    public function getMidocoMilesAndMorePromotion(): array
    {
        return $this->MidocoMilesAndMorePromotion;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMilesAndMorePromotion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMilesAndMorePromotion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMilesAndMorePromotionForArrayConstraintsFromSetMidocoMilesAndMorePromotion(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMilesAndMorePromotionResponseMidocoMilesAndMorePromotionItem) {
            // validation for constraint: itemType
            if (!$getMilesAndMorePromotionResponseMidocoMilesAndMorePromotionItem instanceof \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO) {
                $invalidValues[] = is_object($getMilesAndMorePromotionResponseMidocoMilesAndMorePromotionItem) ? get_class($getMilesAndMorePromotionResponseMidocoMilesAndMorePromotionItem) : sprintf('%s(%s)', gettype($getMilesAndMorePromotionResponseMidocoMilesAndMorePromotionItem), var_export($getMilesAndMorePromotionResponseMidocoMilesAndMorePromotionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMilesAndMorePromotion property can only contain items of type \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMilesAndMorePromotion value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO[] $midocoMilesAndMorePromotion
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMorePromotionResponse
     */
    public function setMidocoMilesAndMorePromotion(array $midocoMilesAndMorePromotion = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMilesAndMorePromotionArrayErrorMessage = self::validateMidocoMilesAndMorePromotionForArrayConstraintsFromSetMidocoMilesAndMorePromotion($midocoMilesAndMorePromotion))) {
            throw new InvalidArgumentException($midocoMilesAndMorePromotionArrayErrorMessage, __LINE__);
        }
        $this->MidocoMilesAndMorePromotion = $midocoMilesAndMorePromotion;
        
        return $this;
    }
    /**
     * Add item to MidocoMilesAndMorePromotion value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetMilesAndMorePromotionResponse
     */
    public function addToMidocoMilesAndMorePromotion(\Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMilesAndMorePromotion property can only contain items of type \Pggns\MidocoApi\Order\StructType\MilesAndMorePromotionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMilesAndMorePromotion[] = $item;
        
        return $this;
    }
}
