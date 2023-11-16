<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendBatchInvoiceEmailRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: uses 2 procedures: 1. sendOneDocumentPerEmail == true Send an email with one attachment. 2. sendOneDocumentPerEmail == false Send one email with n (n>1) attachments.
 * @subpackage Structs
 */
class SendBatchInvoiceEmailRequest extends AbstractStructBase
{
    /**
     * The documentIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $documentIds = [];
    /**
     * The sendOneDocumentPerEmail
     * @var bool|null
     */
    protected ?bool $sendOneDocumentPerEmail = null;
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * Constructor method for SendBatchInvoiceEmailRequest
     * @uses SendBatchInvoiceEmailRequest::setDocumentIds()
     * @uses SendBatchInvoiceEmailRequest::setSendOneDocumentPerEmail()
     * @uses SendBatchInvoiceEmailRequest::setMidocoMailMessage()
     * @param int[] $documentIds
     * @param bool $sendOneDocumentPerEmail
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     */
    public function __construct(array $documentIds = [], ?bool $sendOneDocumentPerEmail = null, ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null)
    {
        $this
            ->setDocumentIds($documentIds)
            ->setSendOneDocumentPerEmail($sendOneDocumentPerEmail)
            ->setMidocoMailMessage($midocoMailMessage);
    }
    /**
     * Get documentIds value
     * @return int[]
     */
    public function getDocumentIds(): array
    {
        return $this->documentIds;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentIds method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentIdsForArrayConstraintsFromSetDocumentIds(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $sendBatchInvoiceEmailRequestDocumentIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($sendBatchInvoiceEmailRequestDocumentIdsItem) || ctype_digit($sendBatchInvoiceEmailRequestDocumentIdsItem))) {
                $invalidValues[] = is_object($sendBatchInvoiceEmailRequestDocumentIdsItem) ? get_class($sendBatchInvoiceEmailRequestDocumentIdsItem) : sprintf('%s(%s)', gettype($sendBatchInvoiceEmailRequestDocumentIdsItem), var_export($sendBatchInvoiceEmailRequestDocumentIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The documentIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set documentIds value
     * @throws InvalidArgumentException
     * @param int[] $documentIds
     * @return \Pggns\MidocoApi\Order\StructType\SendBatchInvoiceEmailRequest
     */
    public function setDocumentIds(array $documentIds = []): self
    {
        // validation for constraint: array
        if ('' !== ($documentIdsArrayErrorMessage = self::validateDocumentIdsForArrayConstraintsFromSetDocumentIds($documentIds))) {
            throw new InvalidArgumentException($documentIdsArrayErrorMessage, __LINE__);
        }
        $this->documentIds = $documentIds;
        
        return $this;
    }
    /**
     * Add item to documentIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\SendBatchInvoiceEmailRequest
     */
    public function addToDocumentIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The documentIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->documentIds[] = $item;
        
        return $this;
    }
    /**
     * Get sendOneDocumentPerEmail value
     * @return bool|null
     */
    public function getSendOneDocumentPerEmail(): ?bool
    {
        return $this->sendOneDocumentPerEmail;
    }
    /**
     * Set sendOneDocumentPerEmail value
     * @param bool $sendOneDocumentPerEmail
     * @return \Pggns\MidocoApi\Order\StructType\SendBatchInvoiceEmailRequest
     */
    public function setSendOneDocumentPerEmail(?bool $sendOneDocumentPerEmail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sendOneDocumentPerEmail) && !is_bool($sendOneDocumentPerEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendOneDocumentPerEmail, true), gettype($sendOneDocumentPerEmail)), __LINE__);
        }
        $this->sendOneDocumentPerEmail = $sendOneDocumentPerEmail;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\SendBatchInvoiceEmailRequest
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
}
