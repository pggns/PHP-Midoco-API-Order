<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintBillingPrintjobResponse StructType
 * @subpackage Structs
 */
class PrintBillingPrintjobResponse extends AbstractStructBase
{
    /**
     * The PrintjobId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected array $PrintjobId = [];
    /**
     * The InternalVersion
     * @var int|null
     */
    protected ?int $InternalVersion = null;
    /**
     * The MidocoMailMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: mail:MidocoMailMessage
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $MidocoMailMessage = null;
    /**
     * The MidocoMailDescription4Inexso
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: system:MidocoMailDescription4Inexso
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso[]
     */
    protected array $MidocoMailDescription4Inexso = [];
    /**
     * The file
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\FileType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\FileType $file = null;
    /**
     * Constructor method for PrintBillingPrintjobResponse
     * @uses PrintBillingPrintjobResponse::setPrintjobId()
     * @uses PrintBillingPrintjobResponse::setInternalVersion()
     * @uses PrintBillingPrintjobResponse::setMidocoMailMessage()
     * @uses PrintBillingPrintjobResponse::setMidocoMailDescription4Inexso()
     * @uses PrintBillingPrintjobResponse::setFile()
     * @param int[] $printjobId
     * @param int $internalVersion
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso[] $midocoMailDescription4Inexso
     * @param \Pggns\MidocoApi\Order\StructType\FileType $file
     */
    public function __construct(array $printjobId = [], ?int $internalVersion = null, ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null, array $midocoMailDescription4Inexso = [], ?\Pggns\MidocoApi\Order\StructType\FileType $file = null)
    {
        $this
            ->setPrintjobId($printjobId)
            ->setInternalVersion($internalVersion)
            ->setMidocoMailMessage($midocoMailMessage)
            ->setMidocoMailDescription4Inexso($midocoMailDescription4Inexso)
            ->setFile($file);
    }
    /**
     * Get PrintjobId value
     * @return int[]
     */
    public function getPrintjobId(): array
    {
        return $this->PrintjobId;
    }
    /**
     * This method is responsible for validating the values passed to the setPrintjobId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintjobId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintjobIdForArrayConstraintsFromSetPrintjobId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $printBillingPrintjobResponsePrintjobIdItem) {
            // validation for constraint: itemType
            if (!(is_int($printBillingPrintjobResponsePrintjobIdItem) || ctype_digit($printBillingPrintjobResponsePrintjobIdItem))) {
                $invalidValues[] = is_object($printBillingPrintjobResponsePrintjobIdItem) ? get_class($printBillingPrintjobResponsePrintjobIdItem) : sprintf('%s(%s)', gettype($printBillingPrintjobResponsePrintjobIdItem), var_export($printBillingPrintjobResponsePrintjobIdItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobResponse
     */
    public function setPrintjobId(array $printjobId = []): self
    {
        // validation for constraint: array
        if ('' !== ($printjobIdArrayErrorMessage = self::validatePrintjobIdForArrayConstraintsFromSetPrintjobId($printjobId))) {
            throw new InvalidArgumentException($printjobIdArrayErrorMessage, __LINE__);
        }
        $this->PrintjobId = $printjobId;
        
        return $this;
    }
    /**
     * Add item to PrintjobId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobResponse
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
     * Get InternalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->InternalVersion;
    }
    /**
     * Set InternalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobResponse
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->InternalVersion = $internalVersion;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobResponse
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
    /**
     * Get MidocoMailDescription4Inexso value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso[]
     */
    public function getMidocoMailDescription4Inexso(): array
    {
        return $this->MidocoMailDescription4Inexso;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMailDescription4Inexso method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMailDescription4Inexso method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMailDescription4InexsoForArrayConstraintsFromSetMidocoMailDescription4Inexso(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $printBillingPrintjobResponseMidocoMailDescription4InexsoItem) {
            // validation for constraint: itemType
            if (!$printBillingPrintjobResponseMidocoMailDescription4InexsoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso) {
                $invalidValues[] = is_object($printBillingPrintjobResponseMidocoMailDescription4InexsoItem) ? get_class($printBillingPrintjobResponseMidocoMailDescription4InexsoItem) : sprintf('%s(%s)', gettype($printBillingPrintjobResponseMidocoMailDescription4InexsoItem), var_export($printBillingPrintjobResponseMidocoMailDescription4InexsoItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobResponse
     */
    public function setMidocoMailDescription4Inexso(array $midocoMailDescription4Inexso = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMailDescription4InexsoArrayErrorMessage = self::validateMidocoMailDescription4InexsoForArrayConstraintsFromSetMidocoMailDescription4Inexso($midocoMailDescription4Inexso))) {
            throw new InvalidArgumentException($midocoMailDescription4InexsoArrayErrorMessage, __LINE__);
        }
        $this->MidocoMailDescription4Inexso = $midocoMailDescription4Inexso;
        
        return $this;
    }
    /**
     * Add item to MidocoMailDescription4Inexso value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso $item
     * @return \Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobResponse
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
     * Get file value
     * @return \Pggns\MidocoApi\Order\StructType\FileType|null
     */
    public function getFile(): ?\Pggns\MidocoApi\Order\StructType\FileType
    {
        return $this->file;
    }
    /**
     * Set file value
     * @param \Pggns\MidocoApi\Order\StructType\FileType $file
     * @return \Pggns\MidocoApi\Order\StructType\PrintBillingPrintjobResponse
     */
    public function setFile(?\Pggns\MidocoApi\Order\StructType\FileType $file = null): self
    {
        $this->file = $file;
        
        return $this;
    }
}
