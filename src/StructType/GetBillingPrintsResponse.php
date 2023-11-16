<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingPrintsResponse StructType
 * @subpackage Structs
 */
class GetBillingPrintsResponse extends AbstractStructBase
{
    /**
     * The MidocoBillingPrint
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingPrint
     * @var \Pggns\MidocoApi\Order\StructType\BillingPrintDTO[]
     */
    protected array $MidocoBillingPrint = [];
    /**
     * Constructor method for GetBillingPrintsResponse
     * @uses GetBillingPrintsResponse::setMidocoBillingPrint()
     * @param \Pggns\MidocoApi\Order\StructType\BillingPrintDTO[] $midocoBillingPrint
     */
    public function __construct(array $midocoBillingPrint = [])
    {
        $this
            ->setMidocoBillingPrint($midocoBillingPrint);
    }
    /**
     * Get MidocoBillingPrint value
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintDTO[]
     */
    public function getMidocoBillingPrint(): array
    {
        return $this->MidocoBillingPrint;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoBillingPrint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingPrint method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingPrintForArrayConstraintsFromSetMidocoBillingPrint(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingPrintsResponseMidocoBillingPrintItem) {
            // validation for constraint: itemType
            if (!$getBillingPrintsResponseMidocoBillingPrintItem instanceof \Pggns\MidocoApi\Order\StructType\BillingPrintDTO) {
                $invalidValues[] = is_object($getBillingPrintsResponseMidocoBillingPrintItem) ? get_class($getBillingPrintsResponseMidocoBillingPrintItem) : sprintf('%s(%s)', gettype($getBillingPrintsResponseMidocoBillingPrintItem), var_export($getBillingPrintsResponseMidocoBillingPrintItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingPrint property can only contain items of type \Pggns\MidocoApi\Order\StructType\BillingPrintDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BillingPrintDTO[] $midocoBillingPrint
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPrintsResponse
     */
    public function setMidocoBillingPrint(array $midocoBillingPrint = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingPrintArrayErrorMessage = self::validateMidocoBillingPrintForArrayConstraintsFromSetMidocoBillingPrint($midocoBillingPrint))) {
            throw new InvalidArgumentException($midocoBillingPrintArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingPrint = $midocoBillingPrint;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingPrint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\BillingPrintDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetBillingPrintsResponse
     */
    public function addToMidocoBillingPrint(\Pggns\MidocoApi\Order\StructType\BillingPrintDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\BillingPrintDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingPrint property can only contain items of type \Pggns\MidocoApi\Order\StructType\BillingPrintDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingPrint[] = $item;
        
        return $this;
    }
}
