<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceAmaAirMessageRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: imports an Ama AIR message.
 * @subpackage Structs
 */
class AnnounceAmaAirMessageRequest extends AbstractStructBase
{
    /**
     * The AirData
     * @var string|null
     */
    protected ?string $AirData = null;
    /**
     * Constructor method for AnnounceAmaAirMessageRequest
     * @uses AnnounceAmaAirMessageRequest::setAirData()
     * @param string $airData
     */
    public function __construct(?string $airData = null)
    {
        $this
            ->setAirData($airData);
    }
    /**
     * Get AirData value
     * @return string|null
     */
    public function getAirData(): ?string
    {
        return $this->AirData;
    }
    /**
     * Set AirData value
     * @param string $airData
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceAmaAirMessageRequest
     */
    public function setAirData(?string $airData = null): self
    {
        // validation for constraint: string
        if (!is_null($airData) && !is_string($airData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($airData, true), gettype($airData)), __LINE__);
        }
        $this->AirData = $airData;
        
        return $this;
    }
}
