<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoInsurerAddress StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoInsurerAddress extends InsurerAddressDTO
{
    /**
     * The insurerName
     * @var string|null
     */
    protected ?string $insurerName = null;
    /**
     * Constructor method for MidocoInsurerAddress
     * @uses MidocoInsurerAddress::setInsurerName()
     * @param string $insurerName
     */
    public function __construct(?string $insurerName = null)
    {
        $this
            ->setInsurerName($insurerName);
    }
    /**
     * Get insurerName value
     * @return string|null
     */
    public function getInsurerName(): ?string
    {
        return $this->insurerName;
    }
    /**
     * Set insurerName value
     * @param string $insurerName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoInsurerAddress
     */
    public function setInsurerName(?string $insurerName = null): self
    {
        // validation for constraint: string
        if (!is_null($insurerName) && !is_string($insurerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insurerName, true), gettype($insurerName)), __LINE__);
        }
        $this->insurerName = $insurerName;
        
        return $this;
    }
}
