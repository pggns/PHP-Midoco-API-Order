<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExportIbizaDataRequest StructType
 * @subpackage Structs
 */
class ExportIbizaDataRequest extends AbstractStructBase
{
    /**
     * The startTravel
     * @var string|null
     */
    protected ?string $startTravel = null;
    /**
     * The endTravel
     * @var string|null
     */
    protected ?string $endTravel = null;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - documentation: Export format - allowed values are IBIZA, VERK2, KD10. Default is IBIZA
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The exportDirectory
     * Meta information extracted from the WSDL
     * - documentation: The directory where the exported files will be saved. Default is /tmp
     * @var string|null
     */
    protected ?string $exportDirectory = null;
    /**
     * The itemTypes
     * Meta information extracted from the WSDL
     * - documentation: comma separated item types. Used in IbizaExporter only
     * @var string|null
     */
    protected ?string $itemTypes = null;
    /**
     * Constructor method for ExportIbizaDataRequest
     * @uses ExportIbizaDataRequest::setStartTravel()
     * @uses ExportIbizaDataRequest::setEndTravel()
     * @uses ExportIbizaDataRequest::setFormat()
     * @uses ExportIbizaDataRequest::setExportDirectory()
     * @uses ExportIbizaDataRequest::setItemTypes()
     * @param string $startTravel
     * @param string $endTravel
     * @param string $format
     * @param string $exportDirectory
     * @param string $itemTypes
     */
    public function __construct(?string $startTravel = null, ?string $endTravel = null, ?string $format = null, ?string $exportDirectory = null, ?string $itemTypes = null)
    {
        $this
            ->setStartTravel($startTravel)
            ->setEndTravel($endTravel)
            ->setFormat($format)
            ->setExportDirectory($exportDirectory)
            ->setItemTypes($itemTypes);
    }
    /**
     * Get startTravel value
     * @return string|null
     */
    public function getStartTravel(): ?string
    {
        return $this->startTravel;
    }
    /**
     * Set startTravel value
     * @param string $startTravel
     * @return \Pggns\MidocoApi\Order\StructType\ExportIbizaDataRequest
     */
    public function setStartTravel(?string $startTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravel) && !is_string($startTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravel, true), gettype($startTravel)), __LINE__);
        }
        $this->startTravel = $startTravel;
        
        return $this;
    }
    /**
     * Get endTravel value
     * @return string|null
     */
    public function getEndTravel(): ?string
    {
        return $this->endTravel;
    }
    /**
     * Set endTravel value
     * @param string $endTravel
     * @return \Pggns\MidocoApi\Order\StructType\ExportIbizaDataRequest
     */
    public function setEndTravel(?string $endTravel = null): self
    {
        // validation for constraint: string
        if (!is_null($endTravel) && !is_string($endTravel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTravel, true), gettype($endTravel)), __LINE__);
        }
        $this->endTravel = $endTravel;
        
        return $this;
    }
    /**
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Pggns\MidocoApi\Order\StructType\ExportIbizaDataRequest
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        $this->format = $format;
        
        return $this;
    }
    /**
     * Get exportDirectory value
     * @return string|null
     */
    public function getExportDirectory(): ?string
    {
        return $this->exportDirectory;
    }
    /**
     * Set exportDirectory value
     * @param string $exportDirectory
     * @return \Pggns\MidocoApi\Order\StructType\ExportIbizaDataRequest
     */
    public function setExportDirectory(?string $exportDirectory = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDirectory) && !is_string($exportDirectory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDirectory, true), gettype($exportDirectory)), __LINE__);
        }
        $this->exportDirectory = $exportDirectory;
        
        return $this;
    }
    /**
     * Get itemTypes value
     * @return string|null
     */
    public function getItemTypes(): ?string
    {
        return $this->itemTypes;
    }
    /**
     * Set itemTypes value
     * @param string $itemTypes
     * @return \Pggns\MidocoApi\Order\StructType\ExportIbizaDataRequest
     */
    public function setItemTypes(?string $itemTypes = null): self
    {
        // validation for constraint: string
        if (!is_null($itemTypes) && !is_string($itemTypes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemTypes, true), gettype($itemTypes)), __LINE__);
        }
        $this->itemTypes = $itemTypes;
        
        return $this;
    }
}
