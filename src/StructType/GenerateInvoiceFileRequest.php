<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateInvoiceFileRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GenerateInvoiceFileRequest extends AbstractStructBase
{
    /**
     * The documentIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $documentIds = null;
    /**
     * The customerId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * The sendMail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $sendMail = null;
    /**
     * The formatId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $formatId = null;
    /**
     * Constructor method for GenerateInvoiceFileRequest
     * @uses GenerateInvoiceFileRequest::setDocumentIds()
     * @uses GenerateInvoiceFileRequest::setCustomerId()
     * @uses GenerateInvoiceFileRequest::setMidocoMailMessage()
     * @uses GenerateInvoiceFileRequest::setSendMail()
     * @uses GenerateInvoiceFileRequest::setFormatId()
     * @param int[] $documentIds
     * @param int $customerId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @param bool $sendMail
     * @param string $formatId
     */
    public function __construct(?array $documentIds = null, ?int $customerId = null, ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null, ?bool $sendMail = null, ?string $formatId = null)
    {
        $this
            ->setDocumentIds($documentIds)
            ->setCustomerId($customerId)
            ->setMidocoMailMessage($midocoMailMessage)
            ->setSendMail($sendMail)
            ->setFormatId($formatId);
    }
    /**
     * Get documentIds value
     * @return int[]
     */
    public function getDocumentIds(): ?array
    {
        return $this->documentIds;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDocumentIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentIds method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentIdsForArrayConstraintFromSetDocumentIds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $generateInvoiceFileRequestDocumentIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($generateInvoiceFileRequestDocumentIdsItem) || ctype_digit($generateInvoiceFileRequestDocumentIdsItem))) {
                $invalidValues[] = is_object($generateInvoiceFileRequestDocumentIdsItem) ? get_class($generateInvoiceFileRequestDocumentIdsItem) : sprintf('%s(%s)', gettype($generateInvoiceFileRequestDocumentIdsItem), var_export($generateInvoiceFileRequestDocumentIdsItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\GenerateInvoiceFileRequest
     */
    public function setDocumentIds(?array $documentIds = null): self
    {
        // validation for constraint: array
        if ('' !== ($documentIdsArrayErrorMessage = self::validateDocumentIdsForArrayConstraintFromSetDocumentIds($documentIds))) {
            throw new InvalidArgumentException($documentIdsArrayErrorMessage, __LINE__);
        }
        $this->documentIds = $documentIds;
        
        return $this;
    }
    /**
     * Add item to documentIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\GenerateInvoiceFileRequest
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
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\GenerateInvoiceFileRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\GenerateInvoiceFileRequest
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
    /**
     * Get sendMail value
     * @return bool|null
     */
    public function getSendMail(): ?bool
    {
        return $this->sendMail;
    }
    /**
     * Set sendMail value
     * @param bool $sendMail
     * @return \Pggns\MidocoApi\Order\StructType\GenerateInvoiceFileRequest
     */
    public function setSendMail(?bool $sendMail = null): self
    {
        // validation for constraint: boolean
        if (!is_null($sendMail) && !is_bool($sendMail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sendMail, true), gettype($sendMail)), __LINE__);
        }
        $this->sendMail = $sendMail;
        
        return $this;
    }
    /**
     * Get formatId value
     * @return string|null
     */
    public function getFormatId(): ?string
    {
        return $this->formatId;
    }
    /**
     * Set formatId value
     * @param string $formatId
     * @return \Pggns\MidocoApi\Order\StructType\GenerateInvoiceFileRequest
     */
    public function setFormatId(?string $formatId = null): self
    {
        // validation for constraint: string
        if (!is_null($formatId) && !is_string($formatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatId, true), gettype($formatId)), __LINE__);
        }
        $this->formatId = $formatId;
        
        return $this;
    }
}
