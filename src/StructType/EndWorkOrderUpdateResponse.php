<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndWorkOrderUpdateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class EndWorkOrderUpdateResponse extends AbstractStructBase
{
    /**
     * The orderVersion
     * @var int|null
     */
    protected ?int $orderVersion = null;
    /**
     * Constructor method for EndWorkOrderUpdateResponse
     * @uses EndWorkOrderUpdateResponse::setOrderVersion()
     * @param int $orderVersion
     */
    public function __construct(?int $orderVersion = null)
    {
        $this
            ->setOrderVersion($orderVersion);
    }
    /**
     * Get orderVersion value
     * @return int|null
     */
    public function getOrderVersion(): ?int
    {
        return $this->orderVersion;
    }
    /**
     * Set orderVersion value
     * @param int $orderVersion
     * @return \Pggns\MidocoApi\Order\StructType\EndWorkOrderUpdateResponse
     */
    public function setOrderVersion(?int $orderVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($orderVersion) && !(is_int($orderVersion) || ctype_digit($orderVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderVersion, true), gettype($orderVersion)), __LINE__);
        }
        $this->orderVersion = $orderVersion;
        
        return $this;
    }
}
