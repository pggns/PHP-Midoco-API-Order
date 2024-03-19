<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoOrderRecapMessageResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoOrderRecapMessageResponse extends AbstractStructBase
{
    /**
     * The recapMessage
     * @var string|null
     */
    protected ?string $recapMessage = null;
    /**
     * Constructor method for GetMidocoOrderRecapMessageResponse
     * @uses GetMidocoOrderRecapMessageResponse::setRecapMessage()
     * @param string $recapMessage
     */
    public function __construct(?string $recapMessage = null)
    {
        $this
            ->setRecapMessage($recapMessage);
    }
    /**
     * Get recapMessage value
     * @return string|null
     */
    public function getRecapMessage(): ?string
    {
        return $this->recapMessage;
    }
    /**
     * Set recapMessage value
     * @param string $recapMessage
     * @return \Pggns\MidocoApi\Order\StructType\GetMidocoOrderRecapMessageResponse
     */
    public function setRecapMessage(?string $recapMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($recapMessage) && !is_string($recapMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recapMessage, true), gettype($recapMessage)), __LINE__);
        }
        $this->recapMessage = $recapMessage;
        
        return $this;
    }
}
