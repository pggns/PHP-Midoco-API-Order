<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookMidocoVoucher4KickbackResponse StructType
 * @subpackage Structs
 */
class BookMidocoVoucher4KickbackResponse extends AbstractStructBase
{
    /**
     * The booked
     * @var bool|null
     */
    protected ?bool $booked = null;
    /**
     * Constructor method for BookMidocoVoucher4KickbackResponse
     * @uses BookMidocoVoucher4KickbackResponse::setBooked()
     * @param bool $booked
     */
    public function __construct(?bool $booked = null)
    {
        $this
            ->setBooked($booked);
    }
    /**
     * Get booked value
     * @return bool|null
     */
    public function getBooked(): ?bool
    {
        return $this->booked;
    }
    /**
     * Set booked value
     * @param bool $booked
     * @return \Pggns\MidocoApi\Order\StructType\BookMidocoVoucher4KickbackResponse
     */
    public function setBooked(?bool $booked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($booked) && !is_bool($booked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($booked, true), gettype($booked)), __LINE__);
        }
        $this->booked = $booked;
        
        return $this;
    }
}
