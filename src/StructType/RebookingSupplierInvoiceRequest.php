<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RebookingSupplierInvoiceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class RebookingSupplierInvoiceRequest extends AbstractStructBase
{
    /**
     * The revenues
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $revenues = null;
    /**
     * The receiptNo
     * @var string|null
     */
    protected ?string $receiptNo = null;
    /**
     * The accountNo
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * Constructor method for RebookingSupplierInvoiceRequest
     * @uses RebookingSupplierInvoiceRequest::setRevenues()
     * @uses RebookingSupplierInvoiceRequest::setReceiptNo()
     * @uses RebookingSupplierInvoiceRequest::setAccountNo()
     * @uses RebookingSupplierInvoiceRequest::setSupplierId()
     * @param int[] $revenues
     * @param string $receiptNo
     * @param string $accountNo
     * @param string $supplierId
     */
    public function __construct(?array $revenues = null, ?string $receiptNo = null, ?string $accountNo = null, ?string $supplierId = null)
    {
        $this
            ->setRevenues($revenues)
            ->setReceiptNo($receiptNo)
            ->setAccountNo($accountNo)
            ->setSupplierId($supplierId);
    }
    /**
     * Get revenues value
     * @return int[]
     */
    public function getRevenues(): ?array
    {
        return $this->revenues;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRevenues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRevenues method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRevenuesForArrayConstraintFromSetRevenues(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $rebookingSupplierInvoiceRequestRevenuesItem) {
            // validation for constraint: itemType
            if (!(is_int($rebookingSupplierInvoiceRequestRevenuesItem) || ctype_digit($rebookingSupplierInvoiceRequestRevenuesItem))) {
                $invalidValues[] = is_object($rebookingSupplierInvoiceRequestRevenuesItem) ? get_class($rebookingSupplierInvoiceRequestRevenuesItem) : sprintf('%s(%s)', gettype($rebookingSupplierInvoiceRequestRevenuesItem), var_export($rebookingSupplierInvoiceRequestRevenuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The revenues property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set revenues value
     * @throws InvalidArgumentException
     * @param int[] $revenues
     * @return \Pggns\MidocoApi\Order\StructType\RebookingSupplierInvoiceRequest
     */
    public function setRevenues(?array $revenues = null): self
    {
        // validation for constraint: array
        if ('' !== ($revenuesArrayErrorMessage = self::validateRevenuesForArrayConstraintFromSetRevenues($revenues))) {
            throw new InvalidArgumentException($revenuesArrayErrorMessage, __LINE__);
        }
        $this->revenues = $revenues;
        
        return $this;
    }
    /**
     * Add item to revenues value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\RebookingSupplierInvoiceRequest
     */
    public function addToRevenues(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The revenues property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->revenues[] = $item;
        
        return $this;
    }
    /**
     * Get receiptNo value
     * @return string|null
     */
    public function getReceiptNo(): ?string
    {
        return $this->receiptNo;
    }
    /**
     * Set receiptNo value
     * @param string $receiptNo
     * @return \Pggns\MidocoApi\Order\StructType\RebookingSupplierInvoiceRequest
     */
    public function setReceiptNo(?string $receiptNo = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptNo) && !is_string($receiptNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptNo, true), gettype($receiptNo)), __LINE__);
        }
        $this->receiptNo = $receiptNo;
        
        return $this;
    }
    /**
     * Get accountNo value
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }
    /**
     * Set accountNo value
     * @param string $accountNo
     * @return \Pggns\MidocoApi\Order\StructType\RebookingSupplierInvoiceRequest
     */
    public function setAccountNo(?string $accountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->accountNo = $accountNo;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\RebookingSupplierInvoiceRequest
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
}
