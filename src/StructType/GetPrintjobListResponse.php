<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintjobListResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintjobListResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintjob
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPrintjob
     * @var \Pggns\MidocoApi\Order\StructType\PrintjobDTO[]
     */
    protected ?array $MidocoPrintjob = null;
    /**
     * Constructor method for GetPrintjobListResponse
     * @uses GetPrintjobListResponse::setMidocoPrintjob()
     * @param \Pggns\MidocoApi\Order\StructType\PrintjobDTO[] $midocoPrintjob
     */
    public function __construct(?array $midocoPrintjob = null)
    {
        $this
            ->setMidocoPrintjob($midocoPrintjob);
    }
    /**
     * Get MidocoPrintjob value
     * @return \Pggns\MidocoApi\Order\StructType\PrintjobDTO[]
     */
    public function getMidocoPrintjob(): ?array
    {
        return $this->MidocoPrintjob;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoPrintjob method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintjob method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintjobForArrayConstraintFromSetMidocoPrintjob(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintjobListResponseMidocoPrintjobItem) {
            // validation for constraint: itemType
            if (!$getPrintjobListResponseMidocoPrintjobItem instanceof \Pggns\MidocoApi\Order\StructType\PrintjobDTO) {
                $invalidValues[] = is_object($getPrintjobListResponseMidocoPrintjobItem) ? get_class($getPrintjobListResponseMidocoPrintjobItem) : sprintf('%s(%s)', gettype($getPrintjobListResponseMidocoPrintjobItem), var_export($getPrintjobListResponseMidocoPrintjobItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintjob property can only contain items of type \Pggns\MidocoApi\Order\StructType\PrintjobDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintjob value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PrintjobDTO[] $midocoPrintjob
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintjobListResponse
     */
    public function setMidocoPrintjob(?array $midocoPrintjob = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintjobArrayErrorMessage = self::validateMidocoPrintjobForArrayConstraintFromSetMidocoPrintjob($midocoPrintjob))) {
            throw new InvalidArgumentException($midocoPrintjobArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintjob = $midocoPrintjob;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintjob value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\PrintjobDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintjobListResponse
     */
    public function addToMidocoPrintjob(\Pggns\MidocoApi\Order\StructType\PrintjobDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\PrintjobDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintjob property can only contain items of type \Pggns\MidocoApi\Order\StructType\PrintjobDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintjob[] = $item;
        
        return $this;
    }
}
