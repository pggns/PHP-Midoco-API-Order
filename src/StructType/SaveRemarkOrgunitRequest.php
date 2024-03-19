<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRemarkOrgunitRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRemarkOrgunitRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkOrgunit
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkOrgunit
     * @var \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $MidocoRemarkOrgunit = null;
    /**
     * The lastOrgunit
     * @var string|null
     */
    protected ?string $lastOrgunit = null;
    /**
     * Constructor method for SaveRemarkOrgunitRequest
     * @uses SaveRemarkOrgunitRequest::setMidocoRemarkOrgunit()
     * @uses SaveRemarkOrgunitRequest::setLastOrgunit()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit
     * @param string $lastOrgunit
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit = null, ?string $lastOrgunit = null)
    {
        $this
            ->setMidocoRemarkOrgunit($midocoRemarkOrgunit)
            ->setLastOrgunit($lastOrgunit);
    }
    /**
     * Get MidocoRemarkOrgunit value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit|null
     */
    public function getMidocoRemarkOrgunit(): ?\Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit
    {
        return $this->MidocoRemarkOrgunit;
    }
    /**
     * Set MidocoRemarkOrgunit value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\SaveRemarkOrgunitRequest
     */
    public function setMidocoRemarkOrgunit(?\Pggns\MidocoApi\Order\StructType\MidocoRemarkOrgunit $midocoRemarkOrgunit = null): self
    {
        $this->MidocoRemarkOrgunit = $midocoRemarkOrgunit;
        
        return $this;
    }
    /**
     * Get lastOrgunit value
     * @return string|null
     */
    public function getLastOrgunit(): ?string
    {
        return $this->lastOrgunit;
    }
    /**
     * Set lastOrgunit value
     * @param string $lastOrgunit
     * @return \Pggns\MidocoApi\Order\StructType\SaveRemarkOrgunitRequest
     */
    public function setLastOrgunit(?string $lastOrgunit = null): self
    {
        // validation for constraint: string
        if (!is_null($lastOrgunit) && !is_string($lastOrgunit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastOrgunit, true), gettype($lastOrgunit)), __LINE__);
        }
        $this->lastOrgunit = $lastOrgunit;
        
        return $this;
    }
}
