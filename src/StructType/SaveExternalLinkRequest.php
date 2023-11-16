<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveExternalLinkRequest StructType
 * @subpackage Structs
 */
class SaveExternalLinkRequest extends AbstractStructBase
{
    /**
     * The MidocoExternalLink
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoExternalLink
     * @var \Pggns\MidocoApi\Order\StructType\MidocoExternalLink|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoExternalLink $MidocoExternalLink = null;
    /**
     * Constructor method for SaveExternalLinkRequest
     * @uses SaveExternalLinkRequest::setMidocoExternalLink()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoExternalLink $midocoExternalLink
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoExternalLink $midocoExternalLink = null)
    {
        $this
            ->setMidocoExternalLink($midocoExternalLink);
    }
    /**
     * Get MidocoExternalLink value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoExternalLink|null
     */
    public function getMidocoExternalLink(): ?\Pggns\MidocoApi\Order\StructType\MidocoExternalLink
    {
        return $this->MidocoExternalLink;
    }
    /**
     * Set MidocoExternalLink value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoExternalLink $midocoExternalLink
     * @return \Pggns\MidocoApi\Order\StructType\SaveExternalLinkRequest
     */
    public function setMidocoExternalLink(?\Pggns\MidocoApi\Order\StructType\MidocoExternalLink $midocoExternalLink = null): self
    {
        $this->MidocoExternalLink = $midocoExternalLink;
        
        return $this;
    }
}
