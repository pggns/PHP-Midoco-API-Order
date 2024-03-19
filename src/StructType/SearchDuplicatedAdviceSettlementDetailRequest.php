<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDuplicatedAdviceSettlementDetailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchDuplicatedAdviceSettlementDetailRequest extends AbstractStructBase
{
    /**
     * The detailId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $detailId = null;
    /**
     * Constructor method for SearchDuplicatedAdviceSettlementDetailRequest
     * @uses SearchDuplicatedAdviceSettlementDetailRequest::setDetailId()
     * @param int[] $detailId
     */
    public function __construct(?array $detailId = null)
    {
        $this
            ->setDetailId($detailId);
    }
    /**
     * Get detailId value
     * @return int[]
     */
    public function getDetailId(): ?array
    {
        return $this->detailId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDetailId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetailId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetailIdForArrayConstraintFromSetDetailId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchDuplicatedAdviceSettlementDetailRequestDetailIdItem) {
            // validation for constraint: itemType
            if (!(is_int($searchDuplicatedAdviceSettlementDetailRequestDetailIdItem) || ctype_digit($searchDuplicatedAdviceSettlementDetailRequestDetailIdItem))) {
                $invalidValues[] = is_object($searchDuplicatedAdviceSettlementDetailRequestDetailIdItem) ? get_class($searchDuplicatedAdviceSettlementDetailRequestDetailIdItem) : sprintf('%s(%s)', gettype($searchDuplicatedAdviceSettlementDetailRequestDetailIdItem), var_export($searchDuplicatedAdviceSettlementDetailRequestDetailIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The detailId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set detailId value
     * @throws InvalidArgumentException
     * @param int[] $detailId
     * @return \Pggns\MidocoApi\Order\StructType\SearchDuplicatedAdviceSettlementDetailRequest
     */
    public function setDetailId(?array $detailId = null): self
    {
        // validation for constraint: array
        if ('' !== ($detailIdArrayErrorMessage = self::validateDetailIdForArrayConstraintFromSetDetailId($detailId))) {
            throw new InvalidArgumentException($detailIdArrayErrorMessage, __LINE__);
        }
        $this->detailId = $detailId;
        
        return $this;
    }
    /**
     * Add item to detailId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchDuplicatedAdviceSettlementDetailRequest
     */
    public function addToDetailId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The detailId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->detailId[] = $item;
        
        return $this;
    }
}
