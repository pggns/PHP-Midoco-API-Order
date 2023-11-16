<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTotalPartialInvoiceResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTotalPartialInvoices --- return if the partial payments are allowed
 * @subpackage Structs
 */
class GetTotalPartialInvoiceResponse extends AbstractStructBase
{
    /**
     * The totalPartialInvoiceAmount
     * @var float|null
     */
    protected ?float $totalPartialInvoiceAmount = null;
    /**
     * Constructor method for GetTotalPartialInvoiceResponse
     * @uses GetTotalPartialInvoiceResponse::setTotalPartialInvoiceAmount()
     * @param float $totalPartialInvoiceAmount
     */
    public function __construct(?float $totalPartialInvoiceAmount = null)
    {
        $this
            ->setTotalPartialInvoiceAmount($totalPartialInvoiceAmount);
    }
    /**
     * Get totalPartialInvoiceAmount value
     * @return float|null
     */
    public function getTotalPartialInvoiceAmount(): ?float
    {
        return $this->totalPartialInvoiceAmount;
    }
    /**
     * Set totalPartialInvoiceAmount value
     * @param float $totalPartialInvoiceAmount
     * @return \Pggns\MidocoApi\Order\StructType\GetTotalPartialInvoiceResponse
     */
    public function setTotalPartialInvoiceAmount(?float $totalPartialInvoiceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalPartialInvoiceAmount) && !(is_float($totalPartialInvoiceAmount) || is_numeric($totalPartialInvoiceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalPartialInvoiceAmount, true), gettype($totalPartialInvoiceAmount)), __LINE__);
        }
        $this->totalPartialInvoiceAmount = $totalPartialInvoiceAmount;
        
        return $this;
    }
}
