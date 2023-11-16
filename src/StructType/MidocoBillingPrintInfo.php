<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingPrintInfo StructType
 * @subpackage Structs
 */
class MidocoBillingPrintInfo extends AbstractStructBase
{
    /**
     * The printDate
     * Meta information extracted from the WSDL
     * - base: xs:dateTime
     * - pattern: dd.MM.yyyy
     * @var string|null
     */
    protected ?string $printDate = null;
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * Constructor method for MidocoBillingPrintInfo
     * @uses MidocoBillingPrintInfo::setPrintDate()
     * @uses MidocoBillingPrintInfo::setAmount()
     * @param string $printDate
     * @param float $amount
     */
    public function __construct(?string $printDate = null, ?float $amount = null)
    {
        $this
            ->setPrintDate($printDate)
            ->setAmount($amount);
    }
    /**
     * Get printDate value
     * @return string|null
     */
    public function getPrintDate(): ?string
    {
        return $this->printDate;
    }
    /**
     * Set printDate value
     * @param string $printDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPrintInfo
     */
    public function setPrintDate(?string $printDate = null): self
    {
        // validation for constraint: string
        if (!is_null($printDate) && !is_string($printDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printDate, true), gettype($printDate)), __LINE__);
        }
        // validation for constraint: pattern(dd.MM.yyyy)
        if (!is_null($printDate) && !preg_match('/dd.MM.yyyy/', $printDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /dd.MM.yyyy/', var_export($printDate, true)), __LINE__);
        }
        $this->printDate = $printDate;
        
        return $this;
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBillingPrintInfo
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
}
