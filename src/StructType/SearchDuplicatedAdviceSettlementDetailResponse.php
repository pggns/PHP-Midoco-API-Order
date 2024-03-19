<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDuplicatedAdviceSettlementDetailResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchDuplicatedAdviceSettlementDetailResponse extends AbstractStructBase
{
    /**
     * The duplicatedDetailId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $duplicatedDetailId = null;
    /**
     * Constructor method for SearchDuplicatedAdviceSettlementDetailResponse
     * @uses SearchDuplicatedAdviceSettlementDetailResponse::setDuplicatedDetailId()
     * @param int[] $duplicatedDetailId
     */
    public function __construct(?array $duplicatedDetailId = null)
    {
        $this
            ->setDuplicatedDetailId($duplicatedDetailId);
    }
    /**
     * Get duplicatedDetailId value
     * @return int[]
     */
    public function getDuplicatedDetailId(): ?array
    {
        return $this->duplicatedDetailId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDuplicatedDetailId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDuplicatedDetailId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDuplicatedDetailIdForArrayConstraintFromSetDuplicatedDetailId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $searchDuplicatedAdviceSettlementDetailResponseDuplicatedDetailIdItem) {
            // validation for constraint: itemType
            if (!(is_int($searchDuplicatedAdviceSettlementDetailResponseDuplicatedDetailIdItem) || ctype_digit($searchDuplicatedAdviceSettlementDetailResponseDuplicatedDetailIdItem))) {
                $invalidValues[] = is_object($searchDuplicatedAdviceSettlementDetailResponseDuplicatedDetailIdItem) ? get_class($searchDuplicatedAdviceSettlementDetailResponseDuplicatedDetailIdItem) : sprintf('%s(%s)', gettype($searchDuplicatedAdviceSettlementDetailResponseDuplicatedDetailIdItem), var_export($searchDuplicatedAdviceSettlementDetailResponseDuplicatedDetailIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The duplicatedDetailId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set duplicatedDetailId value
     * @throws InvalidArgumentException
     * @param int[] $duplicatedDetailId
     * @return \Pggns\MidocoApi\Order\StructType\SearchDuplicatedAdviceSettlementDetailResponse
     */
    public function setDuplicatedDetailId(?array $duplicatedDetailId = null): self
    {
        // validation for constraint: array
        if ('' !== ($duplicatedDetailIdArrayErrorMessage = self::validateDuplicatedDetailIdForArrayConstraintFromSetDuplicatedDetailId($duplicatedDetailId))) {
            throw new InvalidArgumentException($duplicatedDetailIdArrayErrorMessage, __LINE__);
        }
        $this->duplicatedDetailId = $duplicatedDetailId;
        
        return $this;
    }
    /**
     * Add item to duplicatedDetailId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SearchDuplicatedAdviceSettlementDetailResponse
     */
    public function addToDuplicatedDetailId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The duplicatedDetailId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->duplicatedDetailId[] = $item;
        
        return $this;
    }
}
