<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTamaraPositionResponse StructType
 * @subpackage Structs
 */
class GetTamaraPositionResponse extends AbstractStructBase
{
    /**
     * The MidocoTamaraPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTamaraPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition[]
     */
    protected array $MidocoTamaraPosition = [];
    /**
     * Constructor method for GetTamaraPositionResponse
     * @uses GetTamaraPositionResponse::setMidocoTamaraPosition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition[] $midocoTamaraPosition
     */
    public function __construct(array $midocoTamaraPosition = [])
    {
        $this
            ->setMidocoTamaraPosition($midocoTamaraPosition);
    }
    /**
     * Get MidocoTamaraPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition[]
     */
    public function getMidocoTamaraPosition(): array
    {
        return $this->MidocoTamaraPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTamaraPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTamaraPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTamaraPositionForArrayConstraintsFromSetMidocoTamaraPosition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getTamaraPositionResponseMidocoTamaraPositionItem) {
            // validation for constraint: itemType
            if (!$getTamaraPositionResponseMidocoTamaraPositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition) {
                $invalidValues[] = is_object($getTamaraPositionResponseMidocoTamaraPositionItem) ? get_class($getTamaraPositionResponseMidocoTamaraPositionItem) : sprintf('%s(%s)', gettype($getTamaraPositionResponseMidocoTamaraPositionItem), var_export($getTamaraPositionResponseMidocoTamaraPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTamaraPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTamaraPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition[] $midocoTamaraPosition
     * @return \Pggns\MidocoApi\Order\StructType\GetTamaraPositionResponse
     */
    public function setMidocoTamaraPosition(array $midocoTamaraPosition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTamaraPositionArrayErrorMessage = self::validateMidocoTamaraPositionForArrayConstraintsFromSetMidocoTamaraPosition($midocoTamaraPosition))) {
            throw new InvalidArgumentException($midocoTamaraPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoTamaraPosition = $midocoTamaraPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoTamaraPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition $item
     * @return \Pggns\MidocoApi\Order\StructType\GetTamaraPositionResponse
     */
    public function addToMidocoTamaraPosition(\Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoTamaraPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTamaraPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTamaraPosition[] = $item;
        
        return $this;
    }
}
