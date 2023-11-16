<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportVouchersResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getMidocoVouchers --- returns the list of midoco vouchers
 * @subpackage Structs
 */
class ImportVouchersResponse extends AbstractStructBase
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
     * The errorMessage
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * Constructor method for ImportVouchersResponse
     * @uses ImportVouchersResponse::setMidocoVoucher()
     * @uses ImportVouchersResponse::setErrorMessage()
     * @uses ImportVouchersResponse::setStatus()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoVoucher[] $midocoVoucher
     * @param string $errorMessage
     * @param string $status
     */
    public function __construct(array $midocoVoucher = [], ?string $errorMessage = null, ?string $status = null)
    {
        $this
            ->setMidocoVoucher($midocoVoucher)
            ->setErrorMessage($errorMessage)
            ->setStatus($status);
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
        foreach ($values as $importVouchersResponseMidocoVoucherItem) {
            // validation for constraint: itemType
            if (!$importVouchersResponseMidocoVoucherItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoVoucher) {
                $invalidValues[] = is_object($importVouchersResponseMidocoVoucherItem) ? get_class($importVouchersResponseMidocoVoucherItem) : sprintf('%s(%s)', gettype($importVouchersResponseMidocoVoucherItem), var_export($importVouchersResponseMidocoVoucherItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportVouchersResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\ImportVouchersResponse
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
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \Pggns\MidocoApi\Order\StructType\ImportVouchersResponse
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\ImportVouchersResponse
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
}
