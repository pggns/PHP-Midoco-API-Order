<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalRailPassengerInfos StructType
 * @subpackage Structs
 */
class AdditionalRailPassengerInfos extends AbstractStructBase
{
    /**
     * The bahncard
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bahncard = null;
    /**
     * Constructor method for AdditionalRailPassengerInfos
     * @uses AdditionalRailPassengerInfos::setBahncard()
     * @param string $bahncard
     */
    public function __construct(?string $bahncard = null)
    {
        $this
            ->setBahncard($bahncard);
    }
    /**
     * Get bahncard value
     * @return string|null
     */
    public function getBahncard(): ?string
    {
        return $this->bahncard;
    }
    /**
     * Set bahncard value
     * @param string $bahncard
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalRailPassengerInfos
     */
    public function setBahncard(?string $bahncard = null): self
    {
        // validation for constraint: string
        if (!is_null($bahncard) && !is_string($bahncard)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bahncard, true), gettype($bahncard)), __LINE__);
        }
        $this->bahncard = $bahncard;
        
        return $this;
    }
}
