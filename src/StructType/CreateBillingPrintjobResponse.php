<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateBillingPrintjobResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateBillingPrintjobResponse extends AbstractStructBase
{
    /**
     * The PrintJobContent
     * @var string|null
     */
    protected ?string $PrintJobContent = null;
    /**
     * The insets
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $insets = null;
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
    protected ?array $MidocoMailDescription4Inexso = null;
    /**
     * The PrintJobContentOfPrintCopies
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $PrintJobContentOfPrintCopies = null;
    /**
     * The insetsPrintJobIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $insetsPrintJobIds = null;
    /**
     * The file
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\FileType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\FileType $file = null;
    /**
     * Constructor method for CreateBillingPrintjobResponse
     * @uses CreateBillingPrintjobResponse::setPrintJobContent()
     * @uses CreateBillingPrintjobResponse::setInsets()
     * @uses CreateBillingPrintjobResponse::setMidocoMailMessage()
     * @uses CreateBillingPrintjobResponse::setMidocoMailDescription4Inexso()
     * @uses CreateBillingPrintjobResponse::setPrintJobContentOfPrintCopies()
     * @uses CreateBillingPrintjobResponse::setInsetsPrintJobIds()
     * @uses CreateBillingPrintjobResponse::setFile()
     * @param string $printJobContent
     * @param string[] $insets
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso[] $midocoMailDescription4Inexso
     * @param string[] $printJobContentOfPrintCopies
     * @param int[] $insetsPrintJobIds
     * @param \Pggns\MidocoApi\Order\StructType\FileType $file
     */
    public function __construct(?string $printJobContent = null, ?array $insets = null, ?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null, ?array $midocoMailDescription4Inexso = null, ?array $printJobContentOfPrintCopies = null, ?array $insetsPrintJobIds = null, ?\Pggns\MidocoApi\Order\StructType\FileType $file = null)
    {
        $this
            ->setPrintJobContent($printJobContent)
            ->setInsets($insets)
            ->setMidocoMailMessage($midocoMailMessage)
            ->setMidocoMailDescription4Inexso($midocoMailDescription4Inexso)
            ->setPrintJobContentOfPrintCopies($printJobContentOfPrintCopies)
            ->setInsetsPrintJobIds($insetsPrintJobIds)
            ->setFile($file);
    }
    /**
     * Get PrintJobContent value
     * @return string|null
     */
    public function getPrintJobContent(): ?string
    {
        return $this->PrintJobContent;
    }
    /**
     * Set PrintJobContent value
     * @param string $printJobContent
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobResponse
     */
    public function setPrintJobContent(?string $printJobContent = null): self
    {
        // validation for constraint: string
        if (!is_null($printJobContent) && !is_string($printJobContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printJobContent, true), gettype($printJobContent)), __LINE__);
        }
        $this->PrintJobContent = $printJobContent;
        
        return $this;
    }
    /**
     * Get insets value
     * @return string[]
     */
    public function getInsets(): ?array
    {
        return $this->insets;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setInsets method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInsets method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInsetsForArrayConstraintFromSetInsets(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createBillingPrintjobResponseInsetsItem) {
            // validation for constraint: itemType
            if (!is_string($createBillingPrintjobResponseInsetsItem)) {
                $invalidValues[] = is_object($createBillingPrintjobResponseInsetsItem) ? get_class($createBillingPrintjobResponseInsetsItem) : sprintf('%s(%s)', gettype($createBillingPrintjobResponseInsetsItem), var_export($createBillingPrintjobResponseInsetsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The insets property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set insets value
     * @throws InvalidArgumentException
     * @param string[] $insets
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobResponse
     */
    public function setInsets(?array $insets = null): self
    {
        // validation for constraint: array
        if ('' !== ($insetsArrayErrorMessage = self::validateInsetsForArrayConstraintFromSetInsets($insets))) {
            throw new InvalidArgumentException($insetsArrayErrorMessage, __LINE__);
        }
        $this->insets = $insets;
        
        return $this;
    }
    /**
     * Add item to insets value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobResponse
     */
    public function addToInsets(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The insets property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->insets[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobResponse
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
        foreach ($values as $createBillingPrintjobResponseMidocoMailDescription4InexsoItem) {
            // validation for constraint: itemType
            if (!$createBillingPrintjobResponseMidocoMailDescription4InexsoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso) {
                $invalidValues[] = is_object($createBillingPrintjobResponseMidocoMailDescription4InexsoItem) ? get_class($createBillingPrintjobResponseMidocoMailDescription4InexsoItem) : sprintf('%s(%s)', gettype($createBillingPrintjobResponseMidocoMailDescription4InexsoItem), var_export($createBillingPrintjobResponseMidocoMailDescription4InexsoItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobResponse
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
     * Get PrintJobContentOfPrintCopies value
     * @return string[]
     */
    public function getPrintJobContentOfPrintCopies(): ?array
    {
        return $this->PrintJobContentOfPrintCopies;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrintJobContentOfPrintCopies method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintJobContentOfPrintCopies method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintJobContentOfPrintCopiesForArrayConstraintFromSetPrintJobContentOfPrintCopies(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createBillingPrintjobResponsePrintJobContentOfPrintCopiesItem) {
            // validation for constraint: itemType
            if (!is_string($createBillingPrintjobResponsePrintJobContentOfPrintCopiesItem)) {
                $invalidValues[] = is_object($createBillingPrintjobResponsePrintJobContentOfPrintCopiesItem) ? get_class($createBillingPrintjobResponsePrintJobContentOfPrintCopiesItem) : sprintf('%s(%s)', gettype($createBillingPrintjobResponsePrintJobContentOfPrintCopiesItem), var_export($createBillingPrintjobResponsePrintJobContentOfPrintCopiesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PrintJobContentOfPrintCopies property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PrintJobContentOfPrintCopies value
     * @throws InvalidArgumentException
     * @param string[] $printJobContentOfPrintCopies
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobResponse
     */
    public function setPrintJobContentOfPrintCopies(?array $printJobContentOfPrintCopies = null): self
    {
        // validation for constraint: array
        if ('' !== ($printJobContentOfPrintCopiesArrayErrorMessage = self::validatePrintJobContentOfPrintCopiesForArrayConstraintFromSetPrintJobContentOfPrintCopies($printJobContentOfPrintCopies))) {
            throw new InvalidArgumentException($printJobContentOfPrintCopiesArrayErrorMessage, __LINE__);
        }
        $this->PrintJobContentOfPrintCopies = $printJobContentOfPrintCopies;
        
        return $this;
    }
    /**
     * Add item to PrintJobContentOfPrintCopies value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobResponse
     */
    public function addToPrintJobContentOfPrintCopies(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The PrintJobContentOfPrintCopies property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PrintJobContentOfPrintCopies[] = $item;
        
        return $this;
    }
    /**
     * Get insetsPrintJobIds value
     * @return int[]
     */
    public function getInsetsPrintJobIds(): ?array
    {
        return $this->insetsPrintJobIds;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setInsetsPrintJobIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInsetsPrintJobIds method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInsetsPrintJobIdsForArrayConstraintFromSetInsetsPrintJobIds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $createBillingPrintjobResponseInsetsPrintJobIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($createBillingPrintjobResponseInsetsPrintJobIdsItem) || ctype_digit($createBillingPrintjobResponseInsetsPrintJobIdsItem))) {
                $invalidValues[] = is_object($createBillingPrintjobResponseInsetsPrintJobIdsItem) ? get_class($createBillingPrintjobResponseInsetsPrintJobIdsItem) : sprintf('%s(%s)', gettype($createBillingPrintjobResponseInsetsPrintJobIdsItem), var_export($createBillingPrintjobResponseInsetsPrintJobIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The insetsPrintJobIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set insetsPrintJobIds value
     * @throws InvalidArgumentException
     * @param int[] $insetsPrintJobIds
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobResponse
     */
    public function setInsetsPrintJobIds(?array $insetsPrintJobIds = null): self
    {
        // validation for constraint: array
        if ('' !== ($insetsPrintJobIdsArrayErrorMessage = self::validateInsetsPrintJobIdsForArrayConstraintFromSetInsetsPrintJobIds($insetsPrintJobIds))) {
            throw new InvalidArgumentException($insetsPrintJobIdsArrayErrorMessage, __LINE__);
        }
        $this->insetsPrintJobIds = $insetsPrintJobIds;
        
        return $this;
    }
    /**
     * Add item to insetsPrintJobIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobResponse
     */
    public function addToInsetsPrintJobIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The insetsPrintJobIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->insetsPrintJobIds[] = $item;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\CreateBillingPrintjobResponse
     */
    public function setFile(?\Pggns\MidocoApi\Order\StructType\FileType $file = null): self
    {
        $this->file = $file;
        
        return $this;
    }
}
