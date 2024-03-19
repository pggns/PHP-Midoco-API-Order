<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteMediatorProductSettlementResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteMediatorProductSettlementResponse extends AbstractStructBase
{
    /**
     * The MidocoMediatorProductSettlementInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMediatorProductSettlementInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementInfo[]
     */
    protected ?array $MidocoMediatorProductSettlementInfo = null;
    /**
     * The MediatorError
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MediatorError
     * @var \Pggns\MidocoApi\Order\StructType\MediatorErrorType[]
     */
    protected ?array $MediatorError = null;
    /**
     * The pdfForPreview
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $pdfForPreview = null;
    /**
     * Constructor method for ExecuteMediatorProductSettlementResponse
     * @uses ExecuteMediatorProductSettlementResponse::setMidocoMediatorProductSettlementInfo()
     * @uses ExecuteMediatorProductSettlementResponse::setMediatorError()
     * @uses ExecuteMediatorProductSettlementResponse::setPdfForPreview()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementInfo[] $midocoMediatorProductSettlementInfo
     * @param \Pggns\MidocoApi\Order\StructType\MediatorErrorType[] $mediatorError
     * @param string[] $pdfForPreview
     */
    public function __construct(?array $midocoMediatorProductSettlementInfo = null, ?array $mediatorError = null, ?array $pdfForPreview = null)
    {
        $this
            ->setMidocoMediatorProductSettlementInfo($midocoMediatorProductSettlementInfo)
            ->setMediatorError($mediatorError)
            ->setPdfForPreview($pdfForPreview);
    }
    /**
     * Get MidocoMediatorProductSettlementInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementInfo[]
     */
    public function getMidocoMediatorProductSettlementInfo(): ?array
    {
        return $this->MidocoMediatorProductSettlementInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMediatorProductSettlementInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMediatorProductSettlementInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMediatorProductSettlementInfoForArrayConstraintFromSetMidocoMediatorProductSettlementInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeMediatorProductSettlementResponseMidocoMediatorProductSettlementInfoItem) {
            // validation for constraint: itemType
            if (!$executeMediatorProductSettlementResponseMidocoMediatorProductSettlementInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementInfo) {
                $invalidValues[] = is_object($executeMediatorProductSettlementResponseMidocoMediatorProductSettlementInfoItem) ? get_class($executeMediatorProductSettlementResponseMidocoMediatorProductSettlementInfoItem) : sprintf('%s(%s)', gettype($executeMediatorProductSettlementResponseMidocoMediatorProductSettlementInfoItem), var_export($executeMediatorProductSettlementResponseMidocoMediatorProductSettlementInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMediatorProductSettlementInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMediatorProductSettlementInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementInfo[] $midocoMediatorProductSettlementInfo
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementResponse
     */
    public function setMidocoMediatorProductSettlementInfo(?array $midocoMediatorProductSettlementInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMediatorProductSettlementInfoArrayErrorMessage = self::validateMidocoMediatorProductSettlementInfoForArrayConstraintFromSetMidocoMediatorProductSettlementInfo($midocoMediatorProductSettlementInfo))) {
            throw new InvalidArgumentException($midocoMediatorProductSettlementInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoMediatorProductSettlementInfo = $midocoMediatorProductSettlementInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoMediatorProductSettlementInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementResponse
     */
    public function addToMidocoMediatorProductSettlementInfo(\Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoMediatorProductSettlementInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoMediatorProductSettlementInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMediatorProductSettlementInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MediatorError value
     * @return \Pggns\MidocoApi\Order\StructType\MediatorErrorType[]
     */
    public function getMediatorError(): ?array
    {
        return $this->MediatorError;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMediatorError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMediatorError method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMediatorErrorForArrayConstraintFromSetMediatorError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeMediatorProductSettlementResponseMediatorErrorItem) {
            // validation for constraint: itemType
            if (!$executeMediatorProductSettlementResponseMediatorErrorItem instanceof \Pggns\MidocoApi\Order\StructType\MediatorErrorType) {
                $invalidValues[] = is_object($executeMediatorProductSettlementResponseMediatorErrorItem) ? get_class($executeMediatorProductSettlementResponseMediatorErrorItem) : sprintf('%s(%s)', gettype($executeMediatorProductSettlementResponseMediatorErrorItem), var_export($executeMediatorProductSettlementResponseMediatorErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MediatorError property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MediatorError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorErrorType[] $mediatorError
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementResponse
     */
    public function setMediatorError(?array $mediatorError = null): self
    {
        // validation for constraint: array
        if ('' !== ($mediatorErrorArrayErrorMessage = self::validateMediatorErrorForArrayConstraintFromSetMediatorError($mediatorError))) {
            throw new InvalidArgumentException($mediatorErrorArrayErrorMessage, __LINE__);
        }
        $this->MediatorError = $mediatorError;
        
        return $this;
    }
    /**
     * Add item to MediatorError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorErrorType $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementResponse
     */
    public function addToMediatorError(\Pggns\MidocoApi\Order\StructType\MediatorErrorType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MediatorErrorType) {
            throw new InvalidArgumentException(sprintf('The MediatorError property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MediatorError[] = $item;
        
        return $this;
    }
    /**
     * Get pdfForPreview value
     * @return string[]
     */
    public function getPdfForPreview(): ?array
    {
        return $this->pdfForPreview;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setPdfForPreview method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPdfForPreview method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePdfForPreviewForArrayConstraintFromSetPdfForPreview(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeMediatorProductSettlementResponsePdfForPreviewItem) {
            // validation for constraint: itemType
            if (!is_string($executeMediatorProductSettlementResponsePdfForPreviewItem)) {
                $invalidValues[] = is_object($executeMediatorProductSettlementResponsePdfForPreviewItem) ? get_class($executeMediatorProductSettlementResponsePdfForPreviewItem) : sprintf('%s(%s)', gettype($executeMediatorProductSettlementResponsePdfForPreviewItem), var_export($executeMediatorProductSettlementResponsePdfForPreviewItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The pdfForPreview property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set pdfForPreview value
     * @throws InvalidArgumentException
     * @param string[] $pdfForPreview
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementResponse
     */
    public function setPdfForPreview(?array $pdfForPreview = null): self
    {
        // validation for constraint: array
        if ('' !== ($pdfForPreviewArrayErrorMessage = self::validatePdfForPreviewForArrayConstraintFromSetPdfForPreview($pdfForPreview))) {
            throw new InvalidArgumentException($pdfForPreviewArrayErrorMessage, __LINE__);
        }
        $this->pdfForPreview = $pdfForPreview;
        
        return $this;
    }
    /**
     * Add item to pdfForPreview value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorProductSettlementResponse
     */
    public function addToPdfForPreview(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The pdfForPreview property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->pdfForPreview[] = $item;
        
        return $this;
    }
}
