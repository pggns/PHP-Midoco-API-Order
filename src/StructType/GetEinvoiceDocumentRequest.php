<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEinvoiceDocumentRequest StructType
 * @subpackage Structs
 */
class GetEinvoiceDocumentRequest extends AbstractStructBase
{
    /**
     * The MidocoEinvoiceDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoEinvoiceDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument $MidocoEinvoiceDocument = null;
    /**
     * The providedDateFrom
     * @var string|null
     */
    protected ?string $providedDateFrom = null;
    /**
     * The providedDateTo
     * @var string|null
     */
    protected ?string $providedDateTo = null;
    /**
     * The isProvided
     * @var bool|null
     */
    protected ?bool $isProvided = null;
    /**
     * Constructor method for GetEinvoiceDocumentRequest
     * @uses GetEinvoiceDocumentRequest::setMidocoEinvoiceDocument()
     * @uses GetEinvoiceDocumentRequest::setProvidedDateFrom()
     * @uses GetEinvoiceDocumentRequest::setProvidedDateTo()
     * @uses GetEinvoiceDocumentRequest::setIsProvided()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument $midocoEinvoiceDocument
     * @param string $providedDateFrom
     * @param string $providedDateTo
     * @param bool $isProvided
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument $midocoEinvoiceDocument = null, ?string $providedDateFrom = null, ?string $providedDateTo = null, ?bool $isProvided = null)
    {
        $this
            ->setMidocoEinvoiceDocument($midocoEinvoiceDocument)
            ->setProvidedDateFrom($providedDateFrom)
            ->setProvidedDateTo($providedDateTo)
            ->setIsProvided($isProvided);
    }
    /**
     * Get MidocoEinvoiceDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument|null
     */
    public function getMidocoEinvoiceDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument
    {
        return $this->MidocoEinvoiceDocument;
    }
    /**
     * Set MidocoEinvoiceDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument $midocoEinvoiceDocument
     * @return \Pggns\MidocoApi\Order\StructType\GetEinvoiceDocumentRequest
     */
    public function setMidocoEinvoiceDocument(?\Pggns\MidocoApi\Order\StructType\MidocoEinvoiceDocument $midocoEinvoiceDocument = null): self
    {
        $this->MidocoEinvoiceDocument = $midocoEinvoiceDocument;
        
        return $this;
    }
    /**
     * Get providedDateFrom value
     * @return string|null
     */
    public function getProvidedDateFrom(): ?string
    {
        return $this->providedDateFrom;
    }
    /**
     * Set providedDateFrom value
     * @param string $providedDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\GetEinvoiceDocumentRequest
     */
    public function setProvidedDateFrom(?string $providedDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($providedDateFrom) && !is_string($providedDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providedDateFrom, true), gettype($providedDateFrom)), __LINE__);
        }
        $this->providedDateFrom = $providedDateFrom;
        
        return $this;
    }
    /**
     * Get providedDateTo value
     * @return string|null
     */
    public function getProvidedDateTo(): ?string
    {
        return $this->providedDateTo;
    }
    /**
     * Set providedDateTo value
     * @param string $providedDateTo
     * @return \Pggns\MidocoApi\Order\StructType\GetEinvoiceDocumentRequest
     */
    public function setProvidedDateTo(?string $providedDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($providedDateTo) && !is_string($providedDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providedDateTo, true), gettype($providedDateTo)), __LINE__);
        }
        $this->providedDateTo = $providedDateTo;
        
        return $this;
    }
    /**
     * Get isProvided value
     * @return bool|null
     */
    public function getIsProvided(): ?bool
    {
        return $this->isProvided;
    }
    /**
     * Set isProvided value
     * @param bool $isProvided
     * @return \Pggns\MidocoApi\Order\StructType\GetEinvoiceDocumentRequest
     */
    public function setIsProvided(?bool $isProvided = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isProvided) && !is_bool($isProvided)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isProvided, true), gettype($isProvided)), __LINE__);
        }
        $this->isProvided = $isProvided;
        
        return $this;
    }
}
