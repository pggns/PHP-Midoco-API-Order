<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProcessFairplaneFlightDataResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ProcessFairplaneFlightDataResponse extends AbstractStructBase
{
    /**
     * The MidocoFlightDetail
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoFlightDetail
     * @var \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoFlightDetail $MidocoFlightDetail = null;
    /**
     * The error
     * @var string|null
     */
    protected ?string $error = null;
    /**
     * Constructor method for ProcessFairplaneFlightDataResponse
     * @uses ProcessFairplaneFlightDataResponse::setMidocoFlightDetail()
     * @uses ProcessFairplaneFlightDataResponse::setError()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail $midocoFlightDetail
     * @param string $error
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoFlightDetail $midocoFlightDetail = null, ?string $error = null)
    {
        $this
            ->setMidocoFlightDetail($midocoFlightDetail)
            ->setError($error);
    }
    /**
     * Get MidocoFlightDetail value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail|null
     */
    public function getMidocoFlightDetail(): ?\Pggns\MidocoApi\Order\StructType\MidocoFlightDetail
    {
        return $this->MidocoFlightDetail;
    }
    /**
     * Set MidocoFlightDetail value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoFlightDetail $midocoFlightDetail
     * @return \Pggns\MidocoApi\Order\StructType\ProcessFairplaneFlightDataResponse
     */
    public function setMidocoFlightDetail(?\Pggns\MidocoApi\Order\StructType\MidocoFlightDetail $midocoFlightDetail = null): self
    {
        $this->MidocoFlightDetail = $midocoFlightDetail;
        
        return $this;
    }
    /**
     * Get error value
     * @return string|null
     */
    public function getError(): ?string
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param string $error
     * @return \Pggns\MidocoApi\Order\StructType\ProcessFairplaneFlightDataResponse
     */
    public function setError(?string $error = null): self
    {
        // validation for constraint: string
        if (!is_null($error) && !is_string($error)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($error, true), gettype($error)), __LINE__);
        }
        $this->error = $error;
        
        return $this;
    }
}
