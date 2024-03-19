<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiPrintResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MultiPrintResponse extends AbstractStructBase
{
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * The historyId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $historyId = null;
    /**
     * The invoiceId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $invoiceId = null;
    /**
     * The printjobId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $printjobId = null;
    /**
     * The docRepoId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $docRepoId = null;
    /**
     * The MidocoMailDescription4Inexso
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoMailDescription4Inexso
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso[]
     */
    protected ?array $MidocoMailDescription4Inexso = null;
    /**
     * The MidocoAdditionalPrintDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdditionalPrintDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument[]
     */
    protected ?array $MidocoAdditionalPrintDocument = null;
    /**
     * The voidInvoiceId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $voidInvoiceId = null;
    /**
     * The rtfData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $rtfData = null;
    /**
     * The fopStrs
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $fopStrs = null;
    /**
     * Constructor method for MultiPrintResponse
     * @uses MultiPrintResponse::setMidocoMailMessage()
     * @uses MultiPrintResponse::setHistoryId()
     * @uses MultiPrintResponse::setInvoiceId()
     * @uses MultiPrintResponse::setPrintjobId()
     * @uses MultiPrintResponse::setDocRepoId()
     * @uses MultiPrintResponse::setMidocoMailDescription4Inexso()
     * @uses MultiPrintResponse::setMidocoAdditionalPrintDocument()
     * @uses MultiPrintResponse::setVoidInvoiceId()
     * @uses MultiPrintResponse::setRtfData()
     * @uses MultiPrintResponse::setFopStrs()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @param int[] $historyId
     * @param int[] $invoiceId
     * @param int[] $printjobId
     * @param int $docRepoId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso[] $midocoMailDescription4Inexso
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument[] $midocoAdditionalPrintDocument
     * @param int[] $voidInvoiceId
     * @param string[] $rtfData
     * @param string[] $fopStrs
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null, ?array $historyId = null, ?array $invoiceId = null, ?array $printjobId = null, ?int $docRepoId = null, ?array $midocoMailDescription4Inexso = null, ?array $midocoAdditionalPrintDocument = null, ?array $voidInvoiceId = null, ?array $rtfData = null, ?array $fopStrs = null)
    {
        $this
            ->setMidocoMailMessage($midocoMailMessage)
            ->setHistoryId($historyId)
            ->setInvoiceId($invoiceId)
            ->setPrintjobId($printjobId)
            ->setDocRepoId($docRepoId)
            ->setMidocoMailDescription4Inexso($midocoMailDescription4Inexso)
            ->setMidocoAdditionalPrintDocument($midocoAdditionalPrintDocument)
            ->setVoidInvoiceId($voidInvoiceId)
            ->setRtfData($rtfData)
            ->setFopStrs($fopStrs);
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
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
    /**
     * Get historyId value
     * @return int[]
     */
    public function getHistoryId(): ?array
    {
        return $this->historyId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHistoryId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHistoryId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHistoryIdForArrayConstraintFromSetHistoryId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintResponseHistoryIdItem) {
            // validation for constraint: itemType
            if (!(is_int($multiPrintResponseHistoryIdItem) || ctype_digit($multiPrintResponseHistoryIdItem))) {
                $invalidValues[] = is_object($multiPrintResponseHistoryIdItem) ? get_class($multiPrintResponseHistoryIdItem) : sprintf('%s(%s)', gettype($multiPrintResponseHistoryIdItem), var_export($multiPrintResponseHistoryIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The historyId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set historyId value
     * @throws InvalidArgumentException
     * @param int[] $historyId
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function setHistoryId(?array $historyId = null): self
    {
        // validation for constraint: array
        if ('' !== ($historyIdArrayErrorMessage = self::validateHistoryIdForArrayConstraintFromSetHistoryId($historyId))) {
            throw new InvalidArgumentException($historyIdArrayErrorMessage, __LINE__);
        }
        $this->historyId = $historyId;
        
        return $this;
    }
    /**
     * Add item to historyId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function addToHistoryId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The historyId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->historyId[] = $item;
        
        return $this;
    }
    /**
     * Get invoiceId value
     * @return int[]
     */
    public function getInvoiceId(): ?array
    {
        return $this->invoiceId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setInvoiceId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInvoiceId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInvoiceIdForArrayConstraintFromSetInvoiceId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintResponseInvoiceIdItem) {
            // validation for constraint: itemType
            if (!(is_int($multiPrintResponseInvoiceIdItem) || ctype_digit($multiPrintResponseInvoiceIdItem))) {
                $invalidValues[] = is_object($multiPrintResponseInvoiceIdItem) ? get_class($multiPrintResponseInvoiceIdItem) : sprintf('%s(%s)', gettype($multiPrintResponseInvoiceIdItem), var_export($multiPrintResponseInvoiceIdItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function setInvoiceId(?array $invoiceId = null): self
    {
        // validation for constraint: array
        if ('' !== ($invoiceIdArrayErrorMessage = self::validateInvoiceIdForArrayConstraintFromSetInvoiceId($invoiceId))) {
            throw new InvalidArgumentException($invoiceIdArrayErrorMessage, __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
        return $this;
    }
    /**
     * Add item to invoiceId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
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
     * Get printjobId value
     * @return int[]
     */
    public function getPrintjobId(): ?array
    {
        return $this->printjobId;
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
        foreach ($values as $multiPrintResponsePrintjobIdItem) {
            // validation for constraint: itemType
            if (!(is_int($multiPrintResponsePrintjobIdItem) || ctype_digit($multiPrintResponsePrintjobIdItem))) {
                $invalidValues[] = is_object($multiPrintResponsePrintjobIdItem) ? get_class($multiPrintResponsePrintjobIdItem) : sprintf('%s(%s)', gettype($multiPrintResponsePrintjobIdItem), var_export($multiPrintResponsePrintjobIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The printjobId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set printjobId value
     * @throws InvalidArgumentException
     * @param int[] $printjobId
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function setPrintjobId(?array $printjobId = null): self
    {
        // validation for constraint: array
        if ('' !== ($printjobIdArrayErrorMessage = self::validatePrintjobIdForArrayConstraintFromSetPrintjobId($printjobId))) {
            throw new InvalidArgumentException($printjobIdArrayErrorMessage, __LINE__);
        }
        $this->printjobId = $printjobId;
        
        return $this;
    }
    /**
     * Add item to printjobId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function addToPrintjobId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The printjobId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->printjobId[] = $item;
        
        return $this;
    }
    /**
     * Get docRepoId value
     * @return int|null
     */
    public function getDocRepoId(): ?int
    {
        return $this->docRepoId;
    }
    /**
     * Set docRepoId value
     * @param int $docRepoId
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function setDocRepoId(?int $docRepoId = null): self
    {
        // validation for constraint: int
        if (!is_null($docRepoId) && !(is_int($docRepoId) || ctype_digit($docRepoId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($docRepoId, true), gettype($docRepoId)), __LINE__);
        }
        $this->docRepoId = $docRepoId;
        
        return $this;
    }
    /**
     * Get MidocoMailDescription4Inexso value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso[]
     */
    public function getMidocoMailDescription4Inexso(): ?array
    {
        return $this->MidocoMailDescription4Inexso;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMailDescription4Inexso method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMailDescription4Inexso method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMailDescription4InexsoForArrayConstraintFromSetMidocoMailDescription4Inexso(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintResponseMidocoMailDescription4InexsoItem) {
            // validation for constraint: itemType
            if (!$multiPrintResponseMidocoMailDescription4InexsoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso) {
                $invalidValues[] = is_object($multiPrintResponseMidocoMailDescription4InexsoItem) ? get_class($multiPrintResponseMidocoMailDescription4InexsoItem) : sprintf('%s(%s)', gettype($multiPrintResponseMidocoMailDescription4InexsoItem), var_export($multiPrintResponseMidocoMailDescription4InexsoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMailDescription4Inexso property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMailDescription4Inexso value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso[] $midocoMailDescription4Inexso
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function setMidocoMailDescription4Inexso(?array $midocoMailDescription4Inexso = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMailDescription4InexsoArrayErrorMessage = self::validateMidocoMailDescription4InexsoForArrayConstraintFromSetMidocoMailDescription4Inexso($midocoMailDescription4Inexso))) {
            throw new InvalidArgumentException($midocoMailDescription4InexsoArrayErrorMessage, __LINE__);
        }
        $this->MidocoMailDescription4Inexso = $midocoMailDescription4Inexso;
        
        return $this;
    }
    /**
     * Add item to MidocoMailDescription4Inexso value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso $item
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function addToMidocoMailDescription4Inexso(\Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso) {
            throw new InvalidArgumentException(sprintf('The MidocoMailDescription4Inexso property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMailDescription4Inexso[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoAdditionalPrintDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument[]
     */
    public function getMidocoAdditionalPrintDocument(): ?array
    {
        return $this->MidocoAdditionalPrintDocument;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoAdditionalPrintDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdditionalPrintDocument method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdditionalPrintDocumentForArrayConstraintFromSetMidocoAdditionalPrintDocument(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintResponseMidocoAdditionalPrintDocumentItem) {
            // validation for constraint: itemType
            if (!$multiPrintResponseMidocoAdditionalPrintDocumentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument) {
                $invalidValues[] = is_object($multiPrintResponseMidocoAdditionalPrintDocumentItem) ? get_class($multiPrintResponseMidocoAdditionalPrintDocumentItem) : sprintf('%s(%s)', gettype($multiPrintResponseMidocoAdditionalPrintDocumentItem), var_export($multiPrintResponseMidocoAdditionalPrintDocumentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAdditionalPrintDocument property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAdditionalPrintDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument[] $midocoAdditionalPrintDocument
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function setMidocoAdditionalPrintDocument(?array $midocoAdditionalPrintDocument = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdditionalPrintDocumentArrayErrorMessage = self::validateMidocoAdditionalPrintDocumentForArrayConstraintFromSetMidocoAdditionalPrintDocument($midocoAdditionalPrintDocument))) {
            throw new InvalidArgumentException($midocoAdditionalPrintDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdditionalPrintDocument = $midocoAdditionalPrintDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoAdditionalPrintDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument $item
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function addToMidocoAdditionalPrintDocument(\Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument) {
            throw new InvalidArgumentException(sprintf('The MidocoAdditionalPrintDocument property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAdditionalPrintDocument[] = $item;
        
        return $this;
    }
    /**
     * Get voidInvoiceId value
     * @return int[]
     */
    public function getVoidInvoiceId(): ?array
    {
        return $this->voidInvoiceId;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setVoidInvoiceId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVoidInvoiceId method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVoidInvoiceIdForArrayConstraintFromSetVoidInvoiceId(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintResponseVoidInvoiceIdItem) {
            // validation for constraint: itemType
            if (!(is_int($multiPrintResponseVoidInvoiceIdItem) || ctype_digit($multiPrintResponseVoidInvoiceIdItem))) {
                $invalidValues[] = is_object($multiPrintResponseVoidInvoiceIdItem) ? get_class($multiPrintResponseVoidInvoiceIdItem) : sprintf('%s(%s)', gettype($multiPrintResponseVoidInvoiceIdItem), var_export($multiPrintResponseVoidInvoiceIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The voidInvoiceId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set voidInvoiceId value
     * @throws InvalidArgumentException
     * @param int[] $voidInvoiceId
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function setVoidInvoiceId(?array $voidInvoiceId = null): self
    {
        // validation for constraint: array
        if ('' !== ($voidInvoiceIdArrayErrorMessage = self::validateVoidInvoiceIdForArrayConstraintFromSetVoidInvoiceId($voidInvoiceId))) {
            throw new InvalidArgumentException($voidInvoiceIdArrayErrorMessage, __LINE__);
        }
        $this->voidInvoiceId = $voidInvoiceId;
        
        return $this;
    }
    /**
     * Add item to voidInvoiceId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function addToVoidInvoiceId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The voidInvoiceId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->voidInvoiceId[] = $item;
        
        return $this;
    }
    /**
     * Get rtfData value
     * @return string[]
     */
    public function getRtfData(): ?array
    {
        return $this->rtfData;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRtfData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRtfData method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRtfDataForArrayConstraintFromSetRtfData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintResponseRtfDataItem) {
            // validation for constraint: itemType
            if (!is_string($multiPrintResponseRtfDataItem)) {
                $invalidValues[] = is_object($multiPrintResponseRtfDataItem) ? get_class($multiPrintResponseRtfDataItem) : sprintf('%s(%s)', gettype($multiPrintResponseRtfDataItem), var_export($multiPrintResponseRtfDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The rtfData property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set rtfData value
     * @throws InvalidArgumentException
     * @param string[] $rtfData
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function setRtfData(?array $rtfData = null): self
    {
        // validation for constraint: array
        if ('' !== ($rtfDataArrayErrorMessage = self::validateRtfDataForArrayConstraintFromSetRtfData($rtfData))) {
            throw new InvalidArgumentException($rtfDataArrayErrorMessage, __LINE__);
        }
        $this->rtfData = $rtfData;
        
        return $this;
    }
    /**
     * Add item to rtfData value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function addToRtfData(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The rtfData property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->rtfData[] = $item;
        
        return $this;
    }
    /**
     * Get fopStrs value
     * @return string[]
     */
    public function getFopStrs(): ?array
    {
        return $this->fopStrs;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFopStrs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFopStrs method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFopStrsForArrayConstraintFromSetFopStrs(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $multiPrintResponseFopStrsItem) {
            // validation for constraint: itemType
            if (!is_string($multiPrintResponseFopStrsItem)) {
                $invalidValues[] = is_object($multiPrintResponseFopStrsItem) ? get_class($multiPrintResponseFopStrsItem) : sprintf('%s(%s)', gettype($multiPrintResponseFopStrsItem), var_export($multiPrintResponseFopStrsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fopStrs property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set fopStrs value
     * @throws InvalidArgumentException
     * @param string[] $fopStrs
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function setFopStrs(?array $fopStrs = null): self
    {
        // validation for constraint: array
        if ('' !== ($fopStrsArrayErrorMessage = self::validateFopStrsForArrayConstraintFromSetFopStrs($fopStrs))) {
            throw new InvalidArgumentException($fopStrsArrayErrorMessage, __LINE__);
        }
        $this->fopStrs = $fopStrs;
        
        return $this;
    }
    /**
     * Add item to fopStrs value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MultiPrintResponse
     */
    public function addToFopStrs(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The fopStrs property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fopStrs[] = $item;
        
        return $this;
    }
}
