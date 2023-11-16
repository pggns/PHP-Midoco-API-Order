<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoItemSellingModeHistory StructType
 * @subpackage Structs
 */
class MidocoItemSellingModeHistory extends MidocoItemSellingModeType
{
    /**
     * The sellingModeDescription
     * @var string|null
     */
    protected ?string $sellingModeDescription = null;
    /**
     * Constructor method for MidocoItemSellingModeHistory
     * @uses MidocoItemSellingModeHistory::setSellingModeDescription()
     * @param string $sellingModeDescription
     */
    public function __construct(?string $sellingModeDescription = null)
    {
        $this
            ->setSellingModeDescription($sellingModeDescription);
    }
    /**
     * Get sellingModeDescription value
     * @return string|null
     */
    public function getSellingModeDescription(): ?string
    {
        return $this->sellingModeDescription;
    }
    /**
     * Set sellingModeDescription value
     * @param string $sellingModeDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoItemSellingModeHistory
     */
    public function setSellingModeDescription(?string $sellingModeDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($sellingModeDescription) && !is_string($sellingModeDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellingModeDescription, true), gettype($sellingModeDescription)), __LINE__);
        }
        $this->sellingModeDescription = $sellingModeDescription;
        
        return $this;
    }
}
