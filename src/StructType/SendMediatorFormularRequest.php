<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendMediatorFormularRequest StructType
 * @subpackage Structs
 */
class SendMediatorFormularRequest extends AbstractStructBase
{
    /**
     * The MidocoMediatorFormular
     * Meta information extracted from the WSDL
     * - ref: MidocoMediatorFormular
     * @var \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular $MidocoMediatorFormular = null;
    /**
     * The matchedOrderId
     * @var int|null
     */
    protected ?int $matchedOrderId = null;
    /**
     * Constructor method for SendMediatorFormularRequest
     * @uses SendMediatorFormularRequest::setMidocoMediatorFormular()
     * @uses SendMediatorFormularRequest::setMatchedOrderId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular $midocoMediatorFormular
     * @param int $matchedOrderId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular $midocoMediatorFormular = null, ?int $matchedOrderId = null)
    {
        $this
            ->setMidocoMediatorFormular($midocoMediatorFormular)
            ->setMatchedOrderId($matchedOrderId);
    }
    /**
     * Get MidocoMediatorFormular value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular|null
     */
    public function getMidocoMediatorFormular(): ?\Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular
    {
        return $this->MidocoMediatorFormular;
    }
    /**
     * Set MidocoMediatorFormular value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular $midocoMediatorFormular
     * @return \Pggns\MidocoApi\Order\StructType\SendMediatorFormularRequest
     */
    public function setMidocoMediatorFormular(?\Pggns\MidocoApi\Order\StructType\MidocoMediatorFormular $midocoMediatorFormular = null): self
    {
        $this->MidocoMediatorFormular = $midocoMediatorFormular;
        
        return $this;
    }
    /**
     * Get matchedOrderId value
     * @return int|null
     */
    public function getMatchedOrderId(): ?int
    {
        return $this->matchedOrderId;
    }
    /**
     * Set matchedOrderId value
     * @param int $matchedOrderId
     * @return \Pggns\MidocoApi\Order\StructType\SendMediatorFormularRequest
     */
    public function setMatchedOrderId(?int $matchedOrderId = null): self
    {
        // validation for constraint: int
        if (!is_null($matchedOrderId) && !(is_int($matchedOrderId) || ctype_digit($matchedOrderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($matchedOrderId, true), gettype($matchedOrderId)), __LINE__);
        }
        $this->matchedOrderId = $matchedOrderId;
        
        return $this;
    }
}
