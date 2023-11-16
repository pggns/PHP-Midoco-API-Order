<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDocumentItemRequest StructType
 * @subpackage Structs
 */
class SearchDocumentItemRequest extends AbstractStructBase
{
    /**
     * The MidocoDocumentItemInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentItemInfo
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDocumentItemInfoType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDocumentItemInfoType $MidocoDocumentItemInfo = null;
    /**
     * Constructor method for SearchDocumentItemRequest
     * @uses SearchDocumentItemRequest::setMidocoDocumentItemInfo()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentItemInfoType $midocoDocumentItemInfo
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoDocumentItemInfoType $midocoDocumentItemInfo = null)
    {
        $this
            ->setMidocoDocumentItemInfo($midocoDocumentItemInfo);
    }
    /**
     * Get MidocoDocumentItemInfo value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentItemInfoType|null
     */
    public function getMidocoDocumentItemInfo(): ?\Pggns\MidocoApi\Order\StructType\MidocoDocumentItemInfoType
    {
        return $this->MidocoDocumentItemInfo;
    }
    /**
     * Set MidocoDocumentItemInfo value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentItemInfoType $midocoDocumentItemInfo
     * @return \Pggns\MidocoApi\Order\StructType\SearchDocumentItemRequest
     */
    public function setMidocoDocumentItemInfo(?\Pggns\MidocoApi\Order\StructType\MidocoDocumentItemInfoType $midocoDocumentItemInfo = null): self
    {
        $this->MidocoDocumentItemInfo = $midocoDocumentItemInfo;
        
        return $this;
    }
}
