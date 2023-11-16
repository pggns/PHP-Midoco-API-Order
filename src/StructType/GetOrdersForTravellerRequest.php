<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdersForTravellerRequest StructType
 * @subpackage Structs
 */
class GetOrdersForTravellerRequest extends AbstractStructBase
{
    /**
     * The travellerId
     * @var int|null
     */
    protected ?int $travellerId = null;
    /**
     * Constructor method for GetOrdersForTravellerRequest
     * @uses GetOrdersForTravellerRequest::setTravellerId()
     * @param int $travellerId
     */
    public function __construct(?int $travellerId = null)
    {
        $this
            ->setTravellerId($travellerId);
    }
    /**
     * Get travellerId value
     * @return int|null
     */
    public function getTravellerId(): ?int
    {
        return $this->travellerId;
    }
    /**
     * Set travellerId value
     * @param int $travellerId
     * @return \Pggns\MidocoApi\Order\StructType\GetOrdersForTravellerRequest
     */
    public function setTravellerId(?int $travellerId = null): self
    {
        // validation for constraint: int
        if (!is_null($travellerId) && !(is_int($travellerId) || ctype_digit($travellerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travellerId, true), gettype($travellerId)), __LINE__);
        }
        $this->travellerId = $travellerId;
        
        return $this;
    }
}
