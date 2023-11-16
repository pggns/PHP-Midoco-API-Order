<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintBillingDocumentRequest StructType
 * @subpackage Structs
 */
class PrintBillingDocumentRequest extends AbstractStructBase
{
    /**
     * The internalVersion
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $internalVersion;
    /**
     * The MidocoBillingDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $MidocoBillingDocument = null;
    /**
     * Constructor method for PrintBillingDocumentRequest
     * @uses PrintBillingDocumentRequest::setInternalVersion()
     * @uses PrintBillingDocumentRequest::setMidocoBillingDocument()
     * @param int $internalVersion
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     */
    public function __construct(int $internalVersion, ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null)
    {
        $this
            ->setInternalVersion($internalVersion)
            ->setMidocoBillingDocument($midocoBillingDocument);
    }
    /**
     * Get internalVersion value
     * @return int
     */
    public function getInternalVersion(): int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\PrintBillingDocumentRequest
     */
    public function setInternalVersion(int $internalVersion): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
    /**
     * Get MidocoBillingDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument|null
     */
    public function getMidocoBillingDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument
    {
        return $this->MidocoBillingDocument;
    }
    /**
     * Set MidocoBillingDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument
     * @return \Pggns\MidocoApi\Order\StructType\PrintBillingDocumentRequest
     */
    public function setMidocoBillingDocument(?\Pggns\MidocoApi\Order\StructType\MidocoBillingDocument $midocoBillingDocument = null): self
    {
        $this->MidocoBillingDocument = $midocoBillingDocument;
        
        return $this;
    }
}
