<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBillingLayoutRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteBillingLayoutRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingLayout
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoBillingLayout
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout[]
     */
    protected ?array $MidocoBillingLayout = null;
    /**
     * Constructor method for DeleteBillingLayoutRequest
     * @uses DeleteBillingLayoutRequest::setMidocoBillingLayout()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout[] $midocoBillingLayout
     */
    public function __construct(?array $midocoBillingLayout = null)
    {
        $this
            ->setMidocoBillingLayout($midocoBillingLayout);
    }
    /**
     * Get MidocoBillingLayout value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout[]
     */
    public function getMidocoBillingLayout(): ?array
    {
        return $this->MidocoBillingLayout;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoBillingLayout method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoBillingLayout method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoBillingLayoutForArrayConstraintFromSetMidocoBillingLayout(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deleteBillingLayoutRequestMidocoBillingLayoutItem) {
            // validation for constraint: itemType
            if (!$deleteBillingLayoutRequestMidocoBillingLayoutItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout) {
                $invalidValues[] = is_object($deleteBillingLayoutRequestMidocoBillingLayoutItem) ? get_class($deleteBillingLayoutRequestMidocoBillingLayoutItem) : sprintf('%s(%s)', gettype($deleteBillingLayoutRequestMidocoBillingLayoutItem), var_export($deleteBillingLayoutRequestMidocoBillingLayoutItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoBillingLayout property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoBillingLayout value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout[] $midocoBillingLayout
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingLayoutRequest
     */
    public function setMidocoBillingLayout(?array $midocoBillingLayout = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoBillingLayoutArrayErrorMessage = self::validateMidocoBillingLayoutForArrayConstraintFromSetMidocoBillingLayout($midocoBillingLayout))) {
            throw new InvalidArgumentException($midocoBillingLayoutArrayErrorMessage, __LINE__);
        }
        $this->MidocoBillingLayout = $midocoBillingLayout;
        
        return $this;
    }
    /**
     * Add item to MidocoBillingLayout value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout $item
     * @return \Pggns\MidocoApi\Order\StructType\DeleteBillingLayoutRequest
     */
    public function addToMidocoBillingLayout(\Pggns\MidocoApi\Order\StructType\MidocoBillingLayout $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout) {
            throw new InvalidArgumentException(sprintf('The MidocoBillingLayout property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoBillingLayout, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoBillingLayout[] = $item;
        
        return $this;
    }
}
