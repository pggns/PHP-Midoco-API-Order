<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderDocumentsRequest StructType
 * @subpackage Structs
 */
class GetOrderDocumentsRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderDocument
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderDocument
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $MidocoOrderDocument = null;
    /**
     * The retreiveOrgunitDocs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $retreiveOrgunitDocs = null;
    /**
     * Constructor method for GetOrderDocumentsRequest
     * @uses GetOrderDocumentsRequest::setMidocoOrderDocument()
     * @uses GetOrderDocumentsRequest::setRetreiveOrgunitDocs()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument
     * @param bool $retreiveOrgunitDocs
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument = null, ?bool $retreiveOrgunitDocs = null)
    {
        $this
            ->setMidocoOrderDocument($midocoOrderDocument)
            ->setRetreiveOrgunitDocs($retreiveOrgunitDocs);
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
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderDocumentsRequest
     */
    public function setMidocoOrderDocument(?\Pggns\MidocoApi\Order\StructType\MidocoOrderDocument $midocoOrderDocument = null): self
    {
        $this->MidocoOrderDocument = $midocoOrderDocument;
        
        return $this;
    }
    /**
     * Get retreiveOrgunitDocs value
     * @return bool|null
     */
    public function getRetreiveOrgunitDocs(): ?bool
    {
        return $this->retreiveOrgunitDocs;
    }
    /**
     * Set retreiveOrgunitDocs value
     * @param bool $retreiveOrgunitDocs
     * @return \Pggns\MidocoApi\Order\StructType\GetOrderDocumentsRequest
     */
    public function setRetreiveOrgunitDocs(?bool $retreiveOrgunitDocs = null): self
    {
        // validation for constraint: boolean
        if (!is_null($retreiveOrgunitDocs) && !is_bool($retreiveOrgunitDocs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($retreiveOrgunitDocs, true), gettype($retreiveOrgunitDocs)), __LINE__);
        }
        $this->retreiveOrgunitDocs = $retreiveOrgunitDocs;
        
        return $this;
    }
}
