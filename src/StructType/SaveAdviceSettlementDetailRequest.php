<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAdviceSettlementDetailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveAdviceSettlementDetailRequest extends AbstractStructBase
{
    /**
     * The MidocoAdviceSettlementDetail
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdviceSettlementDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail[]
     */
    protected ?array $MidocoAdviceSettlementDetail = null;
    /**
     * Constructor method for SaveAdviceSettlementDetailRequest
     * @uses SaveAdviceSettlementDetailRequest::setMidocoAdviceSettlementDetail()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail[] $midocoAdviceSettlementDetail
     */
    public function __construct(?array $midocoAdviceSettlementDetail = null)
    {
        $this
            ->setMidocoAdviceSettlementDetail($midocoAdviceSettlementDetail);
    }
    /**
     * Get MidocoAdviceSettlementDetail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail[]
     */
    public function getMidocoAdviceSettlementDetail(): ?array
    {
        return $this->MidocoAdviceSettlementDetail;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAdviceSettlementDetail method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdviceSettlementDetail method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdviceSettlementDetailForArrayConstraintFromSetMidocoAdviceSettlementDetail(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveAdviceSettlementDetailRequestMidocoAdviceSettlementDetailItem) {
            // validation for constraint: itemType
            if (!$saveAdviceSettlementDetailRequestMidocoAdviceSettlementDetailItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail) {
                $invalidValues[] = is_object($saveAdviceSettlementDetailRequestMidocoAdviceSettlementDetailItem) ? get_class($saveAdviceSettlementDetailRequestMidocoAdviceSettlementDetailItem) : sprintf('%s(%s)', gettype($saveAdviceSettlementDetailRequestMidocoAdviceSettlementDetailItem), var_export($saveAdviceSettlementDetailRequestMidocoAdviceSettlementDetailItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdviceSettlementDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdviceSettlementDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail[] $midocoAdviceSettlementDetail
     * @return \Pggns\MidocoApi\Order\StructType\SaveAdviceSettlementDetailRequest
     */
    public function setMidocoAdviceSettlementDetail(?array $midocoAdviceSettlementDetail = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdviceSettlementDetailArrayErrorMessage = self::validateMidocoAdviceSettlementDetailForArrayConstraintFromSetMidocoAdviceSettlementDetail($midocoAdviceSettlementDetail))) {
            throw new InvalidArgumentException($midocoAdviceSettlementDetailArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdviceSettlementDetail = $midocoAdviceSettlementDetail;
        
        return $this;
    }
    /**
     * Add item to MidocoAdviceSettlementDetail value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail $item
     * @return \Pggns\MidocoApi\Order\StructType\SaveAdviceSettlementDetailRequest
     */
    public function addToMidocoAdviceSettlementDetail(\Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail) {
            throw new InvalidArgumentException(sprintf('The MidocoAdviceSettlementDetail property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdviceSettlementDetail, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdviceSettlementDetail[] = $item;
        
        return $this;
    }
}
