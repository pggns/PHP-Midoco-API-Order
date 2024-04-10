<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingDbiPositions StructType
 * Meta information extracted from the WSDL
 * - documentation: All BillingPositionDbiInfos of the position to simplify updating the GUI.
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingDbiPositions extends AbstractStructBase
{
    /**
     * The MidocoBillingPositionDbiInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - ref: MidocoBillingPositionDbiInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo[]
     */
    protected array $MidocoBillingPositionDbiInfo;
    /**
     * The positionId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $positionId;
    /**
     * Constructor method for BillingDbiPositions
     * @uses BillingDbiPositions::setMidocoBillingPositionDbiInfo()
     * @uses BillingDbiPositions::setPositionId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo[] $midocoBillingPositionDbiInfo
     * @param int $positionId
     */
    public function __construct(array $midocoBillingPositionDbiInfo, int $positionId)
    {
        $this
            ->setMidocoBillingPositionDbiInfo($midocoBillingPositionDbiInfo)
            ->setPositionId($positionId);
    }
    /**
     * Get MidocoBillingPositionDbiInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo[]
     */
    public function getMidocoBillingPositionDbiInfo(): array
    {
        return $this->MidocoBillingPositionDbiInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingPositionDbiInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPositionDbiInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPositionDbiInfoForArrayConstraintFromSetMidocoBillingPositionDbiInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $billingDbiPositionsMidocoBillingPositionDbiInfoItem) {
            // validation for constraint: itemType
            if (!$billingDbiPositionsMidocoBillingPositionDbiInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo) {
                $invalidValues[] = is_object($billingDbiPositionsMidocoBillingPositionDbiInfoItem) ? get_class($billingDbiPositionsMidocoBillingPositionDbiInfoItem) : sprintf('%s(%s)', gettype($billingDbiPositionsMidocoBillingPositionDbiInfoItem), var_export($billingDbiPositionsMidocoBillingPositionDbiInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPositionDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPositionDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo[] $midocoBillingPositionDbiInfo
     * @return \Pggns\MidocoApi\Order\StructType\BillingDbiPositions
     */
    public function setMidocoBillingPositionDbiInfo(array $midocoBillingPositionDbiInfo): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPositionDbiInfoArrayErrorMessage = self::validateMidocoBillingPositionDbiInfoForArrayConstraintFromSetMidocoBillingPositionDbiInfo($midocoBillingPositionDbiInfo))) {
            throw new InvalidArgumentException($midocoBillingPositionDbiInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPositionDbiInfo = $midocoBillingPositionDbiInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPositionDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\BillingDbiPositions
     */
    public function addToMidocoBillingPositionDbiInfo(\Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPositionDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingPositionDbiInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPositionDbiInfo[] = $item;
        
        return $this;
    }
    /**
     * Get positionId value
     * @return int
     */
    public function getPositionId(): int
    {
        return $this->positionId;
    }
    /**
     * Set positionId value
     * @param int $positionId
     * @return \Pggns\MidocoApi\Order\StructType\BillingDbiPositions
     */
    public function setPositionId(int $positionId): self
    {
        // validation for constraint: int
        if (!is_null($positionId) && !(is_int($positionId) || ctype_digit($positionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionId, true), gettype($positionId)), __LINE__);
        }
        $this->positionId = $positionId;
        
        return $this;
    }
}
