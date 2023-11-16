<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCollectiveCustomerInvoiceRequest StructType
 * @subpackage Structs
 */
class CreateCollectiveCustomerInvoiceRequest extends AbstractStructBase
{
    /**
     * The MidocoCollectiveInvoicePrintPreselectionData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCollectiveInvoicePrintPreselectionData
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData[]
     */
    protected array $MidocoCollectiveInvoicePrintPreselectionData = [];
    /**
     * The sendAsEMail
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $sendAsEMail = null;
    /**
     * The print
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $print = null;
    /**
     * The invoiceNoToVoid
     * @var int|null
     */
    protected ?int $invoiceNoToVoid = null;
    /**
     * Constructor method for CreateCollectiveCustomerInvoiceRequest
     * @uses CreateCollectiveCustomerInvoiceRequest::setMidocoCollectiveInvoicePrintPreselectionData()
     * @uses CreateCollectiveCustomerInvoiceRequest::setSendAsEMail()
     * @uses CreateCollectiveCustomerInvoiceRequest::setPrint()
     * @uses CreateCollectiveCustomerInvoiceRequest::setInvoiceNoToVoid()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData[] $midocoCollectiveInvoicePrintPreselectionData
     * @param bool $sendAsEMail
     * @param bool $print
     * @param int $invoiceNoToVoid
     */
    public function __construct(array $midocoCollectiveInvoicePrintPreselectionData = [], ?bool $sendAsEMail = false, ?bool $print = false, ?int $invoiceNoToVoid = null)
    {
        $this
            ->setMidocoCollectiveInvoicePrintPreselectionData($midocoCollectiveInvoicePrintPreselectionData)
            ->setSendAsEMail($sendAsEMail)
            ->setPrint($print)
            ->setInvoiceNoToVoid($invoiceNoToVoid);
    }
    /**
     * Get MidocoCollectiveInvoicePrintPreselectionData value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData[]
     */
    public function getMidocoCollectiveInvoicePrintPreselectionData(): array
    {
        return $this->MidocoCollectiveInvoicePrintPreselectionData;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCollectiveInvoicePrintPreselectionData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCollectiveInvoicePrintPreselectionData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCollectiveInvoicePrintPreselectionDataForArrayConstraintsFromSetMidocoCollectiveInvoicePrintPreselectionData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $createCollectiveCustomerInvoiceRequestMidocoCollectiveInvoicePrintPreselectionDataItem) {
            // validation for constraint: itemType
            if (!$createCollectiveCustomerInvoiceRequestMidocoCollectiveInvoicePrintPreselectionDataItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData) {
                $invalidValues[] = is_object($createCollectiveCustomerInvoiceRequestMidocoCollectiveInvoicePrintPreselectionDataItem) ? get_class($createCollectiveCustomerInvoiceRequestMidocoCollectiveInvoicePrintPreselectionDataItem) : sprintf('%s(%s)', gettype($createCollectiveCustomerInvoiceRequestMidocoCollectiveInvoicePrintPreselectionDataItem), var_export($createCollectiveCustomerInvoiceRequestMidocoCollectiveInvoicePrintPreselectionDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCollectiveInvoicePrintPreselectionData property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCollectiveInvoicePrintPreselectionData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData[] $midocoCollectiveInvoicePrintPreselectionData
     * @return \Pggns\MidocoApi\Order\StructType\CreateCollectiveCustomerInvoiceRequest
     */
    public function setMidocoCollectiveInvoicePrintPreselectionData(array $midocoCollectiveInvoicePrintPreselectionData = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCollectiveInvoicePrintPreselectionDataArrayErrorMessage = self::validateMidocoCollectiveInvoicePrintPreselectionDataForArrayConstraintsFromSetMidocoCollectiveInvoicePrintPreselectionData($midocoCollectiveInvoicePrintPreselectionData))) {
            throw new InvalidArgumentException($midocoCollectiveInvoicePrintPreselectionDataArrayErrorMessage, __LINE__);
        }
        $this->MidocoCollectiveInvoicePrintPreselectionData = $midocoCollectiveInvoicePrintPreselectionData;
        
        return $this;
    }
    /**
     * Add item to MidocoCollectiveInvoicePrintPreselectionData value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData $item
     * @return \Pggns\MidocoApi\Order\StructType\CreateCollectiveCustomerInvoiceRequest
     */
    public function addToMidocoCollectiveInvoicePrintPreselectionData(\Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData) {
            throw new InvalidArgumentException(sprintf('The MidocoCollectiveInvoicePrintPreselectionData property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoCollectiveInvoicePrintPreselectionData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCollectiveInvoicePrintPreselectionData[] = $item;
        
        return $this;
    }
    /**
     * Get sendAsEMail value
     * @return bool|null
     */
    public function getSendAsEMail(): ?bool
    {
        return $this->sendAsEMail;
    }
    /**
     * Set sendAsEMail value
     * @param bool $sendAsEMail
     * @return \Pggns\MidocoApi\Order\StructType\CreateCollectiveCustomerInvoiceRequest
     */
    public function setSendAsEMail(?bool $sendAsEMail = false): self
    {
        // validation for constraint: boolean
        if (!is_null($sendAsEMail) && !is_bool($sendAsEMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendAsEMail, true), gettype($sendAsEMail)), __LINE__);
        }
        $this->sendAsEMail = $sendAsEMail;
        
        return $this;
    }
    /**
     * Get print value
     * @return bool|null
     */
    public function getPrint(): ?bool
    {
        return $this->print;
    }
    /**
     * Set print value
     * @param bool $print
     * @return \Pggns\MidocoApi\Order\StructType\CreateCollectiveCustomerInvoiceRequest
     */
    public function setPrint(?bool $print = false): self
    {
        // validation for constraint: boolean
        if (!is_null($print) && !is_bool($print)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($print, true), gettype($print)), __LINE__);
        }
        $this->print = $print;
        
        return $this;
    }
    /**
     * Get invoiceNoToVoid value
     * @return int|null
     */
    public function getInvoiceNoToVoid(): ?int
    {
        return $this->invoiceNoToVoid;
    }
    /**
     * Set invoiceNoToVoid value
     * @param int $invoiceNoToVoid
     * @return \Pggns\MidocoApi\Order\StructType\CreateCollectiveCustomerInvoiceRequest
     */
    public function setInvoiceNoToVoid(?int $invoiceNoToVoid = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceNoToVoid) && !(is_int($invoiceNoToVoid) || ctype_digit($invoiceNoToVoid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceNoToVoid, true), gettype($invoiceNoToVoid)), __LINE__);
        }
        $this->invoiceNoToVoid = $invoiceNoToVoid;
        
        return $this;
    }
}
