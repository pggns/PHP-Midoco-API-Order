<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCollectiveCustomerInvoiceResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateCollectiveCustomerInvoiceResponse extends AbstractStructBase
{
    /**
     * The PrintjobId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $PrintjobId = null;
    /**
     * The Errormessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Errormessage = null;
    /**
     * Constructor method for CreateCollectiveCustomerInvoiceResponse
     * @uses CreateCollectiveCustomerInvoiceResponse::setPrintjobId()
     * @uses CreateCollectiveCustomerInvoiceResponse::setErrormessage()
     * @param int[] $printjobId
     * @param string $errormessage
     */
    public function __construct(?array $printjobId = null, ?string $errormessage = null)
    {
        $this
            ->setPrintjobId($printjobId)
            ->setErrormessage($errormessage);
    }
    /**
     * Get PrintjobId value
     * @return int[]
     */
    public function getPrintjobId(): ?array
    {
        return $this->PrintjobId;
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
        foreach ($values as $createCollectiveCustomerInvoiceResponsePrintjobIdItem) {
            // validation for constraint: itemType
            if (!(is_int($createCollectiveCustomerInvoiceResponsePrintjobIdItem) || ctype_digit($createCollectiveCustomerInvoiceResponsePrintjobIdItem))) {
                $invalidValues[] = is_object($createCollectiveCustomerInvoiceResponsePrintjobIdItem) ? get_class($createCollectiveCustomerInvoiceResponsePrintjobIdItem) : sprintf('%s(%s)', gettype($createCollectiveCustomerInvoiceResponsePrintjobIdItem), var_export($createCollectiveCustomerInvoiceResponsePrintjobIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PrintjobId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PrintjobId value
     * @throws InvalidArgumentException
     * @param int[] $printjobId
     * @return \Pggns\MidocoApi\Order\StructType\CreateCollectiveCustomerInvoiceResponse
     */
    public function setPrintjobId(?array $printjobId = null): self
    {
        // validation for constraint: array
        if ('' !== ($printjobIdArrayErrorMessage = self::validatePrintjobIdForArrayConstraintFromSetPrintjobId($printjobId))) {
            throw new InvalidArgumentException($printjobIdArrayErrorMessage, __LINE__);
        }
        $this->PrintjobId = $printjobId;
        
        return $this;
    }
    /**
     * Add item to PrintjobId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\CreateCollectiveCustomerInvoiceResponse
     */
    public function addToPrintjobId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The PrintjobId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PrintjobId[] = $item;
        
        return $this;
    }
    /**
     * Get Errormessage value
     * @return string|null
     */
    public function getErrormessage(): ?string
    {
        return $this->Errormessage;
    }
    /**
     * Set Errormessage value
     * @param string $errormessage
     * @return \Pggns\MidocoApi\Order\StructType\CreateCollectiveCustomerInvoiceResponse
     */
    public function setErrormessage(?string $errormessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errormessage) && !is_string($errormessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errormessage, true), gettype($errormessage)), __LINE__);
        }
        $this->Errormessage = $errormessage;
        
        return $this;
    }
}
