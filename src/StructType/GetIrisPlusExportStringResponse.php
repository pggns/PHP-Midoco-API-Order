<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIrisPlusExportStringResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetIrisPlusExportStringResponse extends AbstractStructBase
{
    /**
     * The responseString
     * @var string|null
     */
    protected ?string $responseString = null;
    /**
     * Constructor method for GetIrisPlusExportStringResponse
     * @uses GetIrisPlusExportStringResponse::setResponseString()
     * @param string $responseString
     */
    public function __construct(?string $responseString = null)
    {
        $this
            ->setResponseString($responseString);
    }
    /**
     * Get responseString value
     * @return string|null
     */
    public function getResponseString(): ?string
    {
        return $this->responseString;
    }
    /**
     * Set responseString value
     * @param string $responseString
     * @return \Pggns\MidocoApi\Order\StructType\GetIrisPlusExportStringResponse
     */
    public function setResponseString(?string $responseString = null): self
    {
        // validation for constraint: string
        if (!is_null($responseString) && !is_string($responseString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseString, true), gettype($responseString)), __LINE__);
        }
        $this->responseString = $responseString;
        
        return $this;
    }
}
