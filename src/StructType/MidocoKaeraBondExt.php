<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoKaeraBondExt StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoKaeraBondExt extends AbstractStructBase
{
    /**
     * The MidocoKaeraBondWithId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoKaeraBondWithId
     * @var \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId $MidocoKaeraBondWithId = null;
    /**
     * The MidocoKaeraBond
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoKaeraBond
     * @var \Pggns\MidocoApi\Order\StructType\MidocoKaeraBond|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoKaeraBond $MidocoKaeraBond = null;
    /**
     * Constructor method for MidocoKaeraBondExt
     * @uses MidocoKaeraBondExt::setMidocoKaeraBondWithId()
     * @uses MidocoKaeraBondExt::setMidocoKaeraBond()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId $midocoKaeraBondWithId
     * @param \Pggns\MidocoApi\Order\StructType\MidocoKaeraBond $midocoKaeraBond
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId $midocoKaeraBondWithId = null, ?\Pggns\MidocoApi\Order\StructType\MidocoKaeraBond $midocoKaeraBond = null)
    {
        $this
            ->setMidocoKaeraBondWithId($midocoKaeraBondWithId)
            ->setMidocoKaeraBond($midocoKaeraBond);
    }
    /**
     * Get MidocoKaeraBondWithId value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId|null
     */
    public function getMidocoKaeraBondWithId(): ?\Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId
    {
        return $this->MidocoKaeraBondWithId;
    }
    /**
     * Set MidocoKaeraBondWithId value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId $midocoKaeraBondWithId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondExt
     */
    public function setMidocoKaeraBondWithId(?\Pggns\MidocoApi\Order\StructType\MidocoKaeraBondWithId $midocoKaeraBondWithId = null): self
    {
        $this->MidocoKaeraBondWithId = $midocoKaeraBondWithId;
        
        return $this;
    }
    /**
     * Get MidocoKaeraBond value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBond|null
     */
    public function getMidocoKaeraBond(): ?\Pggns\MidocoApi\Order\StructType\MidocoKaeraBond
    {
        return $this->MidocoKaeraBond;
    }
    /**
     * Set MidocoKaeraBond value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoKaeraBond $midocoKaeraBond
     * @return \Pggns\MidocoApi\Order\StructType\MidocoKaeraBondExt
     */
    public function setMidocoKaeraBond(?\Pggns\MidocoApi\Order\StructType\MidocoKaeraBond $midocoKaeraBond = null): self
    {
        $this->MidocoKaeraBond = $midocoKaeraBond;
        
        return $this;
    }
}
