<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDocumentitem4Printing StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDocumentitem4Printing extends DocumentitemDTO
{
    /**
     * The isReferenced
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $isReferenced = null;
    /**
     * The MidocoPassengerInfo4Printing
     * Meta information extracted from the WSDL
     * - ref: MidocoPassengerInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing $MidocoPassengerInfo4Printing = null;
    /**
     * The MidocoFlightDetailsInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFlightDetailsInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing[]
     */
    protected ?array $MidocoFlightDetailsInfo4Printing = null;
    /**
     * The MidocoRemarks
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[]
     */
    protected ?array $MidocoRemarks = null;
    /**
     * The isPrinted
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isPrinted = null;
    /**
     * The needsInvoicePrint
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $needsInvoicePrint = null;
    /**
     * The MidocoDocumentTaxInfo4Printing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoDocumentTaxInfo4Printing
     * @var \Pggns\MidocoApi\Order\StructType\DocumentTaxCalculationDTO[]
     */
    protected ?array $MidocoDocumentTaxInfo4Printing = null;
    /**
     * The bspValidatorName
     * @var string|null
     */
    protected ?string $bspValidatorName = null;
    /**
     * The preventPrinting
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $preventPrinting = null;
    /**
     * The MidocoOrdersDbiInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdersDbiInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[]
     */
    protected ?array $MidocoOrdersDbiInfo = null;
    /**
     * The MidocoInvoicePosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoicePosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[]
     */
    protected ?array $MidocoInvoicePosition = null;
    /**
     * The MidocoInvoiceVatPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInvoiceVatPosition
     * @var \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[]
     */
    protected ?array $MidocoInvoiceVatPosition = null;
    /**
     * The oldPrice
     * @var float|null
     */
    protected ?float $oldPrice = null;
    /**
     * The MidocoSellPassenger
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSellPassenger
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[]
     */
    protected ?array $MidocoSellPassenger = null;
    /**
     * The MidocoTouchedVatCode
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTouchedVatCode
     * @var \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType[]
     */
    protected ?array $MidocoTouchedVatCode = null;
    /**
     * The buyCurrencyRate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $buyCurrencyRate = null;
    /**
     * Constructor method for MidocoDocumentitem4Printing
     * @uses MidocoDocumentitem4Printing::setIsReferenced()
     * @uses MidocoDocumentitem4Printing::setMidocoPassengerInfo4Printing()
     * @uses MidocoDocumentitem4Printing::setMidocoFlightDetailsInfo4Printing()
     * @uses MidocoDocumentitem4Printing::setMidocoRemarks()
     * @uses MidocoDocumentitem4Printing::setIsPrinted()
     * @uses MidocoDocumentitem4Printing::setNeedsInvoicePrint()
     * @uses MidocoDocumentitem4Printing::setMidocoDocumentTaxInfo4Printing()
     * @uses MidocoDocumentitem4Printing::setBspValidatorName()
     * @uses MidocoDocumentitem4Printing::setPreventPrinting()
     * @uses MidocoDocumentitem4Printing::setMidocoOrdersDbiInfo()
     * @uses MidocoDocumentitem4Printing::setMidocoInvoicePosition()
     * @uses MidocoDocumentitem4Printing::setMidocoInvoiceVatPosition()
     * @uses MidocoDocumentitem4Printing::setOldPrice()
     * @uses MidocoDocumentitem4Printing::setMidocoSellPassenger()
     * @uses MidocoDocumentitem4Printing::setMidocoTouchedVatCode()
     * @uses MidocoDocumentitem4Printing::setBuyCurrencyRate()
     * @param bool $isReferenced
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing $midocoPassengerInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing[] $midocoFlightDetailsInfo4Printing
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[] $midocoRemarks
     * @param bool $isPrinted
     * @param bool $needsInvoicePrint
     * @param \Pggns\MidocoApi\Order\StructType\DocumentTaxCalculationDTO[] $midocoDocumentTaxInfo4Printing
     * @param string $bspValidatorName
     * @param bool $preventPrinting
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[] $midocoOrdersDbiInfo
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[] $midocoInvoicePosition
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[] $midocoInvoiceVatPosition
     * @param float $oldPrice
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @param \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType[] $midocoTouchedVatCode
     * @param float $buyCurrencyRate
     */
    public function __construct(?bool $isReferenced = true, ?\Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing $midocoPassengerInfo4Printing = null, ?array $midocoFlightDetailsInfo4Printing = null, ?array $midocoRemarks = null, ?bool $isPrinted = false, ?bool $needsInvoicePrint = false, ?array $midocoDocumentTaxInfo4Printing = null, ?string $bspValidatorName = null, ?bool $preventPrinting = false, ?array $midocoOrdersDbiInfo = null, ?array $midocoInvoicePosition = null, ?array $midocoInvoiceVatPosition = null, ?float $oldPrice = null, ?array $midocoSellPassenger = null, ?array $midocoTouchedVatCode = null, ?float $buyCurrencyRate = null)
    {
        $this
            ->setIsReferenced($isReferenced)
            ->setMidocoPassengerInfo4Printing($midocoPassengerInfo4Printing)
            ->setMidocoFlightDetailsInfo4Printing($midocoFlightDetailsInfo4Printing)
            ->setMidocoRemarks($midocoRemarks)
            ->setIsPrinted($isPrinted)
            ->setNeedsInvoicePrint($needsInvoicePrint)
            ->setMidocoDocumentTaxInfo4Printing($midocoDocumentTaxInfo4Printing)
            ->setBspValidatorName($bspValidatorName)
            ->setPreventPrinting($preventPrinting)
            ->setMidocoOrdersDbiInfo($midocoOrdersDbiInfo)
            ->setMidocoInvoicePosition($midocoInvoicePosition)
            ->setMidocoInvoiceVatPosition($midocoInvoiceVatPosition)
            ->setOldPrice($oldPrice)
            ->setMidocoSellPassenger($midocoSellPassenger)
            ->setMidocoTouchedVatCode($midocoTouchedVatCode)
            ->setBuyCurrencyRate($buyCurrencyRate);
    }
    /**
     * Get isReferenced value
     * @return bool|null
     */
    public function getIsReferenced(): ?bool
    {
        return $this->isReferenced;
    }
    /**
     * Set isReferenced value
     * @param bool $isReferenced
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setIsReferenced(?bool $isReferenced = true): self
    {
        // validation for constraint: boolean
        if (!is_null($isReferenced) && !is_bool($isReferenced)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReferenced, true), gettype($isReferenced)), __LINE__);
        }
        $this->isReferenced = $isReferenced;
        
        return $this;
    }
    /**
     * Get MidocoPassengerInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing|null
     */
    public function getMidocoPassengerInfo4Printing(): ?\Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing
    {
        return $this->MidocoPassengerInfo4Printing;
    }
    /**
     * Set MidocoPassengerInfo4Printing value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing $midocoPassengerInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setMidocoPassengerInfo4Printing(?\Pggns\MidocoApi\Order\StructType\MidocoPassengerInfo4Printing $midocoPassengerInfo4Printing = null): self
    {
        $this->MidocoPassengerInfo4Printing = $midocoPassengerInfo4Printing;
        
        return $this;
    }
    /**
     * Get MidocoFlightDetailsInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing[]
     */
    public function getMidocoFlightDetailsInfo4Printing(): ?array
    {
        return $this->MidocoFlightDetailsInfo4Printing;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoFlightDetailsInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFlightDetailsInfo4Printing method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFlightDetailsInfo4PrintingForArrayConstraintFromSetMidocoFlightDetailsInfo4Printing(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDocumentitem4PrintingMidocoFlightDetailsInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoDocumentitem4PrintingMidocoFlightDetailsInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing) {
                $invalidValues[] = is_object($midocoDocumentitem4PrintingMidocoFlightDetailsInfo4PrintingItem) ? get_class($midocoDocumentitem4PrintingMidocoFlightDetailsInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoDocumentitem4PrintingMidocoFlightDetailsInfo4PrintingItem), var_export($midocoDocumentitem4PrintingMidocoFlightDetailsInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFlightDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFlightDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing[] $midocoFlightDetailsInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setMidocoFlightDetailsInfo4Printing(?array $midocoFlightDetailsInfo4Printing = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFlightDetailsInfo4PrintingArrayErrorMessage = self::validateMidocoFlightDetailsInfo4PrintingForArrayConstraintFromSetMidocoFlightDetailsInfo4Printing($midocoFlightDetailsInfo4Printing))) {
            throw new InvalidArgumentException($midocoFlightDetailsInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoFlightDetailsInfo4Printing = $midocoFlightDetailsInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoFlightDetailsInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function addToMidocoFlightDetailsInfo4Printing(\Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing) {
            throw new InvalidArgumentException(sprintf('The MidocoFlightDetailsInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoFlightDetailsInfo4Printing, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFlightDetailsInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoRemarks value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[]
     */
    public function getMidocoRemarks(): ?array
    {
        return $this->MidocoRemarks;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoRemarks method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoRemarks method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoRemarksForArrayConstraintFromSetMidocoRemarks(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDocumentitem4PrintingMidocoRemarksItem) {
            // validation for constraint: itemType
            if (!$midocoDocumentitem4PrintingMidocoRemarksItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkType) {
                $invalidValues[] = is_object($midocoDocumentitem4PrintingMidocoRemarksItem) ? get_class($midocoDocumentitem4PrintingMidocoRemarksItem) : sprintf('%s(%s)', gettype($midocoDocumentitem4PrintingMidocoRemarksItem), var_export($midocoDocumentitem4PrintingMidocoRemarksItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoRemarks property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoRemarks value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType[] $midocoRemarks
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setMidocoRemarks(?array $midocoRemarks = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoRemarksArrayErrorMessage = self::validateMidocoRemarksForArrayConstraintFromSetMidocoRemarks($midocoRemarks))) {
            throw new InvalidArgumentException($midocoRemarksArrayErrorMessage, __LINE__);
        }
        $this->MidocoRemarks = $midocoRemarks;
        
        return $this;
    }
    /**
     * Add item to MidocoRemarks value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function addToMidocoRemarks(\Pggns\MidocoApi\Order\StructType\MidocoRemarkType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoRemarkType) {
            throw new InvalidArgumentException(sprintf('The MidocoRemarks property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoRemarkType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoRemarks[] = $item;
        
        return $this;
    }
    /**
     * Get isPrinted value
     * @return bool|null
     */
    public function getIsPrinted(): ?bool
    {
        return $this->isPrinted;
    }
    /**
     * Set isPrinted value
     * @param bool $isPrinted
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setIsPrinted(?bool $isPrinted = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isPrinted) && !is_bool($isPrinted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrinted, true), gettype($isPrinted)), __LINE__);
        }
        $this->isPrinted = $isPrinted;
        
        return $this;
    }
    /**
     * Get needsInvoicePrint value
     * @return bool|null
     */
    public function getNeedsInvoicePrint(): ?bool
    {
        return $this->needsInvoicePrint;
    }
    /**
     * Set needsInvoicePrint value
     * @param bool $needsInvoicePrint
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setNeedsInvoicePrint(?bool $needsInvoicePrint = false): self
    {
        // validation for constraint: boolean
        if (!is_null($needsInvoicePrint) && !is_bool($needsInvoicePrint)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($needsInvoicePrint, true), gettype($needsInvoicePrint)), __LINE__);
        }
        $this->needsInvoicePrint = $needsInvoicePrint;
        
        return $this;
    }
    /**
     * Get MidocoDocumentTaxInfo4Printing value
     * @return \Pggns\MidocoApi\Order\StructType\DocumentTaxCalculationDTO[]
     */
    public function getMidocoDocumentTaxInfo4Printing(): ?array
    {
        return $this->MidocoDocumentTaxInfo4Printing;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoDocumentTaxInfo4Printing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoDocumentTaxInfo4Printing method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoDocumentTaxInfo4PrintingForArrayConstraintFromSetMidocoDocumentTaxInfo4Printing(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDocumentitem4PrintingMidocoDocumentTaxInfo4PrintingItem) {
            // validation for constraint: itemType
            if (!$midocoDocumentitem4PrintingMidocoDocumentTaxInfo4PrintingItem instanceof \Pggns\MidocoApi\Order\StructType\DocumentTaxCalculationDTO) {
                $invalidValues[] = is_object($midocoDocumentitem4PrintingMidocoDocumentTaxInfo4PrintingItem) ? get_class($midocoDocumentitem4PrintingMidocoDocumentTaxInfo4PrintingItem) : sprintf('%s(%s)', gettype($midocoDocumentitem4PrintingMidocoDocumentTaxInfo4PrintingItem), var_export($midocoDocumentitem4PrintingMidocoDocumentTaxInfo4PrintingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoDocumentTaxInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\DocumentTaxCalculationDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoDocumentTaxInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DocumentTaxCalculationDTO[] $midocoDocumentTaxInfo4Printing
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setMidocoDocumentTaxInfo4Printing(?array $midocoDocumentTaxInfo4Printing = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoDocumentTaxInfo4PrintingArrayErrorMessage = self::validateMidocoDocumentTaxInfo4PrintingForArrayConstraintFromSetMidocoDocumentTaxInfo4Printing($midocoDocumentTaxInfo4Printing))) {
            throw new InvalidArgumentException($midocoDocumentTaxInfo4PrintingArrayErrorMessage, __LINE__);
        }
        $this->MidocoDocumentTaxInfo4Printing = $midocoDocumentTaxInfo4Printing;
        
        return $this;
    }
    /**
     * Add item to MidocoDocumentTaxInfo4Printing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\DocumentTaxCalculationDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function addToMidocoDocumentTaxInfo4Printing(\Pggns\MidocoApi\Order\StructType\DocumentTaxCalculationDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\DocumentTaxCalculationDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoDocumentTaxInfo4Printing property can only contain items of type \Pggns\MidocoApi\Order\StructType\DocumentTaxCalculationDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoDocumentTaxInfo4Printing[] = $item;
        
        return $this;
    }
    /**
     * Get bspValidatorName value
     * @return string|null
     */
    public function getBspValidatorName(): ?string
    {
        return $this->bspValidatorName;
    }
    /**
     * Set bspValidatorName value
     * @param string $bspValidatorName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setBspValidatorName(?string $bspValidatorName = null): self
    {
        // validation for constraint: string
        if (!is_null($bspValidatorName) && !is_string($bspValidatorName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bspValidatorName, true), gettype($bspValidatorName)), __LINE__);
        }
        $this->bspValidatorName = $bspValidatorName;
        
        return $this;
    }
    /**
     * Get preventPrinting value
     * @return bool|null
     */
    public function getPreventPrinting(): ?bool
    {
        return $this->preventPrinting;
    }
    /**
     * Set preventPrinting value
     * @param bool $preventPrinting
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setPreventPrinting(?bool $preventPrinting = false): self
    {
        // validation for constraint: boolean
        if (!is_null($preventPrinting) && !is_bool($preventPrinting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preventPrinting, true), gettype($preventPrinting)), __LINE__);
        }
        $this->preventPrinting = $preventPrinting;
        
        return $this;
    }
    /**
     * Get MidocoOrdersDbiInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[]
     */
    public function getMidocoOrdersDbiInfo(): ?array
    {
        return $this->MidocoOrdersDbiInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoOrdersDbiInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdersDbiInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdersDbiInfoForArrayConstraintFromSetMidocoOrdersDbiInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDocumentitem4PrintingMidocoOrdersDbiInfoItem) {
            // validation for constraint: itemType
            if (!$midocoDocumentitem4PrintingMidocoOrdersDbiInfoItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo) {
                $invalidValues[] = is_object($midocoDocumentitem4PrintingMidocoOrdersDbiInfoItem) ? get_class($midocoDocumentitem4PrintingMidocoOrdersDbiInfoItem) : sprintf('%s(%s)', gettype($midocoDocumentitem4PrintingMidocoOrdersDbiInfoItem), var_export($midocoDocumentitem4PrintingMidocoOrdersDbiInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdersDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdersDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo[] $midocoOrdersDbiInfo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setMidocoOrdersDbiInfo(?array $midocoOrdersDbiInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdersDbiInfoArrayErrorMessage = self::validateMidocoOrdersDbiInfoForArrayConstraintFromSetMidocoOrdersDbiInfo($midocoOrdersDbiInfo))) {
            throw new InvalidArgumentException($midocoOrdersDbiInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdersDbiInfo = $midocoOrdersDbiInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdersDbiInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function addToMidocoOrdersDbiInfo(\Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdersDbiInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoOrdersDbiInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdersDbiInfo[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoInvoicePosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[]
     */
    public function getMidocoInvoicePosition(): ?array
    {
        return $this->MidocoInvoicePosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoInvoicePosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoicePosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoicePositionForArrayConstraintFromSetMidocoInvoicePosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDocumentitem4PrintingMidocoInvoicePositionItem) {
            // validation for constraint: itemType
            if (!$midocoDocumentitem4PrintingMidocoInvoicePositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition) {
                $invalidValues[] = is_object($midocoDocumentitem4PrintingMidocoInvoicePositionItem) ? get_class($midocoDocumentitem4PrintingMidocoInvoicePositionItem) : sprintf('%s(%s)', gettype($midocoDocumentitem4PrintingMidocoInvoicePositionItem), var_export($midocoDocumentitem4PrintingMidocoInvoicePositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoicePosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoicePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition[] $midocoInvoicePosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setMidocoInvoicePosition(?array $midocoInvoicePosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoicePositionArrayErrorMessage = self::validateMidocoInvoicePositionForArrayConstraintFromSetMidocoInvoicePosition($midocoInvoicePosition))) {
            throw new InvalidArgumentException($midocoInvoicePositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoicePosition = $midocoInvoicePosition;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoicePosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function addToMidocoInvoicePosition(\Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoicePosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoicePosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoicePosition[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoInvoiceVatPosition value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[]
     */
    public function getMidocoInvoiceVatPosition(): ?array
    {
        return $this->MidocoInvoiceVatPosition;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoInvoiceVatPosition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInvoiceVatPosition method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInvoiceVatPositionForArrayConstraintFromSetMidocoInvoiceVatPosition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDocumentitem4PrintingMidocoInvoiceVatPositionItem) {
            // validation for constraint: itemType
            if (!$midocoDocumentitem4PrintingMidocoInvoiceVatPositionItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition) {
                $invalidValues[] = is_object($midocoDocumentitem4PrintingMidocoInvoiceVatPositionItem) ? get_class($midocoDocumentitem4PrintingMidocoInvoiceVatPositionItem) : sprintf('%s(%s)', gettype($midocoDocumentitem4PrintingMidocoInvoiceVatPositionItem), var_export($midocoDocumentitem4PrintingMidocoInvoiceVatPositionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInvoiceVatPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInvoiceVatPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition[] $midocoInvoiceVatPosition
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setMidocoInvoiceVatPosition(?array $midocoInvoiceVatPosition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInvoiceVatPositionArrayErrorMessage = self::validateMidocoInvoiceVatPositionForArrayConstraintFromSetMidocoInvoiceVatPosition($midocoInvoiceVatPosition))) {
            throw new InvalidArgumentException($midocoInvoiceVatPositionArrayErrorMessage, __LINE__);
        }
        $this->MidocoInvoiceVatPosition = $midocoInvoiceVatPosition;
        
        return $this;
    }
    /**
     * Add item to MidocoInvoiceVatPosition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function addToMidocoInvoiceVatPosition(\Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition) {
            throw new InvalidArgumentException(sprintf('The MidocoInvoiceVatPosition property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoInvoiceVatPosition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInvoiceVatPosition[] = $item;
        
        return $this;
    }
    /**
     * Get oldPrice value
     * @return float|null
     */
    public function getOldPrice(): ?float
    {
        return $this->oldPrice;
    }
    /**
     * Set oldPrice value
     * @param float $oldPrice
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setOldPrice(?float $oldPrice = null): self
    {
        // validation for constraint: float
        if (!is_null($oldPrice) && !(is_float($oldPrice) || is_numeric($oldPrice))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($oldPrice, true), gettype($oldPrice)), __LINE__);
        }
        $this->oldPrice = $oldPrice;
        
        return $this;
    }
    /**
     * Get MidocoSellPassenger value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[]
     */
    public function getMidocoSellPassenger(): ?array
    {
        return $this->MidocoSellPassenger;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoSellPassenger method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSellPassenger method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSellPassengerForArrayConstraintFromSetMidocoSellPassenger(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDocumentitem4PrintingMidocoSellPassengerItem) {
            // validation for constraint: itemType
            if (!$midocoDocumentitem4PrintingMidocoSellPassengerItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger) {
                $invalidValues[] = is_object($midocoDocumentitem4PrintingMidocoSellPassengerItem) ? get_class($midocoDocumentitem4PrintingMidocoSellPassengerItem) : sprintf('%s(%s)', gettype($midocoDocumentitem4PrintingMidocoSellPassengerItem), var_export($midocoDocumentitem4PrintingMidocoSellPassengerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger[] $midocoSellPassenger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setMidocoSellPassenger(?array $midocoSellPassenger = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSellPassengerArrayErrorMessage = self::validateMidocoSellPassengerForArrayConstraintFromSetMidocoSellPassenger($midocoSellPassenger))) {
            throw new InvalidArgumentException($midocoSellPassengerArrayErrorMessage, __LINE__);
        }
        $this->MidocoSellPassenger = $midocoSellPassenger;
        
        return $this;
    }
    /**
     * Add item to MidocoSellPassenger value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function addToMidocoSellPassenger(\Pggns\MidocoApi\Order\StructType\MidocoSellPassenger $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger) {
            throw new InvalidArgumentException(sprintf('The MidocoSellPassenger property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoSellPassenger, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSellPassenger[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoTouchedVatCode value
     * @return \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType[]
     */
    public function getMidocoTouchedVatCode(): ?array
    {
        return $this->MidocoTouchedVatCode;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoTouchedVatCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTouchedVatCode method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTouchedVatCodeForArrayConstraintFromSetMidocoTouchedVatCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoDocumentitem4PrintingMidocoTouchedVatCodeItem) {
            // validation for constraint: itemType
            if (!$midocoDocumentitem4PrintingMidocoTouchedVatCodeItem instanceof \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType) {
                $invalidValues[] = is_object($midocoDocumentitem4PrintingMidocoTouchedVatCodeItem) ? get_class($midocoDocumentitem4PrintingMidocoTouchedVatCodeItem) : sprintf('%s(%s)', gettype($midocoDocumentitem4PrintingMidocoTouchedVatCodeItem), var_export($midocoDocumentitem4PrintingMidocoTouchedVatCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTouchedVatCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTouchedVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType[] $midocoTouchedVatCode
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setMidocoTouchedVatCode(?array $midocoTouchedVatCode = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTouchedVatCodeArrayErrorMessage = self::validateMidocoTouchedVatCodeForArrayConstraintFromSetMidocoTouchedVatCode($midocoTouchedVatCode))) {
            throw new InvalidArgumentException($midocoTouchedVatCodeArrayErrorMessage, __LINE__);
        }
        $this->MidocoTouchedVatCode = $midocoTouchedVatCode;
        
        return $this;
    }
    /**
     * Add item to MidocoTouchedVatCode value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function addToMidocoTouchedVatCode(\Pggns\MidocoApi\Order\StructType\TouchedVatCodeType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType) {
            throw new InvalidArgumentException(sprintf('The MidocoTouchedVatCode property can only contain items of type \Pggns\MidocoApi\Order\StructType\TouchedVatCodeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTouchedVatCode[] = $item;
        
        return $this;
    }
    /**
     * Get buyCurrencyRate value
     * @return float|null
     */
    public function getBuyCurrencyRate(): ?float
    {
        return $this->buyCurrencyRate;
    }
    /**
     * Set buyCurrencyRate value
     * @param float $buyCurrencyRate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentitem4Printing
     */
    public function setBuyCurrencyRate(?float $buyCurrencyRate = null): self
    {
        // validation for constraint: float
        if (!is_null($buyCurrencyRate) && !(is_float($buyCurrencyRate) || is_numeric($buyCurrencyRate))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($buyCurrencyRate, true), gettype($buyCurrencyRate)), __LINE__);
        }
        $this->buyCurrencyRate = $buyCurrencyRate;
        
        return $this;
    }
}
