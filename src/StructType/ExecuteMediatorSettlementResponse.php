<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteMediatorSettlementResponse StructType
 * @subpackage Structs
 */
class ExecuteMediatorSettlementResponse extends AbstractStructBase
{
    /**
     * The MidocoSettlementInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSettlementInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo[]
     */
    protected array $MidocoSettlementInfo = [];
    /**
     * The pdfForPreview
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $pdfForPreview = [];
    /**
     * Constructor method for ExecuteMediatorSettlementResponse
     * @uses ExecuteMediatorSettlementResponse::setMidocoSettlementInfo()
     * @uses ExecuteMediatorSettlementResponse::setPdfForPreview()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo[] $midocoSettlementInfo
     * @param string[] $pdfForPreview
     */
    public function __construct(array $midocoSettlementInfo = [], array $pdfForPreview = [])
    {
        $this
            ->setMidocoSettlementInfo($midocoSettlementInfo)
            ->setPdfForPreview($pdfForPreview);
    }
    /**
     * Get MidocoSettlementInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo[]
     */
    public function getMidocoSettlementInfo(): array
    {
        return $this->MidocoSettlementInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSettlementInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSettlementInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSettlementInfoForArrayConstraintsFromSetMidocoSettlementInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeMediatorSettlementResponseMidocoSettlementInfoItem) {
            // validation for constraint: itemType
            if (!$executeMediatorSettlementResponseMidocoSettlementInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo) {
                $invalidValues[] = is_object($executeMediatorSettlementResponseMidocoSettlementInfoItem) ? get_class($executeMediatorSettlementResponseMidocoSettlementInfoItem) : sprintf('%s(%s)', gettype($executeMediatorSettlementResponseMidocoSettlementInfoItem), var_export($executeMediatorSettlementResponseMidocoSettlementInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSettlementInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSettlementInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo[] $midocoSettlementInfo
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementResponse
     */
    public function setMidocoSettlementInfo(array $midocoSettlementInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSettlementInfoArrayErrorMessage = self::validateMidocoSettlementInfoForArrayConstraintsFromSetMidocoSettlementInfo($midocoSettlementInfo))) {
            throw new InvalidArgumentException($midocoSettlementInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoSettlementInfo = $midocoSettlementInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoSettlementInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementResponse
     */
    public function addToMidocoSettlementInfo(\Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoSettlementInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSettlementInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSettlementInfo[] = $item;
        
        return $this;
    }
    /**
     * Get pdfForPreview value
     * @return string[]
     */
    public function getPdfForPreview(): array
    {
        return $this->pdfForPreview;
    }
    /**
     * This method is responsible for validating the values passed to the setPdfForPreview method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPdfForPreview method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePdfForPreviewForArrayConstraintsFromSetPdfForPreview(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $executeMediatorSettlementResponsePdfForPreviewItem) {
            // validation for constraint: itemType
            if (!is_string($executeMediatorSettlementResponsePdfForPreviewItem)) {
                $invalidValues[] = is_object($executeMediatorSettlementResponsePdfForPreviewItem) ? get_class($executeMediatorSettlementResponsePdfForPreviewItem) : sprintf('%s(%s)', gettype($executeMediatorSettlementResponsePdfForPreviewItem), var_export($executeMediatorSettlementResponsePdfForPreviewItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementResponse
     */
    public function setPdfForPreview(array $pdfForPreview = []): self
    {
        // validation for constraint: array
        if ('' !== ($pdfForPreviewArrayErrorMessage = self::validatePdfForPreviewForArrayConstraintsFromSetPdfForPreview($pdfForPreview))) {
            throw new InvalidArgumentException($pdfForPreviewArrayErrorMessage, __LINE__);
        }
        $this->pdfForPreview = $pdfForPreview;
        
        return $this;
    }
    /**
     * Add item to pdfForPreview value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\ExecuteMediatorSettlementResponse
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
