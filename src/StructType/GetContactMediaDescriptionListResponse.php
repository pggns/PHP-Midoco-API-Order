<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetContactMediaDescriptionListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetContactMediaDescriptionListResponse extends AbstractStructBase
{
    /**
     * The MidocoContactMediaDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoContactMediaDescription
     * @var \Pggns\MidocoApi\Order\StructType\MediaDescriptionDTO[]
     */
    protected ?array $MidocoContactMediaDescription = null;
    /**
     * Constructor method for GetContactMediaDescriptionListResponse
     * @uses GetContactMediaDescriptionListResponse::setMidocoContactMediaDescription()
     * @param \Pggns\MidocoApi\Order\StructType\MediaDescriptionDTO[] $midocoContactMediaDescription
     */
    public function __construct(?array $midocoContactMediaDescription = null)
    {
        $this
            ->setMidocoContactMediaDescription($midocoContactMediaDescription);
    }
    /**
     * Get MidocoContactMediaDescription value
     * @return \Pggns\MidocoApi\Order\StructType\MediaDescriptionDTO[]
     */
    public function getMidocoContactMediaDescription(): ?array
    {
        return $this->MidocoContactMediaDescription;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoContactMediaDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoContactMediaDescription method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoContactMediaDescriptionForArrayConstraintFromSetMidocoContactMediaDescription(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getContactMediaDescriptionListResponseMidocoContactMediaDescriptionItem) {
            // validation for constraint: itemType
            if (!$getContactMediaDescriptionListResponseMidocoContactMediaDescriptionItem instanceof \Pggns\MidocoApi\Order\StructType\MediaDescriptionDTO) {
                $invalidValues[] = is_object($getContactMediaDescriptionListResponseMidocoContactMediaDescriptionItem) ? get_class($getContactMediaDescriptionListResponseMidocoContactMediaDescriptionItem) : sprintf('%s(%s)', gettype($getContactMediaDescriptionListResponseMidocoContactMediaDescriptionItem), var_export($getContactMediaDescriptionListResponseMidocoContactMediaDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoContactMediaDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediaDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoContactMediaDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediaDescriptionDTO[] $midocoContactMediaDescription
     * @return \Pggns\MidocoApi\Order\StructType\GetContactMediaDescriptionListResponse
     */
    public function setMidocoContactMediaDescription(?array $midocoContactMediaDescription = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoContactMediaDescriptionArrayErrorMessage = self::validateMidocoContactMediaDescriptionForArrayConstraintFromSetMidocoContactMediaDescription($midocoContactMediaDescription))) {
            throw new InvalidArgumentException($midocoContactMediaDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoContactMediaDescription = $midocoContactMediaDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoContactMediaDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediaDescriptionDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetContactMediaDescriptionListResponse
     */
    public function addToMidocoContactMediaDescription(\Pggns\MidocoApi\Order\StructType\MediaDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MediaDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoContactMediaDescription property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediaDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoContactMediaDescription[] = $item;
        
        return $this;
    }
}
