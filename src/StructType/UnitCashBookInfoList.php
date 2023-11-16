<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnitCashBookInfoList StructType
 * @subpackage Structs
 */
class UnitCashBookInfoList extends AbstractStructBase
{
    /**
     * The CashBookInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: CashBookInfo
     * @var \Pggns\MidocoApi\Order\StructType\CashBookInfo[]
     */
    protected array $CashBookInfo = [];
    /**
     * Constructor method for UnitCashBookInfoList
     * @uses UnitCashBookInfoList::setCashBookInfo()
     * @param \Pggns\MidocoApi\Order\StructType\CashBookInfo[] $cashBookInfo
     */
    public function __construct(array $cashBookInfo = [])
    {
        $this
            ->setCashBookInfo($cashBookInfo);
    }
    /**
     * Get CashBookInfo value
     * @return \Pggns\MidocoApi\Order\StructType\CashBookInfo[]
     */
    public function getCashBookInfo(): array
    {
        return $this->CashBookInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setCashBookInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCashBookInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCashBookInfoForArrayConstraintsFromSetCashBookInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $unitCashBookInfoListCashBookInfoItem) {
            // validation for constraint: itemType
            if (!$unitCashBookInfoListCashBookInfoItem instanceof \Pggns\MidocoApi\Order\StructType\CashBookInfo) {
                $invalidValues[] = is_object($unitCashBookInfoListCashBookInfoItem) ? get_class($unitCashBookInfoListCashBookInfoItem) : sprintf('%s(%s)', gettype($unitCashBookInfoListCashBookInfoItem), var_export($unitCashBookInfoListCashBookInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CashBookInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\CashBookInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CashBookInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CashBookInfo[] $cashBookInfo
     * @return \Pggns\MidocoApi\Order\StructType\UnitCashBookInfoList
     */
    public function setCashBookInfo(array $cashBookInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($cashBookInfoArrayErrorMessage = self::validateCashBookInfoForArrayConstraintsFromSetCashBookInfo($cashBookInfo))) {
            throw new InvalidArgumentException($cashBookInfoArrayErrorMessage, __LINE__);
        }
        $this->CashBookInfo = $cashBookInfo;
        
        return $this;
    }
    /**
     * Add item to CashBookInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\CashBookInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\UnitCashBookInfoList
     */
    public function addToCashBookInfo(\Pggns\MidocoApi\Order\StructType\CashBookInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\CashBookInfo) {
            throw new InvalidArgumentException(sprintf('The CashBookInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\CashBookInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CashBookInfo[] = $item;
        
        return $this;
    }
}
