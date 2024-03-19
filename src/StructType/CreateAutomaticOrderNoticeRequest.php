<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAutomaticOrderNoticeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateAutomaticOrderNoticeRequest extends AbstractStructBase
{
    /**
     * The MidocoOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoOrder
     * @var \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $MidocoOrder = null;
    /**
     * The typeAttribute
     * @var bool|null
     */
    protected ?bool $typeAttribute = null;
    /**
     * Constructor method for CreateAutomaticOrderNoticeRequest
     * @uses CreateAutomaticOrderNoticeRequest::setMidocoOrder()
     * @uses CreateAutomaticOrderNoticeRequest::setTypeAttribute()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @param bool $typeAttribute
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null, ?bool $typeAttribute = null)
    {
        $this
            ->setMidocoOrder($midocoOrder)
            ->setTypeAttribute($typeAttribute);
    }
    /**
     * Get MidocoOrder value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoOrderType|null
     */
    public function getMidocoOrder(): ?\Pggns\MidocoApi\Order\StructType\MidocoOrderType
    {
        return $this->MidocoOrder;
    }
    /**
     * Set MidocoOrder value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder
     * @return \Pggns\MidocoApi\Order\StructType\CreateAutomaticOrderNoticeRequest
     */
    public function setMidocoOrder(?\Pggns\MidocoApi\Order\StructType\MidocoOrderType $midocoOrder = null): self
    {
        $this->MidocoOrder = $midocoOrder;
        
        return $this;
    }
    /**
     * Get typeAttribute value
     * @return bool|null
     */
    public function getTypeAttribute(): ?bool
    {
        return $this->typeAttribute;
    }
    /**
     * Set typeAttribute value
     * @param bool $typeAttribute
     * @return \Pggns\MidocoApi\Order\StructType\CreateAutomaticOrderNoticeRequest
     */
    public function setTypeAttribute(?bool $typeAttribute = null): self
    {
        // validation for constraint: boolean
        if (!is_null($typeAttribute) && !is_bool($typeAttribute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($typeAttribute, true), gettype($typeAttribute)), __LINE__);
        }
        $this->typeAttribute = $typeAttribute;
        
        return $this;
    }
}
