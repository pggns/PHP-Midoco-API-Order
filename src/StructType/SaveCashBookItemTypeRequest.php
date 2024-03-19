<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCashBookItemTypeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveCashBookItemTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoCashBookItemType
     * Meta information extracted from the WSDL
     * - ref: MidocoCashBookItemType
     * @var \Pggns\MidocoApi\Order\StructType\MidocoCashBookItemType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoCashBookItemType $MidocoCashBookItemType = null;
    /**
     * Constructor method for SaveCashBookItemTypeRequest
     * @uses SaveCashBookItemTypeRequest::setMidocoCashBookItemType()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCashBookItemType $midocoCashBookItemType
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoCashBookItemType $midocoCashBookItemType = null)
    {
        $this
            ->setMidocoCashBookItemType($midocoCashBookItemType);
    }
    /**
     * Get MidocoCashBookItemType value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCashBookItemType|null
     */
    public function getMidocoCashBookItemType(): ?\Pggns\MidocoApi\Order\StructType\MidocoCashBookItemType
    {
        return $this->MidocoCashBookItemType;
    }
    /**
     * Set MidocoCashBookItemType value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoCashBookItemType $midocoCashBookItemType
     * @return \Pggns\MidocoApi\Order\StructType\SaveCashBookItemTypeRequest
     */
    public function setMidocoCashBookItemType(?\Pggns\MidocoApi\Order\StructType\MidocoCashBookItemType $midocoCashBookItemType = null): self
    {
        $this->MidocoCashBookItemType = $midocoCashBookItemType;
        
        return $this;
    }
}
