<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoAttributeType StructType
 * @subpackage Structs
 */
class MidocoAttributeType extends AbstractStructBase
{
    /**
     * The MidocoAttributeValue
     * Meta information extracted from the WSDL
     * - ref: MidocoAttributeValue
     * @var \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoAttributeValue $MidocoAttributeValue = null;
    /**
     * Constructor method for MidocoAttributeType
     * @uses MidocoAttributeType::setMidocoAttributeValue()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue $midocoAttributeValue
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoAttributeValue $midocoAttributeValue = null)
    {
        $this
            ->setMidocoAttributeValue($midocoAttributeValue);
    }
    /**
     * Get MidocoAttributeValue value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue|null
     */
    public function getMidocoAttributeValue(): ?\Pggns\MidocoApi\Order\StructType\MidocoAttributeValue
    {
        return $this->MidocoAttributeValue;
    }
    /**
     * Set MidocoAttributeValue value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoAttributeValue $midocoAttributeValue
     * @return \Pggns\MidocoApi\Order\StructType\MidocoAttributeType
     */
    public function setMidocoAttributeValue(?\Pggns\MidocoApi\Order\StructType\MidocoAttributeValue $midocoAttributeValue = null): self
    {
        $this->MidocoAttributeValue = $midocoAttributeValue;
        
        return $this;
    }
}
