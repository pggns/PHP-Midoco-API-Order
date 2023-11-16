<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeBillingDocument4AgencyFeeTypeRequest StructType
 * @subpackage Structs
 */
class MakeBillingDocument4AgencyFeeTypeRequest extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
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
     * Constructor method for MakeBillingDocument4AgencyFeeTypeRequest
     * @uses MakeBillingDocument4AgencyFeeTypeRequest::setAgencyId()
     * @uses MakeBillingDocument4AgencyFeeTypeRequest::setMidocoAgencyFeeTypeBillingPosition()
     * @param string $agencyId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAgencyFeeTypeBillingPosition[] $midocoAgencyFeeTypeBillingPosition
     */
    public function __construct(?string $agencyId = null, array $midocoAgencyFeeTypeBillingPosition = [])
    {
        $this
            ->setAgencyId($agencyId)
            ->setMidocoAgencyFeeTypeBillingPosition($midocoAgencyFeeTypeBillingPosition);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4AgencyFeeTypeRequest
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
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
        foreach ($values as $makeBillingDocument4AgencyFeeTypeRequestMidocoAgencyFeeTypeBillingPositionItem) {
            // validation for constraint: itemType
            if (!$makeBillingDocument4AgencyFeeTypeRequestMidocoAgencyFeeTypeBillingPositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAgencyFeeTypeBillingPosition) {
                $invalidValues[] = is_object($makeBillingDocument4AgencyFeeTypeRequestMidocoAgencyFeeTypeBillingPositionItem) ? get_class($makeBillingDocument4AgencyFeeTypeRequestMidocoAgencyFeeTypeBillingPositionItem) : sprintf('%s(%s)', gettype($makeBillingDocument4AgencyFeeTypeRequestMidocoAgencyFeeTypeBillingPositionItem), var_export($makeBillingDocument4AgencyFeeTypeRequestMidocoAgencyFeeTypeBillingPositionItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4AgencyFeeTypeRequest
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4AgencyFeeTypeRequest
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
