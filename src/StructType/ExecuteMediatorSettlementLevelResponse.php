<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteMediatorSettlementLevelResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ExecuteMediatorSettlementLevelResponse extends AbstractStructBase
{
    /**
     * The MidocoMediatorBilling
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMediatorBilling
     * @var \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO[]
     */
    protected ?array $MidocoMediatorBilling = null;
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
     * Constructor method for ExecuteMediatorSettlementLevelResponse
     * @uses ExecuteMediatorSettlementLevelResponse::setMidocoMediatorBilling()
     * @uses ExecuteMediatorSettlementLevelResponse::setMediatorError()
     * @uses ExecuteMediatorSettlementLevelResponse::setPdfForPreview()
     * @param \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO[] $midocoMediatorBilling
     * @param \Pggns\MidocoApi\Order\StructType\MediatorErrorType[] $mediatorError
     * @param string[] $pdfForPreview
     */
    public function __construct(?array $midocoMediatorBilling = null, ?array $mediatorError = null, ?array $pdfForPreview = null)
    {
        $this
            ->setMidocoMediatorBilling($midocoMediatorBilling)
            ->setMediatorError($mediatorError)
            ->setPdfForPreview($pdfForPreview);
    }
    /**
     * Get MidocoMediatorBilling value
     * @return \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO[]
     */
    public function getMidocoMediatorBilling(): ?array
    {
        return $this->MidocoMediatorBilling;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoMediatorBilling method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMediatorBilling method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMediatorBillingForArrayConstraintFromSetMidocoMediatorBilling(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeMediatorSettlementLevelResponseMidocoMediatorBillingItem) {
            // validation for constraint: itemType
            if (!$executeMediatorSettlementLevelResponseMidocoMediatorBillingItem instanceof \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO) {
                $invalidValues[] = is_object($executeMediatorSettlementLevelResponseMidocoMediatorBillingItem) ? get_class($executeMediatorSettlementLevelResponseMidocoMediatorBillingItem) : sprintf('%s(%s)', gettype($executeMediatorSettlementLevelResponseMidocoMediatorBillingItem), var_export($executeMediatorSettlementLevelResponseMidocoMediatorBillingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMediatorBilling property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMediatorBilling value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO[] $midocoMediatorBilling
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelResponse
     */
    public function setMidocoMediatorBilling(?array $midocoMediatorBilling = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMediatorBillingArrayErrorMessage = self::validateMidocoMediatorBillingForArrayConstraintFromSetMidocoMediatorBilling($midocoMediatorBilling))) {
            throw new InvalidArgumentException($midocoMediatorBillingArrayErrorMessage, __LINE__);
        }
        $this->MidocoMediatorBilling = $midocoMediatorBilling;
        
        return $this;
    }
    /**
     * Add item to MidocoMediatorBilling value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelResponse
     */
    public function addToMidocoMediatorBilling(\Pggns\MidocoApi\Order\StructType\MediatorBillingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMediatorBilling property can only contain items of type \Pggns\MidocoApi\Order\StructType\MediatorBillingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMediatorBilling[] = $item;
        
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
        foreach ($values as $executeMediatorSettlementLevelResponseMediatorErrorItem) {
            // validation for constraint: itemType
            if (!$executeMediatorSettlementLevelResponseMediatorErrorItem instanceof \Pggns\MidocoApi\Order\StructType\MediatorErrorType) {
                $invalidValues[] = is_object($executeMediatorSettlementLevelResponseMediatorErrorItem) ? get_class($executeMediatorSettlementLevelResponseMediatorErrorItem) : sprintf('%s(%s)', gettype($executeMediatorSettlementLevelResponseMediatorErrorItem), var_export($executeMediatorSettlementLevelResponseMediatorErrorItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelResponse
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
        foreach ($values as $executeMediatorSettlementLevelResponsePdfForPreviewItem) {
            // validation for constraint: itemType
            if (!is_string($executeMediatorSettlementLevelResponsePdfForPreviewItem)) {
                $invalidValues[] = is_object($executeMediatorSettlementLevelResponsePdfForPreviewItem) ? get_class($executeMediatorSettlementLevelResponsePdfForPreviewItem) : sprintf('%s(%s)', gettype($executeMediatorSettlementLevelResponsePdfForPreviewItem), var_export($executeMediatorSettlementLevelResponsePdfForPreviewItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelResponse
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementLevelResponse
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
