<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceSunnyCarsMessageRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: imports an Sunny Cars message.
 * @subpackage Structs
 */
class AnnounceSunnyCarsMessageRequest extends AbstractStructBase
{
    /**
     * The ScarData
     * @var string|null
     */
    protected ?string $ScarData = null;
    /**
     * Constructor method for AnnounceSunnyCarsMessageRequest
     * @uses AnnounceSunnyCarsMessageRequest::setScarData()
     * @param string $scarData
     */
    public function __construct(?string $scarData = null)
    {
        $this
            ->setScarData($scarData);
    }
    /**
     * Get ScarData value
     * @return string|null
     */
    public function getScarData(): ?string
    {
        return $this->ScarData;
    }
    /**
     * Set ScarData value
     * @param string $scarData
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceSunnyCarsMessageRequest
     */
    public function setScarData(?string $scarData = null): self
    {
        // validation for constraint: string
        if (!is_null($scarData) && !is_string($scarData)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scarData, true), gettype($scarData)), __LINE__);
        }
        $this->ScarData = $scarData;
        
        return $this;
    }
}
