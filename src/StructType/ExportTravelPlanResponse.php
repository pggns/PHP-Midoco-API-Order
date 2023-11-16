<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportTravelPlanResponse StructType
 * @subpackage Structs
 */
class ExportTravelPlanResponse extends AbstractStructBase
{
    /**
     * The TravelPlanData
     * @var string|null
     */
    protected ?string $TravelPlanData = null;
    /**
     * The MidocoAdditionalPrintDocument
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAdditionalPrintDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument[]
     */
    protected array $MidocoAdditionalPrintDocument = [];
    /**
     * Constructor method for ExportTravelPlanResponse
     * @uses ExportTravelPlanResponse::setTravelPlanData()
     * @uses ExportTravelPlanResponse::setMidocoAdditionalPrintDocument()
     * @param string $travelPlanData
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument[] $midocoAdditionalPrintDocument
     */
    public function __construct(?string $travelPlanData = null, array $midocoAdditionalPrintDocument = [])
    {
        $this
            ->setTravelPlanData($travelPlanData)
            ->setMidocoAdditionalPrintDocument($midocoAdditionalPrintDocument);
    }
    /**
     * Get TravelPlanData value
     * @return string|null
     */
    public function getTravelPlanData(): ?string
    {
        return $this->TravelPlanData;
    }
    /**
     * Set TravelPlanData value
     * @param string $travelPlanData
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelPlanResponse
     */
    public function setTravelPlanData(?string $travelPlanData = null): self
    {
        // validation for constraint: string
        if (!is_null($travelPlanData) && !is_string($travelPlanData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelPlanData, true), gettype($travelPlanData)), __LINE__);
        }
        $this->TravelPlanData = $travelPlanData;
        
        return $this;
    }
    /**
     * Get MidocoAdditionalPrintDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument[]
     */
    public function getMidocoAdditionalPrintDocument(): array
    {
        return $this->MidocoAdditionalPrintDocument;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAdditionalPrintDocument method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAdditionalPrintDocument method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAdditionalPrintDocumentForArrayConstraintsFromSetMidocoAdditionalPrintDocument(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $exportTravelPlanResponseMidocoAdditionalPrintDocumentItem) {
            // validation for constraint: itemType
            if (!$exportTravelPlanResponseMidocoAdditionalPrintDocumentItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument) {
                $invalidValues[] = is_object($exportTravelPlanResponseMidocoAdditionalPrintDocumentItem) ? get_class($exportTravelPlanResponseMidocoAdditionalPrintDocumentItem) : sprintf('%s(%s)', gettype($exportTravelPlanResponseMidocoAdditionalPrintDocumentItem), var_export($exportTravelPlanResponseMidocoAdditionalPrintDocumentItem, true));
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
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelPlanResponse
     */
    public function setMidocoAdditionalPrintDocument(array $midocoAdditionalPrintDocument = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAdditionalPrintDocumentArrayErrorMessage = self::validateMidocoAdditionalPrintDocumentForArrayConstraintsFromSetMidocoAdditionalPrintDocument($midocoAdditionalPrintDocument))) {
            throw new InvalidArgumentException($midocoAdditionalPrintDocumentArrayErrorMessage, __LINE__);
        }
        $this->MidocoAdditionalPrintDocument = $midocoAdditionalPrintDocument;
        
        return $this;
    }
    /**
     * Add item to MidocoAdditionalPrintDocument value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAdditionalPrintDocument $item
     * @return \Pggns\MidocoApi\Order\StructType\ExportTravelPlanResponse
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
}
