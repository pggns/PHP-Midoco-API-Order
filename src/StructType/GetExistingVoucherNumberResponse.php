<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExistingVoucherNumberResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetExistingVoucherNumberResponse extends AbstractStructBase
{
    /**
     * The voucherValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $voucherValue = null;
    /**
     * The existsVoucherNo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $existsVoucherNo = null;
    /**
     * The MidocoVoucher
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVoucher
     * @var \Pggns\MidocoApi\Order\StructType\MidocoVoucher[]
     */
    protected ?array $MidocoVoucher = null;
    /**
     * Constructor method for GetExistingVoucherNumberResponse
     * @uses GetExistingVoucherNumberResponse::setVoucherValue()
     * @uses GetExistingVoucherNumberResponse::setExistsVoucherNo()
     * @uses GetExistingVoucherNumberResponse::setMidocoVoucher()
     * @param float $voucherValue
     * @param bool $existsVoucherNo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVoucher[] $midocoVoucher
     */
    public function __construct(?float $voucherValue = null, ?bool $existsVoucherNo = null, ?array $midocoVoucher = null)
    {
        $this
            ->setVoucherValue($voucherValue)
            ->setExistsVoucherNo($existsVoucherNo)
            ->setMidocoVoucher($midocoVoucher);
    }
    /**
     * Get voucherValue value
     * @return float|null
     */
    public function getVoucherValue(): ?float
    {
        return $this->voucherValue;
    }
    /**
     * Set voucherValue value
     * @param float $voucherValue
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberResponse
     */
    public function setVoucherValue(?float $voucherValue = null): self
    {
        // validation for constraint: float
        if (!is_null($voucherValue) && !(is_float($voucherValue) || is_numeric($voucherValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($voucherValue, true), gettype($voucherValue)), __LINE__);
        }
        $this->voucherValue = $voucherValue;
        
        return $this;
    }
    /**
     * Get existsVoucherNo value
     * @return bool|null
     */
    public function getExistsVoucherNo(): ?bool
    {
        return $this->existsVoucherNo;
    }
    /**
     * Set existsVoucherNo value
     * @param bool $existsVoucherNo
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberResponse
     */
    public function setExistsVoucherNo(?bool $existsVoucherNo = null): self
    {
        // validation for constraint: boolean
        if (!is_null($existsVoucherNo) && !is_bool($existsVoucherNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($existsVoucherNo, true), gettype($existsVoucherNo)), __LINE__);
        }
        $this->existsVoucherNo = $existsVoucherNo;
        
        return $this;
    }
    /**
     * Get MidocoVoucher value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucher[]
     */
    public function getMidocoVoucher(): ?array
    {
        return $this->MidocoVoucher;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoVoucher method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVoucher method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVoucherForArrayConstraintFromSetMidocoVoucher(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExistingVoucherNumberResponseMidocoVoucherItem) {
            // validation for constraint: itemType
            if (!$getExistingVoucherNumberResponseMidocoVoucherItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoVoucher) {
                $invalidValues[] = is_object($getExistingVoucherNumberResponseMidocoVoucherItem) ? get_class($getExistingVoucherNumberResponseMidocoVoucherItem) : sprintf('%s(%s)', gettype($getExistingVoucherNumberResponseMidocoVoucherItem), var_export($getExistingVoucherNumberResponseMidocoVoucherItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberResponse
     */
    public function setMidocoVoucher(?array $midocoVoucher = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVoucherArrayErrorMessage = self::validateMidocoVoucherForArrayConstraintFromSetMidocoVoucher($midocoVoucher))) {
            throw new InvalidArgumentException($midocoVoucherArrayErrorMessage, __LINE__);
        }
        $this->MidocoVoucher = $midocoVoucher;
        
        return $this;
    }
    /**
     * Add item to MidocoVoucher value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVoucher $item
     * @return \Pggns\MidocoApi\Order\StructType\GetExistingVoucherNumberResponse
     */
    public function addToMidocoVoucher(\Pggns\MidocoApi\Order\StructType\MidocoVoucher $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoVoucher) {
            throw new InvalidArgumentException(sprintf('The MidocoVoucher property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoVoucher, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVoucher[] = $item;
        
        return $this;
    }
}
