<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchBankByBankNoResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchBankByBankNoResponse extends AbstractStructBase
{
    /**
     * The MidocoBankInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBankInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBankInfo[]
     */
    protected ?array $MidocoBankInfo = null;
    /**
     * Constructor method for SearchBankByBankNoResponse
     * @uses SearchBankByBankNoResponse::setMidocoBankInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBankInfo[] $midocoBankInfo
     */
    public function __construct(?array $midocoBankInfo = null)
    {
        $this
            ->setMidocoBankInfo($midocoBankInfo);
    }
    /**
     * Get MidocoBankInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBankInfo[]
     */
    public function getMidocoBankInfo(): ?array
    {
        return $this->MidocoBankInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBankInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBankInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBankInfoForArrayConstraintFromSetMidocoBankInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchBankByBankNoResponseMidocoBankInfoItem) {
            // validation for constraint: itemType
            if (!$searchBankByBankNoResponseMidocoBankInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBankInfo) {
                $invalidValues[] = is_object($searchBankByBankNoResponseMidocoBankInfoItem) ? get_class($searchBankByBankNoResponseMidocoBankInfoItem) : sprintf('%s(%s)', gettype($searchBankByBankNoResponseMidocoBankInfoItem), var_export($searchBankByBankNoResponseMidocoBankInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBankInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBankInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBankInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBankInfo[] $midocoBankInfo
     * @return \Pggns\MidocoApi\Order\StructType\SearchBankByBankNoResponse
     */
    public function setMidocoBankInfo(?array $midocoBankInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBankInfoArrayErrorMessage = self::validateMidocoBankInfoForArrayConstraintFromSetMidocoBankInfo($midocoBankInfo))) {
            throw new InvalidArgumentException($midocoBankInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoBankInfo = $midocoBankInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoBankInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBankInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchBankByBankNoResponse
     */
    public function addToMidocoBankInfo(\Pggns\MidocoApi\Order\StructType\MidocoBankInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBankInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoBankInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBankInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBankInfo[] = $item;
        
        return $this;
    }
}
