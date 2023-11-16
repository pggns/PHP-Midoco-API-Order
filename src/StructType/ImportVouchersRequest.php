<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportVouchersRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: getMidocoVouchers --- returns the list of midoco vouchers
 * @subpackage Structs
 */
class ImportVouchersRequest extends AbstractStructBase
{
    /**
     * The MidocoVoucher
     * Meta information extracted from the WSDL
     * - maxOccurs: 50
     * - minOccurs: 0
     * - ref: MidocoVoucher
     * @var \Pggns\MidocoApi\Order\StructType\MidocoVoucher[]
     */
    protected array $MidocoVoucher = [];
    /**
     * Constructor method for ImportVouchersRequest
     * @uses ImportVouchersRequest::setMidocoVoucher()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVoucher[] $midocoVoucher
     */
    public function __construct(array $midocoVoucher = [])
    {
        $this
            ->setMidocoVoucher($midocoVoucher);
    }
    /**
     * Get MidocoVoucher value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher[]
     */
    public function getMidocoVoucher(): array
    {
        return $this->MidocoVoucher;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVoucher method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVoucher method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVoucherForArrayConstraintsFromSetMidocoVoucher(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $importVouchersRequestMidocoVoucherItem) {
            // validation for constraint: itemType
            if (!$importVouchersRequestMidocoVoucherItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoVoucher) {
                $invalidValues[] = is_object($importVouchersRequestMidocoVoucherItem) ? get_class($importVouchersRequestMidocoVoucherItem) : sprintf('%s(%s)', gettype($importVouchersRequestMidocoVoucherItem), var_export($importVouchersRequestMidocoVoucherItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVoucher property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoVoucher, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVoucher value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVoucher[] $midocoVoucher
     * @return \Pggns\MidocoApi\Order\StructType\ImportVouchersRequest
     */
    public function setMidocoVoucher(array $midocoVoucher = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVoucherArrayErrorMessage = self::validateMidocoVoucherForArrayConstraintsFromSetMidocoVoucher($midocoVoucher))) {
            throw new InvalidArgumentException($midocoVoucherArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(50)
        if (is_array($midocoVoucher) && count($midocoVoucher) > 50) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 50', count($midocoVoucher)), __LINE__);
        }
        $this->MidocoVoucher = $midocoVoucher;
        
        return $this;
    }
    /**
     * Add item to MidocoVoucher value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVoucher $item
     * @return \Pggns\MidocoApi\Order\StructType\ImportVouchersRequest
     */
    public function addToMidocoVoucher(\Pggns\MidocoApi\Order\StructType\MidocoVoucher $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoVoucher) {
            throw new InvalidArgumentException(sprintf('The MidocoVoucher property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoVoucher, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(50)
        if (is_array($this->MidocoVoucher) && count($this->MidocoVoucher) >= 50) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 50', count($this->MidocoVoucher)), __LINE__);
        }
        $this->MidocoVoucher[] = $item;
        
        return $this;
    }
}
