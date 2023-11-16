<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefreshMilesAndMoreEarnTransactionStatusResponse
 * StructType
 * Meta information extracted from the WSDL
 * - documentation: The response provides the updated MidocoMilesAndMoreEarnInfo elements for the MidocoSellItems.
 * @subpackage Structs
 */
class RefreshMilesAndMoreEarnTransactionStatusResponse extends AbstractStructBase
{
    /**
     * The MidocoMilesAndMoreEarnInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMilesAndMoreEarnInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType[]
     */
    protected array $MidocoMilesAndMoreEarnInfo = [];
    /**
     * Constructor method for RefreshMilesAndMoreEarnTransactionStatusResponse
     * @uses RefreshMilesAndMoreEarnTransactionStatusResponse::setMidocoMilesAndMoreEarnInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType[] $midocoMilesAndMoreEarnInfo
     */
    public function __construct(array $midocoMilesAndMoreEarnInfo = [])
    {
        $this
            ->setMidocoMilesAndMoreEarnInfo($midocoMilesAndMoreEarnInfo);
    }
    /**
     * Get MidocoMilesAndMoreEarnInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType[]
     */
    public function getMidocoMilesAndMoreEarnInfo(): array
    {
        return $this->MidocoMilesAndMoreEarnInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMilesAndMoreEarnInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMilesAndMoreEarnInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMilesAndMoreEarnInfoForArrayConstraintsFromSetMidocoMilesAndMoreEarnInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $refreshMilesAndMoreEarnTransactionStatusResponseMidocoMilesAndMoreEarnInfoItem) {
            // validation for constraint: itemType
            if (!$refreshMilesAndMoreEarnTransactionStatusResponseMidocoMilesAndMoreEarnInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType) {
                $invalidValues[] = is_object($refreshMilesAndMoreEarnTransactionStatusResponseMidocoMilesAndMoreEarnInfoItem) ? get_class($refreshMilesAndMoreEarnTransactionStatusResponseMidocoMilesAndMoreEarnInfoItem) : sprintf('%s(%s)', gettype($refreshMilesAndMoreEarnTransactionStatusResponseMidocoMilesAndMoreEarnInfoItem), var_export($refreshMilesAndMoreEarnTransactionStatusResponseMidocoMilesAndMoreEarnInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMilesAndMoreEarnInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMilesAndMoreEarnInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType[] $midocoMilesAndMoreEarnInfo
     * @return \Pggns\MidocoApi\Order\StructType\RefreshMilesAndMoreEarnTransactionStatusResponse
     */
    public function setMidocoMilesAndMoreEarnInfo(array $midocoMilesAndMoreEarnInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMilesAndMoreEarnInfoArrayErrorMessage = self::validateMidocoMilesAndMoreEarnInfoForArrayConstraintsFromSetMidocoMilesAndMoreEarnInfo($midocoMilesAndMoreEarnInfo))) {
            throw new InvalidArgumentException($midocoMilesAndMoreEarnInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoMilesAndMoreEarnInfo = $midocoMilesAndMoreEarnInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoMilesAndMoreEarnInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType $item
     * @return \Pggns\MidocoApi\Order\StructType\RefreshMilesAndMoreEarnTransactionStatusResponse
     */
    public function addToMidocoMilesAndMoreEarnInfo(\Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType) {
            throw new InvalidArgumentException(sprintf('The MidocoMilesAndMoreEarnInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMilesAndMoreEarnInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMilesAndMoreEarnInfo[] = $item;
        
        return $this;
    }
}
