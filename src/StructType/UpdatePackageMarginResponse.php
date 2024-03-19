<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdatePackageMarginResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdatePackageMarginResponse extends AbstractStructBase
{
    /**
     * The packageMarginId
     * @var int|null
     */
    protected ?int $packageMarginId = null;
    /**
     * Constructor method for UpdatePackageMarginResponse
     * @uses UpdatePackageMarginResponse::setPackageMarginId()
     * @param int $packageMarginId
     */
    public function __construct(?int $packageMarginId = null)
    {
        $this
            ->setPackageMarginId($packageMarginId);
    }
    /**
     * Get packageMarginId value
     * @return int|null
     */
    public function getPackageMarginId(): ?int
    {
        return $this->packageMarginId;
    }
    /**
     * Set packageMarginId value
     * @param int $packageMarginId
     * @return \Pggns\MidocoApi\Order\StructType\UpdatePackageMarginResponse
     */
    public function setPackageMarginId(?int $packageMarginId = null): self
    {
        // validation for constraint: int
        if (!is_null($packageMarginId) && !(is_int($packageMarginId) || ctype_digit($packageMarginId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($packageMarginId, true), gettype($packageMarginId)), __LINE__);
        }
        $this->packageMarginId = $packageMarginId;
        
        return $this;
    }
}
