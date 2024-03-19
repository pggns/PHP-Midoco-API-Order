<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveManualItemRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveManualItemRequest extends AbstractStructBase
{
    /**
     * The MidocoManualItem
     * Meta information extracted from the WSDL
     * - ref: MidocoManualItem
     * @var \Pggns\MidocoApi\Order\StructType\ManualitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\ManualitemDTO $MidocoManualItem = null;
    /**
     * Constructor method for SaveManualItemRequest
     * @uses SaveManualItemRequest::setMidocoManualItem()
     * @param \Pggns\MidocoApi\Order\StructType\ManualitemDTO $midocoManualItem
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\ManualitemDTO $midocoManualItem = null)
    {
        $this
            ->setMidocoManualItem($midocoManualItem);
    }
    /**
     * Get MidocoManualItem value
     * @return \Pggns\MidocoApi\Order\StructType\ManualitemDTO|null
     */
    public function getMidocoManualItem(): ?\Pggns\MidocoApi\Order\StructType\ManualitemDTO
    {
        return $this->MidocoManualItem;
    }
    /**
     * Set MidocoManualItem value
     * @param \Pggns\MidocoApi\Order\StructType\ManualitemDTO $midocoManualItem
     * @return \Pggns\MidocoApi\Order\StructType\SaveManualItemRequest
     */
    public function setMidocoManualItem(?\Pggns\MidocoApi\Order\StructType\ManualitemDTO $midocoManualItem = null): self
    {
        $this->MidocoManualItem = $midocoManualItem;
        
        return $this;
    }
}
