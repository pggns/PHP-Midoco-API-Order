<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeBillingDocument4BonusClearingResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MakeBillingDocument4BonusClearingResponse extends AbstractStructBase
{
    /**
     * The printjobId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $printjobId = null;
    /**
     * Constructor method for MakeBillingDocument4BonusClearingResponse
     * @uses MakeBillingDocument4BonusClearingResponse::setPrintjobId()
     * @param int[] $printjobId
     */
    public function __construct(?array $printjobId = null)
    {
        $this
            ->setPrintjobId($printjobId);
    }
    /**
     * Get printjobId value
     * @return int[]
     */
    public function getPrintjobId(): ?array
    {
        return $this->printjobId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrintjobId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintjobId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintjobIdForArrayConstraintFromSetPrintjobId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $makeBillingDocument4BonusClearingResponsePrintjobIdItem) {
            // validation for constraint: itemType
            if (!(is_int($makeBillingDocument4BonusClearingResponsePrintjobIdItem) || ctype_digit($makeBillingDocument4BonusClearingResponsePrintjobIdItem))) {
                $invalidValues[] = is_object($makeBillingDocument4BonusClearingResponsePrintjobIdItem) ? get_class($makeBillingDocument4BonusClearingResponsePrintjobIdItem) : sprintf('%s(%s)', gettype($makeBillingDocument4BonusClearingResponsePrintjobIdItem), var_export($makeBillingDocument4BonusClearingResponsePrintjobIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The printjobId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set printjobId value
     * @throws InvalidArgumentException
     * @param int[] $printjobId
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4BonusClearingResponse
     */
    public function setPrintjobId(?array $printjobId = null): self
    {
        // validation for constraint: array
        if ('' !== ($printjobIdArrayErrorMessage = self::validatePrintjobIdForArrayConstraintFromSetPrintjobId($printjobId))) {
            throw new InvalidArgumentException($printjobIdArrayErrorMessage, __LINE__);
        }
        $this->printjobId = $printjobId;
        
        return $this;
    }
    /**
     * Add item to printjobId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4BonusClearingResponse
     */
    public function addToPrintjobId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The printjobId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->printjobId[] = $item;
        
        return $this;
    }
}
