<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MakeBillingDocument4AgencyFeeTypeResponse StructType
 * @subpackage Structs
 */
class MakeBillingDocument4AgencyFeeTypeResponse extends AbstractStructBase
{
    /**
     * The printjobId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $printjobId = [];
    /**
     * Constructor method for MakeBillingDocument4AgencyFeeTypeResponse
     * @uses MakeBillingDocument4AgencyFeeTypeResponse::setPrintjobId()
     * @param int[] $printjobId
     */
    public function __construct(array $printjobId = [])
    {
        $this
            ->setPrintjobId($printjobId);
    }
    /**
     * Get printjobId value
     * @return int[]
     */
    public function getPrintjobId(): array
    {
        return $this->printjobId;
    }
    /**
     * This method is responsible for validating the values passed to the setPrintjobId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintjobId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintjobIdForArrayConstraintsFromSetPrintjobId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $makeBillingDocument4AgencyFeeTypeResponsePrintjobIdItem) {
            // validation for constraint: itemType
            if (!(is_int($makeBillingDocument4AgencyFeeTypeResponsePrintjobIdItem) || ctype_digit($makeBillingDocument4AgencyFeeTypeResponsePrintjobIdItem))) {
                $invalidValues[] = is_object($makeBillingDocument4AgencyFeeTypeResponsePrintjobIdItem) ? get_class($makeBillingDocument4AgencyFeeTypeResponsePrintjobIdItem) : sprintf('%s(%s)', gettype($makeBillingDocument4AgencyFeeTypeResponsePrintjobIdItem), var_export($makeBillingDocument4AgencyFeeTypeResponsePrintjobIdItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4AgencyFeeTypeResponse
     */
    public function setPrintjobId(array $printjobId = []): self
    {
        // validation for constraint: array
        if ('' !== ($printjobIdArrayErrorMessage = self::validatePrintjobIdForArrayConstraintsFromSetPrintjobId($printjobId))) {
            throw new InvalidArgumentException($printjobIdArrayErrorMessage, __LINE__);
        }
        $this->printjobId = $printjobId;
        
        return $this;
    }
    /**
     * Add item to printjobId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MakeBillingDocument4AgencyFeeTypeResponse
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
