<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTripAppraisalInfo StructType
 * @subpackage Structs
 */
class MidocoTripAppraisalInfo extends AbstractStructBase
{
    /**
     * The TripAppraisalInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\TripAppraisalInfo[]
     */
    protected array $TripAppraisalInfo = [];
    /**
     * Constructor method for MidocoTripAppraisalInfo
     * @uses MidocoTripAppraisalInfo::setTripAppraisalInfo()
     * @param \Pggns\MidocoApi\Order\StructType\TripAppraisalInfo[] $tripAppraisalInfo
     */
    public function __construct(array $tripAppraisalInfo = [])
    {
        $this
            ->setTripAppraisalInfo($tripAppraisalInfo);
    }
    /**
     * Get TripAppraisalInfo value
     * @return \Pggns\MidocoApi\Order\StructType\TripAppraisalInfo[]
     */
    public function getTripAppraisalInfo(): array
    {
        return $this->TripAppraisalInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setTripAppraisalInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTripAppraisalInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTripAppraisalInfoForArrayConstraintsFromSetTripAppraisalInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTripAppraisalInfoTripAppraisalInfoItem) {
            // validation for constraint: itemType
            if (!$midocoTripAppraisalInfoTripAppraisalInfoItem instanceof \Pggns\MidocoApi\Order\StructType\TripAppraisalInfo) {
                $invalidValues[] = is_object($midocoTripAppraisalInfoTripAppraisalInfoItem) ? get_class($midocoTripAppraisalInfoTripAppraisalInfoItem) : sprintf('%s(%s)', gettype($midocoTripAppraisalInfoTripAppraisalInfoItem), var_export($midocoTripAppraisalInfoTripAppraisalInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TripAppraisalInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\TripAppraisalInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TripAppraisalInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TripAppraisalInfo[] $tripAppraisalInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTripAppraisalInfo
     */
    public function setTripAppraisalInfo(array $tripAppraisalInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($tripAppraisalInfoArrayErrorMessage = self::validateTripAppraisalInfoForArrayConstraintsFromSetTripAppraisalInfo($tripAppraisalInfo))) {
            throw new InvalidArgumentException($tripAppraisalInfoArrayErrorMessage, __LINE__);
        }
        $this->TripAppraisalInfo = $tripAppraisalInfo;
        
        return $this;
    }
    /**
     * Add item to TripAppraisalInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TripAppraisalInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTripAppraisalInfo
     */
    public function addToTripAppraisalInfo(\Pggns\MidocoApi\Order\StructType\TripAppraisalInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TripAppraisalInfo) {
            throw new InvalidArgumentException(sprintf('The TripAppraisalInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\TripAppraisalInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TripAppraisalInfo[] = $item;
        
        return $this;
    }
}
