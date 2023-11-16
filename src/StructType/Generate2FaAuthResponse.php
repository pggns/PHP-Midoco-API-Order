<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Generate2FaAuthResponse StructType
 * @subpackage Structs
 */
class Generate2FaAuthResponse extends AbstractStructBase
{
    /**
     * The qrdata
     * @var string|null
     */
    protected ?string $qrdata = null;
    /**
     * Constructor method for Generate2FaAuthResponse
     * @uses Generate2FaAuthResponse::setQrdata()
     * @param string $qrdata
     */
    public function __construct(?string $qrdata = null)
    {
        $this
            ->setQrdata($qrdata);
    }
    /**
     * Get qrdata value
     * @return string|null
     */
    public function getQrdata(): ?string
    {
        return $this->qrdata;
    }
    /**
     * Set qrdata value
     * @param string $qrdata
     * @return \Pggns\MidocoApi\Order\StructType\Generate2FaAuthResponse
     */
    public function setQrdata(?string $qrdata = null): self
    {
        // validation for constraint: string
        if (!is_null($qrdata) && !is_string($qrdata)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($qrdata, true), gettype($qrdata)), __LINE__);
        }
        $this->qrdata = $qrdata;
        
        return $this;
    }
}
