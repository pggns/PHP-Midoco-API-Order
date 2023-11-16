<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateSupplierAccessResponse StructType
 * @subpackage Structs
 */
class ValidateSupplierAccessResponse extends AbstractStructBase
{
    /**
     * The access
     * @var bool|null
     */
    protected ?bool $access = null;
    /**
     * Constructor method for ValidateSupplierAccessResponse
     * @uses ValidateSupplierAccessResponse::setAccess()
     * @param bool $access
     */
    public function __construct(?bool $access = null)
    {
        $this
            ->setAccess($access);
    }
    /**
     * Get access value
     * @return bool|null
     */
    public function getAccess(): ?bool
    {
        return $this->access;
    }
    /**
     * Set access value
     * @param bool $access
     * @return \Pggns\MidocoApi\Order\StructType\ValidateSupplierAccessResponse
     */
    public function setAccess(?bool $access = null): self
    {
        // validation for constraint: boolean
        if (!is_null($access) && !is_bool($access)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($access, true), gettype($access)), __LINE__);
        }
        $this->access = $access;
        
        return $this;
    }
}
