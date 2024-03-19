<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDocumentItemResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: SearchDocumentItem --- returns a DocumentitemDTO which contains the given ticket
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchDocumentItemResponse extends AbstractStructBase
{
    /**
     * The MidocoDocumentItem
     * Meta information extracted from the WSDL
     * - ref: MidocoDocumentItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoDocumentItem $MidocoDocumentItem = null;
    /**
     * Constructor method for SearchDocumentItemResponse
     * @uses SearchDocumentItemResponse::setMidocoDocumentItem()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem $midocoDocumentItem
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoDocumentItem $midocoDocumentItem = null)
    {
        $this
            ->setMidocoDocumentItem($midocoDocumentItem);
    }
    /**
     * Get MidocoDocumentItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem|null
     */
    public function getMidocoDocumentItem(): ?\Pggns\MidocoApi\Order\StructType\MidocoDocumentItem
    {
        return $this->MidocoDocumentItem;
    }
    /**
     * Set MidocoDocumentItem value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoDocumentItem $midocoDocumentItem
     * @return \Pggns\MidocoApi\Order\StructType\SearchDocumentItemResponse
     */
    public function setMidocoDocumentItem(?\Pggns\MidocoApi\Order\StructType\MidocoDocumentItem $midocoDocumentItem = null): self
    {
        $this->MidocoDocumentItem = $midocoDocumentItem;
        
        return $this;
    }
}
