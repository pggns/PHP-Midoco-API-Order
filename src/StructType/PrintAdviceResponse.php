<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintAdviceResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintAdviceResponse extends AbstractStructBase
{
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
     * - minOccurs: 0
     * - ref: system:MidocoMailDescription4Inexso
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso $MidocoMailDescription4Inexso = null;
    /**
     * The printJobIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $printJobIds = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $data = null;
    /**
     * The fopMsg
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $fopMsg = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * Constructor method for PrintAdviceResponse
     * @uses PrintAdviceResponse::setMidocoMailMessage()
     * @uses PrintAdviceResponse::setMidocoMailDescription4Inexso()
     * @uses PrintAdviceResponse::setPrintJobIds()
     * @uses PrintAdviceResponse::setData()
     * @uses PrintAdviceResponse::setFopMsg()
     * @uses PrintAdviceResponse::setName()
     * @uses PrintAdviceResponse::setPrintType()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso $midocoMailDescription4Inexso
     * @param int[] $printJobIds
     * @param string[] $data
     * @param string[] $fopMsg
     * @param string $name
     * @param string $printType
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null, ?\Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso $midocoMailDescription4Inexso = null, ?array $printJobIds = null, ?array $data = null, ?array $fopMsg = null, ?string $name = null, ?string $printType = null)
    {
        $this
            ->setMidocoMailMessage($midocoMailMessage)
            ->setMidocoMailDescription4Inexso($midocoMailDescription4Inexso)
            ->setPrintJobIds($printJobIds)
            ->setData($data)
            ->setFopMsg($fopMsg)
            ->setName($name)
            ->setPrintType($printType);
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
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceResponse
     */
    public function setMidocoMailMessage(?\Pggns\MidocoApi\Order\StructType\MidocoMailMessageType $midocoMailMessage = null): self
    {
        $this->MidocoMailMessage = $midocoMailMessage;
        
        return $this;
    }
    /**
     * Get MidocoMailDescription4Inexso value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso|null
     */
    public function getMidocoMailDescription4Inexso(): ?\Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso
    {
        return $this->MidocoMailDescription4Inexso;
    }
    /**
     * Set MidocoMailDescription4Inexso value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso $midocoMailDescription4Inexso
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceResponse
     */
    public function setMidocoMailDescription4Inexso(?\Pggns\MidocoApi\Order\StructType\MidocoMailDescription4Inexso $midocoMailDescription4Inexso = null): self
    {
        $this->MidocoMailDescription4Inexso = $midocoMailDescription4Inexso;
        
        return $this;
    }
    /**
     * Get printJobIds value
     * @return int[]
     */
    public function getPrintJobIds(): ?array
    {
        return $this->printJobIds;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPrintJobIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPrintJobIds method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePrintJobIdsForArrayConstraintFromSetPrintJobIds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $printAdviceResponsePrintJobIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($printAdviceResponsePrintJobIdsItem) || ctype_digit($printAdviceResponsePrintJobIdsItem))) {
                $invalidValues[] = is_object($printAdviceResponsePrintJobIdsItem) ? get_class($printAdviceResponsePrintJobIdsItem) : sprintf('%s(%s)', gettype($printAdviceResponsePrintJobIdsItem), var_export($printAdviceResponsePrintJobIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The printJobIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set printJobIds value
     * @throws InvalidArgumentException
     * @param int[] $printJobIds
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceResponse
     */
    public function setPrintJobIds(?array $printJobIds = null): self
    {
        // validation for constraint: array
        if ('' !== ($printJobIdsArrayErrorMessage = self::validatePrintJobIdsForArrayConstraintFromSetPrintJobIds($printJobIds))) {
            throw new InvalidArgumentException($printJobIdsArrayErrorMessage, __LINE__);
        }
        $this->printJobIds = $printJobIds;
        
        return $this;
    }
    /**
     * Add item to printJobIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceResponse
     */
    public function addToPrintJobIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The printJobIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->printJobIds[] = $item;
        
        return $this;
    }
    /**
     * Get data value
     * @return string[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setData method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDataForArrayConstraintFromSetData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $printAdviceResponseDataItem) {
            // validation for constraint: itemType
            if (!is_string($printAdviceResponseDataItem)) {
                $invalidValues[] = is_object($printAdviceResponseDataItem) ? get_class($printAdviceResponseDataItem) : sprintf('%s(%s)', gettype($printAdviceResponseDataItem), var_export($printAdviceResponseDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The data property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set data value
     * @throws InvalidArgumentException
     * @param string[] $data
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceResponse
     */
    public function setData(?array $data = null): self
    {
        // validation for constraint: array
        if ('' !== ($dataArrayErrorMessage = self::validateDataForArrayConstraintFromSetData($data))) {
            throw new InvalidArgumentException($dataArrayErrorMessage, __LINE__);
        }
        $this->data = $data;
        
        return $this;
    }
    /**
     * Add item to data value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceResponse
     */
    public function addToData(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The data property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->data[] = $item;
        
        return $this;
    }
    /**
     * Get fopMsg value
     * @return string[]
     */
    public function getFopMsg(): ?array
    {
        return $this->fopMsg;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFopMsg method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFopMsg method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFopMsgForArrayConstraintFromSetFopMsg(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $printAdviceResponseFopMsgItem) {
            // validation for constraint: itemType
            if (!is_string($printAdviceResponseFopMsgItem)) {
                $invalidValues[] = is_object($printAdviceResponseFopMsgItem) ? get_class($printAdviceResponseFopMsgItem) : sprintf('%s(%s)', gettype($printAdviceResponseFopMsgItem), var_export($printAdviceResponseFopMsgItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fopMsg property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set fopMsg value
     * @throws InvalidArgumentException
     * @param string[] $fopMsg
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceResponse
     */
    public function setFopMsg(?array $fopMsg = null): self
    {
        // validation for constraint: array
        if ('' !== ($fopMsgArrayErrorMessage = self::validateFopMsgForArrayConstraintFromSetFopMsg($fopMsg))) {
            throw new InvalidArgumentException($fopMsgArrayErrorMessage, __LINE__);
        }
        $this->fopMsg = $fopMsg;
        
        return $this;
    }
    /**
     * Add item to fopMsg value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceResponse
     */
    public function addToFopMsg(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The fopMsg property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fopMsg[] = $item;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceResponse
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\PrintAdviceResponse
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
}
