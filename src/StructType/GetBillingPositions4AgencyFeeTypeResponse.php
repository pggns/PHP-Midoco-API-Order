<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingPositions4AgencyFeeTypeResponse StructType
 * @subpackage Structs
 */
class GetBillingPositions4AgencyFeeTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoAgencyFeeTypeBillingPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAgencyFeeTypeBillingPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAgencyFeeTypeBillingPosition[]
     */
    protected array $MidocoAgencyFeeTypeBillingPosition = [];
    /**
     * Constructor method for GetBillingPositions4AgencyFeeTypeResponse
     * @uses GetBillingPositions4AgencyFeeTypeResponse::setMidocoAgencyFeeTypeBillingPosition()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyFeeTypeBillingPosition[] $midocoAgencyFeeTypeBillingPosition
     */
    public function __construct(array $midocoAgencyFeeTypeBillingPosition = [])
    {
        $this
            ->setMidocoAgencyFeeTypeBillingPosition($midocoAgencyFeeTypeBillingPosition);
    }
    /**
     * Get MidocoAgencyFeeTypeBillingPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAgencyFeeTypeBillingPosition[]
     */
    public function getMidocoAgencyFeeTypeBillingPosition(): array
    {
        return $this->MidocoAgencyFeeTypeBillingPosition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAgencyFeeTypeBillingPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAgencyFeeTypeBillingPosition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAgencyFeeTypeBillingPositionForArrayConstraintsFromSetMidocoAgencyFeeTypeBillingPosition(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingPositions4AgencyFeeTypeResponseMidocoAgencyFeeTypeBillingPositionItem) {
            // validation for constraint: itemType
            if (!$getBillingPositions4AgencyFeeTypeResponseMidocoAgencyFeeTypeBillingPositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAgencyFeeTypeBillingPosition) {
                $invalidValues[] = is_object($getBillingPositions4AgencyFeeTypeResponseMidocoAgencyFeeTypeBillingPositionItem) ? get_class($getBillingPositions4AgencyFeeTypeResponseMidocoAgencyFeeTypeBillingPositionItem) : sprintf('%s(%s)', gettype($getBillingPositions4AgencyFeeTypeResponseMidocoAgencyFeeTypeBillingPositionItem), var_export($getBillingPositions4AgencyFeeTypeResponseMidocoAgencyFeeTypeBillingPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAgencyFeeTypeBillingPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAgencyFeeTypeBillingPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAgencyFeeTypeBillingPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyFeeTypeBillingPosition[] $midocoAgencyFeeTypeBillingPosition
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositions4AgencyFeeTypeResponse
     */
    public function setMidocoAgencyFeeTypeBillingPosition(array $midocoAgencyFeeTypeBillingPosition = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAgencyFeeTypeBillingPositionArrayErrorMessage = self::validateMidocoAgencyFeeTypeBillingPositionForArrayConstraintsFromSetMidocoAgencyFeeTypeBillingPosition($midocoAgencyFeeTypeBillingPosition))) {
            throw new InvalidArgumentException($midocoAgencyFeeTypeBillingPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoAgencyFeeTypeBillingPosition = $midocoAgencyFeeTypeBillingPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoAgencyFeeTypeBillingPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyFeeTypeBillingPosition $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPositions4AgencyFeeTypeResponse
     */
    public function addToMidocoAgencyFeeTypeBillingPosition(\Pggns\MidocoApi\Order\StructType\MidocoAgencyFeeTypeBillingPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAgencyFeeTypeBillingPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoAgencyFeeTypeBillingPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAgencyFeeTypeBillingPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAgencyFeeTypeBillingPosition[] = $item;
        
        return $this;
    }
}
