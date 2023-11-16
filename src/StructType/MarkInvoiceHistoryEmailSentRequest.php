<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarkInvoiceHistoryEmailSentRequest StructType
 * @subpackage Structs
 */
class MarkInvoiceHistoryEmailSentRequest extends AbstractStructBase
{
    /**
     * The invoiceId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected array $invoiceId = [];
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * Constructor method for MarkInvoiceHistoryEmailSentRequest
     * @uses MarkInvoiceHistoryEmailSentRequest::setInvoiceId()
     * @uses MarkInvoiceHistoryEmailSentRequest::setMidocoMailMessage()
     * @param int[] $invoiceId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     */
    public function __construct(array $invoiceId = [], ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null)
    {
        $this
            ->setInvoiceId($invoiceId)
            ->setMidocoMailMessage($midocoMailMessage);
    }
    /**
     * Get invoiceId value
     * @return int[]
     */
    public function getInvoiceId(): array
    {
        return $this->invoiceId;
    }
    /**
     * This method is responsible for validating the values passed to the setInvoiceId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvoiceId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvoiceIdForArrayConstraintsFromSetInvoiceId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $markInvoiceHistoryEmailSentRequestInvoiceIdItem) {
            // validation for constraint: itemType
            if (!(is_int($markInvoiceHistoryEmailSentRequestInvoiceIdItem) || ctype_digit($markInvoiceHistoryEmailSentRequestInvoiceIdItem))) {
                $invalidValues[] = is_object($markInvoiceHistoryEmailSentRequestInvoiceIdItem) ? get_class($markInvoiceHistoryEmailSentRequestInvoiceIdItem) : sprintf('%s(%s)', gettype($markInvoiceHistoryEmailSentRequestInvoiceIdItem), var_export($markInvoiceHistoryEmailSentRequestInvoiceIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The invoiceId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set invoiceId value
     * @throws InvalidArgumentException
     * @param int[] $invoiceId
     * @return \Pggns\MidocoApi\Order\StructType\MarkInvoiceHistoryEmailSentRequest
     */
    public function setInvoiceId(array $invoiceId = []): self
    {
        // validation for constraint: array
        if ('' !== ($invoiceIdArrayErrorMessage = self::validateInvoiceIdForArrayConstraintsFromSetInvoiceId($invoiceId))) {
            throw new InvalidArgumentException($invoiceIdArrayErrorMessage, __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
        return $this;
    }
    /**
     * Add item to invoiceId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MarkInvoiceHistoryEmailSentRequest
     */
    public function addToInvoiceId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The invoiceId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->invoiceId[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoMailMessage value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType|null
     */
    public function getMidocoMailMessage(): ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType
    {
        return $this->MidocoMailMessage;
    }
    /**
     * Set MidocoMailMessage value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @return \Pggns\MidocoApi\Order\StructType\MarkInvoiceHistoryEmailSentRequest
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
}
