<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoReceiptPosition StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoReceiptPosition extends ReceiptPositionDTO
{
    /**
     * The generateVoucher
     * @var bool|null
     */
    protected ?bool $generateVoucher = null;
    /**
     * Constructor method for MidocoReceiptPosition
     * @uses MidocoReceiptPosition::setGenerateVoucher()
     * @param bool $generateVoucher
     */
    public function __construct(?bool $generateVoucher = null)
    {
        $this
            ->setGenerateVoucher($generateVoucher);
    }
    /**
     * Get generateVoucher value
     * @return bool|null
     */
    public function getGenerateVoucher(): ?bool
    {
        return $this->generateVoucher;
    }
    /**
     * Set generateVoucher value
     * @param bool $generateVoucher
     * @return \Pggns\MidocoApi\Order\StructType\MidocoReceiptPosition
     */
    public function setGenerateVoucher(?bool $generateVoucher = null): self
    {
        // validation for constraint: boolean
        if (!is_null($generateVoucher) && !is_bool($generateVoucher)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($generateVoucher, true), gettype($generateVoucher)), __LINE__);
        }
        $this->generateVoucher = $generateVoucher;
        
        return $this;
    }
}
