<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PseudoRBCsvExportResponse StructType
 * @subpackage Structs
 */
class PseudoRBCsvExportResponse extends AbstractStructBase
{
    /**
     * The zippedCsvContent
     * @var string|null
     */
    protected ?string $zippedCsvContent = null;
    /**
     * The fileName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fileName = null;
    /**
     * Constructor method for PseudoRBCsvExportResponse
     * @uses PseudoRBCsvExportResponse::setZippedCsvContent()
     * @uses PseudoRBCsvExportResponse::setFileName()
     * @param string $zippedCsvContent
     * @param string $fileName
     */
    public function __construct(?string $zippedCsvContent = null, ?string $fileName = null)
    {
        $this
            ->setZippedCsvContent($zippedCsvContent)
            ->setFileName($fileName);
    }
    /**
     * Get zippedCsvContent value
     * @return string|null
     */
    public function getZippedCsvContent(): ?string
    {
        return $this->zippedCsvContent;
    }
    /**
     * Set zippedCsvContent value
     * @param string $zippedCsvContent
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRBCsvExportResponse
     */
    public function setZippedCsvContent(?string $zippedCsvContent = null): self
    {
        // validation for constraint: string
        if (!is_null($zippedCsvContent) && !is_string($zippedCsvContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zippedCsvContent, true), gettype($zippedCsvContent)), __LINE__);
        }
        $this->zippedCsvContent = $zippedCsvContent;
        
        return $this;
    }
    /**
     * Get fileName value
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \Pggns\MidocoApi\Order\StructType\PseudoRBCsvExportResponse
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;
        
        return $this;
    }
}
