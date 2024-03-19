<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrderDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrderDocumentRequest extends AbstractStructBase
{
    /**
     * The executeOrderWorkflow
     * @var bool|null
     */
    protected ?bool $executeOrderWorkflow = null;
    /**
     * The MidocoOrderDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $MidocoOrderDocument = null;
    /**
     * The documentContent
     * @var string|null
     */
    protected ?string $documentContent = null;
    /**
     * Constructor method for SaveOrderDocumentRequest
     * @uses SaveOrderDocumentRequest::setExecuteOrderWorkflow()
     * @uses SaveOrderDocumentRequest::setMidocoOrderDocument()
     * @uses SaveOrderDocumentRequest::setDocumentContent()
     * @param bool $executeOrderWorkflow
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument
     * @param string $documentContent
     */
    public function __construct(?bool $executeOrderWorkflow = null, ?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument = null, ?string $documentContent = null)
    {
        $this
            ->setExecuteOrderWorkflow($executeOrderWorkflow)
            ->setMidocoOrderDocument($midocoOrderDocument)
            ->setDocumentContent($documentContent);
    }
    /**
     * Get executeOrderWorkflow value
     * @return bool|null
     */
    public function getExecuteOrderWorkflow(): ?bool
    {
        return $this->executeOrderWorkflow;
    }
    /**
     * Set executeOrderWorkflow value
     * @param bool $executeOrderWorkflow
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderDocumentRequest
     */
    public function setExecuteOrderWorkflow(?bool $executeOrderWorkflow = null): self
    {
        // validation for constraint: boolean
        if (!is_null($executeOrderWorkflow) && !is_bool($executeOrderWorkflow)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($executeOrderWorkflow, true), gettype($executeOrderWorkflow)), __LINE__);
        }
        $this->executeOrderWorkflow = $executeOrderWorkflow;
        
        return $this;
    }
    /**
     * Get MidocoOrderDocument value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument|null
     */
    public function getMidocoOrderDocument(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument
    {
        return $this->MidocoOrderDocument;
    }
    /**
     * Set MidocoOrderDocument value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderDocumentRequest
     */
    public function setMidocoOrderDocument(?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument = null): self
    {
        $this->MidocoOrderDocument = $midocoOrderDocument;
        
        return $this;
    }
    /**
     * Get documentContent value
     * @return string|null
     */
    public function getDocumentContent(): ?string
    {
        return $this->documentContent;
    }
    /**
     * Set documentContent value
     * @param string $documentContent
     * @return \Pggns\MidocoApi\Order\StructType\SaveOrderDocumentRequest
     */
    public function setDocumentContent(?string $documentContent = null): self
    {
        // validation for constraint: string
        if (!is_null($documentContent) && !is_string($documentContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentContent, true), gettype($documentContent)), __LINE__);
        }
        $this->documentContent = $documentContent;
        
        return $this;
    }
}
