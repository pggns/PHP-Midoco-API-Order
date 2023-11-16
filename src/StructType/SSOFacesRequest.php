<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SSOFacesRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: relayState: travellers/faces-firmen-id
 * @subpackage Structs
 */
class SSOFacesRequest extends AbstractStructBase
{
    /**
     * The relayState
     * @var string|null
     */
    protected ?string $relayState = null;
    /**
     * Constructor method for SSOFacesRequest
     * @uses SSOFacesRequest::setRelayState()
     * @param string $relayState
     */
    public function __construct(?string $relayState = null)
    {
        $this
            ->setRelayState($relayState);
    }
    /**
     * Get relayState value
     * @return string|null
     */
    public function getRelayState(): ?string
    {
        return $this->relayState;
    }
    /**
     * Set relayState value
     * @param string $relayState
     * @return \Pggns\MidocoApi\Order\StructType\SSOFacesRequest
     */
    public function setRelayState(?string $relayState = null): self
    {
        // validation for constraint: string
        if (!is_null($relayState) && !is_string($relayState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($relayState, true), gettype($relayState)), __LINE__);
        }
        $this->relayState = $relayState;
        
        return $this;
    }
}
