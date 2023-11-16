<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckUserAccessForOrgunitResponse StructType
 * @subpackage Structs
 */
class CheckUserAccessForOrgunitResponse extends AbstractStructBase
{
    /**
     * The hasAccess
     * @var bool|null
     */
    protected ?bool $hasAccess = null;
    /**
     * Constructor method for CheckUserAccessForOrgunitResponse
     * @uses CheckUserAccessForOrgunitResponse::setHasAccess()
     * @param bool $hasAccess
     */
    public function __construct(?bool $hasAccess = null)
    {
        $this
            ->setHasAccess($hasAccess);
    }
    /**
     * Get hasAccess value
     * @return bool|null
     */
    public function getHasAccess(): ?bool
    {
        return $this->hasAccess;
    }
    /**
     * Set hasAccess value
     * @param bool $hasAccess
     * @return \Pggns\MidocoApi\Order\StructType\CheckUserAccessForOrgunitResponse
     */
    public function setHasAccess(?bool $hasAccess = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasAccess) && !is_bool($hasAccess)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasAccess, true), gettype($hasAccess)), __LINE__);
        }
        $this->hasAccess = $hasAccess;
        
        return $this;
    }
}
