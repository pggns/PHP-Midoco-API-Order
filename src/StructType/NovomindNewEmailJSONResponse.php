<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NovomindNewEmailJSONResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class NovomindNewEmailJSONResponse extends AbstractStructBase
{
    /**
     * The json
     * @var string|null
     */
    protected ?string $json = null;
    /**
     * Constructor method for NovomindNewEmailJSONResponse
     * @uses NovomindNewEmailJSONResponse::setJson()
     * @param string $json
     */
    public function __construct(?string $json = null)
    {
        $this
            ->setJson($json);
    }
    /**
     * Get json value
     * @return string|null
     */
    public function getJson(): ?string
    {
        return $this->json;
    }
    /**
     * Set json value
     * @param string $json
     * @return \Pggns\MidocoApi\Order\StructType\NovomindNewEmailJSONResponse
     */
    public function setJson(?string $json = null): self
    {
        // validation for constraint: string
        if (!is_null($json) && !is_string($json)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($json, true), gettype($json)), __LINE__);
        }
        $this->json = $json;
        
        return $this;
    }
}
