<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSupplierEmail StructType
 * @subpackage Structs
 */
class MidocoSupplierEmail extends MidocoEmailType
{
    /**
     * The travelType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $travelType;
    /**
     * Constructor method for MidocoSupplierEmail
     * @uses MidocoSupplierEmail::setTravelType()
     * @param string $travelType
     */
    public function __construct(string $travelType)
    {
        $this
            ->setTravelType($travelType);
    }
    /**
     * Get travelType value
     * @return string
     */
    public function getTravelType(): string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoSupplierEmail
     */
    public function setTravelType(string $travelType): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
}
