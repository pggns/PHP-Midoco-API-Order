<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnouncePaymentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AnnouncePaymentResponse extends AbstractStructBase
{
    /**
     * The totalPayment
     * @var float|null
     */
    protected ?float $totalPayment = null;
    /**
     * Constructor method for AnnouncePaymentResponse
     * @uses AnnouncePaymentResponse::setTotalPayment()
     * @param float $totalPayment
     */
    public function __construct(?float $totalPayment = null)
    {
        $this
            ->setTotalPayment($totalPayment);
    }
    /**
     * Get totalPayment value
     * @return float|null
     */
    public function getTotalPayment(): ?float
    {
        return $this->totalPayment;
    }
    /**
     * Set totalPayment value
     * @param float $totalPayment
     * @return \Pggns\MidocoApi\Order\StructType\AnnouncePaymentResponse
     */
    public function setTotalPayment(?float $totalPayment = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPayment) && !(is_float($totalPayment) || is_numeric($totalPayment))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPayment, true), gettype($totalPayment)), __LINE__);
        }
        $this->totalPayment = $totalPayment;
        
        return $this;
    }
}
