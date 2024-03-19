<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MoveSellRemarkRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MoveSellRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoSellRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoSellRemark
     * @var \Pggns\MidocoApi\Order\StructType\MidocoSellRemark|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoSellRemark $MidocoSellRemark = null;
    /**
     * The direction
     * @var string|null
     */
    protected ?string $direction = null;
    /**
     * Constructor method for MoveSellRemarkRequest
     * @uses MoveSellRemarkRequest::setMidocoSellRemark()
     * @uses MoveSellRemarkRequest::setDirection()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellRemark $midocoSellRemark
     * @param string $direction
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoSellRemark $midocoSellRemark = null, ?string $direction = null)
    {
        $this
            ->setMidocoSellRemark($midocoSellRemark)
            ->setDirection($direction);
    }
    /**
     * Get MidocoSellRemark value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSellRemark|null
     */
    public function getMidocoSellRemark(): ?\Pggns\MidocoApi\Order\StructType\MidocoSellRemark
    {
        return $this->MidocoSellRemark;
    }
    /**
     * Set MidocoSellRemark value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoSellRemark $midocoSellRemark
     * @return \Pggns\MidocoApi\Order\StructType\MoveSellRemarkRequest
     */
    public function setMidocoSellRemark(?\Pggns\MidocoApi\Order\StructType\MidocoSellRemark $midocoSellRemark = null): self
    {
        $this->MidocoSellRemark = $midocoSellRemark;
        
        return $this;
    }
    /**
     * Get direction value
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->direction;
    }
    /**
     * Set direction value
     * @param string $direction
     * @return \Pggns\MidocoApi\Order\StructType\MoveSellRemarkRequest
     */
    public function setDirection(?string $direction = null): self
    {
        // validation for constraint: string
        if (!is_null($direction) && !is_string($direction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direction, true), gettype($direction)), __LINE__);
        }
        $this->direction = $direction;
        
        return $this;
    }
}
