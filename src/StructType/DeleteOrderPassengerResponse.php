<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteOrderPassengerResponse StructType
 * @subpackage Structs
 */
class DeleteOrderPassengerResponse extends AbstractStructBase
{
    /**
     * The isDeleted
     * @var bool|null
     */
    protected ?bool $isDeleted = null;
    /**
     * Constructor method for DeleteOrderPassengerResponse
     * @uses DeleteOrderPassengerResponse::setIsDeleted()
     * @param bool $isDeleted
     */
    public function __construct(?bool $isDeleted = null)
    {
        $this
            ->setIsDeleted($isDeleted);
    }
    /**
     * Get isDeleted value
     * @return bool|null
     */
    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }
    /**
     * Set isDeleted value
     * @param bool $isDeleted
     * @return \Pggns\MidocoApi\Order\StructType\DeleteOrderPassengerResponse
     */
    public function setIsDeleted(?bool $isDeleted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDeleted) && !is_bool($isDeleted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeleted, true), gettype($isDeleted)), __LINE__);
        }
        $this->isDeleted = $isDeleted;
        
        return $this;
    }
}
